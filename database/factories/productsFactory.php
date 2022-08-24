<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class productsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->text(20),
            "category_id" => 1,
            "slug" => str_replace(" ", "-", $this->faker->unique()->sentence(5)),
            "excerpt" => $this->faker->sentence(2),
            "body" => $this->faker->paragraph(5)
        ];
    }
}
