<?php

namespace Tests\Feature;

use App\Models\Alcohol;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class CoolerControllerTest extends TestCase
{
    use DatabaseTransactions;

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
}
