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
        $progressBar->start();

        Alcohol::query()->chunk(20, function (Collection $alcohols) use ($progressBar) {
            $alcohols->each(function (Alcohol $alcohol) use ($progressBar) {
                $status = Http::get($alcohol->url)->status();
                if ($status === 404) {
                    InvalidUrl::query()->create(['alcohol_id' => $alcohol->getKey()]);
//                    $alcohol->update(['valid_url' => false]);
                }
                $progressBar->advance();
                sleep(0.5);
            });
        });

        return 0;
    }
}
