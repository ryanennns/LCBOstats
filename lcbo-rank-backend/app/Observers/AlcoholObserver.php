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

    public function creating(Alcohol $alcohol): void
    {
        if(is_null($alcohol->price_index)) {
            $alcohol->price_index = Alcohol::calculatePriceIndex($alcohol->price, $alcohol->alcohol_content, $alcohol->volume);
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
