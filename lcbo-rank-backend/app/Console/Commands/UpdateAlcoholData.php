<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command;

class UpdateAlcoholData extends Command
{
    private const SEARCH_REQ_URL = 'https://platform.cloud.coveo.com/rest/search/v2?organizationId=lcboproductionx2kwygnc';
    private const AUTH_TOKEN = 'Bearer xx883b5583-07fb-416b-874b-77cce565d927';
    private const NUMBER_OF_RESULTS = 250;
    private const COPIED_HEADERS = [
        "accept" => "*/*",
        "accept-language" => "en-US,en;q=0.9",
        "authorization" => self::AUTH_TOKEN,
        "content-type" => "application/x-www-form-urlencoded; charset=UTF-8",
        "sec-ch-ua" => "\".Not/A)Brand\";v=\"99\", \"Google Chrome\";v=\"103\", \"Chromium\";v=\"103\"",
        "sec-ch-ua-mobile" => "?0",
        "sec-ch-ua-platform" => "\"Windows\"",
        "sec-fetch-dest" => "empty",
        "sec-fetch-mode" => "cors",
        "sec-fetch-site" => "cross-site",
        "referrer" => "https://www.lcbo.com/",
        "referrerPolicy" => "strict-origin-when-cross-origin",
        "mode" => "cors",
        "credentials" => "include",
    ];

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'alcohol:update {--category=Wine}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates the database with the latest information from the LCBO\'s API.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $client = new Client();
        $response = $client->get(self::SEARCH_REQ_URL, [
            "headers" => self::COPIED_HEADERS,
            "form_params" => [
                "aq" => "@ec_category==\"" . $this->option('category') . "\"",
                "numberOfResults" => self::NUMBER_OF_RESULTS,
                "firstResult" => 0,
            ],
        ]);
        dd($response);
    }
}
