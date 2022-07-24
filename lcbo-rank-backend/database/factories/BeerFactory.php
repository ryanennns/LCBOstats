<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BeerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->words(3, true),
            'brand' => $this->faker->company(),
            'category' => 'Beer',
            'subcategory' => 'Lager',
            'price' => $this->faker->numberBetween(10, 50),
            'alcohol_content' => $this->faker->numberBetween(4, 45),
            'country' => $this->faker->country(),
            'url' => $this->faker->url()
        ];
    }
}
