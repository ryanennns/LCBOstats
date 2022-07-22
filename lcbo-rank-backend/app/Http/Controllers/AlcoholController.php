<?php

namespace App\Http\Controllers;

use App\Models\Alcohol;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class AlcoholController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alcohol  $alcohol
     // * @return \Illuminate\Http\Response
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
}
