<?php

namespace App\Http\Controllers;

use App\Http\Resources\AlcoholResource;
use App\Models\Alcohol;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomepageController extends Controller
{
    public function index()
    {
        return Inertia::render('App', ['alcohol' => AlcoholResource::collection(Alcohol::query()->limit(10)->get())]);

        $alcohol = Alcohol::first();

        $string = "{
  \"permanent_id\": 12064,
  \"title\": \"Maxime Trijol Orange Liqueur\",
  \"brand\": \"Maxime Trijol\",
  \"category\": \"Spirits\",
  \"subcategory\": \"Liqueur\",
  \"price\": 19.25,
  \"volume\": 750,
  \"price_index\": 0.064166666666667,
  \"alcohol_content\": 40,
  \"country\": \"France\",
  \"url\": \"https
  \"thumbnail_url\": \"https
  \"image_url\": \"https
  \"rating\": null,
  \"reviews\": 0,
  \"out_of_stock\": false,
  \"description\": \"Yummy yummy\"
}";

        $meta = "{
  \"data\": [...],
  \"links\": {
    \"first\": \"http://lcbostats.com/api/alcohol?page=1\",
    \"last\": \"http://lcbostats.com/api/alcohol?page=660\",
    \"prev\": null,
    \"next\": \"http://lcbostats.com/api/alcohol?page=2\"
  },
  \"meta\": {
    \"current_page\": 1,
    \"from\": 1,
    \"last_page\": 660,
    \"links\": [
      {
        \"url\": \"http://lcbostats.com/api/alcohol?page=1\",
        \"label\": \"1\",
        \"active\": true
      }
    ],
    \"path\": \"http://lcbostats.com/api/alcohol\",
    \"per_page\": 25,
    \"to\": 25,
    \"total\": 16478
  }
}";

        $priceChanges = "{
  \"permanent_id\": 331280,
  \"title\": \"Zywiec Beer\",
  \"price_changes\": 3,
  \"price_change_history\": [
    {
      \"price\": 3.35,
      \"created_at\": \"2023-03-01T13:03:20+00:00\"
    },
    {
      \"price\": 3.3,
      \"created_at\": \"2023-01-31T13:03:17+00:00\"
    },
    {
      \"price\": 2.8,
      \"created_at\": \"2022-12-27T15:26:50+00:00\"
    }
  ],
  \"current_price\": 3.35,
  \"highest_price\": 3.35,
  \"lowest_price\": 2.8,
  \"oldest_price\": 2.8
}";

        $string = trim($string, "\t\n\r\0\x0B");

        return view('welcome', compact('string', 'meta', 'priceChanges'));
    }
}
