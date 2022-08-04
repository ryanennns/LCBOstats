<?php

namespace App\Http\Controllers;

use App\Models\Alcohol;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class AlcoholController extends Controller
{
    public const MAX_ALCOHOLS_RETURNED = 100;

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Alcohol $alcohol
     */
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
        $sortCondition              = $request->input('sortBy', '');
        $sortAscendingDescending    = $request->input('order', 'asc');
        $numberOfResults            = min($request->input('numberOfResults', AlcoholController::MAX_ALCOHOLS_RETURNED), 100);

        if (!$sortCondition)
            return $this->getEfficient($request);

        if($sortAscendingDescending != 'asc' && $sortAscendingDescending != 'desc')
            $sortAscendingDescending = 'desc';

        return DB::table('alcohols')
            ->orderBy($sortCondition, $sortAscendingDescending)
            ->get()
            ->take($numberOfResults);
    }
}

