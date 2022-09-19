<?php

namespace Tests\Feature;

use App\Console\Commands\UpdateAlcoholData;
use Illuminate\Foundation\Testing\DatabaseTransactions;
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

    public function test_it_creates_records_from_returned_data()
    {
        Http::fake([
            UpdateAlcoholData::SEARCH_REQ_URL => Http::sequence()
                ->push(FixtureLoader::loadRawFixture('empty-response'),
                    200,
                    ["content-type" => "application/json"]
                )
                ->whenEmpty(Http::response(
                    FixtureLoader::loadRawFixture('beer-response-chunk'),
                    200,
                    ["content-type" => "application/json"])
                )
        ]);

        // call our Artisan command
        $this->artisan("alcohol:update --category=\"Products|Beer & Cider\"");

        // assert that records have been inserted into the database
        $this->assertDatabaseCount('alcohols',3);
    }

    public function test_it_creates_records_from_paginated_response()
    {
        Http::fake([
            UpdateAlcoholData::SEARCH_REQ_URL => Http::sequence()
                ->push(FixtureLoader::loadRawFixture('PaginatedTestFixtures\paginated-empty-response'),
                    200,
                    ["content-type" => "application/json"]
                )
                ->push(FixtureLoader::loadRawFixture('PaginatedTestFixtures\paginated-chunk-a'),
                    200,
                    ["content-type" => "application/json"]
                )
                ->push(FixtureLoader::loadRawFixture('PaginatedTestFixtures\paginated-chunk-b'),
                    200,
                    ["content-type" => "application/json"]
                )
                ->push(FixtureLoader::loadRawFixture('PaginatedTestFixtures\paginated-chunk-c'),
                    200,
                    ["content-type" => "application/json"]
                )
        ]);

        // call our Artisan command
        $this->artisan("alcohol:update --category=\"Products|Beer & Cider\"");
        // assert that records have been inserted into the database
        $this->assertDatabaseCount('alcohols',9);
    }

    public function test_it_wont_create_records_with_blacklisted_ids()
    {
        Http::fake([
            UpdateAlcoholData::SEARCH_REQ_URL => Http::sequence()
                ->push(FixtureLoader::loadRawFixture('empty-response'),
                    200,
                    ["content-type" => "application/json"]
                )
                ->push(FixtureLoader::loadRawFixture('blacklisted-response-chunk'),
                    200,
                    ["content-type" => "application/json"]
                )
        ]);

        // call our Artisan command
        $this->artisan("alcohol:update --category=\"Products|Beer & Cider\"");
        // assert that records have been inserted into the database
//        $this->assertDatabaseMissing()
        $this->assertDatabaseCount('alcohols',1);
    }
}
