<?php

namespace Database\Seeders;

use App\Models\Alcohol;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $testBooze = Alcohol::factory()->create([
            'title'    => 'Ryan\'s OogaBooga Lager',
            'category' => Alcohol::BEER_AND_CIDER,
        ]);

        for ($i = 0; $i < 10; $i++) {
            $testBooze->priceChanges()->create([
                'price'      => rand(10.00, 100.0),
                'created_at' => now()->addDays(rand(1, 100)),
                'updated_at' => now()->addDays(rand(1, 100)),
            ]);
        }
    }
}
