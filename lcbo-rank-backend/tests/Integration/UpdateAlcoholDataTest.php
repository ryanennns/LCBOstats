<?php

namespace Tests\Feature;

use App\Console\Commands\UpdateAlcoholData;
use App\Models\Alcohol;
use GuzzleHttp\Client;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class UpdateAlcoholDataTest extends TestCase
{
    use DatabaseTransactions;

    public function test_it_defaults_to_one_alcohol_with_no_count_specified(): void
    {
        $this->artisan('alcohol:update --category=Products|Coolers');
        $this->assertDatabaseCount(Alcohol::class, 1);
    }

    /**
     * @return void
     * @dataProvider provideAlcoholCategories
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function test_it_can_specify_number_of_items_to_return($category): void
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
        $totalCount = json_decode($initResponse->getBody()->getContents())->totalCount;

        $this->artisan("alcohol:update --category=\"Products|{$category}\"");
        $this->assertDatabaseCount(Alcohol::class, $totalCount);
    }

    public function provideAlcoholCategories(): array
    {
        return [
            "Beer & Cider" => [Alcohol::BEER],
            "Spirits" => [Alcohol::SPIRITS],
            "Coolers" => [Alcohol::COOLER],
        ];
    }

    /**
     * @return void
     * @dataProvider provideTruncatedValueStrings
     */
    public function test_it_can_properly_calculate_truncated_values($truncatedValue, $expectedResult)
    {
        self::assertEquals($expectedResult, UpdateAlcoholData::truncatedVolumeToInteger($truncatedValue));
    }

    public function provideTruncatedValueStrings(): array
    {
        return [
            '12 x 355' => ['12 x 355', 4260],
            '6 x 473' => ['6 x 473', 2838],
            '8 x 750' => ['8 x 750', 6000],
            '6 x 420' => ['6 x 420', 2520],
            '69 x 42 x 12' => ['69 x 42 x 12', 34776],
        ];
    }
}
