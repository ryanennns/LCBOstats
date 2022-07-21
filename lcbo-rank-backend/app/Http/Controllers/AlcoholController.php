<?php

namespace App\Http\Controllers;

use App\Models\Alcohol;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AlcoholController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alcohol  $alcohol
     * @return \Illuminate\Http\Response
     */
    public function edit(Alcohol $alcohol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alcohol  $alcohol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alcohol $alcohol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alcohol  $alcohol
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alcohol $alcohol)
    {
        //
    }

    public function find(Request $request)
    {
//        return Alcohol::get()->where('id', '===', $request['id']);
    }

    public function beers(Request $request)
    {
        $numOfResults = min($request->input('numOfResults', 10), 30);
        $a = Alcohol::get()->where('category', '===', Alcohol::BEER)
            ->take($numOfResults);
        return $a;
    }

    public function wines(Request $request)
    {
        $numOfResults = min($request->input('numOfResults', 10), 30);
        $a = Alcohol::get()->where('category', '===', Alcohol::WINE)
            ->take($numOfResults);
        return $a;
    }

    public function spirits(Request $request)
    {
        $numOfResults = min($request->input('numOfResults', 10), 30);
        $a = Alcohol::get()->where('category', '===', Alcohol::SPIRITS)
            ->take($numOfResults);
        return $a;
    }
}
