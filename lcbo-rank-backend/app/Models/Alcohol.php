<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Scalar\String_;

class Alcohol extends Model
{
    public const BEER = "Beer & Cider";
    public const CIDER = "Beer & Cider";
    public const WINE = "Wine";
    public const SPIRITS = "Spirits";
    public const GIN = "Gin";
    public const VODKA = "Vodka";
    public const TEQUILA = "Tequila";

    use HasFactory;

    public static function getByCategory(String $category, $numOfResults)
    {
        return array_values(Alcohol::get()->where('category', '=', $category)
            ->take($numOfResults)->toArray());
    }

    public static function getBySubCategory(String $subcategory, $numOfResults)
    {
        return array_values(Alcohol::get()->where('subcategory', '=', $subcategory)
            ->take($numOfResults)->toArray());
    }
}
