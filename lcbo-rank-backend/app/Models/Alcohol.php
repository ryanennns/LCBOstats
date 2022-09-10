<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Scalar\String_;

class Alcohol extends Model
{
    use HasFactory;

    public const BEER = "Beer & Cider";
    public const CIDER = "Beer & Cider";
    public const WINE = "Wine";
    public const SPIRITS = "Spirits";
    public const GIN = "Gin";
    public const VODKA = "Vodka";
    public const TEQUILA = "Tequila";
    public const COOLER = "Coolers";

    public const CATEGORIES = [
        self::BEER,
        self::CIDER,
        self::WINE,
        self::SPIRITS,
        self::GIN,
        self::VODKA,
        self::TEQUILA,
        self::COOLER
    ];
}
