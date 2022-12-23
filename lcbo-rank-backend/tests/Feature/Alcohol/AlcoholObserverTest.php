<?php

namespace Tests\Feature;

use App\Models\Alcohol;
use Tests\TestCase;

class AlcoholObserverTest extends TestCase
{
    public function test_it_tracks_price_changes()
    {
        $alc = Alcohol::factory()->create([
            'permanent_id' => 1,
            'price' => 10.0,
        ]);

        $alc->update(['price' => 3.50]);

        $this->assertDatabaseHas('price_changes', [
            'permanent_id' => 1,
            'price' => 3.50,
        ]);
    }

    public function test_alcohols_can_reference_price_changes()
    {
        $alc = Alcohol::factory()->create([
            'permanent_id' => 1,
            'price' => 10,
        ]);

        $alc->update(['price' => 3.50]);
        $alc->update(['price' => 6.9]);

        $this->assertEquals(3, $alc->priceChanges->count());
    }

    public function test_it_creates_a_price_change_on_creation()
    {
        $alc = Alcohol::factory()->create([
            'permanent_id' => 1,
        ]);

        $this->assertDatabaseHas('price_changes', [
            'permanent_id' => 1,
            'price' => $alc->price
        ]);
    }
}
