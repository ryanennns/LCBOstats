<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoolerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alcohols')->insert([
            "title" => "Corona Tropical Cactus Lime","brand" => "Corona","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.95","volume" => "355","alcohol_content" => "4.2","price_index" => "0.19785378940308518","country" => "Canada","url" => "https://www.lcbo.com/en/corona-tropical-cactus-lime-24377"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mike's Hard Blue Freeze","brand" => "Mike's","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.15","volume" => "473","alcohol_content" => "5.0","price_index" => "0.13319238900634248","country" => "Canada","url" => "https://www.lcbo.com/en/mike-s-hard-blue-freeze-15363"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mike's Hard White Freeze","brand" => "Mike's","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.15","volume" => "473","alcohol_content" => "5.0","price_index" => "0.13319238900634248","country" => "Canada","url" => "https://www.lcbo.com/en/mike-s-hard-white-freeze-19145"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Vodka Mudshake Creamy Vanilla","brand" => "Mudshake","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "14.0","volume" => "1080","alcohol_content" => "5.0","price_index" => "0.25925925925925924","country" => "New Zealand","url" => "https://www.lcbo.com/en/vodka-mudshake-creamy-vanilla-4606"
        ]);
        DB::table('alcohols')->insert([
            "title" => "White Claw Hard Seltzer Natural Lime","brand" => "White Claw","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/white-claw-hard-seltzer-natural-lime-14488"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mike's Hard Cranberry","brand" => "Mike's","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "13.25","volume" => "2130","alcohol_content" => "5.0","price_index" => "0.12441314553990611","country" => "Canada","url" => "https://www.lcbo.com/en/mike-s-hard-cranberry-15369"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jaw Drop Tickling Pink Lemonade","brand" => "Jaw Drop","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.0","volume" => "473","alcohol_content" => "7.0","price_index" => "0.09060706735125337","country" => "Canada","url" => "https://www.lcbo.com/en/jaw-drop-tickling-pink-lemonade-447763"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mott's Clamato Original Caesar","brand" => "Mott's","category" => "Coolers","subcategory" => "Caesars","price" => "3.15","volume" => "458","alcohol_content" => "5.5","price_index" => "0.12504962286621674","country" => "United States","url" => "https://www.lcbo.com/en/mott-s-clamato-original-caesar-316323"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bacardi Pina Colada","brand" => "Bacardi","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "2.85","volume" => "355","alcohol_content" => "5.0","price_index" => "0.16056338028169015","country" => "Canada","url" => "https://www.lcbo.com/en/bacardi-pina-colada-24385"
        ]);
        DB::table('alcohols')->insert([
            "title" => "White Claw Variety Pack #2","brand" => "White Claw","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "28.95","volume" => "4260","alcohol_content" => "5.0","price_index" => "0.13591549295774646","country" => "Canada","url" => "https://www.lcbo.com/en/white-claw-variety-pack-2-21938"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Social Lite Cream Soda Craft Seltzer","brand" => "Social Lite","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "10.5","volume" => "1420","alcohol_content" => "5.0","price_index" => "0.14788732394366197","country" => "Canada","url" => "https://www.lcbo.com/en/social-lite-cream-soda-craft-soda-24516"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Vizzy Hard Seltzers + FREE sunglasses & fanny pack","brand" => "Vizzy","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "55.8","volume" => "8514","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/vizzy-hard-seltzers-free-sunglasses-fanny-pack-27050"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Vodka Grapefruit (PET)","brand" => "Black Fly","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "11.35","volume" => "1600","alcohol_content" => "7.0","price_index" => "0.1013392857142857","country" => "Canada","url" => "https://www.lcbo.com/en/black-fly-vodka-grapefruit-pet-407437"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nutrl Vodka Soda Pineapple","brand" => "Nutrl","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/nutrl-vodka-soda-pineapple-666040"
        ]);
        DB::table('alcohols')->insert([
            "title" => "MTV Hard Seltzer - Juicy Shore Tropical Punch","brand" => "Steam Whistle","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.95","volume" => "355","alcohol_content" => "5.0","price_index" => "0.16619718309859155","country" => "Canada","url" => "https://www.lcbo.com/en/mtv-hard-setzer-juicy-shore-tropical-punch-24343"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Lemon Squeezy","brand" => "Collective Arts","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.95","volume" => "355","alcohol_content" => "4.0","price_index" => "0.20774647887323944","country" => "Canada","url" => "https://www.lcbo.com/en/collective-arts-lemon-squeezy-24401"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Flavoured Vodkas & Coolers + FREE Smash Ball set","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "126.45","volume" => "7926","alcohol_content" => "30.0","price_index" => "0.053179409538228625","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-smash-ball-set-27049"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "57.7","volume" => "7920","alcohol_content" => "5.0","price_index" => "0.1457070707070707","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-ice-321794"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Woody's Pink Grapefruit","brand" => "Woody's","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "12.55","volume" => "1320","alcohol_content" => "5.3","price_index" => "0.17938822184105205","country" => "United Kingdom","url" => "https://www.lcbo.com/en/woody-s-pink-grapefruit-697409"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nude Pink Lemonade","brand" => "Nude","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.7","volume" => "355","alcohol_content" => "5.0","price_index" => "0.15211267605633805","country" => "Canada","url" => "https://www.lcbo.com/en/nude-pink-lemonade-24369"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice Peach Lemonade","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-ice-peach-lemonade-24390"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Dillon's Tangerine, Lemon & A Hint Of Mint","brand" => "Dillon's","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.15","volume" => "473","alcohol_content" => "5.0","price_index" => "0.13319238900634248","country" => "Canada","url" => "https://www.lcbo.com/en/dillon-s-tangerine-lemon-a-hint-of-mint-24319"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Red Sangria","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-red-sangria-491654"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Tempo Gin Smash Mango Peach","brand" => "Tempo","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/tempo-gin-smash-mango-peach-19159"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jack Daniels Tennessee Honey Lemonade","brand" => "Jack Daniels","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.0","volume" => "473","alcohol_content" => "6.0","price_index" => "0.10570824524312897","country" => "United States","url" => "https://www.lcbo.com/en/jack-daniels-tennessee-honey-lemonade-24346"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Vodka Sour Raspberry","brand" => "Black Fly","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.1","volume" => "473","alcohol_content" => "7.0","price_index" => "0.0936273029296285","country" => "Canada","url" => "https://www.lcbo.com/en/black-fly-vodka-sour-raspberry-448613"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nude Vodka Soda Raspberry Lemon","brand" => "Nude","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.95","volume" => "473","alcohol_content" => "5.0","price_index" => "0.12473572938689217","country" => "Canada","url" => "https://www.lcbo.com/en/nude-vodka-soda-raspberry-lemon-14664"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jose Cuervo Sparkling Classic Margarita","brand" => "Jose Cuervo","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "10.95","volume" => "1420","alcohol_content" => "5.0","price_index" => "0.15422535211267605","country" => "United States","url" => "https://www.lcbo.com/en/jose-cuervo-sparkling-classic-margarita-27129"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ace Hill Cucumber Lemon Vodka Water","brand" => "Ace Hill","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "7.95","volume" => "1000","alcohol_content" => "4.5","price_index" => "0.17666666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/ace-hill-cucumber-lemon-vodka-water-24423"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nutrl Vodka Soda Raspberry","brand" => "Nutrl","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/nutrl-vodka-soda-raspberry-24365"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Palm Bay Rainbow Twist","brand" => "Palm Bay","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.15","volume" => "473","alcohol_content" => "5.0","price_index" => "0.13319238900634248","country" => "Canada","url" => "https://www.lcbo.com/en/palm-bay-rainbow-twist-19146"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Founder's Original Tequila Paloma","brand" => "Founder's Original","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.1","volume" => "355","alcohol_content" => "7.0","price_index" => "0.12474849094567404","country" => "Canada","url" => "https://www.lcbo.com/en/founder-s-original-tequila-paloma-19350"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Wild Cherry Vodka Soda Keg","brand" => "Cottage Springs","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "29.95","volume" => "5000","alcohol_content" => "5.0","price_index" => "0.1198","country" => "Canada","url" => "https://www.lcbo.com/en/cottage-springs-wild-cherry-vodka-soda-keg-ecomm-27075"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Motts Clamato Caesar Gin and Cucumber","brand" => "Mott's","category" => "Coolers","subcategory" => "Caesars","price" => "3.15","volume" => "458","alcohol_content" => "5.5","price_index" => "0.12504962286621674","country" => "United States","url" => "https://www.lcbo.com/en/motts-clamato-caesar-gin-and-cucumber-649236"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nutrl Vodka Soda Grapefruit","brand" => "Nutrl","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/nutrl-vodka-soda-grapefruit-666032"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Vodka Mudshake Chocolate","brand" => "Mudshake","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "14.0","volume" => "1080","alcohol_content" => "5.0","price_index" => "0.25925925925925924","country" => "New Zealand","url" => "https://www.lcbo.com/en/vodka-mudshake-chocolate-5280"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nutrl Vodka Soda Juic'D Blood Orange","brand" => "Nutrl","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.25","volume" => "473","alcohol_content" => "5.0","price_index" => "0.13742071881606763","country" => "Canada","url" => "https://www.lcbo.com/en/nutrl-vodka-soda-juic-d-blood-orange-19148"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mikes Hard Red Freeze","brand" => "Mike's","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.15","volume" => "473","alcohol_content" => "5.0","price_index" => "0.13319238900634248","country" => "Canada","url" => "https://www.lcbo.com/en/mikes-hard-red-freeze-24332"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Dillon's Blackberry, Lemon & A Dash Of Elderflower","brand" => "Dillon's","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.15","volume" => "473","alcohol_content" => "5.0","price_index" => "0.13319238900634248","country" => "Canada","url" => "https://www.lcbo.com/en/dillon-s-blackberry-lemon-a-dash-of-elderflower-24321"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Blueberry Vodka Water","brand" => "Cottage Springs","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.75","volume" => "355","alcohol_content" => "5.0","price_index" => "0.15492957746478872","country" => "Canada","url" => "https://www.lcbo.com/en/cottage-springs-blueberry-vodka-water-24358"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Corona Tropical Raspberry Lemon","brand" => "Corona","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.95","volume" => "355","alcohol_content" => "4.2","price_index" => "0.19785378940308518","country" => "Canada","url" => "https://www.lcbo.com/en/corona-tropical-raspberry-lemon-24429"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Weekender Blue Raspberry","brand" => "Weekender","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.25","volume" => "500","alcohol_content" => "7.0","price_index" => "0.09285714285714286","country" => "Canada","url" => "https://www.lcbo.com/en/weekender-blue-raspberry-24366"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Raspberry Rhubarb Vodka Smash","brand" => "Georgian Bay","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/georgian-bay-raspberry-rhubarb-vodka-smash-14525"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Vodka Iced Tea Mixed 8 Pack","brand" => "Cottage Springs","category" => "Coolers","subcategory" => "Teas","price" => "19.95","volume" => "2840","alcohol_content" => "5.0","price_index" => "0.14049295774647888","country" => "Canada","url" => "https://www.lcbo.com/en/cottage-springs-vodka-iced-tea-mixed-8-pack-24351"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hard Hitchhiker Raspberry Vodka Lemonade","brand" => "Hard Hitchhicker","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "2.95","volume" => "473","alcohol_content" => "3.0","price_index" => "0.20789288231148698","country" => "Canada","url" => "https://www.lcbo.com/en/hard-hitchhiker-raspberry-vodka-lemonade-25277"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ace Hill Tropical Vodka Soda Mix Pack","brand" => "Ace Hill","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "14.95","volume" => "2130","alcohol_content" => "4.5","price_index" => "0.15597287428273343","country" => "Canada","url" => "https://www.lcbo.com/en/ace-hill-tropical-vodka-soda-mix-pack-24383"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Walter Craft Caesar - Classic","brand" => "Walter Craft","category" => "Coolers","subcategory" => "Caesars","price" => "3.75","volume" => "458","alcohol_content" => "4.5","price_index" => "0.1819505094614265","country" => "Canada","url" => "https://www.lcbo.com/en/walter-craft-caesar-classic-26548"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Palm Bay Paradise Twist","brand" => "Palm Bay","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.15","volume" => "473","alcohol_content" => "5.0","price_index" => "0.13319238900634248","country" => "Canada","url" => "https://www.lcbo.com/en/palm-bay-paradise-twist-24333"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ace Hill Raspberry Vodka Soda","brand" => "Ace Hill","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.85","volume" => "355","alcohol_content" => "4.5","price_index" => "0.17840375586854462","country" => "Canada","url" => "https://www.lcbo.com/en/ace-hill-raspberry-vodka-soda-14483"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jaw Drop Blue Blast","brand" => "Jaw Drop","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.0","volume" => "473","alcohol_content" => "7.0","price_index" => "0.09060706735125337","country" => "NULL","url" => "https://www.lcbo.com/en/jaw-drop-blue-blast-vodka-cooler-24328"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Vodka Crushed Orange","brand" => "Black Fly","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.1","volume" => "473","alcohol_content" => "7.0","price_index" => "0.0936273029296285","country" => "Canada","url" => "https://www.lcbo.com/en/black-fly-vodka-crushed-orange-553578"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nutrl The Mixed 12pk","brand" => "Nutrl","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "28.95","volume" => "4260","alcohol_content" => "5.0","price_index" => "0.13591549295774646","country" => "Canada","url" => "https://www.lcbo.com/en/nutrl-the-mixed-12pk-24407"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mott's Clamato Caesar Original","brand" => "Mott's","category" => "Coolers","subcategory" => "Caesars","price" => "10.9","volume" => "1420","alcohol_content" => "5.5","price_index" => "0.13956466069142126","country" => "Canada","url" => "https://www.lcbo.com/en/mott-s-clamato-caesar-original-569418"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jose Cuervo Authentic Margarita","brand" => "Jose Cuervo","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "26.95","volume" => "1750","alcohol_content" => "9.95","price_index" => "0.15477386934673368","country" => "United States","url" => "https://www.lcbo.com/en/jose-cuervo-authentic-margarita-14494"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Tempo Gin Smash Strawberry Lemon","brand" => "Tempo","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/tempo-gin-smash-strawberry-lemon-19143"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Arizona Hard Lemon Iced Tea","brand" => "Arizona","category" => "Coolers","subcategory" => "Teas","price" => "3.0","volume" => "473","alcohol_content" => "5.0","price_index" => "0.12684989429175475","country" => "NULL","url" => "https://www.lcbo.com/en/arizona-hard-lemon-iced-tea-24344"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Motts Clamato Pickled Caesar","brand" => "Mott's","category" => "Coolers","subcategory" => "Caesars","price" => "3.15","volume" => "458","alcohol_content" => "5.5","price_index" => "0.12504962286621674","country" => "United States","url" => "https://www.lcbo.com/en/motts-clamato-pickled-caesar-491324"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Vodka Crushed Pineapple Punch","brand" => "Black Fly","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.1","volume" => "473","alcohol_content" => "7.0","price_index" => "0.0936273029296285","country" => "Canada","url" => "https://www.lcbo.com/en/black-fly-vodka-crushed-pineapple-punch-24426"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light Seltzer Variety Pack","brand" => "Bud Light Rtd","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "18.95","volume" => "2838","alcohol_content" => "4.0","price_index" => "0.16693093727977448","country" => "Canada","url" => "https://www.lcbo.com/en/bud-light-seltzer-variety-pack-20369"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice Pink Lemonade","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-ice-pink-lemonade-24392"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Vodka Sour Grape","brand" => "Black Fly","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.1","volume" => "473","alcohol_content" => "7.0","price_index" => "0.0936273029296285","country" => "Canada","url" => "https://www.lcbo.com/en/black-fly-vodka-sour-grape-407460"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Founder's Original Gin Bramble","brand" => "Founder's Original","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.1","volume" => "355","alcohol_content" => "7.0","price_index" => "0.12474849094567404","country" => "Canada","url" => "https://www.lcbo.com/en/founder-s-original-gin-bramble-19098"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Founder's Original Bourbon Sour","brand" => "Founder's Original","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.1","volume" => "355","alcohol_content" => "7.0","price_index" => "0.12474849094567404","country" => "Canada","url" => "https://www.lcbo.com/en/founder-s-original-bourbon-sour-19347"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nude Vodka Soda 12 Can Mixer pack","brand" => "Nude","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "27.95","volume" => "4260","alcohol_content" => "5.0","price_index" => "0.1312206572769953","country" => "Canada","url" => "https://www.lcbo.com/en/nude-vodka-soda-12-can-mixer-pack-12171"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bulletproof Pink Grapefruit Blood Orange Verbena","brand" => "BULLETPROOF RTD","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.95","volume" => "473","alcohol_content" => "5.0","price_index" => "0.12473572938689217","country" => "Canada","url" => "https://www.lcbo.com/en/bulletproof-pink-grapefruit-blood-orange-verbena-25275"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ace Hill Lemon Vodka Soda","brand" => "Ace Hill","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.85","volume" => "355","alcohol_content" => "4.5","price_index" => "0.17840375586854462","country" => "Canada","url" => "https://www.lcbo.com/en/ace-hill-lemon-vodka-soda-14485"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hey Y'All Southern Style Hard Iced Tea","brand" => "Hey Y'All","category" => "Coolers","subcategory" => "Teas","price" => "3.0","volume" => "458","alcohol_content" => "5.0","price_index" => "0.13100436681222707","country" => "Canada","url" => "https://www.lcbo.com/en/hey-y-all-southern-style-hard-iced-tea-649186"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Darling Mimosa Sparkling Orange","brand" => "Darling","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.25","volume" => "355","alcohol_content" => "5.0","price_index" => "0.18309859154929578","country" => "Canada","url" => "https://www.lcbo.com/en/darling-mimosa-sparkling-orange-20857"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mott's Clamato The Works Caesar","brand" => "Mott's","category" => "Coolers","subcategory" => "Caesars","price" => "3.15","volume" => "458","alcohol_content" => "5.5","price_index" => "0.12504962286621674","country" => "United States","url" => "https://www.lcbo.com/en/mott-s-clamato-the-works-caesar-553461"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mikes Hard Tea","brand" => "Mike's","category" => "Coolers","subcategory" => "Teas","price" => "3.15","volume" => "473","alcohol_content" => "5.0","price_index" => "0.13319238900634248","country" => "Canada","url" => "https://www.lcbo.com/en/mikes-hard-tea-24378"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Twisted Shotz Sex on The Beach","brand" => "Twisted Shotz","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "10.45","volume" => "120","alcohol_content" => "20.0","price_index" => "0.4354166666666666","country" => "New Zealand","url" => "https://www.lcbo.com/en/twisted-shotz-sex-on-the-beach-558098"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Vodka & Soda Berry Lemon","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "10.55","volume" => "1420","alcohol_content" => "4.5","price_index" => "0.16510172143974963","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-vodka-soda-berry-lemon-649251"
        ]);
        DB::table('alcohols')->insert([
            "title" => "White Claw Hard Seltzer Watermelon","brand" => "White Claw","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/white-claw-hard-seltzer-watermelon-19121"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pop Shoppe Hard Cream Soda","brand" => "Pop Shoppe Rtd","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.15","volume" => "473","alcohol_content" => "7.0","price_index" => "0.09513742071881605","country" => "Canada","url" => "https://www.lcbo.com/en/pop-shoppe-hard-cream-soda-491290"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-ice-449157"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Palm Bay Strawberry Pineapple","brand" => "Palm Bay","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "12.95","volume" => "2130","alcohol_content" => "5.0","price_index" => "0.1215962441314554","country" => "Canada","url" => "https://www.lcbo.com/en/palm-bay-strawberry-pineapple-211235"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mott's Clamato Caesar Extra Spicy","brand" => "Mott's","category" => "Coolers","subcategory" => "Caesars","price" => "15.15","volume" => "2046","alcohol_content" => "5.5","price_index" => "0.13463076512929886","country" => "United States","url" => "https://www.lcbo.com/en/mott-s-clamato-caesar-extra-spicy-611392"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mike's Hard Black Cherry","brand" => "Mike's","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "13.25","volume" => "2130","alcohol_content" => "5.0","price_index" => "0.12441314553990611","country" => "Canada","url" => "https://www.lcbo.com/en/mike-s-hard-black-cherry-15372"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Smashed Soda Variety Pack","brand" => "Georgian Bay","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "28.95","volume" => "4260","alcohol_content" => "5.0","price_index" => "0.13591549295774646","country" => "Canada","url" => "https://www.lcbo.com/en/georgian-bay-smashed-soda-smash-pack-17068"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Strawberry Smashed Soda","brand" => "Georgian Bay Rtd","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.05","volume" => "473","alcohol_content" => "5.0","price_index" => "0.12896405919661733","country" => "Canada","url" => "https://www.lcbo.com/en/georgian-bay-strawberry-smashed-soda-14524"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice Light Original","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "10.55","volume" => "1420","alcohol_content" => "4.0","price_index" => "0.1857394366197183","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-ice-light-original-649343"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Little Buddha Grilled Pineapple & Rosemary","brand" => "Little Buddha","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.95","volume" => "355","alcohol_content" => "4.0","price_index" => "0.20774647887323944","country" => "Canada","url" => "https://www.lcbo.com/en/little-buddha-cc-grilled-pineapple-rosemary-vodka-14706"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mott's Clamato Extra Spicy Caesar","brand" => "Mott's","category" => "Coolers","subcategory" => "Caesars","price" => "3.15","volume" => "458","alcohol_content" => "5.5","price_index" => "0.12504962286621674","country" => "United States","url" => "https://www.lcbo.com/en/mott-s-clamato-extra-spicy-caesar-334805"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mott's Clamato Caesar Original","brand" => "Mott's","category" => "Coolers","subcategory" => "Caesars","price" => "15.15","volume" => "2046","alcohol_content" => "5.5","price_index" => "0.13463076512929886","country" => "United States","url" => "https://www.lcbo.com/en/mott-s-clamato-caesar-original-611400"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Social Lite Vodka Soda Mixer 8pk","brand" => "Social Lite","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "19.75","volume" => "2840","alcohol_content" => "4.0","price_index" => "0.17385563380281688","country" => "NULL","url" => "https://www.lcbo.com/en/social-lite-vodka-soda-mixer-8pk-24517"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Chula Margarita","brand" => "Chula","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "2.95","volume" => "355","alcohol_content" => "5.0","price_index" => "0.16619718309859155","country" => "Canada","url" => "https://www.lcbo.com/en/chula-margarita-24409"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Raspberry Vodka Lemonade","brand" => "Cottage Springs","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.75","volume" => "355","alcohol_content" => "5.0","price_index" => "0.15492957746478872","country" => "Canada","url" => "https://www.lcbo.com/en/cottage-springs-raspberry-vodka-lemonade-19150"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bacardi Breezer Tropical Orange Smoothie","brand" => "Bacardi","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "11.95","volume" => "2130","alcohol_content" => "5.0","price_index" => "0.11220657276995305","country" => "Canada","url" => "https://www.lcbo.com/en/bacardi-breezer-tropical-orange-smoothie-493486"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Tequila Margarita (PET)","brand" => "Black Fly","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "11.35","volume" => "1600","alcohol_content" => "7.0","price_index" => "0.1013392857142857","country" => "Canada","url" => "https://www.lcbo.com/en/black-fly-tequila-margarita-pet-225771"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Twisted Shotz Island Thunder","brand" => "Twisted Shotz","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "10.45","volume" => "120","alcohol_content" => "20.0","price_index" => "0.4354166666666666","country" => "New Zealand","url" => "https://www.lcbo.com/en/twisted-shotz-island-thunder-24339"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Vodka Iced Tea Box","brand" => "Cottage Springs","category" => "Coolers","subcategory" => "Teas","price" => "24.95","volume" => "4000","alcohol_content" => "5.0","price_index" => "0.12475","country" => "Canada","url" => "https://www.lcbo.com/en/cottage-springs-vodka-iced-tea-box-24427"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Palm Bay Pineapple Mandarin Orange","brand" => "Palm Bay","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "12.95","volume" => "2130","alcohol_content" => "5.0","price_index" => "0.1215962441314554","country" => "Canada","url" => "https://www.lcbo.com/en/palm-bay-pineapple-mandarin-orange-211219"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Tequila Margarita Strawberry","brand" => "Black Fly","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "11.35","volume" => "1600","alcohol_content" => "7.0","price_index" => "0.1013392857142857","country" => "Canada","url" => "https://www.lcbo.com/en/black-fly-tequila-margarita-strawberry-24360"
        ]);
        DB::table('alcohols')->insert([
            "title" => "White Claw Hard Seltzer Mango","brand" => "White Claw","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/white-claw-hard-seltzer-mango-14487"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Vodka Soda Mixed 24 Pack","brand" => "Cottage Springs","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "54.95","volume" => "8520","alcohol_content" => "5.0","price_index" => "0.1289906103286385","country" => "Canada","url" => "https://www.lcbo.com/en/cottage-springs-vodka-soda-mixed-24-pack-24359"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Matt & Steve's Caesar - Hot & Spicy","brand" => "Matt & Steve's","category" => "Coolers","subcategory" => "Caesars","price" => "3.4","volume" => "473","alcohol_content" => "5.5","price_index" => "0.13069383048241398","country" => "Canada","url" => "https://www.lcbo.com/en/matt-steve-s-caesar-hot-spicy-19096"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nutrl Vodka Soda Juic'D Fruit Punch","brand" => "Nutrl","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.25","volume" => "473","alcohol_content" => "5.0","price_index" => "0.13742071881606763","country" => "Canada","url" => "https://www.lcbo.com/en/nutrl-vodka-soda-juic-d-fruit-punch-19149"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Absolut Mango Mule","brand" => "Absolut","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.25","volume" => "355","alcohol_content" => "7.0","price_index" => "0.13078470824949698","country" => "Canada","url" => "https://www.lcbo.com/en/absolut-mango-mule-19134"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Gin Smash","brand" => "Georgian Bay","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/georgian-bay-gin-smash-447540"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Twisted Tea Original","brand" => "Twisted Tea","category" => "Coolers","subcategory" => "Teas","price" => "28.25","volume" => "4260","alcohol_content" => "5.0","price_index" => "0.13262910798122066","country" => "Canada","url" => "https://www.lcbo.com/en/twisted-tea-original-19543"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hijinx Hard Seltzer Peach Cosmo","brand" => "Cowbell Brewing","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.95","volume" => "473","alcohol_content" => "5.0","price_index" => "0.12473572938689217","country" => "Canada","url" => "https://www.lcbo.com/en/hijinx-hard-seltzer-peach-cosmo-24966"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mikes Hard Sour Watermelon","brand" => "Mike's","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.15","volume" => "473","alcohol_content" => "5.0","price_index" => "0.13319238900634248","country" => "Canada","url" => "https://www.lcbo.com/en/mikes-hard-sour-watermelon-24329"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nutrl Vodka Soda Cherry","brand" => "Nutrl","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/nutrl-vodka-soda-cherry-19147"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Vodka & Soda Rose Variety Pack","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "28.95","volume" => "4260","alcohol_content" => "4.5","price_index" => "0.1510172143974961","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-vodka-soda-rose-variety-pack-19139"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Classic Vodka Lemonade","brand" => "Cottage Springs","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.75","volume" => "355","alcohol_content" => "5.0","price_index" => "0.15492957746478872","country" => "Canada","url" => "https://www.lcbo.com/en/cottage-springs-classic-vodka-lemonade-24357"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mikes Hard Frozen Blue Freeze Pouch","brand" => "Mike's","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.5","volume" => "296","alcohol_content" => "5.0","price_index" => "0.23648648648648649","country" => "Canada","url" => "https://www.lcbo.com/en/mikes-hard-frozen-blue-freeze-pouch-24394"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Palm Bay Rainbow Twist Pouch","brand" => "Palm Bay","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.5","volume" => "296","alcohol_content" => "5.0","price_index" => "0.23648648648648649","country" => "Canada","url" => "https://www.lcbo.com/en/palm-bay-rainbow-twist-pouch-24396"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Twisted Tea Slightly Sweet","brand" => "Twisted Tea","category" => "Coolers","subcategory" => "Teas","price" => "3.15","volume" => "473","alcohol_content" => "5.0","price_index" => "0.13319238900634248","country" => "Canada","url" => "https://www.lcbo.com/en/twisted-tea-slightly-sweet-24376"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Rum Pina Colada","brand" => "Black Fly","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "11.35","volume" => "1600","alcohol_content" => "7.0","price_index" => "0.1013392857142857","country" => "Canada","url" => "https://www.lcbo.com/en/black-fly-rum-pina-colada-24342"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Prickly Pear Tequila Smash","brand" => "Georgian Bay","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "13.95","volume" => "2130","alcohol_content" => "6.0","price_index" => "0.10915492957746478","country" => "Canada","url" => "https://www.lcbo.com/en/georgian-bay-tequila-smash-prickly-pear-24425"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Crown Royal Whisky & Cola","brand" => "Crown Royal","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.25","volume" => "473","alcohol_content" => "7.0","price_index" => "0.09815765629719116","country" => "Canada","url" => "https://www.lcbo.com/en/crown-royal-whisky-cola-19303"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Social Lite Pineapple Mango","brand" => "Social Lite","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "10.5","volume" => "1420","alcohol_content" => "4.0","price_index" => "0.18485915492957744","country" => "Canada","url" => "https://www.lcbo.com/en/social-lite-pineapple-mango-491191"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice Peach Bellini","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "13.25","volume" => "2130","alcohol_content" => "5.0","price_index" => "0.12441314553990611","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-ice-peach-bellini-492397"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hires Root Beer","brand" => "Hires","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.15","volume" => "473","alcohol_content" => "5.0","price_index" => "0.13319238900634248","country" => "Canada","url" => "https://www.lcbo.com/en/hires-root-beer-491316"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mxd Sour Cherry","brand" => "MXD","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.05","volume" => "473","alcohol_content" => "5.0","price_index" => "0.12896405919661733","country" => "Canada","url" => "https://www.lcbo.com/en/mxd-sour-cherry-24324"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light Seltzer Passion Fruit","brand" => "Bud Light","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "3.1","volume" => "473","alcohol_content" => "4.0","price_index" => "0.1638477801268499","country" => "Canada","url" => "https://www.lcbo.com/en/bud-light-seltzer-passion-fruit-24336"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Twisted Tea Peach","brand" => "Twisted Tea","category" => "Coolers","subcategory" => "Teas","price" => "3.15","volume" => "473","alcohol_content" => "5.0","price_index" => "0.13319238900634248","country" => "Canada","url" => "https://www.lcbo.com/en/twisted-tea-peach-14534"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Mango Tequila Smash","brand" => "Georgian Bay","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "13.95","volume" => "2130","alcohol_content" => "6.0","price_index" => "0.10915492957746478","country" => "Canada","url" => "https://www.lcbo.com/en/georgian-bay-tequila-smash-6pk-24432"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Vodka & Soda Raspberry Rose","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "10.55","volume" => "1420","alcohol_content" => "4.5","price_index" => "0.16510172143974963","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-vodka-soda-raspberry-rose-14617"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Vodka Smash","brand" => "Georgian Bay","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/georgian-bay-vodka-smash-491183"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mike's Hard Lemonade","brand" => "Mike's","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "13.25","volume" => "2130","alcohol_content" => "5.0","price_index" => "0.12441314553990611","country" => "Canada","url" => "https://www.lcbo.com/en/mike-s-hard-lemonade-319442"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Willibald Watermelon Seltzer","brand" => "Willibald Farm Distillery","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.95","volume" => "355","alcohol_content" => "4.8","price_index" => "0.17312206572769956","country" => "Canada","url" => "https://www.lcbo.com/en/willibald-watermelon-seltzer-24402"
        ]);
        DB::table('alcohols')->insert([
            "title" => "White Claw Variety Pack #1","brand" => "White Claw","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "28.95","volume" => "4260","alcohol_content" => "5.0","price_index" => "0.13591549295774646","country" => "Canada","url" => "https://www.lcbo.com/en/white-claw-variety-pack-1-15373"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Social Lite Mixed Pack","brand" => "Social Lite","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "28.95","volume" => "4260","alcohol_content" => "4.0","price_index" => "0.1698943661971831","country" => "Canada","url" => "https://www.lcbo.com/en/social-lite-mixed-pack-19357"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Grapefruit Vodka Soda","brand" => "Cottage Springs","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.75","volume" => "355","alcohol_content" => "5.0","price_index" => "0.15492957746478872","country" => "Canada","url" => "https://www.lcbo.com/en/cottage-springs-grapefruit-vodka-soda-24354"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mott's Clamato Caesar Reserve","brand" => "Mott's","category" => "Coolers","subcategory" => "Caesars","price" => "3.15","volume" => "341","alcohol_content" => "4.0","price_index" => "0.23093841642228738","country" => "Canada","url" => "https://www.lcbo.com/en/mott-s-clamato-caesar-reserve-24350"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Raspberry Lime Vodka Water bag in box","brand" => "Cottage Springs","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "24.95","volume" => "4000","alcohol_content" => "5.0","price_index" => "0.12475","country" => "Canada","url" => "https://www.lcbo.com/en/cottage-springs-raspberry-lime-vodka-water-bag-in-box-19153"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sandbagger Boysenberry Hard Seltzer","brand" => "Sandbagger","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "2.85","volume" => "355","alcohol_content" => "5.0","price_index" => "0.16056338028169015","country" => "Canada","url" => "https://www.lcbo.com/en/sandbagger-boysenberry-hard-seltzer-24334"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light Seltzer Mix Pack","brand" => "Bud Light","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "28.95","volume" => "4260","alcohol_content" => "4.0","price_index" => "0.1698943661971831","country" => "Canada","url" => "https://www.lcbo.com/en/bud-light-seltzer-mix-pack-24384"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Gin Smash","brand" => "Georgian Bay","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "13.95","volume" => "2130","alcohol_content" => "5.0","price_index" => "0.13098591549295774","country" => "Canada","url" => "https://www.lcbo.com/en/georgian-bay-gin-smash-560888"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Infinite Minds Supersonic Puppy Dreams","brand" => "Flying Monkeys","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.25","volume" => "473","alcohol_content" => "5.0","price_index" => "0.13742071881606763","country" => "Canada","url" => "https://www.lcbo.com/en/infinite-minds-supersonic-puppy-dreams-24411"
        ]);
        DB::table('alcohols')->insert([
            "title" => "American Vintage Lemon Hard Iced Tea","brand" => "American Vintage","category" => "Coolers","subcategory" => "Teas","price" => "12.75","volume" => "2130","alcohol_content" => "5.0","price_index" => "0.11971830985915492","country" => "Canada","url" => "https://www.lcbo.com/en/american-vintage-lemon-hard-iced-tea-444497"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Salvador's Original Margarita (PET)","brand" => "Salvador's","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "25.45","volume" => "1750","alcohol_content" => "11.0","price_index" => "0.1322077922077922","country" => "United States","url" => "https://www.lcbo.com/en/salvador-s-original-margarita-pet-697797"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Vibe Hard Kombucha Strawberry Basil","brand" => "Vibe Hard Kombucha","category" => "Coolers","subcategory" => "Teas","price" => "3.95","volume" => "473","alcohol_content" => "4.0","price_index" => "0.20877378435517968","country" => "Canada","url" => "https://www.lcbo.com/en/vibe-hard-kombucha-strawberry-basil-25276"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Twisted Tea Hard Ice Tea Original","brand" => "Twisted Tea","category" => "Coolers","subcategory" => "Teas","price" => "3.15","volume" => "473","alcohol_content" => "5.0","price_index" => "0.13319238900634248","country" => "Canada","url" => "https://www.lcbo.com/en/twisted-tea-hard-ice-tea-original-570283"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "13.25","volume" => "2130","alcohol_content" => "5.0","price_index" => "0.12441314553990611","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-ice-450114"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Weekender Mixed 8 Pack","brand" => "Cottage Springs","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "19.95","volume" => "2840","alcohol_content" => "5.0","price_index" => "0.14049295774647888","country" => "Canada","url" => "https://www.lcbo.com/en/cottage-springs-weekender-mixed-8-pack-15311"
        ]);
        DB::table('alcohols')->insert([
            "title" => "White Claw Hard Seltzer Black Cherry 6x355ml","brand" => "White Claw","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "14.95","volume" => "2130","alcohol_content" => "5.0","price_index" => "0.14037558685446008","country" => "Canada","url" => "https://www.lcbo.com/en/white-claw-hard-seltzer-black-cherry-6x355ml-19122"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Vizzy Hard Seltzer Papaya Passionfruit","brand" => "Vizzy","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/vizzy-hard-seltzer-papaya-passionfruit-24368"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Good Fortune Lavender Lemonade Hard Seltzer Sparkling","brand" => "Good Fortune Brewery","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "3.25","volume" => "355","alcohol_content" => "5.0","price_index" => "0.18309859154929578","country" => "Canada","url" => "https://www.lcbo.com/en/good-fortune-lavender-lemonade-hard-seltzer-sparkling-25126"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cazadores Paloma","brand" => "Cazadores","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "29.95","volume" => "1750","alcohol_content" => "12.5","price_index" => "0.1369142857142857","country" => "Mexico","url" => "https://www.lcbo.com/en/cazadores-paloma-24428"
        ]);
        DB::table('alcohols')->insert([
            "title" => "High Noon Grapefruit","brand" => "High Noon","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.95","volume" => "355","alcohol_content" => "4.5","price_index" => "0.18466353677621286","country" => "United States","url" => "https://www.lcbo.com/en/high-noon-grapefruit-24534"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Seltzer Lemonades Variety Pack","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "28.95","volume" => "4260","alcohol_content" => "4.5","price_index" => "0.1510172143974961","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-seltzer-lemonades-variety-pack-24408"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Wild Cherry Vodka Soda","brand" => "Cottage Springs","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.75","volume" => "355","alcohol_content" => "5.0","price_index" => "0.15492957746478872","country" => "Canada","url" => "https://www.lcbo.com/en/cottage-springs-wild-cherry-vodka-soda-19142"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Vodka Cranberry (PET)","brand" => "Black Fly","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "11.35","volume" => "1600","alcohol_content" => "7.0","price_index" => "0.1013392857142857","country" => "Canada","url" => "https://www.lcbo.com/en/black-fly-vodka-cranberry-pet-612713"
        ]);
        DB::table('alcohols')->insert([
            "title" => "SoCIAL LITE Field Strawberry","brand" => "Social Lite","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "10.5","volume" => "1420","alcohol_content" => "4.0","price_index" => "0.18485915492957744","country" => "Canada","url" => "https://www.lcbo.com/en/social-lite-field-strawberry-649376"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Vodka Soda Berry Blast","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.7","volume" => "355","alcohol_content" => "4.5","price_index" => "0.16901408450704228","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-vodka-soda-berry-blast-24404"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Raspberry Lime Vodka Water","brand" => "Cottage Springs","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.75","volume" => "355","alcohol_content" => "5.0","price_index" => "0.15492957746478872","country" => "Canada","url" => "https://www.lcbo.com/en/cottage-springs-raspberry-lime-vodka-water-14493"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice Light Raspberry & Soda","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "10.55","volume" => "1420","alcohol_content" => "4.0","price_index" => "0.1857394366197183","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-ice-light-raspberry-soda-450130"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Palm Bay Frozen Dragonfruit Watermelon Pouch","brand" => "Palm Bay","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.5","volume" => "296","alcohol_content" => "5.0","price_index" => "0.23648648648648649","country" => "Canada","url" => "https://www.lcbo.com/en/palm-bay-frozen-dragonfruit-watermelon-pouch-24393"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "7.25","volume" => "1000","alcohol_content" => "5.0","price_index" => "0.145","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-ice-321760"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Spirits Hard Sparkling Water Mixer Pack","brand" => "Muskoka Brewery","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "9.95","volume" => "1420","alcohol_content" => "5.0","price_index" => "0.14014084507042252","country" => "Canada","url" => "https://www.lcbo.com/en/muskoka-spirits-hard-sparkling-water-mixer-pack-19168"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Little Buddha Natural Peach Tea","brand" => "Little Buddha","category" => "Coolers","subcategory" => "Teas","price" => "2.95","volume" => "355","alcohol_content" => "4.0","price_index" => "0.20774647887323944","country" => "Canada","url" => "https://www.lcbo.com/en/little-buddha-peach-tea-19095"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nutrl Vodka Soda Lemon","brand" => "Nutrl","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/nutrl-vodka-soda-lemon-553164"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Crabbies Original Alcoholic Ginger Beer","brand" => "Crabbies","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "4.7","volume" => "500","alcohol_content" => "4.0","price_index" => "0.23500000000000001","country" => "United Kingdom","url" => "https://www.lcbo.com/en/crabbies-original-alcoholic-ginger-beer-272807"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Social Lite Grapefruit Pomelo Vodka Soda","brand" => "Social Lite","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "10.5","volume" => "1420","alcohol_content" => "4.0","price_index" => "0.18485915492957744","country" => "Canada","url" => "https://www.lcbo.com/en/social-lite-grapefruit-pomelo-vodka-soda-553214"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nova Scotia Spirits Vodka Soda Lemon Lime","brand" => "Blue Lobster","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "2.95","volume" => "473","alcohol_content" => "6.0","price_index" => "0.10394644115574349","country" => "Canada","url" => "https://www.lcbo.com/en/blue-lobster-vodka-soda-lemon-lime-667303"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jack Daniel's & Cola","brand" => "Jack Daniel's","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.0","volume" => "473","alcohol_content" => "6.0","price_index" => "0.10570824524312897","country" => "United States","url" => "https://www.lcbo.com/en/jack-daniel-s-cola-166090"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Canadian Club & Ginger Ale","brand" => "Canadian Club","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.0","volume" => "473","alcohol_content" => "5.0","price_index" => "0.12684989429175475","country" => "Canada","url" => "https://www.lcbo.com/en/canadian-club-ginger-ale-24325"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jaw Drop Sucking Lemons","brand" => "Jaw Drop","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.0","volume" => "473","alcohol_content" => "7.0","price_index" => "0.09060706735125337","country" => "Canada","url" => "https://www.lcbo.com/en/jaw-drop-sucking-lemons-281907"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mott's Clamato Caesar Extra Spicy","brand" => "Mott's","category" => "Coolers","subcategory" => "Caesars","price" => "10.9","volume" => "1420","alcohol_content" => "5.5","price_index" => "0.13956466069142126","country" => "Canada","url" => "https://www.lcbo.com/en/mott-s-clamato-caesar-extra-spicy-569400"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Social Lite Mango Lemonade","brand" => "Social Lite","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "3.0","volume" => "473","alcohol_content" => "5.0","price_index" => "0.12684989429175475","country" => "Canada","url" => "https://www.lcbo.com/en/social-lite-mango-lemonade-19115"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cabana Coast Moscow Mule","brand" => "Cabana Coast","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.05","volume" => "473","alcohol_content" => "7.0","price_index" => "0.09211718514044093","country" => "Canada","url" => "https://www.lcbo.com/en/cabana-coast-moscow-mule-491746"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rev (PET)","brand" => "Rev","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "2.95","volume" => "473","alcohol_content" => "7.0","price_index" => "0.08909694956206583","country" => "Canada","url" => "https://www.lcbo.com/en/rev-pet-77933"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hail Caesar Korean Bbq","brand" => "Hail Caesar","category" => "Coolers","subcategory" => "Caesars","price" => "3.35","volume" => "473","alcohol_content" => "7.0","price_index" => "0.10117789187556628","country" => "Canada","url" => "https://www.lcbo.com/en/hail-caesar-korean-bbq-24399"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice Raspberry","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "13.25","volume" => "2130","alcohol_content" => "5.0","price_index" => "0.12441314553990611","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-ice-raspberry-492405"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sip Botanical Hard Seltzer Yuzu + Cherry Blossom","brand" => "Bench Brewing Company","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "3.0","volume" => "473","alcohol_content" => "4.0","price_index" => "0.15856236786469344","country" => "Canada","url" => "https://www.lcbo.com/en/sip-botanical-hard-seltzer-yuzu-cherry-blossom-24326"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Topo Chico Strawberry Guava","brand" => "Topo Chico","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.1","volume" => "473","alcohol_content" => "4.7","price_index" => "0.1394449192568935","country" => "Canada","url" => "https://www.lcbo.com/en/topo-chico-strawberry-guava-25315"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice Berry Blast","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-berry-blast-553339"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mike's Hard Peach Fuzz","brand" => "Mike's","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.15","volume" => "473","alcohol_content" => "5.0","price_index" => "0.13319238900634248","country" => "Canada","url" => "https://www.lcbo.com/en/mike-s-hard-peach-fuzz-19144"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Landshark Seltzer Pineapple Mango","brand" => "Landshark","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "2.95","volume" => "473","alcohol_content" => "4.0","price_index" => "0.1559196617336152","country" => "Canada","url" => "https://www.lcbo.com/en/landshark-seltzer-pineapple-mango-19167"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Seagram Island Time Anytime","brand" => "Seagrams","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "14.0","volume" => "2130","alcohol_content" => "5.0","price_index" => "0.13145539906103287","country" => "Canada","url" => "https://www.lcbo.com/en/seagram-island-time-anytime-649541"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Palm Bay Key Lime Cherry","brand" => "Palm Bay","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "12.95","volume" => "2130","alcohol_content" => "5.0","price_index" => "0.1215962441314554","country" => "Canada","url" => "https://www.lcbo.com/en/palm-bay-key-lime-cherry-225904"
        ]);
        DB::table('alcohols')->insert([
            "title" => "White Claw Hard Seltzer Raspberry","brand" => "White Claw","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/white-claw-hard-seltzer-raspberry-19118"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Twisted Tea Hard Iced Tea Original","brand" => "Twisted Tea","category" => "Coolers","subcategory" => "Teas","price" => "14.1","volume" => "2130","alcohol_content" => "5.0","price_index" => "0.1323943661971831","country" => "Canada","url" => "https://www.lcbo.com/en/twisted-tea-hard-iced-tea-original-570275"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Palm Bay Island Mixer","brand" => "Palm Bay","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "24.5","volume" => "4260","alcohol_content" => "5.0","price_index" => "0.11502347417840375","country" => "Canada","url" => "https://www.lcbo.com/en/palm-bay-island-mixer-24400"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Matt & Steve's Caesar Original Lightly Spiced","brand" => "Matt & Steve's","category" => "Coolers","subcategory" => "Caesars","price" => "3.4","volume" => "473","alcohol_content" => "5.5","price_index" => "0.13069383048241398","country" => "Canada","url" => "https://www.lcbo.com/en/matt-steve-s-caesar-original-lightly-spiced-15310"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Seagram Island Time Coconut Lime","brand" => "Seagrams","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "14.0","volume" => "2130","alcohol_content" => "5.0","price_index" => "0.13145539906103287","country" => "Canada","url" => "https://www.lcbo.com/en/seagram-island-time-coconut-lime-19110"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jose Cuervo Playamar Mango","brand" => "Jose Cuervo","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "11.95","volume" => "1420","alcohol_content" => "4.5","price_index" => "0.18701095461658843","country" => "United States","url" => "https://www.lcbo.com/en/jose-cuervo-playamar-mango-24352"
        ]);
        DB::table('alcohols')->insert([
            "title" => "White Claw Iced Tea Lemon","brand" => "White Claw","category" => "Coolers","subcategory" => "Teas","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/white-claw-iced-tea-lemon-24318"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Vizzy Hard Seltzer Blackberry Lemon","brand" => "Vizzy","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "3.1","volume" => "473","alcohol_content" => "4.5","price_index" => "0.1456424712238666","country" => "Canada","url" => "https://www.lcbo.com/en/vizzy-hard-seltzer-blackberry-lemon-24388"
        ]);
        DB::table('alcohols')->insert([
            "title" => "fl!ng Cucumber Mint Vodka Soda","brand" => "Fl!Ng","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.95","volume" => "355","alcohol_content" => "5.0","price_index" => "0.16619718309859155","country" => "Canada","url" => "https://www.lcbo.com/en/fl-ng-cucumber-mint-vodka-soda-25273"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Vodka & Soda Cranberry Lime","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "10.55","volume" => "1420","alcohol_content" => "4.5","price_index" => "0.16510172143974963","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-vodka-soda-cranberry-lime-649269"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Truly Peach Tea","brand" => "Truly","category" => "Coolers","subcategory" => "Teas","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/truly-peach-tea-24386"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Palm Bay Ruby Grapefruit","brand" => "Palm Bay","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "12.95","volume" => "2130","alcohol_content" => "5.0","price_index" => "0.1215962441314554","country" => "Canada","url" => "https://www.lcbo.com/en/palm-bay-ruby-grapefruit-211227"
        ]);
        DB::table('alcohols')->insert([
            "title" => "American Vintage Hard Iced Tea Peach","brand" => "American Vintage","category" => "Coolers","subcategory" => "Teas","price" => "2.95","volume" => "473","alcohol_content" => "5.0","price_index" => "0.12473572938689217","country" => "Canada","url" => "https://www.lcbo.com/en/american-vintage-hard-iced-tea-peach-24925"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Strawberry Kiwi Vodka Water","brand" => "Cottage Springs","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.75","volume" => "355","alcohol_content" => "5.0","price_index" => "0.15492957746478872","country" => "Canada","url" => "https://www.lcbo.com/en/cottage-springs-strawberry-kiwi-vodka-water-14499"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rockstar Original","brand" => "Rockstar","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.5","volume" => "473","alcohol_content" => "6.9","price_index" => "0.1072402487973772","country" => "Canada","url" => "https://www.lcbo.com/en/rockstar-original-211185"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Landshark Seltzer Passionfruit Strawberry","brand" => "Landshark","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "2.95","volume" => "473","alcohol_content" => "4.0","price_index" => "0.1559196617336152","country" => "Canada","url" => "https://www.lcbo.com/en/landshark-seltzer-passionfruit-strawberry-24410"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light Seltzer Mango","brand" => "Bud Light","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "3.1","volume" => "473","alcohol_content" => "4.0","price_index" => "0.1638477801268499","country" => "Canada","url" => "https://www.lcbo.com/en/bud-light-seltzer-mango-20351"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Social Lite Triple Berry Vodka Soda","brand" => "Social Lite","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "10.5","volume" => "1420","alcohol_content" => "4.0","price_index" => "0.18485915492957744","country" => "Canada","url" => "https://www.lcbo.com/en/social-lite-triple-berry-vodka-soda-14477"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Vodka Mixed Berry (PET)","brand" => "Black Fly","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "11.35","volume" => "1600","alcohol_content" => "7.0","price_index" => "0.1013392857142857","country" => "Canada","url" => "https://www.lcbo.com/en/black-fly-vodka-mixed-berry-pet-553560"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Twisted Shotz B52","brand" => "Twisted Shotz","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "10.45","volume" => "120","alcohol_content" => "20.0","price_index" => "0.4354166666666666","country" => "New Zealand","url" => "https://www.lcbo.com/en/twisted-shotz-b52-491480"
        ]);
        DB::table('alcohols')->insert([
            "title" => "White Claw Hard Seltzer Mango 6x355mL","brand" => "White Claw","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "14.95","volume" => "2130","alcohol_content" => "5.0","price_index" => "0.14037558685446008","country" => "Canada","url" => "https://www.lcbo.com/en/white-claw-hard-seltzer-mango-6x355ml-19123"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brock Street Raspberry Lemon Vodka Soda","brand" => "Brock Street Brewing","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "2.95","volume" => "473","alcohol_content" => "5.5","price_index" => "0.11339611762444744","country" => "Canada","url" => "https://www.lcbo.com/en/brock-street-raspberry-lemon-vodka-soda-24327"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Twisted Tea Half and Half","brand" => "Twisted Tea","category" => "Coolers","subcategory" => "Teas","price" => "3.15","volume" => "473","alcohol_content" => "5.0","price_index" => "0.13319238900634248","country" => "Canada","url" => "https://www.lcbo.com/en/twisted-tea-half-and-half-649194"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Seltzer Splash Pack","brand" => "Coors Light","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "28.95","volume" => "4260","alcohol_content" => "4.5","price_index" => "0.1510172143974961","country" => "Canada","url" => "https://www.lcbo.com/en/coors-seltzer-fruit-splash-variety-pack-24431"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Mango Vodka Water Box","brand" => "Cottage Springs","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "24.95","volume" => "4000","alcohol_content" => "5.0","price_index" => "0.12475","country" => "Canada","url" => "https://www.lcbo.com/en/cottage-springs-mango-vodka-water-box-24347"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Qween Blueberry & Acai Vodka Beverage","brand" => "Qween","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.0","volume" => "473","alcohol_content" => "5.0","price_index" => "0.12684989429175475","country" => "Canada","url" => "https://www.lcbo.com/en/qween-blueberry-acai-vodka-beverage-24808"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cruise Mango Dragonfruit","brand" => "Cruise","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "2.95","volume" => "473","alcohol_content" => "4.7","price_index" => "0.13269758445414062","country" => "Canada","url" => "https://www.lcbo.com/en/cruise-mango-dragonfruit-25490"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bobby Classic Margarita","brand" => "Bobby Margarita","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.05","volume" => "473","alcohol_content" => "5.0","price_index" => "0.12896405919661733","country" => "Canada","url" => "https://www.lcbo.com/en/bobby-classic-margarita-24379"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Vodka Lemonade Mixed 8 Pack","brand" => "Cottage Springs","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "19.95","volume" => "2840","alcohol_content" => "5.0","price_index" => "0.14049295774647888","country" => "Canada","url" => "https://www.lcbo.com/en/cottage-springs-vodka-lemonade-mixed-8-pack-24353"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Citrus Half Smash","brand" => "Georgian Bay Rtd","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "2.1","volume" => "355","alcohol_content" => "2.5","price_index" => "0.23661971830985917","country" => "Canada","url" => "https://www.lcbo.com/en/georgian-bay-citrus-half-smash-19137"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice Light (PET)","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "7.25","volume" => "1000","alcohol_content" => "4.0","price_index" => "0.18125","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-ice-light-pet-321752"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "10.55","volume" => "1320","alcohol_content" => "5.0","price_index" => "0.15984848484848485","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-ice-321786"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mikes Hard Frozen White Freeze Pouch","brand" => "Mike's","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.5","volume" => "296","alcohol_content" => "5.0","price_index" => "0.23648648648648649","country" => "Canada","url" => "https://www.lcbo.com/en/mikes-hard-frozen-white-freeze-pouch-24395"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Twisted Tea Party Pack","brand" => "Twisted Tea","category" => "Coolers","subcategory" => "Teas","price" => "28.2","volume" => "4260","alcohol_content" => "5.0","price_index" => "0.1323943661971831","country" => "Canada","url" => "https://www.lcbo.com/en/twisted-tea-party-pack-15004"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Arizona Hard Green Tea","brand" => "Arizona","category" => "Coolers","subcategory" => "Teas","price" => "3.0","volume" => "473","alcohol_content" => "5.0","price_index" => "0.12684989429175475","country" => "Canada","url" => "https://www.lcbo.com/en/arizona-hard-green-tea-14484"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Seltzer Blue Raspberry","brand" => "Coors Light","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "3.1","volume" => "473","alcohol_content" => "4.5","price_index" => "0.1456424712238666","country" => "Canada","url" => "https://www.lcbo.com/en/coors-seltzer-blue-raspberry-24381"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice Light Black Cherry & Soda","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "10.55","volume" => "1420","alcohol_content" => "4.0","price_index" => "0.1857394366197183","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-ice-light-black-cherry-soda-450452"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bacardi Mojito","brand" => "Bacardi","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "2.65","volume" => "355","alcohol_content" => "5.0","price_index" => "0.14929577464788732","country" => "Canada","url" => "https://www.lcbo.com/en/bacardi-mojito-19119"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Truly Strawberry Lemonade","brand" => "Truly","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/truly-strawberry-lemonade-24809"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Watermelon Vodka Smash","brand" => "Georgian Bay","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/georgian-bay-watermelon-vodka-smash-24373"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff White Sangria","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-white-sangria-491662"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coco Vodka","brand" => "Coco Vodka","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "2.9","volume" => "473","alcohol_content" => "5.0","price_index" => "0.12262156448202959","country" => "Canada","url" => "https://www.lcbo.com/en/coco-vodka-19440"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice Original 12 Pack","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "26.45","volume" => "4260","alcohol_content" => "5.0","price_index" => "0.12417840375586854","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-ice-original-12-pack-26346"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Long Island Iced Tea (PET)","brand" => "Black Fly","category" => "Coolers","subcategory" => "Teas","price" => "11.35","volume" => "1600","alcohol_content" => "7.0","price_index" => "0.1013392857142857","country" => "Canada","url" => "https://www.lcbo.com/en/black-fly-long-island-iced-tea-pet-272773"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Walter Craft Caesar - Classic","brand" => "Walter","category" => "Coolers","subcategory" => "Caesars","price" => "3.8","volume" => "473","alcohol_content" => "4.5","price_index" => "0.17852948085506223","country" => "Canada","url" => "https://www.lcbo.com/en/walter-craft-caesar-classic-19103"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Snapple Spiked Peach Tea Vodka","brand" => "Snapple","category" => "Coolers","subcategory" => "Teas","price" => "3.15","volume" => "458","alcohol_content" => "5.5","price_index" => "0.12504962286621674","country" => "United States","url" => "https://www.lcbo.com/en/snapple-spiked-peach-tea-vodka-407775"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Social Lite Fruit Punch","brand" => "Social Lite","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "24.95","volume" => "4000","alcohol_content" => "5.0","price_index" => "0.12475","country" => "Canada","url" => "https://www.lcbo.com/en/social-lite-fruit-punch-24337"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light Seltzer Strawberry","brand" => "Bud Light","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "3.1","volume" => "473","alcohol_content" => "4.0","price_index" => "0.1638477801268499","country" => "Canada","url" => "https://www.lcbo.com/en/bud-light-seltzer-strawberry-20352"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jaw Drop Flashing Peaches","brand" => "Jaw Drop","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.0","volume" => "473","alcohol_content" => "7.0","price_index" => "0.09060706735125337","country" => "Canada","url" => "https://www.lcbo.com/en/jaw-drop-flashing-peaches-491514"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Pear Gin Smash","brand" => "Georgian Bay","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/georgian-bay-pear-gin-smash-24424"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light Seltzer Out Of Office Mixer","brand" => "Bud Light","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "28.95","volume" => "4260","alcohol_content" => "4.0","price_index" => "0.1698943661971831","country" => "Canada","url" => "https://www.lcbo.com/en/bud-light-seltzer-out-of-office-mixer-24403"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Vizzy Hard Seltzer Strawberry Lemonade","brand" => "Vizzy","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/vizzy-hard-seltzer-strawberry-lemonade-24391"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Twisted Shot PussyCat","brand" => "Twisted Shotz","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "10.45","volume" => "120","alcohol_content" => "20.0","price_index" => "0.4354166666666666","country" => "New Zealand","url" => "https://www.lcbo.com/en/pussycat-twisted-shot-19113"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Vodka Crushed Mixer Pack","brand" => "Black Fly","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "25.95","volume" => "4260","alcohol_content" => "7.0","price_index" => "0.08702213279678067","country" => "Canada","url" => "https://www.lcbo.com/en/black-fly-vodka-crushed-mixer-pack-24932"
        ]);
        DB::table('alcohols')->insert([
            "title" => "White Claw Hard Seltzer Pineapple","brand" => "White Claw","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/white-claw-hard-seltzer-pineapple-24316"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Espresso Martini Fizz","brand" => "Aloette RTD","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.25","volume" => "473","alcohol_content" => "5.5","price_index" => "0.12492792619642513","country" => "Canada","url" => "https://www.lcbo.com/en/aloette-espresso-martini-25274"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Lemon Lime Vodka Soda","brand" => "Cottage Springs","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.75","volume" => "355","alcohol_content" => "5.0","price_index" => "0.15492957746478872","country" => "Canada","url" => "https://www.lcbo.com/en/cottage-springs-lemon-lime-vodka-soda-553529"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bee's Knees","brand" => "Bee's Knees","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "2.95","volume" => "355","alcohol_content" => "5.0","price_index" => "0.16619718309859155","country" => "Canada","url" => "https://www.lcbo.com/en/bee-s-knees-16225"
        ]);
        DB::table('alcohols')->insert([
            "title" => "High Noon Pineapple","brand" => "High Noon","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "2.95","volume" => "355","alcohol_content" => "4.5","price_index" => "0.18466353677621286","country" => "United States","url" => "https://www.lcbo.com/en/high-noon-pineapple-24335"
        ]);
        DB::table('alcohols')->insert([
            "title" => "H2 Craft Spiritliss Hibiscus Non-Alcoholic Gin & Tonic","brand" => "Spiritliss","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "2.5","volume" => "355","alcohol_content" => "0.5","price_index" => "1.408450704225352","country" => "Canada","url" => "https://www.lcbo.com/en/h2-craft-spiritliss-hibiscus-non-alcoholic-gin-tonic-17435"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Vodka & Soda White Peach Rose","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "10.55","volume" => "1420","alcohol_content" => "4.5","price_index" => "0.16510172143974963","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-vodka-soda-white-peach-rose-14618"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Well Hibiscus Vodka Lemonade","brand" => "Well","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "2.95","volume" => "355","alcohol_content" => "4.0","price_index" => "0.20774647887323944","country" => "Canada","url" => "https://www.lcbo.com/en/well-hibiscus-infused-lemonade-14918"
        ]);
        DB::table('alcohols')->insert([
            "title" => "White Claw Hard Seltzer Black Cherry","brand" => "White Claw","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/white-claw-hard-seltzer-black-cherry-14486"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Cranberry Gin Smash","brand" => "Georgian Bay","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.1","volume" => "473","alcohol_content" => "5.0","price_index" => "0.1310782241014799","country" => "Canada","url" => "https://www.lcbo.com/en/georgian-bay-cranberry-gin-smash-570705"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Ontario Peach Vodka Soda","brand" => "Cottage Springs","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.75","volume" => "355","alcohol_content" => "5.0","price_index" => "0.15492957746478872","country" => "Canada","url" => "https://www.lcbo.com/en/cottage-springs-ontario-peach-vodka-soda-553537"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jaw Drop Squirting Oranges","brand" => "Jaw Drop","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.0","volume" => "473","alcohol_content" => "7.0","price_index" => "0.09060706735125337","country" => "Canada","url" => "https://www.lcbo.com/en/jaw-drop-squirting-oranges-407478"
        ]);
        DB::table('alcohols')->insert([
            "title" => "One, Two Tea! White Tea","brand" => "One, Two, Tea","category" => "Coolers","subcategory" => "Teas","price" => "2.95","volume" => "473","alcohol_content" => "4.3","price_index" => "0.14504154579871184","country" => "Canada","url" => "https://www.lcbo.com/en/one-two-tea-white-tea-24387"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sandbagger Hard Seltzer","brand" => "Sandbagger","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "2.85","volume" => "355","alcohol_content" => "5.0","price_index" => "0.16056338028169015","country" => "Canada","url" => "https://www.lcbo.com/en/sandbagger-hard-seltzer-19472"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mott's Clamato Caesar Chipotle Lime","brand" => "Mott's","category" => "Coolers","subcategory" => "Caesars","price" => "3.15","volume" => "458","alcohol_content" => "5.5","price_index" => "0.12504962286621674","country" => "United States","url" => "https://www.lcbo.com/en/mott-s-clamato-caesar-chipotle-lime-24341"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Crazy Uncle Hard Root Beer For Grown Ups","brand" => "Crazy Uncle","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.05","volume" => "473","alcohol_content" => "5.0","price_index" => "0.12896405919661733","country" => "Canada","url" => "https://www.lcbo.com/en/crazy-uncle-hard-root-beer-for-grown-ups-448779"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "29.45","volume" => "3960","alcohol_content" => "5.0","price_index" => "0.14873737373737372","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-ice-321778"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nutrl Vodka Soda Mixed Pack","brand" => "Nutrl","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "28.95","volume" => "4260","alcohol_content" => "5.0","price_index" => "0.13591549295774646","country" => "Canada","url" => "https://www.lcbo.com/en/nutrl-vodka-soda-mixed-pack-14994"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Watermelon","brand" => "Cottage Springs","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.7","volume" => "355","alcohol_content" => "5.0","price_index" => "0.15211267605633805","country" => "Canada","url" => "https://www.lcbo.com/en/cottage-springs-watermelon-649491"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mott's Clamato Caesar Sriracha","brand" => "Mott'S Original Clamato Caesar","category" => "Coolers","subcategory" => "Caesars","price" => "3.05","volume" => "458","alcohol_content" => "5.5","price_index" => "0.12107979356887652","country" => "United States","url" => "https://www.lcbo.com/en/mott-s-clamato-caesar-sriracha-19097"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sway Vodka Soda Raspberry Shimmy","brand" => "Squeezed Beverages","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "2.75","volume" => "355","alcohol_content" => "6.0","price_index" => "0.12910798122065728","country" => "Canada","url" => "https://www.lcbo.com/en/sway-vodka-soda-raspberry-shimmy-19152"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Local 55 Vodka Soda Raspberry","brand" => "Black Fly","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "9.75","volume" => "1420","alcohol_content" => "2.8","price_index" => "0.24522132796780685","country" => "Canada","url" => "https://www.lcbo.com/en/black-fly-local-55-vodka-soda-raspberry-14496"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rev Grapefruit Watermelon (PET)","brand" => "Rev","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "2.95","volume" => "473","alcohol_content" => "7.0","price_index" => "0.08909694956206583","country" => "Canada","url" => "https://www.lcbo.com/en/rev-grapefruit-watermelon-pet-649442"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Canadian Club & Ginger Ale","brand" => "Canadian Club Rtd","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "3.05","volume" => "473","alcohol_content" => "6.0","price_index" => "0.10747004933051445","country" => "Canada","url" => "https://www.lcbo.com/en/canadian-club-ginger-ale-273110"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Gin, Coolers + FREE sunglasses & limited release glasses","brand" => "GEORGIAN BAY","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "47.35","volume" => "2642","alcohol_content" => "40.0","price_index" => "0.04480507191521575","country" => "Canada","url" => "https://www.lcbo.com/en/georgian-bay-gin-coolers-free-sunglasses-limited-release-glasses-28009"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jaw Drop Gushing Grapes","brand" => "Jaw Drop","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "2.6","volume" => "473","alcohol_content" => "7.0","price_index" => "0.07852612503775293","country" => "Canada","url" => "https://www.lcbo.com/en/jaw-drop-gushing-grapes-554386"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nude Gin Soda Mixed Berry","brand" => "Nude Vodka Soda","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.95","volume" => "473","alcohol_content" => "5.0","price_index" => "0.12473572938689217","country" => "Canada","url" => "https://www.lcbo.com/en/nude-gin-soda-mixed-berry-14666"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Great Lakes Spirits Vodka Soda With Citrus","brand" => "Great Lakes","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.35","volume" => "473","alcohol_content" => "5.0","price_index" => "0.09936575052854123","country" => "Canada","url" => "https://www.lcbo.com/en/great-lakes-spirits-vodka-soda-with-citrus-19127"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Vodka Crushed Peach","brand" => "Black Fly","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "2.95","volume" => "473","alcohol_content" => "7.0","price_index" => "0.08909694956206583","country" => "Canada","url" => "https://www.lcbo.com/en/black-fly-vodka-crushed-peach-19111"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mott's Clamato Caesar Extra Spicy","brand" => "Mott'S","category" => "Coolers","subcategory" => "Caesars","price" => "24.25","volume" => "4260","alcohol_content" => "5.5","price_index" => "0.10349978659837815","country" => "Canada","url" => "https://www.lcbo.com/en/mott-s-clamato-caesar-extra-spicy-627513"
        ]);
        DB::table('alcohols')->insert([
            "title" => "No Boats On Sunday Wild Strawberry Rhubarb","brand" => "No Boats On Sunday Rtd","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.85","volume" => "355","alcohol_content" => "4.5","price_index" => "0.17840375586854462","country" => "Canada","url" => "https://www.lcbo.com/en/no-boats-on-sunday-wild-strawberry-rhubarb-19131"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Breezer Tropical Orange Smoothie (PET)","brand" => "Bacardi Breezer","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "6.95","volume" => "1000","alcohol_content" => "4.6","price_index" => "0.15108695652173915","country" => "Canada","url" => "https://www.lcbo.com/en/breezer-tropical-orange-smoothie-pet-75200"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jose Cuervo Golden Margarita","brand" => "Jose Cuervo Opc","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "17.45","volume" => "750","alcohol_content" => "12.7","price_index" => "0.1832020997375328","country" => "United States","url" => "https://www.lcbo.com/en/jose-cuervo-golden-margarita-54262"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Spirits Peach & Blackcurrant","brand" => "Muskoka","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.95","volume" => "473","alcohol_content" => "5.0","price_index" => "0.12473572938689217","country" => "Canada","url" => "https://www.lcbo.com/en/muskoka-spirits-peach-blackcurrant-19252"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Vex Raspberry Lemonade","brand" => "Vex","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "13.0","volume" => "1980","alcohol_content" => "7.0","price_index" => "0.09379509379509378","country" => "Canada","url" => "https://www.lcbo.com/en/vex-raspberry-lemonade-273219"
        ]);
        DB::table('alcohols')->insert([
            "title" => "SoCIAL LITE Mixed Pack","brand" => "Social Lite","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "28.95","volume" => "4260","alcohol_content" => "4.0","price_index" => "0.1698943661971831","country" => "Canada","url" => "https://www.lcbo.com/en/social-lite-mixed-pack-649426"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Palm Bay Iced Tea Pineapple Peach","brand" => "Palm Bay","category" => "Coolers","subcategory" => "Teas","price" => "10.55","volume" => "2130","alcohol_content" => "5.0","price_index" => "0.09906103286384978","country" => "Canada","url" => "https://www.lcbo.com/en/palm-bay-iced-tea-pineapple-peach-515429"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Social Lite Bold Orange Vodka Soda","brand" => "Social Lite","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "13.95","volume" => "2130","alcohol_content" => "6.0","price_index" => "0.10915492957746478","country" => "Canada","url" => "https://www.lcbo.com/en/social-lite-bold-orange-vodka-soda-14479"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Palm Bay Vodka Soda Tangerine Lime","brand" => "Palm Bay","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "13.5","volume" => "2130","alcohol_content" => "6.0","price_index" => "0.1056338028169014","country" => "Canada","url" => "https://www.lcbo.com/en/palm-bay-vodka-soda-tangerine-lime-555896"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beach Bum Lemon Coconut","brand" => "Beach Bum Rtd","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "2.3","volume" => "473","alcohol_content" => "5.0","price_index" => "0.09725158562367862","country" => "Canada","url" => "https://www.lcbo.com/en/beach-bum-lemon-coconut-14491"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice Life Of The Party Pack","brand" => "Smirnoff","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "29.2","volume" => "4260","alcohol_content" => "5.0","price_index" => "0.13708920187793427","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-ice-life-of-the-party-pack-21902"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Spirits Hard Sparkling Water Mixer LCO","brand" => "Muskoka","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "28.95","volume" => "4260","alcohol_content" => "5.0","price_index" => "0.13591549295774646","country" => "Canada","url" => "https://www.lcbo.com/en/muskoka-spirits-hard-sparkling-water-mixer-lco-20845"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ace Hill Strawberry Grapefruit Vodka Soda","brand" => "Ace Hill Beer Company","category" => "Coolers","subcategory" => "Seltzers & Sodas","price" => "2.15","volume" => "355","alcohol_content" => "4.5","price_index" => "0.13458528951486698","country" => "Canada","url" => "https://www.lcbo.com/en/ace-hill-strawberry-grapefruit-vodka-soda-19155"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bacardi Mojito Cocktail","brand" => "Bacardi","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "16.0","volume" => "750","alcohol_content" => "12.5","price_index" => "0.17066666666666666","country" => "United States","url" => "https://www.lcbo.com/en/bacardi-mojito-cocktail-19591"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Vodka Soda Gin Soda Mixer Pack","brand" => "Black Fly","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "25.95","volume" => "4260","alcohol_content" => "6.0","price_index" => "0.10152582159624413","country" => "Canada","url" => "https://www.lcbo.com/en/black-fly-vodka-soda-gin-soda-mixer-pack-15368"
        ]);
    }
}
