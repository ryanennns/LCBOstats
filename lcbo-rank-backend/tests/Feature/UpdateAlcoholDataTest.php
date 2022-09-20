<?php

namespace Tests\Feature;

use App\Console\Commands\UpdateAlcoholData;
use App\Models\Alcohol;
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

        $this->artisan("alcohol:update --category=\"Products|Beer & Cider\"");
        $this->assertDatabaseCount('alcohols', 3);
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

        $this->artisan("alcohol:update --category=\"Products|Beer & Cider\"");
        $this->assertDatabaseCount('alcohols', 9);
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

        $this->artisan("alcohol:update --category=\"Products|Beer & Cider\"");
        $this->assertDatabaseCount('alcohols', 1);
    }

    public function test_it_can_scrape_the_big_kahunas()
    {
        Http::fake([
            UpdateAlcoholData::SEARCH_REQ_URL => Http::sequence()
                ->push(FixtureLoader::loadRawFixture('beer-response-chunk'),
                    200,
                    ["content-type" => "application/json"]
                )
                ->whenEmpty(Http::response(
                    FixtureLoader::loadRawFixture('beer-response-chunk'),
                    200,
                    ["content-type" => "application/json"])
                )
        ]);

        $this->artisan("alcohol:update --category=\"THE BIG KAHUNAS\"");
        collect(Alcohol::THE_BIG_KAHUNAS)->each(function ($category) {
            Http::assertSent(function (Request $request) use ($category) {
                return $request['aq'] == "@ec_category=$category";
            });
        });
    }
//        Http::assertSent(fn (Request $request) => $request->url() === $apiPath && $request->method() === 'GET' && $request->hasHeaders(['Authorization' => 'Bearer '.$this->user->lms_token]));
//        for ($i = 0; $i < count($rawResult['Objects']); $i++) {
//            $this->assertInstanceOf(LmsExam::class, $lmsExams[$i]);
//            $this->assertEquals($rawResult['Objects'][$i]['QuizId'], $lmsExams[$i]->getId());
//            $this->assertEquals($rawResult['Objects'][$i]['Name'], $lmsExams[$i]->getName());
//            $this->assertEquals($rawResult['Objects'][$i]['StartDate'], $lmsExams[$i]->getStartDate());
//            $this->assertEquals($rawResult['Objects'][$i]['Password'], $lmsExams[$i]->getAccessCode());
//        }
}
