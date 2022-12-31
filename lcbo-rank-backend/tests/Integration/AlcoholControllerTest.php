<?php

namespace Tests\Integration;

use App\Models\Alcohol;
use Tests\TestCase;

class AlcoholControllerTest extends TestCase
{
    protected function setUp(): void
    {
        self::markTestSkipped();
    }

    public function test_it_can_combine_search_queries_and_filters() // todo this
    {
        Alcohol::factory()->create([
            'title' => 'snickers',
            'category' => 'Wine'
        ]);

        Alcohol::factory()->create([
            'title' => 'snickers',
            'category' => 'Spirits'
        ]);

        $response = $this->get(route('api.alcohol.search', [
            'category' => 'Wine',
            'query' => 'snickers',
        ]))->assertSuccessful();

        $response->assertJsonFragment([
            'category' => 'Wine',
            'title' => 'snickers'
        ]);
    }
}
