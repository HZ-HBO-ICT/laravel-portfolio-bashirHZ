<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3, true),
            'excerpt' => $this->faker->paragraph(3, true),
            'body' => $this->faker->paragraphs(50, true),
        ];
    }
}
