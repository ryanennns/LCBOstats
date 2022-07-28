<?php

namespace Tests\Feature;

use App\Models\Alcohol;
use Database\Factories\BeerFactory;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class AlcoholControllerTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_it_can_get_all_beers()
    {
        $beer = Alcohol::factory([
            'category' => 'Beer & Cider',
            'subcategory' => 'Lager',
            'price_index' => 0.08
        ])->count(1)->create();

        $response = $this->get('/api/alcohol/beer');
        $response
            ->assertSuccessful()
            ->assertJson(
                $beer->toArray()
            );
    }

    public function test_it_can_get_beers_by_price_index()
    {
        $middleEfficientBeer = Alcohol::factory([
            'category'=>'Beer & Cider',
            'subcategory'=>'Lager',
            'price_index' => 0.08
        ])->create();
        $leastEfficientBeer = Alcohol::factory([
            'category'=>'Beer & Cider',
            'subcategory'=>'Lager',
            'price_index' => 0.09
        ])->create();
        $mostEfficientBeer = Alcohol::factory([
            'category'=>'Beer & Cider',
            'subcategory'=>'Lager',
            'price_index' => 0.07
        ])->create();

        $response = $this->get('/api/alcohol/beer/efficient');
//        $this->assertEquals(json_decode($response->getContent())[0], 'meme');
        $response
            ->assertSuccessful();
    }

    public function test_it_can_request_all_wine()
    {
        $beer = Alcohol::factory([
            'category' => 'Wine',
            'subcategory' => 'Red Wine',
            'price_index' => 0.08
        ])->count(1)->create();

        $response = $this->get('/api/alcohol/wine');
        $response
            ->assertSuccessful()
            ->assertJson(
                $beer->toArray()
            );
    }

    public function test_it_can_request_all_spirits()
    {
        $beer = Alcohol::factory([
            'category' => 'Spirits',
            'subcategory' => 'Vodka',
            'price_index' => 0.08
        ])->count(1)->create();

        $response = $this->get('/api/alcohol/spirits');
        $response
            ->assertSuccessful()
            ->assertJson(
                $beer->toArray()
            );
    }

    public function test_it_can_get_all_gin()
    {
        $beer = Alcohol::factory([
            'category' => 'Spirits',
            'subcategory' => 'Gin',
            'price_index' => 0.08
        ])->count(1)->create();

        $response = $this->get('/api/alcohol/spirits/gin');
        $response
            ->assertSuccessful()
            ->assertJson(
                $beer->toArray()
            );
    }

    public function test_it_can_get_all_vodka()
    {
        $beer = Alcohol::factory([
            'category' => 'Spirits',
            'subcategory' => 'Vodka',
            'price_index' => 0.08
        ])->count(1)->create();

        $response = $this->get('/api/alcohol/spirits/vodka');
        $response
            ->assertSuccessful()
            ->assertJson(
                $beer->toArray()
            );
    }

    public function test_it_can_get_all_tequila()
    {
        $beer = Alcohol::factory([
            'category' => 'Spirits',
            'subcategory' => 'Tequila',
            'price_index' => 0.08
        ])->count(1)->create();

        $response = $this->get('/api/alcohol/spirits/tequila');
        $response
            ->assertSuccessful()
            ->assertJson(
                $beer->toArray()
            );
    }

    public function test_it_can_get_all_coolers()
    {
        $beer = Alcohol::factory([
            'category' => 'Coolers',
            'subcategory' => 'Flavoured',
            'price_index' => 0.08
        ])->count(1)->create();

        $response = $this->get('/api/alcohol/coolers');
        $response
            ->assertSuccessful()
            ->assertJson(
                $beer->toArray()
            );
    }

    public function test_it_can_get_efficient_alcohols()
    {
        $this->markTestSkipped();
    }
}
