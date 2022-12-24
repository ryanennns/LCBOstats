<?php

namespace App\Console\Commands;

use App\Models\Alcohol;
use App\Models\PriceChange;
use Illuminate\Console\Command;

class FindPriceChanges extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'price-change:find';

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
        // if the alcohol price is different from the most recent price change, create new record
        Alcohol::all()->each(function (Alcohol $alcohol) {
            if($alcohol->newest_price_change != $alcohol->price) {
                PriceChange::create([
                    'permanent_id' => $alcohol->permanent_id,
                    'price' => $alcohol->price,
                ]);
            }
        });

        return Command::SUCCESS;
    }
}
