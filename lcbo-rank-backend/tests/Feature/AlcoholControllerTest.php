<?php

namespace Tests\Feature;

use App\Models\Alcohol;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class AlcoholControllerTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @dataProvider alcoholSortProvider
     */
    public function test_it_can_sort_alcohols_by_field($sortField)
    {
        // todo fix
        Alcohol::factory([
            'id' => 0,
            'price' => 2,
            'category' => 'Beer & Cider',
            'subcategory' => 'Lager',
        ])->create();
        Alcohol::factory([
            'id' => 1,
            'price' => 1,
            'category' => 'Wine',
            'subcategory' => 'Red Wine',
        ])->create();
        Alcohol::factory([
            'id' => 2,
            'price' => 3,
            'category' => 'Spirits',
            'subcategory' => 'Gin',
        ])->create();

        $response = $this->get("/api/alcohol?sortBy={$sortField}");

        // nice
        $responseArray = json_decode($response->getContent(), true);

        $response->assertSuccessful();
        $this->assertLessThan($responseArray[1]["$sortField"], $responseArray[0]["$sortField"]);
        $this->assertLessThan($responseArray[2]["$sortField"], $responseArray[1]["$sortField"]);
    }

    public function alcoholSortProvider(): array
    {
        return [
            ['sortField' => 'title'],
            ['sortField' => 'brand'],
            ['sortField' => 'category'],
            ['sortField' => 'subcategory'],
            ['sortField' => 'price'],
            ['sortField' => 'volume'],
            ['sortField' => 'alcohol_content'],
            ['sortField' => 'price_index'],
            ['sortField' => 'country'],
        ];
    }

    public function test_it_can_sort_alcohol_by_price_index()
    {
        Alcohol::factory([
            'category' => 'Beer & Cider',
            'subcategory' => 'Lager',
            'price_index' => 0.08
        ])->create();
        Alcohol::factory([
            'category' => 'Wine',
            'subcategory' => 'Red Wine',
            'price_index' => 0.09
        ])->create();
        Alcohol::factory([
            'category' => 'Spirits',
            'subcategory' => 'Gin',
            'price_index' => 0.07
        ])->create();

        $response = $this->get('/api/alcohol/efficient');
        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        $this->assertLessThan($responseJson[1]->price_index, $responseJson[0]->price_index);
        $this->assertLessThan($responseJson[2]->price_index, $responseJson[1]->price_index);
    }

    public function test_it_can_get_alcohols_by_max_price_index()
    {
        $maxPriceIndex = 0.09;
        // TODO make this reliably fail
        Alcohol::factory([
            'id' => 0,
            'price_index' => 0.079
        ])->create();
        Alcohol::factory([
            'id' => 1,
            'price_index' => 0.081
        ])->create();
        Alcohol::factory([
            'id' => 2,
            'price_index' => 0.082
        ])->create();

        $response = $this->get("/api/alcohol/efficient?maxPriceIndex={$maxPriceIndex}&order=desc");

        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertLessThan($maxPriceIndex, $res->price_index);
    }

    public function test_it_can_get_alcohols_by_min_price_index()
    {
        $minPriceIndex = 0.09;
        Alcohol::factory([
            'id' => 0,
            'price_index' => 0.079
        ])->create();
        Alcohol::factory([
            'id' => 1,
            'price_index' => 0.091
        ])->create();
        Alcohol::factory([
            'id' => 2,
            'price_index' => 0.092
        ])->create();

        $response = $this->get("/api/alcohol/efficient?minPriceIndex={$minPriceIndex}&order=desc");

        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertGreaterThan($minPriceIndex, $res->price_index);
    }

    public function test_it_can_get_alcohols_by_min_and_max_price_index()
    {
        $minPriceIndex = 0.08;
        $maxPriceIndex = 0.10;
        Alcohol::factory([
            'price_index' => 0.078
        ])->create();
        Alcohol::factory([
            'price_index' => 0.079
        ])->create();
        Alcohol::factory([
            'price_index' => 0.084
        ])->create();
        Alcohol::factory([
            'price_index' => 0.86
        ])->create();
        Alcohol::factory([
            'price_index' => 0.101
        ])->create();
        Alcohol::factory([
            'price_index' => 0.102
        ])->create();

        $responseJson = json_decode(
            $this
                ->get("/api/alcohol/efficient?minPriceIndex={$minPriceIndex}&maxPriceIndex={$maxPriceIndex}")
                ->getContent()
        );

        $this->get("/api/alcohol/efficient?minPriceIndex={$minPriceIndex}&maxPriceIndex={$maxPriceIndex}")
            ->assertSuccessful();
        foreach ($responseJson as $res) {
            $this->assertGreaterThan(
                $minPriceIndex,
                $res->price_index
            );
            $this->assertLessThan(
                $maxPriceIndex,
                $res->price_index
            );
        }
    }

    public function test_it_can_sort_alcohols_by_price_descending()
    {
        Alcohol::factory([
            'id' => 0,
            'price' => 2
        ])->create();
        Alcohol::factory([
            'id' => 1,
            'price' => 1
        ])->create();
        Alcohol::factory([
            'id' => 2,
            'price' => 3
        ])->create();

        $response = $this->get('/api/alcohol?sortBy=price&order=desc');

        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        $this->assertLessThan($responseJson[0]->price, $responseJson[1]->price);
        $this->assertLessThan($responseJson[1]->price, $responseJson[2]->price);
    }

    public function test_it_can_choose_a_number_of_results()
    {
        $numberOfResults = 69;
        Alcohol::factory(100)->create();

        $response = $this->get("/api/alcohol?numberOfResults={$numberOfResults}");

        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        $this->assertEquals($numberOfResults, count($responseJson));
    }

    public function test_it_wont_return_more_than_one_hundred_results()
    {
        Alcohol::factory(100)->create();

        $response = $this->get('/api/alcohol?numberOfResults=150');

        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        $this->assertLessThanOrEqual(100, count($responseJson));
    }
}
