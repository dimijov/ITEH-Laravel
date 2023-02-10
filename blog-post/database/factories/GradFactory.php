<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GradFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->city(),
            'drzava' => $this->faker->country(),
            'brojStanovnika' => $this->faker->numberBetween($min = 5000, $max = 150000000)
        ];
    }
}
