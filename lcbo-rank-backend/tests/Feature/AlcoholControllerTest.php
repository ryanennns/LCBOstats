<?php

namespace Tests\Feature;

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

    public function test_it_can_get_all_gin()
    {
        $response = $this->get('/api/alcohol/spirits/gin')
            ->assertSuccessful();
    }

    public function test_it_can_get_all_vodka()
    {
        $response = $this->get('/api/alcohol/spirits/vodka')
            ->assertSuccessful();
    }

    public function test_it_can_get_all_tequila()
    {
        $response = $this->get('/api/alcohol/spirits/tequila')
            ->assertSuccessful();
    }

    public function test_it_can_get_all_coolers()
    {
        $response = $this->get('/api/alcohol/coolers')
            ->assertSuccessful();
    }

    public function test_it_can_get_efficient_alcohols()
    {
        $this->markTestSkipped();
    }
}
