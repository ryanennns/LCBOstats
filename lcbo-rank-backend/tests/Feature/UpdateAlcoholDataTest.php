<?php

namespace Tests\Feature;

use App\Console\Commands\UpdateAlcoholData;
use App\Models\Alcohol;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class UpdateAlcoholDataTest extends TestCase
{
    use DatabaseTransactions;

    public function test_it_creates_records_when_given_data()
    {

    }
}
