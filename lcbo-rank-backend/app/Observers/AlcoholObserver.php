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
                'old_price' => Alcohol::findOrFail($alcohol->permanent_id)->price,
                'new_price' => $alcohol->price,
            ]);
        }
    }
}
