<?php

namespace App\Console\Commands;

use App\Models\Alcohol;
use App\Models\InvalidUrl;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Symfony\Component\Console\Helper\ProgressBar;

class CheckProductUrlsValid extends Command
{
    protected $signature = 'alcohol:check-urls';

    protected $description = 'Checks the response code on each of the alcohol URLs';

    public function handle(): int
    {
        ProgressBar::setFormatDefinition('custom', "%message% -- %memory%\n%current%/%max%\t{%bar%}\n");
        $progressBar = $this->output
            ->createProgressBar(Alcohol::query()->count());
        $progressBar->setFormat('custom');
        $progressBar->setMessage('snickers');
        $progressBar->start();

        Alcohol::query()->chunk(20, function (Collection $alcohols) use ($progressBar) {
            $alcohols->each(function (Alcohol $alcohol) use ($progressBar) {
                $this->info($alcohol->url);
                $status = Http::withHeaders([
                    'UA' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36'
                ])->get($alcohol->url)->status();
                $this->info($status);
                if ($status === 404) {
                    InvalidUrl::query()->create(['alcohol_id' => $alcohol->getKey()]);
                    $this->info($status);
//                    $alcohol->update(['valid_url' => false]);
                }
                sleep(0.5);
            });
        $progressBar->advance();
        });

        return 0;
    }
}
