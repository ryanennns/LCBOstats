<?php

namespace App\Observers;

use App\Models\Alcohol;
use App\Models\PriceChange;

class AlcoholObserver
{
    /**
     * @param Alcohol $alcohol
     * @return void
     */
    public function updating(Alcohol $alcohol): void
    {
        if(collect($alcohol->getDirty())->has('price')) {
            PriceChange::create([
                'permanent_id' => $alcohol->permanent_id,
                'price' => $alcohol->price,
            ]);
        }
    }

    /**
     * @param Alcohol $alcohol
     * @return void
     */
    public function created(Alcohol $alcohol): void
    {
        PriceChange::create([
            'permanent_id' => $alcohol->permanent_id,
            'price' => $alcohol->price,
        ]);
    }
}
