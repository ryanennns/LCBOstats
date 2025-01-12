<?php

namespace App\Console\Commands;

use App\Models\PriceChange;
use Illuminate\Console\Command;

class idfkcommand extends Command
{
    protected $signature = 'info:name {--startDate=} {--endDate=} {--category=}';

    protected $description = 'Command description';

    public function handle()
    {
        $results = collect(PriceChange::query()->selectRaw('permanent_id, price - lag(price) over (partition by permanent_id order by created_at) as diff')->where('created_at', '>', '2023-10-15')->orderBy('diff', 'desc')->limit(100)->get()->toArray())->map(function ($pc) {
            return ['permanent_id' => $pc->permanent_id, 'diff' => $pc->diff, 'model' => Alcohol::where('permanent_id', $pc->permanent_id)->select('title', 'price', 'category', 'url')->get()->toArray()];
        });

        dd($results);

        return Command::SUCCESS;
    }
}
