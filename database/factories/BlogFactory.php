<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'image' => '/images/blog/sample.jpg',
            'category' => $this->faker->word(),
            'excerpt' => $this->faker->paragraph(),
            'date' => $this->faker->date('M Y'),
            'read_time' => $this->faker->numberBetween(3, 10) . ' min read',
        ];
    }

}
