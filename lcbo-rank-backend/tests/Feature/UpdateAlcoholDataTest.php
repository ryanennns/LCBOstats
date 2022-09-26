<?php

namespace Tests\Feature;

use App\Console\Commands\UpdateAlcoholData;
use App\Models\Alcohol;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Client\Request;
use Tests\Fixtures\FixtureLoader;
use Tests\TestCase;
use Illuminate\Support\Facades\Http;

class UpdateAlcoholDataTest extends TestCase
{
    use DatabaseTransactions;

    public function setUp(): void
    {
        parent::setUp();
    }

    public function test_it_creates_records_from_returned_data(): void
    {
        Http::fake([
            UpdateAlcoholData::SEARCH_REQ_URL => Http::sequence()
                ->push(FixtureLoader::loadRawFixture('empty-response'),
                    200,
                    ['content-type' => 'application/json']
                )
                ->whenEmpty(Http::response(
                    FixtureLoader::loadRawFixture('beer-response-chunk'),
                    200,
                    ['content-type' => 'application/json'])
                )
        ]);

        $this->artisan("alcohol:update --category=\"Products|Beer & Cider\"");
        $this->assertDatabaseCount('alcohols', 3);
    }

    public function test_it_creates_records_from_paginated_response(): void
    {
        Http::fake([
            UpdateAlcoholData::SEARCH_REQ_URL => Http::sequence()
                ->push(FixtureLoader::loadRawFixture('PaginatedTestFixtures\paginated-empty-response'),
                    200,
                    ['content-type' => 'application/json']
                )
                ->push(FixtureLoader::loadRawFixture('PaginatedTestFixtures\paginated-chunk-a'),
                    200,
                    ['content-type' => 'application/json']
                )
                ->push(FixtureLoader::loadRawFixture('PaginatedTestFixtures\paginated-chunk-b'),
                    200,
                    ['content-type' => 'application/json']
                )
                ->push(FixtureLoader::loadRawFixture('PaginatedTestFixtures\paginated-chunk-c'),
                    200,
                    ['content-type' => 'application/json']
                )
        ]);

        $this->artisan('alcohol:update --category="Products|Beer & Cider"');
        $this->assertDatabaseCount('alcohols', 9);
    }

    public function test_it_wont_create_records_with_blacklisted_ids(): void
    {
        Http::fake([
            UpdateAlcoholData::SEARCH_REQ_URL => Http::sequence()
                ->push(FixtureLoader::loadRawFixture('empty-response'),
                    200,
                    ['content-type' => 'application/json']
                )
                ->push(FixtureLoader::loadRawFixture('blacklisted-response-chunk'),
                    200,
                    ['content-type' => 'application/json']
                )
        ]);

        $this->artisan('alcohol:update --category="Products|Beer & Cider"');
        $this->assertDatabaseCount('alcohols', 1);
    }

    public function test_it_can_scrape_the_big_kahunas(): void
    {
        Http::fake([
            UpdateAlcoholData::SEARCH_REQ_URL => Http::sequence()
                ->whenEmpty(Http::response(
                    FixtureLoader::loadRawFixture('beer-response-chunk'),
                    200,
                    ['content-type' => 'application/json'])
                )
        ]);

        $this->artisan('alcohol:update --category="THE BIG KAHUNAS"');
        collect(Alcohol::THE_BIG_KAHUNAS)->each(function ($category) {
            Http::assertSent(function (Request $request) use ($category) {
                return $request['aq'] == "@ec_category=$category";
            });
        });
    }

    public function test_it_doesnt_update_updated_at_timestamp_if_data_hasnt_changed()
    {
        // this is ok because:
        //  --> the init empty response that the artisan command expects is only used for totalCount
        //  --> the data is not changing in this test,
        // thus we can repeatedly send the same file for all init and content requests
        Http::fake([
            UpdateAlcoholData::SEARCH_REQ_URL => Http::sequence()
                ->whenEmpty(Http::response(
                    FixtureLoader::loadRawFixture('UpdatedResponseTextFixtures/updated-response-fixture-a'),
                    200,
                    ['content-type' => 'application/json'])
                )
        ]);

        $this->artisan('alcohol:update --category="Products|Beer & Cider"');

        $updated_at = Alcohol::query()->get()->pluck('updated_at')->first();

        Carbon::setTestNow(Carbon::now()->addHour());

        $this->artisan('alcohol:update --category="Products|Beer & Cider"');

        $this->assertDatabaseCount('alcohols', 3);
        Alcohol::query()->get()->each(function ($alcohol) use ($updated_at) {
            $this->assertEquals($alcohol->updated_at, $updated_at);
        });
    }

    public function test_it_updates_updated_at_timestamp_when_data_changes()
    {
        $idOfUpdatedRecords = FixtureLoader::loadFixture('UpdatedResponseTextFixtures/updated-response-fixture-b')
            ->results[0]
            ->raw
            ->permanentid;

        // This structure is necessary for most tests that call the artisan command twice.
        Http::fake([
            UpdateAlcoholData::SEARCH_REQ_URL => Http::sequence()
                ->push(FixtureLoader::loadRawFixture('empty-response'),
                    200,
                    ['content-type' => 'application/json']
                )
                ->push(
                    FixtureLoader::loadRawFixture('UpdatedResponseTextFixtures/updated-response-fixture-a'),
                    200,
                    ['content-type' => 'application/json']
                )
                ->push(FixtureLoader::loadRawFixture('empty-response'),
                    200,
                    ['content-type' => 'application/json']
                )
                ->push(
                    FixtureLoader::loadRawFixture('UpdatedResponseTextFixtures/updated-response-fixture-b'),
                    200,
                    ['content-type' => 'application/json']
                )
                ->whenEmpty(Http::response())
        ]);

        $this->artisan('alcohol:update --category="Products|Beer & Cider"');
        $updated_at = Alcohol::query()->get()->pluck('updated_at')->first();

        Carbon::setTestNow(Carbon::now()->addHour());

        $this->artisan('alcohol:update --category="Products|Beer & Cider"');

        $this->assertDatabaseCount('alcohols', 3);

        $updatedAlcohol = Alcohol::query()
            ->where('permanent_id', '=', $idOfUpdatedRecords)
            ->first();
        $this->assertNotEquals(
            $updated_at->toDateTimeString(),
            $updatedAlcohol->updated_at->toDateTimeString()
        );
    }

    public function test_it_updates_alcohols_when_data_changes()
    {
        $initTitle = FixtureLoader::loadFixture('UpdatedResponseTextFixtures/updated-response-fixture-a')
            ->results[0]
            ->raw
            ->title;

        $changedTitle = FixtureLoader::loadFixture('UpdatedResponseTextFixtures/updated-response-fixture-b')
            ->results[0]
            ->raw
            ->title;

        $idOfUpdatedRecords = FixtureLoader::loadFixture('UpdatedResponseTextFixtures/updated-response-fixture-b')
            ->results[0]
            ->raw
            ->permanentid;

        // This structure is necessary for any tests that call the artisan command twice.
        Http::fake([
            UpdateAlcoholData::SEARCH_REQ_URL => Http::sequence()
                ->push(FixtureLoader::loadRawFixture('empty-response'),
                    200,
                    ['content-type' => 'application/json']
                )
                ->push(
                    FixtureLoader::loadRawFixture('UpdatedResponseTextFixtures/updated-response-fixture-a'),
                    200,
                    ['content-type' => 'application/json']
                )
                ->push(FixtureLoader::loadRawFixture('empty-response'),
                    200,
                    ['content-type' => 'application/json']
                )
                ->push(
                    FixtureLoader::loadRawFixture('UpdatedResponseTextFixtures/updated-response-fixture-b'),
                    200,
                    ['content-type' => 'application/json']
                )
                ->whenEmpty(Http::response())
        ]);

        $this->artisan('alcohol:update --category="Products|Beer & Cider"');

        $this->assertEquals(
            trim($initTitle),
            Alcohol::query()
                ->where('permanent_id', '=', $idOfUpdatedRecords)
                ->get()
                ->pluck('title')
                ->first()
        );

        $this->artisan('alcohol:update --category="Products|Beer & Cider"');

        $this->assertDatabaseCount('alcohols', 3);
        $this->assertEquals(
            $changedTitle,
            Alcohol::query()
                ->where('permanent_id', '=', $idOfUpdatedRecords)
                ->get()
                ->pluck('title')
                ->first()
        );
    }

    public function test_it_wont_insert_promotions()
    {
        Http::fake([
            UpdateAlcoholData::SEARCH_REQ_URL => Http::sequence()
                ->push(FixtureLoader::loadRawFixture('empty-response'),
                    200,
                    ['content-type' => 'application/json']
                )
                ->push(
                    FixtureLoader::loadRawFixture('promotion-response-chunk'),
                    200,
                    ['content-type' => 'application/json']
                )
                ->whenEmpty(Http::response())
        ]);

        $this->artisan('alcohol:update --category="Products|Beer & Cider"');

        $this->assertDatabaseCount('alcohols', 2);
    }
}
