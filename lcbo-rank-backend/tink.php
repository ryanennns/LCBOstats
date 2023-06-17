<?php

use Illuminate\Support\Facades\Http;

dump(Http::withHeaders([
    'UA' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36'
])->get('https://www.lcbo.com/en/bud-light-1107')->status());
