<?php

namespace Tests\Feature;

use App\Models\Alcohol;
use Tests\TestCase;

class AlcoholTest extends TestCase
{
    public function test_it_can_get_its_latest_price_change()
    {
        $this->withoutExceptionHandling();
        $newestPrice = 69;
        $alc = $this->createAlcoholWithPriceChanges(9.0, $newestPrice);
        $this->assertEquals($newestPrice, $alc->newest_price_change);
    }

    public function test_it_can_get_its_oldest_price()
    {
        $oldestPrice = 10;
        $alc = $this->createAlcoholWithPriceChanges($oldestPrice);
        $this->assertEquals($oldestPrice, $alc->oldest_known_price);
    }

    public function test_it_can_get_its_highest_price()
    {
        $highestPrice = 10000;
        $alc = $this->createAlcoholWithPriceChanges();
        $alc->update(['price' => $highestPrice]);

        $this->assertEquals($highestPrice, $alc->highest_price);
    }

    public function test_it_can_get_its_lowest_price()
    {
        $lowestPrice = 0.50;
        $alc = $this->createAlcoholWithPriceChanges();
        $alc->update(['price' => $lowestPrice]);

        $this->assertEquals($lowestPrice, $alc->lowest_price);
    }

    public function createAlcoholWithPriceChanges(float $initPrice = 10.00, float $latestPrice = 12.0)
    {
        $alc = Alcohol::factory()->create([
            'price' => $initPrice,
        ]);
        $alc->update(['price' => 13.50]);
        $alc->update(['price' => 12.45]);
        $alc->update(['price' => 14.25]);
        $alc->update(['price' => $latestPrice]);
        return $alc;
    }
}
