<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Scalar\String_;

class Alcohol extends Model
{
    private const BLACKLISTED_IDS = [
        21514,
        27049, // smirnoff
    ];
    use HasFactory;

    public const BEER_AND_CIDER = "Beer & Cider";
    public const RED_WINE = "Wine|Red Wine";
    public const WHITE_WINE = "Wine|White Wine";
    public const ROSE_WINE = "Wine|Rose Wine";
    public const FORTIFIED_WINE = "Wine|Fortified Wine";
    public const SPARKLING_WINE = "Wine|Sparkling Wine";
    public const CHAMPAGNE = "Wine|Champagne";
    public const SPIRITS = "Spirits";
    public const GIN = "Gin";
    public const VODKA = "Vodka";
    public const TEQUILA = "Tequila";
    public const COOLER = "Coolers";

    public const CATEGORIES = [
        self::BEER_AND_CIDER,
        self::RED_WINE,
        self::WHITE_WINE,
        self::ROSE_WINE,
        self::FORTIFIED_WINE,
        self::SPARKLING_WINE,
        self::CHAMPAGNE,
        self::SPIRITS,
        self::SPIRITS,
        self::GIN,
        self::VODKA,
        self::TEQUILA,
        self::COOLER
    ];

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
