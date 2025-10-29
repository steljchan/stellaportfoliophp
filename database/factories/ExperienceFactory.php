<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExperienceFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'company' => $this->faker->company(),
            'icon' => $this->faker->randomElement([
                'fa-briefcase',
                'fa-users',
                'fa-graduation-cap',
                'fa-calendar-alt',
                'fa-lightbulb',
                'fa-code',
                'fa-laptop',
                'fa-project-diagram'
            ]),
            'start_date' => $this->faker->date('Y-m-d', '2022-01-01'),
            'end_date' => $this->faker->optional()->date('Y-m-d', '2025-01-01'),
        ];
    }
}
