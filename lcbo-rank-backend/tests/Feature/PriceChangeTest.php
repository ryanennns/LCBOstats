<?php

namespace Tests\Feature;

use App\Models\Alcohol;
use Tests\TestCase;

class PriceChangeTest extends TestCase
{
    public function test_all_price_changes_are_tracked()
    {
        $initPrice = 10.0;

        /** @var Alcohol $alc */
        $alc = $this->createAlcoholWithPriceChanges($initPrice); // creates alcohol with one creation, four updates -- 5 PriceChanges

        $this->assertDatabaseCount('price_changes', 5);
        $this->assertDatabaseHas('price_changes', [
            'permanent_id' => $alc->permanent_id,
            'price' => $initPrice,
        ]);

        $priceChange = 15.0;
        Alcohol::query()->upsert(Alcohol::factory()->raw([ // simulates alcohol:update -- no observer price change
            'permanent_id' => $alc->permanent_id,
            'price' => $priceChange,
        ]), ['permanent_id']);

        $this->assertDatabaseCount('price_changes', 5); // therefore we should have 5 changes still...
        $this->assertDatabaseMissing('price_changes', [ // and no PriceChange record documenting a change
            'permanent_id' => $alc->permanent_id,
            'price' => $priceChange,
        ]);
        // price-change:find is called within alcohol:update -- the above assertions hypothetically occur "within" the
        // runtime of alcohol:update. not actually, but suspend disbelief for the purposes of this test.
        $this->artisan('price-change:find');

        // now we should have a new price_change record -- so we reverse the above databaseMissing assertion, and
        // increment our expected databaseCount assertion.
        $this->assertDatabaseCount('price_changes', 6);
        $this->assertDatabaseHas('price_changes', [
            'permanent_id' => $alc->permanent_id,
            'price' => $priceChange,
        ]);

        $priceChange = 9.0;
        $alc->update(['price' => $priceChange]); // update once more for good measure

        $this->assertDatabaseCount('price_changes', 7); // change assertion as expected
        $this->assertDatabaseHas('price_changes', [
            'permanent_id' => $alc->permanent_id,
            'price' => $priceChange,
        ]);
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
