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
     * // * @return \Illuminate\Http\Response
     */
    public function show(Alcohol $alcohol)
    {
        return $alcohol;
    }

    public function getEfficient(Request $request)
    {
        $maxIndex   = $request->input('maxPriceIndex', '');
        $order      = $request->input('order', '');

        if(!$maxIndex)
            return DB::table('alcohols')
                ->orderBy('price_index')
                ->get()
                ->take(30);

        return DB::table('alcohols')
            ->where('price_index', '<', $maxIndex)
            ->orderBy('price_index', $order ? $order : 'asc')
            ->get()
            ->take(100);
    }

    public function getDefault(Request $request)
    {
        $sortCondition = $request->input('sortBy', '');
        $sortAscendingDescending = $request->input('order', 'asc');

        if (!$sortCondition)
            return $this->getEfficient($request);

        if($sortAscendingDescending != 'asc' && $sortAscendingDescending != 'desc')
            $sortAscendingDescending = 'desc';

        return DB::table('alcohols')
            ->orderBy($sortCondition, $sortAscendingDescending)
            ->get()
            ->take(30);
    }
}

