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
        self::WINE,
        self::SPIRITS,
        self::GIN,
        self::VODKA,
        self::TEQUILA,
        self::COOLER
    ];

    public $incrementing = false;
    protected $primaryKey = 'permanent_id';

    protected $fillable = [
        'title',
        'brand',
        'category',
        'subcategory',
        'price',
        'volume',
        'alcohol_content',
        'price_index',
        'country',
        'url',
        'thumbnail_url',
        'image_url',
        'rating',
        'out_of_stock',
        'description',
        'reviews',
        'permanent_id'
    ];

}
