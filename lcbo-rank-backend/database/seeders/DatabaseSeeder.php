<?php

namespace Database\Seeders;

use App\Models\Alcohol;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        (new BeerSeeder())->run();
        (new SpiritSeeder())->run();
    }
}
