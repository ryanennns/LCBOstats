<?php

namespace App\Http\Controllers;

use App\Models\Alcohol;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class SpiritsController extends AlcoholController
{
    public function getDefault(Request $request): Collection
    {
        $numOfResults = min(
            $request->input('numOfResults', 10),
            AlcoholController::MAX_ALCOHOLS_RETURNED
        );
        return Alcohol::getByCategory(Alcohol::SPIRITS, $numOfResults);
    }

    public function getEfficient(
        Request $request,
        string  $category = Alcohol::SPIRITS,
        string  $subcategory = ""
    ): Collection
    {
        return parent::getEfficient($request, $category, $subcategory);
    }

    public function getEfficientVodka(Request $request): Collection
    {
        return parent::getEfficient(
            $request,
            Alcohol::SPIRITS,
            Alcohol::VODKA
        );
    }

    public function getEfficientTequila(Request $request): Collection
    {
        return parent::getEfficient(
            $request,
            Alcohol::SPIRITS,
            Alcohol::TEQUILA
        );
    }

    public function getEfficientGin(Request $request): Collection
    {
        return parent::getEfficient(
            $request,
            Alcohol::SPIRITS,
            Alcohol::GIN
        );
    }

    public function getGin(Request $request)
    {
        $numOfResults = min(
            $request->input('numOfResults', 10),
            AlcoholController::MAX_ALCOHOLS_RETURNED
        );
        return Alcohol::getBySubCategory(Alcohol::GIN, $numOfResults);
    }

    public function getVodka(Request $request)
    {
        $numOfResults = min($request->input(
            'numOfResults', 10),
            AlcoholController::MAX_ALCOHOLS_RETURNED
        );
        return Alcohol::getBySubCategory(Alcohol::VODKA, $numOfResults);
    }

    public function getTequila(Request $request)
    {
        $numOfResults = min(
            $request->input('numOfResults', 10),
            AlcoholController::MAX_ALCOHOLS_RETURNED
        );
        return Alcohol::getBySubCategory(Alcohol::TEQUILA, $numOfResults);
    }
}
