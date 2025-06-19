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
        'subject' => $this->faker->words(3, true),
        'course_code' => strtoupper($this->faker->bothify('CS###')),
        'credits' => $this->faker->randomElement([2, 3, 4]),
        'description' => $this->faker->sentence,
    ];
    }

}
