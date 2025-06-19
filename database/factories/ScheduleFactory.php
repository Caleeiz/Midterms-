<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    return [
        'course_id' => \App\Models\Course::factory(),
        'day_of_week' => $this->faker->dayOfWeek,
        'time_slot' => $this->faker->dateTimeBetween('08:00:00', '17:00:00'),
        'room' => 'RM-' . $this->faker->numberBetween(100, 499),
        'term' => $this->faker->randomElement([1, 2]),
     ];
    }


}
