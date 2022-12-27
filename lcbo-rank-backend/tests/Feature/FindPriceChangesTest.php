<?php

namespace Tests\Feature;

use App\Models\Alcohol;
use App\Models\PriceChange;
use Tests\TestCase;

class FindPriceChangesTest extends TestCase
{
    public function test_it_finds_init_price_changes()
    {
        $alcoholId = 1;
        $initPrice = 6.90;
        Alcohol::query()->upsert(Alcohol::factory()->raw([
            'permanent_id' => $alcoholId,
            'price' => $initPrice,
        ]), ['permanent_id']);

        $this->artisan('price-change:find');

        $this->assertDatabaseHas('price_changes', [
            'permanent_id' => $alcoholId,
            'price' => $initPrice,
        ]);
    }

    public function test_it_finds_price_changes()
    {
        $alcoholId = 1;
        $initPrice = 6.90;
        $updatePrice = 3.50;

        Alcohol::query()->upsert(Alcohol::factory()->raw([ // first upsert simulates initial creation of a record
            'permanent_id' => $alcoholId,
            'price' => $initPrice,
        ]), ['permanent_id']);

        $this->artisan('price-change:find'); // command is run, creates first price change record

        Alcohol::query()->upsert(Alcohol::factory()->raw([ // second upset simulates updating of an existing record
            'permanent_id' => $alcoholId,
            'price' => $updatePrice,
        ]), ['permanent_id']);

        $this->artisan('price-change:find'); // command is run, finds a changed  price

        $this->assertDatabaseCount('price_changes', 2); // command should have logged the init and update
        $this->assertDatabaseHas('price_changes', [
            'permanent_id' => $alcoholId,
            'price' => $initPrice, // todo jacob pls justify this bigint awfulness
        ]);
        $this->assertDatabaseHas('price_changes', [
            'permanent_id' => $alcoholId,
            'price' => $updatePrice,
        ]);
    }

    public function test_it_doesnt_log_observer_init_price_changes()
    {
        $permanentId = 1;
        Alcohol::factory()->create([
            'permanent_id' => $permanentId,
            'price' => 3.50,
        ]);

        $this->assertDatabaseCount('price_changes', 1);
        $this->assertDatabaseHas('price_changes', [
            'permanent_id' => $permanentId,
        ]);

        $this->artisan('price-change:find');

        $this->assertDatabaseCount('price_changes', 1);
        $this->assertDatabaseHas('price_changes', [
            'permanent_id' => $permanentId,
        ]);
    }

    public function test_it_doesnt_trample_its_own_init() // todo  what?
    {
        $alcoholId = 1;
        $initPrice = 6.90;

        Alcohol::query()->upsert(Alcohol::factory()->raw([ // first upsert simulates initial creation of a record
            'permanent_id' => $alcoholId,
            'price' => $initPrice,
        ]), ['permanent_id']);

        $this->artisan('price-change:find');

        $this->assertDatabaseCount('price_changes', 1);

        $this->artisan('price-change:find');

        $this->assertDatabaseCount('price_changes', 1);

        $this->artisan('price-change:find');

        $this->assertDatabaseCount('price_changes', 1);
    }

    public function test_it_detects_if_price_hasnt_changed()
    {
        $alc = Alcohol::factory()->create([
            'price' => 3.95,
        ]);

        $this->artisan('price-change:find');
        $this->assertDatabaseCount('price_changes', 1);
        $this->artisan('price-change:find');
        $this->assertDatabaseCount('price_changes', 1);
        $this->artisan('price-change:find');
        $this->assertDatabaseCount('price_changes', 1);
    }
}
