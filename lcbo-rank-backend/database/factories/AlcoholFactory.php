<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alcohol>
 */
class AlcoholFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $price = $this->faker->numberBetween(10, 1000);
        $alcohol_content = $this->faker->numberBetween(4, 45);
        $volume = $this->faker->numberBetween(375, 1400);

        return [
            'id' => $this->faker->unique()->numberBetween(0, 10000),
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
            'price_index' => $price / (($alcohol_content / 100)*$volume),
            'country' => $this->faker->country(),
            'url' => $this->faker->url()
        ];
    }
}
