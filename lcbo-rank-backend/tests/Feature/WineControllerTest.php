<?php

namespace Tests\Feature;

use App\Models\Alcohol;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class WineControllerTest extends TestCase
{
    use DatabaseTransactions;

    public function test_it_can_get_all_wine()
    {
        $wine = Alcohol::factory([
            'category' => 'Wine',
            'subcategory' => 'Red Wine',
            'price_index' => 0.08
        ])->count(1)->create();

        $response = $this->get('/api/alcohol/wine');
        $response
            ->assertSuccessful()
            ->assertJson(
                $wine->toArray()
            );
    }

    public function test_it_can_sort_wine_by_price_index()
    {
        Alcohol::factory([
            'category' => 'Wine',
            'subcategory' => 'Lager',
            'price_index' => 0.08
        ])->create();
        Alcohol::factory([
            'category' => 'Wine',
            'subcategory' => 'IPA',
            'price_index' => 0.09
        ])->create();
        Alcohol::factory([
            'category' => 'Wine',
            'subcategory' => 'Pale Ale',
            'price_index' => 0.07
        ])->create();

        $response = $this->get('/api/alcohol/wine/efficient');
        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        $this->assertLessThan($responseJson[1]->price_index, $responseJson[0]->price_index);
        $this->assertLessThan($responseJson[2]->price_index, $responseJson[1]->price_index);
    }

    public function test_it_can_get_wine_by_max_price_index()
    {
        $maxPriceIndex = 0.08;

        Alcohol::factory([
            'category' => 'Wine',
            'id' => 0,
            'price_index' => 0.079
        ])->create();
        Alcohol::factory([
            'category' => 'Wine',
            'id' => 1,
            'price_index' => 0.081
        ])->create();
        Alcohol::factory([
            'category' => 'Wine',
            'id' => 2,
            'price_index' => 0.082
        ])->create();

        $response = $this->get("/api/alcohol/wine/efficient?maxPriceIndex={$maxPriceIndex}&order=desc");

        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertLessThan($maxPriceIndex, $res->price_index);
    }

    public function test_it_can_get_wine_by_min_price_index()
    {
        $minPriceIndex = 0.09;
        Alcohol::factory([
            'category' => 'Wine',
            'id' => 0,
            'price_index' => 0.079
        ])->create();
        Alcohol::factory([
            'category' => 'Wine',
            'id' => 1,
            'price_index' => 0.091
        ])->create();
        Alcohol::factory([
            'category' => 'Wine',
            'id' => 2,
            'price_index' => 0.092
        ])->create();

        $response = $this->get("/api/alcohol/wine/efficient?minPriceIndex={$minPriceIndex}&order=desc");

        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertGreaterThan($minPriceIndex, $res->price_index);
    }

    public function test_it_can_get_wine_by_min_and_max_price_index()
    {
        $minPriceIndex = 0.08;
        $maxPriceIndex = 0.10;
        Alcohol::factory([
            'category' => 'Wine',
            'price_index' => 0.078
        ])->create();
        Alcohol::factory([
            'category' => 'Wine',
            'price_index' => 0.079
        ])->create();
        Alcohol::factory([
            'category' => 'Wine',
            'price_index' => 0.084
        ])->create();
        Alcohol::factory([
            'category' => 'Wine',
            'price_index' => 0.86
        ])->create();
        Alcohol::factory([
            'category' => 'Wine',
            'price_index' => 0.101
        ])->create();
        Alcohol::factory([
            'category' => 'Wine',
            'price_index' => 0.102
        ])->create();

        $response = $this->get("/api/alcohol/wine/efficient?minPriceIndex={$minPriceIndex}&maxPriceIndex={$maxPriceIndex}");

        $responseJson = json_decode(
            $response->getContent()
        );

        $response->assertSuccessful();
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
}
