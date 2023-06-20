<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AlcoholFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $price = $this->faker->numberBetween(10, 1000);
        $alcohol_content = $this->faker->numberBetween(4, 45);
        $volume = $this->faker->numberBetween(375, 1400);

        return [
            'permanent_id' => $this->faker->unique()->numberBetween(0, 10000),
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
            'title' => $this->faker->unique()->words(3, true),
            'brand' => $this->faker->company(),
            'category' => $this->faker->randomElement(
                [
                    'Beer & Cider',
                    'Spirits',
                    'Coolers',
                    'Wine'
                ]
            ),
            'subcategory' => '',
            'price' => $price,
            'volume' => $volume,
            'alcohol_content' => $alcohol_content,
            'price_index' => $price / (($alcohol_content / 100) * $volume),
            'country' => $this->faker->country(),
            'url' => $this->faker->url(),
            'out_of_stock' => $this->faker->boolean(),
            'description' => $this->faker->words(3, true),
            'rating' => $this->faker->numberBetween(0, 5),
            'reviews' => $this->faker->randomNumber(),
            'is_buyable' => true,
        ];
    }
}
