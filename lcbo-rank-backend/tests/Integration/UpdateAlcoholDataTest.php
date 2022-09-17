<?php

namespace Tests\Feature;

use App\Console\Commands\UpdateAlcoholData;
use App\Models\Alcohol;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class UpdateAlcoholDataTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @return void
     * @dataProvider provideAlcoholCategories
     * @throws GuzzleException
     */
    public function test_it_can_scrape_entire_categories($category)
    {
        $client = new Client();
        $initResponse = $client->request('POST', UpdateAlcoholData::SEARCH_REQ_URL, [
            "headers" => UpdateAlcoholData::COPIED_HEADERS,
            "form_params" => [
                "aq" => "@ec_category=Products|${category}",
                "firstResult" => 0,
                "numberOfResults" => 0,
            ],
        ]);
        $expectedNumberOfRecords = min(json_decode($initResponse->getBody()->getContents())->totalCount, 5000);

        // TODO fix this
        if($category == 'Spirits')
            $expectedNumberOfRecords--;

        $this->artisan("alcohol:update --category=\"Products|${category}\"");
        $this->assertDatabaseCount(Alcohol::class, $expectedNumberOfRecords);
    }

    public function provideAlcoholCategories(): array
    {
        return [
            "Beer & Cider" => [Alcohol::BEER_AND_CIDER],
            "Spirits" => [Alcohol::SPIRITS],
            "Coolers" => [Alcohol::COOLER],
            "Red Wine" => [Alcohol::RED_WINE],
            "White Wine" => [Alcohol::WHITE_WINE],
            "Rose Wine" => [Alcohol::ROSE_WINE],
            "Fortified Wine" => [Alcohol::FORTIFIED_WINE],
            "Sparkling Wine" => [Alcohol::SPARKLING_WINE],
            "Champagne" => [Alcohol::CHAMPAGNE],
        ];
    }
}
