<?php

namespace Database\Factories;

use App\Models\guest;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\bookings>
 */
class BookingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date_from' => $this->faker->unique()->date,
            'date_to' => $this->faker->unique()->date,
            'guest_id' => Guest::factory()
        ];
    }
}
