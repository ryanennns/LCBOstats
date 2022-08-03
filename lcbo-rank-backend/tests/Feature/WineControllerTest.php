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
}
