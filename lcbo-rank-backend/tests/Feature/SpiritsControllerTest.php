<?php

namespace Tests\Feature;

use App\Models\Alcohol;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class SpiritsControllerTest extends TestCase
{
    use DatabaseTransactions;

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
}
