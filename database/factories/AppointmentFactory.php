<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;
use App\Models\Service;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => Customer::inRandomOrder()->first()->id ?? Customer::factory(),
            'service_id' => Service::inRandomOrder()->first()->id ?? Service::factory(),
            'appointment_time' => $this->faker->dateTimeBetween('+1 days', '+30 days'),
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'canceled']),
        ];
    }
}
