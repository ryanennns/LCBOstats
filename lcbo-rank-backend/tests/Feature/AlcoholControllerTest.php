<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AlcoholControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_it_can_get_all_beers()
    {
        $response = $this->get('/api/alcohol/beer');
        $response->assertSuccessful();
    }

    public function test_it_can_request_all_wine()
    {
        $response = $this->get('/api/alcohol/wine');
        $response->assertSuccessful();
    }

    public function test_it_can_request_all_spirits()
    {
        $response = $this->get('/api/alcohol/spirits');
        $response->assertSuccessful();
    }
}
