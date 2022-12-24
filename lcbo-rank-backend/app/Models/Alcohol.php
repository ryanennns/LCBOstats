<?php

namespace App\Models;

use App\Http\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;

/**
 * @property int permanent_id
 * @property String title
 * @property String brand
 * @property String category
 * @property String subcategory
 * @property double price
 * @property double volume
 * @property double alcohol_content
 * @property double price_index
 * @property String url
 * @property String thumbnail_url
 * @property String image_url
 * @property double rating
 * @property integer reviews
 * @property boolean out_of_stock
 * @property String description
 */
class Alcohol extends Model
{
    use HasFactory;

    public const THE_BIG_KAHUNAS = [
        "Products|Beer & Cider",
        "Products|Spirits",
        "Products|Coolers",
        "Products|Wine|Red Wine",
        "Products|Wine|White Wine",
        "Products|Wine|Sparkling Wine",
        "Products|Wine|Rose Wine",
        "Products|Wine|Fortified Wine",
        "Products|Wine|Champagne",
    ];

    // todo refactor blacklisted ids to be config values?
    public const BLACKLISTED_IDS = [
        21514,
        27049, // smirnoff
        28009, // georgian bay + sunglasses (#1)
        21712,
    ];

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
    public const COOLER = "Coolers";

    protected $primaryKey = 'permanent_id';
    public $incrementing = false;

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

    public function scopeFilter($query, QueryFilter $filters): Builder
    {
        return $filters->apply($query);
    }

    public function priceChanges(): HasMany
    {
        return $this->hasMany(PriceChange::class, 'permanent_id', 'permanent_id');
    }

    public function getNewestPriceChangeAttribute()
    {
//        dd($this->priceChanges->where('permanent_id' , $this->permanent_id));
        return $this->priceChanges()
            ->where(['permanent_id' => $this->permanent_id])
            ->orderBy('id', 'desc')
            ->pluck('price')
            ->first();
    }

    public function getOldestKnownPriceAttribute()
    {
        return $this->priceChanges()
            ->orderBy('id')
            ->pluck('price')
            ->first();
    }

    public function getHighestPriceAttribute()
    {
        $prices = $this->priceChanges
            ->pluck('price');
        return $prices->sortDesc()->first();
    }

    public function getLowestPriceAttribute()
    {
        $prices = $this->priceChanges
            ->pluck('price');
        return $prices->sort()->first();
    }
}
