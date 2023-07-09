<?php

namespace Tests\Feature;

use App\Models\Alcohol;
use Tests\TestCase;

class AlcoholTest extends TestCase
{
    public function test_it_can_get_its_newest_price_change()
    {
        $alcohol = Alcohol::factory()->create([
            'price' => 3.95,
        ]);
        $alcohol->update(['price' => 4.45]);
        $alcohol->update(['price' => 3.95]);

        $this->assertEquals(3.95, $alcohol->newest_price_change);
    }

    public function test_it_can_get_its_oldest_price()
    {
        $alcohollc = Alcohol::factory()->create([
            'price' => 3.50,
        ]);
        $alcohollc->update(['price' => 4.45]);
        $alcohollc->update(['price' => 3.95]);
        $alcohollc->update(['price' => 4.45]);

        $this->assertEquals(3.50, $alcohollc->oldest_known_price);
    }

    public function test_it_can_get_its_highest_price()
    {
        $highestPrice = 10000;
        $alcohol = $this->createAlcoholWithPriceChanges();
        $alcohol->update(['price' => $highestPrice]);

        $this->assertEquals($highestPrice, $alcohol->highest_price);
    }

    public function test_it_can_get_its_lowest_price()
    {
        $lowestPrice = 0.50;
        $alcohol = $this->createAlcoholWithPriceChanges();
        $alcohol->update(['price' => $lowestPrice]);

        $this->assertEquals($lowestPrice, $alcohol->lowest_price);
    }

    public function createAlcoholWithPriceChanges(float $initPrice = 10.00, float $latestPrice = 12.0)
    {
        $alcohol = Alcohol::factory()->create([
            'price' => $initPrice,
        ]);
        $alcohol->update(['price' => 13.50]);
        $alcohol->update(['price' => 12.45]);
        $alcohol->update(['price' => 14.25]);
        $alcohol->update(['price' => $latestPrice]);
        return $alcohol;
    }
}
