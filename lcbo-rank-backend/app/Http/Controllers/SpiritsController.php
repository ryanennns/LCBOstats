<?php

namespace App\Http\Controllers;

use App\Models\Alcohol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpiritsController extends Controller
{
    public function getDefault(Request $request)
    {
        $numOfResults = min($request->input('numOfResults', 10), 30);
        return Alcohol::getByCategory(Alcohol::SPIRITS, $numOfResults);
    }

    public function getEfficient(Request $request)
    {
        return DB::table('alcohols')
            ->orderBy('price_index')
            ->where('category', '=', Alcohol::SPIRITS)
            ->get()
            ->take(30);
    }

    public function getEfficientVodka(Request $request)
    {
        return DB::table('alcohols')
            ->orderBy('price_index')
            ->where('subcategory', '=', Alcohol::VODKA)
            ->get()
            ->take(30);
    }

    public function getEfficientTequila(Request $request)
    {
        return DB::table('alcohols')
            ->orderBy('price_index')
            ->where('subcategory', '=', Alcohol::TEQUILA)
            ->get()
            ->take(30);
    }

    public function getEfficientGin(Request $request)
    {
        return DB::table('alcohols')
            ->orderBy('price_index')
            ->where('subcategory', '=', Alcohol::GIN)
            ->get()
            ->take(30);
    }

    public function getGin(Request $request)
    {
        $numOfResults = min($request->input('numOfResults', 10), 30);
        return Alcohol::getBySubCategory(Alcohol::GIN, $numOfResults);
    }

    public function getVodka(Request $request)
    {
        $numOfResults = min($request->input('numOfResults', 10), 30);
        return Alcohol::getBySubCategory(Alcohol::VODKA, $numOfResults);
    }

    public function getTequila(Request $request)
    {
        $numOfResults = min($request->input('numOfResults', 10), 30);
        return Alcohol::getBySubCategory(Alcohol::TEQUILA, $numOfResults);
    }
}
