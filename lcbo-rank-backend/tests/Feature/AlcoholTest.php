<?php

namespace Tests\Feature;

use App\Models\Alcohol;
use Tests\TestCase;

class AlcoholTest extends TestCase
{
    public function test_it_can_get_its_earliest_price()
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

    public function createAlcoholWithPriceChanges(float $initPrice = 10.00)
    {
        $alc = Alcohol::factory()->create([
            'price' => $initPrice,
        ]);
        $alc->update(['price' => 13.50]);
        $alc->update(['price' => 12.45]);
        $alc->update(['price' => 14.25]);
        $alc->update(['price' => 11.55]);
        return $alc;
    }
}
