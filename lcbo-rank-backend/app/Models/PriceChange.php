<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceChange extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function alcohol()
    {
        return $this->belongsTo(Alcohol::class);
    }
}
