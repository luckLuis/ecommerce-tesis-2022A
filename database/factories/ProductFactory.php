<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    

    public function definition()
    {
        return [
            'name' => $this->faker->name,
           // 'slug' => $this->faker->slug,
            'details' => $this->faker->text(100),
            'price' => $this->faker->randomNumber(3),
            'description' => $this->faker->text(255),
        ];
    }
}