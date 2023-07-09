<?php

namespace Tests\Feature;

use App\Models\Alcohol;
use Tests\TestCase;

class AlcoholObserverTest extends TestCase
{
    public function test_it_tracks_price_changes()
    {
        $updatePrice = 3.50;
        $alcohol = Alcohol::factory()->create([
            'permanent_id' => 1,
            'price' => 10.0,
        ]);

        $alcohol->update(['price' => $updatePrice]);

        $this->assertDatabaseHas('price_changes', [
            'permanent_id' => 1,
            'price' => $updatePrice,
        ]);
    }

    public function test_alcohols_can_reference_price_changes()
    {
        $alcohol = Alcohol::factory()->create([
            'permanent_id' => 1,
            'price' => 10,
        ]);

        $alcohol->update(['price' => 3.50]);
        $alcohol->update(['price' => 6.9]);

        $this->assertEquals(3, $alcohol->priceChanges->count());
    }

    public function test_it_creates_a_price_change_on_creation()
    {
        $alcohol = Alcohol::factory()->create([
            'permanent_id' => 1,
        ]);

        $this->assertDatabaseHas('price_changes', [
            'permanent_id' => 1,
            'price' => $alcohol->price
        ]);
    }
}
