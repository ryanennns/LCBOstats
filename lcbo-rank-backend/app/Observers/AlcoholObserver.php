<?php

namespace App\Observers;

use App\Models\Alcohol;
use App\Models\PriceChange;

class AlcoholObserver
{
    public function creating(Alcohol $alcohol): void
    {
        if($alcohol->category === 'Beer and Cider') {
            $alcohol->category = 'Beer & Cider';
        }
    }

    public function updating(Alcohol $alcohol): void
    {
        if(collect($alcohol->getDirty())->has('price')) {
            PriceChange::create([
                'permanent_id' => $alcohol->permanent_id,
                'price' => $alcohol->price,
            ]);
        }
    }

    public function created(Alcohol $alcohol): void
    {
        PriceChange::create([
            'permanent_id' => $alcohol->permanent_id,
            'price' => $alcohol->price,
        ]);
    }
}
