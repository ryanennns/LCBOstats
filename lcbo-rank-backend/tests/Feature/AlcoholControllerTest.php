<?php

namespace Tests\Feature;

use App\Models\Alcohol;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class AlcoholControllerTest extends TestCase
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

    public function test_it_can_get_all_spirits()
    {
        $spirit = Alcohol::factory([
            'category' => 'Spirits',
            'subcategory' => 'Vodka',
            'price_index' => 0.08
        ])->count(1)->create();

        $response = $this->get('/api/alcohol/spirits');
        $response
            ->assertSuccessful()
            ->assertJson(
                $spirit->toArray()
            );
    }

    public function test_it_can_get_all_gin()
    {
        $gin = Alcohol::factory([
            'category' => 'Spirits',
            'subcategory' => 'Gin',
            'price_index' => 0.08
        ])->count(1)->create();

        $response = $this->get('/api/alcohol/spirits/gin');
        $response
            ->assertSuccessful()
            ->assertJson(
                $gin->toArray()
            );
    }

    public function test_it_can_get_all_vodka()
    {
        $vodka = Alcohol::factory([
            'category' => 'Spirits',
            'subcategory' => 'Vodka',
            'price_index' => 0.08
        ])->count(1)->create();

        $response = $this->get('/api/alcohol/spirits/vodka');
        $response
            ->assertSuccessful()
            ->assertJson(
                $vodka->toArray()
            );
    }

    public function test_it_can_get_all_tequila()
    {
        $tequila = Alcohol::factory([
            'category' => 'Spirits',
            'subcategory' => 'Tequila',
            'price_index' => 0.08
        ])->count(1)->create();

        $response = $this->get('/api/alcohol/spirits/tequila');
        $response
            ->assertSuccessful()
            ->assertJson(
                $tequila->toArray()
            );
    }

    public function test_it_can_get_all_coolers()
    {
        $coolers = Alcohol::factory([
            'category' => 'Coolers',
            'subcategory' => 'Flavoured',
            'price_index' => 0.08
        ])->count(1)->create();

        $response = $this->get('/api/alcohol/coolers');
        $response
            ->assertSuccessful()
            ->assertJson(
                $coolers->toArray()
            );
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

    public function test_it_can_sort_alcohols_by_price()
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

        $response = $this->get('/api/alcohol?sortBy=price');

        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        $this->assertLessThan($responseJson[1]->price, $responseJson[0]->price);
        $this->assertLessThan($responseJson[2]->price, $responseJson[1]->price);
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

    public function test_it_can_get_alcohols_by_max_price_index()
    {
        $maxPriceIndex = 0.09;
        // TODO make this reliably fail
        // also it doesn't test for what it claims it is
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
            $this->assertLessThan($maxPriceIndex,$res->price_index);
    }
    public function test_it_can_get_alcohols_by_min_price_index()
    {
        $maxPriceIndex = 0.09;
        // TODO make this reliably fail
        // also it doesn't test for what it claims it is
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

        $response = $this->get("/api/alcohol/efficient?minPriceIndex={$maxPriceIndex}&order=desc");

        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertLessThan($maxPriceIndex,$res->price_index);
    }
}
