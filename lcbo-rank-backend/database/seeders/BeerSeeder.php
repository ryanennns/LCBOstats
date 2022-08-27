<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('alcohols')->insert([
            "title" => "Bench Brewing Lincoln Lager", "brand" => "Bench Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.4", "price_index" => "0.16096482798385547", "country" => "Canada", "url" => "https://www.lcbo.com/en/bench-brewing-lincoln-lager-16954", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/9/016954.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/9/016954.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bench Brewing Jordan Harbour Belgian Pale Ale", "brand" => "Bench Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.13620100829403153", "country" => "Canada", "url" => "https://www.lcbo.com/en/bench-brewing-jordan-harbour-belgian-pale-ale-13815", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/8/013815.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/8/013815.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bench Brewing Ball's Falls Session IPA", "brand" => "Bench Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15738783180643645", "country" => "Canada", "url" => "https://www.lcbo.com/en/bench-brewing-ball-s-falls-session-ipa-481515", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/1/5/481515.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/1/5/481515.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cowbell Brewing Co. Smooth Sailing Light Lager", "brand" => "Cowbell Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.177061310782241", "country" => "Canada", "url" => "https://www.lcbo.com/en/cowbell-brewing-co-smooth-sailing-light-lager-25075", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025075.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025075.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ace Hill Radler Mix Pack", "brand" => "Ace Hill", "category" => "Beer & Cider", "subcategory" => "Gifts and Samplers", "price" => "10.95", "volume" => "1420", "alcohol_content" => "2.5", "price_index" => "0.3084507042253521", "country" => "Canada", "url" => "https://www.lcbo.com/en/ace-hill-radler-mix-pack-19658", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/6/019658.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/6/019658.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brickworks Ciderhouse Batch : 1904", "brand" => "Brickworks Ciderhouse", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.5", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.15743781206423463", "country" => "Canada", "url" => "https://www.lcbo.com/en/brickworks-ciderhouse-batch-1904-394015", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/9/4/0/394015.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/9/4/0/394015.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Henderson's \"Food Truck\" Lagered Blonde", "brand" => "Henderson Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.05", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.13433756166314303", "country" => "Canada", "url" => "https://www.lcbo.com/en/henderson-s-food-truck-lagered-blonde-513036", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/3/0/513036.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/3/0/513036.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Survival Pack", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Gifts and Samplers", "price" => "18.95", "volume" => "2838", "alcohol_content" => "5.5", "price_index" => "0.12140431802165416", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-survival-pack-25051", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025051.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025051.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Life in the Clouds", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "6.1", "price_index" => "0.12650330988112155", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-life-in-the-clouds-556688", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/6/6/556688.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/6/6/556688.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Corona Sunbrew", "brand" => "Corona", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "12.35", "volume" => "1980", "alcohol_content" => "0.01", "price_index" => "62.37373737373737", "country" => "Canada", "url" => "https://www.lcbo.com/en/corona-sunbrew-24899", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024899.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024899.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Lug Tread", "brand" => "Beau's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "18.95", "volume" => "2838", "alcohol_content" => "5.2", "price_index" => "0.1284084132921342", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-lug-tread-19266", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/2/019266.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/2/019266.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Whitewater Brewing Sunsetter Beach Lager", "brand" => "Sunsetter", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.17177589852008454", "country" => "Canada", "url" => "https://www.lcbo.com/en/whitewater-brewing-sunsetter-beach-lager-26556", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/5/026556.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/5/026556.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Budweiser", "brand" => "Budweiser", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "14.5", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.13615023474178403", "country" => "Canada", "url" => "https://www.lcbo.com/en/budweiser-904334", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/4/3/904334.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/4/3/904334.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Hazy State", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.1", "price_index" => "0.17789924199453414", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-hazy-state-10815", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/8/010815.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/8/010815.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Daura Damm", "brand" => "Damm", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "15.15", "volume" => "1980", "alcohol_content" => "5.4", "price_index" => "0.14169472502805835", "country" => "Spain", "url" => "https://www.lcbo.com/en/daura-damm-378711", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/7/8/7/378711.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/7/8/7/378711.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Spy Cider House Golden Eye Cider", "brand" => "Spy Cider House", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.16701902748414377", "country" => "Canada", "url" => "https://www.lcbo.com/en/spy-cider-house-golden-eye-cider-11674", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/6/011674.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/6/011674.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ernest Dry Cider", "brand" => "Ernest", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.65", "volume" => "473", "alcohol_content" => "6.3", "price_index" => "0.12248733178965737", "country" => "Canada", "url" => "https://www.lcbo.com/en/ernest-dry-cider-466292", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/6/2/466292.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/6/2/466292.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bombardier Ale", "brand" => "Bombardier", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.85", "volume" => "500", "alcohol_content" => "5.5", "price_index" => "0.10363636363636364", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/bombardier-ale-283846", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/8/3/8/283846.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/8/3/8/283846.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hollandia Lager Beer", "brand" => "Hollandia", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.3", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.092", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/hollandia-lager-beer-260307", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/6/0/3/260307.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/6/0/3/260307.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "No Boats On Sunday Cider Original Multi Pack", "brand" => "No Boats on Sunday", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "21.95", "volume" => "2838", "alcohol_content" => "5.0", "price_index" => "0.15468639887244537", "country" => "Canada", "url" => "https://www.lcbo.com/en/no-boats-on-sunday-cider-original-multi-pack-25037", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025037.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025037.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Whitewater Brewing Funky Fresh Kiwi Lime Sour", "brand" => "Whitewater Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "4.6", "price_index" => "0.16775438919018293", "country" => "Canada", "url" => "https://www.lcbo.com/en/whitewater-brewing-funky-fresh-kiwi-lime-sour-24572", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024572.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024572.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rocky Point Lime Lager", "brand" => "Something in the Water Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "355", "alcohol_content" => "5.0", "price_index" => "0.18309859154929578", "country" => "Canada", "url" => "https://www.lcbo.com/en/rocky-point-lime-lager-24567", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024567.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024567.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ernest Apple Strudel", "brand" => "Ernest", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.65", "volume" => "473", "alcohol_content" => "5.8", "price_index" => "0.1330465845301451", "country" => "Canada", "url" => "https://www.lcbo.com/en/ernest-apple-strudel-128009", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/2/8/0/128009.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/2/8/0/128009.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smithwick's Ale", "brand" => "Smithwick's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.85", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.114", "country" => "Ireland", "url" => "https://www.lcbo.com/en/smithwick-s-ale-270439", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/0/4/270439.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/0/4/270439.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Somersby Wild Garden Crushed Apple", "brand" => "Somersby", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15738783180643645", "country" => "Canada", "url" => "https://www.lcbo.com/en/somersby-wild-garden-crushed-apple-25035", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025035.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025035.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Somersby Mango & Lime Cider", "brand" => "Somersby", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15738783180643645", "country" => "Canada", "url" => "https://www.lcbo.com/en/somersby-mango-lime-cider-16136", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/1/016136.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/1/016136.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sapporo Premium Beer", "brand" => "Sapporo", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "19.5", "volume" => "3000", "alcohol_content" => "5.0", "price_index" => "0.13", "country" => "Canada", "url" => "https://www.lcbo.com/en/sapporo-premium-beer-459818", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/9/8/459818.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/9/8/459818.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "St-Ambroise Apricot Wheat Ale", "brand" => "St. Ambroise", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.05", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12896405919661733", "country" => "Canada", "url" => "https://www.lcbo.com/en/st-ambroise-apricot-wheat-ale-338343", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/8/3/338343.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/8/3/338343.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ace Hill Lemon Cayenne Radler", "brand" => "Ace Hill", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "2.85", "volume" => "355", "alcohol_content" => "2.5", "price_index" => "0.3211267605633803", "country" => "Canada", "url" => "https://www.lcbo.com/en/ace-hill-lemon-cayenne-radler-19734", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/7/019734.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/7/019734.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Angry Orchard Hard Cider Crisp Apple", "brand" => "Angry Orchard", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "15.75", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.14788732394366197", "country" => "United States", "url" => "https://www.lcbo.com/en/angry-orchard-hard-cider-crisp-apple-374520", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/7/4/5/374520.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/7/4/5/374520.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stella Artois", "brand" => "Stella Artois", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "19.5", "volume" => "2838", "alcohol_content" => "5.0", "price_index" => "0.13742071881606766", "country" => "Canada", "url" => "https://www.lcbo.com/en/stella-artois-17819", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017819.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017819.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Shiny Apple Ros�", "brand" => "Shiny Apple Cider", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.65", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.11871849081151406", "country" => "Canada", "url" => "https://www.lcbo.com/en/shiny-apple-ros-c-515098", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/5/0/515098.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/5/0/515098.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Dark Taybeh Beer", "brand" => "Taybeh Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.1", "volume" => "330", "alcohol_content" => "6.0", "price_index" => "0.20707070707070704", "country" => "NULL", "url" => "https://www.lcbo.com/en/dark-taybeh-beer-236959", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/3/6/9/236959.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/3/6/9/236959.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Feels Like Friday - Hopped Buckwheat Session Mead", "brand" => "Royal Canadian Mead", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "3.75", "volume" => "355", "alcohol_content" => "5.6", "price_index" => "0.18863179074446682", "country" => "Canada", "url" => "https://www.lcbo.com/en/feels-like-friday-hopped-buckwheat-session-mead-10295", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/2/010295.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/2/010295.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coronita Extra", "brand" => "Corona", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "9.95", "volume" => "1242", "alcohol_content" => "4.6", "price_index" => "0.17415809003710706", "country" => "Mexico", "url" => "https://www.lcbo.com/en/coronita-extra-611566", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/1/5/611566.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/1/5/611566.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Shiny Apple Cider", "brand" => "Shiny Apple Cider", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.65", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.11023859861069162", "country" => "Canada", "url" => "https://www.lcbo.com/en/shiny-apple-cider-407668", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/7/6/407668.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/7/6/407668.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Fruli", "brand" => "Fruli", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "15.65", "volume" => "1320", "alcohol_content" => "4.1", "price_index" => "0.2891722099039173", "country" => "Belgium", "url" => "https://www.lcbo.com/en/fruli-380923", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/8/0/9/380923.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/8/0/9/380923.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Fat Tire Amber Ale", "brand" => "New Belgium", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.1382338591640917", "country" => "Canada", "url" => "https://www.lcbo.com/en/fat-tire-amber-ale-12737", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/7/012737.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/7/012737.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pilsner Urquell", "brand" => "Pilsner Urquell", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.15", "volume" => "500", "alcohol_content" => "4.4", "price_index" => "0.14318181818181816", "country" => "Czechia", "url" => "https://www.lcbo.com/en/pilsner-urquell-255380", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/5/5/3/255380.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/5/5/3/255380.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cowbell Brewing Co. Summer Collection", "brand" => "Cowbell Brewing", "category" => "Beer & Cider", "subcategory" => "Gifts and Samplers", "price" => "19.95", "volume" => "2838", "alcohol_content" => "5.5", "price_index" => "0.12781087833941956", "country" => "Canada", "url" => "https://www.lcbo.com/en/cowbell-brewing-co-summer-collection-25818", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/8/025818.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/8/025818.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cowbell Brewing Co. Absent Landlord", "brand" => "Cowbell Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.3", "price_index" => "0.13363117794886115", "country" => "Canada", "url" => "https://www.lcbo.com/en/cowbell-brewing-co-absent-landlord-469981", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/9/9/469981.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/9/9/469981.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Carlsberg", "brand" => "Carlsberg", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.8", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.11199999999999999", "country" => "Denmark", "url" => "https://www.lcbo.com/en/carlsberg-73809", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/7/3/8/073809.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/7/3/8/073809.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Omnipollo Zodiak IPA", "brand" => "Omnipollo", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "6.2", "price_index" => "0.13469276410011594", "country" => "Canada", "url" => "https://www.lcbo.com/en/omnipollo-zodiak-ipa-518795", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/8/7/518795.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/8/7/518795.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rogue Dead Guy Ale", "brand" => "Rogue", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.8", "price_index" => "0.10726277826141027", "country" => "United States", "url" => "https://www.lcbo.com/en/rogue-dead-guy-ale-122853", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/2/2/8/122853.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/2/2/8/122853.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Somersby Mixer Pack", "brand" => "Somersby", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "19.85", "volume" => "2838", "alcohol_content" => "4.5", "price_index" => "0.15543027170934148", "country" => "Canada", "url" => "https://www.lcbo.com/en/somersby-mixer-pack-25086", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025086.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025086.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Growers Cider Stone Fruit", "brand" => "Growers", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14587737843551796", "country" => "Canada", "url" => "https://www.lcbo.com/en/growers-cider-stone-fruit-568436", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/8/4/568436.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/8/4/568436.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Modelo Especial", "brand" => "Modelo", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "16.95", "volume" => "2130", "alcohol_content" => "4.5", "price_index" => "0.17683881064162754", "country" => "Mexico", "url" => "https://www.lcbo.com/en/modelo-especial-418590", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/8/5/418590.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/8/5/418590.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Paulaner Hefe-Weissbier", "brand" => "Paulaner", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "500", "alcohol_content" => "5.5", "price_index" => "0.11818181818181818", "country" => "Germany", "url" => "https://www.lcbo.com/en/paulaner-hefe-weissbier-337881", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/7/8/337881.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/7/8/337881.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "No Boats on Sunday Cider", "brand" => "No Boats On Sunday", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "4.95", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.198", "country" => "Canada", "url" => "https://www.lcbo.com/en/no-boats-on-sunday-cider-568287", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/8/2/568287.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/8/2/568287.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kilkenny Irish Ale", "brand" => "Kilkenny", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "11.65", "volume" => "2000", "alcohol_content" => "4.3", "price_index" => "0.13546511627906976", "country" => "Ireland", "url" => "https://www.lcbo.com/en/kilkenny-irish-ale-442731", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/2/7/442731.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/2/7/442731.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "KONA BIG WAVE GOLDEN ALE", "brand" => "Kona Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "16.9", "volume" => "2130", "alcohol_content" => "4.3", "price_index" => "0.1845179604760345", "country" => "United States", "url" => "https://www.lcbo.com/en/kona-big-wave-golden-ale-497339", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/7/3/497339.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/7/3/497339.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lonetree Authentic Dry Cider", "brand" => "Lonetree", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.6", "price_index" => "0.11137118695258233", "country" => "Canada", "url" => "https://www.lcbo.com/en/lonetree-authentic-dry-cider-127787", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/2/7/7/127787.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/2/7/7/127787.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Amsterdam Hazii Imperial IPA", "brand" => "Amsterdam", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "9.5", "price_index" => "0.08790475130744409", "country" => "Canada", "url" => "https://www.lcbo.com/en/amsterdam-hazii-imperial-ipa-20427", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/4/020427.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/4/020427.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Westmalle Tripel", "brand" => "Westmalle", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.35", "volume" => "330", "alcohol_content" => "9.5", "price_index" => "0.138755980861244", "country" => "Belgium", "url" => "https://www.lcbo.com/en/westmalle-tripel-676577", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/6/5/676577.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/6/5/676577.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Reinhart's Red Apple Light Cider", "brand" => "Reinhart", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.15", "volume" => "473", "alcohol_content" => "3.8", "price_index" => "0.17525314342939802", "country" => "Canada", "url" => "https://www.lcbo.com/en/reinhart-s-red-apple-light-cider-497651", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/7/6/497651.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/7/6/497651.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Corona Extra", "brand" => "Corona", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "16.5", "volume" => "1980", "alcohol_content" => "4.6", "price_index" => "0.18115942028985507", "country" => "Canada", "url" => "https://www.lcbo.com/en/corona-extra-17818", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017818.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017818.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "West Avenue Cider Heritage Dry", "brand" => "West Avenue Cider", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.8", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.12359733289965848", "country" => "Canada", "url" => "https://www.lcbo.com/en/west-avenue-cider-heritage-dry-11172", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/1/011172.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/1/011172.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Meuse Brewing Company Saison De La Meuse", "brand" => "Meuse Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.75", "volume" => "330", "alcohol_content" => "5.0", "price_index" => "0.16666666666666666", "country" => "Canada", "url" => "https://www.lcbo.com/en/meuse-brewing-company-saison-de-la-meuse-16429", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/4/016429.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/4/016429.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Gaffel Kolsch", "brand" => "Gaffel", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.0", "volume" => "500", "alcohol_content" => "4.8", "price_index" => "0.125", "country" => "Germany", "url" => "https://www.lcbo.com/en/gaffel-kolsch-430769", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/3/0/7/430769.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/3/0/7/430769.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Erdinger Weissbier", "brand" => "Erdinger", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.8", "volume" => "500", "alcohol_content" => "5.2", "price_index" => "0.14615384615384613", "country" => "Germany", "url" => "https://www.lcbo.com/en/erdinger-weissbier-201715", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/0/1/7/201715.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/0/1/7/201715.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Heineken", "brand" => "Heineken", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "15.95", "volume" => "1980", "alcohol_content" => "5.0", "price_index" => "0.1611111111111111", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/heineken-18", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/0/0/0/000018.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/0/0/0/000018.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Weihenstephaner Hefeweissbier", "brand" => "Weihenstephaner", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.3", "volume" => "500", "alcohol_content" => "5.6", "price_index" => "0.15357142857142858", "country" => "Germany", "url" => "https://www.lcbo.com/en/weihenstephaner-hefeweissbier-75291", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/7/5/2/075291.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/7/5/2/075291.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Left Field Brewery Bang Bang Dry Hopped Sour", "brand" => "Left Field Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.8", "volume" => "355", "alcohol_content" => "5.3", "price_index" => "0.20196651607759766", "country" => "Canada", "url" => "https://www.lcbo.com/en/left-field-brewery-bang-bang-dry-hopped-sour-10869", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/8/010869.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/8/010869.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Henderson's Best", "brand" => "Henderson Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.13069383048241398", "country" => "Canada", "url" => "https://www.lcbo.com/en/henderson-s-best-513044", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/3/0/513044.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/3/0/513044.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ardiel Cider House Big John Lightly Hopped Cider", "brand" => "Ardiel Cider", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.65", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.11871849081151406", "country" => "Canada", "url" => "https://www.lcbo.com/en/ardiel-cider-house-big-john-lightly-hopped-cider-25041", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025041.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025041.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Creemore Session IPA", "brand" => "Creemore Springs", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.1", "price_index" => "0.14094432699083864", "country" => "Canada", "url" => "https://www.lcbo.com/en/creemore-springs-boundless-ipa-698415", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/8/4/698415.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/8/4/698415.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Adnams Ghost Ship Pale Ale 0.5%", "brand" => "Adnams", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "9.95", "volume" => "1320", "alcohol_content" => "0.5", "price_index" => "1.5075757575757573", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/adnams-ghost-ship-pale-ale-0-5-18717", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/7/018717.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/7/018717.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Duntroon Cider House Empire Extra Dry Cider", "brand" => "Duntrool", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.95", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.1518354795310398", "country" => "Canada", "url" => "https://www.lcbo.com/en/duntroon-cider-house-empire-extra-dry-cider-19974", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019974.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019974.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Clausthaler Premium Non Alcoholic", "brand" => "Clausthaler", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "2.4", "volume" => "500", "alcohol_content" => "0.01", "price_index" => "47.99999999999999", "country" => "Germany", "url" => "https://www.lcbo.com/en/clausthaler-premium-non-alcoholic-589549", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/8/9/5/589549.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/8/9/5/589549.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Eden Grove Hibiscus Blossom Cider", "brand" => "Eden Grove", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.55", "volume" => "473", "alcohol_content" => "5.4", "price_index" => "0.13898676689374362", "country" => "Canada", "url" => "https://www.lcbo.com/en/eden-grove-hibiscus-blossom-cider-15492", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015492.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015492.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Creemore Springs Premium Lager", "brand" => "Creemore Springs", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "19.25", "volume" => "2838", "alcohol_content" => "5.0", "price_index" => "0.13565891472868216", "country" => "Canada", "url" => "https://www.lcbo.com/en/creemore-springs-premium-lager-541243", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/1/2/541243.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/1/2/541243.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cracked Canoe", "brand" => "Cracked Canoe", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "16.95", "volume" => "2838", "alcohol_content" => "3.5", "price_index" => "0.17064331017819387", "country" => "Canada", "url" => "https://www.lcbo.com/en/cracked-canoe-19894", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/8/019894.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/8/019894.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Strongbow Gold Apple Cider", "brand" => "Strongbow", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.1", "volume" => "440", "alcohol_content" => "4.5", "price_index" => "0.15656565656565657", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/strongbow-gold-apple-cider-413849", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/3/8/413849.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/3/8/413849.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "No Boats On Sunday Pear Cider", "brand" => "No Boats on Sunday", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.85", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1627906976744186", "country" => "Canada", "url" => "https://www.lcbo.com/en/no-boats-on-sunday-pear-cider-25036", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025036.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025036.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Jam up the Mash", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.14839811351439255", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-jam-up-the-mash-549873", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/9/8/549873.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/9/8/549873.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Okanagan Apple Cider", "brand" => "Okanagan Cider Company", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13742071881606763", "country" => "Canada", "url" => "https://www.lcbo.com/en/okanagan-apple-cider-514851", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/4/8/514851.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/4/8/514851.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Strongbow Cider", "brand" => "Strongbow", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "25.0", "volume" => "3520", "alcohol_content" => "5.3", "price_index" => "0.13400514579759862", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/strongbow-cider-184796", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/8/4/7/184796.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/8/4/7/184796.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Church Key Brewing West Coast Pale Ale", "brand" => "Church Key", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "6.45", "volume" => "650", "alcohol_content" => "6.2", "price_index" => "0.1600496277915633", "country" => "Canada", "url" => "https://www.lcbo.com/en/church-key-brewing-west-coast-pale-ale-18315", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018315.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018315.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ace Hill Carb Free", "brand" => "Ace Hill", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "9.95", "volume" => "1420", "alcohol_content" => "4.0", "price_index" => "0.17517605633802813", "country" => "Canada", "url" => "https://www.lcbo.com/en/ace-hill-carb-free-24826", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024826.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024826.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ace Hill Grapefruit Radler", "brand" => "Ace Hill", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "2.85", "volume" => "355", "alcohol_content" => "2.5", "price_index" => "0.3211267605633803", "country" => "Canada", "url" => "https://www.lcbo.com/en/ace-hill-grapefruit-radler-19656", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/6/019656.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/6/019656.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hofbrau Original Lager", "brand" => "Hofbrau", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.7", "volume" => "500", "alcohol_content" => "5.1", "price_index" => "0.1450980392156863", "country" => "Germany", "url" => "https://www.lcbo.com/en/hofbrau-original-lager-319202", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/1/9/2/319202.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/1/9/2/319202.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Flying Monkeys Juicy Ass", "brand" => "Flying Monkeys", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.11871849081151406", "country" => "Canada", "url" => "https://www.lcbo.com/en/flying-monkeys-juicy-ass-508572", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/0/8/5/508572.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/0/8/5/508572.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Longslice Sky Bison APA", "brand" => "Longslice Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.3", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1395348837209302", "country" => "Canada", "url" => "https://www.lcbo.com/en/longslice-sky-bison-apa-26065", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026065.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026065.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Erdinger Weissbier", "brand" => "Erdinger", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "500", "alcohol_content" => "5.3", "price_index" => "0.12830188679245283", "country" => "Germany", "url" => "https://www.lcbo.com/en/erdinger-weissbier-541375", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/1/3/541375.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/1/3/541375.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Big Rig Gold", "brand" => "Big Rig Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/big-rig-gold-398255", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/9/8/2/398255.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/9/8/2/398255.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Karlovacko Beer", "brand" => "Karlovacko", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.55", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.102", "country" => "Croatia", "url" => "https://www.lcbo.com/en/karlovacko-beer-243725", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/4/3/7/243725.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/4/3/7/243725.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Liberty Village Dry Cider", "brand" => "Liberty Village", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.55", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.16678412027249237", "country" => "Canada", "url" => "https://www.lcbo.com/en/liberty-village-dry-cider-635227", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/5/2/635227.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/5/2/635227.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stiegl Bier", "brand" => "Stiegl", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "500", "alcohol_content" => "4.9", "price_index" => "0.1326530612244898", "country" => "Austria", "url" => "https://www.lcbo.com/en/stiegl-bier-676106", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/6/1/676106.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/6/1/676106.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Holsten Festbock", "brand" => "Holsten", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.8", "volume" => "500", "alcohol_content" => "7.0", "price_index" => "0.08", "country" => "Germany", "url" => "https://www.lcbo.com/en/holsten-festbock-334276", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/4/2/334276.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/4/2/334276.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Erdinger Dunkel Weissbier", "brand" => "Erdinger", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.9", "volume" => "500", "alcohol_content" => "5.6", "price_index" => "0.1392857142857143", "country" => "Germany", "url" => "https://www.lcbo.com/en/erdinger-dunkel-weissbier-201723", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/0/1/7/201723.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/0/1/7/201723.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Eden Grove Perfect Pear", "brand" => "Eden Grove", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.4", "price_index" => "0.13507164669955368", "country" => "Canada", "url" => "https://www.lcbo.com/en/eden-grove-perfect-pear-457358", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/7/3/457358.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/7/3/457358.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Somersby Red Rhubarb Cider", "brand" => "Somersby", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15738783180643645", "country" => "Canada", "url" => "https://www.lcbo.com/en/somersby-red-rhubarb-cider-16003", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/0/016003.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/0/016003.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Nature Of Things Dry Cider", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.65", "volume" => "473", "alcohol_content" => "5.8", "price_index" => "0.1330465845301451", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-nature-of-things-dry-cider-13571", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/5/013571.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/5/013571.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sierra Nevada Pale Ale", "brand" => "Sierra Nevada", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.6", "price_index" => "0.1302476593174268", "country" => "United States", "url" => "https://www.lcbo.com/en/sierra-nevada-pale-ale-497487", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/7/4/497487.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/7/4/497487.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Original Draught", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "16.5", "volume" => "2838", "alcohol_content" => "5.0", "price_index" => "0.11627906976744186", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-original-draught-383059", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/8/3/0/383059.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/8/3/0/383059.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lake of the Woods Sneaky Peach", "brand" => "Lake Of The Woods", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.15856236786469344", "country" => "Canada", "url" => "https://www.lcbo.com/en/lake-of-the-woods-sneaky-peach-16770", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/7/016770.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/7/016770.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Okanagan Harvest Pear", "brand" => "Okanagan Cider Company", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13742071881606763", "country" => "Canada", "url" => "https://www.lcbo.com/en/okanagan-harvest-pear-15299", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/2/015299.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/2/015299.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Old Jock Russian Imperial Stout 20 Year Old", "brand" => "Old Jock", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "14.7", "volume" => "330", "alcohol_content" => "8.0", "price_index" => "0.5568181818181818", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/old-jock-russian-imperial-stout-20-year-old-25251", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/2/025251.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/2/025251.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ardiel Cider House Dry Cider", "brand" => "Ardiel Cider House", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.65", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.12861169837914024", "country" => "Canada", "url" => "https://www.lcbo.com/en/ardiel-cider-house-dry-cider-497214", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/7/2/497214.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/7/2/497214.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Super Bock", "brand" => "Super Bock", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "12.95", "volume" => "1980", "alcohol_content" => "5.8", "price_index" => "0.11276558690351794", "country" => "Portugal", "url" => "https://www.lcbo.com/en/super-bock-335059", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/5/0/335059.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/5/0/335059.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cool Beer Blonde Lager", "brand" => "Cool Beer", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "6.5", "volume" => "1420", "alcohol_content" => "5.0", "price_index" => "0.09154929577464789", "country" => "Canada", "url" => "https://www.lcbo.com/en/cool-beer-blonde-lager-10583", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/5/010583.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/5/010583.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Guava Gose", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "4.9", "price_index" => "0.16179833455580964", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-guava-gose-20219", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/2/020219.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/2/020219.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "PEI Brewing Gahan Blueberry Ale", "brand" => "PEI Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.1526896875734085", "country" => "Canada", "url" => "https://www.lcbo.com/en/pei-brewing-gahan-blueberry-ale-489351", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/9/3/489351.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/9/3/489351.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Railway City Orange Creamsic Ale", "brand" => "Railway City", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.15415785764622975", "country" => "Canada", "url" => "https://www.lcbo.com/en/railway-city-orange-creamsic-ale-479030", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/9/0/479030.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/9/0/479030.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Labatt Blue", "brand" => "Labatt", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.0", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.08456659619450316", "country" => "Canada", "url" => "https://www.lcbo.com/en/labatt-blue-696468", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/6/4/696468.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/6/4/696468.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Left Field Brewery Squeeze Play Rainbow Sherbet", "brand" => "Left Field", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "355", "alcohol_content" => "4.8", "price_index" => "0.23180751173708922", "country" => "Canada", "url" => "https://www.lcbo.com/en/left-field-brewery-squeeze-play-rainbow-sherbet-20835", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/8/020835.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/8/020835.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lezajsk Beer", "brand" => "Lezajsk", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.55", "volume" => "500", "alcohol_content" => "5.5", "price_index" => "0.09272727272727273", "country" => "Poland", "url" => "https://www.lcbo.com/en/lezajsk-beer-540468", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/0/4/540468.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/0/4/540468.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ebb & Flow Raspberry Lemon Yuzu", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.15856236786469344", "country" => "Canada", "url" => "https://www.lcbo.com/en/ebb-flow-raspberry-lemon-yuzu-20431", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/4/020431.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/4/020431.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brasserie Tuque De Broue Tuque Doree", "brand" => "Brasserie Tuque de Broue", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.17618040873854826", "country" => "Canada", "url" => "https://www.lcbo.com/en/brasserie-tuque-de-broue-tuque-doree-461665", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/1/6/461665.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/1/6/461665.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Budweiser", "brand" => "Budweiser", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "43.95", "volume" => "8184", "alcohol_content" => "5.0", "price_index" => "0.10740469208211144", "country" => "Canada", "url" => "https://www.lcbo.com/en/budweiser-902635", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/2/6/902635.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/2/6/902635.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Puppers Premium Lager", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.3", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1395348837209302", "country" => "Canada", "url" => "https://www.lcbo.com/en/puppers-premium-lager-19605", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/6/019605.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/6/019605.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Manitoulin Brewing Cup & Saucer", "brand" => "Manitoulin Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13742071881606763", "country" => "Canada", "url" => "https://www.lcbo.com/en/manitoulin-brewing-cup-saucer-546044", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/6/0/546044.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/6/0/546044.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Midtown Brewing County Kolsch", "brand" => "Midtown Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.1644350481559784", "country" => "Canada", "url" => "https://www.lcbo.com/en/midtown-brewing-county-kolsch-16425", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/4/016425.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/4/016425.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bayside Brewing Long Pond Lager", "brand" => "Bayside Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13742071881606763", "country" => "Canada", "url" => "https://www.lcbo.com/en/bayside-brewing-long-pond-lager-450619", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/0/6/450619.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/0/6/450619.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "St-Ambroise IPA Mix Pack", "brand" => "St-Ambroise", "category" => "Beer & Cider", "subcategory" => "Gifts and Samplers", "price" => "11.95", "volume" => "1892", "alcohol_content" => "7.0", "price_index" => "0.09022953790395649", "country" => "Canada", "url" => "https://www.lcbo.com/en/st-ambroise-ipa-mix-pack-25020", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025020.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025020.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hofbrau Dunkel", "brand" => "Hofbrau", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.45", "volume" => "500", "alcohol_content" => "5.5", "price_index" => "0.12545454545454546", "country" => "Germany", "url" => "https://www.lcbo.com/en/hofbrau-dunkel-415950", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/5/9/415950.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/5/9/415950.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "MacKinnon Brewing Red Fox Ale", "brand" => "MacKinnon Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.2", "price_index" => "0.1686298197926105", "country" => "Canada", "url" => "https://www.lcbo.com/en/mackinnon-brewing-red-fox-ale-538447", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/8/4/538447.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/8/4/538447.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lake of the Woods Lakeside Kolsch", "brand" => "Lake Of The Woods", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14587737843551796", "country" => "Canada", "url" => "https://www.lcbo.com/en/lake-of-the-woods-lakeside-kolsch-569913", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/9/9/569913.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/9/9/569913.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Chill Street Afternoon Delight Cider", "brand" => "Chill Street", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "4.1", "volume" => "473", "alcohol_content" => "6.9", "price_index" => "0.12562429144835616", "country" => "Canada", "url" => "https://www.lcbo.com/en/chill-street-afternoon-delight-cider-19965", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019965.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019965.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cowbell Brewing Co. Bobcat", "brand" => "Cowbell Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.12877186238708438", "country" => "Canada", "url" => "https://www.lcbo.com/en/cowbell-brewing-co-doc-perdue-s-bobcat-493247", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/3/2/493247.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/3/2/493247.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Four Fathers The Local Light Lager", "brand" => "Four Fathers Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.1559196617336152", "country" => "Canada", "url" => "https://www.lcbo.com/en/four-fathers-the-local-light-lager-20061", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020061.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020061.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Michelob Ultra", "brand" => "Michelob", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.1", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.1638477801268499", "country" => "Canada", "url" => "https://www.lcbo.com/en/michelob-ultra-284562", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/8/4/5/284562.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/8/4/5/284562.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Moosehead Lager", "brand" => "Moosehead", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "45.5", "volume" => "8184", "alcohol_content" => "5.0", "price_index" => "0.11119257086999021", "country" => "Canada", "url" => "https://www.lcbo.com/en/moosehead-lager-911412", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/1/1/4/911412.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/1/1/4/911412.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Canadian", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "31.5", "volume" => "5325", "alcohol_content" => "5.0", "price_index" => "0.11830985915492957", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-canadian-247338", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/4/7/3/247338.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/4/7/3/247338.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Iron Maiden Trooper Ale", "brand" => "Iron Maiden", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.05", "volume" => "500", "alcohol_content" => "4.7", "price_index" => "0.12978723404255318", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/iron-maiden-trooper-ale-522615", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/2/2/6/522615.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/2/2/6/522615.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hoegaarden", "brand" => "Hoegaarden", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "15.95", "volume" => "1980", "alcohol_content" => "5.0", "price_index" => "0.1611111111111111", "country" => "Belgium", "url" => "https://www.lcbo.com/en/hoegaarden-554089", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/4/0/554089.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/4/0/554089.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "31.5", "volume" => "5325", "alcohol_content" => "4.0", "price_index" => "0.14788732394366197", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-616920", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/6/9/616920.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/6/9/616920.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Thornbury Craft X Tragically Hip Road Apples Cider", "brand" => "Thornbury", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.85", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.15652951699463324", "country" => "Canada", "url" => "https://www.lcbo.com/en/thornbury-craft-x-tragically-hip-road-apples-cider-21262", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/2/021262.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/2/021262.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Forked River Capital Blonde Ale", "brand" => "Forked River Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.14619225405964642", "country" => "Canada", "url" => "https://www.lcbo.com/en/forked-river-capital-blonde-ale-530303", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/0/3/530303.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/0/3/530303.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "The Hamilton Brewery Blue Collar Pale Ale", "brand" => "The Hamilton Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.12492792619642513", "country" => "Canada", "url" => "https://www.lcbo.com/en/the-hamilton-brewery-blue-collar-pale-ale-440354", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/0/3/440354.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/0/3/440354.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Great Lakes Brewery  Robohop Imperial IPA", "brand" => "Great Lakes Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.5", "volume" => "473", "alcohol_content" => "8.5", "price_index" => "0.11192637731625418", "country" => "Canada", "url" => "https://www.lcbo.com/en/great-lakes-brewery-robohop-imperial-ipa-498576", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/8/5/498576.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/8/5/498576.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Canadian", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "16.5", "volume" => "2838", "alcohol_content" => "5.0", "price_index" => "0.11627906976744186", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-canadian-300699", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/0/0/6/300699.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/0/0/6/300699.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Mad Tom IPA", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.6", "volume" => "473", "alcohol_content" => "6.4", "price_index" => "0.11892177589852009", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-mad-tom-ipa-288837", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/8/8/8/288837.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/8/8/8/288837.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Thornbury Craft Wild Blueberry Elderflower Cider", "brand" => "Thornbury", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.75", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.15856236786469344", "country" => "Canada", "url" => "https://www.lcbo.com/en/thornbury-craft-wild-blueberry-elderflower-cider-688671", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/8/8/6/688671.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/8/8/6/688671.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cowbell Brewing Co. Original Cider", "brand" => "Cowbell Brewing", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.6", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1522198731501057", "country" => "Canada", "url" => "https://www.lcbo.com/en/cowbell-brewing-co-original-cider-24890", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024890.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024890.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Indie Ale House Instigator IPA", "brand" => "Indie Ale House", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.85", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.1252236135957066", "country" => "Canada", "url" => "https://www.lcbo.com/en/indie-ale-house-instigator-ipa-16080", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/0/016080.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/0/016080.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Cream Ale", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "28.95", "volume" => "4260", "alcohol_content" => "5.0", "price_index" => "0.13591549295774646", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-cream-ale-10325", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/3/010325.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/3/010325.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cassel Brewery Caboose IPA", "brand" => "Cassel Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "6.4", "price_index" => "0.13048361522198731", "country" => "Canada", "url" => "https://www.lcbo.com/en/cassel-brewery-caboose-ipa-569822", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/9/8/569822.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/9/8/569822.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Flying Monkeys Velvet Bubble Lord Blueberry Sour", "brand" => "Flying Monkeys", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.13918252290345315", "country" => "Canada", "url" => "https://www.lcbo.com/en/flying-monkeys-blueberry-sour-25664", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/6/025664.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/6/025664.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kozel Beer", "brand" => "Kozel", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.55", "volume" => "500", "alcohol_content" => "4.7", "price_index" => "0.10851063829787233", "country" => "Czechia", "url" => "https://www.lcbo.com/en/kozel-beer-614909", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/4/9/614909.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/4/9/614909.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "James Ready 5.5", "brand" => "James Ready", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "11.95", "volume" => "2838", "alcohol_content" => "5.5", "price_index" => "0.07655839579729642", "country" => "Canada", "url" => "https://www.lcbo.com/en/james-ready-5-5-140509", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/4/0/5/140509.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/4/0/5/140509.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Wasaga Beach One Cerveza", "brand" => "Wasaga Beach", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.15", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.14799154334038053", "country" => "Canada", "url" => "https://www.lcbo.com/en/wasaga-beach-one-cerveza-468850", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/8/8/468850.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/8/8/468850.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Michelob Ultra", "brand" => "Michelob", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "46.95", "volume" => "8184", "alcohol_content" => "4.0", "price_index" => "0.1434200879765396", "country" => "Canada", "url" => "https://www.lcbo.com/en/michelob-ultra-380071", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/8/0/0/380071.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/8/0/0/380071.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Original Organic Lager", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "15.25", "volume" => "2046", "alcohol_content" => "4.2", "price_index" => "0.17746590327235487", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-original-organic-lager-84210", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/8/4/2/084210.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/8/4/2/084210.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bellwoods Brewery Jelly King", "brand" => "Bellwoods Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "6.5", "volume" => "500", "alcohol_content" => "5.6", "price_index" => "0.23214285714285718", "country" => "Canada", "url" => "https://www.lcbo.com/en/bellwoods-brewery-jelly-king-14280", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/2/014280.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/2/014280.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Innis & Gunn Lager", "brand" => "Innis & Gunn", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.1", "volume" => "500", "alcohol_content" => "4.6", "price_index" => "0.13478260869565217", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/innis-gunn-lager-377275", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/7/7/2/377275.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/7/7/2/377275.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lake of Bays Off the Grid Hazy Pale Ale", "brand" => "Lake of Bays Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.15968692366515225", "country" => "Canada", "url" => "https://www.lcbo.com/en/lake-of-bays-off-the-grid-hazy-pale-ale-15823", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015823.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015823.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Redline Brewhouse Rainbow in the Dark IPA", "brand" => "Redline Brewhouse", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "6.6", "price_index" => "0.1137164456403357", "country" => "Canada", "url" => "https://www.lcbo.com/en/redline-brewhouse-rainbow-in-the-dark-ipa-15878", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015878.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015878.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cameron's Captain's Log Lager", "brand" => "Cameron's", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.75", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.11627906976744184", "country" => "Canada", "url" => "https://www.lcbo.com/en/cameron-s-captain-s-log-lager-243741", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/4/3/7/243741.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/4/3/7/243741.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Craft Lager", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.14975334742776603", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-craft-lager-175810", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/7/5/8/175810.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/7/5/8/175810.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Left Field Brewery Pina Power IPA", "brand" => "Left Field Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.8", "volume" => "355", "alcohol_content" => "6.0", "price_index" => "0.1784037558685446", "country" => "Canada", "url" => "https://www.lcbo.com/en/left-field-brewing-pina-power-ipa-26986", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/9/026986.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/9/026986.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Carling Light", "brand" => "Carling", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "40.95", "volume" => "8184", "alcohol_content" => "4.0", "price_index" => "0.125091642228739", "country" => "Canada", "url" => "https://www.lcbo.com/en/carling-light-921122", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/2/1/1/921122.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/2/1/1/921122.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "43.95", "volume" => "8184", "alcohol_content" => "4.0", "price_index" => "0.1342558651026393", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-908616", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/8/6/908616.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/8/6/908616.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Strawberry Pina Colada Sour", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.75", "volume" => "473", "alcohol_content" => "5.6", "price_index" => "0.17932648746602237", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-strawberry-pina-colada-sour-26064", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026064.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026064.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Miller Genuine Draft", "brand" => "Miller", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "14.5", "volume" => "2130", "alcohol_content" => "4.7", "price_index" => "0.14484067525721706", "country" => "Canada", "url" => "https://www.lcbo.com/en/miller-genuine-draft-544833", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/4/8/544833.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/4/8/544833.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bench Brewing Berry Fields Sour Ale", "brand" => "Bench Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "5.4", "price_index" => "0.14681700728212355", "country" => "Canada", "url" => "https://www.lcbo.com/en/bench-brewing-berry-fields-sour-ale-19677", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/6/019677.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/6/019677.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Summer Mix Pack 2022", "brand" => "Beau's Brewery", "category" => "Beer & Cider", "subcategory" => "Gifts and Samplers", "price" => "19.95", "volume" => "2838", "alcohol_content" => "5.0", "price_index" => "0.1405919661733615", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-summer-mix-pack-2022-27501", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/5/027501.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/5/027501.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Side Launch Easy Breezy Light Lager", "brand" => "Side Launch Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "10.4", "volume" => "1420", "alcohol_content" => "3.8", "price_index" => "0.1927353595255745", "country" => "Canada", "url" => "https://www.lcbo.com/en/side-launch-easy-breezy-light-lager-25258", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/2/025258.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/2/025258.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Fresh Ideas Dry Hop Hazy IPA", "brand" => "Bell City Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.3", "price_index" => "0.11577569717104602", "country" => "Canada", "url" => "https://www.lcbo.com/en/fresh-ideas-dry-hop-hazy-ipa-22220", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022220.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022220.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Laker Premium Lager", "brand" => "Laker", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.0", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.08456659619450316", "country" => "Canada", "url" => "https://www.lcbo.com/en/laker-premium-lager-141739", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/4/1/7/141739.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/4/1/7/141739.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Perth Brewery Razmataz Sour", "brand" => "Perth Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.18557669720460418", "country" => "Canada", "url" => "https://www.lcbo.com/en/perth-brewery-razmataz-sour-26695", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/6/026695.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/6/026695.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nickel Brook No Bad Daze Easy-Goin' Lager", "brand" => "Nickel Brook", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.5", "volume" => "473", "alcohol_content" => "4.3", "price_index" => "0.12291656423619648", "country" => "Canada", "url" => "https://www.lcbo.com/en/nickel-brook-no-bad-daze-dry-hopped-lager-18773", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/7/018773.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/7/018773.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rouge River Brewery Holy Trinity IPA", "brand" => "Rouge River Brewing Company", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.5", "volume" => "473", "alcohol_content" => "6.8", "price_index" => "0.13990797164531774", "country" => "Canada", "url" => "https://www.lcbo.com/en/rouge-river-brewery-holy-trinity-ipa-21944", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/9/021944.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/9/021944.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Old Flame Brunette Munich Dunkel", "brand" => "Old Flame", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.6", "price_index" => "0.14937034653920397", "country" => "Canada", "url" => "https://www.lcbo.com/en/old-flame-brunette-munich-dunkel-10609", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/6/010609.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/6/010609.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beaches Brewing Beach Bound Lager", "brand" => "Beaches Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.3", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15503875968992248", "country" => "Canada", "url" => "https://www.lcbo.com/en/beaches-brewing-beach-bound-lager-15690", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/6/015690.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/6/015690.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hoegaarden", "brand" => "Hoegaarden", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "500", "alcohol_content" => "4.9", "price_index" => "0.13877551020408163", "country" => "Belgium", "url" => "https://www.lcbo.com/en/hoegaarden-667808", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/7/8/667808.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/7/8/667808.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Laker Ice", "brand" => "Laker", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "9.95", "volume" => "2130", "alcohol_content" => "5.5", "price_index" => "0.08493384549722577", "country" => "Canada", "url" => "https://www.lcbo.com/en/laker-ice-10229", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/2/010229.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/2/010229.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Broadhead Brewing Pilsner", "brand" => "Broadhead Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.3", "price_index" => "0.1376201683353943", "country" => "Canada", "url" => "https://www.lcbo.com/en/broadhead-brewing-pilsner-17127", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/1/017127.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/1/017127.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Light", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "43.95", "volume" => "8184", "alcohol_content" => "4.0", "price_index" => "0.1342558651026393", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-light-906586", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/6/5/906586.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/6/5/906586.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Miller High Life", "brand" => "Miller", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "49.95", "volume" => "10650", "alcohol_content" => "4.6", "price_index" => "0.10195958358848746", "country" => "Canada", "url" => "https://www.lcbo.com/en/miller-high-life-24811", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024811.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024811.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Palm Breweries Rodenbach Grand Cru", "brand" => "Rodenbach", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.05", "volume" => "330", "alcohol_content" => "6.0", "price_index" => "0.15404040404040403", "country" => "Belgium", "url" => "https://www.lcbo.com/en/palm-breweries-rodenbach-grand-cru-492207", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/2/2/492207.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/2/2/492207.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Fruit Market Mixed Pack", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Gifts and Samplers", "price" => "22.95", "volume" => "2838", "alcohol_content" => "5.0", "price_index" => "0.16173361522198731", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-fruit-market-mixed-pack-25389", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/3/025389.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/3/025389.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hockley Dark", "brand" => "Hockley Valley Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12473572938689217", "country" => "Canada", "url" => "https://www.lcbo.com/en/hockley-dark-34660", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/3/4/6/034660.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/3/4/6/034660.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lake of the Woods Lakeside Kolsch", "brand" => "Lake Of The Woods", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "19.75", "volume" => "2838", "alcohol_content" => "5.0", "price_index" => "0.13918252290345312", "country" => "Canada", "url" => "https://www.lcbo.com/en/lake-of-the-woods-lakeside-kolsch-20045", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020045.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020045.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeping Giant Mr. Canoehead", "brand" => "Sleeping Giant", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.1", "price_index" => "0.13887161629979689", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeping-giant-mr-canoehead-570028", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/0/0/570028.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/0/0/570028.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Peroni Nastro Azzurro", "brand" => "Peroni Nastro Azzuro", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.35", "volume" => "500", "alcohol_content" => "5.1", "price_index" => "0.13137254901960785", "country" => "Italy", "url" => "https://www.lcbo.com/en/peroni-nastro-azzurro-143891", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/4/3/8/143891.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/4/3/8/143891.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Blood Brothers Paradise Lost Guava", "brand" => "Blood Brothers Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "6.5", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.22903453136011276", "country" => "Canada", "url" => "https://www.lcbo.com/en/blood-brothers-paradise-lost-guava-26067", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026067.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026067.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stiegl Grapefruit Radler", "brand" => "Stiegl", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "3.45", "volume" => "500", "alcohol_content" => "2.5", "price_index" => "0.276", "country" => "Austria", "url" => "https://www.lcbo.com/en/stiegl-grapefruit-radler-334052", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/4/0/334052.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/4/0/334052.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Brewery Peach of Mind", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.6", "price_index" => "0.15856236786469347", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-brewery-peach-of-mind-25052", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025052.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025052.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Manitoulin Brewing Killarney Cream Ale", "brand" => "Manitoulin Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.3", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1395348837209302", "country" => "Canada", "url" => "https://www.lcbo.com/en/manitoulin-brewing-killarney-cream-ale-668277", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/8/2/668277.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/8/2/668277.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Perth Brewery Shandy Mac Fierce", "brand" => "Perth Brewery", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "3.3", "volume" => "473", "alcohol_content" => "2.5", "price_index" => "0.2790697674418604", "country" => "Canada", "url" => "https://www.lcbo.com/en/perth-brewery-shandy-mac-fierce-24571", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024571.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024571.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Amsterdam Space Invader IPA", "brand" => "Amsterdam", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.12156448202959833", "country" => "Canada", "url" => "https://www.lcbo.com/en/amsterdam-space-invader-ipa-573576", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/3/5/573576.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/3/5/573576.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Budweiser", "brand" => "Budweiser", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.9", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12262156448202959", "country" => "Canada", "url" => "https://www.lcbo.com/en/budweiser-905976", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/5/9/905976.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/5/9/905976.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Partake Brewing Non-Alcoholic IPA", "brand" => "Partake Brewing", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "2.0", "volume" => "355", "alcohol_content" => "0.3", "price_index" => "1.8779342723004695", "country" => "Canada", "url" => "https://www.lcbo.com/en/partake-brewing-non-alcoholic-ipa-13654", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/6/013654.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/6/013654.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Amsterdam Helles Golden Lager", "brand" => "Amsterdam", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.15", "volume" => "473", "alcohol_content" => "4.9", "price_index" => "0.1359106010268801", "country" => "Canada", "url" => "https://www.lcbo.com/en/amsterdam-helles-golden-lager-24666", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/6/024666.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/6/024666.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Publican House Brewery Yuzu Sour", "brand" => "Publican House Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.19291754756871032", "country" => "Canada", "url" => "https://www.lcbo.com/en/publican-house-brewery-yuzu-sour-24617", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/6/024617.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/6/024617.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "The Napanee Beer Company Mayday! Belgian Wheat Beer", "brand" => "The Napanee Beer Company", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.15968692366515225", "country" => "Canada", "url" => "https://www.lcbo.com/en/the-napanee-beer-company-mayday-belgian-wheat-beer-26080", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026080.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026080.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sawdust City Gnarnia Lil' IPA", "brand" => "Sawdust City Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.2", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.16144532000768788", "country" => "Canada", "url" => "https://www.lcbo.com/en/sawdust-city-gnarnia-lil-ipa-19262", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/2/019262.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/2/019262.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Canadian", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "47.95", "volume" => "8520", "alcohol_content" => "5.0", "price_index" => "0.1125586854460094", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-canadian-905844", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/5/8/905844.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/5/8/905844.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Dark Fruit Gose", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.55", "volume" => "473", "alcohol_content" => "4.9", "price_index" => "0.19631531259438237", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-dark-fruit-gose-25693", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/6/025693.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/6/025693.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Walkerville City Cidery Argyle Apple Cider", "brand" => "Walkerville", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14799154334038053", "country" => "Canada", "url" => "https://www.lcbo.com/en/walkerville-city-cidery-argyle-apple-cider-15173", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015173.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015173.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rickard's Red", "brand" => "Rickard'S Red", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.05", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.12400390307367049", "country" => "Canada", "url" => "https://www.lcbo.com/en/rickard-s-red-16907", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/9/016907.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/9/016907.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Canadian", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "14.25", "volume" => "2046", "alcohol_content" => "5.0", "price_index" => "0.13929618768328444", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-canadian-900621", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/0/6/900621.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/0/6/900621.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Wellington Brewery Imperial Russian Stout", "brand" => "Wellington Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "8.0", "price_index" => "0.10438689217758984", "country" => "Canada", "url" => "https://www.lcbo.com/en/wellington-brewery-imperial-russian-stout-296269", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/9/6/2/296269.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/9/6/2/296269.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Signal Brewing Wave Pale Ale", "brand" => "Signal Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "6.1", "price_index" => "0.13690084220011786", "country" => "Canada", "url" => "https://www.lcbo.com/en/signal-brewing-wave-pale-ale-14625", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/6/014625.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/6/014625.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Caledon Hills Brewing Companyhot August Nights", "brand" => "Caledon Hills", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1416490486257928", "country" => "Canada", "url" => "https://www.lcbo.com/en/caledon-hills-brewing-companyhot-august-nights-26895", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/8/026895.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/8/026895.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nickel Brook Black Light All Night Stout", "brand" => "Nickel Brook", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.2", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15034061545689453", "country" => "Canada", "url" => "https://www.lcbo.com/en/nickel-brook-cheeky-bastard-552687", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/2/6/552687.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/2/6/552687.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rainhard Brewing Armed N' Citra Dry Hopped Pale Ale", "brand" => "Rainhard Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.85", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.15652951699463324", "country" => "Canada", "url" => "https://www.lcbo.com/en/rainhard-brewing-armed-n-citra-dry-hopped-pale-ale-578872", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/8/8/578872.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/8/8/578872.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Market Brewing Co. Roam Hazy IPA", "brand" => "Market Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.1284761749878029", "country" => "Canada", "url" => "https://www.lcbo.com/en/market-brewing-co-roam-hazy-ipa-18321", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018321.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018321.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brickworks Ciderhouse Stadium Island Peach Cider", "brand" => "Brickworks Ciderhouse", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.5", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.1644350481559784", "country" => "Canada", "url" => "https://www.lcbo.com/en/brickworks-ciderhouse-stadium-island-peach-cider-478495", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/8/4/478495.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/8/4/478495.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Grand River Brewing Cliff Dive IPA", "brand" => "Grand River Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.14975334742776603", "country" => "Canada", "url" => "https://www.lcbo.com/en/grand-river-brewing-cliff-dive-ipa-560060", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/0/0/560060.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/0/0/560060.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Corona Extra", "brand" => "Corona", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "4.85", "volume" => "710", "alcohol_content" => "4.6", "price_index" => "0.1484996938150643", "country" => "Canada", "url" => "https://www.lcbo.com/en/corona-extra-22683", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/6/022683.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/6/022683.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cracked Canoe", "brand" => "Cracked Canoe", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "44.95", "volume" => "8520", "alcohol_content" => "3.5", "price_index" => "0.15073775989268945", "country" => "NULL", "url" => "https://www.lcbo.com/en/cracked-canoe-24898", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024898.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024898.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Toboggan Brewing Holy Roller Lager", "brand" => "Toboggan Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.15069047726148171", "country" => "Canada", "url" => "https://www.lcbo.com/en/toboggan-brewing-holy-roller-lager-20046", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020046.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020046.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Furnace Room Brewery Mosaic Pale Ale", "brand" => "Furnace Room Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.1524638152545129", "country" => "Canada", "url" => "https://www.lcbo.com/en/furnace-room-brewery-mosaic-pale-ale-24551", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024551.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024551.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Skeleton Park Amber 6.6", "brand" => "Skeleton Crew Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "6.6", "price_index" => "0.10891152540201166", "country" => "Canada", "url" => "https://www.lcbo.com/en/skeleton-park-amber-6-6-482059", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/2/0/482059.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/2/0/482059.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bobcaygeon Brewing Dockside", "brand" => "Bobcaygeon Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14587737843551796", "country" => "Canada", "url" => "https://www.lcbo.com/en/bobcaygeon-brewing-dockside-485870", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/5/8/485870.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/5/8/485870.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Lug Tread 2.5%", "brand" => "Beau's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "2.5", "price_index" => "0.2832980972515856", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-lug-tread-2-5-17671", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/6/017671.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/6/017671.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sarah Cole Whip Cider", "brand" => "Sarah Cole", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.3", "price_index" => "0.11577569717104602", "country" => "Canada", "url" => "https://www.lcbo.com/en/sarah-cole-whip-cider-618132", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/8/1/618132.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/8/1/618132.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lowenbrau Original", "brand" => "Lowenbrau", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.0", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.08131403480240688", "country" => "Canada", "url" => "https://www.lcbo.com/en/lowenbrau-original-397638", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/9/7/6/397638.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/9/7/6/397638.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Seagram Cider", "brand" => "Seagrams", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.3", "price_index" => "0.11767521640272847", "country" => "Canada", "url" => "https://www.lcbo.com/en/seagram-cider-279539", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/9/5/279539.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/9/5/279539.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Old Milwaukee Ice", "brand" => "Old Milwaukee", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.0", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.0768787238131847", "country" => "Canada", "url" => "https://www.lcbo.com/en/old-milwaukee-ice-15401", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015401.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015401.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Niagara Cider Rose Gold Berry Soaked Cider", "brand" => "Niagara Cider Company", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.95", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.13918252290345315", "country" => "Canada", "url" => "https://www.lcbo.com/en/niagara-cider-rose-gold-berry-soaked-cider-16150", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/1/016150.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/1/016150.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Tiger Beer", "brand" => "Tiger", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.15", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.126", "country" => "Singapore", "url" => "https://www.lcbo.com/en/tiger-beer-537258", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/7/2/537258.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/7/2/537258.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill St. Blue Wave", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.14975334742776603", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-st-blue-wave-25078", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025078.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025078.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Broadhead Amber Ale", "brand" => "Broadhead Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14587737843551796", "country" => "Canada", "url" => "https://www.lcbo.com/en/broadhead-amber-ale-409268", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/9/2/409268.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/9/2/409268.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "South River Brewing Co. Rowdy Piper IPA", "brand" => "South River Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.2", "price_index" => "0.16359609382865198", "country" => "Canada", "url" => "https://www.lcbo.com/en/south-river-brewing-co-rowdy-piper-ipa-23250", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/2/023250.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/2/023250.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Perth Brewery Easy Amber", "brand" => "Perth Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13742071881606763", "country" => "Canada", "url" => "https://www.lcbo.com/en/perth-brewery-easy-amber-926964", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/2/6/9/926964.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/2/6/9/926964.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Steam Whistle Premium Pilsner", "brand" => "Steam Whistle", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "15.25", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.1431924882629108", "country" => "Canada", "url" => "https://www.lcbo.com/en/steam-whistle-premium-pilsner-280081", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/8/0/0/280081.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/8/0/0/280081.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Walkerville Honest Lager", "brand" => "Walkerville Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.0", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12684989429175475", "country" => "Canada", "url" => "https://www.lcbo.com/en/walkerville-honest-lager-407650", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/7/6/407650.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/7/6/407650.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Silversmith Brewing Co The Black Lager", "brand" => "Silversmith Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.65", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.15433403805496826", "country" => "Canada", "url" => "https://www.lcbo.com/en/silversmith-brewing-co-the-black-lager-14178", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/1/014178.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/1/014178.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Elora Brewing Friends Forever Pale Ale", "brand" => "Elora Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.13645973476840284", "country" => "Canada", "url" => "https://www.lcbo.com/en/elora-brewing-friends-forever-pale-ale-24573", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024573.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024573.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Moosehead Lager", "brand" => "Moosehead", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "16.95", "volume" => "2838", "alcohol_content" => "5.0", "price_index" => "0.11945031712473572", "country" => "Canada", "url" => "https://www.lcbo.com/en/moosehead-lager-422345", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/2/2/3/422345.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/2/2/3/422345.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bitburger Premium Pilsner", "brand" => "Bitburger", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.8", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.11199999999999999", "country" => "Germany", "url" => "https://www.lcbo.com/en/bitburger-premium-pilsner-394536", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/9/4/5/394536.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/9/4/5/394536.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sweetgrass Golden Ale", "brand" => "Sweetgrass", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.3", "volume" => "473", "alcohol_content" => "4.9", "price_index" => "0.14238253440911247", "country" => "Canada", "url" => "https://www.lcbo.com/en/sweetgrass-golden-ale-420356", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/2/0/3/420356.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/2/0/3/420356.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Spitfire Kentish Ale", "brand" => "Spitfire", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.65", "volume" => "500", "alcohol_content" => "4.2", "price_index" => "0.1261904761904762", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/spitfire-kentish-ale-402545", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/2/5/402545.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/2/5/402545.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bellwoods Brewery Brewery Jutsu Pale Ale", "brand" => "Bellwoods Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.5", "volume" => "473", "alcohol_content" => "5.6", "price_index" => "0.16988825128360013", "country" => "Canada", "url" => "https://www.lcbo.com/en/bellwoods-brewery-jutsu-pale-ale-16051", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/0/016051.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/0/016051.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cowbell Brewing Co. Boxing Bruin IPA", "brand" => "Cowbell Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.3", "price_index" => "0.11577569717104602", "country" => "Canada", "url" => "https://www.lcbo.com/en/cowbell-brewing-co-boxing-bruin-ipa-548313", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/8/3/548313.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/8/3/548313.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stella Artois", "brand" => "Stella Artois", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "50.95", "volume" => "7920", "alcohol_content" => "5.0", "price_index" => "0.12866161616161617", "country" => "Canada", "url" => "https://www.lcbo.com/en/stella-artois-17857", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017857.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017857.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beyond The Pale Saison Tropicale", "brand" => "Beyond The Pale", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.5", "volume" => "473", "alcohol_content" => "7.9", "price_index" => "0.1204271148339444", "country" => "Canada", "url" => "https://www.lcbo.com/en/beyond-the-pale-saison-tropicale-521914", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/2/1/9/521914.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/2/1/9/521914.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Quayle's Brewery Fiddle & Field Pale Ale", "brand" => "Quayle'S Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "355", "alcohol_content" => "5.6", "price_index" => "0.16348088531187124", "country" => "Canada", "url" => "https://www.lcbo.com/en/quayle-s-brewery-raised-in-a-barn-23124", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/1/023124.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/1/023124.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "MacLean's Pale Ale", "brand" => "Maclean's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.13213530655391117", "country" => "Canada", "url" => "https://www.lcbo.com/en/maclean-s-pale-ale-464081", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/4/0/464081.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/4/0/464081.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Parsons Brewing Westy Pale Ale", "brand" => "Parson Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.7", "volume" => "473", "alcohol_content" => "5.7", "price_index" => "0.1372352657542376", "country" => "Canada", "url" => "https://www.lcbo.com/en/parsons-brewing-westy-pale-ale-17273", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/2/017273.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/2/017273.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lost Craft Revivale", "brand" => "Lost Craft", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.15", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.13874207188160675", "country" => "Canada", "url" => "https://www.lcbo.com/en/lost-craft-revivale-456996", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/6/9/456996.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/6/9/456996.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pabst Blue Ribbon", "brand" => "Pabst", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "23.95", "volume" => "5676", "alcohol_content" => "4.9", "price_index" => "0.08611266916914756", "country" => "Canada", "url" => "https://www.lcbo.com/en/pabst-blue-ribbon-566505", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/6/5/566505.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/6/5/566505.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Corona Extra", "brand" => "Corona", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "18.95", "volume" => "2838", "alcohol_content" => "4.6", "price_index" => "0.1451573367650213", "country" => "Canada", "url" => "https://www.lcbo.com/en/corona-extra-17817", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017817.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017817.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Keller Premium Lager", "brand" => "Keller", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.25", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.09", "country" => "Belgium", "url" => "https://www.lcbo.com/en/keller-premium-lager-141242", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/4/1/2/141242.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/4/1/2/141242.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "The Red Thread Brewing Co Make Tracks Craft Lager", "brand" => "The Red Thread Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13742071881606763", "country" => "Canada", "url" => "https://www.lcbo.com/en/the-red-thread-brewing-co-make-tracks-craft-lager-547026", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/7/0/547026.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/7/0/547026.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Corona Extra", "brand" => "Corona", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "30.5", "volume" => "3960", "alcohol_content" => "4.6", "price_index" => "0.16743522178304787", "country" => "Canada", "url" => "https://www.lcbo.com/en/corona-extra-17849", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017849.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017849.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Corona Extra", "brand" => "Corona", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "4.6", "price_index" => "0.15626436253332107", "country" => "Canada", "url" => "https://www.lcbo.com/en/corona-extra-17853", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017853.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017853.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Golden Pheasant Beer", "brand" => "Golden Pheasant", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.9", "volume" => "500", "alcohol_content" => "4.6", "price_index" => "0.12608695652173912", "country" => "Slovakia", "url" => "https://www.lcbo.com/en/golden-pheasant-beer-536789", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/6/7/536789.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/6/7/536789.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Trappistes Rochefort Triple Extra", "brand" => "Rochefort", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.3", "volume" => "330", "alcohol_content" => "7.5", "price_index" => "0.17373737373737372", "country" => "Belgium", "url" => "https://www.lcbo.com/en/trappistes-rochefort-triple-extra-20039", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020039.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020039.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nickel Brook Lemon Lime Sour Radler", "brand" => "Nickel Brook Brewery", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "3.55", "volume" => "473", "alcohol_content" => "2.5", "price_index" => "0.3002114164904862", "country" => "Canada", "url" => "https://www.lcbo.com/en/nickel-brook-lemon-lime-sour-radler-24569", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024569.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024569.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "46.95", "volume" => "9548", "alcohol_content" => "4.0", "price_index" => "0.12293150397989108", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-679779", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/9/7/679779.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/9/7/679779.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Session IPA", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.15968692366515225", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-session-ipa-25076", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025076.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025076.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Organic Lager", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "28.95", "volume" => "4092", "alcohol_content" => "4.2", "price_index" => "0.16844714425359586", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-organic-lager-522847", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/2/2/8/522847.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/2/2/8/522847.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Clear Peach 2.0", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.0", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.15856236786469344", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-clear-peach-2-0-20091", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020091.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020091.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Caledon Hills Brewing Buck's Town Bock", "brand" => "Caledon Hills Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "4.0", "volume" => "473", "alcohol_content" => "7.5", "price_index" => "0.11275546159267089", "country" => "Canada", "url" => "https://www.lcbo.com/en/caledon-hills-brewing-buck-s-town-bock-24576", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024576.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024576.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lakeport Pilsener", "brand" => "Lakeport", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "40.95", "volume" => "8184", "alcohol_content" => "5.0", "price_index" => "0.1000733137829912", "country" => "Canada", "url" => "https://www.lcbo.com/en/lakeport-pilsener-696906", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/6/9/696906.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/6/9/696906.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Blanche De Chambly", "brand" => "Blanche De Chambly", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/blanche-de-chambly-697698", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/7/6/697698.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/7/6/697698.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cameron's Coast to Coast Dry Hopped Lager", "brand" => "Cameron's", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.13620100829403153", "country" => "Canada", "url" => "https://www.lcbo.com/en/cameron-s-12-mile-lager-535229", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/5/2/535229.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/5/2/535229.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Light", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "47.95", "volume" => "8520", "alcohol_content" => "4.0", "price_index" => "0.14069835680751175", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-light-906644", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/6/6/906644.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/6/6/906644.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Blackburn Brewhouse Crick Water IPA", "brand" => "Blackburn Brew House", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "6.6", "price_index" => "0.10410660516368761", "country" => "Canada", "url" => "https://www.lcbo.com/en/blackburn-brewhouse-crick-water-ipa-21995", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/9/021995.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/9/021995.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "MacLean's Grapefruit Lager", "brand" => "Maclean's Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.3", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.17441860465116277", "country" => "Canada", "url" => "https://www.lcbo.com/en/maclean-s-grapefruit-lager-26820", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/8/026820.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/8/026820.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Walkerville Easy Stout", "brand" => "Walkerville Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.3", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.12684989429175475", "country" => "Canada", "url" => "https://www.lcbo.com/en/walkerville-easy-stout-453985", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/3/9/453985.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/3/9/453985.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Canadian", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "29.95", "volume" => "5115", "alcohol_content" => "5.0", "price_index" => "0.11710654936461387", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-canadian-688135", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/8/8/1/688135.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/8/8/1/688135.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kirin Ichiban", "brand" => "Kirin Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/kirin-ichiban-17652", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/6/017652.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/6/017652.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bellwoods Brewery Roman Candle", "brand" => "Bellwoods Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "5.0", "volume" => "473", "alcohol_content" => "6.8", "price_index" => "0.15545330182813083", "country" => "Canada", "url" => "https://www.lcbo.com/en/bellwoods-brewery-roman-candle-16874", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/8/016874.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/8/016874.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Equals Brewing Shake Lager", "brand" => "Equals Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.0", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.14094432699083861", "country" => "Canada", "url" => "https://www.lcbo.com/en/equals-brewing-shake-lager-21817", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/8/021817.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/8/021817.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Radler", "brand" => "Beau's", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "2.95", "volume" => "473", "alcohol_content" => "2.5", "price_index" => "0.24947145877378435", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-radler-20224", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/2/020224.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/2/020224.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Original Organic Lager", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "19.25", "volume" => "2838", "alcohol_content" => "4.2", "price_index" => "0.1614987080103359", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-original-organic-lager-516880", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/6/8/516880.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/6/8/516880.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kronenbourg 1664 Blanc", "brand" => "Kronenbourg 1664", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.134", "country" => "France", "url" => "https://www.lcbo.com/en/kronenbourg-1664-blanc-379958", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/7/9/9/379958.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/7/9/9/379958.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hacker Pschorr Keller Bier", "brand" => "Hacker Pschorr", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.6", "volume" => "500", "alcohol_content" => "5.5", "price_index" => "0.09454545454545454", "country" => "Germany", "url" => "https://www.lcbo.com/en/hacker-pschorr-keller-bier-16936", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/9/016936.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/9/016936.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Black Raspberry Thunder", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.1321353065539112", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-black-raspberry-thunder-648956", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/8/9/648956.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/8/9/648956.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Canadian", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "43.95", "volume" => "8184", "alcohol_content" => "5.0", "price_index" => "0.10740469208211144", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-canadian-900779", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/0/7/900779.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/0/7/900779.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Royal City Exhibition Session IPA", "brand" => "Royal City", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15738783180643645", "country" => "Canada", "url" => "https://www.lcbo.com/en/royal-city-exhibition-session-ipa-13660", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/6/013660.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/6/013660.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mackinnon Brewing 8 Man English Pale Ale", "brand" => "MacKinnon Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.12877186238708438", "country" => "Canada", "url" => "https://www.lcbo.com/en/mackinnon-brewing-8-man-english-pale-ale-453449", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/3/4/453449.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/3/4/453449.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "IX Poets Brewing Hazy Mariner Cloudy IPA", "brand" => "IX Poets Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.3", "price_index" => "0.1396146635286609", "country" => "Canada", "url" => "https://www.lcbo.com/en/ix-poets-brewing-hazy-mariner-cloudy-ipa-18342", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018342.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018342.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Carling Old Vienna", "brand" => "Carling", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "28.95", "volume" => "5325", "alcohol_content" => "5.0", "price_index" => "0.10873239436619718", "country" => "Canada", "url" => "https://www.lcbo.com/en/carling-old-vienna-360446", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/6/0/4/360446.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/6/0/4/360446.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "D'ont Poke The Bear Cider", "brand" => "D'Ont Poke The Bear", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.6", "price_index" => "0.1264723648444579", "country" => "Canada", "url" => "https://www.lcbo.com/en/d-ont-poke-the-bear-cider-573428", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/3/4/573428.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/3/4/573428.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Leffe Brune", "brand" => "Leffe", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "15.95", "volume" => "1980", "alcohol_content" => "6.5", "price_index" => "0.12393162393162391", "country" => "Belgium", "url" => "https://www.lcbo.com/en/leffe-brune-68049", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/6/8/0/068049.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/6/8/0/068049.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cowbell Brewing Co. Hazy Days IPA", "brand" => "Cowbell Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.12332628611698379", "country" => "Canada", "url" => "https://www.lcbo.com/en/cowbell-brewing-co-hazy-days-ipa-15116", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015116.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015116.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Shillow Beer Company Beer Snob", "brand" => "Shillow", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.11980267794221283", "country" => "Canada", "url" => "https://www.lcbo.com/en/shillow-beer-company-beer-snob-528513", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/2/8/5/528513.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/2/8/5/528513.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "29.95", "volume" => "5115", "alcohol_content" => "4.0", "price_index" => "0.14638318670576736", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-612515", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/2/5/612515.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/2/5/612515.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pommies Cider", "brand" => "Pommies", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14376321353065538", "country" => "Canada", "url" => "https://www.lcbo.com/en/pommies-cider-453118", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/3/1/453118.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/3/1/453118.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "GoodLot Farmstead Ale", "brand" => "GoodLot Farmstead Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "6.2", "price_index" => "0.11423310373047807", "country" => "Canada", "url" => "https://www.lcbo.com/en/goodlot-farmstead-ale-569228", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/9/2/569228.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/9/2/569228.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Guinness Blonde American Lager", "brand" => "Guinness", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.85", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12050739957716701", "country" => "United States", "url" => "https://www.lcbo.com/en/guinness-blonde-american-lager-433623", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/3/3/6/433623.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/3/3/6/433623.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Michelob Ultra", "brand" => "Michelob", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "58.95", "volume" => "10650", "alcohol_content" => "4.0", "price_index" => "0.13838028169014085", "country" => "Canada", "url" => "https://www.lcbo.com/en/michelob-ultra-15596", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/5/015596.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/5/015596.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bellwoods Brewery Wizard Wolf Pale Ale", "brand" => "Beau's Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.5", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.1982029598308668", "country" => "Canada", "url" => "https://www.lcbo.com/en/bellwoods-brewery-wizard-wolf-pale-ale-26920", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/9/026920.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/9/026920.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Chimay Premiere", "brand" => "Chimay", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "9.05", "volume" => "750", "alcohol_content" => "7.0", "price_index" => "0.17238095238095238", "country" => "Belgium", "url" => "https://www.lcbo.com/en/chimay-premiere-198069", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/9/8/0/198069.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/9/8/0/198069.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brava Premium Lager", "brand" => "Brava", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "40.95", "volume" => "8184", "alcohol_content" => "5.0", "price_index" => "0.1000733137829912", "country" => "Canada", "url" => "https://www.lcbo.com/en/brava-premium-lager-616946", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/6/9/616946.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/6/9/616946.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brickworks Ciderhouse Lemonade Cider Radler", "brand" => "Brickworks Ciderhouse", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "3.5", "volume" => "473", "alcohol_content" => "3.3", "price_index" => "0.2242296111217887", "country" => "Canada", "url" => "https://www.lcbo.com/en/brickworks-ciderhouse-lemonade-cider-radler-10574", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/5/010574.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/5/010574.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Miller High Life", "brand" => "Miller", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.3", "volume" => "473", "alcohol_content" => "4.6", "price_index" => "0.10570824524312895", "country" => "Canada", "url" => "https://www.lcbo.com/en/miller-high-life-562603", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/2/6/562603.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/2/6/562603.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brickworks Ciderhouse Mix Pack", "brand" => "Brickworks Ciderhouse", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "20.95", "volume" => "2838", "alcohol_content" => "6.0", "price_index" => "0.12303265210241954", "country" => "Canada", "url" => "https://www.lcbo.com/en/brickworks-ciderhouse-mix-pack-25425", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/4/025425.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/4/025425.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cameron's Ambear Red Ale", "brand" => "Cameron's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1416490486257928", "country" => "Canada", "url" => "https://www.lcbo.com/en/cameron-s-ambear-red-ale-445072", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/5/0/445072.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/5/0/445072.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beyond The Pale Pink Fuzz", "brand" => "Beyond The Pale", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.85", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.1356589147286822", "country" => "Canada", "url" => "https://www.lcbo.com/en/beyond-the-pale-pink-fuzz-421412", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/2/1/4/421412.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/2/1/4/421412.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Abbot Ale", "brand" => "Abbot", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.45", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.098", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/abbot-ale-16329", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/3/016329.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/3/016329.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Moosehead Radler Mixed Pack", "brand" => "Moosehead", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "29.95", "volume" => "4260", "alcohol_content" => "4.0", "price_index" => "0.17576291079812206", "country" => "Canada", "url" => "https://www.lcbo.com/en/moosehead-radler-mixed-pack-24897", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024897.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024897.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nickel Brook Head Stock West Coast-Style IPA", "brand" => "Nickel Brook", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.6", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.10872848082150406", "country" => "Canada", "url" => "https://www.lcbo.com/en/nickel-brook-head-stock-ipa-275172", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/5/1/275172.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/5/1/275172.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brew Aid Game Face Lager", "brand" => "Tomorrow Brew Co.", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.1526896875734085", "country" => "Canada", "url" => "https://www.lcbo.com/en/tomorrow-brew-co-brew-aid-18322", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018322.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018322.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Trestle Brewing Company Golden Ale", "brand" => "Trestle Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14587737843551796", "country" => "Canada", "url" => "https://www.lcbo.com/en/trestle-brewing-company-golden-ale-540245", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/0/2/540245.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/0/2/540245.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Deschutes King Crispy Pilsner", "brand" => "Deschutes", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "12.9", "volume" => "1420", "alcohol_content" => "4.8", "price_index" => "0.18926056338028172", "country" => "United States", "url" => "https://www.lcbo.com/en/deschutes-king-crispy-pilsner-25021", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025021.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025021.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Somersby Blackberry Cider", "brand" => "Somersby", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15738783180643645", "country" => "Canada", "url" => "https://www.lcbo.com/en/somersby-blackberry-cider-15564", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/5/015564.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/5/015564.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Market Brewing Bear Hug IPA", "brand" => "Market Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.0", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.1208094231350045", "country" => "Canada", "url" => "https://www.lcbo.com/en/market-brewing-bear-hug-ipa-513010", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/3/0/513010.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/3/0/513010.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Karbon Brewing Co. J.E.D.I Hazy IPA", "brand" => "Karbon Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.11221336802732151", "country" => "Canada", "url" => "https://www.lcbo.com/en/karbon-brewing-co-j-e-d-i-hazy-ipa-22575", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/5/022575.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/5/022575.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Amsterdam Neon Haze Hazy IPA", "brand" => "Amsterdam", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.7", "price_index" => "0.12425355142613403", "country" => "Canada", "url" => "https://www.lcbo.com/en/amsterdam-neon-haze-hazy-ipa-16896", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/8/016896.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/8/016896.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Colllingwood Freestyle Tiki Time Session IPA", "brand" => "Collingwood Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "4.4", "price_index" => "0.17057466846050354", "country" => "Canada", "url" => "https://www.lcbo.com/en/colllingwood-freestyle-tiki-time-session-ipa-27065", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/0/027065.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/0/027065.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bourgogne Des Flanders Blond", "brand" => "Bourgogne Des Flanders", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "330", "alcohol_content" => "5.0", "price_index" => "0.21515151515151515", "country" => "Belgium", "url" => "https://www.lcbo.com/en/bourgogne-des-flanders-blond-25314", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/3/025314.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/3/025314.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Powerhouse Brewing Homecoming Pale Ale", "brand" => "Powerhouse Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.14030367095906207", "country" => "Canada", "url" => "https://www.lcbo.com/en/powerhouse-brewing-homecoming-pale-ale-11137", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/1/011137.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/1/011137.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Eagle Banana Bread Beer", "brand" => "Charles Wells", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "500", "alcohol_content" => "5.2", "price_index" => "0.12499999999999999", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/eagle-banana-bread-beer-516682", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/6/6/516682.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/6/6/516682.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Henninger Lager", "brand" => "Henninger", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "13.6", "volume" => "3000", "alcohol_content" => "4.8", "price_index" => "0.09444444444444444", "country" => "Germany", "url" => "https://www.lcbo.com/en/henninger-lager-666883", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/6/8/666883.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/6/8/666883.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Louis Cifer Coconut Lemongrass Thai-Pa", "brand" => "Louis Cifer", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.10896080663522524", "country" => "Canada", "url" => "https://www.lcbo.com/en/louis-cifer-coconut-lemongrass-thai-pa-11300", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/3/011300.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/3/011300.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Corona Extra", "brand" => "Corona", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "53.95", "volume" => "8520", "alcohol_content" => "4.6", "price_index" => "0.13765564400898142", "country" => "Canada", "url" => "https://www.lcbo.com/en/corona-extra-20634", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/6/020634.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/6/020634.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rolling Rock", "brand" => "Rolling Rock", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "17.5", "volume" => "2838", "alcohol_content" => "4.5", "price_index" => "0.13702920679664865", "country" => "Canada", "url" => "https://www.lcbo.com/en/rolling-rock-496950", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/6/9/496950.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/6/9/496950.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Magners Original Irish Cider", "brand" => "Magners", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.45", "volume" => "500", "alcohol_content" => "4.5", "price_index" => "0.15333333333333335", "country" => "Ireland", "url" => "https://www.lcbo.com/en/magners-original-irish-cider-699389", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/9/3/699389.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/9/3/699389.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Orleans Brewing Co. Kolsch Me Ousside", "brand" => "Orleans Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.2", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.14094432699083861", "country" => "Canada", "url" => "https://www.lcbo.com/en/orleans-brewing-co-kolsch-me-ousside-561001", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/1/0/561001.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/1/0/561001.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brickworks Cider Batch 1904", "brand" => "Brickworks Ciderhouse", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "19.5", "volume" => "2838", "alcohol_content" => "5.0", "price_index" => "0.13742071881606766", "country" => "Canada", "url" => "https://www.lcbo.com/en/brickworks-cider-batch-1904-697318", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/7/3/697318.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/7/3/697318.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Eastbound Brewing Electro Tonic Juniper Saison", "brand" => "Eastbound Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "355", "alcohol_content" => "6.1", "price_index" => "0.1500808127453244", "country" => "Canada", "url" => "https://www.lcbo.com/en/eastbound-brewing-electro-tonic-juniper-saison-20027", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020027.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020027.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Walkerville Geronimo IPA", "brand" => "Walkerville Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.3", "volume" => "473", "alcohol_content" => "6.3", "price_index" => "0.11074197120708748", "country" => "Canada", "url" => "https://www.lcbo.com/en/walkerville-geronimo-ipa-499145", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/9/1/499145.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/9/1/499145.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Labatt Blue Light", "brand" => "Labatt", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "40.95", "volume" => "8184", "alcohol_content" => "4.0", "price_index" => "0.125091642228739", "country" => "Canada", "url" => "https://www.lcbo.com/en/labatt-blue-light-904276", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/4/2/904276.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/4/2/904276.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Carlsberg Lite", "brand" => "Carlsberg", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.55", "volume" => "500", "alcohol_content" => "4.0", "price_index" => "0.1275", "country" => "Denmark", "url" => "https://www.lcbo.com/en/carlsberg-lite-616334", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/6/3/616334.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/6/3/616334.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rochefort 8", "brand" => "Rochefort", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.8", "volume" => "330", "alcohol_content" => "9.2", "price_index" => "0.1251646903820817", "country" => "Belgium", "url" => "https://www.lcbo.com/en/rochefort-8-676569", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/6/5/676569.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/6/5/676569.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Rapids Brewing Navigator IPA", "brand" => "Black Rapids Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "4.9", "price_index" => "0.16179833455580964", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-rapids-brewing-navigator-ipa-20216", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/2/020216.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/2/020216.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cool Beer Blonde Lager", "brand" => "Cool Beer", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "6.5", "volume" => "1364", "alcohol_content" => "5.0", "price_index" => "0.09530791788856305", "country" => "Canada", "url" => "https://www.lcbo.com/en/cool-beer-blonde-lager-139089", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/3/9/0/139089.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/3/9/0/139089.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beyond the Pale Clean Cut", "brand" => "Beyond The Pale", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14587737843551796", "country" => "Canada", "url" => "https://www.lcbo.com/en/beyond-the-pale-clean-cut-646620", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/6/6/646620.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/6/6/646620.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "High Park Rings of Saturn Hazy IPA", "brand" => "High Park Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.10896080663522524", "country" => "NULL", "url" => "https://www.lcbo.com/en/high-park-rings-of-saturn-hazy-ipa-25046", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025046.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025046.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Miller High Life", "brand" => "Miller", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "12.0", "volume" => "2130", "alcohol_content" => "4.6", "price_index" => "0.1224739742804654", "country" => "United States", "url" => "https://www.lcbo.com/en/miller-high-life-560912", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/0/9/560912.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/0/9/560912.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Boxer Ice", "brand" => "Boxer", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.85", "volume" => "710", "alcohol_content" => "5.5", "price_index" => "0.07298335467349552", "country" => "United States", "url" => "https://www.lcbo.com/en/boxer-ice-184143", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/8/4/1/184143.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/8/4/1/184143.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Frank Brewing Sunshine IPA", "brand" => "Frank Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "6.1", "price_index" => "0.11610577756212527", "country" => "Canada", "url" => "https://www.lcbo.com/en/frank-brewing-sunshine-ipa-17294", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/2/017294.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/2/017294.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Perth Brewery Hop Side IPA", "brand" => "Perth Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.1345377666730732", "country" => "Canada", "url" => "https://www.lcbo.com/en/perth-brewery-hop-side-ipa-10893", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/8/010893.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/8/010893.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ashton Brewing Blueberry Wheat", "brand" => "Ashton Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14799154334038053", "country" => "Canada", "url" => "https://www.lcbo.com/en/ashton-brewing-blueberry-wheat-13254", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/2/013254.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/2/013254.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lake Of Bays Paddle On Session IPA", "brand" => "Lake of Bays Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.16208597603946442", "country" => "Canada", "url" => "https://www.lcbo.com/en/lake-of-bays-paddle-on-session-ipa-576538", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/6/5/576538.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/6/5/576538.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Creemore Summer Collection Pack", "brand" => "Creemore Springs", "category" => "Beer & Cider", "subcategory" => "Gifts and Samplers", "price" => "19.25", "volume" => "2838", "alcohol_content" => "5.5", "price_index" => "0.12332628611698379", "country" => "Canada", "url" => "https://www.lcbo.com/en/creemore-summer-collection-pack-25058", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025058.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025058.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "High Park Brewery Across The Pond English Pale Ale", "brand" => "High Park Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.15", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.1210839900057659", "country" => "Canada", "url" => "https://www.lcbo.com/en/high-park-brewery-across-the-pond-english-pale-ale-481069", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/1/0/481069.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/1/0/481069.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Country Vibes Amber Lagered Ale", "brand" => "Beau's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.15518870046331698", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-country-vibes-amber-lagered-ale-19269", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/2/019269.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/2/019269.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Budweiser", "brand" => "Budweiser", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "16.5", "volume" => "2838", "alcohol_content" => "5.0", "price_index" => "0.11627906976744186", "country" => "Canada", "url" => "https://www.lcbo.com/en/budweiser-311787", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/1/1/7/311787.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/1/1/7/311787.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeping Giant Northern Logger", "brand" => "Sleeping Giant", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.2", "volume" => "473", "alcohol_content" => "4.9", "price_index" => "0.1380679121542909", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeping-giant-northern-logger-445734", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/5/7/445734.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/5/7/445734.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sinha Stout", "brand" => "Sinha", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.1", "volume" => "330", "alcohol_content" => "8.8", "price_index" => "0.10674931129476584", "country" => "Sri Lanka", "url" => "https://www.lcbo.com/en/sinha-stout-136978", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/3/6/9/136978.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/3/6/9/136978.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bighead Amber - 100% Ontario Organic Hops", "brand" => "GoodLot Farmstead Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.12492792619642513", "country" => "Canada", "url" => "https://www.lcbo.com/en/bighead-amber-100-ontario-organic-hops-15871", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015871.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015871.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Godspeed Brewery Yuzu Saison with Japanese Citrus", "brand" => "Godspeed Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "355", "alcohol_content" => "4.1", "price_index" => "0.27138440398488495", "country" => "Canada", "url" => "https://www.lcbo.com/en/godspeed-brewery-yuzu-saison-with-japanese-citrus-18826", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/8/018826.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/8/018826.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lech Beer", "brand" => "Lech", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.55", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.102", "country" => "Poland", "url" => "https://www.lcbo.com/en/lech-beer-676775", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/6/7/676775.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/6/7/676775.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stonehooker Brewing Co. Broad Reach", "brand" => "Stonehooker Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "5.4", "price_index" => "0.13898676689374362", "country" => "Canada", "url" => "https://www.lcbo.com/en/stonehooker-brewing-co-broad-reach-917872", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/1/7/8/917872.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/1/7/8/917872.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "All or Nothing Brewhouse Take a Break Tropical Double IIPA", "brand" => "All Or Nothing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "6.8", "price_index" => "0.11037184429797288", "country" => "Canada", "url" => "https://www.lcbo.com/en/all-or-nothing-brewhouse-take-a-break-tropical-double-iipa-20026", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020026.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020026.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "London Brewing 4ganic Mix Pack", "brand" => "London Brewing", "category" => "Beer & Cider", "subcategory" => "Gifts and Samplers", "price" => "13.95", "volume" => "1892", "alcohol_content" => "5.0", "price_index" => "0.14746300211416488", "country" => "Canada", "url" => "https://www.lcbo.com/en/london-brewing-4ganic-mix-pack-26696", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/6/026696.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/6/026696.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Tread Lightly", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "17.95", "volume" => "2838", "alcohol_content" => "4.0", "price_index" => "0.15812191684284707", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-tread-lightly-19994", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019994.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019994.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Big Rig Premium Pilsner", "brand" => "Big Rig Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.12603675394373068", "country" => "Canada", "url" => "https://www.lcbo.com/en/big-rig-premium-pilsner-583070", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/8/3/0/583070.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/8/3/0/583070.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Danforth Brewery Viaduct IPA", "brand" => "Danforth Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.11451726568005638", "country" => "Canada", "url" => "https://www.lcbo.com/en/danforth-brewery-viaduct-ipa-495655", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/5/6/495655.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/5/6/495655.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Oak Tropical Situation Pineapple APA", "brand" => "Black Oak", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1501057082452431", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-oak-tropical-situation-pineapple-apa-20028", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020028.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020028.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bobcaygeon Brewing Northern Lights", "brand" => "Bobcaygeon Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "6.1", "price_index" => "0.12996915398745365", "country" => "Canada", "url" => "https://www.lcbo.com/en/bobcaygeon-brewing-northern-lights-120626", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/2/0/6/120626.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/2/0/6/120626.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Furnace Room Chicken Man Pale Ale", "brand" => "Furnace Room Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.6", "volume" => "473", "alcohol_content" => "5.4", "price_index" => "0.14094432699083861", "country" => "Canada", "url" => "https://www.lcbo.com/en/furnace-room-chicken-man-pale-ale-15980", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/9/015980.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/9/015980.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Powerhouse Brewing Odd Stacks New England DIPA", "brand" => "Powerhouse Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "7.5", "price_index" => "0.11134601832276252", "country" => "Canada", "url" => "https://www.lcbo.com/en/powerhouse-brewing-odd-stacks-new-england-dipa-23510", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023510.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023510.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bancroft Brewing Rusty Husky", "brand" => "Bancroft Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.6", "price_index" => "0.122697070371489", "country" => "Canada", "url" => "https://www.lcbo.com/en/bancroft-brewing-rusty-husky-13822", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/8/013822.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/8/013822.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Spearhead Hawaiian Style Pale Ale", "brand" => "Spearhead Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.11451726568005638", "country" => "Canada", "url" => "https://www.lcbo.com/en/spearhead-hawaiian-style-pale-ale-497438", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/7/4/497438.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/7/4/497438.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Bellows Beach Freak", "brand" => "Black Bellows", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.0", "volume" => "473", "alcohol_content" => "5.1", "price_index" => "0.16581685528333956", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-bellows-beach-freak-20813", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/8/020813.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/8/020813.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Silversmith Brewing Born Again Helles Lager", "brand" => "Silversmith Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.3", "volume" => "473", "alcohol_content" => "4.2", "price_index" => "0.16611295681063123", "country" => "Canada", "url" => "https://www.lcbo.com/en/silversmith-brewing-born-again-helles-lager-20030", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020030.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020030.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brickworks Ciderhouse Raspberry Peach Cider", "brand" => "Brickworks Ciderhouse", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14799154334038053", "country" => "Canada", "url" => "https://www.lcbo.com/en/brickworks-ciderhouse-raspberry-peach-cider-19966", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019966.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019966.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jackass Brewing Sunkiss NEIPA", "brand" => "Jackass Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.11221336802732151", "country" => "Canada", "url" => "https://www.lcbo.com/en/jackass-brewing-sunkiss-neipa-24474", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024474.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024474.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sol", "brand" => "Sol", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "14.95", "volume" => "1980", "alcohol_content" => "4.5", "price_index" => "0.16778900112233447", "country" => "Canada", "url" => "https://www.lcbo.com/en/sol-19442", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/4/019442.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/4/019442.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Warsteiner Premium Pilsener", "brand" => "Warsteiner", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.85", "volume" => "500", "alcohol_content" => "4.8", "price_index" => "0.11875000000000001", "country" => "Germany", "url" => "https://www.lcbo.com/en/warsteiner-premium-pilsener-556720", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/6/7/556720.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/6/7/556720.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Miller Genuine Draft", "brand" => "Miller", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "17.25", "volume" => "2838", "alcohol_content" => "4.7", "price_index" => "0.12932391705276416", "country" => "Canada", "url" => "https://www.lcbo.com/en/miller-genuine-draft-558932", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/8/9/558932.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/8/9/558932.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Canadian", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "25.5", "volume" => "4092", "alcohol_content" => "5.0", "price_index" => "0.12463343108504397", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-canadian-900118", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/0/1/900118.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/0/1/900118.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Left Field Brewery Ice Cold Beer", "brand" => "Left Field Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.8", "volume" => "355", "alcohol_content" => "4.5", "price_index" => "0.1752738654147105", "country" => "Canada", "url" => "https://www.lcbo.com/en/left-field-brewery-ice-cold-beer-17910", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/9/017910.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/9/017910.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pabst Olde English 800", "brand" => "Pabst", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "7.5", "volume" => "1180", "alcohol_content" => "7.9", "price_index" => "0.08045483801759279", "country" => "United States", "url" => "https://www.lcbo.com/en/pabst-olde-english-800-217182", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/7/1/217182.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/7/1/217182.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hollandia Lager", "brand" => "Hollandia", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "8.95", "volume" => "2000", "alcohol_content" => "5.0", "price_index" => "0.0895", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/hollandia-lager-14996", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/9/014996.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/9/014996.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Full Beard Brewing Lion's Mane Amber Ale", "brand" => "Full Beard Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.1326157985777436", "country" => "Canada", "url" => "https://www.lcbo.com/en/full-beard-brewing-lion-s-mane-amber-ale-24575", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024575.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024575.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Side Launch Brewery Any Day Light IPA", "brand" => "Side Launch", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.18234672304439745", "country" => "Canada", "url" => "https://www.lcbo.com/en/side-launch-brewery-any-day-light-ipa-17406", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/4/017406.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/4/017406.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Redline Brewhouse Far From Home Vermont IPA", "brand" => "Redline Brewhouse", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "6.7", "price_index" => "0.11201918525764411", "country" => "Canada", "url" => "https://www.lcbo.com/en/redline-brewhouse-far-from-home-vermont-ipa-24564", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024564.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024564.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Publican House High Noon", "brand" => "The Publican House", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.3", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15503875968992248", "country" => "Canada", "url" => "https://www.lcbo.com/en/publican-house-high-noon-465211", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/5/2/465211.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/5/2/465211.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Toboggan Brewing Lunatic Fridge IPA", "brand" => "Toboggan Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.2", "price_index" => "0.11764304712541772", "country" => "Canada", "url" => "https://www.lcbo.com/en/toboggan-brewing-lunatic-fridge-ipa-470138", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/0/1/470138.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/0/1/470138.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stockyards Brewing Iron Horse Trail IPA", "brand" => "Stockyards Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "6.3", "price_index" => "0.12248733178965737", "country" => "Canada", "url" => "https://www.lcbo.com/en/stockyards-brewing-iron-horse-trail-ipa-21537", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/5/021537.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/5/021537.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kensington Brewing Company Another Hazy Beer", "brand" => "Kensington Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.8", "price_index" => "0.12757891667274188", "country" => "Canada", "url" => "https://www.lcbo.com/en/kensington-brewing-company-another-hazy-beer-18331", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018331.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018331.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Local Organic", "brand" => "Beau's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.20877378435517968", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-local-organic-19358", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/3/019358.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/3/019358.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cowbell Brewing Co. Shindig Huron County Lager", "brand" => "Cowbell Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.2", "price_index" => "0.1686298197926105", "country" => "Canada", "url" => "https://www.lcbo.com/en/cowbell-brewing-co-shindig-huron-county-lager-576900", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/6/9/576900.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/6/9/576900.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "No Name Beer", "brand" => "No Name", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "9.9", "volume" => "2046", "alcohol_content" => "5.0", "price_index" => "0.0967741935483871", "country" => "Canada", "url" => "https://www.lcbo.com/en/no-name-beer-110320", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/1/0/3/110320.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/1/0/3/110320.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Laker Premium Lager", "brand" => "Laker", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "40.95", "volume" => "8184", "alcohol_content" => "5.0", "price_index" => "0.1000733137829912", "country" => "Canada", "url" => "https://www.lcbo.com/en/laker-premium-lager-910042", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/1/0/0/910042.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/1/0/0/910042.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Heineken", "brand" => "Heineken", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "4.75", "volume" => "650", "alcohol_content" => "5.0", "price_index" => "0.14615384615384616", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/heineken-245852", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/4/5/8/245852.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/4/5/8/245852.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brickworks Ciderhouse Pineapple Agave Cider", "brand" => "Brickworks Ciderhouse", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.1345377666730732", "country" => "Canada", "url" => "https://www.lcbo.com/en/brickwoworks-ciderhouse-pineapple-agave-cider-25898", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/8/025898.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/8/025898.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Labatt Blue", "brand" => "Labatt", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "12.5", "volume" => "2046", "alcohol_content" => "5.0", "price_index" => "0.12218963831867057", "country" => "Canada", "url" => "https://www.lcbo.com/en/labatt-blue-900423", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/0/4/900423.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/0/4/900423.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kronenbourg 1664", "brand" => "Kronenbourg 1664", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.134", "country" => "France", "url" => "https://www.lcbo.com/en/kronenbourg-1664-506741", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/0/6/7/506741.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/0/6/7/506741.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kingfisher Lager", "brand" => "Kingfisher", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.3", "volume" => "330", "alcohol_content" => "4.9", "price_index" => "0.14223871366728508", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/kingfisher-lager-629550", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/2/9/5/629550.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/2/9/5/629550.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Ultra", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "17.25", "volume" => "2838", "alcohol_content" => "3.0", "price_index" => "0.20260747004933052", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-ultra-14066", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/0/014066.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/0/014066.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Light", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "30.5", "volume" => "5325", "alcohol_content" => "4.0", "price_index" => "0.1431924882629108", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-light-247346", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/4/7/3/247346.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/4/7/3/247346.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Warka Beer", "brand" => "Warka", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.8", "volume" => "500", "alcohol_content" => "6.5", "price_index" => "0.08615384615384615", "country" => "Poland", "url" => "https://www.lcbo.com/en/warka-beer-676080", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/6/0/676080.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/6/0/676080.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pabst Blue Ribbon", "brand" => "Pabst", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "35.5", "volume" => "7100", "alcohol_content" => "4.9", "price_index" => "0.1020408163265306", "country" => "Canada", "url" => "https://www.lcbo.com/en/pabst-blue-ribbon-286005", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/8/6/0/286005.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/8/6/0/286005.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Original Draught", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "25.5", "volume" => "4092", "alcohol_content" => "5.0", "price_index" => "0.12463343108504397", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-original-draught-612309", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/2/3/612309.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/2/3/612309.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Libra Non Alcoholic Pale Ale", "brand" => "Upstreet Brewing", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "10.95", "volume" => "1420", "alcohol_content" => "0.04", "price_index" => "19.278169014084504", "country" => "Canada", "url" => "https://www.lcbo.com/en/libra-non-alcoholic-pale-ale-25636", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/6/025636.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/6/025636.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pump House Crafty Radler", "brand" => "Pump House", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.15518870046331698", "country" => "Canada", "url" => "https://www.lcbo.com/en/pump-house-crafty-radler-556753", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/6/7/556753.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/6/7/556753.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Glutenberg Blonde", "brand" => "Glutenburg", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "12.95", "volume" => "1892", "alcohol_content" => "4.5", "price_index" => "0.15210241954428", "country" => "Canada", "url" => "https://www.lcbo.com/en/glutenberg-blonde-519082", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/9/0/519082.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/9/0/519082.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pabst Blue Ribbon 5.9%", "brand" => "Pabst", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "12.95", "volume" => "2838", "alcohol_content" => "5.9", "price_index" => "0.0773402133276", "country" => "Canada", "url" => "https://www.lcbo.com/en/pabst-blue-ribbon-5-9-378158", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/7/8/1/378158.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/7/8/1/378158.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Prince Eddys So Many Friends IPA", "brand" => "Prince Eddy'S Brewing Co", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.18557669720460418", "country" => "Canada", "url" => "https://www.lcbo.com/en/prince-eddys-so-many-friends-ipa-15876", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015876.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015876.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Perth Brewery Last Duel Lager", "brand" => "Perth Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.1526896875734085", "country" => "Canada", "url" => "https://www.lcbo.com/en/perth-brewery-last-duel-lager-511477", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/1/4/511477.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/1/4/511477.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "16.5", "volume" => "2838", "alcohol_content" => "4.0", "price_index" => "0.14534883720930233", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-311779", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/1/1/7/311779.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/1/1/7/311779.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Clifford Brewing Porter", "brand" => "Clifford Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.9", "price_index" => "0.12362489697925251", "country" => "Canada", "url" => "https://www.lcbo.com/en/clifford-brewing-porter-481143", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/1/1/481143.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/1/1/481143.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busch", "brand" => "Busch", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "42.95", "volume" => "8520", "alcohol_content" => "4.7", "price_index" => "0.10725701728099092", "country" => "Canada", "url" => "https://www.lcbo.com/en/busch-286021", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/8/6/0/286021.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/8/6/0/286021.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Whitewater Brewing Co. Legion Lager", "brand" => "Whitewater Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14376321353065538", "country" => "Canada", "url" => "https://www.lcbo.com/en/whitewater-brewing-co-legion-lager-519777", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/9/7/519777.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/9/7/519777.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Duvel Beer", "brand" => "Duvel", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.15", "volume" => "330", "alcohol_content" => "8.5", "price_index" => "0.14795008912655971", "country" => "Belgium", "url" => "https://www.lcbo.com/en/duvel-beer-194431", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/9/4/4/194431.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/9/4/4/194431.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Budweiser", "brand" => "Budweiser", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "47.95", "volume" => "8520", "alcohol_content" => "5.0", "price_index" => "0.1125586854460094", "country" => "Canada", "url" => "https://www.lcbo.com/en/budweiser-906354", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/6/3/906354.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/6/3/906354.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busch", "brand" => "Busch", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "12.5", "volume" => "2130", "alcohol_content" => "4.7", "price_index" => "0.12486265108380781", "country" => "Canada", "url" => "https://www.lcbo.com/en/busch-696146", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/6/1/696146.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/6/1/696146.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Labatt Blue Light", "brand" => "Labatt", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "28.5", "volume" => "5115", "alcohol_content" => "4.0", "price_index" => "0.13929618768328447", "country" => "Canada", "url" => "https://www.lcbo.com/en/labatt-blue-light-218149", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/8/1/218149.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/8/1/218149.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "DAB Maibock", "brand" => "DAB", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.8", "volume" => "500", "alcohol_content" => "7.0", "price_index" => "0.08", "country" => "Germany", "url" => "https://www.lcbo.com/en/dab-maibock-346247", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/4/6/2/346247.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/4/6/2/346247.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "The Brick Brewing LandShark Lager", "brand" => "Landshark", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "47.95", "volume" => "8520", "alcohol_content" => "4.6", "price_index" => "0.12234639722392325", "country" => "Canada", "url" => "https://www.lcbo.com/en/the-brick-brewing-landshark-lager-609883", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/0/9/8/609883.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/0/9/8/609883.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "No Boats On Sunday Peach Cider", "brand" => "No Boats On Sunday", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.85", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1627906976744186", "country" => "Canada", "url" => "https://www.lcbo.com/en/no-boats-on-sunday-peach-cider-19981", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019981.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019981.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Tyskie Beer", "brand" => "Tyskie", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.8", "volume" => "500", "alcohol_content" => "5.6", "price_index" => "0.1", "country" => "Poland", "url" => "https://www.lcbo.com/en/tyskie-beer-696864", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/6/8/696864.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/6/8/696864.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Asahi Super Dry", "brand" => "Asahi", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.15", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.126", "country" => "Japan", "url" => "https://www.lcbo.com/en/asahi-super-dry-572313", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/2/3/572313.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/2/3/572313.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Longtooth Pale Ale", "brand" => "Longtooth", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.2", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.130102455683851", "country" => "Canada", "url" => "https://www.lcbo.com/en/longtooth-pale-ale-13823", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/8/013823.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/8/013823.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bancroft Brewing Sawmill Lager", "brand" => "Bancroft Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.1526896875734085", "country" => "Canada", "url" => "https://www.lcbo.com/en/bancroft-brewing-sawmill-lager-18313", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018313.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018313.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "London Brewing Organic Lager", "brand" => "London Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.14619225405964642", "country" => "Canada", "url" => "https://www.lcbo.com/en/london-brewing-organic-lager-635300", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/5/3/635300.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/5/3/635300.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Gosser Beer", "brand" => "Gosser", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.35", "volume" => "500", "alcohol_content" => "5.2", "price_index" => "0.09038461538461537", "country" => "Austria", "url" => "https://www.lcbo.com/en/gosser-beer-469262", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/9/2/469262.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/9/2/469262.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Caledon Hills Brewing Co. Premium Lager", "brand" => "Caledon Hills", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14376321353065538", "country" => "Canada", "url" => "https://www.lcbo.com/en/caledon-hills-brewing-co-premium-lager-541060", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/1/0/541060.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/1/0/541060.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Society of Beer Drinking Ladies Raspberry Lemonade", "brand" => "Society of Beer Drinking Ladies", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.7", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.17383133662203432", "country" => "Canada", "url" => "https://www.lcbo.com/en/society-of-beer-drinking-ladies-raspberry-lemonade-24615", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/6/024615.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/6/024615.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Steam Whistle Premium Pilsner", "brand" => "Steam Whistle", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "15.25", "volume" => "2046", "alcohol_content" => "5.0", "price_index" => "0.14907135874877808", "country" => "Canada", "url" => "https://www.lcbo.com/en/steam-whistle-premium-pilsner-547646", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/7/6/547646.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/7/6/547646.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Trestle Brewing Co. 30,000 Islands IPA", "brand" => "Trestle Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "6.3", "price_index" => "0.12584314909896305", "country" => "Canada", "url" => "https://www.lcbo.com/en/trestle-brewing-co-30-000-islands-ipa-110148", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/1/0/1/110148.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/1/0/1/110148.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Dominion City Sunsplit IPA", "brand" => "Dominion City Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "5.1", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.16588063099691006", "country" => "Canada", "url" => "https://www.lcbo.com/en/dominion-city-sunsplit-ipa-26883", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/8/026883.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/8/026883.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Left Field Brewery Hello, Friends! IPA", "brand" => "Left Field Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.8", "volume" => "355", "alcohol_content" => "6.0", "price_index" => "0.1784037558685446", "country" => "Canada", "url" => "https://www.lcbo.com/en/left-field-brewery-hello-friends-ipa-24583", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024583.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024583.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Tsingtao Beer", "brand" => "Tsingtao", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "11.5", "volume" => "1980", "alcohol_content" => "4.5", "price_index" => "0.12906846240179573", "country" => "China", "url" => "https://www.lcbo.com/en/tsingtao-beer-293787", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/9/3/7/293787.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/9/3/7/293787.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Light", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.9", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.15327695560253699", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-light-906669", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/6/6/906669.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/6/6/906669.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kona Hanalei IPA", "brand" => "Kona Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "17.05", "volume" => "2130", "alcohol_content" => "4.5", "price_index" => "0.17788210745957225", "country" => "United States", "url" => "https://www.lcbo.com/en/kona-hanalei-ipa-15606", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/6/015606.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/6/015606.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Paulaner Salvator Doppelbock", "brand" => "Paulaner", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.3", "volume" => "500", "alcohol_content" => "7.9", "price_index" => "0.08354430379746836", "country" => "Germany", "url" => "https://www.lcbo.com/en/paulaner-salvator-doppelbock-499103", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/9/1/499103.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/9/1/499103.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Thornbury Village Ladder Run Amber Lager", "brand" => "Thornbury", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.12993305144467934", "country" => "Canada", "url" => "https://www.lcbo.com/en/thornbury-village-ladder-run-amber-lager-418848", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/8/8/418848.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/8/8/418848.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Side Launch Wheat Beer", "brand" => "Side Launch", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.3", "price_index" => "0.1376201683353943", "country" => "Canada", "url" => "https://www.lcbo.com/en/side-launch-wheat-beer-10075", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/0/010075.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/0/010075.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Labatt Blue", "brand" => "Labatt", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "49.95", "volume" => "10650", "alcohol_content" => "5.0", "price_index" => "0.09380281690140846", "country" => "Canada", "url" => "https://www.lcbo.com/en/labatt-blue-15091", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/0/015091.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/0/015091.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lake Of Bays Low Tide 90 Calorie IPA", "brand" => "Lake of Bays Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "2.5", "price_index" => "0.27484143763213525", "country" => "Canada", "url" => "https://www.lcbo.com/en/lake-of-bays-low-tide-zero-ibu-ipa-14651", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/6/014651.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/6/014651.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Riverhead Cerveza Mexican Lager", "brand" => "Riverhead Brewing Company Ltd", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15738783180643645", "country" => "Canada", "url" => "https://www.lcbo.com/en/riverhead-cerveza-mexican-lager-20020", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020020.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020020.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Okocim Mocne", "brand" => "Okocim", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "500", "alcohol_content" => "7.0", "price_index" => "0.0842857142857143", "country" => "Poland", "url" => "https://www.lcbo.com/en/okocim-mocne-199851", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/9/9/8/199851.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/9/9/8/199851.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hop City Barking Squirrel Lager", "brand" => "Hop City Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.3", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.1453488372093023", "country" => "Canada", "url" => "https://www.lcbo.com/en/hop-city-barking-squirrel-lager-267773", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/6/7/7/267773.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/6/7/7/267773.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Honey Brown Lager", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "27.95", "volume" => "4092", "alcohol_content" => "5.2", "price_index" => "0.13135386119257086", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-honey-brown-lager-681403", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/8/1/4/681403.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/8/1/4/681403.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Whitewater Brewing Co. Blood Moon Orange Sour", "brand" => "Whitewater Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.1607646229739253", "country" => "Canada", "url" => "https://www.lcbo.com/en/whitewater-brewing-co-blood-moon-orange-sour-11226", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/2/011226.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/2/011226.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Overflow Brewing Bangkok Crosswalk", "brand" => "Overflow Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.17618040873854826", "country" => "Canada", "url" => "https://www.lcbo.com/en/overflow-brewing-bangkok-crosswalk-13685", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/6/013685.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/6/013685.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bobcaygeon Brewing Amplitude Raspberry Sour", "brand" => "Bobcaygeon Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.45", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.17105516048433597", "country" => "Canada", "url" => "https://www.lcbo.com/en/bobcaygeon-brewing-amplitude-raspberry-sour-24618", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/6/024618.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/6/024618.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Blood Brothers Auto Pop Cherry Cola", "brand" => "Blood Brothers Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.95", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.26162790697674415", "country" => "Canada", "url" => "https://www.lcbo.com/en/blood-brothers-auto-pop-cherry-cola-24622", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/6/024622.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/6/024622.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collingwood Brewery Downhill Pale Ale", "brand" => "Collingwood Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.4", "price_index" => "0.13507164669955368", "country" => "Canada", "url" => "https://www.lcbo.com/en/collingwood-brewery-downhill-pale-ale-21271", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/2/021271.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/2/021271.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rhuby Social - Strawberry Rhubarb Witbier", "brand" => "Upstreet Craft Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.15", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.17547568710359407", "country" => "Canada", "url" => "https://www.lcbo.com/en/rhuby-social-strawberry-rhubarb-witbier-25617", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/6/025617.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/6/025617.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muddy York Gaslight Helles", "brand" => "Muddy York Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.4", "price_index" => "0.13115652650536372", "country" => "Canada", "url" => "https://www.lcbo.com/en/muddy-york-gaslight-helles-570176", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/0/1/570176.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/0/1/570176.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busch", "brand" => "Busch", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "23.95", "volume" => "5676", "alcohol_content" => "4.7", "price_index" => "0.08977703806996236", "country" => "Canada", "url" => "https://www.lcbo.com/en/busch-568162", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/8/1/568162.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/8/1/568162.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ashton Brewing Amber Ale", "brand" => "Ashton Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14799154334038053", "country" => "Canada", "url" => "https://www.lcbo.com/en/ashton-brewing-amber-ale-13237", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/2/013237.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/2/013237.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Porter Porter", "brand" => "Beau's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "5.6", "price_index" => "0.13779824826336456", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-porter-porter-22221", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022221.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022221.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Spaten", "brand" => "Spaten", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.5", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.10164254350300861", "country" => "Canada", "url" => "https://www.lcbo.com/en/spaten-666743", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/6/7/666743.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/6/7/666743.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kokanee", "brand" => "Kokanee", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "14.95", "volume" => "2130", "alcohol_content" => "5.2", "price_index" => "0.13497652582159622", "country" => "Canada", "url" => "https://www.lcbo.com/en/kokanee-904664", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/4/6/904664.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/4/6/904664.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Swan Brewing IPA", "brand" => "Black Swan Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "355", "alcohol_content" => "6.5", "price_index" => "0.14517876489707476", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-swan-brewing-ipa-21521", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/5/021521.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/5/021521.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busch Lager", "brand" => "Busch", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.0", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.0899644640367055", "country" => "Canada", "url" => "https://www.lcbo.com/en/busch-lager-15303", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/3/015303.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/3/015303.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Great Lakes Brewery Sunnyside Session IPA", "brand" => "Great Lakes Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.0", "volume" => "473", "alcohol_content" => "3.9", "price_index" => "0.1626280696048138", "country" => "Canada", "url" => "https://www.lcbo.com/en/great-lakes-brewery-sunnyside-session-ipa-467019", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/7/0/467019.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/7/0/467019.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Peroni Nastro Azzurro Slim Can", "brand" => "Peroni Nastro Azzuro", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "15.35", "volume" => "1980", "alcohol_content" => "5.1", "price_index" => "0.1520102990691226", "country" => "Italy", "url" => "https://www.lcbo.com/en/peroni-nastro-azzurro-slim-can-19923", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019923.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019923.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Guinness Draught", "brand" => "Guinness", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "23.95", "volume" => "3520", "alcohol_content" => "4.2", "price_index" => "0.16199945887445888", "country" => "Ireland", "url" => "https://www.lcbo.com/en/guinness-draught-554469", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/4/4/554469.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/4/4/554469.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sons of Kent Brewing 8 Track XPA", "brand" => "Sons Of Kent", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "5.7", "price_index" => "0.13167167389933607", "country" => "Canada", "url" => "https://www.lcbo.com/en/sons-of-kent-brewing-8-track-xpa-570325", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/0/3/570325.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/0/3/570325.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Canadian", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.9", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12262156448202959", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-canadian-904409", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/4/4/904409.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/4/4/904409.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Old Milwaukee", "brand" => "Old Milwaukee", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "11.95", "volume" => "2838", "alcohol_content" => "4.9", "price_index" => "0.08593289324186333", "country" => "Canada", "url" => "https://www.lcbo.com/en/old-milwaukee-15402", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015402.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015402.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stone House Premium Czech Pilsner", "brand" => "Stone House Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.75", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.15856236786469344", "country" => "Canada", "url" => "https://www.lcbo.com/en/stone-house-premium-czech-pilsner-23249", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/2/023249.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/2/023249.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Waterloo Pineapple Radler", "brand" => "Waterloo Brewing", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "3.25", "volume" => "473", "alcohol_content" => "2.5", "price_index" => "0.27484143763213525", "country" => "Canada", "url" => "https://www.lcbo.com/en/waterloo-pineapple-radler-15100", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015100.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015100.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "James Ready 5.5", "brand" => "James Ready", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "40.95", "volume" => "8184", "alcohol_content" => "5.5", "price_index" => "0.09097573980271928", "country" => "Canada", "url" => "https://www.lcbo.com/en/james-ready-5-5-679738", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/9/7/679738.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/9/7/679738.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sapporo Premium Beer", "brand" => "Sapporo", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.4", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.136", "country" => "Canada", "url" => "https://www.lcbo.com/en/sapporo-premium-beer-201293", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/0/1/2/201293.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/0/1/2/201293.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Wellington Brewery Special Pale Ale", "brand" => "Wellington Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15738783180643645", "country" => "Canada", "url" => "https://www.lcbo.com/en/wellington-brewery-special-pale-ale-190439", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/9/0/4/190439.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/9/0/4/190439.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rally Beer Co Trail Blazer", "brand" => "Rally Beer Company", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.9", "price_index" => "0.1402252232817017", "country" => "Canada", "url" => "https://www.lcbo.com/en/rally-beer-co-trail-blazer-17117", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/1/017117.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/1/017117.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Town Brewery Square Wheels Hazy IPA", "brand" => "Town Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.25", "volume" => "473", "alcohol_content" => "6.2", "price_index" => "0.14492259428493487", "country" => "Canada", "url" => "https://www.lcbo.com/en/town-brewery-square-wheels-hazy-ipa-10820", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/8/010820.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/8/010820.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Waterloo IPA", "brand" => "Waterloo Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.11993820133355015", "country" => "Canada", "url" => "https://www.lcbo.com/en/waterloo-ipa-339895", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/9/8/339895.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/9/8/339895.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collingwood Brewery Rockwell Pilsner", "brand" => "Collingwood Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.6", "price_index" => "0.1539663572019487", "country" => "Canada", "url" => "https://www.lcbo.com/en/collingwood-brewery-rockwell-pilsner-16871", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/8/016871.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/8/016871.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Budweiser", "brand" => "Budweiser", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "48.95", "volume" => "9548", "alcohol_content" => "5.0", "price_index" => "0.10253456221198157", "country" => "Canada", "url" => "https://www.lcbo.com/en/budweiser-692806", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/2/8/692806.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/2/8/692806.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Maclay's Traditional Pale Ale", "brand" => "Maclay's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "39.95", "volume" => "8520", "alcohol_content" => "4.9", "price_index" => "0.09569320686020888", "country" => "Canada", "url" => "https://www.lcbo.com/en/maclay-s-traditional-pale-ale-141648", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/4/1/6/141648.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/4/1/6/141648.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Gateway City Brewery 11.17 India Session Ale", "brand" => "Gateway City Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15738783180643645", "country" => "Canada", "url" => "https://www.lcbo.com/en/gateway-city-brewery-11-17-india-session-ale-26089", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026089.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026089.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hobgoblin Ale", "brand" => "Wychwood Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.0", "volume" => "500", "alcohol_content" => "4.5", "price_index" => "0.13333333333333333", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/hobgoblin-ale-488429", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/8/4/488429.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/8/4/488429.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Flying Monkeys Worlds Away Modern Lager", "brand" => "Flying Monkeys", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.15518870046331698", "country" => "Canada", "url" => "https://www.lcbo.com/en/flying-monkeys-worlds-away-modern-lager-20265", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/2/020265.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/2/020265.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Strongbow Cider", "brand" => "Strongbow", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.35", "volume" => "500", "alcohol_content" => "5.3", "price_index" => "0.12641509433962264", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/strongbow-cider-560532", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/0/5/560532.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/0/5/560532.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light Strawberry Lemonade", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.0", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.15856236786469344", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-strawberry-lemonade-15695", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/6/015695.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/6/015695.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Elora Brewing Borealis Pale Ale", "brand" => "Elora Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "5.1", "price_index" => "0.14716245906396386", "country" => "Canada", "url" => "https://www.lcbo.com/en/elora-brewing-borealis-pale-ale-15443", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015443.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015443.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "WHISKEYJACK BEER COMPANY Abitibi Amber", "brand" => "Whiskeyjack Beer Company", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14587737843551796", "country" => "Canada", "url" => "https://www.lcbo.com/en/whiskeyjack-beer-company-abitibi-amber-15868", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015868.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015868.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brickworks Ciderhouse Queen Street 501", "brand" => "Brickworks Ciderhouse", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14799154334038053", "country" => "Canada", "url" => "https://www.lcbo.com/en/brickworks-ciderhouse-queen-street-501-413807", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/3/8/413807.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/3/8/413807.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Budweiser", "brand" => "Budweiser", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "25.5", "volume" => "4092", "alcohol_content" => "5.0", "price_index" => "0.12463343108504397", "country" => "Canada", "url" => "https://www.lcbo.com/en/budweiser-902627", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/2/6/902627.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/2/6/902627.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "KW Craft Cider", "brand" => "KW Craft", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.55", "volume" => "473", "alcohol_content" => "6.7", "price_index" => "0.11201918525764411", "country" => "Canada", "url" => "https://www.lcbo.com/en/kw-craft-cider-541219", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/1/2/541219.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/1/2/541219.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Clear 2.0", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "25.95", "volume" => "4260", "alcohol_content" => "4.0", "price_index" => "0.1522887323943662", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-clear-2-0-679522", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/9/5/679522.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/9/5/679522.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Amsterdam Blonde Lager", "brand" => "Amsterdam", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.1", "volume" => "568", "alcohol_content" => "5.0", "price_index" => "0.10915492957746478", "country" => "Canada", "url" => "https://www.lcbo.com/en/amsterdam-blonde-lager-617647", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/7/6/617647.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/7/6/617647.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Guinness Draught", "brand" => "Guinness", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "500", "alcohol_content" => "4.2", "price_index" => "0.1619047619047619", "country" => "Ireland", "url" => "https://www.lcbo.com/en/guinness-draught-270447", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/0/4/270447.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/0/4/270447.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stack Brewing Sour IPA", "brand" => "Stack Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.11221336802732151", "country" => "Canada", "url" => "https://www.lcbo.com/en/stack-brewing-sour-ipa-10814", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/8/010814.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/8/010814.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kingston Brewing Company, Double Dry Hopped IPA", "brand" => "Kingston Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.0", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.13010245568385104", "country" => "Canada", "url" => "https://www.lcbo.com/en/kingston-brewing-company-double-dry-hopped-ipa-13819", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/8/013819.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/8/013819.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeping Giant Brewing Quittin Time", "brand" => "Sleeping Giant", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.75", "volume" => "355", "alcohol_content" => "4.5", "price_index" => "0.17214397496087638", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeping-giant-brewinig-quittin-time-26949", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/9/026949.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/9/026949.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Crest Super Lager", "brand" => "Crest", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.85", "volume" => "500", "alcohol_content" => "10.0", "price_index" => "0.077", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/crest-super-lager-456202", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/6/2/456202.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/6/2/456202.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rorschach Brewing Truth Serum", "brand" => "Rorschach Brewing Inc.", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "355", "alcohol_content" => "6.5", "price_index" => "0.15167930660888407", "country" => "Canada", "url" => "https://www.lcbo.com/en/rorschach-brewing-truth-serum-14595", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/5/014595.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/5/014595.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Old Style Pilsner", "brand" => "Old Style", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.3", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.09725158562367862", "country" => "Canada", "url" => "https://www.lcbo.com/en/old-style-pilsner-478412", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/8/4/478412.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/8/4/478412.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brimstone Brewing Sinister Minister IPA", "brand" => "Brimstone Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.6", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.10872848082150406", "country" => "Canada", "url" => "https://www.lcbo.com/en/brimstone-brewing-sinister-minister-ipa-521112", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/2/1/1/521112.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/2/1/1/521112.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Imperial City Brew House Goodbye Gravity Cream Ale", "brand" => "Imperial City Brewhouse", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.6", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1522198731501057", "country" => "Canada", "url" => "https://www.lcbo.com/en/imperial-city-brew-house-goodbye-gravity-cream-ale-21517", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/5/021517.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/5/021517.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Original", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.0", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12684989429175475", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-original-14136", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/1/014136.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/1/014136.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Town Brewery Mad Nice IPA", "brand" => "Town Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.25", "volume" => "473", "alcohol_content" => "6.3", "price_index" => "0.14262223564549145", "country" => "Canada", "url" => "https://www.lcbo.com/en/town-brewery-mad-nice-ipa-26090", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026090.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026090.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Growers Honeycrisp Apple", "brand" => "Growers", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.55", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1501057082452431", "country" => "Canada", "url" => "https://www.lcbo.com/en/growers-honeycrisp-apple-374546", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/7/4/5/374546.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/7/4/5/374546.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Amsterdam 3 Speed Lager", "brand" => "Amsterdam", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.35", "volume" => "568", "alcohol_content" => "4.2", "price_index" => "0.14042588866532527", "country" => "Canada", "url" => "https://www.lcbo.com/en/amsterdam-3-speed-lager-575357", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/5/3/575357.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/5/3/575357.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Niagara Cider Peach Chardonnay", "brand" => "Niagara Cider", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "4.25", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.14975334742776603", "country" => "Canada", "url" => "https://www.lcbo.com/en/niagara-cider-peach-chardonnay-21208", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/2/021208.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/2/021208.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Daily Forecast", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.18557669720460418", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-daily-forecast-25099", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025099.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025099.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lost Craft Duality Peach Sour", "brand" => "Lost Craft", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.18557669720460418", "country" => "Canada", "url" => "https://www.lcbo.com/en/lost-craft-duality-peach-sour-25044", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025044.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025044.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Laker Red", "brand" => "Laker", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.0", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.0768787238131847", "country" => "Canada", "url" => "https://www.lcbo.com/en/laker-red-382291", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/8/2/2/382291.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/8/2/2/382291.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Steam Whistle Koozie Gift Pack", "brand" => "Steam Whistle", "category" => "Beer & Cider", "subcategory" => "Gifts and Samplers", "price" => "29.95", "volume" => "2838", "alcohol_content" => "5.0", "price_index" => "0.21106412966878083", "country" => "Canada", "url" => "https://www.lcbo.com/en/steam-whistle-koozie-gift-pack-22233", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022233.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022233.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brock Street Brewing Munich Lager", "brand" => "Brock Street", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.3", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.11627906976744186", "country" => "Canada", "url" => "https://www.lcbo.com/en/brock-street-brewing-munich-lager-17287", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/2/017287.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/2/017287.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Brewery Ebb & Flow Five Alive", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.15856236786469344", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-brewery-ebb-flow-five-alive-25050", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025050.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025050.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Steam Whistle Premium Pilsner", "brand" => "Steam Whistle", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "19.25", "volume" => "2838", "alcohol_content" => "5.0", "price_index" => "0.13565891472868216", "country" => "Canada", "url" => "https://www.lcbo.com/en/steam-whistle-premium-pilsner-492017", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/2/0/492017.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/2/0/492017.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Old Flame Hazy Blonde Kellerbier", "brand" => "Old Flame", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13742071881606763", "country" => "Canada", "url" => "https://www.lcbo.com/en/old-flame-hazy-blonde-kellerbier-10563", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/5/010563.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/5/010563.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Budweiser Zero", "brand" => "Budweiser", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "2.5", "volume" => "473", "alcohol_content" => "0.1", "price_index" => "5.285412262156448", "country" => "Canada", "url" => "https://www.lcbo.com/en/budweiser-zero-16976", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/9/016976.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/9/016976.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "La Trappe Tripel", "brand" => "La Trappe", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "8.65", "volume" => "750", "alcohol_content" => "8.0", "price_index" => "0.14416666666666667", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/la-trappe-tripel-413575", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/3/5/413575.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/3/5/413575.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Fixed Gear Brewing Breakaway IPA", "brand" => "Fixed Gear Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.14030367095906207", "country" => "Canada", "url" => "https://www.lcbo.com/en/fixed-gear-brewing-breakaway-ipa-18314", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018314.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018314.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Corona Extra + vintage cooler", "brand" => "Corona", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "55.95", "volume" => "3960", "alcohol_content" => "4.6", "price_index" => "0.3071475625823452", "country" => "Canada", "url" => "https://www.lcbo.com/en/corona-extra-vintage-cooler-24146", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/1/024146.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/1/024146.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bavaria Premium", "brand" => "Bavaria", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "13.9", "volume" => "3000", "alcohol_content" => "5.0", "price_index" => "0.09266666666666667", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/bavaria-premium-666867", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/6/8/666867.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/6/8/666867.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Canadian", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "48.95", "volume" => "9548", "alcohol_content" => "5.0", "price_index" => "0.10253456221198157", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-canadian-692277", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/2/2/692277.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/2/2/692277.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Zywiec Beer", "brand" => "Zywiec", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.55", "volume" => "500", "alcohol_content" => "5.5", "price_index" => "0.09272727272727273", "country" => "Poland", "url" => "https://www.lcbo.com/en/zywiec-beer-615211", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/5/2/615211.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/5/2/615211.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busch Ice", "brand" => "Busch", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.0", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.0768787238131847", "country" => "Canada", "url" => "https://www.lcbo.com/en/busch-ice-15250", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/2/015250.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/2/015250.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Flying Canoe Hard Cider", "brand" => "Flying Canoe", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "4.05", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1712473572938689", "country" => "Canada", "url" => "https://www.lcbo.com/en/flying-canoe-hard-cider-499020", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/9/0/499020.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/9/0/499020.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Clear 2.0", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "17.25", "volume" => "2838", "alcohol_content" => "4.0", "price_index" => "0.15195560253699789", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-clear-2-0-486142", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/6/1/486142.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/6/1/486142.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Reinhart's Strawberry Hibiscus Cider", "brand" => "Reinhart", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.55", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1501057082452431", "country" => "Canada", "url" => "https://www.lcbo.com/en/reinhart-s-strawberry-hibiscus-cider-15162", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015162.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015162.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Michelob Ultra", "brand" => "Michelob", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "14.95", "volume" => "2130", "alcohol_content" => "4.0", "price_index" => "0.1754694835680751", "country" => "Canada", "url" => "https://www.lcbo.com/en/michelob-ultra-697623", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/7/6/697623.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/7/6/697623.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Magnotta Brewery Gruppetto Light Lager", "brand" => "Magnotta", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.05", "volume" => "473", "alcohol_content" => "3.8", "price_index" => "0.16968955157449647", "country" => "Canada", "url" => "https://www.lcbo.com/en/magnotta-brewery-backyard-light-lager-12457", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/4/012457.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/4/012457.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brock Street Blonde", "brand" => "Brock Street", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.15", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.14799154334038053", "country" => "Canada", "url" => "https://www.lcbo.com/en/brock-street-blonde-468181", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/8/1/468181.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/8/1/468181.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Budweiser Shot", "brand" => "Budweiser", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "5.0", "volume" => "944", "alcohol_content" => "6.0", "price_index" => "0.0882768361581921", "country" => "Canada", "url" => "https://www.lcbo.com/en/budweiser-shot-16837", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/8/016837.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/8/016837.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Orillia Brewing Co Sunshine City Blonde", "brand" => "Orillia Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.14314658210007047", "country" => "Canada", "url" => "https://www.lcbo.com/en/orillia-brewing-co-sunshine-city-blonde-23262", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/2/023262.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/2/023262.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Tempt No. 9 Strawberry & Lime Cider", "brand" => "Tempt", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "2.75", "volume" => "500", "alcohol_content" => "4.5", "price_index" => "0.12222222222222222", "country" => "Denmark", "url" => "https://www.lcbo.com/en/tempt-no-9-strawberry-lime-cider-19978", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019978.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019978.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Old Milwaukee Ice", "brand" => "Old Milwaukee", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.4", "volume" => "710", "alcohol_content" => "5.5", "price_index" => "0.08706786171574904", "country" => "Canada", "url" => "https://www.lcbo.com/en/old-milwaukee-ice-585323", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/8/5/3/585323.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/8/5/3/585323.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lost Craft Dry Rose", "brand" => "Lost Craft", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.5", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.12332628611698379", "country" => "Canada", "url" => "https://www.lcbo.com/en/lost-craft-dry-rose-20111", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/1/020111.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/1/020111.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "MacKinnon Brothers Harvest Ale", "brand" => "MacKinnon Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1416490486257928", "country" => "Canada", "url" => "https://www.lcbo.com/en/mackinnon-brothers-harvest-ale-15798", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/7/015798.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/7/015798.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stonewall Light", "brand" => "Stonewall", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "7.0", "volume" => "1420", "alcohol_content" => "4.0", "price_index" => "0.1232394366197183", "country" => "Canada", "url" => "https://www.lcbo.com/en/stonewall-light-24829", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024829.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024829.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Maclean's Ales Maple Coffee Mild", "brand" => "Maclean's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.3", "volume" => "473", "alcohol_content" => "3.5", "price_index" => "0.19933554817275742", "country" => "Canada", "url" => "https://www.lcbo.com/en/maclean-s-ales-maple-coffee-mild-25003", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025003.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025003.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Labatt BLue", "brand" => "Labatt", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "11.95", "volume" => "2838", "alcohol_content" => "5.0", "price_index" => "0.08421423537702606", "country" => "Canada", "url" => "https://www.lcbo.com/en/labatt-blue-15258", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/2/015258.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/2/015258.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stowford Press Cider", "brand" => "Stowford Press Cider", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.1", "volume" => "500", "alcohol_content" => "4.5", "price_index" => "0.13777777777777778", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/stowford-press-cider-25029", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025029.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025029.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "JuiceBox Raspberry Lemonade", "brand" => "Juicebox", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12473572938689217", "country" => "Canada", "url" => "https://www.lcbo.com/en/juicebox-raspberry-lemonade-21417", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/4/021417.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/4/021417.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cowbell Brewing Co. Grapefruit Radler", "brand" => "Cowbell Brewing", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "3.25", "volume" => "473", "alcohol_content" => "2.5", "price_index" => "0.27484143763213525", "country" => "Canada", "url" => "https://www.lcbo.com/en/cowbell-brewing-co-grapefruit-radler-25060", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025060.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025060.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Tawse Cider", "brand" => "Tawse", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13742071881606763", "country" => "Canada", "url" => "https://www.lcbo.com/en/tawse-cider-569350", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/9/3/569350.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/9/3/569350.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sawdust City Patio Nights Sangria Pale Ale", "brand" => "Sawdust City Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.1", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.1666937713449341", "country" => "Canada", "url" => "https://www.lcbo.com/en/sawdust-city-patio-nights-sangria-pale-ale-26987", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/9/026987.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/9/026987.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Triple Bogey Lager", "brand" => "Triple Bogey", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.9", "volume" => "473", "alcohol_content" => "4.9", "price_index" => "0.12512404538982613", "country" => "Canada", "url" => "https://www.lcbo.com/en/triple-bogey-lager-393462", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/9/3/4/393462.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/9/3/4/393462.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Great Lakes Brewery Miami Weiss", "brand" => "Great Lakes Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.0", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.14094432699083861", "country" => "Canada", "url" => "https://www.lcbo.com/en/great-lakes-brewery-miami-weiss-26555", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/5/026555.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/5/026555.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cameron's Cruising through the Galaxy NEIPA", "brand" => "Cameron's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "6.3", "price_index" => "0.11913151448035168", "country" => "Canada", "url" => "https://www.lcbo.com/en/cameron-s-cruising-through-the-galaxy-neipa-17396", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/3/017396.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/3/017396.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Highlander Brew Co Scottish Ale", "brand" => "Highlander Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.4", "price_index" => "0.1331140866024587", "country" => "Canada", "url" => "https://www.lcbo.com/en/highlander-brew-co-scottish-ale-523381", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/2/3/3/523381.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/2/3/3/523381.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stella Artois", "brand" => "Stella Artois", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14376321353065538", "country" => "Canada", "url" => "https://www.lcbo.com/en/stella-artois-17820", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017820.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017820.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Exchange Pamplemousse Is On The Loose Hazy Ipa", "brand" => "Exchange Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.25", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.14975334742776603", "country" => "Canada", "url" => "https://www.lcbo.com/en/exchange-pamplemousse-is-on-the-loose-hazy-ipa-26626", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/6/026626.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/6/026626.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Creemore Springs Helles Light Lager", "brand" => "Creemore Springs", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "14.95", "volume" => "2130", "alcohol_content" => "3.7", "price_index" => "0.1896967389925136", "country" => "Canada", "url" => "https://www.lcbo.com/en/creemore-springs-helles-light-lager-19584", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/5/019584.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/5/019584.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rickard's Red", "brand" => "Rickard'S Red", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "27.95", "volume" => "4092", "alcohol_content" => "5.2", "price_index" => "0.13135386119257086", "country" => "Canada", "url" => "https://www.lcbo.com/en/rickard-s-red-927236", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/2/7/2/927236.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/2/7/2/927236.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "O'hara's Irish Nitro Stout", "brand" => "O'Hara's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.2", "volume" => "440", "alcohol_content" => "4.3", "price_index" => "0.16913319238900637", "country" => "Ireland", "url" => "https://www.lcbo.com/en/o-hara-s-irish-nitro-stout-20013", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020013.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020013.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Cobblestone Stout", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "440", "alcohol_content" => "4.2", "price_index" => "0.18398268398268397", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-cobblestone-stout-312850", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/1/2/8/312850.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/1/2/8/312850.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Waupoos Premium Cider", "brand" => "Waupoos", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "13.7", "volume" => "1364", "alcohol_content" => "6.5", "price_index" => "0.15452289645838033", "country" => "Canada", "url" => "https://www.lcbo.com/en/waupoos-premium-cider-612804", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/2/8/612804.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/2/8/612804.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collectiver Arts Jam up the Pineapple & Tangerine", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.55", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.18498942917547564", "country" => "Canada", "url" => "https://www.lcbo.com/en/collectiver-arts-jam-up-the-pineapple-tangerine-25689", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/6/025689.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/6/025689.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Indie Ale House Marco Polo Italian Style Pilsner", "brand" => "Indie Ale House", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14376321353065538", "country" => "Canada", "url" => "https://www.lcbo.com/en/indie-ale-house-marco-polo-italian-style-pilsner-26073", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026073.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026073.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Unibroue Blanche de Chambly Bleuet", "brand" => "Unibroue", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.11339611762444744", "country" => "Canada", "url" => "https://www.lcbo.com/en/unibroue-blanche-de-chambly-bleuet-25398", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/3/025398.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/3/025398.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Labatt Blue", "brand" => "Labatt", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "23.95", "volume" => "5676", "alcohol_content" => "5.0", "price_index" => "0.08439041578576462", "country" => "Canada", "url" => "https://www.lcbo.com/en/labatt-blue-228486", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/2/8/4/228486.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/2/8/4/228486.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Amsterdam Brewing Company YYZ Summer Flight Pack", "brand" => "Amsterdam Brewing", "category" => "Beer & Cider", "subcategory" => "Gifts and Samplers", "price" => "12.95", "volume" => "1892", "alcohol_content" => "5.5", "price_index" => "0.12444743417259273", "country" => "Canada", "url" => "https://www.lcbo.com/en/amsterdam-brewing-company-yyz-summer-flight-pack-24668", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/6/024668.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/6/024668.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Flying Dog Gonzo Imperial Porter", "brand" => "Flying Dog Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "5.0", "volume" => "355", "alcohol_content" => "10.0", "price_index" => "0.14084507042253522", "country" => "United States", "url" => "https://www.lcbo.com/en/flying-dog-gonzo-imperial-porter-16693", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/6/016693.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/6/016693.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bicycle Craft Brewery Frequency APA", "brand" => "Bicycle Craft Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.15", "volume" => "473", "alcohol_content" => "5.4", "price_index" => "0.1624774880588834", "country" => "Canada", "url" => "https://www.lcbo.com/en/bicycle-craft-brewery-frequency-apa-569848", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/9/8/569848.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/9/8/569848.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hop Valley Bubble Stash", "brand" => "Creemore Springs", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "6.2", "price_index" => "0.11593807542794789", "country" => "Canada", "url" => "https://www.lcbo.com/en/hop-valley-bubble-stash-22089", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/0/022089.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/0/022089.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ace Hill Pilsner", "brand" => "Ace Hill", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.9", "price_index" => "0.14453984553652327", "country" => "Canada", "url" => "https://www.lcbo.com/en/ace-hill-pilsner-461822", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/1/8/461822.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/1/8/461822.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Duchesse De Bourgogne", "brand" => "Duchesse", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.9", "volume" => "330", "alcohol_content" => "6.2", "price_index" => "0.1906158357771261", "country" => "Belgium", "url" => "https://www.lcbo.com/en/duchesse-de-bourgogne-492769", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/2/7/492769.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/2/7/492769.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Thornbury Craft Cranberry Cider", "brand" => "Thornbury", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.75", "volume" => "473", "alcohol_content" => "5.3", "price_index" => "0.14958713949499383", "country" => "Canada", "url" => "https://www.lcbo.com/en/thornbury-craft-cranberry-cider-571786", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/1/7/571786.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/1/7/571786.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Light", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "54.95", "volume" => "10650", "alcohol_content" => "4.0", "price_index" => "0.1289906103286385", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-light-15501", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/5/015501.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/5/015501.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Light", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "13.95", "volume" => "2130", "alcohol_content" => "4.0", "price_index" => "0.16373239436619716", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-light-906628", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/6/6/906628.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/6/6/906628.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Flying Monkeys Sparklepuff Triple IPA", "brand" => "Flying Monkeys", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.95", "volume" => "473", "alcohol_content" => "10.2", "price_index" => "0.10259917920656636", "country" => "Canada", "url" => "https://www.lcbo.com/en/flying-monkeys-sparklepuff-triple-ipa-688507", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/8/8/5/688507.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/8/8/5/688507.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Clear Lake Brewing Session Ale", "brand" => "Clear Lake Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.14755109231853417", "country" => "Canada", "url" => "https://www.lcbo.com/en/clear-lake-brewing-session-ale-573832", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/3/8/573832.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/3/8/573832.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Belgian Moon Mango Wheat", "brand" => "Belgian Moon", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.4", "price_index" => "0.12136872601988881", "country" => "Canada", "url" => "https://www.lcbo.com/en/belgian-moon-mango-wheat-697268", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/7/2/697268.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/7/2/697268.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Canadian", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "55.95", "volume" => "10650", "alcohol_content" => "5.0", "price_index" => "0.10507042253521127", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-canadian-15500", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/5/015500.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/5/015500.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "4est Brewery 4est Lager", "brand" => "4est Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13742071881606763", "country" => "Canada", "url" => "https://www.lcbo.com/en/4est-brewery-4est-lager-26993", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/9/026993.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/9/026993.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Original", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "30.95", "volume" => "5676", "alcohol_content" => "5.0", "price_index" => "0.10905567300916137", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-original-14095", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/0/014095.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/0/014095.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jever Pilsener", "brand" => "Jever", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.45", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.098", "country" => "Germany", "url" => "https://www.lcbo.com/en/jever-pilsener-378976", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/7/8/9/378976.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/7/8/9/378976.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Thornbury Village Honeycrisp Apple Cider", "brand" => "Thornbury", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.6", "price_index" => "0.13213530655391123", "country" => "Canada", "url" => "https://www.lcbo.com/en/thornbury-village-honeycrisp-apple-cider-15176", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015176.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015176.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Labatt Blue", "brand" => "Labatt", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "28.5", "volume" => "5115", "alcohol_content" => "5.0", "price_index" => "0.11143695014662756", "country" => "Canada", "url" => "https://www.lcbo.com/en/labatt-blue-218131", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/8/1/218131.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/8/1/218131.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Ultra", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "43.95", "volume" => "8184", "alcohol_content" => "3.0", "price_index" => "0.17900782013685243", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-ultra-14069", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/0/014069.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/0/014069.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Innis & Gunn Original", "brand" => "Innis & Gunn", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "19.05", "volume" => "3000", "alcohol_content" => "6.6", "price_index" => "0.09621212121212122", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/innis-gunn-original-15041", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/0/015041.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/0/015041.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brew Microbrewery Maple Beer", "brand" => "Brew Microbrewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.16701902748414377", "country" => "Canada", "url" => "https://www.lcbo.com/en/brew-microbrewery-maple-beer-10961", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/9/010961.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/9/010961.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "London Brewing Organic Hazy IPA", "brand" => "London Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.1284761749878029", "country" => "Canada", "url" => "https://www.lcbo.com/en/london-brewing-organic-hazy-ipa-24625", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/6/024625.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/6/024625.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nickel Brook Zap! Pink Lemonade Sour IPA", "brand" => "Nickel Brook", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "5.6", "price_index" => "0.13779824826336456", "country" => "Canada", "url" => "https://www.lcbo.com/en/nickel-brook-zap-pink-lemonade-sour-ipa-21689", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/6/021689.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/6/021689.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collingwood Brewery Freestyle Skadi IPA", "brand" => "Collingwood Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.25", "volume" => "473", "alcohol_content" => "7.2", "price_index" => "0.12479445618980502", "country" => "Canada", "url" => "https://www.lcbo.com/en/collingwood-brewery-freestyle-skadi-ipa-23551", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023551.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023551.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Juice Cloud IPA", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "6.6", "price_index" => "0.1137164456403357", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-juice-cloud-ipa-20871", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/8/020871.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/8/020871.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busch Light", "brand" => "Busch", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "11.95", "volume" => "2838", "alcohol_content" => "4.0", "price_index" => "0.10526779422128259", "country" => "Canada", "url" => "https://www.lcbo.com/en/busch-light-15253", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/2/015253.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/2/015253.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Whiskeyjack Cold Front", "brand" => "Whiskeyjack Beer Company", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1416490486257928", "country" => "Canada", "url" => "https://www.lcbo.com/en/whiskeyjack-cold-front-11159", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/1/011159.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/1/011159.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "No 99 Wayne Gretzky Craft Brewing Blonde Ale", "brand" => "Wayne Gretzky", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13742071881606763", "country" => "Canada", "url" => "https://www.lcbo.com/en/no-99-wayne-gretzky-craft-brewing-blonde-ale-27066", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/0/027066.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/0/027066.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nickel Brook Jam Stand Raspberry with Vanilla & Hibiscus", "brand" => "Nickel Brook Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.20877378435517968", "country" => "Canada", "url" => "https://www.lcbo.com/en/nickel-brook-jam-stand-raspberry-with-vanilla-hibiscus-27494", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/4/027494.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/4/027494.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Heineken", "brand" => "Heineken", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "29.5", "volume" => "3960", "alcohol_content" => "5.0", "price_index" => "0.14898989898989898", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/heineken-531392", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/1/3/531392.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/1/3/531392.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Clear 2.0", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "44.95", "volume" => "8520", "alcohol_content" => "4.0", "price_index" => "0.13189553990610328", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-clear-2-0-342352", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/4/2/3/342352.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/4/2/3/342352.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Fixed Gear Brewing Cherry Training Wheels Sour", "brand" => "Fixed Gear Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.25", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.22463002114164904", "country" => "Canada", "url" => "https://www.lcbo.com/en/fixed-gear-brewing-cherry-training-wheels-sour-13369", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/3/013369.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/3/013369.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Full Time IPA", "brand" => "Beau's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.12861169837914024", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-full-time-ipa-19268", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/2/019268.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/2/019268.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pommies Farmhouse Cider", "brand" => "Pommies", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.4", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.11980267794221283", "country" => "Canada", "url" => "https://www.lcbo.com/en/pommies-farmhouse-cider-418582", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/8/5/418582.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/8/5/418582.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coffin Ridge Forbidden Artisanal Cider", "brand" => "Coffin Ridge", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.75", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.12197105220361033", "country" => "Canada", "url" => "https://www.lcbo.com/en/coffin-ridge-forbidden-artisanal-cider-374496", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/7/4/4/374496.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/7/4/4/374496.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Left Field Brewery Scout Micro IPA", "brand" => "Left Field Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.3", "volume" => "355", "alcohol_content" => "3.5", "price_index" => "0.2655935613682092", "country" => "Canada", "url" => "https://www.lcbo.com/en/left-field-brewery-scout-micro-ipa-27079", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/0/027079.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/0/027079.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Henderson x Rush Moving Pitchers Belgian Pale Ale", "brand" => "Henderson Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "13.95", "volume" => "500", "alcohol_content" => "11.9", "price_index" => "0.23445378151260501", "country" => "Canada", "url" => "https://www.lcbo.com/en/henderson-x-rush-moving-pitchers-belgian-pale-ale-25453", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/4/025453.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/4/025453.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "29.95", "volume" => "5676", "alcohol_content" => "4.0", "price_index" => "0.13191508104298802", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-218107", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/8/1/218107.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/8/1/218107.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Innis & Gunn Islay Whisky Cask Laphroaig", "brand" => "Innis & Gunn", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "12.95", "volume" => "660", "alcohol_content" => "7.4", "price_index" => "0.26515151515151514", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/innis-gunn-islay-whisky-cask-laphroaig-25082", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025082.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025082.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "D'Ont Poke The Bear Berry Cider", "brand" => "D'Ont Poke The Bear", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.13069383048241398", "country" => "Canada", "url" => "https://www.lcbo.com/en/d-ont-poke-the-bear-berry-cider-15174", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015174.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015174.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Michelob Ultra", "brand" => "Michelob", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "27.5", "volume" => "4092", "alcohol_content" => "4.0", "price_index" => "0.16801075268817203", "country" => "Canada", "url" => "https://www.lcbo.com/en/michelob-ultra-284489", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/8/4/4/284489.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/8/4/4/284489.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hockley Amber", "brand" => "Hockley Valley Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12473572938689217", "country" => "Canada", "url" => "https://www.lcbo.com/en/hockley-amber-355065", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/5/5/0/355065.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/5/5/0/355065.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Good Monster", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.45", "volume" => "473", "alcohol_content" => "8.0", "price_index" => "0.11760042283298097", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-good-monster-20118", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/1/020118.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/1/020118.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Moosehead Lager", "brand" => "Moosehead", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12473572938689217", "country" => "Canada", "url" => "https://www.lcbo.com/en/moosehead-lager-25819", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/8/025819.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/8/025819.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collingwood Brewery Sunset Point Lager", "brand" => "Collingwood Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.4", "price_index" => "0.16096482798385547", "country" => "Canada", "url" => "https://www.lcbo.com/en/collingwood-brewery-sunset-point-lager-20960", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/9/020960.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/9/020960.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Driftwood Brewing Fat Tug IPA", "brand" => "Driftwood Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.85", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.11627906976744184", "country" => "Canada", "url" => "https://www.lcbo.com/en/driftwood-brewing-fat-tug-ipa-638478", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/8/4/638478.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/8/4/638478.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brock Street Pineapple Sour", "brand" => "Brock Street Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14799154334038053", "country" => "Canada", "url" => "https://www.lcbo.com/en/brock-street-pineapple-sour-24602", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/6/024602.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/6/024602.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Full Beard Brewing The Bearded Prospector", "brand" => "Full Beard Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15738783180643645", "country" => "Canada", "url" => "https://www.lcbo.com/en/full-beard-brewing-the-bearded-prospector-18334", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018334.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018334.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Steam Whistle Premium Pilsner", "brand" => "Steam Whistle", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14376321353065538", "country" => "Canada", "url" => "https://www.lcbo.com/en/steam-whistle-premium-pilsner-492009", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/2/0/492009.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/2/0/492009.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "4 Degrees Brewing Hill 70 Belgian Blonde Ale", "brand" => "4 Degrees Brewing Company", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.09815765629719116", "country" => "Canada", "url" => "https://www.lcbo.com/en/4-degrees-brewing-hill-70-belgian-blonde-ale-13925", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/9/013925.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/9/013925.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Slake Brewing Hatch Pale Ale", "brand" => "Slake Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "355", "alcohol_content" => "5.2", "price_index" => "0.21397616468039002", "country" => "Canada", "url" => "https://www.lcbo.com/en/slake-brewing-inc-hatch-pale-ale-26816", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/8/026816.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/8/026816.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Miller High Life", "brand" => "Miller", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "29.5", "volume" => "5325", "alcohol_content" => "4.6", "price_index" => "0.12043274137579098", "country" => "Canada", "url" => "https://www.lcbo.com/en/miller-high-life-574293", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/4/2/574293.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/4/2/574293.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hometown Brewing Co Hazy Susan IPA", "brand" => "Hometown Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.11804087385482735", "country" => "Canada", "url" => "https://www.lcbo.com/en/hometown-brewing-co-hazy-susan-ipa-14608", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/6/014608.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/6/014608.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Fuller's London Pride", "brand" => "Fuller's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "500", "alcohol_content" => "4.7", "price_index" => "0.14468085106382977", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/fuller-s-london-pride-470757", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/0/7/470757.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/0/7/470757.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Faxe 10% Extra Strong", "brand" => "Faxe", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.95", "volume" => "500", "alcohol_content" => "10.0", "price_index" => "0.079", "country" => "Denmark", "url" => "https://www.lcbo.com/en/faxe-10-extra-strong-497032", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/7/0/497032.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/7/0/497032.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Boneshaker IPA", "brand" => "Amsterdam", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "19.45", "volume" => "2838", "alcohol_content" => "7.1", "price_index" => "0.09652701267506378", "country" => "Canada", "url" => "https://www.lcbo.com/en/boneshaker-ipa-667790", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/7/7/667790.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/7/7/667790.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Storyteller Lager", "brand" => "Storyteller", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12473572938689217", "country" => "Canada", "url" => "https://www.lcbo.com/en/storyteller-lager-16903", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/9/016903.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/9/016903.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Alexander Keith's India Pale Ale", "brand" => "Alexander Keith's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "49.95", "volume" => "8520", "alcohol_content" => "5.0", "price_index" => "0.11725352112676057", "country" => "Canada", "url" => "https://www.lcbo.com/en/alexander-keith-s-india-pale-ale-222406", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/2/2/4/222406.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/2/2/4/222406.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "West Avenue Cider Gem", "brand" => "West Avenue", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.9", "volume" => "473", "alcohol_content" => "5.3", "price_index" => "0.15557062507479358", "country" => "Canada", "url" => "https://www.lcbo.com/en/west-avenue-cider-crush-23065", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/0/023065.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/0/023065.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Light", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "14.25", "volume" => "2046", "alcohol_content" => "4.0", "price_index" => "0.17412023460410556", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-light-906560", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/6/5/906560.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/6/5/906560.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rekorderlig Wild Berries Cider", "brand" => "Rekorderlig", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.35", "volume" => "500", "alcohol_content" => "4.5", "price_index" => "0.1488888888888889", "country" => "Sweden", "url" => "https://www.lcbo.com/en/rekorderlig-wild-berries-cider-413500", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/3/5/413500.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/3/5/413500.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts IPA No. 21", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.75", "volume" => "473", "alcohol_content" => "5.9", "price_index" => "0.17020819149317373", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-ipa-no-21-25909", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/9/025909.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/9/025909.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bench Brewing Hopsters IPA", "brand" => "Twenty Bench", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.85", "volume" => "473", "alcohol_content" => "6.8", "price_index" => "0.11969904240766073", "country" => "Canada", "url" => "https://www.lcbo.com/en/twenty-bench-brewing-hopster-ipa-25096", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025096.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025096.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Miller High Life", "brand" => "Miller", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "23.5", "volume" => "4260", "alcohol_content" => "4.6", "price_index" => "0.11992243314962237", "country" => "United States", "url" => "https://www.lcbo.com/en/miller-high-life-588921", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/8/8/9/588921.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/8/8/9/588921.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brock Street Brewing Light Lime Lager", "brand" => "Brock Street Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.2", "volume" => "473", "alcohol_content" => "3.6", "price_index" => "0.18792576932111815", "country" => "Canada", "url" => "https://www.lcbo.com/en/brock-street-brewing-light-lime-lager-26692", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/6/026692.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/6/026692.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sons of Kent Juice Box IPA", "brand" => "Sons Of Kent", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.4", "volume" => "473", "alcohol_content" => "6.9", "price_index" => "0.13481631277384565", "country" => "Canada", "url" => "https://www.lcbo.com/en/sons-of-kent-juice-box-ipa-15861", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015861.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015861.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Alexander Keith's India Pale Ale", "brand" => "Alexander Keith's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "41.95", "volume" => "8184", "alcohol_content" => "5.0", "price_index" => "0.1025171065493646", "country" => "Canada", "url" => "https://www.lcbo.com/en/alexander-keith-s-india-pale-ale-900159", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/0/1/900159.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/0/1/900159.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rochefort 10", "brand" => "Rochefort", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.5", "volume" => "330", "alcohol_content" => "11.3", "price_index" => "0.12067578439259856", "country" => "Belgium", "url" => "https://www.lcbo.com/en/rochefort-10-374363", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/7/4/3/374363.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/7/4/3/374363.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cigar City Frost Proof Belgian-Style White", "brand" => "Cigar City", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "13.45", "volume" => "1420", "alcohol_content" => "6.0", "price_index" => "0.1578638497652582", "country" => "United States", "url" => "https://www.lcbo.com/en/cigar-city-frost-proof-belgian-style-white-25024", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025024.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025024.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mackinnon Brewing Crosscut Canadian Ale", "brand" => "MacKinnon Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.13620100829403153", "country" => "Canada", "url" => "https://www.lcbo.com/en/mackinnon-brewing-crosscut-canadian-ale-414870", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/4/8/414870.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/4/8/414870.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Michelob Ultra 24x355ml", "brand" => "Michelob", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "49.5", "volume" => "8520", "alcohol_content" => "4.0", "price_index" => "0.14524647887323944", "country" => "Canada", "url" => "https://www.lcbo.com/en/michelob-ultra-24x355ml-618116", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/8/1/618116.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/8/1/618116.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Light", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "25.5", "volume" => "4092", "alcohol_content" => "4.0", "price_index" => "0.15579178885630499", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-light-906578", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/6/5/906578.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/6/5/906578.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "No 99 Wayne Gretzky Hazy IPA", "brand" => "Wayne Gretzky", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.11451726568005638", "country" => "Canada", "url" => "https://www.lcbo.com/en/no-99-wayne-gretzky-hazy-ipa-20035", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020035.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020035.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Refined Fool Brewing Party Sharks Foggy IPA", "brand" => "Refined Fool Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.5", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.14636526264433242", "country" => "Canada", "url" => "https://www.lcbo.com/en/refined-fool-brewing-party-sharks-foggy-ipa-24559", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024559.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024559.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Woodhouse Lager", "brand" => "Woodhouse Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13742071881606763", "country" => "Canada", "url" => "https://www.lcbo.com/en/woodhouse-lager-459537", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/9/5/459537.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/9/5/459537.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Keystone Light", "brand" => "Keystone", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "13.5", "volume" => "2838", "alcohol_content" => "4.0", "price_index" => "0.11892177589852009", "country" => "Canada", "url" => "https://www.lcbo.com/en/keystone-light-172379", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/7/2/3/172379.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/7/2/3/172379.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sons of Kent Brewing Company Hi Fi Triple Berry Sour", "brand" => "Sons Of Kent", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.15636011275546158", "country" => "Canada", "url" => "https://www.lcbo.com/en/sons-of-kent-brewing-company-hi-fi-triple-berry-sour-19721", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/7/019721.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/7/019721.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sandwich Brewing Co White Bronco Juicy IPA", "brand" => "Sandwich Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "5.7", "price_index" => "0.1390897963725381", "country" => "Canada", "url" => "https://www.lcbo.com/en/sandwich-brewing-co-white-bronco-juicy-ipa-16794", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/7/016794.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/7/016794.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Holman Brewing Bear Naked Lager", "brand" => "Holman Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13742071881606763", "country" => "Canada", "url" => "https://www.lcbo.com/en/holman-brewing-bear-naked-lager-16421", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/4/016421.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/4/016421.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "County Pear Cider", "brand" => "County Cider", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "7.0", "volume" => "500", "alcohol_content" => "6.5", "price_index" => "0.2153846153846154", "country" => "Canada", "url" => "https://www.lcbo.com/en/county-pear-cider-424093", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/2/4/0/424093.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/2/4/0/424093.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Refined Fool Van Full of Weirdos, Juicy IPA", "brand" => "Refined Fool", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "6.2", "price_index" => "0.12787287731023664", "country" => "Canada", "url" => "https://www.lcbo.com/en/refined-fool-van-full-of-weirdos-juicy-ipa-20870", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/8/020870.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/8/020870.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Small Pony Barrel Works All the Best Hats", "brand" => "Small Pony Barrel Works", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "7.5", "volume" => "375", "alcohol_content" => "5.3", "price_index" => "0.37735849056603776", "country" => "Canada", "url" => "https://www.lcbo.com/en/small-pony-barrel-works-all-the-best-hats-24578", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024578.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024578.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rorschach Brewing Inc Reverie Double Tangerine Dreamsicle DIPA", "brand" => "Rorschach Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.5", "volume" => "355", "alcohol_content" => "8.5", "price_index" => "0.14913007456503727", "country" => "Canada", "url" => "https://www.lcbo.com/en/rorschach-brewing-inc-reverie-double-tangerine-dreamsicle-dipa-26691", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/6/026691.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/6/026691.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Railway City Playa Cerveza", "brand" => "Railway City", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.15", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.14799154334038053", "country" => "Canada", "url" => "https://www.lcbo.com/en/railway-city-playa-cerveza-16769", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/7/016769.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/7/016769.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Tyskie Beer", "brand" => "Tyskie", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.55", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.102", "country" => "Poland", "url" => "https://www.lcbo.com/en/tyskie-beer-409581", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/9/5/409581.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/9/5/409581.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Strongbow Cider + FREE carafe & glasses", "brand" => "Strongbow", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "50.0", "volume" => "7040", "alcohol_content" => "5.3", "price_index" => "0.13400514579759862", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/strongbow-cider-free-carafe-glasses-27890", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/8/027890.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/8/027890.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Shawn & Ed Brewing Co. LagerShed Original", "brand" => "Shawn & Ed Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "13.95", "volume" => "1892", "alcohol_content" => "5.2", "price_index" => "0.141791348186697", "country" => "Canada", "url" => "https://www.lcbo.com/en/shawn-ed-brewing-co-lagershed-original-13814", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/8/013814.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/8/013814.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lake of Bays Stand Down IPA", "brand" => "Lake of Bays Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "6.9", "price_index" => "0.11183625946012195", "country" => "Canada", "url" => "https://www.lcbo.com/en/lake-of-bays-stand-down-ipa-20140", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/1/020140.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/1/020140.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lakeport Light", "brand" => "Lakeport", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "40.95", "volume" => "8184", "alcohol_content" => "4.0", "price_index" => "0.125091642228739", "country" => "Canada", "url" => "https://www.lcbo.com/en/lakeport-light-679589", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/9/5/679589.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/9/5/679589.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Creemore Springs Lot 9 Pilsner", "brand" => "Creemore Springs", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.15293958886239933", "country" => "Canada", "url" => "https://www.lcbo.com/en/creemore-springs-lot-9-pilsner-666966", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/6/9/666966.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/6/9/666966.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Henderson x Rush Canadian Golden Ale", "brand" => "Henderson Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.13069383048241398", "country" => "Canada", "url" => "https://www.lcbo.com/en/henderson-x-rush-canadian-golden-ale-19609", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/6/019609.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/6/019609.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beyond The Pale Brewing Co. Yummy!", "brand" => "Beyond The Pale", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.0", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.16262806960481377", "country" => "Canada", "url" => "https://www.lcbo.com/en/beyond-the-pale-brewing-co-yummy-576892", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/6/8/576892.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/6/8/576892.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Calabogie Brewing Bogie", "brand" => "Calabogie Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.13069383048241398", "country" => "Canada", "url" => "https://www.lcbo.com/en/calabogie-brewing-bogie-20041", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020041.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020041.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nickel Brook Naughty Neighbour American Pale Ale", "brand" => "Nickel Brook", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "4.9", "price_index" => "0.14669715666393407", "country" => "Canada", "url" => "https://www.lcbo.com/en/nickel-brook-naughty-neighbour-american-pale-ale-398693", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/9/8/6/398693.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/9/8/6/398693.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kokanee", "brand" => "Kokanee", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "43.95", "volume" => "8184", "alcohol_content" => "5.2", "price_index" => "0.1032737423866456", "country" => "Canada", "url" => "https://www.lcbo.com/en/kokanee-909523", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/9/5/909523.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/9/5/909523.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rodenbach Classic", "brand" => "Rodenbach", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "500", "alcohol_content" => "5.2", "price_index" => "0.12884615384615383", "country" => "Belgium", "url" => "https://www.lcbo.com/en/rodenbach-classic-15152", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015152.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015152.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Heritage Hops Perth County Conspiracy Pale Ale", "brand" => "Heritage Hops Perth County", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.15069047726148171", "country" => "Canada", "url" => "https://www.lcbo.com/en/heritage-hops-perth-county-conspiracy-pale-ale-20983", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/9/020983.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/9/020983.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Magnotta Small Batch Peach Cider", "brand" => "Magnotta", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.6", "price_index" => "0.13213530655391123", "country" => "Canada", "url" => "https://www.lcbo.com/en/magnotta-small-batch-peach-cider-16282", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/2/016282.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/2/016282.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Peroni Nastro Azzurro", "brand" => "Peroni Nastro Azzuro", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "15.65", "volume" => "1980", "alcohol_content" => "5.2", "price_index" => "0.152000777000777", "country" => "Italy", "url" => "https://www.lcbo.com/en/peroni-nastro-azzurro-525188", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/2/5/1/525188.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/2/5/1/525188.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busch", "brand" => "Busch", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "29.5", "volume" => "5325", "alcohol_content" => "4.7", "price_index" => "0.11787034262311458", "country" => "Canada", "url" => "https://www.lcbo.com/en/busch-168211", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/6/8/2/168211.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/6/8/2/168211.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Moosehead Lager", "brand" => "Moosehead", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "14.5", "volume" => "2046", "alcohol_content" => "5.0", "price_index" => "0.14173998044965785", "country" => "Canada", "url" => "https://www.lcbo.com/en/moosehead-lager-911396", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/1/1/3/911396.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/1/1/3/911396.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Bellows White", "brand" => "Black Bellows", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14799154334038053", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-bellows-white-517805", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/7/8/517805.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/7/8/517805.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Refined Fool, Pouch Envy, Australian Pale Ale", "brand" => "Refined Fool", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14799154334038053", "country" => "Canada", "url" => "https://www.lcbo.com/en/refined-fool-pouch-envy-australian-pale-ale-998138", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/9/8/1/998138.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/9/8/1/998138.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Clear 2.0", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "14.5", "volume" => "2130", "alcohol_content" => "4.0", "price_index" => "0.17018779342723003", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-clear-2-0-25397", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/3/025397.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/3/025397.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Old Vienna Lager", "brand" => "Old Vienna", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "13.5", "volume" => "2838", "alcohol_content" => "5.0", "price_index" => "0.09513742071881606", "country" => "Canada", "url" => "https://www.lcbo.com/en/old-vienna-lager-460881", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/0/8/460881.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/0/8/460881.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Tobermory Brewing Bruce Trail Blonde Ale", "brand" => "Tobermory Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.13213530655391117", "country" => "Canada", "url" => "https://www.lcbo.com/en/tobermory-brewing-bruce-trail-blonde-ale-17379", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/3/017379.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/3/017379.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeping Giant Skull Rock Stout", "brand" => "Sleeping Giant", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.3", "volume" => "473", "alcohol_content" => "5.1", "price_index" => "0.13679890560875513", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeping-giant-skull-rock-stout-482265", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/2/2/482265.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/2/2/482265.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Duntroon Cyder House - Raindance Rhubarb Infused", "brand" => "Duntrool", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.85", "volume" => "473", "alcohol_content" => "4.3", "price_index" => "0.18929150892374258", "country" => "Canada", "url" => "https://www.lcbo.com/en/duntroon-cyder-house-raindance-rhubarb-infused-10432", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/4/010432.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/4/010432.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Riverhead Brewing Tropical IPA", "brand" => "Riverhead Brewing Company Ltd", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.85", "volume" => "473", "alcohol_content" => "6.1", "price_index" => "0.13343499809378576", "country" => "Canada", "url" => "https://www.lcbo.com/en/riverhead-brewing-tropical-ipa-576959", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/6/9/576959.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/6/9/576959.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Corona", "brand" => "Corona", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "15.95", "volume" => "2130", "alcohol_content" => "4.6", "price_index" => "0.16278832414778524", "country" => "Canada", "url" => "https://www.lcbo.com/en/corona-17846", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017846.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017846.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light Peach", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.0", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.15856236786469344", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-peach-26309", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/3/026309.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/3/026309.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "CATAPULT BREWING Kolsch Style Lagered Ale", "brand" => "Catapult Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.3", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.14844136566056407", "country" => "Canada", "url" => "https://www.lcbo.com/en/catapult-brewing-kolsch-style-lagered-ale-10590", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/5/010590.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/5/010590.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Frank Brewing Lemonade Sour", "brand" => "Frank Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "3.8", "price_index" => "0.1919439189941026", "country" => "Canada", "url" => "https://www.lcbo.com/en/frank-brewing-lemonade-sour-19726", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/7/019726.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/7/019726.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Buzz Hemp Beer", "brand" => "Buzz", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "7.5", "volume" => "1420", "alcohol_content" => "5.0", "price_index" => "0.1056338028169014", "country" => "Canada", "url" => "https://www.lcbo.com/en/buzz-hemp-beer-11620", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/6/011620.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/6/011620.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Radical Road Yuzu Pale Ale", "brand" => "Radical Road", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.3", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1395348837209302", "country" => "Canada", "url" => "https://www.lcbo.com/en/radical-road-yuzu-pale-ale-519926", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/9/9/519926.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/9/9/519926.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lost Craft Apple Cider", "brand" => "Lost Craft", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14376321353065538", "country" => "Canada", "url" => "https://www.lcbo.com/en/lost-craft-apple-cider-688572", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/8/8/5/688572.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/8/8/5/688572.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pombucha - Harmony Of Cider & Kombucha", "brand" => "Drinklab Inc.", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.5", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.18498942917547567", "country" => "Canada", "url" => "https://www.lcbo.com/en/pombucha-harmony-of-cider-kombucha-131649", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/3/1/6/131649.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/3/1/6/131649.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Audio Visual Lager", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.14314658210007047", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-audio-visual-lager-12854", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/8/012854.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/8/012854.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Meyers Creek Brewing Vanilla Porter", "brand" => "Meyers Creek Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.1605952187347536", "country" => "Canada", "url" => "https://www.lcbo.com/en/meyers-creek-brewing-vanilla-porter-16695", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/6/016695.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/6/016695.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stock And Row Slow & Low Dry Cider", "brand" => "Stock & Row", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.45", "volume" => "355", "alcohol_content" => "5.0", "price_index" => "0.1943661971830986", "country" => "Canada", "url" => "https://www.lcbo.com/en/stock-and-row-slow-low-dry-cider-19370", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/3/019370.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/3/019370.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Berliner Pilsner", "brand" => "Beringer", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.45", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.098", "country" => "Germany", "url" => "https://www.lcbo.com/en/berliner-pilsner-574509", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/4/5/574509.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/4/5/574509.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busch", "brand" => "Busch", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "40.95", "volume" => "8184", "alcohol_content" => "4.7", "price_index" => "0.10646097210956511", "country" => "Canada", "url" => "https://www.lcbo.com/en/busch-696138", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/6/1/696138.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/6/1/696138.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Hazed & Confused", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.6", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.11709221011546593", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-hazed-confused-159772", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/5/9/7/159772.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/5/9/7/159772.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sapporo Premium Beer", "brand" => "Sapporo", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "15.95", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.14976525821596243", "country" => "Canada", "url" => "https://www.lcbo.com/en/sapporo-premium-beer-568642", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/8/6/568642.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/8/6/568642.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Michelob Ultra", "brand" => "Michelob", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "28.95", "volume" => "4260", "alcohol_content" => "4.0", "price_index" => "0.1698943661971831", "country" => "Canada", "url" => "https://www.lcbo.com/en/michelob-ultra-359398", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/5/9/3/359398.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/5/9/3/359398.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sons of Kent Brewing Company HiFi Mango Passionfruit Sour", "brand" => "Sons of Kent", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.15636011275546158", "country" => "Canada", "url" => "https://www.lcbo.com/en/sons-of-kent-brewing-company-hifi-mango-passionfruit-sour-24623", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/6/024623.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/6/024623.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Tea Time Lemon Wheat", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1501057082452431", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-tea-time-lemon-wheat-25390", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/3/025390.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/3/025390.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Passion Project Hazy IPA", "brand" => "Katalyst Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.9", "volume" => "473", "alcohol_content" => "5.8", "price_index" => "0.1421593642924838", "country" => "Canada", "url" => "https://www.lcbo.com/en/passion-project-hazy-ipa-24113", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/1/024113.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/1/024113.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busch Lager", "brand" => "Busch", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "52.95", "volume" => "10650", "alcohol_content" => "4.7", "price_index" => "0.10578363799820198", "country" => "Canada", "url" => "https://www.lcbo.com/en/busch-lager-15090", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/0/015090.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/0/015090.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Carling Old Vienna", "brand" => "Carling", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "40.95", "volume" => "8184", "alcohol_content" => "5.0", "price_index" => "0.1000733137829912", "country" => "Canada", "url" => "https://www.lcbo.com/en/carling-old-vienna-902056", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/2/0/902056.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/2/0/902056.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Budweiser", "brand" => "Budweiser", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "27.95", "volume" => "5676", "alcohol_content" => "5.0", "price_index" => "0.09848484848484848", "country" => "Canada", "url" => "https://www.lcbo.com/en/budweiser-218099", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/8/0/218099.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/8/0/218099.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Redneck Eatz Logger", "brand" => "Redneck Eatz", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.13269758445414062", "country" => "Canada", "url" => "https://www.lcbo.com/en/redneck-eatz-logger-22072", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/0/022072.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/0/022072.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.9", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.15327695560253699", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-1107", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/0/1/1/001107.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/0/1/1/001107.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brock Street Brewing Craft Light Lager", "brand" => "Brock Street Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.1", "volume" => "473", "alcohol_content" => "3.7", "price_index" => "0.17713273527227014", "country" => "Canada", "url" => "https://www.lcbo.com/en/brock-street-brewing-craft-light-lager-26074", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026074.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026074.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Frank Brewing Bombshell Blonde Ale", "brand" => "Frank Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.95", "volume" => "473", "alcohol_content" => "4.4", "price_index" => "0.1417451470305593", "country" => "Canada", "url" => "https://www.lcbo.com/en/frank-brewing-bombshell-blonde-ale-486100", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/6/1/486100.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/6/1/486100.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Detour", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "29.95", "volume" => "4260", "alcohol_content" => "4.3", "price_index" => "0.16350038213778798", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-detour-513093", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/3/0/513093.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/3/0/513093.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lagunitas IPA", "brand" => "NULL", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "500", "alcohol_content" => "6.2", "price_index" => "0.10967741935483871", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/lagunitas-ipa-26164", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/1/026164.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/1/026164.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Budweiser", "brand" => "Budweiser", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "31.5", "volume" => "5325", "alcohol_content" => "5.0", "price_index" => "0.11830985915492957", "country" => "Canada", "url" => "https://www.lcbo.com/en/budweiser-616938", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/6/9/616938.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/6/9/616938.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Eagle IPA", "brand" => "Charles Wells", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.8", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.11199999999999999", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/eagle-ipa-439828", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/3/9/8/439828.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/3/9/8/439828.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Carling Light", "brand" => "Carling", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "42.95", "volume" => "8520", "alcohol_content" => "4.0", "price_index" => "0.1260269953051643", "country" => "Canada", "url" => "https://www.lcbo.com/en/carling-light-616029", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/6/0/616029.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/6/0/616029.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Big Rig Bongo Tequilima Cerveza Radler", "brand" => "Big Rig Brewery", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "3.35", "volume" => "473", "alcohol_content" => "2.9", "price_index" => "0.2442224976306773", "country" => "Canada", "url" => "https://www.lcbo.com/en/big-rig-bongo-tequilima-cerveza-radler-24577", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024577.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024577.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Czechvar Dark Lager", "brand" => "Czechvar", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.8", "volume" => "500", "alcohol_content" => "4.7", "price_index" => "0.11914893617021276", "country" => "Czechia", "url" => "https://www.lcbo.com/en/czechvar-dark-lager-18170", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/1/018170.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/1/018170.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Royal City Bootleg Cream Ale", "brand" => "Royal City", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.12877186238708438", "country" => "Canada", "url" => "https://www.lcbo.com/en/royal-city-bootleg-cream-ale-22694", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/6/022694.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/6/022694.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beyond The Pale Aromatherapy IPA", "brand" => "Beyond The Pale", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.5", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.14636526264433242", "country" => "Canada", "url" => "https://www.lcbo.com/en/beyond-the-pale-aromatherapy-ipa-483388", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/3/3/483388.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/3/3/483388.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Perth Brewery Calypso IPA", "brand" => "Perth Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.15195560253699789", "country" => "Canada", "url" => "https://www.lcbo.com/en/perth-brewery-calypso-ipa-557439", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/7/4/557439.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/7/4/557439.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Corona Light", "brand" => "Corona", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "15.95", "volume" => "1980", "alcohol_content" => "3.4", "price_index" => "0.23692810457516336", "country" => "Canada", "url" => "https://www.lcbo.com/en/corona-light-17850", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017850.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017850.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Grolsch Premium Pilsner", "brand" => "Grolsch", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.9", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.11599999999999999", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/grolsch-premium-pilsner-535294", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/5/2/535294.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/5/2/535294.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Gateway City Brewery 137 Rye Pale Ale", "brand" => "Gateway City Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.1", "price_index" => "0.1347261949177134", "country" => "Canada", "url" => "https://www.lcbo.com/en/gateway-city-brewery-137-rye-pale-ale-16437", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/4/016437.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/4/016437.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Estrella Damm Lager", "brand" => "Damm", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.15", "volume" => "500", "alcohol_content" => "5.4", "price_index" => "0.11666666666666665", "country" => "Spain", "url" => "https://www.lcbo.com/en/estrella-damm-lager-531400", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/1/4/531400.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/1/4/531400.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Woodhouse IPA", "brand" => "Woodhouse Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.11804087385482735", "country" => "Canada", "url" => "https://www.lcbo.com/en/woodhouse-ipa-538538", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/8/5/538538.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/8/5/538538.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Matron Brewing Janky IPA", "brand" => "Matron Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "355", "alcohol_content" => "6.0", "price_index" => "0.18544600938967137", "country" => "Canada", "url" => "https://www.lcbo.com/en/matron-brewing-janky-ipa-22021", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/0/022021.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/0/022021.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sons of Kent Flywheel Blonde Lager", "brand" => "Sons Of Kent", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.1526896875734085", "country" => "Canada", "url" => "https://www.lcbo.com/en/sons-of-kent-flywheel-blonde-lager-10047", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/0/010047.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/0/010047.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Prince Eddy's Blonde Ale", "brand" => "Prince Eddy'S Brewing Co", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.15518870046331698", "country" => "Canada", "url" => "https://www.lcbo.com/en/prince-eddy-s-blonde-ale-638718", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/8/7/638718.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/8/7/638718.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Wellington Brewery Layback IPA w/ Guava & Coconut", "brand" => "Wellington Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.1518354795310398", "country" => "Canada", "url" => "https://www.lcbo.com/en/wellington-brewery-lackback-ipa-25694", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/6/025694.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/6/025694.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Moosehead Neon Radler Tropical Punch", "brand" => "Moosehead", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "2.95", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.1559196617336152", "country" => "Canada", "url" => "https://www.lcbo.com/en/moosehead-neon-radler-tropical-punch-24996", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/9/024996.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/9/024996.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Labatt Blue", "brand" => "Labatt", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.45", "volume" => "740", "alcohol_content" => "5.0", "price_index" => "0.09324324324324325", "country" => "Canada", "url" => "https://www.lcbo.com/en/labatt-blue-415224", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/5/2/415224.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/5/2/415224.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Budweiser", "brand" => "Budweiser", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "14.25", "volume" => "2046", "alcohol_content" => "5.0", "price_index" => "0.13929618768328444", "country" => "Canada", "url" => "https://www.lcbo.com/en/budweiser-902619", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/2/6/902619.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/2/6/902619.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Longslice Brewery Princess Clementine Sour", "brand" => "Longslice Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.16701902748414377", "country" => "Canada", "url" => "https://www.lcbo.com/en/longslice-brewery-princess-clementine-sour-23513", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023513.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023513.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "New Ontario Brewing Bear Runner Blonde Ale", "brand" => "New Ontario Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15738783180643645", "country" => "Canada", "url" => "https://www.lcbo.com/en/new-ontario-brewing-bear-runner-blonde-ale-473637", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/3/6/473637.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/3/6/473637.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Seagram White Peach Cider", "brand" => "Seagrams", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.3", "price_index" => "0.11767521640272847", "country" => "Canada", "url" => "https://www.lcbo.com/en/seagram-white-peach-cider-19985", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019985.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019985.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Creemore Springs Premium Lager", "brand" => "Creemore Springs", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14376321353065538", "country" => "Canada", "url" => "https://www.lcbo.com/en/creemore-springs-premium-lager-666917", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/6/9/666917.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/6/9/666917.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Caledon Hills Bohemian Pils", "brand" => "Caledon Hills", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "4.2", "price_index" => "0.17114668277458975", "country" => "Canada", "url" => "https://www.lcbo.com/en/caledon-hills-bohemian-pils-10474", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/4/010474.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/4/010474.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Original Draught", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "14.25", "volume" => "2046", "alcohol_content" => "5.0", "price_index" => "0.13929618768328444", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-original-draught-612259", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/2/2/612259.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/2/2/612259.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Founders All Day IPA", "brand" => "Founders Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.7", "volume" => "568", "alcohol_content" => "4.7", "price_index" => "0.13859754270302668", "country" => "United States", "url" => "https://www.lcbo.com/en/founders-all-day-ipa-578443", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/8/4/578443.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/8/4/578443.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Canadian Cold Shots 6.0", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "5.0", "volume" => "888", "alcohol_content" => "6.0", "price_index" => "0.09384384384384384", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-canadian-cold-shots-6-0-17488", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/4/017488.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/4/017488.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Carib Lager", "brand" => "Carib", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "13.9", "volume" => "1980", "alcohol_content" => "5.2", "price_index" => "0.135003885003885", "country" => "Trinidad & Tobago", "url" => "https://www.lcbo.com/en/carib-lager-328419", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/2/8/4/328419.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/2/8/4/328419.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Alexander Keith's IPA", "brand" => "Alexander Keith's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "16.5", "volume" => "2838", "alcohol_content" => "5.0", "price_index" => "0.11627906976744186", "country" => "Canada", "url" => "https://www.lcbo.com/en/alexander-keith-s-ipa-442582", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/2/5/442582.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/2/5/442582.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "The Second Wedge Brewing High Grass Lemongrass Ginger Saison", "brand" => "The Second Wedge Brewing Company", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14799154334038053", "country" => "Canada", "url" => "https://www.lcbo.com/en/the-second-wedge-brewing-high-grass-lemongrass-ginger-saison-618751", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/8/7/618751.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/8/7/618751.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Vieni Sparkling Apple Cider", "brand" => "VIENI ESTATES INC.", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "13.8", "volume" => "750", "alcohol_content" => "6.0", "price_index" => "0.3066666666666667", "country" => "Canada", "url" => "https://www.lcbo.com/en/vieni-sparkling-apple-cider-23071", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/0/023071.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/0/023071.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "London Brewing Front Porch Session IPA", "brand" => "London Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.17177589852008454", "country" => "Canada", "url" => "https://www.lcbo.com/en/london-brewing-front-porch-session-ipa-13534", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/5/013534.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/5/013534.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Carling Lager", "brand" => "Carling", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "42.95", "volume" => "8520", "alcohol_content" => "4.9", "price_index" => "0.10287917984095046", "country" => "Canada", "url" => "https://www.lcbo.com/en/carling-lager-615187", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/5/1/615187.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/5/1/615187.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Tomorrow Brew Co. Monty's Aged Ryed Ale", "brand" => "Old Tomorrow Brew Co.", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "6.2", "price_index" => "0.11423310373047807", "country" => "Canada", "url" => "https://www.lcbo.com/en/old-tomorrow-brew-co-monty-s-aged-ryed-ale-498691", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/8/6/498691.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/8/6/498691.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Zubr", "brand" => "Zubr", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.55", "volume" => "500", "alcohol_content" => "5.7", "price_index" => "0.08947368421052632", "country" => "Poland", "url" => "https://www.lcbo.com/en/zubr-617183", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/7/1/617183.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/7/1/617183.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Side Launch Raspberry Lemonade Refresher", "brand" => "Side Launch", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.2", "price_index" => "0.17366354575656903", "country" => "Canada", "url" => "https://www.lcbo.com/en/side-launch-raspberry-lemonade-refresher-25224", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/2/025224.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/2/025224.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Tread Lightly", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.1", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.1638477801268499", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-tread-lightly-15415", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015415.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015415.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Waterloo Premium Amber", "brand" => "Waterloo Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "6.8", "price_index" => "0.09171744807859719", "country" => "Canada", "url" => "https://www.lcbo.com/en/waterloo-premium-amber-263327", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/6/3/3/263327.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/6/3/3/263327.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Singha Lager", "brand" => "Singha", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "13.5", "volume" => "1980", "alcohol_content" => "5.0", "price_index" => "0.13636363636363635", "country" => "Thailand", "url" => "https://www.lcbo.com/en/singha-lager-676395", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/6/3/676395.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/6/3/676395.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Leffe Blonde", "brand" => "Leffe", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "15.95", "volume" => "1980", "alcohol_content" => "6.5", "price_index" => "0.12393162393162391", "country" => "Belgium", "url" => "https://www.lcbo.com/en/leffe-blonde-84012", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/8/4/0/084012.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/8/4/0/084012.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pearbucha Flavoured Cider", "brand" => "Pombucha", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.6", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.19027484143763213", "country" => "Canada", "url" => "https://www.lcbo.com/en/pearbucha-flavoured-cider-25032", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025032.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025032.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Railway City Juice Caboose IPA", "brand" => "Railway City", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.8", "price_index" => "0.10726277826141027", "country" => "Canada", "url" => "https://www.lcbo.com/en/railway-city-juice-caboose-ipa-10833", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/8/010833.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/8/010833.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lomza Beer", "brand" => "Lomza", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.5", "volume" => "500", "alcohol_content" => "5.5", "price_index" => "0.09090909090909091", "country" => "Poland", "url" => "https://www.lcbo.com/en/lomza-beer-540815", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/0/8/540815.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/0/8/540815.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beck's", "brand" => "Beck's", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.0", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.12", "country" => "Germany", "url" => "https://www.lcbo.com/en/beck-s-322362", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/2/2/3/322362.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/2/2/3/322362.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bench Brewing Stone Road White Ale", "brand" => "Bench Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.2", "price_index" => "0.1686298197926105", "country" => "Canada", "url" => "https://www.lcbo.com/en/bench-brewing-stone-road-white-ale-647867", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/7/8/647867.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/7/8/647867.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Tread Lightly", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "28.95", "volume" => "4260", "alcohol_content" => "4.0", "price_index" => "0.1698943661971831", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-tread-lightly-15787", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/7/015787.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/7/015787.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Broadhead Brewing Guava & Strawberry Saison", "brand" => "Broadhead Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.85", "volume" => "473", "alcohol_content" => "7.5", "price_index" => "0.10852713178294573", "country" => "Canada", "url" => "https://www.lcbo.com/en/broadhead-brewing-guava-strawberry-saison-24565", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024565.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024565.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Young's Double Chocolate Stout", "brand" => "Young's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "440", "alcohol_content" => "5.2", "price_index" => "0.15078671328671328", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/young-s-double-chocolate-stout-159202", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/5/9/2/159202.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/5/9/2/159202.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sam Adams Wicked Easy", "brand" => "Sam Adams", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.14619225405964642", "country" => "United States", "url" => "https://www.lcbo.com/en/sam-adams-wicked-easy-25424", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/4/025424.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/4/025424.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busch Ice", "brand" => "Busch", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "11.95", "volume" => "2838", "alcohol_content" => "5.5", "price_index" => "0.07655839579729642", "country" => "Canada", "url" => "https://www.lcbo.com/en/busch-ice-15256", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/2/015256.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/2/015256.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Imperial City Brew house Milkshake IPA", "brand" => "Imperial City Brewhouse", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.6", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.12684989429175478", "country" => "Canada", "url" => "https://www.lcbo.com/en/imperial-city-brewhouse-milkshake-ipa-26698", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/6/026698.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/6/026698.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Cliff Jump Cranberry Cider", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.8", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.14606957524505093", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-cliff-jump-cranberry-cider-688630", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/8/8/6/688630.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/8/8/6/688630.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Publican House Pub House Ale", "brand" => "The Publican House", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.3", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.1453488372093023", "country" => "Canada", "url" => "https://www.lcbo.com/en/publican-house-pub-house-ale-437152", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/3/7/1/437152.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/3/7/1/437152.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cowbell Rose Cider", "brand" => "Cowbell Brewing", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.6", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1522198731501057", "country" => "Canada", "url" => "https://www.lcbo.com/en/cowbell-rose-cider-19998", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019998.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019998.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Detour", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.3", "price_index" => "0.16962485864595114", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-detour-404368", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/4/3/404368.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/4/3/404368.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Organic Lager", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "26.95", "volume" => "4260", "alcohol_content" => "4.2", "price_index" => "0.1506259780907668", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-organic-lager-16697", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/6/016697.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/6/016697.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Anderson Craft Ales Aussie IPA", "brand" => "Anderson Craft Ales", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "15.45", "volume" => "2130", "alcohol_content" => "6.2", "price_index" => "0.1169922762380736", "country" => "Canada", "url" => "https://www.lcbo.com/en/anderson-craft-ales-aussie-ipa-22618", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/6/022618.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/6/022618.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Four Fathers Brewing Shevchenko 9 +", "brand" => "Four Fathers Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.2", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13530655391120508", "country" => "Canada", "url" => "https://www.lcbo.com/en/four-fathers-brewing-shevchenko-9-493445", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/3/4/493445.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/3/4/493445.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Anderson IPA", "brand" => "Anderson Craft Ales", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "14.95", "volume" => "2130", "alcohol_content" => "6.5", "price_index" => "0.10798122065727697", "country" => "Canada", "url" => "https://www.lcbo.com/en/anderson-ipa-494633", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/4/6/494633.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/4/6/494633.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Miller Lite", "brand" => "Miller", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "17.25", "volume" => "2838", "alcohol_content" => "4.0", "price_index" => "0.15195560253699789", "country" => "Canada", "url" => "https://www.lcbo.com/en/miller-lite-558940", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/8/9/558940.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/8/9/558940.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bobcaygeon Brewing Houseboat Hefeweizen", "brand" => "Bobcaygeon Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "5.1", "price_index" => "0.15545330182813086", "country" => "Canada", "url" => "https://www.lcbo.com/en/bobcaygeon-brewing-houseboat-hefeweizen-27245", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/2/027245.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/2/027245.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Flying Monkeys 12 Minutes to Destiny", "brand" => "Flying Monkeys", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "4.1", "price_index" => "0.18821224153044916", "country" => "Canada", "url" => "https://www.lcbo.com/en/flying-monkeys-12-minutes-to-destiny-514935", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/4/9/514935.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/4/9/514935.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Growers Granny Smith Apple Cider", "brand" => "Growers", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "13.95", "volume" => "1980", "alcohol_content" => "7.0", "price_index" => "0.10064935064935063", "country" => "Canada", "url" => "https://www.lcbo.com/en/growers-granny-smith-apple-cider-238436", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/3/8/4/238436.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/3/8/4/238436.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Anderson Craft Ales New Zealand Lager", "brand" => "Anderson Craft Ales", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "14.95", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.14037558685446008", "country" => "Canada", "url" => "https://www.lcbo.com/en/anderson-craft-ales-new-zealand-lager-19720", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/7/019720.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/7/019720.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pump House Crafty Radler Blood Orange Peach", "brand" => "PUMP HOUSE", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.15518870046331698", "country" => "Canada", "url" => "https://www.lcbo.com/en/pump-house-crafty-radler-blood-orange-peach-25083", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025083.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025083.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Innis & Gunn Caribbean Rum Cask", "brand" => "Innis & Gunn", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "15.85", "volume" => "1980", "alcohol_content" => "6.8", "price_index" => "0.11772133095662506", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/innis-gunn-caribbean-rum-cask-572008", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/2/0/572008.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/2/0/572008.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cameron's Brewing Co. Jungle of Love Tropical Fruit Sour", "brand" => "Cameron's Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.17397815362931643", "country" => "Canada", "url" => "https://www.lcbo.com/en/cameron-s-brewing-co-jungle-of-love-tropical-fruit-sour-25085", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025085.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025085.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bobcaygeon Brewing Common Loon APA", "brand" => "Bobcaygeon Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.6", "price_index" => "0.15856236786469347", "country" => "Canada", "url" => "https://www.lcbo.com/en/bobcaygeon-brewing-common-loon-apa-471474", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/1/4/471474.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/1/4/471474.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Waterloo Craft Lager", "brand" => "Waterloo Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.12993305144467934", "country" => "Canada", "url" => "https://www.lcbo.com/en/waterloo-craft-lager-142745", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/4/2/7/142745.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/4/2/7/142745.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Dos Equis Lager", "brand" => "Dos Equis", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "15.95", "volume" => "2130", "alcohol_content" => "4.5", "price_index" => "0.1664058424621805", "country" => "Mexico", "url" => "https://www.lcbo.com/en/dos-equis-lager-616540", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/6/5/616540.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/6/5/616540.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Wellington Brewery Upside IPA", "brand" => "Wellington Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "6.8", "price_index" => "0.11037184429797288", "country" => "Canada", "url" => "https://www.lcbo.com/en/wellington-brewery-upside-ipa-508580", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/0/8/5/508580.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/0/8/5/508580.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeping Giant White Out Hazy IPA", "brand" => "Sleeping Giant", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "6.1", "price_index" => "0.12303746577478945", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeping-giant-white-out-hazy-ipa-16301", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/3/016301.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/3/016301.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Moosehead Neon Radler Blue Raspberry", "brand" => "Moosehead", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "2.95", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.1559196617336152", "country" => "Canada", "url" => "https://www.lcbo.com/en/moosehead-neon-radler-blue-raspberry-24995", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/9/024995.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/9/024995.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "DAB Dark Lager", "brand" => "DAB", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.45", "volume" => "500", "alcohol_content" => "4.9", "price_index" => "0.1", "country" => "Germany", "url" => "https://www.lcbo.com/en/dab-dark-lager-384677", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/8/4/6/384677.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/8/4/6/384677.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busl - Rubus - Hibiscus & Raspberry Cider", "brand" => "Busl", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.16701902748414377", "country" => "Canada", "url" => "https://www.lcbo.com/en/busl-rubus-hibiscus-raspberry-cider-25123", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/1/025123.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/1/025123.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lake of the Woods Dead Mans Switch NEIPA", "brand" => "Lake Of The Woods", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "6.8", "price_index" => "0.11658997637109812", "country" => "Canada", "url" => "https://www.lcbo.com/en/lake-of-the-woods-dead-mans-switch-neipa-20939", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/9/020939.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/9/020939.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Purple Skull Kolsch", "brand" => "Purple Skull Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.2", "price_index" => "0.16359609382865198", "country" => "Canada", "url" => "https://www.lcbo.com/en/purple-skull-kolsch-10312", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/3/010312.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/3/010312.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "St-Ambroise Oatmeal Stout", "brand" => "St. Ambroise", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.05", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12896405919661733", "country" => "Canada", "url" => "https://www.lcbo.com/en/st-ambroise-oatmeal-stout-398677", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/9/8/6/398677.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/9/8/6/398677.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Amsterdam Fria Cerveza", "brand" => "Amsterdam", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.15", "volume" => "473", "alcohol_content" => "4.6", "price_index" => "0.14477433587645924", "country" => "Canada", "url" => "https://www.lcbo.com/en/amsterdam-fria-cerveza-14953", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/9/014953.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/9/014953.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Carling", "brand" => "Carling", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "40.95", "volume" => "8184", "alcohol_content" => "4.9", "price_index" => "0.1021156263091747", "country" => "Canada", "url" => "https://www.lcbo.com/en/carling-695635", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/5/6/695635.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/5/6/695635.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Original Draught", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "31.5", "volume" => "5325", "alcohol_content" => "5.0", "price_index" => "0.11830985915492957", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-original-draught-425744", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/2/5/7/425744.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/2/5/7/425744.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Ultra", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "26.5", "volume" => "4260", "alcohol_content" => "3.0", "price_index" => "0.20735524256651017", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-ultra-14070", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/0/014070.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/0/014070.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lake of Bays Day Dreamin' Tropical Fruit Pale Ale", "brand" => "Lake of Bays Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "4.9", "price_index" => "0.15101177891875567", "country" => "Canada", "url" => "https://www.lcbo.com/en/lake-of-bays-day-dreamin-tropical-fruit-pale-ale-24580", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024580.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024580.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kronenbourg 1664", "brand" => "Kronenbourg 1664", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "15.75", "volume" => "1980", "alcohol_content" => "4.7", "price_index" => "0.16924564796905223", "country" => "France", "url" => "https://www.lcbo.com/en/kronenbourg-1664-6106", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/0/6/1/006106.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/0/6/1/006106.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Whitewater Brewing Co. High Tide", "brand" => "Whitewater Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "6.9", "price_index" => "0.11183625946012195", "country" => "Canada", "url" => "https://www.lcbo.com/en/whitewater-brewing-co-high-tide-19995", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019995.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019995.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "14.25", "volume" => "2046", "alcohol_content" => "4.0", "price_index" => "0.17412023460410556", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-908632", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/8/6/908632.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/8/6/908632.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Labatt Blue", "brand" => "Labatt", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "42.95", "volume" => "8520", "alcohol_content" => "5.0", "price_index" => "0.10082159624413146", "country" => "Canada", "url" => "https://www.lcbo.com/en/labatt-blue-906313", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/6/3/906313.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/6/3/906313.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Turkey Shoot Brewing Lake Simcoe Lagered Ale", "brand" => "Turkey Shoot Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.15415785764622975", "country" => "Canada", "url" => "https://www.lcbo.com/en/turkey-shoot-brewing-lake-simcoe-lagered-ale-22022", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/0/022022.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/0/022022.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Canadian", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "29.95", "volume" => "5676", "alcohol_content" => "5.0", "price_index" => "0.10553206483439041", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-canadian-568188", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/8/1/568188.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/8/1/568188.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Holsten Premium Pilsner", "brand" => "Holsten", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.45", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.098", "country" => "Germany", "url" => "https://www.lcbo.com/en/holsten-premium-pilsner-288365", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/8/8/3/288365.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/8/8/3/288365.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Henderson's FIGO Italian Pilsner", "brand" => "Henderson's Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.6", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.13838170286373247", "country" => "Canada", "url" => "https://www.lcbo.com/en/henderson-s-figo-italian-pilsner-23047", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/0/023047.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/0/023047.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Refined Fool Millennial Session Sour", "brand" => "Refined Fool", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.17397815362931643", "country" => "Canada", "url" => "https://www.lcbo.com/en/millennial-passion-session-sour-25680", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/6/025680.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/6/025680.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Brewery Big World Small Batch", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "7.8", "price_index" => "0.10706347915650243", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-brewery-big-world-small-batch-24824", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024824.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024824.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Watermelon Wheat", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.1644350481559784", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-watermelon-wheat-20071", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020071.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020071.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Henderson's Brewing Co. Pearson Express IPA", "brand" => "Henderson Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.11221336802732151", "country" => "Canada", "url" => "https://www.lcbo.com/en/henderson-s-brewing-co-pearson-express-ipa-513002", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/3/0/513002.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/3/0/513002.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Railway City Dead Elephant IPA", "brand" => "Railway City", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "6.8", "price_index" => "0.10415371222484765", "country" => "Canada", "url" => "https://www.lcbo.com/en/railway-city-dead-elephant-ipa-272104", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/2/1/272104.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/2/1/272104.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Creemore Kellerbier", "brand" => "Creemore", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14376321353065538", "country" => "Canada", "url" => "https://www.lcbo.com/en/creemore-kellerbier-25057", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025057.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025057.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busch Light", "brand" => "Busch", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "29.5", "volume" => "5325", "alcohol_content" => "4.0", "price_index" => "0.13849765258215962", "country" => "Canada", "url" => "https://www.lcbo.com/en/busch-light-209189", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/0/9/1/209189.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/0/9/1/209189.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Heineken", "brand" => "Heineken", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.4", "volume" => "500", "alcohol_content" => "4.7", "price_index" => "0.14468085106382977", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/heineken-337949", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/7/9/337949.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/7/9/337949.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stella Artois", "brand" => "Stella Artois", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "29.5", "volume" => "3960", "alcohol_content" => "5.0", "price_index" => "0.14898989898989898", "country" => "Canada", "url" => "https://www.lcbo.com/en/stella-artois-17852", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017852.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017852.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Vimy Brewing Co. Vimy Cream Ale", "brand" => "Vimy Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.13213530655391117", "country" => "Canada", "url" => "https://www.lcbo.com/en/vimy-brewing-co-vimy-cream-ale-617290", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/7/2/617290.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/7/2/617290.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Duntroon Cyder House Standing Rock", "brand" => "Duntrool", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.65", "volume" => "473", "alcohol_content" => "4.3", "price_index" => "0.17945818378484685", "country" => "Canada", "url" => "https://www.lcbo.com/en/duntroon-cyder-house-standing-rock-572594", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/2/5/572594.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/2/5/572594.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Grand River Brewing Grand Ave IPA", "brand" => "Grand River Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.11546592941941779", "country" => "Canada", "url" => "https://www.lcbo.com/en/grand-river-brewing-grand-ave-ipa-18750", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/7/018750.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/7/018750.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Venture Off The Beaten Pack", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Gifts and Samplers", "price" => "27.5", "volume" => "4260", "alcohol_content" => "5.0", "price_index" => "0.12910798122065728", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-venture-off-the-beaten-pack-617464", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/7/4/617464.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/7/4/617464.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Big Rig Brewery Shakedown APA", "brand" => "Big Rig Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.6", "volume" => "473", "alcohol_content" => "5.6", "price_index" => "0.13591060102688013", "country" => "Canada", "url" => "https://www.lcbo.com/en/big-rig-brewery-shakedown-apa-14677", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/6/014677.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/6/014677.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Budweiser", "brand" => "Budweiser", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "55.95", "volume" => "10650", "alcohol_content" => "5.0", "price_index" => "0.10507042253521127", "country" => "Canada", "url" => "https://www.lcbo.com/en/budweiser-669416", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/9/4/669416.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/9/4/669416.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Clear 2.0 Mix Pack", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Gifts and Samplers", "price" => "26.95", "volume" => "4260", "alcohol_content" => "4.0", "price_index" => "0.15815727699530516", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-clear-2-0-mix-pack-25566", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/5/025566.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/5/025566.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Landshark Lager", "brand" => "Landshark", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "16.5", "volume" => "2838", "alcohol_content" => "4.6", "price_index" => "0.1263902932254803", "country" => "Canada", "url" => "https://www.lcbo.com/en/landshark-lager-465385", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/5/3/465385.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/5/3/465385.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Great Lakes Brewery  Canuck Pale Ale", "brand" => "Great Lakes Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.0", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.12197105220361032", "country" => "Canada", "url" => "https://www.lcbo.com/en/great-lakes-brewery-canuck-pale-ale-242545", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/4/2/5/242545.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/4/2/5/242545.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bancroft Brewing Blueberry Wavin Wheat", "brand" => "Bancroft Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.8", "price_index" => "0.12393380476780638", "country" => "Canada", "url" => "https://www.lcbo.com/en/bancroft-brewing-blueberry-wavin-wheat-26689", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/6/026689.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/6/026689.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hop City Misfit Mango Passion IPA", "brand" => "Hop City Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "6.3", "price_index" => "0.11409778851639317", "country" => "Canada", "url" => "https://www.lcbo.com/en/hop-city-misfit-mango-passion-ipa-20137", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/1/020137.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/1/020137.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kichesippi Beer Company Cheshire Cat Pilsner", "brand" => "Kichesippi", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.15195560253699789", "country" => "Canada", "url" => "https://www.lcbo.com/en/kichesippi-beer-company-cheshire-cat-pilsner-20820", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/8/020820.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/8/020820.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Veltins Pilsener", "brand" => "Veltins", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.75", "volume" => "500", "alcohol_content" => "4.8", "price_index" => "0.11458333333333333", "country" => "Germany", "url" => "https://www.lcbo.com/en/veltins-pilsener-22857", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/8/022857.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/8/022857.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Landshark Lager", "brand" => "Landshark", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "13.95", "volume" => "2130", "alcohol_content" => "4.6", "price_index" => "0.14237599510104101", "country" => "Canada", "url" => "https://www.lcbo.com/en/landshark-lager-467209", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/7/2/467209.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/7/2/467209.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "5 Paddles Home Sweet Home", "brand" => "5 Paddles Brewing Company", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.14030367095906207", "country" => "Canada", "url" => "https://www.lcbo.com/en/5-paddles-home-sweet-home-617613", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/7/6/617613.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/7/6/617613.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Broadhead Blueberry Blonde", "brand" => "Broadhead Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1501057082452431", "country" => "Canada", "url" => "https://www.lcbo.com/en/broadhead-blueberry-blonde-467324", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/7/3/467324.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/7/3/467324.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Laker Ice", "brand" => "Laker", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "40.95", "volume" => "8184", "alcohol_content" => "5.5", "price_index" => "0.09097573980271928", "country" => "Canada", "url" => "https://www.lcbo.com/en/laker-ice-380337", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/8/0/3/380337.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/8/0/3/380337.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Wellington Brewery Helles Lager", "brand" => "Wellington Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.1526896875734085", "country" => "Canada", "url" => "https://www.lcbo.com/en/wellington-brewery-helles-lager-921296", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/2/1/2/921296.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/2/1/2/921296.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sawdust City Tropical Storm Daiquiri", "brand" => "Sawdust City Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.5", "volume" => "473", "alcohol_content" => "6.2", "price_index" => "0.15344745277228397", "country" => "Canada", "url" => "https://www.lcbo.com/en/sawdust-city-tropical-storm-daiquiri-24563", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024563.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024563.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kingsville Brewery Light Eh! Lager", "brand" => "Kingsville Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.0", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.15856236786469344", "country" => "Canada", "url" => "https://www.lcbo.com/en/kingsville-brewery-light-eh-lager-13635", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/6/013635.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/6/013635.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Thornbury Craft Rose Cider", "brand" => "Thornbury", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.75", "volume" => "473", "alcohol_content" => "5.4", "price_index" => "0.14681700728212355", "country" => "Canada", "url" => "https://www.lcbo.com/en/thornbury-craft-rose-cider-23067", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/0/023067.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/0/023067.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kichesippi 1855", "brand" => "Kichesippi", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.13213530655391117", "country" => "Canada", "url" => "https://www.lcbo.com/en/kichesippi-1855-456087", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/6/0/456087.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/6/0/456087.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Voodoo Ranger IPA", "brand" => "New Belgium Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.10419812745394139", "country" => "Canada", "url" => "https://www.lcbo.com/en/voodoo-ranger-ipa-16473", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/4/016473.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/4/016473.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "The Grove Brewing Corporation Paradise Lager", "brand" => "The Grove Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.1", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.1456424712238666", "country" => "Canada", "url" => "https://www.lcbo.com/en/the-grove-brewing-corporation-paradise-lager-16423", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/4/016423.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/4/016423.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Lug Tread", "brand" => "Beau's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.1382338591640917", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-lug-tread-19263", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/2/019263.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/2/019263.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Refined Fool, Zane Lost His Avocado Bag, Brut IPA", "brand" => "Refined Fool", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "7.6", "price_index" => "0.10431734727940359", "country" => "Canada", "url" => "https://www.lcbo.com/en/refined-fool-zane-lost-his-avocado-bag-brut-ipa-13661", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/6/013661.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/6/013661.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Dark Helmut", "brand" => "Beau's", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.95", "volume" => "355", "alcohol_content" => "7.6", "price_index" => "0.14640474425500372", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-dark-helmut-24206", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/2/024206.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/2/024206.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Elora Brewing Pilsner", "brand" => "Elora", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.55", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.15968692366515225", "country" => "Canada", "url" => "https://www.lcbo.com/en/elora-brewing-pilsner-16538", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/5/016538.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/5/016538.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Refined Fool Brewing IPA Fun Box 4th Edition", "brand" => "Refined Fool Brewing", "category" => "Beer & Cider", "subcategory" => "Gifts and Samplers", "price" => "23.95", "volume" => "2838", "alcohol_content" => "6.0", "price_index" => "0.14065069297627436", "country" => "Canada", "url" => "https://www.lcbo.com/en/refined-fool-brewing-ipa-fun-box-4th-edition-24581", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024581.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024581.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stella Artois", "brand" => "Stella Artois", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "15.95", "volume" => "1980", "alcohol_content" => "5.0", "price_index" => "0.1611111111111111", "country" => "Canada", "url" => "https://www.lcbo.com/en/stella-artois-17823", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017823.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017823.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ace Hill Vienna Lager", "brand" => "Ace Hill", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1416490486257928", "country" => "Canada", "url" => "https://www.lcbo.com/en/ace-hill-vienna-lager-519694", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/9/6/519694.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/9/6/519694.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "MacKinnon Brothers Philomena Pilsner", "brand" => "MacKinnon Brothers", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.1", "price_index" => "0.17274274222657662", "country" => "Canada", "url" => "https://www.lcbo.com/en/mackinnon-brothers-philomena-pilsner-26085", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026085.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026085.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Woodhouse Nordic Pale Ale", "brand" => "Woodhouse Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.14839811351439255", "country" => "Canada", "url" => "https://www.lcbo.com/en/woodhouse-brewing-nordic-pale-ale-26801", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/8/026801.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/8/026801.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Highlander Blackberry Wheat", "brand" => "Highlander Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14376321353065538", "country" => "Canada", "url" => "https://www.lcbo.com/en/highlander-blackberry-wheat-20829", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/8/020829.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/8/020829.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kronenbourg 1664 Blanc", "brand" => "Kronenbourg 1664", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "15.75", "volume" => "1980", "alcohol_content" => "5.0", "price_index" => "0.1590909090909091", "country" => "France", "url" => "https://www.lcbo.com/en/kronenbourg-1664-blanc-229583", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/2/9/5/229583.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/2/9/5/229583.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Tatra Beer", "brand" => "Tatra", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.4", "volume" => "500", "alcohol_content" => "5.5", "price_index" => "0.08727272727272727", "country" => "Poland", "url" => "https://www.lcbo.com/en/tatra-beer-88815", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/8/8/8/088815.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/8/8/8/088815.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Storm Stayed Brewing Sunburst", "brand" => "Storm Stayed Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.85", "volume" => "355", "alcohol_content" => "5.4", "price_index" => "0.14866979655712048", "country" => "Canada", "url" => "https://www.lcbo.com/en/storm-stayed-brewing-sunburst-18250", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/2/018250.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/2/018250.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Trou Du Diable Saison Du Tracteur", "brand" => "Le Trou Du Diable", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "5.95", "volume" => "600", "alcohol_content" => "6.0", "price_index" => "0.16527777777777777", "country" => "Canada", "url" => "https://www.lcbo.com/en/trou-du-diable-saison-du-tracteur-19369", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/3/019369.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/3/019369.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busch Lager", "brand" => "Busch", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "11.95", "volume" => "2838", "alcohol_content" => "4.7", "price_index" => "0.08958961210321922", "country" => "Canada", "url" => "https://www.lcbo.com/en/busch-lager-15252", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/2/015252.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/2/015252.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Clear 2.0", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "25.5", "volume" => "4092", "alcohol_content" => "4.0", "price_index" => "0.15579178885630499", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-clear-2-0-698225", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/8/2/698225.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/8/2/698225.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Whitewater Brewing North Meets South Nordic Pale Ale", "brand" => "Whitewater Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.6", "price_index" => "0.15856236786469347", "country" => "Canada", "url" => "https://www.lcbo.com/en/whitewater-brewing-north-meets-south-nordic-pale-ale-27126", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/1/027126.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/1/027126.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Guinness Draught", "brand" => "Guinness", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "12.45", "volume" => "1760", "alcohol_content" => "4.2", "price_index" => "0.16842532467532467", "country" => "Ireland", "url" => "https://www.lcbo.com/en/guinness-draught-296244", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/9/6/2/296244.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/9/6/2/296244.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Spearhead Brewing Queen of Wheat", "brand" => "Spearhead Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13742071881606763", "country" => "Canada", "url" => "https://www.lcbo.com/en/spearhead-brewing-queen-of-wheat-23850", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/8/023850.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/8/023850.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Tuborg Gold", "brand" => "Tuborg", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.5", "volume" => "500", "alcohol_content" => "5.5", "price_index" => "0.09090909090909091", "country" => "Turkey", "url" => "https://www.lcbo.com/en/tuborg-gold-74591", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/7/4/5/074591.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/7/4/5/074591.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Waterloo Tart Cherry Radler", "brand" => "Waterloo", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "3.25", "volume" => "473", "alcohol_content" => "2.5", "price_index" => "0.27484143763213525", "country" => "Canada", "url" => "https://www.lcbo.com/en/waterloo-tart-cherry-radler-19655", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/6/019655.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/6/019655.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Indie Alehouse English Breakfast Porter", "brand" => "Indie Ale House", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "6.0", "volume" => "500", "alcohol_content" => "7.2", "price_index" => "0.16666666666666663", "country" => "Canada", "url" => "https://www.lcbo.com/en/indie-alehouse-english-breakfast-porter-23512", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023512.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023512.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Side Launch Brewing 5th Coast Hazy IPA", "brand" => "Side Launch", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "6.4", "price_index" => "0.13048361522198731", "country" => "Canada", "url" => "https://www.lcbo.com/en/side-launch-brewing-5th-coast-hazy-ipa-22238", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022238.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022238.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Indie Ale House Blackberry Raspberry Lemonade Stand", "brand" => "Indie Alehouse", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "355", "alcohol_content" => "5.5", "price_index" => "0.20230473751600514", "country" => "Canada", "url" => "https://www.lcbo.com/en/indie-ale-house-blackberry-raspberry-lemonade-stand-26693", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/6/026693.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/6/026693.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Clear 2.0", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "14.25", "volume" => "2046", "alcohol_content" => "4.0", "price_index" => "0.17412023460410556", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-clear-2-0-698209", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/8/2/698209.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/8/2/698209.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Crank Lite Lager", "brand" => "Siren Craft Brew", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.3", "volume" => "355", "alcohol_content" => "4.0", "price_index" => "0.16197183098591547", "country" => "Canada", "url" => "https://www.lcbo.com/en/crank-lite-lager-23257", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/2/023257.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/2/023257.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pabst Blue Ribbon", "brand" => "Pabst", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "10.5", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.09859154929577464", "country" => "Canada", "url" => "https://www.lcbo.com/en/pabst-blue-ribbon-921478", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/2/1/4/921478.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/2/1/4/921478.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stray Dog California Common", "brand" => "Stray Dog Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.2", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.130102455683851", "country" => "Canada", "url" => "https://www.lcbo.com/en/stray-dog-california-common-540294", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/0/2/540294.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/0/2/540294.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Blood Brothers Brewing Shumei", "brand" => "Blood Brothers Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.95", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.1495016611295681", "country" => "Canada", "url" => "https://www.lcbo.com/en/blood-brothers-brewing-shumei-17931", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/9/017931.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/9/017931.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Creemore Pale Ale", "brand" => "Creemore", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.6", "price_index" => "0.12836001208094233", "country" => "Canada", "url" => "https://www.lcbo.com/en/creemore-pale-ale-25054", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025054.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025054.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Folly Brewing Rice Lager", "brand" => "Folly Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13742071881606763", "country" => "Canada", "url" => "https://www.lcbo.com/en/folly-brewing-rice-lager-26084", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026084.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026084.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Original Draught", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "41.95", "volume" => "8184", "alcohol_content" => "5.0", "price_index" => "0.1025171065493646", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-original-draught-612291", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/2/2/612291.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/2/2/612291.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Calabogie Front Porch Kolsch", "brand" => "Calabogie Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.2", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.1439431424587288", "country" => "Canada", "url" => "https://www.lcbo.com/en/calabogie-front-porch-kolsch-493908", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/3/9/493908.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/3/9/493908.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Phillips Electric Unicorn White Ipa", "brand" => "Phillips Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.11221336802732151", "country" => "Canada", "url" => "https://www.lcbo.com/en/phillips-electric-unicorn-white-ipa-10320", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/3/010320.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/3/010320.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Faxe Premium Lager", "brand" => "Faxe", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.45", "volume" => "500", "alcohol_content" => "5.5", "price_index" => "0.0890909090909091", "country" => "Denmark", "url" => "https://www.lcbo.com/en/faxe-premium-lager-431239", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/3/1/2/431239.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/3/1/2/431239.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light Lime", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.0", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.15856236786469344", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-lime-180810", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/8/0/8/180810.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/8/0/8/180810.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Growers Rose Cider", "brand" => "Growers", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13742071881606763", "country" => "Canada", "url" => "https://www.lcbo.com/en/growers-rose-cider-11693", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/6/011693.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/6/011693.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Organic Sangria", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14376321353065538", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-organic-sangria-25077", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025077.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025077.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Frank Brewing Hoperator", "brand" => "Frank Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.1", "price_index" => "0.1347261949177134", "country" => "Canada", "url" => "https://www.lcbo.com/en/frank-brewing-hoperator-486134", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/6/1/486134.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/6/1/486134.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Niagara Oast House Barnraiser Country Ale", "brand" => "Niagara Oast House", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.6", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1522198731501057", "country" => "Canada", "url" => "https://www.lcbo.com/en/niagara-oast-house-barnraiser-country-ale-460618", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/0/6/460618.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/0/6/460618.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Omnipollo Lorpan IPA", "brand" => "Omnipollo", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "5.25", "volume" => "473", "alcohol_content" => "6.8", "price_index" => "0.16322596691953736", "country" => "Canada", "url" => "https://www.lcbo.com/en/omnipollo-lorpan-ipa-24619", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/6/024619.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/6/024619.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bell City Eureka Cream Ale", "brand" => "Bell City Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.8", "price_index" => "0.11846613691040316", "country" => "Canada", "url" => "https://www.lcbo.com/en/bell-city-eureka-cream-ale-387795", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/8/7/7/387795.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/8/7/7/387795.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hacker Pschorr Munich Gold Lager", "brand" => "Hacker Pschorr", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.45", "volume" => "500", "alcohol_content" => "5.5", "price_index" => "0.0890909090909091", "country" => "Germany", "url" => "https://www.lcbo.com/en/hacker-pschorr-munich-gold-lager-308403", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/0/8/4/308403.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/0/8/4/308403.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Boshkung Brewing North Country Kellerbier", "brand" => "Boshkung Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13742071881606763", "country" => "Canada", "url" => "https://www.lcbo.com/en/boshkung-brewing-north-country-kellerbier-461608", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/1/6/461608.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/1/6/461608.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lakefront New Grist Gluten-Free", "brand" => "Lakefront Brewery", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "14.95", "volume" => "2130", "alcohol_content" => "5.7", "price_index" => "0.1231364796968948", "country" => "United States", "url" => "https://www.lcbo.com/en/lakefront-new-grist-gluten-free-119370", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/1/9/3/119370.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/1/9/3/119370.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Somersby Watermelon Cider", "brand" => "Somersby", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15738783180643645", "country" => "Canada", "url" => "https://www.lcbo.com/en/somersby-watermelon-cider-16004", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/0/016004.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/0/016004.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Great Lakes Brewery Lager", "brand" => "Great Lakes Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.8", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.11839323467230442", "country" => "Canada", "url" => "https://www.lcbo.com/en/great-lakes-brewery-lager-20121", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/1/020121.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/1/020121.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Walkerville Purity Pilsener", "brand" => "Walkerville Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.0", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.12197105220361032", "country" => "Canada", "url" => "https://www.lcbo.com/en/walkerville-purity-pilsener-572685", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/2/6/572685.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/2/6/572685.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Clifford Brewing Chain Link Lager", "brand" => "Clifford Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14587737843551796", "country" => "Canada", "url" => "https://www.lcbo.com/en/clifford-brewing-chain-link-lager-19052", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/0/019052.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/0/019052.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Refined Fool Cabin Jeans Cream Ale", "brand" => "Refined Fool", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "12.95", "volume" => "1892", "alcohol_content" => "5.0", "price_index" => "0.13689217758985198", "country" => "Canada", "url" => "https://www.lcbo.com/en/refined-fool-cabin-jeans-cream-ale-15589", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/5/015589.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/5/015589.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Furnace Room Beardmore Kolsch", "brand" => "Furnace Room Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.16208597603946442", "country" => "Canada", "url" => "https://www.lcbo.com/en/furnace-room-beardmore-kolsch-15979", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/9/015979.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/9/015979.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Wild Card Brewing Notoriously Juicy", "brand" => "Wild Card Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.15", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.1462297392529951", "country" => "Canada", "url" => "https://www.lcbo.com/en/wild-card-brewing-notoriously-juicy-17192", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/1/017192.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/1/017192.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "14.5", "volume" => "2130", "alcohol_content" => "4.0", "price_index" => "0.17018779342723003", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-908665", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/8/6/908665.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/8/6/908665.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Duxbury Rose Petal Honey Cider", "brand" => "NULL", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "4.5", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.19027484143763213", "country" => "Canada", "url" => "https://www.lcbo.com/en/duxbury-rose-petal-honey-cider-23070", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/0/023070.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/0/023070.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Original", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "30.95", "volume" => "5325", "alcohol_content" => "5.0", "price_index" => "0.11624413145539905", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-original-14279", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/2/014279.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/2/014279.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Great Lakes Brewery Octopus Wants To Fight IPA", "brand" => "Great Lakes Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.2", "price_index" => "0.11764304712541772", "country" => "Canada", "url" => "https://www.lcbo.com/en/great-lakes-brewery-octopus-wants-to-fight-ipa-458273", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/8/2/458273.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/8/2/458273.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Woodhouse Cherry Kolsch", "brand" => "Woodhouse", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.14229956090421206", "country" => "Canada", "url" => "https://www.lcbo.com/en/woodhouse-brewing-cherry-kolsch-20836", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/8/020836.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/8/020836.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Thornbury Village Craft Apple Cider", "brand" => "Thornbury", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.3", "price_index" => "0.1396146635286609", "country" => "Canada", "url" => "https://www.lcbo.com/en/thornbury-village-craft-apple-cider-333583", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/3/5/333583.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/3/5/333583.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sawdust City Lone Pine IPA", "brand" => "Sawdust City Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "6.2", "price_index" => "0.13469276410011594", "country" => "Canada", "url" => "https://www.lcbo.com/en/sawdust-city-lone-pine-ipa-398263", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/9/8/2/398263.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/9/8/2/398263.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bicycle Craft Velocipede IPA", "brand" => "Bicycle Craft Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.25", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.14975334742776603", "country" => "Canada", "url" => "https://www.lcbo.com/en/bicycle-craft-velocipede-ipa-441139", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/1/1/441139.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/1/1/441139.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mas Agave Clasica Grapefruit Barrel Aged Series", "brand" => "Mas Agave", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "5.65", "volume" => "355", "alcohol_content" => "9.7", "price_index" => "0.16407724698707712", "country" => "United States", "url" => "https://www.lcbo.com/en/mas-agave-clasica-grapefruit-barrel-aged-series-25026", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025026.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025026.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Schneider Helle Weisse", "brand" => "Schneider Weisse", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "500", "alcohol_content" => "4.9", "price_index" => "0.14489795918367346", "country" => "Germany", "url" => "https://www.lcbo.com/en/schneider-helle-weisse-15435", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015435.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015435.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Export", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "43.95", "volume" => "8184", "alcohol_content" => "5.0", "price_index" => "0.10740469208211144", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-export-900647", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/0/6/900647.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/0/6/900647.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busch Light", "brand" => "Busch", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.0", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.10570824524312895", "country" => "Canada", "url" => "https://www.lcbo.com/en/busch-light-15251", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/2/015251.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/2/015251.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Manitoulin Brewing Swingbridge Blonde Ale", "brand" => "Manitoulin Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.15", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.12806960481379084", "country" => "Canada", "url" => "https://www.lcbo.com/en/manitoulin-brewing-swingbridge-blonde-ale-467266", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/7/2/467266.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/7/2/467266.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Double Trouble Hops & Robbers Grapefruit IPA", "brand" => "Double Trouble", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.9", "price_index" => "0.1200415666320278", "country" => "Canada", "url" => "https://www.lcbo.com/en/double-trouble-hops-robbers-grapefruit-ipa-514729", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/4/7/514729.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/4/7/514729.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Labatt Blue", "brand" => "Labatt", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "40.95", "volume" => "8184", "alcohol_content" => "5.0", "price_index" => "0.1000733137829912", "country" => "Canada", "url" => "https://www.lcbo.com/en/labatt-blue-900480", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/0/4/900480.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/0/4/900480.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Bellows Big Buck IPA", "brand" => "Black Bellows", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.5", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.14636526264433242", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-bellows-big-buck-ipa-26082", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026082.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026082.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Partake Brewing Variety Pack", "brand" => "Partake Brewing", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "11.95", "volume" => "2130", "alcohol_content" => "0.05", "price_index" => "11.220657276995306", "country" => "Canada", "url" => "https://www.lcbo.com/en/partake-brewing-variety-pack-26432", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/4/026432.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/4/026432.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Birra Moretti", "brand" => "Birra Moretti", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.35", "volume" => "500", "alcohol_content" => "4.6", "price_index" => "0.14565217391304347", "country" => "Italy", "url" => "https://www.lcbo.com/en/birra-moretti-296889", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/9/6/8/296889.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/9/6/8/296889.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ace Hill Mexican Lager", "brand" => "Ace Hill", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "9.95", "volume" => "1420", "alcohol_content" => "4.0", "price_index" => "0.17517605633802813", "country" => "Canada", "url" => "https://www.lcbo.com/en/ace-hill-mexican-lager-16465", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/4/016465.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/4/016465.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Clear 2.0", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "29.95", "volume" => "5115", "alcohol_content" => "4.0", "price_index" => "0.14638318670576736", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-clear-2-0-467852", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/7/8/467852.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/7/8/467852.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Farm League Hauler Lager", "brand" => "Farm League Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.14314658210007047", "country" => "Canada", "url" => "https://www.lcbo.com/en/farm-league-hauler-lager-27324", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/3/027324.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/3/027324.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Canadian", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "13.95", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.13098591549295774", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-canadian-904144", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/4/1/904144.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/4/1/904144.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Original Organic Lager", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "15.25", "volume" => "2130", "alcohol_content" => "4.2", "price_index" => "0.17046724793203666", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-original-organic-lager-19581", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/5/019581.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/5/019581.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Clear 2.0", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "41.95", "volume" => "8184", "alcohol_content" => "4.0", "price_index" => "0.12814638318670576", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-clear-2-0-695619", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/5/6/695619.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/5/6/695619.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Blood Brothers Blood Light", "brand" => "Blood Brothers Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "4.5", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.23784355179704014", "country" => "Canada", "url" => "https://www.lcbo.com/en/blood-brothers-blood-light-27030", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/0/027030.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/0/027030.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Hazy Organic IPA", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.11980267794221283", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-hazy-organic-ipa-20068", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020068.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020068.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Boshkung Brewing Co 35 & 118 Cream Ale", "brand" => "Boshkung Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13742071881606763", "country" => "Canada", "url" => "https://www.lcbo.com/en/boshkung-brewing-co-35-118-cream-ale-461616", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/1/6/461616.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/1/6/461616.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Holsten Maibock", "brand" => "Holsten", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.8", "volume" => "500", "alcohol_content" => "7.0", "price_index" => "0.08", "country" => "Germany", "url" => "https://www.lcbo.com/en/holsten-maibock-432856", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/3/2/8/432856.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/3/2/8/432856.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Innis & Gunn Irish Whiskey Cask", "brand" => "Innis & Gunn", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "500", "alcohol_content" => "6.1", "price_index" => "0.1098360655737705", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/innis-gunn-irish-whiskey-cask-13618", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/6/013618.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/6/013618.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Heineken", "brand" => "Heineken", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "34.95", "volume" => "5000", "alcohol_content" => "5.0", "price_index" => "0.1398", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/heineken-56796", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/5/6/7/056796.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/5/6/7/056796.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Forbidden Pink Cider", "brand" => "Forbidden", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.95", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.1518354795310398", "country" => "Canada", "url" => "https://www.lcbo.com/en/forbidden-pink-cider-573410", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/3/4/573410.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/3/4/573410.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busch Light", "brand" => "Busch", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "40.95", "volume" => "8184", "alcohol_content" => "4.0", "price_index" => "0.125091642228739", "country" => "Canada", "url" => "https://www.lcbo.com/en/busch-light-698555", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/8/5/698555.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/8/5/698555.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cowbell Brewing Co. Draught Nitro Stout", "brand" => "Cowbell Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "4.2", "price_index" => "0.17869727172052752", "country" => "Canada", "url" => "https://www.lcbo.com/en/cowbell-brewing-co-draught-nitro-stout-24507", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024507.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024507.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Light", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "28.95", "volume" => "5676", "alcohol_content" => "4.0", "price_index" => "0.12751057082452433", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-light-568170", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/8/1/568170.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/8/1/568170.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Twice As Mad Tom IPA", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.5", "volume" => "473", "alcohol_content" => "8.4", "price_index" => "0.11325883418906675", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-twice-as-mad-tom-ipa-480368", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/0/3/480368.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/0/3/480368.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Schofferhofer Grapefruit Radler", "brand" => "Schofferhofer", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "3.1", "volume" => "500", "alcohol_content" => "2.5", "price_index" => "0.248", "country" => "Germany", "url" => "https://www.lcbo.com/en/schofferhofer-grapefruit-radler-380584", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/8/0/5/380584.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/8/0/5/380584.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Michelob Ultra Organic Gold", "brand" => "Michelob", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "19.5", "volume" => "2838", "alcohol_content" => "3.8", "price_index" => "0.18081673528429956", "country" => "United States", "url" => "https://www.lcbo.com/en/michelob-ultra-organic-gold-26308", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/3/026308.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/3/026308.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kaiser Beer", "brand" => "Kaiser", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.35", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.094", "country" => "Austria", "url" => "https://www.lcbo.com/en/kaiser-beer-32359", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/3/2/3/032359.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/3/2/3/032359.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Old Credit Amber Ale", "brand" => "Old Credit", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1416490486257928", "country" => "Canada", "url" => "https://www.lcbo.com/en/old-credit-amber-ale-644658", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/4/6/644658.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/4/6/644658.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Circling The Sun Applecherry Cider", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.85", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.14799154334038056", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-circling-the-sun-applecherry-cider-13681", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/6/013681.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/6/013681.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Brewery Drifter", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.6", "price_index" => "0.13213530655391123", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-brewery-drifter-25047", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025047.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025047.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Glutenberg IPA", "brand" => "Glutenburg", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "12.95", "volume" => "1892", "alcohol_content" => "6.0", "price_index" => "0.11407681465821", "country" => "Canada", "url" => "https://www.lcbo.com/en/glutenberg-ipa-573881", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/3/8/573881.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/3/8/573881.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Raspberry & Blood Orange Sour", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14376321353065538", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-raspberry-blood-orange-sour-20662", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/6/020662.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/6/020662.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Labatt Blue", "brand" => "Labatt", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "29.5", "volume" => "5325", "alcohol_content" => "5.0", "price_index" => "0.1107981220657277", "country" => "Canada", "url" => "https://www.lcbo.com/en/labatt-blue-615807", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/5/8/615807.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/5/8/615807.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pabst Blue Ribbon", "brand" => "Pabst", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.15", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.0909090909090909", "country" => "Canada", "url" => "https://www.lcbo.com/en/pabst-blue-ribbon-37861", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/3/7/8/037861.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/3/7/8/037861.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Niagara Oast House Brewers, Forgotten Field Sour IPA", "brand" => "Niagara Oast House", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.25", "volume" => "473", "alcohol_content" => "5.8", "price_index" => "0.15491725595975797", "country" => "Canada", "url" => "https://www.lcbo.com/en/niagara-oast-house-brewers-forgotten-field-sour-ipa-16536", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/5/016536.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/5/016536.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street 100th Meridian Organic Amber Lager", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14376321353065538", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-100th-meridian-organic-amber-lager-413765", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/3/7/413765.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/3/7/413765.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Trestle Brewing Company South Channel Ale", "brand" => "Trestle Brewing Company Limited", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "5.9", "price_index" => "0.14154154871537605", "country" => "Canada", "url" => "https://www.lcbo.com/en/trestle-brewing-company-south-channel-ale-27004", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/0/027004.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/0/027004.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Reinhart's Red Apple Strong Cider", "brand" => "Reinhart", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.55", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.1072183630323165", "country" => "Canada", "url" => "https://www.lcbo.com/en/reinhart-s-red-apple-strong-cider-107342", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/0/7/3/107342.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/0/7/3/107342.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Innis & Gunn The Original", "brand" => "Innis & Gunn", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "500", "alcohol_content" => "6.6", "price_index" => "0.10303030303030303", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/innis-gunn-the-original-334037", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/4/0/334037.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/4/0/334037.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Original", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "54.95", "volume" => "10650", "alcohol_content" => "5.0", "price_index" => "0.1031924882629108", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-original-15504", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/5/015504.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/5/015504.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Canvas Brewing Backtrail Pale Ale", "brand" => "Canvas Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15738783180643645", "country" => "Canada", "url" => "https://www.lcbo.com/en/canvas-brewing-backtrail-pale-ale-20984", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/9/020984.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/9/020984.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "The Napanee Beer Company Good Damage Mexican Dark Lager", "brand" => "Napanee Beer Company", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.6", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1522198731501057", "country" => "Canada", "url" => "https://www.lcbo.com/en/the-napanee-beer-company-good-damage-mexican-dark-lager-26078", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026078.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026078.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kostritzer Edel Pils", "brand" => "Kostritzer", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.15", "volume" => "500", "alcohol_content" => "4.8", "price_index" => "0.08958333333333333", "country" => "Germany", "url" => "https://www.lcbo.com/en/kostritzer-edel-pils-25393", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/3/025393.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/3/025393.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Labatt Crystal", "brand" => "Labatt", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "39.95", "volume" => "8184", "alcohol_content" => "5.0", "price_index" => "0.09762952101661779", "country" => "Canada", "url" => "https://www.lcbo.com/en/labatt-crystal-900969", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/0/9/900969.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/0/9/900969.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bavaria Premium", "brand" => "Bavaria", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.4", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.096", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/bavaria-premium-497396", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/7/3/497396.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/7/3/497396.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lake of the Woods Forgotten Lake Blueberry Ale", "brand" => "Lake Of The Woods", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "7.1", "price_index" => "0.11166363934133341", "country" => "Canada", "url" => "https://www.lcbo.com/en/lake-of-the-woods-forgotten-lake-blueberry-ale-467134", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/7/1/467134.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/7/1/467134.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Innis & Gunn The Original", "brand" => "Innis & Gunn", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "15.85", "volume" => "1980", "alcohol_content" => "6.6", "price_index" => "0.12128864401591673", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/innis-gunn-the-original-333591", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/3/5/333591.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/3/5/333591.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Tobermory Brewing Co. FireBan Amber Ale", "brand" => "Tobermory Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.9", "price_index" => "0.1402252232817017", "country" => "Canada", "url" => "https://www.lcbo.com/en/tobermory-brewing-co-fireban-amber-ale-22693", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/6/022693.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/6/022693.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Moosehead Lager", "brand" => "Moosehead", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "44.95", "volume" => "8520", "alcohol_content" => "5.0", "price_index" => "0.10551643192488264", "country" => "Canada", "url" => "https://www.lcbo.com/en/moosehead-lager-499905", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/9/9/499905.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/9/9/499905.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Dab Original", "brand" => "DAB", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "13.9", "volume" => "3000", "alcohol_content" => "5.0", "price_index" => "0.09266666666666667", "country" => "Germany", "url" => "https://www.lcbo.com/en/dab-original-666875", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/6/8/666875.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/6/8/666875.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Big Rig Brewing Frika Fruta Pineapple Pink Guava Sour", "brand" => "Big Rig Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.2", "volume" => "473", "alcohol_content" => "5.8", "price_index" => "0.11664358095793542", "country" => "Canada", "url" => "https://www.lcbo.com/en/big-rig-brewing-frika-fruta-pineapple-pink-guava-sour-26923", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/9/026923.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/9/026923.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Original", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "17.25", "volume" => "2838", "alcohol_content" => "5.0", "price_index" => "0.1215644820295983", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-original-14400", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014400.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014400.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Maclean's Farmhouse Blonde", "brand" => "Maclean's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.15", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.13874207188160675", "country" => "Canada", "url" => "https://www.lcbo.com/en/maclean-s-farmhouse-blonde-446831", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/6/8/446831.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/6/8/446831.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "KLB Raspberry Wheat Ale", "brand" => "Kawartha Lakes Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15973690392295042", "country" => "Canada", "url" => "https://www.lcbo.com/en/klb-raspberry-wheat-ale-142349", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/4/2/3/142349.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/4/2/3/142349.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Original", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "46.95", "volume" => "8184", "alcohol_content" => "5.0", "price_index" => "0.11473607038123167", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-original-14090", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/0/014090.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/0/014090.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cameron's Jurassic IPA", "brand" => "Cameron's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "6.8", "price_index" => "0.11037184429797288", "country" => "Canada", "url" => "https://www.lcbo.com/en/cameron-s-jurassic-ipa-11917", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/9/011917.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/9/011917.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Heineken", "brand" => "Heineken", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "19.5", "volume" => "3000", "alcohol_content" => "5.0", "price_index" => "0.13", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/heineken-302810", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/0/2/8/302810.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/0/2/8/302810.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bayside Brewing Honey Cream Ale", "brand" => "Bayside Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1416490486257928", "country" => "Canada", "url" => "https://www.lcbo.com/en/bayside-brewing-honey-cream-ale-450643", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/0/6/450643.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/0/6/450643.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Old Milwaukee", "brand" => "Old Milwaukee", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "42.5", "volume" => "8520", "alcohol_content" => "5.0", "price_index" => "0.09976525821596244", "country" => "Canada", "url" => "https://www.lcbo.com/en/old-milwaukee-606293", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/0/6/2/606293.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/0/6/2/606293.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cold Break Sublime IPA", "brand" => "Yates Street Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.13645973476840284", "country" => "Canada", "url" => "https://www.lcbo.com/en/cold-break-sublime-ipa-23123", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/1/023123.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/1/023123.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ironwood Hard Cider", "brand" => "Ironwood", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.5", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.12332628611698379", "country" => "Canada", "url" => "https://www.lcbo.com/en/ironwood-hard-cider-405241", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/5/2/405241.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/5/2/405241.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Shiny Apple Peach Light Cider", "brand" => "Shiny Apple Cider", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.65", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.19291754756871032", "country" => "Canada", "url" => "https://www.lcbo.com/en/shiny-apple-peach-light-cider-19309", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/3/019309.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/3/019309.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ernest Cider Impeachmint", "brand" => "Ernest", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.75", "volume" => "473", "alcohol_content" => "5.8", "price_index" => "0.13669169643508056", "country" => "Canada", "url" => "https://www.lcbo.com/en/ernest-cider-impeachmint-645978", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/5/9/645978.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/5/9/645978.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bellwoods Brewery Bellweiser Pilsner", "brand" => "Bellwoods Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "4.5", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.1982029598308668", "country" => "Canada", "url" => "https://www.lcbo.com/en/bellwoods-brewery-bellweiser-pilsner-25455", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/4/025455.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/4/025455.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "St. Bernardus Abt 12", "brand" => "St. Bernardus", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.2", "volume" => "330", "alcohol_content" => "10.0", "price_index" => "0.1272727272727273", "country" => "Belgium", "url" => "https://www.lcbo.com/en/st-bernardus-abt-12-17034", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/0/017034.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/0/017034.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Red Stripe Lager", "brand" => "Red Stripe", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "14.65", "volume" => "1980", "alcohol_content" => "5.0", "price_index" => "0.147979797979798", "country" => "Jamaica", "url" => "https://www.lcbo.com/en/red-stripe-lager-676841", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/6/8/676841.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/6/8/676841.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Belgian Moon", "brand" => "Belgian Moon", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.4", "price_index" => "0.12136872601988881", "country" => "Canada", "url" => "https://www.lcbo.com/en/belgian-moon-478909", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/8/9/478909.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/8/9/478909.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Avling Brewing Spinning Yarn Barrel Aged", "brand" => "Avling", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "7.5", "volume" => "375", "alcohol_content" => "5.0", "price_index" => "0.4", "country" => "Canada", "url" => "https://www.lcbo.com/en/avling-brewing-spinning-yarn-barrel-aged-23337", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/3/023337.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/3/023337.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "County Apple Cider", "brand" => "County Cider", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "6.05", "volume" => "500", "alcohol_content" => "6.5", "price_index" => "0.18615384615384614", "country" => "Canada", "url" => "https://www.lcbo.com/en/county-apple-cider-470898", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/0/8/470898.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/0/8/470898.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Waterloo Grapefruit Radler", "brand" => "Waterloo Brewing", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "3.25", "volume" => "473", "alcohol_content" => "2.5", "price_index" => "0.27484143763213525", "country" => "Canada", "url" => "https://www.lcbo.com/en/waterloo-grapefruit-radler-12858", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/8/012858.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/8/012858.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Riverhead Brewing Outer Limit DIPA", "brand" => "Riverhead Brewing Company Ltd", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.55", "volume" => "473", "alcohol_content" => "8.5", "price_index" => "0.11317000373087922", "country" => "Canada", "url" => "https://www.lcbo.com/en/riverhead-brewing-outer-limit-dipa-24568", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024568.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024568.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Duchesse Cherry", "brand" => "Duchesse", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "330", "alcohol_content" => "6.8", "price_index" => "0.16711229946524064", "country" => "Belgium", "url" => "https://www.lcbo.com/en/duchesse-cherry-25027", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025027.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025027.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Carling Ice", "brand" => "Carling", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.3", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.0884105323851624", "country" => "Canada", "url" => "https://www.lcbo.com/en/carling-ice-177717", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/7/7/7/177717.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/7/7/7/177717.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Labatt Blue Light", "brand" => "Labatt", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "42.95", "volume" => "8520", "alcohol_content" => "4.0", "price_index" => "0.1260269953051643", "country" => "Canada", "url" => "https://www.lcbo.com/en/labatt-blue-light-906347", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/6/3/906347.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/6/3/906347.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kostritzer Schwartzbier", "brand" => "Kostritzer", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.85", "volume" => "500", "alcohol_content" => "4.8", "price_index" => "0.11875000000000001", "country" => "Germany", "url" => "https://www.lcbo.com/en/kostritzer-schwartzbier-573592", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/3/5/573592.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/3/5/573592.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Great Lakes Brewery  Pompous Ass English Ale", "brand" => "Great Lakes Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.85", "volume" => "473", "alcohol_content" => "4.2", "price_index" => "0.1434611899728179", "country" => "Canada", "url" => "https://www.lcbo.com/en/great-lakes-brewery-pompous-ass-english-ale-408054", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/8/0/408054.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/8/0/408054.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Laker  Ice", "brand" => "Laker", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.0", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.0768787238131847", "country" => "Canada", "url" => "https://www.lcbo.com/en/laker-ice-142620", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/4/2/6/142620.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/4/2/6/142620.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busch Light", "brand" => "Busch", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "52.95", "volume" => "10650", "alcohol_content" => "4.0", "price_index" => "0.12429577464788732", "country" => "Canada", "url" => "https://www.lcbo.com/en/busch-light-20633", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/6/020633.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/6/020633.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Wellington Brewery Shubie Sour Raspberry IPA", "brand" => "Wellington", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.1", "volume" => "473", "alcohol_content" => "6.9", "price_index" => "0.12562429144835616", "country" => "Canada", "url" => "https://www.lcbo.com/en/wellington-brewery-shubie-sour-raspberry-ipa-15414", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015414.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015414.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Oak Nut Brown Ale", "brand" => "Black Oak", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13742071881606763", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-oak-nut-brown-ale-422121", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/2/2/1/422121.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/2/2/1/422121.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bench Brewing Short Hills East Coast IPA", "brand" => "Bench Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.11221336802732151", "country" => "Canada", "url" => "https://www.lcbo.com/en/bench-brewing-short-hills-east-coast-ipa-13641", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/6/013641.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/6/013641.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Waterloo Dark", "brand" => "Waterloo Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12473572938689217", "country" => "Canada", "url" => "https://www.lcbo.com/en/waterloo-dark-86439", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/8/6/4/086439.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/8/6/4/086439.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Ransack The Universe IPA", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.8", "price_index" => "0.10726277826141027", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-ransack-the-universe-ipa-450312", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/0/3/450312.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/0/3/450312.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Whitewater Brewing Co.  Farmer's Daughter", "brand" => "Whitewater Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14376321353065538", "country" => "Canada", "url" => "https://www.lcbo.com/en/whitewater-brewing-co-farmer-s-daughter-450239", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/0/2/450239.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/0/2/450239.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Chimay White Cap", "brand" => "Chimay", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.2", "volume" => "330", "alcohol_content" => "8.0", "price_index" => "0.1590909090909091", "country" => "Belgium", "url" => "https://www.lcbo.com/en/chimay-white-cap-676585", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/6/5/676585.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/6/5/676585.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "3 Fonteinen Hommage", "brand" => "3 Fonteinen", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "24.25", "volume" => "375", "alcohol_content" => "6.0", "price_index" => "1.0777777777777777", "country" => "Belgium", "url" => "https://www.lcbo.com/en/3-fonteinen-hommage-21837", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/8/021837.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/8/021837.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Original", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "14.75", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.13849765258215962", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-original-14135", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/1/014135.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/1/014135.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lake of the Woods Lake Time Mixed Pack", "brand" => "Lake Of The Woods", "category" => "Beer & Cider", "subcategory" => "Gifts and Samplers", "price" => "27.95", "volume" => "3784", "alcohol_content" => "5.5", "price_index" => "0.13429752066115702", "country" => "Canada", "url" => "https://www.lcbo.com/en/lake-of-the-woods-lake-time-mixed-pack-20298", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/2/020298.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/2/020298.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Grolsch Premium Pilsner", "brand" => "Grolsch", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "14.3", "volume" => "1800", "alcohol_content" => "5.0", "price_index" => "0.15888888888888889", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/grolsch-premium-pilsner-217331", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/7/3/217331.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/7/3/217331.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rainhard Brewing From Beyond IPA", "brand" => "NULL", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.85", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.1356589147286822", "country" => "Canada", "url" => "https://www.lcbo.com/en/rainhard-brewing-from-beyond-ipa-24582", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024582.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024582.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nickel Brook Wicked Awesome IPA", "brand" => "Nickel Brook", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.6", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.11709221011546593", "country" => "Canada", "url" => "https://www.lcbo.com/en/nickel-brook-wicked-awesome-ipa-573550", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/3/5/573550.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/3/5/573550.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Expedition Brewing Loch Ness Lager", "brand" => "Expedition Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.15", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13319238900634248", "country" => "Canada", "url" => "https://www.lcbo.com/en/expedition-brewing-loch-ness-lager-23121", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/1/023121.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/1/023121.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Heineken", "brand" => "Heineken", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "15.95", "volume" => "1980", "alcohol_content" => "5.0", "price_index" => "0.1611111111111111", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/heineken-71126", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/7/1/1/071126.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/7/1/1/071126.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "DAB Original", "brand" => "DAB", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.4", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.096", "country" => "Germany", "url" => "https://www.lcbo.com/en/dab-original-254946", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/5/4/9/254946.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/5/4/9/254946.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Duxbury Cider Co Heritage 1650 Dry Cider 473 Can", "brand" => "Duxbury Cider Co", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.95", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.1284761749878029", "country" => "Canada", "url" => "https://www.lcbo.com/en/duxbury-cider-co-heritage-1650-dry-cider-473-can-476986", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/6/9/476986.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/6/9/476986.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Orange Snail Brewery - Rattle \"N\" Nemo", "brand" => "Orange Snail Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1416490486257928", "country" => "Canada", "url" => "https://www.lcbo.com/en/orange-snail-brewery-rattle-n-nemo-635052", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/5/0/635052.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/5/0/635052.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kronenbourg 1664 Blanc Fruit Rouges", "brand" => "Kronenbourg 1664", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "15.75", "volume" => "1980", "alcohol_content" => "4.5", "price_index" => "0.17676767676767677", "country" => "France", "url" => "https://www.lcbo.com/en/kronenbourg-1664-blanc-fruit-rouges-573972", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/3/9/573972.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/3/9/573972.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Michelob Ultra", "brand" => "Michelob", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "16.95", "volume" => "2838", "alcohol_content" => "4.0", "price_index" => "0.14931289640591966", "country" => "Canada", "url" => "https://www.lcbo.com/en/michelob-ultra-496968", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/6/9/496968.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/6/9/496968.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Moosehead Cracked Canoe", "brand" => "Cracked Canoe", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "45.5", "volume" => "8184", "alcohol_content" => "3.5", "price_index" => "0.15884652981427172", "country" => "Canada", "url" => "https://www.lcbo.com/en/moosehead-cracked-canoe-345322", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/4/5/3/345322.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/4/5/3/345322.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Okocim Pilsner", "brand" => "Okocim", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.5", "volume" => "500", "alcohol_content" => "5.7", "price_index" => "0.08771929824561403", "country" => "Poland", "url" => "https://www.lcbo.com/en/okocim-pilsner-200089", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/0/0/0/200089.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/0/0/0/200089.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Spearhead Brewing Light Lager", "brand" => "Spearhead Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.1559196617336152", "country" => "Canada", "url" => "https://www.lcbo.com/en/spearhead-brewing-light-lager-16447", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/4/016447.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/4/016447.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collingwood Brewery Freestyle Raspberry Hibiscus Wheat", "brand" => "Collingwood Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "5.7", "price_index" => "0.14650791884574013", "country" => "Canada", "url" => "https://www.lcbo.com/en/collingwood-brewery-freestyle-raspberry-hibiscus-wheat-24558", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024558.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024558.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Tennent's Export Lager", "brand" => "Tennent's", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.85", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.114", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/tennent-s-export-lager-268011", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/6/8/0/268011.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/6/8/0/268011.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Metal Head Double IPA - Queen of Hops", "brand" => "Nickel Brook Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.5", "volume" => "473", "alcohol_content" => "8.5", "price_index" => "0.11192637731625418", "country" => "Canada", "url" => "https://www.lcbo.com/en/metal-head-double-ipa-queen-of-hops-26052", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026052.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026052.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Slice Grapefruit", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.0", "volume" => "473", "alcohol_content" => "4.2", "price_index" => "0.15101177891875567", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-slice-grapefruit-19887", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/8/019887.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/8/019887.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Elora Brewing Company Lady Friend IPA", "brand" => "Elora Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.12861169837914024", "country" => "Canada", "url" => "https://www.lcbo.com/en/elora-brewing-company-lady-friend-ipa-23505", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023505.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023505.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Czechvar Premium Lager", "brand" => "Czechvar", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.11800000000000001", "country" => "Czechia", "url" => "https://www.lcbo.com/en/czechvar-premium-lager-148007", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/4/8/0/148007.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/4/8/0/148007.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Radeberger Pilsner", "brand" => "Radeberger", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.7", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.10800000000000001", "country" => "Germany", "url" => "https://www.lcbo.com/en/radeberger-pilsner-676056", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/6/0/676056.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/6/0/676056.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sawdust City Juicin New England IPA", "brand" => "Sawdust City", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.75", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.16737138830162088", "country" => "Canada", "url" => "https://www.lcbo.com/en/sawduty-city-juicin-new-england-ipa-25669", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/6/025669.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/6/025669.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nickel Brook Tongue Tied DDH IPA", "brand" => "Nickel Brook", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "6.1", "price_index" => "0.12303746577478945", "country" => "Canada", "url" => "https://www.lcbo.com/en/nickel-brook-tongue-tied-ddh-ipa-20801", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/8/020801.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/8/020801.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Chimay Blue Cap", "brand" => "Chimay", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.5", "volume" => "330", "alcohol_content" => "9.0", "price_index" => "0.15151515151515152", "country" => "Belgium", "url" => "https://www.lcbo.com/en/chimay-blue-cap-357236", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/5/7/2/357236.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/5/7/2/357236.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Guinness Hop House 13", "brand" => "Guinness", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.11800000000000001", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/guinness-hop-house-13-536227", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/6/2/536227.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/6/2/536227.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Naughty Otter Lager", "brand" => "Naughty Otter", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.05", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.12400390307367049", "country" => "Canada", "url" => "https://www.lcbo.com/en/naughty-otter-lager-434399", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/3/4/3/434399.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/3/4/3/434399.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Fenelon Falls Brewing Co. Vienna Lager", "brand" => "Fenelon Falls Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14799154334038053", "country" => "Canada", "url" => "https://www.lcbo.com/en/fenelon-falls-brewing-co-vienna-lager-576587", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/6/5/576587.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/6/5/576587.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Maclay's Traditional Pale Ale", "brand" => "Maclay's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.0", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.08456659619450316", "country" => "Canada", "url" => "https://www.lcbo.com/en/maclay-s-traditional-pale-ale-40949", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/4/0/9/040949.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/4/0/9/040949.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brickworks Ciderhouse Rose Cider", "brand" => "Brickworks Ciderhouse", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.5", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.12332628611698379", "country" => "Canada", "url" => "https://www.lcbo.com/en/brickworks-ciderhouse-rose-cider-625236", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/2/5/2/625236.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/2/5/2/625236.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Flying Monkeys Killer Cupcake Panda Double IPA", "brand" => "Flying Monkeys", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "8.2", "price_index" => "0.10184087041716085", "country" => "Canada", "url" => "https://www.lcbo.com/en/flying-monkeys-killer-cupcake-panda-double-ipa-12169", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/1/012169.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/1/012169.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Original Organic Lager", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "4.2", "price_index" => "0.17114668277458975", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-original-organic-lager-247627", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/4/7/6/247627.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/4/7/6/247627.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "London Brewing Hibiscus & Haskap Kettle Sour", "brand" => "London Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "4.2", "price_index" => "0.19883217557636162", "country" => "Canada", "url" => "https://www.lcbo.com/en/london-brewing-hibiscus-haskap-kettle-sour-15110", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015110.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015110.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Light", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "16.5", "volume" => "2838", "alcohol_content" => "4.0", "price_index" => "0.14534883720930233", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-light-300681", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/0/0/6/300681.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/0/0/6/300681.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Great Lakes Brewery Meanwhile... Down in Moxee", "brand" => "Great Lakes Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.11383964872336964", "country" => "Canada", "url" => "https://www.lcbo.com/en/great-lakes-brewery-meanwhile-down-in-moxee-10197", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/1/010197.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/1/010197.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Dragan Brewing Garnet Azacca Citra Pale Ale", "brand" => "Dragan Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.16701902748414377", "country" => "Canada", "url" => "https://www.lcbo.com/en/dragan-brewing-garnet-azacca-citra-pale-ale-12481", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/4/012481.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/4/012481.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Corona", "brand" => "Corona", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "55.95", "volume" => "7920", "alcohol_content" => "4.6", "price_index" => "0.1535737812911726", "country" => "Canada", "url" => "https://www.lcbo.com/en/corona-17856", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017856.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017856.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Grolsch Premium Pilsner", "brand" => "Grolsch", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "16.35", "volume" => "3000", "alcohol_content" => "5.0", "price_index" => "0.10900000000000001", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/grolsch-premium-pilsner-534925", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/4/9/534925.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/4/9/534925.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Dab Ultimate Low Carb Beer", "brand" => "DAB", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "16.05", "volume" => "3000", "alcohol_content" => "4.0", "price_index" => "0.13375", "country" => "Germany", "url" => "https://www.lcbo.com/en/dab-ultimate-low-carb-beer-15440", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015440.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015440.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mascot Pilsner", "brand" => "Mascot", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1416490486257928", "country" => "Canada", "url" => "https://www.lcbo.com/en/mascot-pilsner-471417", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/1/4/471417.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/1/4/471417.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Great Lakes Brewing Karma Simcoe IPA", "brand" => "Great Lakes Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.6", "price_index" => "0.11051316548145301", "country" => "Canada", "url" => "https://www.lcbo.com/en/great-lakes-brewing-karma-simcoe-ipa-24630", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/6/024630.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/6/024630.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Old Speckled Hen", "brand" => "Old Speckled Hen", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "12.25", "volume" => "2000", "alcohol_content" => "5.2", "price_index" => "0.11778846153846152", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/old-speckled-hen-563601", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/3/6/563601.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/3/6/563601.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Old Milwaukee Ice", "brand" => "Old Milwaukee", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "11.95", "volume" => "2838", "alcohol_content" => "5.5", "price_index" => "0.07655839579729642", "country" => "Canada", "url" => "https://www.lcbo.com/en/old-milwaukee-ice-15400", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015400.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015400.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hobgoblin Ipa", "brand" => "Wychwood Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.05", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.122", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/hobgoblin-ipa-16430", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/4/016430.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/4/016430.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Zywiec Beer", "brand" => "Zywiec", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.8", "volume" => "500", "alcohol_content" => "5.3", "price_index" => "0.10566037735849056", "country" => "Poland", "url" => "https://www.lcbo.com/en/zywiec-beer-331280", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/1/2/331280.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/1/2/331280.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Haliburton Forest Amber Logger", "brand" => "Boshkung Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.5", "volume" => "473", "alcohol_content" => "4.2", "price_index" => "0.1761804087385483", "country" => "Canada", "url" => "https://www.lcbo.com/en/haliburton-forest-amber-logger-26086", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026086.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026086.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Alexander Keith's India Pale Ale", "brand" => "Alexander Keith's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.0", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12684989429175475", "country" => "Canada", "url" => "https://www.lcbo.com/en/alexander-keith-s-india-pale-ale-907147", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/7/1/907147.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/7/1/907147.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Matter of Fact", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.14314658210007047", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-matter-of-fact-20119", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/1/020119.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/1/020119.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Creemore Springs Premium Lager", "brand" => "Creemore Springs", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "14.95", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.14037558685446008", "country" => "Canada", "url" => "https://www.lcbo.com/en/creemore-springs-premium-lager-15119", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015119.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015119.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "47.95", "volume" => "8520", "alcohol_content" => "4.0", "price_index" => "0.14069835680751175", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-908640", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/8/6/908640.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/8/6/908640.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Clifford Brewing Fruition Blood Orange & Pink Guava Sour", "brand" => "Clifford Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.18557669720460418", "country" => "Canada", "url" => "https://www.lcbo.com/en/clifford-brewing-fruition-blood-orange-pink-guava-sour-26878", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/8/026878.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/8/026878.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Left Field Brewery Greenwood IPA", "brand" => "Left Field Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.8", "volume" => "355", "alcohol_content" => "6.3", "price_index" => "0.16990833892242344", "country" => "Canada", "url" => "https://www.lcbo.com/en/left-field-brewery-greenwood-ipa-645416", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/5/4/645416.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/5/4/645416.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "No.99 Premium Lager - Wayne Gretzky Craft Brewing", "brand" => "Wayne Gretzky", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12473572938689217", "country" => "Canada", "url" => "https://www.lcbo.com/en/no-99-premium-lager-wayne-gretzky-craft-brewing-139162", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/3/9/1/139162.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/3/9/1/139162.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lake of Bays Brewing - Starboard New England IPA", "brand" => "Lake of Bays Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "5.4", "price_index" => "0.14290188708793358", "country" => "Canada", "url" => "https://www.lcbo.com/en/lake-of-bays-brewing-starboard-new-england-ipa-635375", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/5/3/635375.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/5/3/635375.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Burdock Brewery Tuesday Saison", "brand" => "Burdock Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.0", "volume" => "355", "alcohol_content" => "5.3", "price_index" => "0.21259633271326073", "country" => "Canada", "url" => "https://www.lcbo.com/en/burdock-brewery-tuesday-saison-13368", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/3/013368.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/3/013368.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Flying Monkeys Space Age Sunshine Quadruple IPA", "brand" => "Flying Monkeys", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "5.25", "volume" => "473", "alcohol_content" => "11.6", "price_index" => "0.0956841875045564", "country" => "Canada", "url" => "https://www.lcbo.com/en/flying-monkeys-space-age-sunshine-quadruple-ipa-24518", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024518.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024518.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "1000 Islands Brewery APA", "brand" => "1000 Islands Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.05", "volume" => "473", "alcohol_content" => "5.6", "price_index" => "0.1151464814255512", "country" => "Canada", "url" => "https://www.lcbo.com/en/1000-islands-brewery-apa-17197", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/1/017197.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/1/017197.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "West Avenue Cider Cherriosity", "brand" => "West Avenue Cider", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "4.05", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.13172873637989915", "country" => "Canada", "url" => "https://www.lcbo.com/en/west-avenue-cider-cherriosity-11173", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/1/011173.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/1/011173.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Faxe Amber Lager", "brand" => "Faxe", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.45", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.098", "country" => "Denmark", "url" => "https://www.lcbo.com/en/faxe-amber-lager-696773", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/6/7/696773.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/6/7/696773.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Dragon Stout", "brand" => "Dragon Stout", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "13.95", "volume" => "1704", "alcohol_content" => "7.5", "price_index" => "0.10915492957746478", "country" => "Jamaica", "url" => "https://www.lcbo.com/en/dragon-stout-546408", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/6/4/546408.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/6/4/546408.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rice Lake Original Dry Cider", "brand" => "NULL", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "13.95", "volume" => "1420", "alcohol_content" => "6.2", "price_index" => "0.1584507042253521", "country" => "Canada", "url" => "https://www.lcbo.com/en/rice-lake-original-dry-cider-24870", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024870.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024870.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rhythm & Brews Symphony IPA", "brand" => "Stockyards Beverage Co", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "6.9", "price_index" => "0.10877225235162545", "country" => "Canada", "url" => "https://www.lcbo.com/en/rhythm-brews-symphony-ipa-17619", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/6/017619.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/6/017619.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Holman Brewing Red Dock Amber Ale", "brand" => "Red Dock", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.3", "price_index" => "0.13363117794886115", "country" => "Canada", "url" => "https://www.lcbo.com/en/holman-brewing-red-dock-amber-ale-26081", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026081.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/0/026081.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lake of the Woods Sultana Gold Ale", "brand" => "Lake Of The Woods", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14587737843551796", "country" => "Canada", "url" => "https://www.lcbo.com/en/lake-of-the-woods-sultana-gold-ale-429712", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/2/9/7/429712.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/2/9/7/429712.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ardiel Cider House Victoria Pear Cider", "brand" => "Ardiel Cider House", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.65", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.12861169837914024", "country" => "Canada", "url" => "https://www.lcbo.com/en/ardiel-cider-house-victoria-pear-cider-648410", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/8/4/648410.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/8/4/648410.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Asahi Super Dry", "brand" => "Asahi", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "15.4", "volume" => "1980", "alcohol_content" => "5.0", "price_index" => "0.15555555555555556", "country" => "Thailand", "url" => "https://www.lcbo.com/en/asahi-super-dry-439950", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/3/9/9/439950.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/3/9/9/439950.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Partake Brewing Non-Alcoholic Pale Ale", "brand" => "Partake Brewing", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "2.0", "volume" => "355", "alcohol_content" => "0.3", "price_index" => "1.8779342723004695", "country" => "Canada", "url" => "https://www.lcbo.com/en/partake-brewing-non-alcoholic-pale-ale-617878", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/7/8/617878.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/7/8/617878.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Laker Lager", "brand" => "Laker", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "34.95", "volume" => "8520", "alcohol_content" => "5.0", "price_index" => "0.08204225352112676", "country" => "Canada", "url" => "https://www.lcbo.com/en/laker-lager-398719", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/9/8/7/398719.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/9/8/7/398719.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Puddicombe Family Tree Apple Cider", "brand" => "Puddicombe", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.1326157985777436", "country" => "Canada", "url" => "https://www.lcbo.com/en/puddicombe-family-tree-apple-cider-497719", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/7/7/497719.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/7/7/497719.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Cream Ale", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14376321353065538", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-cream-ale-131490", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/3/1/4/131490.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/3/1/4/131490.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hometown Brew Southern Ale", "brand" => "Hometown Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.2", "volume" => "473", "alcohol_content" => "4.9", "price_index" => "0.1380679121542909", "country" => "Canada", "url" => "https://www.lcbo.com/en/hometown-brew-southern-ale-519744", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/9/7/519744.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/9/7/519744.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "La Pachanga Lager", "brand" => "El Gringo", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15973690392295042", "country" => "Canada", "url" => "https://www.lcbo.com/en/la-pachanga-lager-18996", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/9/018996.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/9/018996.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Goose Island Beer Co. Juice Island Hazy IPA", "brand" => "Goose Island", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "6.4", "price_index" => "0.10735993657505284", "country" => "Canada", "url" => "https://www.lcbo.com/en/goose-island-beer-co-juice-island-hazy-ipa-20069", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020069.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020069.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Budweiser", "brand" => "Budweiser", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "29.95", "volume" => "5115", "alcohol_content" => "5.0", "price_index" => "0.11710654936461387", "country" => "Canada", "url" => "https://www.lcbo.com/en/budweiser-612499", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/2/4/612499.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/2/4/612499.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brasserie Tuque De Broue Gougounes Rousses", "brand" => "Brasserie Tuque de Broue", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "5.8", "price_index" => "0.13669169643508056", "country" => "Canada", "url" => "https://www.lcbo.com/en/brasserie-tuque-de-broue-gougounes-rousses-508028", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/0/8/0/508028.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/0/8/0/508028.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light Lime", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "27.75", "volume" => "4092", "alcohol_content" => "4.0", "price_index" => "0.1695381231671554", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-lime-478446", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/8/4/478446.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/8/4/478446.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Goose Island IPA", "brand" => "Goose Island", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.0", "volume" => "473", "alcohol_content" => "5.9", "price_index" => "0.10749991041674131", "country" => "Canada", "url" => "https://www.lcbo.com/en/goose-island-ipa-434084", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/3/4/0/434084.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/3/4/0/434084.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rally Beer Company Extra Mile Session IPA", "brand" => "Rally Beer Company", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.15", "volume" => "355", "alcohol_content" => "3.5", "price_index" => "0.2535211267605634", "country" => "Canada", "url" => "https://www.lcbo.com/en/rally-beer-company-extra-mile-session-ipa-21432", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/4/021432.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/4/021432.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Miller Lite", "brand" => "Miller", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "57.95", "volume" => "10650", "alcohol_content" => "4.0", "price_index" => "0.13603286384976526", "country" => "Canada", "url" => "https://www.lcbo.com/en/miller-lite-15506", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/5/015506.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/5/015506.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Organic Mixed Pack", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Gifts and Samplers", "price" => "19.95", "volume" => "2838", "alcohol_content" => "5.5", "price_index" => "0.12781087833941956", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-organic-mixed-pack-26110", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/1/026110.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/1/026110.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light Chelada", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "15.5", "volume" => "2130", "alcohol_content" => "4.0", "price_index" => "0.18192488262910797", "country" => "United States", "url" => "https://www.lcbo.com/en/bud-light-chelada-21164", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/1/021164.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/1/021164.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Growers Pear Cider", "brand" => "Growers", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14587737843551796", "country" => "Canada", "url" => "https://www.lcbo.com/en/growers-pear-cider-456731", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/6/7/456731.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/6/7/456731.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Orange Snail Iron Pig Pale Ale", "brand" => "Orange Snail Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13742071881606763", "country" => "Canada", "url" => "https://www.lcbo.com/en/orange-snail-iron-pig-pale-ale-482802", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/2/8/482802.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/2/8/482802.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Great Lakes Brewery HazeMama", "brand" => "Great Lakes Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.10570824524312894", "country" => "Canada", "url" => "https://www.lcbo.com/en/great-lakes-brewery-hazemama-14812", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/8/014812.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/8/014812.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Anderson Ale's Summer Pilsner", "brand" => "Anderson Craft Ales", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "14.95", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.14037558685446008", "country" => "Canada", "url" => "https://www.lcbo.com/en/anderson-ale-s-summer-pilsner-574350", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/4/3/574350.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/4/3/574350.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "54.95", "volume" => "10650", "alcohol_content" => "4.0", "price_index" => "0.1289906103286385", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-676684", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/6/6/676684.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/6/6/676684.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nickel Brook Summer Mix Pack", "brand" => "Nickel Brook Brewery", "category" => "Beer & Cider", "subcategory" => "Gifts and Samplers", "price" => "20.95", "volume" => "2838", "alcohol_content" => "6.0", "price_index" => "0.12303265210241954", "country" => "Canada", "url" => "https://www.lcbo.com/en/nickel-brook-summer-mix-pack-27493", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/4/027493.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/4/027493.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nita Beer Company Biju", "brand" => "Nita Beer", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "6.1", "price_index" => "0.12130454372162341", "country" => "Canada", "url" => "https://www.lcbo.com/en/nita-beer-company-biju-20033", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020033.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020033.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Harp Lager", "brand" => "Harp", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.85", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.114", "country" => "Ireland", "url" => "https://www.lcbo.com/en/harp-lager-271619", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/1/6/271619.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/1/6/271619.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Oak 20 Hazy Years", "brand" => "Black Oak", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.1284761749878029", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-oak-20-hazy-years-20029", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020029.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020029.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Light", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "46.95", "volume" => "9548", "alcohol_content" => "4.0", "price_index" => "0.12293150397989108", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-light-692285", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/2/2/692285.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/2/2/692285.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Detour", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "18.95", "volume" => "2838", "alcohol_content" => "4.3", "price_index" => "0.15528459281839488", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-detour-14988", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/9/014988.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/9/014988.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Labatt Maximum Ice", "brand" => "Labatt", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.0", "volume" => "473", "alcohol_content" => "7.1", "price_index" => "0.08933091147306674", "country" => "Canada", "url" => "https://www.lcbo.com/en/labatt-maximum-ice-691683", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/1/6/691683.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/1/6/691683.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Somersby Pear Cider", "brand" => "Somersby", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15738783180643645", "country" => "Canada", "url" => "https://www.lcbo.com/en/somersby-pear-cider-15860", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015860.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015860.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Brewery Born this Way Nano IPA", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "3.8", "price_index" => "0.20307110270390563", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-brewery-born-this-way-ipa-15994", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/9/015994.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/9/015994.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beyond The Pale Pale Ale Project", "brand" => "Beyond The Pale", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "4.9", "price_index" => "0.15748371230098804", "country" => "Canada", "url" => "https://www.lcbo.com/en/beyond-the-pale-pale-ale-project-467159", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/7/1/467159.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/7/1/467159.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Big Rig Alpha Bomb IPA", "brand" => "Big Rig Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.6", "volume" => "473", "alcohol_content" => "6.6", "price_index" => "0.11531808571977706", "country" => "Canada", "url" => "https://www.lcbo.com/en/big-rig-alpha-bomb-ipa-446955", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/6/9/446955.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/6/9/446955.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Moosehead Radler", "brand" => "Moosehead", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "3.0", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.15856236786469344", "country" => "Canada", "url" => "https://www.lcbo.com/en/moosehead-radler-609248", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/0/9/2/609248.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/0/9/2/609248.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Liberty Village Peach Cider", "brand" => "Liberty Village", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.55", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.16678412027249237", "country" => "Canada", "url" => "https://www.lcbo.com/en/liberty-village-peach-cider-19969", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019969.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019969.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Anderson Cream Ale", "brand" => "Anderson Craft Ales", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "14.95", "volume" => "2130", "alcohol_content" => "4.8", "price_index" => "0.14622456964006258", "country" => "Canada", "url" => "https://www.lcbo.com/en/anderson-cream-ale-534867", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/4/8/534867.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/4/8/534867.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ernest Rose Light Cider Spritzer Cranberry Cherry", "brand" => "Ernest", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.65", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.19291754756871032", "country" => "Canada", "url" => "https://www.lcbo.com/en/ernest-rose-light-cider-spritzer-cranberry-cherry-19977", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019977.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019977.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Carling Lager", "brand" => "Carling", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "52.95", "volume" => "10650", "alcohol_content" => "4.9", "price_index" => "0.10146593848807128", "country" => "Canada", "url" => "https://www.lcbo.com/en/carling-lager-15141", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015141.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015141.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Great Lakes Brewery BURST!", "brand" => "Great Lakes Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.0", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.14094432699083861", "country" => "Canada", "url" => "https://www.lcbo.com/en/great-lakes-brewery-burst-16897", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/8/016897.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/8/016897.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Amsterdam Boneshaker", "brand" => "Amsterdam", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "7.1", "price_index" => "0.10570824524312897", "country" => "Canada", "url" => "https://www.lcbo.com/en/amsterdam-boneshaker-351429", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/5/1/4/351429.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/5/1/4/351429.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Wernesgruner Pilsner", "brand" => "Wernesgruner", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.55", "volume" => "500", "alcohol_content" => "4.9", "price_index" => "0.10408163265306122", "country" => "Germany", "url" => "https://www.lcbo.com/en/wernesgruner-pilsner-427831", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/2/7/8/427831.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/2/7/8/427831.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Niagara Cider Company No.1 Dry Apple Cider", "brand" => "Niagara Cider Company", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.85", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.1356589147286822", "country" => "Canada", "url" => "https://www.lcbo.com/en/niagara-cider-company-no-1-dry-apple-cider-11562", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/5/011562.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/5/011562.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Big World Small Batch - South Korea", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.16208597603946442", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-big-world-small-batch-south-korea-26694", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/6/026694.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/6/026694.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Amsterdam Fracture Hazy Imperial IPA", "brand" => "Amsterdam Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "8.5", "price_index" => "0.09824648675537867", "country" => "Canada", "url" => "https://www.lcbo.com/en/amsterdam-fracture-hazy-imperial-ipa-24667", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/6/024667.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/6/024667.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Lug Tread", "brand" => "Beau's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "18.45", "volume" => "2400", "alcohol_content" => "5.2", "price_index" => "0.14783653846153844", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-lug-tread-19271", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/2/019271.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/2/019271.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Old Flame Vienna Lager Red", "brand" => "Old Flame", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.1", "price_index" => "0.1347261949177134", "country" => "Canada", "url" => "https://www.lcbo.com/en/old-flame-vienna-lager-red-10562", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/5/010562.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/5/010562.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lake of the Woods Channel Marker Light Lager", "brand" => "Lake Of The Woods", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.18234672304439745", "country" => "Canada", "url" => "https://www.lcbo.com/en/lake-of-the-woods-channel-marker-light-lager-11299", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/2/011299.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/2/011299.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Carling", "brand" => "Carling", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "13.5", "volume" => "2838", "alcohol_content" => "4.9", "price_index" => "0.09707900073348577", "country" => "Canada", "url" => "https://www.lcbo.com/en/carling-488411", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/8/4/488411.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/8/4/488411.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Labatt Blue", "brand" => "Labatt", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "23.5", "volume" => "4092", "alcohol_content" => "5.0", "price_index" => "0.11485826001955032", "country" => "Canada", "url" => "https://www.lcbo.com/en/labatt-blue-900035", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/0/0/900035.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/0/0/900035.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Flying Monkeys The Mutants are Revolting IPA", "brand" => "Flying Monkeys", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.16678412027249237", "country" => "Canada", "url" => "https://www.lcbo.com/en/flying-monkeys-the-mutants-are-revolting-ipa-15717", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/7/015717.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/7/015717.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Somersby Apple Cider", "brand" => "Somersby", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15738783180643645", "country" => "Canada", "url" => "https://www.lcbo.com/en/somersby-apple-cider-15563", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/5/015563.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/5/015563.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Full Beard Brewing - The Master of Beta", "brand" => "Full Beard Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15738783180643645", "country" => "Canada", "url" => "https://www.lcbo.com/en/full-beard-brewing-the-master-of-beta-638841", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/8/8/638841.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/8/8/638841.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Old Milwaukee", "brand" => "Old Milwaukee", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.0", "volume" => "473", "alcohol_content" => "4.9", "price_index" => "0.0862924450964318", "country" => "Canada", "url" => "https://www.lcbo.com/en/old-milwaukee-15405", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015405.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015405.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Town Brewery Outside Jokes", "brand" => "Town Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.16701902748414377", "country" => "Canada", "url" => "https://www.lcbo.com/en/town-brewery-outside-jokes-18336", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018336.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018336.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Publican House Square Nail Pale Ale", "brand" => "The Publican House", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.3", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.12684989429175475", "country" => "Canada", "url" => "https://www.lcbo.com/en/publican-house-square-nail-pale-ale-376293", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/7/6/2/376293.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/7/6/2/376293.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lake of the Woods Nautical Disaster", "brand" => "Lake Of The Woods", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "6.4", "price_index" => "0.12387684989429175", "country" => "Canada", "url" => "https://www.lcbo.com/en/lake-of-the-woods-nautical-disaster-11871", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/8/011871.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/8/011871.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Samuel Adams Boston Lager", "brand" => "Samuel Adams", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.14314658210007047", "country" => "United States", "url" => "https://www.lcbo.com/en/samuel-adams-boston-lager-365601", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/6/5/6/365601.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/6/5/6/365601.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Saison Dupont", "brand" => "Saison Dupont", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.0", "volume" => "330", "alcohol_content" => "6.5", "price_index" => "0.13986013986013987", "country" => "Belgium", "url" => "https://www.lcbo.com/en/saison-dupont-551697", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/1/6/551697.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/1/6/551697.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Boreale Pale Ale Des Bois", "brand" => "Les Brasseurs Du Nord Inc", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.3", "volume" => "473", "alcohol_content" => "5.1", "price_index" => "0.13679890560875513", "country" => "Canada", "url" => "https://www.lcbo.com/en/boreale-pale-ale-des-bois-18003", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/0/018003.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/0/018003.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Omnipollo Mazarin", "brand" => "Omnipollo", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.25", "volume" => "473", "alcohol_content" => "5.6", "price_index" => "0.16045001510117793", "country" => "Canada", "url" => "https://www.lcbo.com/en/omnipollo-mazarin-20433", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/4/020433.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/4/020433.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stack Brewing Panache Session IPA", "brand" => "Stack Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15973690392295042", "country" => "Canada", "url" => "https://www.lcbo.com/en/stack-brewing-panache-session-ipa-546820", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/6/8/546820.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/6/8/546820.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brickworks Ciderhouse Blossomed Oak Cider", "brand" => "Brickworks Ciderhouse", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "4.25", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.14975334742776603", "country" => "Canada", "url" => "https://www.lcbo.com/en/brickworks-ciderhouse-blossomed-oak-cider-19979", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019979.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019979.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Aecht Schlenkerla Rauchbier", "brand" => "Heller Bamberg", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "4.05", "volume" => "500", "alcohol_content" => "5.1", "price_index" => "0.1588235294117647", "country" => "Germany", "url" => "https://www.lcbo.com/en/aecht-schlenkerla-rauchbier-409110", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/9/1/409110.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/9/1/409110.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Triple Bogey Light", "brand" => "Triple Bogey", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.9", "volume" => "473", "alcohol_content" => "3.9", "price_index" => "0.15720713395132", "country" => "Canada", "url" => "https://www.lcbo.com/en/triple-bogey-light-10838", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/8/010838.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/8/010838.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Radical Road Brewing Straight Up Sour Mango Pineapple", "brand" => "Radical Road", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "355", "alcohol_content" => "4.5", "price_index" => "0.2190923317683881", "country" => "Canada", "url" => "https://www.lcbo.com/en/radical-road-brewing-straight-up-sour-mango-pineapple-19733", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/7/019733.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/7/019733.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muddy York Brewing Working Hard New England IPA", "brand" => "Muddy York Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.1284761749878029", "country" => "Canada", "url" => "https://www.lcbo.com/en/muddy-york-brewing-working-hard-new-england-ipa-15864", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015864.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015864.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kingsville Brewing - Czech Style Lager", "brand" => "Kingsville Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13742071881606763", "country" => "Canada", "url" => "https://www.lcbo.com/en/kingsville-brewing-czech-style-lager-10005", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/0/010005.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/0/010005.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Moosehead Lager", "brand" => "Moosehead", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "32.95", "volume" => "5325", "alcohol_content" => "5.0", "price_index" => "0.12375586854460095", "country" => "Canada", "url" => "https://www.lcbo.com/en/moosehead-lager-17260", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/2/017260.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/2/017260.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "All or Nothing Brewhouse Pushin the Limits India Pale Lager", "brand" => "All Or Nothing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.3", "volume" => "473", "alcohol_content" => "4.9", "price_index" => "0.14238253440911247", "country" => "Canada", "url" => "https://www.lcbo.com/en/all-or-nothing-brewhouse-pushin-the-limits-india-pale-lager-20022", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020022.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020022.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Dunes Beach Beer", "brand" => "County Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.95", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.12993305144467934", "country" => "Canada", "url" => "https://www.lcbo.com/en/dunes-beach-beer-494823", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/4/8/494823.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/4/8/494823.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sawdust City Lusciousness Imperial Milk Stout", "brand" => "Sawdust City Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "5.95", "volume" => "473", "alcohol_content" => "9.5", "price_index" => "0.13241348614665627", "country" => "Canada", "url" => "https://www.lcbo.com/en/sawdust-city-lusciousness-imperial-milk-stout-23547", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023547.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023547.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Good Time Session IPA", "brand" => "Beau's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.18234672304439745", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-good-time-session-ipa-18638", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/6/018638.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/6/018638.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Steam Whistle Pale Ale", "brand" => "Steam Whistle", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1416490486257928", "country" => "Canada", "url" => "https://www.lcbo.com/en/steam-whistle-pale-ale-12041", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/0/012041.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/0/012041.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Buzz Hemp Beer", "brand" => "Buzz", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "1.95", "volume" => "355", "alcohol_content" => "5.0", "price_index" => "0.10985915492957746", "country" => "Canada", "url" => "https://www.lcbo.com/en/buzz-hemp-beer-330969", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/0/9/330969.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/0/9/330969.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Newark Lager", "brand" => "Newark Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12473572938689217", "country" => "Canada", "url" => "https://www.lcbo.com/en/newark-lager-13461", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/4/013461.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/4/013461.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Granville Island Lions Winter Ale", "brand" => "Granville Island", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.13069383048241398", "country" => "Canada", "url" => "https://www.lcbo.com/en/granville-island-lions-winter-ale-321877", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/2/1/8/321877.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/2/1/8/321877.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beyond The Pale Darkness", "brand" => "Beyond The Pale", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.6", "price_index" => "0.13213530655391123", "country" => "Canada", "url" => "https://www.lcbo.com/en/beyond-the-pale-darkness-15801", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015801.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015801.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Keystone Light", "brand" => "Keystone", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "40.95", "volume" => "8184", "alcohol_content" => "4.0", "price_index" => "0.125091642228739", "country" => "Canada", "url" => "https://www.lcbo.com/en/keystone-light-172635", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/7/2/6/172635.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/7/2/6/172635.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Chronicle Brewing Co Chimera", "brand" => "Chronicle Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.25", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.17970401691331922", "country" => "Canada", "url" => "https://www.lcbo.com/en/chronicle-brewing-co-chimera-23122", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/1/023122.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/1/023122.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Small Pony Barrel Works Half Remembered Dream", "brand" => "Small Pony Barrel Works", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "15.0", "volume" => "750", "alcohol_content" => "5.0", "price_index" => "0.4", "country" => "Canada", "url" => "https://www.lcbo.com/en/small-pony-barrel-works-half-remembered-dream-546440", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/6/4/546440.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/6/4/546440.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cascade Brewing Valley Flora 2017", "brand" => "Cascade Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "12.85", "volume" => "500", "alcohol_content" => "10.0", "price_index" => "0.257", "country" => "United States", "url" => "https://www.lcbo.com/en/cascade-brewing-valley-flora-2017-20358", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/3/020358.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/3/020358.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Brewery Tread Lightly", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "51.5", "volume" => "8520", "alcohol_content" => "4.0", "price_index" => "0.1511150234741784", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-brewery-tread-lightly-19993", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019993.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019993.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Upper Canada Lager", "brand" => "Upper Canada", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "38.95", "volume" => "8184", "alcohol_content" => "5.0", "price_index" => "0.09518572825024438", "country" => "Canada", "url" => "https://www.lcbo.com/en/upper-canada-lager-242420", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/4/2/4/242420.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/4/2/4/242420.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Left Field Brewery Squeeze Play Peach", "brand" => "Left Field Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "355", "alcohol_content" => "4.8", "price_index" => "0.23180751173708922", "country" => "Canada", "url" => "https://www.lcbo.com/en/left-field-brewery-squeeze-play-peach-24584", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024584.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024584.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Square Timber Brewing - Pembroke Pils", "brand" => "Square Timber Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.0", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.14094432699083861", "country" => "Canada", "url" => "https://www.lcbo.com/en/square-timber-brewing-pembroke-pils-635334", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/5/3/635334.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/5/3/635334.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Heineken", "brand" => "Heineken", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "34.5", "volume" => "6000", "alcohol_content" => "5.0", "price_index" => "0.115", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/heineken-415240", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/5/2/415240.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/5/2/415240.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Signal Brewing Firewire", "brand" => "Signal Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.5", "volume" => "473", "alcohol_content" => "6.8", "price_index" => "0.13990797164531774", "country" => "Canada", "url" => "https://www.lcbo.com/en/signal-brewing-firewire-20005", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020005.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020005.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Skeleton Park Sol Juice IPA", "brand" => "Skeleton Crew Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.1321353065539112", "country" => "Canada", "url" => "https://www.lcbo.com/en/skeleton-park-sol-juice-ipa-20804", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/8/020804.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/8/020804.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "New Ontario Brewing - Tree Topper Red Ale", "brand" => "New Ontario Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.13620100829403153", "country" => "Canada", "url" => "https://www.lcbo.com/en/new-ontario-brewing-tree-topper-red-ale-560102", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/0/1/560102.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/0/1/560102.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Miller Genuine Draft", "brand" => "Miller", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "44.95", "volume" => "8520", "alcohol_content" => "4.7", "price_index" => "0.11225152332434322", "country" => "Canada", "url" => "https://www.lcbo.com/en/miller-genuine-draft-544866", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/4/8/544866.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/4/8/544866.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mickey's Beer", "brand" => "Mickey's", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "26.5", "volume" => "4260", "alcohol_content" => "5.5", "price_index" => "0.11310285958173281", "country" => "United States", "url" => "https://www.lcbo.com/en/mickey-s-beer-463836", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/3/8/463836.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/3/8/463836.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Carling Light", "brand" => "Carling", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "52.95", "volume" => "10650", "alcohol_content" => "4.0", "price_index" => "0.12429577464788732", "country" => "Canada", "url" => "https://www.lcbo.com/en/carling-light-26774", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/7/026774.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/7/026774.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Marke Original Oettinger Weissbier", "brand" => "Private Stock", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.7", "volume" => "500", "alcohol_content" => "4.9", "price_index" => "0.11020408163265306", "country" => "Germany", "url" => "https://www.lcbo.com/en/marke-original-oettinger-weissbier-455054", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/5/0/455054.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/5/0/455054.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "RAINHARD BREWING KAPOW! IPA", "brand" => "Rainhard Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.1284761749878029", "country" => "Canada", "url" => "https://www.lcbo.com/en/rainhard-brewing-kapow-ipa-573923", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/3/9/573923.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/3/9/573923.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Post Game Brewing Locker Room Lager", "brand" => "Post Game Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "4.2", "price_index" => "0.1484949159367764", "country" => "Canada", "url" => "https://www.lcbo.com/en/post-game-brewing-locker-room-lager-542027", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/2/0/542027.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/2/0/542027.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Double Trouble Hops & Robbers IPA", "brand" => "Double Trouble", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.7", "price_index" => "0.12425355142613403", "country" => "Canada", "url" => "https://www.lcbo.com/en/double-trouble-hops-robbers-ipa-285270", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/8/5/2/285270.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/8/5/2/285270.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "The Kingston Brewing Co Whitetail Cream Ale", "brand" => "The Kingston Brewing Co.", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14799154334038053", "country" => "Canada", "url" => "https://www.lcbo.com/en/the-kingston-brewing-co-whitetail-cream-ale-18330", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018330.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018330.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Innocente Fling Golden Ale", "brand" => "Innocente Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.0", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.16913319238900631", "country" => "Canada", "url" => "https://www.lcbo.com/en/innocente-fling-golden-ale-534941", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/4/9/534941.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/4/9/534941.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "The Exchange Brewery Apricot Berliner Weisse", "brand" => "NULL", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.18557669720460418", "country" => "Canada", "url" => "https://www.lcbo.com/en/the-exchange-brewery-apricot-berliner-weisse-27246", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/2/027246.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/2/027246.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hockley Taster Pack", "brand" => "Hockley Valley Brewing", "category" => "Beer & Cider", "subcategory" => "Gifts and Samplers", "price" => "8.85", "volume" => "1419", "alcohol_content" => "5.0", "price_index" => "0.12473572938689216", "country" => "Canada", "url" => "https://www.lcbo.com/en/hockley-taster-pack-381186", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/8/1/1/381186.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/8/1/1/381186.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kichesippi Heller Highwater", "brand" => "Kichesippi", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.3", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.1453488372093023", "country" => "Canada", "url" => "https://www.lcbo.com/en/kichesippi-heller-highwater-414441", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/4/4/414441.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/4/4/414441.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Point Five Citrus Lager", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "10.95", "volume" => "2130", "alcohol_content" => "0.51", "price_index" => "1.0080088373377518", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-point-five-citrus-lager-17926", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/9/017926.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/9/017926.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Railway City Jumbo", "brand" => "Railway City", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "6.7", "price_index" => "0.11201918525764411", "country" => "Canada", "url" => "https://www.lcbo.com/en/railway-city-jumbo-22571", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/5/022571.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/5/022571.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "MVP Brewing Company Premium Lager", "brand" => "MVP Brewing Company", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.5", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.11745360582569885", "country" => "Canada", "url" => "https://www.lcbo.com/en/mvp-brewing-company-premium-lager-17903", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/9/017903.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/9/017903.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Omnipollo Prodromus", "brand" => "Omnipollo", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "8.95", "volume" => "473", "alcohol_content" => "10.5", "price_index" => "0.18020738950971507", "country" => "Canada", "url" => "https://www.lcbo.com/en/omnipollo-prodromus-544015", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/4/0/544015.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/4/0/544015.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Heineken", "brand" => "Heineken", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "29.5", "volume" => "3960", "alcohol_content" => "5.0", "price_index" => "0.14898989898989898", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/heineken-616102", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/6/1/616102.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/6/1/616102.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "New Ontario Brewing Company Bearded Bear NEIPA", "brand" => "NULL", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.1", "price_index" => "0.14301703768188037", "country" => "Canada", "url" => "https://www.lcbo.com/en/new-ontario-brewing-company-bearded-bear-neipa-26793", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/7/026793.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/7/026793.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Steam Whistle Premium Pilsner", "brand" => "Steam Whistle", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "28.95", "volume" => "4092", "alcohol_content" => "5.0", "price_index" => "0.1414956011730205", "country" => "Canada", "url" => "https://www.lcbo.com/en/steam-whistle-premium-pilsner-637777", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/7/7/637777.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/7/7/637777.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Manitoulin Ode'Imin Strawberry Beer", "brand" => "Manitoulin Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.6", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.16913319238900634", "country" => "Canada", "url" => "https://www.lcbo.com/en/manitoulin-ode-imin-strawberry-beer-22695", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/6/022695.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/6/022695.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "The Collingwood Brewery Freestyle Double Chocolate", "brand" => "Collingwood", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.14030367095906207", "country" => "Canada", "url" => "https://www.lcbo.com/en/the-collingwood-brewery-freestyle-double-chocolate-22209", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022209.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022209.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ridge Rock Brewing Co Amber", "brand" => "Ridge Rock Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.15856236786469344", "country" => "Canada", "url" => "https://www.lcbo.com/en/ridge-rock-brewing-co-amber-17668", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/6/017668.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/6/017668.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Northern Maverick Handcrafted Lager", "brand" => "Northern Maverick", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/northern-maverick-handcrafted-lager-526145", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/2/6/1/526145.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/2/6/1/526145.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Dipper", "brand" => "Georgian Bay", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12473572938689217", "country" => "Canada", "url" => "https://www.lcbo.com/en/georgian-bay-dipper-88724", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/8/8/7/088724.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/8/8/7/088724.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Two Blokes - Hex Press Dry Cider", "brand" => "Two Blokes Cider", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "4.05", "volume" => "473", "alcohol_content" => "6.4", "price_index" => "0.1337869978858351", "country" => "Canada", "url" => "https://www.lcbo.com/en/two-blokes-hex-press-dry-cider-13701", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/7/013701.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/7/013701.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Doppel Hirsch Doppel Bock", "brand" => "Doppel-Hirsch", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "4.1", "volume" => "500", "alcohol_content" => "7.2", "price_index" => "0.11388888888888886", "country" => "Germany", "url" => "https://www.lcbo.com/en/doppel-hirsch-doppel-bock-492041", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/2/0/492041.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/2/0/492041.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Spirit Tree Draught Cider", "brand" => "Spirit Tree", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.3", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.11627906976744186", "country" => "Canada", "url" => "https://www.lcbo.com/en/spirit-tree-draught-cider-413153", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/3/1/413153.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/3/1/413153.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Original", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "49.95", "volume" => "8520", "alcohol_content" => "5.0", "price_index" => "0.11725352112676057", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-original-14093", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/0/014093.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/0/014093.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Forked River Interstellar IPA", "brand" => "Forked River Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.6", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.11709221011546593", "country" => "Canada", "url" => "https://www.lcbo.com/en/forked-river-interstellar-ipa-698472", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/8/4/698472.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/8/4/698472.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busch", "brand" => "Busch", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "23.5", "volume" => "4092", "alcohol_content" => "4.7", "price_index" => "0.12218963831867057", "country" => "Canada", "url" => "https://www.lcbo.com/en/busch-696120", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/6/1/696120.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/6/1/696120.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Redline Clutch", "brand" => "Redline Brewhouse", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.1", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.13653981677237492", "country" => "Canada", "url" => "https://www.lcbo.com/en/redline-clutch-461756", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/1/7/461756.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/1/7/461756.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Joseph Bloor Brewery Joe Blo' Bohemian Pilsner", "brand" => "Joseph Bloor Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.2", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.1439431424587288", "country" => "Canada", "url" => "https://www.lcbo.com/en/joseph-bloor-brewery-joe-blo-bohemian-pilsner-645598", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/5/5/645598.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/5/5/645598.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Landshark Lager", "brand" => "Landshark", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "47.95", "volume" => "8520", "alcohol_content" => "4.6", "price_index" => "0.12234639722392325", "country" => "Canada", "url" => "https://www.lcbo.com/en/landshark-lager-26750", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/7/026750.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/7/026750.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hespeler Brewing - Canadian Heritage Gold Pilsner", "brand" => "Hespeler Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14799154334038053", "country" => "Canada", "url" => "https://www.lcbo.com/en/hespeler-brewing-canadian-heritage-gold-pilsner-13240", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/2/013240.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/2/013240.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ayinger Celebrator", "brand" => "Ayinger", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.85", "volume" => "330", "alcohol_content" => "6.7", "price_index" => "0.17412935323383083", "country" => "Germany", "url" => "https://www.lcbo.com/en/ayinger-celebrator-254656", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/5/4/6/254656.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/5/4/6/254656.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "James Ready 5.5", "brand" => "James Ready", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "42.95", "volume" => "8520", "alcohol_content" => "5.5", "price_index" => "0.09165599658557405", "country" => "Canada", "url" => "https://www.lcbo.com/en/james-ready-5-5-17259", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/2/017259.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/2/017259.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kingsville Brewery Hefeweizen", "brand" => "Kingsville Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13742071881606763", "country" => "Canada", "url" => "https://www.lcbo.com/en/kingsville-brewery-hefeweizen-10004", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/0/010004.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/0/010004.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Orval Trappist Ale", "brand" => "Orval", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "5.0", "volume" => "330", "alcohol_content" => "6.9", "price_index" => "0.2195871761089152", "country" => "Belgium", "url" => "https://www.lcbo.com/en/orval-trappist-ale-439992", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/3/9/9/439992.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/3/9/9/439992.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Brewery Craft Lager", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "18.95", "volume" => "2838", "alcohol_content" => "4.8", "price_index" => "0.13910911439981208", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-brewery-craft-lager-14987", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/9/014987.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/9/014987.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stella Artois", "brand" => "Stella Artois", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "15.95", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.14976525821596243", "country" => "Canada", "url" => "https://www.lcbo.com/en/stella-artois-17851", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017851.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017851.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Original Local Lager", "brand" => "Original Local Beers", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.15", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13319238900634248", "country" => "Canada", "url" => "https://www.lcbo.com/en/original-local-lager-10345", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/3/010345.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/3/010345.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Miller Genuine Draught", "brand" => "Miller", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "30.95", "volume" => "5676", "alcohol_content" => "4.7", "price_index" => "0.11601667341400147", "country" => "Canada", "url" => "https://www.lcbo.com/en/miller-genuine-draught-15851", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015851.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015851.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Neustadt Scottish Pale Ale", "brand" => "Neustadt", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.2", "price_index" => "0.17366354575656903", "country" => "Canada", "url" => "https://www.lcbo.com/en/neustadt-scottish-pale-ale-64634", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/6/4/6/064634.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/6/4/6/064634.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Mad Tom IPA", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "30.95", "volume" => "4260", "alcohol_content" => "6.4", "price_index" => "0.11351965962441316", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-mad-tom-ipa-20356", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/3/020356.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/3/020356.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Innocente Inn O'Slainte Irish Red Ale", "brand" => "Innocente Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.0", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.16262806960481377", "country" => "Canada", "url" => "https://www.lcbo.com/en/innocente-inn-o-slainte-irish-red-ale-560789", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/0/7/560789.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/0/7/560789.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Big Drop Galactic Dark Stout", "brand" => "Big Drop Brewery", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "2.45", "volume" => "355", "alcohol_content" => "0.4", "price_index" => "1.7253521126760565", "country" => "Canada", "url" => "https://www.lcbo.com/en/big-drop-galactic-dark-stout-18403", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/4/018403.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/4/018403.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "William Street Beer Co. Farmstand lager", "brand" => "William Street Beer Co.", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.3", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1395348837209302", "country" => "Canada", "url" => "https://www.lcbo.com/en/william-street-beer-co-farmstand-lager-15810", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015810.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015810.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "25.5", "volume" => "4092", "alcohol_content" => "4.0", "price_index" => "0.15579178885630499", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-908624", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/8/6/908624.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/8/6/908624.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "East Street Cider Co. Landmark Dry Cider", "brand" => "East Street Cider", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.85", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.1356589147286822", "country" => "Canada", "url" => "https://www.lcbo.com/en/east-street-cider-co-landmark-dry-cider-10523", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/5/010523.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/5/010523.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kichesippi Warrior Woman APA", "brand" => "Kichesippi", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.14755109231853417", "country" => "Canada", "url" => "https://www.lcbo.com/en/kichesippi-warrior-woman-apa-16332", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/3/016332.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/3/016332.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Prince Eddy's haze Brigade NEIPA", "brand" => "Prince Eddy'S Brewing Co", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.25", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.13823385916409173", "country" => "Canada", "url" => "https://www.lcbo.com/en/prince-eddy-s-haze-brigade-neipa-18323", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018323.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018323.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Haliburton Highlands Brewing Honey Brown Ale", "brand" => "Haliburton Highlands Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14587737843551796", "country" => "Canada", "url" => "https://www.lcbo.com/en/haliburton-highlands-brewing-honey-brown-ale-617639", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/7/6/617639.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/7/6/617639.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Godspeed Brewery Polotmavy Lezak Amber Lager", "brand" => "Godspeed Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.95", "volume" => "355", "alcohol_content" => "4.4", "price_index" => "0.2528809218950064", "country" => "Canada", "url" => "https://www.lcbo.com/en/godspeed-brewery-polotmavy-lezak-amber-lager-23504", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023504.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023504.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Upper Thames Brewing Take a Hike", "brand" => "Upper Thames Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.12861169837914024", "country" => "Canada", "url" => "https://www.lcbo.com/en/upper-thames-brewing-take-a-hike-698340", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/8/3/698340.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/8/3/698340.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Caribru IPA", "brand" => "Junction Craft", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.6", "price_index" => "0.11137118695258233", "country" => "Canada", "url" => "https://www.lcbo.com/en/caribru-ipa-635078", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/5/0/635078.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/5/0/635078.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Broadhead Tangerine IPA", "brand" => "Broadhead Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1501057082452431", "country" => "Canada", "url" => "https://www.lcbo.com/en/broadhead-tangerine-ipa-638577", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/8/5/638577.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/8/5/638577.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Powerhouse Brewing 9-5 Light Lager", "brand" => "Powerhouse Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.65", "volume" => "473", "alcohol_content" => "3.5", "price_index" => "0.22047719722138323", "country" => "Canada", "url" => "https://www.lcbo.com/en/powerhouse-brewing-9-5-light-lager-27346", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/3/027346.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/3/027346.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "High Park Brewery Off the Leash IPA", "brand" => "High Park Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.05", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.09920312245893641", "country" => "Canada", "url" => "https://www.lcbo.com/en/high-park-brewery-off-the-leash-ipa-497925", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/7/9/497925.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/7/9/497925.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Orignal Draught", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "44.95", "volume" => "8520", "alcohol_content" => "5.0", "price_index" => "0.10551643192488264", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-orignal-draught-17824", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017824.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017824.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Powerhouse Brewing Co. Low Voltage Cream Ale", "brand" => "Low Voltage", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.1641851468669875", "country" => "Canada", "url" => "https://www.lcbo.com/en/powerhouse-brewing-co-low-voltage-cream-ale-26965", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/9/026965.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/9/026965.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "MacLeans Lazy hazy IPA", "brand" => "Maclean's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.14755109231853417", "country" => "Canada", "url" => "https://www.lcbo.com/en/macleans-lazy-hazy-ipa-10758", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/7/010758.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/7/010758.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Northern Superior Brewing 17 North Pale Ale", "brand" => "Northern Superior Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.0", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.12197105220361032", "country" => "Canada", "url" => "https://www.lcbo.com/en/northern-superior-brewing-17-north-pale-ale-18335", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018335.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018335.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Old Dog Brewing Single Malt Scottie", "brand" => "Old Dog Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.15968692366515225", "country" => "Canada", "url" => "https://www.lcbo.com/en/old-dog-brewing-single-malt-scottie-648253", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/8/2/648253.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/8/2/648253.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Jam Up Dry Hopped Sour with Berries", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.55", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.18498942917547564", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-jam-up-dry-hopped-sour-with-berries-22785", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/7/022785.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/7/022785.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nickel Brook Kentucky Bastard", "brand" => "Nickel Brook", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "11.95", "volume" => "500", "alcohol_content" => "12.0", "price_index" => "0.19916666666666666", "country" => "Canada", "url" => "https://www.lcbo.com/en/nickel-brook-kentucky-bastard-543389", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/3/3/543389.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/3/3/543389.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Church Key Brewing Holy Smoke Scotch Ale", "brand" => "Church Key", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "6.45", "volume" => "650", "alcohol_content" => "6.2", "price_index" => "0.1600496277915633", "country" => "Canada", "url" => "https://www.lcbo.com/en/church-key-brewing-holy-smoke-scotch-ale-315655", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/1/5/6/315655.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/1/5/6/315655.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hespeler Brewing - Hespeler Village IPA", "brand" => "Hespeler Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.13918252290345315", "country" => "Canada", "url" => "https://www.lcbo.com/en/hespeler-brewing-hespeler-village-ipa-635284", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/5/2/635284.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/5/2/635284.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Maclay's Traditional Pale Ale", "brand" => "Maclay's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "39.95", "volume" => "8184", "alcohol_content" => "5.0", "price_index" => "0.09762952101661779", "country" => "Canada", "url" => "https://www.lcbo.com/en/maclay-s-traditional-pale-ale-615005", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/5/0/615005.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/5/0/615005.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Miller Lite", "brand" => "Miller", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "49.95", "volume" => "8520", "alcohol_content" => "4.0", "price_index" => "0.14656690140845072", "country" => "Canada", "url" => "https://www.lcbo.com/en/miller-lite-544882", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/4/8/544882.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/4/8/544882.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Moosehead Lager", "brand" => "Moosehead", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "26.95", "volume" => "4092", "alcohol_content" => "5.0", "price_index" => "0.13172043010752688", "country" => "Canada", "url" => "https://www.lcbo.com/en/moosehead-lager-911404", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/1/1/4/911404.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/1/1/4/911404.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stalwart Brewing Big Papa Peach & Apricot Pale Ale", "brand" => "Stalwart Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.35", "volume" => "473", "alcohol_content" => "5.8", "price_index" => "0.15856236786469344", "country" => "Canada", "url" => "https://www.lcbo.com/en/stalwart-brewing-big-papa-peach-apricot-pale-ale-10616", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/6/010616.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/6/010616.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Old Dog Brewing Mad Dog APA", "brand" => "Old Dog Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "5.8", "price_index" => "0.1294014726252096", "country" => "Canada", "url" => "https://www.lcbo.com/en/old-dog-brewing-mad-dog-apa-636050", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/6/0/636050.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/6/0/636050.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brickworks Ciderhouse Wild Botanical Cider", "brand" => "Brickworks Ciderhouse", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "4.25", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.16336728810301748", "country" => "Canada", "url" => "https://www.lcbo.com/en/brickworks-ciderhouse-wild-botanical-cider-19972", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019972.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019972.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Schneider Aventinus", "brand" => "Schneider Weisse", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.8", "volume" => "500", "alcohol_content" => "8.2", "price_index" => "0.0926829268292683", "country" => "Germany", "url" => "https://www.lcbo.com/en/schneider-aventinus-15436", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015436.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015436.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Walsh Wiltshire Brewing Hybrid Ale", "brand" => "Walsh Wiltshire Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12473572938689217", "country" => "Canada", "url" => "https://www.lcbo.com/en/walsh-wiltshire-brewing-hybrid-ale-541227", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/1/2/541227.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/1/2/541227.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "1000 Islands Brewing Lagered Ale", "brand" => "1000 Islands Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.05", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.16120507399577164", "country" => "Canada", "url" => "https://www.lcbo.com/en/1000-islands-brewing-lagered-ale-22142", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/1/022142.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/1/022142.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Thornbury Craft Brewing Clark is in Session IPA", "brand" => "Thornbury", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.16208597603946442", "country" => "Canada", "url" => "https://www.lcbo.com/en/thornbury-craft-brewing-clark-is-in-session-ipa-18319", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018319.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018319.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Wag the Wolf", "brand" => "Beau's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14587737843551796", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-wag-the-wolf-19270", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/2/019270.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/2/019270.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lake of the Woods Lago Lager", "brand" => "Lake of the Woods Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "28.5", "volume" => "4260", "alcohol_content" => "4.5", "price_index" => "0.1486697965571205", "country" => "Canada", "url" => "https://www.lcbo.com/en/lake-of-the-woods-lago-lager-24825", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024825.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024825.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "The Napanee Beer Company EXTREMIST Belgian Style IPA", "brand" => "The Napanee Beer Company", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.9", "volume" => "473", "alcohol_content" => "7.2", "price_index" => "0.11451726568005637", "country" => "Canada", "url" => "https://www.lcbo.com/en/the-napanee-beer-company-extremist-belgian-style-ipa-570820", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/0/8/570820.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/0/8/570820.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Neustadt 10W30 Brown Ale", "brand" => "Neustadt", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.14229956090421206", "country" => "Canada", "url" => "https://www.lcbo.com/en/neustadt-10w30-brown-ale-64642", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/6/4/6/064642.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/6/4/6/064642.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Radio The Mothership IIPA", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.95", "volume" => "473", "alcohol_content" => "8.5", "price_index" => "0.1231190150478796", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-radio-the-mothership-iipa-488122", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/8/1/488122.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/8/1/488122.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sons of Kent Brewing Festbier Oktoberfest", "brand" => "Sons Of Kent", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.1345377666730732", "country" => "Canada", "url" => "https://www.lcbo.com/en/sons-of-kent-brewing-festbier-oktoberfest-22248", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022248.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022248.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Junction Craft Pilsner", "brand" => "Junction Craft Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.6", "price_index" => "0.14937034653920397", "country" => "Canada", "url" => "https://www.lcbo.com/en/junction-craft-pilsner-17147", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/1/017147.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/1/017147.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kupela Bizia Semi-Dry Craft Cider", "brand" => "Kupela", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "7.3", "volume" => "750", "alcohol_content" => "4.0", "price_index" => "0.24333333333333332", "country" => "France", "url" => "https://www.lcbo.com/en/kupela-bizia-semi-dry-craft-cider-15161", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015161.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015161.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sawdust City Brewing Every Day Magic Hazy IPA", "brand" => "Sawdust City Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.5", "volume" => "473", "alcohol_content" => "6.9", "price_index" => "0.13788031988234212", "country" => "Canada", "url" => "https://www.lcbo.com/en/sawdust-city-brewing-every-day-magic-hazy-ipa-15872", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015872.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015872.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lucky Lager", "brand" => "Lucky Lager", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "40.95", "volume" => "8184", "alcohol_content" => "4.8", "price_index" => "0.10424303519061584", "country" => "Canada", "url" => "https://www.lcbo.com/en/lucky-lager-909515", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/9/5/909515.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/9/5/909515.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cigar City Margarita Gose", "brand" => "Cigar City", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "8.05", "volume" => "1420", "alcohol_content" => "4.2", "price_index" => "0.13497652582159625", "country" => "United States", "url" => "https://www.lcbo.com/en/cigar-city-margarita-gose-15604", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/6/015604.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/6/015604.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Split Rail Brewing Co. Copper Lager", "brand" => "Split Rail Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.75", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.15856236786469344", "country" => "Canada", "url" => "https://www.lcbo.com/en/split-rail-brewing-co-copper-lager-27080", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/0/027080.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/0/027080.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Covered Bridge Brewing Lumbersexual Session IPA", "brand" => "Covered Bridge Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.95", "volume" => "473", "alcohol_content" => "3.5", "price_index" => "0.17819389912413167", "country" => "Canada", "url" => "https://www.lcbo.com/en/covered-bridge-brewing-lumbersexual-session-ipa-482448", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/2/4/482448.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/2/4/482448.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rolling Rock Extra Pale", "brand" => "Rolling Rock", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "30.5", "volume" => "4260", "alcohol_content" => "4.5", "price_index" => "0.15910276473656756", "country" => "Canada", "url" => "https://www.lcbo.com/en/rolling-rock-extra-pale-294538", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/9/4/5/294538.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/9/4/5/294538.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "No Boats On Sunday Cider", "brand" => "No Boats On Sunday", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "14.5", "volume" => "1892", "alcohol_content" => "5.0", "price_index" => "0.15327695560253699", "country" => "Canada", "url" => "https://www.lcbo.com/en/no-boats-on-sunday-cider-15178", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015178.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015178.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Evergreen Craft Ales Maiden Voyage Pale Ale", "brand" => "Evergreen Craft Ales", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.1", "price_index" => "0.14508974837292213", "country" => "Canada", "url" => "https://www.lcbo.com/en/evergreen-craft-ales-maiden-voyage-pale-ale-16869", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/8/016869.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/8/016869.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hockley Classic", "brand" => "Hockley Valley Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12473572938689217", "country" => "Canada", "url" => "https://www.lcbo.com/en/hockley-classic-353672", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/5/3/6/353672.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/5/3/6/353672.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Brewery Detour", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "49.95", "volume" => "8520", "alcohol_content" => "4.3", "price_index" => "0.13634130363576813", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-brewery-detour-24896", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024896.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024896.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stack Brewing Saturday Night", "brand" => "Stack Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.15", "volume" => "473", "alcohol_content" => "5.3", "price_index" => "0.12565319717579482", "country" => "Canada", "url" => "https://www.lcbo.com/en/stack-brewing-saturday-night-401125", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/1/1/401125.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/1/1/401125.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light Lime", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "28.95", "volume" => "4260", "alcohol_content" => "4.0", "price_index" => "0.1698943661971831", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-lime-10865", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/8/010865.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/8/010865.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Fixed Gear Brewing Red Hook Stout", "brand" => "Fixed Gear Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.12877186238708438", "country" => "Canada", "url" => "https://www.lcbo.com/en/fixed-gear-brewing-red-hook-stout-17410", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/4/017410.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/4/017410.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "The Napanee Beer Company Blacklist German Lager", "brand" => "The Napanee Beer Company", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.6", "volume" => "473", "alcohol_content" => "5.3", "price_index" => "0.14360365391519408", "country" => "Canada", "url" => "https://www.lcbo.com/en/the-napanee-beer-company-blacklist-german-lager-507970", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/0/7/9/507970.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/0/7/9/507970.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "People's Pint Helles Island Unfiltered American Lager", "brand" => "Helles Island Lager", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.5", "volume" => "473", "alcohol_content" => "4.9", "price_index" => "0.15101177891875567", "country" => "Canada", "url" => "https://www.lcbo.com/en/people-s-pint-helles-island-unfiltered-american-lager-10105", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/1/010105.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/1/010105.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brickworks Ciderhouse Mix Pack", "brand" => "Brickworks Ciderhouse", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "20.95", "volume" => "2838", "alcohol_content" => "6.0", "price_index" => "0.12303265210241954", "country" => "Canada", "url" => "https://www.lcbo.com/en/brickworks-ciderhouse-mix-pack-19980", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019980.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019980.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Grenadier Brewing Co. Lager", "brand" => "Grenadier Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.10394644115574349", "country" => "Canada", "url" => "https://www.lcbo.com/en/grenadier-brewing-co-lager-13460", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/4/013460.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/4/013460.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Steam Whistle Pilsner", "brand" => "Steam Whistle", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "52.95", "volume" => "8184", "alcohol_content" => "5.0", "price_index" => "0.12939882697947214", "country" => "Canada", "url" => "https://www.lcbo.com/en/steam-whistle-pilsner-11867", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/8/011867.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/8/011867.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Powerhouse Brewing Dundas St Dry Hopped Pilsner", "brand" => "Powerhouse Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.5", "volume" => "473", "alcohol_content" => "4.3", "price_index" => "0.17208318993067506", "country" => "Canada", "url" => "https://www.lcbo.com/en/powerhouse-brewing-dundas-st-dry-hopped-pilsner-19500", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/5/019500.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/5/019500.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Radical Road 4 Track IPA", "brand" => "Radical Road", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.95", "volume" => "355", "alcohol_content" => "4.0", "price_index" => "0.20774647887323944", "country" => "Canada", "url" => "https://www.lcbo.com/en/radical-road-4-track-ipa-20034", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020034.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020034.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lakeport Pilsener", "brand" => "Lakeport", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "42.95", "volume" => "8520", "alcohol_content" => "5.0", "price_index" => "0.10082159624413146", "country" => "Canada", "url" => "https://www.lcbo.com/en/lakeport-pilsener-688192", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/8/8/1/688192.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/8/8/1/688192.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pils Hellas", "brand" => "Private Stock", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.4", "volume" => "500", "alcohol_content" => "4.5", "price_index" => "0.10666666666666666", "country" => "Greece", "url" => "https://www.lcbo.com/en/pils-hellas-401231", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/1/2/401231.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/1/2/401231.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brimstone Punk Rock Pilsner", "brand" => "Brimstone Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "4.6", "price_index" => "0.15626436253332107", "country" => "Canada", "url" => "https://www.lcbo.com/en/brimstone-punk-rock-pilsner-638528", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/8/5/638528.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/8/5/638528.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lake of Bays Flight Plan Double IPA", "brand" => "Lake Of Bays", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.0", "volume" => "473", "alcohol_content" => "8.0", "price_index" => "0.10570824524312895", "country" => "Canada", "url" => "https://www.lcbo.com/en/lake-of-bays-flight-plan-double-ipa-12338", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/3/012338.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/3/012338.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Miller Lite", "brand" => "Miller", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "28.95", "volume" => "5676", "alcohol_content" => "4.0", "price_index" => "0.12751057082452433", "country" => "Canada", "url" => "https://www.lcbo.com/en/miller-lite-15852", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015852.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015852.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Caribru Lager", "brand" => "Junction Craft", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12473572938689217", "country" => "Canada", "url" => "https://www.lcbo.com/en/caribru-lager-17148", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/1/017148.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/1/017148.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cowbell Brewing Co. Shindig Lager", "brand" => "Cowbell Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "28.5", "volume" => "4260", "alcohol_content" => "4.2", "price_index" => "0.15928906773977194", "country" => "Canada", "url" => "https://www.lcbo.com/en/cowbell-brewing-co-shindig-lager-21446", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/4/021446.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/4/021446.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "New Limburg Belgian Blonde", "brand" => "New Limburg", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.65", "volume" => "500", "alcohol_content" => "7.1", "price_index" => "0.13098591549295777", "country" => "Canada", "url" => "https://www.lcbo.com/en/new-limburg-belgian-blonde-480608", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/0/6/480608.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/0/6/480608.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Miller Lite", "brand" => "Miller", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "45.95", "volume" => "8184", "alcohol_content" => "4.0", "price_index" => "0.14036534701857284", "country" => "Canada", "url" => "https://www.lcbo.com/en/miller-lite-544874", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/4/8/544874.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/4/8/544874.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Alexander Keith's India Pale Ale", "brand" => "Alexander Keith's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "27.95", "volume" => "4092", "alcohol_content" => "5.0", "price_index" => "0.1366080156402737", "country" => "Canada", "url" => "https://www.lcbo.com/en/alexander-keith-s-india-pale-ale-900100", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/0/1/900100.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/0/1/900100.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sons of Kent Scotch Ale", "brand" => "Sons Of Kent", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.65", "volume" => "473", "alcohol_content" => "9.0", "price_index" => "0.10923185341789994", "country" => "Canada", "url" => "https://www.lcbo.com/en/sons-of-kent-scotch-ale-18005", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/0/018005.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/0/018005.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pabst Blue Ribbon Light", "brand" => "Pabst", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "40.95", "volume" => "8184", "alcohol_content" => "4.0", "price_index" => "0.125091642228739", "country" => "Canada", "url" => "https://www.lcbo.com/en/pabst-blue-ribbon-light-612341", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/2/3/612341.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/2/3/612341.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Strongbow Ros� Apple Cider", "brand" => "Strongbow", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.05", "volume" => "440", "alcohol_content" => "4.5", "price_index" => "0.15404040404040403", "country" => "Belgium", "url" => "https://www.lcbo.com/en/strongbow-ros-c-apple-cider-903070", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/3/0/903070.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/3/0/903070.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Gahan 1772 India Pale Ale", "brand" => "Gahan", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.11221336802732151", "country" => "Canada", "url" => "https://www.lcbo.com/en/gahan-1772-india-pale-ale-23732", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/7/023732.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/7/023732.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Upper Thames Brewing Co Portage IPA", "brand" => "Upper Thames Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "5.6", "price_index" => "0.13402295379039567", "country" => "Canada", "url" => "https://www.lcbo.com/en/upper-thames-brewing-co-portage-ipa-557512", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/7/5/557512.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/7/5/557512.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "The Exchange Brewery Super Saison", "brand" => "The Exchange Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.85", "volume" => "473", "alcohol_content" => "8.3", "price_index" => "0.12353855166968082", "country" => "Canada", "url" => "https://www.lcbo.com/en/the-exchange-brewery-super-saison-24585", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024585.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024585.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Siren Craft Nitro Caribbean Chocolate Cake Stout", "brand" => "Siren Craft Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "5.4", "volume" => "330", "alcohol_content" => "7.4", "price_index" => "0.22113022113022113", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/siren-craft-nitro-caribbean-chocolate-cake-stout-22527", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/5/022527.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/5/022527.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Prince Eddy's Coco Dojo Banana Coconut Coffee Imperial Stout", "brand" => "Prince Eddy'S Brewing Co", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "5.95", "volume" => "473", "alcohol_content" => "8.6", "price_index" => "0.14627071144107381", "country" => "Canada", "url" => "https://www.lcbo.com/en/prince-eddy-s-coco-dojo-banana-coconut-coffee-imperial-stout-23516", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023516.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023516.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stratford Pilsner", "brand" => "Stratford", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "4.9", "price_index" => "0.12728135651723693", "country" => "Canada", "url" => "https://www.lcbo.com/en/stratford-pilsner-15565", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/5/015565.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/5/015565.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Craft Lager", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "28.95", "volume" => "4260", "alcohol_content" => "4.8", "price_index" => "0.14157863849765256", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-craft-lager-513085", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/3/0/513085.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/3/0/513085.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Furnace Room Brewery The Fermentator DIPA", "brand" => "Furnace Room Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.25", "volume" => "473", "alcohol_content" => "8.0", "price_index" => "0.11231501057082452", "country" => "Canada", "url" => "https://www.lcbo.com/en/furnace-room-brewery-the-fermentator-dipa-23501", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023501.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023501.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Somersby Spritz Cider", "brand" => "Somersby", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.3", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15503875968992248", "country" => "Canada", "url" => "https://www.lcbo.com/en/somersby-spritz-cider-15301", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/3/015301.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/3/015301.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Waterloo Signature Series", "brand" => "Waterloo Brewing", "category" => "Beer & Cider", "subcategory" => "Gifts and Samplers", "price" => "19.95", "volume" => "2838", "alcohol_content" => "6.0", "price_index" => "0.11715997181113459", "country" => "Canada", "url" => "https://www.lcbo.com/en/waterloo-signature-series-21891", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/8/021891.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/8/021891.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Block Three Brewing Hollinger Helles", "brand" => "Block Three Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.5", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.1644350481559784", "country" => "Canada", "url" => "https://www.lcbo.com/en/block-three-brewing-hollinger-helles-16539", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/5/016539.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/5/016539.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "High Road Brewing Bronan - Vermont style IPA", "brand" => "High Road Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.0", "volume" => "473", "alcohol_content" => "7.1", "price_index" => "0.11910788196408897", "country" => "Canada", "url" => "https://www.lcbo.com/en/high-road-brewing-bronan-vermont-style-ipa-10296", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/2/010296.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/2/010296.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Granite Brewery Ringwood Blonde Ale", "brand" => "Granite Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.14229956090421206", "country" => "Canada", "url" => "https://www.lcbo.com/en/granite-brewery-ringwood-blonde-ale-19952", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019952.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019952.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Whitewater Brewing Co. Class V IPA", "brand" => "Whitewater Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.13645973476840284", "country" => "Canada", "url" => "https://www.lcbo.com/en/whitewater-brewing-co-class-v-ipa-441717", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/1/7/441717.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/1/7/441717.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Laker Ice", "brand" => "Laker", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "34.95", "volume" => "8520", "alcohol_content" => "5.5", "price_index" => "0.07458386683738796", "country" => "Canada", "url" => "https://www.lcbo.com/en/laker-ice-24x355ml-tbs-combo-26747", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/7/026747.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/7/026747.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rolling Rock", "brand" => "Rolling Rock", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "42.95", "volume" => "8184", "alcohol_content" => "4.5", "price_index" => "0.11662322146193116", "country" => "Canada", "url" => "https://www.lcbo.com/en/rolling-rock-382432", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/8/2/4/382432.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/8/2/4/382432.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Woodhouse Raspberry Sour", "brand" => "Woodhouse Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.14975334742776603", "country" => "Canada", "url" => "https://www.lcbo.com/en/woodhouse-raspberry-sour-18016", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/0/018016.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/0/018016.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Red Racer IPA", "brand" => "Central City", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.2", "volume" => "500", "alcohol_content" => "6.5", "price_index" => "0.09846153846153846", "country" => "Canada", "url" => "https://www.lcbo.com/en/red-racer-ipa-639559", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/9/5/639559.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/9/5/639559.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Miller Genuine Draft", "brand" => "Miller", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "25.95", "volume" => "4260", "alcohol_content" => "4.7", "price_index" => "0.12960743182499251", "country" => "Canada", "url" => "https://www.lcbo.com/en/miller-genuine-draft-544817", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/4/8/544817.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/4/8/544817.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Malus Ciderhouse Hopped Cider", "brand" => "Malus Ciderhouse", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.2", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.1127554615926709", "country" => "Canada", "url" => "https://www.lcbo.com/en/malus-ciderhouse-hopped-cider-552653", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/2/6/552653.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/2/6/552653.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Flying Monkeys Chocolate Manifesto", "brand" => "Flying Monkeys", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "5.25", "volume" => "473", "alcohol_content" => "10.0", "price_index" => "0.1109936575052854", "country" => "Canada", "url" => "https://www.lcbo.com/en/flying-monkeys-chocolate-manifesto-19003", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/0/019003.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/0/019003.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Old Milwaukee", "brand" => "Old Milwaukee", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "40.95", "volume" => "8184", "alcohol_content" => "4.6", "price_index" => "0.1087753410684687", "country" => "Canada", "url" => "https://www.lcbo.com/en/old-milwaukee-332148", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/2/1/332148.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/2/1/332148.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Boshkung Brewery Life Session Lager", "brand" => "Boshkung Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "4.2", "price_index" => "0.1484949159367764", "country" => "Canada", "url" => "https://www.lcbo.com/en/boshkung-brewery-life-session-lager-19498", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/4/019498.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/4/019498.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Laker Light", "brand" => "Laker", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "40.95", "volume" => "8184", "alcohol_content" => "4.0", "price_index" => "0.125091642228739", "country" => "Canada", "url" => "https://www.lcbo.com/en/laker-light-615591", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/5/5/615591.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/5/5/615591.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Parsons Brewing Soft Hues Dry Hopped Lager", "brand" => "Parson Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "4.25", "volume" => "473", "alcohol_content" => "5.1", "price_index" => "0.1761804087385483", "country" => "Canada", "url" => "https://www.lcbo.com/en/parsons-brewing-soft-hues-dry-hopped-lager-22684", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/6/022684.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/6/022684.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Deschutes Jubelale Winter Ale", "brand" => "Deschutes Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "12.9", "volume" => "1420", "alcohol_content" => "6.7", "price_index" => "0.1355896573470675", "country" => "United States", "url" => "https://www.lcbo.com/en/deschutes-jubelale-winter-ale-22627", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/6/022627.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/6/022627.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Omnipollo Konx Non-Alc Mini Pale Ale", "brand" => "Omnipollo", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "3.25", "volume" => "355", "alcohol_content" => "0.3", "price_index" => "3.051643192488263", "country" => "Canada", "url" => "https://www.lcbo.com/en/omnipollo-konx-non-alc-mini-pale-ale-18538", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/5/018538.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/5/018538.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Great Divide Mexican Chocolate Yeti Imperial Stout", "brand" => "Great Divide Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "8.0", "volume" => "568", "alcohol_content" => "9.5", "price_index" => "0.14825796886582654", "country" => "United States", "url" => "https://www.lcbo.com/en/great-divide-mexican-chocolate-yeti-imperial-stout-22628", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/6/022628.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/6/022628.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Maclean's Armchair Scotch Ale", "brand" => "Maclean's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "7.5", "price_index" => "0.09443269908386187", "country" => "Canada", "url" => "https://www.lcbo.com/en/maclean-s-armchair-scotch-ale-638874", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/8/8/638874.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/8/8/638874.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cassel Brewery Franco Lager Artisanale", "brand" => "Cassel Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.75", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.17618040873854826", "country" => "Canada", "url" => "https://www.lcbo.com/en/cassel-brewery-franco-lager-artisanale-519264", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/9/2/519264.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/9/2/519264.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Steam Whistle Session Lager", "brand" => "Steam Whistle", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.177061310782241", "country" => "Canada", "url" => "https://www.lcbo.com/en/steam-whistle-session-lager-15881", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015881.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015881.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Ultra", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "26.5", "volume" => "4092", "alcohol_content" => "3.0", "price_index" => "0.21586836102965137", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-ultra-14071", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/0/014071.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/0/014071.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Covered Bridge Walk on the Mild Side", "brand" => "Covered Bridge Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.1", "price_index" => "0.1675862424586191", "country" => "Canada", "url" => "https://www.lcbo.com/en/covered-bridge-walk-on-the-mild-side-10953", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/9/010953.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/9/010953.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hellenic Breweries of Atlanti Eza Z Premium Pilsner Beer", "brand" => "Private Stock", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.25", "volume" => "330", "alcohol_content" => "5.2", "price_index" => "0.13111888111888112", "country" => "Greece", "url" => "https://www.lcbo.com/en/hellenic-breweries-of-atlanti-eza-z-premium-pilsner-beer-case-249846", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/4/9/8/249846.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/4/9/8/249846.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Woodhouse Double IPA", "brand" => "Woodhouse Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "7.8", "price_index" => "0.10706347915650243", "country" => "Canada", "url" => "https://www.lcbo.com/en/woodhouse-double-ipa-23554", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023554.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023554.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Shillow Beer Bitter Waitress", "brand" => "Shillow", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "7.1", "price_index" => "0.10124169966947563", "country" => "Canada", "url" => "https://www.lcbo.com/en/shillow-beer-bitter-waitress-438705", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/3/8/7/438705.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/3/8/7/438705.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Forked River Orange Imperial Stout", "brand" => "Forked River Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "5.45", "volume" => "473", "alcohol_content" => "8.2", "price_index" => "0.14051461867684217", "country" => "Canada", "url" => "https://www.lcbo.com/en/forked-river-orange-imperial-stout-23508", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023508.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023508.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hacker Pschorr Weisse Bier", "brand" => "Hacker Pschorr", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.8", "volume" => "500", "alcohol_content" => "5.5", "price_index" => "0.13818181818181818", "country" => "Germany", "url" => "https://www.lcbo.com/en/hacker-pschorr-weisse-bier-247486", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/4/7/4/247486.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/4/7/4/247486.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Glutenberg Stout", "brand" => "Glutenburg", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "2.85", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12050739957716701", "country" => "Canada", "url" => "https://www.lcbo.com/en/glutenberg-stout-22856", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/8/022856.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/8/022856.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lakeport Honey Lager", "brand" => "Lakeport", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "40.95", "volume" => "8184", "alcohol_content" => "5.0", "price_index" => "0.1000733137829912", "country" => "Canada", "url" => "https://www.lcbo.com/en/lakeport-honey-lager-630707", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/0/7/630707.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/0/7/630707.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nickel Brook Cafe Del Bastardo", "brand" => "Nickel Brook", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "12.95", "volume" => "500", "alcohol_content" => "12.0", "price_index" => "0.21583333333333332", "country" => "Canada", "url" => "https://www.lcbo.com/en/nickel-brook-cafe-del-bastardo-543082", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/3/0/543082.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/3/0/543082.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Market Brewing Company Given the Circumstances IPA", "brand" => "Market Brewing Company", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.11221336802732151", "country" => "Canada", "url" => "https://www.lcbo.com/en/market-brewing-company-given-the-circumstances-ipa-22256", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022256.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022256.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Indie Ale House Marco Polo", "brand" => "Indie Ale House", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "355", "alcohol_content" => "5.0", "price_index" => "0.18309859154929578", "country" => "Canada", "url" => "https://www.lcbo.com/en/indie-ale-house-marco-polo-19681", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/6/019681.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/6/019681.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stalwart Brewing Snake Oil IPA", "brand" => "Stalwart Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.45", "volume" => "473", "alcohol_content" => "6.8", "price_index" => "0.13835343862703645", "country" => "Canada", "url" => "https://www.lcbo.com/en/stalwart-brewing-snake-oil-ipa-578112", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/8/1/578112.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/8/1/578112.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Old Credit Pale Pilsner", "brand" => "Old Credit", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1416490486257928", "country" => "Canada", "url" => "https://www.lcbo.com/en/old-credit-pale-pilsner-644641", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/4/6/644641.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/4/6/644641.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Outlaw Brew Co Bronco Copper Ale", "brand" => "Outlaw Brew Co", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.6", "price_index" => "0.11137118695258233", "country" => "Canada", "url" => "https://www.lcbo.com/en/outlaw-brew-co-bronco-copper-ale-462044", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/2/0/462044.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/2/0/462044.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Corona Extra", "brand" => "Corona Extra", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "14.25", "volume" => "1980", "alcohol_content" => "4.6", "price_index" => "0.1564558629776021", "country" => "Mexico", "url" => "https://www.lcbo.com/en/corona-extra-186510", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/8/6/5/186510.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/8/6/5/186510.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nickel Brook Winey Imperial Stout", "brand" => "Nickel Brook", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "9.95", "volume" => "500", "alcohol_content" => "11.0", "price_index" => "0.1809090909090909", "country" => "Canada", "url" => "https://www.lcbo.com/en/nickel-brook-winey-imperial-stout-543074", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/3/0/543074.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/3/0/543074.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "New Ontario Brewing Hades Imperial Coffee Stout", "brand" => "New Ontario Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "5.5", "volume" => "473", "alcohol_content" => "8.7", "price_index" => "0.13365410318096768", "country" => "Canada", "url" => "https://www.lcbo.com/en/new-ontario-brewing-hades-imperial-coffee-stout-22253", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022253.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022253.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hometown Brewing Co. Coconut Porter", "brand" => "Hometown Brewing Company Inc.", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.0", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.10570824524312897", "country" => "Canada", "url" => "https://www.lcbo.com/en/hometown-brewing-co-coconut-porter-17781", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/7/017781.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/7/017781.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Saulter Street Brewery Riverside Pilsner", "brand" => "Saulter Street", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.2", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.1439431424587288", "country" => "Canada", "url" => "https://www.lcbo.com/en/saulter-street-brewery-riverside-pilsner-571208", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/1/2/571208.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/1/2/571208.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Shacklands Brewing Co Saison Davenport", "brand" => "Shacklands Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "355", "alcohol_content" => "6.4", "price_index" => "0.16505281690140847", "country" => "Canada", "url" => "https://www.lcbo.com/en/shacklands-brewing-co-saison-davenport-16748", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/7/016748.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/7/016748.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Block 3 Brewing NEIPA", "brand" => "Block Three Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "5.0", "volume" => "473", "alcohol_content" => "8.7", "price_index" => "0.12150373016451606", "country" => "Canada", "url" => "https://www.lcbo.com/en/block-3-brewing-neipa-15097", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/0/015097.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/0/015097.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brew Revolution Kashmir Norwegian Pale Ale", "brand" => "Brew Revolution", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.17618040873854826", "country" => "Canada", "url" => "https://www.lcbo.com/en/brew-revolution-kashmir-norwegian-pale-ale-23777", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/7/023777.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/7/023777.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lagunitas IPA", "brand" => "Lagunitas", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "15.0", "volume" => "2130", "alcohol_content" => "6.2", "price_index" => "0.11358473421172194", "country" => "United States", "url" => "https://www.lcbo.com/en/lagunitas-ipa-433516", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/3/3/5/433516.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/3/3/5/433516.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stonewall Light", "brand" => "Stonewall", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "1.65", "volume" => "275", "alcohol_content" => "4.0", "price_index" => "0.15", "country" => "Canada", "url" => "https://www.lcbo.com/en/stonewall-light-186544", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/8/6/5/186544.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/8/6/5/186544.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rogue Ales Dead N Dead", "brand" => "Rogue", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.7", "volume" => "473", "alcohol_content" => "9.5", "price_index" => "0.10459552687214865", "country" => "United States", "url" => "https://www.lcbo.com/en/rogue-ales-dead-n-dead-21845", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/8/021845.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/8/021845.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Oskar Blues Can-O-Bliss Double IPA", "brand" => "Oskar Blues", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "14.5", "volume" => "1420", "alcohol_content" => "8.2", "price_index" => "0.12452765372724152", "country" => "United States", "url" => "https://www.lcbo.com/en/oskar-blues-can-o-bliss-double-ipa-17833", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017833.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017833.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "The Napanee Beer Company Mayday Pale Ale", "brand" => "The Napanee Beer Company", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.6", "volume" => "473", "alcohol_content" => "5.7", "price_index" => "0.13352620451763658", "country" => "Canada", "url" => "https://www.lcbo.com/en/the-napanee-beer-company-mayday-pale-ale-570812", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/0/8/570812.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/0/8/570812.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Spearhead Brewing Co Big Kahuna Imperial IPA", "brand" => "Spearhead", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.95", "volume" => "473", "alcohol_content" => "10.0", "price_index" => "0.10465116279069767", "country" => "Canada", "url" => "https://www.lcbo.com/en/spearhead-brewing-co-big-kahuna-imperial-ipa-13647", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/6/013647.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/6/013647.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kilkenny Traditional Cream Ale", "brand" => "Kilkenny Traditional Cream Ale", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "11.25", "volume" => "1760", "alcohol_content" => "4.1", "price_index" => "0.15590354767184036", "country" => "Ireland", "url" => "https://www.lcbo.com/en/kilkenny-traditional-cream-ale-496711", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/6/7/496711.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/6/7/496711.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brewdog Hazy Jane", "brand" => "Brewdog", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "7.2", "price_index" => "0.0954310547333803", "country" => "United States", "url" => "https://www.lcbo.com/en/brewdog-hazy-jane-13345", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/3/013345.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/3/013345.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Farmer in the Sky", "brand" => "True History Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "4.9", "price_index" => "0.12728135651723693", "country" => "Canada", "url" => "https://www.lcbo.com/en/farmer-in-the-sky-12215", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/2/012215.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/2/012215.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Growers Sparkling Spritz Peach Orange Blossom", "brand" => "Growers", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.177061310782241", "country" => "Canada", "url" => "https://www.lcbo.com/en/growers-sparkling-spritz-peach-orange-blossom-19964", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019964.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019964.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Big Drop Paradiso IPA", "brand" => "Big Drop Brewery", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "2.45", "volume" => "355", "alcohol_content" => "0.4", "price_index" => "1.7253521126760565", "country" => "Canada", "url" => "https://www.lcbo.com/en/big-drop-paradiso-ipa-18404", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/4/018404.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/4/018404.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brolly Brewing Germane Munich Helles", "brand" => "Germane", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.2", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13530655391120508", "country" => "Canada", "url" => "https://www.lcbo.com/en/brolly-brewing-germane-munich-helles-27823", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/8/027823.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/8/027823.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brewdog Elvis Juice", "brand" => "Brewdog", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.95", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.09595056106684013", "country" => "United States", "url" => "https://www.lcbo.com/en/brewdog-elvis-juice-11660", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/6/011660.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/1/6/011660.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lancaster Bomber Ale", "brand" => "Lancaster Bomber", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.5", "volume" => "500", "alcohol_content" => "4.4", "price_index" => "0.11363636363636362", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/lancaster-bomber-ale-271809", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/1/8/271809.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/1/8/271809.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lakeport Light", "brand" => "Lakeport", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "42.95", "volume" => "8520", "alcohol_content" => "4.0", "price_index" => "0.1260269953051643", "country" => "Canada", "url" => "https://www.lcbo.com/en/lakeport-light-688184", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/8/8/1/688184.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/8/8/1/688184.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Moosehead Lager", "brand" => "Moosehead", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12473572938689217", "country" => "Canada", "url" => "https://www.lcbo.com/en/moosehead-lager-613497", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/3/4/613497.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/3/4/613497.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light Mango", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.0", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.15856236786469344", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-mango-20075", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020075.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020075.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collingwood Brewery Freestyle Key Lime Sour", "brand" => "Collingwood", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.18498942917547567", "country" => "Canada", "url" => "https://www.lcbo.com/en/collingwood-brewery-freestyle-key-lime-sour-20819", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/8/020819.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/8/020819.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Second Wedge Monday Night Piper Scottish Style Ale", "brand" => "Second Wedge Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.15415785764622975", "country" => "Canada", "url" => "https://www.lcbo.com/en/second-wedge-monday-night-piper-scottish-style-ale-14304", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/3/014304.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/3/014304.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Deschutes Wowza! Lo-Cal Hazy Pale Ale", "brand" => "Deschutes", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "12.95", "volume" => "1420", "alcohol_content" => "4.0", "price_index" => "0.22799295774647885", "country" => "United States", "url" => "https://www.lcbo.com/en/deschutes-wowza-lo-cal-hazy-pale-ale-19367", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/3/019367.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/3/019367.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts IPA No. 19", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.95", "volume" => "473", "alcohol_content" => "10.5", "price_index" => "0.09966777408637874", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-ipa-no-19-23402", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/4/023402.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/4/023402.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Northern Superior Lager", "brand" => "Northern Superior Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "13.0", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.12206572769953052", "country" => "Canada", "url" => "https://www.lcbo.com/en/northern-superior-lager-569327", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/9/3/569327.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/9/3/569327.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hive & Harvest Blueberry Session Mead", "brand" => "Yates Street Brewing", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "3.75", "volume" => "355", "alcohol_content" => "6.0", "price_index" => "0.176056338028169", "country" => "Canada", "url" => "https://www.lcbo.com/en/hive-harvest-blueberry-session-mead-23120", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/1/023120.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/1/023120.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Boho Organic Cherry Beer", "brand" => "The Brew Society", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "330", "alcohol_content" => "3.8", "price_index" => "0.29904306220095694", "country" => "Belgium", "url" => "https://www.lcbo.com/en/boho-organic-cherry-beer-19722", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/7/019722.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/7/019722.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "The Exchange Brewery Elderflower Saison", "brand" => "Exchange Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.5", "volume" => "473", "alcohol_content" => "6.4", "price_index" => "0.14865221987315008", "country" => "Canada", "url" => "https://www.lcbo.com/en/the-exchange-brewery-elderflower-saison-22254", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022254.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022254.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Gahan Pumpkin Ale", "brand" => "Gahan", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.2", "volume" => "473", "alcohol_content" => "5.8", "price_index" => "0.11664358095793542", "country" => "Canada", "url" => "https://www.lcbo.com/en/gahan-pumpkin-ale-21053", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/0/021053.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/0/021053.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Royal City Smoked Honey", "brand" => "Royal City", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.12877186238708438", "country" => "Canada", "url" => "https://www.lcbo.com/en/royal-city-smoked-honey-546135", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/6/1/546135.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/6/1/546135.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Somersby Cider Mixer Pack", "brand" => "Somersby", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "19.85", "volume" => "2838", "alcohol_content" => "4.5", "price_index" => "0.15543027170934148", "country" => "Canada", "url" => "https://www.lcbo.com/en/somersby-cider-mixer-pack-17925", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/9/017925.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/9/017925.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lickinghole Creek French Toast Brown Ale", "brand" => "Licking Hole Creek", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "10.2", "volume" => "750", "alcohol_content" => "8.0", "price_index" => "0.16999999999999998", "country" => "United States", "url" => "https://www.lcbo.com/en/lickinghole-creek-french-toast-brown-ale-13346", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/3/013346.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/3/013346.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Cream Ale", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "27.95", "volume" => "4092", "alcohol_content" => "5.0", "price_index" => "0.1366080156402737", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-cream-ale-910000", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/1/0/0/910000.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/1/0/0/910000.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Brewery Winter Beard Stout", "brand" => "Muskoka", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.5", "volume" => "473", "alcohol_content" => "8.0", "price_index" => "0.11892177589852007", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-brewery-winter-beard-stout-22226", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022226.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022226.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "IPA Taybeh Beer", "brand" => "Taybeh Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.1", "volume" => "330", "alcohol_content" => "6.6", "price_index" => "0.1882460973370064", "country" => "NULL", "url" => "https://www.lcbo.com/en/ipa-taybeh-beer-236983", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/3/6/9/236983.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/3/6/9/236983.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Great Lakes Brewing No Chance with Miranda", "brand" => "Great Lakes", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "7.95", "volume" => "500", "alcohol_content" => "6.7", "price_index" => "0.2373134328358209", "country" => "Canada", "url" => "https://www.lcbo.com/en/great-lakes-brewing-no-chance-with-miranda-16548", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/5/016548.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/5/016548.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lickinghole Creek Heir Apparent Mexican Spiced Imperial Stout", "brand" => "Licking Hole Creek", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.45", "volume" => "473", "alcohol_content" => "11.7", "price_index" => "0.08041054552682461", "country" => "United States", "url" => "https://www.lcbo.com/en/lickinghole-creek-heir-apparent-mexican-spiced-imperial-stout-617472", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/7/4/617472.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/7/4/617472.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts IPA #20", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.75", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.1544966661245731", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-ipa-20-25690", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/6/025690.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/6/025690.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nickel Brook Glory & Gold", "brand" => "Nickel Brook", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "9.95", "volume" => "500", "alcohol_content" => "9.5", "price_index" => "0.2094736842105263", "country" => "Canada", "url" => "https://www.lcbo.com/en/nickel-brook-glory-gold-555474", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/5/4/555474.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/5/4/555474.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smithavens Nottabottle Belgian Pale Ale", "brand" => "Smithavens Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.1526896875734085", "country" => "Canada", "url" => "https://www.lcbo.com/en/smithavens-nottabottle-belgian-pale-ale-508499", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/0/8/4/508499.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/0/8/4/508499.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Grand River Brewing Midnight on the Grand Black Lager", "brand" => "Grand River Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.13069383048241398", "country" => "Canada", "url" => "https://www.lcbo.com/en/grand-river-brewing-midnight-on-the-grand-black-lager-18320", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018320.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/3/018320.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Timothy Taylor Landlord", "brand" => "Timothy Taylor's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.0", "volume" => "500", "alcohol_content" => "4.1", "price_index" => "0.19512195121951223", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/timothy-taylor-landlord-21059", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/0/021059.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/0/021059.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "True History Canary Rose Grisette", "brand" => "True History", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.65", "volume" => "355", "alcohol_content" => "3.8", "price_index" => "0.19644180874722014", "country" => "Canada", "url" => "https://www.lcbo.com/en/true-history-canary-rose-grisette-20795", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/7/020795.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/7/020795.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "The Second Wedge Brewing Co 3 Rocks IPA", "brand" => "The Second Wedge Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.1321353065539112", "country" => "Canada", "url" => "https://www.lcbo.com/en/the-second-wedge-brewing-co-3-rocks-ipa-132258", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/3/2/2/132258.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/3/2/2/132258.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Paulaner Oktoberfest 'Wiesn' Bier", "brand" => "Paulaner", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "500", "alcohol_content" => "6.0", "price_index" => "0.09833333333333334", "country" => "Germany", "url" => "https://www.lcbo.com/en/paulaner-oktoberfest-wiesn-bier-526525", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/2/6/5/526525.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/2/6/5/526525.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Duvel 666", "brand" => "Duvel", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.7", "volume" => "330", "alcohol_content" => "6.6", "price_index" => "0.16988062442607896", "country" => "Belgium", "url" => "https://www.lcbo.com/en/duvel-666-22577", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/5/022577.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/5/022577.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Red Falcon", "brand" => "Falcon Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.05", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12896405919661733", "country" => "Canada", "url" => "https://www.lcbo.com/en/red-falcon-450254", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/0/2/450254.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/0/2/450254.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Caledon Hills Helles", "brand" => "Caledon Hills", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.1382338591640917", "country" => "Canada", "url" => "https://www.lcbo.com/en/caledon-hills-helles-19508", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/5/019508.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/5/019508.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Devil's Pale Ale", "brand" => "Great Lakes", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.11451726568005638", "country" => "Canada", "url" => "https://www.lcbo.com/en/devil-s-pale-ale-615880", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/5/8/615880.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/5/8/615880.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ace Hill Dry Hopped Lager", "brand" => "Ace Hill", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "11.95", "volume" => "1420", "alcohol_content" => "4.0", "price_index" => "0.21038732394366194", "country" => "Canada", "url" => "https://www.lcbo.com/en/ace-hill-dry-hopped-lager-17784", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/7/017784.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/7/017784.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "St-Feuillien Cuv�e de No�l", "brand" => "St-Feuillien", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "330", "alcohol_content" => "11.0", "price_index" => "0.10055096418732783", "country" => "Belgium", "url" => "https://www.lcbo.com/en/st-feuillien-cuvee-de-noel-22528", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/5/022528.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/5/022528.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Waterloo Grapefruit Radler", "brand" => "Waterloo Brewing", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "28.95", "volume" => "5325", "alcohol_content" => "2.5", "price_index" => "0.21746478873239436", "country" => "Canada", "url" => "https://www.lcbo.com/en/waterloo-grapefruit-radler-13419", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/4/013419.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/4/013419.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Einbecker Ur-Bock Hell", "brand" => "Einbecker", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.7", "volume" => "330", "alcohol_content" => "6.5", "price_index" => "0.1258741258741259", "country" => "Germany", "url" => "https://www.lcbo.com/en/einbecker-ur-bock-hell-14298", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/2/014298.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/2/014298.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brasserie de l'Abbaye des Rocs Blonde", "brand" => "Private Stock", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "330", "alcohol_content" => "7.0", "price_index" => "0.14069264069264067", "country" => "Belgium", "url" => "https://www.lcbo.com/en/brasserie-de-l-abbaye-des-rocs-blonde-271303", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/1/3/271303.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/1/3/271303.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Granville Island Peach Sour", "brand" => "Granville Island", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.14376321353065538", "country" => "Canada", "url" => "https://www.lcbo.com/en/granville-island-peach-sour-20096", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020096.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020096.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collingwood Brewery Strawberry Milkshake IPA", "brand" => "Collingwood Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.12332628611698379", "country" => "Canada", "url" => "https://www.lcbo.com/en/collingwood-brewery-strawberry-milkshake-ipa-16122", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/1/016122.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/1/016122.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Innis & Gunn Vanishing Point 04", "brand" => "Innis & Gunn", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "15.0", "volume" => "500", "alcohol_content" => "11.6", "price_index" => "0.25862068965517243", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/innis-gunn-vanishing-point-04-15653", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/6/015653.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/6/015653.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Godspeed Brewing Tmavy Lezak", "brand" => "Godspeed Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.95", "volume" => "355", "alcohol_content" => "4.7", "price_index" => "0.23673958645489965", "country" => "Canada", "url" => "https://www.lcbo.com/en/godspeed-brewing-tmavy-lezak-22212", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022212.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022212.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Barley Days Harvest Gold", "brand" => "Barley Days", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.95", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.12993305144467934", "country" => "Canada", "url" => "https://www.lcbo.com/en/barley-days-harvest-gold-617837", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/7/8/617837.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/7/8/617837.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Budweiser + FREE metal football sign and glasses", "brand" => "Budweiser", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "66.0", "volume" => "11352", "alcohol_content" => "5.0", "price_index" => "0.11627906976744186", "country" => "Canada", "url" => "https://www.lcbo.com/en/budweiser-free-metal-football-sign-and-glasses-24148", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/1/024148.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/1/024148.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Lug Tread", "brand" => "Beau's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "35.45", "volume" => "4800", "alcohol_content" => "5.2", "price_index" => "0.14202724358974358", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-lug-tread-22709", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/7/022709.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/7/022709.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ace Hill Matcha Lager", "brand" => "Ace Hill Beer Company", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "355", "alcohol_content" => "4.5", "price_index" => "0.18466353677621286", "country" => "Canada", "url" => "https://www.lcbo.com/en/ace-hill-matcha-lager-22218", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022218.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022218.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Barley Days Wind & Sail", "brand" => "Barley Days", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12473572938689217", "country" => "Canada", "url" => "https://www.lcbo.com/en/barley-days-wind-sail-617845", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/7/8/617845.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/7/8/617845.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street West Coast IPA", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "6.6", "price_index" => "0.1137164456403357", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-west-coast-ipa-461483", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/1/4/461483.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/1/4/461483.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brasserie Etienne Brule Citrale", "brand" => "Brasserie Etienne Brule", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.15", "volume" => "473", "alcohol_content" => "6.8", "price_index" => "0.1290262405173486", "country" => "Canada", "url" => "https://www.lcbo.com/en/brasserie-etienne-brule-citrale-22712", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/7/022712.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/7/022712.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Petrus Nitro Quad", "brand" => "Petrus", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "330", "alcohol_content" => "11.5", "price_index" => "0.09354413702239787", "country" => "Belgium", "url" => "https://www.lcbo.com/en/petrus-nitro-quad-13306", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/3/013306.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/3/013306.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Samuel Smith's Celebrated Oatmeal Stout", "brand" => "Samuel Smith's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.65", "volume" => "550", "alcohol_content" => "5.0", "price_index" => "0.1690909090909091", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/samuel-smith-s-celebrated-oatmeal-stout-407981", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/7/9/407981.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/7/9/407981.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Anderson Craft Ale Winter Dubbel", "brand" => "Anderson Craft Ales", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "14.95", "volume" => "2130", "alcohol_content" => "6.0", "price_index" => "0.11697965571205007", "country" => "Canada", "url" => "https://www.lcbo.com/en/anderson-craft-ale-winter-dubbel-13791", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/7/013791.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/7/013791.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lakeport Light", "brand" => "Lakeport", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "22.95", "volume" => "4092", "alcohol_content" => "4.0", "price_index" => "0.14021260997067447", "country" => "Canada", "url" => "https://www.lcbo.com/en/lakeport-light-680454", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/8/0/4/680454.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/8/0/4/680454.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brassroots Brewing - Darkwood Blackberry Saison", "brand" => "Brassroots Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.15743781206423463", "country" => "Canada", "url" => "https://www.lcbo.com/en/brassroots-brewing-darkwood-blackberry-saison-636043", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/6/0/636043.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/6/0/636043.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ernest Cider Winter's Blush", "brand" => "Ernest", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.7", "price_index" => "0.12981714328103555", "country" => "Canada", "url" => "https://www.lcbo.com/en/ernest-cider-winter-s-blush-625939", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/2/5/9/625939.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/2/5/9/625939.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Oshlang Vox Populi Kettle Sour Brunch Berliner Weis", "brand" => "Vox Populi", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.8", "volume" => "355", "alcohol_content" => "3.0", "price_index" => "0.2629107981220657", "country" => "Canada", "url" => "https://www.lcbo.com/en/oshlang-vox-populi-kettle-sour-brunch-berliner-weis-15662", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/6/015662.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/6/015662.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "New Standard Original Lager", "brand" => "New Standard", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.0", "volume" => "473", "alcohol_content" => "3.2", "price_index" => "0.1982029598308668", "country" => "Canada", "url" => "https://www.lcbo.com/en/new-standard-original-lager-635243", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/5/2/635243.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/5/2/635243.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collingwood Stout", "brand" => "Collingwood Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.3", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1395348837209302", "country" => "Canada", "url" => "https://www.lcbo.com/en/collingwood-stout-643122", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/3/1/643122.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/3/1/643122.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Norse Golden Ale", "brand" => "Norse Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.15", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13319238900634248", "country" => "Canada", "url" => "https://www.lcbo.com/en/norse-golden-ale-631721", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/1/7/631721.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/1/7/631721.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cascade Brewing Brunch Line 2017", "brand" => "Cascade Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "12.85", "volume" => "500", "alcohol_content" => "9.5", "price_index" => "0.27052631578947367", "country" => "United States", "url" => "https://www.lcbo.com/en/cascade-brewing-brunch-line-2017-20357", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/3/020357.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/3/020357.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Moinette Blonde", "brand" => "Dupont Moinette", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.1", "volume" => "330", "alcohol_content" => "8.5", "price_index" => "0.11051693404634581", "country" => "Belgium", "url" => "https://www.lcbo.com/en/moinette-blonde-12334", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/3/012334.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/3/012334.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Wellington Brewery Chocolate Milk Stout", "brand" => "Wellington Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "6.6", "price_index" => "0.1265295662758665", "country" => "Canada", "url" => "https://www.lcbo.com/en/wellington-brewery-chocolate-milk-stout-13668", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/6/013668.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/6/013668.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Barley Days Loyalist Lager", "brand" => "Barley Days", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.13859525487432464", "country" => "Canada", "url" => "https://www.lcbo.com/en/barley-days-loyalist-lager-617829", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/7/8/617829.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/7/8/617829.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ironwood Yuja Cider", "brand" => "Ironwood Cider", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.95", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.18557669720460418", "country" => "Canada", "url" => "https://www.lcbo.com/en/ironwood-yuja-cider-25039", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025039.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025039.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Encompass Blonde Beer", "brand" => "Encompass", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.55", "volume" => "473", "alcohol_content" => "4.9", "price_index" => "0.11002286749795055", "country" => "Canada", "url" => "https://www.lcbo.com/en/encompass-blonde-beer-574061", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/4/0/574061.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/4/0/574061.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rorschach Brewing Decadence Salted Caramel Latte Milk Stout", "brand" => "Rorschach Brewing Inc.", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.85", "volume" => "355", "alcohol_content" => "7.0", "price_index" => "0.15492957746478872", "country" => "Canada", "url" => "https://www.lcbo.com/en/rorschach-brewing-decadence-salted-caramel-latte-milk-stout-23558", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023558.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023558.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kriek Boon", "brand" => "Kriek", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.95", "volume" => "375", "alcohol_content" => "4.0", "price_index" => "0.33", "country" => "Belgium", "url" => "https://www.lcbo.com/en/kriek-boon-23743", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/7/023743.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/7/023743.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "High Park Brewery Peacock Pilsner", "brand" => "High Park Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.1", "volume" => "473", "alcohol_content" => "4.6", "price_index" => "0.14247633054508688", "country" => "Canada", "url" => "https://www.lcbo.com/en/high-park-brewery-peacock-pilsner-10110", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/1/010110.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/1/010110.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Small Pony Barrel works Tropical Apocalypse", "brand" => "Small Pony Barrel Works", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "7.5", "volume" => "375", "alcohol_content" => "6.5", "price_index" => "0.3076923076923077", "country" => "Canada", "url" => "https://www.lcbo.com/en/small-pony-barrel-works-tropical-apocalypse-16762", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/7/016762.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/7/016762.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Essentials Mixed Pack", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Gifts and Samplers", "price" => "19.95", "volume" => "2838", "alcohol_content" => "5.5", "price_index" => "0.12781087833941956", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-essentials-mixed-pack-20233", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/2/020233.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/2/020233.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "White Taybeh Beer", "brand" => "Taybeh Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.1", "volume" => "330", "alcohol_content" => "3.8", "price_index" => "0.32695374800637955", "country" => "NULL", "url" => "https://www.lcbo.com/en/white-taybeh-beer-237411", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/3/7/4/237411.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/3/7/4/237411.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Carling Light", "brand" => "Carling", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "23.5", "volume" => "4092", "alcohol_content" => "4.0", "price_index" => "0.1435728250244379", "country" => "Canada", "url" => "https://www.lcbo.com/en/carling-light-921114", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/2/1/1/921114.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/2/1/1/921114.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Somersby Blackberry Cider", "brand" => "Somersby", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.2", "volume" => "500", "alcohol_content" => "4.5", "price_index" => "0.14222222222222222", "country" => "Denmark", "url" => "https://www.lcbo.com/en/somersby-blackberry-cider-331348", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/1/3/331348.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/1/3/331348.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Somersby Hops N Apples Cider", "brand" => "Somersby", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "2.15", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.10101010101010101", "country" => "Canada", "url" => "https://www.lcbo.com/en/somersby-hops-n-apples-cider-19961", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019961.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019961.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sons of Kent Fergie Jenkins Pilsner", "brand" => "Sons Of Kent", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.9", "price_index" => "0.1402252232817017", "country" => "Canada", "url" => "https://www.lcbo.com/en/sons-of-kent-fergie-jenkins-pilsner-12579", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/5/012579.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/5/012579.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Refined Fool That's when Ted Fought the Mailman West Coast DIPA", "brand" => "Refined Fool", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "8.0", "price_index" => "0.10438689217758984", "country" => "Canada", "url" => "https://www.lcbo.com/en/refined-fool-that-s-when-ted-fought-the-mailman-west-coast-dipa-23552", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023552.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023552.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Guinness Extra Stout", "brand" => "Guinness", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "13.95", "volume" => "2046", "alcohol_content" => "5.0", "price_index" => "0.13636363636363635", "country" => "Canada", "url" => "https://www.lcbo.com/en/guinness-extra-stout-901157", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/1/1/901157.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/1/1/901157.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sons of Kent Zephyr Dry Hopped Sour", "brand" => "Sons Of Kent", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.3", "price_index" => "0.1396146635286609", "country" => "Canada", "url" => "https://www.lcbo.com/en/sons-of-kent-zephyr-dry-hopped-sour-698332", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/8/3/698332.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/8/3/698332.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Somersby Apple Cider", "brand" => "Somersby", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.25", "volume" => "500", "alcohol_content" => "4.5", "price_index" => "0.14444444444444443", "country" => "Denmark", "url" => "https://www.lcbo.com/en/somersby-apple-cider-279307", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/9/3/279307.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/9/3/279307.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brock Street Brewing New England Session IPA", "brand" => "Brock Street", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "3.8", "price_index" => "0.18638032713920108", "country" => "Canada", "url" => "https://www.lcbo.com/en/brock-street-brewing-new-england-session-ipa-18533", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/5/018533.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/5/018533.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Blanche de Chambly Orange Sanguine", "brand" => "Unibroue", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.11339611762444744", "country" => "Canada", "url" => "https://www.lcbo.com/en/blanche-de-chambly-orange-sanguine-20093", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020093.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020093.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Samuel Adams Utopias", "brand" => "Samuel Adams", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "150.05", "volume" => "710", "alcohol_content" => "27.3", "price_index" => "0.7741319713150699", "country" => "United States", "url" => "https://www.lcbo.com/en/samuel-adams-utopias-104711", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/0/4/7/104711.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/0/4/7/104711.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Formosa Springs Red Baron Platinum Light", "brand" => "Formosa Springs", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "23.95", "volume" => "4092", "alcohol_content" => "2.7", "price_index" => "0.21677346946164147", "country" => "Canada", "url" => "https://www.lcbo.com/en/formosa-springs-red-baron-platinum-light-904425", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/4/4/904425.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/4/4/904425.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Laker Premium Lager", "brand" => "Laker", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "9.95", "volume" => "2046", "alcohol_content" => "5.0", "price_index" => "0.09726295210166176", "country" => "Canada", "url" => "https://www.lcbo.com/en/laker-premium-lager-910026", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/1/0/0/910026.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/1/0/0/910026.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Steam Whistle Playmate Igloo Cooler Gift Pack", "brand" => "Steam Whistle", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "29.95", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.2812206572769953", "country" => "Canada", "url" => "https://www.lcbo.com/en/steam-whistle-playmate-igloo-cooler-gift-pack-26493", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/4/026493.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/4/026493.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Cherry Pie Sour", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.55", "volume" => "473", "alcohol_content" => "7.5", "price_index" => "0.12825933756166313", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-cherry-pie-sour-23436", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/4/023436.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/4/023436.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Dragon's Gold Cider", "brand" => "Heritage Estate Cider", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.1345377666730732", "country" => "Canada", "url" => "https://www.lcbo.com/en/dragon-s-gold-cider-498345", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/8/3/498345.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/8/3/498345.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Red Baron Lime", "brand" => "Formosa Springs", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "19.95", "volume" => "4092", "alcohol_content" => "4.0", "price_index" => "0.12188416422287389", "country" => "Canada", "url" => "https://www.lcbo.com/en/red-baron-lime-904433", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/4/4/904433.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/4/4/904433.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Anderson Juicy IPA", "brand" => "Anderson Craft Ales", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "15.45", "volume" => "2130", "alcohol_content" => "6.2", "price_index" => "0.1169922762380736", "country" => "Canada", "url" => "https://www.lcbo.com/en/anderson-juicy-ipa-15456", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015456.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015456.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brickworks Ciderhouse Mixed Pack", "brand" => "Brickworks Ciderhouse", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "19.95", "volume" => "2838", "alcohol_content" => "6.0", "price_index" => "0.11715997181113459", "country" => "Canada", "url" => "https://www.lcbo.com/en/brickworks-ciderhouse-mixed-pack-15165", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015165.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/1/015165.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Northern Maverick Enforcer IPA", "brand" => "Northern Maverick Gastro Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.11929930534581695", "country" => "Canada", "url" => "https://www.lcbo.com/en/northern-maverick-enforcer-ipa-14551", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/5/014551.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/5/014551.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Innis & Gunn Mangoes on the Run", "brand" => "Innis & Gunn", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.2", "volume" => "500", "alcohol_content" => "5.6", "price_index" => "0.11428571428571431", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/innis-gunn-mangoes-on-the-run-569996", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/9/9/569996.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/9/9/569996.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collingwood Brewery Freestyle Vanilla Oatmeal Stout", "brand" => "Collingwood Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.1326157985777436", "country" => "Canada", "url" => "https://www.lcbo.com/en/collingwood-brewery-freestyle-vanilla-oatmeal-stout-18117", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/1/018117.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/1/018117.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Lug Tread", "brand" => "Beau'S", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.1382338591640917", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-lug-tread-576926", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/6/9/576926.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/6/9/576926.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Walkerville Brewery Kremlin Russian Imperial Stout", "brand" => "Walkerville Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "9.95", "volume" => "500", "alcohol_content" => "10.0", "price_index" => "0.19899999999999998", "country" => "Canada", "url" => "https://www.lcbo.com/en/walkerville-brewery-kremlin-russian-imperial-stout-23511", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023511.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023511.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Carling", "brand" => "Carling", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "22.95", "volume" => "4092", "alcohol_content" => "5.0", "price_index" => "0.11217008797653957", "country" => "Canada", "url" => "https://www.lcbo.com/en/carling-917799", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/1/7/7/917799.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/1/7/7/917799.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Paniza Premium Pilsner", "brand" => "Paniza Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.75", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.15856236786469344", "country" => "Canada", "url" => "https://www.lcbo.com/en/paniza-premium-pilsner-15711", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/7/015711.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/7/015711.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Spearhead Brewing Co. Summer Ale", "brand" => "Spearhead Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.15", "volume" => "473", "alcohol_content" => "4.3", "price_index" => "0.15487487093760754", "country" => "Canada", "url" => "https://www.lcbo.com/en/spearhead-brewing-co-summer-ale-620468", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/2/0/4/620468.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/2/0/4/620468.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Amber Taybeh Beer", "brand" => "Taybeh Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.1", "volume" => "330", "alcohol_content" => "5.5", "price_index" => "0.22589531680440772", "country" => "NULL", "url" => "https://www.lcbo.com/en/amber-taybeh-beer-236967", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/3/6/9/236967.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/3/6/9/236967.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Redline Brewhouse Catching some Haze Witbier", "brand" => "Redline Brewhouse", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.1", "price_index" => "0.1347261949177134", "country" => "Canada", "url" => "https://www.lcbo.com/en/redline-brewhouse-catching-some-haze-witbier-19502", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/5/019502.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/5/019502.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Clear 2.0 Peach", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "26.95", "volume" => "4260", "alcohol_content" => "4.0", "price_index" => "0.15815727699530516", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-clear-2-0-peach-25565", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/5/025565.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/5/025565.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Amsterdam Winter Flight Pack", "brand" => "Amsterdam", "category" => "Beer & Cider", "subcategory" => "Gifts and Samplers", "price" => "13.95", "volume" => "1892", "alcohol_content" => "6.0", "price_index" => "0.12288583509513742", "country" => "Canada", "url" => "https://www.lcbo.com/en/amsterdam-winter-flight-pack-21269", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/2/021269.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/2/021269.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "The Exchange Brewery White IPA", "brand" => "The Exchange Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.25", "volume" => "473", "alcohol_content" => "6.8", "price_index" => "0.1321353065539112", "country" => "Canada", "url" => "https://www.lcbo.com/en/the-exchange-brewery-white-ipa-10030", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/0/010030.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/0/010030.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Laker Light", "brand" => "Laker", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "42.5", "volume" => "8520", "alcohol_content" => "4.0", "price_index" => "0.12470657276995305", "country" => "Canada", "url" => "https://www.lcbo.com/en/laker-light-426056", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/2/6/0/426056.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/2/6/0/426056.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busch", "brand" => "Busch", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "28.5", "volume" => "5115", "alcohol_content" => "4.7", "price_index" => "0.11854994696449742", "country" => "Canada", "url" => "https://www.lcbo.com/en/busch-382408", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/8/2/4/382408.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/8/2/4/382408.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kw Craft Cider Wild Cherry", "brand" => "KW Craft", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.65", "volume" => "473", "alcohol_content" => "6.4", "price_index" => "0.12057346723044396", "country" => "Canada", "url" => "https://www.lcbo.com/en/kw-craft-cider-wild-cherry-19988", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019988.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019988.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Church Key Brewing Northumberland Ale", "brand" => "Church Key", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "14.5", "volume" => "2046", "alcohol_content" => "5.0", "price_index" => "0.14173998044965785", "country" => "Canada", "url" => "https://www.lcbo.com/en/church-key-brewing-northumberland-ale-94367", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/9/4/3/094367.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/9/4/3/094367.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brimstone Brewing Sinister Minister IPA", "brand" => "Brimstone Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.5", "volume" => "500", "alcohol_content" => "7.0", "price_index" => "0.12857142857142856", "country" => "Canada", "url" => "https://www.lcbo.com/en/brimstone-brewing-sinister-minister-ipa-482257", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/2/2/482257.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/2/2/482257.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Horseshoe Valley Brewing Company Cold Water Clear Lager", "brand" => "Horseshoe Valley Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.0", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.15856236786469344", "country" => "Canada", "url" => "https://www.lcbo.com/en/horseshoe-valley-brewing-company-cold-water-clear-lager-490029", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/0/0/490029.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/0/0/490029.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Metal Head Double IPA - King of Hops", "brand" => "Nickel Brook", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.5", "volume" => "473", "alcohol_content" => "10.0", "price_index" => "0.09513742071881606", "country" => "Canada", "url" => "https://www.lcbo.com/en/nickel-brook-metal-head-dipa-16508", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/5/016508.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/5/016508.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Huron St. Hefeweizen", "brand" => "Bitte Sch�n Brauhaus", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.11916202191043629", "country" => "Canada", "url" => "https://www.lcbo.com/en/huron-st-hefeweizen-610246", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/0/2/610246.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/0/2/610246.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lake of Bays Tangerine Pale Ale", "brand" => "Lake of Bays Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.1", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.1394449192568935", "country" => "Canada", "url" => "https://www.lcbo.com/en/lake-of-bays-tangerine-pale-ale-697011", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/7/0/697011.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/7/0/697011.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brewski Halo", "brand" => "Brewski Ab", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.05", "volume" => "330", "alcohol_content" => "4.7", "price_index" => "0.19664732430689877", "country" => "Belgium", "url" => "https://www.lcbo.com/en/brewski-halo-13344", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/3/013344.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/3/013344.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Shawn & Ed Brewing Co. LagerShed Original", "brand" => "Shawn & Ed Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "13.95", "volume" => "1980", "alcohol_content" => "5.2", "price_index" => "0.13548951048951047", "country" => "Canada", "url" => "https://www.lcbo.com/en/shawn-ed-brewing-co-lagershed-original-494898", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/4/8/494898.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/4/8/494898.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lost Craft Unifeye", "brand" => "Lost Craft", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.15", "volume" => "473", "alcohol_content" => "4.2", "price_index" => "0.15856236786469344", "country" => "Canada", "url" => "https://www.lcbo.com/en/lost-craft-unifeye-570044", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/0/0/570044.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/0/0/570044.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "James Ready 5.5", "brand" => "James Ready", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "23.5", "volume" => "4092", "alcohol_content" => "5.5", "price_index" => "0.10441660001777303", "country" => "Canada", "url" => "https://www.lcbo.com/en/james-ready-5-5-615427", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/5/4/615427.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/5/4/615427.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Great Lakes Brewery Hanlan's Point Coconut Coffee Porter", "brand" => "Great Lakes Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.5", "volume" => "473", "alcohol_content" => "6.5", "price_index" => "0.14636526264433242", "country" => "Canada", "url" => "https://www.lcbo.com/en/great-lakes-brewery-hanlan-s-point-coconut-coffee-porter-17906", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/9/017906.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/9/017906.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Left Field Brewery Prospect Mosaic", "brand" => "Left Field Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.8", "volume" => "355", "alcohol_content" => "6.8", "price_index" => "0.15741507870753935", "country" => "Canada", "url" => "https://www.lcbo.com/en/left-field-brewery-prospect-mosaic-23485", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/4/023485.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/4/023485.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Shawn & Ed Lagershed Light", "brand" => "Shawn & Ed Brewing", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "13.95", "volume" => "1892", "alcohol_content" => "4.0", "price_index" => "0.1843287526427061", "country" => "Canada", "url" => "https://www.lcbo.com/en/shawn-ed-lagershed-light-21681", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/6/021681.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/6/021681.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Moniack Mead", "brand" => "Moniack", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "19.95", "volume" => "750", "alcohol_content" => "14.6", "price_index" => "0.1821917808219178", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/moniack-mead-987263", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/8/7/2/987263.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/8/7/2/987263.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Flying Monkeys Tiny Little Wizards IPA", "brand" => "Flying Monkeys", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.10419812745394139", "country" => "Canada", "url" => "https://www.lcbo.com/en/flying-monkeys-tiny-little-wizards-ipa-14310", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/3/014310.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/3/014310.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Duggans #9 IPA", "brand" => "Duggan's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.05", "volume" => "473", "alcohol_content" => "6.2", "price_index" => "0.10400327354565914", "country" => "Canada", "url" => "https://www.lcbo.com/en/duggans-9-ipa-399113", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/9/9/1/399113.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/9/9/1/399113.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Eggenberg Brewery's Samichlaus", "brand" => "Brauerei Schloss Eggenberg", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "5.3", "volume" => "330", "alcohol_content" => "14.0", "price_index" => "0.1147186147186147", "country" => "Austria", "url" => "https://www.lcbo.com/en/eggenberg-brewery-s-samichlaus-97469", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/9/7/4/097469.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/9/7/4/097469.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cigar City Florida Cracker Belgian Style Wit", "brand" => "Cigar City", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.8", "volume" => "473", "alcohol_content" => "5.4", "price_index" => "0.10962336543731892", "country" => "United States", "url" => "https://www.lcbo.com/en/cigar-city-florida-cracker-belgian-style-wit-668160", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/8/1/668160.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/8/1/668160.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Lug Tread", "brand" => "Beau's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "28.95", "volume" => "4260", "alcohol_content" => "5.2", "price_index" => "0.13068797399783313", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-lug-tread-22677", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/6/022677.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/6/022677.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Moosehead Cracked Canoe", "brand" => "Cracked Canoe", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "3.5", "price_index" => "0.17819389912413167", "country" => "Canada", "url" => "https://www.lcbo.com/en/moosehead-cracked-canoe-478255", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/8/2/478255.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/8/2/478255.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Anderson Craft Ales - Autumn", "brand" => "Anderson Craft Ales", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "14.95", "volume" => "2130", "alcohol_content" => "5.5", "price_index" => "0.12761416986769097", "country" => "Canada", "url" => "https://www.lcbo.com/en/anderson-craft-ales-autumn-536516", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/6/5/536516.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/6/5/536516.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Anderson Craft Ale Spring", "brand" => "Anderson Craft Ales", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "14.5", "volume" => "2130", "alcohol_content" => "4.8", "price_index" => "0.14182316118935837", "country" => "Canada", "url" => "https://www.lcbo.com/en/anderson-craft-ale-spring-115337", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/1/5/3/115337.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/1/5/3/115337.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Golden Taybeh Beer", "brand" => "Taybeh Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "4.1", "volume" => "330", "alcohol_content" => "5.0", "price_index" => "0.24848484848484848", "country" => "NULL", "url" => "https://www.lcbo.com/en/golden-taybeh-beer-236447", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/3/6/4/236447.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/3/6/4/236447.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Thornbury Craft Blood Orange Apple Cider", "brand" => "Thornbury", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "6.95", "volume" => "500", "alcohol_content" => "5.1", "price_index" => "0.27254901960784317", "country" => "Canada", "url" => "https://www.lcbo.com/en/thornbury-craft-blood-orange-apple-cider-19989", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019989.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019989.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Abe Erb Brewing Kolsch Style Lagered Ale", "brand" => "Abe Erb", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.14314658210007047", "country" => "Canada", "url" => "https://www.lcbo.com/en/abe-erb-brewing-kolsch-style-lagered-ale-462580", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/2/5/462580.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/2/5/462580.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "St-Ambroise Pumpkin Ale", "brand" => "St Ambroise", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.45", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.10359408033826638", "country" => "Canada", "url" => "https://www.lcbo.com/en/st-ambroise-pumpkin-ale-518720", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/8/7/518720.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/8/7/518720.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Red Baron Blonde Lager", "brand" => "Formosa Springs", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "23.95", "volume" => "4092", "alcohol_content" => "4.8", "price_index" => "0.12193507657217334", "country" => "Canada", "url" => "https://www.lcbo.com/en/red-baron-blonde-lager-904375", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/4/3/904375.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/9/0/4/3/904375.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Belgian Moon", "brand" => "Belgian Moon", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "11.95", "volume" => "1892", "alcohol_content" => "5.4", "price_index" => "0.11696421580142509", "country" => "Canada", "url" => "https://www.lcbo.com/en/belgian-moon-12329", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/3/012329.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/3/012329.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Big Drop Brewery Co Pale Ale", "brand" => "Big Drop Brewery Non Alc", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "1.95", "volume" => "330", "alcohol_content" => "0.4", "price_index" => "1.477272727272727", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/big-drop-brewery-co-pale-ale-614099", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/4/0/614099.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/4/0/614099.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pelee Island Hopping Apple Cider", "brand" => "Pelee Island", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.45", "volume" => "250", "alcohol_content" => "7.0", "price_index" => "0.19714285714285715", "country" => "Canada", "url" => "https://www.lcbo.com/en/pelee-island-hopping-apple-cider-19986", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019986.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/9/019986.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Founders Porter", "brand" => "Founders Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.3", "volume" => "355", "alcohol_content" => "6.5", "price_index" => "0.14301191765980498", "country" => "United States", "url" => "https://www.lcbo.com/en/founders-porter-21058", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/0/021058.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/0/021058.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Moosehead Shaker Sunrise Cherry Mimosa", "brand" => "Moosehead", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.4", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.10147991543340379", "country" => "Canada", "url" => "https://www.lcbo.com/en/moosehead-shaker-sunrise-cherry-mimosa-20095", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020095.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020095.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Badger Fursty Ferret", "brand" => "Badger", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.95", "volume" => "440", "alcohol_content" => "4.4", "price_index" => "0.15237603305785122", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/badger-fursty-ferret-23334", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/3/023334.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/3/023334.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Elora Brewing Shine IPA", "brand" => "Elora Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.12861169837914024", "country" => "Canada", "url" => "https://www.lcbo.com/en/elora-brewing-shine-ipa-15887", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015887.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015887.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Tempt Cider No. 9", "brand" => "Tempt", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "1.85", "volume" => "330", "alcohol_content" => "4.5", "price_index" => "0.1245791245791246", "country" => "Denmark", "url" => "https://www.lcbo.com/en/tempt-cider-no-9-332627", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/2/6/332627.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/2/6/332627.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stella Artois", "brand" => "Stella Artois", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "29.5", "volume" => "4260", "alcohol_content" => "5.0", "price_index" => "0.13849765258215962", "country" => "Canada", "url" => "https://www.lcbo.com/en/stella-artois-17860", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017860.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017860.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Left Hand Galactic Cowboy Imperial Stout Nitro", "brand" => "Left Hand Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "17.45", "volume" => "1616", "alcohol_content" => "9.0", "price_index" => "0.11998074807480748", "country" => "United States", "url" => "https://www.lcbo.com/en/left-hand-galactic-cowboy-imperial-stout-nitro-22625", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/6/022625.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/6/022625.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Laker IPA", "brand" => "Laker", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "32.95", "volume" => "8184", "alcohol_content" => "4.8", "price_index" => "0.08387809547083741", "country" => "Canada", "url" => "https://www.lcbo.com/en/laker-ipa-478925", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/8/9/478925.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/7/8/9/478925.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busch", "brand" => "Busch", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "11.95", "volume" => "2838", "alcohol_content" => "4.7", "price_index" => "0.08958961210321922", "country" => "Canada", "url" => "https://www.lcbo.com/en/busch-696161", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/6/1/696161.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/6/1/696161.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Small Pony Barrel Works The Time & The Space", "brand" => "Small Pony Barrel Works", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "7.5", "volume" => "375", "alcohol_content" => "6.6", "price_index" => "0.30303030303030304", "country" => "Canada", "url" => "https://www.lcbo.com/en/small-pony-barrel-works-the-time-the-space-23546", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023546.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023546.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stille Nacht", "brand" => "De Dolle Brouwers Bvba", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "6.35", "volume" => "330", "alcohol_content" => "12.0", "price_index" => "0.16035353535353533", "country" => "Belgium", "url" => "https://www.lcbo.com/en/stille-nacht-17843", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017843.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017843.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bobcaygeon Brewing Foliage Autumn Ale", "brand" => "Bobcaygeon Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.4", "price_index" => "0.13115652650536372", "country" => "Canada", "url" => "https://www.lcbo.com/en/bobcaygeon-brewing-foliage-autumn-ale-12388", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/3/012388.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/3/012388.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Big Little Lager", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "28.5", "volume" => "4260", "alcohol_content" => "3.5", "price_index" => "0.19114688128772633", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-big-little-lager-16442", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/4/016442.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/4/016442.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Oak Beat the Heat Belgian Wheat", "brand" => "Black Oak", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15738783180643645", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-oak-beat-the-heat-belgian-wheat-458653", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/8/6/458653.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/8/6/458653.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Martens Pilsner", "brand" => "Martens", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.25", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.09", "country" => "Belgium", "url" => "https://www.lcbo.com/en/martens-pilsner-322032", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/2/2/0/322032.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/2/2/0/322032.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Abe Erb Brewing Das Spritzhaus Hefeweizen", "brand" => "Abe Erb", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.14619225405964642", "country" => "Canada", "url" => "https://www.lcbo.com/en/abe-erb-brewing-das-spritzhaus-hefeweizen-490466", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/0/4/490466.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/0/4/490466.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Creemore Springs Urbock", "brand" => "Creemore Springs", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.11980267794221283", "country" => "Canada", "url" => "https://www.lcbo.com/en/creemore-springs-urbock-15469", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015469.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/4/015469.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "MacLean's Farmhouse Blonde", "brand" => "Maclean's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "69.0", "volume" => "11352", "alcohol_content" => "4.8", "price_index" => "0.1266296687808316", "country" => "Canada", "url" => "https://www.lcbo.com/en/maclean-s-farmhouse-blonde-25091", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025091.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025091.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Lug Tread Lagered Ale", "brand" => "Beau'S", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "17.95", "volume" => "2400", "alcohol_content" => "5.2", "price_index" => "0.1438301282051282", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-lug-tread-lagered-ale-169334", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/6/9/3/169334.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/6/9/3/169334.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bellwoods Brewery Double Jutsu", "brand" => "Bellwoods Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "5.5", "volume" => "473", "alcohol_content" => "8.0", "price_index" => "0.1453488372093023", "country" => "Canada", "url" => "https://www.lcbo.com/en/bellwoods-brewery-double-jutsu-21255", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/2/021255.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/2/021255.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smashed Apple Cider", "brand" => "Clafeld Cider House", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.11339611762444744", "country" => "Canada", "url" => "https://www.lcbo.com/en/smashed-apple-cider-124990", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/2/4/9/124990.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/2/4/9/124990.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rodenbach Vintage", "brand" => "Rodenbach", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "13.1", "volume" => "750", "alcohol_content" => "7.0", "price_index" => "0.24952380952380948", "country" => "Belgium", "url" => "https://www.lcbo.com/en/rodenbach-vintage-402578", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/2/5/402578.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/2/5/402578.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lickinghole Creek Sunflower Saison", "brand" => "Licking Hole Creek", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "9.1", "volume" => "750", "alcohol_content" => "6.5", "price_index" => "0.18666666666666665", "country" => "United States", "url" => "https://www.lcbo.com/en/lickinghole-creek-sunflower-saison-15607", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/6/015607.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/6/015607.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "All Or Nothing All-Out Effort American Amber", "brand" => "All Or Nothing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.2", "price_index" => "0.1382338591640917", "country" => "Canada", "url" => "https://www.lcbo.com/en/all-or-nothing-all-out-effort-american-amber-20025", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020025.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020025.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Peroni Libera 0.0", "brand" => "Peroni Nastro Azzuro", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "8.5", "volume" => "1320", "alcohol_content" => "0.01", "price_index" => "64.39393939393939", "country" => "Italy", "url" => "https://www.lcbo.com/en/peroni-libera-0-0-17222", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/2/017222.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/2/017222.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Gaffel Kolsch", "brand" => "Gaffel", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "23.25", "volume" => "5000", "alcohol_content" => "4.8", "price_index" => "0.096875", "country" => "Germany", "url" => "https://www.lcbo.com/en/gaffel-kolsch-179465", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/7/9/4/179465.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/7/9/4/179465.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lock Street Brewery Port Side Pilsner", "brand" => "Lock Street Brewery", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.75", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.15856236786469344", "country" => "Canada", "url" => "https://www.lcbo.com/en/lock-street-brewery-port-side-pilsner-15870", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015870.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015870.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Organic Lager", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "52.95", "volume" => "8520", "alcohol_content" => "4.2", "price_index" => "0.14797116029510396", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-organic-lager-26745", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/7/026745.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/7/026745.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Omnipollo Bianca Maple Blueberry Pancake", "brand" => "Omnipollo", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.95", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.1744186046511628", "country" => "Canada", "url" => "https://www.lcbo.com/en/omnipollo-bianca-maple-blueberry-pancake-18757", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/7/018757.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/8/7/018757.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sol", "brand" => "Cerveza Sol Especial", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "13.95", "volume" => "1980", "alcohol_content" => "4.5", "price_index" => "0.15656565656565657", "country" => "Mexico", "url" => "https://www.lcbo.com/en/sol-415661", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/5/6/415661.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/1/5/6/415661.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mikkeller Fresh Start", "brand" => "Mikkeller", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "6.4", "price_index" => "0.13048361522198731", "country" => "Canada", "url" => "https://www.lcbo.com/en/mikkeller-fresh-start-17262", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/2/017262.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/2/017262.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "The Sociable Pilsner", "brand" => "Common Good Beer Co.", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.13269758445414062", "country" => "Canada", "url" => "https://www.lcbo.com/en/the-sociable-pilsner-486472", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/6/4/486472.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/8/6/4/486472.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Homer's Premium Lager", "brand" => "Homer's", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.15", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13319238900634248", "country" => "Canada", "url" => "https://www.lcbo.com/en/homer-s-premium-lager-493270", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/3/2/493270.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/3/2/493270.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Magnotta Brewery 3 Threads Porter", "brand" => "Magnotta", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.12492792619642513", "country" => "Canada", "url" => "https://www.lcbo.com/en/magnotta-brewery-3-threads-porter-14657", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/6/014657.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/6/014657.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Halcyon Barrel House Echo Chamber", "brand" => "Beau's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "7.95", "volume" => "500", "alcohol_content" => "4.8", "price_index" => "0.33125", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-halcyon-barrel-house-echo-chamber-642868", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/2/8/642868.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/2/8/642868.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Small Pony Barrel Works Mares in a Jam", "brand" => "Small Pony Barrel Works", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "7.95", "volume" => "375", "alcohol_content" => "7.1", "price_index" => "0.2985915492957747", "country" => "Canada", "url" => "https://www.lcbo.com/en/small-pony-barrel-works-mares-in-a-jam-13828", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/8/013828.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/8/013828.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Something in the Water Blackberry Vanilla Sour", "brand" => "Something In The Water", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "4.9", "price_index" => "0.16179833455580964", "country" => "Canada", "url" => "https://www.lcbo.com/en/something-in-the-water-blackberry-vanilla-sour-17892", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017892.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/8/017892.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Newcastle Brown Ale", "brand" => "Newcastle Brown Ale", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.15", "volume" => "500", "alcohol_content" => "4.7", "price_index" => "0.13404255319148936", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/newcastle-brown-ale-12047", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/0/012047.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/0/012047.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Outlaw Brew Co 21 Lagered Ale", "brand" => "Outlaw Brew Co", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.95", "volume" => "473", "alcohol_content" => "4.8", "price_index" => "0.12993305144467934", "country" => "Canada", "url" => "https://www.lcbo.com/en/outlaw-brew-co-21-lagered-ale-507913", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/0/7/9/507913.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/0/7/9/507913.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Duvel Houblon Chouffe Belgian IPA", "brand" => "Duvel", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.0", "volume" => "330", "alcohol_content" => "9.0", "price_index" => "0.13468013468013468", "country" => "Belgium", "url" => "https://www.lcbo.com/en/duvel-houblon-chouffe-belgian-ipa-21734", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/7/021734.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/7/021734.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bobcaygeon Brewing Timber Wolf Belgian DIPA", "brand" => "Bobcaygeon Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.25", "volume" => "473", "alcohol_content" => "8.3", "price_index" => "0.10825543187549351", "country" => "Canada", "url" => "https://www.lcbo.com/en/bobcaygeon-brewing-timber-wolf-belgian-dipa-23483", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/4/023483.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/4/023483.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Halcyon Barrel House Curse of Knowledge", "brand" => "Beau's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "7.95", "volume" => "500", "alcohol_content" => "5.8", "price_index" => "0.2741379310344828", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-halcyon-barrel-house-curse-of-knowledge-676700", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/6/7/676700.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/7/6/7/676700.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Toboggan Brewing Blackfriars Vanilla Stout", "brand" => "Toboggan Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.11804087385482735", "country" => "Canada", "url" => "https://www.lcbo.com/en/toboggan-brewing-blackfriars-vanilla-stout-22252", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022252.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022252.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Blanche Des Honnelles", "brand" => "Blanche De Honnelles", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.6", "volume" => "330", "alcohol_content" => "6.0", "price_index" => "0.13131313131313133", "country" => "Belgium", "url" => "https://www.lcbo.com/en/blanche-des-honnelles-10150", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/1/010150.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/1/010150.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Shawn & Ed Brewing Co. BarrelShed No. 1", "brand" => "Shawn & Ed Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "14.95", "volume" => "1980", "alcohol_content" => "6.5", "price_index" => "0.11616161616161615", "country" => "Canada", "url" => "https://www.lcbo.com/en/shawn-ed-brewing-co-barrelshed-no-1-494872", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/4/8/494872.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/4/8/494872.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kichesippi Boom IPA", "brand" => "Kichesippi", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "7.2", "price_index" => "0.09983556495184401", "country" => "Canada", "url" => "https://www.lcbo.com/en/kichesippi-boom-ipa-22217", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022217.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022217.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Whiprsnapr Brewing Atomic Orange", "brand" => "Whiprsnapr", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.9", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.11778918755662939", "country" => "Canada", "url" => "https://www.lcbo.com/en/whiprsnapr-brewing-atomic-orange-15824", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015824.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015824.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill St. Organic Lager", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "52.95", "volume" => "8184", "alcohol_content" => "4.2", "price_index" => "0.1540462225946097", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-st-organic-lager-26746", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/7/026746.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/7/026746.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Renaissance Voyager IPA", "brand" => "Renaissance Brewing Ltd", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.35", "volume" => "440", "alcohol_content" => "6.0", "price_index" => "0.08901515151515152", "country" => "New Zealand", "url" => "https://www.lcbo.com/en/renaissance-voyager-ipa-19366", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/3/019366.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/3/019366.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Wellington Brewery Faces Double IPA with Citra & Idaho 7 Hops", "brand" => "Wellington Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.5", "volume" => "473", "alcohol_content" => "8.5", "price_index" => "0.11192637731625418", "country" => "Canada", "url" => "https://www.lcbo.com/en/wellington-brewery-faces-double-ipa-with-citra-idaho-7-hops-25484", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/4/025484.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/4/025484.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Magnotta Small Batch Cider", "brand" => "Magnotta", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.6", "price_index" => "0.13213530655391123", "country" => "Canada", "url" => "https://www.lcbo.com/en/magnotta-small-batch-cider-645408", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/5/4/645408.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/5/4/645408.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Forked River Coffee Porter", "brand" => "Forked River", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.13645973476840284", "country" => "Canada", "url" => "https://www.lcbo.com/en/forked-river-coffee-porter-544924", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/4/9/544924.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/4/4/9/544924.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Alexander Keith's India Pale Ale", "brand" => "Alexander Keith's", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "31.95", "volume" => "5115", "alcohol_content" => "5.0", "price_index" => "0.1249266862170088", "country" => "Canada", "url" => "https://www.lcbo.com/en/alexander-keith-s-india-pale-ale-172437", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/7/2/4/172437.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/7/2/4/172437.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hucklejack Canadian Lager", "brand" => "Hucklejack Lager ( Dean Brody )", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.85", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12050739957716701", "country" => "Canada", "url" => "https://www.lcbo.com/en/hucklejack-canadian-lager-15884", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015884.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/8/015884.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "High Park New Friends Session IPA", "brand" => "Lost Craft", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15738783180643645", "country" => "Canada", "url" => "https://www.lcbo.com/en/high-park-new-friends-session-ipa-25045", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025045.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/0/025045.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stella Artois", "brand" => "Stella Artois", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "53.95", "volume" => "8520", "alcohol_content" => "5.0", "price_index" => "0.12664319248826292", "country" => "Canada", "url" => "https://www.lcbo.com/en/stella-artois-19373", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/3/019373.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/3/019373.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busch Light", "brand" => "Busch", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "23.5", "volume" => "4092", "alcohol_content" => "4.0", "price_index" => "0.1435728250244379", "country" => "Canada", "url" => "https://www.lcbo.com/en/busch-light-696187", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/6/1/696187.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/6/1/696187.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Junction Craft Hazy IPA", "brand" => "Junction Craft Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "6.2", "price_index" => "0.11934801882288754", "country" => "Canada", "url" => "https://www.lcbo.com/en/junction-craft-hazy-ipa-17146", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/1/017146.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/1/017146.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Left Field Brewery Moon shot Double IPA", "brand" => "Left Field Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "355", "alcohol_content" => "8.0", "price_index" => "0.13908450704225353", "country" => "Canada", "url" => "https://www.lcbo.com/en/left-field-brewery-moon-shot-double-ipa-23517", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023517.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/3/5/023517.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "The Beau's Winter Mix Pack is back!", "brand" => "Beau's", "category" => "Beer & Cider", "subcategory" => "Gifts and Samplers", "price" => "19.95", "volume" => "2838", "alcohol_content" => "5.0", "price_index" => "0.1405919661733615", "country" => "Canada", "url" => "https://www.lcbo.com/en/the-beau-s-winter-mix-pack-is-back-22620", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/6/022620.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/6/022620.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Moosehead Shaker Cucumber Lime Mojito", "brand" => "Moosehead", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.08879492600422832", "country" => "Canada", "url" => "https://www.lcbo.com/en/moosehead-shaker-cucumber-lime-mojito-20094", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020094.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020094.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ice Cider", "brand" => "Private Stock", "category" => "Beer & Cider", "subcategory" => "Cider", "price" => "27.25", "volume" => "200", "alcohol_content" => "9.8", "price_index" => "1.3903061224489794", "country" => "Canada", "url" => "https://www.lcbo.com/en/ice-cider-490564", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/0/5/490564.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/0/5/490564.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Amsterdam Fracture Imperial IPA", "brand" => "Amsterdam", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "9.1", "price_index" => "0.09176869641985921", "country" => "Canada", "url" => "https://www.lcbo.com/en/amsterdam-fracture-imperial-ipa-531251", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/1/2/531251.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/1/2/531251.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Panil Barriquee Sour", "brand" => "Panil", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "11.7", "volume" => "750", "alcohol_content" => "8.0", "price_index" => "0.19499999999999998", "country" => "Italy", "url" => "https://www.lcbo.com/en/panil-barriquee-sour-210591", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/0/5/210591.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/0/5/210591.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Modelo Especial", "brand" => "Modelo", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.5", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.1644350481559784", "country" => "Mexico", "url" => "https://www.lcbo.com/en/modelo-especial-464172", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/4/1/464172.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/6/4/1/464172.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Dagger Brew Corp", "brand" => "Dagger Brew", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "9.5", "volume" => "2130", "alcohol_content" => "4.0", "price_index" => "0.11150234741784038", "country" => "Canada", "url" => "https://www.lcbo.com/en/dagger-brew-corp-635946", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/5/9/635946.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/3/5/9/635946.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Left Field Brewery - O'Neil 100% Canadian Stout", "brand" => "Left Field", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.0", "volume" => "355", "alcohol_content" => "4.5", "price_index" => "0.18779342723004694", "country" => "Canada", "url" => "https://www.lcbo.com/en/left-field-brewery-o-neil-100-canadian-stout-22259", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022259.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022259.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "3 Fonteinen Intens Rood", "brand" => "3 Fonteinen", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "20.5", "volume" => "375", "alcohol_content" => "6.0", "price_index" => "0.9111111111111111", "country" => "Belgium", "url" => "https://www.lcbo.com/en/3-fonteinen-intens-rood-21838", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/8/021838.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/8/021838.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "All or Nothing Mead Braggot", "brand" => "All Or Nothing", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic & Specialty", "price" => "3.75", "volume" => "296", "alcohol_content" => "7.0", "price_index" => "0.18098455598455596", "country" => "Canada", "url" => "https://www.lcbo.com/en/all-or-nothing-mead-braggot-698910", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/8/9/698910.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/8/9/698910.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Berlin Lager Beer", "brand" => "Private Stock", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "2.35", "volume" => "500", "alcohol_content" => "5.0", "price_index" => "0.094", "country" => "Greece", "url" => "https://www.lcbo.com/en/berlin-lager-beer-121953", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/2/1/9/121953.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/2/1/9/121953.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "De Moersleutel Rusty Brown Ale", "brand" => "Brouwerij De Moersleutel", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "440", "alcohol_content" => "8.0", "price_index" => "0.09943181818181818", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/de-moersleutel-rusty-brown-ale-13337", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/3/013337.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/3/3/013337.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hofbrau Oktoberfestbier", "brand" => "Hofbrau", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.8", "volume" => "500", "alcohol_content" => "6.3", "price_index" => "0.12063492063492062", "country" => "Germany", "url" => "https://www.lcbo.com/en/hofbrau-oktoberfestbier-84889", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/8/4/8/084889.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/8/4/8/084889.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts IPA No 18", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.75", "volume" => "473", "alcohol_content" => "6.4", "price_index" => "0.15691067653276955", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-ipa-no-18-21686", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/6/021686.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/6/021686.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "The Hamilton Brewery Riley Red", "brand" => "The Hamilton Brewery", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "2.75", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.12919896640826872", "country" => "Canada", "url" => "https://www.lcbo.com/en/the-hamilton-brewery-riley-red-539486", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/9/4/539486.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/3/9/4/539486.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beaches Brewing Co. A-Bay Pale Ale", "brand" => "Beaches Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.15", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.14799154334038053", "country" => "Canada", "url" => "https://www.lcbo.com/en/beaches-brewing-co-a-bay-pale-ale-568360", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/8/3/568360.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/8/3/568360.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lost Craft Eclipze IPA", "brand" => "Lost Craft", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.11451726568005638", "country" => "Canada", "url" => "https://www.lcbo.com/en/lost-craft-eclipze-ipa-10265", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/2/010265.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/0/2/010265.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Prince Eddy's Goon Buggy Guava Red Raspberry Blackberry Smoothie Sour", "brand" => "Prince Eddy'S Brewing Co", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.95", "volume" => "473", "alcohol_content" => "4.4", "price_index" => "0.23784355179704017", "country" => "Canada", "url" => "https://www.lcbo.com/en/prince-eddy-s-goon-buggy-guava-red-raspberry-blackberry-smoothie-sour-22230", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022230.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/2/2/022230.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Indie Ale House Safe Word Kveik Pale Ale", "brand" => "Indie Ale House", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.5", "volume" => "355", "alcohol_content" => "5.2", "price_index" => "0.18959913326110509", "country" => "Canada", "url" => "https://www.lcbo.com/en/indie-ale-house-safe-word-kveik-pale-ale-20936", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/9/020936.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/9/020936.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "3 Fonteinen Cuvee Armand & Gaston Vintage 2017", "brand" => "3 Fonteinen", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "22.85", "volume" => "375", "alcohol_content" => "6.7", "price_index" => "0.9094527363184081", "country" => "Belgium", "url" => "https://www.lcbo.com/en/3-fonteinen-cuvee-armand-gaston-vintage-2017-21836", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/8/021836.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/8/021836.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Omnipollo Bianca Mango Lassi Gose 2021", "brand" => "Omnipollo", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "4.95", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.1744186046511628", "country" => "Canada", "url" => "https://www.lcbo.com/en/omnipollo-bianca-mango-lassi-gose-2021-20432", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/4/020432.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/4/020432.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Fast Eddy's Light Lager", "brand" => "Prince Eddy'S Brewing Co", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.15738783180643645", "country" => "Canada", "url" => "https://www.lcbo.com/en/fast-eddy-s-light-lager-20021", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020021.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/0/020021.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Corona Light", "brand" => "Corona Extra", "category" => "Beer & Cider", "subcategory" => "Lager", "price" => "15.95", "volume" => "1980", "alcohol_content" => "4.0", "price_index" => "0.20138888888888887", "country" => "Mexico", "url" => "https://www.lcbo.com/en/corona-light-617720", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/7/7/617720.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/7/7/617720.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Whitewater Brewing Co. Peanut Butter Shake", "brand" => "Whitewater Brewing", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.17618040873854826", "country" => "Canada", "url" => "https://www.lcbo.com/en/whitewater-brewing-co-peanut-butter-shake-643106", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/3/1/643106.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/3/1/643106.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light Strawberry Lemonade", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Ale", "price" => "28.95", "volume" => "4260", "alcohol_content" => "4.0", "price_index" => "0.1698943661971831", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-strawberry-lemonade-17388", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/3/017388.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/3/017388.jpg.thumb.1280.1280.png",
        ]);

    }
}
