<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpiritSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alcohols')->insert([
            "title" => "Cazadores Reposado Tequila","brand" => "Cazadores","category" => "Spirits","subcategory" => "Tequila","price" => "39.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13316666666666668","country" => "Mexico","url" => "https://www.lcbo.com/en/cazadores-reposado-tequila-125187"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Aperol","brand" => "Aperol","category" => "Spirits","subcategory" => "Liqueur","price" => "28.75","volume" => "750","alcohol_content" => "11.0","price_index" => "0.3484848484848485","country" => "Italy","url" => "https://www.lcbo.com/en/aperol-176834"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Glenlivet Founder's Reserve Scotch Whisky","brand" => "The Glenlivet","category" => "Spirits","subcategory" => "Whisky","price" => "87.9","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.19276315789473686","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-glenlivet-founder-s-reserve-scotch-whisky-474528"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Macallan Double Cask 18 Year Old (2 Bottle Limit)","brand" => "The Macallan","category" => "Spirits","subcategory" => "Whisky","price" => "499.95","volume" => "750","alcohol_content" => "43.0","price_index" => "1.5502325581395349","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-macallan-double-cask-18-yr-18823"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenfiddich 12 Year Old Single Malt Scotch Whisky","brand" => "Glenfiddich","category" => "Spirits","subcategory" => "Whisky","price" => "100.35","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.2200657894736842","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenfiddich-12-year-old-single-malt-scotch-whisky-605923"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Guy Lafleur No. 10 Gin","brand" => "Guy Lafleur","category" => "Spirits","subcategory" => "Gin","price" => "47.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.14868217054263566","country" => "Canada","url" => "https://www.lcbo.com/en/guy-lafleur-no-10-gin-22887"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Spirit In Niagara Sweet Pear Eau-de-Vie","brand" => "Spirit In Niagara","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "40.0","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13333333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/spirit-in-niagara-sweet-pear-eau-de-vie-25101"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Clase Azul Tequila","brand" => "Clase Azul","category" => "Spirits","subcategory" => "Tequila","price" => "298.05","volume" => "750","alcohol_content" => "40.0","price_index" => "0.9935","country" => "Mexico","url" => "https://www.lcbo.com/en/clase-azul-tequila-364877"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Fireball 50ml 6 Pack Carrier","brand" => "Fireball","category" => "Spirits","subcategory" => "Liqueur","price" => "11.95","volume" => "300","alcohol_content" => "33.0","price_index" => "0.1207070707070707","country" => "Canada","url" => "https://www.lcbo.com/en/fireball-50ml-6-pack-carrier-10946"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dewar's White Label Scotch Whisky","brand" => "Dewar's","category" => "Spirits","subcategory" => "Whisky","price" => "29.0","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09666666666666666","country" => "United Kingdom","url" => "https://www.lcbo.com/en/dewar-s-white-label-scotch-whisky-11130"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Glenlivet Founder's Reserve Scotch Whisky","brand" => "The Glenlivet","category" => "Spirits","subcategory" => "Whisky","price" => "19.35","volume" => "200","alcohol_content" => "40.0","price_index" => "0.241875","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-glenlivet-founder-s-reserve-scotch-whisky-561068"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Charm Soju Liquor","brand" => "Charm","category" => "Spirits","subcategory" => "Soju","price" => "10.05","volume" => "360","alcohol_content" => "20.0","price_index" => "0.13958333333333334","country" => "South Korea","url" => "https://www.lcbo.com/en/charm-soju-liquor-40626"
            ]);
            DB::table('alcohols')->insert([
            "title" => "McGuinness Blue Curacao","brand" => "McGuinness","category" => "Spirits","subcategory" => "Liqueur","price" => "19.95","volume" => "750","alcohol_content" => "15.0","price_index" => "0.17733333333333332","country" => "Canada","url" => "https://www.lcbo.com/en/mcguinness-blue-curacao-631200"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Black Fox Gin #7 Cucumber","brand" => "Private Stock","category" => "Spirits","subcategory" => "Gin","price" => "78.55","volume" => "750","alcohol_content" => "42.0","price_index" => "0.24936507936507935","country" => "Canada","url" => "https://www.lcbo.com/en/black-fox-gin-7-cucumber-712363"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bombay Sapphire East London Dry Gin","brand" => "Bombay Sapphire","category" => "Spirits","subcategory" => "Gin","price" => "34.3","volume" => "750","alcohol_content" => "42.0","price_index" => "0.10888888888888888","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bombay-sapphire-east-london-dry-gin-319673"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crown Royal Whisky","brand" => "Crown Royal","category" => "Spirits","subcategory" => "Whisky","price" => "67.95","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09707142857142857","country" => "Canada","url" => "https://www.lcbo.com/en/crown-royal-whisky-114694"
            ]);
            DB::table('alcohols')->insert([
            "title" => "El Dorado Special Reserve 15 Year Old Rum","brand" => "El Dorado","category" => "Spirits","subcategory" => "Rum","price" => "68.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.22733333333333333","country" => "Guyana","url" => "https://www.lcbo.com/en/el-dorado-special-reserve-15-year-old-rum-705418"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crown Royal Whisky","brand" => "Crown Royal","category" => "Spirits","subcategory" => "Whisky","price" => "45.45","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09967105263157895","country" => "Canada","url" => "https://www.lcbo.com/en/crown-royal-whisky-217950"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tito's Handmade Vodka","brand" => "Tito's","category" => "Spirits","subcategory" => "Vodka","price" => "52.95","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.11611842105263158","country" => "United States","url" => "https://www.lcbo.com/en/tito-s-handmade-vodka-628990"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smirnoff Raspberry Flavoured Vodka","brand" => "Smirnoff","category" => "Spirits","subcategory" => "Vodka","price" => "16.65","volume" => "375","alcohol_content" => "35.0","price_index" => "0.12685714285714284","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-raspberry-flavoured-vodka-381996"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Belvedere Pure Vodka","brand" => "Belvedere","category" => "Spirits","subcategory" => "Vodka","price" => "52.45","volume" => "750","alcohol_content" => "40.0","price_index" => "0.17483333333333334","country" => "Poland","url" => "https://www.lcbo.com/en/belvedere-pure-vodka-437772"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crown Royal Northern Harvest Rye","brand" => "Crown Royal","category" => "Spirits","subcategory" => "Whisky","price" => "37.95","volume" => "750","alcohol_content" => "45.0","price_index" => "0.11244444444444446","country" => "Canada","url" => "https://www.lcbo.com/en/crown-royal-northern-harvest-rye-434092"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smirnoff Vodka (PET)","brand" => "Smirnoff","category" => "Spirits","subcategory" => "Vodka","price" => "64.6","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09228571428571428","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-vodka-pet-38505"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grand Marnier Cuv�e du Centenaire 100th","brand" => "Grand Marnier","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "151.55","volume" => "750","alcohol_content" => "40.0","price_index" => "0.5051666666666667","country" => "France","url" => "https://www.lcbo.com/en/grand-marnier-cuv-ce-du-centenaire-100th-108704"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grant's Triple Wood Blended Scotch Whisky","brand" => "Grant's","category" => "Spirits","subcategory" => "Whisky","price" => "50.35","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.11041666666666666","country" => "United Kingdom","url" => "https://www.lcbo.com/en/grant-s-triple-wood-blended-scotch-whisky-605931"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Aperol Spritz Kit 375ml","brand" => "Aperol","category" => "Spirits","subcategory" => "Liqueur","price" => "22.95","volume" => "750","alcohol_content" => "11.0","price_index" => "0.2781818181818182","country" => "Italy","url" => "https://www.lcbo.com/en/aperol-spritz-kit-375ml-20927"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smirnoff Raspberry Flavoured Vodka","brand" => "Smirnoff","category" => "Spirits","subcategory" => "Vodka","price" => "29.75","volume" => "750","alcohol_content" => "35.0","price_index" => "0.11333333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-raspberry-flavoured-vodka-382002"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Espolon Tequila Blanco","brand" => "Espolon","category" => "Spirits","subcategory" => "Tequila","price" => "42.25","volume" => "750","alcohol_content" => "40.0","price_index" => "0.14083333333333334","country" => "Mexico","url" => "https://www.lcbo.com/en/espolon-tequila-blanco-324848"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gosling's Black Seal Rum 151 Proof","brand" => "Gosling's","category" => "Spirits","subcategory" => "Rum","price" => "49.95","volume" => "750","alcohol_content" => "75.5","price_index" => "0.08821192052980133","country" => "Canada","url" => "https://www.lcbo.com/en/gosling-s-black-seal-rum-151-proof-633289"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grey Goose Vodka","brand" => "Grey Goose","category" => "Spirits","subcategory" => "Vodka","price" => "115.95","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.16564285714285715","country" => "France","url" => "https://www.lcbo.com/en/grey-goose-vodka-604868"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lagavulin 8 Year Old Islay Single Malt Scotch Whisky","brand" => "Lagavulin","category" => "Spirits","subcategory" => "Whisky","price" => "96.95","volume" => "750","alcohol_content" => "48.0","price_index" => "0.2693055555555556","country" => "United Kingdom","url" => "https://www.lcbo.com/en/lagavulin-8-year-old-islay-single-malt-scotch-whisky-479881"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Woodford Reserve Straight Rye Whiskey","brand" => "Woodford Reserve","category" => "Spirits","subcategory" => "Whisky","price" => "53.25","volume" => "750","alcohol_content" => "45.2","price_index" => "0.1570796460176991","country" => "United States","url" => "https://www.lcbo.com/en/woodford-reserve-straight-rye-whiskey-480129"
            ]);
            DB::table('alcohols')->insert([
            "title" => "1800 Blanco Tequila","brand" => "1800 Tequila","category" => "Spirits","subcategory" => "Tequila","price" => "40.7","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13566666666666669","country" => "Mexico","url" => "https://www.lcbo.com/en/1800-silver-tequila-227678"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Madre Mezcal","brand" => "Madre","category" => "Spirits","subcategory" => "Tequila","price" => "85.75","volume" => "750","alcohol_content" => "45.0","price_index" => "0.25407407407407406","country" => "Mexico","url" => "https://www.lcbo.com/en/madre-mezcal-19423"
            ]);
            DB::table('alcohols')->insert([
            "title" => "St-Germain Elderflower Liqueur","brand" => "St-Germain","category" => "Spirits","subcategory" => "Liqueur","price" => "49.95","volume" => "750","alcohol_content" => "20.0","price_index" => "0.333","country" => "France","url" => "https://www.lcbo.com/en/st-germain-elderflower-liqueur-180695"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Kraken Black Spiced Rum","brand" => "The Kraken","category" => "Spirits","subcategory" => "Rum","price" => "33.5","volume" => "750","alcohol_content" => "47.0","price_index" => "0.0950354609929078","country" => "Trinidad & Tobago","url" => "https://www.lcbo.com/en/the-kraken-black-spiced-rum-225698"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Drumshanbo Gunpowder Irish Gin","brand" => "Drumshanbo","category" => "Spirits","subcategory" => "Gin","price" => "55.45","volume" => "750","alcohol_content" => "43.0","price_index" => "0.17193798449612405","country" => "Ireland","url" => "https://www.lcbo.com/en/drumshanbo-gunpowder-irish-gin-635508"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jack Daniel's Legacy # 1","brand" => "Jack Daniels","category" => "Spirits","subcategory" => "Whisky","price" => "34.5","volume" => "750","alcohol_content" => "42.75","price_index" => "0.10760233918128655","country" => "United States","url" => "https://www.lcbo.com/en/jack-daniel-s-legacy-1-10299"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Baileys Vanilla Cinnamon","brand" => "Baileys","category" => "Spirits","subcategory" => "Liqueur","price" => "32.05","volume" => "750","alcohol_content" => "17.0","price_index" => "0.2513725490196078","country" => "Ireland","url" => "https://www.lcbo.com/en/baileys-vanilla-cinnamon-392308"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Johnnie Walker Gold Label Reserve Scotch Whisky","brand" => "Johnnie Walker","category" => "Spirits","subcategory" => "Whisky","price" => "89.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.29983333333333334","country" => "United Kingdom","url" => "https://www.lcbo.com/en/johnnie-walker-gold-label-reserve-scotch-whisky-291278"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mount Gay Eclipse Rum","brand" => "Mount Gay","category" => "Spirits","subcategory" => "Rum","price" => "79.95","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.11421428571428571","country" => "Barbados","url" => "https://www.lcbo.com/en/mount-gay-eclipse-rum-369819"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smirnoff Blueberry Flavoured Vodka","brand" => "Smirnoff","category" => "Spirits","subcategory" => "Vodka","price" => "29.75","volume" => "750","alcohol_content" => "35.0","price_index" => "0.11333333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-blueberry-flavoured-vodka-380303"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tanqueray London Dry Gin","brand" => "Tanqueray","category" => "Spirits","subcategory" => "Gin","price" => "66.55","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09507142857142857","country" => "United Kingdom","url" => "https://www.lcbo.com/en/tanqueray-dry-gin-96263"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crown Royal Peach","brand" => "Crown Royal","category" => "Spirits","subcategory" => "Whisky","price" => "33.45","volume" => "750","alcohol_content" => "35.0","price_index" => "0.12742857142857145","country" => "Canada","url" => "https://www.lcbo.com/en/crown-royal-peach-10357"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Casamigos Tequila Blanco","brand" => "Casamigos","category" => "Spirits","subcategory" => "Tequila","price" => "80.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.26733333333333337","country" => "Mexico","url" => "https://www.lcbo.com/en/casamigos-tequila-blanco-386789"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Maker's Mark 46","brand" => "Maker's Mark","category" => "Spirits","subcategory" => "Whisky","price" => "59.95","volume" => "750","alcohol_content" => "46.4","price_index" => "0.17227011494252875","country" => "United States","url" => "https://www.lcbo.com/en/maker-s-mark-46-225565"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dixons Wicked Raspberry Gin","brand" => "Dixon's","category" => "Spirits","subcategory" => "Gin","price" => "40.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.134","country" => "Canada","url" => "https://www.lcbo.com/en/dixons-wicked-raspberry-gin-24796"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Knob Creek Single Barrel","brand" => "Knob Creek","category" => "Spirits","subcategory" => "Whisky","price" => "62.95","volume" => "750","alcohol_content" => "60.0","price_index" => "0.1398888888888889","country" => "United States","url" => "https://www.lcbo.com/en/knob-creek-single-barrel-255232"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Maker's Mark Kentucky Bourbon","brand" => "Maker's Mark","category" => "Spirits","subcategory" => "Whisky","price" => "23.95","volume" => "375","alcohol_content" => "45.0","price_index" => "0.14192592592592593","country" => "United States","url" => "https://www.lcbo.com/en/maker-s-mark-kentucky-bourbon-269563"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Superior White Rum","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "114.95","volume" => "3000","alcohol_content" => "40.0","price_index" => "0.09579166666666666","country" => "Puerto Rico","url" => "https://www.lcbo.com/en/bacardi-superior-white-rum-179283"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Siempre Tequila Anejo","brand" => "Siempre","category" => "Spirits","subcategory" => "Tequila","price" => "86.55","volume" => "750","alcohol_content" => "39.6","price_index" => "0.2914141414141414","country" => "Mexico","url" => "https://www.lcbo.com/en/siempre-tequila-anejo-666594"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bulleit Bourbon","brand" => "Bulleit","category" => "Spirits","subcategory" => "Whisky","price" => "22.45","volume" => "375","alcohol_content" => "45.0","price_index" => "0.13303703703703704","country" => "United States","url" => "https://www.lcbo.com/en/bulleit-bourbon-482729"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bombay Bramble Mule Cocktail Kit","brand" => "BOMBAY SAPPHIRE","category" => "Spirits","subcategory" => "Gin","price" => "32.25","volume" => "750","alcohol_content" => "43.0","price_index" => "0.1","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bombay-bramble-mule-cocktail-kit-28008"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Alize Red Passion Liquor","brand" => "Alize","category" => "Spirits","subcategory" => "Liqueur","price" => "28.15","volume" => "750","alcohol_content" => "14.9","price_index" => "0.2519015659955257","country" => "France","url" => "https://www.lcbo.com/en/alize-red-passion-liquor-338053"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Aberlour A'Bunadh Scotch Whisky","brand" => "Aberlour","category" => "Spirits","subcategory" => "Whisky","price" => "110.35","volume" => "750","alcohol_content" => "61.5","price_index" => "0.2392411924119241","country" => "United Kingdom","url" => "https://www.lcbo.com/en/aberlour-a-bunadh-scotch-whisky-573352"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lucid Absinthe Superieure","brand" => "Lucid","category" => "Spirits","subcategory" => "Liqueur","price" => "71.0","volume" => "750","alcohol_content" => "62.0","price_index" => "0.15268817204301074","country" => "France","url" => "https://www.lcbo.com/en/lucid-absinthe-superieure-225938"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ballantine's Blended Scotch Whisky","brand" => "Ballantine's","category" => "Spirits","subcategory" => "Whisky","price" => "30.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10066666666666667","country" => "United Kingdom","url" => "https://www.lcbo.com/en/ballantine-s-blended-scotch-whisky-1610"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Buffalo Trace Kentucky Straight Bourbon Whiskey","brand" => "Buffalo Trace","category" => "Spirits","subcategory" => "Whisky","price" => "42.25","volume" => "750","alcohol_content" => "45.0","price_index" => "0.12518518518518518","country" => "United States","url" => "https://www.lcbo.com/en/buffalo-trace-kentucky-straight-bourbon-whiskey-605063"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Chartreuse Green","brand" => "Chartreuse","category" => "Spirits","subcategory" => "Liqueur","price" => "40.2","volume" => "375","alcohol_content" => "55.0","price_index" => "0.1949090909090909","country" => "France","url" => "https://www.lcbo.com/en/chartreuse-green-37333"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Whitley Neill Handcrafted Blood Orange Gin","brand" => "Whitley Neill","category" => "Spirits","subcategory" => "Gin","price" => "44.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.1393798449612403","country" => "United Kingdom","url" => "https://www.lcbo.com/en/whitley-neill-handcrafted-blood-orange-gin-14754"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grey Goose and St. Germain Le Grand Fizz Cocktail Kit","brand" => "LCBO","category" => "Spirits","subcategory" => "Vodka","price" => "101.9","volume" => "1500","alcohol_content" => "40.0","price_index" => "0.16983333333333334","country" => "France","url" => "https://www.lcbo.com/en/grey-goose-and-st-germain-le-grand-fizz-cocktail-kit-26981"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Aviation Gin","brand" => "Aviation","category" => "Spirits","subcategory" => "Gin","price" => "23.95","volume" => "375","alcohol_content" => "42.0","price_index" => "0.15206349206349207","country" => "United States","url" => "https://www.lcbo.com/en/aviation-gin-16608"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kinmen Guardian Lion","brand" => "Kinmen","category" => "Spirits","subcategory" => "Gin","price" => "117.15","volume" => "1000","alcohol_content" => "58.0","price_index" => "0.20198275862068968","country" => "Taiwan, Province of China","url" => "https://www.lcbo.com/en/kinmen-guardian-lion-21726"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hendrick's Gin","brand" => "Hendrick's","category" => "Spirits","subcategory" => "Gin","price" => "53.25","volume" => "750","alcohol_content" => "44.0","price_index" => "0.16136363636363638","country" => "United Kingdom","url" => "https://www.lcbo.com/en/hendrick-s-gin-637504"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kahlua Coffee Flavoured Liquor","brand" => "Kahlua","category" => "Spirits","subcategory" => "Liqueur","price" => "30.05","volume" => "750","alcohol_content" => "16.0","price_index" => "0.2504166666666667","country" => "Mexico","url" => "https://www.lcbo.com/en/kahlua-coffee-flavoured-liquor-10213"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grand Marnier Cordon Rouge","brand" => "Grand Marnier","category" => "Spirits","subcategory" => "Liqueur","price" => "52.55","volume" => "750","alcohol_content" => "40.0","price_index" => "0.17516666666666666","country" => "France","url" => "https://www.lcbo.com/en/grand-marnier-cordon-rouge-1784"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Baileys Original Irish Cream","brand" => "Baileys","category" => "Spirits","subcategory" => "Liqueur","price" => "31.05","volume" => "750","alcohol_content" => "17.0","price_index" => "0.24352941176470586","country" => "Ireland","url" => "https://www.lcbo.com/en/baileys-original-irish-cream-5959"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Yoichi Single Malt Non-Peated Limited Edition 2021 (1 Bottle Limit)","brand" => "Yoichi","category" => "Spirits","subcategory" => "Whisky","price" => "279.95","volume" => "700","alcohol_content" => "47.0","price_index" => "0.8509118541033435","country" => "Japan","url" => "https://www.lcbo.com/en/yoichi-single-malt-non-peated-limited-edition-2021-24684"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Gold Rum (PET)","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "65.95","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09421428571428572","country" => "Puerto Rico","url" => "https://www.lcbo.com/en/bacardi-gold-rum-pet-520312"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gabriel Boudier Creme de Cassis de Dijon","brand" => "Gabriel Boudier","category" => "Spirits","subcategory" => "Liqueur","price" => "34.45","volume" => "350","alcohol_content" => "20.0","price_index" => "0.49214285714285716","country" => "France","url" => "https://www.lcbo.com/en/gabriel-boudier-creme-de-cassis-de-dijon-313899"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jagermeister","brand" => "Jagermeister","category" => "Spirits","subcategory" => "Liqueur","price" => "29.85","volume" => "750","alcohol_content" => "35.0","price_index" => "0.11371428571428573","country" => "Germany","url" => "https://www.lcbo.com/en/jagermeister-117101"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smirnoff Peach Lemonade","brand" => "Smirnoff","category" => "Spirits","subcategory" => "Vodka","price" => "29.75","volume" => "750","alcohol_content" => "30.0","price_index" => "0.1322222222222222","country" => "United States","url" => "https://www.lcbo.com/en/smirnoff-peach-lemonade-25227"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Banff Ice Vodka (PET)","brand" => "Banff Ice","category" => "Spirits","subcategory" => "Vodka","price" => "64.6","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09228571428571428","country" => "Canada","url" => "https://www.lcbo.com/en/banff-ice-vodka-pet-454462"
            ]);
            DB::table('alcohols')->insert([
            "title" => "J.P. Wiser's 18 Year Old Canadian Whisky","brand" => "J.P. Wiser's","category" => "Spirits","subcategory" => "Whisky","price" => "84.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2831666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/j-p-wiser-s-18-year-old-canadian-whisky-207639"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Four Roses Small Batch Bourbon","brand" => "Four Roses","category" => "Spirits","subcategory" => "Whisky","price" => "49.25","volume" => "750","alcohol_content" => "45.0","price_index" => "0.14592592592592593","country" => "United States","url" => "https://www.lcbo.com/en/four-roses-small-batch-bourbon-256230"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Legent","brand" => "Legent","category" => "Spirits","subcategory" => "Whisky","price" => "63.95","volume" => "750","alcohol_content" => "47.0","price_index" => "0.18141843971631205","country" => "United States","url" => "https://www.lcbo.com/en/legent-10393"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Redemption Rye Whiskey","brand" => "Redemption Rye Whiskey","category" => "Spirits","subcategory" => "Whisky","price" => "49.85","volume" => "750","alcohol_content" => "45.77","price_index" => "0.1452188478625009","country" => "United States","url" => "https://www.lcbo.com/en/redemption-rye-whiskey-12593"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gibson's Finest Rare 12 Year Old Whisky","brand" => "Gibson's Finest","category" => "Spirits","subcategory" => "Whisky","price" => "74.95","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.10707142857142858","country" => "Canada","url" => "https://www.lcbo.com/en/gibson-s-finest-rare-12-year-old-whisky-200741"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Casamigos Tequila Anejo","brand" => "Casamigos","category" => "Spirits","subcategory" => "Tequila","price" => "100.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.334","country" => "Mexico","url" => "https://www.lcbo.com/en/casamigos-tequila-anejo-425686"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Pallini Limoncello","brand" => "Pallini","category" => "Spirits","subcategory" => "Liqueur","price" => "21.9","volume" => "500","alcohol_content" => "26.0","price_index" => "0.16846153846153844","country" => "Italy","url" => "https://www.lcbo.com/en/pallini-limoncello-318047"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Baileys Espresso","brand" => "Baileys","category" => "Spirits","subcategory" => "Liqueur","price" => "31.55","volume" => "750","alcohol_content" => "16.9","price_index" => "0.24891518737672588","country" => "Ireland","url" => "https://www.lcbo.com/en/baileys-espresso-11248"
            ]);
            DB::table('alcohols')->insert([
            "title" => "J.P. Wiser's Vanilla Whisky","brand" => "J.P. Wiser's","category" => "Spirits","subcategory" => "Whisky","price" => "30.5","volume" => "750","alcohol_content" => "35.0","price_index" => "0.11619047619047619","country" => "Canada","url" => "https://www.lcbo.com/en/j-p-wiser-s-vanilla-whisky-474551"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Baileys Colada","brand" => "Baileys","category" => "Spirits","subcategory" => "Liqueur","price" => "32.45","volume" => "750","alcohol_content" => "17.0","price_index" => "0.25450980392156863","country" => "Ireland","url" => "https://www.lcbo.com/en/baileys-colada-19418"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Siempre Tequila Plata","brand" => "Siempre","category" => "Spirits","subcategory" => "Tequila","price" => "60.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2006666666666667","country" => "Mexico","url" => "https://www.lcbo.com/en/siempre-tequila-plata-19924"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Absolut Citron Vodka","brand" => "Absolut","category" => "Spirits","subcategory" => "Vodka","price" => "30.45","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10149999999999999","country" => "Sweden","url" => "https://www.lcbo.com/en/absolut-citron-vodka-257238"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sabra Chocolate Orange Liqueur KP","brand" => "Sabra","category" => "Spirits","subcategory" => "Liqueur","price" => "50.7","volume" => "750","alcohol_content" => "30.0","price_index" => "0.22533333333333336","country" => "Israel","url" => "https://www.lcbo.com/en/sabra-chocolate-orange-liqueur-kp-897900"
            ]);
            DB::table('alcohols')->insert([
            "title" => "St Remy VSOP Brandy (PET)","brand" => "St-Remy","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "71.6","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.10228571428571427","country" => "France","url" => "https://www.lcbo.com/en/st-remy-vsop-brandy-pet-309773"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lamb's Spiced Rum","brand" => "LAMB'S","category" => "Spirits","subcategory" => "Rum","price" => "29.95","volume" => "750","alcohol_content" => "35.0","price_index" => "0.1140952380952381","country" => "Canada","url" => "https://www.lcbo.com/en/lamb-s-spiced-rum-25120"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ketel One Vodka","brand" => "Ketel One","category" => "Spirits","subcategory" => "Vodka","price" => "69.95","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09992857142857144","country" => "Netherlands","url" => "https://www.lcbo.com/en/ketel-one-vodka-312959"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grand Mayan Ultra Aged Extra Anejo Tequila","brand" => "Grand Mayan","category" => "Spirits","subcategory" => "Tequila","price" => "162.8","volume" => "750","alcohol_content" => "40.0","price_index" => "0.5426666666666667","country" => "Mexico","url" => "https://www.lcbo.com/en/grand-mayan-ultra-aged-extra-anejo-tequila-17468"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenfiddich 15 Year Old Single Malt Scotch Whisky","brand" => "Glenfiddich","category" => "Spirits","subcategory" => "Whisky","price" => "105.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.3506666666666667","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenfiddich-15-year-old-single-malt-scotch-whisky-605972"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Shede Classic","brand" => "Shede","category" => "Spirits","subcategory" => "Liqueur","price" => "130.95","volume" => "500","alcohol_content" => "52.0","price_index" => "0.5036538461538461","country" => "China","url" => "https://www.lcbo.com/en/shede-classic-26366"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hornitos Plata Tequila","brand" => "Hornitos","category" => "Spirits","subcategory" => "Tequila","price" => "39.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13316666666666668","country" => "Mexico","url" => "https://www.lcbo.com/en/hornitos-plata-tequila-436279"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sauza Silver Tequila","brand" => "Sauza","category" => "Spirits","subcategory" => "Tequila","price" => "36.45","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12150000000000001","country" => "Mexico","url" => "https://www.lcbo.com/en/sauza-silver-tequila-2485"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Olmeca Altos Plata","brand" => "Olmeca","category" => "Spirits","subcategory" => "Tequila","price" => "45.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.15066666666666667","country" => "Mexico","url" => "https://www.lcbo.com/en/olmeca-altos-plata-454074"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Huana Liqueur","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "66.8","volume" => "750","alcohol_content" => "30.0","price_index" => "0.29688888888888887","country" => "Mexico","url" => "https://www.lcbo.com/en/huana-liqueur-113679"
            ]);
            DB::table('alcohols')->insert([
            "title" => "St Remy VSOP Brandy","brand" => "St-Remy","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "17.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.114","country" => "France","url" => "https://www.lcbo.com/en/st-remy-vsop-brandy-110221"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bunnahabhain 12-Year-Old Islay Single Malt Scotch Whisky","brand" => "Bunnahabhain","category" => "Spirits","subcategory" => "Whisky","price" => "95.25","volume" => "750","alcohol_content" => "46.3","price_index" => "0.27429805615550756","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bunnahabhain-12-year-old-islay-single-malt-scotch-whisky-37267"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dun Bheagan Islay Single Malt Scotch Whisky","brand" => "Dun Bheagan","category" => "Spirits","subcategory" => "Whisky","price" => "55.25","volume" => "750","alcohol_content" => "43.0","price_index" => "0.17131782945736435","country" => "United Kingdom","url" => "https://www.lcbo.com/en/dun-bheagan-islay-single-malt-scotch-whisky-576397"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Calvados Boulard Pays d'auge","brand" => "Boulard","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "52.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.17400000000000002","country" => "France","url" => "https://www.lcbo.com/en/calvados-boulard-pays-d-auge-296228"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dugal's Five Rivers Canadian Whisky","brand" => "Dugal's Whisky","category" => "Spirits","subcategory" => "Whisky","price" => "39.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13316666666666668","country" => "Canada","url" => "https://www.lcbo.com/en/dugal-s-five-rivers-canadian-whisky-27750"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sour Puss Raspberry Liquor","brand" => "Sour Puss","category" => "Spirits","subcategory" => "Liqueur","price" => "21.95","volume" => "750","alcohol_content" => "15.0","price_index" => "0.1951111111111111","country" => "United States","url" => "https://www.lcbo.com/en/sour-puss-raspberry-liquor-518670"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Woodford Reserve Distiller's Select Bourbon","brand" => "Woodford Reserve","category" => "Spirits","subcategory" => "Whisky","price" => "26.1","volume" => "375","alcohol_content" => "45.2","price_index" => "0.15398230088495576","country" => "United States","url" => "https://www.lcbo.com/en/woodford-reserve-distiller-s-select-15537"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tanqueray London Dry Gin","brand" => "Tanqueray","category" => "Spirits","subcategory" => "Gin","price" => "31.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.104","country" => "United Kingdom","url" => "https://www.lcbo.com/en/tanqueray-dry-gin-2691"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mount Gay Eclipse Rum","brand" => "Mount Gay","category" => "Spirits","subcategory" => "Rum","price" => "52.65","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.11546052631578947","country" => "Barbados","url" => "https://www.lcbo.com/en/mount-gay-eclipse-rum-369801"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hornitos Reposado Tequila","brand" => "Hornitos","category" => "Spirits","subcategory" => "Tequila","price" => "40.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1365","country" => "Mexico","url" => "https://www.lcbo.com/en/hornitos-reposado-tequila-143040"
            ]);
            DB::table('alcohols')->insert([
            "title" => "1800 Coconut Tequila","brand" => "1800 Tequila","category" => "Spirits","subcategory" => "Tequila","price" => "40.8","volume" => "750","alcohol_content" => "35.0","price_index" => "0.15542857142857142","country" => "Mexico","url" => "https://www.lcbo.com/en/1800-coconut-tequila-492454"
            ]);
            DB::table('alcohols')->insert([
            "title" => "J.P. Wiser's Apple Whisky","brand" => "J.P. Wiser's","category" => "Spirits","subcategory" => "Whisky","price" => "30.5","volume" => "750","alcohol_content" => "35.0","price_index" => "0.11619047619047619","country" => "Canada","url" => "https://www.lcbo.com/en/j-p-wiser-s-apple-whisky-474585"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Chum Churum Apple Mango","brand" => "CHUM CHURUM","category" => "Spirits","subcategory" => "Soju","price" => "10.05","volume" => "360","alcohol_content" => "12.0","price_index" => "0.23263888888888892","country" => "South Korea","url" => "https://www.lcbo.com/en/chum-churum-apple-mango-22437"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Stoli Vodka","brand" => "Stolichnaya","category" => "Spirits","subcategory" => "Vodka","price" => "66.95","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09564285714285714","country" => "Latvia","url" => "https://www.lcbo.com/en/stolichnaya-vodka-272716"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tito's Handmade Vodka","brand" => "Tito's","category" => "Spirits","subcategory" => "Vodka","price" => "72.55","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.10364285714285713","country" => "United States","url" => "https://www.lcbo.com/en/tito-s-handmade-vodka-545160"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenfiddich 18 Year Old Single Malt Scotch Whisky","brand" => "Glenfiddich","category" => "Spirits","subcategory" => "Whisky","price" => "185.2","volume" => "750","alcohol_content" => "40.2","price_index" => "0.6142620232172471","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenfiddich-18-year-old-single-malt-scotch-whisky-530352"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Pike Creek Double Barreled Canadian Whisky","brand" => "Pike Creek Canadian Whisky","category" => "Spirits","subcategory" => "Whisky","price" => "36.95","volume" => "750","alcohol_content" => "42.0","price_index" => "0.11730158730158731","country" => "Canada","url" => "https://www.lcbo.com/en/pike-creek-double-barreled-canadian-whisky-482612"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ledaig 10 Year Old Single Malt Scotch Whisky","brand" => "Ledaig","category" => "Spirits","subcategory" => "Whisky","price" => "74.95","volume" => "750","alcohol_content" => "46.3","price_index" => "0.2158387329013679","country" => "United Kingdom","url" => "https://www.lcbo.com/en/ledaig-10-year-old-single-malt-scotch-whisky-315721"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smirnoff Cherry Flavoured Vodka","brand" => "Smirnoff","category" => "Spirits","subcategory" => "Vodka","price" => "29.75","volume" => "750","alcohol_content" => "35.0","price_index" => "0.11333333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-cherry-flavoured-vodka-381939"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hennessy Vs Cognac","brand" => "Hennessy","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "39.75","volume" => "375","alcohol_content" => "40.0","price_index" => "0.265","country" => "France","url" => "https://www.lcbo.com/en/hennessy-vs-cognac-245688"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Beefeater London Dry Gin","brand" => "Beefeater","category" => "Spirits","subcategory" => "Gin","price" => "30.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1025","country" => "United Kingdom","url" => "https://www.lcbo.com/en/beefeater-london-dry-gin-570"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenfiddich Single Malt 12 Year Old Scotch Whisky","brand" => "Glenfiddich","category" => "Spirits","subcategory" => "Whisky","price" => "39.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.26066666666666666","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenfiddich-single-malt-12-year-old-scotch-whisky-252312"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dillon's Absinthe","brand" => "Dillon's","category" => "Spirits","subcategory" => "Liqueur","price" => "69.95","volume" => "750","alcohol_content" => "67.5","price_index" => "0.13817283950617282","country" => "Canada","url" => "https://www.lcbo.com/en/dillon-s-absinthe-493098"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Forty Creek Barrel Select Whisky","brand" => "Forty Creek","category" => "Spirits","subcategory" => "Whisky","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/forty-creek-barrel-select-whisky-550715"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lamb's Palm Breeze Rum","brand" => "Lamb's","category" => "Spirits","subcategory" => "Rum","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/lamb-s-palm-breeze-rum-2089"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cointreau","brand" => "Cointreau","category" => "Spirits","subcategory" => "Liqueur","price" => "46.25","volume" => "750","alcohol_content" => "40.0","price_index" => "0.15416666666666667","country" => "France","url" => "https://www.lcbo.com/en/cointreau-6502"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Canadian Club Whisky (PET)","brand" => "Canadian Club","category" => "Spirits","subcategory" => "Whisky","price" => "65.75","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09392857142857143","country" => "Canada","url" => "https://www.lcbo.com/en/canadian-club-whisky-pet-34637"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Johnnie Walker Black Label Scotch Whisky","brand" => "Johnnie Walker","category" => "Spirits","subcategory" => "Whisky","price" => "60.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2006666666666667","country" => "United Kingdom","url" => "https://www.lcbo.com/en/johnnie-walker-black-label-scotch-whisky-7880"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi 10 Year Old Gran Reserva Gold Rum","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "47.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.15983333333333336","country" => "Puerto Rico","url" => "https://www.lcbo.com/en/bacardi-10-year-old-gran-reserva-gold-rum-548420"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crown Royal Whisky","brand" => "Crown Royal","category" => "Spirits","subcategory" => "Whisky","price" => "141.95","volume" => "3000","alcohol_content" => "40.0","price_index" => "0.11829166666666666","country" => "Canada","url" => "https://www.lcbo.com/en/crown-royal-whisky-529826"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Disaronno Originale Amaretto","brand" => "Disaronno","category" => "Spirits","subcategory" => "Liqueur","price" => "32.15","volume" => "750","alcohol_content" => "28.0","price_index" => "0.15309523809523806","country" => "Italy","url" => "https://www.lcbo.com/en/disaronno-originale-amaretto-2253"
            ]);
            DB::table('alcohols')->insert([
            "title" => "J.P. Wiser's Deluxe Whisky","brand" => "J.P. Wiser's","category" => "Spirits","subcategory" => "Whisky","price" => "44.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09703947368421052","country" => "Canada","url" => "https://www.lcbo.com/en/j-p-wiser-s-deluxe-whisky-216689"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Aperol 375ml","brand" => "Aperol","category" => "Spirits","subcategory" => "Liqueur","price" => "15.0","volume" => "375","alcohol_content" => "11.0","price_index" => "0.36363636363636365","country" => "Italy","url" => "https://www.lcbo.com/en/aperol-375ml-20926"
            ]);
            DB::table('alcohols')->insert([
            "title" => "McGuinness Melon","brand" => "McGuinness","category" => "Spirits","subcategory" => "Liqueur","price" => "19.95","volume" => "750","alcohol_content" => "15.0","price_index" => "0.17733333333333332","country" => "Canada","url" => "https://www.lcbo.com/en/mcguinness-melon-631234"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Chivas Regal 12 Year Old Scotch Whisky","brand" => "Chivas Regal","category" => "Spirits","subcategory" => "Whisky","price" => "59.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.19733333333333333","country" => "United Kingdom","url" => "https://www.lcbo.com/en/chivas-regal-12-year-old-scotch-whisky-7617"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Nikka From The Barrel Whisky","brand" => "Nikka","category" => "Spirits","subcategory" => "Whisky","price" => "69.95","volume" => "500","alcohol_content" => "51.4","price_index" => "0.2721789883268483","country" => "Japan","url" => "https://www.lcbo.com/en/nikka-from-the-barrel-whisky-10226"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Vodkow Cream","brand" => "Vodkow","category" => "Spirits","subcategory" => "Liqueur","price" => "30.1","volume" => "750","alcohol_content" => "17.0","price_index" => "0.236078431372549","country" => "Canada","url" => "https://www.lcbo.com/en/vodkow-cream-18224"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Spirytus Gdanski 76%","brand" => "Gdanski","category" => "Spirits","subcategory" => "Vodka","price" => "43.3","volume" => "700","alcohol_content" => "76.0","price_index" => "0.08139097744360901","country" => "Poland","url" => "https://www.lcbo.com/en/spirytus-gdanski-76-273268"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Woodford Reserve Distiller's Select Bourbon","brand" => "Woodford Reserve","category" => "Spirits","subcategory" => "Whisky","price" => "53.25","volume" => "750","alcohol_content" => "45.2","price_index" => "0.1570796460176991","country" => "United States","url" => "https://www.lcbo.com/en/woodford-reserve-distiller-s-select-bourbon-480624"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Diplomatico Reserva Exclusiva Rum","brand" => "Diplomatico","category" => "Spirits","subcategory" => "Rum","price" => "60.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2006666666666667","country" => "Venezuela","url" => "https://www.lcbo.com/en/diplomatico-reserva-exclusiva-rum-366633"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Malfy Gin con Limone","brand" => "Malfy Gin","category" => "Spirits","subcategory" => "Gin","price" => "50.35","volume" => "750","alcohol_content" => "41.0","price_index" => "0.163739837398374","country" => "Italy","url" => "https://www.lcbo.com/en/malfy-gin-con-limone-484204"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Johnnie Walker Red Label Scotch Whisky","brand" => "Johnnie Walker","category" => "Spirits","subcategory" => "Whisky","price" => "139.95","volume" => "3000","alcohol_content" => "40.0","price_index" => "0.11662499999999999","country" => "United Kingdom","url" => "https://www.lcbo.com/en/johnnie-walker-red-label-scotch-whisky-444547"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Plantation Jamaica 1998 Crv Single Cask","brand" => "PLANTATION","category" => "Spirits","subcategory" => "Rum","price" => "209.9","volume" => "750","alcohol_content" => "49.4","price_index" => "0.566531713900135","country" => "France","url" => "https://www.lcbo.com/en/plantation-jamaica-1998-crv-single-cask-24438"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Captain Morgan Dark Rum (PET)","brand" => "Captain Morgan","category" => "Spirits","subcategory" => "Rum","price" => "64.6","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09228571428571428","country" => "NULL","url" => "https://www.lcbo.com/en/captain-morgan-dark-rum-pet-183582"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Beefeater Pink","brand" => "Beefeater","category" => "Spirits","subcategory" => "Gin","price" => "30.7","volume" => "750","alcohol_content" => "37.5","price_index" => "0.10915555555555555","country" => "United Kingdom","url" => "https://www.lcbo.com/en/beefeater-pink-647982"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Polar Ice Vodka (PET)","brand" => "Polar Ice Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "64.6","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09228571428571428","country" => "Canada","url" => "https://www.lcbo.com/en/polar-ice-vodka-pet-477885"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Skrewball Peanut Butter Whiskey","brand" => "Skrewball","category" => "Spirits","subcategory" => "Whisky","price" => "54.95","volume" => "750","alcohol_content" => "35.0","price_index" => "0.20933333333333334","country" => "United States","url" => "https://www.lcbo.com/en/skrewball-peanut-butter-whiskey-22035"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jose Cuervo Especial Gold Tequila","brand" => "Jose Cuervo","category" => "Spirits","subcategory" => "Tequila","price" => "36.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12066666666666667","country" => "Mexico","url" => "https://www.lcbo.com/en/jose-cuervo-especial-gold-tequila-267187"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crown Royal XO","brand" => "Crown Royal","category" => "Spirits","subcategory" => "Whisky","price" => "75.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.25316666666666665","country" => "Canada","url" => "https://www.lcbo.com/en/crown-royal-xo-438911"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gordon's Dry Gin","brand" => "Gordon's","category" => "Spirits","subcategory" => "Gin","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/gordon-s-dry-gin-1040"
            ]);
            DB::table('alcohols')->insert([
            "title" => "O'Darby's Irish Cream Liqueur","brand" => "O'Darby's","category" => "Spirits","subcategory" => "Liqueur","price" => "34.45","volume" => "1140","alcohol_content" => "17.0","price_index" => "0.1777605779153767","country" => "Ireland","url" => "https://www.lcbo.com/en/o-darby-s-irish-cream-liqueur-605964"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Pinnacle Vodka","brand" => "Pinnacle Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "29.85","volume" => "750","alcohol_content" => "40.0","price_index" => "0.0995","country" => "France","url" => "https://www.lcbo.com/en/pinnacle-vodka-369009"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jameson Irish Whiskey","brand" => "Jameson","category" => "Spirits","subcategory" => "Whisky","price" => "21.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.1406666666666667","country" => "Ireland","url" => "https://www.lcbo.com/en/jameson-irish-whiskey-230987"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Absolut Apeach Vodka","brand" => "Absolut","category" => "Spirits","subcategory" => "Vodka","price" => "30.45","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10149999999999999","country" => "Sweden","url" => "https://www.lcbo.com/en/absolut-apeach-vodka-604348"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grey Goose Vodka","brand" => "Grey Goose","category" => "Spirits","subcategory" => "Vodka","price" => "51.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.17316666666666666","country" => "France","url" => "https://www.lcbo.com/en/grey-goose-vodka-95935"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tanqueray 0 Non-Alcoholic Spirit","brand" => "TANQUERAY","category" => "Spirits","subcategory" => "Gin","price" => "27.45","volume" => "700","alcohol_content" => "0.51","price_index" => "7.6890756302521","country" => "Italy","url" => "https://www.lcbo.com/en/tanqueray-0-dealcoholized-spirit-24103"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Canadian Mist Whisky","brand" => "Canadian Mist","category" => "Spirits","subcategory" => "Whisky","price" => "28.4","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09466666666666666","country" => "Canada","url" => "https://www.lcbo.com/en/canadian-mist-whisky-10074"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Superior White Rum (PET)","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "17.15","volume" => "375","alcohol_content" => "40.0","price_index" => "0.11433333333333333","country" => "Puerto Rico","url" => "https://www.lcbo.com/en/bacardi-superior-white-rum-pet-596"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Glenlivet 14yo Single Malt Scotch Whisky","brand" => "THE GLENLIVET","category" => "Spirits","subcategory" => "Whisky","price" => "79.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2665","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-glenlivet-14yo-single-malt-scotch-whisky-25621"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ketel One Vodka","brand" => "Ketel One","category" => "Spirits","subcategory" => "Vodka","price" => "19.95","volume" => "375","alcohol_content" => "40.0","price_index" => "0.133","country" => "Netherlands","url" => "https://www.lcbo.com/en/ketel-one-vodka-446468"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jameson Irish Whiskey","brand" => "Jameson","category" => "Spirits","subcategory" => "Whisky","price" => "74.55","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.1065","country" => "Ireland","url" => "https://www.lcbo.com/en/jameson-irish-whiskey-275933"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dr. McGillicuddy's Coffee","brand" => "Dr. McGillicuddy's","category" => "Spirits","subcategory" => "Liqueur","price" => "19.65","volume" => "750","alcohol_content" => "21.0","price_index" => "0.12476190476190475","country" => "Canada","url" => "https://www.lcbo.com/en/dr-mcgillicuddy-s-coffee-24957"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Zirkova Together X Everything Delish Limited","brand" => "Zirkova","category" => "Spirits","subcategory" => "Vodka","price" => "44.95","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09857456140350877","country" => "Ukraine","url" => "https://www.lcbo.com/en/zirkova-together-x-everything-delish-limited-25107"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Meukow Cognac VS","brand" => "Meukow","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "60.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2006666666666667","country" => "France","url" => "https://www.lcbo.com/en/meukow-cognac-vs-382580"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Valley of Mother of God Gin","brand" => "Valley Of Mother Of God","category" => "Spirits","subcategory" => "Gin","price" => "59.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.18589147286821706","country" => "Canada","url" => "https://www.lcbo.com/en/valley-of-mother-of-god-gin-13397"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Forty Creek Barrel Select Whisky (PET)","brand" => "Forty Creek","category" => "Spirits","subcategory" => "Whisky","price" => "16.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.10733333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/forty-creek-barrel-select-whisky-pet-47290"
            ]);
            DB::table('alcohols')->insert([
            "title" => "J.P. Wiser's Deluxe Whisky","brand" => "J.P. Wiser's","category" => "Spirits","subcategory" => "Whisky","price" => "65.95","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09421428571428572","country" => "Canada","url" => "https://www.lcbo.com/en/j-p-wiser-s-deluxe-whisky-33928"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dr. McGillicuddy's Intense Peach","brand" => "Dr. McGillicuddy","category" => "Spirits","subcategory" => "Liqueur","price" => "19.65","volume" => "750","alcohol_content" => "21.0","price_index" => "0.12476190476190475","country" => "Canada","url" => "https://www.lcbo.com/en/dr-mcgillicuddy-s-intense-peach-398016"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sveva's Orangella Liqueur","brand" => "Sveva's","category" => "Spirits","subcategory" => "Liqueur","price" => "26.05","volume" => "750","alcohol_content" => "30.0","price_index" => "0.11577777777777779","country" => "Italy","url" => "https://www.lcbo.com/en/sveva-s-orangella-liqueur-364026"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Barchef Project The Toasted Old Fashioned","brand" => "Barchef Project","category" => "Spirits","subcategory" => "Premixed Cocktails","price" => "28.05","volume" => "375","alcohol_content" => "38.9","price_index" => "0.19228791773778922","country" => "Canada","url" => "https://www.lcbo.com/en/barchef-project-the-toasted-old-fashioned-546994"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smirnoff Citrus Flavoured Vodka","brand" => "Smirnoff","category" => "Spirits","subcategory" => "Vodka","price" => "29.75","volume" => "750","alcohol_content" => "35.0","price_index" => "0.11333333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-citrus-flavoured-vodka-381954"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Top Shelf Vodka","brand" => "Top Shelf","category" => "Spirits","subcategory" => "Vodka","price" => "44.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09703947368421052","country" => "Canada","url" => "https://www.lcbo.com/en/top-shelf-vodka-17933"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Deanston Virgin Oak","brand" => "Deanston","category" => "Spirits","subcategory" => "Whisky","price" => "55.25","volume" => "750","alcohol_content" => "46.3","price_index" => "0.15910727141828654","country" => "United Kingdom","url" => "https://www.lcbo.com/en/deanston-virgin-oak-375568"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gibson's Finest Rare 12 Year Old Whisky","brand" => "Gibson's Finest","category" => "Spirits","subcategory" => "Whisky","price" => "19.95","volume" => "375","alcohol_content" => "40.0","price_index" => "0.133","country" => "Canada","url" => "https://www.lcbo.com/en/gibson-s-finest-rare-12-year-old-whisky-139667"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Chum Churum Rich","brand" => "Chum Churum","category" => "Spirits","subcategory" => "Soju","price" => "10.05","volume" => "360","alcohol_content" => "20.3","price_index" => "0.13752052545155996","country" => "South Korea","url" => "https://www.lcbo.com/en/chum-churum-rich-616730"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Alberta Premium Whisky (PET)","brand" => "Alberta Premium","category" => "Spirits","subcategory" => "Whisky","price" => "64.6","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09228571428571428","country" => "Canada","url" => "https://www.lcbo.com/en/alberta-premium-whisky-pet-54213"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hornitos Black Barrel","brand" => "Hornitos","category" => "Spirits","subcategory" => "Tequila","price" => "47.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.15983333333333336","country" => "Mexico","url" => "https://www.lcbo.com/en/hornitos-black-barrel-18869"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Heretic Spirits Gin #1","brand" => "Heretic Spirits","category" => "Spirits","subcategory" => "Gin","price" => "39.95","volume" => "750","alcohol_content" => "47.3","price_index" => "0.11261451726568006","country" => "Canada","url" => "https://www.lcbo.com/en/heretic-spirits-gin-1-14353"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Flor de Ca�a 7 Year Rum Gran Reserva","brand" => "Flor de Ca�a","category" => "Spirits","subcategory" => "Rum","price" => "36.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12066666666666667","country" => "Nicaragua","url" => "https://www.lcbo.com/en/flor-de-ca-a-7-year-rum-gran-reserva-402818"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lamb's Classic White Rum (PET)","brand" => "Lamb's","category" => "Spirits","subcategory" => "Rum","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "Canada","url" => "https://www.lcbo.com/en/lamb-s-classic-white-rum-pet-240143"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sophia's Lemoncella","brand" => "Sophia's","category" => "Spirits","subcategory" => "Liqueur","price" => "24.05","volume" => "750","alcohol_content" => "30.0","price_index" => "0.1068888888888889","country" => "Italy","url" => "https://www.lcbo.com/en/sophia-s-lemoncella-897645"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Tropical","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "29.95","volume" => "750","alcohol_content" => "35.0","price_index" => "0.1140952380952381","country" => "United States","url" => "https://www.lcbo.com/en/bacardi-tropical-24435"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ciroc Apple","brand" => "Ciroc","category" => "Spirits","subcategory" => "Vodka","price" => "50.95","volume" => "750","alcohol_content" => "35.0","price_index" => "0.1940952380952381","country" => "France","url" => "https://www.lcbo.com/en/ciroc-apple-481614"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dillon's Dry Gin","brand" => "Dillon's","category" => "Spirits","subcategory" => "Gin","price" => "39.95","volume" => "750","alcohol_content" => "44.8","price_index" => "0.11889880952380955","country" => "Canada","url" => "https://www.lcbo.com/en/dillon-s-dry-gin-413104"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Zubrowka Bison Vodka","brand" => "Zubrowka","category" => "Spirits","subcategory" => "Vodka","price" => "31.0","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10333333333333333","country" => "Poland","url" => "https://www.lcbo.com/en/zubrowka-bison-vodka-35840"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ketel One Botanical Grapefruit and Rose","brand" => "Ketel One","category" => "Spirits","subcategory" => "Vodka","price" => "35.95","volume" => "750","alcohol_content" => "30.0","price_index" => "0.1597777777777778","country" => "Netherlands","url" => "https://www.lcbo.com/en/ketel-one-botanical-grapefruit-and-rose-645499"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ile Four The Distiller 002 Junmai Lees Shochu","brand" => "Private Stock","category" => "Spirits","subcategory" => "Soju","price" => "84.9","volume" => "720","alcohol_content" => "25.0","price_index" => "0.4716666666666667","country" => "Japan","url" => "https://www.lcbo.com/en/ile-four-the-distiller-002-junmai-lees-shochu-152263"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gibson's Finest Rare 12 Year Old Whisky","brand" => "Gibson's Finest","category" => "Spirits","subcategory" => "Whisky","price" => "54.95","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.12050438596491228","country" => "Canada","url" => "https://www.lcbo.com/en/gibson-s-finest-rare-12-year-old-whisky-215871"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Captain Morgan Sliced Apple Spiced Rum","brand" => "Captain Morgan","category" => "Spirits","subcategory" => "Rum","price" => "31.95","volume" => "750","alcohol_content" => "35.0","price_index" => "0.1217142857142857","country" => "Canada","url" => "https://www.lcbo.com/en/captain-morgan-sliced-apple-spiced-rum-17047"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Yeni Raki","brand" => "Yeni Raki","category" => "Spirits","subcategory" => "Liqueur","price" => "41.5","volume" => "700","alcohol_content" => "45.0","price_index" => "0.13174603174603175","country" => "Turkey","url" => "https://www.lcbo.com/en/yeni-raki-538157"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dirty Devil Vodka","brand" => "Dirty Devil","category" => "Spirits","subcategory" => "Vodka","price" => "39.95","volume" => "750","alcohol_content" => "42.0","price_index" => "0.12682539682539684","country" => "Canada","url" => "https://www.lcbo.com/en/dirty-devil-vodka-25554"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Forty Creek Barrel Select Whisky","brand" => "Forty Creek","category" => "Spirits","subcategory" => "Whisky","price" => "9.1","volume" => "200","alcohol_content" => "40.0","price_index" => "0.11374999999999999","country" => "Canada","url" => "https://www.lcbo.com/en/forty-creek-barrel-select-whisky-587816"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wray & Nephew White Overproof Rum","brand" => "Wray & Nephew","category" => "Spirits","subcategory" => "Rum","price" => "42.85","volume" => "750","alcohol_content" => "63.0","price_index" => "0.09068783068783069","country" => "Jamaica","url" => "https://www.lcbo.com/en/wray-nephew-white-overproof-rum-326223"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jim Beam White Label Bourbon (PET)","brand" => "Jim Beam","category" => "Spirits","subcategory" => "Whisky","price" => "16.45","volume" => "375","alcohol_content" => "40.0","price_index" => "0.10966666666666666","country" => "United States","url" => "https://www.lcbo.com/en/jim-beam-white-label-bourbon-pet-521294"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Luksusowa Vodka","brand" => "LUKSUSOWA","category" => "Spirits","subcategory" => "Vodka","price" => "66.45","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09492857142857143","country" => "Poland","url" => "https://www.lcbo.com/en/luksusowa-vodka-25104"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Armagnac de Montal VSOP","brand" => "Armagnac De Montal","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "54.35","volume" => "750","alcohol_content" => "40.0","price_index" => "0.18116666666666667","country" => "France","url" => "https://www.lcbo.com/en/armagnac-de-montal-vsop-618496"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dillon's Manhattan","brand" => "Dillon's","category" => "Spirits","subcategory" => "Whisky","price" => "22.95","volume" => "500","alcohol_content" => "24.0","price_index" => "0.19125","country" => "Canada","url" => "https://www.lcbo.com/en/dillon-s-manhattan-22885"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crown Royal Whisky","brand" => "Crown Royal","category" => "Spirits","subcategory" => "Whisky","price" => "32.45","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10816666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/crown-royal-whisky-1487"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Malfy Gin Con Arancia","brand" => "Malfy Gin","category" => "Spirits","subcategory" => "Gin","price" => "50.35","volume" => "750","alcohol_content" => "41.0","price_index" => "0.163739837398374","country" => "Italy","url" => "https://www.lcbo.com/en/malfy-gin-con-arancia-10715"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Singleton of Dufftown 12-Year-Old Speyside Single Malt Scotch Whisky","brand" => "The Singleton","category" => "Spirits","subcategory" => "Whisky","price" => "57.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.19316666666666668","country" => "United Kingdom","url" => "https://www.lcbo.com/en/singleton-of-dufftown-12-year-old-single-malt-scotch-whisky-409490"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Gold Rum","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "9.15","volume" => "200","alcohol_content" => "40.0","price_index" => "0.114375","country" => "Puerto Rico","url" => "https://www.lcbo.com/en/bacardi-gold-rum-290411"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jagermeister Cold Brew","brand" => "Jagermeister","category" => "Spirits","subcategory" => "Liqueur","price" => "32.55","volume" => "750","alcohol_content" => "33.0","price_index" => "0.1315151515151515","country" => "Germany","url" => "https://www.lcbo.com/en/jagermeister-cold-brew-14404"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Proper NO. Twelve","brand" => "Proper No. Twelve","category" => "Spirits","subcategory" => "Whisky","price" => "38.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12916666666666668","country" => "Ireland","url" => "https://www.lcbo.com/en/proper-no-twelve-11945"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Glenlivet Caribbean Reserve Single Malt Scotch","brand" => "The Glenlivet","category" => "Spirits","subcategory" => "Whisky","price" => "60.05","volume" => "750","alcohol_content" => "40.0","price_index" => "0.20016666666666666","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-glenlivet-caribbean-reserve-single-malt-scotch-21309"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Maker's Mark 101","brand" => "Maker's Mark","category" => "Spirits","subcategory" => "Whisky","price" => "94.95","volume" => "750","alcohol_content" => "50.5","price_index" => "0.2506930693069307","country" => "United States","url" => "https://www.lcbo.com/en/maker-s-mark-101-23090"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gibson's Finest Rare 12 Year Old Whisky","brand" => "Gibson's Finest","category" => "Spirits","subcategory" => "Whisky","price" => "38.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12983333333333336","country" => "Canada","url" => "https://www.lcbo.com/en/gibson-s-finest-rare-12-year-old-whisky-3558"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Forty Creek Cream Liquor","brand" => "Forty Creek","category" => "Spirits","subcategory" => "Liqueur","price" => "29.95","volume" => "750","alcohol_content" => "17.0","price_index" => "0.2349019607843137","country" => "Canada","url" => "https://www.lcbo.com/en/forty-creek-cream-liquor-281378"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Courvoisier VSOP Cognac","brand" => "COURVOISIER","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "99.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.33316666666666667","country" => "France","url" => "https://www.lcbo.com/en/courvoisier-vsop-cognac-24493"
            ]);
            DB::table('alcohols')->insert([
            "title" => "H2 Craft Nutt Bar Peanut Butter Whisky","brand" => "H2 Craft","category" => "Spirits","subcategory" => "Whisky","price" => "34.95","volume" => "750","alcohol_content" => "33.2","price_index" => "0.14036144578313253","country" => "Canada","url" => "https://www.lcbo.com/en/nutt-bar-peanut-butter-whisky-25225"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smirnoff Vodka PET","brand" => "Smirnoff","category" => "Spirits","subcategory" => "Vodka","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-vodka-pet-22017"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Iceberg Vodka (PET)","brand" => "Iceberg","category" => "Spirits","subcategory" => "Vodka","price" => "9.1","volume" => "200","alcohol_content" => "40.0","price_index" => "0.11374999999999999","country" => "Canada","url" => "https://www.lcbo.com/en/iceberg-vodka-pet-586180"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Signal Hill Canadian Whisky","brand" => "Signal Hill","category" => "Spirits","subcategory" => "Whisky","price" => "39.6","volume" => "750","alcohol_content" => "40.0","price_index" => "0.132","country" => "Canada","url" => "https://www.lcbo.com/en/signal-hill-canadian-whisky-572552"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Paper Boat Gin","brand" => "Paper Boat","category" => "Spirits","subcategory" => "Gin","price" => "39.95","volume" => "750","alcohol_content" => "39.6","price_index" => "0.13451178451178453","country" => "Canada","url" => "https://www.lcbo.com/en/paper-boat-gin-16862"
            ]);
            DB::table('alcohols')->insert([
            "title" => "McGuinness Orange & Brandy","brand" => "McGuinness","category" => "Spirits","subcategory" => "Liqueur","price" => "26.95","volume" => "750","alcohol_content" => "35.0","price_index" => "0.10266666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/mcguinness-orange-brandy-53611"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crystal Head Vodka","brand" => "Crystal Head","category" => "Spirits","subcategory" => "Vodka","price" => "8.95","volume" => "50","alcohol_content" => "40.0","price_index" => "0.44749999999999995","country" => "Canada","url" => "https://www.lcbo.com/en/crystal-head-vodka-294249"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Royal Challenge Spirit Whisky","brand" => "Vintages Essentials","category" => "Spirits","subcategory" => "Whisky","price" => "32.2","volume" => "750","alcohol_content" => "42.8","price_index" => "0.10031152647975079","country" => "India","url" => "https://www.lcbo.com/en/royal-challenge-spirit-whisky-354837"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Superior White Rum","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "44.45","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09747807017543861","country" => "Puerto Rico","url" => "https://www.lcbo.com/en/bacardi-superior-white-rum-520320"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sour Puss Blue Liquor","brand" => "Sour Puss","category" => "Spirits","subcategory" => "Liqueur","price" => "21.95","volume" => "750","alcohol_content" => "15.0","price_index" => "0.1951111111111111","country" => "United States","url" => "https://www.lcbo.com/en/sour-puss-blue-liquor-601518"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bottega Tiramisu Cream Liqueur","brand" => "Bottega","category" => "Spirits","subcategory" => "Liqueur","price" => "24.75","volume" => "500","alcohol_content" => "17.0","price_index" => "0.2911764705882353","country" => "Italy","url" => "https://www.lcbo.com/en/bottega-tiramisu-cream-liqueur-21614"
            ]);
            DB::table('alcohols')->insert([
            "title" => "McGuinness Creme De Banane","brand" => "McGuinness","category" => "Spirits","subcategory" => "Liqueur","price" => "19.95","volume" => "750","alcohol_content" => "15.0","price_index" => "0.17733333333333332","country" => "Canada","url" => "https://www.lcbo.com/en/mcguinness-creme-de-banane-631218"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Spiced Rum (PET)","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "17.95","volume" => "375","alcohol_content" => "35.0","price_index" => "0.13676190476190475","country" => "Canada","url" => "https://www.lcbo.com/en/bacardi-spiced-rum-pet-486316"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Collingwood Double Barrel Whisky","brand" => "Collingwood Brewery","category" => "Spirits","subcategory" => "Whisky","price" => "37.25","volume" => "750","alcohol_content" => "45.0","price_index" => "0.11037037037037037","country" => "Canada","url" => "https://www.lcbo.com/en/collingwood-double-barrel-whisky-526061"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ciroc Pineapple","brand" => "Ciroc","category" => "Spirits","subcategory" => "Vodka","price" => "50.95","volume" => "750","alcohol_content" => "35.0","price_index" => "0.1940952380952381","country" => "France","url" => "https://www.lcbo.com/en/ciroc-pineapple-446823"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Gold","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/bacardi-gold-13588"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sauza Gold Tequila","brand" => "Sauza","category" => "Spirits","subcategory" => "Tequila","price" => "52.45","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.11502192982456141","country" => "Mexico","url" => "https://www.lcbo.com/en/sauza-gold-tequila-217133"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gray Jay Deluxe Canadian Whisky","brand" => "Gray Jay","category" => "Spirits","subcategory" => "Whisky","price" => "32.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10983333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/gray-jay-deluxe-canadian-whisky-21265"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jura Origin 10 Year Old Single Malt Scotch Whisky","brand" => "Jura","category" => "Spirits","subcategory" => "Whisky","price" => "59.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.19983333333333334","country" => "United Kingdom","url" => "https://www.lcbo.com/en/jura-origin-10-year-old-single-malt-scotch-whisky-430355"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jinro 24","brand" => "Jinro","category" => "Spirits","subcategory" => "Soju","price" => "10.25","volume" => "375","alcohol_content" => "24.0","price_index" => "0.11388888888888889","country" => "South Korea","url" => "https://www.lcbo.com/en/jinro-24-13288"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Absolut Grapefruit Vodka","brand" => "Absolut","category" => "Spirits","subcategory" => "Vodka","price" => "30.45","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10149999999999999","country" => "Sweden","url" => "https://www.lcbo.com/en/absolut-grapefruit-vodka-925685"
            ]);
            DB::table('alcohols')->insert([
            "title" => "High River Canadian Whisky","brand" => "High River","category" => "Spirits","subcategory" => "Whisky","price" => "33.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11066666666666668","country" => "Canada","url" => "https://www.lcbo.com/en/high-river-canadian-whisky-481366"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Stolichnaya Lime Vodka","brand" => "Stolichnaya Flavours","category" => "Spirits","subcategory" => "Vodka","price" => "28.2","volume" => "750","alcohol_content" => "37.5","price_index" => "0.10026666666666667","country" => "Latvia","url" => "https://www.lcbo.com/en/stolichnaya-lime-vodka-13173"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Reunion Maple Moonshine","brand" => "Top Shelf","category" => "Spirits","subcategory" => "Whisky","price" => "34.95","volume" => "750","alcohol_content" => "30.0","price_index" => "0.15533333333333335","country" => "Canada","url" => "https://www.lcbo.com/en/reunion-maple-moonshine-520684"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jim Beam Red Stag","brand" => "Jim Beam","category" => "Spirits","subcategory" => "Whisky","price" => "30.95","volume" => "750","alcohol_content" => "32.5","price_index" => "0.12697435897435896","country" => "United States","url" => "https://www.lcbo.com/en/jim-beam-red-stag-18575"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tag No.5 Vodka","brand" => "Tag No. 5","category" => "Spirits","subcategory" => "Vodka","price" => "16.25","volume" => "375","alcohol_content" => "40.0","price_index" => "0.10833333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/tag-no-5-vodka-19523"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Remy Martin 1738 Accord Royal Cognac","brand" => "Remy Martin","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "130.3","volume" => "750","alcohol_content" => "40.0","price_index" => "0.43433333333333335","country" => "France","url" => "https://www.lcbo.com/en/remy-martin-1738-accord-royal-cognac-386177"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Baileys Original Irish Cream","brand" => "Baileys","category" => "Spirits","subcategory" => "Liqueur","price" => "43.45","volume" => "1140","alcohol_content" => "17.0","price_index" => "0.2242002063983488","country" => "Ireland","url" => "https://www.lcbo.com/en/baileys-original-irish-cream-605956"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sauza Gold Tequila (PET)","brand" => "Sauza","category" => "Spirits","subcategory" => "Tequila","price" => "20.95","volume" => "375","alcohol_content" => "40.0","price_index" => "0.13966666666666666","country" => "Mexico","url" => "https://www.lcbo.com/en/sauza-gold-tequila-pet-267286"
            ]);
            DB::table('alcohols')->insert([
            "title" => "H2 Craft Hibiscus & Rose Petal Gin","brand" => "H2 Craft","category" => "Spirits","subcategory" => "Gin","price" => "39.95","volume" => "750","alcohol_content" => "43.8","price_index" => "0.12161339421613397","country" => "Canada","url" => "https://www.lcbo.com/en/h2-craft-hibiscus-rose-petal-gin-17886"
            ]);
            DB::table('alcohols')->insert([
            "title" => "J & B Rare Scotch Whisky","brand" => "J&B","category" => "Spirits","subcategory" => "Whisky","price" => "43.5","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09539473684210527","country" => "United Kingdom","url" => "https://www.lcbo.com/en/j-b-rare-scotch-whisky-217646"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Rumchata Cream Liqueur","brand" => "Rumchata","category" => "Spirits","subcategory" => "Liqueur","price" => "32.55","volume" => "750","alcohol_content" => "13.75","price_index" => "0.31563636363636355","country" => "United States","url" => "https://www.lcbo.com/en/rumchata-cream-liqueur-380865"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Appleton Estate V/X Signature Blend","brand" => "Appleton Estate","category" => "Spirits","subcategory" => "Rum","price" => "66.45","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09492857142857143","country" => "Jamaica","url" => "https://www.lcbo.com/en/appleton-estate-v-x-signature-blend-390260"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Aguardente Tres Marias","brand" => "Tres Marias","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "38.1","volume" => "1000","alcohol_content" => "40.0","price_index" => "0.09525","country" => "Portugal","url" => "https://www.lcbo.com/en/aguardente-tres-marias-27087"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ciroc","brand" => "Ciroc","category" => "Spirits","subcategory" => "Vodka","price" => "50.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.16983333333333334","country" => "France","url" => "https://www.lcbo.com/en/ciroc-417295"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Polar Ice Vodka (PET)","brand" => "Polar Ice Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "16.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.10733333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/polar-ice-vodka-pet-477893"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Gold Rum","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "44.45","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09747807017543861","country" => "Puerto Rico","url" => "https://www.lcbo.com/en/bacardi-gold-rum-520304"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mezcal Agua Santa, Destilado con Pechuga","brand" => "AGUA SANTA","category" => "Spirits","subcategory" => "Tequila","price" => "107.8","volume" => "750","alcohol_content" => "46.0","price_index" => "0.312463768115942","country" => "Mexico","url" => "https://www.lcbo.com/en/mezcal-agua-santa-24910"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Lime","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "29.95","volume" => "750","alcohol_content" => "35.0","price_index" => "0.1140952380952381","country" => "United States","url" => "https://www.lcbo.com/en/bacardi-lime-13589"
            ]);
            DB::table('alcohols')->insert([
            "title" => "1800 Anejo Tequila","brand" => "1800 Tequila","category" => "Spirits","subcategory" => "Tequila","price" => "52.7","volume" => "750","alcohol_content" => "40.0","price_index" => "0.17566666666666667","country" => "Mexico","url" => "https://www.lcbo.com/en/1800-anejo-tequila-549113"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Plantation 3 Star White Rum","brand" => "Plantation Rum","category" => "Spirits","subcategory" => "Rum","price" => "29.95","volume" => "750","alcohol_content" => "41.2","price_index" => "0.09692556634304207","country" => "France","url" => "https://www.lcbo.com/en/plantation-3-star-white-rum-545210"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grey Goose Vodka","brand" => "Grey Goose","category" => "Spirits","subcategory" => "Vodka","price" => "26.95","volume" => "375","alcohol_content" => "40.0","price_index" => "0.17966666666666667","country" => "France","url" => "https://www.lcbo.com/en/grey-goose-vodka-604934"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glendronach 12 Year Old Highland Single Malt Scotch Whisky","brand" => "Glendronach","category" => "Spirits","subcategory" => "Whisky","price" => "90.25","volume" => "750","alcohol_content" => "43.0","price_index" => "0.27984496124031005","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glendronach-12-year-old-highland-single-malt-scotch-whisky-601872"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Reid's Citrus Gin","brand" => "Reid'S Gin","category" => "Spirits","subcategory" => "Gin","price" => "50.5","volume" => "750","alcohol_content" => "42.2","price_index" => "0.15955766192733015","country" => "Canada","url" => "https://www.lcbo.com/en/reid-s-citrus-gin-17791"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bulleit Bourbon Frontier Whiskey","brand" => "Bulleit","category" => "Spirits","subcategory" => "Whisky","price" => "41.95","volume" => "750","alcohol_content" => "45.0","price_index" => "0.12429629629629631","country" => "United States","url" => "https://www.lcbo.com/en/bulleit-bourbon-frontier-whiskey-54866"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Aviation Gin","brand" => "Aviation","category" => "Spirits","subcategory" => "Gin","price" => "41.95","volume" => "750","alcohol_content" => "42.0","price_index" => "0.1331746031746032","country" => "United States","url" => "https://www.lcbo.com/en/aviation-gin-129940"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Johnnie Walker Red Label Scotch Whisky","brand" => "Johnnie Walker","category" => "Spirits","subcategory" => "Whisky","price" => "50.15","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.10997807017543859","country" => "United Kingdom","url" => "https://www.lcbo.com/en/johnnie-walker-red-label-scotch-whisky-217794"
            ]);
            DB::table('alcohols')->insert([
            "title" => "B�n�dictine & Brandy Liqueur","brand" => "B�n�dictine","category" => "Spirits","subcategory" => "Liqueur","price" => "40.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1365","country" => "France","url" => "https://www.lcbo.com/en/b-cn-cdictine-brandy-liqueur-359828"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dalwhinnie 15 Year Old Single Highland Malt Scotch Whisky","brand" => "Dalwhinnie","category" => "Spirits","subcategory" => "Whisky","price" => "117.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.36573643410852713","country" => "United Kingdom","url" => "https://www.lcbo.com/en/dalwhinnie-15-year-old-single-highland-malt-scotch-whisky-238097"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Canadian Club Classic 12 Year Old","brand" => "Canadian Club","category" => "Spirits","subcategory" => "Whisky","price" => "68.95","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.0985","country" => "Canada","url" => "https://www.lcbo.com/en/canadian-club-classic-12-year-old-311944"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Vecchia Romagna Etichetta Nera Brandy","brand" => "Vecchia Romagna","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "31.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.104","country" => "Italy","url" => "https://www.lcbo.com/en/vecchia-romagna-etichetta-nera-brandy-286807"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Spring Mill Distillery Gin","brand" => "Spring Mill Distillery","category" => "Spirits","subcategory" => "Gin","price" => "39.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13316666666666668","country" => "Canada","url" => "https://www.lcbo.com/en/spring-mill-distillery-gin-645721"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sandro Bottega Club Grappa","brand" => "Bottega","category" => "Spirits","subcategory" => "Grappa","price" => "29.95","volume" => "750","alcohol_content" => "38.0","price_index" => "0.1050877192982456","country" => "Italy","url" => "https://www.lcbo.com/en/sandro-bottega-club-grappa-478156"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Michter's US-1 Original Small Batch Sour Mash Whiskey","brand" => "Michter's","category" => "Spirits","subcategory" => "Whisky","price" => "89.3","volume" => "750","alcohol_content" => "42.4","price_index" => "0.2808176100628931","country" => "United States","url" => "https://www.lcbo.com/en/michter-s-us-1-original-small-batch-sour-mash-whiskey-431874"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dancing Sands Sauvignon Blanc Gin","brand" => "DANCING SANDS GIN","category" => "Spirits","subcategory" => "Gin","price" => "50.0","volume" => "700","alcohol_content" => "37.5","price_index" => "0.19047619047619047","country" => "New Zealand","url" => "https://www.lcbo.com/en/dancing-sands-sauvignon-blanc-gin-24095"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Basil Hayden Kentucky Bourbon","brand" => "Basil Hayden","category" => "Spirits","subcategory" => "Whisky","price" => "55.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1865","country" => "United States","url" => "https://www.lcbo.com/en/basil-hayden-kentucky-bourbon-326025"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Stolichnaya Cucumber Vodka","brand" => "Stolichnaya Flavours","category" => "Spirits","subcategory" => "Vodka","price" => "28.2","volume" => "750","alcohol_content" => "37.5","price_index" => "0.10026666666666667","country" => "Latvia","url" => "https://www.lcbo.com/en/stolichnaya-cucumber-vodka-13172"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jim Beam White Label Bourbon","brand" => "Jim Beam","category" => "Spirits","subcategory" => "Whisky","price" => "44.45","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09747807017543861","country" => "United States","url" => "https://www.lcbo.com/en/jim-beam-white-label-bourbon-217786"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Appleton Estate Signature","brand" => "Appleton Estate","category" => "Spirits","subcategory" => "Rum","price" => "17.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.114","country" => "Canada","url" => "https://www.lcbo.com/en/appleton-estate-signature-25450"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Top Shelf Butter Tart Liquor","brand" => "Top Shelf","category" => "Spirits","subcategory" => "Liqueur","price" => "22.95","volume" => "375","alcohol_content" => "17.0","price_index" => "0.35999999999999993","country" => "Canada","url" => "https://www.lcbo.com/en/top-shelf-butter-tart-liquor-27613"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ketel One Vodka","brand" => "Ketel One","category" => "Spirits","subcategory" => "Vodka","price" => "36.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12066666666666667","country" => "Netherlands","url" => "https://www.lcbo.com/en/ketel-one-vodka-456095"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Toki","brand" => "Toki","category" => "Spirits","subcategory" => "Whisky","price" => "59.65","volume" => "750","alcohol_content" => "43.0","price_index" => "0.18496124031007752","country" => "Japan","url" => "https://www.lcbo.com/en/toki-465484"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Spirit Of York Gin","brand" => "Spirit Of York","category" => "Spirits","subcategory" => "Gin","price" => "45.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.15066666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/spirit-of-york-gin-536805"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jim Beam Honey","brand" => "Jim Beam","category" => "Spirits","subcategory" => "Whisky","price" => "30.95","volume" => "750","alcohol_content" => "32.5","price_index" => "0.12697435897435896","country" => "United States","url" => "https://www.lcbo.com/en/jim-beam-honey-18574"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hornitos Reposado Tequila","brand" => "Hornitos","category" => "Spirits","subcategory" => "Tequila","price" => "24.75","volume" => "375","alcohol_content" => "40.0","price_index" => "0.165","country" => "Mexico","url" => "https://www.lcbo.com/en/hornitos-reposado-tequila-16553"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sour Puss Raspberry Liquor","brand" => "Sour Puss","category" => "Spirits","subcategory" => "Liqueur","price" => "8.95","volume" => "200","alcohol_content" => "15.0","price_index" => "0.2983333333333333","country" => "United States","url" => "https://www.lcbo.com/en/sour-puss-raspberry-liquor-584730"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Captain Morgan White Rum","brand" => "Captain Morgan","category" => "Spirits","subcategory" => "Rum","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "NULL","url" => "https://www.lcbo.com/en/captain-morgan-white-rum-217745"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Disaronno Originale Amaretto","brand" => "Disaronno","category" => "Spirits","subcategory" => "Liqueur","price" => "44.25","volume" => "1140","alcohol_content" => "28.0","price_index" => "0.13862781954887216","country" => "Italy","url" => "https://www.lcbo.com/en/disaronno-originale-amaretto-605881"
            ]);
            DB::table('alcohols')->insert([
            "title" => "McGuinness Cherry Brandy","brand" => "McGuinness","category" => "Spirits","subcategory" => "Liqueur","price" => "23.95","volume" => "750","alcohol_content" => "15.0","price_index" => "0.21288888888888888","country" => "Canada","url" => "https://www.lcbo.com/en/mcguinness-cherry-brandy-631457"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Campari Aperitivo","brand" => "Campari","category" => "Spirits","subcategory" => "Liqueur","price" => "30.7","volume" => "750","alcohol_content" => "25.0","price_index" => "0.16373333333333334","country" => "Italy","url" => "https://www.lcbo.com/en/campari-aperitivo-277954"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Redemption Bourbon","brand" => "Pineau Des Charentes Bl Prunie","category" => "Spirits","subcategory" => "Whisky","price" => "49.95","volume" => "750","alcohol_content" => "41.85","price_index" => "0.15913978494623654","country" => "United States","url" => "https://www.lcbo.com/en/redemption-bourbon-12208"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Stoli Harvey Milk Pride Vodka","brand" => "Stolichnaya","category" => "Spirits","subcategory" => "Vodka","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "Latvia","url" => "https://www.lcbo.com/en/stolichnaya-pride-vodka-25520"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jose Cuervo Tradicional Plata","brand" => "Jose Cuervo","category" => "Spirits","subcategory" => "Tequila","price" => "36.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12316666666666667","country" => "Mexico","url" => "https://www.lcbo.com/en/jose-cuervo-tradicional-plata-10899"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jose Cuervo Reserva De La Familia Extra Anejo","brand" => "Jose Cuervo","category" => "Spirits","subcategory" => "Tequila","price" => "199.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.6665","country" => "Mexico","url" => "https://www.lcbo.com/en/jose-cuervo-reserva-de-la-familia-extra-anejo-488205"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacoo 5YO Rum","brand" => "Bacoo","category" => "Spirits","subcategory" => "Rum","price" => "42.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1406666666666667","country" => "Dominican Republic","url" => "https://www.lcbo.com/en/bacoo-5yo-rum-20470"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tito's Handmade Vodka","brand" => "Tito's","category" => "Spirits","subcategory" => "Vodka","price" => "11.95","volume" => "200","alcohol_content" => "40.0","price_index" => "0.14937499999999998","country" => "United States","url" => "https://www.lcbo.com/en/tito-s-handmade-vodka-638262"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Courvoisier VS Cognac","brand" => "Courvoisier","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "65.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.21983333333333335","country" => "France","url" => "https://www.lcbo.com/en/courvoisier-vs-cognac-1925"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mezcal Agua Santa","brand" => "Agua Santa","category" => "Spirits","subcategory" => "Tequila","price" => "74.0","volume" => "750","alcohol_content" => "41.81","price_index" => "0.23598820058997047","country" => "Mexico","url" => "https://www.lcbo.com/en/mezcal-agua-santa-14660"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Talisker 10 Year Old Single Malt Scotch Whisky","brand" => "Talisker","category" => "Spirits","subcategory" => "Whisky","price" => "120.1","volume" => "750","alcohol_content" => "45.8","price_index" => "0.3496360989810771","country" => "United Kingdom","url" => "https://www.lcbo.com/en/talisker-10-year-old-single-malt-scotch-whisky-249680"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Rumchata","brand" => "Rumchata","category" => "Spirits","subcategory" => "Liqueur","price" => "64.95","volume" => "1750","alcohol_content" => "13.8","price_index" => "0.268944099378882","country" => "United States","url" => "https://www.lcbo.com/en/rumchata-17469"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Fireball Cinnamon Whisky (PET)","brand" => "Fireball","category" => "Spirits","subcategory" => "Liqueur","price" => "8.95","volume" => "200","alcohol_content" => "33.0","price_index" => "0.1356060606060606","country" => "Canada","url" => "https://www.lcbo.com/en/fireball-cinnamon-whisky-pet-439661"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Romeo's Gin","brand" => "Micheal Jodin Cider","category" => "Spirits","subcategory" => "Gin","price" => "40.25","volume" => "750","alcohol_content" => "46.0","price_index" => "0.11666666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/romeo-s-gin-635466"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cazadores Anejo Tequila","brand" => "Cazadores","category" => "Spirits","subcategory" => "Tequila","price" => "45.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.15316666666666667","country" => "Mexico","url" => "https://www.lcbo.com/en/cazadores-anejo-tequila-113241"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Marquis De Villard Brandy","brand" => "Marquis De Villard","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "29.05","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09683333333333334","country" => "France","url" => "https://www.lcbo.com/en/marquis-de-villard-brandy-14944"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sauza Gold Tequila","brand" => "Sauza","category" => "Spirits","subcategory" => "Tequila","price" => "36.45","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12150000000000001","country" => "Mexico","url" => "https://www.lcbo.com/en/sauza-gold-tequila-27235"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Luxardo Maraschino Liqueur","brand" => "Luxardo","category" => "Spirits","subcategory" => "Liqueur","price" => "32.85","volume" => "750","alcohol_content" => "32.0","price_index" => "0.136875","country" => "Italy","url" => "https://www.lcbo.com/en/luxardo-maraschino-liqueur-57448"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Xicote Blanco Tequila","brand" => "Xicote","category" => "Spirits","subcategory" => "Tequila","price" => "59.55","volume" => "750","alcohol_content" => "40.0","price_index" => "0.19849999999999998","country" => "Mexico","url" => "https://www.lcbo.com/en/xicote-blanco-tequila-17432"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tia Maria","brand" => "Tia Maria","category" => "Spirits","subcategory" => "Liqueur","price" => "29.85","volume" => "750","alcohol_content" => "20.0","price_index" => "0.199","country" => "Italy","url" => "https://www.lcbo.com/en/tia-maria-630913"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Warheads Watermelon","brand" => "Warheads","category" => "Spirits","subcategory" => "Liqueur","price" => "15.05","volume" => "375","alcohol_content" => "20.0","price_index" => "0.2006666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/warheads-watermelon-24145"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Polar Ice Vodka (PET)","brand" => "Polar Ice Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/polar-ice-vodka-pet-71647"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Santa Teresa 1796 Solera Rum","brand" => "Santa Teresa","category" => "Spirits","subcategory" => "Rum","price" => "65.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.21983333333333335","country" => "Venezuela","url" => "https://www.lcbo.com/en/santa-teresa-1796-solera-rum-545368"
            ]);
            DB::table('alcohols')->insert([
            "title" => "McGuinness Creme De Menthe White","brand" => "McGuinness","category" => "Spirits","subcategory" => "Liqueur","price" => "24.95","volume" => "750","alcohol_content" => "15.0","price_index" => "0.22177777777777777","country" => "Canada","url" => "https://www.lcbo.com/en/mcguinness-creme-de-menthe-white-631432"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Michter's Us1 Small Batch Kentucky Bourbon","brand" => "Michter's","category" => "Spirits","subcategory" => "Whisky","price" => "90.2","volume" => "750","alcohol_content" => "45.7","price_index" => "0.263165572574763","country" => "United States","url" => "https://www.lcbo.com/en/michter-s-us1-small-batch-kentucky-bourbon-618991"
            ]);
            DB::table('alcohols')->insert([
            "title" => "B�n�dictine Liqueur","brand" => "B�n�dictine","category" => "Spirits","subcategory" => "Liqueur","price" => "40.85","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13616666666666666","country" => "France","url" => "https://www.lcbo.com/en/b-cn-cdictine-liqueur-24174"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ramazzotti Black Sambuca","brand" => "Ramazzotti","category" => "Spirits","subcategory" => "Liqueur","price" => "25.7","volume" => "750","alcohol_content" => "40.0","price_index" => "0.08566666666666667","country" => "Italy","url" => "https://www.lcbo.com/en/ramazzotti-black-sambuca-347484"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Islay Mist Scotch 8 Year Old Scotch Whisky","brand" => "Islay Mist","category" => "Spirits","subcategory" => "Whisky","price" => "33.7","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11233333333333334","country" => "United Kingdom","url" => "https://www.lcbo.com/en/islay-mist-scotch-8-year-old-scotch-whisky-333070"
            ]);
            DB::table('alcohols')->insert([
            "title" => "El Dorado 21 Year Old Rum","brand" => "El Dorado","category" => "Spirits","subcategory" => "Rum","price" => "122.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.4073333333333333","country" => "Guyana","url" => "https://www.lcbo.com/en/el-dorado-21-year-old-rum-45450"
            ]);
            DB::table('alcohols')->insert([
            "title" => "New Amsterdam Pink Whitney Vodka","brand" => "New Amsterdam","category" => "Spirits","subcategory" => "Vodka","price" => "16.25","volume" => "375","alcohol_content" => "30.0","price_index" => "0.14444444444444443","country" => "United States","url" => "https://www.lcbo.com/en/new-amsterdam-pink-whitney-vodka-21159"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Stoli Elit Vodka","brand" => "Stolichnaya","category" => "Spirits","subcategory" => "Vodka","price" => "59.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.19983333333333334","country" => "Latvia","url" => "https://www.lcbo.com/en/stolichnaya-elit-vodka-254631"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Del Maguey Vida Mezcal","brand" => "Del Maguey Mezcal","category" => "Spirits","subcategory" => "Tequila","price" => "64.95","volume" => "750","alcohol_content" => "42.0","price_index" => "0.2061904761904762","country" => "Mexico","url" => "https://www.lcbo.com/en/del-maguey-vida-mezcal-25388"
            ]);
            DB::table('alcohols')->insert([
            "title" => "El Dorado 12 Year Old Rum","brand" => "El Dorado","category" => "Spirits","subcategory" => "Rum","price" => "47.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.15733333333333335","country" => "Guyana","url" => "https://www.lcbo.com/en/el-dorado-12-year-old-rum-60608"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Belvedere Pure Vodka","brand" => "Belvedere","category" => "Spirits","subcategory" => "Vodka","price" => "116.95","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.16707142857142857","country" => "Poland","url" => "https://www.lcbo.com/en/belvedere-pure-vodka-259432"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Shochu Yokaichi Mugi Barley Liquor","brand" => "Takara Shuzo","category" => "Spirits","subcategory" => "Soju","price" => "35.5","volume" => "750","alcohol_content" => "25.0","price_index" => "0.18933333333333333","country" => "Japan","url" => "https://www.lcbo.com/en/shochu-yokaichi-mugi-barley-liquor-31070"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crown Royal Whisky (PET)","brand" => "Crown Royal","category" => "Spirits","subcategory" => "Whisky","price" => "3.95","volume" => "50","alcohol_content" => "40.0","price_index" => "0.1975","country" => "Canada","url" => "https://www.lcbo.com/en/crown-royal-whisky-pet-112110"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Junction 56 Distillery Mint Smoothie","brand" => "Junction 56","category" => "Spirits","subcategory" => "Liqueur","price" => "20.05","volume" => "375","alcohol_content" => "23.0","price_index" => "0.23246376811594205","country" => "Canada","url" => "https://www.lcbo.com/en/junction-56-distillery-mint-smoothie-12565"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ciroc Summer Citrus","brand" => "Ciroc","category" => "Spirits","subcategory" => "Vodka","price" => "50.85","volume" => "750","alcohol_content" => "35.0","price_index" => "0.19371428571428573","country" => "Italy","url" => "https://www.lcbo.com/en/ciroc-summer-citrus-19517"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lamb's Palm Breeze Rum (PET)","brand" => "Lamb's","category" => "Spirits","subcategory" => "Rum","price" => "64.6","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09228571428571428","country" => "Canada","url" => "https://www.lcbo.com/en/lamb-s-palm-breeze-rum-pet-57893"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Captain Morgan White Rum","brand" => "Captain Morgan","category" => "Spirits","subcategory" => "Rum","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "NULL","url" => "https://www.lcbo.com/en/captain-morgan-white-rum-935"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kavi Reserve Coffee Blended Canadian Whisky","brand" => "Kavi Reserve","category" => "Spirits","subcategory" => "Whisky","price" => "29.95","volume" => "750","alcohol_content" => "36.2","price_index" => "0.11031307550644565","country" => "Canada","url" => "https://www.lcbo.com/en/kavi-reserve-coffee-blended-canadian-whisky-497891"
            ]);
            DB::table('alcohols')->insert([
            "title" => "W�dka Zoladkowa Gorzka","brand" => "Zoladkowa Gorzka","category" => "Spirits","subcategory" => "Vodka","price" => "31.5","volume" => "750","alcohol_content" => "34.0","price_index" => "0.12352941176470587","country" => "Poland","url" => "https://www.lcbo.com/en/w-dka-zoladkowa-gorzka-547679"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Alberta Pure Vodka (PET)","brand" => "Alberta Pure","category" => "Spirits","subcategory" => "Vodka","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/alberta-pure-vodka-pet-88799"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Plantation XO 20th Anniversary","brand" => "Plantation","category" => "Spirits","subcategory" => "Rum","price" => "80.4","volume" => "750","alcohol_content" => "40.0","price_index" => "0.268","country" => "Barbados","url" => "https://www.lcbo.com/en/plantation-xo-20th-anniversary-366609"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Georgian Bay Gin","brand" => "Georgian Bay","category" => "Spirits","subcategory" => "Gin","price" => "34.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1165","country" => "Canada","url" => "https://www.lcbo.com/en/georgian-bay-gin-448597"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Canadian Club 100% Rye","brand" => "Canadian Club","category" => "Spirits","subcategory" => "Whisky","price" => "30.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10316666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/canadian-club-100-rye-390583"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Laneway No. 12 Vodka","brand" => "LANEWAY DISTILLERS","category" => "Spirits","subcategory" => "Vodka","price" => "51.45","volume" => "750","alcohol_content" => "43.5","price_index" => "0.15770114942528737","country" => "Canada","url" => "https://www.lcbo.com/en/laneway-no-12-vodka-27562"
            ]);
            DB::table('alcohols')->insert([
            "title" => "HIP Vodka Watermelon","brand" => "Hip","category" => "Spirits","subcategory" => "Vodka","price" => "33.0","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11","country" => "Canada","url" => "https://www.lcbo.com/en/hip-vodka-watermelon-649210"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Marquis De Villard Brandy","brand" => "Marquis De Villard","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "44.05","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09660087719298245","country" => "France","url" => "https://www.lcbo.com/en/marquis-de-villard-brandy-214726"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Silk Tassel Canadian Whisky (PET)","brand" => "Silk Tassel","category" => "Spirits","subcategory" => "Whisky","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/silk-tassel-canadian-whisky-pet-620"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Carolans Irish Cream","brand" => "Carolans","category" => "Spirits","subcategory" => "Liqueur","price" => "28.45","volume" => "750","alcohol_content" => "17.0","price_index" => "0.22313725490196076","country" => "Ireland","url" => "https://www.lcbo.com/en/carolans-irish-cream-108357"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Alpenbitter No. 7 (PET)","brand" => "Alpenbitter","category" => "Spirits","subcategory" => "Liqueur","price" => "13.95","volume" => "375","alcohol_content" => "40.0","price_index" => "0.093","country" => "Canada","url" => "https://www.lcbo.com/en/alpenbitter-no-7-pet-261776"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Four Roses Bourbon","brand" => "Four Roses","category" => "Spirits","subcategory" => "Whisky","price" => "32.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10733333333333334","country" => "United States","url" => "https://www.lcbo.com/en/four-roses-bourbon-256222"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Forty Creek Double Barrel Reserve Whisky","brand" => "Forty Creek","category" => "Spirits","subcategory" => "Whisky","price" => "39.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13316666666666668","country" => "Canada","url" => "https://www.lcbo.com/en/forty-creek-double-barrel-reserve-whisky-10937"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ciroc Mango","brand" => "Ciroc","category" => "Spirits","subcategory" => "Vodka","price" => "50.95","volume" => "750","alcohol_content" => "35.0","price_index" => "0.1940952380952381","country" => "France","url" => "https://www.lcbo.com/en/ciroc-mango-14730"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Alberta Premium Whisky","brand" => "Alberta Premium","category" => "Spirits","subcategory" => "Whisky","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/alberta-premium-whisky-984"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sailor Jerry Spiced Rum","brand" => "Sailor Jerry","category" => "Spirits","subcategory" => "Rum","price" => "32.95","volume" => "750","alcohol_content" => "46.0","price_index" => "0.0955072463768116","country" => "United States","url" => "https://www.lcbo.com/en/sailor-jerry-spiced-rum-80127"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tito's Handmade Vodka","brand" => "Tito's","category" => "Spirits","subcategory" => "Vodka","price" => "36.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12066666666666667","country" => "United States","url" => "https://www.lcbo.com/en/tito-s-handmade-vodka-597559"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenrothes 12 Year Old","brand" => "Glenrothes","category" => "Spirits","subcategory" => "Whisky","price" => "75.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.25066666666666665","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenrothes-12-year-old-639906"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Amarula Cream","brand" => "Amarula","category" => "Spirits","subcategory" => "Liqueur","price" => "29.6","volume" => "750","alcohol_content" => "17.0","price_index" => "0.23215686274509803","country" => "South Africa","url" => "https://www.lcbo.com/en/amarula-cream-342246"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Stoli Vodka 200 ML","brand" => "Stolichnaya","category" => "Spirits","subcategory" => "Vodka","price" => "9.25","volume" => "200","alcohol_content" => "40.0","price_index" => "0.115625","country" => "Latvia","url" => "https://www.lcbo.com/en/stolichnaya-vodka-200-ml-638171"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Star Of Bombay London Dry Gin","brand" => "Star of Bombay","category" => "Spirits","subcategory" => "Gin","price" => "39.95","volume" => "750","alcohol_content" => "47.5","price_index" => "0.11214035087719298","country" => "United Kingdom","url" => "https://www.lcbo.com/en/star-of-bombay-london-dry-gin-446526"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Carolans Irish Cream","brand" => "Carolans","category" => "Spirits","subcategory" => "Liqueur","price" => "36.95","volume" => "1140","alcohol_content" => "17.0","price_index" => "0.19066047471620226","country" => "Ireland","url" => "https://www.lcbo.com/en/carolans-irish-cream-623678"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smirnoff Vodka (PET)","brand" => "Smirnoff","category" => "Spirits","subcategory" => "Vodka","price" => "16.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.10733333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-vodka-pet-240"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Forty Creek Copper Pot Reserve Whisky","brand" => "Forty Creek","category" => "Spirits","subcategory" => "Whisky","price" => "48.95","volume" => "1140","alcohol_content" => "43.0","price_index" => "0.09985720114239087","country" => "Canada","url" => "https://www.lcbo.com/en/forty-creek-copper-pot-reserve-whisky-350207"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Canadian Club Whisky","brand" => "Canadian Club","category" => "Spirits","subcategory" => "Whisky","price" => "44.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09703947368421052","country" => "Canada","url" => "https://www.lcbo.com/en/canadian-club-whisky-217687"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wayne Gretzky Red Cask Whisky","brand" => "Wayne Gretzky","category" => "Spirits","subcategory" => "Whisky","price" => "35.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11983333333333335","country" => "Canada","url" => "https://www.lcbo.com/en/wayne-gretzky-red-cask-whisky-472332"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Appleton Estate 12 Year Old Rare","brand" => "Appleton Estate","category" => "Spirits","subcategory" => "Rum","price" => "49.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.15488372093023256","country" => "Canada","url" => "https://www.lcbo.com/en/appleton-estate-12-year-old-rare-14355"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wayne Gretzky Salted Caramel Cream Whisky","brand" => "Wayne Gretzky","category" => "Spirits","subcategory" => "Liqueur","price" => "35.95","volume" => "750","alcohol_content" => "17.0","price_index" => "0.28196078431372545","country" => "Canada","url" => "https://www.lcbo.com/en/wayne-gretzky-salted-caramel-cream-whisky-18524"
            ]);
            DB::table('alcohols')->insert([
            "title" => "O'Casey's Irish Cream Liqueur","brand" => "O'Casey's","category" => "Spirits","subcategory" => "Liqueur","price" => "23.85","volume" => "750","alcohol_content" => "17.0","price_index" => "0.18705882352941175","country" => "Ireland","url" => "https://www.lcbo.com/en/o-casey-s-irish-cream-liqueur-379032"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tag No. 5 Vodka","brand" => "Tag No. 5","category" => "Spirits","subcategory" => "Vodka","price" => "30.0","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1","country" => "Canada","url" => "https://www.lcbo.com/en/tag-no-5-vodka-149567"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Luxardo Sambuca Dei Cesari","brand" => "Luxardo","category" => "Spirits","subcategory" => "Liqueur","price" => "9.55","volume" => "200","alcohol_content" => "38.0","price_index" => "0.1256578947368421","country" => "Italy","url" => "https://www.lcbo.com/en/luxardo-sambuca-dei-cesari-311670"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wild Turkey Longbranch","brand" => "Wild Turkey","category" => "Spirits","subcategory" => "Whisky","price" => "61.25","volume" => "750","alcohol_content" => "43.0","price_index" => "0.18992248062015504","country" => "United States","url" => "https://www.lcbo.com/en/wild-turkey-longbranch-575001"
            ]);
            DB::table('alcohols')->insert([
            "title" => "J.P. Wiser's 15 Year Old Canadian Whisky","brand" => "J.P. Wiser's","category" => "Spirits","subcategory" => "Whisky","price" => "54.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.18316666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/j-p-wiser-s-15-year-old-canadian-whisky-536946"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Northern Keep Vodka","brand" => "Northern Keep","category" => "Spirits","subcategory" => "Vodka","price" => "31.45","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10483333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/northern-keep-vodka-15012"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Beefeater Blood Orange","brand" => "Beefeater","category" => "Spirits","subcategory" => "Gin","price" => "31.2","volume" => "750","alcohol_content" => "37.5","price_index" => "0.11093333333333333","country" => "United Kingdom","url" => "https://www.lcbo.com/en/beefeater-blood-orange-15765"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Polar Ice Vodka","brand" => "Polar Ice Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "9.1","volume" => "200","alcohol_content" => "40.0","price_index" => "0.11374999999999999","country" => "Canada","url" => "https://www.lcbo.com/en/polar-ice-vodka-602128"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Fen Chiew","brand" => "Fen Chiew","category" => "Spirits","subcategory" => "Liqueur","price" => "35.0","volume" => "750","alcohol_content" => "53.0","price_index" => "0.0880503144654088","country" => "China","url" => "https://www.lcbo.com/en/fen-chiew-897801"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Chum Churum Blueberry","brand" => "Chum Churum","category" => "Spirits","subcategory" => "Soju","price" => "10.05","volume" => "360","alcohol_content" => "12.0","price_index" => "0.23263888888888892","country" => "South Korea","url" => "https://www.lcbo.com/en/chum-churum-blueberry-12563"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenfiddich 12 Year Old Single Malt Scotch Whisky","brand" => "Glenfiddich","category" => "Spirits","subcategory" => "Whisky","price" => "70.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.234","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenfiddich-12-year-old-single-malt-scotch-whisky-12385"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dillon's Vodka","brand" => "Dillon's","category" => "Spirits","subcategory" => "Vodka","price" => "34.95","volume" => "750","alcohol_content" => "40.6","price_index" => "0.11477832512315272","country" => "Canada","url" => "https://www.lcbo.com/en/dillon-s-vodka-638130"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sight Vodka","brand" => "Sight","category" => "Spirits","subcategory" => "Vodka","price" => "35.95","volume" => "750","alcohol_content" => "39.73","price_index" => "0.12064770534440811","country" => "Canada","url" => "https://www.lcbo.com/en/sight-vodka-17788"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Malibu Mango Rum Liqueur","brand" => "Malibu","category" => "Spirits","subcategory" => "Liqueur","price" => "25.95","volume" => "750","alcohol_content" => "21.0","price_index" => "0.16476190476190475","country" => "Canada","url" => "https://www.lcbo.com/en/malibu-mango-rum-liqueur-601666"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Captain Morgan Orange Vanilla Twist","brand" => "Captain Morgan","category" => "Spirits","subcategory" => "Rum","price" => "31.95","volume" => "750","alcohol_content" => "30.0","price_index" => "0.142","country" => "United States","url" => "https://www.lcbo.com/en/captain-morgan-orange-vanilla-twist-15038"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Seagrams V.O. Whisky","brand" => "Seagrams","category" => "Spirits","subcategory" => "Whisky","price" => "28.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.0965","country" => "Canada","url" => "https://www.lcbo.com/en/seagrams-v-o-whisky-307"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Malibu Coconut Rum","brand" => "Malibu","category" => "Spirits","subcategory" => "Rum","price" => "38.25","volume" => "1140","alcohol_content" => "21.0","price_index" => "0.15977443609022557","country" => "Canada","url" => "https://www.lcbo.com/en/malibu-coconut-rum-217448"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Stara Sokolova","brand" => "Stara Sokolova","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "37.2","volume" => "700","alcohol_content" => "40.0","price_index" => "0.13285714285714287","country" => "Serbia","url" => "https://www.lcbo.com/en/stara-sokolova-576355"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenfiddich 23 Year Old Grand Cru Single Malt Scotch Whisky","brand" => "Glenfiddich","category" => "Spirits","subcategory" => "Whisky","price" => "599.95","volume" => "750","alcohol_content" => "40.0","price_index" => "1.9998333333333336","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenfiddich-grand-cru-22181"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenfiddich Project XX Experimental Series","brand" => "Glenfiddich","category" => "Spirits","subcategory" => "Whisky","price" => "100.25","volume" => "750","alcohol_content" => "47.0","price_index" => "0.2843971631205674","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenfiddich-project-xx-experimental-series-513077"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Glenlivet 18YO Single Malt Scotch Whisky","brand" => "The Glenlivet","category" => "Spirits","subcategory" => "Whisky","price" => "185.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.6173333333333333","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-glenlivet-18yo-single-malt-scotch-whisky-15118"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kahlua Coffee Flavoured Liquor","brand" => "Kahlua","category" => "Spirits","subcategory" => "Liqueur","price" => "9.2","volume" => "200","alcohol_content" => "16.0","price_index" => "0.2875","country" => "Mexico","url" => "https://www.lcbo.com/en/kahlua-coffee-flavoured-liquor-10211"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Empress Gin","brand" => "Empress 1908","category" => "Spirits","subcategory" => "Gin","price" => "29.95","volume" => "375","alcohol_content" => "42.5","price_index" => "0.18792156862745096","country" => "Canada","url" => "https://www.lcbo.com/en/empress-gin-12596"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dixon's Flaming Caesar Vodka","brand" => "DIXON'S","category" => "Spirits","subcategory" => "Vodka","price" => "34.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1165","country" => "Canada","url" => "https://www.lcbo.com/en/dixon-s-flaming-caesar-vodka-27780"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jameson IPA Caskmates Irish Whiskey","brand" => "Jameson","category" => "Spirits","subcategory" => "Whisky","price" => "40.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.134","country" => "Ireland","url" => "https://www.lcbo.com/en/jameson-ipa-caskmates-irish-whiskey-635391"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Fireball Cinnamon Whisky (PET)","brand" => "Fireball","category" => "Spirits","subcategory" => "Liqueur","price" => "13.95","volume" => "375","alcohol_content" => "33.0","price_index" => "0.11272727272727272","country" => "Canada","url" => "https://www.lcbo.com/en/fireball-cinnamon-whisky-pet-398776"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smirnoff Green Apple Flavoured Vodka","brand" => "Smirnoff","category" => "Spirits","subcategory" => "Vodka","price" => "29.75","volume" => "750","alcohol_content" => "35.0","price_index" => "0.11333333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-green-apple-flavoured-vodka-381962"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grey Goose L'Orange Vodka","brand" => "Grey Goose","category" => "Spirits","subcategory" => "Vodka","price" => "49.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1665","country" => "France","url" => "https://www.lcbo.com/en/grey-goose-l-orange-vodka-574152"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bumbu XO Rum","brand" => "Bumbu","category" => "Spirits","subcategory" => "Rum","price" => "69.5","volume" => "750","alcohol_content" => "40.0","price_index" => "0.23166666666666666","country" => "Panama","url" => "https://www.lcbo.com/en/bumbu-xo-rum-13597"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Finlandia Vodka","brand" => "Finlandia","category" => "Spirits","subcategory" => "Vodka","price" => "44.45","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09747807017543861","country" => "Finland","url" => "https://www.lcbo.com/en/finlandia-vodka-216820"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Chopin Potato Vodka","brand" => "Chopin","category" => "Spirits","subcategory" => "Vodka","price" => "54.55","volume" => "750","alcohol_content" => "40.0","price_index" => "0.18183333333333332","country" => "Poland","url" => "https://www.lcbo.com/en/chopin-potato-vodka-521963"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Captain Morgan Original Spiced Rum","brand" => "Captain Morgan","category" => "Spirits","subcategory" => "Rum","price" => "44.75","volume" => "1140","alcohol_content" => "35.0","price_index" => "0.11215538847117794","country" => "NULL","url" => "https://www.lcbo.com/en/captain-morgan-original-spiced-rum-617688"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kingston 62 Gold 750ml","brand" => "Kingston 62","category" => "Spirits","subcategory" => "Rum","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/kingston-62-gold-750ml-19855"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Seagrams 83 Whisky","brand" => "Seagrams","category" => "Spirits","subcategory" => "Whisky","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/seagrams-83-whisky-305607"
            ]);
            DB::table('alcohols')->insert([
            "title" => "O'Casey's Irish Cream","brand" => "O'Casey's","category" => "Spirits","subcategory" => "Liqueur","price" => "34.45","volume" => "1140","alcohol_content" => "17.0","price_index" => "0.1777605779153767","country" => "Ireland","url" => "https://www.lcbo.com/en/o-casey-s-irish-cream-628982"
            ]);
            DB::table('alcohols')->insert([
            "title" => "McGuinness Creme De Menthe Green","brand" => "McGuinness","category" => "Spirits","subcategory" => "Liqueur","price" => "24.95","volume" => "750","alcohol_content" => "15.0","price_index" => "0.22177777777777777","country" => "Canada","url" => "https://www.lcbo.com/en/mcguinness-creme-de-menthe-green-633677"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smirnoff Berry Blast","brand" => "Smirnoff","category" => "Spirits","subcategory" => "Vodka","price" => "29.75","volume" => "750","alcohol_content" => "30.0","price_index" => "0.1322222222222222","country" => "United States","url" => "https://www.lcbo.com/en/smirnoff-berry-blast-545392"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Chum Churum Peach 750ml","brand" => "Chum Churum","category" => "Spirits","subcategory" => "Soju","price" => "20.55","volume" => "750","alcohol_content" => "12.0","price_index" => "0.22833333333333333","country" => "South Korea","url" => "https://www.lcbo.com/en/chum-churum-peach-750ml-17230"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Gold Rum (PET)","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "17.15","volume" => "375","alcohol_content" => "40.0","price_index" => "0.11433333333333333","country" => "Puerto Rico","url" => "https://www.lcbo.com/en/bacardi-gold-rum-pet-2808"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Courvoisier VS Cognac","brand" => "Courvoisier","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "33.45","volume" => "375","alcohol_content" => "40.0","price_index" => "0.22300000000000003","country" => "France","url" => "https://www.lcbo.com/en/courvoisier-vs-cognac-423442"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Drumshanbo Gunpowder Sardinian Citrus Irish Gin","brand" => "DRUMSHANBO","category" => "Spirits","subcategory" => "Gin","price" => "54.5","volume" => "750","alcohol_content" => "43.0","price_index" => "0.16899224806201552","country" => "Ireland","url" => "https://www.lcbo.com/en/drumshanbo-gunpowder-sardinian-citrus-irish-gin-22453"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Glenlivet French Oak Reserve 15 Year Old Single Malt Scotch Whisky","brand" => "The Glenlivet","category" => "Spirits","subcategory" => "Whisky","price" => "100.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.334","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-glenlivet-french-oak-reserve-15-year-old-single-malt-scotch-whisky-603050"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Phillips Butter Ripple Schnapps","brand" => "Phillips","category" => "Spirits","subcategory" => "Liqueur","price" => "19.65","volume" => "750","alcohol_content" => "15.0","price_index" => "0.17466666666666666","country" => "United States","url" => "https://www.lcbo.com/en/phillips-butter-ripple-schnapps-292177"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smirnoff Pink Lemonade","brand" => "Smirnoff","category" => "Spirits","subcategory" => "Vodka","price" => "29.75","volume" => "750","alcohol_content" => "30.0","price_index" => "0.1322222222222222","country" => "United States","url" => "https://www.lcbo.com/en/smirnoff-pink-lemonade-21544"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mcguinness Amaretto Dell Amorosa","brand" => "McGuinness","category" => "Spirits","subcategory" => "Liqueur","price" => "22.95","volume" => "750","alcohol_content" => "23.0","price_index" => "0.13304347826086957","country" => "Canada","url" => "https://www.lcbo.com/en/mcguinness-amaretto-dell-amorosa-153965"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sobieski Vodka","brand" => "Sobieski","category" => "Spirits","subcategory" => "Vodka","price" => "31.8","volume" => "750","alcohol_content" => "40.0","price_index" => "0.106","country" => "Poland","url" => "https://www.lcbo.com/en/sobieski-vodka-181636"
            ]);
            DB::table('alcohols')->insert([
            "title" => "El Silencio Espadin Mezcal","brand" => "EL SILENCIO","category" => "Spirits","subcategory" => "Tequila","price" => "79.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.24790697674418605","country" => "Mexico","url" => "https://www.lcbo.com/en/el-silencio-espadin-mezcal-25138"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Martini Fiero","brand" => "Martini & Rossi","category" => "Spirits","subcategory" => "Liqueur","price" => "27.95","volume" => "750","alcohol_content" => "15.0","price_index" => "0.24844444444444444","country" => "Italy","url" => "https://www.lcbo.com/en/martini-fiero-16079"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Chum Churum Apple","brand" => "Chum Churum","category" => "Spirits","subcategory" => "Soju","price" => "10.05","volume" => "360","alcohol_content" => "12.0","price_index" => "0.23263888888888892","country" => "South Korea","url" => "https://www.lcbo.com/en/chum-churum-apple-545251"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Absolut Vodka","brand" => "Absolut","category" => "Spirits","subcategory" => "Vodka","price" => "9.35","volume" => "200","alcohol_content" => "40.0","price_index" => "0.11687499999999999","country" => "Sweden","url" => "https://www.lcbo.com/en/absolut-vodka-351023"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Walker's Special Old Whisky","brand" => "Hiram Walker","category" => "Spirits","subcategory" => "Whisky","price" => "28.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.0965","country" => "Canada","url" => "https://www.lcbo.com/en/walker-s-special-old-whisky-281"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kingston 62 White 1140","brand" => "Kingston 62","category" => "Spirits","subcategory" => "Rum","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "Canada","url" => "https://www.lcbo.com/en/kingston-62-white-1140-19856"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grey Goose La Poire Vodka","brand" => "Grey Goose","category" => "Spirits","subcategory" => "Vodka","price" => "49.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1665","country" => "France","url" => "https://www.lcbo.com/en/grey-goose-la-poire-vodka-116327"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Spiced Rum","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "30.95","volume" => "750","alcohol_content" => "35.0","price_index" => "0.1179047619047619","country" => "Puerto Rico","url" => "https://www.lcbo.com/en/bacardi-spiced-rum-520353"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bulleit Barrel Strength","brand" => "Bulleit","category" => "Spirits","subcategory" => "Whisky","price" => "80.05","volume" => "750","alcohol_content" => "62.7","price_index" => "0.17022860180754917","country" => "United States","url" => "https://www.lcbo.com/en/bulleit-barrel-strength-14934"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Fireball Cinnamon Whisky","brand" => "Fireball","category" => "Spirits","subcategory" => "Liqueur","price" => "46.95","volume" => "1750","alcohol_content" => "33.0","price_index" => "0.0812987012987013","country" => "Canada","url" => "https://www.lcbo.com/en/fireball-cinnamon-whisky-456350"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Larceny Kentucky Straight Bourbon","brand" => "Larceny","category" => "Spirits","subcategory" => "Whisky","price" => "44.95","volume" => "750","alcohol_content" => "46.0","price_index" => "0.13028985507246377","country" => "United States","url" => "https://www.lcbo.com/en/larceny-kentucky-straight-bourbon-512194"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Centennial 10 Year Old Limited Edition Rye","brand" => "Centennial","category" => "Spirits","subcategory" => "Whisky","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/centennial-10-year-old-limited-edition-rye-387209"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Captain Morgan Private Stock Rum","brand" => "Captain Morgan","category" => "Spirits","subcategory" => "Rum","price" => "35.15","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11716666666666666","country" => "NULL","url" => "https://www.lcbo.com/en/captain-morgan-private-stock-rum-64659"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Absolut Vodka","brand" => "Absolut","category" => "Spirits","subcategory" => "Vodka","price" => "65.95","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09421428571428572","country" => "Sweden","url" => "https://www.lcbo.com/en/absolut-vodka-216655"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crown Royal Vanilla","brand" => "Crown Royal","category" => "Spirits","subcategory" => "Whisky","price" => "18.25","volume" => "375","alcohol_content" => "35.0","price_index" => "0.13904761904761906","country" => "Canada","url" => "https://www.lcbo.com/en/crown-royal-vanilla-513598"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Fireball Cinnamon Whisky","brand" => "Fireball","category" => "Spirits","subcategory" => "Liqueur","price" => "34.95","volume" => "1140","alcohol_content" => "33.0","price_index" => "0.09290271132376395","country" => "Canada","url" => "https://www.lcbo.com/en/fireball-cinnamon-whisky-314856"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Patron Reposado Tequila","brand" => "Patron","category" => "Spirits","subcategory" => "Tequila","price" => "92.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.30983333333333335","country" => "Mexico","url" => "https://www.lcbo.com/en/patron-reposado-tequila-50088"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Skyy Vodka","brand" => "Skyy","category" => "Spirits","subcategory" => "Vodka","price" => "29.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09916666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/skyy-vodka-15806"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Superior White Rum (PET)","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "9.15","volume" => "200","alcohol_content" => "40.0","price_index" => "0.114375","country" => "Puerto Rico","url" => "https://www.lcbo.com/en/bacardi-superior-white-rum-pet-271338"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenfiddich Experimental Series #4 Fire & Cane","brand" => "Glenfiddich","category" => "Spirits","subcategory" => "Whisky","price" => "80.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.26733333333333337","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenfiddich-experimental-series-4-fire-cane-629352"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Orkney Northwest Passage London Dry Gin","brand" => "ORKNEY GIN","category" => "Spirits","subcategory" => "Gin","price" => "65.05","volume" => "700","alcohol_content" => "42.0","price_index" => "0.22125850340136052","country" => "United Kingdom","url" => "https://www.lcbo.com/en/orkney-northwest-passage-london-dry-gin-22457"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Laphroaig 10 Year Old Islay Single Malt Scotch Whisky","brand" => "Laphroaig","category" => "Spirits","subcategory" => "Whisky","price" => "87.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.27271317829457364","country" => "United Kingdom","url" => "https://www.lcbo.com/en/laphroaig-10-year-old-islay-single-malt-scotch-whisky-248997"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sask Prairie Dill Pickle Vodka","brand" => "Sask Prairie","category" => "Spirits","subcategory" => "Vodka","price" => "29.95","volume" => "750","alcohol_content" => "34.9","price_index" => "0.11442215854823304","country" => "Canada","url" => "https://www.lcbo.com/en/sask-prairie-dill-pickle-vodka-18177"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Remy Martin XO Cognac","brand" => "Remy Martin","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "325.3","volume" => "750","alcohol_content" => "40.0","price_index" => "1.0843333333333334","country" => "France","url" => "https://www.lcbo.com/en/remy-martin-xo-cognac-583468"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Glenlivet Founder's Reserve Scotch Whisky","brand" => "The Glenlivet","category" => "Spirits","subcategory" => "Whisky","price" => "34.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.22733333333333333","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-glenlivet-founder-s-reserve-scotch-whisky-474502"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Averna Amaro","brand" => "Amaro Averna","category" => "Spirits","subcategory" => "Liqueur","price" => "28.55","volume" => "750","alcohol_content" => "29.0","price_index" => "0.13126436781609196","country" => "Italy","url" => "https://www.lcbo.com/en/averna-amaro-570002"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Chum Churum Soju 750ml","brand" => "Chum Churum","category" => "Spirits","subcategory" => "Soju","price" => "19.3","volume" => "750","alcohol_content" => "17.0","price_index" => "0.15137254901960784","country" => "South Korea","url" => "https://www.lcbo.com/en/chum-churum-soju-750ml-17231"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jose Cuervo Especial Gold Tequila","brand" => "Jose Cuervo","category" => "Spirits","subcategory" => "Tequila","price" => "21.45","volume" => "375","alcohol_content" => "40.0","price_index" => "0.143","country" => "Mexico","url" => "https://www.lcbo.com/en/jose-cuervo-especial-gold-tequila-267161"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Remy Martin VSOP Cognac","brand" => "Remy Martin","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "105.25","volume" => "750","alcohol_content" => "40.0","price_index" => "0.35083333333333333","country" => "France","url" => "https://www.lcbo.com/en/remy-martin-vsop-cognac-4101"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Don Julio Reposado Tequila","brand" => "Don Julio","category" => "Spirits","subcategory" => "Tequila","price" => "93.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.31316666666666665","country" => "Mexico","url" => "https://www.lcbo.com/en/don-julio-reposado-tequila-173559"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jack Daniel's Tennessee Whiskey","brand" => "Jack Daniel's","category" => "Spirits","subcategory" => "Whisky","price" => "49.35","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.10822368421052632","country" => "United States","url" => "https://www.lcbo.com/en/jack-daniel-s-tennessee-whiskey-215616"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gordon's Dry Gin (PET)","brand" => "Gordon's","category" => "Spirits","subcategory" => "Gin","price" => "16.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.10733333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/gordon-s-dry-gin-pet-227082"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Canadian Club 100% Rye","brand" => "Canadian Club Whisky","category" => "Spirits","subcategory" => "Whisky","price" => "16.95","volume" => "375","alcohol_content" => "40.0","price_index" => "0.11299999999999999","country" => "Canada","url" => "https://www.lcbo.com/en/canadian-club-100-rye-558957"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Aberlour 16YO Single Malt Scotch Whisky (1 Bottle Limit)","brand" => "Aberlour","category" => "Spirits","subcategory" => "Whisky","price" => "89.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.29983333333333334","country" => "United Kingdom","url" => "https://www.lcbo.com/en/aberlour-16yo-single-malt-scotch-whisky-bottle-limit-2-351411"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Damblat Armagnac 10 Year Old Napoleon","brand" => "Damblat","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "72.75","volume" => "700","alcohol_content" => "40.0","price_index" => "0.2598214285714286","country" => "France","url" => "https://www.lcbo.com/en/damblat-armagnac-10-year-old-napoleon-285957"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wiser's Special Blend Whisky (PET)","brand" => "J.P. Wiser's","category" => "Spirits","subcategory" => "Whisky","price" => "16.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.10733333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/wiser-s-special-blend-whisky-pet-3517"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Herradura Silver Tequila","brand" => "Herradura","category" => "Spirits","subcategory" => "Tequila","price" => "74.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.24983333333333335","country" => "Mexico","url" => "https://www.lcbo.com/en/herradura-silver-tequila-13510"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cazadores Blanco Tequila","brand" => "Cazadores","category" => "Spirits","subcategory" => "Tequila","price" => "38.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12983333333333336","country" => "Mexico","url" => "https://www.lcbo.com/en/cazadores-blanco-tequila-363986"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tobermory Gin","brand" => "Tobermory","category" => "Spirits","subcategory" => "Gin","price" => "50.25","volume" => "750","alcohol_content" => "46.3","price_index" => "0.1447084233261339","country" => "United Kingdom","url" => "https://www.lcbo.com/en/tobermory-gin-22455"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Johnnie Walker Black Label Scotch Whisky","brand" => "Johnnie Walker","category" => "Spirits","subcategory" => "Whisky","price" => "82.95","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.1819078947368421","country" => "United Kingdom","url" => "https://www.lcbo.com/en/johnnie-walker-black-label-scotch-whisky-217802"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gordon's Gin","brand" => "Gordon's","category" => "Spirits","subcategory" => "Gin","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "Canada","url" => "https://www.lcbo.com/en/gordon-s-gin-217166"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi 8 Year Old Reserva Gold Rum","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "38.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12983333333333336","country" => "Puerto Rico","url" => "https://www.lcbo.com/en/bacardi-8-year-old-reserva-gold-rum-492520"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cada Dia Reposado Tequila","brand" => "Cada Dia","category" => "Spirits","subcategory" => "Tequila","price" => "89.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.29983333333333334","country" => "Mexico","url" => "https://www.lcbo.com/en/cada-dia-reposado-tequila-19457"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Teacher's Highland Scotch Whisky","brand" => "Teacher's","category" => "Spirits","subcategory" => "Whisky","price" => "30.25","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10083333333333333","country" => "United Kingdom","url" => "https://www.lcbo.com/en/teacher-s-highland-scotch-whisky-4465"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Loch Lomond 12 Year Old Single Malt Whisky","brand" => "Lock Lomond","category" => "Spirits","subcategory" => "Whisky","price" => "66.5","volume" => "750","alcohol_content" => "46.0","price_index" => "0.1927536231884058","country" => "United Kingdom","url" => "https://www.lcbo.com/en/loch-lomond-12-year-old-single-malt-whisky-628339"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hill's Genuine Absinthe 500ml","brand" => "Hill's","category" => "Spirits","subcategory" => "Liqueur","price" => "44.9","volume" => "500","alcohol_content" => "70.0","price_index" => "0.12828571428571428","country" => "Czechia","url" => "https://www.lcbo.com/en/hill-s-genuine-absinthe-500ml-22960"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Forty Creek Barrel Select Whisky","brand" => "Forty Creek","category" => "Spirits","subcategory" => "Whisky","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "Canada","url" => "https://www.lcbo.com/en/forty-creek-barrel-select-whisky-350629"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crown Royal Apple","brand" => "Crown Royal","category" => "Spirits","subcategory" => "Whisky","price" => "33.45","volume" => "750","alcohol_content" => "35.0","price_index" => "0.12742857142857145","country" => "Canada","url" => "https://www.lcbo.com/en/crown-royal-apple-403519"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Whyte & Mackay Special Blend Scotch Whisky","brand" => "Whyte & Mackay","category" => "Spirits","subcategory" => "Whisky","price" => "43.35","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09506578947368421","country" => "United Kingdom","url" => "https://www.lcbo.com/en/whyte-mackay-special-blend-scotch-whisky-195834"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Luxardo Cherry Liqueur Sangue Morlacco","brand" => "Luxardo","category" => "Spirits","subcategory" => "Liqueur","price" => "27.8","volume" => "750","alcohol_content" => "30.0","price_index" => "0.12355555555555556","country" => "Italy","url" => "https://www.lcbo.com/en/luxardo-cherry-liqueur-sangue-morlacco-439448"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grey Goose Vodka","brand" => "Grey Goose","category" => "Spirits","subcategory" => "Vodka","price" => "76.95","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.16875","country" => "France","url" => "https://www.lcbo.com/en/grey-goose-vodka-417196"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Howler Head Banana Infused Kentucky Straight Bourbon","brand" => "Howler Head","category" => "Spirits","subcategory" => "Whisky","price" => "55.15","volume" => "750","alcohol_content" => "40.0","price_index" => "0.18383333333333332","country" => "United States","url" => "https://www.lcbo.com/en/howler-head-banana-infused-kentucky-straight-bourbon-21978"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Classic Pomorie Rakia","brand" => "Vintages Spirits","category" => "Spirits","subcategory" => "Liqueur","price" => "30.95","volume" => "700","alcohol_content" => "40.0","price_index" => "0.11053571428571428","country" => "Bulgaria","url" => "https://www.lcbo.com/en/classic-pomorie-rakia-371047"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Collective Arts Artisanal Gin","brand" => "Collective Arts","category" => "Spirits","subcategory" => "Gin","price" => "45.95","volume" => "750","alcohol_content" => "43.5","price_index" => "0.14084291187739464","country" => "Canada","url" => "https://www.lcbo.com/en/collective-arts-artisanal-gin-128090"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Fen Chiew 30 Years","brand" => "NULL","category" => "Spirits","subcategory" => "Liqueur","price" => "188.95","volume" => "500","alcohol_content" => "48.0","price_index" => "0.7872916666666666","country" => "China","url" => "https://www.lcbo.com/en/fen-chiew-30-years-25283"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jim Beam Black Kentucky Bourbon 6 Year Old","brand" => "Jim Beam","category" => "Spirits","subcategory" => "Whisky","price" => "34.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.10837209302325582","country" => "United States","url" => "https://www.lcbo.com/en/jim-beam-black-kentucky-bourbon-6-year-old-324863"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Amaro Montenegro Italian Liqueur","brand" => "Amaro Montenegro","category" => "Spirits","subcategory" => "Liqueur","price" => "29.6","volume" => "750","alcohol_content" => "23.0","price_index" => "0.17159420289855074","country" => "Italy","url" => "https://www.lcbo.com/en/amaro-montenegro-italian-liqueur-601484"
            ]);
            DB::table('alcohols')->insert([
            "title" => "McGuinness Triple Sec","brand" => "McGuinness","category" => "Spirits","subcategory" => "Liqueur","price" => "21.95","volume" => "750","alcohol_content" => "22.0","price_index" => "0.13303030303030303","country" => "Canada","url" => "https://www.lcbo.com/en/mcguinness-triple-sec-631176"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hidden Temple Gin","brand" => "Hidden Temple","category" => "Spirits","subcategory" => "Gin","price" => "55.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.184","country" => "Canada","url" => "https://www.lcbo.com/en/hidden-temple-gin-633206"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Small Cask Brandy (PET)","brand" => "Forty Creek","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "9.1","volume" => "200","alcohol_content" => "40.0","price_index" => "0.11374999999999999","country" => "Canada","url" => "https://www.lcbo.com/en/small-cask-brandy-pet-185710"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Rossi D'Asiago Limoncello","brand" => "Rossi D'Asiago Limoncello","category" => "Spirits","subcategory" => "Liqueur","price" => "23.95","volume" => "750","alcohol_content" => "32.0","price_index" => "0.09979166666666667","country" => "Italy","url" => "https://www.lcbo.com/en/rossi-d-asiago-limoncello-469643"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Founder's Original Old Fashioned","brand" => "Founder's Original","category" => "Spirits","subcategory" => "Premixed Cocktails","price" => "39.95","volume" => "750","alcohol_content" => "36.0","price_index" => "0.14796296296296296","country" => "Canada","url" => "https://www.lcbo.com/en/founder-s-original-old-fashioned-23422"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Zirkova One Ultra Premium Vodka 1140ml","brand" => "Zirkova","category" => "Spirits","subcategory" => "Vodka","price" => "45.35","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09945175438596492","country" => "Ukraine","url" => "https://www.lcbo.com/en/zirkova-one-ultra-premium-vodka-1140ml-19480"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dillon's Bitters Lime","brand" => "Dillon's","category" => "Spirits","subcategory" => "Liqueur","price" => "14.95","volume" => "100","alcohol_content" => "50.0","price_index" => "0.299","country" => "Canada","url" => "https://www.lcbo.com/en/dillon-s-bitters-lime-463406"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tanqueray Flor De Sevilla","brand" => "Tanqueray","category" => "Spirits","subcategory" => "Gin","price" => "33.45","volume" => "750","alcohol_content" => "41.3","price_index" => "0.1079903147699758","country" => "United Kingdom","url" => "https://www.lcbo.com/en/tanqueray-flor-de-sevilla-573956"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wiser's Special Blend Whisky","brand" => "J.P. Wiser's","category" => "Spirits","subcategory" => "Whisky","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/wiser-s-special-blend-whisky-1222"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Forty Creek Taproom","brand" => "Forty Creek Whisky","category" => "Spirits","subcategory" => "Whisky","price" => "39.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13316666666666668","country" => "Canada","url" => "https://www.lcbo.com/en/forty-creek-taproom-21950"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wayne Gretzky Ice Cask Whisky","brand" => "Wayne Gretzky","category" => "Spirits","subcategory" => "Whisky","price" => "59.95","volume" => "750","alcohol_content" => "41.5","price_index" => "0.1926104417670683","country" => "Canada","url" => "https://www.lcbo.com/en/wayne-gretzky-ice-cask-whisky-541094"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Laphroaig Select Islay Single Malt Scotch Whisky","brand" => "Laphroaig","category" => "Spirits","subcategory" => "Whisky","price" => "69.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2331666666666667","country" => "United Kingdom","url" => "https://www.lcbo.com/en/laphroaig-select-islay-single-malt-scotch-whisky-478222"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Collingwood Whisky","brand" => "Collingwood","category" => "Spirits","subcategory" => "Whisky","price" => "33.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11066666666666668","country" => "Canada","url" => "https://www.lcbo.com/en/collingwood-whisky-244186"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cincoro Reposado Tequila","brand" => "Cincoro","category" => "Spirits","subcategory" => "Tequila","price" => "199.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.6665","country" => "Mexico","url" => "https://www.lcbo.com/en/cincoro-reposado-tequila-25143"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Carolans Irish Cream","brand" => "Carolans","category" => "Spirits","subcategory" => "Liqueur","price" => "56.2","volume" => "1750","alcohol_content" => "17.0","price_index" => "0.18890756302521008","country" => "Ireland","url" => "https://www.lcbo.com/en/carolans-irish-cream-18441"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Royal Reserve Whisky (PET)","brand" => "Royal Reserve","category" => "Spirits","subcategory" => "Whisky","price" => "64.6","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09228571428571428","country" => "Canada","url" => "https://www.lcbo.com/en/royal-reserve-whisky-pet-61564"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bombay Sapphire London Dry Gin","brand" => "Bombay Sapphire","category" => "Spirits","subcategory" => "Gin","price" => "30.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10316666666666667","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bombay-sapphire-london-dry-gin-316844"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kahlua Coffee Flavoured Liquor","brand" => "Kahlua","category" => "Spirits","subcategory" => "Liqueur","price" => "40.15","volume" => "1140","alcohol_content" => "16.0","price_index" => "0.2201206140350877","country" => "Mexico","url" => "https://www.lcbo.com/en/kahlua-coffee-flavoured-liquor-10216"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Amarula Cream","brand" => "Amarula","category" => "Spirits","subcategory" => "Liqueur","price" => "40.15","volume" => "1140","alcohol_content" => "17.0","price_index" => "0.207172342621259","country" => "South Africa","url" => "https://www.lcbo.com/en/amarula-cream-605857"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dewar's White Label","brand" => "Dewar's","category" => "Spirits","subcategory" => "Whisky","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "United Kingdom","url" => "https://www.lcbo.com/en/dewar-s-white-label-217992"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bottega Nero Chocolate Liqueur","brand" => "Bottega","category" => "Spirits","subcategory" => "Liqueur","price" => "25.05","volume" => "500","alcohol_content" => "15.0","price_index" => "0.334","country" => "Italy","url" => "https://www.lcbo.com/en/bottega-nero-chocolate-liqueur-22272"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Forty Creek Foxheart","brand" => "Forty Creek","category" => "Spirits","subcategory" => "Whisky","price" => "44.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.14983333333333335","country" => "Canada","url" => "https://www.lcbo.com/en/forty-creek-foxheart-20047"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jack Daniel's Tennessee Whiskey","brand" => "Jack Daniel's","category" => "Spirits","subcategory" => "Whisky","price" => "36.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12316666666666667","country" => "United States","url" => "https://www.lcbo.com/en/jack-daniel-s-tennessee-whiskey-41384"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hennessy VS Cognac","brand" => "Hennessy","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "73.55","volume" => "750","alcohol_content" => "40.0","price_index" => "0.24516666666666664","country" => "France","url" => "https://www.lcbo.com/en/hennessy-vs-cognac-8284"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jack Daniel's Tennessee Whiskey","brand" => "Jack Daniel's","category" => "Spirits","subcategory" => "Whisky","price" => "20.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.134","country" => "United States","url" => "https://www.lcbo.com/en/jack-daniel-s-tennessee-whiskey-119743"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Knob Creek Rye","brand" => "Knob Creek","category" => "Spirits","subcategory" => "Whisky","price" => "49.95","volume" => "750","alcohol_content" => "50.0","price_index" => "0.1332","country" => "United States","url" => "https://www.lcbo.com/en/knob-creek-rye-348235"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ketel One Botanical Peach and Orange Blossom","brand" => "Ketel One","category" => "Spirits","subcategory" => "Vodka","price" => "35.95","volume" => "750","alcohol_content" => "30.0","price_index" => "0.1597777777777778","country" => "Netherlands","url" => "https://www.lcbo.com/en/ketel-one-botanical-peach-and-orange-blossom-640995"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grant's Triple Wood Blended Scotch Whisky","brand" => "Grant's","category" => "Spirits","subcategory" => "Whisky","price" => "19.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.12733333333333335","country" => "United Kingdom","url" => "https://www.lcbo.com/en/grant-s-triple-wood-blended-scotch-whisky-216606"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Clynelish 14 Year Old Single Malt Scotch Whisky","brand" => "Clynelish","category" => "Spirits","subcategory" => "Whisky","price" => "99.95","volume" => "750","alcohol_content" => "45.94","price_index" => "0.29008852125961404","country" => "United Kingdom","url" => "https://www.lcbo.com/en/clynelish-14-year-old-single-malt-scotch-whisky-250357"
            ]);
            DB::table('alcohols')->insert([
            "title" => "818 Tequila Blanco","brand" => "818","category" => "Spirits","subcategory" => "Tequila","price" => "74.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.24983333333333335","country" => "Mexico","url" => "https://www.lcbo.com/en/818-tequila-blanco-25136"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grappa Friulana Nonino","brand" => "Nonino","category" => "Spirits","subcategory" => "Grappa","price" => "42.55","volume" => "700","alcohol_content" => "43.0","price_index" => "0.14136212624584715","country" => "Italy","url" => "https://www.lcbo.com/en/grappa-friulana-nonino-947069"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dunrobin Earl Grey Gin","brand" => "Dunrobin","category" => "Spirits","subcategory" => "Gin","price" => "49.95","volume" => "750","alcohol_content" => "43.3","price_index" => "0.15381062355658198","country" => "Canada","url" => "https://www.lcbo.com/en/dunrobin-earl-grey-gin-22097"
            ]);
            DB::table('alcohols')->insert([
            "title" => "J.P. Wiser's Deluxe Whisky","brand" => "J.P. Wiser's","category" => "Spirits","subcategory" => "Whisky","price" => "17.25","volume" => "375","alcohol_content" => "40.0","price_index" => "0.115","country" => "Canada","url" => "https://www.lcbo.com/en/j-p-wiser-s-deluxe-whisky-9522"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bumbu Craft Rum","brand" => "Bumbu","category" => "Spirits","subcategory" => "Rum","price" => "60.25","volume" => "750","alcohol_content" => "35.2","price_index" => "0.22821969696969696","country" => "Barbados","url" => "https://www.lcbo.com/en/bumbu-craft-rum-646729"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Gold Rum","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "Puerto Rico","url" => "https://www.lcbo.com/en/bacardi-gold-rum-1206"
            ]);
            DB::table('alcohols')->insert([
            "title" => "St Remy XO 375ml","brand" => "St-Remy","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "20.95","volume" => "375","alcohol_content" => "40.0","price_index" => "0.13966666666666666","country" => "France","url" => "https://www.lcbo.com/en/st-remy-xo-375ml-19035"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Angel's Envy Whiskey","brand" => "Angel's Envy","category" => "Spirits","subcategory" => "Whisky","price" => "80.25","volume" => "750","alcohol_content" => "43.3","price_index" => "0.2471131639722864","country" => "United States","url" => "https://www.lcbo.com/en/angel-s-envy-whiskey-21465"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Caffo Vecchio Amaro Del Capo","brand" => "Caffo Vecchio","category" => "Spirits","subcategory" => "Liqueur","price" => "30.4","volume" => "750","alcohol_content" => "35.0","price_index" => "0.1158095238095238","country" => "Italy","url" => "https://www.lcbo.com/en/caffo-vecchio-amaro-del-capo-16081"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Auchentoshan 12 Year Old Single Malt Scotch Whisky","brand" => "Auchentoshan","category" => "Spirits","subcategory" => "Whisky","price" => "65.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.21733333333333335","country" => "United Kingdom","url" => "https://www.lcbo.com/en/auchentoshan-12-year-old-single-malt-scotch-whisky-107359"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cortel Napoleon VSOP Brandy","brand" => "Cortel","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "16.35","volume" => "375","alcohol_content" => "39.7","price_index" => "0.109823677581864","country" => "France","url" => "https://www.lcbo.com/en/cortel-napoleon-vsop-brandy-892315"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Johnnie Walker Red Label Scotch Whisky","brand" => "Johnnie Walker","category" => "Spirits","subcategory" => "Whisky","price" => "19.9","volume" => "375","alcohol_content" => "40.0","price_index" => "0.13266666666666665","country" => "United Kingdom","url" => "https://www.lcbo.com/en/johnnie-walker-red-label-scotch-whisky-3467"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Licor 43","brand" => "Licor 43","category" => "Spirits","subcategory" => "Liqueur","price" => "32.95","volume" => "750","alcohol_content" => "31.0","price_index" => "0.14172043010752688","country" => "Spain","url" => "https://www.lcbo.com/en/licor-43-263780"
            ]);
            DB::table('alcohols')->insert([
            "title" => "McGuinness Creme De Cacao White","brand" => "McGuinness","category" => "Spirits","subcategory" => "Liqueur","price" => "22.95","volume" => "750","alcohol_content" => "15.0","price_index" => "0.204","country" => "Canada","url" => "https://www.lcbo.com/en/mcguinness-creme-de-cacao-white-631226"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Arak Al Shallal","brand" => "Al Shallal","category" => "Spirits","subcategory" => "Liqueur","price" => "29.85","volume" => "750","alcohol_content" => "50.0","price_index" => "0.0796","country" => "Lebanon","url" => "https://www.lcbo.com/en/arak-al-shallal-600486"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wayne Gretzky Red Cask Whisky","brand" => "Wayne Gretzky","category" => "Spirits","subcategory" => "Whisky","price" => "19.95","volume" => "375","alcohol_content" => "40.0","price_index" => "0.133","country" => "Canada","url" => "https://www.lcbo.com/en/wayne-gretzky-red-cask-whisky-541011"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Havana Club Anejo Reserva Rum","brand" => "Havana Club","category" => "Spirits","subcategory" => "Rum","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "Cuba","url" => "https://www.lcbo.com/en/havana-club-anejo-reserva-rum-443903"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Boodles Gin","brand" => "Boodles","category" => "Spirits","subcategory" => "Gin","price" => "32.25","volume" => "750","alcohol_content" => "45.2","price_index" => "0.09513274336283185","country" => "United Kingdom","url" => "https://www.lcbo.com/en/boodles-gin-397539"
            ]);
            DB::table('alcohols')->insert([
            "title" => "St Remy VSOP Brandy","brand" => "St-Remy","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "30.25","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10083333333333333","country" => "France","url" => "https://www.lcbo.com/en/st-remy-vsop-brandy-8888"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wayne Gretzky Red Cask Whisky 1.14L","brand" => "Wayne Gretzky","category" => "Spirits","subcategory" => "Whisky","price" => "49.95","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.10953947368421053","country" => "Canada","url" => "https://www.lcbo.com/en/wayne-gretzky-red-cask-whisky-1-14l-21437"
            ]);
            DB::table('alcohols')->insert([
            "title" => "El Jimador Tequila Reposado","brand" => "El Jimador","category" => "Spirits","subcategory" => "Tequila","price" => "38.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12733333333333335","country" => "Mexico","url" => "https://www.lcbo.com/en/el-jimador-tequila-reposado-460360"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Rumchata Limon","brand" => "Rumchata","category" => "Spirits","subcategory" => "Liqueur","price" => "32.35","volume" => "750","alcohol_content" => "13.7","price_index" => "0.31484184914841856","country" => "United States","url" => "https://www.lcbo.com/en/rumchata-limon-16549"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Stravecchia Grappa","brand" => "Decale","category" => "Spirits","subcategory" => "Grappa","price" => "30.5","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10166666666666667","country" => "Italy","url" => "https://www.lcbo.com/en/stravecchia-grappa-891879"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Kraken Black Spiced Rum","brand" => "The Kraken","category" => "Spirits","subcategory" => "Rum","price" => "66.2","volume" => "1750","alcohol_content" => "47.0","price_index" => "0.08048632218844985","country" => "Trinidad & Tobago","url" => "https://www.lcbo.com/en/the-kraken-black-spiced-rum-454710"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sortilege Blueberry","brand" => "Sortil�ge","category" => "Spirits","subcategory" => "Whisky","price" => "34.95","volume" => "750","alcohol_content" => "23.0","price_index" => "0.20260869565217393","country" => "Canada","url" => "https://www.lcbo.com/en/sortilege-blueberry-508150"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Captain Morgan Original Spiced Rum","brand" => "Captain Morgan","category" => "Spirits","subcategory" => "Rum","price" => "44.75","volume" => "1140","alcohol_content" => "35.0","price_index" => "0.11215538847117794","country" => "NULL","url" => "https://www.lcbo.com/en/captain-morgan-original-spiced-rum-217653"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Canadian Club Whisky (PET)","brand" => "Canadian Club","category" => "Spirits","subcategory" => "Whisky","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/canadian-club-whisky-pet-103341"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Seagrams 83 Whisky","brand" => "Seagrams","category" => "Spirits","subcategory" => "Whisky","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "Canada","url" => "https://www.lcbo.com/en/seagrams-83-whisky-192922"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sipsmith London Dry Gin","brand" => "Sipsmith","category" => "Spirits","subcategory" => "Gin","price" => "44.95","volume" => "750","alcohol_content" => "41.6","price_index" => "0.14407051282051284","country" => "United Kingdom","url" => "https://www.lcbo.com/en/sipsmith-london-dry-gin-391177"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Spiced Rum","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "44.75","volume" => "1140","alcohol_content" => "35.0","price_index" => "0.11215538847117794","country" => "Puerto Rico","url" => "https://www.lcbo.com/en/bacardi-spiced-rum-570366"
            ]);
            DB::table('alcohols')->insert([
            "title" => "King St. Vodka","brand" => "King St.","category" => "Spirits","subcategory" => "Vodka","price" => "41.8","volume" => "750","alcohol_content" => "43.0","price_index" => "0.12961240310077518","country" => "United States","url" => "https://www.lcbo.com/en/king-st-vodka-22775"
            ]);
            DB::table('alcohols')->insert([
            "title" => "St Remy XO Brandy","brand" => "St-Remy","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "35.25","volume" => "750","alcohol_content" => "39.8","price_index" => "0.11809045226130653","country" => "France","url" => "https://www.lcbo.com/en/st-remy-xo-brandy-557108"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hendrick's Gin","brand" => "Hendrick's","category" => "Spirits","subcategory" => "Gin","price" => "30.1","volume" => "375","alcohol_content" => "44.0","price_index" => "0.18242424242424243","country" => "United Kingdom","url" => "https://www.lcbo.com/en/hendrick-s-gin-417261"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Stock 84 Brandy","brand" => "Stock 84","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "44.7","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09802631578947368","country" => "Czechia","url" => "https://www.lcbo.com/en/stock-84-brandy-417576"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Unicum Bitters","brand" => "Zwack","category" => "Spirits","subcategory" => "Liqueur","price" => "28.05","volume" => "500","alcohol_content" => "40.0","price_index" => "0.14025","country" => "Hungary","url" => "https://www.lcbo.com/en/unicum-bitters-364851"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Casamigos Tequila Reposado","brand" => "Casamigos","category" => "Spirits","subcategory" => "Tequila","price" => "90.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.3006666666666667","country" => "Mexico","url" => "https://www.lcbo.com/en/casamigos-tequila-reposado-388694"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Curio Rock Samphire Gin","brand" => "Curio Gin","category" => "Spirits","subcategory" => "Gin","price" => "41.95","volume" => "700","alcohol_content" => "41.0","price_index" => "0.1461672473867596","country" => "United Kingdom","url" => "https://www.lcbo.com/en/curio-rock-samphire-gin-11826"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smirnoff Vodka (PET)","brand" => "Smirnoff","category" => "Spirits","subcategory" => "Vodka","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-vodka-pet-131391"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jose Cuervo Tradicional Reposado","brand" => "Jose Cuervo","category" => "Spirits","subcategory" => "Tequila","price" => "39.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13316666666666668","country" => "Mexico","url" => "https://www.lcbo.com/en/jose-cuervo-tradicional-reposado-450932"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Deep Eddy Lemon","brand" => "Deep Eddy","category" => "Spirits","subcategory" => "Vodka","price" => "29.75","volume" => "750","alcohol_content" => "35.0","price_index" => "0.11333333333333333","country" => "United States","url" => "https://www.lcbo.com/en/deep-eddy-lemon-638734"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sauza Silver Tequila (PET)","brand" => "Sauza","category" => "Spirits","subcategory" => "Tequila","price" => "20.95","volume" => "375","alcohol_content" => "40.0","price_index" => "0.13966666666666666","country" => "Mexico","url" => "https://www.lcbo.com/en/sauza-silver-tequila-pet-267294"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Teremana Reposado Tequila","brand" => "Teremana","category" => "Spirits","subcategory" => "Tequila","price" => "55.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.184","country" => "Mexico","url" => "https://www.lcbo.com/en/teremana-reposado-tequila-19750"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cynar","brand" => "Cynar","category" => "Spirits","subcategory" => "Liqueur","price" => "26.95","volume" => "1000","alcohol_content" => "16.5","price_index" => "0.16333333333333333","country" => "Italy","url" => "https://www.lcbo.com/en/cynar-380832"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smirnoff Watermelon Flavoured Vodka","brand" => "Smirnoff","category" => "Spirits","subcategory" => "Vodka","price" => "29.75","volume" => "750","alcohol_content" => "35.0","price_index" => "0.11333333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-watermelon-flavoured-vodka-382036"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bols Apricot Brandy","brand" => "Bols","category" => "Spirits","subcategory" => "Liqueur","price" => "22.4","volume" => "750","alcohol_content" => "24.0","price_index" => "0.12444444444444444","country" => "Netherlands","url" => "https://www.lcbo.com/en/bols-apricot-brandy-15628"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Royal Reserve Whisky (PET)","brand" => "Royal Reserve","category" => "Spirits","subcategory" => "Whisky","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/royal-reserve-whisky-pet-95968"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tag No. 5 Vodka (PET)","brand" => "Tag No. 5","category" => "Spirits","subcategory" => "Vodka","price" => "44.65","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09791666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/tag-no-5-vodka-pet-492256"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Junction 56 Distillery Rhubarb Gin","brand" => "Junction 56","category" => "Spirits","subcategory" => "Gin","price" => "19.95","volume" => "375","alcohol_content" => "32.8","price_index" => "0.16219512195121952","country" => "Canada","url" => "https://www.lcbo.com/en/junction-56-distillery-rhubarb-gin-16911"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Miguel Torres Jaime 1 Brandy","brand" => "Miguel Torres","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "164.85","volume" => "750","alcohol_content" => "40.0","price_index" => "0.5495","country" => "Spain","url" => "https://www.lcbo.com/en/miguel-torres-jaime-1-brandy-995233"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jagermeister","brand" => "Jagermeister","category" => "Spirits","subcategory" => "Liqueur","price" => "43.75","volume" => "1140","alcohol_content" => "35.0","price_index" => "0.10964912280701754","country" => "Germany","url" => "https://www.lcbo.com/en/jagermeister-25999"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Seedlip Grove Non-Alcoholic Spirit","brand" => "SEEDLIP","category" => "Spirits","subcategory" => "Vodka","price" => "45.0","volume" => "700","alcohol_content" => "0.05","price_index" => "128.57142857142856","country" => "United Kingdom","url" => "https://www.lcbo.com/en/seedlip-grove-dealcoholized-spirit-23901"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Beefeater London Dry Gin","brand" => "Beefeater","category" => "Spirits","subcategory" => "Gin","price" => "9.2","volume" => "200","alcohol_content" => "40.0","price_index" => "0.11499999999999999","country" => "United Kingdom","url" => "https://www.lcbo.com/en/beefeater-london-dry-gin-268748"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Prince Igor Vodka (PET)","brand" => "Prince Igor Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "64.6","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09228571428571428","country" => "Canada","url" => "https://www.lcbo.com/en/prince-igor-vodka-pet-190363"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jim Beam White Label Bourbon","brand" => "Jim Beam","category" => "Spirits","subcategory" => "Whisky","price" => "30.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10316666666666667","country" => "United States","url" => "https://www.lcbo.com/en/jim-beam-white-label-bourbon-21378"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tequila Tromba Reposado","brand" => "Tromba","category" => "Spirits","subcategory" => "Tequila","price" => "60.2","volume" => "750","alcohol_content" => "36.0","price_index" => "0.22296296296296297","country" => "Mexico","url" => "https://www.lcbo.com/en/tequila-tromba-reposado-360206"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hennessy VSOP Cognac","brand" => "Hennessy","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "114.65","volume" => "750","alcohol_content" => "40.0","price_index" => "0.3821666666666667","country" => "France","url" => "https://www.lcbo.com/en/hennessy-vsop-cognac-43703"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Don Julio Blanco Tequila","brand" => "Don Julio","category" => "Spirits","subcategory" => "Tequila","price" => "87.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2906666666666667","country" => "Mexico","url" => "https://www.lcbo.com/en/don-julio-blanco-tequila-173542"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Aberlour 12 Year Old Single Malt Scotch Whisky","brand" => "Aberlour","category" => "Spirits","subcategory" => "Whisky","price" => "77.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.25733333333333336","country" => "United Kingdom","url" => "https://www.lcbo.com/en/aberlour-12-year-old-single-malt-scotch-whisky-352104"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenmorangie Original Highland Single Malt Scotch Whisky","brand" => "Glenmorangie","category" => "Spirits","subcategory" => "Whisky","price" => "72.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.24066666666666667","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenmorangie-original-highland-single-malt-scotch-whisky-298638"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Banff Ice Vodka","brand" => "Banff Ice","category" => "Spirits","subcategory" => "Vodka","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "Canada","url" => "https://www.lcbo.com/en/banff-ice-vodka-216903"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dixon's Silver Creek Blood Orange Vodka","brand" => "DIXON'S","category" => "Spirits","subcategory" => "Vodka","price" => "34.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1165","country" => "Canada","url" => "https://www.lcbo.com/en/dixon-s-silver-creek-blood-orange-vodka-27650"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tag No. 5 Vodka (PET)","brand" => "Tag No. 5","category" => "Spirits","subcategory" => "Vodka","price" => "66.2","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09457142857142857","country" => "Canada","url" => "https://www.lcbo.com/en/tag-no-5-vodka-pet-486381"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Luxardo Sambuca Dei Cesari","brand" => "Luxardo","category" => "Spirits","subcategory" => "Liqueur","price" => "31.5","volume" => "1140","alcohol_content" => "38.0","price_index" => "0.07271468144044321","country" => "Italy","url" => "https://www.lcbo.com/en/luxardo-sambuca-dei-cesari-510008"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Captain Morgan Black Spiced Rum","brand" => "Captain Morgan","category" => "Spirits","subcategory" => "Rum","price" => "31.95","volume" => "750","alcohol_content" => "47.3","price_index" => "0.09006342494714588","country" => "NULL","url" => "https://www.lcbo.com/en/captain-morgan-black-spiced-rum-283929"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Knob Creek Bourbon","brand" => "Knob Creek","category" => "Spirits","subcategory" => "Whisky","price" => "52.95","volume" => "750","alcohol_content" => "50.0","price_index" => "0.14120000000000002","country" => "United States","url" => "https://www.lcbo.com/en/knob-creek-bourbon-326009"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ramazzotti Sambuca","brand" => "Ramazzotti","category" => "Spirits","subcategory" => "Liqueur","price" => "24.2","volume" => "750","alcohol_content" => "38.0","price_index" => "0.08491228070175438","country" => "Italy","url" => "https://www.lcbo.com/en/ramazzotti-sambuca-323972"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Niagara Falls Craft Vodka","brand" => "Niagara Falls Craft","category" => "Spirits","subcategory" => "Vodka","price" => "30.15","volume" => "750","alcohol_content" => "39.69","price_index" => "0.10128495842781558","country" => "Canada","url" => "https://www.lcbo.com/en/niagara-falls-craft-vodka-573857"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Alberta Springs Whisky (PET)","brand" => "Alberta Springs","category" => "Spirits","subcategory" => "Whisky","price" => "64.6","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09228571428571428","country" => "Canada","url" => "https://www.lcbo.com/en/alberta-springs-whisky-pet-461434"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Absolut Vodka","brand" => "Absolut","category" => "Spirits","subcategory" => "Vodka","price" => "16.95","volume" => "375","alcohol_content" => "40.0","price_index" => "0.11299999999999999","country" => "Sweden","url" => "https://www.lcbo.com/en/absolut-vodka-265199"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mighty Moose Canadian Vodka","brand" => "Mighty Moose","category" => "Spirits","subcategory" => "Vodka","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/mighty-moose-canadian-vodka-20928"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Whitley Neill Original London Dry Gin","brand" => "Whitley Neill","category" => "Spirits","subcategory" => "Gin","price" => "44.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.1393798449612403","country" => "United Kingdom","url" => "https://www.lcbo.com/en/whitley-neill-original-london-dry-gin-514463"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Indoggo Gin","brand" => "Indoggo","category" => "Spirits","subcategory" => "Gin","price" => "39.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13316666666666668","country" => "United States","url" => "https://www.lcbo.com/en/indoggo-gin-19403"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dr. McGillicuddy's Intense Peach","brand" => "Dr. McGillicuddy","category" => "Spirits","subcategory" => "Liqueur","price" => "10.25","volume" => "375","alcohol_content" => "21.0","price_index" => "0.13015873015873017","country" => "Canada","url" => "https://www.lcbo.com/en/dr-mcgillicuddy-s-intense-peach-397976"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Roe & Co Blended Irish Whiskey","brand" => "Roe & Co","category" => "Spirits","subcategory" => "Whisky","price" => "49.95","volume" => "750","alcohol_content" => "45.0","price_index" => "0.14800000000000002","country" => "Ireland","url" => "https://www.lcbo.com/en/roe-co-blended-irish-whiskey-10558"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Canadian Club Whisky","brand" => "Canadian Club","category" => "Spirits","subcategory" => "Whisky","price" => "16.55","volume" => "375","alcohol_content" => "40.0","price_index" => "0.11033333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/canadian-club-whisky-463"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Forty Creek Spike Honey Spiced Whisky","brand" => "Forty Creek","category" => "Spirits","subcategory" => "Whisky","price" => "30.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10316666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/forty-creek-spike-honey-spiced-whisky-397109"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wayne Gretzky Original Cream 1140ml","brand" => "Wayne Gretzky","category" => "Spirits","subcategory" => "Liqueur","price" => "49.95","volume" => "1140","alcohol_content" => "17.0","price_index" => "0.25773993808049533","country" => "Canada","url" => "https://www.lcbo.com/en/wayne-gretzky-original-cream-1140ml-21473"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sheridan's Original Double Liquor","brand" => "Sheridan's","category" => "Spirits","subcategory" => "Liqueur","price" => "33.45","volume" => "750","alcohol_content" => "15.5","price_index" => "0.287741935483871","country" => "Ireland","url" => "https://www.lcbo.com/en/sheridan-s-original-double-liquor-625756"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tito's Handmade Vodka","brand" => "Tito's","category" => "Spirits","subcategory" => "Vodka","price" => "19.95","volume" => "375","alcohol_content" => "40.0","price_index" => "0.133","country" => "United States","url" => "https://www.lcbo.com/en/tito-s-handmade-vodka-363812"
            ]);
            DB::table('alcohols')->insert([
            "title" => "De Valcourt Napoleon Brandy VSOP","brand" => "De Valcourt","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "France","url" => "https://www.lcbo.com/en/de-valcourt-napoleon-brandy-vsop-413328"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ouzo 12","brand" => "Ouzo 12","category" => "Spirits","subcategory" => "Liqueur","price" => "23.5","volume" => "750","alcohol_content" => "40.0","price_index" => "0.07833333333333334","country" => "Greece","url" => "https://www.lcbo.com/en/ouzo-12-123133"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Captain Morgan Dark Rum (PET)","brand" => "Captain Morgan","category" => "Spirits","subcategory" => "Rum","price" => "16.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.10733333333333334","country" => "NULL","url" => "https://www.lcbo.com/en/captain-morgan-dark-rum-pet-19000"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Flor De Cana Eco-15","brand" => "FLOR DE CANA","category" => "Spirits","subcategory" => "Rum","price" => "59.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.19983333333333334","country" => "Nicaragua","url" => "https://www.lcbo.com/en/flor-de-cana-eco-15-20191"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Baileys Almande","brand" => "Baileys","category" => "Spirits","subcategory" => "Liqueur","price" => "31.95","volume" => "750","alcohol_content" => "13.0","price_index" => "0.32769230769230767","country" => "United States","url" => "https://www.lcbo.com/en/baileys-almande-455428"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hennessy VS Cognac","brand" => "Hennessy","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "178.85","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.2555","country" => "France","url" => "https://www.lcbo.com/en/hennessy-vs-cognac-425579"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Empress 1908 Gin","brand" => "Empress 1908","category" => "Spirits","subcategory" => "Gin","price" => "52.95","volume" => "750","alcohol_content" => "42.5","price_index" => "0.16611764705882354","country" => "Canada","url" => "https://www.lcbo.com/en/empress-1908-gin-557470"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Krupnik Honey Liqueur","brand" => "Krupnik","category" => "Spirits","subcategory" => "Liqueur","price" => "29.35","volume" => "750","alcohol_content" => "38.0","price_index" => "0.10298245614035088","country" => "Poland","url" => "https://www.lcbo.com/en/krupnik-honey-liqueur-290403"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tawse Canadian Whisky Pinot Barrel","brand" => "Tawse","category" => "Spirits","subcategory" => "Whisky","price" => "39.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13316666666666668","country" => "Canada","url" => "https://www.lcbo.com/en/tawse-canadian-whisky-pinot-barrel-22125"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jim Beam Devil's Cut","brand" => "Jim Beam","category" => "Spirits","subcategory" => "Whisky","price" => "32.95","volume" => "750","alcohol_content" => "45.0","price_index" => "0.09762962962962964","country" => "United States","url" => "https://www.lcbo.com/en/jim-beam-devil-s-cut-272161"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Myer's Planters Punch","brand" => "Myer's","category" => "Spirits","subcategory" => "Rum","price" => "43.95","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09638157894736843","country" => "Jamaica","url" => "https://www.lcbo.com/en/myer-s-planters-punch-217216"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Plantation Grande Reserve","brand" => "Plantation","category" => "Spirits","subcategory" => "Rum","price" => "30.3","volume" => "750","alcohol_content" => "40.0","price_index" => "0.101","country" => "Barbados","url" => "https://www.lcbo.com/en/plantation-grande-reserve-318618"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Southern Comfort (PET)","brand" => "Southern Comfort","category" => "Spirits","subcategory" => "Liqueur","price" => "8.95","volume" => "200","alcohol_content" => "35.0","price_index" => "0.12785714285714284","country" => "Canada","url" => "https://www.lcbo.com/en/southern-comfort-pet-494369"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Amaro Lucano","brand" => "Amaro Lucano","category" => "Spirits","subcategory" => "Liqueur","price" => "26.2","volume" => "750","alcohol_content" => "28.0","price_index" => "0.12476190476190474","country" => "Italy","url" => "https://www.lcbo.com/en/amaro-lucano-285163"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wild Turkey 101 Kentucky Straight Bourbon","brand" => "Wild Turkey","category" => "Spirits","subcategory" => "Whisky","price" => "42.3","volume" => "750","alcohol_content" => "50.5","price_index" => "0.11168316831683167","country" => "United States","url" => "https://www.lcbo.com/en/wild-turkey-101-kentucky-straight-bourbon-479949"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Luksusowa Vodka","brand" => "Luksusowa","category" => "Spirits","subcategory" => "Vodka","price" => "45.35","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09945175438596492","country" => "Poland","url" => "https://www.lcbo.com/en/luksusowa-vodka-212282"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Luxardo Amaretto Di Saschira","brand" => "Luxardo","category" => "Spirits","subcategory" => "Liqueur","price" => "28.8","volume" => "750","alcohol_content" => "28.0","price_index" => "0.13714285714285712","country" => "Italy","url" => "https://www.lcbo.com/en/luxardo-amaretto-di-saschira-215988"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Prince Igor Vodka (PET)","brand" => "Prince Igor Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "Canada","url" => "https://www.lcbo.com/en/prince-igor-vodka-pet-12476"
            ]);
            DB::table('alcohols')->insert([
            "title" => "St Remy Sauternes Cask","brand" => "St Remy Brandy","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "45.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.15066666666666667","country" => "France","url" => "https://www.lcbo.com/en/st-remy-sauternes-cask-21580"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Silent Sam Vodka","brand" => "Silent Sam","category" => "Spirits","subcategory" => "Vodka","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/silent-sam-vodka-5132"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Prince Igor Extreme Vodka (PET)","brand" => "Prince Igor Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "65.6","volume" => "1750","alcohol_content" => "45.0","price_index" => "0.0833015873015873","country" => "Canada","url" => "https://www.lcbo.com/en/prince-igor-extreme-vodka-pet-363507"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Havana Club Original 3 Year Old","brand" => "Havana Club","category" => "Spirits","subcategory" => "Rum","price" => "44.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09703947368421052","country" => "Cuba","url" => "https://www.lcbo.com/en/havana-club-original-3-year-old-400671"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grace Bay Rum Cask Canadian Whisky","brand" => "Grace Bay","category" => "Spirits","subcategory" => "Whisky","price" => "49.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1665","country" => "Canada","url" => "https://www.lcbo.com/en/grace-bay-rum-cask-canadian-whisky-23989"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Virginia Black","brand" => "Virginia Black","category" => "Spirits","subcategory" => "Whisky","price" => "49.25","volume" => "750","alcohol_content" => "40.0","price_index" => "0.16416666666666666","country" => "United States","url" => "https://www.lcbo.com/en/virginia-black-468843"
            ]);
            DB::table('alcohols')->insert([
            "title" => "HIP Vodka Mango","brand" => "Hip","category" => "Spirits","subcategory" => "Vodka","price" => "33.0","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11","country" => "Canada","url" => "https://www.lcbo.com/en/hip-vodka-mango-23117"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crown Royal Black","brand" => "Crown Royal","category" => "Spirits","subcategory" => "Whisky","price" => "35.95","volume" => "750","alcohol_content" => "45.0","price_index" => "0.10651851851851853","country" => "Canada","url" => "https://www.lcbo.com/en/crown-royal-black-224352"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cortel Napoleon VSOP Brandy","brand" => "Cortel","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "29.7","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09899999999999999","country" => "France","url" => "https://www.lcbo.com/en/cortel-napoleon-vsop-brandy-287409"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crystal Head Vodka","brand" => "Crystal Head","category" => "Spirits","subcategory" => "Vodka","price" => "61.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.20650000000000002","country" => "Canada","url" => "https://www.lcbo.com/en/crystal-head-vodka-267302"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gooderham & Worts Canadian Whisky","brand" => "Gooderham & Worts","category" => "Spirits","subcategory" => "Whisky","price" => "39.95","volume" => "750","alcohol_content" => "44.4","price_index" => "0.11996996996996998","country" => "Canada","url" => "https://www.lcbo.com/en/gooderham-worts-canadian-whisky-428417"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smirnoff Vodka (PET)","brand" => "Smirnoff","category" => "Spirits","subcategory" => "Vodka","price" => "9.1","volume" => "200","alcohol_content" => "40.1","price_index" => "0.11346633416458853","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-vodka-pet-271965"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ciroc Peach Spirit Drink","brand" => "Ciroc","category" => "Spirits","subcategory" => "Vodka","price" => "50.95","volume" => "750","alcohol_content" => "35.0","price_index" => "0.1940952380952381","country" => "France","url" => "https://www.lcbo.com/en/ciroc-peach-spirit-drink-334110"
            ]);
            DB::table('alcohols')->insert([
            "title" => "New Amsterdam Pink Whitney Vodka","brand" => "New Amsterdam","category" => "Spirits","subcategory" => "Vodka","price" => "29.95","volume" => "750","alcohol_content" => "30.0","price_index" => "0.1331111111111111","country" => "United States","url" => "https://www.lcbo.com/en/new-amsterdam-pink-whitney-vodka-15009"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Otonabee River Spirits Triple Distilled Vodka","brand" => "Otonabee River Spirits","category" => "Spirits","subcategory" => "Vodka","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/otonabee-river-spirits-triple-distilled-vodka-518373"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Canadian Club Whisky (PET)","brand" => "Canadian Club","category" => "Spirits","subcategory" => "Whisky","price" => "9.15","volume" => "200","alcohol_content" => "40.0","price_index" => "0.114375","country" => "Canada","url" => "https://www.lcbo.com/en/canadian-club-whisky-pet-251371"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tsipouro Makedonias Arhontiko","brand" => "Makedonias Arhontiko","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "27.95","volume" => "700","alcohol_content" => "40.0","price_index" => "0.09982142857142857","country" => "Greece","url" => "https://www.lcbo.com/en/tsipouro-makedonias-arhontiko-27138"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Casamigos Mezcal","brand" => "Casamigos","category" => "Spirits","subcategory" => "Tequila","price" => "100.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.334","country" => "Mexico","url" => "https://www.lcbo.com/en/casamigos-mezcal-609362"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wolfhead Distillery Grapefruit Vodka","brand" => "Wolfhead","category" => "Spirits","subcategory" => "Vodka","price" => "33.3","volume" => "750","alcohol_content" => "35.0","price_index" => "0.12685714285714284","country" => "Canada","url" => "https://www.lcbo.com/en/wolfhead-distillery-grapefruit-vodka-639047"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wiser's Special Blend Whisky (PET)","brand" => "J.P. Wiser's","category" => "Spirits","subcategory" => "Whisky","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/wiser-s-special-blend-whisky-pet-517904"
            ]);
            DB::table('alcohols')->insert([
            "title" => "360 Double Chocolate Vodka","brand" => "360 Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "17.0","volume" => "375","alcohol_content" => "35.0","price_index" => "0.1295238095238095","country" => "United States","url" => "https://www.lcbo.com/en/360-double-chocolate-vodka-396671"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Luxardo Limoncello","brand" => "Luxardo","category" => "Spirits","subcategory" => "Liqueur","price" => "24.2","volume" => "750","alcohol_content" => "27.0","price_index" => "0.11950617283950617","country" => "Italy","url" => "https://www.lcbo.com/en/luxardo-limoncello-15963"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jack Daniel's Single Barrel Whiskey","brand" => "Jack Daniel's","category" => "Spirits","subcategory" => "Whisky","price" => "60.25","volume" => "750","alcohol_content" => "47.0","price_index" => "0.17092198581560283","country" => "United States","url" => "https://www.lcbo.com/en/jack-daniel-s-single-barrel-whiskey-480616"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gentleman Jack Tennessee Whiskey","brand" => "Jack Daniel's","category" => "Spirits","subcategory" => "Whisky","price" => "42.7","volume" => "750","alcohol_content" => "40.0","price_index" => "0.14233333333333334","country" => "United States","url" => "https://www.lcbo.com/en/gentleman-jack-tennessee-whiskey-377994"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Baileys Deliciously Light","brand" => "Baileys","category" => "Spirits","subcategory" => "Liqueur","price" => "30.55","volume" => "750","alcohol_content" => "16.1","price_index" => "0.25300207039337475","country" => "Ireland","url" => "https://www.lcbo.com/en/baileys-deliciously-light-19419"
            ]);
            DB::table('alcohols')->insert([
            "title" => "1792 Small Batch Kentucky Straight Bourbon","brand" => "Barton 1792","category" => "Spirits","subcategory" => "Whisky","price" => "50.3","volume" => "750","alcohol_content" => "46.85","price_index" => "0.1431519032372821","country" => "United States","url" => "https://www.lcbo.com/en/1792-small-batch-kentucky-straight-bourbon-208918"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Appleton Estate 8 Year Old Reserve","brand" => "Appleton Estate","category" => "Spirits","subcategory" => "Rum","price" => "39.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.12387596899224806","country" => "Canada","url" => "https://www.lcbo.com/en/appleton-estate-8-year-old-reserve-14354"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Macieira Royal Spirit","brand" => "Macieira","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "32.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10916666666666666","country" => "Portugal","url" => "https://www.lcbo.com/en/macieira-royal-spirit-482901"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lind & Lime Gin","brand" => "Lind & Lime","category" => "Spirits","subcategory" => "Gin","price" => "56.95","volume" => "750","alcohol_content" => "44.0","price_index" => "0.17257575757575758","country" => "United Kingdom","url" => "https://www.lcbo.com/en/lind-lime-gin-19963"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bearface 7 Year Old Triple Oak Canadian Whisky","brand" => "Bearface","category" => "Spirits","subcategory" => "Whisky","price" => "40.0","volume" => "750","alcohol_content" => "42.5","price_index" => "0.12549019607843137","country" => "Canada","url" => "https://www.lcbo.com/en/bearface-7-year-old-triple-oak-canadian-whisky-573402"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Canadian Club Classic 12 Year Old","brand" => "Canadian Club","category" => "Spirits","subcategory" => "Whisky","price" => "46.75","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.1025219298245614","country" => "Canada","url" => "https://www.lcbo.com/en/canadian-club-classic-12-year-old-311936"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Oban 14 Year Old Single Malt Scotch Whisky","brand" => "Oban","category" => "Spirits","subcategory" => "Whisky","price" => "150.2","volume" => "750","alcohol_content" => "43.01","price_index" => "0.4656281484925986","country" => "United Kingdom","url" => "https://www.lcbo.com/en/oban-14-year-old-single-malt-scotch-whisky-243824"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Alberta Premium Whisky (PET)","brand" => "Alberta Premium","category" => "Spirits","subcategory" => "Whisky","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/alberta-premium-whisky-pet-517136"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Coconut Rum","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "30.2","volume" => "750","alcohol_content" => "35.0","price_index" => "0.11504761904761905","country" => "United States","url" => "https://www.lcbo.com/en/bacardi-coconut-rum-446021"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wayne Gretzky Estates Canadian Maple Cream","brand" => "Wayne Gretzky","category" => "Spirits","subcategory" => "Liqueur","price" => "35.95","volume" => "750","alcohol_content" => "17.0","price_index" => "0.28196078431372545","country" => "Canada","url" => "https://www.lcbo.com/en/wayne-gretzky-estates-canadian-maple-cream-21825"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mount Gay Eclipse Rum","brand" => "Mount Gay","category" => "Spirits","subcategory" => "Rum","price" => "36.4","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12133333333333333","country" => "Barbados","url" => "https://www.lcbo.com/en/mount-gay-eclipse-rum-369793"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tomatin 18 Year Old Highland Single Malt Scotch Whisky","brand" => "Tomatin","category" => "Spirits","subcategory" => "Whisky","price" => "177.1","volume" => "750","alcohol_content" => "46.0","price_index" => "0.5133333333333333","country" => "United Kingdom","url" => "https://www.lcbo.com/en/tomatin-18-year-old-highland-single-malt-scotch-whisky-435859"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Select Aperitivo","brand" => "Montenegro Aperitivo","category" => "Spirits","subcategory" => "Liqueur","price" => "29.05","volume" => "750","alcohol_content" => "17.5","price_index" => "0.22133333333333333","country" => "Italy","url" => "https://www.lcbo.com/en/select-aperitivo-21692"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grant's Triple Wood Blended Scotch Whisky","brand" => "Grant's","category" => "Spirits","subcategory" => "Whisky","price" => "33.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11066666666666668","country" => "United Kingdom","url" => "https://www.lcbo.com/en/grant-s-triple-wood-blended-scotch-whisky-31112"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crown Royal Black Whisky","brand" => "Crown Royal","category" => "Spirits","subcategory" => "Whisky","price" => "46.95","volume" => "1140","alcohol_content" => "45.0","price_index" => "0.09152046783625732","country" => "Canada","url" => "https://www.lcbo.com/en/crown-royal-black-whisky-276618"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grant's Triple Wood Blended Scotch Whisky","brand" => "Grant's","category" => "Spirits","subcategory" => "Whisky","price" => "10.45","volume" => "200","alcohol_content" => "40.0","price_index" => "0.130625","country" => "United Kingdom","url" => "https://www.lcbo.com/en/grant-s-triple-wood-blended-scotch-whisky-476382"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Gold","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "44.45","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09747807017543861","country" => "Canada","url" => "https://www.lcbo.com/en/bacardi-gold-13587"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Collective Arts Lavender & Juniper Gin","brand" => "Collective Arts","category" => "Spirits","subcategory" => "Gin","price" => "48.95","volume" => "750","alcohol_content" => "43.5","price_index" => "0.15003831417624522","country" => "Canada","url" => "https://www.lcbo.com/en/collective-arts-lavender-juniper-gin-22091"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Belvedere Midnight Sabre 1750 Ml","brand" => "Belvedere Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "115.15","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.1645","country" => "Poland","url" => "https://www.lcbo.com/en/belvedere-midnight-sabre-1750-ml-573873"
            ]);
            DB::table('alcohols')->insert([
            "title" => "D'Uss� VSOP Cognac","brand" => "D'Uss�","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "99.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.33316666666666667","country" => "France","url" => "https://www.lcbo.com/en/d-uss-c-vsop-cognac-410803"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wayne Gretzky Ninety-Nine Proof Whisky","brand" => "Wayne Gretzky","category" => "Spirits","subcategory" => "Whisky","price" => "99.0","volume" => "750","alcohol_content" => "49.5","price_index" => "0.26666666666666666","country" => "Canada","url" => "https://www.lcbo.com/en/wayne-gretzky-ninety-nine-proof-whisky-570101"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jinro Chamisul Fresh","brand" => "Jinro","category" => "Spirits","subcategory" => "Soju","price" => "10.05","volume" => "360","alcohol_content" => "17.0","price_index" => "0.1642156862745098","country" => "South Korea","url" => "https://www.lcbo.com/en/jinro-chamisul-fresh-13612"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ballantine's Blended Scotch Whisky","brand" => "Ballantine's","category" => "Spirits","subcategory" => "Whisky","price" => "16.4","volume" => "375","alcohol_content" => "40.0","price_index" => "0.10933333333333332","country" => "United Kingdom","url" => "https://www.lcbo.com/en/ballantine-s-blended-scotch-whisky-5041"
            ]);
            DB::table('alcohols')->insert([
            "title" => "St Remy VSOP Brandy","brand" => "St-Remy","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "46.45","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.10186403508771931","country" => "France","url" => "https://www.lcbo.com/en/st-remy-vsop-brandy-605816"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Pimm's No. 1 Cup","brand" => "Pimm'S No. 1 Cup","category" => "Spirits","subcategory" => "Liqueur","price" => "29.95","volume" => "750","alcohol_content" => "25.0","price_index" => "0.15973333333333334","country" => "United Kingdom","url" => "https://www.lcbo.com/en/pimm-s-no-1-cup-282277"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Absolut Watermelon","brand" => "Absolut","category" => "Spirits","subcategory" => "Vodka","price" => "30.45","volume" => "750","alcohol_content" => "38.0","price_index" => "0.10684210526315789","country" => "Sweden","url" => "https://www.lcbo.com/en/absolut-watermelon-19515"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Metaxa Five Star Brandy","brand" => "Metaxa","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "31.2","volume" => "750","alcohol_content" => "38.0","price_index" => "0.1094736842105263","country" => "Greece","url" => "https://www.lcbo.com/en/metaxa-five-star-brandy-376749"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Meaghers Triple Sec","brand" => "Meaghers","category" => "Spirits","subcategory" => "Liqueur","price" => "26.5","volume" => "750","alcohol_content" => "35.0","price_index" => "0.10095238095238095","country" => "Canada","url" => "https://www.lcbo.com/en/meaghers-triple-sec-5215"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Casamigos Blanco Tequila 375ml","brand" => "Casamigos","category" => "Spirits","subcategory" => "Tequila","price" => "43.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.28733333333333333","country" => "Mexico","url" => "https://www.lcbo.com/en/casamigos-blanco-tequila-375ml-19013"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Huadu Beijing Er Guo Tou","brand" => "Huadu Beijing","category" => "Spirits","subcategory" => "Liqueur","price" => "35.95","volume" => "750","alcohol_content" => "53.0","price_index" => "0.09044025157232705","country" => "China","url" => "https://www.lcbo.com/en/huadu-beijing-er-gou-tou-26408"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sauza Gold Tequila (PET)","brand" => "Sauza","category" => "Spirits","subcategory" => "Tequila","price" => "10.95","volume" => "200","alcohol_content" => "40.0","price_index" => "0.136875","country" => "Mexico","url" => "https://www.lcbo.com/en/sauza-gold-tequila-pet-262253"
            ]);
            DB::table('alcohols')->insert([
            "title" => "White Owl Whisky","brand" => "White Owl","category" => "Spirits","subcategory" => "Whisky","price" => "39.95","volume" => "750","alcohol_content" => "39.6","price_index" => "0.13451178451178453","country" => "Canada","url" => "https://www.lcbo.com/en/white-owl-whisky-194878"
            ]);
            DB::table('alcohols')->insert([
            "title" => "El Tesoro Anejo","brand" => "El Tesoro","category" => "Spirits","subcategory" => "Tequila","price" => "94.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.3165","country" => "Mexico","url" => "https://www.lcbo.com/en/el-tesoro-anejo-16545"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Alpenbitter No. 7","brand" => "Alpenbitter","category" => "Spirits","subcategory" => "Liqueur","price" => "4.95","volume" => "100","alcohol_content" => "40.0","price_index" => "0.12375","country" => "Canada","url" => "https://www.lcbo.com/en/alpenbitter-no-7-212688"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Captain Morgan Pineapple Flavoured Rum Liquor","brand" => "Captain Morgan","category" => "Spirits","subcategory" => "Rum","price" => "29.95","volume" => "750","alcohol_content" => "35.0","price_index" => "0.1140952380952381","country" => "Canada","url" => "https://www.lcbo.com/en/captain-morgan-pineapple-flavoured-rum-liquor-454900"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bushmills Malt 10 Year Old Irish Whiskey","brand" => "Bushmills","category" => "Spirits","subcategory" => "Whisky","price" => "52.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.17400000000000002","country" => "Ireland","url" => "https://www.lcbo.com/en/bushmills-malt-10-year-old-irish-whiskey-131870"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tanqueray London Dry Gin","brand" => "Tanqueray","category" => "Spirits","subcategory" => "Gin","price" => "44.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09703947368421052","country" => "United Kingdom","url" => "https://www.lcbo.com/en/tanqueray-dry-gin-216721"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tawse Gin","brand" => "Tawse","category" => "Spirits","subcategory" => "Gin","price" => "34.95","volume" => "750","alcohol_content" => "40.18","price_index" => "0.1159780985564958","country" => "Canada","url" => "https://www.lcbo.com/en/tawse-gin-14023"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Alpenbitter No. 7","brand" => "Alpenbitter","category" => "Spirits","subcategory" => "Liqueur","price" => "24.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.08316666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/alpenbitter-no-7-213900"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Havana Club 7 Year Old Rum","brand" => "Havana Club","category" => "Spirits","subcategory" => "Rum","price" => "36.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12316666666666667","country" => "Cuba","url" => "https://www.lcbo.com/en/havana-club-7-year-old-rum-53140"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Teremana Blanco Tequila","brand" => "Teremana","category" => "Spirits","subcategory" => "Tequila","price" => "50.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.16733333333333333","country" => "Mexico","url" => "https://www.lcbo.com/en/teremana-blanco-tequila-19749"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Persian Empire Coconut Rum","brand" => "Persian Empire","category" => "Spirits","subcategory" => "Rum","price" => "23.0","volume" => "750","alcohol_content" => "20.0","price_index" => "0.15333333333333332","country" => "Canada","url" => "https://www.lcbo.com/en/persian-empire-coconut-rum-520742"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Walker's Special Old Whisky (PET)","brand" => "Hiram Walker","category" => "Spirits","subcategory" => "Whisky","price" => "16.25","volume" => "375","alcohol_content" => "40.0","price_index" => "0.10833333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/walker-s-special-old-whisky-pet-687"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bombay Bramble","brand" => "Bombay Sapphire","category" => "Spirits","subcategory" => "Gin","price" => "32.25","volume" => "750","alcohol_content" => "43.0","price_index" => "0.1","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bombay-bramble-19388"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ungava Gin","brand" => "Ungava","category" => "Spirits","subcategory" => "Gin","price" => "37.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.11767441860465117","country" => "Canada","url" => "https://www.lcbo.com/en/ungava-gin-374231"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sour Puss Apple Liquor","brand" => "Sour Puss","category" => "Spirits","subcategory" => "Liqueur","price" => "21.95","volume" => "750","alcohol_content" => "15.0","price_index" => "0.1951111111111111","country" => "United States","url" => "https://www.lcbo.com/en/sour-puss-apple-liquor-518688"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Licor Beir�o","brand" => "Licor Beir�o","category" => "Spirits","subcategory" => "Liqueur","price" => "28.55","volume" => "700","alcohol_content" => "22.0","price_index" => "0.18538961038961038","country" => "Portugal","url" => "https://www.lcbo.com/en/licor-beir-o-259366"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Goslings Bermuda Black Seal Rum","brand" => "Gosling's","category" => "Spirits","subcategory" => "Rum","price" => "31.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1065","country" => "Canada","url" => "https://www.lcbo.com/en/goslings-bermuda-black-seal-rum-633271"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Brandy Mel Honey Liqueur","brand" => "NULL","category" => "Spirits","subcategory" => "Liqueur","price" => "30.3","volume" => "700","alcohol_content" => "27.0","price_index" => "0.16031746031746033","country" => "Portugal","url" => "https://www.lcbo.com/en/brandy-mel-liqueur-of-honey-27082"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Royal Reserve Whisky (PET)","brand" => "Royal Reserve","category" => "Spirits","subcategory" => "Whisky","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "Canada","url" => "https://www.lcbo.com/en/royal-reserve-whisky-pet-992"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Alberta Premium Whisky","brand" => "Alberta Premium","category" => "Spirits","subcategory" => "Whisky","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "Canada","url" => "https://www.lcbo.com/en/alberta-premium-whisky-216226"
            ]);
            DB::table('alcohols')->insert([
            "title" => "St-Germain Elderflower Liqueur","brand" => "St-Germain","category" => "Spirits","subcategory" => "Liqueur","price" => "14.95","volume" => "200","alcohol_content" => "20.0","price_index" => "0.37374999999999997","country" => "France","url" => "https://www.lcbo.com/en/st-germain-elderflower-liqueur-515205"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cenote Tequila Anejo","brand" => "Cenote","category" => "Spirits","subcategory" => "Tequila","price" => "100.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.334","country" => "Mexico","url" => "https://www.lcbo.com/en/cenote-tequila-anejo-549220"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Chum Churum Citron","brand" => "Chum Churum","category" => "Spirits","subcategory" => "Soju","price" => "10.05","volume" => "360","alcohol_content" => "12.0","price_index" => "0.23263888888888892","country" => "South Korea","url" => "https://www.lcbo.com/en/chum-churum-citron-12562"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Captain Morgan Dark Rum","brand" => "Captain Morgan","category" => "Spirits","subcategory" => "Rum","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "NULL","url" => "https://www.lcbo.com/en/captain-morgan-dark-rum-217554"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Absolut Raspberri Vodka","brand" => "ABSOLUT","category" => "Spirits","subcategory" => "Vodka","price" => "30.45","volume" => "750","alcohol_content" => "38.0","price_index" => "0.10684210526315789","country" => "Sweden","url" => "https://www.lcbo.com/en/absolut-raspberry-vodka-22013"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lamb's White Rum","brand" => "Lamb's","category" => "Spirits","subcategory" => "Rum","price" => "28.75","volume" => "750","alcohol_content" => "39.9","price_index" => "0.0960735171261487","country" => "Canada","url" => "https://www.lcbo.com/en/lamb-s-white-rum-5009"
            ]);
            DB::table('alcohols')->insert([
            "title" => "H2 Craft Fire & Spice Cinnamon Whisky","brand" => "H2 Craft","category" => "Spirits","subcategory" => "Whisky","price" => "23.95","volume" => "750","alcohol_content" => "30.0","price_index" => "0.10644444444444444","country" => "Canada","url" => "https://www.lcbo.com/en/h2-craft-fire-spice-cinnamon-whisky-26504"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lot No. 40 Single Copper Pot Still Canadian Whisky","brand" => "Lot No. 40","category" => "Spirits","subcategory" => "Whisky","price" => "41.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.13007751937984496","country" => "Canada","url" => "https://www.lcbo.com/en/lot-no-40-single-copper-pot-still-canadian-whisky-382861"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Balvenie Caribbean Cask 14 Year Old Scotch Whisky","brand" => "The Balvenie","category" => "Spirits","subcategory" => "Whisky","price" => "170.25","volume" => "750","alcohol_content" => "43.0","price_index" => "0.5279069767441861","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-balvenie-caribbean-cask-14-year-old-scotch-whisky-221200"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Superior White Rum (PET)","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "Puerto Rico","url" => "https://www.lcbo.com/en/bacardi-superior-white-rum-pet-112979"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gran Centenario Anejo","brand" => "Gran Centenario","category" => "Spirits","subcategory" => "Tequila","price" => "51.7","volume" => "750","alcohol_content" => "40.0","price_index" => "0.17233333333333334","country" => "Mexico","url" => "https://www.lcbo.com/en/gran-centenario-anejo-10912"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Nutrl Vodka","brand" => "Nutrl","category" => "Spirits","subcategory" => "Vodka","price" => "34.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1165","country" => "Canada","url" => "https://www.lcbo.com/en/nutrl-vodka-486241"
            ]);
            DB::table('alcohols')->insert([
            "title" => "McGuinness Peach Schnapps","brand" => "McGuinness","category" => "Spirits","subcategory" => "Liqueur","price" => "19.95","volume" => "750","alcohol_content" => "15.0","price_index" => "0.17733333333333332","country" => "Canada","url" => "https://www.lcbo.com/en/mcguinness-peach-schnapps-321562"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Flor de Ca�a Centenario 12 Year Rum","brand" => "Flor de Ca�a","category" => "Spirits","subcategory" => "Rum","price" => "46.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.154","country" => "Nicaragua","url" => "https://www.lcbo.com/en/flor-de-ca-a-centenario-12-year-rum-158014"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kraken Black Roast Rum","brand" => "Kraken","category" => "Spirits","subcategory" => "Rum","price" => "33.35","volume" => "750","alcohol_content" => "33.3","price_index" => "0.13353353353353356","country" => "Trinidad & Tobago","url" => "https://www.lcbo.com/en/kraken-black-roast-rum-15281"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jura 12 Year Old Single Malt","brand" => "Jura","category" => "Spirits","subcategory" => "Whisky","price" => "74.45","volume" => "750","alcohol_content" => "40.0","price_index" => "0.24816666666666667","country" => "United Kingdom","url" => "https://www.lcbo.com/en/jura-12-year-old-single-malt-38927"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Havana Club Original 3 Year Old","brand" => "Havana Club","category" => "Spirits","subcategory" => "Rum","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "Cuba","url" => "https://www.lcbo.com/en/havana-club-original-3-year-old-337667"
            ]);
            DB::table('alcohols')->insert([
            "title" => "J.P. Wiser's Triple Barrel Rye Whisky","brand" => "J.P. Wiser's","category" => "Spirits","subcategory" => "Whisky","price" => "32.95","volume" => "750","alcohol_content" => "43.4","price_index" => "0.10122887864823349","country" => "Canada","url" => "https://www.lcbo.com/en/j-p-wiser-s-triple-barrel-rye-whisky-536870"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Flor de Ca�a 5 Year Rum A�ejo Cl�sico","brand" => "Flor de Ca�a","category" => "Spirits","subcategory" => "Rum","price" => "44.35","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09725877192982456","country" => "Nicaragua","url" => "https://www.lcbo.com/en/flor-de-ca-a-5-year-rum-a-ejo-cl-sico-545343"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lamb's Classic White Rum (PET)","brand" => "Lamb's","category" => "Spirits","subcategory" => "Rum","price" => "64.6","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09228571428571428","country" => "Canada","url" => "https://www.lcbo.com/en/lamb-s-classic-white-rum-pet-87015"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Red Admiral Vodka","brand" => "Nb Distillers","category" => "Spirits","subcategory" => "Vodka","price" => "29.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09916666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/red-admiral-vodka-20187"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Spicebox Canadian Spiced Whisky","brand" => "Spicebox","category" => "Spirits","subcategory" => "Whisky","price" => "30.15","volume" => "750","alcohol_content" => "34.8","price_index" => "0.11551724137931034","country" => "Canada","url" => "https://www.lcbo.com/en/spicebox-canadian-spiced-whisky-258954"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Writer's Tears Copper Pot Irish Whiskey","brand" => "Writer's Tears","category" => "Spirits","subcategory" => "Whisky","price" => "54.95","volume" => "700","alcohol_content" => "40.0","price_index" => "0.19625","country" => "Ireland","url" => "https://www.lcbo.com/en/writer-s-tears-copper-pot-irish-whiskey-13057"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grand Marnier Cordon Rouge","brand" => "Grand Marnier","category" => "Spirits","subcategory" => "Liqueur","price" => "72.45","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.15888157894736843","country" => "France","url" => "https://www.lcbo.com/en/grand-marnier-cordon-rouge-605600"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Forty Creek Copper Pot Reserve Whisky","brand" => "Forty Creek","category" => "Spirits","subcategory" => "Whisky","price" => "33.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.10527131782945737","country" => "Canada","url" => "https://www.lcbo.com/en/forty-creek-copper-pot-reserve-whisky-285254"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tia Maria Matcha Cream Liqueur","brand" => "Tia Maria","category" => "Spirits","subcategory" => "Liqueur","price" => "30.95","volume" => "750","alcohol_content" => "17.0","price_index" => "0.24274509803921565","country" => "Netherlands","url" => "https://www.lcbo.com/en/tia-maria-matcha-cream-liqueur-21555"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Alberta Pure Vodka (PET)","brand" => "Alberta Pure","category" => "Spirits","subcategory" => "Vodka","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "Canada","url" => "https://www.lcbo.com/en/alberta-pure-vodka-pet-242339"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mcguinness Blue Curacao","brand" => "McGuinness","category" => "Spirits","subcategory" => "Liqueur","price" => "10.45","volume" => "375","alcohol_content" => "15.0","price_index" => "0.18577777777777776","country" => "Canada","url" => "https://www.lcbo.com/en/mcguinness-blue-curacao-498998"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wild Turkey 81 Proof Kentucky Straight Bourbon","brand" => "Wild Turkey","category" => "Spirits","subcategory" => "Whisky","price" => "35.25","volume" => "750","alcohol_content" => "40.5","price_index" => "0.11604938271604938","country" => "United States","url" => "https://www.lcbo.com/en/wild-turkey-81-proof-kentucky-straight-bourbon-281824"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Alize Gold Passion Liquor","brand" => "Alize","category" => "Spirits","subcategory" => "Liqueur","price" => "28.15","volume" => "750","alcohol_content" => "14.9","price_index" => "0.2519015659955257","country" => "France","url" => "https://www.lcbo.com/en/alize-gold-passion-liquor-338079"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Herradura Reposado Tequila","brand" => "Herradura","category" => "Spirits","subcategory" => "Tequila","price" => "75.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.25066666666666665","country" => "Mexico","url" => "https://www.lcbo.com/en/herradura-reposado-tequila-452615"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bowmore 15 Year Old Single Malt Scotch Whisky","brand" => "Bowmore","category" => "Spirits","subcategory" => "Whisky","price" => "109.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.34093023255813953","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bowmore-15-year-old-single-malt-scotch-whisky-503649"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Baileys Original Irish Cream","brand" => "Baileys","category" => "Spirits","subcategory" => "Liqueur","price" => "65.2","volume" => "1750","alcohol_content" => "17.0","price_index" => "0.21915966386554622","country" => "Ireland","url" => "https://www.lcbo.com/en/baileys-original-irish-cream-193490"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ciroc Vodka duo + FREE beach towel","brand" => "Ciroc","category" => "Spirits","subcategory" => "Vodka","price" => "101.9","volume" => "1500","alcohol_content" => "40.0","price_index" => "0.16983333333333334","country" => "France","url" => "https://www.lcbo.com/en/ciroc-vodka-duo-free-beach-towel-27633"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Broker's Premium London Dry Gin","brand" => "Broker's","category" => "Spirits","subcategory" => "Gin","price" => "44.05","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09660087719298245","country" => "United Kingdom","url" => "https://www.lcbo.com/en/broker-s-premium-london-dry-gin-494047"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Dalmore 12 Year Old Highland Single Malt Scotch Whisky","brand" => "The Dalmore","category" => "Spirits","subcategory" => "Whisky","price" => "110.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.36733333333333335","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-dalmore-12-year-old-highland-single-malt-scotch-whisky-38901"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Iceberg Vodka (PET)","brand" => "Iceberg","category" => "Spirits","subcategory" => "Vodka","price" => "29.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09916666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/iceberg-vodka-pet-446567"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sortil�ge Maple Cream","brand" => "Sortil�ge","category" => "Spirits","subcategory" => "Liqueur","price" => "29.95","volume" => "750","alcohol_content" => "17.0","price_index" => "0.2349019607843137","country" => "Canada","url" => "https://www.lcbo.com/en/sortil-rge-maple-cream-352021"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Alberta Pure Vodka (PET)","brand" => "Alberta Pure","category" => "Spirits","subcategory" => "Vodka","price" => "64.6","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09228571428571428","country" => "Canada","url" => "https://www.lcbo.com/en/alberta-pure-vodka-pet-53082"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenfarclas12-Year-Old Highland Single Malt Scotch Whisky","brand" => "Glenfarclas","category" => "Spirits","subcategory" => "Whisky","price" => "71.0","volume" => "700","alcohol_content" => "43.0","price_index" => "0.23588039867109634","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenfarclas12-year-old-highland-single-malt-scotch-whisky-464636"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sortil�ge","brand" => "Sortil�ge","category" => "Spirits","subcategory" => "Whisky","price" => "34.95","volume" => "750","alcohol_content" => "30.0","price_index" => "0.15533333333333335","country" => "Canada","url" => "https://www.lcbo.com/en/sortil-rge-250134"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Copperhead Ironcat Almaguin Moonshine","brand" => "Copperhead","category" => "Spirits","subcategory" => "Whisky","price" => "33.35","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11116666666666668","country" => "Canada","url" => "https://www.lcbo.com/en/copperhead-ironcat-almaguin-moonshine-512962"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Monkey Shoulder Blended Malt Scotch Whisky","brand" => "Monkey Shoulder","category" => "Spirits","subcategory" => "Whisky","price" => "53.25","volume" => "750","alcohol_content" => "43.0","price_index" => "0.16511627906976745","country" => "United Kingdom","url" => "https://www.lcbo.com/en/monkey-shoulder-blended-malt-scotch-whisky-414334"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grey Goose Vodka","brand" => "Grey Goose","category" => "Spirits","subcategory" => "Vodka","price" => "17.45","volume" => "200","alcohol_content" => "40.0","price_index" => "0.21812499999999999","country" => "France","url" => "https://www.lcbo.com/en/grey-goose-vodka-272708"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bombay Sapphire London Dry Gin","brand" => "Bombay Sapphire","category" => "Spirits","subcategory" => "Gin","price" => "66.55","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09507142857142857","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bombay-sapphire-london-dry-gin-582973"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Polar Ice Arctic Extreme Vodka (PET)","brand" => "Polar Ice Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "29.75","volume" => "750","alcohol_content" => "45.0","price_index" => "0.08814814814814814","country" => "Canada","url" => "https://www.lcbo.com/en/polar-ice-arctic-extreme-vodka-pet-16643"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Absolut Raspberri Vodka","brand" => "Absolut","category" => "Spirits","subcategory" => "Vodka","price" => "16.95","volume" => "375","alcohol_content" => "40.0","price_index" => "0.11299999999999999","country" => "Sweden","url" => "https://www.lcbo.com/en/absolut-raspberri-vodka-242347"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Maker's Mark Kentucky Bourbon","brand" => "Maker's Mark","category" => "Spirits","subcategory" => "Whisky","price" => "61.95","volume" => "1140","alcohol_content" => "45.0","price_index" => "0.12076023391812866","country" => "United States","url" => "https://www.lcbo.com/en/maker-s-mark-kentucky-bourbon-16580"
            ]);
            DB::table('alcohols')->insert([
            "title" => "St Remy VSOP Brandy","brand" => "St-Remy","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "11.05","volume" => "200","alcohol_content" => "40.0","price_index" => "0.138125","country" => "France","url" => "https://www.lcbo.com/en/st-remy-vsop-brandy-298729"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Superior White Rum","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "Puerto Rico","url" => "https://www.lcbo.com/en/bacardi-superior-white-rum-117"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Macallan Sherry Oak 12-Year-Old","brand" => "The Macallan","category" => "Spirits","subcategory" => "Whisky","price" => "159.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.49596899224806196","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-macallan-sherry-oak-12-year-old-15516"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Top Shelf Vodka","brand" => "Top Shelf","category" => "Spirits","subcategory" => "Vodka","price" => "32.45","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10816666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/top-shelf-vodka-545194"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Top Shelf Gin","brand" => "Top Shelf","category" => "Spirits","subcategory" => "Gin","price" => "34.45","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11483333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/top-shelf-gin-542910"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kilchoman Machir Bay Islay Single Malt Scotch Whisky","brand" => "Kilchoman","category" => "Spirits","subcategory" => "Whisky","price" => "90.25","volume" => "700","alcohol_content" => "46.0","price_index" => "0.2802795031055901","country" => "United Kingdom","url" => "https://www.lcbo.com/en/kilchoman-machir-bay-islay-single-malt-scotch-whisky-346338"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grand Marnier Cordon Rouge","brand" => "Grand Marnier","category" => "Spirits","subcategory" => "Liqueur","price" => "28.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.18733333333333335","country" => "France","url" => "https://www.lcbo.com/en/grand-marnier-cordon-rouge-12195"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tequila Tromba Blanco","brand" => "Tromba","category" => "Spirits","subcategory" => "Tequila","price" => "50.2","volume" => "750","alcohol_content" => "36.0","price_index" => "0.18592592592592594","country" => "Mexico","url" => "https://www.lcbo.com/en/tequila-tromba-blanco-271643"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Absolut Vodka","brand" => "Absolut","category" => "Spirits","subcategory" => "Vodka","price" => "3.8","volume" => "50","alcohol_content" => "40.0","price_index" => "0.19","country" => "Sweden","url" => "https://www.lcbo.com/en/absolut-vodka-209239"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dujardin VSOP Brandy","brand" => "Dujardin","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "44.35","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09725877192982456","country" => "Germany","url" => "https://www.lcbo.com/en/dujardin-vsop-brandy-211326"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crystal Head Pride Edition","brand" => "Crystal Head","category" => "Spirits","subcategory" => "Vodka","price" => "124.95","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.1785","country" => "Canada","url" => "https://www.lcbo.com/en/crystal-head-pride-edition-21167"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Distilleria Amalfi & Co. Aperitivo Liqueur","brand" => "Distilleria Amalfi & Co.","category" => "Spirits","subcategory" => "Liqueur","price" => "28.5","volume" => "750","alcohol_content" => "15.0","price_index" => "0.25333333333333335","country" => "Canada","url" => "https://www.lcbo.com/en/distilleria-amalfi-co-aperitivo-liqueur-19417"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Kraken Black Spiced Rum","brand" => "The Kraken","category" => "Spirits","subcategory" => "Rum","price" => "47.35","volume" => "1140","alcohol_content" => "47.0","price_index" => "0.0883725270623367","country" => "Trinidad & Tobago","url" => "https://www.lcbo.com/en/the-kraken-black-spiced-rum-318683"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Liquormen's Dirty Ol Canadian Whisky, Trailer Park Boys","brand" => "Liquormen's","category" => "Spirits","subcategory" => "Whisky","price" => "33.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11066666666666668","country" => "Canada","url" => "https://www.lcbo.com/en/liquormen-s-dirty-ol-canadian-whisky-trailer-park-boys-480442"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mcguinness Triple Sec","brand" => "McGuinness","category" => "Spirits","subcategory" => "Liqueur","price" => "10.95","volume" => "375","alcohol_content" => "22.0","price_index" => "0.13272727272727272","country" => "Canada","url" => "https://www.lcbo.com/en/mcguinness-triple-sec-574970"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jim Beam Peach","brand" => "Jim Beam","category" => "Spirits","subcategory" => "Whisky","price" => "29.95","volume" => "750","alcohol_content" => "32.5","price_index" => "0.12287179487179486","country" => "United States","url" => "https://www.lcbo.com/en/jim-beam-peach-21893"
            ]);
            DB::table('alcohols')->insert([
            "title" => "E&J Gallo XO Brandy","brand" => "E & J Gallo","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "34.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1165","country" => "United States","url" => "https://www.lcbo.com/en/e-j-gallo-xo-brandy-379321"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crown Royal Extra Rare 18 Year Old Canadian Whisky","brand" => "Crown Royal","category" => "Spirits","subcategory" => "Whisky","price" => "199.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.6665","country" => "Canada","url" => "https://www.lcbo.com/en/crown-royal-extra-rare-18-year-old-canadian-whisky-22536"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Humboldt's Finest Vodka Infused With Hemp Seed","brand" => "Humboldt'S Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "44.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.14983333333333335","country" => "United States","url" => "https://www.lcbo.com/en/humboldt-s-finest-vodka-infused-with-hemp-seed-18920"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Antiqua VSOP Aguardente Vinica Velha","brand" => "Antiqua","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "39.1","volume" => "750","alcohol_content" => "38.0","price_index" => "0.13719298245614037","country" => "Portugal","url" => "https://www.lcbo.com/en/antiqua-vsop-aguardente-vinica-velha-600528"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Chum Churum Yogurt","brand" => "Chum Churum","category" => "Spirits","subcategory" => "Soju","price" => "10.05","volume" => "360","alcohol_content" => "12.0","price_index" => "0.23263888888888892","country" => "South Korea","url" => "https://www.lcbo.com/en/chum-churum-yogurt-10035"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tanqueray No. Ten Gin","brand" => "Tanqueray","category" => "Spirits","subcategory" => "Gin","price" => "49.95","volume" => "750","alcohol_content" => "47.3","price_index" => "0.1408033826638478","country" => "United Kingdom","url" => "https://www.lcbo.com/en/tanqueray-no-ten-gin-600163"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tanqueray Blackcurrant Royale","brand" => "Tanqueray","category" => "Spirits","subcategory" => "Gin","price" => "33.45","volume" => "700","alcohol_content" => "41.3","price_index" => "0.11570390868211694","country" => "United Kingdom","url" => "https://www.lcbo.com/en/tanqueray-blackcurrant-royale-22454"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Belvedere Pure Vodka","brand" => "Belvedere","category" => "Spirits","subcategory" => "Vodka","price" => "27.25","volume" => "375","alcohol_content" => "40.0","price_index" => "0.18166666666666667","country" => "Poland","url" => "https://www.lcbo.com/en/belvedere-pure-vodka-363861"
            ]);
            DB::table('alcohols')->insert([
            "title" => "L'Aperitivo Nonino","brand" => "Nonino","category" => "Spirits","subcategory" => "Grappa","price" => "46.35","volume" => "700","alcohol_content" => "21.0","price_index" => "0.3153061224489796","country" => "Italy","url" => "https://www.lcbo.com/en/l-aperitivo-nonino-14389"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bulleit Small Batch Rye Whiskey","brand" => "Bulleit","category" => "Spirits","subcategory" => "Whisky","price" => "41.95","volume" => "750","alcohol_content" => "45.0","price_index" => "0.12429629629629631","country" => "United States","url" => "https://www.lcbo.com/en/bulleit-small-batch-rye-whiskey-350611"
            ]);
            DB::table('alcohols')->insert([
            "title" => "McGuinness Cherry Whisky","brand" => "McGuinness","category" => "Spirits","subcategory" => "Liqueur","price" => "23.95","volume" => "750","alcohol_content" => "15.0","price_index" => "0.21288888888888888","country" => "Canada","url" => "https://www.lcbo.com/en/mcguinness-cherry-whisky-631390"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Meaghers Triple Sec","brand" => "Meaghers","category" => "Spirits","subcategory" => "Liqueur","price" => "14.5","volume" => "375","alcohol_content" => "35.0","price_index" => "0.11047619047619048","country" => "Canada","url" => "https://www.lcbo.com/en/meaghers-triple-sec-88328"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Reid's Gin","brand" => "Reid'S Gin","category" => "Spirits","subcategory" => "Gin","price" => "50.95","volume" => "750","alcohol_content" => "42.2","price_index" => "0.16097946287519746","country" => "Canada","url" => "https://www.lcbo.com/en/reid-s-gin-13423"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Yukon Jack","brand" => "Yukon Jack","category" => "Spirits","subcategory" => "Liqueur","price" => "24.45","volume" => "750","alcohol_content" => "40.0","price_index" => "0.0815","country" => "Canada","url" => "https://www.lcbo.com/en/yukon-jack-49726"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Johnnie Walker Red Label Scotch Whisky","brand" => "Johnnie Walker","category" => "Spirits","subcategory" => "Whisky","price" => "74.05","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.10578571428571429","country" => "United Kingdom","url" => "https://www.lcbo.com/en/johnnie-walker-red-label-scotch-whisky-112896"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hpnotiq Liquor","brand" => "Hpnotiq","category" => "Spirits","subcategory" => "Liqueur","price" => "19.95","volume" => "375","alcohol_content" => "17.0","price_index" => "0.31294117647058817","country" => "France","url" => "https://www.lcbo.com/en/hpnotiq-liquor-122952"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jack Daniel's Tennessee Whiskey","brand" => "Jack Daniel's","category" => "Spirits","subcategory" => "Whisky","price" => "72.55","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.10364285714285713","country" => "United States","url" => "https://www.lcbo.com/en/jack-daniel-s-tennessee-whiskey-182931"
            ]);
            DB::table('alcohols')->insert([
            "title" => "J & B Rare Scotch Whisky","brand" => "J&B","category" => "Spirits","subcategory" => "Whisky","price" => "29.45","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09816666666666667","country" => "United Kingdom","url" => "https://www.lcbo.com/en/j-b-rare-scotch-whisky-2360"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Rumchata Cream Liqueur","brand" => "Rumchata","category" => "Spirits","subcategory" => "Liqueur","price" => "19.95","volume" => "375","alcohol_content" => "13.7","price_index" => "0.3883211678832117","country" => "United States","url" => "https://www.lcbo.com/en/rumchata-cream-liqueur-540120"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sailor Jerry Spiced Rum","brand" => "Sailor Jerry","category" => "Spirits","subcategory" => "Rum","price" => "46.95","volume" => "1140","alcohol_content" => "46.0","price_index" => "0.08953089244851259","country" => "United States","url" => "https://www.lcbo.com/en/sailor-jerry-spiced-rum-217257"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Collective Arts Rhubarb & Hibiscus Gin","brand" => "Collective Arts","category" => "Spirits","subcategory" => "Gin","price" => "48.95","volume" => "750","alcohol_content" => "43.5","price_index" => "0.15003831417624522","country" => "Canada","url" => "https://www.lcbo.com/en/collective-arts-rhubarb-hibiscus-gin-113456"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grappa Rialto","brand" => "Grappa Rialto","category" => "Spirits","subcategory" => "Grappa","price" => "29.15","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09716666666666667","country" => "Italy","url" => "https://www.lcbo.com/en/grappa-rialto-593889"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Oban Little Bay Single Malt Scotch Whisky","brand" => "Oban","category" => "Spirits","subcategory" => "Whisky","price" => "100.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.3365","country" => "United Kingdom","url" => "https://www.lcbo.com/en/oban-little-bay-single-malt-scotch-whisky-405423"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ciroc Watermelon","brand" => "Ciroc","category" => "Spirits","subcategory" => "Vodka","price" => "50.95","volume" => "750","alcohol_content" => "35.0","price_index" => "0.1940952380952381","country" => "France","url" => "https://www.lcbo.com/en/ciroc-watermelon-662379"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jagermeister","brand" => "Jagermeister","category" => "Spirits","subcategory" => "Liqueur","price" => "9.0","volume" => "200","alcohol_content" => "35.0","price_index" => "0.12857142857142856","country" => "Germany","url" => "https://www.lcbo.com/en/jagermeister-273318"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Seagrams V.O. Whisky","brand" => "Seagrams","category" => "Spirits","subcategory" => "Whisky","price" => "64.6","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09228571428571428","country" => "Canada","url" => "https://www.lcbo.com/en/seagrams-v-o-whisky-31930"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kahlua Coffee Flavoured Liquor","brand" => "Kahlua","category" => "Spirits","subcategory" => "Liqueur","price" => "18.05","volume" => "375","alcohol_content" => "16.0","price_index" => "0.30083333333333334","country" => "Mexico","url" => "https://www.lcbo.com/en/kahlua-coffee-flavoured-liquor-10212"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Malibu Coconut Rum Liqueur","brand" => "Malibu","category" => "Spirits","subcategory" => "Rum","price" => "25.95","volume" => "750","alcohol_content" => "21.0","price_index" => "0.16476190476190475","country" => "Canada","url" => "https://www.lcbo.com/en/malibu-coconut-rum-liqueur-477836"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Persian Empire Pome Liquor","brand" => "Vintages Spirits","category" => "Spirits","subcategory" => "Liqueur","price" => "31.65","volume" => "750","alcohol_content" => "20.5","price_index" => "0.20585365853658535","country" => "Canada","url" => "https://www.lcbo.com/en/persian-empire-pome-liquor-319848"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Patron Silver Tequila","brand" => "Patron","category" => "Spirits","subcategory" => "Tequila","price" => "84.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2831666666666667","country" => "Mexico","url" => "https://www.lcbo.com/en/patron-silver-tequila-34595"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Captain Morgan Original Spiced Rum","brand" => "Captain Morgan","category" => "Spirits","subcategory" => "Rum","price" => "9.95","volume" => "200","alcohol_content" => "35.0","price_index" => "0.14214285714285713","country" => "NULL","url" => "https://www.lcbo.com/en/captain-morgan-original-spiced-rum-225573"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Baileys Original Irish Cream","brand" => "Baileys","category" => "Spirits","subcategory" => "Liqueur","price" => "18.95","volume" => "375","alcohol_content" => "17.0","price_index" => "0.29725490196078425","country" => "Ireland","url" => "https://www.lcbo.com/en/baileys-original-irish-cream-74393"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Macallan 12YO Double Cask","brand" => "The Macallan","category" => "Spirits","subcategory" => "Whisky","price" => "59.95","volume" => "375","alcohol_content" => "43.0","price_index" => "0.3717829457364341","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-macallan-12yo-double-cask-13054"
            ]);
            DB::table('alcohols')->insert([
            "title" => "High Spirits Yuzu Citrus Vodka","brand" => "High Spirits","category" => "Spirits","subcategory" => "Vodka","price" => "29.95","volume" => "750","alcohol_content" => "30.0","price_index" => "0.1331111111111111","country" => "Canada","url" => "https://www.lcbo.com/en/high-spirits-yuzu-citrus-vodka-22774"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Appleton Estate V/X Signature Blend","brand" => "Appleton Estate","category" => "Spirits","subcategory" => "Rum","price" => "30.45","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10149999999999999","country" => "Jamaica","url" => "https://www.lcbo.com/en/appleton-estate-v-x-signature-blend-177808"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jose Cuervo Especial Silver Tequila","brand" => "Jose Cuervo","category" => "Spirits","subcategory" => "Tequila","price" => "53.85","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.1180921052631579","country" => "Mexico","url" => "https://www.lcbo.com/en/jose-cuervo-especial-silver-tequila-401315"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lamb's Palm Breeze Rum (PET)","brand" => "Lamb's","category" => "Spirits","subcategory" => "Rum","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "Canada","url" => "https://www.lcbo.com/en/lamb-s-palm-breeze-rum-pet-240101"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grant's Sherry Cask 8 YO Finish","brand" => "Grant's","category" => "Spirits","subcategory" => "Whisky","price" => "44.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.14983333333333335","country" => "United Kingdom","url" => "https://www.lcbo.com/en/grant-s-sherry-cask-8-yo-finish-21532"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Captain Morgan Dark Rum","brand" => "Captain Morgan","category" => "Spirits","subcategory" => "Rum","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "NULL","url" => "https://www.lcbo.com/en/captain-morgan-dark-rum-2196"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Captain Morgan Original Spiced Rum (PET)","brand" => "Captain Morgan","category" => "Spirits","subcategory" => "Rum","price" => "31.45","volume" => "750","alcohol_content" => "35.0","price_index" => "0.11980952380952381","country" => "NULL","url" => "https://www.lcbo.com/en/captain-morgan-original-spiced-rum-pet-318709"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Raynal Napoleon VSOP Brandy","brand" => "Raynal Brandy","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "30.8","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10266666666666667","country" => "France","url" => "https://www.lcbo.com/en/raynal-napoleon-vsop-brandy-107169"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dixon's Wicked Blueberry Gin","brand" => "Dixon's","category" => "Spirits","subcategory" => "Gin","price" => "40.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.134","country" => "Canada","url" => "https://www.lcbo.com/en/dixon-s-wicked-blueberry-gin-16859"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Beefeater London Dry Gin","brand" => "Beefeater","category" => "Spirits","subcategory" => "Gin","price" => "66.5","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.095","country" => "United Kingdom","url" => "https://www.lcbo.com/en/beefeater-london-dry-gin-56622"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Arak Of Lebanon","brand" => "Gantous & Abou Raad","category" => "Spirits","subcategory" => "Liqueur","price" => "40.8","volume" => "750","alcohol_content" => "50.0","price_index" => "0.1088","country" => "Lebanon","url" => "https://www.lcbo.com/en/arak-of-lebanon-306431"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kingston 62 Gold","brand" => "Kingston 62","category" => "Spirits","subcategory" => "Rum","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "Canada","url" => "https://www.lcbo.com/en/kingston-62-gold-19854"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Iceberg Vodka","brand" => "Iceberg","category" => "Spirits","subcategory" => "Vodka","price" => "29.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09916666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/iceberg-vodka-400754"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Walker's Special Old Whisky (PET)","brand" => "Hiram Walker","category" => "Spirits","subcategory" => "Whisky","price" => "64.75","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.0925","country" => "Canada","url" => "https://www.lcbo.com/en/walker-s-special-old-whisky-pet-209205"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Corralejo Reposado Tequila","brand" => "CORRALEJO","category" => "Spirits","subcategory" => "Tequila","price" => "73.25","volume" => "750","alcohol_content" => "40.0","price_index" => "0.24416666666666667","country" => "Mexico","url" => "https://www.lcbo.com/en/corralejo-reposado-tequila-24949"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crown Royal Whisky (PET)","brand" => "Crown Royal","category" => "Spirits","subcategory" => "Whisky","price" => "10.95","volume" => "200","alcohol_content" => "40.0","price_index" => "0.136875","country" => "Canada","url" => "https://www.lcbo.com/en/crown-royal-whisky-pet-416388"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Glenlivet Nadurra First Fill","brand" => "The Glenlivet","category" => "Spirits","subcategory" => "Whisky","price" => "103.05","volume" => "750","alcohol_content" => "48.0","price_index" => "0.28625","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-glenlivet-nadurra-first-fill-425769"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Absolut Lime Vodka","brand" => "Absolut","category" => "Spirits","subcategory" => "Vodka","price" => "30.45","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10149999999999999","country" => "Sweden","url" => "https://www.lcbo.com/en/absolut-lime-vodka-493999"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Laphroaig Lore Islay Single Malt Scotch Whisky (2 Bottle Limit)","brand" => "Laphroaig","category" => "Spirits","subcategory" => "Whisky","price" => "224.95","volume" => "750","alcohol_content" => "48.0","price_index" => "0.6248611111111111","country" => "United Kingdom","url" => "https://www.lcbo.com/en/laphroaig-lore-islay-single-malt-scotch-whisky-455436"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jameson Black Barrel","brand" => "Jameson","category" => "Spirits","subcategory" => "Whisky","price" => "50.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.16733333333333333","country" => "Ireland","url" => "https://www.lcbo.com/en/jameson-black-barrel-292615"
            ]);
            DB::table('alcohols')->insert([
            "title" => "H2 Craft Metamorphosis Indigo Gin","brand" => "H2 Craft","category" => "Spirits","subcategory" => "Gin","price" => "39.95","volume" => "750","alcohol_content" => "42.5","price_index" => "0.12533333333333335","country" => "Canada","url" => "https://www.lcbo.com/en/h2-craft-metamorphosis-indigo-gin-12167"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Broker's Premium London Dry Gin","brand" => "Broker's","category" => "Spirits","subcategory" => "Gin","price" => "31.25","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10416666666666667","country" => "United Kingdom","url" => "https://www.lcbo.com/en/broker-s-premium-london-dry-gin-605162"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Irish Mist Honey Liqueur","brand" => "Irish Mist","category" => "Spirits","subcategory" => "Liqueur","price" => "36.95","volume" => "750","alcohol_content" => "35.0","price_index" => "0.14076190476190478","country" => "Ireland","url" => "https://www.lcbo.com/en/irish-mist-honey-liqueur-20768"
            ]);
            DB::table('alcohols')->insert([
            "title" => "McClelland's Islay Single Malt Scotch Whisky","brand" => "McClelland's","category" => "Spirits","subcategory" => "Whisky","price" => "49.95","volume" => "750","alcohol_content" => "40.2","price_index" => "0.1656716417910448","country" => "United Kingdom","url" => "https://www.lcbo.com/en/mcclelland-s-islay-single-malt-scotch-whisky-404160"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Luksusowa Vodka","brand" => "Luksusowa","category" => "Spirits","subcategory" => "Vodka","price" => "30.05","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10016666666666667","country" => "Poland","url" => "https://www.lcbo.com/en/luksusowa-vodka-253302"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tequila Rose Strawberry Cream Liqueur","brand" => "Tequila Rose","category" => "Spirits","subcategory" => "Liqueur","price" => "31.25","volume" => "750","alcohol_content" => "15.0","price_index" => "0.2777777777777778","country" => "United States","url" => "https://www.lcbo.com/en/tequila-rose-strawberry-cream-liqueur-382747"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Green Spot Irish Whiskey","brand" => "Green Spot","category" => "Spirits","subcategory" => "Whisky","price" => "80.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.26733333333333337","country" => "Ireland","url" => "https://www.lcbo.com/en/green-spot-irish-whiskey-667071"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Forty Creek Cream Liquor","brand" => "Forty Creek","category" => "Spirits","subcategory" => "Liqueur","price" => "42.45","volume" => "1140","alcohol_content" => "17.0","price_index" => "0.21904024767801858","country" => "Canada","url" => "https://www.lcbo.com/en/forty-creek-cream-liquor-350561"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Angostura Bitters","brand" => "Angostura","category" => "Spirits","subcategory" => "Liqueur","price" => "9.95","volume" => "100","alcohol_content" => "44.7","price_index" => "0.22259507829977626","country" => "Trinidad & Tobago","url" => "https://www.lcbo.com/en/angostura-bitters-540229"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Belvedere Pure Vodka","brand" => "Belvedere","category" => "Spirits","subcategory" => "Vodka","price" => "78.8","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.17280701754385963","country" => "Poland","url" => "https://www.lcbo.com/en/belvedere-pure-vodka-556621"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Copperhead Black Currant Vodka","brand" => "Copperhead","category" => "Spirits","subcategory" => "Vodka","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/copperhead-black-currant-vodka-513226"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bolivar Coffee Liqueur","brand" => "Bolivar","category" => "Spirits","subcategory" => "Liqueur","price" => "29.95","volume" => "1140","alcohol_content" => "26.5","price_index" => "0.09913935782853359","country" => "Canada","url" => "https://www.lcbo.com/en/bolivar-coffee-liqueur-605758"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jaan Premium Canadian Whisky","brand" => "Jaan","category" => "Spirits","subcategory" => "Whisky","price" => "44.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.14983333333333335","country" => "Canada","url" => "https://www.lcbo.com/en/jaan-premium-canadian-whisky-18645"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crown Royal Vanilla","brand" => "Crown Royal","category" => "Spirits","subcategory" => "Whisky","price" => "33.45","volume" => "750","alcohol_content" => "35.0","price_index" => "0.12742857142857145","country" => "Canada","url" => "https://www.lcbo.com/en/crown-royal-vanilla-476911"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Willibald Pink Gin","brand" => "Willibald","category" => "Spirits","subcategory" => "Gin","price" => "44.95","volume" => "750","alcohol_content" => "38.3","price_index" => "0.1564838990426458","country" => "Canada","url" => "https://www.lcbo.com/en/willibald-pink-gin-25654"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Highland Park 15 Year Old","brand" => "HIGHLAND PARK","category" => "Spirits","subcategory" => "Whisky","price" => "149.95","volume" => "750","alcohol_content" => "44.0","price_index" => "0.45439393939393935","country" => "United Kingdom","url" => "https://www.lcbo.com/en/highland-park-15-year-old-24781"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smirnoff Peach","brand" => "Smirnoff","category" => "Spirits","subcategory" => "Vodka","price" => "29.75","volume" => "750","alcohol_content" => "35.0","price_index" => "0.11333333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-peach-19516"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bombay Sapphire London Dry Gin","brand" => "Bombay Sapphire","category" => "Spirits","subcategory" => "Gin","price" => "44.35","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09725877192982456","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bombay-sapphire-london-dry-gin-217281"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Iceberg Vodka (PET)","brand" => "Iceberg","category" => "Spirits","subcategory" => "Vodka","price" => "16.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.10733333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/iceberg-vodka-pet-385286"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Teacher's Highland Scotch Whisky","brand" => "Teacher's","category" => "Spirits","subcategory" => "Whisky","price" => "45.45","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09967105263157895","country" => "United Kingdom","url" => "https://www.lcbo.com/en/teacher-s-highland-scotch-whisky-205401"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wolfhead Banana Caramel Vodka","brand" => "Wolfhead","category" => "Spirits","subcategory" => "Vodka","price" => "20.25","volume" => "375","alcohol_content" => "28.0","price_index" => "0.19285714285714284","country" => "Canada","url" => "https://www.lcbo.com/en/wolfhead-banana-caramel-vodka-645929"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jameson Irish Whiskey","brand" => "Jameson","category" => "Spirits","subcategory" => "Whisky","price" => "11.6","volume" => "200","alcohol_content" => "40.0","price_index" => "0.145","country" => "Ireland","url" => "https://www.lcbo.com/en/jameson-irish-whiskey-320804"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Duff Gordon Solera Reserva Brandy","brand" => "Duff Gordon","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "29.45","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09816666666666667","country" => "Spain","url" => "https://www.lcbo.com/en/duff-gordon-solera-reserva-brandy-16022"
            ]);
            DB::table('alcohols')->insert([
            "title" => "J.P. Wiser's Manhattan Canadian Whisky Cocktail","brand" => "J.P. Wiser's","category" => "Spirits","subcategory" => "Premixed Cocktails","price" => "30.5","volume" => "750","alcohol_content" => "35.0","price_index" => "0.11619047619047619","country" => "Canada","url" => "https://www.lcbo.com/en/j-p-wiser-s-manhattan-canadian-whisky-cocktail-12865"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dillon's Bitters Orange","brand" => "Dillon's","category" => "Spirits","subcategory" => "Liqueur","price" => "14.95","volume" => "100","alcohol_content" => "50.0","price_index" => "0.299","country" => "Canada","url" => "https://www.lcbo.com/en/dillon-s-bitters-orange-463398"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Maverick Barnburner Whisky","brand" => "Maverick","category" => "Spirits","subcategory" => "Whisky","price" => "35.2","volume" => "750","alcohol_content" => "41.6","price_index" => "0.11282051282051284","country" => "Canada","url" => "https://www.lcbo.com/en/maverick-barnburner-whisky-631853"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jagermeister","brand" => "Jagermeister","category" => "Spirits","subcategory" => "Liqueur","price" => "15.7","volume" => "375","alcohol_content" => "35.0","price_index" => "0.11961904761904761","country" => "Germany","url" => "https://www.lcbo.com/en/jagermeister-61408"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sour Puss Raspberry (PET)","brand" => "Sour Puss","category" => "Spirits","subcategory" => "Liqueur","price" => "12.95","volume" => "375","alcohol_content" => "15.0","price_index" => "0.23022222222222222","country" => "United States","url" => "https://www.lcbo.com/en/sour-puss-raspberry-pet-520718"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ron Zacapa 23 Centenario Rum","brand" => "Ron Zacapa","category" => "Spirits","subcategory" => "Rum","price" => "79.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2665","country" => "Guatemala","url" => "https://www.lcbo.com/en/ron-zacapa-23-centenario-rum-273516"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Maestro Dobel Tequila","brand" => "Maestro Dobel","category" => "Spirits","subcategory" => "Tequila","price" => "66.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.22066666666666668","country" => "Mexico","url" => "https://www.lcbo.com/en/maestro-dobel-tequila-401307"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Galliano","brand" => "Galliano","category" => "Spirits","subcategory" => "Liqueur","price" => "18.6","volume" => "375","alcohol_content" => "30.0","price_index" => "0.16533333333333333","country" => "Netherlands","url" => "https://www.lcbo.com/en/galliano-217067"
            ]);
            DB::table('alcohols')->insert([
            "title" => "St Remy Signature","brand" => "St-Remy","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "44.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.14733333333333334","country" => "France","url" => "https://www.lcbo.com/en/st-remy-signature-16544"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tomatin 12 Year Old Highland Single Malt Scotch Whisky","brand" => "Tomatin","category" => "Spirits","subcategory" => "Whisky","price" => "79.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.24790697674418605","country" => "United Kingdom","url" => "https://www.lcbo.com/en/tomatin-12-year-old-highland-single-malt-scotch-whisky-364349"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hennessy XO Cognac","brand" => "Hennessy","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "336.5","volume" => "750","alcohol_content" => "40.0","price_index" => "1.1216666666666666","country" => "France","url" => "https://www.lcbo.com/en/hennessy-xo-cognac-217463"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Valley of Mother of God Smoked Gin","brand" => "Valley Of Mother Of God","category" => "Spirits","subcategory" => "Gin","price" => "72.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.2262015503875969","country" => "Canada","url" => "https://www.lcbo.com/en/valley-of-mother-of-god-smoked-gin-19670"
            ]);
            DB::table('alcohols')->insert([
            "title" => "El Tequileno Tequila Anejo Gran Reserva","brand" => "EL TEQUILENO","category" => "Spirits","subcategory" => "Tequila","price" => "139.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.46649999999999997","country" => "Mexico","url" => "https://www.lcbo.com/en/el-tequileno-tequila-anejo-gran-reserva-24954"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kahlua Coffee Flavoured Liquor (PET)","brand" => "Kahlua","category" => "Spirits","subcategory" => "Liqueur","price" => "60.2","volume" => "1750","alcohol_content" => "16.0","price_index" => "0.215","country" => "Mexico","url" => "https://www.lcbo.com/en/kahlua-coffee-flavoured-liquor-pet-10217"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grand Macnish","brand" => "Grand Macnish","category" => "Spirits","subcategory" => "Whisky","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "United Kingdom","url" => "https://www.lcbo.com/en/grand-macnish-217190"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jose Cuervo Especial Gold Tequila","brand" => "Jose Cuervo","category" => "Spirits","subcategory" => "Tequila","price" => "11.55","volume" => "200","alcohol_content" => "40.0","price_index" => "0.144375","country" => "Mexico","url" => "https://www.lcbo.com/en/jose-cuervo-especial-gold-tequila-479915"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Appleton Estate V/X Signature Blend","brand" => "Appleton Estate","category" => "Spirits","subcategory" => "Rum","price" => "44.95","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09857456140350877","country" => "Jamaica","url" => "https://www.lcbo.com/en/appleton-estate-v-x-signature-blend-223529"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Glenlivet Founder's Reserve Scotch Whisky","brand" => "The Glenlivet","category" => "Spirits","subcategory" => "Whisky","price" => "64.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.214","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-glenlivet-founder-s-reserve-scotch-whisky-410043"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Willibald Barrel Gin","brand" => "Willibald","category" => "Spirits","subcategory" => "Gin","price" => "46.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.1455813953488372","country" => "Canada","url" => "https://www.lcbo.com/en/willibald-barrel-gin-540302"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bushmills Irish Whiskey","brand" => "Bushmills","category" => "Spirits","subcategory" => "Whisky","price" => "36.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12066666666666667","country" => "Ireland","url" => "https://www.lcbo.com/en/bushmills-irish-whiskey-14910"
            ]);
            DB::table('alcohols')->insert([
            "title" => "E&J Gallo VSOP Brandy","brand" => "E & J Gallo","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "29.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09733333333333333","country" => "United States","url" => "https://www.lcbo.com/en/e-j-gallo-vsop-brandy-396234"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Banff Ice Vodka","brand" => "Banff Ice","category" => "Spirits","subcategory" => "Vodka","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/banff-ice-vodka-350397"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Captain Morgan Original Spiced Rum (PET)","brand" => "Captain Morgan","category" => "Spirits","subcategory" => "Rum","price" => "65.95","volume" => "1750","alcohol_content" => "35.0","price_index" => "0.10767346938775511","country" => "NULL","url" => "https://www.lcbo.com/en/captain-morgan-original-spiced-rum-pet-500546"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Chivas Regal 12 Year Old Scotch Whisky","brand" => "Chivas Regal","category" => "Spirits","subcategory" => "Whisky","price" => "82.35","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.1805921052631579","country" => "United Kingdom","url" => "https://www.lcbo.com/en/chivas-regal-12-year-old-scotch-whisky-207647"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bols Advocaat","brand" => "Bols","category" => "Spirits","subcategory" => "Liqueur","price" => "23.6","volume" => "750","alcohol_content" => "15.0","price_index" => "0.20977777777777779","country" => "Netherlands","url" => "https://www.lcbo.com/en/bols-advocaat-8532"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ketel One Botanical Cucumber and Mint","brand" => "Ketel One","category" => "Spirits","subcategory" => "Vodka","price" => "35.95","volume" => "750","alcohol_content" => "30.0","price_index" => "0.1597777777777778","country" => "Netherlands","url" => "https://www.lcbo.com/en/ketel-one-botanical-cucumber-and-mint-640920"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wyborowa Vodka","brand" => "Wyborowa","category" => "Spirits","subcategory" => "Vodka","price" => "44.8","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09824561403508772","country" => "Poland","url" => "https://www.lcbo.com/en/wyborowa-vodka-211110"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bowmore 12 Year Old Islay Single Malt Scotch Whisky","brand" => "Bowmore","category" => "Spirits","subcategory" => "Whisky","price" => "67.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2265","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bowmore-12-year-old-islay-single-malt-scotch-whisky-330803"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jameson Irish Whiskey","brand" => "Jameson","category" => "Spirits","subcategory" => "Whisky","price" => "38.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12733333333333335","country" => "Ireland","url" => "https://www.lcbo.com/en/jameson-irish-whiskey-10157"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jose Cuervo Especial Gold Tequila","brand" => "Jose Cuervo","category" => "Spirits","subcategory" => "Tequila","price" => "53.85","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.1180921052631579","country" => "Mexico","url" => "https://www.lcbo.com/en/jose-cuervo-especial-gold-tequila-267245"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Zirkova Together Ultra Premium Vodka","brand" => "Zirkova","category" => "Spirits","subcategory" => "Vodka","price" => "31.25","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10416666666666667","country" => "Ukraine","url" => "https://www.lcbo.com/en/zirkova-together-ultra-premium-vodka-638205"
            ]);
            DB::table('alcohols')->insert([
            "title" => "McClelland's Speyside Single Malt Scotch Whisky","brand" => "McClelland's","category" => "Spirits","subcategory" => "Whisky","price" => "49.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1665","country" => "United Kingdom","url" => "https://www.lcbo.com/en/mcclelland-s-speyside-single-malt-scotch-whisky-573337"
            ]);
            DB::table('alcohols')->insert([
            "title" => "J.P. Wiser's Old Fashioned Canadian Whisky Cocktail","brand" => "J.P. Wiser's","category" => "Spirits","subcategory" => "Premixed Cocktails","price" => "16.8","volume" => "375","alcohol_content" => "35.0","price_index" => "0.128","country" => "Canada","url" => "https://www.lcbo.com/en/j-p-wiser-s-old-fashioned-canadian-whisky-cocktail-18864"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Beefeater London Dry Gin","brand" => "Beefeater","category" => "Spirits","subcategory" => "Gin","price" => "43.65","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09572368421052631","country" => "United Kingdom","url" => "https://www.lcbo.com/en/beefeater-london-dry-gin-209213"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mezcal Amores Verde Momento","brand" => "Verde Momento","category" => "Spirits","subcategory" => "Tequila","price" => "64.8","volume" => "700","alcohol_content" => "42.0","price_index" => "0.2204081632653061","country" => "Mexico","url" => "https://www.lcbo.com/en/mezcal-amores-verde-momento-666693"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gautier VS Cognac","brand" => "Gautier","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "56.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.18733333333333335","country" => "France","url" => "https://www.lcbo.com/en/gautier-vs-cognac-384867"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Famous Grouse Scotch Whisky","brand" => "The Famous Grouse","category" => "Spirits","subcategory" => "Whisky","price" => "43.35","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09506578947368421","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-famous-grouse-scotch-whisky-211334"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gordon's Dry Gin (PET)","brand" => "Gordon's","category" => "Spirits","subcategory" => "Gin","price" => "64.6","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09228571428571428","country" => "Canada","url" => "https://www.lcbo.com/en/gordon-s-dry-gin-pet-111021"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Captain Morgan Gold Rum (PET)","brand" => "Captain Morgan","category" => "Spirits","subcategory" => "Rum","price" => "64.6","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09228571428571428","country" => "NULL","url" => "https://www.lcbo.com/en/captain-morgan-gold-rum-pet-234039"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Los Arango Reposado Tequila","brand" => "Los Arango","category" => "Spirits","subcategory" => "Tequila","price" => "60.15","volume" => "750","alcohol_content" => "35.0","price_index" => "0.22914285714285715","country" => "Mexico","url" => "https://www.lcbo.com/en/los-arango-reposado-tequila-47316"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hennessy Vs Cognac","brand" => "Hennessy","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "23.95","volume" => "200","alcohol_content" => "40.0","price_index" => "0.299375","country" => "France","url" => "https://www.lcbo.com/en/hennessy-vs-cognac-605576"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jameson Irish Whiskey","brand" => "Jameson","category" => "Spirits","subcategory" => "Whisky","price" => "52.35","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.11480263157894738","country" => "Ireland","url" => "https://www.lcbo.com/en/jameson-irish-whiskey-207613"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Disaronno Velvet","brand" => "Disaronno","category" => "Spirits","subcategory" => "Liqueur","price" => "32.95","volume" => "750","alcohol_content" => "17.0","price_index" => "0.2584313725490196","country" => "Netherlands","url" => "https://www.lcbo.com/en/disaronno-velvet-17559"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Torres Brandy 10 Year Old","brand" => "Torres","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "31.7","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10566666666666666","country" => "Spain","url" => "https://www.lcbo.com/en/torres-brandy-10-year-old-522359"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Walker's Special Old Whisky (PET)","brand" => "Hiram Walker","category" => "Spirits","subcategory" => "Whisky","price" => "43.5","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09539473684210527","country" => "Canada","url" => "https://www.lcbo.com/en/walker-s-special-old-whisky-pet-226316"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kinsip Maple Whisky","brand" => "Kinsip","category" => "Spirits","subcategory" => "Whisky","price" => "33.25","volume" => "375","alcohol_content" => "40.0","price_index" => "0.22166666666666668","country" => "Canada","url" => "https://www.lcbo.com/en/kinsip-maple-whisky-453233"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Soho Lychee Liqueur","brand" => "Soho","category" => "Spirits","subcategory" => "Liqueur","price" => "31.15","volume" => "750","alcohol_content" => "21.0","price_index" => "0.19777777777777777","country" => "France","url" => "https://www.lcbo.com/en/soho-lychee-liqueur-56283"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kilbeggan Irish Whiskey","brand" => "Kilbeggan","category" => "Spirits","subcategory" => "Whisky","price" => "36.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12316666666666667","country" => "Ireland","url" => "https://www.lcbo.com/en/kilbeggan-irish-whiskey-334045"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Absolut Vodka","brand" => "Absolut","category" => "Spirits","subcategory" => "Vodka","price" => "44.9","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09846491228070176","country" => "Sweden","url" => "https://www.lcbo.com/en/absolut-vodka-209221"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ballantine's Finest Blended Malt Scotch Whisky","brand" => "Ballantine's","category" => "Spirits","subcategory" => "Whisky","price" => "44.35","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09725877192982456","country" => "United Kingdom","url" => "https://www.lcbo.com/en/ballantine-s-finest-blended-malt-scotch-whisky-207662"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dujardin VSOP Brandy","brand" => "Dujardin","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "29.7","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09899999999999999","country" => "Germany","url" => "https://www.lcbo.com/en/dujardin-vsop-brandy-10512"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Leyenda Tlacuache Organic Mezcal","brand" => "Mezcal De Leyendas","category" => "Spirits","subcategory" => "Tequila","price" => "76.1","volume" => "750","alcohol_content" => "41.0","price_index" => "0.24747967479674796","country" => "Mexico","url" => "https://www.lcbo.com/en/leyenda-tlacuache-organic-mezcal-275420"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Chak De Canadian Whisky","brand" => "Chak De","category" => "Spirits","subcategory" => "Whisky","price" => "34.95","volume" => "750","alcohol_content" => "45.0","price_index" => "0.10355555555555557","country" => "Canada","url" => "https://www.lcbo.com/en/chak-de-canadian-whisky-22246"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Polar Ice Vodka","brand" => "Polar Ice Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "Canada","url" => "https://www.lcbo.com/en/polar-ice-vodka-240150"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ungava Ginger","brand" => "Ungava","category" => "Spirits","subcategory" => "Gin","price" => "40.95","volume" => "750","alcohol_content" => "37.5","price_index" => "0.1456","country" => "Canada","url" => "https://www.lcbo.com/en/ungava-ginger-19401"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Famous Grouse Scotch Whisky","brand" => "The Famous Grouse","category" => "Spirits","subcategory" => "Whisky","price" => "30.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10066666666666667","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-famous-grouse-scotch-whisky-52050"
            ]);
            DB::table('alcohols')->insert([
            "title" => "McGuinness Peppermint Schnapps","brand" => "McGuinness","category" => "Spirits","subcategory" => "Liqueur","price" => "23.95","volume" => "750","alcohol_content" => "22.0","price_index" => "0.14515151515151514","country" => "Canada","url" => "https://www.lcbo.com/en/mcguinness-peppermint-schnapps-315564"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Chum Churum Strawberry","brand" => "Chum Churum","category" => "Spirits","subcategory" => "Soju","price" => "10.05","volume" => "360","alcohol_content" => "12.0","price_index" => "0.23263888888888892","country" => "South Korea","url" => "https://www.lcbo.com/en/chum-churum-strawberry-10036"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hornitos Reposado Tequila","brand" => "Hornitos","category" => "Spirits","subcategory" => "Tequila","price" => "13.25","volume" => "200","alcohol_content" => "40.0","price_index" => "0.165625","country" => "Mexico","url" => "https://www.lcbo.com/en/hornitos-reposado-tequila-293928"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Flor de Ca�a 5 Year Rum (A�ejo Cl�sico)","brand" => "Flor de Ca�a","category" => "Spirits","subcategory" => "Rum","price" => "30.45","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10149999999999999","country" => "Nicaragua","url" => "https://www.lcbo.com/en/flor-de-ca-a-5-year-rum-a-ejo-cl-sico-602920"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Choya 23 Ume Fruit Liqueur","brand" => "Choya","category" => "Spirits","subcategory" => "Liqueur","price" => "32.2","volume" => "700","alcohol_content" => "23.6","price_index" => "0.19491525423728814","country" => "Japan","url" => "https://www.lcbo.com/en/choya-23-ume-fruit-liqueur-332965"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tanqueray London Dry Gin","brand" => "Tanqueray","category" => "Spirits","subcategory" => "Gin","price" => "17.05","volume" => "375","alcohol_content" => "40.0","price_index" => "0.11366666666666667","country" => "United Kingdom","url" => "https://www.lcbo.com/en/tanqueray-dry-gin-32425"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Niagara Falls Canadian Maple Whisky","brand" => "Niagara Falls Craft","category" => "Spirits","subcategory" => "Whisky","price" => "34.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1165","country" => "Canada","url" => "https://www.lcbo.com/en/niagara-falls-canadian-maple-whisky-645705"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Finlandia Vodka","brand" => "Finlandia","category" => "Spirits","subcategory" => "Vodka","price" => "66.55","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09507142857142857","country" => "Finland","url" => "https://www.lcbo.com/en/finlandia-vodka-114967"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cabot Trail Maple Cream","brand" => "Cabot Trail","category" => "Spirits","subcategory" => "Liqueur","price" => "42.95","volume" => "1140","alcohol_content" => "15.0","price_index" => "0.2511695906432749","country" => "Canada","url" => "https://www.lcbo.com/en/cabot-trail-maple-cream-18877"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Absolut Mandrin Vodka","brand" => "Absolut","category" => "Spirits","subcategory" => "Vodka","price" => "30.45","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10149999999999999","country" => "Sweden","url" => "https://www.lcbo.com/en/absolut-mandrin-vodka-550749"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Villa One Silver","brand" => "Villa One","category" => "Spirits","subcategory" => "Tequila","price" => "66.6","volume" => "750","alcohol_content" => "40.0","price_index" => "0.22199999999999998","country" => "Mexico","url" => "https://www.lcbo.com/en/villa-one-silver-19427"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Whitley Neill Rhubarb & Ginger","brand" => "Whitley Neill","category" => "Spirits","subcategory" => "Gin","price" => "44.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.1393798449612403","country" => "United Kingdom","url" => "https://www.lcbo.com/en/whitley-neill-rhubarb-ginger-11868"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Stone Vodka","brand" => "Stone","category" => "Spirits","subcategory" => "Vodka","price" => "34.35","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1145","country" => "Canada","url" => "https://www.lcbo.com/en/stone-vodka-19456"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Elijah Craig Small Batch Bourbon Whiskey","brand" => "Elijah Craig","category" => "Spirits","subcategory" => "Whisky","price" => "49.95","volume" => "750","alcohol_content" => "47.0","price_index" => "0.1417021276595745","country" => "United States","url" => "https://www.lcbo.com/en/elijah-craig-small-batch-bourbon-whiskey-547729"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Disaronno Originale Amaretto","brand" => "Disaronno","category" => "Spirits","subcategory" => "Liqueur","price" => "10.5","volume" => "200","alcohol_content" => "28.0","price_index" => "0.18749999999999997","country" => "Italy","url" => "https://www.lcbo.com/en/disaronno-originale-amaretto-218016"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Forager Botanical Whisky","brand" => "The Forager","category" => "Spirits","subcategory" => "Whisky","price" => "31.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1065","country" => "Canada","url" => "https://www.lcbo.com/en/the-forager-botanical-whisky-13915"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bombay Sapphire London Dry Gin","brand" => "Bombay Sapphire","category" => "Spirits","subcategory" => "Gin","price" => "10.05","volume" => "200","alcohol_content" => "40.0","price_index" => "0.12562500000000001","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bombay-sapphire-london-dry-gin-260844"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Johnnie Walker Black Label Scotch Whisky","brand" => "Johnnie Walker","category" => "Spirits","subcategory" => "Whisky","price" => "114.95","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.16421428571428573","country" => "United Kingdom","url" => "https://www.lcbo.com/en/johnnie-walker-black-label-scotch-whisky-422006"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Stoli Vodka","brand" => "Stolichnaya","category" => "Spirits","subcategory" => "Vodka","price" => "16.55","volume" => "375","alcohol_content" => "40.0","price_index" => "0.11033333333333334","country" => "Latvia","url" => "https://www.lcbo.com/en/stolichnaya-vodka-446575"
            ]);
            DB::table('alcohols')->insert([
            "title" => "El Dorado 5 Year Old Rum","brand" => "El Dorado","category" => "Spirits","subcategory" => "Rum","price" => "44.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09703947368421052","country" => "Guyana","url" => "https://www.lcbo.com/en/el-dorado-5-year-old-rum-215020"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gibson's Finest Bold 8 Year Old Whisky","brand" => "Gibson's Finest","category" => "Spirits","subcategory" => "Whisky","price" => "34.95","volume" => "750","alcohol_content" => "46.0","price_index" => "0.10130434782608697","country" => "Canada","url" => "https://www.lcbo.com/en/gibson-s-finest-bold-8-year-old-whisky-457572"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Glenlivet 12 Year Old Single Malt Scotch Whisky","brand" => "The Glenlivet","category" => "Spirits","subcategory" => "Whisky","price" => "70.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.234","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-glenlivet-12-year-old-single-malt-scotch-whisky-21097"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenmorangie Quinta Ruban Whisky","brand" => "Glenmorangie","category" => "Spirits","subcategory" => "Whisky","price" => "100.85","volume" => "750","alcohol_content" => "46.0","price_index" => "0.29231884057971014","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenmorangie-quinta-ruban-whisky-14569"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Captain Morgan White Rum (PET)","brand" => "Captain Morgan","category" => "Spirits","subcategory" => "Rum","price" => "16.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.10733333333333334","country" => "NULL","url" => "https://www.lcbo.com/en/captain-morgan-white-rum-pet-13789"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dillon's The Professors Negroni","brand" => "Dillon's","category" => "Spirits","subcategory" => "Premixed Cocktails","price" => "22.95","volume" => "500","alcohol_content" => "18.4","price_index" => "0.24945652173913044","country" => "Canada","url" => "https://www.lcbo.com/en/dillon-s-the-professors-negroni-11423"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jack Daniel's Tennessee Fire","brand" => "Jack Daniel's","category" => "Spirits","subcategory" => "Liqueur","price" => "10.05","volume" => "200","alcohol_content" => "35.0","price_index" => "0.14357142857142857","country" => "United States","url" => "https://www.lcbo.com/en/jack-daniel-s-tennessee-fire-417592"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Schloss Kirsch","brand" => "Schloss Kirsch","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "30.75","volume" => "375","alcohol_content" => "40.0","price_index" => "0.205","country" => "Austria","url" => "https://www.lcbo.com/en/schloss-kirsch-43018"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Captain Morgan Original Spiced Rum (PET)","brand" => "Captain Morgan","category" => "Spirits","subcategory" => "Rum","price" => "17.95","volume" => "375","alcohol_content" => "35.0","price_index" => "0.13676190476190475","country" => "NULL","url" => "https://www.lcbo.com/en/captain-morgan-original-spiced-rum-pet-500504"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tequila Tromba Blanco","brand" => "Tromba","category" => "Spirits","subcategory" => "Tequila","price" => "15.05","volume" => "200","alcohol_content" => "36.0","price_index" => "0.20902777777777778","country" => "Mexico","url" => "https://www.lcbo.com/en/tequila-tromba-blanco-479964"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Canadian Club Classic 12 Year Old","brand" => "Canadian Club","category" => "Spirits","subcategory" => "Whisky","price" => "18.75","volume" => "375","alcohol_content" => "40.0","price_index" => "0.125","country" => "Canada","url" => "https://www.lcbo.com/en/canadian-club-classic-12-year-old-311910"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crown Royal Apple","brand" => "Crown Royal","category" => "Spirits","subcategory" => "Whisky","price" => "18.4","volume" => "375","alcohol_content" => "36.0","price_index" => "0.13629629629629628","country" => "Canada","url" => "https://www.lcbo.com/en/crown-royal-apple-479899"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ramazzotti Sambuca","brand" => "Ramazzotti","category" => "Spirits","subcategory" => "Liqueur","price" => "34.35","volume" => "1140","alcohol_content" => "38.0","price_index" => "0.07929362880886427","country" => "Italy","url" => "https://www.lcbo.com/en/ramazzotti-sambuca-605709"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ketel One Vodka","brand" => "Ketel One","category" => "Spirits","subcategory" => "Vodka","price" => "52.35","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.11480263157894738","country" => "Netherlands","url" => "https://www.lcbo.com/en/ketel-one-vodka-363770"
            ]);
            DB::table('alcohols')->insert([
            "title" => "1800 Blanco Tequila","brand" => "1800 Tequila","category" => "Spirits","subcategory" => "Tequila","price" => "22.6","volume" => "375","alcohol_content" => "40.0","price_index" => "0.15066666666666667","country" => "Mexico","url" => "https://www.lcbo.com/en/1800-silver-tequila-10232"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Aberfeldy 12 Year Old","brand" => "Aberfeldy","category" => "Spirits","subcategory" => "Whisky","price" => "66.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.22066666666666668","country" => "United Kingdom","url" => "https://www.lcbo.com/en/aberfeldy-12-year-old-255281"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Beattie's Farm Crafted Strawberry Flavoured Vodka","brand" => "Beattie's","category" => "Spirits","subcategory" => "Vodka","price" => "38.25","volume" => "750","alcohol_content" => "30.0","price_index" => "0.17","country" => "Canada","url" => "https://www.lcbo.com/en/beattie-s-farm-crafted-strawberry-flavoured-vodka-11455"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ardmore Legacy","brand" => "Ardmore","category" => "Spirits","subcategory" => "Whisky","price" => "56.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.18983333333333335","country" => "United Kingdom","url" => "https://www.lcbo.com/en/ardmore-legacy-478230"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Appleton Estate V/X Signature Blend","brand" => "Appleton Estate","category" => "Spirits","subcategory" => "Rum","price" => "9.95","volume" => "200","alcohol_content" => "40.0","price_index" => "0.12437499999999999","country" => "Jamaica","url" => "https://www.lcbo.com/en/appleton-estate-v-x-signature-blend-619775"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smirnoff Vodka","brand" => "Smirnoff","category" => "Spirits","subcategory" => "Vodka","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-vodka-67"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Stoli Gold Vodka","brand" => "Stolichnaya","category" => "Spirits","subcategory" => "Vodka","price" => "34.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1165","country" => "Latvia","url" => "https://www.lcbo.com/en/stolichnaya-gold-vodka-557827"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tanqueray Malacca Gin","brand" => "Tanqueray Gin","category" => "Spirits","subcategory" => "Gin","price" => "33.35","volume" => "700","alcohol_content" => "41.0","price_index" => "0.1162020905923345","country" => "United Kingdom","url" => "https://www.lcbo.com/en/tanqueray-malacca-gin-570093"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lagavulin 16 Year Old Islay Single Malt Scotch Whisky","brand" => "Lagavulin","category" => "Spirits","subcategory" => "Whisky","price" => "165.2","volume" => "750","alcohol_content" => "42.9","price_index" => "0.5134421134421134","country" => "United Kingdom","url" => "https://www.lcbo.com/en/lagavulin-16-year-old-islay-single-malt-scotch-whisky-207126"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Fernet-Branca Amer/Bitters","brand" => "Fernet-Branca","category" => "Spirits","subcategory" => "Liqueur","price" => "25.1","volume" => "500","alcohol_content" => "40.0","price_index" => "0.1255","country" => "Italy","url" => "https://www.lcbo.com/en/fernet-branca-amer-bitters-220145"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenmorangie Lasanta Extra Matured Highland Single Malt Scotch Whisky","brand" => "Glenmorangie","category" => "Spirits","subcategory" => "Whisky","price" => "95.85","volume" => "750","alcohol_content" => "46.0","price_index" => "0.2778260869565217","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenmorangie-lasanta-extra-matured-highland-single-malt-scotch-whisky-241943"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Evan Williams Kentucky Straight Bourbon","brand" => "Evan Williams","category" => "Spirits","subcategory" => "Whisky","price" => "28.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.08976744186046512","country" => "United States","url" => "https://www.lcbo.com/en/evan-williams-kentucky-straight-bourbon-405845"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Chum Churum Grape","brand" => "Chum Churum","category" => "Spirits","subcategory" => "Soju","price" => "10.05","volume" => "360","alcohol_content" => "12.0","price_index" => "0.23263888888888892","country" => "South Korea","url" => "https://www.lcbo.com/en/chum-churum-grape-17229"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Johnnie Walker Black Label 12 Years Old Scotch Whisky","brand" => "Johnnie Walker","category" => "Spirits","subcategory" => "Whisky","price" => "30.95","volume" => "375","alcohol_content" => "40.0","price_index" => "0.20633333333333334","country" => "United Kingdom","url" => "https://www.lcbo.com/en/johnnie-walker-black-label-12-years-old-scotch-whisky-187047"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Pitu Cachaca","brand" => "Pitu Cachaca","category" => "Spirits","subcategory" => "Rum","price" => "30.65","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10216666666666666","country" => "Brazil","url" => "https://www.lcbo.com/en/pitu-cachaca-600833"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dalmore Port Wood","brand" => "Dalmore","category" => "Spirits","subcategory" => "Whisky","price" => "130.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.43399999999999994","country" => "United Kingdom","url" => "https://www.lcbo.com/en/dalmore-port-wood-578401"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jose Cuervo Reserva De La Familia Platino","brand" => "Jose Cuervo","category" => "Spirits","subcategory" => "Tequila","price" => "99.95","volume" => "750","alcohol_content" => "39.84","price_index" => "0.33450468540829986","country" => "Mexico","url" => "https://www.lcbo.com/en/jose-cuervo-reserva-de-la-familia-platino-11845"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ciroc Red Berry","brand" => "Ciroc","category" => "Spirits","subcategory" => "Vodka","price" => "50.95","volume" => "750","alcohol_content" => "35.0","price_index" => "0.1940952380952381","country" => "France","url" => "https://www.lcbo.com/en/ciroc-red-berry-334128"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dalmore Cigar Malt Reserve Highland Single Malt Scotch Whisky","brand" => "Dalmore","category" => "Spirits","subcategory" => "Whisky","price" => "199.95","volume" => "750","alcohol_content" => "44.0","price_index" => "0.6059090909090908","country" => "United Kingdom","url" => "https://www.lcbo.com/en/dalmore-cigar-malt-reserve-highland-single-malt-scotch-whisky-534453"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gordon's Sicilian Lemon Gin","brand" => "Gordon's","category" => "Spirits","subcategory" => "Gin","price" => "30.95","volume" => "750","alcohol_content" => "37.5","price_index" => "0.11004444444444444","country" => "Canada","url" => "https://www.lcbo.com/en/gordon-s-sicilian-lemon-gin-19410"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wayne Gretzky Canadian Cream Whisky","brand" => "Wayne Gretzky","category" => "Spirits","subcategory" => "Liqueur","price" => "35.95","volume" => "750","alcohol_content" => "17.0","price_index" => "0.28196078431372545","country" => "Canada","url" => "https://www.lcbo.com/en/wayne-gretzky-canadian-cream-whisky-519298"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Courvoisier XO Cognac","brand" => "Courvoisier","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "269.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.8998333333333333","country" => "France","url" => "https://www.lcbo.com/en/courvoisier-xo-cognac-24494"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Teeling Single Malt Irish Whiskey","brand" => "Teeling","category" => "Spirits","subcategory" => "Whisky","price" => "89.95","volume" => "750","alcohol_content" => "46.0","price_index" => "0.26072463768115944","country" => "Ireland","url" => "https://www.lcbo.com/en/teeling-single-malt-irish-whiskey-644252"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Polar Ice Vodka","brand" => "Polar Ice Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/polar-ice-vodka-135566"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Alberta Pure Vodka (PET)","brand" => "Alberta Pure","category" => "Spirits","subcategory" => "Vodka","price" => "16.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.10733333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/alberta-pure-vodka-pet-1503"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grappa Sarpa Di Poli","brand" => "Poli","category" => "Spirits","subcategory" => "Grappa","price" => "43.95","volume" => "700","alcohol_content" => "40.0","price_index" => "0.15696428571428572","country" => "Italy","url" => "https://www.lcbo.com/en/grappa-sarpa-di-poli-982264"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Forty Creek Copper Pot Reserve Whisky (PET)","brand" => "Forty Creek","category" => "Spirits","subcategory" => "Whisky","price" => "68.95","volume" => "1750","alcohol_content" => "43.0","price_index" => "0.0916279069767442","country" => "Canada","url" => "https://www.lcbo.com/en/forty-creek-copper-pot-reserve-whisky-pet-397091"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Disaronno Originale Amaretto","brand" => "Disaronno","category" => "Spirits","subcategory" => "Liqueur","price" => "19.55","volume" => "375","alcohol_content" => "28.0","price_index" => "0.18619047619047618","country" => "Italy","url" => "https://www.lcbo.com/en/disaronno-originale-amaretto-31864"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lot No.40 Dark Oak Canadian Whisky","brand" => "Lot No. 40","category" => "Spirits","subcategory" => "Whisky","price" => "62.95","volume" => "750","alcohol_content" => "48.0","price_index" => "0.1748611111111111","country" => "Canada","url" => "https://www.lcbo.com/en/lot-no-40-dark-oak-canadian-whisky-19563"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Glenlivet Founder's Reserve Scotch Whisky","brand" => "The Glenlivet","category" => "Spirits","subcategory" => "Whisky","price" => "122.55","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.17507142857142857","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-glenlivet-founder-s-reserve-scotch-whisky-561050"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Georgian Bay Vodka","brand" => "Georgian Bay","category" => "Spirits","subcategory" => "Vodka","price" => "34.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1165","country" => "Canada","url" => "https://www.lcbo.com/en/georgian-bay-vodka-446559"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Captain Morgan Original Spiced Rum","brand" => "Captain Morgan","category" => "Spirits","subcategory" => "Rum","price" => "31.45","volume" => "750","alcohol_content" => "35.0","price_index" => "0.11980952380952381","country" => "NULL","url" => "https://www.lcbo.com/en/captain-morgan-original-spiced-rum-500512"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Two Stacks The First Cut","brand" => "TWO STACKS IRISH WHISKEY","category" => "Spirits","subcategory" => "Whisky","price" => "49.95","volume" => "700","alcohol_content" => "43.0","price_index" => "0.1659468438538206","country" => "Ireland","url" => "https://www.lcbo.com/en/two-stacks-the-first-cut-22746"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Redbreast 12 Year Old Irish Whiskey","brand" => "Redbreast Whiskey","category" => "Spirits","subcategory" => "Whisky","price" => "83.3","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2776666666666667","country" => "Ireland","url" => "https://www.lcbo.com/en/redbreast-12-year-old-irish-whiskey-636845"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grant's Triple Wood 12 Year Old","brand" => "Grant's","category" => "Spirits","subcategory" => "Whisky","price" => "60.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2006666666666667","country" => "United Kingdom","url" => "https://www.lcbo.com/en/grant-s-triple-wood-12-year-old-22192"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Malibu Coconut Rum Liqueur (PET)","brand" => "Malibu","category" => "Spirits","subcategory" => "Liqueur","price" => "13.95","volume" => "375","alcohol_content" => "21.0","price_index" => "0.17714285714285713","country" => "Canada","url" => "https://www.lcbo.com/en/malibu-coconut-rum-liqueur-pet-601765"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hpnotiq Liquor","brand" => "Hpnotiq","category" => "Spirits","subcategory" => "Liqueur","price" => "35.95","volume" => "750","alcohol_content" => "17.0","price_index" => "0.28196078431372545","country" => "France","url" => "https://www.lcbo.com/en/hpnotiq-liquor-600981"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Barchef Project Late Harvest Vesper","brand" => "Barchef Project","category" => "Spirits","subcategory" => "Gin","price" => "26.95","volume" => "375","alcohol_content" => "36.0","price_index" => "0.19962962962962963","country" => "Canada","url" => "https://www.lcbo.com/en/barchef-project-late-harvest-vesper-16861"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Prince Igor Extreme Vodka (PET)","brand" => "Prince Igor Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "44.25","volume" => "1140","alcohol_content" => "45.0","price_index" => "0.08625730994152046","country" => "Canada","url" => "https://www.lcbo.com/en/prince-igor-extreme-vodka-pet-34579"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wayne Gretzky Maple Cask Finish Canadian Whisky","brand" => "Wayne Gretzky","category" => "Spirits","subcategory" => "Whisky","price" => "35.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11983333333333335","country" => "Canada","url" => "https://www.lcbo.com/en/wayne-gretzky-maple-cask-finish-canadian-whisky-17885"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jose Cuervo Especial Silver Tequila","brand" => "Jose Cuervo","category" => "Spirits","subcategory" => "Tequila","price" => "36.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12066666666666667","country" => "Mexico","url" => "https://www.lcbo.com/en/jose-cuervo-especial-silver-tequila-174466"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Balvenie 12 Year Old Doublewood Scotch Whisky","brand" => "The Balvenie","category" => "Spirits","subcategory" => "Whisky","price" => "120.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.40066666666666667","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-balvenie-12-year-old-doublewood-scotch-whisky-387316"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Old Forester","brand" => "Old Forester","category" => "Spirits","subcategory" => "Whisky","price" => "34.25","volume" => "750","alcohol_content" => "43.0","price_index" => "0.1062015503875969","country" => "United States","url" => "https://www.lcbo.com/en/old-forester-426148"
            ]);
            DB::table('alcohols')->insert([
            "title" => "El Dorado 5 Year Old Rum","brand" => "El Dorado","category" => "Spirits","subcategory" => "Rum","price" => "30.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10066666666666667","country" => "Guyana","url" => "https://www.lcbo.com/en/el-dorado-5-year-old-rum-894014"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mike's HARDest Blue Freeze Vodka","brand" => "Mike's","category" => "Spirits","subcategory" => "Vodka","price" => "30.45","volume" => "750","alcohol_content" => "30.0","price_index" => "0.13533333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/mike-s-hardest-blue-freeze-vodka-21510"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jack Daniel's Tennessee Whisky","brand" => "Jack Daniel's","category" => "Spirits","subcategory" => "Whisky","price" => "10.05","volume" => "200","alcohol_content" => "40.0","price_index" => "0.12562500000000001","country" => "United States","url" => "https://www.lcbo.com/en/jack-daniel-s-tennessee-whisky-16788"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Skyy Vodka 1140mL","brand" => "Skyy","category" => "Spirits","subcategory" => "Vodka","price" => "44.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09703947368421052","country" => "Canada","url" => "https://www.lcbo.com/en/skyy-vodka-1140ml-19535"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Junction 56 Distillery Vodka","brand" => "Junction 56","category" => "Spirits","subcategory" => "Vodka","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/junction-56-distillery-vodka-449173"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ungava Premium Gin","brand" => "Ungava","category" => "Spirits","subcategory" => "Gin","price" => "19.95","volume" => "375","alcohol_content" => "43.1","price_index" => "0.1234338747099768","country" => "Canada","url" => "https://www.lcbo.com/en/ungava-premium-gin-542969"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Raspberry Rum","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "29.95","volume" => "750","alcohol_content" => "35.0","price_index" => "0.1140952380952381","country" => "Canada","url" => "https://www.lcbo.com/en/bacardi-raspberry-rum-498386"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Black Rum","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "44.45","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09747807017543861","country" => "Puerto Rico","url" => "https://www.lcbo.com/en/bacardi-black-rum-520270"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Madison Park Breakfast Gin","brand" => "Madison Park Gin","category" => "Spirits","subcategory" => "Gin","price" => "50.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.16733333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/madison-park-breakfast-gin-19416"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wiser's Special Blend Whisky (PET)","brand" => "J.P. Wiser's","category" => "Spirits","subcategory" => "Whisky","price" => "64.6","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09228571428571428","country" => "Canada","url" => "https://www.lcbo.com/en/wiser-s-special-blend-whisky-pet-112672"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Diplomatico Mantuano","brand" => "Diplomatico","category" => "Spirits","subcategory" => "Rum","price" => "44.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.14733333333333334","country" => "Venezuela","url" => "https://www.lcbo.com/en/diplomatico-mantuano-590463"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bosco Anice","brand" => "Bosco Anice","category" => "Spirits","subcategory" => "Liqueur","price" => "23.75","volume" => "750","alcohol_content" => "42.0","price_index" => "0.07539682539682539","country" => "Italy","url" => "https://www.lcbo.com/en/bosco-anice-35659"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tullamore DEW Irish Whiskey","brand" => "Tullamore Dew","category" => "Spirits","subcategory" => "Whisky","price" => "38.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12733333333333335","country" => "Ireland","url" => "https://www.lcbo.com/en/tullamore-dew-irish-whiskey-71746"
            ]);
            DB::table('alcohols')->insert([
            "title" => "J.P. Wiser's Deluxe Whisky","brand" => "J.P. Wiser's","category" => "Spirits","subcategory" => "Whisky","price" => "9.25","volume" => "200","alcohol_content" => "40.0","price_index" => "0.115625","country" => "Canada","url" => "https://www.lcbo.com/en/j-p-wiser-s-deluxe-whisky-413716"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Canadian Club 100% Rye Whisky","brand" => "Canadian Club","category" => "Spirits","subcategory" => "Whisky","price" => "44.75","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.0981359649122807","country" => "Canada","url" => "https://www.lcbo.com/en/canadian-club-100-rye-whisky-438960"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Icebox Long Island Iced Tea (PET)","brand" => "Icebox","category" => "Spirits","subcategory" => "Liqueur","price" => "30.45","volume" => "1140","alcohol_content" => "38.0","price_index" => "0.07029085872576177","country" => "Canada","url" => "https://www.lcbo.com/en/icebox-long-island-iced-tea-pet-237792"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Roku Gin","brand" => "Roku Gin","category" => "Spirits","subcategory" => "Gin","price" => "49.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.15488372093023256","country" => "Japan","url" => "https://www.lcbo.com/en/roku-gin-636209"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dejado Tequila Blanco 100% Agave","brand" => "Dejado","category" => "Spirits","subcategory" => "Tequila","price" => "50.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.16733333333333333","country" => "Mexico","url" => "https://www.lcbo.com/en/dejado-tequila-blanco-100-agave-19441"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Southern Comfort","brand" => "Southern Comfort","category" => "Spirits","subcategory" => "Liqueur","price" => "27.95","volume" => "750","alcohol_content" => "35.0","price_index" => "0.10647619047619047","country" => "Canada","url" => "https://www.lcbo.com/en/southern-comfort-491811"
            ]);
            DB::table('alcohols')->insert([
            "title" => "D'Usse VSOP 375ml","brand" => "D'Uss�","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "52.95","volume" => "375","alcohol_content" => "40.0","price_index" => "0.35300000000000004","country" => "France","url" => "https://www.lcbo.com/en/d-usse-vsop-375ml-18919"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Vodkow","brand" => "Vodkow","category" => "Spirits","subcategory" => "Vodka","price" => "33.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11066666666666668","country" => "Canada","url" => "https://www.lcbo.com/en/vodkow-11573"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Aultmore 12 Year Old Speyside Single Malt Scotch Whisky","brand" => "Aultmore","category" => "Spirits","subcategory" => "Whisky","price" => "80.25","volume" => "750","alcohol_content" => "46.0","price_index" => "0.2326086956521739","country" => "United Kingdom","url" => "https://www.lcbo.com/en/aultmore-12-year-old-speyside-single-malt-scotch-whisky-417840"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Captain Morgan Cherry Vanilla Twist","brand" => "Captain Morgan","category" => "Spirits","subcategory" => "Rum","price" => "31.95","volume" => "750","alcohol_content" => "30.0","price_index" => "0.142","country" => "Canada","url" => "https://www.lcbo.com/en/captain-morgan-cherry-vanilla-twist-24443"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Banff Ice Vodka (PET)","brand" => "Banff Ice","category" => "Spirits","subcategory" => "Vodka","price" => "16.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.10733333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/banff-ice-vodka-pet-368241"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Superior White Rum (PET)","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "44.45","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09747807017543861","country" => "Puerto Rico","url" => "https://www.lcbo.com/en/bacardi-superior-white-rum-pet-334151"
            ]);
            DB::table('alcohols')->insert([
            "title" => "1800 Reposado Tequila","brand" => "1800 Tequila","category" => "Spirits","subcategory" => "Tequila","price" => "41.7","volume" => "750","alcohol_content" => "40.0","price_index" => "0.139","country" => "Mexico","url" => "https://www.lcbo.com/en/1800-reposado-tequila-398479"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grand Marnier Cordon Rouge","brand" => "Grand Marnier","category" => "Spirits","subcategory" => "Liqueur","price" => "16.05","volume" => "200","alcohol_content" => "40.0","price_index" => "0.200625","country" => "France","url" => "https://www.lcbo.com/en/grand-marnier-cordon-rouge-228031"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bell's Original Scotch Whisky","brand" => "Bell's","category" => "Spirits","subcategory" => "Whisky","price" => "29.0","volume" => "750","alcohol_content" => "39.9","price_index" => "0.09690893901420217","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bell-s-original-scotch-whisky-8599"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Southern Comfort","brand" => "Southern Comfort","category" => "Spirits","subcategory" => "Liqueur","price" => "39.95","volume" => "1140","alcohol_content" => "35.0","price_index" => "0.10012531328320803","country" => "Canada","url" => "https://www.lcbo.com/en/southern-comfort-491829"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Junction 56 Black Raspberry Gin","brand" => "Junction 56","category" => "Spirits","subcategory" => "Gin","price" => "19.95","volume" => "375","alcohol_content" => "33.4","price_index" => "0.15928143712574852","country" => "Canada","url" => "https://www.lcbo.com/en/junction-56-black-raspberry-gin-570481"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bisquit & Dubouch� VSOP Cognac","brand" => "Bisquit & Dubouch�","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "99.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.33316666666666667","country" => "France","url" => "https://www.lcbo.com/en/bisquit-dubouch-c-vsop-cognac-17477"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Maker's Mark Kentucky Bourbon","brand" => "Maker's Mark","category" => "Spirits","subcategory" => "Whisky","price" => "43.45","volume" => "750","alcohol_content" => "45.0","price_index" => "0.12874074074074074","country" => "United States","url" => "https://www.lcbo.com/en/maker-s-mark-kentucky-bourbon-103747"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crystal Head Pride Edition","brand" => "Crystal Head","category" => "Spirits","subcategory" => "Vodka","price" => "61.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.20650000000000002","country" => "Canada","url" => "https://www.lcbo.com/en/crystal-head-pride-edition-16249"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Absolut Juice Strawberry Edition","brand" => "Absolut","category" => "Spirits","subcategory" => "Vodka","price" => "33.2","volume" => "750","alcohol_content" => "35.0","price_index" => "0.1264761904761905","country" => "Sweden","url" => "https://www.lcbo.com/en/absolut-juice-strawberry-edition-13188"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Alberta Premium Whisky (PET)","brand" => "Alberta Premium","category" => "Spirits","subcategory" => "Whisky","price" => "9.1","volume" => "200","alcohol_content" => "40.0","price_index" => "0.11374999999999999","country" => "Canada","url" => "https://www.lcbo.com/en/alberta-premium-whisky-pet-245944"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hendrick's Orbium Gin","brand" => "Hendrick's","category" => "Spirits","subcategory" => "Gin","price" => "60.25","volume" => "750","alcohol_content" => "43.4","price_index" => "0.18509984639016897","country" => "United Kingdom","url" => "https://www.lcbo.com/en/hendrick-s-orbium-gin-573931"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Elora Distilling Cr�me de Cassis","brand" => "Elora","category" => "Spirits","subcategory" => "Liqueur","price" => "28.95","volume" => "500","alcohol_content" => "15.0","price_index" => "0.386","country" => "Canada","url" => "https://www.lcbo.com/en/elora-distilling-creme-de-cassis-25560"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gibson's Finest Sterling Edition Whisky","brand" => "Gibson's Finest","category" => "Spirits","subcategory" => "Whisky","price" => "68.95","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.0985","country" => "Canada","url" => "https://www.lcbo.com/en/gibson-s-finest-sterling-edition-whisky-215038"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hendrick's Neptunia","brand" => "Hendrick's","category" => "Spirits","subcategory" => "Gin","price" => "59.95","volume" => "750","alcohol_content" => "43.4","price_index" => "0.18417818740399386","country" => "United Kingdom","url" => "https://www.lcbo.com/en/hendrick-s-neptunia-22449"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bombay Sapphire London Dry Gin","brand" => "Bombay Sapphire","category" => "Spirits","subcategory" => "Gin","price" => "17.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.114","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bombay-sapphire-london-dry-gin-637058"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wolfhead Coffee Whisky Liqueur","brand" => "Wolfhead","category" => "Spirits","subcategory" => "Liqueur","price" => "35.6","volume" => "750","alcohol_content" => "30.0","price_index" => "0.15822222222222224","country" => "Canada","url" => "https://www.lcbo.com/en/wolfhead-coffee-whisky-liqueur-669408"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dillon's Rye Whisky","brand" => "Dillon's","category" => "Spirits","subcategory" => "Whisky","price" => "49.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.15488372093023256","country" => "Canada","url" => "https://www.lcbo.com/en/dillon-s-rye-whisky-14915"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Havana Club Anejo Reserva","brand" => "Havana Club","category" => "Spirits","subcategory" => "Rum","price" => "44.75","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.0981359649122807","country" => "Cuba","url" => "https://www.lcbo.com/en/havana-club-anejo-reserva-217422"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smirnoff Lime Flavoured Vodka","brand" => "Smirnoff","category" => "Spirits","subcategory" => "Vodka","price" => "29.75","volume" => "750","alcohol_content" => "35.0","price_index" => "0.11333333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-lime-flavoured-vodka-381970"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Captain Morgan Gold Rum","brand" => "Captain Morgan","category" => "Spirits","subcategory" => "Rum","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "NULL","url" => "https://www.lcbo.com/en/captain-morgan-gold-rum-4788"
            ]);
            DB::table('alcohols')->insert([
            "title" => "On The Rocks Knob Creek Old Fashioned","brand" => "ON THE ROCKS","category" => "Spirits","subcategory" => "Premixed Cocktails","price" => "22.95","volume" => "375","alcohol_content" => "35.0","price_index" => "0.17485714285714285","country" => "United States","url" => "https://www.lcbo.com/en/on-the-rocks-knob-creek-old-fashioned-26679"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Canadian Club Whisky","brand" => "Canadian Club","category" => "Spirits","subcategory" => "Whisky","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/canadian-club-whisky-42"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bell's Original Scotch Whisky","brand" => "Bell's","category" => "Spirits","subcategory" => "Whisky","price" => "43.6","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.0956140350877193","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bell-s-original-scotch-whisky-217042"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Kraken Black Spiced Rum","brand" => "The Kraken","category" => "Spirits","subcategory" => "Rum","price" => "19.25","volume" => "375","alcohol_content" => "47.0","price_index" => "0.10921985815602837","country" => "Trinidad & Tobago","url" => "https://www.lcbo.com/en/the-kraken-black-spiced-rum-366534"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Flyte Vodka","brand" => "Flyte","category" => "Spirits","subcategory" => "Vodka","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/flyte-vodka-229732"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Four Roses Single Barrel Bourbon","brand" => "Four Roses","category" => "Spirits","subcategory" => "Whisky","price" => "54.7","volume" => "750","alcohol_content" => "50.0","price_index" => "0.14586666666666667","country" => "United States","url" => "https://www.lcbo.com/en/four-roses-single-barrel-bourbon-266072"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jameson Caskmates Stout Irish Whiskey","brand" => "Jameson","category" => "Spirits","subcategory" => "Whisky","price" => "40.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.134","country" => "Ireland","url" => "https://www.lcbo.com/en/jameson-caskmates-stout-irish-whiskey-429258"
            ]);
            DB::table('alcohols')->insert([
            "title" => "J.P. Wiser's Deluxe Whisky","brand" => "J.P. Wiser's","category" => "Spirits","subcategory" => "Whisky","price" => "139.95","volume" => "3000","alcohol_content" => "40.0","price_index" => "0.11662499999999999","country" => "Canada","url" => "https://www.lcbo.com/en/j-p-wiser-s-deluxe-whisky-602730"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Malibu Coconut Rum Liqueur (PET)","brand" => "Malibu","category" => "Spirits","subcategory" => "Liqueur","price" => "8.95","volume" => "200","alcohol_content" => "21.0","price_index" => "0.2130952380952381","country" => "Canada","url" => "https://www.lcbo.com/en/malibu-coconut-rum-liqueur-pet-648014"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Patron Silver","brand" => "Patron","category" => "Spirits","subcategory" => "Tequila","price" => "27.05","volume" => "200","alcohol_content" => "40.0","price_index" => "0.338125","country" => "Mexico","url" => "https://www.lcbo.com/en/patron-silver-579839"
            ]);
            DB::table('alcohols')->insert([
            "title" => "J.P. Wiser's Deluxe Whisky","brand" => "J.P. Wiser's","category" => "Spirits","subcategory" => "Whisky","price" => "30.5","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10166666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/j-p-wiser-s-deluxe-whisky-893"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Forty Creek Nanaimo Bar Cream","brand" => "Forty Creek","category" => "Spirits","subcategory" => "Liqueur","price" => "30.95","volume" => "750","alcohol_content" => "15.0","price_index" => "0.2751111111111111","country" => "Canada","url" => "https://www.lcbo.com/en/forty-creek-nanaimo-bar-cream-18426"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bruichladdich The Botanist Islay Dry Gin","brand" => "The Botanist","category" => "Spirits","subcategory" => "Gin","price" => "55.35","volume" => "750","alcohol_content" => "46.0","price_index" => "0.16043478260869565","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bruichladdich-the-botanist-islay-dry-gin-358192"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ciroc Coconut","brand" => "Ciroc","category" => "Spirits","subcategory" => "Vodka","price" => "50.95","volume" => "750","alcohol_content" => "35.0","price_index" => "0.1940952380952381","country" => "France","url" => "https://www.lcbo.com/en/ciroc-coconut-381228"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Casamigos Reposado Tequila","brand" => "Casamigos","category" => "Spirits","subcategory" => "Tequila","price" => "50.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.334","country" => "Mexico","url" => "https://www.lcbo.com/en/casamigos-reposado-tequila-669002"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Forty Creek Confederation Oak Reserve Whisky","brand" => "Forty Creek","category" => "Spirits","subcategory" => "Whisky","price" => "69.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2331666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/forty-creek-confederation-oak-reserve-whisky-195651"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dillon's Gin 22 Unfiltered","brand" => "Dillon's","category" => "Spirits","subcategory" => "Gin","price" => "41.9","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13966666666666666","country" => "Canada","url" => "https://www.lcbo.com/en/dillon-s-gin-22-unfiltered-358556"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Iceberg Vodka (PET)","brand" => "Iceberg","category" => "Spirits","subcategory" => "Vodka","price" => "65.65","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09378571428571429","country" => "Canada","url" => "https://www.lcbo.com/en/iceberg-vodka-pet-544155"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Macallan 12 Year Old Double Cask","brand" => "The Macallan","category" => "Spirits","subcategory" => "Whisky","price" => "119.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.3998333333333333","country" => "United Kingdom","url" => "https://www.lcbo.com/en/macallan-12-year-old-double-cask-479980"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crown Royal Whisky","brand" => "Crown Royal","category" => "Spirits","subcategory" => "Whisky","price" => "18.25","volume" => "375","alcohol_content" => "40.0","price_index" => "0.12166666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/crown-royal-whisky-9043"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Finlandia Vodka","brand" => "Finlandia","category" => "Spirits","subcategory" => "Vodka","price" => "30.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10066666666666667","country" => "Finland","url" => "https://www.lcbo.com/en/finlandia-vodka-20362"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grand Orendain Reposado Tequila","brand" => "Grand Orendain","category" => "Spirits","subcategory" => "Tequila","price" => "80.55","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2685","country" => "Mexico","url" => "https://www.lcbo.com/en/grand-orendain-reposado-tequila-17556"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Auchentoshan American Oak Single Malt Scotch Whisky","brand" => "Auchentoshan","category" => "Spirits","subcategory" => "Whisky","price" => "59.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.19733333333333333","country" => "United Kingdom","url" => "https://www.lcbo.com/en/auchentoshan-american-oak-single-malt-scotch-whisky-395582"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cabot Trail Maple Cream","brand" => "Cabot Trail","category" => "Spirits","subcategory" => "Liqueur","price" => "30.95","volume" => "750","alcohol_content" => "15.0","price_index" => "0.2751111111111111","country" => "Canada","url" => "https://www.lcbo.com/en/cabot-trail-maple-cream-462424"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cardhu 12 Year Old Single Malt Scotch Whisky","brand" => "Cardhu","category" => "Spirits","subcategory" => "Whisky","price" => "89.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.29983333333333334","country" => "United Kingdom","url" => "https://www.lcbo.com/en/cardhu-12-year-old-single-malt-scotch-whisky-289496"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Citadelle Gin","brand" => "Citadelle","category" => "Spirits","subcategory" => "Gin","price" => "32.3","volume" => "750","alcohol_content" => "44.0","price_index" => "0.09787878787878787","country" => "France","url" => "https://www.lcbo.com/en/citadelle-gin-275248"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sheep Dog Peanut Butter Whiskey","brand" => "Sheep Dog","category" => "Spirits","subcategory" => "Whisky","price" => "29.2","volume" => "750","alcohol_content" => "35.0","price_index" => "0.11123809523809523","country" => "United States","url" => "https://www.lcbo.com/en/sheep-dog-peanut-butter-whiskey-21876"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Malfy Gin Con Rosa","brand" => "Malfy Gin","category" => "Spirits","subcategory" => "Gin","price" => "50.35","volume" => "750","alcohol_content" => "41.0","price_index" => "0.163739837398374","country" => "Italy","url" => "https://www.lcbo.com/en/malfy-gin-con-rosa-636068"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Zirkova One Ultra Premium Vodka","brand" => "Zirkova","category" => "Spirits","subcategory" => "Vodka","price" => "33.25","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11083333333333334","country" => "Ukraine","url" => "https://www.lcbo.com/en/zirkova-one-ultra-premium-vodka-638197"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Beatties Distillers Farm Crafted Potato Vodka","brand" => "Beattie's","category" => "Spirits","subcategory" => "Vodka","price" => "38.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12733333333333335","country" => "Canada","url" => "https://www.lcbo.com/en/beatties-distillers-farm-crafted-potato-vodka-446625"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Navip Slivovitz 5-Year-Old Plum Brandy","brand" => "Navip","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "30.25","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10083333333333333","country" => "Serbia","url" => "https://www.lcbo.com/en/navip-slivovitz-5-year-old-plum-brandy-600510"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Meukow Feline VSOP Cognac","brand" => "Meukow","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "85.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.28400000000000003","country" => "France","url" => "https://www.lcbo.com/en/meukow-feline-vsop-cognac-600551"
            ]);
            DB::table('alcohols')->insert([
            "title" => "818 Tequila Reposado","brand" => "818","category" => "Spirits","subcategory" => "Tequila","price" => "84.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2831666666666667","country" => "Mexico","url" => "https://www.lcbo.com/en/818-tequila-reposado-25137"
            ]);
            DB::table('alcohols')->insert([
            "title" => "El Dorado 3 Year Old Rum","brand" => "El Dorado","category" => "Spirits","subcategory" => "Rum","price" => "29.5","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09833333333333333","country" => "Guyana","url" => "https://www.lcbo.com/en/el-dorado-3-year-old-rum-402859"
            ]);
            DB::table('alcohols')->insert([
            "title" => "River's End Gin","brand" => "River'S End Spirits","category" => "Spirits","subcategory" => "Gin","price" => "36.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.11457364341085272","country" => "Canada","url" => "https://www.lcbo.com/en/river-s-end-gin-22139"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bushmills Black Bush Irish Whiskey","brand" => "Bushmills","category" => "Spirits","subcategory" => "Whisky","price" => "39.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13316666666666668","country" => "Ireland","url" => "https://www.lcbo.com/en/bushmills-black-bush-irish-whiskey-61374"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Alberta Premium Whisky (PET)","brand" => "Alberta Premium","category" => "Spirits","subcategory" => "Whisky","price" => "16.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.10733333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/alberta-premium-whisky-pet-3871"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dr. McGillicuddy's Intense Peach","brand" => "Dr. McGillicuddy","category" => "Spirits","subcategory" => "Liqueur","price" => "29.95","volume" => "1140","alcohol_content" => "21.0","price_index" => "0.1251044277360067","country" => "Canada","url" => "https://www.lcbo.com/en/dr-mcgillicuddy-s-intense-peach-398024"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Amrut Fusion Single Malt Whisky","brand" => "Amrut","category" => "Spirits","subcategory" => "Whisky","price" => "82.15","volume" => "700","alcohol_content" => "50.0","price_index" => "0.23471428571428574","country" => "India","url" => "https://www.lcbo.com/en/amrut-fusion-single-malt-whisky-220756"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Murphy's Law Apple Pie Moonshine","brand" => "Murphy's Law","category" => "Spirits","subcategory" => "Whisky","price" => "30.65","volume" => "750","alcohol_content" => "22.0","price_index" => "0.18575757575757576","country" => "Canada","url" => "https://www.lcbo.com/en/murphy-s-law-apple-pie-moonshine-465419"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lamb's Navy Rum (PET)","brand" => "Lamb's","category" => "Spirits","subcategory" => "Rum","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "Canada","url" => "https://www.lcbo.com/en/lamb-s-navy-rum-pet-240135"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Southern Comfort (PET)","brand" => "Southern Comfort","category" => "Spirits","subcategory" => "Liqueur","price" => "13.95","volume" => "375","alcohol_content" => "35.0","price_index" => "0.10628571428571428","country" => "Canada","url" => "https://www.lcbo.com/en/southern-comfort-pet-491803"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grant's Triple Wood Blended Scotch Whisky","brand" => "Grant's","category" => "Spirits","subcategory" => "Whisky","price" => "73.55","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.10507142857142857","country" => "United Kingdom","url" => "https://www.lcbo.com/en/grant-s-triple-wood-blended-scotch-whisky-247056"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smirnoff Vodka","brand" => "Smirnoff","category" => "Spirits","subcategory" => "Vodka","price" => "116.95","volume" => "3000","alcohol_content" => "40.0","price_index" => "0.09745833333333334","country" => "United Kingdom","url" => "https://www.lcbo.com/en/smirnoff-vodka-27060"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Rabbit Hole Cavehill Bourbon Whiskey","brand" => "RABBIT HOLE WHISKEY","category" => "Spirits","subcategory" => "Whisky","price" => "74.95","volume" => "750","alcohol_content" => "47.5","price_index" => "0.2103859649122807","country" => "United States","url" => "https://www.lcbo.com/en/rabbit-hole-cavehill-bourbon-whiskey-24682"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Stoli Vodka","brand" => "Stolichnaya","category" => "Spirits","subcategory" => "Vodka","price" => "44.95","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09857456140350877","country" => "Latvia","url" => "https://www.lcbo.com/en/stolichnaya-vodka-225250"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Beefeater London Dry Gin","brand" => "Beefeater","category" => "Spirits","subcategory" => "Gin","price" => "17.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.114","country" => "United Kingdom","url" => "https://www.lcbo.com/en/beefeater-london-dry-gin-7369"
            ]);
            DB::table('alcohols')->insert([
            "title" => "J.P. Wiser's Old Fashioned Canadian Whisky Cocktail","brand" => "J.P. Wiser's","category" => "Spirits","subcategory" => "Premixed Cocktails","price" => "30.5","volume" => "750","alcohol_content" => "35.0","price_index" => "0.11619047619047619","country" => "Canada","url" => "https://www.lcbo.com/en/j-p-wiser-s-old-fashioned-canadian-whisky-cocktail-625996"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Manns White Tea Gin","brand" => "Manns","category" => "Spirits","subcategory" => "Gin","price" => "39.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13316666666666668","country" => "Canada","url" => "https://www.lcbo.com/en/manns-white-tea-gin-23819"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Newfoundland Screech Rum","brand" => "Newfoundland Screech","category" => "Spirits","subcategory" => "Rum","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/newfoundland-screech-rum-4622"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Canadian Vodka","brand" => "Canadian","category" => "Spirits","subcategory" => "Vodka","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/canadian-vodka-131698"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Lim�n Rum","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "29.95","volume" => "750","alcohol_content" => "35.0","price_index" => "0.1140952380952381","country" => "Puerto Rico","url" => "https://www.lcbo.com/en/bacardi-lim-n-rum-398552"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Georgian Bay Canadian Whisky","brand" => "Georgian Bay","category" => "Spirits","subcategory" => "Whisky","price" => "34.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1165","country" => "Canada","url" => "https://www.lcbo.com/en/georgian-bay-canadian-whisky-13909"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cointreau","brand" => "Cointreau","category" => "Spirits","subcategory" => "Liqueur","price" => "24.65","volume" => "375","alcohol_content" => "40.0","price_index" => "0.16433333333333333","country" => "France","url" => "https://www.lcbo.com/en/cointreau-10322"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Copperhead Spiced Rum","brand" => "Copperhead","category" => "Spirits","subcategory" => "Rum","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/copperhead-spiced-rum-12820"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Brugal Anejo","brand" => "Brugal","category" => "Spirits","subcategory" => "Rum","price" => "30.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10316666666666667","country" => "Dominican Republic","url" => "https://www.lcbo.com/en/brugal-anejo-225615"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sobieski Vodka","brand" => "Sobieski","category" => "Spirits","subcategory" => "Vodka","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "Poland","url" => "https://www.lcbo.com/en/sobieski-vodka-260869"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Prince Igor Extreme Vodka (PET)","brand" => "Prince Igor Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "16.6","volume" => "375","alcohol_content" => "45.0","price_index" => "0.09837037037037037","country" => "Canada","url" => "https://www.lcbo.com/en/prince-igor-extreme-vodka-pet-486217"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hendrick's Lunar Gin","brand" => "Hendrick's","category" => "Spirits","subcategory" => "Gin","price" => "59.2","volume" => "750","alcohol_content" => "43.4","price_index" => "0.18187403993855608","country" => "United Kingdom","url" => "https://www.lcbo.com/en/hendrick-s-lunar-gin-16094"
            ]);
            DB::table('alcohols')->insert([
            "title" => "British Navy Pusser's Rum","brand" => "Pussers Navy","category" => "Spirits","subcategory" => "Rum","price" => "40.8","volume" => "750","alcohol_content" => "42.0","price_index" => "0.1295238095238095","country" => "Barbados","url" => "https://www.lcbo.com/en/british-navy-pusser-s-rum-136754"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jameson Cold Brew Irish Whiskey","brand" => "Jameson","category" => "Spirits","subcategory" => "Liqueur","price" => "37.25","volume" => "750","alcohol_content" => "30.0","price_index" => "0.16555555555555557","country" => "Ireland","url" => "https://www.lcbo.com/en/jameson-cold-brew-irish-whiskey-17055"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Finlandia Vodka","brand" => "Finlandia","category" => "Spirits","subcategory" => "Vodka","price" => "16.6","volume" => "375","alcohol_content" => "40.2","price_index" => "0.11011608623548923","country" => "Finland","url" => "https://www.lcbo.com/en/finlandia-vodka-180570"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gibson's Finest Sterling Edition Whisky","brand" => "Gibson's Finest","category" => "Spirits","subcategory" => "Whisky","price" => "46.95","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.10296052631578947","country" => "Canada","url" => "https://www.lcbo.com/en/gibson-s-finest-sterling-edition-whisky-215889"
            ]);
            DB::table('alcohols')->insert([
            "title" => "On The Rocks Hornitos Margarita","brand" => "On The Rocks","category" => "Spirits","subcategory" => "Premixed Cocktails","price" => "22.95","volume" => "375","alcohol_content" => "20.0","price_index" => "0.306","country" => "United States","url" => "https://www.lcbo.com/en/on-the-rocks-hornitos-margarita-16546"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Canadian Club Classic 12 Year Old","brand" => "Canadian Club","category" => "Spirits","subcategory" => "Whisky","price" => "33.45","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11150000000000002","country" => "Canada","url" => "https://www.lcbo.com/en/canadian-club-classic-12-year-old-311928"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Maraska Stara Sljivovica","brand" => "Maraska","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "30.65","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10216666666666666","country" => "Croatia","url" => "https://www.lcbo.com/en/maraska-stara-sljivovica-233627"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Golden Wedding Whisky (PET)","brand" => "Golden Wedding","category" => "Spirits","subcategory" => "Whisky","price" => "64.6","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09228571428571428","country" => "Canada","url" => "https://www.lcbo.com/en/golden-wedding-whisky-pet-114934"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Batta Arak","brand" => "Batta","category" => "Spirits","subcategory" => "Liqueur","price" => "33.05","volume" => "700","alcohol_content" => "50.0","price_index" => "0.09442857142857142","country" => "Belgium","url" => "https://www.lcbo.com/en/batta-arak-17585"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Raynal VSOP French Brandy","brand" => "Raynal Brandy","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "45.35","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09945175438596492","country" => "France","url" => "https://www.lcbo.com/en/raynal-vsop-french-brandy-139659"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Drambuie","brand" => "Drambuie","category" => "Spirits","subcategory" => "Liqueur","price" => "50.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.16733333333333333","country" => "United Kingdom","url" => "https://www.lcbo.com/en/drambuie-1867"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Prince Igor Vodka (PET)","brand" => "Prince Igor Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "16.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.10733333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/prince-igor-vodka-pet-329342"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Marie Brizard Elderflower","brand" => "Marie Brizard","category" => "Spirits","subcategory" => "Liqueur","price" => "24.95","volume" => "750","alcohol_content" => "20.0","price_index" => "0.16633333333333333","country" => "France","url" => "https://www.lcbo.com/en/marie-brizard-elderflower-14402"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Beefeater Botanics Lemon & Ginger","brand" => "Beefeater Gin","category" => "Spirits","subcategory" => "Gin","price" => "28.2","volume" => "750","alcohol_content" => "27.5","price_index" => "0.1367272727272727","country" => "United Kingdom","url" => "https://www.lcbo.com/en/beefeater-botanics-lemon-ginger-18279"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gibson's Finest Sterling Edition Whisky","brand" => "Gibson's Finest","category" => "Spirits","subcategory" => "Whisky","price" => "31.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1065","country" => "Canada","url" => "https://www.lcbo.com/en/gibson-s-finest-sterling-edition-whisky-189217"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Iceberg Vodka","brand" => "Iceberg","category" => "Spirits","subcategory" => "Vodka","price" => "44.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09703947368421052","country" => "Canada","url" => "https://www.lcbo.com/en/iceberg-vodka-227413"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dr. McGillicuddy's Intense Butterscotch","brand" => "Dr. McGillicuddy","category" => "Spirits","subcategory" => "Liqueur","price" => "19.65","volume" => "750","alcohol_content" => "21.0","price_index" => "0.12476190476190475","country" => "Canada","url" => "https://www.lcbo.com/en/dr-mcgillicuddy-s-intense-butterscotch-398032"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crazy Monkey Vodka","brand" => "Crazy Monkey","category" => "Spirits","subcategory" => "Vodka","price" => "29.75","volume" => "750","alcohol_content" => "39.65","price_index" => "0.10004203446826397","country" => "Canada","url" => "https://www.lcbo.com/en/crazy-monkey-vodka-16863"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tanqueray Rangpur Gin","brand" => "Tanqueray","category" => "Spirits","subcategory" => "Gin","price" => "33.45","volume" => "750","alcohol_content" => "41.0","price_index" => "0.10878048780487806","country" => "United Kingdom","url" => "https://www.lcbo.com/en/tanqueray-rangpur-gin-358184"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Badel Hrvatska Stara Sljivovica","brand" => "Badel","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "35.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11916666666666667","country" => "Croatia","url" => "https://www.lcbo.com/en/badel-hrvatska-stara-sljivovica-460352"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tequila Rose Strawberry Cream","brand" => "Tequila Rose","category" => "Spirits","subcategory" => "Liqueur","price" => "42.1","volume" => "1140","alcohol_content" => "15.0","price_index" => "0.24619883040935672","country" => "United States","url" => "https://www.lcbo.com/en/tequila-rose-strawberry-cream-571901"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Black Rum","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "Puerto Rico","url" => "https://www.lcbo.com/en/bacardi-black-rum-520288"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Absolut Vodka","brand" => "Absolut","category" => "Spirits","subcategory" => "Vodka","price" => "30.45","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10149999999999999","country" => "Sweden","url" => "https://www.lcbo.com/en/absolut-vodka-110056"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Baron Otard VSOP Cognac","brand" => "Otard Vsop Cognac","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "90.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.3025","country" => "France","url" => "https://www.lcbo.com/en/baron-otard-vsop-cognac-36855"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Fireball Cinnamon Whisky","brand" => "Fireball","category" => "Spirits","subcategory" => "Liqueur","price" => "24.95","volume" => "750","alcohol_content" => "33.0","price_index" => "0.1008080808080808","country" => "Canada","url" => "https://www.lcbo.com/en/fireball-cinnamon-whisky-447953"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wisers Special Blend Whisky","brand" => "J.P. Wiser's","category" => "Spirits","subcategory" => "Whisky","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "Canada","url" => "https://www.lcbo.com/en/wisers-special-blend-whisky-216671"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Patron Anejo Tequila","brand" => "Patron","category" => "Spirits","subcategory" => "Tequila","price" => "101.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.3398333333333333","country" => "Mexico","url" => "https://www.lcbo.com/en/patron-anejo-tequila-34603"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Highland Park Viking Honour 12 Year Old Single Malt Scotch Whisky","brand" => "Highland Park","category" => "Spirits","subcategory" => "Whisky","price" => "85.25","volume" => "750","alcohol_content" => "43.0","price_index" => "0.26434108527131783","country" => "United Kingdom","url" => "https://www.lcbo.com/en/highland-park-viking-honour-12-year-old-single-malt-scotch-whisky-204560"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Canadian Club Whisky","brand" => "Canadian Club","category" => "Spirits","subcategory" => "Whisky","price" => "144.95","volume" => "3000","alcohol_content" => "40.0","price_index" => "0.12079166666666666","country" => "Canada","url" => "https://www.lcbo.com/en/canadian-club-whisky-288563"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wray & Nephew White Overproof Rum","brand" => "Wray & Nephew","category" => "Spirits","subcategory" => "Rum","price" => "22.2","volume" => "375","alcohol_content" => "63.0","price_index" => "0.09396825396825396","country" => "Jamaica","url" => "https://www.lcbo.com/en/wray-nephew-white-overproof-rum-366351"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Old Pulteney 12 Year Old Single Malt","brand" => "Old Pulteney","category" => "Spirits","subcategory" => "Whisky","price" => "76.3","volume" => "750","alcohol_content" => "40.17","price_index" => "0.2532569911210688","country" => "United Kingdom","url" => "https://www.lcbo.com/en/old-pulteney-12-year-old-single-malt-10177"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Chambord Royale","brand" => "Chambord","category" => "Spirits","subcategory" => "Liqueur","price" => "43.05","volume" => "750","alcohol_content" => "16.5","price_index" => "0.34787878787878784","country" => "France","url" => "https://www.lcbo.com/en/chambord-royale-111443"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Metaxa Seven Star Brandy","brand" => "Metaxa","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "36.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12066666666666667","country" => "Greece","url" => "https://www.lcbo.com/en/metaxa-seven-star-brandy-116038"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Goldschlager","brand" => "Goldschlager","category" => "Spirits","subcategory" => "Liqueur","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/goldschlager-16833"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Frangelico","brand" => "Frangelico","category" => "Spirits","subcategory" => "Liqueur","price" => "30.2","volume" => "750","alcohol_content" => "20.0","price_index" => "0.20133333333333334","country" => "Italy","url" => "https://www.lcbo.com/en/frangelico-169441"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Luxardo Sambuca Dei Cesari","brand" => "Luxardo","category" => "Spirits","subcategory" => "Liqueur","price" => "23.3","volume" => "750","alcohol_content" => "38.0","price_index" => "0.08175438596491229","country" => "Italy","url" => "https://www.lcbo.com/en/luxardo-sambuca-dei-cesari-40196"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smirnoff Vodka","brand" => "Smirnoff","category" => "Spirits","subcategory" => "Vodka","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-vodka-216929"
            ]);
            DB::table('alcohols')->insert([
            "title" => "McClelland's Highland Single Malt Scotch Whisky","brand" => "McClelland's","category" => "Spirits","subcategory" => "Whisky","price" => "49.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1665","country" => "United Kingdom","url" => "https://www.lcbo.com/en/mcclelland-s-highland-single-malt-scotch-whisky-259333"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gordon's Pink Gin","brand" => "Gordon's","category" => "Spirits","subcategory" => "Gin","price" => "30.95","volume" => "750","alcohol_content" => "37.5","price_index" => "0.11004444444444444","country" => "Canada","url" => "https://www.lcbo.com/en/gordon-s-pink-gin-636092"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Superior White Rum (PET)","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "65.95","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09421428571428572","country" => "Puerto Rico","url" => "https://www.lcbo.com/en/bacardi-superior-white-rum-pet-45898"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Forty Creek Barrel Select Whisky","brand" => "Forty Creek","category" => "Spirits","subcategory" => "Whisky","price" => "64.6","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09228571428571428","country" => "Canada","url" => "https://www.lcbo.com/en/forty-creek-barrel-select-whisky-8805"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ramazzotti Sambuca","brand" => "Ramazzotti","category" => "Spirits","subcategory" => "Liqueur","price" => "15.1","volume" => "375","alcohol_content" => "38.0","price_index" => "0.10596491228070175","country" => "Italy","url" => "https://www.lcbo.com/en/ramazzotti-sambuca-506279"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sour Puss Raspberry (PET)","brand" => "Sour Puss","category" => "Spirits","subcategory" => "Liqueur","price" => "31.45","volume" => "1140","alcohol_content" => "15.0","price_index" => "0.18391812865497076","country" => "United States","url" => "https://www.lcbo.com/en/sour-puss-raspberry-pet-609479"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Seagrams 83 Whisky (PET)","brand" => "Seagrams","category" => "Spirits","subcategory" => "Whisky","price" => "64.6","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09228571428571428","country" => "Canada","url" => "https://www.lcbo.com/en/seagrams-83-whisky-pet-231571"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lobos 1707 Tequila Reposado","brand" => "LOBOS","category" => "Spirits","subcategory" => "Tequila","price" => "84.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2831666666666667","country" => "Mexico","url" => "https://www.lcbo.com/en/lobos-1707-tequila-reposado-25141"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sailor Jerry Spiced Rum","brand" => "Sailor Jerry","category" => "Spirits","subcategory" => "Rum","price" => "17.95","volume" => "375","alcohol_content" => "46.0","price_index" => "0.10405797101449275","country" => "United States","url" => "https://www.lcbo.com/en/sailor-jerry-spiced-rum-342386"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jagermeister","brand" => "Jagermeister","category" => "Spirits","subcategory" => "Liqueur","price" => "62.8","volume" => "1750","alcohol_content" => "35.0","price_index" => "0.10253061224489796","country" => "Germany","url" => "https://www.lcbo.com/en/jagermeister-273326"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dixon's Silvercreek Vodka","brand" => "DIXON'S","category" => "Spirits","subcategory" => "Vodka","price" => "31.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1065","country" => "Canada","url" => "https://www.lcbo.com/en/dixon-s-silvercreek-vodka-27604"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Baileys Original Irish Cream","brand" => "Baileys","category" => "Spirits","subcategory" => "Liqueur","price" => "9.95","volume" => "200","alcohol_content" => "17.0","price_index" => "0.29264705882352937","country" => "Ireland","url" => "https://www.lcbo.com/en/baileys-original-irish-cream-393678"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Angostura 1919 8 Year Old Rum","brand" => "Angostura","category" => "Spirits","subcategory" => "Rum","price" => "50.3","volume" => "750","alcohol_content" => "40.0","price_index" => "0.16766666666666666","country" => "Trinidad & Tobago","url" => "https://www.lcbo.com/en/angostura-1919-8-year-old-rum-616409"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Torres Brandy 20 Year Old","brand" => "Torres","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "84.25","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2808333333333333","country" => "Spain","url" => "https://www.lcbo.com/en/torres-brandy-20-286740"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Absolut Rainbow Edition","brand" => "Absolut","category" => "Spirits","subcategory" => "Vodka","price" => "30.45","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10149999999999999","country" => "Sweden","url" => "https://www.lcbo.com/en/absolut-rainbow-edition-581256"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Johnnie Walker Red Label Scotch Whisky","brand" => "Johnnie Walker","category" => "Spirits","subcategory" => "Whisky","price" => "34.7","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11566666666666668","country" => "United Kingdom","url" => "https://www.lcbo.com/en/johnnie-walker-red-label-scotch-whisky-1099"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dalmore 12 Sherry Cask Select Single Malt Scotch Whisky","brand" => "Dalmore","category" => "Spirits","subcategory" => "Whisky","price" => "149.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.46496124031007746","country" => "United Kingdom","url" => "https://www.lcbo.com/en/dalmore-12-sherry-cask-select-single-malt-scotch-whisky-22696"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kamora Coffee Liquor","brand" => "Kamora","category" => "Spirits","subcategory" => "Liqueur","price" => "33.75","volume" => "1140","alcohol_content" => "20.0","price_index" => "0.14802631578947367","country" => "United States","url" => "https://www.lcbo.com/en/kamora-coffee-liquor-217588"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Prince Igor Extreme Vodka (PET)","brand" => "Prince Igor Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "29.75","volume" => "750","alcohol_content" => "45.0","price_index" => "0.08814814814814814","country" => "Canada","url" => "https://www.lcbo.com/en/prince-igor-extreme-vodka-pet-604926"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Nonino Quintessentia Amaro","brand" => "Nonino","category" => "Spirits","subcategory" => "Liqueur","price" => "46.95","volume" => "700","alcohol_content" => "35.0","price_index" => "0.1916326530612245","country" => "Italy","url" => "https://www.lcbo.com/en/nonino-quintessentia-amaro-933796"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Prince Igor Vodka (PET)","brand" => "Prince Igor Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/prince-igor-vodka-pet-8219"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ardbeg 10 Year Old Islay Scotch Whisky","brand" => "Ardbeg","category" => "Spirits","subcategory" => "Whisky","price" => "106.2","volume" => "750","alcohol_content" => "46.0","price_index" => "0.30782608695652175","country" => "United Kingdom","url" => "https://www.lcbo.com/en/ardbeg-10-year-old-islay-scotch-whisky-560474"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Silent Sam Vodka","brand" => "Silent Sam","category" => "Spirits","subcategory" => "Vodka","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "Canada","url" => "https://www.lcbo.com/en/silent-sam-vodka-254722"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Swish Gin","brand" => "Swish","category" => "Spirits","subcategory" => "Gin","price" => "37.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1265","country" => "Canada","url" => "https://www.lcbo.com/en/swish-gin-17932"
            ]);
            DB::table('alcohols')->insert([
            "title" => "El Dorado 8 Year Old Cask Aged Demerara Rum","brand" => "El Dorado","category" => "Spirits","subcategory" => "Rum","price" => "36.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12066666666666667","country" => "Guyana","url" => "https://www.lcbo.com/en/el-dorado-8-year-old-cask-aged-demerara-rum-366666"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crystal Head Onyx","brand" => "Crystal Head","category" => "Spirits","subcategory" => "Vodka","price" => "69.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2331666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/crystal-head-onyx-16178"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jose Cuervo Gold Tequila","brand" => "Jose Cuervo","category" => "Spirits","subcategory" => "Tequila","price" => "70.55","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.10078571428571428","country" => "Mexico","url" => "https://www.lcbo.com/en/jose-cuervo-gold-tequila-451195"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Captain Morgan White Rum (PET)","brand" => "Captain Morgan","category" => "Spirits","subcategory" => "Rum","price" => "64.6","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09228571428571428","country" => "NULL","url" => "https://www.lcbo.com/en/captain-morgan-white-rum-pet-133439"
            ]);
            DB::table('alcohols')->insert([
            "title" => "T� Bheag Scotch Whisky","brand" => "T� Bheag","category" => "Spirits","subcategory" => "Whisky","price" => "39.95","volume" => "700","alcohol_content" => "40.0","price_index" => "0.14267857142857143","country" => "United Kingdom","url" => "https://www.lcbo.com/en/t-c-bheag-scotch-whisky-949172"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smirnoff Vanilla Flavoured Vodka","brand" => "Smirnoff","category" => "Spirits","subcategory" => "Vodka","price" => "29.75","volume" => "750","alcohol_content" => "35.0","price_index" => "0.11333333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-vanilla-flavoured-vodka-382028"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Warheads Blue Raspberry","brand" => "Warheads","category" => "Spirits","subcategory" => "Liqueur","price" => "15.05","volume" => "375","alcohol_content" => "20.0","price_index" => "0.2006666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/warheads-blue-raspberry-22492"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Seagrams V.O. Whisky","brand" => "Seagrams","category" => "Spirits","subcategory" => "Whisky","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "Canada","url" => "https://www.lcbo.com/en/seagrams-v-o-whisky-216978"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Top Shelf Cream Puff Liquor","brand" => "Top Shelf","category" => "Spirits","subcategory" => "Liqueur","price" => "22.95","volume" => "375","alcohol_content" => "17.0","price_index" => "0.35999999999999993","country" => "Canada","url" => "https://www.lcbo.com/en/top-shelf-cream-puff-liquor-26549"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dewar's White Label","brand" => "Dewar's","category" => "Spirits","subcategory" => "Whisky","price" => "64.6","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09228571428571428","country" => "United Kingdom","url" => "https://www.lcbo.com/en/dewar-s-white-label-20782"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Stoli Vodka","brand" => "Stolichnaya","category" => "Spirits","subcategory" => "Vodka","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "Latvia","url" => "https://www.lcbo.com/en/stolichnaya-vodka-225243"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grey Goose Le Citron Vodka","brand" => "Grey Goose","category" => "Spirits","subcategory" => "Vodka","price" => "49.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1665","country" => "France","url" => "https://www.lcbo.com/en/grey-goose-le-citron-vodka-413294"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Baileys Salted Caramel","brand" => "Baileys","category" => "Spirits","subcategory" => "Liqueur","price" => "32.05","volume" => "750","alcohol_content" => "17.0","price_index" => "0.2513725490196078","country" => "Ireland","url" => "https://www.lcbo.com/en/baileys-salted-caramel-400259"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Captain Morgan Bold Spiced Rum","brand" => "Captain Morgan","category" => "Spirits","subcategory" => "Rum","price" => "31.95","volume" => "750","alcohol_content" => "50.0","price_index" => "0.0852","country" => "Canada","url" => "https://www.lcbo.com/en/captain-morgan-bold-spiced-rum-454686"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Macallan M Highland Single Malt Scotch Whisky","brand" => "Macallan Distillers","category" => "Spirits","subcategory" => "Whisky","price" => "8000.0","volume" => "750","alcohol_content" => "45.0","price_index" => "23.703703703703702","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-macallan-m-highland-single-malt-scotch-whisky-24762"
            ]);
            DB::table('alcohols')->insert([
            "title" => "McGuinness Elderflower","brand" => "McGuinness","category" => "Spirits","subcategory" => "Liqueur","price" => "23.95","volume" => "750","alcohol_content" => "15.0","price_index" => "0.21288888888888888","country" => "Canada","url" => "https://www.lcbo.com/en/mcguinness-elderflower-21556"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wyborowa Vodka + FREE Mule mugs, mix & game","brand" => "Wyborowa Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "44.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09703947368421052","country" => "Poland","url" => "https://www.lcbo.com/en/wyborowa-vodka-free-mule-mugs-mix-game-27195"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Doragrossa Menta di Pancalieri","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "52.05","volume" => "700","alcohol_content" => "24.0","price_index" => "0.3098214285714286","country" => "Italy","url" => "https://www.lcbo.com/en/doragrossa-menta-di-pancalieri-937465"
            ]);
            DB::table('alcohols')->insert([
            "title" => "West Cork Single Malt Rum Cask Finish","brand" => "West Work","category" => "Spirits","subcategory" => "Whisky","price" => "58.4","volume" => "700","alcohol_content" => "43.0","price_index" => "0.19401993355481728","country" => "Ireland","url" => "https://www.lcbo.com/en/west-cork-single-malt-rum-cask-finish-22667"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Levenswater Spring 34 Gin","brand" => "Levenswater","category" => "Spirits","subcategory" => "Gin","price" => "52.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.17650000000000002","country" => "Canada","url" => "https://www.lcbo.com/en/levenswater-spring-34-gin-645697"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Martell Blue Swift Cognac","brand" => "Martell","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "100.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.334","country" => "France","url" => "https://www.lcbo.com/en/martell-blue-swift-cognac-542878"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hayman's London Dry Gin","brand" => "Hayman's","category" => "Spirits","subcategory" => "Gin","price" => "38.25","volume" => "750","alcohol_content" => "41.2","price_index" => "0.12378640776699029","country" => "United Kingdom","url" => "https://www.lcbo.com/en/hayman-s-london-dry-gin-617233"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Templeton 6 Year Old Straight Rye Whiskey","brand" => "Templeton","category" => "Spirits","subcategory" => "Whisky","price" => "54.9","volume" => "750","alcohol_content" => "45.75","price_index" => "0.16","country" => "United States","url" => "https://www.lcbo.com/en/templeton-6-year-old-straight-rye-whiskey-10673"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Manns Small Batch Vodka","brand" => "Manns","category" => "Spirits","subcategory" => "Vodka","price" => "29.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09916666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/manns-small-batch-vodka-23821"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tequila Tromba Anejo","brand" => "Tromba","category" => "Spirits","subcategory" => "Tequila","price" => "70.2","volume" => "750","alcohol_content" => "36.0","price_index" => "0.26","country" => "Mexico","url" => "https://www.lcbo.com/en/tequila-tromba-anejo-360198"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Basil Hayden Kentucky Bourbon","brand" => "Basil Hayden","category" => "Spirits","subcategory" => "Whisky","price" => "28.95","volume" => "375","alcohol_content" => "40.0","price_index" => "0.193","country" => "United States","url" => "https://www.lcbo.com/en/basil-hayden-kentucky-bourbon-541672"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glendalough Double Barrel Irish Whiskey","brand" => "Glendalough","category" => "Spirits","subcategory" => "Whisky","price" => "48.65","volume" => "750","alcohol_content" => "42.0","price_index" => "0.15444444444444444","country" => "Ireland","url" => "https://www.lcbo.com/en/glendalough-double-barrel-irish-whiskey-516096"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Writers Tears Double Oak Whiskey","brand" => "Writer's Tears","category" => "Spirits","subcategory" => "Whisky","price" => "64.95","volume" => "700","alcohol_content" => "45.5","price_index" => "0.20392464678178965","country" => "Ireland","url" => "https://www.lcbo.com/en/writers-tears-double-oak-whiskey-13967"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Carolans Irish Cream","brand" => "Carolans","category" => "Spirits","subcategory" => "Liqueur","price" => "16.95","volume" => "375","alcohol_content" => "17.0","price_index" => "0.2658823529411764","country" => "Ireland","url" => "https://www.lcbo.com/en/carolans-irish-cream-535179"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Copperhead Magnetawan Moonshine","brand" => "Copperhead","category" => "Spirits","subcategory" => "Whisky","price" => "30.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10066666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/copperhead-magnetawan-moonshine-512954"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Green Owl Vodka","brand" => "GREEN OWL VODKA","category" => "Spirits","subcategory" => "Vodka","price" => "34.95","volume" => "750","alcohol_content" => "35.0","price_index" => "0.13314285714285715","country" => "Canada","url" => "https://www.lcbo.com/en/green-owl-vodka-28578"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glen Garioch Founder's Reserve Highland Single Malt Scotch Whisky","brand" => "Glen Garioch","category" => "Spirits","subcategory" => "Whisky","price" => "84.95","volume" => "750","alcohol_content" => "48.0","price_index" => "0.23597222222222222","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glen-garioch-founder-s-reserve-highland-single-malt-scotch-whisky-210252"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Sexton Single Malt Irish Whiskey","brand" => "The Sexton","category" => "Spirits","subcategory" => "Whisky","price" => "50.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.16733333333333333","country" => "Ireland","url" => "https://www.lcbo.com/en/the-sexton-single-malt-irish-whiskey-541607"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Buffalo Trace Bourbon","brand" => "Buffalo Trace","category" => "Spirits","subcategory" => "Whisky","price" => "24.6","volume" => "375","alcohol_content" => "45.0","price_index" => "0.14577777777777778","country" => "United States","url" => "https://www.lcbo.com/en/buffalo-trace-bourbon-11850"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sazerac Straight Rye Whiskey","brand" => "Sazerac","category" => "Spirits","subcategory" => "Whisky","price" => "49.95","volume" => "750","alcohol_content" => "45.0","price_index" => "0.14800000000000002","country" => "United States","url" => "https://www.lcbo.com/en/sazerac-straight-rye-whiskey-205666"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Espolon Tequila Reposado","brand" => "Espolon","category" => "Spirits","subcategory" => "Tequila","price" => "43.25","volume" => "750","alcohol_content" => "40.0","price_index" => "0.14416666666666667","country" => "Mexico","url" => "https://www.lcbo.com/en/espolon-tequila-reposado-324855"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Domaine De Canton Ginger Liqueur","brand" => "Domaine De Canton","category" => "Spirits","subcategory" => "Liqueur","price" => "49.95","volume" => "750","alcohol_content" => "28.0","price_index" => "0.23785714285714285","country" => "France","url" => "https://www.lcbo.com/en/domaine-de-canton-ginger-liqueur-157917"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ren Ultra Premium Vodka","brand" => "Ren Ultra Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "51.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.17316666666666666","country" => "Canada","url" => "https://www.lcbo.com/en/ren-ultra-premium-vodka-19592"
            ]);
            DB::table('alcohols')->insert([
            "title" => "HIP Vodka Black","brand" => "Hip","category" => "Spirits","subcategory" => "Vodka","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/hip-vodka-black-649202"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Woodford Reserve Double Oaked","brand" => "Woodford Reserve","category" => "Spirits","subcategory" => "Whisky","price" => "70.25","volume" => "750","alcohol_content" => "45.2","price_index" => "0.20722713864306785","country" => "United States","url" => "https://www.lcbo.com/en/woodford-reserve-double-oaked-410852"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hine H By Hine VSOP Fine Champagne Cognac","brand" => "Hine","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "79.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2665","country" => "France","url" => "https://www.lcbo.com/en/hine-h-by-hine-vsop-fine-champagne-cognac-21574"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Warheads Green Apple","brand" => "Warheads","category" => "Spirits","subcategory" => "Liqueur","price" => "14.95","volume" => "375","alcohol_content" => "20.0","price_index" => "0.19933333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/warheads-green-apple-27365"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Er Guo Tou 15 Year Old","brand" => "NULL","category" => "Spirits","subcategory" => "Liqueur","price" => "48.55","volume" => "500","alcohol_content" => "52.0","price_index" => "0.18673076923076923","country" => "China","url" => "https://www.lcbo.com/en/er-guo-tou-15-year-old-26901"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dewar's 12 Year Old Scotch Whisky","brand" => "Dewar's","category" => "Spirits","subcategory" => "Whisky","price" => "54.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.18316666666666667","country" => "United Kingdom","url" => "https://www.lcbo.com/en/dewar-s-12-year-old-scotch-whisky-438598"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tattie Bogle Vodka","brand" => "Tattie Bogle Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "38.3","volume" => "750","alcohol_content" => "43.0","price_index" => "0.11875968992248061","country" => "United Kingdom","url" => "https://www.lcbo.com/en/tattie-bogle-vodka-16183"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi 8 Year Old Sherry Cask Finish Limited Edition","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "37.0","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12333333333333334","country" => "United States","url" => "https://www.lcbo.com/en/bacardi-8-year-old-sherry-cask-finish-limited-edition-19837"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Pernod","brand" => "Pernod","category" => "Spirits","subcategory" => "Liqueur","price" => "30.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10316666666666667","country" => "France","url" => "https://www.lcbo.com/en/pernod-6049"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Yellow Spot Irish Whiskey","brand" => "Yellow Spot","category" => "Spirits","subcategory" => "Whisky","price" => "120.25","volume" => "750","alcohol_content" => "46.0","price_index" => "0.34855072463768116","country" => "Ireland","url" => "https://www.lcbo.com/en/yellow-spot-irish-whiskey-446807"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Moon Soju","brand" => "Moon","category" => "Spirits","subcategory" => "Soju","price" => "10.55","volume" => "375","alcohol_content" => "18.6","price_index" => "0.15125448028673832","country" => "Canada","url" => "https://www.lcbo.com/en/moon-soju-20052"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dunrobin Canadian Whisky","brand" => "Dunrobin","category" => "Spirits","subcategory" => "Whisky","price" => "54.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.18316666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/dunrobin-canadian-whisky-22098"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ezra Brooks Black Label Bourbon Whiskey","brand" => "Ezra Brooks","category" => "Spirits","subcategory" => "Whisky","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "United States","url" => "https://www.lcbo.com/en/ezra-brooks-black-label-bourbon-whiskey-517987"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Aviation Gin","brand" => "Aviation","category" => "Spirits","subcategory" => "Gin","price" => "82.95","volume" => "1750","alcohol_content" => "42.0","price_index" => "0.11285714285714286","country" => "United States","url" => "https://www.lcbo.com/en/aviation-gin-21996"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jaja Reposado Tequila","brand" => "Jaja","category" => "Spirits","subcategory" => "Tequila","price" => "66.7","volume" => "750","alcohol_content" => "40.0","price_index" => "0.22233333333333336","country" => "Mexico","url" => "https://www.lcbo.com/en/jaja-reposado-tequila-19672"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Becherovka Original Liqueur","brand" => "Becherovka","category" => "Spirits","subcategory" => "Liqueur","price" => "32.7","volume" => "750","alcohol_content" => "38.0","price_index" => "0.11473684210526316","country" => "Czechia","url" => "https://www.lcbo.com/en/becherovka-original-liqueur-603456"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Rittenhouse Straight Rye Whisky 100 Bottled In Bond","brand" => "Rittenhouse","category" => "Spirits","subcategory" => "Whisky","price" => "49.95","volume" => "750","alcohol_content" => "50.0","price_index" => "0.1332","country" => "United States","url" => "https://www.lcbo.com/en/rittenhouse-straight-rye-whisky-100-bottled-in-bond-230813"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Absolut Juice Apple Edition","brand" => "Absolut","category" => "Spirits","subcategory" => "Vodka","price" => "32.7","volume" => "750","alcohol_content" => "35.0","price_index" => "0.12457142857142858","country" => "Sweden","url" => "https://www.lcbo.com/en/absolut-juice-apple-edition-13187"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Magnum Scotch Malt Whisky Cream Liqueur","brand" => "Magnum","category" => "Spirits","subcategory" => "Liqueur","price" => "37.0","volume" => "750","alcohol_content" => "17.0","price_index" => "0.2901960784313725","country" => "United Kingdom","url" => "https://www.lcbo.com/en/magnum-scotch-malt-whisky-cream-liqueur-561720"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dillon's Strawberry Gin","brand" => "DILLON'S GIN","category" => "Spirits","subcategory" => "Gin","price" => "49.95","volume" => "750","alcohol_content" => "30.0","price_index" => "0.222","country" => "Canada","url" => "https://www.lcbo.com/en/dillon-s-strawberry-gin-24542"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Zwack Unicum Slivovitz 3-Year-Old K","brand" => "Zwack","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "34.65","volume" => "750","alcohol_content" => "47.0","price_index" => "0.09829787234042553","country" => "Hungary","url" => "https://www.lcbo.com/en/zwack-unicum-slivovitz-3-year-old-k-454603"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Otonabee River Spirits Dry Gin","brand" => "Otonabee River Spirits","category" => "Spirits","subcategory" => "Gin","price" => "28.75","volume" => "750","alcohol_content" => "42.0","price_index" => "0.09126984126984126","country" => "Canada","url" => "https://www.lcbo.com/en/otonabee-river-spirits-dry-gin-518365"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Casamigos Reposado Tequila","brand" => "Casamigos","category" => "Spirits","subcategory" => "Tequila","price" => "199.6","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.28514285714285714","country" => "Mexico","url" => "https://www.lcbo.com/en/casamigos-reposado-tequila-24924"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hine Rare VSOP","brand" => "Hine","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "110.45","volume" => "750","alcohol_content" => "40.0","price_index" => "0.3681666666666667","country" => "France","url" => "https://www.lcbo.com/en/hine-rare-vsop-356857"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bruichladdich The Classic Laddie Scottish Barley","brand" => "Bruichladdich","category" => "Spirits","subcategory" => "Whisky","price" => "85.3","volume" => "750","alcohol_content" => "50.0","price_index" => "0.22746666666666665","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bruichladdich-the-classic-laddie-scottish-barley-387423"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bootlegger Vodka","brand" => "Bootlegger Distillery","category" => "Spirits","subcategory" => "Vodka","price" => "28.75","volume" => "750","alcohol_content" => "40.9","price_index" => "0.09372453137734311","country" => "Canada","url" => "https://www.lcbo.com/en/bootlegger-vodka-17265"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Small Cask Brandy (PET)","brand" => "Forty Creek","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "Canada","url" => "https://www.lcbo.com/en/small-cask-brandy-pet-11494"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wine Brandy Sarajishvili 3*","brand" => "Sarajishvili","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "28.25","volume" => "500","alcohol_content" => "40.0","price_index" => "0.14125","country" => "Georgia","url" => "https://www.lcbo.com/en/wine-brandy-sarajishvili-3-17620"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Havana Club Cuban Smoky","brand" => "Havana Club","category" => "Spirits","subcategory" => "Rum","price" => "43.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.14400000000000002","country" => "Cuba","url" => "https://www.lcbo.com/en/havana-club-cuban-smoky-19820"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenfiddich Gran Reserva 21 Year Old Single Malt Scotch Whisky","brand" => "Glenfiddich","category" => "Spirits","subcategory" => "Whisky","price" => "380.2","volume" => "750","alcohol_content" => "40.0","price_index" => "1.2673333333333332","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenfiddich-gran-reserva-21-year-old-single-malt-scotch-whisky-981381"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Quiet Man Traditional Irish Whiskey","brand" => "The Quiet Man","category" => "Spirits","subcategory" => "Whisky","price" => "53.65","volume" => "750","alcohol_content" => "40.0","price_index" => "0.17883333333333332","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-quiet-man-traditional-irish-whiskey-20409"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Superior White Rum","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "3.45","volume" => "50","alcohol_content" => "40.0","price_index" => "0.17250000000000001","country" => "Puerto Rico","url" => "https://www.lcbo.com/en/bacardi-superior-white-rum-72009"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Nikka Whisky Miyagikyo Single Malt","brand" => "Nikka","category" => "Spirits","subcategory" => "Whisky","price" => "94.95","volume" => "700","alcohol_content" => "45.0","price_index" => "0.30142857142857143","country" => "Japan","url" => "https://www.lcbo.com/en/nikka-whisky-miyagikyo-single-malt-20220"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Miguel Torres Chile Pisco El Gobernador","brand" => "Miguel Torres","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "38.25","volume" => "700","alcohol_content" => "40.0","price_index" => "0.13660714285714284","country" => "Chile","url" => "https://www.lcbo.com/en/miguel-torres-chile-pisco-el-gobernador-363978"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Alumni Whisky Series - Martin Brodeur","brand" => "WISERS ALUMNI SERIES","category" => "Spirits","subcategory" => "Whisky","price" => "44.95","volume" => "750","alcohol_content" => "47.0","price_index" => "0.1275177304964539","country" => "Canada","url" => "https://www.lcbo.com/en/alumni-whisky-series-martin-brodeur-27696"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Techun Mijiu","brand" => "NULL","category" => "Spirits","subcategory" => "Liqueur","price" => "26.05","volume" => "750","alcohol_content" => "31.0","price_index" => "0.11204301075268817","country" => "China","url" => "https://www.lcbo.com/en/techun-mijiu-26362"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Nikka Whisky Yoichi Single Malt","brand" => "Nikka","category" => "Spirits","subcategory" => "Whisky","price" => "94.95","volume" => "700","alcohol_content" => "45.0","price_index" => "0.30142857142857143","country" => "Japan","url" => "https://www.lcbo.com/en/nikka-whisky-yoichi-single-malt-21082"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Baker's Kentucky Straight Bourbon Whiskey","brand" => "Baker's","category" => "Spirits","subcategory" => "Whisky","price" => "95.3","volume" => "750","alcohol_content" => "53.5","price_index" => "0.23750778816199375","country" => "United States","url" => "https://www.lcbo.com/en/baker-s-kentucky-straight-bourbon-whiskey-253658"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Asbach Uralt Brandy","brand" => "Asbach Uralt","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "39.6","volume" => "750","alcohol_content" => "40.0","price_index" => "0.132","country" => "Germany","url" => "https://www.lcbo.com/en/asbach-uralt-brandy-14061"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ricard Pastis","brand" => "Ricard 45","category" => "Spirits","subcategory" => "Liqueur","price" => "30.9","volume" => "750","alcohol_content" => "45.0","price_index" => "0.09155555555555556","country" => "France","url" => "https://www.lcbo.com/en/ricard-pastis-15693"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Isle of Harris Gin","brand" => "Isle of Harris","category" => "Spirits","subcategory" => "Gin","price" => "87.2","volume" => "750","alcohol_content" => "45.0","price_index" => "0.25837037037037036","country" => "United Kingdom","url" => "https://www.lcbo.com/en/isle-of-harris-gin-16100"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Heretic Spirits Vodka #1","brand" => "Heretic Spirits","category" => "Spirits","subcategory" => "Vodka","price" => "34.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1165","country" => "Canada","url" => "https://www.lcbo.com/en/heretic-spirits-vodka-1-14352"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Brugal 1888","brand" => "Brugal","category" => "Spirits","subcategory" => "Rum","price" => "49.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1665","country" => "Dominican Republic","url" => "https://www.lcbo.com/en/brugal-1888-15026"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Collective Arts Blackthorn & Plum Gin","brand" => "Collective Arts","category" => "Spirits","subcategory" => "Gin","price" => "48.95","volume" => "750","alcohol_content" => "42.9","price_index" => "0.15213675213675215","country" => "Canada","url" => "https://www.lcbo.com/en/collective-arts-blackthorn-plum-gin-14312"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hennessy VSOP","brand" => "Hennessy","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "66.25","volume" => "375","alcohol_content" => "40.0","price_index" => "0.44166666666666665","country" => "France","url" => "https://www.lcbo.com/en/hennessy-vsop-492884"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bulleit Bourbon 10 Year Old","brand" => "Bulleit","category" => "Spirits","subcategory" => "Whisky","price" => "49.95","volume" => "750","alcohol_content" => "45.6","price_index" => "0.14605263157894738","country" => "United States","url" => "https://www.lcbo.com/en/bulleit-bourbon-10-year-old-439075"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Chivas Regal 12 Year Old Scotch Whisky","brand" => "Chivas Regal","category" => "Spirits","subcategory" => "Whisky","price" => "114.55","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.16364285714285715","country" => "United Kingdom","url" => "https://www.lcbo.com/en/chivas-regal-12-year-old-scotch-whisky-217778"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dunrobin Artisanal Gin","brand" => "Dunrobin","category" => "Spirits","subcategory" => "Gin","price" => "39.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13316666666666668","country" => "Canada","url" => "https://www.lcbo.com/en/dunrobin-artisanal-gin-21256"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Talisker Storm Single Malt Scotch Whisky","brand" => "Talisker","category" => "Spirits","subcategory" => "Whisky","price" => "100.95","volume" => "750","alcohol_content" => "46.0","price_index" => "0.2926086956521739","country" => "United Kingdom","url" => "https://www.lcbo.com/en/talisker-storm-single-malt-scotch-whisky-383216"
            ]);
            DB::table('alcohols')->insert([
            "title" => "PJ's Craft Cream Liquor Espresso","brand" => "Pj'S Original Cream","category" => "Spirits","subcategory" => "Liqueur","price" => "21.95","volume" => "750","alcohol_content" => "17.0","price_index" => "0.172156862745098","country" => "Canada","url" => "https://www.lcbo.com/en/pj-s-craft-cream-liquor-espresso-21578"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glayva","brand" => "Glayva","category" => "Spirits","subcategory" => "Liqueur","price" => "42.2","volume" => "750","alcohol_content" => "35.0","price_index" => "0.16076190476190477","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glayva-201251"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Howitzer Canadian Whisky","brand" => "Howitzer","category" => "Spirits","subcategory" => "Whisky","price" => "37.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12400000000000001","country" => "Canada","url" => "https://www.lcbo.com/en/howitzer-canadian-whisky-19540"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tobago Gold Chocolate Rum Cream","brand" => "Tobago Gold","category" => "Spirits","subcategory" => "Liqueur","price" => "39.45","volume" => "700","alcohol_content" => "17.0","price_index" => "0.3315126050420168","country" => "Netherlands","url" => "https://www.lcbo.com/en/tobago-gold-chocolate-rum-cream-25112"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Durham Distillery Patio Lanterns Vodka","brand" => "Patio Lanterns","category" => "Spirits","subcategory" => "Vodka","price" => "33.0","volume" => "750","alcohol_content" => "39.6","price_index" => "0.1111111111111111","country" => "Canada","url" => "https://www.lcbo.com/en/patio-lanterns-vodka-17196"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crosscut Distillery Triple Grain Vodka","brand" => "Crosscut Distillery","category" => "Spirits","subcategory" => "Vodka","price" => "39.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13316666666666668","country" => "Canada","url" => "https://www.lcbo.com/en/crosscut-distillery-triple-grain-vodka-23534"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smirnoff Grapefruit","brand" => "Smirnoff","category" => "Spirits","subcategory" => "Vodka","price" => "29.2","volume" => "750","alcohol_content" => "35.0","price_index" => "0.11123809523809523","country" => "Canada","url" => "https://www.lcbo.com/en/smirnoff-grapefruit-419515"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crown Royal Special Reserve","brand" => "Crown Royal","category" => "Spirits","subcategory" => "Whisky","price" => "60.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2031666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/crown-royal-special-reserve-321208"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ardbeg An Oa Islay Single Malt Scotch Whisky","brand" => "Ardbeg","category" => "Spirits","subcategory" => "Whisky","price" => "105.65","volume" => "750","alcohol_content" => "46.6","price_index" => "0.3022889842632332","country" => "United Kingdom","url" => "https://www.lcbo.com/en/ardbeg-an-oa-islay-single-malt-scotch-whisky-539643"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cincoro Tequila Anejo","brand" => "Cincoro","category" => "Spirits","subcategory" => "Tequila","price" => "229.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.7665","country" => "Mexico","url" => "https://www.lcbo.com/en/cincoro-tequila-anejo-19699"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Johnnie Walker 18 Year Old Scotch Whisky","brand" => "Johnnie Walker","category" => "Spirits","subcategory" => "Whisky","price" => "150.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.5031666666666667","country" => "United Kingdom","url" => "https://www.lcbo.com/en/johnnie-walker-18-year-old-scotch-whisky-292805"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Catrina Reposado Tequila","brand" => "Catrina","category" => "Spirits","subcategory" => "Tequila","price" => "93.65","volume" => "750","alcohol_content" => "40.0","price_index" => "0.3121666666666667","country" => "Mexico","url" => "https://www.lcbo.com/en/catrina-reposado-tequila-14409"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Elora Distilling Great Expectations Gin","brand" => "Elora Distilling","category" => "Spirits","subcategory" => "Gin","price" => "46.0","volume" => "750","alcohol_content" => "40.0","price_index" => "0.15333333333333332","country" => "Canada","url" => "https://www.lcbo.com/en/elora-distilling-great-expectations-gin-23141"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Plantation Xaymaca Special Dry Jamaican Rum","brand" => "Plantation","category" => "Spirits","subcategory" => "Rum","price" => "37.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.11767441860465117","country" => "Jamaica","url" => "https://www.lcbo.com/en/plantation-xaymaca-special-dry-rum-19824"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glynnevan Double Barrelled Canadian Rye Whisky","brand" => "Glynnevan","category" => "Spirits","subcategory" => "Whisky","price" => "55.2","volume" => "750","alcohol_content" => "43.0","price_index" => "0.17116279069767443","country" => "Canada","url" => "https://www.lcbo.com/en/glynnevan-double-barrelled-canadian-rye-whisky-496844"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Pecs�tes Barack Apricot Liquor","brand" => "Pecs�tes Barack","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "49.15","volume" => "750","alcohol_content" => "43.0","price_index" => "0.15240310077519378","country" => "Hungary","url" => "https://www.lcbo.com/en/pecs-ctes-barack-apricot-liquor-40253"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bunnahabhain Stiuireadair","brand" => "Bunnahabhain","category" => "Spirits","subcategory" => "Whisky","price" => "74.95","volume" => "750","alcohol_content" => "46.11","price_index" => "0.21672811393045618","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bunnahabhain-stiuireadair-10742"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Amarula Plant Based","brand" => "Amarula","category" => "Spirits","subcategory" => "Liqueur","price" => "31.45","volume" => "750","alcohol_content" => "15.5","price_index" => "0.2705376344086021","country" => "South Africa","url" => "https://www.lcbo.com/en/amarula-plant-based-24952"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sombra Joven Mezcal","brand" => "Sombra","category" => "Spirits","subcategory" => "Tequila","price" => "60.35","volume" => "750","alcohol_content" => "45.0","price_index" => "0.17881481481481482","country" => "Mexico","url" => "https://www.lcbo.com/en/sombra-joven-mezcal-549030"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Baileys Red Velvet","brand" => "Baileys","category" => "Spirits","subcategory" => "Liqueur","price" => "32.55","volume" => "750","alcohol_content" => "17.0","price_index" => "0.2552941176470588","country" => "Ireland","url" => "https://www.lcbo.com/en/baileys-red-velvet-17085"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Maverick Barnburner Whisky","brand" => "Maverick","category" => "Spirits","subcategory" => "Whisky","price" => "47.35","volume" => "1140","alcohol_content" => "41.6","price_index" => "0.09984396086369769","country" => "Canada","url" => "https://www.lcbo.com/en/maverick-barnburner-whisky-22579"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sailor Jerry Spiced Rum","brand" => "Sailor Jerry","category" => "Spirits","subcategory" => "Rum","price" => "64.6","volume" => "1750","alcohol_content" => "46.0","price_index" => "0.08024844720496893","country" => "United States","url" => "https://www.lcbo.com/en/sailor-jerry-24437"
            ]);
            DB::table('alcohols')->insert([
            "title" => "El Jimador Tequila Blanco","brand" => "El Jimador","category" => "Spirits","subcategory" => "Tequila","price" => "38.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12733333333333335","country" => "Mexico","url" => "https://www.lcbo.com/en/el-jimador-tequila-blanco-173617"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Evan Williams 1783","brand" => "Evan Williams","category" => "Spirits","subcategory" => "Whisky","price" => "39.9","volume" => "750","alcohol_content" => "45.0","price_index" => "0.11822222222222221","country" => "United States","url" => "https://www.lcbo.com/en/evan-williams-1783-22951"
            ]);
            DB::table('alcohols')->insert([
            "title" => "El Dorado Versailles Single Still Finest Demerara Rum","brand" => "El Dorado","category" => "Spirits","subcategory" => "Rum","price" => "67.85","volume" => "750","alcohol_content" => "40.0","price_index" => "0.22616666666666665","country" => "Guyana","url" => "https://www.lcbo.com/en/el-dorado-versailles-single-still-finest-demerara-rum-617514"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Titos Handmade Vodka","brand" => "Tito's","category" => "Spirits","subcategory" => "Vodka","price" => "229.95","volume" => "3000","alcohol_content" => "40.0","price_index" => "0.191625","country" => "United States","url" => "https://www.lcbo.com/en/titos-handmade-vodka-12577"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Labbe Francois Cassis","brand" => "Labbe Francois","category" => "Spirits","subcategory" => "Liqueur","price" => "27.55","volume" => "750","alcohol_content" => "15.0","price_index" => "0.2448888888888889","country" => "France","url" => "https://www.lcbo.com/en/labbe-francois-cassis-57281"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Luzhou Laojiao Erqu","brand" => "Luzhou Laojiao","category" => "Spirits","subcategory" => "Liqueur","price" => "19.5","volume" => "500","alcohol_content" => "51.4","price_index" => "0.07587548638132295","country" => "China","url" => "https://www.lcbo.com/en/luzhou-laojiao-erqu-318337"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bearface Whisky Wilderness Series Matsutake","brand" => "Bearface","category" => "Spirits","subcategory" => "Whisky","price" => "49.95","volume" => "750","alcohol_content" => "42.5","price_index" => "0.1567058823529412","country" => "Canada","url" => "https://www.lcbo.com/en/bearface-whisky-wilderness-series-matsutake-22668"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Laphroaig Quarter Cask Islay Single Malt Scotch Whisky","brand" => "Laphroaig","category" => "Spirits","subcategory" => "Whisky","price" => "97.95","volume" => "750","alcohol_content" => "48.0","price_index" => "0.27208333333333334","country" => "United Kingdom","url" => "https://www.lcbo.com/en/laphroaig-quarter-cask-islay-single-malt-scotch-whisky-19158"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Five Farms Single Batch Irish Cream Liqueur","brand" => "Five Farms","category" => "Spirits","subcategory" => "Liqueur","price" => "40.1","volume" => "750","alcohol_content" => "16.9","price_index" => "0.31637080867850104","country" => "Ireland","url" => "https://www.lcbo.com/en/five-farms-single-batch-irish-cream-liqueur-12197"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bearface One Eleven Oaxaca Agave Spirit","brand" => "Bearface","category" => "Spirits","subcategory" => "Whisky","price" => "48.55","volume" => "750","alcohol_content" => "42.5","price_index" => "0.15231372549019606","country" => "Canada","url" => "https://www.lcbo.com/en/bearface-one-eleven-oaxaca-agave-spirit-21846"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Chivas Regal 18 Year Old Scotch Whisky","brand" => "Chivas Regal","category" => "Spirits","subcategory" => "Whisky","price" => "106.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.35400000000000004","country" => "United Kingdom","url" => "https://www.lcbo.com/en/chivas-regal-18-year-old-scotch-whisky-582205"
            ]);
            DB::table('alcohols')->insert([
            "title" => "El Dorado 25 Year Old Demerara Rum","brand" => "El Dorado","category" => "Spirits","subcategory" => "Rum","price" => "500.45","volume" => "750","alcohol_content" => "40.0","price_index" => "1.6681666666666666","country" => "Guyana","url" => "https://www.lcbo.com/en/el-dorado-25-year-old-demerara-rum-185256"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenfiddich IPA Experimental Series","brand" => "Glenfiddich","category" => "Spirits","subcategory" => "Whisky","price" => "90.25","volume" => "750","alcohol_content" => "43.0","price_index" => "0.27984496124031005","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenfiddich-ipa-experimental-series-513069"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Drambuie","brand" => "Drambuie","category" => "Spirits","subcategory" => "Liqueur","price" => "27.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.18066666666666667","country" => "United Kingdom","url" => "https://www.lcbo.com/en/drambuie-364174"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Writer's Tears Red Head Single Malt Irish Whiskey","brand" => "Writer's Tears","category" => "Spirits","subcategory" => "Whisky","price" => "75.7","volume" => "700","alcohol_content" => "46.0","price_index" => "0.23509316770186336","country" => "Ireland","url" => "https://www.lcbo.com/en/writer-s-tears-red-head-single-malt-irish-whiskey-494765"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Highland Park 12 Yo","brand" => "Highland Park","category" => "Spirits","subcategory" => "Whisky","price" => "39.95","volume" => "350","alcohol_content" => "43.0","price_index" => "0.26544850498338873","country" => "United Kingdom","url" => "https://www.lcbo.com/en/highland-park-12-yo-13055"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Black Bottle Blended Scotch Whisky","brand" => "Black Bottle","category" => "Spirits","subcategory" => "Whisky","price" => "30.55","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10183333333333333","country" => "United Kingdom","url" => "https://www.lcbo.com/en/black-bottle-blended-scotch-whisky-454132"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Underberg Bitters","brand" => "Underberg","category" => "Spirits","subcategory" => "Liqueur","price" => "6.65","volume" => "60","alcohol_content" => "44.0","price_index" => "0.25189393939393945","country" => "Germany","url" => "https://www.lcbo.com/en/underberg-bitters-214809"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Stalk & Barrel Blue Blend Whisky","brand" => "Stalk & Barrel","category" => "Spirits","subcategory" => "Whisky","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/stalk-barrel-blue-blend-whisky-479923"
            ]);
            DB::table('alcohols')->insert([
            "title" => "MIchaels Pumpkin Spice Celtic Irish Cream","brand" => "Michael'S Irish Cream","category" => "Spirits","subcategory" => "Liqueur","price" => "29.95","volume" => "750","alcohol_content" => "17.0","price_index" => "0.2349019607843137","country" => "Ireland","url" => "https://www.lcbo.com/en/michaels-pumpkin-spice-celtic-irish-cream-21557"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Appleton Estate 15 Year Old","brand" => "Appleton Estate","category" => "Spirits","subcategory" => "Rum","price" => "80.25","volume" => "750","alcohol_content" => "43.0","price_index" => "0.24883720930232558","country" => "Jamaica","url" => "https://www.lcbo.com/en/appleton-estate-15-year-old-19826"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wolfhead Distillery Vodka","brand" => "Wolfhead","category" => "Spirits","subcategory" => "Vodka","price" => "35.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11916666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/wolfhead-distillery-vodka-489195"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Small Cask Brandy (PET)","brand" => "Forty Creek","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/small-cask-brandy-pet-9365"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mermaid Gin","brand" => "Mermaid","category" => "Spirits","subcategory" => "Gin","price" => "78.55","volume" => "700","alcohol_content" => "42.0","price_index" => "0.2671768707482993","country" => "United Kingdom","url" => "https://www.lcbo.com/en/mermaid-gin-13443"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hill's Genuine Absinthe","brand" => "Hill'S Absinth","category" => "Spirits","subcategory" => "Liqueur","price" => "42.2","volume" => "375","alcohol_content" => "70.0","price_index" => "0.16076190476190477","country" => "Czechia","url" => "https://www.lcbo.com/en/hill-s-genuine-absinthe-225953"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ocean Organic Vodka","brand" => "Ocean","category" => "Spirits","subcategory" => "Vodka","price" => "45.7","volume" => "750","alcohol_content" => "40.2","price_index" => "0.151575456053068","country" => "United States","url" => "https://www.lcbo.com/en/ocean-organic-vodka-645473"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hendrick's Gin","brand" => "Hendrick's","category" => "Spirits","subcategory" => "Gin","price" => "100.65","volume" => "1750","alcohol_content" => "44.0","price_index" => "0.13071428571428573","country" => "United Kingdom","url" => "https://www.lcbo.com/en/hendrick-s-gin-909424"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Punjabi Club Rye Whisky","brand" => "Vintages Front Line Release","category" => "Spirits","subcategory" => "Whisky","price" => "31.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.09906976744186047","country" => "United States","url" => "https://www.lcbo.com/en/punjabi-club-rye-whisky-10300"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Glenlivet 12 Year Old Single Malt Scotch Whisky","brand" => "The Glenlivet","category" => "Spirits","subcategory" => "Whisky","price" => "100.35","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.2200657894736842","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-glenlivet-12-year-old-single-malt-scotch-whisky-207654"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cabo Wabo Reposado Tequila","brand" => "Cabo Wabo","category" => "Spirits","subcategory" => "Tequila","price" => "83.25","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2775","country" => "Mexico","url" => "https://www.lcbo.com/en/cabo-wabo-reposado-tequila-551416"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dewar's Portuguese Smooth","brand" => "Dewar's Whisky","category" => "Spirits","subcategory" => "Whisky","price" => "34.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1165","country" => "United Kingdom","url" => "https://www.lcbo.com/en/dewar-s-portuguese-smooth-25400"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dixon's Wicked Citrus Gin","brand" => "DIXON'S","category" => "Spirits","subcategory" => "Gin","price" => "39.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13316666666666668","country" => "Canada","url" => "https://www.lcbo.com/en/dixon-s-wicked-citrus-gin-25100"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dillon's Rose Gin","brand" => "Dillon's","category" => "Spirits","subcategory" => "Gin","price" => "49.95","volume" => "750","alcohol_content" => "35.0","price_index" => "0.1902857142857143","country" => "Canada","url" => "https://www.lcbo.com/en/dillons-rose-gin-22452"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tomatin Legacy Highland Single Malt Scotch Whisky","brand" => "Tomatin","category" => "Spirits","subcategory" => "Whisky","price" => "59.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.18589147286821706","country" => "United Kingdom","url" => "https://www.lcbo.com/en/tomatin-legacy-highland-single-malt-scotch-whisky-395723"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Los Siete Misterios Mezcal","brand" => "Los Siete","category" => "Spirits","subcategory" => "Tequila","price" => "72.2","volume" => "750","alcohol_content" => "44.0","price_index" => "0.2187878787878788","country" => "Mexico","url" => "https://www.lcbo.com/en/los-siete-misterios-mezcal-439497"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bottega Gianduia Liquore","brand" => "Bottega","category" => "Spirits","subcategory" => "Liqueur","price" => "24.95","volume" => "500","alcohol_content" => "17.0","price_index" => "0.29352941176470587","country" => "Italy","url" => "https://www.lcbo.com/en/bottega-gianduia-liquore-604181"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Nutrl Vodka","brand" => "Nutrl","category" => "Spirits","subcategory" => "Vodka","price" => "19.95","volume" => "375","alcohol_content" => "40.0","price_index" => "0.133","country" => "Canada","url" => "https://www.lcbo.com/en/nutrl-vodka-16479"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Snow Allure Vodka","brand" => "Snow Allure","category" => "Spirits","subcategory" => "Vodka","price" => "49.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1665","country" => "Canada","url" => "https://www.lcbo.com/en/snow-allure-vodka-115824"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bowmore No. 1 Islay Single Malt Scotch Whisky","brand" => "Bowmore","category" => "Spirits","subcategory" => "Whisky","price" => "63.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.21316666666666667","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bowmore-no-1-islay-single-malt-scotch-whisky-493072"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Martell VS Single Distillery","brand" => "Martell","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "70.35","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2345","country" => "France","url" => "https://www.lcbo.com/en/martell-vs-single-distillery-108100"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Stroh Original 54 Spiced Rum","brand" => "Stroh","category" => "Spirits","subcategory" => "Rum","price" => "37.05","volume" => "750","alcohol_content" => "54.0","price_index" => "0.09148148148148147","country" => "Austria","url" => "https://www.lcbo.com/en/stroh-original-54-spiced-rum-433094"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Proof Small Batch Vodka","brand" => "Proof Brands","category" => "Spirits","subcategory" => "Vodka","price" => "24.7","volume" => "500","alcohol_content" => "40.0","price_index" => "0.1235","country" => "Canada","url" => "https://www.lcbo.com/en/proof-small-batch-vodka-15006"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Fortress Rum","brand" => "Fortress","category" => "Spirits","subcategory" => "Rum","price" => "54.2","volume" => "750","alcohol_content" => "45.0","price_index" => "0.1605925925925926","country" => "Canada","url" => "https://www.lcbo.com/en/fortress-rum-667014"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wild Turkey Rare Breed Kentucky Straight Bourbon","brand" => "Wild Turkey","category" => "Spirits","subcategory" => "Whisky","price" => "66.35","volume" => "750","alcohol_content" => "58.4","price_index" => "0.15148401826484018","country" => "United States","url" => "https://www.lcbo.com/en/wild-turkey-rare-breed-kentucky-straight-bourbon-455329"
            ]);
            DB::table('alcohols')->insert([
            "title" => "W.L. Weller Special Reserve Bourbon (2 Bottle Limit)","brand" => "W.L Weller","category" => "Spirits","subcategory" => "Whisky","price" => "39.95","volume" => "750","alcohol_content" => "45.0","price_index" => "0.11837037037037038","country" => "United States","url" => "https://www.lcbo.com/en/w-l-weller-special-reserve-bourbon-limit-2-bottles-405316"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bathtub Gin, UK","brand" => "Bathtub","category" => "Spirits","subcategory" => "Gin","price" => "60.1","volume" => "750","alcohol_content" => "43.3","price_index" => "0.18506543494996153","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bathtub-gin-uk-11688"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Spring Mill Distillery Vodka","brand" => "Spring Mill Distillery","category" => "Spirits","subcategory" => "Vodka","price" => "39.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13316666666666668","country" => "Canada","url" => "https://www.lcbo.com/en/spring-mill-distillery-vodka-645713"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Alberta Premium Cask Strength Rye (2021)","brand" => "Alberta Premium","category" => "Spirits","subcategory" => "Whisky","price" => "84.95","volume" => "750","alcohol_content" => "63.7","price_index" => "0.17781266352694924","country" => "Canada","url" => "https://www.lcbo.com/en/alberta-premium-cask-strength-rye-2021-14089"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Deveron 12 Year Old Highland Single Malt Scotch Whisky","brand" => "The Deveron","category" => "Spirits","subcategory" => "Whisky","price" => "65.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.21733333333333335","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-deveron-12-year-old-highland-single-malt-scotch-whisky-435941"
            ]);
            DB::table('alcohols')->insert([
            "title" => "H2 Craft Aged Negroni Cocktail","brand" => "H2 Craft","category" => "Spirits","subcategory" => "Premixed Cocktails","price" => "29.95","volume" => "750","alcohol_content" => "27.0","price_index" => "0.14790123456790122","country" => "Canada","url" => "https://www.lcbo.com/en/h2-craft-aged-negroni-cocktail-12821"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Nutrl Vodka","brand" => "Nutrl","category" => "Spirits","subcategory" => "Vodka","price" => "19.95","volume" => "375","alcohol_content" => "40.0","price_index" => "0.133","country" => "Canada","url" => "https://www.lcbo.com/en/nutrl-vodka-16479"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Snow Allure Vodka","brand" => "Snow Allure","category" => "Spirits","subcategory" => "Vodka","price" => "49.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1665","country" => "Canada","url" => "https://www.lcbo.com/en/snow-allure-vodka-115824"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glendalough Rose Gin","brand" => "GLENDALOUGH WILD BOTANICAL GIN","category" => "Spirits","subcategory" => "Gin","price" => "44.95","volume" => "750","alcohol_content" => "41.0","price_index" => "0.1461788617886179","country" => "Ireland","url" => "https://www.lcbo.com/en/glendalough-rose-gin-22450"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Niu Lan Mountain Liquor","brand" => "Niu Lan","category" => "Spirits","subcategory" => "Liqueur","price" => "25.95","volume" => "500","alcohol_content" => "42.0","price_index" => "0.12357142857142857","country" => "China","url" => "https://www.lcbo.com/en/niu-lan-mountain-liquor-26900"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Stolichnaya Vanilla Vodka","brand" => "Stolichnaya Flavours","category" => "Spirits","subcategory" => "Vodka","price" => "27.75","volume" => "750","alcohol_content" => "37.5","price_index" => "0.09866666666666667","country" => "Latvia","url" => "https://www.lcbo.com/en/stolichnaya-vanilla-vodka-10803"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Chairman's Reserve Finest Saint Lucia Original Rum","brand" => "Chairman's Reserve","category" => "Spirits","subcategory" => "Rum","price" => "45.25","volume" => "750","alcohol_content" => "40.0","price_index" => "0.15083333333333335","country" => "St. Lucia","url" => "https://www.lcbo.com/en/chairman-s-reserve-finest-saint-lucia-original-rum-519132"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Honey Bee Elixir","brand" => "Honey Bee Elixir","category" => "Spirits","subcategory" => "Liqueur","price" => "17.95","volume" => "375","alcohol_content" => "34.0","price_index" => "0.14078431372549016","country" => "Canada","url" => "https://www.lcbo.com/en/honey-bee-elixir-11292"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Patron Reposado","brand" => "Patron","category" => "Spirits","subcategory" => "Tequila","price" => "49.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.32733333333333337","country" => "Mexico","url" => "https://www.lcbo.com/en/patron-reposado-25821"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Kraken Black Spiced Rum","brand" => "Kraken Rum","category" => "Spirits","subcategory" => "Rum","price" => "4.9","volume" => "50","alcohol_content" => "47.0","price_index" => "0.20851063829787236","country" => "Trinidad & Tobago","url" => "https://www.lcbo.com/en/the-kraken-black-spiced-rum-389304"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Guangdong Mi Jiu","brand" => "NULL","category" => "Spirits","subcategory" => "Liqueur","price" => "20.45","volume" => "750","alcohol_content" => "29.0","price_index" => "0.09402298850574714","country" => "China","url" => "https://www.lcbo.com/en/guangdong-mi-jiu-20682"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Aurora Crystal Head Vodka","brand" => "Crystal Head","category" => "Spirits","subcategory" => "Vodka","price" => "79.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2665","country" => "Canada","url" => "https://www.lcbo.com/en/aurora-crystal-head-vodka-463539"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Strega Alberti Benevento","brand" => "Strega","category" => "Spirits","subcategory" => "Liqueur","price" => "32.85","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1095","country" => "Italy","url" => "https://www.lcbo.com/en/strega-alberti-benevento-47068"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Scapegrace Classic New Zealand Premium Dry Gin","brand" => "Scapegrace Gin","category" => "Spirits","subcategory" => "Gin","price" => "39.95","volume" => "750","alcohol_content" => "42.2","price_index" => "0.12622432859399682","country" => "New Zealand","url" => "https://www.lcbo.com/en/scapegrace-classic-new-zealand-premium-dry-gin-18387"
            ]);
            DB::table('alcohols')->insert([
            "title" => "WineSoju","brand" => "Kim's Winery & Distillery","category" => "Spirits","subcategory" => "Soju","price" => "7.5","volume" => "375","alcohol_content" => "19.8","price_index" => "0.10101010101010101","country" => "Canada","url" => "https://www.lcbo.com/en/winesoju-16974"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Remy Martin VSOP Cognac","brand" => "Remy Martin","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "52.65","volume" => "375","alcohol_content" => "40.0","price_index" => "0.351","country" => "France","url" => "https://www.lcbo.com/en/remy-martin-vsop-cognac-207514"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Monimpex Golden Pear","brand" => "Monimpex","category" => "Spirits","subcategory" => "Liqueur","price" => "24.65","volume" => "750","alcohol_content" => "30.0","price_index" => "0.10955555555555554","country" => "Hungary","url" => "https://www.lcbo.com/en/monimpex-golden-pear-74476"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sour Puss Pineapple Coconut Liquor","brand" => "Sour Puss","category" => "Spirits","subcategory" => "Liqueur","price" => "21.95","volume" => "750","alcohol_content" => "15.0","price_index" => "0.1951111111111111","country" => "United States","url" => "https://www.lcbo.com/en/sour-puss-pineapple-coconut-liquor-439620"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Canadian Club Premium Mini","brand" => "Canadian Club","category" => "Spirits","subcategory" => "Whisky","price" => "3.3","volume" => "50","alcohol_content" => "40.0","price_index" => "0.16499999999999998","country" => "Canada","url" => "https://www.lcbo.com/en/canadian-club-premium-mini-22558"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Spirit Of York Vodka","brand" => "Spirit Of York","category" => "Spirits","subcategory" => "Vodka","price" => "40.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.134","country" => "Canada","url" => "https://www.lcbo.com/en/spirit-of-york-vodka-541755"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Persian Empire Arak Saggi","brand" => "Persian Empire","category" => "Spirits","subcategory" => "Liqueur","price" => "36.9","volume" => "750","alcohol_content" => "40.0","price_index" => "0.123","country" => "Canada","url" => "https://www.lcbo.com/en/persian-empire-arak-saggi-401588"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Loon Vodka","brand" => "Loon","category" => "Spirits","subcategory" => "Vodka","price" => "46.15","volume" => "750","alcohol_content" => "40.0","price_index" => "0.15383333333333332","country" => "Canada","url" => "https://www.lcbo.com/en/loon-vodka-374728"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Nikka Days Whisky","brand" => "Nikka","category" => "Spirits","subcategory" => "Whisky","price" => "70.2","volume" => "700","alcohol_content" => "40.0","price_index" => "0.2507142857142857","country" => "Japan","url" => "https://www.lcbo.com/en/nikka-days-whisky-22700"
            ]);
            DB::table('alcohols')->insert([
            "title" => "H�mmerle Cherry Liqueur","brand" => "W. Hammerle Destillerie Freiho","category" => "Spirits","subcategory" => "Liqueur","price" => "24.15","volume" => "500","alcohol_content" => "22.4","price_index" => "0.215625","country" => "Austria","url" => "https://www.lcbo.com/en/h-mmerle-cherry-liqueur-455980"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smirnoff Infusions Watermelon & Mint","brand" => "Smirnoff","category" => "Spirits","subcategory" => "Vodka","price" => "29.4","volume" => "750","alcohol_content" => "30.0","price_index" => "0.13066666666666665","country" => "United States","url" => "https://www.lcbo.com/en/smirnoff-infusions-watermelon-mint-14732"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Charles Merser & Co. London Blended Rum","brand" => "Charles Merser & Co.","category" => "Spirits","subcategory" => "Rum","price" => "60.2","volume" => "700","alcohol_content" => "43.1","price_index" => "0.19953596287703018","country" => "United Kingdom","url" => "https://www.lcbo.com/en/charles-merser-co-london-blended-rum-23896"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kardasi Tsipouro Tirnavou Without Anise","brand" => "Kardasi","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "28.45","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09483333333333333","country" => "Greece","url" => "https://www.lcbo.com/en/kardasi-tsipouro-tirnavou-without-anise-401868"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lindores Lowland Single Malt Scotch Whisky","brand" => "LINDORES WHISKY","category" => "Spirits","subcategory" => "Whisky","price" => "96.95","volume" => "700","alcohol_content" => "46.0","price_index" => "0.3010869565217391","country" => "United Kingdom","url" => "https://www.lcbo.com/en/lindores-lowland-single-malt-scotch-whisky-24758"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Craigellachie 13 Year Old Speyside Single Malt Scotch Whisky","brand" => "Craigellachie","category" => "Spirits","subcategory" => "Whisky","price" => "79.95","volume" => "750","alcohol_content" => "46.0","price_index" => "0.23173913043478261","country" => "United Kingdom","url" => "https://www.lcbo.com/en/craigellachie-13-year-old-speyside-single-malt-scotch-whisky-400069"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glen Breton Rare Canadian Single Malt Whisky","brand" => "Glen Breton","category" => "Spirits","subcategory" => "Whisky","price" => "79.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.24790697674418605","country" => "Canada","url" => "https://www.lcbo.com/en/glen-breton-rare-canadian-single-malt-whisky-601146"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tierra Noble Blanco Tequila","brand" => "Tierra Noble","category" => "Spirits","subcategory" => "Tequila","price" => "49.25","volume" => "750","alcohol_content" => "40.0","price_index" => "0.16416666666666666","country" => "Mexico","url" => "https://www.lcbo.com/en/tierra-noble-blanco-tequila-19424"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Weavers Gin","brand" => "Weavers","category" => "Spirits","subcategory" => "Gin","price" => "57.6","volume" => "700","alcohol_content" => "41.5","price_index" => "0.19827882960413082","country" => "Ireland","url" => "https://www.lcbo.com/en/weavers-gin-22447"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Chum Churum Peach","brand" => "Chum Churum","category" => "Spirits","subcategory" => "Soju","price" => "10.05","volume" => "360","alcohol_content" => "12.0","price_index" => "0.23263888888888892","country" => "South Korea","url" => "https://www.lcbo.com/en/chum-churum-peach-545236"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Angostura 7 Year Old Rum","brand" => "Angostura","category" => "Spirits","subcategory" => "Rum","price" => "40.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.134","country" => "Trinidad & Tobago","url" => "https://www.lcbo.com/en/angostura-7-year-old-rum-19821"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Highland Park Magnus Single Malt Scotch Whisky","brand" => "Highland Park","category" => "Spirits","subcategory" => "Whisky","price" => "64.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2165","country" => "United Kingdom","url" => "https://www.lcbo.com/en/highland-park-magnus-single-malt-scotch-whisky-541649"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jura Journey Island Single Malt Scotch Whisky","brand" => "JURA","category" => "Spirits","subcategory" => "Whisky","price" => "54.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.18316666666666667","country" => "United Kingdom","url" => "https://www.lcbo.com/en/jura-journey-island-single-malt-scotch-whisky-24689"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Muskoka Legendary Oddity Gin","brand" => "Muskoka Spirits","category" => "Spirits","subcategory" => "Gin","price" => "44.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.14983333333333335","country" => "Canada","url" => "https://www.lcbo.com/en/muskoka-legendary-oddity-gin-634857"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Velha Guarda Aguardente Velha 5-Year-Old Brandy","brand" => "Vintages Spirits","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "36.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12316666666666667","country" => "Portugal","url" => "https://www.lcbo.com/en/velha-guarda-aguardente-velha-5-year-old-brandy-56135"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Elora Distilling Elemental Vodka","brand" => "Elora Distilling","category" => "Spirits","subcategory" => "Vodka","price" => "40.0","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13333333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/elora-distilling-elemental-vodka-23263"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Licor de Ginja Rossio","brand" => "NULL","category" => "Spirits","subcategory" => "Liqueur","price" => "40.95","volume" => "700","alcohol_content" => "19.0","price_index" => "0.3078947368421053","country" => "Portugal","url" => "https://www.lcbo.com/en/licor-de-ginja-rossio-26670"
            ]);
            DB::table('alcohols')->insert([
            "title" => "J.P. Wiser's Cask Strength Port Barrel Finish","brand" => "Jp Wiser'S","category" => "Spirits","subcategory" => "Whisky","price" => "150.15","volume" => "750","alcohol_content" => "64.0","price_index" => "0.3128125","country" => "Canada","url" => "https://www.lcbo.com/en/j-p-wiser-s-cask-strength-port-barrel-finish-19559"
            ]);
            DB::table('alcohols')->insert([
            "title" => "18.8 Vodka","brand" => "18.8 Spirits","category" => "Spirits","subcategory" => "Vodka","price" => "28.75","volume" => "750","alcohol_content" => "18.8","price_index" => "0.20390070921985815","country" => "Canada","url" => "https://www.lcbo.com/en/18-8-vodka-15282"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cragganmore 12 Year Old","brand" => "Cragganmore","category" => "Spirits","subcategory" => "Whisky","price" => "99.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.33316666666666667","country" => "United Kingdom","url" => "https://www.lcbo.com/en/cragganmore-12-year-old-21160"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grizzly Vodka","brand" => "Grizzly","category" => "Spirits","subcategory" => "Vodka","price" => "36.9","volume" => "750","alcohol_content" => "45.0","price_index" => "0.10933333333333332","country" => "Canada","url" => "https://www.lcbo.com/en/grizzly-vodka-22539"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Limited Vodka","brand" => "Limited","category" => "Spirits","subcategory" => "Vodka","price" => "34.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1165","country" => "Canada","url" => "https://www.lcbo.com/en/limited-vodka-19524"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kardasi Ouzo Tirnavou","brand" => "Kardasi","category" => "Spirits","subcategory" => "Liqueur","price" => "20.9","volume" => "750","alcohol_content" => "39.4","price_index" => "0.07072758037225044","country" => "Greece","url" => "https://www.lcbo.com/en/kardasi-ouzo-tirnavou-401876"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Murphy's Law White Lightnin' Moonshine","brand" => "Murphy's Law","category" => "Spirits","subcategory" => "Whisky","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/murphy-s-law-white-lightnin-moonshine-512632"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mizu Lemongrass Shochu","brand" => "Private Stock","category" => "Spirits","subcategory" => "Soju","price" => "62.75","volume" => "750","alcohol_content" => "35.0","price_index" => "0.23904761904761904","country" => "Japan","url" => "https://www.lcbo.com/en/mizu-lemongrass-shochu-144005"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Casa Dragones Blanco","brand" => "CASA DRAGONES","category" => "Spirits","subcategory" => "Tequila","price" => "169.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.5665","country" => "Mexico","url" => "https://www.lcbo.com/en/casa-dragones-blanco-26348"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grand Marnier Louis Alexandre","brand" => "Grand Marnier","category" => "Spirits","subcategory" => "Liqueur","price" => "91.55","volume" => "750","alcohol_content" => "40.0","price_index" => "0.30516666666666664","country" => "France","url" => "https://www.lcbo.com/en/grand-marnier-louis-alexandre-648881"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mortlach 16 Year Old","brand" => "Mortlach","category" => "Spirits","subcategory" => "Whisky","price" => "170.95","volume" => "750","alcohol_content" => "43.4","price_index" => "0.5251920122887864","country" => "United Kingdom","url" => "https://www.lcbo.com/en/mortlach-16-year-old-10147"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tuo Xiao Jiu","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "8.05","volume" => "100","alcohol_content" => "45.0","price_index" => "0.1788888888888889","country" => "China","url" => "https://www.lcbo.com/en/tuo-xiao-jiu-119064"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crystal Head Vodka","brand" => "Crystal Head","category" => "Spirits","subcategory" => "Vodka","price" => "124.95","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.1785","country" => "Canada","url" => "https://www.lcbo.com/en/crystal-head-vodka-365270"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crown Royal Deluxe Bag and Box","brand" => "Crown Royal","category" => "Spirits","subcategory" => "Whisky","price" => "31.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1065","country" => "Canada","url" => "https://www.lcbo.com/en/crown-royal-deluxe-bag-and-box-11306"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenkinchie Distillers Edition","brand" => "Glenkinchie","category" => "Spirits","subcategory" => "Whisky","price" => "101.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.31612403100775194","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenkinchie-distillers-edition-645754"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Vilmos Pear Brandy","brand" => "Vilmos","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "27.15","volume" => "700","alcohol_content" => "37.5","price_index" => "0.10342857142857143","country" => "Hungary","url" => "https://www.lcbo.com/en/vilmos-pear-brandy-662932"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Still's Whisper Vodka By Kinsip","brand" => "Kinsip","category" => "Spirits","subcategory" => "Vodka","price" => "40.5","volume" => "750","alcohol_content" => "40.0","price_index" => "0.135","country" => "Canada","url" => "https://www.lcbo.com/en/still-s-whisper-vodka-by-kinsip-634865"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Luzhou Laojiao Touqu","brand" => "Luzhou Laojiao","category" => "Spirits","subcategory" => "Liqueur","price" => "35.5","volume" => "500","alcohol_content" => "52.0","price_index" => "0.13653846153846153","country" => "China","url" => "https://www.lcbo.com/en/luzhou-laojiao-touqu-445031"
            ]);
            DB::table('alcohols')->insert([
            "title" => "WhistlePig 10 Year Old","brand" => "WHISTLE PIG","category" => "Spirits","subcategory" => "Whisky","price" => "97.7","volume" => "750","alcohol_content" => "50.0","price_index" => "0.26053333333333334","country" => "United States","url" => "https://www.lcbo.com/en/whistlepig-10-year-old-24692"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Johnnie Walker Double Black","brand" => "Johnnie Walker","category" => "Spirits","subcategory" => "Whisky","price" => "77.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.25983333333333336","country" => "United Kingdom","url" => "https://www.lcbo.com/en/johnnie-walker-double-black-18306"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Niagara Falls Rye Canadian Whisky","brand" => "Niagara Falls Craft","category" => "Spirits","subcategory" => "Whisky","price" => "33.7","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11233333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/niagara-falls-rye-canadian-whisky-638353"
            ]);
            DB::table('alcohols')->insert([
            "title" => "No. 3 London Dry Gin","brand" => "No. 3","category" => "Spirits","subcategory" => "Gin","price" => "53.1","volume" => "750","alcohol_content" => "46.0","price_index" => "0.15391304347826087","country" => "Netherlands","url" => "https://www.lcbo.com/en/no-3-london-dry-gin-242107"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bib & Tucker 6 Year Old Small Batch Bourbon","brand" => "Bib & Tucker","category" => "Spirits","subcategory" => "Whisky","price" => "99.95","volume" => "750","alcohol_content" => "46.0","price_index" => "0.2897101449275362","country" => "United States","url" => "https://www.lcbo.com/en/bib-tucker-6-year-old-small-batch-bourbon-435883"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glen Of Imaal 5 Year Old Irish Whiskey","brand" => "GLEN OF IMAAL","category" => "Spirits","subcategory" => "Whisky","price" => "59.95","volume" => "750","alcohol_content" => "42.0","price_index" => "0.19031746031746033","country" => "Ireland","url" => "https://www.lcbo.com/en/glen-of-imaal-5yo-irish-whiskey-22831"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Auchentoshan Three Wood Lowland Single Malt Scotch Whisky","brand" => "Auchentoshan","category" => "Spirits","subcategory" => "Whisky","price" => "89.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.27891472868217054","country" => "United Kingdom","url" => "https://www.lcbo.com/en/auchentoshan-three-wood-lowland-single-malt-scotch-whisky-720532"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Amaro Istriano Rossi 2019","brand" => "Vintages Front Line Release","category" => "Spirits","subcategory" => "Liqueur","price" => "39.95","volume" => "700","alcohol_content" => "28.0","price_index" => "0.20382653061224487","country" => "Croatia","url" => "https://www.lcbo.com/en/amaro-istriano-rossi-2019-20675"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Highland Park 18 Year Old Single Malt Scotch Whisky","brand" => "Highland Park","category" => "Spirits","subcategory" => "Whisky","price" => "210.25","volume" => "750","alcohol_content" => "43.0","price_index" => "0.6519379844961241","country" => "United Kingdom","url" => "https://www.lcbo.com/en/highland-park-18-year-old-single-malt-scotch-whisky-500231"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Pierre Ferrand Dry Curacao","brand" => "PIERRE FERRAND","category" => "Spirits","subcategory" => "Liqueur","price" => "37.55","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12516666666666665","country" => "France","url" => "https://www.lcbo.com/en/pierre-ferrand-dry-curacao-23057"
            ]);
            DB::table('alcohols')->insert([
            "title" => "J.P. Wiser's Manhattan Canadian Whisky Cocktail","brand" => "J.P. Wiser's","category" => "Spirits","subcategory" => "Premixed Cocktails","price" => "16.8","volume" => "375","alcohol_content" => "35.0","price_index" => "0.128","country" => "Canada","url" => "https://www.lcbo.com/en/j-p-wiser-s-manhattan-canadian-whisky-cocktail-18863"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Knob Creek 15 Year Old Bourbon","brand" => "Knob Creek","category" => "Spirits","subcategory" => "Whisky","price" => "199.95","volume" => "750","alcohol_content" => "50.0","price_index" => "0.5332","country" => "United States","url" => "https://www.lcbo.com/en/knob-creek-15-year-old-bourbon-24970"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Alberta Premium 20YO Rye","brand" => "Alberta Premium","category" => "Spirits","subcategory" => "Whisky","price" => "89.95","volume" => "750","alcohol_content" => "42.0","price_index" => "0.28555555555555556","country" => "Canada","url" => "https://www.lcbo.com/en/alberta-premium-20yo-rye-14150"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Berta Grappa Giulia Affinata","brand" => "Berta","category" => "Spirits","subcategory" => "Grappa","price" => "92.8","volume" => "700","alcohol_content" => "40.0","price_index" => "0.3314285714285714","country" => "Italy","url" => "https://www.lcbo.com/en/berta-grappa-giulia-affinata-446715"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kinsip Juniper's Wit Gin","brand" => "Kinsip","category" => "Spirits","subcategory" => "Gin","price" => "48.35","volume" => "750","alcohol_content" => "40.0","price_index" => "0.16116666666666668","country" => "Canada","url" => "https://www.lcbo.com/en/kinsip-juniper-s-wit-gin-634873"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Amaro Amara D'Arancia Rossa IGP","brand" => "Rossa Soc. Agr. Srl","category" => "Spirits","subcategory" => "Liqueur","price" => "41.7","volume" => "750","alcohol_content" => "30.8","price_index" => "0.18051948051948052","country" => "Italy","url" => "https://www.lcbo.com/en/amaro-amara-d-arancia-rossa-igp-10752"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grey Goose Vodka","brand" => "Grey Goose","category" => "Spirits","subcategory" => "Vodka","price" => "250.95","volume" => "3000","alcohol_content" => "40.0","price_index" => "0.20912499999999998","country" => "France","url" => "https://www.lcbo.com/en/grey-goose-vodka-465294"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Willibald Farm Vodka","brand" => "Willibald","category" => "Spirits","subcategory" => "Vodka","price" => "37.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1265","country" => "Canada","url" => "https://www.lcbo.com/en/willibald-farm-vodka-25344"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mount Gay Black Barrel Double Cask Blend","brand" => "Mount Gay","category" => "Spirits","subcategory" => "Rum","price" => "60.45","volume" => "750","alcohol_content" => "43.0","price_index" => "0.1874418604651163","country" => "Barbados","url" => "https://www.lcbo.com/en/mount-gay-black-barrel-double-cask-blend-17465"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glengoyne 10 Year Old Single Highland Malt Scotch Whisky","brand" => "Glengoyne","category" => "Spirits","subcategory" => "Whisky","price" => "65.25","volume" => "750","alcohol_content" => "43.0","price_index" => "0.20232558139534884","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glengoyne-10-year-old-single-highland-malt-scotch-whisky-220749"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Twelve Barrels Canadian Whisky","brand" => "Twelve Barrels","category" => "Spirits","subcategory" => "Whisky","price" => "35.5","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11833333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/twelve-barrels-canadian-whisky-25648"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ancnoc 12 Year Old Single Malt Scotch Whisky","brand" => "Ancnoc","category" => "Spirits","subcategory" => "Whisky","price" => "80.2","volume" => "700","alcohol_content" => "40.0","price_index" => "0.2864285714285714","country" => "United Kingdom","url" => "https://www.lcbo.com/en/ancnoc-12-year-old-single-malt-scotch-whisky-358341"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hong Xing Ergoutou 8-Year-Old","brand" => "Beijing Redstar","category" => "Spirits","subcategory" => "Liqueur","price" => "28.2","volume" => "500","alcohol_content" => "52.8","price_index" => "0.10681818181818181","country" => "China","url" => "https://www.lcbo.com/en/hong-xing-ergoutou-8-year-old-498949"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ardbeg Corryvreckan Islay Single Malt Scotch Whisky","brand" => "Ardbeg","category" => "Spirits","subcategory" => "Whisky","price" => "201.4","volume" => "750","alcohol_content" => "57.1","price_index" => "0.4702860478692352","country" => "United Kingdom","url" => "https://www.lcbo.com/en/ardbeg-corryvreckan-islay-single-malt-scotch-whisky-211730"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lucano Sambuca Anniversario","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "33.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11066666666666668","country" => "Italy","url" => "https://www.lcbo.com/en/lucano-sambuca-anniversario-150309"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Aalborg Taffel Akvavit","brand" => "Aalborg","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "34.65","volume" => "750","alcohol_content" => "45.0","price_index" => "0.10266666666666666","country" => "Denmark","url" => "https://www.lcbo.com/en/aalborg-taffel-akvavit-495192"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dunville's 1808 Irish Whiskey","brand" => "DUNVILLES","category" => "Spirits","subcategory" => "Whisky","price" => "52.3","volume" => "700","alcohol_content" => "40.0","price_index" => "0.18678571428571428","country" => "United Kingdom","url" => "https://www.lcbo.com/en/dunville-s-1808-irish-whiskey-24685"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Marie Duffau Bas Armagnac Napoleon","brand" => "Marie Duffau","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "49.35","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1645","country" => "France","url" => "https://www.lcbo.com/en/marie-duffau-bas-armagnac-napoleon-313304"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Johnnie Walker Icon Red","brand" => "Johnnie Walker","category" => "Spirits","subcategory" => "Whisky","price" => "33.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11066666666666668","country" => "United Kingdom","url" => "https://www.lcbo.com/en/johnnie-walker-icon-red-21710"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Johnnie Walker Blue Label Scotch Whisky","brand" => "Johnnie Walker","category" => "Spirits","subcategory" => "Whisky","price" => "314.95","volume" => "750","alcohol_content" => "40.0","price_index" => "1.0498333333333334","country" => "United Kingdom","url" => "https://www.lcbo.com/en/johnnie-walker-blue-label-scotch-whisky-308155"
            ]);
            DB::table('alcohols')->insert([
            "title" => "MoneyBag Vodka","brand" => "MoneyBag","category" => "Spirits","subcategory" => "Vodka","price" => "30.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10066666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/moneybag-vodka-14609"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Haymans Peach And Rose Cup Gin","brand" => "Hayman's","category" => "Spirits","subcategory" => "Gin","price" => "49.95","volume" => "700","alcohol_content" => "25.0","price_index" => "0.2854285714285714","country" => "United Kingdom","url" => "https://www.lcbo.com/en/haymans-peach-and-rose-cup-gin-22451"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jura Seven Wood","brand" => "Jura","category" => "Spirits","subcategory" => "Whisky","price" => "100.1","volume" => "750","alcohol_content" => "40.0","price_index" => "0.33366666666666667","country" => "United Kingdom","url" => "https://www.lcbo.com/en/jura-seven-wood-578393"
            ]);
            DB::table('alcohols')->insert([
            "title" => "John Sleeman & Sons Traditional Straight Whisky","brand" => "Spring Mill Distillery","category" => "Spirits","subcategory" => "Whisky","price" => "54.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.18316666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/john-sleeman-sons-traditional-straight-whisky-27998"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mermaid Pink Gin","brand" => "Mermaid","category" => "Spirits","subcategory" => "Gin","price" => "83.95","volume" => "700","alcohol_content" => "38.0","price_index" => "0.3156015037593985","country" => "United Kingdom","url" => "https://www.lcbo.com/en/mermaid-pink-gin-14755"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Blackwell Fine Jamaican Rum 007 Limited Edition","brand" => "Blackwell Rum","category" => "Spirits","subcategory" => "Rum","price" => "44.7","volume" => "750","alcohol_content" => "40.0","price_index" => "0.14900000000000002","country" => "United Kingdom","url" => "https://www.lcbo.com/en/blackwell-fine-jamaican-rum-007-limited-edition-20780"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Nikka Coffey Vodka","brand" => "Nikka","category" => "Spirits","subcategory" => "Vodka","price" => "37.05","volume" => "700","alcohol_content" => "40.0","price_index" => "0.13232142857142856","country" => "Japan","url" => "https://www.lcbo.com/en/nikka-coffey-vodka-14334"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenfiddich 14 Year Old Bourbon Barrel Reserve","brand" => "Glenfiddich","category" => "Spirits","subcategory" => "Whisky","price" => "85.25","volume" => "750","alcohol_content" => "43.0","price_index" => "0.26434108527131783","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenfiddich-14-year-old-bourbon-barrel-reserve-10831"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dunrobin Artisanal Vodka","brand" => "Dunrobin","category" => "Spirits","subcategory" => "Vodka","price" => "39.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13316666666666668","country" => "Canada","url" => "https://www.lcbo.com/en/dunrobin-artisanal-vodka-22092"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mizhiu Tou Premium Rice Liquor","brand" => "NULL","category" => "Spirits","subcategory" => "Liqueur","price" => "29.95","volume" => "750","alcohol_content" => "35.0","price_index" => "0.1140952380952381","country" => "Taiwan, Province of China","url" => "https://www.lcbo.com/en/mizhiu-tou-premium-rice-liquor-26357"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Persian Empire XO Brandy","brand" => "Persian Empire","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "35.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11983333333333335","country" => "Canada","url" => "https://www.lcbo.com/en/persian-empire-xo-brandy-23543"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Old Pulteney 15 Year Old Single Malt Scotch","brand" => "Old Pulteney","category" => "Spirits","subcategory" => "Whisky","price" => "130.45","volume" => "750","alcohol_content" => "46.0","price_index" => "0.37811594202898546","country" => "United Kingdom","url" => "https://www.lcbo.com/en/old-pulteney-15-year-old-single-malt-scotch-618967"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Olmeca Altos Reposado Tequila","brand" => "Olmeca","category" => "Spirits","subcategory" => "Tequila","price" => "46.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.154","country" => "Mexico","url" => "https://www.lcbo.com/en/olmeca-altos-reposado-tequila-16551"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Few Bourbon","brand" => "Few","category" => "Spirits","subcategory" => "Whisky","price" => "70.8","volume" => "750","alcohol_content" => "46.5","price_index" => "0.20301075268817204","country" => "United States","url" => "https://www.lcbo.com/en/few-bourbon-480806"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Generous Gin Organic","brand" => "Generous Gin","category" => "Spirits","subcategory" => "Gin","price" => "62.9","volume" => "700","alcohol_content" => "44.0","price_index" => "0.20422077922077922","country" => "France","url" => "https://www.lcbo.com/en/generous-gin-organic-18271"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kleiner Feigling Fig Liqueur","brand" => "Kleiner Feigling","category" => "Spirits","subcategory" => "Liqueur","price" => "20.95","volume" => "500","alcohol_content" => "20.0","price_index" => "0.2095","country" => "Germany","url" => "https://www.lcbo.com/en/kleiner-feigling-fig-liqueur-500009"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smirnoff Infusions Cucumber & Lime","brand" => "Smirnoff","category" => "Spirits","subcategory" => "Vodka","price" => "29.75","volume" => "750","alcohol_content" => "30.0","price_index" => "0.1322222222222222","country" => "United States","url" => "https://www.lcbo.com/en/smirnoff-infusions-cucumber-lime-14731"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Persian Empire Gold Arak Saggi","brand" => "Persian Empire","category" => "Spirits","subcategory" => "Liqueur","price" => "45.0","volume" => "750","alcohol_content" => "40.0","price_index" => "0.15","country" => "Canada","url" => "https://www.lcbo.com/en/persian-empire-gold-arak-saggi-22768"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Absolut Juice Pear And Elderflower","brand" => "Absolut","category" => "Spirits","subcategory" => "Vodka","price" => "32.7","volume" => "750","alcohol_content" => "35.0","price_index" => "0.12457142857142858","country" => "Sweden","url" => "https://www.lcbo.com/en/absolut-juice-pear-and-elderflower-19514"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smirnoff Infusions Strawberry & Rose","brand" => "Smirnoff","category" => "Spirits","subcategory" => "Vodka","price" => "29.4","volume" => "750","alcohol_content" => "30.0","price_index" => "0.13066666666666665","country" => "United States","url" => "https://www.lcbo.com/en/smirnoff-infusions-strawberry-rose-14733"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Local Spirit Whisky 3","brand" => "Local Spirit","category" => "Spirits","subcategory" => "Whisky","price" => "36.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12316666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/local-spirit-whisky-3-22132"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Whitley Neill Raspberry Gin","brand" => "Whitley Neill","category" => "Spirits","subcategory" => "Gin","price" => "44.2","volume" => "750","alcohol_content" => "43.0","price_index" => "0.13705426356589148","country" => "United Kingdom","url" => "https://www.lcbo.com/en/whitley-neill-raspberry-gin-16095"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Conker Cold Brew","brand" => "Conker","category" => "Spirits","subcategory" => "Liqueur","price" => "31.35","volume" => "700","alcohol_content" => "24.6","price_index" => "0.18205574912891986","country" => "United Kingdom","url" => "https://www.lcbo.com/en/conker-cold-brew-14610"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hounds Black Vodka","brand" => "Hounds","category" => "Spirits","subcategory" => "Vodka","price" => "35.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11983333333333335","country" => "Canada","url" => "https://www.lcbo.com/en/hounds-black-vodka-24528"
            ]);
            DB::table('alcohols')->insert([
            "title" => "El Tequileno Gran Reserva Reposado","brand" => "El Tequileno","category" => "Spirits","subcategory" => "Tequila","price" => "87.45","volume" => "750","alcohol_content" => "40.0","price_index" => "0.29150000000000004","country" => "Mexico","url" => "https://www.lcbo.com/en/el-tequileno-gran-reserva-reposado-19459"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Antigua Porteno Columbian Rum Solera 8","brand" => "Antigua Porteno Rum","category" => "Spirits","subcategory" => "Rum","price" => "44.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.14916666666666667","country" => "Colombia","url" => "https://www.lcbo.com/en/antigua-porteno-columbian-rum-solera-8-13590"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Macallan Double Cask 15 yr","brand" => "The Macallan","category" => "Spirits","subcategory" => "Whisky","price" => "229.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.7130232558139534","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-macallan-double-cask-15-yr-18824"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Evangelista Punch Abruzzo","brand" => "Evangelista","category" => "Spirits","subcategory" => "Liqueur","price" => "33.0","volume" => "700","alcohol_content" => "35.0","price_index" => "0.1346938775510204","country" => "Italy","url" => "https://www.lcbo.com/en/evangelista-punch-abruzzo-896647"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cask And Crew Blended Whiskey","brand" => "Cask And Crew Whiskey","category" => "Spirits","subcategory" => "Whisky","price" => "51.7","volume" => "750","alcohol_content" => "40.0","price_index" => "0.17233333333333334","country" => "United States","url" => "https://www.lcbo.com/en/cask-and-crew-blended-whiskey-635060"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Laneway Ever Gin","brand" => "LANEWAY DISTILLERS","category" => "Spirits","subcategory" => "Premixed Cocktails","price" => "69.95","volume" => "750","alcohol_content" => "43.5","price_index" => "0.21440613026819924","country" => "Canada","url" => "https://www.lcbo.com/en/laneway-ever-gin-27566"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Spirit In Niagara Juiced Up Vodka","brand" => "Spirit In Niagara","category" => "Spirits","subcategory" => "Vodka","price" => "40.0","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13333333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/spirit-in-niagara-juiced-up-vodka-23917"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bowmore Vault Edition 2nd Release (2 Bottle Limit)","brand" => "Bowmore","category" => "Spirits","subcategory" => "Whisky","price" => "199.95","volume" => "700","alcohol_content" => "50.1","price_index" => "0.5701454234388366","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bowmore-vault-edition-2nd-release-13864"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tomatin 14 Year Old Portwood Highland Single Malt Scotch Whisky","brand" => "Tomatin","category" => "Spirits","subcategory" => "Whisky","price" => "140.4","volume" => "750","alcohol_content" => "46.0","price_index" => "0.40695652173913044","country" => "United Kingdom","url" => "https://www.lcbo.com/en/tomatin-14-year-old-portwood-highland-single-malt-scotch-whisky-435834"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Weller Antique 107 Original Wheated Straight Bourbon (1 Bottle Limit)","brand" => "W.L Weller","category" => "Spirits","subcategory" => "Whisky","price" => "64.95","volume" => "750","alcohol_content" => "53.5","price_index" => "0.16186915887850467","country" => "United States","url" => "https://www.lcbo.com/en/weller-antique-107-original-wheated-straight-bourbon-1-bottle-limit-467969"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tsipouro Tsilili Without Anise","brand" => "NULL","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "32.35","volume" => "700","alcohol_content" => "40.0","price_index" => "0.1155357142857143","country" => "Greece","url" => "https://www.lcbo.com/en/tsipouro-tsilili-without-anise-27179"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Johnnie Walker Red Label Scotch Whisky","brand" => "Johnnie Walker","category" => "Spirits","subcategory" => "Whisky","price" => "10.45","volume" => "200","alcohol_content" => "40.0","price_index" => "0.130625","country" => "United Kingdom","url" => "https://www.lcbo.com/en/johnnie-walker-red-label-scotch-whisky-217984"
            ]);
            DB::table('alcohols')->insert([
            "title" => "FEW Straight Rye Whiskey","brand" => "FEW","category" => "Spirits","subcategory" => "Whisky","price" => "70.25","volume" => "750","alcohol_content" => "46.5","price_index" => "0.2014336917562724","country" => "United States","url" => "https://www.lcbo.com/en/few-straight-rye-whiskey-22701"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Appleton Estate 21 Years Old","brand" => "Appleton Estate","category" => "Spirits","subcategory" => "Rum","price" => "149.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.46496124031007746","country" => "Jamaica","url" => "https://www.lcbo.com/en/appleton-estate-21-years-old-452938"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Walker's Special Old Whisky (PET)","brand" => "Special Old Whisky","category" => "Spirits","subcategory" => "Whisky","price" => "9.1","volume" => "200","alcohol_content" => "40.0","price_index" => "0.11374999999999999","country" => "Canada","url" => "https://www.lcbo.com/en/walker-s-special-old-whisky-pet-251397"
            ]);
            DB::table('alcohols')->insert([
            "title" => "New Riff Kentucky Bottled-In-Bond Straight Rye","brand" => "NEW RIFF WHISKEY","category" => "Spirits","subcategory" => "Whisky","price" => "104.95","volume" => "750","alcohol_content" => "50.0","price_index" => "0.27986666666666665","country" => "United States","url" => "https://www.lcbo.com/en/new-riff-kentucky-bottled-in-bond-straight-rye-26494"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mount Gay XO","brand" => "Mount Gay","category" => "Spirits","subcategory" => "Rum","price" => "99.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.30992248062015504","country" => "Barbados","url" => "https://www.lcbo.com/en/mount-gay-xo-15039"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Eagle Rare 10 Year Old Kentucky Straight Bourbon (1 Bottle Limit)","brand" => "Eagle Rare","category" => "Spirits","subcategory" => "Whisky","price" => "57.45","volume" => "750","alcohol_content" => "45.0","price_index" => "0.17022222222222222","country" => "United States","url" => "https://www.lcbo.com/en/eagle-rare-10-year-old-kentucky-straight-bourbon-limit-1-bottle-limit-604785"
            ]);
            DB::table('alcohols')->insert([
            "title" => "HvO Spring Water Vodka","brand" => "HvO","category" => "Spirits","subcategory" => "Vodka","price" => "44.65","volume" => "750","alcohol_content" => "40.0","price_index" => "0.14883333333333332","country" => "Canada","url" => "https://www.lcbo.com/en/hvo-spring-water-vodka-22096"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Persian Empire Barrel Aged Coffee Liqueur","brand" => "Persian Empire","category" => "Spirits","subcategory" => "Liqueur","price" => "28.8","volume" => "750","alcohol_content" => "24.0","price_index" => "0.16","country" => "Canada","url" => "https://www.lcbo.com/en/persian-empire-barrel-aged-coffee-liqueur-521146"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Legendary Silkie Irish Whiskey","brand" => "The Legendary Silkie","category" => "Spirits","subcategory" => "Whisky","price" => "52.65","volume" => "750","alcohol_content" => "46.0","price_index" => "0.15260869565217391","country" => "Ireland","url" => "https://www.lcbo.com/en/the-legendary-silkie-irish-whiskey-22697"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Stranahan's Colorado Whiskey","brand" => "Stranahan's","category" => "Spirits","subcategory" => "Whisky","price" => "70.25","volume" => "750","alcohol_content" => "47.0","price_index" => "0.19929078014184398","country" => "United States","url" => "https://www.lcbo.com/en/stranahan-s-colorado-whiskey-430413"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Blanton's Original Bourbon (2 Bottle Limit)","brand" => "Blanton's","category" => "Spirits","subcategory" => "Whisky","price" => "69.95","volume" => "750","alcohol_content" => "46.62","price_index" => "0.20005720005720007","country" => "United States","url" => "https://www.lcbo.com/en/blanton-s-original-bourbon-bottle-limit-2-255349"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Remy Martin XO Red CNY","brand" => "Remy Martin","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "310.2","volume" => "750","alcohol_content" => "40.0","price_index" => "1.034","country" => "France","url" => "https://www.lcbo.com/en/remy-martin-xo-red-cny-22001"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Old Son's Distillery Stiff Upper Lip Canadian Whisky","brand" => "Old Son's","category" => "Spirits","subcategory" => "Whisky","price" => "34.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1165","country" => "Canada","url" => "https://www.lcbo.com/en/old-son-s-distillery-stiff-upper-lip-canadian-whisky-25081"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gran Patron Platinum Silver Tequila","brand" => "Gran Patr�n","category" => "Spirits","subcategory" => "Tequila","price" => "351.95","volume" => "750","alcohol_content" => "40.0","price_index" => "1.1731666666666667","country" => "Mexico","url" => "https://www.lcbo.com/en/gran-patron-platinum-silver-tequila-16063"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Spicebox Pumpkin","brand" => "Spicebox","category" => "Spirits","subcategory" => "Whisky","price" => "16.6","volume" => "375","alcohol_content" => "35.0","price_index" => "0.1264761904761905","country" => "Canada","url" => "https://www.lcbo.com/en/spicebox-pumpkin-535187"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hayman's Sloe Gin","brand" => "Hayman's","category" => "Spirits","subcategory" => "Gin","price" => "39.15","volume" => "700","alcohol_content" => "26.0","price_index" => "0.2151098901098901","country" => "United Kingdom","url" => "https://www.lcbo.com/en/hayman-s-sloe-gin-302679"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Freihof 1885 Marille Apricot Schnapps","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "31.45","volume" => "500","alcohol_content" => "38.0","price_index" => "0.1655263157894737","country" => "Austria","url" => "https://www.lcbo.com/en/freihof-1885-marille-apricot-schnapps-309566"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Method and Madness Single Grain Whiskey","brand" => "Method And Madness","category" => "Spirits","subcategory" => "Whisky","price" => "49.6","volume" => "700","alcohol_content" => "46.0","price_index" => "0.15403726708074533","country" => "Ireland","url" => "https://www.lcbo.com/en/method-and-madness-single-grain-whiskey-14132"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Er Guo Tou Red Shao Jiu","brand" => "Er Guo","category" => "Spirits","subcategory" => "Liqueur","price" => "5.45","volume" => "100","alcohol_content" => "56.0","price_index" => "0.09732142857142856","country" => "China","url" => "https://www.lcbo.com/en/er-guo-tou-red-shaou-jiu-26899"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sight Gin","brand" => "Sight","category" => "Spirits","subcategory" => "Gin","price" => "36.25","volume" => "750","alcohol_content" => "39.3","price_index" => "0.12298558100084821","country" => "Canada","url" => "https://www.lcbo.com/en/sight-gin-17790"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Askalon Extra Fine Special 80 Proof Arak KP","brand" => "Askalon","category" => "Spirits","subcategory" => "Liqueur","price" => "35.15","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11716666666666666","country" => "Israel","url" => "https://www.lcbo.com/en/askalon-extra-fine-special-80-proof-arak-kp-230409"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bowmore Vault Edition 1st Release","brand" => "BOWMORE","category" => "Spirits","subcategory" => "Whisky","price" => "199.95","volume" => "700","alcohol_content" => "51.5","price_index" => "0.5546463245492371","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bowmore-vault-edition-1st-release-24669"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Old Tub Bourbon","brand" => "Old Tub","category" => "Spirits","subcategory" => "Whisky","price" => "44.95","volume" => "750","alcohol_content" => "50.0","price_index" => "0.11986666666666668","country" => "United States","url" => "https://www.lcbo.com/en/old-tub-bourbon-19565"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cantarelle Gin De Provence, France","brand" => "Cantarelle","category" => "Spirits","subcategory" => "Gin","price" => "54.7","volume" => "700","alcohol_content" => "40.0","price_index" => "0.19535714285714287","country" => "France","url" => "https://www.lcbo.com/en/cantarelle-gin-de-provence-france-18263"
            ]);
            DB::table('alcohols')->insert([
            "title" => "That Boutique-Y Whisky Company Whisky Holiday Calendar","brand" => "That Boutique-Y Whisky Company","category" => "Spirits","subcategory" => "Whisky","price" => "180.1","volume" => "720","alcohol_content" => "50.0","price_index" => "0.5002777777777777","country" => "United Kingdom","url" => "https://www.lcbo.com/en/that-boutique-y-whisky-company-whisky-holiday-calendar-11662"
            ]);
            DB::table('alcohols')->insert([
            "title" => "McConnell's 5 Year Old Irish Whiskey","brand" => "McConnell's","category" => "Spirits","subcategory" => "Whisky","price" => "45.2","volume" => "700","alcohol_content" => "42.0","price_index" => "0.15374149659863948","country" => "Ireland","url" => "https://www.lcbo.com/en/mcconnell-s-5-year-old-irish-whiskey-23075"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kentucky Owl Confiscated Bourbon Whiskey","brand" => "Kentucky Owl","category" => "Spirits","subcategory" => "Whisky","price" => "180.25","volume" => "750","alcohol_content" => "48.2","price_index" => "0.49861687413554623","country" => "United States","url" => "https://www.lcbo.com/en/kentucky-owl-confiscated-bourbon-whiskey-22750"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Talisker Distillers Edition Single Malt Scotch Whisky","brand" => "Talisker","category" => "Spirits","subcategory" => "Whisky","price" => "124.95","volume" => "750","alcohol_content" => "45.8","price_index" => "0.36375545851528385","country" => "United Kingdom","url" => "https://www.lcbo.com/en/talisker-distillers-edition-single-malt-scotch-whisky-503078"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Leblon Cachaca","brand" => "Leblon","category" => "Spirits","subcategory" => "Rum","price" => "34.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1165","country" => "Brazil","url" => "https://www.lcbo.com/en/leblon-cachaca-516088"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glendalough Wild Botanical Gin","brand" => "Glendalough","category" => "Spirits","subcategory" => "Gin","price" => "43.7","volume" => "750","alcohol_content" => "41.0","price_index" => "0.1421138211382114","country" => "Ireland","url" => "https://www.lcbo.com/en/glendalough-wild-botanical-gin-635482"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Laneway No. 11 Gin","brand" => "LANEWAY DISTILLERS","category" => "Spirits","subcategory" => "Gin","price" => "59.35","volume" => "750","alcohol_content" => "43.5","price_index" => "0.18191570881226055","country" => "Canada","url" => "https://www.lcbo.com/en/laneway-no-11-gin-27561"
            ]);
            DB::table('alcohols')->insert([
            "title" => "La Caravedo Puro Quebranta Pisco","brand" => "La Caravedo","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "49.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1665","country" => "Peru","url" => "https://www.lcbo.com/en/la-caravedo-puro-quebranta-pisco-542654"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Basil Hayden's Dark Rye","brand" => "Basil Hayden","category" => "Spirits","subcategory" => "Whisky","price" => "55.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1865","country" => "United States","url" => "https://www.lcbo.com/en/basil-hayden-s-dark-rye-543611"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Aria Dark Rum","brand" => "Aria","category" => "Spirits","subcategory" => "Rum","price" => "29.5","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09833333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/aria-dark-rum-25061"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Wave Pink Gin","brand" => "Wave Pink Gin","category" => "Spirits","subcategory" => "Gin","price" => "39.25","volume" => "700","alcohol_content" => "37.0","price_index" => "0.15154440154440155","country" => "Spain","url" => "https://www.lcbo.com/en/the-wave-pink-gin-14764"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lot No. 40 Peated Quarter Cask Canadian Whisky","brand" => "Lot No. 40","category" => "Spirits","subcategory" => "Whisky","price" => "90.3","volume" => "750","alcohol_content" => "56.2","price_index" => "0.21423487544483982","country" => "Canada","url" => "https://www.lcbo.com/en/lot-no-40-peated-quarter-cask-canadian-whisky-23105"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Russian Prince Vodka (PET)","brand" => "Russian Prince","category" => "Spirits","subcategory" => "Vodka","price" => "42.45","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.0930921052631579","country" => "Canada","url" => "https://www.lcbo.com/en/russian-prince-vodka-pet-53546"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hennessy XO","brand" => "Hennessy","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "188.6","volume" => "375","alcohol_content" => "40.0","price_index" => "1.2573333333333332","country" => "France","url" => "https://www.lcbo.com/en/hennessy-xo-629055"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Canadian Red Pepper Vodka","brand" => "Anat Inc","category" => "Spirits","subcategory" => "Vodka","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/canadian-red-pepper-vodka-25124"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Beattie's Distillers Poitin","brand" => "Beattie's","category" => "Spirits","subcategory" => "Whisky","price" => "37.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1265","country" => "Canada","url" => "https://www.lcbo.com/en/beatties-distillers-poitin-512616"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mal Paso Especial Pisco","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "37.75","volume" => "750","alcohol_content" => "35.0","price_index" => "0.1438095238095238","country" => "Chile","url" => "https://www.lcbo.com/en/mal-paso-especial-pisco-case-133289"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Patron Anejo","brand" => "Patron","category" => "Spirits","subcategory" => "Tequila","price" => "53.1","volume" => "375","alcohol_content" => "40.0","price_index" => "0.35400000000000004","country" => "Mexico","url" => "https://www.lcbo.com/en/patron-anejo-25822"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Berta Lingera Amaro d'Erbe","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "58.5","volume" => "700","alcohol_content" => "30.0","price_index" => "0.2785714285714286","country" => "Italy","url" => "https://www.lcbo.com/en/berta-lingera-amaro-d-erbe-446665"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Pravda Espresso Flavoured Vodka","brand" => "Pravda Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "34.5","volume" => "750","alcohol_content" => "37.5","price_index" => "0.12266666666666666","country" => "Poland","url" => "https://www.lcbo.com/en/pravda-espresso-flavoured-vodka-18171"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Beattie's Farm Crafted Potato Gin","brand" => "Beattie's","category" => "Spirits","subcategory" => "Gin","price" => "37.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1265","country" => "Canada","url" => "https://www.lcbo.com/en/beattie-s-farm-crafted-potato-gin-645622"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Alumni Whisky Series - Yvan Cournoyer","brand" => "Wisers Alumni Series","category" => "Spirits","subcategory" => "Whisky","price" => "45.25","volume" => "750","alcohol_content" => "40.0","price_index" => "0.15083333333333335","country" => "Canada","url" => "https://www.lcbo.com/en/alumni-whisky-series-yvan-cournoyer-14694"
            ]);
            DB::table('alcohols')->insert([
            "title" => "CC Canadian Corn Vodka Liquor","brand" => "Kim's Winery & Distillery","category" => "Spirits","subcategory" => "Soju","price" => "12.5","volume" => "375","alcohol_content" => "40.3","price_index" => "0.0827129859387924","country" => "Canada","url" => "https://www.lcbo.com/en/cc-canadian-corn-vodka-liquor-16975"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Aberfeldy 16 Year Old Highland Single Malt Scotch Whisky","brand" => "Aberfeldy","category" => "Spirits","subcategory" => "Whisky","price" => "99.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.33316666666666667","country" => "United Kingdom","url" => "https://www.lcbo.com/en/aberfeldy-16-year-old-highland-single-malt-scotch-whisky-441048"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Pallini Limoncello Vegan Cream","brand" => "Pallini Limoncello","category" => "Spirits","subcategory" => "Liqueur","price" => "26.9","volume" => "350","alcohol_content" => "15.0","price_index" => "0.5123809523809524","country" => "Italy","url" => "https://www.lcbo.com/en/pallini-limoncello-vegan-cream-318039"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Black's Distillery Gin","brand" => "Black's Distillery","category" => "Spirits","subcategory" => "Gin","price" => "40.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1365","country" => "Canada","url" => "https://www.lcbo.com/en/black-s-distillery-gin-17389"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ballantine's Finest Blended Malt Scotch Whisky","brand" => "Ballantine's","category" => "Spirits","subcategory" => "Whisky","price" => "67.55","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.0965","country" => "United Kingdom","url" => "https://www.lcbo.com/en/ballantine-s-finest-blended-malt-scotch-whisky-207670"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cobalto Tequila Blanco Organic","brand" => "Cobalto Tequila","category" => "Spirits","subcategory" => "Tequila","price" => "84.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2831666666666667","country" => "Mexico","url" => "https://www.lcbo.com/en/cobalto-tequila-blanco-organic-19461"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jack Daniel's Tennessee Honey","brand" => "Jack Daniels Flavours","category" => "Spirits","subcategory" => "Liqueur","price" => "20.1","volume" => "375","alcohol_content" => "35.0","price_index" => "0.15314285714285716","country" => "United States","url" => "https://www.lcbo.com/en/jack-daniel-s-tennessee-honey-276568"
            ]);
            DB::table('alcohols')->insert([
            "title" => "West Cork Single Malt Calvados Cask Finish","brand" => "West Cork Whiskey","category" => "Spirits","subcategory" => "Whisky","price" => "58.0","volume" => "700","alcohol_content" => "43.0","price_index" => "0.19269102990033224","country" => "Ireland","url" => "https://www.lcbo.com/en/west-cork-single-malt-calvados-cask-finish-19949"
            ]);
            DB::table('alcohols')->insert([
            "title" => "18.8 Gin","brand" => "18.8 Spirits","category" => "Spirits","subcategory" => "Gin","price" => "29.95","volume" => "750","alcohol_content" => "19.2","price_index" => "0.2079861111111111","country" => "Canada","url" => "https://www.lcbo.com/en/18-8-gin-16868"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Aqua Ambre","brand" => "Aqua Amber","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "44.35","volume" => "750","alcohol_content" => "42.0","price_index" => "0.1407936507936508","country" => "France","url" => "https://www.lcbo.com/en/aqua-ambre-568485"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Teeling Barleywine","brand" => "Teeling Irish Whiskey","category" => "Spirits","subcategory" => "Whisky","price" => "80.05","volume" => "700","alcohol_content" => "46.0","price_index" => "0.2486024844720497","country" => "Ireland","url" => "https://www.lcbo.com/en/teeling-barleywine-13983"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bare Bone Vodka","brand" => "Bare Bone Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "28.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.094","country" => "United States","url" => "https://www.lcbo.com/en/bare-bone-vodka-15493"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mac Na Braiche","brand" => "Mac Na Braiche","category" => "Spirits","subcategory" => "Whisky","price" => "124.15","volume" => "750","alcohol_content" => "46.0","price_index" => "0.35985507246376813","country" => "Canada","url" => "https://www.lcbo.com/en/mac-na-braiche-22108"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Avallen Calvados","brand" => "Avallen","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "68.5","volume" => "700","alcohol_content" => "40.0","price_index" => "0.24464285714285713","country" => "France","url" => "https://www.lcbo.com/en/avallen-calvados-21581"
            ]);
            DB::table('alcohols')->insert([
            "title" => "San Zheng Mi Jiu","brand" => "San Zheng","category" => "Spirits","subcategory" => "Liqueur","price" => "29.05","volume" => "750","alcohol_content" => "38.0","price_index" => "0.10192982456140351","country" => "China","url" => "https://www.lcbo.com/en/san-zheng-mi-jiu-26363"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Northern Landings Cranberry Ginberry","brand" => "Northern Landings Gin","category" => "Spirits","subcategory" => "Gin","price" => "44.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.14983333333333335","country" => "Canada","url" => "https://www.lcbo.com/en/northern-landings-cranberry-ginberry-10614"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crosscut Distillery Local Harvest Gin","brand" => "Crosscut Distillery","category" => "Spirits","subcategory" => "Gin","price" => "42.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.1331782945736434","country" => "Canada","url" => "https://www.lcbo.com/en/crosscut-distillery-local-harvest-gin-23535"
            ]);
//            DB::table('alcohols')->insert([
//            "title" => "Georgian Bay Gin, Coolers + FREE sunglasses & limited release glasses","brand" => "GEORGIAN BAY","category" => "Coolers","subcategory" => "Coolers & Cocktails","price" => "47.35","volume" => "2642","alcohol_content" => "40.0","price_index" => "0.04480507191521575","country" => "Canada","url" => "https://www.lcbo.com/en/georgian-bay-gin-coolers-free-sunglasses-limited-release-glasses-28009"
//            ]);
            DB::table('alcohols')->insert([
            "title" => "Durham Distillery London Calling Dry Gin","brand" => "Durham Distillery","category" => "Spirits","subcategory" => "Gin","price" => "35.0","volume" => "750","alcohol_content" => "42.5","price_index" => "0.10980392156862745","country" => "Canada","url" => "https://www.lcbo.com/en/durham-distillery-london-calling-dry-gin-22884"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kilkerran 12-Year-Old Campbeltown Single Malt Scotch Whisky","brand" => "Kilkerran","category" => "Spirits","subcategory" => "Whisky","price" => "95.4","volume" => "700","alcohol_content" => "46.0","price_index" => "0.29627329192546586","country" => "United Kingdom","url" => "https://www.lcbo.com/en/kilkerran-12-year-old-campbeltown-single-malt-scotch-whisky-524181"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Barbayanni Ouzo Green Label","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "32.9","volume" => "750","alcohol_content" => "42.0","price_index" => "0.10444444444444444","country" => "Greece","url" => "https://www.lcbo.com/en/barbayanni-ouzo-green-label-977305"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Busker Single Pot Still","brand" => "The Busker","category" => "Spirits","subcategory" => "Whisky","price" => "41.45","volume" => "750","alcohol_content" => "44.3","price_index" => "0.1247554552294959","country" => "Ireland","url" => "https://www.lcbo.com/en/the-busker-single-pot-still-24126"
            ]);
            DB::table('alcohols')->insert([
            "title" => "El Jimador Reposado","brand" => "El Jimador","category" => "Spirits","subcategory" => "Tequila","price" => "55.35","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.12138157894736842","country" => "Mexico","url" => "https://www.lcbo.com/en/el-jimador-reposado-498279"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tullamore Dew XO Rum Cask","brand" => "Tullamore Dew","category" => "Spirits","subcategory" => "Whisky","price" => "45.0","volume" => "750","alcohol_content" => "43.0","price_index" => "0.13953488372093023","country" => "United Kingdom","url" => "https://www.lcbo.com/en/tullamore-dew-xo-rum-cask-21051"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Russian Prince Vodka (PET)","brand" => "Russian Prince","category" => "Spirits","subcategory" => "Vodka","price" => "63.4","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09057142857142857","country" => "Canada","url" => "https://www.lcbo.com/en/russian-prince-vodka-pet-125914"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Eau Claire Distillery Single Malt Whisky Batch 005","brand" => "Eau Claire","category" => "Spirits","subcategory" => "Whisky","price" => "103.6","volume" => "750","alcohol_content" => "43.0","price_index" => "0.32124031007751935","country" => "Canada","url" => "https://www.lcbo.com/en/eau-claire-distillery-single-malt-whisky-batch-005-23550"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lohin Mckinnon Niagara Vqa Wine Barrel Finish","brand" => "Lohin Mckinnon Whisky","category" => "Spirits","subcategory" => "Whisky","price" => "65.25","volume" => "750","alcohol_content" => "43.0","price_index" => "0.20232558139534884","country" => "Canada","url" => "https://www.lcbo.com/en/lohin-mckinnon-niagara-vqa-wine-barrel-finish-10734"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Spicebox Pumpkin Whisky","brand" => "Spicebox","category" => "Spirits","subcategory" => "Whisky","price" => "29.7","volume" => "750","alcohol_content" => "35.0","price_index" => "0.11314285714285714","country" => "Canada","url" => "https://www.lcbo.com/en/spicebox-pumpkin-whisky-353334"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Giants & Gentlemen Old Tom Gin","brand" => "GIANTS & GENTLEMEN","category" => "Spirits","subcategory" => "Gin","price" => "54.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.18316666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/giants-gentlemen-old-tom-gin-26982"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Novo Fogo Silver Cachaca","brand" => "Novo Fogo","category" => "Spirits","subcategory" => "Rum","price" => "44.8","volume" => "750","alcohol_content" => "40.0","price_index" => "0.14933333333333332","country" => "Brazil","url" => "https://www.lcbo.com/en/novo-fogo-silver-cachaca-486662"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Roger Groult Calvados Pays d'Auge R�serve 3 Year Old","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "75.2","volume" => "700","alcohol_content" => "40.0","price_index" => "0.26857142857142857","country" => "France","url" => "https://www.lcbo.com/en/roger-groult-calvados-pays-d-auge-r-cserve-3-year-old-288331"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Plantation Isle Of Fiji Rum","brand" => "Plantation","category" => "Spirits","subcategory" => "Rum","price" => "37.25","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12416666666666666","country" => "Fiji","url" => "https://www.lcbo.com/en/plantation-isle-of-fiji-rum-19823"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Villa One Anejo Tequila","brand" => "Villa One","category" => "Spirits","subcategory" => "Tequila","price" => "99.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.33316666666666667","country" => "Mexico","url" => "https://www.lcbo.com/en/villa-one-anejo-tequila-19428"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tesseron Composition Cognac","brand" => "Cognac Tesseron","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "110.7","volume" => "700","alcohol_content" => "40.0","price_index" => "0.39535714285714285","country" => "France","url" => "https://www.lcbo.com/en/tesseron-composition-cognac-22116"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Macallan Sherry Oak 25-Year-Old Highland Single Malt Scotch Whisky (2 Bottle Limit)","brand" => "The Macallan","category" => "Spirits","subcategory" => "Whisky","price" => "3300.0","volume" => "750","alcohol_content" => "43.0","price_index" => "10.232558139534884","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-macallan-sherry-oak-25-year-old-highland-single-malt-scotch-whisky-179150"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mi Campo Reposado Tequila","brand" => "Mi Campo","category" => "Spirits","subcategory" => "Tequila","price" => "44.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.14983333333333335","country" => "Mexico","url" => "https://www.lcbo.com/en/mi-campo-reposado-tequila-14394"
            ]);
            DB::table('alcohols')->insert([
            "title" => "6 O'Clock London Dry Gin","brand" => "6 O'Clock Gin","category" => "Spirits","subcategory" => "Gin","price" => "39.25","volume" => "750","alcohol_content" => "43.0","price_index" => "0.12170542635658915","country" => "United Kingdom","url" => "https://www.lcbo.com/en/6-o-clock-london-dry-gin-13182"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ginslinger Handcrafted Ontario Dry Gin","brand" => "Ginslinger","category" => "Spirits","subcategory" => "Gin","price" => "34.95","volume" => "750","alcohol_content" => "45.0","price_index" => "0.10355555555555557","country" => "Canada","url" => "https://www.lcbo.com/en/ginslinger-handcrafted-ontario-dry-gin-13484"
            ]);
            DB::table('alcohols')->insert([
            "title" => "King's Lock 1000 Islands Organic Moonshine","brand" => "King's Lock","category" => "Spirits","subcategory" => "Whisky","price" => "45.4","volume" => "750","alcohol_content" => "40.0","price_index" => "0.15133333333333332","country" => "Canada","url" => "https://www.lcbo.com/en/king-s-lock-1000-islands-organic-moonshine-512871"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Vizcaya Vxop Cask 21","brand" => "Vizcaya","category" => "Spirits","subcategory" => "Rum","price" => "105.15","volume" => "750","alcohol_content" => "40.0","price_index" => "0.35050000000000003","country" => "Dominican Republic","url" => "https://www.lcbo.com/en/vizcaya-vxop-cask-21-20310"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cragganmore Distillers Edition","brand" => "Cragganmore","category" => "Spirits","subcategory" => "Whisky","price" => "101.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.3398333333333333","country" => "United Kingdom","url" => "https://www.lcbo.com/en/cragganmore-distillers-edition-645747"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Torres Spiced Spirit Drink","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "31.3","volume" => "700","alcohol_content" => "35.0","price_index" => "0.12775510204081633","country" => "Spain","url" => "https://www.lcbo.com/en/torres-spiced-spirit-drink-287622"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mataroa Mediterranean Dry Gin","brand" => "Mataroa Gin","category" => "Spirits","subcategory" => "Gin","price" => "49.95","volume" => "750","alcohol_content" => "41.5","price_index" => "0.16048192771084338","country" => "Greece","url" => "https://www.lcbo.com/en/mataroa-mediterranean-dry-gin-19415"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Midleton Very Rare Irish Whiskey","brand" => "Midleton","category" => "Spirits","subcategory" => "Whisky","price" => "220.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.734","country" => "Ireland","url" => "https://www.lcbo.com/en/midleton-very-rare-irish-whiskey-573782"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenmorangie X","brand" => "Glenmorangie","category" => "Spirits","subcategory" => "Whisky","price" => "58.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.19583333333333333","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenmorangie-x-20934"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Downton Abbey Gin","brand" => "DOWNTON ABBEY","category" => "Spirits","subcategory" => "Gin","price" => "76.95","volume" => "700","alcohol_content" => "43.0","price_index" => "0.2556478405315615","country" => "United Kingdom","url" => "https://www.lcbo.com/en/downton-abbey-gin-22891"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Niu Lan Shan Er Guo Tou 50 Year Old","brand" => "Niu Lan","category" => "Spirits","subcategory" => "Liqueur","price" => "205.55","volume" => "500","alcohol_content" => "52.0","price_index" => "0.7905769230769231","country" => "China","url" => "https://www.lcbo.com/en/niu-lan-shan-er-guo-tou-50-year-old-26902"
            ]);
            DB::table('alcohols')->insert([
            "title" => "After Six Premium Vodka","brand" => "After Six","category" => "Spirits","subcategory" => "Vodka","price" => "34.9","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11633333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/after-six-premium-vodka-19693"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Baileys Apple Pie","brand" => "Baileys Irish Cream","category" => "Spirits","subcategory" => "Liqueur","price" => "32.55","volume" => "750","alcohol_content" => "17.0","price_index" => "0.2552941176470588","country" => "Ireland","url" => "https://www.lcbo.com/en/baileys-apple-pie-22034"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Chivas Regal 25 Year Old Scotch Whisky(2 Bottle Limit)","brand" => "Chivas Regal","category" => "Spirits","subcategory" => "Whisky","price" => "359.95","volume" => "750","alcohol_content" => "40.0","price_index" => "1.1998333333333333","country" => "United Kingdom","url" => "https://www.lcbo.com/en/chivas-regal-25-year-old-scotch-whisky-89730"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Limited Gin","brand" => "Limited","category" => "Spirits","subcategory" => "Gin","price" => "39.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.12387596899224806","country" => "Canada","url" => "https://www.lcbo.com/en/limited-gin-19525"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenallachie 15 Year Old Speyside Single Malt","brand" => "Glenallachie","category" => "Spirits","subcategory" => "Whisky","price" => "137.4","volume" => "700","alcohol_content" => "46.0","price_index" => "0.4267080745341615","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenallachie-15-year-old-speyside-single-malt-22147"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Marchesi di Gresy Grappa di Nebbiolo Martinenga","brand" => "Private Stock","category" => "Spirits","subcategory" => "Grappa","price" => "91.35","volume" => "700","alcohol_content" => "42.0","price_index" => "0.3107142857142857","country" => "Italy","url" => "https://www.lcbo.com/en/marchesi-di-gresy-grappa-di-nebbiolo-martinenga-195288"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jaan Premium Paan Liqueur","brand" => "Jaan","category" => "Spirits","subcategory" => "Liqueur","price" => "38.95","volume" => "750","alcohol_content" => "25.0","price_index" => "0.20773333333333335","country" => "Canada","url" => "https://www.lcbo.com/en/jaan-premium-paan-liqueur-335778"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Opal Nera The Original Black Sambuca","brand" => "Opal Nera","category" => "Spirits","subcategory" => "Liqueur","price" => "41.25","volume" => "700","alcohol_content" => "40.0","price_index" => "0.14732142857142858","country" => "Italy","url" => "https://www.lcbo.com/en/opal-nera-the-original-black-sambuca-159151"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Poli Grappa di Sassicaia","brand" => "Poli","category" => "Spirits","subcategory" => "Grappa","price" => "144.85","volume" => "500","alcohol_content" => "40.0","price_index" => "0.72425","country" => "Italy","url" => "https://www.lcbo.com/en/poli-grappa-di-sassicaia-175794"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Po' di Poli Morbida Smooth Moscato Grappa","brand" => "Poli","category" => "Spirits","subcategory" => "Grappa","price" => "66.25","volume" => "700","alcohol_content" => "40.0","price_index" => "0.23660714285714285","country" => "Italy","url" => "https://www.lcbo.com/en/po-di-poli-morbida-smooth-moscato-grappa-745901"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jack Daniel's Tennessee Honey","brand" => "Jack Daniels Flavours","category" => "Spirits","subcategory" => "Liqueur","price" => "36.2","volume" => "750","alcohol_content" => "35.0","price_index" => "0.13790476190476192","country" => "United States","url" => "https://www.lcbo.com/en/jack-daniel-s-tennessee-honey-260323"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Muskoka Butterfly Effect Pink Peppercorn Gin","brand" => "Muskoka Spirits","category" => "Spirits","subcategory" => "Gin","price" => "29.95","volume" => "375","alcohol_content" => "40.0","price_index" => "0.19966666666666666","country" => "Canada","url" => "https://www.lcbo.com/en/muskoka-butterfly-effect-pink-peppercorn-gin-14313"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Pikesville Straight Rye Whiskey 6 Year Old","brand" => "Pikesville Rye","category" => "Spirits","subcategory" => "Whisky","price" => "89.95","volume" => "750","alcohol_content" => "55.0","price_index" => "0.21806060606060604","country" => "United States","url" => "https://www.lcbo.com/en/pikesville-straight-rye-whiskey-6-year-old-454124"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Last Drop Glenrothes Single Malt Scotch Whisky 1968","brand" => "Glenrothes","category" => "Spirits","subcategory" => "Whisky","price" => "12154.05","volume" => "750","alcohol_content" => "50.2","price_index" => "32.28167330677291","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-last-drop-glenrothes-single-malt-scotch-whisky-27582"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Luxardo Bitter Bianco","brand" => "Luxardo","category" => "Spirits","subcategory" => "Liqueur","price" => "19.85","volume" => "750","alcohol_content" => "30.0","price_index" => "0.08822222222222223","country" => "Italy","url" => "https://www.lcbo.com/en/luxardo-bitter-bianco-495747"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Andong Soju","brand" => "Andong","category" => "Spirits","subcategory" => "Soju","price" => "106.4","volume" => "400","alcohol_content" => "45.0","price_index" => "0.5911111111111111","country" => "South Korea","url" => "https://www.lcbo.com/en/andong-soju-648757"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cazottes Coing Sauvage 2015","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "100.15","volume" => "500","alcohol_content" => "18.6","price_index" => "1.0768817204301073","country" => "France","url" => "https://www.lcbo.com/en/cazottes-coing-sauvage-2015-428440"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Pappy Van Winkle's Family Reserve 20-Year-Old Kentucky Straight Bourbon Whiskey","brand" => "Pappy Van Winkle","category" => "Spirits","subcategory" => "Whisky","price" => "299.95","volume" => "750","alcohol_content" => "45.2","price_index" => "0.8848082595870206","country" => "United States","url" => "https://www.lcbo.com/en/pappy-van-winkle-s-family-reserve-20-year-old-kentucky-straight-bourbon-whiskey-25432"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The White Distillery Phoenix Vodka","brand" => "White Distillery Dd","category" => "Spirits","subcategory" => "Vodka","price" => "32.95","volume" => "750","alcohol_content" => "34.4","price_index" => "0.12771317829457365","country" => "Canada","url" => "https://www.lcbo.com/en/the-white-distillery-phoenix-vodka-ddp-14318"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Michter's Toasted Barrel Finished Bourbon","brand" => "Michter's","category" => "Spirits","subcategory" => "Whisky","price" => "140.8","volume" => "750","alcohol_content" => "41.7","price_index" => "0.4501998401278977","country" => "United States","url" => "https://www.lcbo.com/en/michter-s-toasted-barrel-finished-bourbon-24131"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Voga Vodka","brand" => "Voga Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "34.35","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1145","country" => "Italy","url" => "https://www.lcbo.com/en/voga-vodka-545285"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ouzo Babatzim","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "22.85","volume" => "700","alcohol_content" => "40.0","price_index" => "0.08160714285714286","country" => "Greece","url" => "https://www.lcbo.com/en/ouzo-babatzim-128271"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Dalmore 35-Year-Old Single Malt Scotch Whisky","brand" => "The Dalmore","category" => "Spirits","subcategory" => "Whisky","price" => "16049.95","volume" => "750","alcohol_content" => "40.0","price_index" => "53.499833333333335","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-dalmore-35-year-old-single-malt-scotch-whisky-22836"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Iceberg Vodka + FREE Boston shaker & Mason jars","brand" => "Iceberg","category" => "Spirits","subcategory" => "Vodka","price" => "29.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09733333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/iceberg-vodka-free-boston-shaker-mason-jars-21728"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Michter's US-1 Single Barrel Rye Whiskey","brand" => "Michter's","category" => "Spirits","subcategory" => "Whisky","price" => "87.8","volume" => "750","alcohol_content" => "42.4","price_index" => "0.2761006289308176","country" => "United States","url" => "https://www.lcbo.com/en/michter-s-us-1-single-barrel-rye-whiskey-433011"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Macallan Estate (2 Bottle Limit)","brand" => "The Macallan","category" => "Spirits","subcategory" => "Whisky","price" => "349.95","volume" => "750","alcohol_content" => "43.0","price_index" => "1.0851162790697675","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-macallan-estate-11853"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Remy Martin VSOP Holiday Giftpack","brand" => "Remy Martin","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "104.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.34983333333333333","country" => "France","url" => "https://www.lcbo.com/en/remy-martin-vsop-holiday-giftpack-21903"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bergamotto Liquore","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "44.9","volume" => "700","alcohol_content" => "35.0","price_index" => "0.18326530612244898","country" => "Italy","url" => "https://www.lcbo.com/en/bergamotto-liquore-404532"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Koblevo Brandy VSOP","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "28.25","volume" => "500","alcohol_content" => "40.0","price_index" => "0.14125","country" => "Ukraine","url" => "https://www.lcbo.com/en/koblevo-brandy-vsop-218189"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenfarclas 105 Cask Strength Highland Single Malt Scotch Whisky","brand" => "Glenfarclas","category" => "Spirits","subcategory" => "Whisky","price" => "110.0","volume" => "700","alcohol_content" => "60.0","price_index" => "0.2619047619047619","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenfarclas-105-cask-strength-highland-single-malt-scotch-whisky-677047"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Matsui Single Malt Whisky Mizunara Cask","brand" => "The Matsui","category" => "Spirits","subcategory" => "Whisky","price" => "129.0","volume" => "700","alcohol_content" => "48.1","price_index" => "0.38313038313038306","country" => "Japan","url" => "https://www.lcbo.com/en/the-matsui-single-malt-whisky-mizunara-cask-11628"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Shiwan Yu Bing Shao","brand" => "NULL","category" => "Spirits","subcategory" => "Liqueur","price" => "56.95","volume" => "500","alcohol_content" => "45.0","price_index" => "0.2531111111111111","country" => "China","url" => "https://www.lcbo.com/en/shiwan-yu-bing-shao-26365"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ardbeg Scorch General Release","brand" => "Ardbeg","category" => "Spirits","subcategory" => "Whisky","price" => "211.4","volume" => "750","alcohol_content" => "46.0","price_index" => "0.6127536231884058","country" => "United Kingdom","url" => "https://www.lcbo.com/en/ardbeg-scorch-general-release-23975"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hardy Cognac Legend 1863","brand" => "Hardy Cognac","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "60.55","volume" => "750","alcohol_content" => "40.0","price_index" => "0.20183333333333334","country" => "France","url" => "https://www.lcbo.com/en/hardy-cognac-legend-1863-21572"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kiyosu Zakura Aichi Craft Japanese Gin","brand" => "Private Stock","category" => "Spirits","subcategory" => "Gin","price" => "48.4","volume" => "500","alcohol_content" => "40.0","price_index" => "0.242","country" => "Japan","url" => "https://www.lcbo.com/en/kiyosu-zakura-aichi-craft-japanese-gin-609791"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Stroh Original 80 Spiced Rum","brand" => "Stroh","category" => "Spirits","subcategory" => "Rum","price" => "51.95","volume" => "750","alcohol_content" => "80.0","price_index" => "0.08658333333333333","country" => "Austria","url" => "https://www.lcbo.com/en/stroh-original-80-spiced-rum-11510"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lazzaroni Amaro","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "34.9","volume" => "700","alcohol_content" => "25.0","price_index" => "0.19942857142857143","country" => "Italy","url" => "https://www.lcbo.com/en/lazzaroni-amaro-229020"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bierc�e Kumquat Liqueur","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "88.6","volume" => "700","alcohol_content" => "35.0","price_index" => "0.3616326530612245","country" => "Belgium","url" => "https://www.lcbo.com/en/bierc-ce-kumquat-liqueur-782813"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grenade Pomegranate Liqueur","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "35.55","volume" => "500","alcohol_content" => "20.0","price_index" => "0.3555","country" => "Greece","url" => "https://www.lcbo.com/en/grenade-pomegranate-liqueur-619931"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Johnnie Walker XR21","brand" => "Johnnie Walker","category" => "Spirits","subcategory" => "Whisky","price" => "229.7","volume" => "750","alcohol_content" => "40.0","price_index" => "0.7656666666666666","country" => "United Kingdom","url" => "https://www.lcbo.com/en/johnnie-walker-xr21-12602"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Junction 56 Distillery Gin","brand" => "Junction 56","category" => "Spirits","subcategory" => "Gin","price" => "39.95","volume" => "750","alcohol_content" => "41.3","price_index" => "0.12897497982243747","country" => "Canada","url" => "https://www.lcbo.com/en/junction-56-distillery-gin-449181"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Aviation Gin Fan kit","brand" => "Aviation","category" => "Spirits","subcategory" => "Gin","price" => "79.9","volume" => "1500","alcohol_content" => "42.0","price_index" => "0.12682539682539684","country" => "United States","url" => "https://www.lcbo.com/en/aviation-gin-fan-kit-22122"
            ]);
            DB::table('alcohols')->insert([
            "title" => "New Riff Bottled-In-Bond Kentucky Straight Bourbon","brand" => "New Riff","category" => "Spirits","subcategory" => "Whisky","price" => "100.3","volume" => "750","alcohol_content" => "50.0","price_index" => "0.2674666666666667","country" => "United States","url" => "https://www.lcbo.com/en/new-riff-bottled-in-bond-kentucky-straight-bourbon-23338"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Moonbaesool Heritage","brand" => "Private Stock","category" => "Spirits","subcategory" => "Soju","price" => "132.8","volume" => "500","alcohol_content" => "40.0","price_index" => "0.664","country" => "South Korea","url" => "https://www.lcbo.com/en/moonbaesool-heritage-648732"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Benromach 10 Year Old","brand" => "Benromach","category" => "Spirits","subcategory" => "Whisky","price" => "70.05","volume" => "750","alcohol_content" => "43.0","price_index" => "0.2172093023255814","country" => "United Kingdom","url" => "https://www.lcbo.com/en/benromach-10-year-old-21976"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dry Fly 3 Yo Straight Wheat Whiskey","brand" => "Dry Fly Distilling","category" => "Spirits","subcategory" => "Whisky","price" => "58.0","volume" => "750","alcohol_content" => "45.0","price_index" => "0.17185185185185184","country" => "United States","url" => "https://www.lcbo.com/en/dry-fly-3-yo-straight-wheat-whiskey-618744"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Booker's Kentucky Straight Bourbon 2021-01E","brand" => "Booker's","category" => "Spirits","subcategory" => "Whisky","price" => "119.95","volume" => "750","alcohol_content" => "62.65","price_index" => "0.2552806597499335","country" => "United States","url" => "https://www.lcbo.com/en/booker-s-special-reserve-24761"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Laphroaig 10 Year Old Sherry Oak","brand" => "Laphroaig","category" => "Spirits","subcategory" => "Whisky","price" => "99.95","volume" => "750","alcohol_content" => "48.0","price_index" => "0.2776388888888889","country" => "United Kingdom","url" => "https://www.lcbo.com/en/laphroaig-10-year-old-sherry-cask-23091"
            ]);
            DB::table('alcohols')->insert([
            "title" => "On The Rocks Effen Cosmo","brand" => "On The Rocks","category" => "Spirits","subcategory" => "Premixed Cocktails","price" => "6.95","volume" => "100","alcohol_content" => "20.0","price_index" => "0.34750000000000003","country" => "United States","url" => "https://www.lcbo.com/en/on-the-rocks-effen-cosmo-21672"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Moondance Clear Corn Spirit","brand" => "Moondance","category" => "Spirits","subcategory" => "Whisky","price" => "20.0","volume" => "375","alcohol_content" => "40.0","price_index" => "0.13333333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/moondance-clear-corn-spirit-520494"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Yellow Rose Straight Rye Whiskey","brand" => "Yellow Rose Whiskey","category" => "Spirits","subcategory" => "Whisky","price" => "74.35","volume" => "750","alcohol_content" => "45.0","price_index" => "0.22029629629629627","country" => "United States","url" => "https://www.lcbo.com/en/yellow-rose-straight-rye-whiskey-414813"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Black Fox Oaked Gin","brand" => "Black Fox","category" => "Spirits","subcategory" => "Gin","price" => "112.55","volume" => "750","alcohol_content" => "42.0","price_index" => "0.3573015873015873","country" => "Canada","url" => "https://www.lcbo.com/en/black-fox-oaked-gin-26753"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lagavulin 12-Year-Old Islay Single Malt Scotch Whisky","brand" => "Lagavulin","category" => "Spirits","subcategory" => "Whisky","price" => "214.95","volume" => "750","alcohol_content" => "56.5","price_index" => "0.5072566371681416","country" => "United Kingdom","url" => "https://www.lcbo.com/en/lagavulin-12-year-old-single-malt-scotch-whisky-2-bottle-limit-23112"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Teeling Small Batch Irish Whiskey","brand" => "Teeling","category" => "Spirits","subcategory" => "Whisky","price" => "51.95","volume" => "750","alcohol_content" => "46.0","price_index" => "0.15057971014492755","country" => "Ireland","url" => "https://www.lcbo.com/en/teeling-small-batch-irish-whiskey-644237"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dewar's Ilegal Smooth Mezcal Cask Finish","brand" => "Dewar's","category" => "Spirits","subcategory" => "Whisky","price" => "34.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1165","country" => "United Kingdom","url" => "https://www.lcbo.com/en/dewar-s-ilegal-smooth-mezcal-cask-finish-20785"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Warner's London Dry Gin","brand" => "Warner'S Gin","category" => "Spirits","subcategory" => "Gin","price" => "37.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1265","country" => "United Kingdom","url" => "https://www.lcbo.com/en/warner-s-london-dry-gin-15050"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Boulard Rye Cask Finish VSOP Calvados","brand" => "Boulard","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "53.3","volume" => "750","alcohol_content" => "39.82","price_index" => "0.17846978067972544","country" => "France","url" => "https://www.lcbo.com/en/boulard-rye-cask-finish-vsop-calvados-17726"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Blanche Au Citron White Armagnac","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "95.1","volume" => "700","alcohol_content" => "40.0","price_index" => "0.33964285714285714","country" => "France","url" => "https://www.lcbo.com/en/blanche-au-citron-white-armagnac-490812"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bloom Gin","brand" => "Bloom Gin","category" => "Spirits","subcategory" => "Gin","price" => "35.05","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11683333333333333","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bloom-gin-483081"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crema Naturale Di Liquore Di Mandorla","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "42.95","volume" => "750","alcohol_content" => "20.0","price_index" => "0.28633333333333333","country" => "Italy","url" => "https://www.lcbo.com/en/crema-naturale-di-liquore-di-mandorla-308907"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Spirit of York Red Fife Wheat Vodka","brand" => "Spirit Of York","category" => "Spirits","subcategory" => "Vodka","price" => "54.95","volume" => "750","alcohol_content" => "42.0","price_index" => "0.17444444444444446","country" => "Canada","url" => "https://www.lcbo.com/en/spirit-of-york-red-fife-wheat-vodka-645648"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Domaine Tariquet Carrement VSOP Decanter","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "86.45","volume" => "500","alcohol_content" => "40.0","price_index" => "0.43225","country" => "France","url" => "https://www.lcbo.com/en/domaine-tariquet-carrement-vsop-decanter-287119"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Macallan Sherry Oak 30-Year-Old Highland Single Malt Scotch Whisky","brand" => "The Macallan","category" => "Spirits","subcategory" => "Whisky","price" => "7000.0","volume" => "750","alcohol_content" => "43.0","price_index" => "21.705426356589147","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-macallan-sherry-oak-30-year-old-highland-single-malt-scotch-whisky-629329"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hennessy VSOP NBA Edition","brand" => "Hennessy","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "109.85","volume" => "750","alcohol_content" => "40.0","price_index" => "0.36616666666666664","country" => "France","url" => "https://www.lcbo.com/en/hennessy-vsop-nba-edition-21895"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Deveron 18 Year Old Highland Single Malt Scotch Whisky","brand" => "The Deveron","category" => "Spirits","subcategory" => "Whisky","price" => "165.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.5506666666666666","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-deveron-18-year-old-highland-single-malt-scotch-whisky-435974"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glen Scotia 15YO Scotch Malt Whisky","brand" => "Glen Scotia","category" => "Spirits","subcategory" => "Whisky","price" => "85.95","volume" => "750","alcohol_content" => "46.0","price_index" => "0.2491304347826087","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glen-scotia-15yo-scotch-malt-whisky-644112"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Spirit of York Hawthorne Gin","brand" => "Spirit Of York","category" => "Spirits","subcategory" => "Gin","price" => "49.95","volume" => "750","alcohol_content" => "35.0","price_index" => "0.1902857142857143","country" => "Canada","url" => "https://www.lcbo.com/en/spirit-of-york-hawthorne-gin-645655"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sacred Gin Coriander","brand" => "Private Stock","category" => "Spirits","subcategory" => "Gin","price" => "75.95","volume" => "750","alcohol_content" => "43.8","price_index" => "0.2312024353120244","country" => "United Kingdom","url" => "https://www.lcbo.com/en/sacred-gin-coriander-365493"
            ]);
            DB::table('alcohols')->insert([
            "title" => "DRINKLAB Hop Vodka","brand" => "Drinklab Inc.","category" => "Spirits","subcategory" => "Vodka","price" => "19.65","volume" => "375","alcohol_content" => "40.0","price_index" => "0.13099999999999998","country" => "Canada","url" => "https://www.lcbo.com/en/drinklab-hop-vodka-486720"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dead Man's Fingers Spiced Rum","brand" => "Dead Man's Fingers","category" => "Spirits","subcategory" => "Rum","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "United Kingdom","url" => "https://www.lcbo.com/en/dead-man-s-fingers-spiced-rum-19825"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dunvilles PX 12YO Single Malt Irish Whiskey","brand" => "Dunvilles","category" => "Spirits","subcategory" => "Whisky","price" => "233.65","volume" => "700","alcohol_content" => "45.66","price_index" => "0.731024341405419","country" => "Ireland","url" => "https://www.lcbo.com/en/dunvilles-px-12yo-single-malt-irish-whiskey-14072"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Berta Bric del Gaian Grappa Moscato 2013","brand" => "Berta","category" => "Spirits","subcategory" => "Grappa","price" => "276.85","volume" => "700","alcohol_content" => "43.0","price_index" => "0.9197674418604652","country" => "Italy","url" => "https://www.lcbo.com/en/berta-bric-del-gaian-grappa-moscato-2013-322171"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Svedka Rose Vodka","brand" => "Svedka","category" => "Spirits","subcategory" => "Vodka","price" => "28.2","volume" => "750","alcohol_content" => "30.0","price_index" => "0.12533333333333332","country" => "United States","url" => "https://www.lcbo.com/en/svedka-rose-vodka-18174"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ararat Akhtamar 10 Y.O.","brand" => "Ararat Akhtamar","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "95.45","volume" => "700","alcohol_content" => "40.0","price_index" => "0.34089285714285716","country" => "Armenia","url" => "https://www.lcbo.com/en/ararat-akhtamar-10-y-o-26668"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Roots Diktamo (Herb Spirit)","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "46.7","volume" => "700","alcohol_content" => "30.0","price_index" => "0.2223809523809524","country" => "Greece","url" => "https://www.lcbo.com/en/roots-diktamo-herb-spirit-676253"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hennessy Paradis Imp�rial Cognac","brand" => "Hennessy","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "3823.0","volume" => "750","alcohol_content" => "40.0","price_index" => "12.743333333333334","country" => "France","url" => "https://www.lcbo.com/en/hennessy-paradis-imp-crial-cognac-437962"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Moutai Great Power Select 5 Year Old","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "220.45","volume" => "500","alcohol_content" => "53.0","price_index" => "0.8318867924528301","country" => "China","url" => "https://www.lcbo.com/en/northen-monk-new-world-ipa-case-431899"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Woodford Reserve Master's Collection Select American Oak","brand" => "Gift Of The Month","category" => "Spirits","subcategory" => "Whisky","price" => "127.5","volume" => "750","alcohol_content" => "40.0","price_index" => "0.425","country" => "United States","url" => "https://www.lcbo.com/en/woodford-reserve-master-s-collection-select-american-oak-12585"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Dalmore 15 Year Old Highland Single Malt Scotch Whisky","brand" => "The Dalmore","category" => "Spirits","subcategory" => "Whisky","price" => "165.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.5506666666666666","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-dalmore-15-year-old-highland-single-malt-scotch-whisky-164541"
            ]);
            DB::table('alcohols')->insert([
            "title" => "H2 Craft Manhattan Cocktail","brand" => "H2 Craft","category" => "Spirits","subcategory" => "Premixed Cocktails","price" => "29.95","volume" => "750","alcohol_content" => "27.4","price_index" => "0.14574209245742095","country" => "Canada","url" => "https://www.lcbo.com/en/h2-craft-manhattan-cocktail-12164"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Catto's Rare Old","brand" => "Catto's","category" => "Spirits","subcategory" => "Whisky","price" => "43.25","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.09484649122807018","country" => "United Kingdom","url" => "https://www.lcbo.com/en/catto-s-rare-old-215558"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Michiu Rice Liquor","brand" => "Michiu","category" => "Spirits","subcategory" => "Liqueur","price" => "15.35","volume" => "600","alcohol_content" => "19.5","price_index" => "0.1311965811965812","country" => "Taiwan, Province of China","url" => "https://www.lcbo.com/en/michiu-rice-liquor-26356"
            ]);
            DB::table('alcohols')->insert([
            "title" => "La Fleur Organic Vodka","brand" => "La Fleur","category" => "Spirits","subcategory" => "Vodka","price" => "36.45","volume" => "750","alcohol_content" => "38.0","price_index" => "0.12789473684210528","country" => "Canada","url" => "https://www.lcbo.com/en/la-fleur-organic-vodka-27677"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ripshot Premium Vodka","brand" => "Ripshot","category" => "Spirits","subcategory" => "Vodka","price" => "14.4","volume" => "341","alcohol_content" => "40.0","price_index" => "0.10557184750733138","country" => "Canada","url" => "https://www.lcbo.com/en/ripshot-premium-vodka-648568"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Teeling Strong Ale","brand" => "Teeling Irish Whiskey","category" => "Spirits","subcategory" => "Whisky","price" => "80.05","volume" => "700","alcohol_content" => "46.0","price_index" => "0.2486024844720497","country" => "Ireland","url" => "https://www.lcbo.com/en/teeling-strong-ale-13984"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Aguardente Tres Marias","brand" => "Aguardente Bagaceira","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "37.35","volume" => "1000","alcohol_content" => "40.0","price_index" => "0.093375","country" => "Portugal","url" => "https://www.lcbo.com/en/aguardente-tres-marias-case-720929"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hidden Rivers Gin","brand" => "Hidden Rivers","category" => "Spirits","subcategory" => "Gin","price" => "34.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1165","country" => "Canada","url" => "https://www.lcbo.com/en/hidden-rivers-gin-22773"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cabot Trail Maple Cream + FREE nutmeg grater","brand" => "Cabot Trail","category" => "Spirits","subcategory" => "Liqueur","price" => "30.95","volume" => "750","alcohol_content" => "15.0","price_index" => "0.2751111111111111","country" => "Canada","url" => "https://www.lcbo.com/en/cabot-trail-maple-cream-free-nutmeg-grater-23448"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hardy Cognac Noces D'Albatre","brand" => "Hardy Cognac","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "4299.95","volume" => "750","alcohol_content" => "40.0","price_index" => "14.333166666666665","country" => "France","url" => "https://www.lcbo.com/en/hardy-cognac-noces-d-albatre-21878"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sunday's Whisky","brand" => "Sunday's","category" => "Spirits","subcategory" => "Whisky","price" => "100.2","volume" => "750","alcohol_content" => "40.1","price_index" => "0.33316708229426434","country" => "Japan","url" => "https://www.lcbo.com/en/sunday-s-whisky-japan-22526"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ancnoc Peatheart Batch 2 Limited Edition","brand" => "Ancnoc","category" => "Spirits","subcategory" => "Whisky","price" => "110.0","volume" => "700","alcohol_content" => "46.0","price_index" => "0.3416149068322981","country" => "United Kingdom","url" => "https://www.lcbo.com/en/ancnoc-peatheart-batch-2-limited-edition-19569"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Glenlivet Archive 21 Year Old Scotch Whisky","brand" => "The Glenlivet","category" => "Spirits","subcategory" => "Whisky","price" => "330.0","volume" => "750","alcohol_content" => "43.0","price_index" => "1.0232558139534884","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-glenlivet-archive-21-year-old-scotch-whisky-12856"
            ]);
            DB::table('alcohols')->insert([
            "title" => "1800 Tequila Trio + FREE backpack","brand" => "1800 Tequila","category" => "Spirits","subcategory" => "Tequila","price" => "131.35","volume" => "2250","alcohol_content" => "40.0","price_index" => "0.14594444444444443","country" => "Canada","url" => "https://www.lcbo.com/en/1800-tequila-trio-free-backpack-24797"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bachmann","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "37.05","volume" => "700","alcohol_content" => "36.0","price_index" => "0.1470238095238095","country" => "Germany","url" => "https://www.lcbo.com/en/bachmann-356906"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Martell XO","brand" => "Martell","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "279.25","volume" => "750","alcohol_content" => "40.0","price_index" => "0.9308333333333333","country" => "France","url" => "https://www.lcbo.com/en/martell-xo-441600"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dillon's Rose Gin","brand" => "Dillon'S Gin","category" => "Spirits","subcategory" => "Gin","price" => "24.95","volume" => "375","alcohol_content" => "35.0","price_index" => "0.1900952380952381","country" => "Canada","url" => "https://www.lcbo.com/en/dillon-s-rose-gin-400234"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Quaglia Sambuco","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "44.25","volume" => "700","alcohol_content" => "20.0","price_index" => "0.31607142857142856","country" => "Italy","url" => "https://www.lcbo.com/en/quaglia-sambuco-778647"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ardbeg Traigh Bhan Batch 2 19-Year-Old Islay Single Malt Scotch Whisky","brand" => "Ardbeg","category" => "Spirits","subcategory" => "Whisky","price" => "371.4","volume" => "700","alcohol_content" => "46.2","price_index" => "1.1484230055658624","country" => "United Kingdom","url" => "https://www.lcbo.com/en/ardbeg-traigh-bhan-batch-2-19-year-old-islay-single-malt-scotch-whisky-17793"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tomintoul 10 Year Old Speyside Glenlivet Single Malt Scotch Whisky","brand" => "Tomintoul","category" => "Spirits","subcategory" => "Whisky","price" => "74.9","volume" => "700","alcohol_content" => "40.0","price_index" => "0.2675","country" => "United Kingdom","url" => "https://www.lcbo.com/en/tomintoul-10-year-old-speyside-glenlivet-single-malt-scotch-whisky-181974"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dillon's Cherry Gin","brand" => "Dillon'S Gin","category" => "Spirits","subcategory" => "Gin","price" => "19.0","volume" => "375","alcohol_content" => "35.0","price_index" => "0.14476190476190476","country" => "Canada","url" => "https://www.lcbo.com/en/dillon-s-cherry-gin-460071"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Pama Pomegranate Liquor","brand" => "Pama Pomegranate Liquor","category" => "Spirits","subcategory" => "Liqueur","price" => "29.95","volume" => "750","alcohol_content" => "17.0","price_index" => "0.2349019607843137","country" => "United States","url" => "https://www.lcbo.com/en/pama-pomegranate-liquor-414"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Conker Port Barrel Gin","brand" => "Conker","category" => "Spirits","subcategory" => "Gin","price" => "39.35","volume" => "700","alcohol_content" => "43.0","price_index" => "0.1307308970099668","country" => "United Kingdom","url" => "https://www.lcbo.com/en/conker-port-barrel-gin-18354"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lost Lake Tsipouro Zacharia With Anise","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "55.4","volume" => "750","alcohol_content" => "40.0","price_index" => "0.18466666666666667","country" => "Greece","url" => "https://www.lcbo.com/en/lost-lake-tsipouro-zacharia-with-anise-280171"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Auchentoshan Px 1988 (2 Bottle Limit)","brand" => "Auchentoshan","category" => "Spirits","subcategory" => "Whisky","price" => "749.95","volume" => "750","alcohol_content" => "49.7","price_index" => "2.0119382964453387","country" => "United Kingdom","url" => "https://www.lcbo.com/en/auchentoshan-px-1988-13741"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bowmore 18 Year Old Islay Single Malt","brand" => "Bowmore","category" => "Spirits","subcategory" => "Whisky","price" => "159.95","volume" => "750","alcohol_content" => "43.08","price_index" => "0.4950479727638502","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bowmore-18-year-old-islay-single-malt-250399"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Changyu 5 Star Brandy Collective Edition","brand" => "Changyu 5 Star","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "90.2","volume" => "700","alcohol_content" => "40.0","price_index" => "0.3221428571428572","country" => "China","url" => "https://www.lcbo.com/en/changyu-5-star-brandy-collective-edition-26367"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Forty Creek Three Grain Whisky","brand" => "Forty Creek Three Grain Whisky","category" => "Spirits","subcategory" => "Whisky","price" => "59.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.19983333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/forty-creek-three-grain-whisky-17282"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dillon's Bitters Ginger","brand" => "Dillon'S","category" => "Spirits","subcategory" => "Liqueur","price" => "13.35","volume" => "100","alcohol_content" => "50.0","price_index" => "0.267","country" => "Canada","url" => "https://www.lcbo.com/en/dillon-s-bitters-ginger-574871"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tomatin Highland Single Malt 36 Year Old","brand" => "Tomatin","category" => "Spirits","subcategory" => "Whisky","price" => "1500.2","volume" => "700","alcohol_content" => "46.0","price_index" => "4.659006211180125","country" => "United Kingdom","url" => "https://www.lcbo.com/en/tomatin-highland-single-malt-36-year-old-24719"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Berentzen Apple Liquor K","brand" => "Berentzen","category" => "Spirits","subcategory" => "Liqueur","price" => "21.95","volume" => "750","alcohol_content" => "20.0","price_index" => "0.14633333333333332","country" => "Germany","url" => "https://www.lcbo.com/en/berentzen-apple-liquor-k-323055"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sagamore Spirit Signature Rye","brand" => "Sagamore Whiskey","category" => "Spirits","subcategory" => "Whisky","price" => "70.25","volume" => "750","alcohol_content" => "41.44","price_index" => "0.226029601029601","country" => "United States","url" => "https://www.lcbo.com/en/sagamore-spirit-signature-rye-20257"
            ]);
            DB::table('alcohols')->insert([
            "title" => "North of 7 Triple Beam Gin","brand" => "Triple Beam","category" => "Spirits","subcategory" => "Gin","price" => "39.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13316666666666668","country" => "Canada","url" => "https://www.lcbo.com/en/triple-beam-gin-413542"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Pr�ban na Linne Poit Dhubh 21 Year Old Blended Malt Scotch Whisky","brand" => "Poit Dhubh Whisky","category" => "Spirits","subcategory" => "Whisky","price" => "179.95","volume" => "700","alcohol_content" => "43.0","price_index" => "0.5978405315614618","country" => "United Kingdom","url" => "https://www.lcbo.com/en/pr-ban-na-linne-poit-dhubh-21-year-old-blended-malt-scotch-whisky-641456"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tomatin 10 Year Old Rum Cask","brand" => "Tomatin","category" => "Spirits","subcategory" => "Whisky","price" => "100.0","volume" => "700","alcohol_content" => "46.0","price_index" => "0.3105590062111801","country" => "United Kingdom","url" => "https://www.lcbo.com/en/tomatin-10-year-old-rum-cask-13951"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bruichladdich Rare Cask Series 1988 30yo","brand" => "Bruichladdich","category" => "Spirits","subcategory" => "Whisky","price" => "1999.5","volume" => "700","alcohol_content" => "46.2","price_index" => "6.182745825602968","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bruichladdich-rare-cask-series-1988-30yo-14649"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Highland Park 25-Year-Old Orkney Island Single Malt Scotch Whisky(1 Bottle Limit)","brand" => "Highland Park","category" => "Spirits","subcategory" => "Whisky","price" => "1000.0","volume" => "750","alcohol_content" => "46.0","price_index" => "2.898550724637681","country" => "United Kingdom","url" => "https://www.lcbo.com/en/highland-park-25-year-old-orkney-island-single-malt-scotch-whisky-13041"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tincup American Whiskey","brand" => "Tincup","category" => "Spirits","subcategory" => "Whisky","price" => "40.25","volume" => "750","alcohol_content" => "42.0","price_index" => "0.12777777777777777","country" => "United States","url" => "https://www.lcbo.com/en/tincup-american-whiskey-421966"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Macallan Sherry Oak 18-Year-Old Highland Single Malt Scotch Whisky (1 Bottle Limit)","brand" => "The Macallan","category" => "Spirits","subcategory" => "Whisky","price" => "600.25","volume" => "750","alcohol_content" => "43.0","price_index" => "1.8612403100775194","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-macallan-sherry-oak-18-year-old-highland-single-malt-scotch-whisky-18808"
            ]);
            DB::table('alcohols')->insert([
            "title" => "W.L. Weller 12-Year-Old Kentucky Straight Bourbon Whiskey","brand" => "W.L. Wekker","category" => "Spirits","subcategory" => "Whisky","price" => "56.95","volume" => "750","alcohol_content" => "56.9","price_index" => "0.13345049794961925","country" => "United States","url" => "https://www.lcbo.com/en/w-l-weller-12-year-kentucky-straight-bourbon-whiskey-25438"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Old Forester 1920 Prohibition Style Whiskey","brand" => "Old Forester","category" => "Spirits","subcategory" => "Whisky","price" => "74.7","volume" => "750","alcohol_content" => "57.0","price_index" => "0.1747368421052632","country" => "United States","url" => "https://www.lcbo.com/en/old-forester-1920-prohibition-style-whiskey-12648"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sibona Botti di Madeira Riserva Grappa","brand" => "Sibona","category" => "Spirits","subcategory" => "Grappa","price" => "57.25","volume" => "500","alcohol_content" => "44.0","price_index" => "0.26022727272727275","country" => "Italy","url" => "https://www.lcbo.com/en/sibona-botti-di-madeira-riserva-grappa-385716"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sigalas Fragkosiko","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "98.1","volume" => "500","alcohol_content" => "40.0","price_index" => "0.4905","country" => "Greece","url" => "https://www.lcbo.com/en/sigalas-fragkosiko-661099"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gujinggong-Yuanjiang","brand" => "Gujinggong","category" => "Spirits","subcategory" => "Liqueur","price" => "80.95","volume" => "500","alcohol_content" => "50.0","price_index" => "0.32380000000000003","country" => "China","url" => "https://www.lcbo.com/en/gujinggong-yuanjiang-455063"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kamiki Maltage Blended Whisky","brand" => "Kamiki","category" => "Spirits","subcategory" => "Whisky","price" => "129.75","volume" => "750","alcohol_content" => "48.1","price_index" => "0.35966735966735963","country" => "Japan","url" => "https://www.lcbo.com/en/kamiki-maltage-blended-whisky-636118"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bottega White Sambuca","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "33.95","volume" => "700","alcohol_content" => "40.0","price_index" => "0.12125000000000001","country" => "Italy","url" => "https://www.lcbo.com/en/bottega-white-sambuca-296318"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Laneway No. 33 Gin","brand" => "LANEWAY DISTILLERS","category" => "Spirits","subcategory" => "Gin","price" => "98.95","volume" => "750","alcohol_content" => "43.5","price_index" => "0.3032950191570881","country" => "Canada","url" => "https://www.lcbo.com/en/laneway-no-33-gin-27563"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Capo Capo Aperitivo Rosso","brand" => "Capo Capo Aperitivo Rosso","category" => "Spirits","subcategory" => "Liqueur","price" => "20.65","volume" => "750","alcohol_content" => "16.0","price_index" => "0.1720833333333333","country" => "Italy","url" => "https://www.lcbo.com/en/capo-capo-aperitivo-rosso-493221"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sanchez Romate Hnos Cardenal Mendoza Solera Gran Reserva Brandy","brand" => "Cardinal Mendoza","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "75.2","volume" => "700","alcohol_content" => "40.0","price_index" => "0.26857142857142857","country" => "Spain","url" => "https://www.lcbo.com/en/sanchez-romate-hnos-cardenal-mendoza-solera-gran-reserva-brandy-185280"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Leegangju No. 1","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "109.75","volume" => "400","alcohol_content" => "25.0","price_index" => "1.0975","country" => "South Korea","url" => "https://www.lcbo.com/en/leegangju-no-1-648815"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Benromach 15 Year Old Speyside Single Malt Scotch Whisky","brand" => "Benromach","category" => "Spirits","subcategory" => "Whisky","price" => "148.3","volume" => "700","alcohol_content" => "43.0","price_index" => "0.49269102990033226","country" => "United Kingdom","url" => "https://www.lcbo.com/en/benromach-15-year-old-speyside-single-malt-scotch-whisky-477273"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Geumsan Insamju Soosam 43","brand" => "Private Stock","category" => "Spirits","subcategory" => "Soju","price" => "215.1","volume" => "720","alcohol_content" => "43.0","price_index" => "0.694767441860465","country" => "South Korea","url" => "https://www.lcbo.com/en/geumsan-insamju-soosam-43-879908"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lagavulin 12 Year Old","brand" => "Lagavulin","category" => "Spirits","subcategory" => "Whisky","price" => "200.1","volume" => "750","alcohol_content" => "56.5","price_index" => "0.472212389380531","country" => "United Kingdom","url" => "https://www.lcbo.com/en/lagavulin-12-year-old-18872"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Moutai Classic Blue Reserve 8 Year Old","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "341.4","volume" => "500","alcohol_content" => "53.0","price_index" => "1.2883018867924527","country" => "China","url" => "https://www.lcbo.com/en/northern-monk-eternal-session-ipa-case-431907"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Blue Yanghe","brand" => "Yanghe","category" => "Spirits","subcategory" => "Liqueur","price" => "34.95","volume" => "500","alcohol_content" => "51.6","price_index" => "0.1354651162790698","country" => "China","url" => "https://www.lcbo.com/en/blue-yanghe-455477"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Penderyn Legend","brand" => "Penderyn","category" => "Spirits","subcategory" => "Whisky","price" => "64.5","volume" => "700","alcohol_content" => "41.0","price_index" => "0.22473867595818817","country" => "United Kingdom","url" => "https://www.lcbo.com/en/penderyn-legend-467498"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Williamsbirnen Schnaps","brand" => "Williamsbirnen","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "25.95","volume" => "500","alcohol_content" => "35.0","price_index" => "0.14828571428571427","country" => "Austria","url" => "https://www.lcbo.com/en/williamsbirnen-schnaps-919381"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Colonel E.H. Taylor Small Batch Kentucky Straight Bourbon (1 Bottle Limit)","brand" => "E.H. Taylor","category" => "Spirits","subcategory" => "Whisky","price" => "88.95","volume" => "750","alcohol_content" => "45.0","price_index" => "0.26355555555555554","country" => "United States","url" => "https://www.lcbo.com/en/colonel-e-h-taylor-small-batch-kentucky-straight-bourbon-1-bottle-limit-326942"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Caribou Crossing Single Barrel Canadian Whisky (1 Bottle Limit)","brand" => "Caribou Crossing","category" => "Spirits","subcategory" => "Whisky","price" => "99.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.33316666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/caribou-crossing-single-barrel-canadian-whisky-205906"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Botica Low Alcohol Gin","brand" => "Barcelona Brands S.L. Wines","category" => "Spirits","subcategory" => "Gin","price" => "20.15","volume" => "500","alcohol_content" => "14.5","price_index" => "0.2779310344827586","country" => "Spain","url" => "https://www.lcbo.com/en/botica-low-alcohol-gin-13736"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Martell Medallion VSOP Cognac","brand" => "Martell","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "94.4","volume" => "750","alcohol_content" => "40.0","price_index" => "0.3146666666666667","country" => "France","url" => "https://www.lcbo.com/en/martell-medallion-vsop-cognac-65623"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Michter's US-1 Small Batch Unblended American Whiskey","brand" => "Michter's","category" => "Spirits","subcategory" => "Whisky","price" => "87.7","volume" => "750","alcohol_content" => "41.7","price_index" => "0.2804156674660272","country" => "United States","url" => "https://www.lcbo.com/en/michter-s-us-1-small-batch-unblended-american-whiskey-472662"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Fuzzy Fire Cocktail Kit","brand" => "Fireball","category" => "Spirits","subcategory" => "Liqueur","price" => "44.6","volume" => "1500","alcohol_content" => "33.0","price_index" => "0.0901010101010101","country" => "Canada","url" => "https://www.lcbo.com/en/fuzzy-fire-cocktail-kit-21514"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dukang Mianrou 3 Xing","brand" => "Dukang","category" => "Spirits","subcategory" => "Liqueur","price" => "36.95","volume" => "460","alcohol_content" => "50.0","price_index" => "0.16065217391304348","country" => "China","url" => "https://www.lcbo.com/en/dukang-mianrou-3-xing-410738"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Old Pulteney 25YO Single Malt Scotch","brand" => "Old Pulteney","category" => "Spirits","subcategory" => "Whisky","price" => "772.8","volume" => "700","alcohol_content" => "46.0","price_index" => "2.4","country" => "United Kingdom","url" => "https://www.lcbo.com/en/old-pulteney-25yo-single-malt-scotch-11848"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Black Fox Gin #3","brand" => "Private Stock","category" => "Spirits","subcategory" => "Gin","price" => "78.55","volume" => "750","alcohol_content" => "42.0","price_index" => "0.24936507936507935","country" => "Canada","url" => "https://www.lcbo.com/en/black-fox-gin-3-712355"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bols Triple Sec","brand" => "Bols","category" => "Spirits","subcategory" => "Liqueur","price" => "18.55","volume" => "750","alcohol_content" => "24.0","price_index" => "0.10305555555555555","country" => "Netherlands","url" => "https://www.lcbo.com/en/bols-triple-sec-527705"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Caves da Montanha Rum Tortuga","brand" => "Private Stock","category" => "Spirits","subcategory" => "Rum","price" => "38.4","volume" => "700","alcohol_content" => "37.5","price_index" => "0.14628571428571427","country" => "Portugal","url" => "https://www.lcbo.com/en/caves-da-montanha-rum-tortuga-955087"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bowmore 25-Year-Old Islay Single Malt","brand" => "Bowmore","category" => "Spirits","subcategory" => "Whisky","price" => "499.95","volume" => "750","alcohol_content" => "43.0","price_index" => "1.5502325581395349","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bowmore-25-year-old-islay-single-malt-714113"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Strykover Potato Vodka KP","brand" => "Vintages Front Line Release","category" => "Spirits","subcategory" => "Vodka","price" => "28.75","volume" => "500","alcohol_content" => "40.0","price_index" => "0.14375","country" => "Poland","url" => "https://www.lcbo.com/en/strykover-potato-vodka-kp-18376"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Diao Yu Tai Yun Men Jin Cui","brand" => "Diao Yu","category" => "Spirits","subcategory" => "Liqueur","price" => "554.95","volume" => "500","alcohol_content" => "53.0","price_index" => "2.0941509433962264","country" => "China","url" => "https://www.lcbo.com/en/diao-yu-tai-yun-men-jin-cui-26409"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Little Book Chapter 5","brand" => "Little Book","category" => "Spirits","subcategory" => "Whisky","price" => "199.95","volume" => "750","alcohol_content" => "58.4","price_index" => "0.45650684931506846","country" => "United States","url" => "https://www.lcbo.com/en/little-book-chapter-5-23264"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Rhum Neisson Agricole Blanc 50","brand" => "Rhum Neisson","category" => "Spirits","subcategory" => "Rum","price" => "61.95","volume" => "700","alcohol_content" => "50.0","price_index" => "0.17700000000000002","country" => "France","url" => "https://www.lcbo.com/en/rhum-neisson-agricole-blanc-50-372648"
            ]);
            DB::table('alcohols')->insert([
            "title" => "360 Eco Luxury Vodka","brand" => "360 Vodka Flavours","category" => "Spirits","subcategory" => "Vodka","price" => "29.85","volume" => "750","alcohol_content" => "35.0","price_index" => "0.11371428571428573","country" => "United States","url" => "https://www.lcbo.com/en/360-eco-luxury-vodka-19522"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bowmore 26 Yo Vintner's Trilogy","brand" => "Bowmore","category" => "Spirits","subcategory" => "Whisky","price" => "749.4","volume" => "750","alcohol_content" => "48.7","price_index" => "2.051745379876796","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bowmore-26-yo-vintner-s-trilogy-14532"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Woodford Reserve Kentucky Straight Malt Whiskey","brand" => "Woodford Reserve","category" => "Spirits","subcategory" => "Whisky","price" => "49.85","volume" => "750","alcohol_content" => "45.0","price_index" => "0.1477037037037037","country" => "United States","url" => "https://www.lcbo.com/en/woodford-reserve-kentucky-straight-malt-whiskey-19946"
            ]);
            DB::table('alcohols')->insert([
            "title" => "G.E. Massenez Vieux Calvados","brand" => "Distillerie G.E. Massenez","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "48.55","volume" => "700","alcohol_content" => "40.0","price_index" => "0.17339285714285713","country" => "France","url" => "https://www.lcbo.com/en/g-e-massenez-vieux-calvados-271726"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Galway Gin Co Irish Gin","brand" => "Galway Irish Gin","category" => "Spirits","subcategory" => "Gin","price" => "43.4","volume" => "750","alcohol_content" => "41.8","price_index" => "0.13843700159489633","country" => "Ireland","url" => "https://www.lcbo.com/en/galway-gin-co-irish-gin-645465"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ciliegia Liquore","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "42.45","volume" => "700","alcohol_content" => "25.0","price_index" => "0.24257142857142858","country" => "Italy","url" => "https://www.lcbo.com/en/ciliegia-liquore-404490"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Highland Park 21YO","brand" => "Highland Park","category" => "Spirits","subcategory" => "Whisky","price" => "449.95","volume" => "750","alcohol_content" => "46.0","price_index" => "1.3042028985507246","country" => "United Kingdom","url" => "https://www.lcbo.com/en/highland-park-21yo-13890"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Barbayanni Ouzo Blue","brand" => "Vintages Front Line Release","category" => "Spirits","subcategory" => "Liqueur","price" => "32.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.10217054263565892","country" => "Greece","url" => "https://www.lcbo.com/en/barbayanni-ouzo-blue-20674"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Founder's Original Old Fashioned","brand" => "Founders","category" => "Spirits","subcategory" => "Liqueur","price" => "15.0","volume" => "200","alcohol_content" => "35.0","price_index" => "0.21428571428571427","country" => "Canada","url" => "https://www.lcbo.com/en/founder-s-original-old-fashioned-568667"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sarpa Oro","brand" => "Poli","category" => "Spirits","subcategory" => "Grappa","price" => "45.85","volume" => "700","alcohol_content" => "40.0","price_index" => "0.16375","country" => "Italy","url" => "https://www.lcbo.com/en/sarpa-oro-12214"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Manchester Gin Signature","brand" => "Manchester Gin","category" => "Spirits","subcategory" => "Gin","price" => "53.35","volume" => "500","alcohol_content" => "42.0","price_index" => "0.2540476190476191","country" => "United Kingdom","url" => "https://www.lcbo.com/en/manchester-gin-signature-11812"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hellerschmid Wachauer Marillenlikor Original Apricot Liqueur","brand" => "Hellerschmid","category" => "Spirits","subcategory" => "Liqueur","price" => "19.9","volume" => "500","alcohol_content" => "25.1","price_index" => "0.1585657370517928","country" => "Austria","url" => "https://www.lcbo.com/en/hellerschmid-wachauer-marillenlikor-original-apricot-liqueur-257337"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenmorangie Grand Vintage Highland Single Malt Scotch Whisky 1997","brand" => "Glenmorangie","category" => "Spirits","subcategory" => "Whisky","price" => "1355.9","volume" => "750","alcohol_content" => "43.0","price_index" => "4.204341085271318","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenmorangie-grand-vintage-highland-single-malt-scotch-whisky-1997-22846"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Steinhart Rhubarb Gin","brand" => "Steinhart","category" => "Spirits","subcategory" => "Gin","price" => "37.15","volume" => "500","alcohol_content" => "47.5","price_index" => "0.15642105263157893","country" => "Canada","url" => "https://www.lcbo.com/en/steinhart-rhubarb-gin-19408"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Moonbaesool Heritage","brand" => "Private Stock","category" => "Spirits","subcategory" => "Soju","price" => "97.9","volume" => "375","alcohol_content" => "40.0","price_index" => "0.6526666666666667","country" => "South Korea","url" => "https://www.lcbo.com/en/moonbaesool-heritage-648716"
            ]);
            DB::table('alcohols')->insert([
            "title" => "W.L. Weller Single Barrel Kentucky Straight Bourbon (1 Bottle Limit)","brand" => "W.L Weller Bourbon","category" => "Spirits","subcategory" => "Whisky","price" => "65.25","volume" => "750","alcohol_content" => "48.5","price_index" => "0.17938144329896907","country" => "United States","url" => "https://www.lcbo.com/en/w-l-weller-single-barrel-kentucky-straight-bourbon-19064"
            ]);
            DB::table('alcohols')->insert([
            "title" => "What Stuck Vodka","brand" => "What Stuck","category" => "Spirits","subcategory" => "Vodka","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/what-stuck-vodka-19668"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Little Book Chapter 4 Cask Strength","brand" => "Little Book","category" => "Spirits","subcategory" => "Whisky","price" => "199.45","volume" => "750","alcohol_content" => "61.4","price_index" => "0.4331161780673181","country" => "United States","url" => "https://www.lcbo.com/en/little-book-chapter-4-cask-strength-18867"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Remy Martin VSOP Heritage Edition","brand" => "Walker Haagen Dazs Cream Liqueur","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "105.1","volume" => "750","alcohol_content" => "40.0","price_index" => "0.35033333333333333","country" => "France","url" => "https://www.lcbo.com/en/remy-martin-vsop-heritage-edition-21209"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Old Pulteney Flotilla Vintage Single Malt Scotch Whisky","brand" => "Old Pulteney","category" => "Spirits","subcategory" => "Whisky","price" => "86.25","volume" => "700","alcohol_content" => "46.0","price_index" => "0.26785714285714285","country" => "United Kingdom","url" => "https://www.lcbo.com/en/old-pulteney-flotilla-vintage-single-malt-scotch-whisky-22101"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Badel Orahovac","brand" => "Badel 1862 D.D.","category" => "Spirits","subcategory" => "Liqueur","price" => "35.65","volume" => "1000","alcohol_content" => "24.0","price_index" => "0.14854166666666666","country" => "Croatia","url" => "https://www.lcbo.com/en/badel-orahovac-24659"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Manns London Dry Gin","brand" => "Manns","category" => "Spirits","subcategory" => "Gin","price" => "41.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.13007751937984496","country" => "Canada","url" => "https://www.lcbo.com/en/manns-london-dry-gin-23818"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grey Goose Riviera Limited Edition","brand" => "Grey Goose Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "40.25","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13416666666666666","country" => "France","url" => "https://www.lcbo.com/en/grey-goose-riviera-limited-edition-512608"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Akori Cherry Blossom","brand" => "Akori Cherry Gin","category" => "Spirits","subcategory" => "Gin","price" => "38.0","volume" => "700","alcohol_content" => "40.0","price_index" => "0.1357142857142857","country" => "Spain","url" => "https://www.lcbo.com/en/akori-cherry-blossom-18269"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Whistlepig Piggyback","brand" => "WhistlePig","category" => "Spirits","subcategory" => "Whisky","price" => "45.95","volume" => "750","alcohol_content" => "48.28","price_index" => "0.12689864678265672","country" => "United States","url" => "https://www.lcbo.com/en/whistlepig-piggyback-21953"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kannuk Vodka","brand" => "Kannuk","category" => "Spirits","subcategory" => "Vodka","price" => "51.1","volume" => "750","alcohol_content" => "40.0","price_index" => "0.17033333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/kannuk-vodka-516609"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mamajuana Old Captain","brand" => "Mamajuana Rum","category" => "Spirits","subcategory" => "Rum","price" => "28.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.094","country" => "Dominican Republic","url" => "https://www.lcbo.com/en/mamajuana-old-captain-20059"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hatozaki Blended Whisky","brand" => "Hatozaki","category" => "Spirits","subcategory" => "Whisky","price" => "61.2","volume" => "700","alcohol_content" => "40.0","price_index" => "0.21857142857142858","country" => "Japan","url" => "https://www.lcbo.com/en/hatozaki-blended-whisky-20367"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Talisker 8-Year-Old Isle of Skye Single Malt Scotch Whisky","brand" => "Talisker","category" => "Spirits","subcategory" => "Whisky","price" => "119.95","volume" => "750","alcohol_content" => "59.7","price_index" => "0.2678950307091011","country" => "United Kingdom","url" => "https://www.lcbo.com/en/talisker-8-year-old-single-malt-scotch-whisky-2-bottle-limit-23097"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Felsina Berardenga Grappa 2009","brand" => "Private Stock","category" => "Spirits","subcategory" => "Grappa","price" => "78.35","volume" => "500","alcohol_content" => "40.0","price_index" => "0.39175","country" => "Italy","url" => "https://www.lcbo.com/en/felsina-berardenga-grappa-2009-174796"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cazottes Prunelles Sauvage","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "120.15","volume" => "500","alcohol_content" => "18.0","price_index" => "1.335","country" => "France","url" => "https://www.lcbo.com/en/cazottes-prunelles-sauvage-428432"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mill Street Botanical Gin","brand" => "Mill Street","category" => "Spirits","subcategory" => "Gin","price" => "44.95","volume" => "750","alcohol_content" => "45.0","price_index" => "0.13318518518518518","country" => "Canada","url" => "https://www.lcbo.com/en/mill-street-botanical-gin-15145"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mars Maltage Cosmo Whisky","brand" => "Mars","category" => "Spirits","subcategory" => "Whisky","price" => "135.65","volume" => "700","alcohol_content" => "43.3","price_index" => "0.44754206532497526","country" => "Japan","url" => "https://www.lcbo.com/en/mars-maltage-cosmo-whisky-13968"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Chic Gin Friday","brand" => "Private Stock","category" => "Spirits","subcategory" => "Gin","price" => "71.65","volume" => "700","alcohol_content" => "40.0","price_index" => "0.25589285714285714","country" => "Portugal","url" => "https://www.lcbo.com/en/chic-gin-friday-955061"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Macallan 1824 Series No. 6 Highland Single Malt Scotch Whisky","brand" => "The Macallan","category" => "Spirits","subcategory" => "Whisky","price" => "5500.0","volume" => "750","alcohol_content" => "43.0","price_index" => "17.05426356589147","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-macallan-1824-series-no-6-highland-single-malt-scotch-whisky-414284"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Shochu Mugishiru","brand" => "Private Stock","category" => "Spirits","subcategory" => "Soju","price" => "48.25","volume" => "720","alcohol_content" => "25.0","price_index" => "0.26805555555555555","country" => "Japan","url" => "https://www.lcbo.com/en/shochu-mugishiru-133099"
            ]);
            DB::table('alcohols')->insert([
            "title" => "King's Lock Organic White Rye","brand" => "King's Lock","category" => "Spirits","subcategory" => "Whisky","price" => "43.9","volume" => "750","alcohol_content" => "40.0","price_index" => "0.14633333333333332","country" => "Canada","url" => "https://www.lcbo.com/en/king-s-lock-organic-white-rye-512889"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mizu Saga Barley Shochu","brand" => "Private Stock","category" => "Spirits","subcategory" => "Soju","price" => "58.75","volume" => "750","alcohol_content" => "35.0","price_index" => "0.22380952380952382","country" => "Japan","url" => "https://www.lcbo.com/en/mizu-saga-barley-shochu-144021"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tomatin Hogshead Highland Single Malt Scotch Whisky","brand" => "Tomatin","category" => "Spirits","subcategory" => "Whisky","price" => "599.9","volume" => "750","alcohol_content" => "51.4","price_index" => "1.5561608300907912","country" => "United Kingdom","url" => "https://www.lcbo.com/en/tomatin-hogshead-highland-single-malt-scotch-whisky-455030"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wild Dream 1 2016","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "34.85","volume" => "700","alcohol_content" => "18.1","price_index" => "0.2750591949486977","country" => "Spain","url" => "https://www.lcbo.com/en/wild-dream-1-2016-374834"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bols Ginger","brand" => "Bols","category" => "Spirits","subcategory" => "Liqueur","price" => "12.0","volume" => "750","alcohol_content" => "24.0","price_index" => "0.06666666666666667","country" => "Netherlands","url" => "https://www.lcbo.com/en/bols-ginger-527697"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Luksusowa Wisniowa Cherry Liqueur","brand" => "Luksusowa","category" => "Spirits","subcategory" => "Liqueur","price" => "28.75","volume" => "750","alcohol_content" => "36.0","price_index" => "0.10648148148148148","country" => "Poland","url" => "https://www.lcbo.com/en/luksusowa-wisniowa-cherry-liqueur-204099"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Macallan Rare Cask + FREE Lalique whisky glass","brand" => "The Macallan","category" => "Spirits","subcategory" => "Whisky","price" => "399.95","volume" => "750","alcohol_content" => "43.0","price_index" => "1.2401550387596898","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-macallan-rare-cask-free-lalique-whisky-glass-23410"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Badel Pelinkovac Gorki","brand" => "Badel","category" => "Spirits","subcategory" => "Liqueur","price" => "25.95","volume" => "700","alcohol_content" => "30.5","price_index" => "0.12154566744730678","country" => "Croatia","url" => "https://www.lcbo.com/en/badel-pelinkovac-gorki-539627"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Handy & Schiller Manhattan","brand" => "Handy & Schiller","category" => "Spirits","subcategory" => "Liqueur","price" => "60.2","volume" => "750","alcohol_content" => "35.0","price_index" => "0.22933333333333333","country" => "United States","url" => "https://www.lcbo.com/en/handy-schiller-manhattan-22902"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Colonel E.H. Taylor Single Barrel","brand" => "Colonel E.H. Taylor","category" => "Spirits","subcategory" => "Whisky","price" => "99.95","volume" => "750","alcohol_content" => "50.0","price_index" => "0.26653333333333334","country" => "United States","url" => "https://www.lcbo.com/en/colonel-e-h-taylor-single-barrel-25434"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tempo Arandano Blueberry Gin","brand" => "Tempo Dry Gin","category" => "Spirits","subcategory" => "Gin","price" => "37.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1265","country" => "Canada","url" => "https://www.lcbo.com/en/tempo-arandano-blueberry-gin-18268"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Writers Tears Copper Pot Florio Marsala Whisky","brand" => "Writer's Tears","category" => "Spirits","subcategory" => "Whisky","price" => "100.1","volume" => "700","alcohol_content" => "45.0","price_index" => "0.31777777777777777","country" => "United Kingdom","url" => "https://www.lcbo.com/en/writers-tears-copper-pot-florio-marsala-whisky-20856"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Prairie Organic Vodka","brand" => "Prairie Organic Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "31.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.104","country" => "United States","url" => "https://www.lcbo.com/en/prairie-organic-vodka-638189"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Nuo Miu Jiu","brand" => "NULL","category" => "Spirits","subcategory" => "Liqueur","price" => "9.25","volume" => "250","alcohol_content" => "18.0","price_index" => "0.20555555555555555","country" => "China","url" => "https://www.lcbo.com/en/nuo-miu-jiu-26364"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kuroki Honten Bakudan Hanatare","brand" => "Private Stock","category" => "Spirits","subcategory" => "Soju","price" => "118.4","volume" => "360","alcohol_content" => "44.0","price_index" => "0.7474747474747475","country" => "Japan","url" => "https://www.lcbo.com/en/kuroki-honten-bakudan-hanatare-698307"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Stagg Jr. Kentucky Straight Bourbon Whiskey","brand" => "Stagg Jr.","category" => "Spirits","subcategory" => "Whisky","price" => "84.95","volume" => "750","alcohol_content" => "64.3","price_index" => "0.17615344738206326","country" => "United States","url" => "https://www.lcbo.com/en/stagg-jr-kentucky-straight-bourbon-whiskey-25435"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grappa Monovitigno da Tintilia","brand" => "Private Stock","category" => "Spirits","subcategory" => "Grappa","price" => "90.35","volume" => "500","alcohol_content" => "41.0","price_index" => "0.4407317073170731","country" => "Italy","url" => "https://www.lcbo.com/en/grappa-monovitigno-da-tintilia-925031"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Golden 8 Pear Liqueur","brand" => "Distillerie G.E. Massenez","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "69.3","volume" => "700","alcohol_content" => "25.0","price_index" => "0.39599999999999996","country" => "France","url" => "https://www.lcbo.com/en/golden-8-pear-liqueur-21582"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tresor Gin N13","brand" => "Tresor Gin","category" => "Spirits","subcategory" => "Gin","price" => "34.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.114","country" => "Canada","url" => "https://www.lcbo.com/en/tresor-gin-n13-19402"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenfarclas 17-Year-Old Highland Single Malt Scotch Whisky","brand" => "Glenfarclas","category" => "Spirits","subcategory" => "Whisky","price" => "137.1","volume" => "700","alcohol_content" => "43.0","price_index" => "0.4554817275747508","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenfarclas-17-year-old-highland-single-malt-scotch-whisky-721084"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Singleton of Glendullan 19-Year-Old Speyside Single Malt Scotch Whisky","brand" => "The Singleton","category" => "Spirits","subcategory" => "Whisky","price" => "199.6","volume" => "750","alcohol_content" => "54.6","price_index" => "0.48742368742368736","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-singleton-of-glendullan-19-year-old-speyside-single-malt-scotch-whisky-23111"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Charles de Granville Calvados 30 Year Old Elite","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "368.35","volume" => "700","alcohol_content" => "40.0","price_index" => "1.3155357142857145","country" => "France","url" => "https://www.lcbo.com/en/charles-de-granville-calvados-30-year-old-elite-941814"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Rock Oyster 18","brand" => "Rock Oyster","category" => "Spirits","subcategory" => "Whisky","price" => "162.95","volume" => "700","alcohol_content" => "46.8","price_index" => "0.4974053724053724","country" => "United Kingdom","url" => "https://www.lcbo.com/en/rock-oyster-18-644138"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Luksusowa Vodka","brand" => "Luksusowa","category" => "Spirits","subcategory" => "Vodka","price" => "15.8","volume" => "375","alcohol_content" => "40.0","price_index" => "0.10533333333333333","country" => "Poland","url" => "https://www.lcbo.com/en/luksusowa-vodka-14347"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Magnotta Inginious Spiced Hopped Gin","brand" => "Magnotta","category" => "Spirits","subcategory" => "Gin","price" => "44.95","volume" => "750","alcohol_content" => "41.4","price_index" => "0.14476650563607085","country" => "Canada","url" => "https://www.lcbo.com/en/magnotta-inginious-spiced-hopped-gin-17778"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glendalough Pot Still Irish Whiskey","brand" => "Glendalough","category" => "Spirits","subcategory" => "Whisky","price" => "78.75","volume" => "750","alcohol_content" => "43.0","price_index" => "0.2441860465116279","country" => "Ireland","url" => "https://www.lcbo.com/en/glendalough-pot-still-irish-whiskey-13917"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bigallet China China","brand" => "Bigallet","category" => "Spirits","subcategory" => "Liqueur","price" => "42.1","volume" => "500","alcohol_content" => "40.0","price_index" => "0.21050000000000002","country" => "France","url" => "https://www.lcbo.com/en/bigallet-china-china-289305"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Montirius La Fine Gigondas Eau-de-Vie","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "152.2","volume" => "350","alcohol_content" => "43.5","price_index" => "0.999671592775041","country" => "France","url" => "https://www.lcbo.com/en/montirius-la-fine-gigondas-eau-de-vie-455153"
            ]);
            DB::table('alcohols')->insert([
            "title" => "HIP Gin Silver","brand" => "Hip","category" => "Spirits","subcategory" => "Gin","price" => "33.0","volume" => "750","alcohol_content" => "40.3","price_index" => "0.10918114143920596","country" => "Canada","url" => "https://www.lcbo.com/en/hip-gin-silver-ddp-14314"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Golden Horse Bushu Japanese Whisky","brand" => "Golden Horse","category" => "Spirits","subcategory" => "Whisky","price" => "103.25","volume" => "700","alcohol_content" => "43.19","price_index" => "0.3415142394072702","country" => "Japan","url" => "https://www.lcbo.com/en/golden-horse-bushu-japanese-whisky-554485"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Appleton Estate V/X Signature Blend","brand" => "Appleton","category" => "Spirits","subcategory" => "Rum","price" => "113.65","volume" => "3000","alcohol_content" => "40.0","price_index" => "0.09470833333333334","country" => "Jamaica","url" => "https://www.lcbo.com/en/appleton-estate-v-x-signature-blend-600999"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Berta Il 28 di Via San Nicolao Amaro d'Erbe","brand" => "Private Stock","category" => "Spirits","subcategory" => "Grappa","price" => "75.15","volume" => "700","alcohol_content" => "30.0","price_index" => "0.3578571428571429","country" => "Italy","url" => "https://www.lcbo.com/en/berta-il-28-di-via-san-nicolao-amaro-d-erbe-287242"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Fanti Riserva di Brunello Grappa","brand" => "Private Stock","category" => "Spirits","subcategory" => "Grappa","price" => "181.1","volume" => "500","alcohol_content" => "42.0","price_index" => "0.8623809523809524","country" => "Italy","url" => "https://www.lcbo.com/en/fanti-riserva-di-brunello-grappa-153030"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bowmore 27 Yo, The Vintner's Trilogy","brand" => "Bowmore","category" => "Spirits","subcategory" => "Whisky","price" => "799.4","volume" => "750","alcohol_content" => "48.3","price_index" => "2.2067632850241545","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bowmore-27-yo-the-vintner-s-trilogy-15284"
            ]);
            DB::table('alcohols')->insert([
            "title" => "William Larue Weller Kentucky Straight Bourbon Whiskey","brand" => "W.L. Weller","category" => "Spirits","subcategory" => "Whisky","price" => "179.95","volume" => "750","alcohol_content" => "62.6","price_index" => "0.38328008519701806","country" => "United States","url" => "https://www.lcbo.com/en/william-larue-weller-kentucky-straight-bourbon-whiskey-25440"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cardhu 14-Year-Old Speyside Single Malt Scotch Whisky","brand" => "Cardhu","category" => "Spirits","subcategory" => "Whisky","price" => "199.95","volume" => "750","alcohol_content" => "55.5","price_index" => "0.4803603603603603","country" => "United Kingdom","url" => "https://www.lcbo.com/en/cardhu-14-year-old-speyside-single-malt-scotch-whisky-23109"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Marolo Milla Liqueur Grappa and Camomile","brand" => "Marolo Distilleria","category" => "Spirits","subcategory" => "Grappa","price" => "71.65","volume" => "700","alcohol_content" => "35.0","price_index" => "0.2924489795918368","country" => "Italy","url" => "https://www.lcbo.com/en/marolo-milla-liqueur-grappa-and-camomile-211433"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Spring Mill John Sleeman Ward Series No.2 Coffee Liqueur","brand" => "Spring Mill Distillery","category" => "Spirits","subcategory" => "Liqueur","price" => "29.95","volume" => "375","alcohol_content" => "25.5","price_index" => "0.313202614379085","country" => "Canada","url" => "https://www.lcbo.com/en/spring-mill-john-sleeman-ward-series-no-2-coffee-liqueur-19050"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Arran Malt Amarone Cask Finish Isle of Arran Single Malt","brand" => "The Arran Malt","category" => "Spirits","subcategory" => "Whisky","price" => "83.95","volume" => "700","alcohol_content" => "50.0","price_index" => "0.23985714285714285","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-arran-malt-amarone-cask-finish-isle-of-arran-single-malt-50070"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Extreme Cognac","brand" => "Cognac Tesseron","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "11424.5","volume" => "1750","alcohol_content" => "40.0","price_index" => "16.320714285714285","country" => "France","url" => "https://www.lcbo.com/en/extreme-cognac-22514"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Pomegranate Liquore Bottega","brand" => "Bottega Liquore","category" => "Spirits","subcategory" => "Liqueur","price" => "24.6","volume" => "500","alcohol_content" => "20.0","price_index" => "0.24600000000000002","country" => "Italy","url" => "https://www.lcbo.com/en/pomegranate-liquore-bottega-14397"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cazottes Tomate 2015","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "104.75","volume" => "500","alcohol_content" => "18.0","price_index" => "1.163888888888889","country" => "France","url" => "https://www.lcbo.com/en/cazottes-tomate-2015-428416"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mulher de Capote Licor de Amora Blackberry Liquor","brand" => "Vintages Spirits","category" => "Spirits","subcategory" => "Liqueur","price" => "28.95","volume" => "750","alcohol_content" => "20.0","price_index" => "0.193","country" => "Portugal","url" => "https://www.lcbo.com/en/mulher-de-capote-licor-de-amora-blackberry-liquor-562702"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lot 29 Xo Exception Cognac","brand" => "Cognac Tesseron","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "3319.85","volume" => "1750","alcohol_content" => "40.0","price_index" => "4.742642857142857","country" => "France","url" => "https://www.lcbo.com/en/lot-29-xo-exception-cognac-22512"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bomberger's Declaration Kentucky Straight Bourbon Whiskey","brand" => "Bomberger's Declaration","category" => "Spirits","subcategory" => "Whisky","price" => "169.75","volume" => "750","alcohol_content" => "54.0","price_index" => "0.4191358024691358","country" => "United States","url" => "https://www.lcbo.com/en/bomberger-s-declaration-kentucky-straight-bourbon-whiskey-13724"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Penderyn Madeira Cask Finish","brand" => "Penderyn","category" => "Spirits","subcategory" => "Whisky","price" => "87.7","volume" => "700","alcohol_content" => "46.0","price_index" => "0.27236024844720497","country" => "United Kingdom","url" => "https://www.lcbo.com/en/penderyn-madeira-cask-finish-543397"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Seyringer Obstler Apple & Pears","brand" => "W. Hammerle Destillerie Freiho","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "24.45","volume" => "500","alcohol_content" => "35.0","price_index" => "0.1397142857142857","country" => "Austria","url" => "https://www.lcbo.com/en/seyringer-obstler-apple-pears-347393"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenglassaugh Evolution","brand" => "Glenglassaugh","category" => "Spirits","subcategory" => "Whisky","price" => "70.2","volume" => "700","alcohol_content" => "50.0","price_index" => "0.20057142857142857","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenglassaugh-evolution-20888"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Teeling Small Batch Spirit of Dublin Gift Pack","brand" => "Teeling","category" => "Spirits","subcategory" => "Whisky","price" => "51.95","volume" => "700","alcohol_content" => "46.0","price_index" => "0.16133540372670807","country" => "Ireland","url" => "https://www.lcbo.com/en/teeling-small-batch-spirit-of-dublin-gift-pack-23567"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Frapin Cognac VSOP","brand" => "Frapin","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "113.6","volume" => "700","alcohol_content" => "40.0","price_index" => "0.4057142857142857","country" => "France","url" => "https://www.lcbo.com/en/frapin-cognac-vsop-288794"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Old Potrero Straight Rye","brand" => "Old Potrero","category" => "Spirits","subcategory" => "Whisky","price" => "89.95","volume" => "750","alcohol_content" => "48.5","price_index" => "0.2472852233676976","country" => "United States","url" => "https://www.lcbo.com/en/old-potrero-straight-rye-582544"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lima & Quental Licor de Mel Abelheira","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "31.05","volume" => "700","alcohol_content" => "36.0","price_index" => "0.12321428571428572","country" => "Portugal","url" => "https://www.lcbo.com/en/lima-quental-licor-de-mel-abelheira-961663"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glendronach 18 Years Old Allardice Highland Single Malt","brand" => "Glendronach","category" => "Spirits","subcategory" => "Whisky","price" => "209.95","volume" => "750","alcohol_content" => "46.0","price_index" => "0.6085507246376811","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glendronach-18-years-old-allardice-highland-single-malt-288233"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Il Merlot di Nonino Monovitigno Grappa","brand" => "Nonino","category" => "Spirits","subcategory" => "Grappa","price" => "66.15","volume" => "700","alcohol_content" => "41.0","price_index" => "0.2304878048780488","country" => "Italy","url" => "https://www.lcbo.com/en/il-merlot-di-nonino-monovitigno-grappa-657734"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Callicounis Tsipouro without Anise","brand" => "Callicounis","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "9.05","volume" => "200","alcohol_content" => "40.0","price_index" => "0.113125","country" => "Greece","url" => "https://www.lcbo.com/en/callicounis-tsipouro-without-anise-937317"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Canadian Club 42YO Chronicles Issue No. 2","brand" => "Gift Of The Month","category" => "Spirits","subcategory" => "Whisky","price" => "309.95","volume" => "750","alcohol_content" => "45.0","price_index" => "0.9183703703703703","country" => "Canada","url" => "https://www.lcbo.com/en/canadian-club-42yo-chronicles-issue-no-2-12322"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Calvados Charles de Granville Hors d'Age","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "97.95","volume" => "700","alcohol_content" => "40.45","price_index" => "0.34592971923009","country" => "France","url" => "https://www.lcbo.com/en/calvados-charles-de-granville-hors-d-age-800136"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tyrconnell Port Cask Single Malt Irish Whiskey","brand" => "Tyrconnell Cask","category" => "Spirits","subcategory" => "Whisky","price" => "97.5","volume" => "750","alcohol_content" => "46.0","price_index" => "0.2826086956521739","country" => "Ireland","url" => "https://www.lcbo.com/en/tyrconnell-port-cask-single-malt-irish-whiskey-493593"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grappa di Barolo","brand" => "Private Stock","category" => "Spirits","subcategory" => "Grappa","price" => "54.65","volume" => "500","alcohol_content" => "40.0","price_index" => "0.27325","country" => "Italy","url" => "https://www.lcbo.com/en/grappa-di-barolo-621424"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Balvenie 12 Sweet Toast of American Oak","brand" => "The Balvenie","category" => "Spirits","subcategory" => "Whisky","price" => "150.2","volume" => "700","alcohol_content" => "43.0","price_index" => "0.4990033222591362","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-balvenie-12-sweet-toast-of-american-oak-22182"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sambuca Pimpinella Anisum","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "35.25","volume" => "700","alcohol_content" => "38.0","price_index" => "0.1325187969924812","country" => "Italy","url" => "https://www.lcbo.com/en/sambuca-pimpinella-anisum-163120"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cazottes Cedrat 2014","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "120.15","volume" => "500","alcohol_content" => "18.0","price_index" => "1.335","country" => "France","url" => "https://www.lcbo.com/en/cazottes-cedrat-2014-428390"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Manille Liqueur De Calamansi","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "88.85","volume" => "750","alcohol_content" => "27.5","price_index" => "0.4307878787878787","country" => "Philippines","url" => "https://www.lcbo.com/en/manille-liqueur-de-calamansi-280445"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dalmore 25YO Single Malt Scotch Whisky","brand" => "Dalmore","category" => "Spirits","subcategory" => "Whisky","price" => "2100.25","volume" => "750","alcohol_content" => "42.0","price_index" => "6.667460317460318","country" => "United Kingdom","url" => "https://www.lcbo.com/en/dalmore-25yo-single-malt-scotch-whisky-10193"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hinch Irish Whiskey 5 Year Old Double Wood","brand" => "Hinch","category" => "Spirits","subcategory" => "Whisky","price" => "77.2","volume" => "700","alcohol_content" => "42.67","price_index" => "0.25846195051725873","country" => "United Kingdom","url" => "https://www.lcbo.com/en/hinch-irish-whiskey-5-year-old-double-wood-20563"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lheraud Extra Cognac","brand" => "Cognac Lheraud","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "301.7","volume" => "700","alcohol_content" => "42.0","price_index" => "1.026190476190476","country" => "France","url" => "https://www.lcbo.com/en/lheraud-extra-cognac-423640"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Berta Nibbio Grappa di Barbera","brand" => "Berta","category" => "Spirits","subcategory" => "Grappa","price" => "75.2","volume" => "700","alcohol_content" => "40.0","price_index" => "0.26857142857142857","country" => "Italy","url" => "https://www.lcbo.com/en/berta-nibbio-grappa-di-barbera-446681"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dalmore Rare & Fine Quintessence Single Malt","brand" => "Dalmore","category" => "Spirits","subcategory" => "Whisky","price" => "2000.3","volume" => "750","alcohol_content" => "45.0","price_index" => "5.926814814814815","country" => "United Kingdom","url" => "https://www.lcbo.com/en/dalmore-rare-fine-quintessence-single-malt-24235"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Laphroaig Ian Hunter - Chapter 3 (1 Bottle Limit)","brand" => "LAPHROAIG","category" => "Spirits","subcategory" => "Whisky","price" => "2499.95","volume" => "750","alcohol_content" => "49.9","price_index" => "6.679893119572478","country" => "United Kingdom","url" => "https://www.lcbo.com/en/laphroaig-ian-hunter-chapter-3-1-bottle-limit-25103"
            ]);
            DB::table('alcohols')->insert([
            "title" => "El Dorado Golden Rum Cream Liquor","brand" => "El Dorado","category" => "Spirits","subcategory" => "Liqueur","price" => "30.0","volume" => "750","alcohol_content" => "16.5","price_index" => "0.24242424242424243","country" => "Guyana","url" => "https://www.lcbo.com/en/el-dorado-golden-rum-cream-liquor-34421"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Berta Grappa Monpra","brand" => "Berta","category" => "Spirits","subcategory" => "Grappa","price" => "92.8","volume" => "700","alcohol_content" => "40.0","price_index" => "0.3314285714285714","country" => "Italy","url" => "https://www.lcbo.com/en/berta-grappa-monpra-446707"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Manille Liqueur De Dalandan","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "88.85","volume" => "750","alcohol_content" => "27.5","price_index" => "0.4307878787878787","country" => "Philippines","url" => "https://www.lcbo.com/en/manille-liqueur-de-dalandan-280437"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glen Breton 14 Year Old Whisky","brand" => "Glen Breton","category" => "Spirits","subcategory" => "Whisky","price" => "135.25","volume" => "750","alcohol_content" => "43.0","price_index" => "0.4193798449612403","country" => "Canada","url" => "https://www.lcbo.com/en/glen-breton-14-year-old-whisky-13959"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Olmeca Tequila Gold","brand" => "Olmeca","category" => "Spirits","subcategory" => "Tequila","price" => "50.15","volume" => "1140","alcohol_content" => "40.0","price_index" => "0.10997807017543859","country" => "Mexico","url" => "https://www.lcbo.com/en/olmeca-tequila-gold-227405"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kirkwall Bay Orkney Single Malt Whisky","brand" => "Kirkwall Bay Orkney","category" => "Spirits","subcategory" => "Whisky","price" => "90.2","volume" => "700","alcohol_content" => "46.0","price_index" => "0.28012422360248446","country" => "United Kingdom","url" => "https://www.lcbo.com/en/kirkwall-bay-orkney-single-malt-whisky-609172"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Balblair 12YO Highland Single Malt Scotch","brand" => "Balblair","category" => "Spirits","subcategory" => "Whisky","price" => "95.25","volume" => "750","alcohol_content" => "46.14","price_index" => "0.2752492414390984","country" => "United Kingdom","url" => "https://www.lcbo.com/en/balblair-12yo-highland-single-malt-scotch-10737"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lagavulin Distillers Edition Islay Single Malt Scotch Whisky","brand" => "Lagavulin","category" => "Spirits","subcategory" => "Whisky","price" => "167.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.5207751937984496","country" => "United Kingdom","url" => "https://www.lcbo.com/en/lagavulin-distillers-edition-islay-single-malt-scotch-whisky-503060"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wild Cherry Liqueur","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "23.4","volume" => "750","alcohol_content" => "16.0","price_index" => "0.19499999999999998","country" => "Germany","url" => "https://www.lcbo.com/en/wild-cherry-liqueur-741636"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jefferson's Reserve Bourbon","brand" => "Jeffersons Bourbon","category" => "Spirits","subcategory" => "Whisky","price" => "88.55","volume" => "750","alcohol_content" => "45.1","price_index" => "0.26178861788617885","country" => "United States","url" => "https://www.lcbo.com/en/jefferson-s-reserve-bourbon-463919"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Deanston 12 Year Old Highland Single Malt Whisky","brand" => "Deanston","category" => "Spirits","subcategory" => "Whisky","price" => "95.25","volume" => "700","alcohol_content" => "46.3","price_index" => "0.2938907744523296","country" => "United Kingdom","url" => "https://www.lcbo.com/en/deanston-12-year-old-highland-single-malt-whisky-22663"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Rabarbaro Liquore","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "35.85","volume" => "700","alcohol_content" => "20.0","price_index" => "0.25607142857142856","country" => "Italy","url" => "https://www.lcbo.com/en/rabarbaro-liquore-404607"
            ]);
            DB::table('alcohols')->insert([
            "title" => "R�my Martin Louis XIII Cognac","brand" => "Remy Martin","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "4300.0","volume" => "700","alcohol_content" => "40.0","price_index" => "15.357142857142858","country" => "France","url" => "https://www.lcbo.com/en/r-cmy-martin-louis-xiii-cognac-94433"
            ]);
            DB::table('alcohols')->insert([
            "title" => "GattaNera Grappa","brand" => "Private Stock","category" => "Spirits","subcategory" => "Grappa","price" => "53.35","volume" => "500","alcohol_content" => "19.0","price_index" => "0.5615789473684211","country" => "Italy","url" => "https://www.lcbo.com/en/gattanera-grappa-530294"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Likoris Liquor with Gold and Silver","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "13.45","volume" => "60","alcohol_content" => "18.0","price_index" => "1.2453703703703705","country" => "Portugal","url" => "https://www.lcbo.com/en/likoris-liquor-with-gold-and-silver-629872"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ron Malteco Reserva Amable 5yo","brand" => "Ron Malteco Rum","category" => "Spirits","subcategory" => "Rum","price" => "28.95","volume" => "700","alcohol_content" => "40.0","price_index" => "0.10339285714285713","country" => "Panama","url" => "https://www.lcbo.com/en/ron-malteco-reserva-amable-5yo-15315"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bowmore 30 Year Old","brand" => "Bowmore","category" => "Spirits","subcategory" => "Whisky","price" => "2999.95","volume" => "700","alcohol_content" => "45.1","price_index" => "9.502534051314539","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bowmore-30-year-old-23082"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Local Spirit Vodka 8","brand" => "Local Spirit","category" => "Spirits","subcategory" => "Vodka","price" => "34.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1165","country" => "Canada","url" => "https://www.lcbo.com/en/local-spirit-vodka-8-22153"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ontario Wild Honey Botanical Gin","brand" => "Trafalgar Ales and Meads","category" => "Spirits","subcategory" => "Gin","price" => "33.55","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11183333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/ontario-wild-honey-botanical-gin-538967"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Metaxa 12 Stars","brand" => "Metaxa","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "49.95","volume" => "700","alcohol_content" => "40.0","price_index" => "0.17839285714285716","country" => "Greece","url" => "https://www.lcbo.com/en/metaxa-12-stars-384933"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Shinobu 10 YO Pure Malt Whisky","brand" => "Shinobu","category" => "Spirits","subcategory" => "Whisky","price" => "148.25","volume" => "750","alcohol_content" => "43.0","price_index" => "0.45968992248062013","country" => "Japan","url" => "https://www.lcbo.com/en/shinobu-10-yo-pure-malt-whisky-20051"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sibona Liquore alla Camomilla in Grappa Finissima","brand" => "Sibona","category" => "Spirits","subcategory" => "Grappa","price" => "42.75","volume" => "700","alcohol_content" => "32.0","price_index" => "0.19084821428571427","country" => "Italy","url" => "https://www.lcbo.com/en/sibona-liquore-alla-camomilla-in-grappa-finissima-285775"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jim Beam Single Barrel","brand" => "Jim Beam","category" => "Spirits","subcategory" => "Whisky","price" => "54.4","volume" => "750","alcohol_content" => "54.0","price_index" => "0.134320987654321","country" => "United States","url" => "https://www.lcbo.com/en/jim-beam-single-barrel-526244"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Northern Grains Canadian Whisky","brand" => "Northern Grains","category" => "Spirits","subcategory" => "Whisky","price" => "51.2","volume" => "750","alcohol_content" => "40.53","price_index" => "0.16843490418619952","country" => "Canada","url" => "https://www.lcbo.com/en/northern-grains-canadian-whisky-14377"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Andong Soju","brand" => "Andong","category" => "Spirits","subcategory" => "Soju","price" => "183.0","volume" => "800","alcohol_content" => "45.0","price_index" => "0.5083333333333333","country" => "South Korea","url" => "https://www.lcbo.com/en/andong-soju-648781"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Goldschlager With Shot Glass","brand" => "Goldschlager","category" => "Spirits","subcategory" => "Liqueur","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/goldschlager-with-shot-glass-22966"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hennessy VS Artist Series","brand" => "Hennessy","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "70.5","volume" => "750","alcohol_content" => "40.0","price_index" => "0.235","country" => "France","url" => "https://www.lcbo.com/en/hennessy-vs-artist-series-629048"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mister Sam Tribute Whiskey","brand" => "Mister Sam","category" => "Spirits","subcategory" => "Whisky","price" => "349.95","volume" => "750","alcohol_content" => "66.87","price_index" => "0.6977717960221325","country" => "Canada","url" => "https://www.lcbo.com/en/mister-sam-tribute-whiskey-bottle-limit-1-18765"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Nikka Taketsuru Pure Malt Japanese Whisky","brand" => "Nikka","category" => "Spirits","subcategory" => "Whisky","price" => "85.2","volume" => "700","alcohol_content" => "43.0","price_index" => "0.2830564784053156","country" => "Japan","url" => "https://www.lcbo.com/en/nikka-taketsuru-pure-malt-japanese-whisky-20975"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kardasi Tsipouro Aged","brand" => "Kardasi","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "75.45","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2515","country" => "Greece","url" => "https://www.lcbo.com/en/kardasi-tsipouro-aged-803890"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Pike Creek 22 Year Old PX Cask Finish Canadian Whisky","brand" => "Pike Creek Canadian Whisky","category" => "Spirits","subcategory" => "Whisky","price" => "90.25","volume" => "750","alcohol_content" => "45.0","price_index" => "0.2674074074074074","country" => "Canada","url" => "https://www.lcbo.com/en/pike-creek-22-year-old-px-cask-finish-canadian-whisky-23106"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Writers Tears Copper Pot Mizunara Whisky","brand" => "Writers Tears","category" => "Spirits","subcategory" => "Whisky","price" => "139.9","volume" => "700","alcohol_content" => "55.0","price_index" => "0.36337662337662335","country" => "United Kingdom","url" => "https://www.lcbo.com/en/writers-tears-copper-pot-mizunara-whisky-24092"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Padre Azul Reposado Tequila","brand" => "Tequila Padre","category" => "Spirits","subcategory" => "Tequila","price" => "169.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.5665","country" => "Mexico","url" => "https://www.lcbo.com/en/padre-azul-reposado-tequila-14176"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Camus Elegance XO Cognac","brand" => "Camus","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "222.0","volume" => "700","alcohol_content" => "40.0","price_index" => "0.7928571428571428","country" => "France","url" => "https://www.lcbo.com/en/camus-elegance-xo-cognac-79285"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Stolichnaya Salted Karamel Vodka","brand" => "Stolichnaya Flavours","category" => "Spirits","subcategory" => "Vodka","price" => "27.75","volume" => "750","alcohol_content" => "37.5","price_index" => "0.09866666666666667","country" => "Latvia","url" => "https://www.lcbo.com/en/stolichnaya-salted-karamel-vodka-10802"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Rebel Straight Bourbon Whiskey","brand" => "Rebel Yell","category" => "Spirits","subcategory" => "Whisky","price" => "39.55","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13183333333333333","country" => "United States","url" => "https://www.lcbo.com/en/rebel-straight-bourbon-whiskey-602219"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenmorangie A Tale of Cake","brand" => "Glenmorangie","category" => "Spirits","subcategory" => "Whisky","price" => "127.35","volume" => "750","alcohol_content" => "46.0","price_index" => "0.36913043478260865","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenmorangie-a-tale-of-cake-23976"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ginraw Gin","brand" => "Ginraw Gin","category" => "Spirits","subcategory" => "Gin","price" => "53.35","volume" => "700","alcohol_content" => "42.3","price_index" => "0.18017561634582913","country" => "Spain","url" => "https://www.lcbo.com/en/ginraw-gin-12121"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Citadelle Gin Le Jardin D'Ete","brand" => "Citadelle","category" => "Spirits","subcategory" => "Gin","price" => "30.7","volume" => "750","alcohol_content" => "41.5","price_index" => "0.09863453815261045","country" => "France","url" => "https://www.lcbo.com/en/citadelle-gin-le-jardin-d-ete-19409"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Blue Spot Irish Whiskey","brand" => "Blue Spot","category" => "Spirits","subcategory" => "Whisky","price" => "100.35","volume" => "750","alcohol_content" => "58.7","price_index" => "0.22793867120953998","country" => "Ireland","url" => "https://www.lcbo.com/en/blue-spot-irish-whiskey-22662"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Vecchia Romagna Tre Botti","brand" => "Vecchia Romagna","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "60.2","volume" => "750","alcohol_content" => "40.8","price_index" => "0.19673202614379087","country" => "Italy","url" => "https://www.lcbo.com/en/vecchia-romagna-tre-botti-21571"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Matsui Whisky Tottori Bourbon Barrel","brand" => "Matsui Shuzo","category" => "Spirits","subcategory" => "Whisky","price" => "63.35","volume" => "700","alcohol_content" => "43.25","price_index" => "0.2092485549132948","country" => "Japan","url" => "https://www.lcbo.com/en/matsui-whisky-tottori-bourbon-barrel-11625"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Badel Votka Vigor","brand" => "Badel 1862 D.D.","category" => "Spirits","subcategory" => "Vodka","price" => "27.15","volume" => "700","alcohol_content" => "37.5","price_index" => "0.10342857142857143","country" => "Croatia","url" => "https://www.lcbo.com/en/votka-vigor-24658"
            ]);
            DB::table('alcohols')->insert([
            "title" => "No.0 London Dry Gin","brand" => "No.0 London Gin","category" => "Spirits","subcategory" => "Gin","price" => "42.8","volume" => "700","alcohol_content" => "40.8","price_index" => "0.14985994397759103","country" => "Spain","url" => "https://www.lcbo.com/en/no-0-london-dry-gin-14926"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cody Road Rye Whiskey","brand" => "Cody Road Rye Whiskey","category" => "Spirits","subcategory" => "Whisky","price" => "82.9","volume" => "750","alcohol_content" => "45.0","price_index" => "0.24562962962962964","country" => "United States","url" => "https://www.lcbo.com/en/cody-road-rye-whiskey-526541"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenmorangie Nectar D'Or Highland Single Malt Scotch Whisky","brand" => "Glenmorangie","category" => "Spirits","subcategory" => "Whisky","price" => "127.85","volume" => "750","alcohol_content" => "46.0","price_index" => "0.3705797101449275","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenmorangie-nectar-d-or-highland-single-malt-scotch-whisky-241984"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Scheibel Premium Moor Birne Liqueur","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "57.4","volume" => "350","alcohol_content" => "40.0","price_index" => "0.41","country" => "Germany","url" => "https://www.lcbo.com/en/scheibel-premium-moor-birne-liqueur-530237"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenfarclas 40 Year Old","brand" => "Glenfarclas","category" => "Spirits","subcategory" => "Whisky","price" => "1520.0","volume" => "700","alcohol_content" => "43.0","price_index" => "5.04983388704319","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenfarclas-40-year-old-17662"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Roots Kanela (Tentura)","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "43.4","volume" => "700","alcohol_content" => "24.0","price_index" => "0.2583333333333333","country" => "Greece","url" => "https://www.lcbo.com/en/roots-kanela-tentura-676246"
            ]);
            DB::table('alcohols')->insert([
            "title" => "El Dorado Port Mourant Single Still Finest Demerara Rum","brand" => "El Dorado","category" => "Spirits","subcategory" => "Rum","price" => "89.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.29983333333333334","country" => "Guyana","url" => "https://www.lcbo.com/en/el-dorado-port-mourant-single-still-finest-demerara-rum-469973"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cognac Decroix","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "152.3","volume" => "700","alcohol_content" => "40.0","price_index" => "0.5439285714285714","country" => "France","url" => "https://www.lcbo.com/en/cognac-decroix-833160"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gosling's Family Reserve Old Rum","brand" => "Gosling's","category" => "Spirits","subcategory" => "Rum","price" => "99.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.33316666666666667","country" => "Bermuda","url" => "https://www.lcbo.com/en/gosling-s-family-reserve-old-rum-100511"
            ]);
            DB::table('alcohols')->insert([
            "title" => "PJ's Craft Cream Liquor White Chocolate Peppermint","brand" => "Pj'S Original Cream","category" => "Spirits","subcategory" => "Liqueur","price" => "21.95","volume" => "750","alcohol_content" => "17.0","price_index" => "0.172156862745098","country" => "Canada","url" => "https://www.lcbo.com/en/pj-s-craft-cream-liquor-white-chocolate-peppermint-21579"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Old Fitzgerald Bourbon Whiskey","brand" => "Old Fitzgerald","category" => "Spirits","subcategory" => "Whisky","price" => "200.0","volume" => "750","alcohol_content" => "50.0","price_index" => "0.5333333333333333","country" => "United States","url" => "https://www.lcbo.com/en/old-fitzgerald-bourbon-whiskey-24858"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Xi Feng 1956","brand" => "Xi Feng","category" => "Spirits","subcategory" => "Liqueur","price" => "104.95","volume" => "500","alcohol_content" => "45.0","price_index" => "0.46644444444444444","country" => "China","url" => "https://www.lcbo.com/en/xi-feng-1956-340505"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crystal Head Vodka","brand" => "Crystal Head","category" => "Spirits","subcategory" => "Vodka","price" => "300.7","volume" => "3000","alcohol_content" => "40.0","price_index" => "0.2505833333333333","country" => "Canada","url" => "https://www.lcbo.com/en/crystal-head-vodka-405449"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Scheibel 3 Raben Kr�uter Liqueur","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "73.6","volume" => "500","alcohol_content" => "33.3","price_index" => "0.44204204204204206","country" => "Germany","url" => "https://www.lcbo.com/en/scheibel-3-raben-kr-uter-liqueur-530245"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Woodford Reserve Very Fine Rare Bourbon (2 Bottle Limit)","brand" => "WOODFORD RESERVE","category" => "Spirits","subcategory" => "Whisky","price" => "149.95","volume" => "750","alcohol_content" => "45.2","price_index" => "0.44233038348082593","country" => "United States","url" => "https://www.lcbo.com/en/woodform-reserve-very-fine-rare-bourbon-2-bottle-limit-25737"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lugnaquilla 100% Peated Irish Whiskey","brand" => "Lugnaquilla Irish Whiskey","category" => "Spirits","subcategory" => "Whisky","price" => "69.5","volume" => "750","alcohol_content" => "40.0","price_index" => "0.23166666666666666","country" => "Ireland","url" => "https://www.lcbo.com/en/lugnaquilla-100-peated-irish-whiskey-19776"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lima & Quental Licor de Leite","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "35.1","volume" => "700","alcohol_content" => "20.0","price_index" => "0.2507142857142857","country" => "Portugal","url" => "https://www.lcbo.com/en/lima-quental-licor-de-leite-961689"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Poli Cleopatra Moscato Oro Grappa","brand" => "Poli","category" => "Spirits","subcategory" => "Grappa","price" => "80.7","volume" => "700","alcohol_content" => "40.0","price_index" => "0.2882142857142857","country" => "Italy","url" => "https://www.lcbo.com/en/poli-cleopatra-moscato-oro-grappa-349001"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Breckenridge Bourbon","brand" => "Breckenridge","category" => "Spirits","subcategory" => "Whisky","price" => "70.25","volume" => "750","alcohol_content" => "43.0","price_index" => "0.2178294573643411","country" => "United States","url" => "https://www.lcbo.com/en/breckenridge-bourbon-544130"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Canadian Club 44 Year-Old Chronicles - Issue No. 4","brand" => "Canadian Club","category" => "Spirits","subcategory" => "Whisky","price" => "329.95","volume" => "750","alcohol_content" => "45.0","price_index" => "0.9776296296296296","country" => "Canada","url" => "https://www.lcbo.com/en/canadian-club-44-year-old-chronicles-issue-no-4-23144"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Chinotto Liquore","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "44.9","volume" => "700","alcohol_content" => "35.0","price_index" => "0.18326530612244898","country" => "Italy","url" => "https://www.lcbo.com/en/chinotto-liquore-404516"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kretaraki Tsikoudia Crete","brand" => "NULL","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "33.35","volume" => "700","alcohol_content" => "40.0","price_index" => "0.11910714285714286","country" => "Greece","url" => "https://www.lcbo.com/en/kretaraki-tsikoudia-crete-27215"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bottega Limoncino BIO","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "25.5","volume" => "500","alcohol_content" => "30.0","price_index" => "0.17","country" => "Italy","url" => "https://www.lcbo.com/en/bottega-limoncino-bio-296326"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Pere Magloire Calvados VSOP","brand" => "Pere Magloire","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "55.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.184","country" => "France","url" => "https://www.lcbo.com/en/pere-magloire-calvados-vsop-515726"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Nonino �e Monovitigno Fragolino Grappa","brand" => "Nonino","category" => "Spirits","subcategory" => "Grappa","price" => "63.65","volume" => "700","alcohol_content" => "38.0","price_index" => "0.23928571428571427","country" => "Italy","url" => "https://www.lcbo.com/en/nonino-oe-monovitigno-fragolino-grappa-286799"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Freihof Seyringer Alte Williams Schnapps","brand" => "Freihof","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "28.65","volume" => "500","alcohol_content" => "38.0","price_index" => "0.15078947368421053","country" => "Austria","url" => "https://www.lcbo.com/en/freihof-seyringer-alte-williams-309616"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Original Radeberger Bitters","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "33.4","volume" => "700","alcohol_content" => "35.0","price_index" => "0.1363265306122449","country" => "Germany","url" => "https://www.lcbo.com/en/original-radeberger-bitters-155340"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sacred Gin Orris","brand" => "Private Stock","category" => "Spirits","subcategory" => "Gin","price" => "55.6","volume" => "750","alcohol_content" => "43.8","price_index" => "0.1692541856925419","country" => "United Kingdom","url" => "https://www.lcbo.com/en/sacred-gin-orris-966944"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dayaa Arak","brand" => "Vintages Spirits","category" => "Spirits","subcategory" => "Liqueur","price" => "33.4","volume" => "750","alcohol_content" => "50.0","price_index" => "0.08906666666666667","country" => "Canada","url" => "https://www.lcbo.com/en/dayaa-arak-496745"
            ]);
            DB::table('alcohols')->insert([
            "title" => "King's Lock Conestoga  Organic Gin","brand" => "King's Lock","category" => "Spirits","subcategory" => "Gin","price" => "43.9","volume" => "750","alcohol_content" => "40.0","price_index" => "0.14633333333333332","country" => "Canada","url" => "https://www.lcbo.com/en/king-s-lock-conestoga-organic-gin-513192"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Redbreast 27 Year Old Irish Whiskey (1 Bottle Limit)","brand" => "REDBREAST","category" => "Spirits","subcategory" => "Whisky","price" => "649.95","volume" => "750","alcohol_content" => "54.6","price_index" => "1.587179487179487","country" => "Ireland","url" => "https://www.lcbo.com/en/redbreast-27-year-old-irish-whiskey-1-bottle-limit-22745"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dewar's Caribbean Smooth Rum Cask Finish","brand" => "Dewar's","category" => "Spirits","subcategory" => "Whisky","price" => "34.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1165","country" => "United Kingdom","url" => "https://www.lcbo.com/en/dewar-s-caribbean-smooth-rum-cask-finish-17048"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Wheatley Vodka","brand" => "Sazerac","category" => "Spirits","subcategory" => "Vodka","price" => "28.2","volume" => "750","alcohol_content" => "41.0","price_index" => "0.09170731707317073","country" => "United States","url" => "https://www.lcbo.com/en/wheatley-vodka-659904"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Canadian Rockies 21 Year Old Whisky","brand" => "Canadian Rockies Whisky","category" => "Spirits","subcategory" => "Whisky","price" => "115.0","volume" => "750","alcohol_content" => "46.0","price_index" => "0.3333333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/canadian-rockies-21-year-old-whisky-497586"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Leegangju No. 2","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "151.7","volume" => "750","alcohol_content" => "25.0","price_index" => "0.8090666666666666","country" => "South Korea","url" => "https://www.lcbo.com/en/leegangju-no-2-648823"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kleiner Feigling Fig Liqueur","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "24.3","volume" => "240","alcohol_content" => "20.0","price_index" => "0.50625","country" => "Germany","url" => "https://www.lcbo.com/en/kleiner-feigling-fig-liqueur-396845"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Redbreast Lustau Edition Irish Whiskey","brand" => "Redbreast Whiskey","category" => "Spirits","subcategory" => "Whisky","price" => "90.25","volume" => "750","alcohol_content" => "46.0","price_index" => "0.26159420289855073","country" => "Ireland","url" => "https://www.lcbo.com/en/redbreast-lustau-edition-irish-whiskey-481218"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Stock 84 VSOP Brandy KP","brand" => "Vintages Front Line Release","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "47.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.15983333333333336","country" => "Israel","url" => "https://www.lcbo.com/en/stock-84-vsop-brandy-kp-18714"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Boca & Waterfall Gran Anejo Old Style Rum 7 Yo","brand" => "Boca Waterfall Rum","category" => "Spirits","subcategory" => "Rum","price" => "45.7","volume" => "700","alcohol_content" => "38.0","price_index" => "0.1718045112781955","country" => "Spain","url" => "https://www.lcbo.com/en/boca-waterfall-gran-anejo-old-style-rum-7-yo-15314"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kiroki Honten Yamaneko","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "64.7","volume" => "720","alcohol_content" => "25.0","price_index" => "0.35944444444444446","country" => "Japan","url" => "https://www.lcbo.com/en/kiroki-honten-yamaneko-698315"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Baileys Original Irish Cream Mini","brand" => "Baileys Irish Cream","category" => "Spirits","subcategory" => "Liqueur","price" => "3.85","volume" => "50","alcohol_content" => "17.0","price_index" => "0.45294117647058824","country" => "Ireland","url" => "https://www.lcbo.com/en/baileys-original-irish-cream-mini-554204"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Laphroaig Cairdeas PX 2021 Release","brand" => "Laphroaig","category" => "Spirits","subcategory" => "Whisky","price" => "119.95","volume" => "750","alcohol_content" => "58.9","price_index" => "0.2715336728919072","country" => "United Kingdom","url" => "https://www.lcbo.com/en/laphroaig-cairdeas-px-2021-release-23103"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Aguamiel Tequila 100% Agave","brand" => "Aguamiel","category" => "Spirits","subcategory" => "Tequila","price" => "60.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2006666666666667","country" => "Mexico","url" => "https://www.lcbo.com/en/aguamiel-tequila-100-agave-549162"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gin Agricolo Blagheur","brand" => "Private Stock","category" => "Spirits","subcategory" => "Gin","price" => "57.8","volume" => "700","alcohol_content" => "47.0","price_index" => "0.17568389057750758","country" => "Italy","url" => "https://www.lcbo.com/en/gin-agricolo-blagheur-651181"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Giffard Rhubarb","brand" => "Giffard","category" => "Spirits","subcategory" => "Liqueur","price" => "28.75","volume" => "700","alcohol_content" => "20.0","price_index" => "0.20535714285714285","country" => "France","url" => "https://www.lcbo.com/en/giffard-rhubarb-14405"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hardy Cognac Noces D'Or","brand" => "Hardy Cognac","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "547.2","volume" => "750","alcohol_content" => "40.0","price_index" => "1.824","country" => "France","url" => "https://www.lcbo.com/en/hardy-cognac-noces-d-or-21573"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Roots Rakomelo","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "43.4","volume" => "700","alcohol_content" => "24.0","price_index" => "0.2583333333333333","country" => "Greece","url" => "https://www.lcbo.com/en/roots-rakomelo-676261"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kraken Unknown Deep Black Spiced Rum","brand" => "Kraken Rum","category" => "Spirits","subcategory" => "Rum","price" => "33.2","volume" => "750","alcohol_content" => "47.0","price_index" => "0.09418439716312058","country" => "United States","url" => "https://www.lcbo.com/en/kraken-unknown-deep-black-spiced-rum-21835"
            ]);
            DB::table('alcohols')->insert([
            "title" => "1792 Single Barrel Kentucky Straight Bourbon Whiskey","brand" => "Barton 1792","category" => "Spirits","subcategory" => "Whisky","price" => "59.95","volume" => "750","alcohol_content" => "49.3","price_index" => "0.16213657876943882","country" => "United States","url" => "https://www.lcbo.com/en/1792-single-barrel-kentucky-straight-bourbon-whiskey-17799"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grand Marnier Gift Pack","brand" => "Grand Marnier","category" => "Spirits","subcategory" => "Liqueur","price" => "40.0","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13333333333333333","country" => "France","url" => "https://www.lcbo.com/en/grand-marnier-gift-pack-22006"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Johnnie Walker Green Label Scotch Whisky","brand" => "Johnnie Walker","category" => "Spirits","subcategory" => "Whisky","price" => "90.25","volume" => "750","alcohol_content" => "43.0","price_index" => "0.27984496124031005","country" => "United Kingdom","url" => "https://www.lcbo.com/en/johnnie-walker-green-label-scotch-whisky-468116"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Auchentoshan 21 Year Old Single Malt Scotch Whisky","brand" => "Auchentoshan","category" => "Spirits","subcategory" => "Whisky","price" => "219.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.682015503875969","country" => "United Kingdom","url" => "https://www.lcbo.com/en/auchentoshan-21-year-old-single-malt-scotch-whisky-969493"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mill Street Citrus Gin","brand" => "Mill Street","category" => "Spirits","subcategory" => "Gin","price" => "44.95","volume" => "750","alcohol_content" => "40.5","price_index" => "0.1479835390946502","country" => "Canada","url" => "https://www.lcbo.com/en/mill-street-citrus-gin-15144"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mei Gui Lu Jiu","brand" => "NULL","category" => "Spirits","subcategory" => "Liqueur","price" => "31.2","volume" => "750","alcohol_content" => "52.0","price_index" => "0.08","country" => "China","url" => "https://www.lcbo.com/en/mei-gui-lu-jiu-26361"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Yoichi Single Malt Apple Brandy Wood Finish (2 Bottle Limit)","brand" => "Nikka","category" => "Spirits","subcategory" => "Whisky","price" => "225.25","volume" => "700","alcohol_content" => "47.0","price_index" => "0.6846504559270516","country" => "Japan","url" => "https://www.lcbo.com/en/yoichi-single-malt-apple-brandy-wood-finish-2-bottle-limit-19832"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lagavulin 26-Year-Old Islay Single Malt Scotch Whisky","brand" => "Lagavulin","category" => "Spirits","subcategory" => "Whisky","price" => "2999.95","volume" => "750","alcohol_content" => "44.2","price_index" => "9.049622926093514","country" => "United Kingdom","url" => "https://www.lcbo.com/en/lagavulin-26-year-old-islay-single-malt-scotch-whisky-23114"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Neigbours 31 Caviar Premium Gin","brand" => "Private Stock","category" => "Spirits","subcategory" => "Gin","price" => "78.6","volume" => "700","alcohol_content" => "42.0","price_index" => "0.2673469387755102","country" => "Portugal","url" => "https://www.lcbo.com/en/neigbours-31-caviar-premium-gin-484773"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Badel Pelinkoac Gorki","brand" => "Badel","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "26.75","volume" => "700","alcohol_content" => "31.0","price_index" => "0.12327188940092165","country" => "Croatia","url" => "https://www.lcbo.com/en/badel-pelinkoac-gorki-case-479526"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ratu Dark 5YO Spiced Premium Rum","brand" => "Ratu Spiced Rum","category" => "Spirits","subcategory" => "Rum","price" => "43.85","volume" => "750","alcohol_content" => "40.0","price_index" => "0.14616666666666667","country" => "Fiji","url" => "https://www.lcbo.com/en/ratu-dark-5yo-spiced-premium-rum-10332"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Baker's 13YO Single Barrel","brand" => "Baker's","category" => "Spirits","subcategory" => "Whisky","price" => "182.6","volume" => "750","alcohol_content" => "53.5","price_index" => "0.4550778816199377","country" => "United States","url" => "https://www.lcbo.com/en/baker-s-13yo-single-barrel-13611"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Eagle Rare 17-Year-Old Kentucky Straight Bourbon Whiskey","brand" => "Eagle Rare","category" => "Spirits","subcategory" => "Whisky","price" => "179.95","volume" => "750","alcohol_content" => "50.5","price_index" => "0.4751155115511551","country" => "United States","url" => "https://www.lcbo.com/en/eagle-rare-17-year-old-kentucky-straight-bourbon-whiskey-25439"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Writers Tears Copper Pot Inniskillin Ice Wine Cask Finish Irish Whiskey","brand" => "Writer's Tears","category" => "Spirits","subcategory" => "Whisky","price" => "100.25","volume" => "700","alcohol_content" => "46.0","price_index" => "0.3113354037267081","country" => "Ireland","url" => "https://www.lcbo.com/en/writers-tears-copper-pot-inniskillin-ice-wine-cask-finish-irish-whiskey-21943"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Royal Lochnagar 16-Year-Old Speyside Single Malt Scotch Whisky","brand" => "Royal Lochnagar","category" => "Spirits","subcategory" => "Whisky","price" => "249.95","volume" => "750","alcohol_content" => "57.5","price_index" => "0.5795942028985508","country" => "United Kingdom","url" => "https://www.lcbo.com/en/royal-lochnagar-16-year-old-speyside-single-malt-scotch-whisky-1-bottle-limit-23113"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bombay Sapphire Gift Tin","brand" => "Bombay Sapphire","category" => "Spirits","subcategory" => "Gin","price" => "30.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.10316666666666667","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bombay-sapphire-gift-tin-21818"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sengetsu \"Momomo\" Premium Peach liqueur","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "23.25","volume" => "375","alcohol_content" => "6.5","price_index" => "0.9538461538461539","country" => "Japan","url" => "https://www.lcbo.com/en/sengetsu-momomo-premium-peach-liqueur-case-609783"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Marchesi di Gresy Grappa di Barbaresco Camp Gros","brand" => "Private Stock","category" => "Spirits","subcategory" => "Grappa","price" => "110.8","volume" => "700","alcohol_content" => "44.0","price_index" => "0.35974025974025975","country" => "Italy","url" => "https://www.lcbo.com/en/marchesi-di-gresy-grappa-di-barbaresco-camp-gros-195270"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Luxardo Aperitivo Kosher","brand" => "Luxardo","category" => "Spirits","subcategory" => "Liqueur","price" => "24.5","volume" => "750","alcohol_content" => "11.0","price_index" => "0.296969696969697","country" => "Italy","url" => "https://www.lcbo.com/en/luxardo-aperitivo-kosher-289396"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Idoniko Tsipouro","brand" => "Vintages Front Line Release","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "31.95","volume" => "700","alcohol_content" => "40.0","price_index" => "0.11410714285714285","country" => "Greece","url" => "https://www.lcbo.com/en/idoniko-tsipouro-556704"
            ]);
            DB::table('alcohols')->insert([
            "title" => "King's Lock Distillery Exodus Moonshine Organic KP","brand" => "Private Stock","category" => "Spirits","subcategory" => "Whisky","price" => "60.8","volume" => "750","alcohol_content" => "40.0","price_index" => "0.20266666666666666","country" => "Canada","url" => "https://www.lcbo.com/en/king-s-lock-distillery-exodus-moonshine-organic-277383"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Pravda Vodka Gift Package With 2 Glasses","brand" => "Pravda Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "20.25","volume" => "375","alcohol_content" => "41.0","price_index" => "0.13170731707317074","country" => "Poland","url" => "https://www.lcbo.com/en/pravda-vodka-gift-package-with-2-glasses-131565"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Boulard VSOP Wheat Whiskey Cask Finish","brand" => "Boulard","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "69.95","volume" => "750","alcohol_content" => "44.0","price_index" => "0.21196969696969697","country" => "France","url" => "https://www.lcbo.com/en/boulard-vsop-wheat-whiskey-cask-finish-21577"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Augier Le Singulier Cognac","brand" => "Augier Cognac","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "123.85","volume" => "700","alcohol_content" => "41.7","price_index" => "0.42428914011647817","country" => "France","url" => "https://www.lcbo.com/en/augier-le-singulier-cognac-22014"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Companero Ron Elixir Orange","brand" => "Companero","category" => "Spirits","subcategory" => "Rum","price" => "71.6","volume" => "750","alcohol_content" => "40.0","price_index" => "0.23866666666666664","country" => "Denmark","url" => "https://www.lcbo.com/en/companero-ron-elixir-orange-19997"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Poli Vaca Mora Amaro","brand" => "Poli","category" => "Spirits","subcategory" => "Liqueur","price" => "38.9","volume" => "700","alcohol_content" => "32.0","price_index" => "0.17366071428571428","country" => "Italy","url" => "https://www.lcbo.com/en/poli-vaca-mora-amaro-662726"
            ]);
            DB::table('alcohols')->insert([
            "title" => "King's Lock Von Schoultz Organic Vodka","brand" => "King's Lock","category" => "Spirits","subcategory" => "Vodka","price" => "39.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13316666666666668","country" => "Canada","url" => "https://www.lcbo.com/en/king-s-lock-von-schoultz-organic-vodka-513218"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mermaid Salt Vodka","brand" => "Mermaid Gin","category" => "Spirits","subcategory" => "Vodka","price" => "63.4","volume" => "700","alcohol_content" => "40.0","price_index" => "0.22642857142857142","country" => "United Kingdom","url" => "https://www.lcbo.com/en/mermaid-salt-vodka-21718"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jumping Goat Coffee Infused Vodka","brand" => "Jumping Goat","category" => "Spirits","subcategory" => "Vodka","price" => "37.05","volume" => "700","alcohol_content" => "33.0","price_index" => "0.1603896103896104","country" => "New Zealand","url" => "https://www.lcbo.com/en/jumping-goat-coffee-infused-vodka-13858"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Freihof Jagertee the Original Schnapps","brand" => "Freihof","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "25.8","volume" => "500","alcohol_content" => "40.0","price_index" => "0.129","country" => "Austria","url" => "https://www.lcbo.com/en/freihof-jagertee-the-original-309608"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Balvenie 19 Edge of Burnhead Wood","brand" => "The Balvenie","category" => "Spirits","subcategory" => "Whisky","price" => "650.25","volume" => "700","alcohol_content" => "48.7","price_index" => "1.9074508653564093","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-balvenie-19-edge-of-burnhead-wood-22183"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bowmore 27 Year Old Sherry Matured Timeless Series","brand" => "Bowmore","category" => "Spirits","subcategory" => "Whisky","price" => "2300.0","volume" => "750","alcohol_content" => "52.7","price_index" => "5.8191018342821","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bowmore-27-year-old-sherry-matured-timeless-series-19094"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sibona Amaro","brand" => "Vintages Spirits","category" => "Spirits","subcategory" => "Liqueur","price" => "30.95","volume" => "500","alcohol_content" => "28.0","price_index" => "0.22107142857142856","country" => "Italy","url" => "https://www.lcbo.com/en/sibona-amaro-539353"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Walders Creamy Liqueur Vodka & Vanilla Kosher","brand" => "Walders","category" => "Spirits","subcategory" => "Liqueur","price" => "43.95","volume" => "750","alcohol_content" => "17.0","price_index" => "0.34470588235294114","country" => "United Kingdom","url" => "https://www.lcbo.com/en/walders-creamy-liqueur-vodka-vanilla-k-440503"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Romeo's X Pink Gin","brand" => "Micheal Jodin Cider","category" => "Spirits","subcategory" => "Gin","price" => "39.95","volume" => "750","alcohol_content" => "41.0","price_index" => "0.1299186991869919","country" => "Canada","url" => "https://www.lcbo.com/en/romeo-s-x-pink-gin-18265"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dalmore 18 Year Old Highland Single Malt Scotch Whisky","brand" => "Dalmore","category" => "Spirits","subcategory" => "Whisky","price" => "300.25","volume" => "750","alcohol_content" => "43.0","price_index" => "0.9310077519379845","country" => "United Kingdom","url" => "https://www.lcbo.com/en/dalmore-18-year-old-highland-single-malt-scotch-whisky-236182"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Heaven's Door Straight Rye Whiskey, Tennessee, Usa","brand" => "Heavan'S Door","category" => "Spirits","subcategory" => "Whisky","price" => "124.95","volume" => "750","alcohol_content" => "46.0","price_index" => "0.3621739130434783","country" => "United States","url" => "https://www.lcbo.com/en/heaven-s-door-straight-rye-whiskey-tennessee-usa-14583"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tullibardine 228 Burgundy Finish Highland Single Malt Scotch Whisky","brand" => "Tullibardine","category" => "Spirits","subcategory" => "Whisky","price" => "71.2","volume" => "750","alcohol_content" => "43.0","price_index" => "0.22077519379844962","country" => "United Kingdom","url" => "https://www.lcbo.com/en/tullibardine-228-burgundy-finish-highland-single-malt-scotch-whisky-371195"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Macallan A Night On Earth 2021 (One Bottle Limit)","brand" => "The Macallan","category" => "Spirits","subcategory" => "Whisky","price" => "175.0","volume" => "750","alcohol_content" => "43.0","price_index" => "0.5426356589147286","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-macallan-a-night-on-earth-2021-one-bottle-limit-23268"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Pappy Van Winkle's Family Reserve 15-Year-Old Kentucky Straight Bourbon Whiskey","brand" => "Pappy Van Winkle","category" => "Spirits","subcategory" => "Whisky","price" => "199.95","volume" => "750","alcohol_content" => "53.5","price_index" => "0.4983177570093458","country" => "United States","url" => "https://www.lcbo.com/en/pappy-van-winkle-s-family-reserve-15-year-old-kentucky-straight-bourbon-whiskey-25431"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Louis de Lauriston Poire Brut de Norma","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "38.4","volume" => "750","alcohol_content" => "4.5","price_index" => "1.1377777777777778","country" => "France","url" => "https://www.lcbo.com/en/louis-de-lauriston-poire-brut-de-norma-115336"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hennessy XO Lunar New Year Gift Box","brand" => "Hennessy","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "341.65","volume" => "750","alcohol_content" => "40.0","price_index" => "1.1388333333333334","country" => "France","url" => "https://www.lcbo.com/en/hennessy-xo-lunar-new-year-gift-box-23056"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Idoniko Ouzo","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "25.4","volume" => "700","alcohol_content" => "40.0","price_index" => "0.0907142857142857","country" => "Greece","url" => "https://www.lcbo.com/en/idoniko-ouzo-950674"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lohin Mckinnon Single Malt Whisky","brand" => "Lohin Mckinnon Whisky","category" => "Spirits","subcategory" => "Whisky","price" => "47.15","volume" => "750","alcohol_content" => "43.0","price_index" => "0.14620155038759688","country" => "Canada","url" => "https://www.lcbo.com/en/lohin-mckinnon-single-malt-whisky-499418"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Patron XO Cafe Liqueur","brand" => "Patron Liqueur","category" => "Spirits","subcategory" => "Liqueur","price" => "44.3","volume" => "750","alcohol_content" => "35.0","price_index" => "0.16876190476190475","country" => "Mexico","url" => "https://www.lcbo.com/en/patron-xo-cafe-liqueur-605048"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Murphy's Law Caramel Moonshine","brand" => "Murphy's Law","category" => "Spirits","subcategory" => "Whisky","price" => "29.95","volume" => "750","alcohol_content" => "30.0","price_index" => "0.1331111111111111","country" => "Canada","url" => "https://www.lcbo.com/en/murphy-s-law-caramel-moonshine-576769"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Eduardo Ferreira Licor de Anis Anisette Liqueur","brand" => "Vintages Spirits","category" => "Spirits","subcategory" => "Liqueur","price" => "23.95","volume" => "750","alcohol_content" => "25.0","price_index" => "0.12773333333333334","country" => "Portugal","url" => "https://www.lcbo.com/en/eduardo-ferreira-licor-de-anis-anisette-liqueur-627372"
            ]);
            DB::table('alcohols')->insert([
            "title" => "What Stuck Gin","brand" => "What Stuck","category" => "Spirits","subcategory" => "Gin","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/what-stuck-gin-19669"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ardbeg 25-Year-Old Islay Single Malt Scotch Whisky","brand" => "Ardbeg","category" => "Spirits","subcategory" => "Whisky","price" => "1395.4","volume" => "700","alcohol_content" => "46.2","price_index" => "4.3147804576376005","country" => "United Kingdom","url" => "https://www.lcbo.com/en/ardbeg-25-year-old-islay-single-malt-scotch-whisky-25449"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Janneau Armagnac 12 Year Old","brand" => "Janneau Grand Armagnac","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "65.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.21733333333333335","country" => "France","url" => "https://www.lcbo.com/en/janneau-armagnac-12-year-old-498212"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Generous Gin, White Flowers","brand" => "Generous Gin","category" => "Spirits","subcategory" => "Gin","price" => "64.85","volume" => "700","alcohol_content" => "44.0","price_index" => "0.21055194805194805","country" => "France","url" => "https://www.lcbo.com/en/generous-gin-white-flowers-129106"
            ]);
            DB::table('alcohols')->insert([
            "title" => "UE Nonino Anniversary Riserva 5 Year Old","brand" => "Nonino","category" => "Spirits","subcategory" => "Grappa","price" => "147.45","volume" => "700","alcohol_content" => "43.0","price_index" => "0.48986710963455143","country" => "Italy","url" => "https://www.lcbo.com/en/ue-nonino-anniversary-riserva-5-year-old-21570"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Eau de Vill�e Lady Lemon Liqueur","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "91.15","volume" => "700","alcohol_content" => "40.0","price_index" => "0.3255357142857143","country" => "Belgium","url" => "https://www.lcbo.com/en/eau-de-vill-ce-lady-lemon-liqueur-782789"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Black's Distillery Heritage Vodka","brand" => "Black's Distillery","category" => "Spirits","subcategory" => "Vodka","price" => "39.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13316666666666668","country" => "Canada","url" => "https://www.lcbo.com/en/black-s-distillery-heritage-vodka-615054"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Penderyn Myth","brand" => "Penderyn","category" => "Spirits","subcategory" => "Whisky","price" => "76.5","volume" => "700","alcohol_content" => "41.0","price_index" => "0.2665505226480836","country" => "United Kingdom","url" => "https://www.lcbo.com/en/penderyn-myth-516351"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Aberlour 18 Year Old Single Malt Scotch Whisky","brand" => "Aberlour","category" => "Spirits","subcategory" => "Whisky","price" => "140.35","volume" => "500","alcohol_content" => "43.0","price_index" => "0.6527906976744186","country" => "United Kingdom","url" => "https://www.lcbo.com/en/aberlour-18-year-old-single-malt-scotch-whisky-19453"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kilchoman Sanaig Islay Single Malt Scotch Whisky","brand" => "Kilchoman","category" => "Spirits","subcategory" => "Whisky","price" => "99.7","volume" => "700","alcohol_content" => "46.0","price_index" => "0.3096273291925466","country" => "United Kingdom","url" => "https://www.lcbo.com/en/kilchoman-sanaig-islay-single-malt-scotch-whisky-493015"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Auchentoshan 18 Year Old Lowland Single Malt Scotch Whisky","brand" => "Auchentoshan","category" => "Spirits","subcategory" => "Whisky","price" => "134.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.41844961240310075","country" => "United Kingdom","url" => "https://www.lcbo.com/en/auchentoshan-18-year-old-lowland-single-malt-scotch-whisky-143339"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hatozaki Pure Malt Whisky","brand" => "Imperia","category" => "Spirits","subcategory" => "Whisky","price" => "90.25","volume" => "700","alcohol_content" => "46.0","price_index" => "0.2802795031055901","country" => "Japan","url" => "https://www.lcbo.com/en/hatozaki-pure-malt-whisky-20368"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Old Rip Van Winkle 10-Year-Old Kentucky Straight Bourbon Whiskey","brand" => "Pappy Van Winkle","category" => "Spirits","subcategory" => "Whisky","price" => "129.95","volume" => "750","alcohol_content" => "53.5","price_index" => "0.3238629283489096","country" => "United States","url" => "https://www.lcbo.com/en/old-rip-van-winkle-10-year-old-kentucky-straight-bourbon-whiskey-25427"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Buffalo Trace Bourbon Cream","brand" => "Buffalo Trace Bourbon","category" => "Spirits","subcategory" => "Liqueur","price" => "34.95","volume" => "750","alcohol_content" => "15.0","price_index" => "0.3106666666666667","country" => "United States","url" => "https://www.lcbo.com/en/buffalo-trace-bourbon-cream-12852"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Pyrat XO Reserve Rum","brand" => "Pyrat Xo Reserve Rum","category" => "Spirits","subcategory" => "Rum","price" => "52.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.17583333333333334","country" => "Guyana","url" => "https://www.lcbo.com/en/pyrat-xo-reserve-rum-273524"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cayman Reef 5YO","brand" => "Cayman Reef Rum","category" => "Spirits","subcategory" => "Rum","price" => "40.7","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13566666666666669","country" => "United States","url" => "https://www.lcbo.com/en/cayman-reef-5yo-15028"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Last Straw Distillery Dark Rum","brand" => "Last Straw","category" => "Spirits","subcategory" => "Rum","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/last-straw-distillery-dark-rum-22661"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Equiano Rum, Mauritius And Barbados","brand" => "Equiano","category" => "Spirits","subcategory" => "Rum","price" => "87.3","volume" => "750","alcohol_content" => "43.0","price_index" => "0.27069767441860465","country" => "Barbados","url" => "https://www.lcbo.com/en/equiano-rum-mauritius-and-barbados-20105"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Licor Queijada de Vila","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "29.15","volume" => "700","alcohol_content" => "16.0","price_index" => "0.2602678571428571","country" => "Portugal","url" => "https://www.lcbo.com/en/licor-queijada-de-vila-961507"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Koblevo Brandy VS","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "26.35","volume" => "500","alcohol_content" => "40.0","price_index" => "0.13175","country" => "Ukraine","url" => "https://www.lcbo.com/en/koblevo-brandy-vs-218197"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Nikka Coffey Grain Whisky","brand" => "Nikka","category" => "Spirits","subcategory" => "Whisky","price" => "90.2","volume" => "700","alcohol_content" => "45.0","price_index" => "0.28634920634920635","country" => "Japan","url" => "https://www.lcbo.com/en/nikka-coffey-grain-whisky-10227"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Haku Vodka","brand" => "Haku Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "49.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1665","country" => "Japan","url" => "https://www.lcbo.com/en/haku-vodka-638486"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Irishman Founders Reserve","brand" => "The Irishman","category" => "Spirits","subcategory" => "Whisky","price" => "55.2","volume" => "700","alcohol_content" => "40.0","price_index" => "0.19714285714285715","country" => "Ireland","url" => "https://www.lcbo.com/en/the-irishman-founders-reserve-402552"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Oban 12-Year-Old Highland Single Malt Scotch Whisky","brand" => "Oban","category" => "Spirits","subcategory" => "Whisky","price" => "189.95","volume" => "750","alcohol_content" => "56.2","price_index" => "0.4506524317912217","country" => "United Kingdom","url" => "https://www.lcbo.com/en/oban-12-year-old-single-malt-scotch-whisky-1-bottle-limit-23108"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cooper's Revival Rye Whisky","brand" => "Kinsip","category" => "Spirits","subcategory" => "Whisky","price" => "59.85","volume" => "750","alcohol_content" => "43.0","price_index" => "0.18558139534883722","country" => "Canada","url" => "https://www.lcbo.com/en/cooper-s-revival-rye-whisky-576918"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Roots Mastiha","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "43.45","volume" => "700","alcohol_content" => "28.0","price_index" => "0.22168367346938775","country" => "Greece","url" => "https://www.lcbo.com/en/roots-mastiha-676238"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Andong Soju","brand" => "Andong","category" => "Spirits","subcategory" => "Soju","price" => "146.5","volume" => "600","alcohol_content" => "45.0","price_index" => "0.5425925925925926","country" => "South Korea","url" => "https://www.lcbo.com/en/andong-soju-648765"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smokehead Sherry Bomb Islay Single Malt","brand" => "Smokehead","category" => "Spirits","subcategory" => "Whisky","price" => "150.25","volume" => "750","alcohol_content" => "48.18","price_index" => "0.4158018541580185","country" => "United Kingdom","url" => "https://www.lcbo.com/en/smokehead-sherry-bomb-islay-single-malt-13969"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Plymouth English Gin","brand" => "Plymouth Dry Gin","category" => "Spirits","subcategory" => "Gin","price" => "46.5","volume" => "750","alcohol_content" => "41.2","price_index" => "0.15048543689320387","country" => "United Kingdom","url" => "https://www.lcbo.com/en/plymouth-english-gin-277004"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kalani Liqueur","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "66.8","volume" => "750","alcohol_content" => "30.0","price_index" => "0.29688888888888887","country" => "Mexico","url" => "https://www.lcbo.com/en/kalani-liqueur-113687"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Patron Silver Tequila","brand" => "Patron","category" => "Spirits","subcategory" => "Tequila","price" => "10.95","volume" => "50","alcohol_content" => "40.0","price_index" => "0.5475","country" => "Mexico","url" => "https://www.lcbo.com/en/patron-silver-tequila-245381"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Macallan Rare Cask","brand" => "The Macallan","category" => "Spirits","subcategory" => "Whisky","price" => "500.25","volume" => "750","alcohol_content" => "43.0","price_index" => "1.5511627906976744","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-macallan-rare-cask-10725"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Arberlour 16 Year Old Single Cask Selection (1 Bottle Limit)","brand" => "ABERLOUR","category" => "Spirits","subcategory" => "Whisky","price" => "450.0","volume" => "750","alcohol_content" => "58.0","price_index" => "1.0344827586206897","country" => "United Kingdom","url" => "https://www.lcbo.com/en/arberlour-16-year-old-single-cask-selection-1-bottle-limit-22702"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Badel Travarica","brand" => "Badel","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "37.35","volume" => "1000","alcohol_content" => "37.5","price_index" => "0.09960000000000001","country" => "Croatia","url" => "https://www.lcbo.com/en/badel-travarica-298497"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenfarclas 15-Year-Old Highland Single Malt Scotch Whisky","brand" => "Glenfarclas","category" => "Spirits","subcategory" => "Whisky","price" => "113.25","volume" => "700","alcohol_content" => "46.0","price_index" => "0.3517080745341615","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenfarclas-15-year-old-highland-single-malt-scotch-whisky-345199"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Affino Aperitivo","brand" => "Affino","category" => "Spirits","subcategory" => "Liqueur","price" => "27.95","volume" => "750","alcohol_content" => "15.8","price_index" => "0.23586497890295358","country" => "Canada","url" => "https://www.lcbo.com/en/affino-aperitivo-17666"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Steinhart Dry Gin","brand" => "Steinhart Gin","category" => "Spirits","subcategory" => "Gin","price" => "39.0","volume" => "500","alcohol_content" => "47.5","price_index" => "0.16421052631578947","country" => "Canada","url" => "https://www.lcbo.com/en/steinhart-dry-gin-11340"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Colonel E.H. Taylor Single Barrel Kentucky Straight Bourbon","brand" => "E.H. Taylor","category" => "Spirits","subcategory" => "Whisky","price" => "84.5","volume" => "750","alcohol_content" => "50.0","price_index" => "0.22533333333333333","country" => "United States","url" => "https://www.lcbo.com/en/colonel-e-h-taylor-single-barrel-kentucky-straight-bourbon-288878"
            ]);
            DB::table('alcohols')->insert([
            "title" => "High West Campfire","brand" => "High West","category" => "Spirits","subcategory" => "Whisky","price" => "69.55","volume" => "750","alcohol_content" => "45.95","price_index" => "0.20181356546971344","country" => "United States","url" => "https://www.lcbo.com/en/high-west-campfire-10976"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Macallan Double Cask 30 Year Old","brand" => "The Macallan","category" => "Spirits","subcategory" => "Whisky","price" => "6000.0","volume" => "750","alcohol_content" => "43.0","price_index" => "18.6046511627907","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-macallan-double-cask-30-year-old-24073"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Armorik Sherry Cask Single Malt Breton Whisky","brand" => "Distillerie Warenghem","category" => "Spirits","subcategory" => "Whisky","price" => "85.0","volume" => "700","alcohol_content" => "46.0","price_index" => "0.2639751552795031","country" => "France","url" => "https://www.lcbo.com/en/armorik-sherry-cask-single-malt-breton-whisky-11201"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dalmore King Alexander III Single Malt Scotch Whisky","brand" => "Dalmore","category" => "Spirits","subcategory" => "Whisky","price" => "375.2","volume" => "750","alcohol_content" => "40.0","price_index" => "1.2506666666666666","country" => "United Kingdom","url" => "https://www.lcbo.com/en/dalmore-king-alexander-iii-single-malt-scotch-whisky-346429"
            ]);
            DB::table('alcohols')->insert([
            "title" => "North of 7 Leatherback Rum","brand" => "North of 7","category" => "Spirits","subcategory" => "Rum","price" => "45.0","volume" => "750","alcohol_content" => "40.0","price_index" => "0.15","country" => "Canada","url" => "https://www.lcbo.com/en/north-of-7-leatherback-rum-413567"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Whitley Neill Blackberry Gin","brand" => "Whitley Neill London Dry Gin","category" => "Spirits","subcategory" => "Gin","price" => "35.05","volume" => "750","alcohol_content" => "43.0","price_index" => "0.10868217054263565","country" => "United Kingdom","url" => "https://www.lcbo.com/en/whitley-neill-blackberry-gin-16098"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Persian Empire Arak Saggi Black Widow","brand" => "Persian Empire","category" => "Spirits","subcategory" => "Liqueur","price" => "45.0","volume" => "750","alcohol_content" => "40.0","price_index" => "0.15","country" => "Canada","url" => "https://www.lcbo.com/en/persian-empire-arak-saggi-black-widow-26808"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Aberfeldy 21 Year Old Highland Single Malt Scotch Whisky","brand" => "Aberfeldy","category" => "Spirits","subcategory" => "Whisky","price" => "250.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.834","country" => "United Kingdom","url" => "https://www.lcbo.com/en/aberfeldy-21-year-old-highland-single-malt-scotch-whisky-400085"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Greengage Liqueur","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "37.75","volume" => "350","alcohol_content" => "18.0","price_index" => "0.5992063492063492","country" => "United Kingdom","url" => "https://www.lcbo.com/en/greengage-liqueur-462936"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jiangxiaobai White Grape Flavor Sorghum Liquor","brand" => "Jiangxiaobai","category" => "Spirits","subcategory" => "Liqueur","price" => "7.5","volume" => "168","alcohol_content" => "15.0","price_index" => "0.2976190476190476","country" => "China","url" => "https://www.lcbo.com/en/jiangxiaobai-white-grape-flavor-sorghum-liquor-290725"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Chateau de Bordeneuve Hors D'Age Armagnac","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "115.3","volume" => "700","alcohol_content" => "41.0","price_index" => "0.40174216027874565","country" => "France","url" => "https://www.lcbo.com/en/chateau-de-bordeneuve-hors-d-age-armagnac-732957"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Armagnac De Montal XO with Natural Wood Box","brand" => "Armagnac De Montal","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "106.85","volume" => "700","alcohol_content" => "40.0","price_index" => "0.3816071428571428","country" => "France","url" => "https://www.lcbo.com/en/armagnac-de-montal-xo-with-natural-wood-box-21564"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Laphroaig 10 Year Old Cask Strength Batch 13 (1 Bottle Limit)","brand" => "Laphroaig","category" => "Spirits","subcategory" => "Whisky","price" => "139.95","volume" => "750","alcohol_content" => "57.9","price_index" => "0.322279792746114","country" => "United Kingdom","url" => "https://www.lcbo.com/en/lahphroaig-10-year-old-cask-strength-batch-13-1-bottle-limit-24670"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Maxime Trijol Cognac VSOP Grande Champagne","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "114.65","volume" => "700","alcohol_content" => "40.0","price_index" => "0.4094642857142857","country" => "France","url" => "https://www.lcbo.com/en/maxime-trijol-cognac-vsop-grande-champagne-288760"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Island Diaz Spiced Rum","brand" => "Island Diaz","category" => "Spirits","subcategory" => "Rum","price" => "37.95","volume" => "750","alcohol_content" => "44.4","price_index" => "0.11396396396396397","country" => "Canada","url" => "https://www.lcbo.com/en/island-diaz-spiced-rum-23827"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenrothes 18 Year Old","brand" => "Glenrothes","category" => "Spirits","subcategory" => "Whisky","price" => "200.25","volume" => "750","alcohol_content" => "43.0","price_index" => "0.6209302325581395","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenrothes-18-year-old-642900"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenfarclas 30-Year-Old Highland Single Malt Scotch Whisky","brand" => "Glenfarclas","category" => "Spirits","subcategory" => "Whisky","price" => "794.95","volume" => "700","alcohol_content" => "43.0","price_index" => "2.641029900332226","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenfarclas-30-year-old-highland-single-malt-scotch-whisky-663427"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Laphroaig 30-Year-Old The Ian Hunter Story Book 2 Islay Single Malt Scotch Whisky","brand" => "Laphroaig","category" => "Spirits","subcategory" => "Whisky","price" => "2499.95","volume" => "750","alcohol_content" => "48.2","price_index" => "6.91549100968188","country" => "United Kingdom","url" => "https://www.lcbo.com/en/laphroaig-30-year-old-the-ian-hunter-story-book-2-islay-single-malt-scotch-whisky-18835"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bulldog Gin","brand" => "Bulldog London Dry Gin","category" => "Spirits","subcategory" => "Gin","price" => "38.8","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12933333333333333","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bulldog-gin-907758"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Royal Lochnagar 12 Year Old","brand" => "Royal Lochnagar Distillers","category" => "Spirits","subcategory" => "Whisky","price" => "99.95","volume" => "700","alcohol_content" => "40.0","price_index" => "0.35696428571428573","country" => "United Kingdom","url" => "https://www.lcbo.com/en/royal-lochnagar-12-year-old-19578"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Canada Gold Whisky (PET)","brand" => "Kittling Ridge Pure Gold Whisky","category" => "Spirits","subcategory" => "Whisky","price" => "63.4","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.09057142857142857","country" => "Canada","url" => "https://www.lcbo.com/en/canada-gold-whisky-pet-261768"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Americano Coffee Vodka","brand" => "Americano","category" => "Spirits","subcategory" => "Vodka","price" => "29.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09983333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/americano-coffee-vodka-633214"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mortlach 13-Year-Old Speyside Single Malt Scotch Whisky","brand" => "Mortlach","category" => "Spirits","subcategory" => "Whisky","price" => "224.95","volume" => "750","alcohol_content" => "55.9","price_index" => "0.5365533691115086","country" => "United Kingdom","url" => "https://www.lcbo.com/en/mortlach-13-year-old-single-malt-scotch-whisky-1-bottle-limit-23110"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glen Moray Elgin Heritage 15 Yo Single Malt Scotch","brand" => "Glen Moray","category" => "Spirits","subcategory" => "Whisky","price" => "75.2","volume" => "700","alcohol_content" => "40.0","price_index" => "0.26857142857142857","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glen-moray-elgin-heritage-15-yo-single-malt-scotch-644104"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Berta Valdavi Grappa di Moscato","brand" => "Berta","category" => "Spirits","subcategory" => "Grappa","price" => "75.2","volume" => "700","alcohol_content" => "40.0","price_index" => "0.26857142857142857","country" => "Italy","url" => "https://www.lcbo.com/en/berta-valdavi-grappa-di-moscato-446699"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Woodford Reserve Baccarat Edition G3 Kentucky Bourbon","brand" => "Woodford Reserve","category" => "Spirits","subcategory" => "Whisky","price" => "2699.4","volume" => "750","alcohol_content" => "45.2","price_index" => "7.96283185840708","country" => "United States","url" => "https://www.lcbo.com/en/woodford-reserve-baccarat-edition-g3-kentucky-bourbon-20787"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Briottet Manzana Verde - Green Apple","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "45.95","volume" => "700","alcohol_content" => "18.0","price_index" => "0.3646825396825397","country" => "France","url" => "https://www.lcbo.com/en/briottet-manzana-verde-green-apple-273911"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Blue Yanghe Classic M6","brand" => "Blue Yanghe","category" => "Spirits","subcategory" => "Liqueur","price" => "351.95","volume" => "500","alcohol_content" => "52.0","price_index" => "1.353653846153846","country" => "China","url" => "https://www.lcbo.com/en/blue-yanghe-classic-m6-26411"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Miyagikyo Single Malt Apple Brandy Wood Finish","brand" => "Nikka Yoichi Single Malt 10 Yr","category" => "Spirits","subcategory" => "Whisky","price" => "225.25","volume" => "700","alcohol_content" => "47.0","price_index" => "0.6846504559270516","country" => "Japan","url" => "https://www.lcbo.com/en/miyagikyo-single-malt-apple-brandy-wood-finish-19818"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grand Marnier Revelation","brand" => "Grand Marnier","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "699.25","volume" => "750","alcohol_content" => "40.0","price_index" => "2.3308333333333335","country" => "France","url" => "https://www.lcbo.com/en/grand-marnier-revelation-22187"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Monkey 47 Schwarzwald Dry Gin","brand" => "Monkey 47 Gin","category" => "Spirits","subcategory" => "Gin","price" => "53.4","volume" => "375","alcohol_content" => "47.0","price_index" => "0.3029787234042553","country" => "Germany","url" => "https://www.lcbo.com/en/monkey-47-schwarzwald-dry-gin-11285"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Aberfeldy 18 Paulliac French Red WIne Cask Finish","brand" => "Aberfeldy","category" => "Spirits","subcategory" => "Whisky","price" => "180.25","volume" => "750","alcohol_content" => "43.0","price_index" => "0.5589147286821705","country" => "United Kingdom","url" => "https://www.lcbo.com/en/aberfeldy-18-paulliac-french-red-wine-cask-finish-21942"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ante Superb","brand" => "Ante Superb","category" => "Spirits","subcategory" => "Vodka","price" => "30.0","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1","country" => "China","url" => "https://www.lcbo.com/en/ante-superb-26355"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bottega Ginger Bio","brand" => "Bottega","category" => "Spirits","subcategory" => "Liqueur","price" => "22.3","volume" => "500","alcohol_content" => "20.0","price_index" => "0.223","country" => "Italy","url" => "https://www.lcbo.com/en/bottega-ginger-bio-19420"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Old Pulteney 18 Year Old Single Malt Scotch Whisky","brand" => "Old Pulteney","category" => "Spirits","subcategory" => "Whisky","price" => "190.25","volume" => "750","alcohol_content" => "46.0","price_index" => "0.5514492753623188","country" => "United Kingdom","url" => "https://www.lcbo.com/en/old-pulteney-18-year-old-single-malt-scotch-whisky-644161"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Iwai Tradition Whisky","brand" => "Mars","category" => "Spirits","subcategory" => "Whisky","price" => "94.35","volume" => "750","alcohol_content" => "41.1","price_index" => "0.30608272506082723","country" => "Japan","url" => "https://www.lcbo.com/en/iwai-tradition-whisky-495150"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Grand Marnier Cuvee 1880","brand" => "Grand Marnier","category" => "Spirits","subcategory" => "Liqueur","price" => "400.05","volume" => "750","alcohol_content" => "40.0","price_index" => "1.3335000000000001","country" => "France","url" => "https://www.lcbo.com/en/grand-marnier-cuvee-1880-18807"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Northern Temple Vodka","brand" => "NICKEL 9 DISTILLERY","category" => "Spirits","subcategory" => "Vodka","price" => "44.5","volume" => "750","alcohol_content" => "40.0","price_index" => "0.14833333333333334","country" => "Canada","url" => "https://www.lcbo.com/en/northern-temple-vodka-28708"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ile Four The Distiller 001 Ginjo Lee Shochu","brand" => "Private Stock","category" => "Spirits","subcategory" => "Soju","price" => "56.9","volume" => "720","alcohol_content" => "20.0","price_index" => "0.3951388888888889","country" => "Japan","url" => "https://www.lcbo.com/en/ile-four-the-distiller-001-ginjo-lee-shochu-152255"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Makers Mark Private Select Directors Cut 3.0 (1 Bottle Limit)","brand" => "Maker's Mark","category" => "Spirits","subcategory" => "Whisky","price" => "89.95","volume" => "750","alcohol_content" => "55.35","price_index" => "0.2166817223727793","country" => "United States","url" => "https://www.lcbo.com/en/maker-s-mark-private-select-2-0-13370"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Shinobu Pure Malt Whisky","brand" => "Shinobu","category" => "Spirits","subcategory" => "Whisky","price" => "117.55","volume" => "750","alcohol_content" => "42.9","price_index" => "0.36534576534576535","country" => "Japan","url" => "https://www.lcbo.com/en/shinobu-pure-malt-whisky-14615"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jatt Life Vodka","brand" => "Private Stock","category" => "Spirits","subcategory" => "Vodka","price" => "54.2","volume" => "700","alcohol_content" => "40.0","price_index" => "0.1935714285714286","country" => "France","url" => "https://www.lcbo.com/en/jatt-life-vodka-963933"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Heaven's Door Trilogy Collection Whiskey","brand" => "Heavan'S Door","category" => "Spirits","subcategory" => "Whisky","price" => "81.5","volume" => "600","alcohol_content" => "50.0","price_index" => "0.27166666666666667","country" => "United States","url" => "https://www.lcbo.com/en/heaven-s-door-trilogy-collection-whiskey-22090"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Domaine Tariquet Bas-Armagnac XO","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "99.0","volume" => "700","alcohol_content" => "40.0","price_index" => "0.3535714285714286","country" => "France","url" => "https://www.lcbo.com/en/domaine-tariquet-bas-armagnac-xo-287101"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Highland Park 50-Year-Old Single Malt Scotch Whisky","brand" => "Highland Park","category" => "Spirits","subcategory" => "Whisky","price" => "40000.0","volume" => "750","alcohol_content" => "42.5","price_index" => "125.49019607843137","country" => "United Kingdom","url" => "https://www.lcbo.com/en/highland-park-50-year-old-single-malt-scotch-whisky-10196"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gautier XO Cognac","brand" => "Gautier","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "290.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.9673333333333333","country" => "France","url" => "https://www.lcbo.com/en/gautier-xo-cognac-548321"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Les Reserves d'Arton Vine Peach Cream","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "65.5","volume" => "750","alcohol_content" => "15.0","price_index" => "0.5822222222222222","country" => "France","url" => "https://www.lcbo.com/en/les-reserves-d-arton-vine-peach-cream-177567"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kinahan's Heritage Single Malt Irish Whiskey","brand" => "Kinahan","category" => "Spirits","subcategory" => "Whisky","price" => "92.2","volume" => "700","alcohol_content" => "46.0","price_index" => "0.28633540372670807","country" => "Ireland","url" => "https://www.lcbo.com/en/kinahan-s-heritage-single-malt-irish-whiskey-20078"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Er Guo Tou Chinese Famous Liquor","brand" => "Vintages Spirits","category" => "Spirits","subcategory" => "Liqueur","price" => "19.95","volume" => "500","alcohol_content" => "56.0","price_index" => "0.07125","country" => "China","url" => "https://www.lcbo.com/en/er-guo-tou-chinese-famous-liquor-202101"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Dalmore 30-Year-Old Single Malt Scotch Whisky","brand" => "The Dalmore","category" => "Spirits","subcategory" => "Whisky","price" => "12099.95","volume" => "700","alcohol_content" => "45.0","price_index" => "38.41253968253969","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-dalmore-30-year-old-single-malt-scotch-whisky-22834"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tsikoudia Of Crete Toplou Aged Brandy","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "111.35","volume" => "700","alcohol_content" => "40.0","price_index" => "0.3976785714285714","country" => "Greece","url" => "https://www.lcbo.com/en/tsikoudia-of-crete-toplou-aged-brandy-666007"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Coole Swan Superior Irish Cream","brand" => "Coole Swan","category" => "Spirits","subcategory" => "Liqueur","price" => "44.95","volume" => "750","alcohol_content" => "16.0","price_index" => "0.3745833333333334","country" => "Ireland","url" => "https://www.lcbo.com/en/coole-swan-superior-irish-cream-17464"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bobby's Schiedam Dry Gin","brand" => "Bobby's Gin","category" => "Spirits","subcategory" => "Gin","price" => "57.5","volume" => "750","alcohol_content" => "42.0","price_index" => "0.18253968253968253","country" => "Netherlands","url" => "https://www.lcbo.com/en/bobby-s-schiedam-dry-gin-22778"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Giffard Wild Elderflower","brand" => "Giffard","category" => "Spirits","subcategory" => "Liqueur","price" => "42.1","volume" => "700","alcohol_content" => "20.0","price_index" => "0.3007142857142857","country" => "France","url" => "https://www.lcbo.com/en/giffard-wild-elderflower-case-289321"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Caravedo Pisco Sour Cocktail Kit","brand" => "Gift Of The Month","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "49.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1665","country" => "Peru","url" => "https://www.lcbo.com/en/caravedo-pisco-sour-cocktail-kit-21727"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Highland Park Cask Strength","brand" => "Highland Park","category" => "Spirits","subcategory" => "Whisky","price" => "139.95","volume" => "750","alcohol_content" => "63.3","price_index" => "0.2947867298578199","country" => "United Kingdom","url" => "https://www.lcbo.com/en/highland-park-cask-strength-18868"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Conker Dorset Dry Gin","brand" => "Conker","category" => "Spirits","subcategory" => "Gin","price" => "36.55","volume" => "700","alcohol_content" => "40.0","price_index" => "0.13053571428571428","country" => "United Kingdom","url" => "https://www.lcbo.com/en/conker-dorset-dry-gin-14728"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bottega Grappa Alexander","brand" => "Distillerie Bottega","category" => "Spirits","subcategory" => "Grappa","price" => "35.15","volume" => "700","alcohol_content" => "38.8","price_index" => "0.12941826215022093","country" => "Italy","url" => "https://www.lcbo.com/en/bottega-grappa-alexander-12048"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jack Daniel's Tennessee Whiskey","brand" => "Jack Daniels","category" => "Spirits","subcategory" => "Whisky","price" => "140.95","volume" => "3000","alcohol_content" => "40.0","price_index" => "0.11745833333333332","country" => "United States","url" => "https://www.lcbo.com/en/jack-daniel-s-tennessee-whiskey-517383"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Macallan Classic Cut","brand" => "The Macallan","category" => "Spirits","subcategory" => "Whisky","price" => "170.3","volume" => "750","alcohol_content" => "51.0","price_index" => "0.4452287581699347","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-macallan-classic-cut-23146"
            ]);
            DB::table('alcohols')->insert([
            "title" => "On The Rocks Knob Creek Old Fashioned","brand" => "On The Rocks","category" => "Spirits","subcategory" => "Premixed Cocktails","price" => "6.95","volume" => "100","alcohol_content" => "35.0","price_index" => "0.19857142857142857","country" => "United States","url" => "https://www.lcbo.com/en/on-the-rocks-knob-creek-old-fashioned-21676"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Talisker Port Ruighe","brand" => "Talisker","category" => "Spirits","subcategory" => "Whisky","price" => "110.95","volume" => "700","alcohol_content" => "46.0","price_index" => "0.34456521739130436","country" => "United Kingdom","url" => "https://www.lcbo.com/en/talisker-port-ruighe-383174"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Leyenda Del Milagro Tequila Reposado","brand" => "Leyenda Del Milagro","category" => "Spirits","subcategory" => "Tequila","price" => "49.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1665","country" => "Mexico","url" => "https://www.lcbo.com/en/leyenda-del-milagro-tequila-reposado-603191"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sorgin","brand" => "Sorgin","category" => "Spirits","subcategory" => "Gin","price" => "36.25","volume" => "700","alcohol_content" => "43.0","price_index" => "0.12043189368770764","country" => "France","url" => "https://www.lcbo.com/en/sorgin-12571"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Speyburn 15 Year Old Single Malt Scotch Whisky","brand" => "Speyburn","category" => "Spirits","subcategory" => "Whisky","price" => "130.25","volume" => "750","alcohol_content" => "46.0","price_index" => "0.377536231884058","country" => "United Kingdom","url" => "https://www.lcbo.com/en/speyburn-15-year-old-single-malt-scotch-whisky-629584"
            ]);
            DB::table('alcohols')->insert([
            "title" => "High West American Prairie Bourbon","brand" => "High West","category" => "Spirits","subcategory" => "Whisky","price" => "54.6","volume" => "750","alcohol_content" => "46.0","price_index" => "0.1582608695652174","country" => "United States","url" => "https://www.lcbo.com/en/high-west-american-prairie-bourbon-10973"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Forty Creek Master's Cut Limited Edition","brand" => "Forty Creek Whisky","category" => "Spirits","subcategory" => "Whisky","price" => "79.95","volume" => "750","alcohol_content" => "48.5","price_index" => "0.2197938144329897","country" => "Canada","url" => "https://www.lcbo.com/en/forty-creek-master-s-cut-limited-edition-21947"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bunnahabhain Aonadh (1 Bottle Limit)","brand" => "Bunnahabhain","category" => "Spirits","subcategory" => "Whisky","price" => "198.8","volume" => "750","alcohol_content" => "56.0","price_index" => "0.4733333333333333","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bunnahabhain-aonadh-1-bottle-limit-23107"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bigallet Bellecour Bitters","brand" => "Bigallet","category" => "Spirits","subcategory" => "Liqueur","price" => "60.4","volume" => "700","alcohol_content" => "18.0","price_index" => "0.4793650793650793","country" => "France","url" => "https://www.lcbo.com/en/bigallet-bellecour-bitters-289313"
            ]);
            DB::table('alcohols')->insert([
            "title" => "St Patricks Distillery Extra Dry Gin","brand" => "Private Stock","category" => "Spirits","subcategory" => "Gin","price" => "54.1","volume" => "700","alcohol_content" => "40.0","price_index" => "0.19321428571428573","country" => "Ireland","url" => "https://www.lcbo.com/en/st-patricks-distillery-extra-dry-gin-538123"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Benromach Wood Finish Ch. Cissac Bordeaux 2010","brand" => "Benromach","category" => "Spirits","subcategory" => "Whisky","price" => "105.0","volume" => "700","alcohol_content" => "45.0","price_index" => "0.3333333333333333","country" => "United Kingdom","url" => "https://www.lcbo.com/en/benromach-wood-finish-ch-cissac-bordeaux-2010-13943"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mr. George Legacy Single Malt Scotch Whisky 1953","brand" => "Mr. George Legacy","category" => "Spirits","subcategory" => "Whisky","price" => "12500.0","volume" => "700","alcohol_content" => "59.4","price_index" => "30.062530062530065","country" => "United Kingdom","url" => "https://www.lcbo.com/en/mr-george-legacy-single-malt-scotch-whisky-1953-22843"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Noxx & Dunn Straight Barrel Florida Rum","brand" => "Noxx & Dunn Rum","category" => "Spirits","subcategory" => "Rum","price" => "28.75","volume" => "750","alcohol_content" => "43.0","price_index" => "0.08914728682170543","country" => "United States","url" => "https://www.lcbo.com/en/noxx-dunn-straight-barrel-florida-rum-486712"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenfarclas 25-Year-Old Highland Single Malt","brand" => "Glenfarclas","category" => "Spirits","subcategory" => "Whisky","price" => "269.35","volume" => "700","alcohol_content" => "43.0","price_index" => "0.8948504983388705","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenfarclas-25-year-old-highland-single-malt-906305"
            ]);
            DB::table('alcohols')->insert([
            "title" => "D1 London Gin United Kingdom","brand" => "D1 Gin","category" => "Spirits","subcategory" => "Gin","price" => "38.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.12983333333333336","country" => "United Kingdom","url" => "https://www.lcbo.com/en/d1-london-gin-united-kingdom-13426"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gilbey's London Dry Gin (PET)","brand" => "Gilbey London Dry Gin","category" => "Spirits","subcategory" => "Gin","price" => "62.4","volume" => "1750","alcohol_content" => "40.0","price_index" => "0.08914285714285713","country" => "Canada","url" => "https://www.lcbo.com/en/gilbey-s-london-dry-gin-pet-67116"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Koval Single Barrel Bourbon Whiskey","brand" => "Koval","category" => "Spirits","subcategory" => "Whisky","price" => "106.75","volume" => "750","alcohol_content" => "47.0","price_index" => "0.3028368794326241","country" => "United States","url" => "https://www.lcbo.com/en/koval-single-barrel-bourbon-whiskey-423368"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Scallywag 10 Year Old","brand" => "Scallywag","category" => "Spirits","subcategory" => "Whisky","price" => "73.85","volume" => "750","alcohol_content" => "46.0","price_index" => "0.21405797101449273","country" => "United Kingdom","url" => "https://www.lcbo.com/en/scallywag-10-year-old-618983"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Michter's 20-Year-Old Kentucky Straight Bourbon Whiskey","brand" => "Michter's","category" => "Spirits","subcategory" => "Whisky","price" => "1176.0","volume" => "750","alcohol_content" => "57.1","price_index" => "2.7460595446584937","country" => "United States","url" => "https://www.lcbo.com/en/michter-s-20-year-old-kentucky-straight-bourbon-whiskey-24773"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Uncle Nearest 1856 Premium Aged Tennessee Whiskey","brand" => "Uncle Nearest","category" => "Spirits","subcategory" => "Whisky","price" => "140.3","volume" => "750","alcohol_content" => "50.0","price_index" => "0.3741333333333334","country" => "United States","url" => "https://www.lcbo.com/en/uncle-nearest-1856-premium-aged-tennessee-whiskey-19412"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Roger Groult Eau-de-Vie de Cidre Blanche","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "68.0","volume" => "700","alcohol_content" => "45.0","price_index" => "0.21587301587301588","country" => "France","url" => "https://www.lcbo.com/en/roger-groult-eau-de-vie-de-cidre-blanche-288687"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Oban Distillers Edition Single Malt Scotch Whisky","brand" => "Oban","category" => "Spirits","subcategory" => "Whisky","price" => "149.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.46496124031007746","country" => "United Kingdom","url" => "https://www.lcbo.com/en/oban-distillers-edition-single-malt-scotch-whisky-503094"
            ]);
            DB::table('alcohols')->insert([
            "title" => "D'Usse XO","brand" => "D'Uss�","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "299.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.9998333333333332","country" => "France","url" => "https://www.lcbo.com/en/d-usse-xo-478081"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jura 21 Year Old Island Single Malt Scotch Whisky","brand" => "Jura","category" => "Spirits","subcategory" => "Whisky","price" => "365.25","volume" => "750","alcohol_content" => "46.7","price_index" => "1.0428265524625269","country" => "United Kingdom","url" => "https://www.lcbo.com/en/jura-21-year-old-island-single-malt-scotch-whisky-22666"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gajardo Fernet Radicale","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "60.45","volume" => "700","alcohol_content" => "40.0","price_index" => "0.21589285714285716","country" => "Italy","url" => "https://www.lcbo.com/en/gajardo-fernet-radicale-293265"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Frapin Cognac 1270","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "67.2","volume" => "700","alcohol_content" => "40.0","price_index" => "0.24000000000000002","country" => "France","url" => "https://www.lcbo.com/en/frapin-cognac-1270-288786"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Guignes Et Guins 2016","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "125.05","volume" => "500","alcohol_content" => "18.0","price_index" => "1.3894444444444445","country" => "France","url" => "https://www.lcbo.com/en/guignes-et-guins-2016-482264"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Sortil�ge Prestige","brand" => "Sortilege","category" => "Spirits","subcategory" => "Whisky","price" => "51.1","volume" => "750","alcohol_content" => "40.9","price_index" => "0.16658516707416463","country" => "Canada","url" => "https://www.lcbo.com/en/sortil-rge-prestige-317206"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Old Marani 3","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "27.25","volume" => "500","alcohol_content" => "40.0","price_index" => "0.13625","country" => "Georgia","url" => "https://www.lcbo.com/en/old-marani-3-270545"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Kvint Brandy Kp","brand" => "Kvint","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "40.25","volume" => "750","alcohol_content" => "40.43","price_index" => "0.13273971473328386","country" => "Moldova","url" => "https://www.lcbo.com/en/brandy-kvint-kp-tiraspol-winery-distillery-577817"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Freihof 1885 Obstler Schnapps","brand" => "Freihof","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "31.45","volume" => "500","alcohol_content" => "38.0","price_index" => "0.1655263157894737","country" => "Austria","url" => "https://www.lcbo.com/en/freihof-1885-obstler-schnapps-309574"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tempo Renovo Dry Gin","brand" => "Tempo Dry Gin","category" => "Spirits","subcategory" => "Gin","price" => "37.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.1265","country" => "Canada","url" => "https://www.lcbo.com/en/tempo-renovo-dry-gin-542902"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Companero Rum Panama Extra Anejo 12YO","brand" => "Companaro Rum","category" => "Spirits","subcategory" => "Rum","price" => "53.05","volume" => "700","alcohol_content" => "54.0","price_index" => "0.14034391534391533","country" => "Denmark","url" => "https://www.lcbo.com/en/companero-rum-panama-extra-anejo-12yo-667188"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lost Lake Tsipouro Zacharia Without Anise","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "55.4","volume" => "750","alcohol_content" => "40.0","price_index" => "0.18466666666666667","country" => "Greece","url" => "https://www.lcbo.com/en/lost-lake-tsipouro-zacharia-without-anise-280189"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Arran Malt Sherry Cask Finish Single Malt","brand" => "The Arran Malt","category" => "Spirits","subcategory" => "Whisky","price" => "97.8","volume" => "700","alcohol_content" => "46.3","price_index" => "0.30175871644554153","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-arran-malt-sherry-cask-finish-single-malt-191783"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ardbeg Wee Beastie 5 Year Old Whisky","brand" => "Ardbeg","category" => "Spirits","subcategory" => "Whisky","price" => "78.8","volume" => "750","alcohol_content" => "47.4","price_index" => "0.22165963431786215","country" => "United Kingdom","url" => "https://www.lcbo.com/en/ardbeg-wee-beastie-5-year-old-whisky-18828"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenkinchie 12 Years Old Lowland Single Malt Scotch Whisky","brand" => "Glenkinchie","category" => "Spirits","subcategory" => "Whisky","price" => "90.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.282015503875969","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenkinchie-12-years-old-lowland-single-malt-scotch-whisky-69435"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Balblair 25 Year Old SIngle Malt Scotch Whisky","brand" => "Balblair","category" => "Spirits","subcategory" => "Whisky","price" => "1500.3","volume" => "750","alcohol_content" => "46.0","price_index" => "4.348695652173913","country" => "United Kingdom","url" => "https://www.lcbo.com/en/balblair-25-year-old-single-malt-scotch-whisky-21954"
            ]);
            DB::table('alcohols')->insert([
            "title" => "HELLERSCHMID ORIGINAL 'MARILLENBRAND' WACHAUER APRICOT BRANDY","brand" => "Hellerschmid","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "38.95","volume" => "500","alcohol_content" => "40.0","price_index" => "0.19475","country" => "Austria","url" => "https://www.lcbo.com/en/hellerschmid-original-marillenbrand-wachauer-apricot-brandy-597005"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Laphroaig 10 Year Old Cask Strength Batch 14 (1 Bottle Limit)","brand" => "LAPHROAIG","category" => "Spirits","subcategory" => "Whisky","price" => "139.95","volume" => "750","alcohol_content" => "58.6","price_index" => "0.3184300341296928","country" => "United Kingdom","url" => "https://www.lcbo.com/en/laphroaig-10-year-old-cask-strength-batch-14-1-bottle-limit-25223"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bas Armagnac De Montal In Wood Box 1937","brand" => "Magstar Directs (Non Cc)","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "1949.75","volume" => "700","alcohol_content" => "40.0","price_index" => "6.963392857142857","country" => "France","url" => "https://www.lcbo.com/en/bas-armagnac-de-montal-in-wood-box-1937-496604"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Rosebank 30-Year-Old Single Malt Scotch Whisky","brand" => "MAGSTAR DIRECTS (NON CC)","category" => "Spirits","subcategory" => "Whisky","price" => "3999.95","volume" => "700","alcohol_content" => "48.6","price_index" => "11.757642563198118","country" => "United Kingdom","url" => "https://www.lcbo.com/en/rosebank-30-year-old-single-malt-scotch-whisky-26752"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ararat Armenian Brandy 5 Years Old","brand" => "Ararat","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "46.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.15583333333333332","country" => "Armenia","url" => "https://www.lcbo.com/en/ararat-armenian-brandy-5-years-old-38943"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Blanton's Single Barrel Special Reserve Kentucky Straight Bourbon Whiskey","brand" => "Blanton's","category" => "Spirits","subcategory" => "Whisky","price" => "67.4","volume" => "750","alcohol_content" => "40.0","price_index" => "0.22466666666666668","country" => "United States","url" => "https://www.lcbo.com/en/blanton-s-single-barrel-special-reserve-kentucky-straight-bourbon-whiskey-20794"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Frapin VS 1270","brand" => "Frapin Vs","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "50.15","volume" => "700","alcohol_content" => "40.0","price_index" => "0.17910714285714285","country" => "France","url" => "https://www.lcbo.com/en/frapin-vs-1270-12072"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tomatin 2003 Highland Single Malt Scotch Whisky","brand" => "Tomatin","category" => "Spirits","subcategory" => "Whisky","price" => "150.35","volume" => "750","alcohol_content" => "60.0","price_index" => "0.3341111111111111","country" => "United Kingdom","url" => "https://www.lcbo.com/en/tomatin-2003-highland-single-malt-scotch-whisky-455006"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Choya Yuzu","brand" => "Choya","category" => "Spirits","subcategory" => "Liqueur","price" => "44.55","volume" => "750","alcohol_content" => "14.7","price_index" => "0.4040816326530612","country" => "Japan","url" => "https://www.lcbo.com/en/choya-yuzu-liquor-372333"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Coquito","brand" => "Bacardi","category" => "Spirits","subcategory" => "Liqueur","price" => "24.95","volume" => "750","alcohol_content" => "13.0","price_index" => "0.2558974358974359","country" => "United States","url" => "https://www.lcbo.com/en/bacardi-coquito-22069"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Poli Airone Rosso","brand" => "Poli","category" => "Spirits","subcategory" => "Liqueur","price" => "31.4","volume" => "700","alcohol_content" => "17.0","price_index" => "0.26386554621848735","country" => "Italy","url" => "https://www.lcbo.com/en/poli-airone-rosso-666685"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Nardini Grappa Bianca","brand" => "Ditta Bortolo Nardini S.P.A.","category" => "Spirits","subcategory" => "Grappa","price" => "40.1","volume" => "700","alcohol_content" => "40.21","price_index" => "0.14246633744271148","country" => "Italy","url" => "https://www.lcbo.com/en/nardini-grappa-bianca-12060"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Matsui The Kurayoshi Sherry Cask Whisky","brand" => "Matsui Shuzo","category" => "Spirits","subcategory" => "Whisky","price" => "112.7","volume" => "700","alcohol_content" => "43.0","price_index" => "0.3744186046511628","country" => "Japan","url" => "https://www.lcbo.com/en/matsui-the-kurayoshi-sherry-cask-whisky-19817"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Elijah Craig Barrel Proof","brand" => "Gift Of The Month","category" => "Spirits","subcategory" => "Whisky","price" => "128.35","volume" => "750","alcohol_content" => "65.0","price_index" => "0.2632820512820513","country" => "United States","url" => "https://www.lcbo.com/en/elijah-craig-barrel-proof-510966"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jack Daniel's Apple","brand" => "Jack Daniels Flavours","category" => "Spirits","subcategory" => "Whisky","price" => "36.0","volume" => "750","alcohol_content" => "35.0","price_index" => "0.13714285714285715","country" => "United States","url" => "https://www.lcbo.com/en/jack-daniel-s-apple-15349"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Mariquinhas With Fruit","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "34.35","volume" => "700","alcohol_content" => "18.9","price_index" => "0.2596371882086168","country" => "Portugal","url" => "https://www.lcbo.com/en/mariquinhas-with-fruit-843359"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Reyka Small Batch Vodka","brand" => "Reyka Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "34.7","volume" => "750","alcohol_content" => "40.0","price_index" => "0.11566666666666668","country" => "Iceland","url" => "https://www.lcbo.com/en/reyka-small-batch-vodka-468512"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Moses Date Flavoured Kosher Vodka","brand" => "Vintages Front Line Release","category" => "Spirits","subcategory" => "Vodka","price" => "62.15","volume" => "750","alcohol_content" => "32.0","price_index" => "0.25895833333333335","country" => "Finland","url" => "https://www.lcbo.com/en/moses-date-flavoured-kosher-vodka-16596"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Spirit of York Aquavit","brand" => "Spirit Of York","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "49.95","volume" => "750","alcohol_content" => "44.0","price_index" => "0.15136363636363637","country" => "Canada","url" => "https://www.lcbo.com/en/spirit-of-york-aquavit-645846"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Heaven's Door Double Barrel Whiskey, Tennessee","brand" => "Heaven's Door","category" => "Spirits","subcategory" => "Whisky","price" => "87.6","volume" => "750","alcohol_content" => "49.95","price_index" => "0.23383383383383377","country" => "United States","url" => "https://www.lcbo.com/en/heaven-s-door-double-barrel-whiskey-tennessee-14361"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glen Garioch Virgin Oak No.2","brand" => "Glen Garioch","category" => "Spirits","subcategory" => "Whisky","price" => "119.95","volume" => "750","alcohol_content" => "48.0","price_index" => "0.33319444444444446","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glen-garioch-virgin-oak-no-2-20855"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenmorangie Grand Vintage Highland Single Malt Scotch Whisky 1996","brand" => "Glenmorangie","category" => "Spirits","subcategory" => "Whisky","price" => "1265.9","volume" => "750","alcohol_content" => "43.0","price_index" => "3.925271317829458","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenmorangie-grand-vintage-highland-single-malt-scotch-whisky-1996-22845"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Alexander Brandy 7*","brand" => "Alexander","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "29.65","volume" => "700","alcohol_content" => "40.0","price_index" => "0.10589285714285714","country" => "Greece","url" => "https://www.lcbo.com/en/alexander-brandy-7-505312"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Barrel Bandit Canadian Whisky","brand" => "The Barrel Bandit","category" => "Spirits","subcategory" => "Whisky","price" => "34.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.10837209302325582","country" => "Canada","url" => "https://www.lcbo.com/en/the-barrel-bandit-canadian-whisky-25562"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Redbreast 15 Year Old Irish Whiskey","brand" => "Redbreast Whiskey","category" => "Spirits","subcategory" => "Whisky","price" => "125.25","volume" => "750","alcohol_content" => "46.0","price_index" => "0.3630434782608696","country" => "Ireland","url" => "https://www.lcbo.com/en/redbreast-15-year-old-irish-whiskey-446781"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Baron Samedi Rum","brand" => "Baron Samedi Rum","category" => "Spirits","subcategory" => "Rum","price" => "28.2","volume" => "750","alcohol_content" => "45.0","price_index" => "0.08355555555555555","country" => "Canada","url" => "https://www.lcbo.com/en/baron-samedi-rum-13480"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Zubrowka Biala Vodka","brand" => "Zubrowka Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "28.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.094","country" => "Poland","url" => "https://www.lcbo.com/en/zubrowka-biala-vodka-15862"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Babatzim Tsipouro Without Anise","brand" => "Babatzim","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "30.95","volume" => "700","alcohol_content" => "40.0","price_index" => "0.11053571428571428","country" => "Greece","url" => "https://www.lcbo.com/en/babatzim-tsipouro-without-anise-253583"
            ]);
            DB::table('alcohols')->insert([
            "title" => "St Remy Sherry Oloroso Cask Finish","brand" => "St Remy Brandy","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "39.75","volume" => "700","alcohol_content" => "40.0","price_index" => "0.1419642857142857","country" => "France","url" => "https://www.lcbo.com/en/st-remy-sherry-oloroso-cask-finish-19381"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Barista","brand" => "Barista","category" => "Spirits","subcategory" => "Liqueur","price" => "23.1","volume" => "750","alcohol_content" => "23.0","price_index" => "0.13391304347826088","country" => "Canada","url" => "https://www.lcbo.com/en/barista-549196"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Spicebox Gingerbread","brand" => "Spicebox","category" => "Spirits","subcategory" => "Whisky","price" => "16.6","volume" => "375","alcohol_content" => "35.0","price_index" => "0.1264761904761905","country" => "Canada","url" => "https://www.lcbo.com/en/spicebox-gingerbread-438846"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hennessy VSOP Holiday 2021 Deluxe Offer","brand" => "Hennessy","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "117.4","volume" => "750","alcohol_content" => "40.0","price_index" => "0.39133333333333337","country" => "France","url" => "https://www.lcbo.com/en/hennessy-vsop-holiday-2021-deluxe-offer-21897"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gajardo Bitter Radicale","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "56.45","volume" => "700","alcohol_content" => "25.0","price_index" => "0.32257142857142856","country" => "Italy","url" => "https://www.lcbo.com/en/gajardo-bitter-radicale-293281"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Forty Creek Resolve","brand" => "Forty Creek Whisky","category" => "Spirits","subcategory" => "Whisky","price" => "79.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.24790697674418605","country" => "Canada","url" => "https://www.lcbo.com/en/forty-creek-resolve-17283"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Neighbours 21 Neon Premium Gin Gift Set","brand" => "Private Stock","category" => "Spirits","subcategory" => "Gin","price" => "81.85","volume" => "700","alcohol_content" => "46.0","price_index" => "0.25419254658385093","country" => "Portugal","url" => "https://www.lcbo.com/en/neighbours-21-neon-premium-gin-gift-set-493915"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Yellowstone Select Bourbon Whiskey","brand" => "Yellowstone","category" => "Spirits","subcategory" => "Whisky","price" => "69.95","volume" => "750","alcohol_content" => "46.5","price_index" => "0.20057347670250897","country" => "United States","url" => "https://www.lcbo.com/en/yellowstone-select-bourbon-whiskey-463661"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bowmore Port Matured 23-Year-Old Islay Single Malt Scotch Whisky (1 Bottle Limit)","brand" => "Bowmore","category" => "Spirits","subcategory" => "Whisky","price" => "699.95","volume" => "750","alcohol_content" => "50.8","price_index" => "1.8371391076115486","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bowmore-port-matured-23-year-old-islay-single-malt-scotch-whisky-434704"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Natterjack Irish Whiskey","brand" => "Natterjack","category" => "Spirits","subcategory" => "Whisky","price" => "73.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2465","country" => "Ireland","url" => "https://www.lcbo.com/en/natterjack-irish-whiskey-14474"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Johnnie Walker Game Of Thrones A Song Of Ice","brand" => "Johnnie Walker","category" => "Spirits","subcategory" => "Whisky","price" => "42.0","volume" => "750","alcohol_content" => "40.2","price_index" => "0.13930348258706468","country" => "United Kingdom","url" => "https://www.lcbo.com/en/johnnie-walker-game-of-thrones-a-song-of-ice-12601"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Macallan Triple Cask 12YO","brand" => "Macallan","category" => "Spirits","subcategory" => "Whisky","price" => "59.95","volume" => "350","alcohol_content" => "40.0","price_index" => "0.4282142857142857","country" => "United Kingdom","url" => "https://www.lcbo.com/en/macallan-triple-cask-12yo-13758"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bacardi Superior Halloween","brand" => "Bacardi","category" => "Spirits","subcategory" => "Rum","price" => "28.75","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09583333333333334","country" => "United States","url" => "https://www.lcbo.com/en/bacardi-superior-halloween-12065"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Local Spirit Gin 7","brand" => "Local Spirit","category" => "Spirits","subcategory" => "Gin","price" => "39.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13316666666666668","country" => "Canada","url" => "https://www.lcbo.com/en/local-spirit-gin-7-22133"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Crafter's Aromatic Flower Gin","brand" => "Crafter'S Gin","category" => "Spirits","subcategory" => "Gin","price" => "47.1","volume" => "750","alcohol_content" => "44.3","price_index" => "0.14176072234762982","country" => "Estonia","url" => "https://www.lcbo.com/en/crafter-s-aromatic-flower-gin-14765"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Extreme Cognac","brand" => "Cognac Tesseron","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "8507.95","volume" => "700","alcohol_content" => "40.0","price_index" => "30.385535714285716","country" => "France","url" => "https://www.lcbo.com/en/extreme-cognac-22513"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Spirit In Niagara Juiced Up Gin","brand" => "Spirit In Niagara","category" => "Spirits","subcategory" => "Gin","price" => "40.0","volume" => "750","alcohol_content" => "40.0","price_index" => "0.13333333333333333","country" => "Canada","url" => "https://www.lcbo.com/en/spirit-in-niagara-juiced-up-gin-23823"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Esprit de June","brand" => "Vintages Spirits","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "59.75","volume" => "750","alcohol_content" => "28.0","price_index" => "0.2845238095238095","country" => "France","url" => "https://www.lcbo.com/en/esprit-de-june-373993"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cuv�e des MOFS Yellow Chartreuse","brand" => "Chartreuse","category" => "Spirits","subcategory" => "Liqueur","price" => "78.15","volume" => "700","alcohol_content" => "44.9","price_index" => "0.2486477887368756","country" => "France","url" => "https://www.lcbo.com/en/cuv-ce-des-mofs-yellow-chartreuse-480962"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Plantation Barbados 2014 Single Cask","brand" => "Plantation Barbados","category" => "Spirits","subcategory" => "Rum","price" => "109.85","volume" => "750","alcohol_content" => "49.9","price_index" => "0.29352037408149634","country" => "France","url" => "https://www.lcbo.com/en/plantation-barbados-2014-single-cask-24440"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Glenrothes 25YO","brand" => "Glenrothes","category" => "Spirits","subcategory" => "Whisky","price" => "749.95","volume" => "750","alcohol_content" => "43.0","price_index" => "2.3254263565891473","country" => "United Kingdom","url" => "https://www.lcbo.com/en/glenrothes-25yo-12446"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Blanton's Gold Edition Single Barrel Kentucky Straight Bourbon Whiskey","brand" => "Blanton's","category" => "Spirits","subcategory" => "Whisky","price" => "102.4","volume" => "750","alcohol_content" => "51.5","price_index" => "0.2651132686084143","country" => "United States","url" => "https://www.lcbo.com/en/blanton-s-gold-edition-single-barrel-kentucky-straight-bourbon-whiskey-595603"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Johnnie Walker Blue Ghost & Rare Pittyvaich","brand" => "Johnnie Walker","category" => "Spirits","subcategory" => "Whisky","price" => "574.8","volume" => "750","alcohol_content" => "43.8","price_index" => "1.749771689497717","country" => "United Kingdom","url" => "https://www.lcbo.com/en/johnnie-walker-blue-ghost-rare-pittyvaich-23102"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Aberlour A'bunadh Alba (2 Bottle Limit)","brand" => "ABERLOUR A'BUNADH","category" => "Spirits","subcategory" => "Whisky","price" => "104.95","volume" => "750","alcohol_content" => "60.9","price_index" => "0.22977558839627807","country" => "United Kingdom","url" => "https://www.lcbo.com/en/arberlour-a-bunadh-alba-2-bottle-limit-22688"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Stranahan's Sherry Cask Whiskey","brand" => "Stranahan's","category" => "Spirits","subcategory" => "Whisky","price" => "89.95","volume" => "750","alcohol_content" => "47.0","price_index" => "0.255177304964539","country" => "United States","url" => "https://www.lcbo.com/en/stranahan-s-sherry-cask-whiskey-629592"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Basil Hayden Toasted Barrel Bourbon","brand" => "Basil Hayden","category" => "Spirits","subcategory" => "Whisky","price" => "69.95","volume" => "750","alcohol_content" => "40.0","price_index" => "0.2331666666666667","country" => "United States","url" => "https://www.lcbo.com/en/basil-hayden-toasted-barrel-bourbon-23145"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Yambolska Grape Brandy","brand" => "Yambolska","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "30.95","volume" => "700","alcohol_content" => "40.0","price_index" => "0.11053571428571428","country" => "Bulgaria","url" => "https://www.lcbo.com/en/yambolska-grape-brandy-123646"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bunnahabhain Toiteach A Dha","brand" => "Bunnahabhan","category" => "Spirits","subcategory" => "Whisky","price" => "100.1","volume" => "750","alcohol_content" => "46.3","price_index" => "0.28826493880489557","country" => "United Kingdom","url" => "https://www.lcbo.com/en/bunnahabhain-toiteach-a-dha-577445"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Robert Burns Arran Single Malt Scotch Whisky","brand" => "Arran","category" => "Spirits","subcategory" => "Whisky","price" => "56.75","volume" => "700","alcohol_content" => "43.0","price_index" => "0.18853820598006646","country" => "United Kingdom","url" => "https://www.lcbo.com/en/robert-burns-arran-single-malt-scotch-whisky-981084"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Dalwhinnie Distillers Edition Single Highland Malt Scotch Whisky","brand" => "Dalwhinnie","category" => "Spirits","subcategory" => "Whisky","price" => "124.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.3874418604651163","country" => "United Kingdom","url" => "https://www.lcbo.com/en/dalwhinnie-distillers-edition-single-highland-malt-scotch-whisky-503086"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Neighbours 21 Neon Premium Gin","brand" => "Private Stock","category" => "Spirits","subcategory" => "Gin","price" => "64.55","volume" => "700","alcohol_content" => "46.0","price_index" => "0.20046583850931676","country" => "Portugal","url" => "https://www.lcbo.com/en/neighbours-21-neon-premium-gin-484435"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jura 18 Yo","brand" => "Jura","category" => "Spirits","subcategory" => "Whisky","price" => "150.25","volume" => "750","alcohol_content" => "44.0","price_index" => "0.4553030303030303","country" => "United Kingdom","url" => "https://www.lcbo.com/en/jura-18-yo-578419"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Tenson Kourin Kuro 1800","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "72.1","volume" => "1800","alcohol_content" => "25.2","price_index" => "0.1589506172839506","country" => "Japan","url" => "https://www.lcbo.com/en/tenson-kourin-kuro-1800-case-528447"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Michter's 10 Year Old Kentucky Straight Bourbon","brand" => "Michter's","category" => "Spirits","subcategory" => "Whisky","price" => "199.15","volume" => "750","alcohol_content" => "47.2","price_index" => "0.5625706214689266","country" => "United States","url" => "https://www.lcbo.com/en/michter-s-10-year-old-kentucky-straight-bourbon-24129"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Widow Jane Aged 10 Years Blend of Straight Bourbons","brand" => "Widow Jane","category" => "Spirits","subcategory" => "Whisky","price" => "106.75","volume" => "750","alcohol_content" => "45.65","price_index" => "0.31179262504563715","country" => "United States","url" => "https://www.lcbo.com/en/widow-jane-aged-10-years-blend-of-straight-bourbons-10301"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hibiki Harmony","brand" => "Hibiki","category" => "Spirits","subcategory" => "Whisky","price" => "139.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.43395348837209297","country" => "Japan","url" => "https://www.lcbo.com/en/hibiki-harmony-481226"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Bootlegger Gin","brand" => "Bootlegger Distillery","category" => "Spirits","subcategory" => "Gin","price" => "28.75","volume" => "750","alcohol_content" => "42.5","price_index" => "0.09019607843137255","country" => "Canada","url" => "https://www.lcbo.com/en/bootlegger-gin-24510"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Balblair 15YO Highland Single Malt Scotch","brand" => "Balblair","category" => "Spirits","subcategory" => "Whisky","price" => "150.25","volume" => "750","alcohol_content" => "46.0","price_index" => "0.4355072463768116","country" => "United Kingdom","url" => "https://www.lcbo.com/en/balblair-15yo-highland-single-malt-scotch-10740"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cragganmore 20 Year Old","brand" => "Cragganmore","category" => "Spirits","subcategory" => "Whisky","price" => "230.1","volume" => "750","alcohol_content" => "58.4","price_index" => "0.5253424657534247","country" => "United Kingdom","url" => "https://www.lcbo.com/en/cragganmore-20-year-old-18871"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Smooth Ambler - Old Scout American Whiskey","brand" => "Old Scout Whiskey","category" => "Spirits","subcategory" => "Whisky","price" => "92.95","volume" => "750","alcohol_content" => "49.37","price_index" => "0.2510296401323341","country" => "United States","url" => "https://www.lcbo.com/en/smooth-ambler-old-scout-american-whiskey-13972"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Red Spot Irish Whiskey","brand" => "Irish Distillers International Ltd.","category" => "Spirits","subcategory" => "Whisky","price" => "160.25","volume" => "750","alcohol_content" => "46.0","price_index" => "0.4644927536231884","country" => "Ireland","url" => "https://www.lcbo.com/en/red-spot-irish-whiskey-15017"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Baron de Sigognac Armagnac1943","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "2380.5","volume" => "700","alcohol_content" => "40.0","price_index" => "8.501785714285715","country" => "France","url" => "https://www.lcbo.com/en/baron-de-sigognac-armagnac1943-404433"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Caol Ila 12 Year Old Islay Single Malt Scotch Whisky","brand" => "Caol Ila","category" => "Spirits","subcategory" => "Whisky","price" => "94.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.2944186046511628","country" => "United Kingdom","url" => "https://www.lcbo.com/en/caol-ila-12-year-old-islay-single-malt-scotch-whisky-602029"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Last Straw's Gin Twenty-One","brand" => "Last Straw Distillery","category" => "Spirits","subcategory" => "Gin","price" => "34.95","volume" => "750","alcohol_content" => "46.0","price_index" => "0.10130434782608697","country" => "Canada","url" => "https://www.lcbo.com/en/last-straw-s-gin-twenty-one-633222"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Lohin MnKinnon Bordeaux Finish Peated Whisky","brand" => "Lohin Mckinnon","category" => "Spirits","subcategory" => "Whisky","price" => "65.4","volume" => "750","alcohol_content" => "43.0","price_index" => "0.20279069767441862","country" => "Canada","url" => "https://www.lcbo.com/en/lohin-mnkinnon-bordeaux-finish-peated-whisky-14917"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Scheibel Wei�er Topinambur Liquor","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "74.35","volume" => "500","alcohol_content" => "33.3","price_index" => "0.4465465465465466","country" => "Germany","url" => "https://www.lcbo.com/en/scheibel-wei-uer-topinambur-liquor-530278"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Montirius La Fine Vacqueyras 2016","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "122.5","volume" => "350","alcohol_content" => "43.5","price_index" => "0.8045977011494253","country" => "France","url" => "https://www.lcbo.com/en/montirius-la-fine-vacqueyras-2016-case-455161"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cardhu 11 Year Old (1 Bottle Limit)","brand" => "Cardhu 12 Yr Highland Malt","category" => "Spirits","subcategory" => "Whisky","price" => "149.65","volume" => "750","alcohol_content" => "55.0","price_index" => "0.36278787878787877","country" => "United Kingdom","url" => "https://www.lcbo.com/en/cardhu-11-year-old-1-bottle-limit-18870"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Waxwing Bohemian Gin","brand" => "Private Stock","category" => "Spirits","subcategory" => "Gin","price" => "41.3","volume" => "750","alcohol_content" => "41.0","price_index" => "0.1343089430894309","country" => "Canada","url" => "https://www.lcbo.com/en/waxwing-bohemian-gin-561703"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Hardy Coq D'Or Pineau des Charentes","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "29.0","volume" => "750","alcohol_content" => "17.0","price_index" => "0.22745098039215683","country" => "France","url" => "https://www.lcbo.com/en/hardy-coq-d-or-pineau-des-charentes-687318"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cruxland Gin","brand" => "Cruxland","category" => "Spirits","subcategory" => "Gin","price" => "51.95","volume" => "750","alcohol_content" => "43.0","price_index" => "0.16108527131782946","country" => "South Africa","url" => "https://www.lcbo.com/en/cruxland-gin-19404"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Spring Mill John Sleeman Ward Series No.3 Haskap Liqueur","brand" => "Spring Mill Distillery","category" => "Spirits","subcategory" => "Liqueur","price" => "29.95","volume" => "375","alcohol_content" => "23.5","price_index" => "0.3398581560283688","country" => "Canada","url" => "https://www.lcbo.com/en/spring-mill-john-sleeman-ward-series-no-3-haskap-liqueur-22150"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Liquore Naturale Di Mandorla Classico","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "43.35","volume" => "750","alcohol_content" => "30.0","price_index" => "0.19266666666666668","country" => "Italy","url" => "https://www.lcbo.com/en/liquore-naturale-di-mandorla-classico-case-308873"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Antiquity Blue","brand" => "Antiquity","category" => "Spirits","subcategory" => "Whisky","price" => "41.3","volume" => "750","alcohol_content" => "42.8","price_index" => "0.12866043613707165","country" => "India","url" => "https://www.lcbo.com/en/antiquity-blue-455287"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Dalmore Constellation Collection Cask 2 Single Malt Scotch Whisky 1971","brand" => "The Dalmore","category" => "Spirits","subcategory" => "Whisky","price" => "55849.95","volume" => "700","alcohol_content" => "43.9","price_index" => "181.74406117800194","country" => "United Kingdom","url" => "https://www.lcbo.com/en/the-dalmore-constellation-collection-cask-2-single-malt-scotch-whisky-1971-22840"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Palladium Grappa Chardonnay & Strawberry","brand" => "Palladium Grappa Chard & Strawberry","category" => "Spirits","subcategory" => "Grappa","price" => "28.2","volume" => "750","alcohol_content" => "28.0","price_index" => "0.13428571428571426","country" => "Italy","url" => "https://www.lcbo.com/en/palladium-grappa-chardonnay-strawberry-898635"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Spring Mill John Sleeman Ward Series No.1 Spiced Liquor","brand" => "Spring Mill Distillery","category" => "Spirits","subcategory" => "Liqueur","price" => "29.95","volume" => "375","alcohol_content" => "29.6","price_index" => "0.2698198198198198","country" => "Canada","url" => "https://www.lcbo.com/en/spring-mill-john-sleeman-ward-series-no-1-spiced-liquor-19049"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Van Winkle Special Reserve 12-Year-Old Lot \"B\" Kentucky Straight Bourbon Whiskey","brand" => "Van Winkle","category" => "Spirits","subcategory" => "Whisky","price" => "149.95","volume" => "750","alcohol_content" => "45.2","price_index" => "0.44233038348082593","country" => "United States","url" => "https://www.lcbo.com/en/van-winkle-special-reserve-12-year-old-lot-b-kentucky-straight-bourbon-whiskey-25430"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ciroc Pomegranate","brand" => "Ciroc Spirit Drink","category" => "Spirits","subcategory" => "Vodka","price" => "50.95","volume" => "750","alcohol_content" => "35.0","price_index" => "0.1940952380952381","country" => "Italy","url" => "https://www.lcbo.com/en/ciroc-pomegranate-21839"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Ouzo MINI","brand" => "Private Stock","category" => "Spirits","subcategory" => "Liqueur","price" => "21.0","volume" => "700","alcohol_content" => "40.0","price_index" => "0.075","country" => "Greece","url" => "https://www.lcbo.com/en/ouzo-mini-726421"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Cognac Maxime Trijol XO Selection","brand" => "Private Stock","category" => "Spirits","subcategory" => "Cognac & Brandy","price" => "107.85","volume" => "750","alcohol_content" => "40.0","price_index" => "0.3595","country" => "France","url" => "https://www.lcbo.com/en/cognac-maxime-trijol-xo-selection-288752"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Pappy Van Winkle's Family Reserve 23-Year-Old Kentucky Straight Bourbon Whiskey","brand" => "Pappy Van Winkle","category" => "Spirits","subcategory" => "Whisky","price" => "479.95","volume" => "750","alcohol_content" => "47.8","price_index" => "1.3387726638772663","country" => "United States","url" => "https://www.lcbo.com/en/pappy-van-winkle-s-family-reserve-23-year-old-kentucky-straight-bourbon-whiskey-25433"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Auchentoshan 1988","brand" => "Auchentoshan","category" => "Spirits","subcategory" => "Whisky","price" => "748.95","volume" => "750","alcohol_content" => "47.6","price_index" => "2.0978991596638656","country" => "United Kingdom","url" => "https://www.lcbo.com/en/auchentoshan-1988-14427"
            ]);
            DB::table('alcohols')->insert([
            "title" => "The Real Mccoy 12 Year Old Rum","brand" => "Real Mccoy Rum","category" => "Spirits","subcategory" => "Rum","price" => "80.0","volume" => "750","alcohol_content" => "40.0","price_index" => "0.26666666666666666","country" => "Barbados","url" => "https://www.lcbo.com/en/the-real-mccoy-12-year-old-rum-13593"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Patron Silver Tequila","brand" => "Patron","category" => "Spirits","subcategory" => "Tequila","price" => "46.95","volume" => "375","alcohol_content" => "40.0","price_index" => "0.313","country" => "Mexico","url" => "https://www.lcbo.com/en/patron-silver-tequila-42911"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Jameson 18 Yo Irish Whiskey","brand" => "Jameson","category" => "Spirits","subcategory" => "Whisky","price" => "200.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.6673333333333333","country" => "Ireland","url" => "https://www.lcbo.com/en/jameson-18-yo-irish-whiskey-624940"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Aqvalvce Gin","brand" => "Aqvalvce Gin","category" => "Spirits","subcategory" => "Gin","price" => "70.9","volume" => "700","alcohol_content" => "47.0","price_index" => "0.21550151975683893","country" => "Italy","url" => "https://www.lcbo.com/en/aqvalvce-gin-18677"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Nemiroff Vodka","brand" => "Nemiroff Vodka","category" => "Spirits","subcategory" => "Vodka","price" => "29.85","volume" => "750","alcohol_content" => "40.0","price_index" => "0.0995","country" => "Ukraine","url" => "https://www.lcbo.com/en/nemiroff-vodka-15439"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Gabriel Boudier Bartender's Creme de Violet","brand" => "Gabriel Boudier","category" => "Spirits","subcategory" => "Liqueur","price" => "42.45","volume" => "500","alcohol_content" => "18.0","price_index" => "0.4716666666666667","country" => "France","url" => "https://www.lcbo.com/en/gabriel-boudier-bartender-s-creme-de-violet-case-313907"
            ]);
            DB::table('alcohols')->insert([
            "title" => "New York Distilling - Ragtime Rye","brand" => "New York Distilling","category" => "Spirits","subcategory" => "Whisky","price" => "58.05","volume" => "750","alcohol_content" => "45.34","price_index" => "0.1707101896779885","country" => "United States","url" => "https://www.lcbo.com/en/new-york-distilling-ragtime-rye-12644"
            ]);
            DB::table('alcohols')->insert([
            "title" => "Rives 1880 London Dry Gin (Fraternity Spirits)","brand" => "Vintages Spirits","category" => "Spirits","subcategory" => "Gin","price" => "27.2","volume" => "750","alcohol_content" => "40.0","price_index" => "0.09066666666666666","country" => "Spain","url" => "https://www.lcbo.com/en/rives-1880-london-dry-gin-fraternity-spirits-540047"
            ]);

    }
}
