<?php

namespace App\Http\Controllers;

use App\Models\Alcohol;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class AlcoholController extends Controller
{
    public const MAX_ALCOHOLS_RETURNED = 100;

    public function show(Alcohol $alcohol)
    {
        return $alcohol;
    }

    public function getEfficient(
        Request $request,
        String $category = '',
        String $subcategory = ''
    ): Collection
    {
        $maxIndex                   = $request->input('maxPriceIndex', 1000);
        $minIndex                   = $request->input('minPriceIndex', 0);
        $sortAscendingDescending    = $request->input('order', 'asc');
        $numberOfResults            = min($request->input('numberOfResults', AlcoholController::MAX_ALCOHOLS_RETURNED), 100);

        $query = DB::table('alcohols')
            ->orderBy('price_index');

        if($category)
            $query
                ->where('category', '=', $category);

        if($subcategory)
            $query
                ->where('subcategory', '=', $subcategory);

        return $query
            ->where('price_index', '>', $minIndex)
            ->where('price_index', '<', $maxIndex)
            ->orderBy('price_index', $sortAscendingDescending)
            ->get()
            ->take($numberOfResults);
    }

    public function getDefault(Request $request): Collection
    {
        $id                         = $request->input('id', '');
        $title                      = $request->input('title', '');
        $brand                      = $request->input('brand', '');
        $category                   = $request->input('category', '');
        $subcategory                = $request->input('subcategory', '');
        $country                    = $request->input('country', '');

        $maxIndex                   = $request->input('maxPriceIndex', 1000);
        $minIndex                   = $request->input('minPriceIndex', 0);
        $maxPrice                   = $request->input('maxPrice', 100000);
        $minPrice                   = $request->input('minPrice', 0);
        $maxVolume                  = $request->input('maxVolume', 100000);
        $minVolume                  = $request->input('minVolume', 0);

        $sortCondition              = $request->input('sortBy', '');
        $sortAscendingDescending    = $request->input('order', 'asc');
        $numberOfResults            = min($request->input('numberOfResults', AlcoholController::MAX_ALCOHOLS_RETURNED), 100);

        $query = DB::table('alcohols');

        if($sortAscendingDescending != 'asc' && $sortAscendingDescending != 'desc')
            $sortAscendingDescending = 'desc';

        if($id)
            $query->where('id', '=', $id);

        if($title)
            $query->where('title', '=', $title);

        if($brand)
            $query->where('brand', '=', $brand);

        if($category)
            $query->where('category', '=', $category);

        if($subcategory)
            $query->where('subcategory', '=', $subcategory);

        if($country)
            $query->where('country', '=', $country);

        if($sortCondition)
            $query->orderBy($sortCondition, $sortAscendingDescending);

        // INDEX
        $query->where('price_index', '<', $maxIndex);
        $query->where('price_index', '>', $minIndex);

        // PRICE
        $query->where('price', '<', $maxPrice);
        $query->where('price', '>', $minPrice);

        // VOLUME
        $query->where('volume', '<', $maxVolume);
        $query->where('price', '>', $minVolume);

        return $query
            ->get()
            ->take($numberOfResults);
    }
}

