<?php

namespace App\Console\Commands;

use App\Events\PricesUpdated;
use Illuminate\Console\Command;

class FindPriceChanges extends Command
{
    protected $signature = 'pricechange:find';

    protected $description = 'Command description';

    public function handle()
    {
        PricesUpdated::dispatch();
        return Command::SUCCESS;
    }
}
