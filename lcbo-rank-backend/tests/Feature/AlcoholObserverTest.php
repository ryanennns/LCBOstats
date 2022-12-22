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
            'old_price' => 10.0,
            'new_price' => 3.50,
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

        $this->assertEquals(2, $alc->priceChanges->count());
    }
}
