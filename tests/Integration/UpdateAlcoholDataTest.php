<?php

namespace Tests\Integration;

use App\Console\Commands\UpdateAlcoholData;
use App\Models\Alcohol;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class UpdateAlcoholDataTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @param $category
     * @return void
     * @dataProvider provideAlcoholCategories
     */
    public function test_it_can_scrape_entire_categories($category): void
    {
        self::markTestSkipped();

        $initResponse = Http::withHeaders(UpdateAlcoholData::COPIED_HEADERS)
            ->asForm()
            ->post(UpdateAlcoholData::SEARCH_REQ_URL, [
                'aq' => "@ec_category=Products|$category", // todo refactor to big kahunas
                'firstResult' => 0,
                'numberOfResults' => 0,
            ]);
        $expectedNumberOfRecords = min(json_decode($initResponse->body())->totalCount, 5000);

        $this->artisan("alcohol:update --category=\"Products|$category\"");
        $this->assertDatabaseCount(Alcohol::class, $expectedNumberOfRecords);
    }

    public function provideAlcoholCategories(): array
    {
        return [
            'Beer & Cider' => [Alcohol::BEER_AND_CIDER],
            'Coolers' => [Alcohol::COOLER],
            'Spirits' => [Alcohol::SPIRITS],
            'Red Wine' => [Alcohol::RED_WINE],
            'White Wine' => [Alcohol::WHITE_WINE],
            'Rose Wine' => [Alcohol::ROSE_WINE],
            'Fortified Wine' => [Alcohol::FORTIFIED_WINE],
            'Sparkling Wine' => [Alcohol::SPARKLING_WINE],
            'Champagne' => [Alcohol::CHAMPAGNE],
        ];
    }

    public function test_it_sorts_by_given_field()
    {
        $lcboAPIProducts = (new UpdateAlcoholData())->fetchDataByCategoryAndIndex('Products|Beer & Cider', 0, "@ec_price Ascending");

        $lcboAPIProducts->each(function($alcohol, $index) use ($lcboAPIProducts) {
            if($index === $lcboAPIProducts->count() - 1) {
                return;
            }
            $this->assertGreaterThanOrEqual($alcohol->getPrice(), $lcboAPIProducts[$index + 1]->getPrice());
        });
    }

    public function test_it_only_gets_values_that_i_want()
    {
        $response = Http::withHeaders(UpdateAlcoholData::COPIED_HEADERS)
            ->asForm()
            ->post(UpdateAlcoholData::SEARCH_REQ_URL, [
                'aq' => "@ec_category=Products|Beer & Cider",
                'numberOfResults' => 10,
                'firstResult' => 0,
                'fieldsToInclude' => "[\"title\", \"ec_category\", \"permanentid\"]",
            ]);

        collect($response->json()['results'])->each(function ($alcohol) {
            $this->assertArrayHasKey('title', $alcohol['raw']);
            $this->assertArrayHasKey('ec_category', $alcohol['raw']);
            $this->assertArrayHasKey('permanentid', $alcohol['raw']);
            $this->assertArrayNotHasKey('ec_price', $alcohol['raw']);
        });

    }
}
