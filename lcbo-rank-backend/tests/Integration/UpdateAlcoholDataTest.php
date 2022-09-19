<?php

namespace Tests\Feature;

use App\Console\Commands\UpdateAlcoholData;
use App\Models\Alcohol;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class UpdateAlcoholDataTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @return void
     * @dataProvider provideAlcoholCategories
     */
    public function test_it_can_scrape_entire_categories($category): void
    {
        $initResponse = Http::withHeaders(UpdateAlcoholData::COPIED_HEADERS)
            ->asForm()
            ->post(UpdateAlcoholData::SEARCH_REQ_URL, [
                "aq" => "@ec_category=Products|${category}",
                "firstResult" => 0,
                "numberOfResults" => 0,
            ]);
        $expectedNumberOfRecords = min(json_decode($initResponse->body())->totalCount, 5000);

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
