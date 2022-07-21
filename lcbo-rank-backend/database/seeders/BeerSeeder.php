<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alcohols')->insert([
            "title" => "Bench Brewing Lincoln Lager", "brand" => "Bench Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.4", "country" => "Canada", "url" => "https://www.lcbo.com/en/bench-brewing-lincoln-lager-16954"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bench Brewing Jordan Harbour Belgian Pale Ale", "brand" => "Bench Brewing", "category" => "Beer & Cider", "subcategory" => "Belgian Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/bench-brewing-jordan-harbour-belgian-pale-ale-13815"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bench Brewing Ball's Falls Session IPA", "brand" => "Bench Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/bench-brewing-ball-s-falls-session-ipa-481515"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cowbell Brewing Co. Smooth Sailing Light Lager", "brand" => "Cowbell Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/cowbell-brewing-co-smooth-sailing-light-lager-25075"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ace Hill Radler Mix Pack", "brand" => "Ace Hill", "category" => "Beer & Cider", "subcategory" => "Taster Packs", "price" => "10.95", "volume" => "1420", "alcohol_content" => "2.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/ace-hill-radler-mix-pack-19658"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brickworks Ciderhouse Batch : 1904", "brand" => "Brickworks Ciderhouse", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "3.5", "volume" => "473", "alcohol_content" => "4.7", "country" => "Canada", "url" => "https://www.lcbo.com/en/brickworks-ciderhouse-batch-1904-394015"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Henderson\'s \"Food Truck\" Lagered Blonde", "brand" => "Henderson Brewing", "category" => "Beer & Cider", "subcategory" => "Lagered Ale", "price" => "3.05", "volume" => "473", "alcohol_content" => "4.8", "country" => "Canada", "url" => "https://www.lcbo.com/en/henderson-s-food-truck-lagered-blonde-513036"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Survival Pack", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Taster Packs", "price" => "18.95", "volume" => "2838", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-survival-pack-25051"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Life in the Clouds", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.65", "volume" => "473", "alcohol_content" => "6.1", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-life-in-the-clouds-556688"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Corona Sunbrew", "brand" => "Corona", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "12.35", "volume" => "1980", "alcohol_content" => "0.01", "country" => "Canada", "url" => "https://www.lcbo.com/en/corona-sunbrew-24899"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Lug Tread", "brand" => "Beau's", "category" => "Beer & Cider", "subcategory" => "Lagered Ale", "price" => "18.95", "volume" => "2838", "alcohol_content" => "5.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-lug-tread-19266"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Whitewater Brewing Sunsetter Beach Lager", "brand" => "Sunsetter", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/whitewater-brewing-sunsetter-beach-lager-26556"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Budweiser", "brand" => "Budweiser", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "14.5", "volume" => "2130", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/budweiser-904334"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Hazy State", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.1", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-hazy-state-10815"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Daura Damm", "brand" => "Damm", "category" => "Beer & Cider", "subcategory" => "Amber Lager", "price" => "15.15", "volume" => "1980", "alcohol_content" => "5.4", "country" => "Spain", "url" => "https://www.lcbo.com/en/daura-damm-378711"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Spy Cider House Golden Eye Cider", "brand" => "Spy Cider House", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "3.95", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/spy-cider-house-golden-eye-cider-11674"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ernest Dry Cider", "brand" => "Ernest", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "3.65", "volume" => "473", "alcohol_content" => "6.3", "country" => "Canada", "url" => "https://www.lcbo.com/en/ernest-dry-cider-466292"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bombardier Ale", "brand" => "Bombardier", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "2.85", "volume" => "500", "alcohol_content" => "5.5", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/bombardier-ale-283846"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hollandia Lager Beer", "brand" => "Hollandia", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.3", "volume" => "500", "alcohol_content" => "5.0", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/hollandia-lager-beer-260307"
        ]);
        DB::table('alcohols')->insert([
            "title" => "No Boats On Sunday Cider Original Multi Pack", "brand" => "No Boats on Sunday", "category" => "Beer & Cider", "subcategory" => "Mixed Pack Cider", "price" => "21.95", "volume" => "2838", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/no-boats-on-sunday-cider-original-multi-pack-25037"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Whitewater Brewing Funky Fresh Kiwi Lime Sour", "brand" => "Whitewater Brewing", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "4.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/whitewater-brewing-funky-fresh-kiwi-lime-sour-24572"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rocky Point Lime Lager", "brand" => "Something in the Water Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.25", "volume" => "355", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/rocky-point-lime-lager-24567"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ernest Apple Strudel", "brand" => "Ernest", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.65", "volume" => "473", "alcohol_content" => "5.8", "country" => "Canada", "url" => "https://www.lcbo.com/en/ernest-apple-strudel-128009"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smithwick's Ale", "brand" => "Smithwick's", "category" => "Beer & Cider", "subcategory" => "Dark Ale", "price" => "2.85", "volume" => "500", "alcohol_content" => "5.0", "country" => "Ireland", "url" => "https://www.lcbo.com/en/smithwick-s-ale-270439"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Somersby Wild Garden Crushed Apple", "brand" => "Somersby", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/somersby-wild-garden-crushed-apple-25035"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Somersby Mango & Lime Cider", "brand" => "Somersby", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/somersby-mango-lime-cider-16136"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sapporo Premium Beer", "brand" => "Sapporo", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "19.5", "volume" => "3000", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/sapporo-premium-beer-459818"
        ]);
        DB::table('alcohols')->insert([
            "title" => "St-Ambroise Apricot Wheat Ale", "brand" => "St. Ambroise", "category" => "Beer & Cider", "subcategory" => "Flavoured & Spiced Beer", "price" => "3.05", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/st-ambroise-apricot-wheat-ale-338343"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ace Hill Lemon Cayenne Radler", "brand" => "Ace Hill", "category" => "Beer & Cider", "subcategory" => "Radler & Shandy", "price" => "2.85", "volume" => "355", "alcohol_content" => "2.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/ace-hill-lemon-cayenne-radler-19734"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Angry Orchard Hard Cider Crisp Apple", "brand" => "Angry Orchard", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "15.75", "volume" => "2130", "alcohol_content" => "5.0", "country" => "United States", "url" => "https://www.lcbo.com/en/angry-orchard-hard-cider-crisp-apple-374520"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stella Artois", "brand" => "Stella Artois", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "19.5", "volume" => "2838", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/stella-artois-17819"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Shiny Apple Ros�", "brand" => "Shiny Apple Cider", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.65", "volume" => "473", "alcohol_content" => "6.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/shiny-apple-ros-c-515098"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Dark Taybeh Beer", "brand" => "Taybeh Brewery", "category" => "Beer & Cider", "subcategory" => "Dark Ale", "price" => "4.1", "volume" => "330", "alcohol_content" => "6.0", "country" => "NULL", "url" => "https://www.lcbo.com/en/dark-taybeh-beer-236959"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Feels Like Friday - Hopped Buckwheat Session Mead", "brand" => "Royal Canadian Mead", "category" => "Beer & Cider", "subcategory" => "Mead", "price" => "3.75", "volume" => "355", "alcohol_content" => "5.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/feels-like-friday-hopped-buckwheat-session-mead-10295"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coronita Extra", "brand" => "Corona", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "9.95", "volume" => "1242", "alcohol_content" => "4.6", "country" => "Mexico", "url" => "https://www.lcbo.com/en/coronita-extra-611566"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Shiny Apple Cider", "brand" => "Shiny Apple Cider", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "3.65", "volume" => "473", "alcohol_content" => "7.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/shiny-apple-cider-407668"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Fruli", "brand" => "Fruli", "category" => "Beer & Cider", "subcategory" => "Flavoured & Spiced Beer", "price" => "15.65", "volume" => "1320", "alcohol_content" => "4.1", "country" => "Belgium", "url" => "https://www.lcbo.com/en/fruli-380923"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Fat Tire Amber Ale", "brand" => "New Belgium", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/fat-tire-amber-ale-12737"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pilsner Urquell", "brand" => "Pilsner Urquell", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.15", "volume" => "500", "alcohol_content" => "4.4", "country" => "Czechia", "url" => "https://www.lcbo.com/en/pilsner-urquell-255380"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cowbell Brewing Co. Summer Collection", "brand" => "Cowbell Brewing", "category" => "Beer & Cider", "subcategory" => "Taster Packs", "price" => "19.95", "volume" => "2838", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/cowbell-brewing-co-summer-collection-25818"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cowbell Brewing Co. Absent Landlord", "brand" => "Cowbell Brewing", "category" => "Beer & Cider", "subcategory" => "Lagered Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.3", "country" => "Canada", "url" => "https://www.lcbo.com/en/cowbell-brewing-co-absent-landlord-469981"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Carlsberg", "brand" => "Carlsberg", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.8", "volume" => "500", "alcohol_content" => "5.0", "country" => "Denmark", "url" => "https://www.lcbo.com/en/carlsberg-73809"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Omnipollo Zodiak IPA", "brand" => "Omnipollo", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.95", "volume" => "473", "alcohol_content" => "6.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/omnipollo-zodiak-ipa-518795"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rogue Dead Guy Ale", "brand" => "Rogue", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.8", "country" => "United States", "url" => "https://www.lcbo.com/en/rogue-dead-guy-ale-122853"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Somersby Mixer Pack", "brand" => "Somersby", "category" => "Beer & Cider", "subcategory" => "Mixed Pack Cider", "price" => "19.85", "volume" => "2838", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/somersby-mixer-pack-25086"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Growers Cider Stone Fruit", "brand" => "Growers", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/growers-cider-stone-fruit-568436"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Modelo Especial", "brand" => "Modelo", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "16.95", "volume" => "2130", "alcohol_content" => "4.5", "country" => "Mexico", "url" => "https://www.lcbo.com/en/modelo-especial-418590"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Paulaner Hefe-Weissbier", "brand" => "Paulaner", "category" => "Beer & Cider", "subcategory" => "Wheat Ale", "price" => "3.25", "volume" => "500", "alcohol_content" => "5.5", "country" => "Germany", "url" => "https://www.lcbo.com/en/paulaner-hefe-weissbier-337881"
        ]);
        DB::table('alcohols')->insert([
            "title" => "No Boats on Sunday Cider", "brand" => "No Boats On Sunday", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "4.95", "volume" => "500", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/no-boats-on-sunday-cider-568287"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kilkenny Irish Ale", "brand" => "Kilkenny", "category" => "Beer & Cider", "subcategory" => "Dark Ale", "price" => "11.65", "volume" => "2000", "alcohol_content" => "4.3", "country" => "Ireland", "url" => "https://www.lcbo.com/en/kilkenny-irish-ale-442731"
        ]);
        DB::table('alcohols')->insert([
            "title" => "KONA BIG WAVE GOLDEN ALE", "brand" => "Kona Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "16.9", "volume" => "2130", "alcohol_content" => "4.3", "country" => "United States", "url" => "https://www.lcbo.com/en/kona-big-wave-golden-ale-497339"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lonetree Authentic Dry Cider", "brand" => "Lonetree", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/lonetree-authentic-dry-cider-127787"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Amsterdam Hazii Imperial IPA", "brand" => "Amsterdam", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.95", "volume" => "473", "alcohol_content" => "9.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/amsterdam-hazii-imperial-ipa-20427"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Westmalle Tripel", "brand" => "Westmalle", "category" => "Beer & Cider", "subcategory" => "Belgian Ale", "price" => "4.35", "volume" => "330", "alcohol_content" => "9.5", "country" => "Belgium", "url" => "https://www.lcbo.com/en/westmalle-tripel-676577"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Reinhart's Red Apple Light Cider", "brand" => "Reinhart", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "3.15", "volume" => "473", "alcohol_content" => "3.8", "country" => "Canada", "url" => "https://www.lcbo.com/en/reinhart-s-red-apple-light-cider-497651"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Corona Extra", "brand" => "Corona", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "16.5", "volume" => "1980", "alcohol_content" => "4.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/corona-extra-17818"
        ]);
        DB::table('alcohols')->insert([
            "title" => "West Avenue Cider Heritage Dry", "brand" => "West Avenue Cider", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "3.8", "volume" => "473", "alcohol_content" => "6.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/west-avenue-cider-heritage-dry-11172"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Meuse Brewing Company Saison De La Meuse", "brand" => "Meuse Brewing", "category" => "Beer & Cider", "subcategory" => "Belgian Ale", "price" => "2.75", "volume" => "330", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/meuse-brewing-company-saison-de-la-meuse-16429"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Gaffel Kolsch", "brand" => "Gaffel", "category" => "Beer & Cider", "subcategory" => "Lagered Ale", "price" => "3.0", "volume" => "500", "alcohol_content" => "4.8", "country" => "Germany", "url" => "https://www.lcbo.com/en/gaffel-kolsch-430769"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Erdinger Weissbier", "brand" => "Erdinger", "category" => "Beer & Cider", "subcategory" => "Wheat Ale", "price" => "3.8", "volume" => "500", "alcohol_content" => "5.2", "country" => "Germany", "url" => "https://www.lcbo.com/en/erdinger-weissbier-201715"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Heineken", "brand" => "Heineken", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "15.95", "volume" => "1980", "alcohol_content" => "5.0", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/heineken-18"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Weihenstephaner Hefeweissbier", "brand" => "Weihenstephaner", "category" => "Beer & Cider", "subcategory" => "Wheat Ale", "price" => "4.3", "volume" => "500", "alcohol_content" => "5.6", "country" => "Germany", "url" => "https://www.lcbo.com/en/weihenstephaner-hefeweissbier-75291"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Left Field Brewery Bang Bang Dry Hopped Sour", "brand" => "Left Field Brewery", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "3.8", "volume" => "355", "alcohol_content" => "5.3", "country" => "Canada", "url" => "https://www.lcbo.com/en/left-field-brewery-bang-bang-dry-hopped-sour-10869"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Henderson's Best", "brand" => "Henderson Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/henderson-s-best-513044"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ardiel Cider House Big John Lightly Hopped Cider", "brand" => "Ardiel Cider", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.65", "volume" => "473", "alcohol_content" => "6.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/ardiel-cider-house-big-john-lightly-hopped-cider-25041"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Creemore Session IPA", "brand" => "Creemore Springs", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.1", "country" => "Canada", "url" => "https://www.lcbo.com/en/creemore-springs-boundless-ipa-698415"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Adnams Ghost Ship Pale Ale 0.5%", "brand" => "Adnams", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic Beer", "price" => "9.95", "volume" => "1320", "alcohol_content" => "0.5", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/adnams-ghost-ship-pale-ale-0-5-18717"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Duntroon Cider House Empire Extra Dry Cider", "brand" => "Duntrool", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "3.95", "volume" => "473", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/duntroon-cider-house-empire-extra-dry-cider-19974"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Clausthaler Premium Non Alcoholic", "brand" => "Clausthaler", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic Beer", "price" => "2.4", "volume" => "500", "alcohol_content" => "0.01", "country" => "Germany", "url" => "https://www.lcbo.com/en/clausthaler-premium-non-alcoholic-589549"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Eden Grove Hibiscus Blossom Cider", "brand" => "Eden Grove", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.55", "volume" => "473", "alcohol_content" => "5.4", "country" => "Canada", "url" => "https://www.lcbo.com/en/eden-grove-hibiscus-blossom-cider-15492"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Creemore Springs Premium Lager", "brand" => "Creemore Springs", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "19.25", "volume" => "2838", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/creemore-springs-premium-lager-541243"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cracked Canoe", "brand" => "Cracked Canoe", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "16.95", "volume" => "2838", "alcohol_content" => "3.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/cracked-canoe-19894"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Strongbow Gold Apple Cider", "brand" => "Strongbow", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.1", "volume" => "440", "alcohol_content" => "4.5", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/strongbow-gold-apple-cider-413849"
        ]);
        DB::table('alcohols')->insert([
            "title" => "No Boats On Sunday Pear Cider", "brand" => "No Boats on Sunday", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.85", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/no-boats-on-sunday-pear-cider-25036"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Jam up the Mash", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "5.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-jam-up-the-mash-549873"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Okanagan Apple Cider", "brand" => "Okanagan Cider Company", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/okanagan-apple-cider-514851"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Strongbow Cider", "brand" => "Strongbow", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "25.0", "volume" => "3520", "alcohol_content" => "5.3", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/strongbow-cider-184796"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Church Key Brewing West Coast Pale Ale", "brand" => "Church Key", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "6.45", "volume" => "650", "alcohol_content" => "6.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/church-key-brewing-west-coast-pale-ale-18315"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ace Hill Carb Free", "brand" => "Ace Hill", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "9.95", "volume" => "1420", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/ace-hill-carb-free-24826"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ace Hill Grapefruit Radler", "brand" => "Ace Hill", "category" => "Beer & Cider", "subcategory" => "Radler & Shandy", "price" => "2.85", "volume" => "355", "alcohol_content" => "2.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/ace-hill-grapefruit-radler-19656"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hofbrau Original Lager", "brand" => "Hofbrau", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.7", "volume" => "500", "alcohol_content" => "5.1", "country" => "Germany", "url" => "https://www.lcbo.com/en/hofbrau-original-lager-319202"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Flying Monkeys Juicy Ass", "brand" => "Flying Monkeys", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.65", "volume" => "473", "alcohol_content" => "6.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/flying-monkeys-juicy-ass-508572"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Longslice Sky Bison APA", "brand" => "Longslice Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.3", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/longslice-sky-bison-apa-26065"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Erdinger Weissbier", "brand" => "Erdinger", "category" => "Beer & Cider", "subcategory" => "Wheat Ale", "price" => "3.4", "volume" => "500", "alcohol_content" => "5.3", "country" => "Germany", "url" => "https://www.lcbo.com/en/erdinger-weissbier-541375"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Big Rig Gold", "brand" => "Big Rig Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/big-rig-gold-398255"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Karlovacko Beer", "brand" => "Karlovacko", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.55", "volume" => "500", "alcohol_content" => "5.0", "country" => "Croatia", "url" => "https://www.lcbo.com/en/karlovacko-beer-243725"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Liberty Village Dry Cider", "brand" => "Liberty Village", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "3.55", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/liberty-village-dry-cider-635227"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stiegl Bier", "brand" => "Stiegl", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.25", "volume" => "500", "alcohol_content" => "4.9", "country" => "Austria", "url" => "https://www.lcbo.com/en/stiegl-bier-676106"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Holsten Festbock", "brand" => "Holsten", "category" => "Beer & Cider", "subcategory" => "Dark Lager", "price" => "2.8", "volume" => "500", "alcohol_content" => "7.0", "country" => "Germany", "url" => "https://www.lcbo.com/en/holsten-festbock-334276"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Erdinger Dunkel Weissbier", "brand" => "Erdinger", "category" => "Beer & Cider", "subcategory" => "Wheat Ale", "price" => "3.9", "volume" => "500", "alcohol_content" => "5.6", "country" => "Germany", "url" => "https://www.lcbo.com/en/erdinger-dunkel-weissbier-201723"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Eden Grove Perfect Pear", "brand" => "Eden Grove", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.4", "country" => "Canada", "url" => "https://www.lcbo.com/en/eden-grove-perfect-pear-457358"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Somersby Red Rhubarb Cider", "brand" => "Somersby", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/somersby-red-rhubarb-cider-16003"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Nature Of Things Dry Cider", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "3.65", "volume" => "473", "alcohol_content" => "5.8", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-nature-of-things-dry-cider-13571"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sierra Nevada Pale Ale", "brand" => "Sierra Nevada", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.6", "country" => "United States", "url" => "https://www.lcbo.com/en/sierra-nevada-pale-ale-497487"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Original Draught", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "16.5", "volume" => "2838", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-original-draught-383059"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lake of the Woods Sneaky Peach", "brand" => "Lake Of The Woods", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/lake-of-the-woods-sneaky-peach-16770"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Okanagan Harvest Pear", "brand" => "Okanagan Cider Company", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/okanagan-harvest-pear-15299"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Old Jock Russian Imperial Stout 20 Year Old", "brand" => "Old Jock", "category" => "Beer & Cider", "subcategory" => "Stout & Porter", "price" => "14.7", "volume" => "330", "alcohol_content" => "8.0", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/old-jock-russian-imperial-stout-20-year-old-25251"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ardiel Cider House Dry Cider", "brand" => "Ardiel Cider House", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "3.65", "volume" => "473", "alcohol_content" => "6.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/ardiel-cider-house-dry-cider-497214"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Super Bock", "brand" => "Super Bock", "category" => "Beer & Cider", "subcategory" => "Dark Lager", "price" => "12.95", "volume" => "1980", "alcohol_content" => "5.8", "country" => "Portugal", "url" => "https://www.lcbo.com/en/super-bock-335059"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cool Beer Blonde Lager", "brand" => "Cool Beer", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "6.5", "volume" => "1420", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/cool-beer-blonde-lager-10583"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Guava Gose", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "4.9", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-guava-gose-20219"
        ]);
        DB::table('alcohols')->insert([
            "title" => "PEI Brewing Gahan Blueberry Ale", "brand" => "PEI Brewing", "category" => "Beer & Cider", "subcategory" => "Flavoured & Spiced Beer", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/pei-brewing-gahan-blueberry-ale-489351"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Railway City Orange Creamsic Ale", "brand" => "Railway City", "category" => "Beer & Cider", "subcategory" => "Flavoured & Spiced Beer", "price" => "3.5", "volume" => "473", "alcohol_content" => "4.8", "country" => "Canada", "url" => "https://www.lcbo.com/en/railway-city-orange-creamsic-ale-479030"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Labatt Blue", "brand" => "Labatt", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.0", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/labatt-blue-696468"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Left Field Brewery Squeeze Play Rainbow Sherbet", "brand" => "Left Field", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "3.95", "volume" => "355", "alcohol_content" => "4.8", "country" => "Canada", "url" => "https://www.lcbo.com/en/left-field-brewery-squeeze-play-rainbow-sherbet-20835"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lezajsk Beer", "brand" => "Lezajsk", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.55", "volume" => "500", "alcohol_content" => "5.5", "country" => "Poland", "url" => "https://www.lcbo.com/en/lezajsk-beer-540468"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ebb & Flow Raspberry Lemon Yuzu", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/ebb-flow-raspberry-lemon-yuzu-20431"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brasserie Tuque De Broue Tuque Doree", "brand" => "Brasserie Tuque de Broue", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/brasserie-tuque-de-broue-tuque-doree-461665"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Budweiser", "brand" => "Budweiser", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "43.95", "volume" => "8184", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/budweiser-902635"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Puppers Premium Lager", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.3", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/puppers-premium-lager-19605"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Manitoulin Brewing Cup & Saucer", "brand" => "Manitoulin Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/manitoulin-brewing-cup-saucer-546044"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Midtown Brewing County Kolsch", "brand" => "Midtown Brewing", "category" => "Beer & Cider", "subcategory" => "Lagered Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/midtown-brewing-county-kolsch-16425"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bayside Brewing Long Pond Lager", "brand" => "Bayside Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/bayside-brewing-long-pond-lager-450619"
        ]);
        DB::table('alcohols')->insert([
            "title" => "St-Ambroise IPA Mix Pack", "brand" => "St-Ambroise", "category" => "Beer & Cider", "subcategory" => "Taster Packs", "price" => "11.95", "volume" => "1892", "alcohol_content" => "7.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/st-ambroise-ipa-mix-pack-25020"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hofbrau Dunkel", "brand" => "Hofbrau", "category" => "Beer & Cider", "subcategory" => "Dark Lager", "price" => "3.45", "volume" => "500", "alcohol_content" => "5.5", "country" => "Germany", "url" => "https://www.lcbo.com/en/hofbrau-dunkel-415950"
        ]);
        DB::table('alcohols')->insert([
            "title" => "MacKinnon Brewing Red Fox Ale", "brand" => "MacKinnon Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/mackinnon-brewing-red-fox-ale-538447"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lake of the Woods Lakeside Kolsch", "brand" => "Lake Of The Woods", "category" => "Beer & Cider", "subcategory" => "Lagered Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/lake-of-the-woods-lakeside-kolsch-569913"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Chill Street Afternoon Delight Cider", "brand" => "Chill Street", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "4.1", "volume" => "473", "alcohol_content" => "6.9", "country" => "Canada", "url" => "https://www.lcbo.com/en/chill-street-afternoon-delight-cider-19965"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cowbell Brewing Co. Bobcat", "brand" => "Cowbell Brewing", "category" => "Beer & Cider", "subcategory" => "Dark Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/cowbell-brewing-co-doc-perdue-s-bobcat-493247"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Four Fathers The Local Light Lager", "brand" => "Four Fathers Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/four-fathers-the-local-light-lager-20061"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Michelob Ultra", "brand" => "Michelob", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.1", "volume" => "473", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/michelob-ultra-284562"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Moosehead Lager", "brand" => "Moosehead", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "45.5", "volume" => "8184", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/moosehead-lager-911412"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Canadian", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "31.5", "volume" => "5325", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-canadian-247338"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Iron Maiden Trooper Ale", "brand" => "Iron Maiden", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.05", "volume" => "500", "alcohol_content" => "4.7", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/iron-maiden-trooper-ale-522615"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hoegaarden", "brand" => "Hoegaarden", "category" => "Beer & Cider", "subcategory" => "Wheat Ale", "price" => "15.95", "volume" => "1980", "alcohol_content" => "5.0", "country" => "Belgium", "url" => "https://www.lcbo.com/en/hoegaarden-554089"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "31.5", "volume" => "5325", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-616920"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Thornbury Craft X Tragically Hip Road Apples Cider", "brand" => "Thornbury", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "3.85", "volume" => "473", "alcohol_content" => "5.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/thornbury-craft-x-tragically-hip-road-apples-cider-21262"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Forked River Capital Blonde Ale", "brand" => "Forked River Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.7", "country" => "Canada", "url" => "https://www.lcbo.com/en/forked-river-capital-blonde-ale-530303"
        ]);
        DB::table('alcohols')->insert([
            "title" => "The Hamilton Brewery Blue Collar Pale Ale", "brand" => "The Hamilton Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/the-hamilton-brewery-blue-collar-pale-ale-440354"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Great Lakes Brewery  Robohop Imperial IPA", "brand" => "Great Lakes Brewery", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "4.5", "volume" => "473", "alcohol_content" => "8.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/great-lakes-brewery-robohop-imperial-ipa-498576"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Canadian", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "16.5", "volume" => "2838", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-canadian-300699"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Mad Tom IPA", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.6", "volume" => "473", "alcohol_content" => "6.4", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-mad-tom-ipa-288837"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Thornbury Craft Wild Blueberry Elderflower Cider", "brand" => "Thornbury", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.75", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/thornbury-craft-wild-blueberry-elderflower-cider-688671"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cowbell Brewing Co. Original Cider", "brand" => "Cowbell Brewing", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "3.6", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/cowbell-brewing-co-original-cider-24890"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Indie Ale House Instigator IPA", "brand" => "Indie Ale House", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.85", "volume" => "473", "alcohol_content" => "6.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/indie-ale-house-instigator-ipa-16080"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Cream Ale", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Lagered Ale", "price" => "28.95", "volume" => "4260", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-cream-ale-10325"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cassel Brewery Caboose IPA", "brand" => "Cassel Brewery", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.95", "volume" => "473", "alcohol_content" => "6.4", "country" => "Canada", "url" => "https://www.lcbo.com/en/cassel-brewery-caboose-ipa-569822"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Flying Monkeys Velvet Bubble Lord Blueberry Sour", "brand" => "Flying Monkeys", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "6.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/flying-monkeys-blueberry-sour-25664"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kozel Beer", "brand" => "Kozel", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.55", "volume" => "500", "alcohol_content" => "4.7", "country" => "Czechia", "url" => "https://www.lcbo.com/en/kozel-beer-614909"
        ]);
        DB::table('alcohols')->insert([
            "title" => "James Ready 5.5", "brand" => "James Ready", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "11.95", "volume" => "2838", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/james-ready-5-5-140509"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Wasaga Beach One Cerveza", "brand" => "Wasaga Beach", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.15", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/wasaga-beach-one-cerveza-468850"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Michelob Ultra", "brand" => "Michelob", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "46.95", "volume" => "8184", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/michelob-ultra-380071"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Original Organic Lager", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "15.25", "volume" => "2046", "alcohol_content" => "4.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-original-organic-lager-84210"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bellwoods Brewery Jelly King", "brand" => "Bellwoods Brewery", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "6.5", "volume" => "500", "alcohol_content" => "5.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/bellwoods-brewery-jelly-king-14280"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Innis & Gunn Lager", "brand" => "Innis & Gunn", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.1", "volume" => "500", "alcohol_content" => "4.6", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/innis-gunn-lager-377275"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lake of Bays Off the Grid Hazy Pale Ale", "brand" => "Lake of Bays Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.55", "volume" => "473", "alcohol_content" => "4.7", "country" => "Canada", "url" => "https://www.lcbo.com/en/lake-of-bays-off-the-grid-hazy-pale-ale-15823"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Redline Brewhouse Rainbow in the Dark IPA", "brand" => "Redline Brewhouse", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.55", "volume" => "473", "alcohol_content" => "6.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/redline-brewhouse-rainbow-in-the-dark-ipa-15878"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cameron's Captain's Log Lager", "brand" => "Cameron's", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.75", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/cameron-s-captain-s-log-lager-243741"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Craft Lager", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "4.8", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-craft-lager-175810"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Left Field Brewery Pina Power IPA", "brand" => "Left Field Brewery", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.8", "volume" => "355", "alcohol_content" => "6.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/left-field-brewing-pina-power-ipa-26986"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Carling Light", "brand" => "Carling", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "40.95", "volume" => "8184", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/carling-light-921122"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "43.95", "volume" => "8184", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-908616"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Strawberry Pina Colada Sour", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "4.75", "volume" => "473", "alcohol_content" => "5.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-strawberry-pina-colada-sour-26064"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Miller Genuine Draft", "brand" => "Miller", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "14.5", "volume" => "2130", "alcohol_content" => "4.7", "country" => "Canada", "url" => "https://www.lcbo.com/en/miller-genuine-draft-544833"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bench Brewing Berry Fields Sour Ale", "brand" => "Bench Brewing", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "5.4", "country" => "Canada", "url" => "https://www.lcbo.com/en/bench-brewing-berry-fields-sour-ale-19677"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Summer Mix Pack 2022", "brand" => "Beau's Brewery", "category" => "Beer & Cider", "subcategory" => "Taster Packs", "price" => "19.95", "volume" => "2838", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-summer-mix-pack-2022-27501"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Side Launch Easy Breezy Light Lager", "brand" => "Side Launch Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "10.4", "volume" => "1420", "alcohol_content" => "3.8", "country" => "Canada", "url" => "https://www.lcbo.com/en/side-launch-easy-breezy-light-lager-25258"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Fresh Ideas Dry Hop Hazy IPA", "brand" => "Bell City Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.3", "country" => "Canada", "url" => "https://www.lcbo.com/en/fresh-ideas-dry-hop-hazy-ipa-22220"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Laker Premium Lager", "brand" => "Laker", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.0", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/laker-premium-lager-141739"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Perth Brewery Razmataz Sour", "brand" => "Perth Brewery", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/perth-brewery-razmataz-sour-26695"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nickel Brook No Bad Daze Easy-Goin' Lager", "brand" => "Nickel Brook", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.5", "volume" => "473", "alcohol_content" => "4.3", "country" => "Canada", "url" => "https://www.lcbo.com/en/nickel-brook-no-bad-daze-dry-hopped-lager-18773"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rouge River Brewery Holy Trinity IPA", "brand" => "Rouge River Brewing Company", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "4.5", "volume" => "473", "alcohol_content" => "6.8", "country" => "Canada", "url" => "https://www.lcbo.com/en/rouge-river-brewery-holy-trinity-ipa-21944"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Old Flame Brunette Munich Dunkel", "brand" => "Old Flame", "category" => "Beer & Cider", "subcategory" => "Dark Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/old-flame-brunette-munich-dunkel-10609"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beaches Brewing Beach Bound Lager", "brand" => "Beaches Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.3", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/beaches-brewing-beach-bound-lager-15690"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hoegaarden", "brand" => "Hoegaarden", "category" => "Beer & Cider", "subcategory" => "Wheat Ale", "price" => "3.4", "volume" => "500", "alcohol_content" => "4.9", "country" => "Belgium", "url" => "https://www.lcbo.com/en/hoegaarden-667808"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Laker Ice", "brand" => "Laker", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "9.95", "volume" => "2130", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/laker-ice-10229"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Broadhead Brewing Pilsner", "brand" => "Broadhead Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.3", "country" => "Canada", "url" => "https://www.lcbo.com/en/broadhead-brewing-pilsner-17127"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Light", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "43.95", "volume" => "8184", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-light-906586"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Miller High Life", "brand" => "Miller", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "49.95", "volume" => "10650", "alcohol_content" => "4.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/miller-high-life-24811"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Palm Breweries Rodenbach Grand Cru", "brand" => "Rodenbach", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "3.05", "volume" => "330", "alcohol_content" => "6.0", "country" => "Belgium", "url" => "https://www.lcbo.com/en/palm-breweries-rodenbach-grand-cru-492207"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Fruit Market Mixed Pack", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Taster Packs", "price" => "22.95", "volume" => "2838", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-fruit-market-mixed-pack-25389"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hockley Dark", "brand" => "Hockley Valley Brewing", "category" => "Beer & Cider", "subcategory" => "Dark Ale", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/hockley-dark-34660"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lake of the Woods Lakeside Kolsch", "brand" => "Lake Of The Woods", "category" => "Beer & Cider", "subcategory" => "Lagered Ale", "price" => "19.75", "volume" => "2838", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/lake-of-the-woods-lakeside-kolsch-20045"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeping Giant Mr. Canoehead", "brand" => "Sleeping Giant", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.1", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeping-giant-mr-canoehead-570028"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Peroni Nastro Azzurro", "brand" => "Peroni Nastro Azzuro", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.35", "volume" => "500", "alcohol_content" => "5.1", "country" => "Italy", "url" => "https://www.lcbo.com/en/peroni-nastro-azzurro-143891"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Blood Brothers Paradise Lost Guava", "brand" => "Blood Brothers Brewing", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "6.5", "volume" => "473", "alcohol_content" => "6.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/blood-brothers-paradise-lost-guava-26067"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stiegl Grapefruit Radler", "brand" => "Stiegl", "category" => "Beer & Cider", "subcategory" => "Radler & Shandy", "price" => "3.45", "volume" => "500", "alcohol_content" => "2.5", "country" => "Austria", "url" => "https://www.lcbo.com/en/stiegl-grapefruit-radler-334052"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Brewery Peach of Mind", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Lagered Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-brewery-peach-of-mind-25052"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Manitoulin Brewing Killarney Cream Ale", "brand" => "Manitoulin Brewing", "category" => "Beer & Cider", "subcategory" => "Lagered Ale", "price" => "3.3", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/manitoulin-brewing-killarney-cream-ale-668277"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Perth Brewery Shandy Mac Fierce", "brand" => "Perth Brewery", "category" => "Beer & Cider", "subcategory" => "Radler & Shandy", "price" => "3.3", "volume" => "473", "alcohol_content" => "2.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/perth-brewery-shandy-mac-fierce-24571"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Amsterdam Space Invader IPA", "brand" => "Amsterdam", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/amsterdam-space-invader-ipa-573576"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Budweiser", "brand" => "Budweiser", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.9", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/budweiser-905976"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Partake Brewing Non-Alcoholic IPA", "brand" => "Partake Brewing", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic Beer", "price" => "2.0", "volume" => "355", "alcohol_content" => "0.3", "country" => "Canada", "url" => "https://www.lcbo.com/en/partake-brewing-non-alcoholic-ipa-13654"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Amsterdam Helles Golden Lager", "brand" => "Amsterdam", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.15", "volume" => "473", "alcohol_content" => "4.9", "country" => "Canada", "url" => "https://www.lcbo.com/en/amsterdam-helles-golden-lager-24666"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Publican House Brewery Yuzu Sour", "brand" => "Publican House Brewery", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/publican-house-brewery-yuzu-sour-24617"
        ]);
        DB::table('alcohols')->insert([
            "title" => "The Napanee Beer Company Mayday! Belgian Wheat Beer", "brand" => "The Napanee Beer Company", "category" => "Beer & Cider", "subcategory" => "Wheat Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "4.7", "country" => "Canada", "url" => "https://www.lcbo.com/en/the-napanee-beer-company-mayday-belgian-wheat-beer-26080"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sawdust City Gnarnia Lil' IPA", "brand" => "Sawdust City Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "4.2", "volume" => "473", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/sawdust-city-gnarnia-lil-ipa-19262"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Canadian", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "47.95", "volume" => "8520", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-canadian-905844"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Dark Fruit Gose", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "4.55", "volume" => "473", "alcohol_content" => "4.9", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-dark-fruit-gose-25693"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Walkerville City Cidery Argyle Apple Cider", "brand" => "Walkerville", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/walkerville-city-cidery-argyle-apple-cider-15173"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rickard's Red", "brand" => "Rickard'S Red", "category" => "Beer & Cider", "subcategory" => "Dark Ale", "price" => "3.05", "volume" => "473", "alcohol_content" => "5.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/rickard-s-red-16907"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Canadian", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "14.25", "volume" => "2046", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-canadian-900621"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Wellington Brewery Imperial Russian Stout", "brand" => "Wellington Brewery", "category" => "Beer & Cider", "subcategory" => "Stout & Porter", "price" => "3.95", "volume" => "473", "alcohol_content" => "8.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/wellington-brewery-imperial-russian-stout-296269"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Signal Brewing Wave Pale Ale", "brand" => "Signal Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "6.1", "country" => "Canada", "url" => "https://www.lcbo.com/en/signal-brewing-wave-pale-ale-14625"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Caledon Hills Brewing Companyhot August Nights", "brand" => "Caledon Hills", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/caledon-hills-brewing-companyhot-august-nights-26895"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nickel Brook Black Light All Night Stout", "brand" => "Nickel Brook", "category" => "Beer & Cider", "subcategory" => "Stout & Porter", "price" => "3.2", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/nickel-brook-cheeky-bastard-552687"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rainhard Brewing Armed N' Citra Dry Hopped Pale Ale", "brand" => "Rainhard Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.85", "volume" => "473", "alcohol_content" => "5.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/rainhard-brewing-armed-n-citra-dry-hopped-pale-ale-578872"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Market Brewing Co. Roam Hazy IPA", "brand" => "Market Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.95", "volume" => "473", "alcohol_content" => "6.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/market-brewing-co-roam-hazy-ipa-18321"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brickworks Ciderhouse Stadium Island Peach Cider", "brand" => "Brickworks Ciderhouse", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.5", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/brickworks-ciderhouse-stadium-island-peach-cider-478495"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Grand River Brewing Cliff Dive IPA", "brand" => "Grand River Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.4", "volume" => "473", "alcohol_content" => "4.8", "country" => "Canada", "url" => "https://www.lcbo.com/en/grand-river-brewing-cliff-dive-ipa-560060"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Corona Extra", "brand" => "Corona", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "4.85", "volume" => "710", "alcohol_content" => "4.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/corona-extra-22683"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cracked Canoe", "brand" => "Cracked Canoe", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "44.95", "volume" => "8520", "alcohol_content" => "3.5", "country" => "NULL", "url" => "https://www.lcbo.com/en/cracked-canoe-24898"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Toboggan Brewing Holy Roller Lager", "brand" => "Toboggan Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.7", "country" => "Canada", "url" => "https://www.lcbo.com/en/toboggan-brewing-holy-roller-lager-20046"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Furnace Room Brewery Mosaic Pale Ale", "brand" => "Furnace Room Brewery", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.75", "volume" => "473", "alcohol_content" => "5.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/furnace-room-brewery-mosaic-pale-ale-24551"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Skeleton Park Amber 6.6", "brand" => "Skeleton Crew Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "6.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/skeleton-park-amber-6-6-482059"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bobcaygeon Brewing Dockside", "brand" => "Bobcaygeon Brewing", "category" => "Beer & Cider", "subcategory" => "Dark Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/bobcaygeon-brewing-dockside-485870"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Lug Tread 2.5%", "brand" => "Beau's", "category" => "Beer & Cider", "subcategory" => "Lagered Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "2.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-lug-tread-2-5-17671"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sarah Cole Whip Cider", "brand" => "Sarah Cole", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.3", "country" => "Canada", "url" => "https://www.lcbo.com/en/sarah-cole-whip-cider-618132"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lowenbrau Original", "brand" => "Lowenbrau", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.0", "volume" => "473", "alcohol_content" => "5.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/lowenbrau-original-397638"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Seagram Cider", "brand" => "Seagrams", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.3", "country" => "Canada", "url" => "https://www.lcbo.com/en/seagram-cider-279539"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Old Milwaukee Ice", "brand" => "Old Milwaukee", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.0", "volume" => "473", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/old-milwaukee-ice-15401"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Niagara Cider Rose Gold Berry Soaked Cider", "brand" => "Niagara Cider Company", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.95", "volume" => "473", "alcohol_content" => "6.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/niagara-cider-rose-gold-berry-soaked-cider-16150"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Tiger Beer", "brand" => "Tiger", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.15", "volume" => "500", "alcohol_content" => "5.0", "country" => "Singapore", "url" => "https://www.lcbo.com/en/tiger-beer-537258"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill St. Blue Wave", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "4.8", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-st-blue-wave-25078"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Broadhead Amber Ale", "brand" => "Broadhead Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/broadhead-amber-ale-409268"
        ]);
        DB::table('alcohols')->insert([
            "title" => "South River Brewing Co. Rowdy Piper IPA", "brand" => "South River Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/south-river-brewing-co-rowdy-piper-ipa-23250"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Perth Brewery Easy Amber", "brand" => "Perth Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/perth-brewery-easy-amber-926964"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Steam Whistle Premium Pilsner", "brand" => "Steam Whistle", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "15.25", "volume" => "2130", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/steam-whistle-premium-pilsner-280081"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Walkerville Honest Lager", "brand" => "Walkerville Brewery", "category" => "Beer & Cider", "subcategory" => "Amber Lager", "price" => "3.0", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/walkerville-honest-lager-407650"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Silversmith Brewing Co The Black Lager", "brand" => "Silversmith Brewing", "category" => "Beer & Cider", "subcategory" => "Dark Lager", "price" => "3.65", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/silversmith-brewing-co-the-black-lager-14178"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Elora Brewing Friends Forever Pale Ale", "brand" => "Elora Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/elora-brewing-friends-forever-pale-ale-24573"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Moosehead Lager", "brand" => "Moosehead", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "16.95", "volume" => "2838", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/moosehead-lager-422345"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bitburger Premium Pilsner", "brand" => "Bitburger", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.8", "volume" => "500", "alcohol_content" => "5.0", "country" => "Germany", "url" => "https://www.lcbo.com/en/bitburger-premium-pilsner-394536"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sweetgrass Golden Ale", "brand" => "Sweetgrass", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.3", "volume" => "473", "alcohol_content" => "4.9", "country" => "Canada", "url" => "https://www.lcbo.com/en/sweetgrass-golden-ale-420356"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Spitfire Kentish Ale", "brand" => "Spitfire", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "2.65", "volume" => "500", "alcohol_content" => "4.2", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/spitfire-kentish-ale-402545"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bellwoods Brewery Brewery Jutsu Pale Ale", "brand" => "Bellwoods Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "4.5", "volume" => "473", "alcohol_content" => "5.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/bellwoods-brewery-jutsu-pale-ale-16051"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cowbell Brewing Co. Boxing Bruin IPA", "brand" => "Cowbell Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.3", "country" => "Canada", "url" => "https://www.lcbo.com/en/cowbell-brewing-co-boxing-bruin-ipa-548313"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stella Artois", "brand" => "Stella Artois", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "50.95", "volume" => "7920", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/stella-artois-17857"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beyond The Pale Saison Tropicale", "brand" => "Beyond The Pale", "category" => "Beer & Cider", "subcategory" => "Belgian Ale", "price" => "4.5", "volume" => "473", "alcohol_content" => "7.9", "country" => "Canada", "url" => "https://www.lcbo.com/en/beyond-the-pale-saison-tropicale-521914"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Quayle's Brewery Fiddle & Field Pale Ale", "brand" => "Quayle'S Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.25", "volume" => "355", "alcohol_content" => "5.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/quayle-s-brewery-raised-in-a-barn-23124"
        ]);
        DB::table('alcohols')->insert([
            "title" => "MacLean's Pale Ale", "brand" => "Maclean's", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/maclean-s-pale-ale-464081"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Parsons Brewing Westy Pale Ale", "brand" => "Parson Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.7", "volume" => "473", "alcohol_content" => "5.7", "country" => "Canada", "url" => "https://www.lcbo.com/en/parsons-brewing-westy-pale-ale-17273"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lost Craft Revivale", "brand" => "Lost Craft", "category" => "Beer & Cider", "subcategory" => "Lagered Ale", "price" => "3.15", "volume" => "473", "alcohol_content" => "4.8", "country" => "Canada", "url" => "https://www.lcbo.com/en/lost-craft-revivale-456996"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pabst Blue Ribbon", "brand" => "Pabst", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "23.95", "volume" => "5676", "alcohol_content" => "4.9", "country" => "Canada", "url" => "https://www.lcbo.com/en/pabst-blue-ribbon-566505"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Corona Extra", "brand" => "Corona", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "18.95", "volume" => "2838", "alcohol_content" => "4.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/corona-extra-17817"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Keller Premium Lager", "brand" => "Keller", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.25", "volume" => "500", "alcohol_content" => "5.0", "country" => "Belgium", "url" => "https://www.lcbo.com/en/keller-premium-lager-141242"
        ]);
        DB::table('alcohols')->insert([
            "title" => "The Red Thread Brewing Co Make Tracks Craft Lager", "brand" => "The Red Thread Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/the-red-thread-brewing-co-make-tracks-craft-lager-547026"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Corona Extra", "brand" => "Corona", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "30.5", "volume" => "3960", "alcohol_content" => "4.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/corona-extra-17849"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Corona Extra", "brand" => "Corona", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "4.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/corona-extra-17853"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Golden Pheasant Beer", "brand" => "Golden Pheasant", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.9", "volume" => "500", "alcohol_content" => "4.6", "country" => "Slovakia", "url" => "https://www.lcbo.com/en/golden-pheasant-beer-536789"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Trappistes Rochefort Triple Extra", "brand" => "Rochefort", "category" => "Beer & Cider", "subcategory" => "Belgian Ale", "price" => "4.3", "volume" => "330", "alcohol_content" => "7.5", "country" => "Belgium", "url" => "https://www.lcbo.com/en/trappistes-rochefort-triple-extra-20039"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nickel Brook Lemon Lime Sour Radler", "brand" => "Nickel Brook Brewery", "category" => "Beer & Cider", "subcategory" => "Radler & Shandy", "price" => "3.55", "volume" => "473", "alcohol_content" => "2.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/nickel-brook-lemon-lime-sour-radler-24569"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "46.95", "volume" => "9548", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-679779"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Session IPA", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.55", "volume" => "473", "alcohol_content" => "4.7", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-session-ipa-25076"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Organic Lager", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "28.95", "volume" => "4092", "alcohol_content" => "4.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-organic-lager-522847"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Clear Peach 2.0", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Flavoured & Spiced Beer", "price" => "3.0", "volume" => "473", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-clear-peach-2-0-20091"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Caledon Hills Brewing Buck's Town Bock", "brand" => "Caledon Hills Brewing", "category" => "Beer & Cider", "subcategory" => "Dark Lager", "price" => "4.0", "volume" => "473", "alcohol_content" => "7.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/caledon-hills-brewing-buck-s-town-bock-24576"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lakeport Pilsener", "brand" => "Lakeport", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "40.95", "volume" => "8184", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/lakeport-pilsener-696906"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Blanche De Chambly", "brand" => "Blanche De Chambly", "category" => "Beer & Cider", "subcategory" => "Wheat Ale", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/blanche-de-chambly-697698"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cameron's Coast to Coast Dry Hopped Lager", "brand" => "Cameron's", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/cameron-s-12-mile-lager-535229"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Light", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "47.95", "volume" => "8520", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-light-906644"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Blackburn Brewhouse Crick Water IPA", "brand" => "Blackburn Brew House", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.25", "volume" => "473", "alcohol_content" => "6.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/blackburn-brewhouse-crick-water-ipa-21995"
        ]);
        DB::table('alcohols')->insert([
            "title" => "MacLean's Grapefruit Lager", "brand" => "Maclean's Brewing", "category" => "Beer & Cider", "subcategory" => "Flavoured & Spiced Beer", "price" => "3.3", "volume" => "473", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/maclean-s-grapefruit-lager-26820"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Walkerville Easy Stout", "brand" => "Walkerville Brewery", "category" => "Beer & Cider", "subcategory" => "Stout & Porter", "price" => "3.3", "volume" => "473", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/walkerville-easy-stout-453985"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Canadian", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "29.95", "volume" => "5115", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-canadian-688135"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kirin Ichiban", "brand" => "Kirin Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/kirin-ichiban-17652"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bellwoods Brewery Roman Candle", "brand" => "Bellwoods Brewery", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "5.0", "volume" => "473", "alcohol_content" => "6.8", "country" => "Canada", "url" => "https://www.lcbo.com/en/bellwoods-brewery-roman-candle-16874"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Equals Brewing Shake Lager", "brand" => "Equals Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.0", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/equals-brewing-shake-lager-21817"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Radler", "brand" => "Beau's", "category" => "Beer & Cider", "subcategory" => "Radler & Shandy", "price" => "2.95", "volume" => "473", "alcohol_content" => "2.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-radler-20224"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Original Organic Lager", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "19.25", "volume" => "2838", "alcohol_content" => "4.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-original-organic-lager-516880"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kronenbourg 1664 Blanc", "brand" => "Kronenbourg 1664", "category" => "Beer & Cider", "subcategory" => "Wheat Ale", "price" => "3.35", "volume" => "500", "alcohol_content" => "5.0", "country" => "France", "url" => "https://www.lcbo.com/en/kronenbourg-1664-blanc-379958"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hacker Pschorr Keller Bier", "brand" => "Hacker Pschorr", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.6", "volume" => "500", "alcohol_content" => "5.5", "country" => "Germany", "url" => "https://www.lcbo.com/en/hacker-pschorr-keller-bier-16936"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Black Raspberry Thunder", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.75", "volume" => "473", "alcohol_content" => "6.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-black-raspberry-thunder-648956"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Canadian", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "43.95", "volume" => "8184", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-canadian-900779"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Royal City Exhibition Session IPA", "brand" => "Royal City", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/royal-city-exhibition-session-ipa-13660"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mackinnon Brewing 8 Man English Pale Ale", "brand" => "MacKinnon Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/mackinnon-brewing-8-man-english-pale-ale-453449"
        ]);
        DB::table('alcohols')->insert([
            "title" => "IX Poets Brewing Hazy Mariner Cloudy IPA", "brand" => "IX Poets Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.3", "country" => "Canada", "url" => "https://www.lcbo.com/en/ix-poets-brewing-hazy-mariner-cloudy-ipa-18342"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Carling Old Vienna", "brand" => "Carling", "category" => "Beer & Cider", "subcategory" => "Amber Lager", "price" => "28.95", "volume" => "5325", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/carling-old-vienna-360446"
        ]);
        DB::table('alcohols')->insert([
            "title" => "D'ont Poke The Bear Cider", "brand" => "D'Ont Poke The Bear", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/d-ont-poke-the-bear-cider-573428"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Leffe Brune", "brand" => "Leffe", "category" => "Beer & Cider", "subcategory" => "Belgian Ale", "price" => "15.95", "volume" => "1980", "alcohol_content" => "6.5", "country" => "Belgium", "url" => "https://www.lcbo.com/en/leffe-brune-68049"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cowbell Brewing Co. Hazy Days IPA", "brand" => "Cowbell Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.5", "volume" => "473", "alcohol_content" => "6.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/cowbell-brewing-co-hazy-days-ipa-15116"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Shillow Beer Company Beer Snob", "brand" => "Shillow", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "6.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/shillow-beer-company-beer-snob-528513"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "29.95", "volume" => "5115", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-612515"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pommies Cider", "brand" => "Pommies", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/pommies-cider-453118"
        ]);
        DB::table('alcohols')->insert([
            "title" => "GoodLot Farmstead Ale", "brand" => "GoodLot Farmstead Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "6.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/goodlot-farmstead-ale-569228"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Guinness Blonde American Lager", "brand" => "Guinness", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.85", "volume" => "473", "alcohol_content" => "5.0", "country" => "United States", "url" => "https://www.lcbo.com/en/guinness-blonde-american-lager-433623"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Michelob Ultra", "brand" => "Michelob", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "58.95", "volume" => "10650", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/michelob-ultra-15596"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bellwoods Brewery Wizard Wolf Pale Ale", "brand" => "Beau's Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "4.5", "volume" => "473", "alcohol_content" => "4.8", "country" => "Canada", "url" => "https://www.lcbo.com/en/bellwoods-brewery-wizard-wolf-pale-ale-26920"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Chimay Premiere", "brand" => "Chimay", "category" => "Beer & Cider", "subcategory" => "Belgian Ale", "price" => "9.05", "volume" => "750", "alcohol_content" => "7.0", "country" => "Belgium", "url" => "https://www.lcbo.com/en/chimay-premiere-198069"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brava Premium Lager", "brand" => "Brava", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "40.95", "volume" => "8184", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/brava-premium-lager-616946"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brickworks Ciderhouse Lemonade Cider Radler", "brand" => "Brickworks Ciderhouse", "category" => "Beer & Cider", "subcategory" => "Radler & Shandy", "price" => "3.5", "volume" => "473", "alcohol_content" => "3.3", "country" => "Canada", "url" => "https://www.lcbo.com/en/brickworks-ciderhouse-lemonade-cider-radler-10574"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Miller High Life", "brand" => "Miller", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.3", "volume" => "473", "alcohol_content" => "4.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/miller-high-life-562603"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brickworks Ciderhouse Mix Pack", "brand" => "Brickworks Ciderhouse", "category" => "Beer & Cider", "subcategory" => "Mixed Pack Cider", "price" => "20.95", "volume" => "2838", "alcohol_content" => "6.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/brickworks-ciderhouse-mix-pack-25425"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cameron's Ambear Red Ale", "brand" => "Cameron's", "category" => "Beer & Cider", "subcategory" => "Dark Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/cameron-s-ambear-red-ale-445072"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beyond The Pale Pink Fuzz", "brand" => "Beyond The Pale", "category" => "Beer & Cider", "subcategory" => "Wheat Ale", "price" => "3.85", "volume" => "473", "alcohol_content" => "6.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/beyond-the-pale-pink-fuzz-421412"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Abbot Ale", "brand" => "Abbot", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "2.45", "volume" => "500", "alcohol_content" => "5.0", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/abbot-ale-16329"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Moosehead Radler Mixed Pack", "brand" => "Moosehead", "category" => "Beer & Cider", "subcategory" => "Radler & Shandy", "price" => "29.95", "volume" => "4260", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/moosehead-radler-mixed-pack-24897"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nickel Brook Head Stock West Coast-Style IPA", "brand" => "Nickel Brook", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.6", "volume" => "473", "alcohol_content" => "7.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/nickel-brook-head-stock-ipa-275172"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brew Aid Game Face Lager", "brand" => "Tomorrow Brew Co.", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/tomorrow-brew-co-brew-aid-18322"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Trestle Brewing Company Golden Ale", "brand" => "Trestle Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/trestle-brewing-company-golden-ale-540245"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Deschutes King Crispy Pilsner", "brand" => "Deschutes", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "12.9", "volume" => "1420", "alcohol_content" => "4.8", "country" => "United States", "url" => "https://www.lcbo.com/en/deschutes-king-crispy-pilsner-25021"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Somersby Blackberry Cider", "brand" => "Somersby", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/somersby-blackberry-cider-15564"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Market Brewing Bear Hug IPA", "brand" => "Market Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "4.0", "volume" => "473", "alcohol_content" => "7.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/market-brewing-bear-hug-ipa-513010"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Karbon Brewing Co. J.E.D.I Hazy IPA", "brand" => "Karbon Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/karbon-brewing-co-j-e-d-i-hazy-ipa-22575"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Amsterdam Neon Haze Hazy IPA", "brand" => "Amsterdam", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.7", "country" => "Canada", "url" => "https://www.lcbo.com/en/amsterdam-neon-haze-hazy-ipa-16896"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Colllingwood Freestyle Tiki Time Session IPA", "brand" => "Collingwood Brewery", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.55", "volume" => "473", "alcohol_content" => "4.4", "country" => "Canada", "url" => "https://www.lcbo.com/en/colllingwood-freestyle-tiki-time-session-ipa-27065"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bourgogne Des Flanders Blond", "brand" => "Bourgogne Des Flanders", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "3.55", "volume" => "330", "alcohol_content" => "5.0", "country" => "Belgium", "url" => "https://www.lcbo.com/en/bourgogne-des-flanders-blond-25314"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Powerhouse Brewing Homecoming Pale Ale", "brand" => "Powerhouse Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/powerhouse-brewing-homecoming-pale-ale-11137"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Eagle Banana Bread Beer", "brand" => "Charles Wells", "category" => "Beer & Cider", "subcategory" => "Flavoured & Spiced Beer", "price" => "3.25", "volume" => "500", "alcohol_content" => "5.2", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/eagle-banana-bread-beer-516682"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Henninger Lager", "brand" => "Henninger", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "13.6", "volume" => "3000", "alcohol_content" => "4.8", "country" => "Germany", "url" => "https://www.lcbo.com/en/henninger-lager-666883"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Louis Cifer Coconut Lemongrass Thai-Pa", "brand" => "Louis Cifer", "category" => "Beer & Cider", "subcategory" => "Flavoured & Spiced Beer", "price" => "3.35", "volume" => "473", "alcohol_content" => "6.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/louis-cifer-coconut-lemongrass-thai-pa-11300"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Corona Extra", "brand" => "Corona", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "53.95", "volume" => "8520", "alcohol_content" => "4.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/corona-extra-20634"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rolling Rock", "brand" => "Rolling Rock", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "17.5", "volume" => "2838", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/rolling-rock-496950"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Magners Original Irish Cider", "brand" => "Magners", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "3.45", "volume" => "500", "alcohol_content" => "4.5", "country" => "Ireland", "url" => "https://www.lcbo.com/en/magners-original-irish-cider-699389"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Orleans Brewing Co. Kolsch Me Ousside", "brand" => "Orleans Brewing", "category" => "Beer & Cider", "subcategory" => "Lagered Ale", "price" => "3.2", "volume" => "473", "alcohol_content" => "4.8", "country" => "Canada", "url" => "https://www.lcbo.com/en/orleans-brewing-co-kolsch-me-ousside-561001"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brickworks Cider Batch 1904", "brand" => "Brickworks Ciderhouse", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "19.5", "volume" => "2838", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/brickworks-cider-batch-1904-697318"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Eastbound Brewing Electro Tonic Juniper Saison", "brand" => "Eastbound Brewing", "category" => "Beer & Cider", "subcategory" => "Belgian Ale", "price" => "3.25", "volume" => "355", "alcohol_content" => "6.1", "country" => "Canada", "url" => "https://www.lcbo.com/en/eastbound-brewing-electro-tonic-juniper-saison-20027"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Walkerville Geronimo IPA", "brand" => "Walkerville Brewery", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.3", "volume" => "473", "alcohol_content" => "6.3", "country" => "Canada", "url" => "https://www.lcbo.com/en/walkerville-geronimo-ipa-499145"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Labatt Blue Light", "brand" => "Labatt", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "40.95", "volume" => "8184", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/labatt-blue-light-904276"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Carlsberg Lite", "brand" => "Carlsberg", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.55", "volume" => "500", "alcohol_content" => "4.0", "country" => "Denmark", "url" => "https://www.lcbo.com/en/carlsberg-lite-616334"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rochefort 8", "brand" => "Rochefort", "category" => "Beer & Cider", "subcategory" => "Belgian Ale", "price" => "3.8", "volume" => "330", "alcohol_content" => "9.2", "country" => "Belgium", "url" => "https://www.lcbo.com/en/rochefort-8-676569"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Rapids Brewing Navigator IPA", "brand" => "Black Rapids Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.75", "volume" => "473", "alcohol_content" => "4.9", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-rapids-brewing-navigator-ipa-20216"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cool Beer Blonde Lager", "brand" => "Cool Beer", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "6.5", "volume" => "1364", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/cool-beer-blonde-lager-139089"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beyond the Pale Clean Cut", "brand" => "Beyond The Pale", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/beyond-the-pale-clean-cut-646620"
        ]);
        DB::table('alcohols')->insert([
            "title" => "High Park Rings of Saturn Hazy IPA", "brand" => "High Park Brewery", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.35", "volume" => "473", "alcohol_content" => "6.5", "country" => "NULL", "url" => "https://www.lcbo.com/en/high-park-rings-of-saturn-hazy-ipa-25046"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Miller High Life", "brand" => "Miller", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "12.0", "volume" => "2130", "alcohol_content" => "4.6", "country" => "United States", "url" => "https://www.lcbo.com/en/miller-high-life-560912"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Boxer Ice", "brand" => "Boxer", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.85", "volume" => "710", "alcohol_content" => "5.5", "country" => "United States", "url" => "https://www.lcbo.com/en/boxer-ice-184143"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Frank Brewing Sunshine IPA", "brand" => "Frank Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.35", "volume" => "473", "alcohol_content" => "6.1", "country" => "Canada", "url" => "https://www.lcbo.com/en/frank-brewing-sunshine-ipa-17294"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Perth Brewery Hop Side IPA", "brand" => "Perth Brewery", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/perth-brewery-hop-side-ipa-10893"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ashton Brewing Blueberry Wheat", "brand" => "Ashton Brewery", "category" => "Beer & Cider", "subcategory" => "Wheat Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/ashton-brewing-blueberry-wheat-13254"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lake Of Bays Paddle On Session IPA", "brand" => "Lake of Bays Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/lake-of-bays-paddle-on-session-ipa-576538"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Creemore Summer Collection Pack", "brand" => "Creemore Springs", "category" => "Beer & Cider", "subcategory" => "Taster Packs", "price" => "19.25", "volume" => "2838", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/creemore-summer-collection-pack-25058"
        ]);
        DB::table('alcohols')->insert([
            "title" => "High Park Brewery Across The Pond English Pale Ale", "brand" => "High Park Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.15", "volume" => "473", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/high-park-brewery-across-the-pond-english-pale-ale-481069"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Country Vibes Amber Lagered Ale", "brand" => "Beau's", "category" => "Beer & Cider", "subcategory" => "Lagered Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.7", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-country-vibes-amber-lagered-ale-19269"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Budweiser", "brand" => "Budweiser", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "16.5", "volume" => "2838", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/budweiser-311787"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeping Giant Northern Logger", "brand" => "Sleeping Giant", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.2", "volume" => "473", "alcohol_content" => "4.9", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeping-giant-northern-logger-445734"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sinha Stout", "brand" => "Sinha", "category" => "Beer & Cider", "subcategory" => "Stout & Porter", "price" => "3.1", "volume" => "330", "alcohol_content" => "8.8", "country" => "Sri Lanka", "url" => "https://www.lcbo.com/en/sinha-stout-136978"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bighead Amber - 100% Ontario Organic Hops", "brand" => "GoodLot Farmstead Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/bighead-amber-100-ontario-organic-hops-15871"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Godspeed Brewery Yuzu Saison with Japanese Citrus", "brand" => "Godspeed Brewery", "category" => "Beer & Cider", "subcategory" => "Belgian Ale", "price" => "3.95", "volume" => "355", "alcohol_content" => "4.1", "country" => "Canada", "url" => "https://www.lcbo.com/en/godspeed-brewery-yuzu-saison-with-japanese-citrus-18826"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lech Beer", "brand" => "Lech", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.55", "volume" => "500", "alcohol_content" => "5.0", "country" => "Poland", "url" => "https://www.lcbo.com/en/lech-beer-676775"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stonehooker Brewing Co. Broad Reach", "brand" => "Stonehooker Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.55", "volume" => "473", "alcohol_content" => "5.4", "country" => "Canada", "url" => "https://www.lcbo.com/en/stonehooker-brewing-co-broad-reach-917872"
        ]);
        DB::table('alcohols')->insert([
            "title" => "All or Nothing Brewhouse Take a Break Tropical Double IIPA", "brand" => "All Or Nothing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.55", "volume" => "473", "alcohol_content" => "6.8", "country" => "Canada", "url" => "https://www.lcbo.com/en/all-or-nothing-brewhouse-take-a-break-tropical-double-iipa-20026"
        ]);
        DB::table('alcohols')->insert([
            "title" => "London Brewing 4ganic Mix Pack", "brand" => "London Brewing", "category" => "Beer & Cider", "subcategory" => "Taster Packs", "price" => "13.95", "volume" => "1892", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/london-brewing-4ganic-mix-pack-26696"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Tread Lightly", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "17.95", "volume" => "2838", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-tread-lightly-19994"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Big Rig Premium Pilsner", "brand" => "Big Rig Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/big-rig-premium-pilsner-583070"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Danforth Brewery Viaduct IPA", "brand" => "Danforth Brewery", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.25", "volume" => "473", "alcohol_content" => "6.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/danforth-brewery-viaduct-ipa-495655"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Oak Tropical Situation Pineapple APA", "brand" => "Black Oak", "category" => "Beer & Cider", "subcategory" => "Flavoured & Spiced Beer", "price" => "3.55", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-oak-tropical-situation-pineapple-apa-20028"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bobcaygeon Brewing Northern Lights", "brand" => "Bobcaygeon Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.75", "volume" => "473", "alcohol_content" => "6.1", "country" => "Canada", "url" => "https://www.lcbo.com/en/bobcaygeon-brewing-northern-lights-120626"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Furnace Room Chicken Man Pale Ale", "brand" => "Furnace Room Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.6", "volume" => "473", "alcohol_content" => "5.4", "country" => "Canada", "url" => "https://www.lcbo.com/en/furnace-room-chicken-man-pale-ale-15980"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Powerhouse Brewing Odd Stacks New England DIPA", "brand" => "Powerhouse Brewery", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.95", "volume" => "473", "alcohol_content" => "7.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/powerhouse-brewing-odd-stacks-new-england-dipa-23510"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bancroft Brewing Rusty Husky", "brand" => "Bancroft Brewing", "category" => "Beer & Cider", "subcategory" => "Dark Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/bancroft-brewing-rusty-husky-13822"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Spearhead Hawaiian Style Pale Ale", "brand" => "Spearhead Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "6.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/spearhead-hawaiian-style-pale-ale-497438"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Bellows Beach Freak", "brand" => "Black Bellows", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "4.0", "volume" => "473", "alcohol_content" => "5.1", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-bellows-beach-freak-20813"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Silversmith Brewing Born Again Helles Lager", "brand" => "Silversmith Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.3", "volume" => "473", "alcohol_content" => "4.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/silversmith-brewing-born-again-helles-lager-20030"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brickworks Ciderhouse Raspberry Peach Cider", "brand" => "Brickworks Ciderhouse", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/brickworks-ciderhouse-raspberry-peach-cider-19966"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jackass Brewing Sunkiss NEIPA", "brand" => "Jackass Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/jackass-brewing-sunkiss-neipa-24474"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sol", "brand" => "Sol", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "14.95", "volume" => "1980", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/sol-19442"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Warsteiner Premium Pilsener", "brand" => "Warsteiner", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.85", "volume" => "500", "alcohol_content" => "4.8", "country" => "Germany", "url" => "https://www.lcbo.com/en/warsteiner-premium-pilsener-556720"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Miller Genuine Draft", "brand" => "Miller", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "17.25", "volume" => "2838", "alcohol_content" => "4.7", "country" => "Canada", "url" => "https://www.lcbo.com/en/miller-genuine-draft-558932"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Canadian", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "25.5", "volume" => "4092", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-canadian-900118"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Left Field Brewery Ice Cold Beer", "brand" => "Left Field Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "2.8", "volume" => "355", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/left-field-brewery-ice-cold-beer-17910"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pabst Olde English 800", "brand" => "Pabst", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "7.5", "volume" => "1180", "alcohol_content" => "7.9", "country" => "United States", "url" => "https://www.lcbo.com/en/pabst-olde-english-800-217182"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hollandia Lager", "brand" => "Hollandia", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "8.95", "volume" => "2000", "alcohol_content" => "5.0", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/hollandia-lager-14996"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Full Beard Brewing Lion's Mane Amber Ale", "brand" => "Full Beard Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/full-beard-brewing-lion-s-mane-amber-ale-24575"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Side Launch Brewery Any Day Light IPA", "brand" => "Side Launch", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/side-launch-brewery-any-day-light-ipa-17406"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Redline Brewhouse Far From Home Vermont IPA", "brand" => "Redline Brewhouse", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.55", "volume" => "473", "alcohol_content" => "6.7", "country" => "Canada", "url" => "https://www.lcbo.com/en/redline-brewhouse-far-from-home-vermont-ipa-24564"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Publican House High Noon", "brand" => "The Publican House", "category" => "Beer & Cider", "subcategory" => "Wheat Ale", "price" => "3.3", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/publican-house-high-noon-465211"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Toboggan Brewing Lunatic Fridge IPA", "brand" => "Toboggan Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/toboggan-brewing-lunatic-fridge-ipa-470138"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stockyards Brewing Iron Horse Trail IPA", "brand" => "Stockyards Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.65", "volume" => "473", "alcohol_content" => "6.3", "country" => "Canada", "url" => "https://www.lcbo.com/en/stockyards-brewing-iron-horse-trail-ipa-21537"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kensington Brewing Company Another Hazy Beer", "brand" => "Kensington Brewery", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.8", "country" => "Canada", "url" => "https://www.lcbo.com/en/kensington-brewing-company-another-hazy-beer-18331"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Local Organic", "brand" => "Beau's", "category" => "Beer & Cider", "subcategory" => "Lagered Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-local-organic-19358"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cowbell Brewing Co. Shindig Huron County Lager", "brand" => "Cowbell Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/cowbell-brewing-co-shindig-huron-county-lager-576900"
        ]);
        DB::table('alcohols')->insert([
            "title" => "No Name Beer", "brand" => "No Name", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "9.9", "volume" => "2046", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/no-name-beer-110320"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Laker Premium Lager", "brand" => "Laker", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "40.95", "volume" => "8184", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/laker-premium-lager-910042"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Heineken", "brand" => "Heineken", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "4.75", "volume" => "650", "alcohol_content" => "5.0", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/heineken-245852"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brickworks Ciderhouse Pineapple Agave Cider", "brand" => "Brickworks Ciderhouse", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/brickwoworks-ciderhouse-pineapple-agave-cider-25898"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Labatt Blue", "brand" => "Labatt", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "12.5", "volume" => "2046", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/labatt-blue-900423"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kronenbourg 1664", "brand" => "Kronenbourg 1664", "category" => "Beer & Cider", "subcategory" => "Wheat Ale", "price" => "3.35", "volume" => "500", "alcohol_content" => "5.0", "country" => "France", "url" => "https://www.lcbo.com/en/kronenbourg-1664-506741"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kingfisher Lager", "brand" => "Kingfisher", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.3", "volume" => "330", "alcohol_content" => "4.9", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/kingfisher-lager-629550"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Ultra", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "17.25", "volume" => "2838", "alcohol_content" => "3.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-ultra-14066"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Light", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "30.5", "volume" => "5325", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-light-247346"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Warka Beer", "brand" => "Warka", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.8", "volume" => "500", "alcohol_content" => "6.5", "country" => "Poland", "url" => "https://www.lcbo.com/en/warka-beer-676080"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pabst Blue Ribbon", "brand" => "Pabst", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "35.5", "volume" => "7100", "alcohol_content" => "4.9", "country" => "Canada", "url" => "https://www.lcbo.com/en/pabst-blue-ribbon-286005"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Original Draught", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "25.5", "volume" => "4092", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-original-draught-612309"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Libra Non Alcoholic Pale Ale", "brand" => "Upstreet Brewing", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic Beer", "price" => "10.95", "volume" => "1420", "alcohol_content" => "0.04", "country" => "Canada", "url" => "https://www.lcbo.com/en/libra-non-alcoholic-pale-ale-25636"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pump House Crafty Radler", "brand" => "Pump House", "category" => "Beer & Cider", "subcategory" => "Radler & Shandy", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.7", "country" => "Canada", "url" => "https://www.lcbo.com/en/pump-house-crafty-radler-556753"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Glutenberg Blonde", "brand" => "Glutenburg", "category" => "Beer & Cider", "subcategory" => "Gluten-Free Beer", "price" => "12.95", "volume" => "1892", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/glutenberg-blonde-519082"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pabst Blue Ribbon 5.9%", "brand" => "Pabst", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "12.95", "volume" => "2838", "alcohol_content" => "5.9", "country" => "Canada", "url" => "https://www.lcbo.com/en/pabst-blue-ribbon-5-9-378158"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Prince Eddys So Many Friends IPA", "brand" => "Prince Eddy'S Brewing Co", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.95", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/prince-eddys-so-many-friends-ipa-15876"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Perth Brewery Last Duel Lager", "brand" => "Perth Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/perth-brewery-last-duel-lager-511477"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "16.5", "volume" => "2838", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-311779"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Clifford Brewing Porter", "brand" => "Clifford Brewing", "category" => "Beer & Cider", "subcategory" => "Stout & Porter", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.9", "country" => "Canada", "url" => "https://www.lcbo.com/en/clifford-brewing-porter-481143"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busch", "brand" => "Busch", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "42.95", "volume" => "8520", "alcohol_content" => "4.7", "country" => "Canada", "url" => "https://www.lcbo.com/en/busch-286021"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Whitewater Brewing Co. Legion Lager", "brand" => "Whitewater Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/whitewater-brewing-co-legion-lager-519777"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Duvel Beer", "brand" => "Duvel", "category" => "Beer & Cider", "subcategory" => "Belgian Ale", "price" => "4.15", "volume" => "330", "alcohol_content" => "8.5", "country" => "Belgium", "url" => "https://www.lcbo.com/en/duvel-beer-194431"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Budweiser", "brand" => "Budweiser", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "47.95", "volume" => "8520", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/budweiser-906354"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busch", "brand" => "Busch", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "12.5", "volume" => "2130", "alcohol_content" => "4.7", "country" => "Canada", "url" => "https://www.lcbo.com/en/busch-696146"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Labatt Blue Light", "brand" => "Labatt", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "28.5", "volume" => "5115", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/labatt-blue-light-218149"
        ]);
        DB::table('alcohols')->insert([
            "title" => "DAB Maibock", "brand" => "DAB", "category" => "Beer & Cider", "subcategory" => "Dark Lager", "price" => "2.8", "volume" => "500", "alcohol_content" => "7.0", "country" => "Germany", "url" => "https://www.lcbo.com/en/dab-maibock-346247"
        ]);
        DB::table('alcohols')->insert([
            "title" => "The Brick Brewing LandShark Lager", "brand" => "Landshark", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "47.95", "volume" => "8520", "alcohol_content" => "4.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/the-brick-brewing-landshark-lager-609883"
        ]);
        DB::table('alcohols')->insert([
            "title" => "No Boats On Sunday Peach Cider", "brand" => "No Boats On Sunday", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.85", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/no-boats-on-sunday-peach-cider-19981"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Tyskie Beer", "brand" => "Tyskie", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.8", "volume" => "500", "alcohol_content" => "5.6", "country" => "Poland", "url" => "https://www.lcbo.com/en/tyskie-beer-696864"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Asahi Super Dry", "brand" => "Asahi", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.15", "volume" => "500", "alcohol_content" => "5.0", "country" => "Japan", "url" => "https://www.lcbo.com/en/asahi-super-dry-572313"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Longtooth Pale Ale", "brand" => "Longtooth", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.2", "volume" => "473", "alcohol_content" => "5.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/longtooth-pale-ale-13823"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bancroft Brewing Sawmill Lager", "brand" => "Bancroft Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/bancroft-brewing-sawmill-lager-18313"
        ]);
        DB::table('alcohols')->insert([
            "title" => "London Brewing Organic Lager", "brand" => "London Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.7", "country" => "Canada", "url" => "https://www.lcbo.com/en/london-brewing-organic-lager-635300"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Gosser Beer", "brand" => "Gosser", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.35", "volume" => "500", "alcohol_content" => "5.2", "country" => "Austria", "url" => "https://www.lcbo.com/en/gosser-beer-469262"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Caledon Hills Brewing Co. Premium Lager", "brand" => "Caledon Hills", "category" => "Beer & Cider", "subcategory" => "Amber Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/caledon-hills-brewing-co-premium-lager-541060"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Society of Beer Drinking Ladies Raspberry Lemonade", "brand" => "Society of Beer Drinking Ladies", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "3.7", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/society-of-beer-drinking-ladies-raspberry-lemonade-24615"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Steam Whistle Premium Pilsner", "brand" => "Steam Whistle", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "15.25", "volume" => "2046", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/steam-whistle-premium-pilsner-547646"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Trestle Brewing Co. 30,000 Islands IPA", "brand" => "Trestle Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.75", "volume" => "473", "alcohol_content" => "6.3", "country" => "Canada", "url" => "https://www.lcbo.com/en/trestle-brewing-co-30-000-islands-ipa-110148"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Dominion City Sunsplit IPA", "brand" => "Dominion City Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "5.1", "volume" => "473", "alcohol_content" => "6.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/dominion-city-sunsplit-ipa-26883"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Left Field Brewery Hello, Friends! IPA", "brand" => "Left Field Brewery", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.8", "volume" => "355", "alcohol_content" => "6.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/left-field-brewery-hello-friends-ipa-24583"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Tsingtao Beer", "brand" => "Tsingtao", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "11.5", "volume" => "1980", "alcohol_content" => "4.5", "country" => "China", "url" => "https://www.lcbo.com/en/tsingtao-beer-293787"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Light", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.9", "volume" => "473", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-light-906669"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kona Hanalei IPA", "brand" => "Kona Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "17.05", "volume" => "2130", "alcohol_content" => "4.5", "country" => "United States", "url" => "https://www.lcbo.com/en/kona-hanalei-ipa-15606"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Paulaner Salvator Doppelbock", "brand" => "Paulaner", "category" => "Beer & Cider", "subcategory" => "Dark Lager", "price" => "3.3", "volume" => "500", "alcohol_content" => "7.9", "country" => "Germany", "url" => "https://www.lcbo.com/en/paulaner-salvator-doppelbock-499103"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Thornbury Village Ladder Run Amber Lager", "brand" => "Thornbury", "category" => "Beer & Cider", "subcategory" => "Amber Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "4.8", "country" => "Canada", "url" => "https://www.lcbo.com/en/thornbury-village-ladder-run-amber-lager-418848"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Side Launch Wheat Beer", "brand" => "Side Launch", "category" => "Beer & Cider", "subcategory" => "Wheat Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.3", "country" => "Canada", "url" => "https://www.lcbo.com/en/side-launch-wheat-beer-10075"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Labatt Blue", "brand" => "Labatt", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "49.95", "volume" => "10650", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/labatt-blue-15091"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lake Of Bays Low Tide 90 Calorie IPA", "brand" => "Lake of Bays Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.25", "volume" => "473", "alcohol_content" => "2.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/lake-of-bays-low-tide-zero-ibu-ipa-14651"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Riverhead Cerveza Mexican Lager", "brand" => "Riverhead Brewing Company Ltd", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/riverhead-cerveza-mexican-lager-20020"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Okocim Mocne", "brand" => "Okocim", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.95", "volume" => "500", "alcohol_content" => "7.0", "country" => "Poland", "url" => "https://www.lcbo.com/en/okocim-mocne-199851"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hop City Barking Squirrel Lager", "brand" => "Hop City Brewing", "category" => "Beer & Cider", "subcategory" => "Amber Lager", "price" => "3.3", "volume" => "473", "alcohol_content" => "4.8", "country" => "Canada", "url" => "https://www.lcbo.com/en/hop-city-barking-squirrel-lager-267773"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Honey Brown Lager", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Amber Lager", "price" => "27.95", "volume" => "4092", "alcohol_content" => "5.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-honey-brown-lager-681403"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Whitewater Brewing Co. Blood Moon Orange Sour", "brand" => "Whitewater Brewing", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "4.8", "country" => "Canada", "url" => "https://www.lcbo.com/en/whitewater-brewing-co-blood-moon-orange-sour-11226"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Overflow Brewing Bangkok Crosswalk", "brand" => "Overflow Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/overflow-brewing-bangkok-crosswalk-13685"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bobcaygeon Brewing Amplitude Raspberry Sour", "brand" => "Bobcaygeon Brewing", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "4.45", "volume" => "473", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/bobcaygeon-brewing-amplitude-raspberry-sour-24618"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Blood Brothers Auto Pop Cherry Cola", "brand" => "Blood Brothers Brewing", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "4.95", "volume" => "473", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/blood-brothers-auto-pop-cherry-cola-24622"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collingwood Brewery Downhill Pale Ale", "brand" => "Collingwood Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.4", "country" => "Canada", "url" => "https://www.lcbo.com/en/collingwood-brewery-downhill-pale-ale-21271"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rhuby Social - Strawberry Rhubarb Witbier", "brand" => "Upstreet Craft Brewing", "category" => "Beer & Cider", "subcategory" => "Wheat Ale", "price" => "4.15", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/rhuby-social-strawberry-rhubarb-witbier-25617"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muddy York Gaslight Helles", "brand" => "Muddy York Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.4", "country" => "Canada", "url" => "https://www.lcbo.com/en/muddy-york-gaslight-helles-570176"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busch", "brand" => "Busch", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "23.95", "volume" => "5676", "alcohol_content" => "4.7", "country" => "Canada", "url" => "https://www.lcbo.com/en/busch-568162"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ashton Brewing Amber Ale", "brand" => "Ashton Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/ashton-brewing-amber-ale-13237"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Porter Porter", "brand" => "Beau's", "category" => "Beer & Cider", "subcategory" => "Stout & Porter", "price" => "3.65", "volume" => "473", "alcohol_content" => "5.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-porter-porter-22221"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Spaten", "brand" => "Spaten", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.5", "volume" => "473", "alcohol_content" => "5.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/spaten-666743"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kokanee", "brand" => "Kokanee", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "14.95", "volume" => "2130", "alcohol_content" => "5.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/kokanee-904664"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Swan Brewing IPA", "brand" => "Black Swan Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.35", "volume" => "355", "alcohol_content" => "6.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-swan-brewing-ipa-21521"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busch Lager", "brand" => "Busch", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.0", "volume" => "473", "alcohol_content" => "4.7", "country" => "Canada", "url" => "https://www.lcbo.com/en/busch-lager-15303"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Great Lakes Brewery Sunnyside Session IPA", "brand" => "Great Lakes Brewery", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.0", "volume" => "473", "alcohol_content" => "3.9", "country" => "Canada", "url" => "https://www.lcbo.com/en/great-lakes-brewery-sunnyside-session-ipa-467019"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Peroni Nastro Azzurro Slim Can", "brand" => "Peroni Nastro Azzuro", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "15.35", "volume" => "1980", "alcohol_content" => "5.1", "country" => "Italy", "url" => "https://www.lcbo.com/en/peroni-nastro-azzurro-slim-can-19923"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Guinness Draught", "brand" => "Guinness", "category" => "Beer & Cider", "subcategory" => "Stout & Porter", "price" => "23.95", "volume" => "3520", "alcohol_content" => "4.2", "country" => "Ireland", "url" => "https://www.lcbo.com/en/guinness-draught-554469"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sons of Kent Brewing 8 Track XPA", "brand" => "Sons Of Kent", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "5.7", "country" => "Canada", "url" => "https://www.lcbo.com/en/sons-of-kent-brewing-8-track-xpa-570325"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Canadian", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.9", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-canadian-904409"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Old Milwaukee", "brand" => "Old Milwaukee", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "11.95", "volume" => "2838", "alcohol_content" => "4.9", "country" => "Canada", "url" => "https://www.lcbo.com/en/old-milwaukee-15402"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stone House Premium Czech Pilsner", "brand" => "Stone House Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.75", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/stone-house-premium-czech-pilsner-23249"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Waterloo Pineapple Radler", "brand" => "Waterloo Brewing", "category" => "Beer & Cider", "subcategory" => "Radler & Shandy", "price" => "3.25", "volume" => "473", "alcohol_content" => "2.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/waterloo-pineapple-radler-15100"
        ]);
        DB::table('alcohols')->insert([
            "title" => "James Ready 5.5", "brand" => "James Ready", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "40.95", "volume" => "8184", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/james-ready-5-5-679738"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sapporo Premium Beer", "brand" => "Sapporo", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.4", "volume" => "500", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/sapporo-premium-beer-201293"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Wellington Brewery Special Pale Ale", "brand" => "Wellington Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/wellington-brewery-special-pale-ale-190439"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rally Beer Co Trail Blazer", "brand" => "Rally Beer Company", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.9", "country" => "Canada", "url" => "https://www.lcbo.com/en/rally-beer-co-trail-blazer-17117"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Town Brewery Square Wheels Hazy IPA", "brand" => "Town Brewery", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "4.25", "volume" => "473", "alcohol_content" => "6.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/town-brewery-square-wheels-hazy-ipa-10820"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Waterloo IPA", "brand" => "Waterloo Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/waterloo-ipa-339895"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collingwood Brewery Rockwell Pilsner", "brand" => "Collingwood Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/collingwood-brewery-rockwell-pilsner-16871"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Budweiser", "brand" => "Budweiser", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "48.95", "volume" => "9548", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/budweiser-692806"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Maclay's Traditional Pale Ale", "brand" => "Maclay's", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "39.95", "volume" => "8520", "alcohol_content" => "4.9", "country" => "Canada", "url" => "https://www.lcbo.com/en/maclay-s-traditional-pale-ale-141648"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Gateway City Brewery 11.17 India Session Ale", "brand" => "Gateway City Brewery", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/gateway-city-brewery-11-17-india-session-ale-26089"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hobgoblin Ale", "brand" => "Wychwood Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.0", "volume" => "500", "alcohol_content" => "4.5", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/hobgoblin-ale-488429"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Flying Monkeys Worlds Away Modern Lager", "brand" => "Flying Monkeys", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.45", "volume" => "473", "alcohol_content" => "4.7", "country" => "Canada", "url" => "https://www.lcbo.com/en/flying-monkeys-worlds-away-modern-lager-20265"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Strongbow Cider", "brand" => "Strongbow", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.35", "volume" => "500", "alcohol_content" => "5.3", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/strongbow-cider-560532"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light Strawberry Lemonade", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Flavoured & Spiced Beer", "price" => "3.0", "volume" => "473", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-strawberry-lemonade-15695"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Elora Brewing Borealis Pale Ale", "brand" => "Elora Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.55", "volume" => "473", "alcohol_content" => "5.1", "country" => "Canada", "url" => "https://www.lcbo.com/en/elora-brewing-borealis-pale-ale-15443"
        ]);
        DB::table('alcohols')->insert([
            "title" => "WHISKEYJACK BEER COMPANY Abitibi Amber", "brand" => "Whiskeyjack Beer Company", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.45", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/whiskeyjack-beer-company-abitibi-amber-15868"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brickworks Ciderhouse Queen Street 501", "brand" => "Brickworks Ciderhouse", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/brickworks-ciderhouse-queen-street-501-413807"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Budweiser", "brand" => "Budweiser", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "25.5", "volume" => "4092", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/budweiser-902627"
        ]);
        DB::table('alcohols')->insert([
            "title" => "KW Craft Cider", "brand" => "KW Craft", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "3.55", "volume" => "473", "alcohol_content" => "6.7", "country" => "Canada", "url" => "https://www.lcbo.com/en/kw-craft-cider-541219"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Clear 2.0", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "25.95", "volume" => "4260", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-clear-2-0-679522"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Amsterdam Blonde Lager", "brand" => "Amsterdam", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.1", "volume" => "568", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/amsterdam-blonde-lager-617647"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Guinness Draught", "brand" => "Guinness", "category" => "Beer & Cider", "subcategory" => "Stout & Porter", "price" => "3.4", "volume" => "500", "alcohol_content" => "4.2", "country" => "Ireland", "url" => "https://www.lcbo.com/en/guinness-draught-270447"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stack Brewing Sour IPA", "brand" => "Stack Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.45", "volume" => "473", "alcohol_content" => "6.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/stack-brewing-sour-ipa-10814"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Kingston Brewing Company, Double Dry Hopped IPA", "brand" => "Kingston Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "4.0", "volume" => "473", "alcohol_content" => "6.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/kingston-brewing-company-double-dry-hopped-ipa-13819"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeping Giant Brewing Quittin Time", "brand" => "Sleeping Giant", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "2.75", "volume" => "355", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeping-giant-brewinig-quittin-time-26949"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Crest Super Lager", "brand" => "Crest", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.85", "volume" => "500", "alcohol_content" => "10.0", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/crest-super-lager-456202"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rorschach Brewing Truth Serum", "brand" => "Rorschach Brewing Inc.", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.5", "volume" => "355", "alcohol_content" => "6.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/rorschach-brewing-truth-serum-14595"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Old Style Pilsner", "brand" => "Old Style", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.3", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/old-style-pilsner-478412"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brimstone Brewing Sinister Minister IPA", "brand" => "Brimstone Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.6", "volume" => "473", "alcohol_content" => "7.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/brimstone-brewing-sinister-minister-ipa-521112"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Imperial City Brew House Goodbye Gravity Cream Ale", "brand" => "Imperial City Brewhouse", "category" => "Beer & Cider", "subcategory" => "Lagered Ale", "price" => "3.6", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/imperial-city-brew-house-goodbye-gravity-cream-ale-21517"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Original", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.0", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-original-14136"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Town Brewery Mad Nice IPA", "brand" => "Town Brewery", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "4.25", "volume" => "473", "alcohol_content" => "6.3", "country" => "Canada", "url" => "https://www.lcbo.com/en/town-brewery-mad-nice-ipa-26090"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Growers Honeycrisp Apple", "brand" => "Growers", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.55", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/growers-honeycrisp-apple-374546"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Amsterdam 3 Speed Lager", "brand" => "Amsterdam", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.35", "volume" => "568", "alcohol_content" => "4.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/amsterdam-3-speed-lager-575357"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Niagara Cider Peach Chardonnay", "brand" => "Niagara Cider", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "4.25", "volume" => "473", "alcohol_content" => "6.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/niagara-cider-peach-chardonnay-21208"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Daily Forecast", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Flavoured & Spiced Beer", "price" => "3.95", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-daily-forecast-25099"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lost Craft Duality Peach Sour", "brand" => "Lost Craft", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/lost-craft-duality-peach-sour-25044"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Laker Red", "brand" => "Laker", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.0", "volume" => "473", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/laker-red-382291"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Steam Whistle Koozie Gift Pack", "brand" => "Steam Whistle", "category" => "Beer & Cider", "subcategory" => "Gift Packs", "price" => "29.95", "volume" => "2838", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/steam-whistle-koozie-gift-pack-22233"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brock Street Brewing Munich Lager", "brand" => "Brock Street", "category" => "Beer & Cider", "subcategory" => "Amber Lager", "price" => "3.3", "volume" => "473", "alcohol_content" => "6.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/brock-street-brewing-munich-lager-17287"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Brewery Ebb & Flow Five Alive", "brand" => "Muskoka Brewery", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "3.75", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-brewery-ebb-flow-five-alive-25050"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Steam Whistle Premium Pilsner", "brand" => "Steam Whistle", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "19.25", "volume" => "2838", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/steam-whistle-premium-pilsner-492017"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Old Flame Hazy Blonde Kellerbier", "brand" => "Old Flame", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/old-flame-hazy-blonde-kellerbier-10563"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Budweiser Zero", "brand" => "Budweiser", "category" => "Beer & Cider", "subcategory" => "Non-Alcoholic Beer", "price" => "2.5", "volume" => "473", "alcohol_content" => "0.1", "country" => "Canada", "url" => "https://www.lcbo.com/en/budweiser-zero-16976"
        ]);
        DB::table('alcohols')->insert([
            "title" => "La Trappe Tripel", "brand" => "La Trappe", "category" => "Beer & Cider", "subcategory" => "Belgian Ale", "price" => "8.65", "volume" => "750", "alcohol_content" => "8.0", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/la-trappe-tripel-413575"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Fixed Gear Brewing Breakaway IPA", "brand" => "Fixed Gear Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.65", "volume" => "473", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/fixed-gear-brewing-breakaway-ipa-18314"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Corona Extra + vintage cooler", "brand" => "Corona", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "55.95", "volume" => "3960", "alcohol_content" => "4.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/corona-extra-vintage-cooler-24146"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bavaria Premium", "brand" => "Bavaria", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "13.9", "volume" => "3000", "alcohol_content" => "5.0", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/bavaria-premium-666867"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Canadian", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "48.95", "volume" => "9548", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-canadian-692277"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Zywiec Beer", "brand" => "Zywiec", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.55", "volume" => "500", "alcohol_content" => "5.5", "country" => "Poland", "url" => "https://www.lcbo.com/en/zywiec-beer-615211"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busch Ice", "brand" => "Busch", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.0", "volume" => "473", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/busch-ice-15250"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Flying Canoe Hard Cider", "brand" => "Flying Canoe", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "4.05", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/flying-canoe-hard-cider-499020"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Clear 2.0", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "17.25", "volume" => "2838", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-clear-2-0-486142"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Reinhart's Strawberry Hibiscus Cider", "brand" => "Reinhart", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.55", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/reinhart-s-strawberry-hibiscus-cider-15162"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Michelob Ultra", "brand" => "Michelob", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "14.95", "volume" => "2130", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/michelob-ultra-697623"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Magnotta Brewery Gruppetto Light Lager", "brand" => "Magnotta", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.05", "volume" => "473", "alcohol_content" => "3.8", "country" => "Canada", "url" => "https://www.lcbo.com/en/magnotta-brewery-backyard-light-lager-12457"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brock Street Blonde", "brand" => "Brock Street", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.15", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/brock-street-blonde-468181"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Budweiser Shot", "brand" => "Budweiser", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "5.0", "volume" => "944", "alcohol_content" => "6.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/budweiser-shot-16837"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Orillia Brewing Co Sunshine City Blonde", "brand" => "Orillia Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "4.8", "country" => "Canada", "url" => "https://www.lcbo.com/en/orillia-brewing-co-sunshine-city-blonde-23262"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Tempt No. 9 Strawberry & Lime Cider", "brand" => "Tempt", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "2.75", "volume" => "500", "alcohol_content" => "4.5", "country" => "Denmark", "url" => "https://www.lcbo.com/en/tempt-no-9-strawberry-lime-cider-19978"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Old Milwaukee Ice", "brand" => "Old Milwaukee", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.4", "volume" => "710", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/old-milwaukee-ice-585323"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Lost Craft Dry Rose", "brand" => "Lost Craft", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.5", "volume" => "473", "alcohol_content" => "6.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/lost-craft-dry-rose-20111"
        ]);
        DB::table('alcohols')->insert([
            "title" => "MacKinnon Brothers Harvest Ale", "brand" => "MacKinnon Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/mackinnon-brothers-harvest-ale-15798"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stonewall Light", "brand" => "Stonewall", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "7.0", "volume" => "1420", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/stonewall-light-24829"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Maclean's Ales Maple Coffee Mild", "brand" => "Maclean's", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.3", "volume" => "473", "alcohol_content" => "3.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/maclean-s-ales-maple-coffee-mild-25003"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Labatt BLue", "brand" => "Labatt", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "11.95", "volume" => "2838", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/labatt-blue-15258"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stowford Press Cider", "brand" => "Stowford Press Cider", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "3.1", "volume" => "500", "alcohol_content" => "4.5", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/stowford-press-cider-25029"
        ]);
        DB::table('alcohols')->insert([
            "title" => "JuiceBox Raspberry Lemonade", "brand" => "Juicebox", "category" => "Beer & Cider", "subcategory" => "Flavoured & Spiced Beer", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/juicebox-raspberry-lemonade-21417"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cowbell Brewing Co. Grapefruit Radler", "brand" => "Cowbell Brewing", "category" => "Beer & Cider", "subcategory" => "Radler & Shandy", "price" => "3.25", "volume" => "473", "alcohol_content" => "2.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/cowbell-brewing-co-grapefruit-radler-25060"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Tawse Cider", "brand" => "Tawse", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/tawse-cider-569350"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sawdust City Patio Nights Sangria Pale Ale", "brand" => "Sawdust City Brewery", "category" => "Beer & Cider", "subcategory" => "Flavoured & Spiced Beer", "price" => "4.1", "volume" => "473", "alcohol_content" => "5.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/sawdust-city-patio-nights-sangria-pale-ale-26987"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Triple Bogey Lager", "brand" => "Triple Bogey", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.9", "volume" => "473", "alcohol_content" => "4.9", "country" => "Canada", "url" => "https://www.lcbo.com/en/triple-bogey-lager-393462"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Great Lakes Brewery Miami Weiss", "brand" => "Great Lakes Brewery", "category" => "Beer & Cider", "subcategory" => "Wheat Ale", "price" => "3.0", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/great-lakes-brewery-miami-weiss-26555"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cameron's Cruising through the Galaxy NEIPA", "brand" => "Cameron's", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.55", "volume" => "473", "alcohol_content" => "6.3", "country" => "Canada", "url" => "https://www.lcbo.com/en/cameron-s-cruising-through-the-galaxy-neipa-17396"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Highlander Brew Co Scottish Ale", "brand" => "Highlander Brewing", "category" => "Beer & Cider", "subcategory" => "Dark Ale", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.4", "country" => "Canada", "url" => "https://www.lcbo.com/en/highlander-brew-co-scottish-ale-523381"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Stella Artois", "brand" => "Stella Artois", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/stella-artois-17820"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Exchange Pamplemousse Is On The Loose Hazy Ipa", "brand" => "Exchange Brewery", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "4.25", "volume" => "473", "alcohol_content" => "6.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/exchange-pamplemousse-is-on-the-loose-hazy-ipa-26626"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Creemore Springs Helles Light Lager", "brand" => "Creemore Springs", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "14.95", "volume" => "2130", "alcohol_content" => "3.7", "country" => "Canada", "url" => "https://www.lcbo.com/en/creemore-springs-helles-light-lager-19584"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rickard's Red", "brand" => "Rickard'S Red", "category" => "Beer & Cider", "subcategory" => "Dark Ale", "price" => "27.95", "volume" => "4092", "alcohol_content" => "5.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/rickard-s-red-927236"
        ]);
        DB::table('alcohols')->insert([
            "title" => "O'hara's Irish Nitro Stout", "brand" => "O'Hara's", "category" => "Beer & Cider", "subcategory" => "Stout & Porter", "price" => "3.2", "volume" => "440", "alcohol_content" => "4.3", "country" => "Ireland", "url" => "https://www.lcbo.com/en/o-hara-s-irish-nitro-stout-20013"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Cobblestone Stout", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "Stout & Porter", "price" => "3.4", "volume" => "440", "alcohol_content" => "4.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-cobblestone-stout-312850"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Waupoos Premium Cider", "brand" => "Waupoos", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "13.7", "volume" => "1364", "alcohol_content" => "6.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/waupoos-premium-cider-612804"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collectiver Arts Jam up the Pineapple & Tangerine", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "4.55", "volume" => "473", "alcohol_content" => "5.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/collectiver-arts-jam-up-the-pineapple-tangerine-25689"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Indie Ale House Marco Polo Italian Style Pilsner", "brand" => "Indie Ale House", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/indie-ale-house-marco-polo-italian-style-pilsner-26073"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Unibroue Blanche de Chambly Bleuet", "brand" => "Unibroue", "category" => "Beer & Cider", "subcategory" => "Flavoured & Spiced Beer", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/unibroue-blanche-de-chambly-bleuet-25398"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Labatt Blue", "brand" => "Labatt", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "23.95", "volume" => "5676", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/labatt-blue-228486"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Amsterdam Brewing Company YYZ Summer Flight Pack", "brand" => "Amsterdam Brewing", "category" => "Beer & Cider", "subcategory" => "Taster Packs", "price" => "12.95", "volume" => "1892", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/amsterdam-brewing-company-yyz-summer-flight-pack-24668"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Flying Dog Gonzo Imperial Porter", "brand" => "Flying Dog Brewery", "category" => "Beer & Cider", "subcategory" => "Stout & Porter", "price" => "5.0", "volume" => "355", "alcohol_content" => "10.0", "country" => "United States", "url" => "https://www.lcbo.com/en/flying-dog-gonzo-imperial-porter-16693"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bicycle Craft Brewery Frequency APA", "brand" => "Bicycle Craft Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "4.15", "volume" => "473", "alcohol_content" => "5.4", "country" => "Canada", "url" => "https://www.lcbo.com/en/bicycle-craft-brewery-frequency-apa-569848"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hop Valley Bubble Stash", "brand" => "Creemore Springs", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.4", "volume" => "473", "alcohol_content" => "6.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/hop-valley-bubble-stash-22089"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ace Hill Pilsner", "brand" => "Ace Hill", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.9", "country" => "Canada", "url" => "https://www.lcbo.com/en/ace-hill-pilsner-461822"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Duchesse De Bourgogne", "brand" => "Duchesse", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "3.9", "volume" => "330", "alcohol_content" => "6.2", "country" => "Belgium", "url" => "https://www.lcbo.com/en/duchesse-de-bourgogne-492769"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Thornbury Craft Cranberry Cider", "brand" => "Thornbury", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.75", "volume" => "473", "alcohol_content" => "5.3", "country" => "Canada", "url" => "https://www.lcbo.com/en/thornbury-craft-cranberry-cider-571786"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Light", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "54.95", "volume" => "10650", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-light-15501"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Light", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "13.95", "volume" => "2130", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-light-906628"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Flying Monkeys Sparklepuff Triple IPA", "brand" => "Flying Monkeys", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "4.95", "volume" => "473", "alcohol_content" => "10.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/flying-monkeys-sparklepuff-triple-ipa-688507"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Clear Lake Brewing Session Ale", "brand" => "Clear Lake Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.8", "country" => "Canada", "url" => "https://www.lcbo.com/en/clear-lake-brewing-session-ale-573832"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Belgian Moon Mango Wheat", "brand" => "Belgian Moon", "category" => "Beer & Cider", "subcategory" => "Flavoured & Spiced Beer", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.4", "country" => "Canada", "url" => "https://www.lcbo.com/en/belgian-moon-mango-wheat-697268"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Canadian", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "55.95", "volume" => "10650", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-canadian-15500"
        ]);
        DB::table('alcohols')->insert([
            "title" => "4est Brewery 4est Lager", "brand" => "4est Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/4est-brewery-4est-lager-26993"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Original", "brand" => "Coors", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "30.95", "volume" => "5676", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-original-14095"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jever Pilsener", "brand" => "Jever", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.45", "volume" => "500", "alcohol_content" => "5.0", "country" => "Germany", "url" => "https://www.lcbo.com/en/jever-pilsener-378976"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Thornbury Village Honeycrisp Apple Cider", "brand" => "Thornbury", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/thornbury-village-honeycrisp-apple-cider-15176"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Labatt Blue", "brand" => "Labatt", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "28.5", "volume" => "5115", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/labatt-blue-218131"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Molson Ultra", "brand" => "Molson", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "43.95", "volume" => "8184", "alcohol_content" => "3.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/molson-ultra-14069"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Innis & Gunn Original", "brand" => "Innis & Gunn", "category" => "Beer & Cider", "subcategory" => "Dark Ale", "price" => "19.05", "volume" => "3000", "alcohol_content" => "6.6", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/innis-gunn-original-15041"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brew Microbrewery Maple Beer", "brand" => "Brew Microbrewery", "category" => "Beer & Cider", "subcategory" => "Flavoured & Spiced Beer", "price" => "3.95", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/brew-microbrewery-maple-beer-10961"
        ]);
        DB::table('alcohols')->insert([
            "title" => "London Brewing Organic Hazy IPA", "brand" => "London Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.95", "volume" => "473", "alcohol_content" => "6.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/london-brewing-organic-hazy-ipa-24625"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nickel Brook Zap! Pink Lemonade Sour IPA", "brand" => "Nickel Brook", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "3.65", "volume" => "473", "alcohol_content" => "5.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/nickel-brook-zap-pink-lemonade-sour-ipa-21689"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collingwood Brewery Freestyle Skadi IPA", "brand" => "Collingwood Brewery", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "4.25", "volume" => "473", "alcohol_content" => "7.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/collingwood-brewery-freestyle-skadi-ipa-23551"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mill Street Juice Cloud IPA", "brand" => "Mill Street", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.55", "volume" => "473", "alcohol_content" => "6.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/mill-street-juice-cloud-ipa-20871"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Busch Light", "brand" => "Busch", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "11.95", "volume" => "2838", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/busch-light-15253"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Whiskeyjack Cold Front", "brand" => "Whiskeyjack Beer Company", "category" => "Beer & Cider", "subcategory" => "Lagered Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/whiskeyjack-cold-front-11159"
        ]);
        DB::table('alcohols')->insert([
            "title" => "No 99 Wayne Gretzky Craft Brewing Blonde Ale", "brand" => "Wayne Gretzky", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/no-99-wayne-gretzky-craft-brewing-blonde-ale-27066"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nickel Brook Jam Stand Raspberry with Vanilla & Hibiscus", "brand" => "Nickel Brook Brewery", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "3.95", "volume" => "473", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/nickel-brook-jam-stand-raspberry-with-vanilla-hibiscus-27494"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Heineken", "brand" => "Heineken", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "29.5", "volume" => "3960", "alcohol_content" => "5.0", "country" => "Netherlands", "url" => "https://www.lcbo.com/en/heineken-531392"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sleeman Clear 2.0", "brand" => "Sleeman", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "44.95", "volume" => "8520", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/sleeman-clear-2-0-342352"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Fixed Gear Brewing Cherry Training Wheels Sour", "brand" => "Fixed Gear Brewing", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "4.25", "volume" => "473", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/fixed-gear-brewing-cherry-training-wheels-sour-13369"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beau's Full Time IPA", "brand" => "Beau's", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.65", "volume" => "473", "alcohol_content" => "6.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/beau-s-full-time-ipa-19268"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pommies Farmhouse Cider", "brand" => "Pommies", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "3.4", "volume" => "473", "alcohol_content" => "6.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/pommies-farmhouse-cider-418582"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coffin Ridge Forbidden Artisanal Cider", "brand" => "Coffin Ridge", "category" => "Beer & Cider", "subcategory" => "Traditional Cider", "price" => "3.75", "volume" => "473", "alcohol_content" => "6.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/coffin-ridge-forbidden-artisanal-cider-374496"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Left Field Brewery Scout Micro IPA", "brand" => "Left Field Brewery", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.3", "volume" => "355", "alcohol_content" => "3.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/left-field-brewery-scout-micro-ipa-27079"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Henderson x Rush Moving Pitchers Belgian Pale Ale", "brand" => "Henderson Brewing", "category" => "Beer & Cider", "subcategory" => "Belgian Ale", "price" => "13.95", "volume" => "500", "alcohol_content" => "11.9", "country" => "Canada", "url" => "https://www.lcbo.com/en/henderson-x-rush-moving-pitchers-belgian-pale-ale-25453"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light", "brand" => "Bud Light", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "29.95", "volume" => "5676", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-218107"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Innis & Gunn Islay Whisky Cask Laphroaig", "brand" => "Innis & Gunn", "category" => "Beer & Cider", "subcategory" => "Dark Ale", "price" => "12.95", "volume" => "660", "alcohol_content" => "7.4", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/innis-gunn-islay-whisky-cask-laphroaig-25082"
        ]);
        DB::table('alcohols')->insert([
            "title" => "D'Ont Poke The Bear Berry Cider", "brand" => "D'Ont Poke The Bear", "category" => "Beer & Cider", "subcategory" => "Flavoured Cider", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/d-ont-poke-the-bear-berry-cider-15174"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Michelob Ultra", "brand" => "Michelob", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "27.5", "volume" => "4092", "alcohol_content" => "4.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/michelob-ultra-284489"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hockley Amber", "brand" => "Hockley Valley Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/hockley-amber-355065"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Good Monster", "brand" => "Collective Arts", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "4.45", "volume" => "473", "alcohol_content" => "8.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-good-monster-20118"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Moosehead Lager", "brand" => "Moosehead", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/moosehead-lager-25819"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collingwood Brewery Sunset Point Lager", "brand" => "Collingwood Brewery", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.4", "country" => "Canada", "url" => "https://www.lcbo.com/en/collingwood-brewery-sunset-point-lager-20960"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Driftwood Brewing Fat Tug IPA", "brand" => "Driftwood Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.85", "volume" => "473", "alcohol_content" => "7.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/driftwood-brewing-fat-tug-ipa-638478"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brock Street Pineapple Sour", "brand" => "Brock Street Brewing", "category" => "Beer & Cider", "subcategory" => "Sour Ale", "price" => "3.5", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/brock-street-pineapple-sour-24602"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Full Beard Brewing The Bearded Prospector", "brand" => "Full Beard Brewing", "category" => "Beer & Cider", "subcategory" => "Lagered Ale", "price" => "3.35", "volume" => "473", "alcohol_content" => "4.5", "country" => "Canada", "url" => "https://www.lcbo.com/en/full-beard-brewing-the-bearded-prospector-18334"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Steam Whistle Premium Pilsner", "brand" => "Steam Whistle", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/steam-whistle-premium-pilsner-492009"
        ]);
        DB::table('alcohols')->insert([
            "title" => "4 Degrees Brewing Hill 70 Belgian Blonde Ale", "brand" => "4 Degrees Brewing Company", "category" => "Beer & Cider", "subcategory" => "Belgian Ale", "price" => "3.25", "volume" => "473", "alcohol_content" => "7.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/4-degrees-brewing-hill-70-belgian-blonde-ale-13925"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Slake Brewing Hatch Pale Ale", "brand" => "Slake Brewing", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.95", "volume" => "355", "alcohol_content" => "5.2", "country" => "Canada", "url" => "https://www.lcbo.com/en/slake-brewing-inc-hatch-pale-ale-26816"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Miller High Life", "brand" => "Miller", "category" => "Beer & Cider", "subcategory" => "Pale Lager", "price" => "29.5", "volume" => "5325", "alcohol_content" => "4.6", "country" => "Canada", "url" => "https://www.lcbo.com/en/miller-high-life-574293"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hometown Brewing Co Hazy Susan IPA", "brand" => "Hometown Brewing", "category" => "Beer & Cider", "subcategory" => "India Pale Ale (IPA)", "price" => "3.35", "volume" => "473", "alcohol_content" => "6.0", "country" => "Canada", "url" => "https://www.lcbo.com/en/hometown-brewing-co-hazy-susan-ipa-14608"
        ]);
        DB::table('alcohols')->insert([
            "title" => "Fuller's London Pride", "brand" => "Fuller's", "category" => "Beer & Cider", "subcategory" => "Pale Ale", "price" => "3.4", "volume" => "500", "alcohol_content" => "4.7", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/fuller-s-london-pride-470757"
        ]);
    }
}
