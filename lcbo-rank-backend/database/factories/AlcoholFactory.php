<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Alcohol>
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
        $price = $this->faker->numberBetween(10, 50);
        $alcohol_content = $this->faker->numberBetween(4, 45);
        $volume = $this->faker->numberBetween(375, 1400);

        return [
            'id' => (int)$this->faker->uuid(),
            'created_at' => $this->faker->time(),
            'updated_at' => $this->faker->time(),
            'title' => $this->faker->unique()->words(3, true),
            'brand' => $this->faker->company(),
            'category' => '',
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
