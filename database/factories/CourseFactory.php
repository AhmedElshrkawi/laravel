<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->fake()->unique->words(3,true) ,
            'totalgrade' => $this->fake()->numberBetween(50,100) ,
            'description' => $this->fake()->paragraph ,
        ];
    }
}
