<?php

namespace App\Console\Commands;

use App\Events\PricesUpdated;
use App\LCBOApiProduct;
use App\Models\Alcohol;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Database\QueryException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use stdClass;
use Symfony\Component\Console\Helper\ProgressBar;

class UpdateAlcoholData extends Command
{
    private const AUTH_TOKEN = 'Bearer xx883b5583-07fb-416b-874b-77cce565d927';
    public const GET_IN_EACH_REQUEST = 50;
    public const SEARCH_REQ_URL = 'https://platform.cloud.coveo.com/rest/search/v2?organizationId=lcboproductionx2kwygnc';
    public const COPIED_HEADERS = [
        'accept' => '*/*',
        'User-Agent' => 'Mozilla/5.0 (platform; rv:geckoversion) Gecko/geckotrail Firefox/firefoxversion',
        'accept-language' => 'en-US,en;q=0.9',
        'authorization' => self::AUTH_TOKEN,
        'content-type' => 'application/x-www-form-urlencoded; charset=UTF-8',
        'sec-ch-ua' => '".Not/A)Brand";v="99", "Google Chrome";v="103", "Chromium";v="103"',
        'sec-ch-ua-mobile' => '?0',
        'sec-ch-ua-platform' => '"Windows"',
        'sec-fetch-dest' => 'empty',
        'sec-fetch-mode' => 'cors',
        'sec-fetch-site' => 'cross-site',
        'referrer' => 'https://www.lcbo.com/',
        'referrerPolicy' => 'strict-origin-when-cross-origin',
        'mode' => 'cors',
        'credentials' => 'include',
    ];

    protected $signature = 'alcohol:update {--category=Products}';
    protected $description = 'Updates the database with the latest information from the LCBO\'s API.';

    public function handle(): void
    {
        Log::info('Running UpdateAlcoholData', ['ooga' => 'booga']);

        $start = Carbon::now();
        $category = ($this->option('category'));
        $lowerCaseCategory = strtolower($category);


        if (!in_array($category, Alcohol::THE_BIG_KAHUNAS) &&
            $lowerCaseCategory != 'the big kahunas' &&
            $lowerCaseCategory != 'all'
        ) {
            $this->error('Invalid category!');
            return;
        }

        if ($lowerCaseCategory === 'the big kahunas' || $lowerCaseCategory === 'all') {
            $this->info('it\'s big kahuna time!');
            collect(Alcohol::THE_BIG_KAHUNAS)->each(function ($category) {
                $this->fetchAllDataForGivenCategory($category);
            });

            $this->info('Seconds elapsed: ', $start->diffInSeconds(Carbon::now()));
        } else {
            $this->fetchAllDataForGivenCategory($category);
        }

        $this->info('Finished gathering new data; dispatching PricesUpdated event.');
        PricesUpdated::dispatch();
    }

    public function getExpectedNumberOfRecords(string $category): int
    {
        $initResponse = Http::withHeaders(self::COPIED_HEADERS)
            ->asForm()
            ->post(self::SEARCH_REQ_URL, [
                'aq' => "@ec_category=$category",
                'firstResult' => 0,
                'numberOfResults' => 0,
            ]);
        return min(json_decode($initResponse->body())->totalCount, 5000);
    }

    public function fetchAllDataForGivenCategory(string $category): void
    {
        $startIndex = 0;
        $expectedNumberOfRecords = $this->getExpectedNumberOfRecords($category);

        $progressBar = $this->createProgressBar($expectedNumberOfRecords, $category);

        while ($startIndex < $expectedNumberOfRecords) {
            $alcoholsReturned = $this->fetchDataByCategoryAndIndex($category, $startIndex);
            $startIndex += $alcoholsReturned->count();

            $data = $alcoholsReturned
                ->filter(fn(LCBOApiProduct $alcohol) => !$alcohol->isAPromotion() && !$alcohol->isBlackListed())
                ->map(fn(LCBOApiProduct $alcohol) => $alcohol->toArray());

            try {
                Alcohol::query()->upsert($data->toArray(), ['permanent_id']);
            } catch (QueryException $e) {
                $this->info('An error occurred while mass inserting records. Trying again...');
                $data->each(function ($alcohol) {
                    try {
                        Alcohol::query()->updateOrCreate(['permanent_id' => $alcohol['permanent_id']], $alcohol);
                    } catch (\Exception $e) {
                        Log::error("Error inserting\nException:\n{$e->getMessage()}", $alcohol);
                    }
                });
            }

            $progressBar->advance();
        }
    }

    public function fetchDataByCategoryAndIndex(string $category, int $startIndex, string $sortBy = "@title Ascending"): Collection
    {
        $response = Http::withHeaders(self::COPIED_HEADERS)
            ->asForm()
            ->post(self::SEARCH_REQ_URL, [
                'aq' => "@ec_category=$category",
                'numberOfResults' => self::GET_IN_EACH_REQUEST,
                'firstResult' => $startIndex,
                'sortCriteria' => $sortBy,
            ]);

        return collect(json_decode($response->body())->results)
            ->pluck('raw')
            ->map(fn(stdClass $alcohol) => new LCBOApiProduct($alcohol));
    }

    public function createProgressBar(int $expectedNumberOfRecords, string $category): ProgressBar
    {
        ProgressBar::setFormatDefinition('custom', "%message% -- %memory%\n%current%/%max%\t{%bar%}\n");
        $progressBar = $this->output
            ->createProgressBar(ceil($expectedNumberOfRecords / self::GET_IN_EACH_REQUEST));
        $progressBar->setFormat('custom');
        $progressBar->setMessage($category);
        $progressBar->start();
        return $progressBar;
    }
}
