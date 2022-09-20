<?php

namespace App\Console\Commands;

use App\Models\Alcohol;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use stdClass;

class UpdateAlcoholData extends Command
{
    public const GET_IN_EACH_REQUEST = 250;
    private const AUTH_TOKEN = 'Bearer xx883b5583-07fb-416b-874b-77cce565d927';
    public const SEARCH_REQ_URL = 'https://platform.cloud.coveo.com/rest/search/v2?organizationId=lcboproductionx2kwygnc';
    public const COPIED_HEADERS = [
        "accept" => "*/*",
        "User-Agent" => "Mozilla/5.0 (platform; rv:geckoversion) Gecko/geckotrail Firefox/firefoxversion",
        "accept-language" => "en-US,en;q=0.9",
        "authorization" => self::AUTH_TOKEN,
        "content-type" => "application/x-www-form-urlencoded; charset=UTF-8",
        "sec-ch-ua" => "\".Not/A)Brand\";v=\"99\", \"Google Chrome\";v=\"103\", \"Chromium\";v=\"103\"",
        "sec-ch-ua-mobile" => "?0",
        "sec-ch-ua-platform" => "\"Windows\"",
        "sec-fetch-dest" => "empty",
        "sec-fetch-mode" => "cors",
        "sec-fetch-site" => "cross-site",
        "referrer" => "https://www.lcbo.com/",
        "referrerPolicy" => "strict-origin-when-cross-origin",
        "mode" => "cors",
        "credentials" => "include",
    ];

    protected $signature = 'alcohol:update {--category=Products}';
    protected $description = 'Updates the database with the latest information from the LCBO\'s API.';

    // todo refactor dumps to proper console out
    // todo handle exceptions (undefined stdClass::$results)
    public function handle(): void
    {
        $category = ($this->option('category'));
        $lowerCaseCategory = strtolower($category);
        if (!in_array($category, Alcohol::THE_BIG_KAHUNAS) &&
            $lowerCaseCategory != 'the big kahunas' &&
            $lowerCaseCategory != 'all'
        ) {
            dump("Invalid category!");
            return;
        }

        if ($lowerCaseCategory === 'the big kahunas' || $lowerCaseCategory === 'all') {
            dump("it's big kahuna time!");
            collect(Alcohol::THE_BIG_KAHUNAS)->each(function ($category) {
                $this->fetchDataForGivenCategory($category);
            });
        } else
            $this->fetchDataForGivenCategory($category);
    }

    // headaches ! :)
    public static function getProperties(stdClass $alcohol): array
    {
        $title = trim($alcohol->title);
        $brand = $alcohol->ec_brand ?? null;
        $category = isset($alcohol->ec_category_filter) ? explode("|", $alcohol->ec_category_filter[0])[1] : "";
        $subcategory = explode("|", $alcohol->ec_category_filter[0])[2] ?? null;
        $price = $alcohol->ec_price ?? -1;
        $volume = -1;
        // todo refactor this trash
        if (!isset($alcohol->lcbo_total_volume)) {
            if (isset($alcohol->lcbo_unit_volume)) {
                $volume = self::truncatedVolumeToInteger($alcohol->lcbo_unit_volume);
            }
        } else {
            $volume = $alcohol->lcbo_total_volume;
        }
        $alcohol_content = $alcohol->lcbo_alcohol_percent ?? 0.0;
        $price_index = self::calculatePriceIndex($price, $alcohol_content, $volume);
        $country = $alcohol->country_of_manufacture ?? '';
        $url = $alcohol->sysuri;
        $thumbnail_url = $alcohol->ec_thumbnails;
        $image_url = str_replace('319.319', '1280.1280', $alcohol->ec_thumbnails);
        $out_of_stock = ($alcohol->out_of_stock === 'true');
        $description = isset($alcohol->ec_shortdesc) ? trim($alcohol->ec_shortdesc) : '';
        $rating = $alcohol->ec_rating ?? 0.0;
        $reviews = $alcohol->avg_reviews ?? 0;
        $permanent_id = $alcohol->permanentid;

        return [
            'permanent_id' => $permanent_id,
            'title' => $title,
            'brand' => $brand,
            'category' => $category,
            'subcategory' => $subcategory,
            'price' => $price,
            'volume' => $volume,
            'alcohol_content' => $alcohol_content,
            'price_index' => $price_index,
            'country' => $country,
            'url' => $url,
            'thumbnail_url' => $thumbnail_url,
            'image_url' => $image_url,
            'out_of_stock' => $out_of_stock,
            'description' => $description,
            'rating' => $rating,
            'reviews' => $reviews,
        ];
    }

    public static function truncatedVolumeToInteger(string $truncatedValue): int
    {
        $volumes = collect(explode('x', $truncatedValue));

        if ($volumes->count() == 1)
            return $truncatedValue;

        $totalVolume = 0;
        $volumes->each(function ($volume) use (&$totalVolume, $volumes) {
            if ($volumes->first() == $volume) {
                $totalVolume = $volume;
            } else {
                $totalVolume *= $volume;
            }
        });

        return $totalVolume;
    }

    public function isAlcoholAPromotion(stdClass $alcohol): bool
    {
        collect($alcohol->ec_category)->each(function (string $categoryLayer) {
            if (str_contains('Promotion', $categoryLayer))
                return true;
        });

        return false;
    }

    public function isAlcoholBlacklisted(stdClass $alcohol): bool
    {
        if (collect(Alcohol::BLACKLISTED_IDS)->contains($alcohol->permanentid))
            return true;
        return false;
    }

    public static function calculatePriceIndex(float $price, float $alcoholContent, int $volume): ?float
    {
        if ($price == 0 || $alcoholContent == 0 || $volume == 0)
            return null;
        else
            return $price / (($alcoholContent / 100) * $volume);
    }

    public function getExpectedNumberOfRecords(string $category): int
    {
        $initResponse = Http::withHeaders(self::COPIED_HEADERS)
            ->asForm()
            ->post(self::SEARCH_REQ_URL, [
                "aq" => "@ec_category=${category}",
                "firstResult" => 0,
                "numberOfResults" => 0,
            ]);
        return min(json_decode($initResponse->body())->totalCount, 5000);
    }

    public function fetchDataForGivenCategory(string $category): void
    {
        $startIndex = 0;
        $expectedNumberOfRecords = $this->getExpectedNumberOfRecords($category);
        $recordsScraped = 0;

        while ($startIndex < $expectedNumberOfRecords) {
            $response = Http::withHeaders(self::COPIED_HEADERS)
                ->asForm()
                ->post(self::SEARCH_REQ_URL, [
                    "aq" => "@ec_category=${category}",
                    "numberOfResults" => self::GET_IN_EACH_REQUEST,
                    "firstResult" => $startIndex,
                ]);

            $alcoholsReturned = collect(json_decode($response->body())->results);
            $recordsScraped += $alcoholsReturned->count();
            $startIndex += $alcoholsReturned->count();

            if ($recordsScraped == 0) // a failsafe from the old python script
                break;

            $alcoholsReturned->each(function ($alcohol) {
                $alcohol = $alcohol->raw;

                if (!$this->isAlcoholAPromotion($alcohol) && !$this->isAlcoholBlacklisted($alcohol))
                    Alcohol::query()->updateOrCreate(
                        ['permanent_id' => $alcohol->permanentid],
                        self::getProperties($alcohol)
                    );
            });

            dump("Scraped: $recordsScraped / $expectedNumberOfRecords");
            sleep(0.5);
        }
    }
}
