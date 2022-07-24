<?php

namespace App\Http\Controllers;

use App\Models\Alcohol;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

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
        if (!$name = $request->input('name', ''))
            return new Response('', 404);
        return array_values(Alcohol::get()
            ->where('title', 'contains', $name)->toArray());
    }
}

