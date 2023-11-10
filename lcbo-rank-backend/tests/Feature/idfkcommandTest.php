<?php

namespace Tests\Feature;

use App\Console\Commands\UpdateAlcoholData;
use App\Events\PricesUpdated;
use App\Models\Alcohol;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Http;
use Tests\Fixtures\FixtureLoader;
use Tests\TestCase;

class idfkcommandTest extends TestCase
{
    use DatabaseTransactions;

    public function test_run_it()
    {
        $this->artisan('info:name');
    }
}
