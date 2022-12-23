<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SnoerenDevelopment\CurrencyCasting\Currency;

class PriceChange extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'price' => Currency::class,
    ];

    public function alcohol()
    {
        return $this->belongsTo(Alcohol::class);
    }
}
