<?php

namespace Database\Seeders;

use App\Models\Alcohol;
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
            "title" => "Corona Tropical Cactus Lime", "brand" => "Corona", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.95", "volume" => "355", "alcohol_content" => "4.2", "price_index" => "0.19785378940308518", "country" => "Canada", "url" => "https://www.lcbo.com/en/corona-tropical-cactus-lime-24377", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024377.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024377.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mike's Hard Blue Freeze", "brand" => "Mike's", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.15", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13319238900634248", "country" => "Canada", "url" => "https://www.lcbo.com/en/mike-s-hard-blue-freeze-15363", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/3/015363.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/3/015363.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mike's Hard White Freeze", "brand" => "Mike's", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.15", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13319238900634248", "country" => "Canada", "url" => "https://www.lcbo.com/en/mike-s-hard-white-freeze-19145", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019145.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019145.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Vodka Mudshake Creamy Vanilla", "brand" => "Mudshake", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "14.0", "volume" => "1080", "alcohol_content" => "5.0", "price_index" => "0.25925925925925924", "country" => "New Zealand", "url" => "https://www.lcbo.com/en/vodka-mudshake-creamy-vanilla-4606", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/0/4/6/004606.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/0/4/6/004606.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "White Claw Hard Seltzer Natural Lime", "brand" => "White Claw", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/white-claw-hard-seltzer-natural-lime-14488", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014488.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014488.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mike's Hard Cranberry", "brand" => "Mike's", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "13.25", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.12441314553990611", "country" => "Canada", "url" => "https://www.lcbo.com/en/mike-s-hard-cranberry-15369", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/3/015369.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/3/015369.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jaw Drop Tickling Pink Lemonade", "brand" => "Jaw Drop", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.0", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.09060706735125337", "country" => "Canada", "url" => "https://www.lcbo.com/en/jaw-drop-tickling-pink-lemonade-447763", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/7/7/447763.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/7/7/447763.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mott's Clamato Original Caesar", "brand" => "Mott's", "category" => "Coolers", "subcategory" => "Caesars", "price" => "3.15", "volume" => "458", "alcohol_content" => "5.5", "price_index" => "0.12504962286621674", "country" => "United States", "url" => "https://www.lcbo.com/en/mott-s-clamato-original-caesar-316323", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/1/6/3/316323.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/1/6/3/316323.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bacardi Pina Colada", "brand" => "Bacardi", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "2.85", "volume" => "355", "alcohol_content" => "5.0", "price_index" => "0.16056338028169015", "country" => "Canada", "url" => "https://www.lcbo.com/en/bacardi-pina-colada-24385", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024385.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024385.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "White Claw Variety Pack #2", "brand" => "White Claw", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "28.95", "volume" => "4260", "alcohol_content" => "5.0", "price_index" => "0.13591549295774646", "country" => "Canada", "url" => "https://www.lcbo.com/en/white-claw-variety-pack-2-21938", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/9/021938.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/9/021938.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Social Lite Cream Soda Craft Seltzer", "brand" => "Social Lite", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "10.5", "volume" => "1420", "alcohol_content" => "5.0", "price_index" => "0.14788732394366197", "country" => "Canada", "url" => "https://www.lcbo.com/en/social-lite-cream-soda-craft-soda-24516", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024516.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024516.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Vizzy Hard Seltzers + FREE sunglasses & fanny pack", "brand" => "Vizzy", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "55.8", "volume" => "8514", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/vizzy-hard-seltzers-free-sunglasses-fanny-pack-27050", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/0/027050.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/0/027050.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Vodka Grapefruit (PET)", "brand" => "Black Fly", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "11.35", "volume" => "1600", "alcohol_content" => "7.0", "price_index" => "0.1013392857142857", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-fly-vodka-grapefruit-pet-407437", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/7/4/407437.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/7/4/407437.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nutrl Vodka Soda Pineapple", "brand" => "Nutrl", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/nutrl-vodka-soda-pineapple-666040", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/6/0/666040.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/6/0/666040.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "MTV Hard Seltzer - Juicy Shore Tropical Punch", "brand" => "Steam Whistle", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.95", "volume" => "355", "alcohol_content" => "5.0", "price_index" => "0.16619718309859155", "country" => "Canada", "url" => "https://www.lcbo.com/en/mtv-hard-setzer-juicy-shore-tropical-punch-24343", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024343.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024343.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Collective Arts Lemon Squeezy", "brand" => "Collective Arts", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.95", "volume" => "355", "alcohol_content" => "4.0", "price_index" => "0.20774647887323944", "country" => "Canada", "url" => "https://www.lcbo.com/en/collective-arts-lemon-squeezy-24401", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024401.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024401.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Flavoured Vodkas & Coolers + FREE Smash Ball set", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "126.45", "volume" => "7926", "alcohol_content" => "30.0", "price_index" => "0.053179409538228625", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-smash-ball-set-27049", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/0/027049.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/0/027049.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "57.7", "volume" => "7920", "alcohol_content" => "5.0", "price_index" => "0.1457070707070707", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-ice-321794", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/2/1/7/321794.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/2/1/7/321794.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Woody's Pink Grapefruit", "brand" => "Woody's", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "12.55", "volume" => "1320", "alcohol_content" => "5.3", "price_index" => "0.17938822184105205", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/woody-s-pink-grapefruit-697409", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/7/4/697409.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/7/4/697409.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nude Pink Lemonade", "brand" => "Nude", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.7", "volume" => "355", "alcohol_content" => "5.0", "price_index" => "0.15211267605633805", "country" => "Canada", "url" => "https://www.lcbo.com/en/nude-pink-lemonade-24369", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024369.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024369.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice Peach Lemonade", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-ice-peach-lemonade-24390", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024390.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024390.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Dillon's Tangerine, Lemon & A Hint Of Mint", "brand" => "Dillon's", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.15", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13319238900634248", "country" => "Canada", "url" => "https://www.lcbo.com/en/dillon-s-tangerine-lemon-a-hint-of-mint-24319", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024319.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024319.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Red Sangria", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-red-sangria-491654", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/6/491654.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/6/491654.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Tempo Gin Smash Mango Peach", "brand" => "Tempo", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/tempo-gin-smash-mango-peach-19159", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019159.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019159.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jack Daniels Tennessee Honey Lemonade", "brand" => "Jack Daniels", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.0", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.10570824524312897", "country" => "United States", "url" => "https://www.lcbo.com/en/jack-daniels-tennessee-honey-lemonade-24346", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024346.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024346.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Vodka Sour Raspberry", "brand" => "Black Fly", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.1", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.0936273029296285", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-fly-vodka-sour-raspberry-448613", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/8/6/448613.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/8/6/448613.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nude Vodka Soda Raspberry Lemon", "brand" => "Nude", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12473572938689217", "country" => "Canada", "url" => "https://www.lcbo.com/en/nude-vodka-soda-raspberry-lemon-14664", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/6/014664.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/6/014664.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jose Cuervo Sparkling Classic Margarita", "brand" => "Jose Cuervo", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "10.95", "volume" => "1420", "alcohol_content" => "5.0", "price_index" => "0.15422535211267605", "country" => "United States", "url" => "https://www.lcbo.com/en/jose-cuervo-sparkling-classic-margarita-27129", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/1/027129.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/1/027129.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ace Hill Cucumber Lemon Vodka Water", "brand" => "Ace Hill", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "7.95", "volume" => "1000", "alcohol_content" => "4.5", "price_index" => "0.17666666666666667", "country" => "Canada", "url" => "https://www.lcbo.com/en/ace-hill-cucumber-lemon-vodka-water-24423", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024423.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024423.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nutrl Vodka Soda Raspberry", "brand" => "Nutrl", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/nutrl-vodka-soda-raspberry-24365", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024365.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024365.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Palm Bay Rainbow Twist", "brand" => "Palm Bay", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.15", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13319238900634248", "country" => "Canada", "url" => "https://www.lcbo.com/en/palm-bay-rainbow-twist-19146", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019146.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019146.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Founder's Original Tequila Paloma", "brand" => "Founder's Original", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.1", "volume" => "355", "alcohol_content" => "7.0", "price_index" => "0.12474849094567404", "country" => "Canada", "url" => "https://www.lcbo.com/en/founder-s-original-tequila-paloma-19350", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/3/019350.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/3/019350.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Wild Cherry Vodka Soda Keg", "brand" => "Cottage Springs", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "29.95", "volume" => "5000", "alcohol_content" => "5.0", "price_index" => "0.1198", "country" => "Canada", "url" => "https://www.lcbo.com/en/cottage-springs-wild-cherry-vodka-soda-keg-ecomm-27075", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/0/027075.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/0/027075.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Motts Clamato Caesar Gin and Cucumber", "brand" => "Mott's", "category" => "Coolers", "subcategory" => "Caesars", "price" => "3.15", "volume" => "458", "alcohol_content" => "5.5", "price_index" => "0.12504962286621674", "country" => "United States", "url" => "https://www.lcbo.com/en/motts-clamato-caesar-gin-and-cucumber-649236", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/9/2/649236.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/9/2/649236.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nutrl Vodka Soda Grapefruit", "brand" => "Nutrl", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/nutrl-vodka-soda-grapefruit-666032", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/6/0/666032.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/6/0/666032.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Vodka Mudshake Chocolate", "brand" => "Mudshake", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "14.0", "volume" => "1080", "alcohol_content" => "5.0", "price_index" => "0.25925925925925924", "country" => "New Zealand", "url" => "https://www.lcbo.com/en/vodka-mudshake-chocolate-5280", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/0/5/2/005280.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/0/5/2/005280.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nutrl Vodka Soda Juic'D Blood Orange", "brand" => "Nutrl", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13742071881606763", "country" => "Canada", "url" => "https://www.lcbo.com/en/nutrl-vodka-soda-juic-d-blood-orange-19148", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019148.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019148.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mikes Hard Red Freeze", "brand" => "Mike's", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.15", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13319238900634248", "country" => "Canada", "url" => "https://www.lcbo.com/en/mikes-hard-red-freeze-24332", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024332.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024332.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Dillon's Blackberry, Lemon & A Dash Of Elderflower", "brand" => "Dillon's", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.15", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13319238900634248", "country" => "Canada", "url" => "https://www.lcbo.com/en/dillon-s-blackberry-lemon-a-dash-of-elderflower-24321", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024321.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024321.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Blueberry Vodka Water", "brand" => "Cottage Springs", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.75", "volume" => "355", "alcohol_content" => "5.0", "price_index" => "0.15492957746478872", "country" => "Canada", "url" => "https://www.lcbo.com/en/cottage-springs-blueberry-vodka-water-24358", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024358.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024358.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Corona Tropical Raspberry Lemon", "brand" => "Corona", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.95", "volume" => "355", "alcohol_content" => "4.2", "price_index" => "0.19785378940308518", "country" => "Canada", "url" => "https://www.lcbo.com/en/corona-tropical-raspberry-lemon-24429", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024429.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024429.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Weekender Blue Raspberry", "brand" => "Weekender", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.25", "volume" => "500", "alcohol_content" => "7.0", "price_index" => "0.09285714285714286", "country" => "Canada", "url" => "https://www.lcbo.com/en/weekender-blue-raspberry-24366", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024366.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024366.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Raspberry Rhubarb Vodka Smash", "brand" => "Georgian Bay", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/georgian-bay-raspberry-rhubarb-vodka-smash-14525", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/5/014525.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/5/014525.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Vodka Iced Tea Mixed 8 Pack", "brand" => "Cottage Springs", "category" => "Coolers", "subcategory" => "Teas", "price" => "19.95", "volume" => "2840", "alcohol_content" => "5.0", "price_index" => "0.14049295774647888", "country" => "Canada", "url" => "https://www.lcbo.com/en/cottage-springs-vodka-iced-tea-mixed-8-pack-24351", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024351.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024351.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hard Hitchhiker Raspberry Vodka Lemonade", "brand" => "Hard Hitchhicker", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "2.95", "volume" => "473", "alcohol_content" => "3.0", "price_index" => "0.20789288231148698", "country" => "Canada", "url" => "https://www.lcbo.com/en/hard-hitchhiker-raspberry-vodka-lemonade-25277", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/2/025277.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/2/025277.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ace Hill Tropical Vodka Soda Mix Pack", "brand" => "Ace Hill", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "14.95", "volume" => "2130", "alcohol_content" => "4.5", "price_index" => "0.15597287428273343", "country" => "Canada", "url" => "https://www.lcbo.com/en/ace-hill-tropical-vodka-soda-mix-pack-24383", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024383.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024383.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Walter Craft Caesar - Classic", "brand" => "Walter Craft", "category" => "Coolers", "subcategory" => "Caesars", "price" => "3.75", "volume" => "458", "alcohol_content" => "4.5", "price_index" => "0.1819505094614265", "country" => "Canada", "url" => "https://www.lcbo.com/en/walter-craft-caesar-classic-26548", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/5/026548.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/5/026548.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Palm Bay Paradise Twist", "brand" => "Palm Bay", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.15", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13319238900634248", "country" => "Canada", "url" => "https://www.lcbo.com/en/palm-bay-paradise-twist-24333", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024333.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024333.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ace Hill Raspberry Vodka Soda", "brand" => "Ace Hill", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.85", "volume" => "355", "alcohol_content" => "4.5", "price_index" => "0.17840375586854462", "country" => "Canada", "url" => "https://www.lcbo.com/en/ace-hill-raspberry-vodka-soda-14483", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014483.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014483.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jaw Drop Blue Blast", "brand" => "Jaw Drop", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.0", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.09060706735125337", "country" => "NULL", "url" => "https://www.lcbo.com/en/jaw-drop-blue-blast-vodka-cooler-24328", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024328.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024328.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Vodka Crushed Orange", "brand" => "Black Fly", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.1", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.0936273029296285", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-fly-vodka-crushed-orange-553578", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/3/5/553578.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/3/5/553578.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nutrl The Mixed 12pk", "brand" => "Nutrl", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "28.95", "volume" => "4260", "alcohol_content" => "5.0", "price_index" => "0.13591549295774646", "country" => "Canada", "url" => "https://www.lcbo.com/en/nutrl-the-mixed-12pk-24407", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024407.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024407.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mott's Clamato Caesar Original", "brand" => "Mott's", "category" => "Coolers", "subcategory" => "Caesars", "price" => "10.9", "volume" => "1420", "alcohol_content" => "5.5", "price_index" => "0.13956466069142126", "country" => "Canada", "url" => "https://www.lcbo.com/en/mott-s-clamato-caesar-original-569418", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/9/4/569418.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/9/4/569418.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jose Cuervo Authentic Margarita", "brand" => "Jose Cuervo", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "26.95", "volume" => "1750", "alcohol_content" => "9.95", "price_index" => "0.15477386934673368", "country" => "United States", "url" => "https://www.lcbo.com/en/jose-cuervo-authentic-margarita-14494", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014494.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014494.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Tempo Gin Smash Strawberry Lemon", "brand" => "Tempo", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/tempo-gin-smash-strawberry-lemon-19143", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019143.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019143.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Arizona Hard Lemon Iced Tea", "brand" => "Arizona", "category" => "Coolers", "subcategory" => "Teas", "price" => "3.0", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12684989429175475", "country" => "NULL", "url" => "https://www.lcbo.com/en/arizona-hard-lemon-iced-tea-24344", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024344.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024344.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Motts Clamato Pickled Caesar", "brand" => "Mott's", "category" => "Coolers", "subcategory" => "Caesars", "price" => "3.15", "volume" => "458", "alcohol_content" => "5.5", "price_index" => "0.12504962286621674", "country" => "United States", "url" => "https://www.lcbo.com/en/motts-clamato-pickled-caesar-491324", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/3/491324.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/3/491324.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Vodka Crushed Pineapple Punch", "brand" => "Black Fly", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.1", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.0936273029296285", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-fly-vodka-crushed-pineapple-punch-24426", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024426.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024426.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light Seltzer Variety Pack", "brand" => "Bud Light Rtd", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "18.95", "volume" => "2838", "alcohol_content" => "4.0", "price_index" => "0.16693093727977448", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-seltzer-variety-pack-20369", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/3/020369.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/3/020369.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice Pink Lemonade", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-ice-pink-lemonade-24392", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024392.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024392.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Vodka Sour Grape", "brand" => "Black Fly", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.1", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.0936273029296285", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-fly-vodka-sour-grape-407460", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/7/4/407460.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/7/4/407460.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Founder's Original Gin Bramble", "brand" => "Founder's Original", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.1", "volume" => "355", "alcohol_content" => "7.0", "price_index" => "0.12474849094567404", "country" => "Canada", "url" => "https://www.lcbo.com/en/founder-s-original-gin-bramble-19098", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/0/019098.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/0/019098.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Founder's Original Bourbon Sour", "brand" => "Founder's Original", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.1", "volume" => "355", "alcohol_content" => "7.0", "price_index" => "0.12474849094567404", "country" => "Canada", "url" => "https://www.lcbo.com/en/founder-s-original-bourbon-sour-19347", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/3/019347.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/3/019347.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nude Vodka Soda 12 Can Mixer pack", "brand" => "Nude", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "27.95", "volume" => "4260", "alcohol_content" => "5.0", "price_index" => "0.1312206572769953", "country" => "Canada", "url" => "https://www.lcbo.com/en/nude-vodka-soda-12-can-mixer-pack-12171", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/1/012171.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/1/012171.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bulletproof Pink Grapefruit Blood Orange Verbena", "brand" => "BULLETPROOF RTD", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12473572938689217", "country" => "Canada", "url" => "https://www.lcbo.com/en/bulletproof-pink-grapefruit-blood-orange-verbena-25275", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/2/025275.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/2/025275.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ace Hill Lemon Vodka Soda", "brand" => "Ace Hill", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.85", "volume" => "355", "alcohol_content" => "4.5", "price_index" => "0.17840375586854462", "country" => "Canada", "url" => "https://www.lcbo.com/en/ace-hill-lemon-vodka-soda-14485", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014485.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014485.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hey Y'All Southern Style Hard Iced Tea", "brand" => "Hey Y'All", "category" => "Coolers", "subcategory" => "Teas", "price" => "3.0", "volume" => "458", "alcohol_content" => "5.0", "price_index" => "0.13100436681222707", "country" => "Canada", "url" => "https://www.lcbo.com/en/hey-y-all-southern-style-hard-iced-tea-649186", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/9/1/649186.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/9/1/649186.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Darling Mimosa Sparkling Orange", "brand" => "Darling", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.25", "volume" => "355", "alcohol_content" => "5.0", "price_index" => "0.18309859154929578", "country" => "Canada", "url" => "https://www.lcbo.com/en/darling-mimosa-sparkling-orange-20857", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/8/020857.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/8/020857.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mott's Clamato The Works Caesar", "brand" => "Mott's", "category" => "Coolers", "subcategory" => "Caesars", "price" => "3.15", "volume" => "458", "alcohol_content" => "5.5", "price_index" => "0.12504962286621674", "country" => "United States", "url" => "https://www.lcbo.com/en/mott-s-clamato-the-works-caesar-553461", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/3/4/553461.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/3/4/553461.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mikes Hard Tea", "brand" => "Mike's", "category" => "Coolers", "subcategory" => "Teas", "price" => "3.15", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13319238900634248", "country" => "Canada", "url" => "https://www.lcbo.com/en/mikes-hard-tea-24378", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024378.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024378.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Twisted Shotz Sex on The Beach", "brand" => "Twisted Shotz", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "10.45", "volume" => "120", "alcohol_content" => "20.0", "price_index" => "0.4354166666666666", "country" => "New Zealand", "url" => "https://www.lcbo.com/en/twisted-shotz-sex-on-the-beach-558098", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/8/0/558098.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/8/0/558098.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Vodka & Soda Berry Lemon", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "10.55", "volume" => "1420", "alcohol_content" => "4.5", "price_index" => "0.16510172143974963", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-vodka-soda-berry-lemon-649251", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/9/2/649251.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/9/2/649251.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "White Claw Hard Seltzer Watermelon", "brand" => "White Claw", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/white-claw-hard-seltzer-watermelon-19121", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019121.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019121.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Pop Shoppe Hard Cream Soda", "brand" => "Pop Shoppe Rtd", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.15", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.09513742071881605", "country" => "Canada", "url" => "https://www.lcbo.com/en/pop-shoppe-hard-cream-soda-491290", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/2/491290.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/2/491290.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-ice-449157", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/9/1/449157.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/9/1/449157.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Palm Bay Strawberry Pineapple", "brand" => "Palm Bay", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "12.95", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.1215962441314554", "country" => "Canada", "url" => "https://www.lcbo.com/en/palm-bay-strawberry-pineapple-211235", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/1/2/211235.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/1/2/211235.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mott's Clamato Caesar Extra Spicy", "brand" => "Mott's", "category" => "Coolers", "subcategory" => "Caesars", "price" => "15.15", "volume" => "2046", "alcohol_content" => "5.5", "price_index" => "0.13463076512929886", "country" => "United States", "url" => "https://www.lcbo.com/en/mott-s-clamato-caesar-extra-spicy-611392", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/1/3/611392.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/1/3/611392.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mike's Hard Black Cherry", "brand" => "Mike's", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "13.25", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.12441314553990611", "country" => "Canada", "url" => "https://www.lcbo.com/en/mike-s-hard-black-cherry-15372", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/3/015372.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/3/015372.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Smashed Soda Variety Pack", "brand" => "Georgian Bay", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "28.95", "volume" => "4260", "alcohol_content" => "5.0", "price_index" => "0.13591549295774646", "country" => "Canada", "url" => "https://www.lcbo.com/en/georgian-bay-smashed-soda-smash-pack-17068", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/0/017068.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/0/017068.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Strawberry Smashed Soda", "brand" => "Georgian Bay Rtd", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.05", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12896405919661733", "country" => "Canada", "url" => "https://www.lcbo.com/en/georgian-bay-strawberry-smashed-soda-14524", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/5/014524.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/5/014524.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice Light Original", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "10.55", "volume" => "1420", "alcohol_content" => "4.0", "price_index" => "0.1857394366197183", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-ice-light-original-649343", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/9/3/649343.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/9/3/649343.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Little Buddha Grilled Pineapple & Rosemary", "brand" => "Little Buddha", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.95", "volume" => "355", "alcohol_content" => "4.0", "price_index" => "0.20774647887323944", "country" => "Canada", "url" => "https://www.lcbo.com/en/little-buddha-cc-grilled-pineapple-rosemary-vodka-14706", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/7/014706.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/7/014706.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mott's Clamato Extra Spicy Caesar", "brand" => "Mott's", "category" => "Coolers", "subcategory" => "Caesars", "price" => "3.15", "volume" => "458", "alcohol_content" => "5.5", "price_index" => "0.12504962286621674", "country" => "United States", "url" => "https://www.lcbo.com/en/mott-s-clamato-extra-spicy-caesar-334805", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/4/8/334805.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/3/4/8/334805.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mott's Clamato Caesar Original", "brand" => "Mott's", "category" => "Coolers", "subcategory" => "Caesars", "price" => "15.15", "volume" => "2046", "alcohol_content" => "5.5", "price_index" => "0.13463076512929886", "country" => "United States", "url" => "https://www.lcbo.com/en/mott-s-clamato-caesar-original-611400", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/1/4/611400.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/1/4/611400.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Social Lite Vodka Soda Mixer 8pk", "brand" => "Social Lite", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "19.75", "volume" => "2840", "alcohol_content" => "4.0", "price_index" => "0.17385563380281688", "country" => "NULL", "url" => "https://www.lcbo.com/en/social-lite-vodka-soda-mixer-8pk-24517", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024517.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024517.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Chula Margarita", "brand" => "Chula", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "2.95", "volume" => "355", "alcohol_content" => "5.0", "price_index" => "0.16619718309859155", "country" => "Canada", "url" => "https://www.lcbo.com/en/chula-margarita-24409", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024409.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024409.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Raspberry Vodka Lemonade", "brand" => "Cottage Springs", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.75", "volume" => "355", "alcohol_content" => "5.0", "price_index" => "0.15492957746478872", "country" => "Canada", "url" => "https://www.lcbo.com/en/cottage-springs-raspberry-vodka-lemonade-19150", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019150.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019150.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bacardi Breezer Tropical Orange Smoothie", "brand" => "Bacardi", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "11.95", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.11220657276995305", "country" => "Canada", "url" => "https://www.lcbo.com/en/bacardi-breezer-tropical-orange-smoothie-493486", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/3/4/493486.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/3/4/493486.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Tequila Margarita (PET)", "brand" => "Black Fly", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "11.35", "volume" => "1600", "alcohol_content" => "7.0", "price_index" => "0.1013392857142857", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-fly-tequila-margarita-pet-225771", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/2/5/7/225771.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/2/5/7/225771.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Twisted Shotz Island Thunder", "brand" => "Twisted Shotz", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "10.45", "volume" => "120", "alcohol_content" => "20.0", "price_index" => "0.4354166666666666", "country" => "New Zealand", "url" => "https://www.lcbo.com/en/twisted-shotz-island-thunder-24339", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024339.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024339.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Vodka Iced Tea Box", "brand" => "Cottage Springs", "category" => "Coolers", "subcategory" => "Teas", "price" => "24.95", "volume" => "4000", "alcohol_content" => "5.0", "price_index" => "0.12475", "country" => "Canada", "url" => "https://www.lcbo.com/en/cottage-springs-vodka-iced-tea-box-24427", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024427.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024427.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Palm Bay Pineapple Mandarin Orange", "brand" => "Palm Bay", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "12.95", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.1215962441314554", "country" => "Canada", "url" => "https://www.lcbo.com/en/palm-bay-pineapple-mandarin-orange-211219", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/1/2/211219.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/1/2/211219.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Tequila Margarita Strawberry", "brand" => "Black Fly", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "11.35", "volume" => "1600", "alcohol_content" => "7.0", "price_index" => "0.1013392857142857", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-fly-tequila-margarita-strawberry-24360", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024360.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024360.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "White Claw Hard Seltzer Mango", "brand" => "White Claw", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/white-claw-hard-seltzer-mango-14487", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014487.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014487.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Vodka Soda Mixed 24 Pack", "brand" => "Cottage Springs", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "54.95", "volume" => "8520", "alcohol_content" => "5.0", "price_index" => "0.1289906103286385", "country" => "Canada", "url" => "https://www.lcbo.com/en/cottage-springs-vodka-soda-mixed-24-pack-24359", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024359.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024359.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Matt & Steve's Caesar - Hot & Spicy", "brand" => "Matt & Steve's", "category" => "Coolers", "subcategory" => "Caesars", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.13069383048241398", "country" => "Canada", "url" => "https://www.lcbo.com/en/matt-steve-s-caesar-hot-spicy-19096", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/0/019096.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/0/019096.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nutrl Vodka Soda Juic'D Fruit Punch", "brand" => "Nutrl", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13742071881606763", "country" => "Canada", "url" => "https://www.lcbo.com/en/nutrl-vodka-soda-juic-d-fruit-punch-19149", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019149.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019149.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Absolut Mango Mule", "brand" => "Absolut", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.25", "volume" => "355", "alcohol_content" => "7.0", "price_index" => "0.13078470824949698", "country" => "Canada", "url" => "https://www.lcbo.com/en/absolut-mango-mule-19134", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019134.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019134.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Gin Smash", "brand" => "Georgian Bay", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/georgian-bay-gin-smash-447540", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/7/5/447540.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/7/5/447540.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Twisted Tea Original", "brand" => "Twisted Tea", "category" => "Coolers", "subcategory" => "Teas", "price" => "28.25", "volume" => "4260", "alcohol_content" => "5.0", "price_index" => "0.13262910798122066", "country" => "Canada", "url" => "https://www.lcbo.com/en/twisted-tea-original-19543", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/5/019543.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/5/019543.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hijinx Hard Seltzer Peach Cosmo", "brand" => "Cowbell Brewing", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12473572938689217", "country" => "Canada", "url" => "https://www.lcbo.com/en/hijinx-hard-seltzer-peach-cosmo-24966", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/9/024966.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/9/024966.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mikes Hard Sour Watermelon", "brand" => "Mike's", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.15", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13319238900634248", "country" => "Canada", "url" => "https://www.lcbo.com/en/mikes-hard-sour-watermelon-24329", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024329.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024329.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nutrl Vodka Soda Cherry", "brand" => "Nutrl", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/nutrl-vodka-soda-cherry-19147", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019147.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019147.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Vodka & Soda Rose Variety Pack", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "28.95", "volume" => "4260", "alcohol_content" => "4.5", "price_index" => "0.1510172143974961", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-vodka-soda-rose-variety-pack-19139", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019139.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019139.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Classic Vodka Lemonade", "brand" => "Cottage Springs", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.75", "volume" => "355", "alcohol_content" => "5.0", "price_index" => "0.15492957746478872", "country" => "Canada", "url" => "https://www.lcbo.com/en/cottage-springs-classic-vodka-lemonade-24357", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024357.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024357.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mikes Hard Frozen Blue Freeze Pouch", "brand" => "Mike's", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.5", "volume" => "296", "alcohol_content" => "5.0", "price_index" => "0.23648648648648649", "country" => "Canada", "url" => "https://www.lcbo.com/en/mikes-hard-frozen-blue-freeze-pouch-24394", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024394.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024394.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Palm Bay Rainbow Twist Pouch", "brand" => "Palm Bay", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.5", "volume" => "296", "alcohol_content" => "5.0", "price_index" => "0.23648648648648649", "country" => "Canada", "url" => "https://www.lcbo.com/en/palm-bay-rainbow-twist-pouch-24396", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024396.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024396.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Twisted Tea Slightly Sweet", "brand" => "Twisted Tea", "category" => "Coolers", "subcategory" => "Teas", "price" => "3.15", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13319238900634248", "country" => "Canada", "url" => "https://www.lcbo.com/en/twisted-tea-slightly-sweet-24376", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024376.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024376.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Rum Pina Colada", "brand" => "Black Fly", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "11.35", "volume" => "1600", "alcohol_content" => "7.0", "price_index" => "0.1013392857142857", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-fly-rum-pina-colada-24342", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024342.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024342.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Prickly Pear Tequila Smash", "brand" => "Georgian Bay", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "13.95", "volume" => "2130", "alcohol_content" => "6.0", "price_index" => "0.10915492957746478", "country" => "Canada", "url" => "https://www.lcbo.com/en/georgian-bay-tequila-smash-prickly-pear-24425", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024425.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024425.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Crown Royal Whisky & Cola", "brand" => "Crown Royal", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.25", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.09815765629719116", "country" => "Canada", "url" => "https://www.lcbo.com/en/crown-royal-whisky-cola-19303", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/3/019303.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/3/019303.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Social Lite Pineapple Mango", "brand" => "Social Lite", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "10.5", "volume" => "1420", "alcohol_content" => "4.0", "price_index" => "0.18485915492957744", "country" => "Canada", "url" => "https://www.lcbo.com/en/social-lite-pineapple-mango-491191", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/1/491191.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/1/491191.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice Peach Bellini", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "13.25", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.12441314553990611", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-ice-peach-bellini-492397", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/2/3/492397.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/2/3/492397.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hires Root Beer", "brand" => "Hires", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.15", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13319238900634248", "country" => "Canada", "url" => "https://www.lcbo.com/en/hires-root-beer-491316", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/3/491316.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/3/491316.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mxd Sour Cherry", "brand" => "MXD", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.05", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12896405919661733", "country" => "Canada", "url" => "https://www.lcbo.com/en/mxd-sour-cherry-24324", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024324.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024324.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light Seltzer Passion Fruit", "brand" => "Bud Light", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "3.1", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.1638477801268499", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-seltzer-passion-fruit-24336", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024336.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024336.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Twisted Tea Peach", "brand" => "Twisted Tea", "category" => "Coolers", "subcategory" => "Teas", "price" => "3.15", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13319238900634248", "country" => "Canada", "url" => "https://www.lcbo.com/en/twisted-tea-peach-14534", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/5/014534.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/5/014534.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Mango Tequila Smash", "brand" => "Georgian Bay", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "13.95", "volume" => "2130", "alcohol_content" => "6.0", "price_index" => "0.10915492957746478", "country" => "Canada", "url" => "https://www.lcbo.com/en/georgian-bay-tequila-smash-6pk-24432", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024432.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024432.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Vodka & Soda Raspberry Rose", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "10.55", "volume" => "1420", "alcohol_content" => "4.5", "price_index" => "0.16510172143974963", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-vodka-soda-raspberry-rose-14617", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/6/014617.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/6/014617.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Vodka Smash", "brand" => "Georgian Bay", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/georgian-bay-vodka-smash-491183", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/1/491183.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/1/491183.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mike's Hard Lemonade", "brand" => "Mike's", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "13.25", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.12441314553990611", "country" => "Canada", "url" => "https://www.lcbo.com/en/mike-s-hard-lemonade-319442", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/1/9/4/319442.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/1/9/4/319442.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Willibald Watermelon Seltzer", "brand" => "Willibald Farm Distillery", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.95", "volume" => "355", "alcohol_content" => "4.8", "price_index" => "0.17312206572769956", "country" => "Canada", "url" => "https://www.lcbo.com/en/willibald-watermelon-seltzer-24402", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024402.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024402.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "White Claw Variety Pack #1", "brand" => "White Claw", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "28.95", "volume" => "4260", "alcohol_content" => "5.0", "price_index" => "0.13591549295774646", "country" => "Canada", "url" => "https://www.lcbo.com/en/white-claw-variety-pack-1-15373", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/3/015373.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/3/015373.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Social Lite Mixed Pack", "brand" => "Social Lite", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "28.95", "volume" => "4260", "alcohol_content" => "4.0", "price_index" => "0.1698943661971831", "country" => "Canada", "url" => "https://www.lcbo.com/en/social-lite-mixed-pack-19357", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/3/019357.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/3/019357.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Grapefruit Vodka Soda", "brand" => "Cottage Springs", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.75", "volume" => "355", "alcohol_content" => "5.0", "price_index" => "0.15492957746478872", "country" => "Canada", "url" => "https://www.lcbo.com/en/cottage-springs-grapefruit-vodka-soda-24354", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024354.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024354.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mott's Clamato Caesar Reserve", "brand" => "Mott's", "category" => "Coolers", "subcategory" => "Caesars", "price" => "3.15", "volume" => "341", "alcohol_content" => "4.0", "price_index" => "0.23093841642228738", "country" => "Canada", "url" => "https://www.lcbo.com/en/mott-s-clamato-caesar-reserve-24350", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024350.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024350.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Raspberry Lime Vodka Water bag in box", "brand" => "Cottage Springs", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "24.95", "volume" => "4000", "alcohol_content" => "5.0", "price_index" => "0.12475", "country" => "Canada", "url" => "https://www.lcbo.com/en/cottage-springs-raspberry-lime-vodka-water-bag-in-box-19153", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019153.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019153.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sandbagger Boysenberry Hard Seltzer", "brand" => "Sandbagger", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "2.85", "volume" => "355", "alcohol_content" => "5.0", "price_index" => "0.16056338028169015", "country" => "Canada", "url" => "https://www.lcbo.com/en/sandbagger-boysenberry-hard-seltzer-24334", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024334.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024334.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light Seltzer Mix Pack", "brand" => "Bud Light", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "28.95", "volume" => "4260", "alcohol_content" => "4.0", "price_index" => "0.1698943661971831", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-seltzer-mix-pack-24384", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024384.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024384.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Gin Smash", "brand" => "Georgian Bay", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "13.95", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.13098591549295774", "country" => "Canada", "url" => "https://www.lcbo.com/en/georgian-bay-gin-smash-560888", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/0/8/560888.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/0/8/560888.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Infinite Minds Supersonic Puppy Dreams", "brand" => "Flying Monkeys", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13742071881606763", "country" => "Canada", "url" => "https://www.lcbo.com/en/infinite-minds-supersonic-puppy-dreams-24411", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024411.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024411.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "American Vintage Lemon Hard Iced Tea", "brand" => "American Vintage", "category" => "Coolers", "subcategory" => "Teas", "price" => "12.75", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.11971830985915492", "country" => "Canada", "url" => "https://www.lcbo.com/en/american-vintage-lemon-hard-iced-tea-444497", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/4/4/444497.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/4/4/444497.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Salvador's Original Margarita (PET)", "brand" => "Salvador's", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "25.45", "volume" => "1750", "alcohol_content" => "11.0", "price_index" => "0.1322077922077922", "country" => "United States", "url" => "https://www.lcbo.com/en/salvador-s-original-margarita-pet-697797", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/7/7/697797.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/9/7/7/697797.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Vibe Hard Kombucha Strawberry Basil", "brand" => "Vibe Hard Kombucha", "category" => "Coolers", "subcategory" => "Teas", "price" => "3.95", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.20877378435517968", "country" => "Canada", "url" => "https://www.lcbo.com/en/vibe-hard-kombucha-strawberry-basil-25276", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/2/025276.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/2/025276.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Twisted Tea Hard Ice Tea Original", "brand" => "Twisted Tea", "category" => "Coolers", "subcategory" => "Teas", "price" => "3.15", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13319238900634248", "country" => "Canada", "url" => "https://www.lcbo.com/en/twisted-tea-hard-ice-tea-original-570283", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/0/2/570283.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/0/2/570283.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "13.25", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.12441314553990611", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-ice-450114", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/0/1/450114.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/0/1/450114.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Weekender Mixed 8 Pack", "brand" => "Cottage Springs", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "19.95", "volume" => "2840", "alcohol_content" => "5.0", "price_index" => "0.14049295774647888", "country" => "Canada", "url" => "https://www.lcbo.com/en/cottage-springs-weekender-mixed-8-pack-15311", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/3/015311.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/3/015311.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "White Claw Hard Seltzer Black Cherry 6x355ml", "brand" => "White Claw", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "14.95", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.14037558685446008", "country" => "Canada", "url" => "https://www.lcbo.com/en/white-claw-hard-seltzer-black-cherry-6x355ml-19122", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019122.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019122.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Vizzy Hard Seltzer Papaya Passionfruit", "brand" => "Vizzy", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/vizzy-hard-seltzer-papaya-passionfruit-24368", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024368.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024368.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Good Fortune Lavender Lemonade Hard Seltzer Sparkling", "brand" => "Good Fortune Brewery", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "3.25", "volume" => "355", "alcohol_content" => "5.0", "price_index" => "0.18309859154929578", "country" => "Canada", "url" => "https://www.lcbo.com/en/good-fortune-lavender-lemonade-hard-seltzer-sparkling-25126", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/1/025126.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/1/025126.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cazadores Paloma", "brand" => "Cazadores", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "29.95", "volume" => "1750", "alcohol_content" => "12.5", "price_index" => "0.1369142857142857", "country" => "Mexico", "url" => "https://www.lcbo.com/en/cazadores-paloma-24428", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024428.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024428.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "High Noon Grapefruit", "brand" => "High Noon", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.95", "volume" => "355", "alcohol_content" => "4.5", "price_index" => "0.18466353677621286", "country" => "United States", "url" => "https://www.lcbo.com/en/high-noon-grapefruit-24534", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024534.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/5/024534.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Seltzer Lemonades Variety Pack", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "28.95", "volume" => "4260", "alcohol_content" => "4.5", "price_index" => "0.1510172143974961", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-seltzer-lemonades-variety-pack-24408", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024408.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024408.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Wild Cherry Vodka Soda", "brand" => "Cottage Springs", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.75", "volume" => "355", "alcohol_content" => "5.0", "price_index" => "0.15492957746478872", "country" => "Canada", "url" => "https://www.lcbo.com/en/cottage-springs-wild-cherry-vodka-soda-19142", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019142.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019142.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Vodka Cranberry (PET)", "brand" => "Black Fly", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "11.35", "volume" => "1600", "alcohol_content" => "7.0", "price_index" => "0.1013392857142857", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-fly-vodka-cranberry-pet-612713", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/2/7/612713.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/2/7/612713.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "SoCIAL LITE Field Strawberry", "brand" => "Social Lite", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "10.5", "volume" => "1420", "alcohol_content" => "4.0", "price_index" => "0.18485915492957744", "country" => "Canada", "url" => "https://www.lcbo.com/en/social-lite-field-strawberry-649376", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/9/3/649376.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/9/3/649376.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Vodka Soda Berry Blast", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.7", "volume" => "355", "alcohol_content" => "4.5", "price_index" => "0.16901408450704228", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-vodka-soda-berry-blast-24404", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024404.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024404.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Raspberry Lime Vodka Water", "brand" => "Cottage Springs", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.75", "volume" => "355", "alcohol_content" => "5.0", "price_index" => "0.15492957746478872", "country" => "Canada", "url" => "https://www.lcbo.com/en/cottage-springs-raspberry-lime-vodka-water-14493", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014493.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014493.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice Light Raspberry & Soda", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "10.55", "volume" => "1420", "alcohol_content" => "4.0", "price_index" => "0.1857394366197183", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-ice-light-raspberry-soda-450130", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/0/1/450130.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/0/1/450130.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Palm Bay Frozen Dragonfruit Watermelon Pouch", "brand" => "Palm Bay", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.5", "volume" => "296", "alcohol_content" => "5.0", "price_index" => "0.23648648648648649", "country" => "Canada", "url" => "https://www.lcbo.com/en/palm-bay-frozen-dragonfruit-watermelon-pouch-24393", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024393.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024393.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "7.25", "volume" => "1000", "alcohol_content" => "5.0", "price_index" => "0.145", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-ice-321760", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/2/1/7/321760.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/2/1/7/321760.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Spirits Hard Sparkling Water Mixer Pack", "brand" => "Muskoka Brewery", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "9.95", "volume" => "1420", "alcohol_content" => "5.0", "price_index" => "0.14014084507042252", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-spirits-hard-sparkling-water-mixer-pack-19168", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019168.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019168.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Little Buddha Natural Peach Tea", "brand" => "Little Buddha", "category" => "Coolers", "subcategory" => "Teas", "price" => "2.95", "volume" => "355", "alcohol_content" => "4.0", "price_index" => "0.20774647887323944", "country" => "Canada", "url" => "https://www.lcbo.com/en/little-buddha-peach-tea-19095", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/0/019095.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/0/019095.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nutrl Vodka Soda Lemon", "brand" => "Nutrl", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/nutrl-vodka-soda-lemon-553164", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/3/1/553164.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/3/1/553164.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Crabbies Original Alcoholic Ginger Beer", "brand" => "Crabbies", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "4.7", "volume" => "500", "alcohol_content" => "4.0", "price_index" => "0.23500000000000001", "country" => "United Kingdom", "url" => "https://www.lcbo.com/en/crabbies-original-alcoholic-ginger-beer-272807", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/2/8/272807.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/2/8/272807.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Social Lite Grapefruit Pomelo Vodka Soda", "brand" => "Social Lite", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "10.5", "volume" => "1420", "alcohol_content" => "4.0", "price_index" => "0.18485915492957744", "country" => "Canada", "url" => "https://www.lcbo.com/en/social-lite-grapefruit-pomelo-vodka-soda-553214", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/3/2/553214.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/3/2/553214.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nova Scotia Spirits Vodka Soda Lemon Lime", "brand" => "Blue Lobster", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "2.95", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.10394644115574349", "country" => "Canada", "url" => "https://www.lcbo.com/en/blue-lobster-vodka-soda-lemon-lime-667303", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/7/3/667303.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/7/3/667303.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jack Daniel's & Cola", "brand" => "Jack Daniel's", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.0", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.10570824524312897", "country" => "United States", "url" => "https://www.lcbo.com/en/jack-daniel-s-cola-166090", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/6/6/0/166090.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/6/6/0/166090.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Canadian Club & Ginger Ale", "brand" => "Canadian Club", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.0", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12684989429175475", "country" => "Canada", "url" => "https://www.lcbo.com/en/canadian-club-ginger-ale-24325", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024325.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024325.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jaw Drop Sucking Lemons", "brand" => "Jaw Drop", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.0", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.09060706735125337", "country" => "Canada", "url" => "https://www.lcbo.com/en/jaw-drop-sucking-lemons-281907", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/8/1/9/281907.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/8/1/9/281907.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mott's Clamato Caesar Extra Spicy", "brand" => "Mott's", "category" => "Coolers", "subcategory" => "Caesars", "price" => "10.9", "volume" => "1420", "alcohol_content" => "5.5", "price_index" => "0.13956466069142126", "country" => "Canada", "url" => "https://www.lcbo.com/en/mott-s-clamato-caesar-extra-spicy-569400", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/9/4/569400.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/6/9/4/569400.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Social Lite Mango Lemonade", "brand" => "Social Lite", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "3.0", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12684989429175475", "country" => "Canada", "url" => "https://www.lcbo.com/en/social-lite-mango-lemonade-19115", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019115.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019115.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cabana Coast Moscow Mule", "brand" => "Cabana Coast", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.05", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.09211718514044093", "country" => "Canada", "url" => "https://www.lcbo.com/en/cabana-coast-moscow-mule-491746", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/7/491746.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/7/491746.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rev (PET)", "brand" => "Rev", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "2.95", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.08909694956206583", "country" => "Canada", "url" => "https://www.lcbo.com/en/rev-pet-77933", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/7/7/9/077933.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/7/7/9/077933.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Hail Caesar Korean Bbq", "brand" => "Hail Caesar", "category" => "Coolers", "subcategory" => "Caesars", "price" => "3.35", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.10117789187556628", "country" => "Canada", "url" => "https://www.lcbo.com/en/hail-caesar-korean-bbq-24399", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024399.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024399.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice Raspberry", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "13.25", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.12441314553990611", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-ice-raspberry-492405", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/2/4/492405.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/2/4/492405.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sip Botanical Hard Seltzer Yuzu + Cherry Blossom", "brand" => "Bench Brewing Company", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "3.0", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.15856236786469344", "country" => "Canada", "url" => "https://www.lcbo.com/en/sip-botanical-hard-seltzer-yuzu-cherry-blossom-24326", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024326.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024326.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Topo Chico Strawberry Guava", "brand" => "Topo Chico", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.1", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.1394449192568935", "country" => "Canada", "url" => "https://www.lcbo.com/en/topo-chico-strawberry-guava-25315", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/3/025315.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/3/025315.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice Berry Blast", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-berry-blast-553339", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/3/3/553339.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/3/3/553339.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mike's Hard Peach Fuzz", "brand" => "Mike's", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.15", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13319238900634248", "country" => "Canada", "url" => "https://www.lcbo.com/en/mike-s-hard-peach-fuzz-19144", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019144.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019144.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Landshark Seltzer Pineapple Mango", "brand" => "Landshark", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "2.95", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.1559196617336152", "country" => "Canada", "url" => "https://www.lcbo.com/en/landshark-seltzer-pineapple-mango-19167", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019167.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019167.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Seagram Island Time Anytime", "brand" => "Seagrams", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "14.0", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.13145539906103287", "country" => "Canada", "url" => "https://www.lcbo.com/en/seagram-island-time-anytime-649541", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/9/5/649541.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/9/5/649541.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Palm Bay Key Lime Cherry", "brand" => "Palm Bay", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "12.95", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.1215962441314554", "country" => "Canada", "url" => "https://www.lcbo.com/en/palm-bay-key-lime-cherry-225904", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/2/5/9/225904.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/2/5/9/225904.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "White Claw Hard Seltzer Raspberry", "brand" => "White Claw", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/white-claw-hard-seltzer-raspberry-19118", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019118.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019118.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Twisted Tea Hard Iced Tea Original", "brand" => "Twisted Tea", "category" => "Coolers", "subcategory" => "Teas", "price" => "14.1", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.1323943661971831", "country" => "Canada", "url" => "https://www.lcbo.com/en/twisted-tea-hard-iced-tea-original-570275", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/0/2/570275.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/0/2/570275.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Palm Bay Island Mixer", "brand" => "Palm Bay", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "24.5", "volume" => "4260", "alcohol_content" => "5.0", "price_index" => "0.11502347417840375", "country" => "Canada", "url" => "https://www.lcbo.com/en/palm-bay-island-mixer-24400", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024400.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024400.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Matt & Steve's Caesar Original Lightly Spiced", "brand" => "Matt & Steve's", "category" => "Coolers", "subcategory" => "Caesars", "price" => "3.4", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.13069383048241398", "country" => "Canada", "url" => "https://www.lcbo.com/en/matt-steve-s-caesar-original-lightly-spiced-15310", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/3/015310.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/3/015310.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Seagram Island Time Coconut Lime", "brand" => "Seagrams", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "14.0", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.13145539906103287", "country" => "Canada", "url" => "https://www.lcbo.com/en/seagram-island-time-coconut-lime-19110", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019110.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019110.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jose Cuervo Playamar Mango", "brand" => "Jose Cuervo", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "11.95", "volume" => "1420", "alcohol_content" => "4.5", "price_index" => "0.18701095461658843", "country" => "United States", "url" => "https://www.lcbo.com/en/jose-cuervo-playamar-mango-24352", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024352.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024352.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "White Claw Iced Tea Lemon", "brand" => "White Claw", "category" => "Coolers", "subcategory" => "Teas", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/white-claw-iced-tea-lemon-24318", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024318.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024318.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Vizzy Hard Seltzer Blackberry Lemon", "brand" => "Vizzy", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "3.1", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.1456424712238666", "country" => "Canada", "url" => "https://www.lcbo.com/en/vizzy-hard-seltzer-blackberry-lemon-24388", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024388.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024388.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "fl!ng Cucumber Mint Vodka Soda", "brand" => "Fl!Ng", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.95", "volume" => "355", "alcohol_content" => "5.0", "price_index" => "0.16619718309859155", "country" => "Canada", "url" => "https://www.lcbo.com/en/fl-ng-cucumber-mint-vodka-soda-25273", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/2/025273.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/2/025273.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Vodka & Soda Cranberry Lime", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "10.55", "volume" => "1420", "alcohol_content" => "4.5", "price_index" => "0.16510172143974963", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-vodka-soda-cranberry-lime-649269", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/9/2/649269.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/9/2/649269.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Truly Peach Tea", "brand" => "Truly", "category" => "Coolers", "subcategory" => "Teas", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/truly-peach-tea-24386", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024386.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024386.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Palm Bay Ruby Grapefruit", "brand" => "Palm Bay", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "12.95", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.1215962441314554", "country" => "Canada", "url" => "https://www.lcbo.com/en/palm-bay-ruby-grapefruit-211227", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/1/2/211227.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/1/2/211227.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "American Vintage Hard Iced Tea Peach", "brand" => "American Vintage", "category" => "Coolers", "subcategory" => "Teas", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12473572938689217", "country" => "Canada", "url" => "https://www.lcbo.com/en/american-vintage-hard-iced-tea-peach-24925", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/9/024925.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/9/024925.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Strawberry Kiwi Vodka Water", "brand" => "Cottage Springs", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.75", "volume" => "355", "alcohol_content" => "5.0", "price_index" => "0.15492957746478872", "country" => "Canada", "url" => "https://www.lcbo.com/en/cottage-springs-strawberry-kiwi-vodka-water-14499", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014499.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014499.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rockstar Original", "brand" => "Rockstar", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.5", "volume" => "473", "alcohol_content" => "6.9", "price_index" => "0.1072402487973772", "country" => "Canada", "url" => "https://www.lcbo.com/en/rockstar-original-211185", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/1/1/211185.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/1/1/211185.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Landshark Seltzer Passionfruit Strawberry", "brand" => "Landshark", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "2.95", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.1559196617336152", "country" => "Canada", "url" => "https://www.lcbo.com/en/landshark-seltzer-passionfruit-strawberry-24410", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024410.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024410.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light Seltzer Mango", "brand" => "Bud Light", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "3.1", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.1638477801268499", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-seltzer-mango-20351", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/3/020351.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/3/020351.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Social Lite Triple Berry Vodka Soda", "brand" => "Social Lite", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "10.5", "volume" => "1420", "alcohol_content" => "4.0", "price_index" => "0.18485915492957744", "country" => "Canada", "url" => "https://www.lcbo.com/en/social-lite-triple-berry-vodka-soda-14477", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014477.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014477.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Vodka Mixed Berry (PET)", "brand" => "Black Fly", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "11.35", "volume" => "1600", "alcohol_content" => "7.0", "price_index" => "0.1013392857142857", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-fly-vodka-mixed-berry-pet-553560", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/3/5/553560.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/3/5/553560.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Twisted Shotz B52", "brand" => "Twisted Shotz", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "10.45", "volume" => "120", "alcohol_content" => "20.0", "price_index" => "0.4354166666666666", "country" => "New Zealand", "url" => "https://www.lcbo.com/en/twisted-shotz-b52-491480", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/4/491480.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/4/491480.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "White Claw Hard Seltzer Mango 6x355mL", "brand" => "White Claw", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "14.95", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.14037558685446008", "country" => "Canada", "url" => "https://www.lcbo.com/en/white-claw-hard-seltzer-mango-6x355ml-19123", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019123.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019123.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Brock Street Raspberry Lemon Vodka Soda", "brand" => "Brock Street Brewing", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.11339611762444744", "country" => "Canada", "url" => "https://www.lcbo.com/en/brock-street-raspberry-lemon-vodka-soda-24327", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024327.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024327.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Twisted Tea Half and Half", "brand" => "Twisted Tea", "category" => "Coolers", "subcategory" => "Teas", "price" => "3.15", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.13319238900634248", "country" => "Canada", "url" => "https://www.lcbo.com/en/twisted-tea-half-and-half-649194", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/9/1/649194.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/9/1/649194.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Seltzer Splash Pack", "brand" => "Coors Light", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "28.95", "volume" => "4260", "alcohol_content" => "4.5", "price_index" => "0.1510172143974961", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-seltzer-fruit-splash-variety-pack-24431", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024431.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024431.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Mango Vodka Water Box", "brand" => "Cottage Springs", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "24.95", "volume" => "4000", "alcohol_content" => "5.0", "price_index" => "0.12475", "country" => "Canada", "url" => "https://www.lcbo.com/en/cottage-springs-mango-vodka-water-box-24347", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024347.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024347.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Qween Blueberry & Acai Vodka Beverage", "brand" => "Qween", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.0", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12684989429175475", "country" => "Canada", "url" => "https://www.lcbo.com/en/qween-blueberry-acai-vodka-beverage-24808", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024808.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024808.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cruise Mango Dragonfruit", "brand" => "Cruise", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "2.95", "volume" => "473", "alcohol_content" => "4.7", "price_index" => "0.13269758445414062", "country" => "Canada", "url" => "https://www.lcbo.com/en/cruise-mango-dragonfruit-25490", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/4/025490.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/4/025490.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bobby Classic Margarita", "brand" => "Bobby Margarita", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.05", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12896405919661733", "country" => "Canada", "url" => "https://www.lcbo.com/en/bobby-classic-margarita-24379", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024379.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024379.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Vodka Lemonade Mixed 8 Pack", "brand" => "Cottage Springs", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "19.95", "volume" => "2840", "alcohol_content" => "5.0", "price_index" => "0.14049295774647888", "country" => "Canada", "url" => "https://www.lcbo.com/en/cottage-springs-vodka-lemonade-mixed-8-pack-24353", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024353.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024353.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Citrus Half Smash", "brand" => "Georgian Bay Rtd", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "2.1", "volume" => "355", "alcohol_content" => "2.5", "price_index" => "0.23661971830985917", "country" => "Canada", "url" => "https://www.lcbo.com/en/georgian-bay-citrus-half-smash-19137", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019137.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019137.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice Light (PET)", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "7.25", "volume" => "1000", "alcohol_content" => "4.0", "price_index" => "0.18125", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-ice-light-pet-321752", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/2/1/7/321752.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/2/1/7/321752.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "10.55", "volume" => "1320", "alcohol_content" => "5.0", "price_index" => "0.15984848484848485", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-ice-321786", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/2/1/7/321786.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/2/1/7/321786.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mikes Hard Frozen White Freeze Pouch", "brand" => "Mike's", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.5", "volume" => "296", "alcohol_content" => "5.0", "price_index" => "0.23648648648648649", "country" => "Canada", "url" => "https://www.lcbo.com/en/mikes-hard-frozen-white-freeze-pouch-24395", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024395.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024395.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Twisted Tea Party Pack", "brand" => "Twisted Tea", "category" => "Coolers", "subcategory" => "Teas", "price" => "28.2", "volume" => "4260", "alcohol_content" => "5.0", "price_index" => "0.1323943661971831", "country" => "Canada", "url" => "https://www.lcbo.com/en/twisted-tea-party-pack-15004", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/0/015004.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/0/015004.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Arizona Hard Green Tea", "brand" => "Arizona", "category" => "Coolers", "subcategory" => "Teas", "price" => "3.0", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12684989429175475", "country" => "Canada", "url" => "https://www.lcbo.com/en/arizona-hard-green-tea-14484", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014484.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014484.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coors Seltzer Blue Raspberry", "brand" => "Coors Light", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "3.1", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.1456424712238666", "country" => "Canada", "url" => "https://www.lcbo.com/en/coors-seltzer-blue-raspberry-24381", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024381.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024381.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice Light Black Cherry & Soda", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "10.55", "volume" => "1420", "alcohol_content" => "4.0", "price_index" => "0.1857394366197183", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-ice-light-black-cherry-soda-450452", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/0/4/450452.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/5/0/4/450452.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bacardi Mojito", "brand" => "Bacardi", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "2.65", "volume" => "355", "alcohol_content" => "5.0", "price_index" => "0.14929577464788732", "country" => "Canada", "url" => "https://www.lcbo.com/en/bacardi-mojito-19119", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019119.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019119.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Truly Strawberry Lemonade", "brand" => "Truly", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/truly-strawberry-lemonade-24809", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024809.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/8/024809.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Watermelon Vodka Smash", "brand" => "Georgian Bay", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/georgian-bay-watermelon-vodka-smash-24373", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024373.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024373.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff White Sangria", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-white-sangria-491662", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/6/491662.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/6/491662.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Coco Vodka", "brand" => "Coco Vodka", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "2.9", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12262156448202959", "country" => "Canada", "url" => "https://www.lcbo.com/en/coco-vodka-19440", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/4/019440.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/4/019440.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice Original 12 Pack", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "26.45", "volume" => "4260", "alcohol_content" => "5.0", "price_index" => "0.12417840375586854", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-ice-original-12-pack-26346", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/3/026346.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/6/3/026346.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Long Island Iced Tea (PET)", "brand" => "Black Fly", "category" => "Coolers", "subcategory" => "Teas", "price" => "11.35", "volume" => "1600", "alcohol_content" => "7.0", "price_index" => "0.1013392857142857", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-fly-long-island-iced-tea-pet-272773", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/2/7/272773.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/2/7/272773.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Walter Craft Caesar - Classic", "brand" => "Walter", "category" => "Coolers", "subcategory" => "Caesars", "price" => "3.8", "volume" => "473", "alcohol_content" => "4.5", "price_index" => "0.17852948085506223", "country" => "Canada", "url" => "https://www.lcbo.com/en/walter-craft-caesar-classic-19103", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019103.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019103.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Snapple Spiked Peach Tea Vodka", "brand" => "Snapple", "category" => "Coolers", "subcategory" => "Teas", "price" => "3.15", "volume" => "458", "alcohol_content" => "5.5", "price_index" => "0.12504962286621674", "country" => "United States", "url" => "https://www.lcbo.com/en/snapple-spiked-peach-tea-vodka-407775", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/7/7/407775.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/7/7/407775.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Social Lite Fruit Punch", "brand" => "Social Lite", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "24.95", "volume" => "4000", "alcohol_content" => "5.0", "price_index" => "0.12475", "country" => "Canada", "url" => "https://www.lcbo.com/en/social-lite-fruit-punch-24337", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024337.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024337.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light Seltzer Strawberry", "brand" => "Bud Light", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "3.1", "volume" => "473", "alcohol_content" => "4.0", "price_index" => "0.1638477801268499", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-seltzer-strawberry-20352", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/3/020352.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/3/020352.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jaw Drop Flashing Peaches", "brand" => "Jaw Drop", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.0", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.09060706735125337", "country" => "Canada", "url" => "https://www.lcbo.com/en/jaw-drop-flashing-peaches-491514", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/5/491514.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/5/491514.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Pear Gin Smash", "brand" => "Georgian Bay", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/georgian-bay-pear-gin-smash-24424", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024424.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024424.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bud Light Seltzer Out Of Office Mixer", "brand" => "Bud Light", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "28.95", "volume" => "4260", "alcohol_content" => "4.0", "price_index" => "0.1698943661971831", "country" => "Canada", "url" => "https://www.lcbo.com/en/bud-light-seltzer-out-of-office-mixer-24403", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024403.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024403.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Vizzy Hard Seltzer Strawberry Lemonade", "brand" => "Vizzy", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/vizzy-hard-seltzer-strawberry-lemonade-24391", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024391.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024391.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Twisted Shot PussyCat", "brand" => "Twisted Shotz", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "10.45", "volume" => "120", "alcohol_content" => "20.0", "price_index" => "0.4354166666666666", "country" => "New Zealand", "url" => "https://www.lcbo.com/en/pussycat-twisted-shot-19113", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019113.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019113.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Vodka Crushed Mixer Pack", "brand" => "Black Fly", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "25.95", "volume" => "4260", "alcohol_content" => "7.0", "price_index" => "0.08702213279678067", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-fly-vodka-crushed-mixer-pack-24932", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/9/024932.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/9/024932.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "White Claw Hard Seltzer Pineapple", "brand" => "White Claw", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/white-claw-hard-seltzer-pineapple-24316", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024316.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024316.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Espresso Martini Fizz", "brand" => "Aloette RTD", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.25", "volume" => "473", "alcohol_content" => "5.5", "price_index" => "0.12492792619642513", "country" => "Canada", "url" => "https://www.lcbo.com/en/aloette-espresso-martini-25274", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/2/025274.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/5/2/025274.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Lemon Lime Vodka Soda", "brand" => "Cottage Springs", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.75", "volume" => "355", "alcohol_content" => "5.0", "price_index" => "0.15492957746478872", "country" => "Canada", "url" => "https://www.lcbo.com/en/cottage-springs-lemon-lime-vodka-soda-553529", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/3/5/553529.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/3/5/553529.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bee's Knees", "brand" => "Bee's Knees", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "2.95", "volume" => "355", "alcohol_content" => "5.0", "price_index" => "0.16619718309859155", "country" => "Canada", "url" => "https://www.lcbo.com/en/bee-s-knees-16225", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/2/016225.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/6/2/016225.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "High Noon Pineapple", "brand" => "High Noon", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "2.95", "volume" => "355", "alcohol_content" => "4.5", "price_index" => "0.18466353677621286", "country" => "United States", "url" => "https://www.lcbo.com/en/high-noon-pineapple-24335", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024335.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024335.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "H2 Craft Spiritliss Hibiscus Non-Alcoholic Gin & Tonic", "brand" => "Spiritliss", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "2.5", "volume" => "355", "alcohol_content" => "0.5", "price_index" => "1.408450704225352", "country" => "Canada", "url" => "https://www.lcbo.com/en/h2-craft-spiritliss-hibiscus-non-alcoholic-gin-tonic-17435", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/4/017435.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/7/4/017435.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Vodka & Soda White Peach Rose", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "10.55", "volume" => "1420", "alcohol_content" => "4.5", "price_index" => "0.16510172143974963", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-vodka-soda-white-peach-rose-14618", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/6/014618.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/6/014618.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Well Hibiscus Vodka Lemonade", "brand" => "Well", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "2.95", "volume" => "355", "alcohol_content" => "4.0", "price_index" => "0.20774647887323944", "country" => "Canada", "url" => "https://www.lcbo.com/en/well-hibiscus-infused-lemonade-14918", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/9/014918.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/9/014918.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "White Claw Hard Seltzer Black Cherry", "brand" => "White Claw", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/white-claw-hard-seltzer-black-cherry-14486", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014486.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014486.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Cranberry Gin Smash", "brand" => "Georgian Bay", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.1", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.1310782241014799", "country" => "Canada", "url" => "https://www.lcbo.com/en/georgian-bay-cranberry-gin-smash-570705", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/0/7/570705.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/7/0/7/570705.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Ontario Peach Vodka Soda", "brand" => "Cottage Springs", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.75", "volume" => "355", "alcohol_content" => "5.0", "price_index" => "0.15492957746478872", "country" => "Canada", "url" => "https://www.lcbo.com/en/cottage-springs-ontario-peach-vodka-soda-553537", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/3/5/553537.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/3/5/553537.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jaw Drop Squirting Oranges", "brand" => "Jaw Drop", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.0", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.09060706735125337", "country" => "Canada", "url" => "https://www.lcbo.com/en/jaw-drop-squirting-oranges-407478", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/7/4/407478.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/7/4/407478.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "One, Two Tea! White Tea", "brand" => "One, Two, Tea", "category" => "Coolers", "subcategory" => "Teas", "price" => "2.95", "volume" => "473", "alcohol_content" => "4.3", "price_index" => "0.14504154579871184", "country" => "Canada", "url" => "https://www.lcbo.com/en/one-two-tea-white-tea-24387", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024387.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024387.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sandbagger Hard Seltzer", "brand" => "Sandbagger", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "2.85", "volume" => "355", "alcohol_content" => "5.0", "price_index" => "0.16056338028169015", "country" => "Canada", "url" => "https://www.lcbo.com/en/sandbagger-hard-seltzer-19472", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/4/019472.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/4/019472.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mott's Clamato Caesar Chipotle Lime", "brand" => "Mott's", "category" => "Coolers", "subcategory" => "Caesars", "price" => "3.15", "volume" => "458", "alcohol_content" => "5.5", "price_index" => "0.12504962286621674", "country" => "United States", "url" => "https://www.lcbo.com/en/mott-s-clamato-caesar-chipotle-lime-24341", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024341.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024341.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Crazy Uncle Hard Root Beer For Grown Ups", "brand" => "Crazy Uncle", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.05", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12896405919661733", "country" => "Canada", "url" => "https://www.lcbo.com/en/crazy-uncle-hard-root-beer-for-grown-ups-448779", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/8/7/448779.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/8/7/448779.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "29.45", "volume" => "3960", "alcohol_content" => "5.0", "price_index" => "0.14873737373737372", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-ice-321778", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/2/1/7/321778.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/3/2/1/7/321778.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nutrl Vodka Soda Mixed Pack", "brand" => "Nutrl", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "28.95", "volume" => "4260", "alcohol_content" => "5.0", "price_index" => "0.13591549295774646", "country" => "Canada", "url" => "https://www.lcbo.com/en/nutrl-vodka-soda-mixed-pack-14994", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/9/014994.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/9/014994.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Cottage Springs Watermelon", "brand" => "Cottage Springs", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.7", "volume" => "355", "alcohol_content" => "5.0", "price_index" => "0.15211267605633805", "country" => "Canada", "url" => "https://www.lcbo.com/en/cottage-springs-watermelon-649491", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/9/4/649491.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/9/4/649491.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mott's Clamato Caesar Sriracha", "brand" => "Mott'S Original Clamato Caesar", "category" => "Coolers", "subcategory" => "Caesars", "price" => "3.05", "volume" => "458", "alcohol_content" => "5.5", "price_index" => "0.12107979356887652", "country" => "United States", "url" => "https://www.lcbo.com/en/mott-s-clamato-caesar-sriracha-19097", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/0/019097.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/0/019097.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Sway Vodka Soda Raspberry Shimmy", "brand" => "Squeezed Beverages", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "2.75", "volume" => "355", "alcohol_content" => "6.0", "price_index" => "0.12910798122065728", "country" => "Canada", "url" => "https://www.lcbo.com/en/sway-vodka-soda-raspberry-shimmy-19152", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019152.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019152.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Local 55 Vodka Soda Raspberry", "brand" => "Black Fly", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "9.75", "volume" => "1420", "alcohol_content" => "2.8", "price_index" => "0.24522132796780685", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-fly-local-55-vodka-soda-raspberry-14496", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014496.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014496.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Rev Grapefruit Watermelon (PET)", "brand" => "Rev", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "2.95", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.08909694956206583", "country" => "Canada", "url" => "https://www.lcbo.com/en/rev-grapefruit-watermelon-pet-649442", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/9/4/649442.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/9/4/649442.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Canadian Club & Ginger Ale", "brand" => "Canadian Club Rtd", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "3.05", "volume" => "473", "alcohol_content" => "6.0", "price_index" => "0.10747004933051445", "country" => "Canada", "url" => "https://www.lcbo.com/en/canadian-club-ginger-ale-273110", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/3/1/273110.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/3/1/273110.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Georgian Bay Gin, Coolers + FREE sunglasses & limited release glasses", "brand" => "GEORGIAN BAY", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "47.35", "volume" => "2642", "alcohol_content" => "40.0", "price_index" => "0.04480507191521575", "country" => "Canada", "url" => "https://www.lcbo.com/en/georgian-bay-gin-coolers-free-sunglasses-limited-release-glasses-28009", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/8/0/028009.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/8/0/028009.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jaw Drop Gushing Grapes", "brand" => "Jaw Drop", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "2.6", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.07852612503775293", "country" => "Canada", "url" => "https://www.lcbo.com/en/jaw-drop-gushing-grapes-554386", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/4/3/554386.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/4/3/554386.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Nude Gin Soda Mixed Berry", "brand" => "Nude Vodka Soda", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12473572938689217", "country" => "Canada", "url" => "https://www.lcbo.com/en/nude-gin-soda-mixed-berry-14666", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/6/014666.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/6/014666.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Great Lakes Spirits Vodka Soda With Citrus", "brand" => "Great Lakes", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.35", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.09936575052854123", "country" => "Canada", "url" => "https://www.lcbo.com/en/great-lakes-spirits-vodka-soda-with-citrus-19127", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019127.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019127.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Vodka Crushed Peach", "brand" => "Black Fly", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "2.95", "volume" => "473", "alcohol_content" => "7.0", "price_index" => "0.08909694956206583", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-fly-vodka-crushed-peach-19111", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019111.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019111.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Mott's Clamato Caesar Extra Spicy", "brand" => "Mott'S", "category" => "Coolers", "subcategory" => "Caesars", "price" => "24.25", "volume" => "4260", "alcohol_content" => "5.5", "price_index" => "0.10349978659837815", "country" => "Canada", "url" => "https://www.lcbo.com/en/mott-s-clamato-caesar-extra-spicy-627513", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/2/7/5/627513.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/2/7/5/627513.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "No Boats On Sunday Wild Strawberry Rhubarb", "brand" => "No Boats On Sunday Rtd", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.85", "volume" => "355", "alcohol_content" => "4.5", "price_index" => "0.17840375586854462", "country" => "Canada", "url" => "https://www.lcbo.com/en/no-boats-on-sunday-wild-strawberry-rhubarb-19131", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019131.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019131.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Breezer Tropical Orange Smoothie (PET)", "brand" => "Bacardi Breezer", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "6.95", "volume" => "1000", "alcohol_content" => "4.6", "price_index" => "0.15108695652173915", "country" => "Canada", "url" => "https://www.lcbo.com/en/breezer-tropical-orange-smoothie-pet-75200", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/7/5/2/075200.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/7/5/2/075200.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Jose Cuervo Golden Margarita", "brand" => "Jose Cuervo Opc", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "17.45", "volume" => "750", "alcohol_content" => "12.7", "price_index" => "0.1832020997375328", "country" => "United States", "url" => "https://www.lcbo.com/en/jose-cuervo-golden-margarita-54262", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/5/4/2/054262.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/5/4/2/054262.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Spirits Peach & Blackcurrant", "brand" => "Muskoka", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.95", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.12473572938689217", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-spirits-peach-blackcurrant-19252", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/2/019252.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/2/019252.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Vex Raspberry Lemonade", "brand" => "Vex", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "13.0", "volume" => "1980", "alcohol_content" => "7.0", "price_index" => "0.09379509379509378", "country" => "Canada", "url" => "https://www.lcbo.com/en/vex-raspberry-lemonade-273219", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/3/2/273219.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/3/2/273219.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "SoCIAL LITE Mixed Pack", "brand" => "Social Lite", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "28.95", "volume" => "4260", "alcohol_content" => "4.0", "price_index" => "0.1698943661971831", "country" => "Canada", "url" => "https://www.lcbo.com/en/social-lite-mixed-pack-649426", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/9/4/649426.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/4/9/4/649426.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Palm Bay Iced Tea Pineapple Peach", "brand" => "Palm Bay", "category" => "Coolers", "subcategory" => "Teas", "price" => "10.55", "volume" => "2130", "alcohol_content" => "5.0", "price_index" => "0.09906103286384978", "country" => "Canada", "url" => "https://www.lcbo.com/en/palm-bay-iced-tea-pineapple-peach-515429", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/5/4/515429.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/5/4/515429.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Social Lite Bold Orange Vodka Soda", "brand" => "Social Lite", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "13.95", "volume" => "2130", "alcohol_content" => "6.0", "price_index" => "0.10915492957746478", "country" => "Canada", "url" => "https://www.lcbo.com/en/social-lite-bold-orange-vodka-soda-14479", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014479.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014479.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Palm Bay Vodka Soda Tangerine Lime", "brand" => "Palm Bay", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "13.5", "volume" => "2130", "alcohol_content" => "6.0", "price_index" => "0.1056338028169014", "country" => "Canada", "url" => "https://www.lcbo.com/en/palm-bay-vodka-soda-tangerine-lime-555896", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/5/8/555896.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/5/8/555896.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Beach Bum Lemon Coconut", "brand" => "Beach Bum Rtd", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "2.3", "volume" => "473", "alcohol_content" => "5.0", "price_index" => "0.09725158562367862", "country" => "Canada", "url" => "https://www.lcbo.com/en/beach-bum-lemon-coconut-14491", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014491.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014491.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Smirnoff Ice Life Of The Party Pack", "brand" => "Smirnoff", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "29.2", "volume" => "4260", "alcohol_content" => "5.0", "price_index" => "0.13708920187793427", "country" => "Canada", "url" => "https://www.lcbo.com/en/smirnoff-ice-life-of-the-party-pack-21902", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/9/021902.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/9/021902.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Muskoka Spirits Hard Sparkling Water Mixer LCO", "brand" => "Muskoka", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "28.95", "volume" => "4260", "alcohol_content" => "5.0", "price_index" => "0.13591549295774646", "country" => "Canada", "url" => "https://www.lcbo.com/en/muskoka-spirits-hard-sparkling-water-mixer-lco-20845", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/8/020845.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/0/8/020845.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Ace Hill Strawberry Grapefruit Vodka Soda", "brand" => "Ace Hill Beer Company", "category" => "Coolers", "subcategory" => "Seltzers & Sodas", "price" => "2.15", "volume" => "355", "alcohol_content" => "4.5", "price_index" => "0.13458528951486698", "country" => "Canada", "url" => "https://www.lcbo.com/en/ace-hill-strawberry-grapefruit-vodka-soda-19155", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019155.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019155.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Bacardi Mojito Cocktail", "brand" => "Bacardi", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "16.0", "volume" => "750", "alcohol_content" => "12.5", "price_index" => "0.17066666666666666", "country" => "United States", "url" => "https://www.lcbo.com/en/bacardi-mojito-cocktail-19591", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/5/019591.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/5/019591.jpg.thumb.1280.1280.png",
        ]);
        DB::table('alcohols')->insert([
            "title" => "Black Fly Vodka Soda Gin Soda Mixer Pack", "brand" => "Black Fly", "category" => "Coolers", "subcategory" => "Coolers & Cocktails", "price" => "25.95", "volume" => "4260", "alcohol_content" => "6.0", "price_index" => "0.10152582159624413", "country" => "Canada", "url" => "https://www.lcbo.com/en/black-fly-vodka-soda-gin-soda-mixer-pack-15368", "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/3/015368.jpg.thumb.319.319.png", "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/5/3/015368.jpg.thumb.1280.1280.png",
        ]);
    }
}
