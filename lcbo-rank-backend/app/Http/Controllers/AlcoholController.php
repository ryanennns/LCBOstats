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

    public function getEfficient()
    {
        return DB::table('alcohols')
            ->orderBy('price_index')
            ->get()
            ->take(30);
    }

    public function name(Request $request)
    {
        $sortCondition = $request->input('sort_by', '');
        $sortAscendingDescending = $request->input('order', 'asc');
        if (!$sortCondition)
            return $this->getEfficient();

        if($sortAscendingDescending != 'asc' && $sortAscendingDescending != 'desc')
            $sortAscendingDescending = 'desc';

        return DB::table('alcohols')
            ->orderBy($sortCondition, $sortAscendingDescending)
            ->get()
            ->take(30);
    }
}

