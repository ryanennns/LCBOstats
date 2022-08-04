<?php

namespace App\Http\Controllers;

use App\Models\Alcohol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlcoholController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param \App\Models\Alcohol $alcohol
     */
    public function show(Alcohol $alcohol)
    {
        return $alcohol;
    }

    public function getEfficient(Request $request, String $category = '')
    {
        $maxIndex                   = $request->input('maxPriceIndex', 1000);
        $minIndex                   = $request->input('minPriceIndex', 0);
        $sortAscendingDescending    = $request->input('order', 'asc');
        $numberOfResults            = min($request->input('numberOfResults', 100), 100);

        $query = DB::table('alcohols')
            ->orderBy('price_index');

        if($category)
            $query
                ->where('category', '=', $category);

        return $query
            ->where('price_index', '>', $minIndex)
            ->where('price_index', '<', $maxIndex)
            ->orderBy('price_index', $sortAscendingDescending)
            ->get()
            ->take($numberOfResults);
    }

    public function getDefault(Request $request)
    {
        $sortCondition              = $request->input('sortBy', '');
        $sortAscendingDescending    = $request->input('order', 'asc');
        $numberOfResults            = min($request->input('numberOfResults', 100), 100);

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

