<?php

namespace Tests\Feature;

use App\Console\Commands\UpdateAlcoholData;
use App\Events\PricesUpdated;
use App\Models\Alcohol;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Http;
use Laravel\Sanctum\Sanctum;
use Tests\Fixtures\FixtureLoader;
use Tests\TestCase;

class snickerstest extends TestCase
{
    use DatabaseTransactions;

    public function test_it_snickers()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create();
        $user->createToken('snickers', ['query-alcohol']);

        $resp = $this->actingAs($user)->get('api/orders');

        dd($resp->status());
    }

    public function test_it_snickers_with_auth_header()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create();
        $token = $user->createToken('snickers', ['query-alcohol'])->plainTextToken;

        $resp = $this->withHeaders([
            'Authorization' => "Bearer $token",
            'Accept' => 'application/json'
        ])->get('api/alcohol');

        dd($resp->status());
    }
}
