<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory {
    public function definition(): array
    {
        $title = $this->faker->realText(rand(10, 100));
        $description = $this->faker->realText(rand(100, 500));
        $time = $this->faker->dateTimeBetween("-30 days", "-1 days");

        return [
            'title' => $title,
            'description' => $description,
            'created_at' => $time,
            'updated_at' => $time,
        ];
    }
}
