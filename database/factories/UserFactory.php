<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        

        return [
            'first_name' => fake()->name(),
            'second_name' => fake()->name(),
            'birth_date' => fake()->dateTimeThisMonth(),
            'gender' => fake()->randomElement(['male', 'female']),
            'street_address' => fake()->city(),
            'street_address_second' => fake()->city(),
            'city' => fake()->city(),
            'region' => fake()->country(),
            'postal' => fake()->postcode(),
            'status' => fake()->randomElement(['single', 'married']),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
