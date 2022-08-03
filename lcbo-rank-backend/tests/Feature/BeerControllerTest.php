<?php

namespace Tests\Feature;

use App\Models\Alcohol;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class BeerControllerTest extends TestCase
{
    use DatabaseTransactions;

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
}
