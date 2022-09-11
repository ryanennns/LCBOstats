<?php

namespace App\Console\Commands;

use App\Models\Alcohol;
use Database\Factories\AlcoholFactory;
use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use stdClass;

class UpdateAlcoholData extends Command
{
    private const SEARCH_REQ_URL = 'https://platform.cloud.coveo.com/rest/search/v2?organizationId=lcboproductionx2kwygnc';
    private const AUTH_TOKEN = 'Bearer xx883b5583-07fb-416b-874b-77cce565d927';
    private const COPIED_HEADERS = [
        "accept" => "*/*",
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

    protected $signature = 'alcohol:update {--category=Wine} {--count=1}';
    protected $description = 'Updates the database with the latest information from the LCBO\'s API.';

    public function handle(): void
    {
        $client = new Client();
        $response = $client->request('POST', self::SEARCH_REQ_URL, [
            "headers" => self::COPIED_HEADERS,
            "form_params" => [
                "aq" => "@ec_category==\"" . $this->option('category') . "\"",
                "numberOfResults" => $this->option('count'),
                "firstResult" => 0,
            ],
        ]);
        $alcoholsReturned = collect(json_decode($response->getBody()->getContents())->results);
        $alcoholsReturned->each(function ($alcohol) {
            $alcohol = $alcohol->raw;
            Alcohol::factory()->create($this->getProperties($alcohol));
        });
    }

    // headaches ! :)
    public function getProperties(stdClass $alcohol): array
    {
        $title              = trim($alcohol->title);
        $brand              = $alcohol->ec_brand ?? null;
        $category           = isset($alcohol->ec_category_filter) ? explode("|", $alcohol->ec_category_filter[0])[1] : "";
        $subcategory        = explode("|", $alcohol->ec_category_filter[0])[2];
        $price              = $alcohol->ec_price ?? -1;
        $volume             = $alcohol->lcbo_total_volume ?? $alcohol->lcbo_unit_volume ?? 0;
        $alcohol_content    = $alcohol->lcbo_alcohol_percent ?? 0.0;
        $price_index        = 0.0;
        $country            = $alcohol->country_of_manufacture ?? '';
        $url                = $alcohol->sysuri;
        $thumbnail_url      = $alcohol->ec_thumbnails;
        $image_url          = str_replace('319.319', '1280.1280', $alcohol->ec_thumbnails);
        $out_of_stock       = $alcohol->out_of_stock;
        $description        = isset($alcohol->ec_shortdesc) ? trim($alcohol->ec_shortdesc) : '';
        $rating             = $alcohol->ec_rating ?? 0.0;
        $reviews            = $alcohol->avg_reviews ?? 0;
        $permanent_id       = $alcohol->permanentid;

        return [
            'title'             => $title,
            'brand'             => $brand,
            'category'          => $category,
            'subcategory'       => $subcategory,
            'price'             => $price,
            'volume'            => $volume,
            'alcohol_content'   => $alcohol_content,
            'price_index'       => $price_index,
            'country'           => $country,
            'url'               => $url,
            'thumbnail_url'     => $thumbnail_url,
            'image_url'         => $image_url,
            'out_of_stock'      => $out_of_stock,
            'description'       => $description,
            'rating'            => $rating,
            'reviews'           => $reviews,
            'permanent_id'      => $permanent_id,
        ];
    }
}
