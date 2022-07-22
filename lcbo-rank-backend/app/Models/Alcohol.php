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

    use HasFactory;

    public static function getByCategory(String $category, $numOfResults)
    {
        return Alcohol::get()->where('category', '===', $category)
            ->take($numOfResults);
    }
}
