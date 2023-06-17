<?php

namespace App\Jobs;

use App\Models\Alcohol;
use App\Models\InvalidUrl;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class CheckProductUrlsValid implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle(): void
    {
        Alcohol::query()->chunk(20, function (Collection $alcohols) {
            $alcohols->each(function (Alcohol $alcohol) {
                $status = Http::get($alcohol->url)->status();
                if ($status === 404) {
                    InvalidUrl::query()->create(['alcohol_id' => $alcohol->getKey()]);
                    $alcohol->update(['valid_url' => false]);
                }
            });
        });
    }
}
