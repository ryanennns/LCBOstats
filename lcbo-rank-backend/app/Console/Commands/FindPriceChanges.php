<?php

namespace App\Console\Commands;

use App\Events\PricesUpdated;
use Illuminate\Console\Command;

class FindPriceChanges extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pricechange:find';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        PricesUpdated::dispatch();
        return Command::SUCCESS;
    }
}
