<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicles>
 */
class VehiclesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'price' => fake()->numberBetween(50_000, 1_000_000_000),
            'year' => fake()->year(),
            'model' => fake()->userName(),
            'marca' => fake()->lastName(),
            'image' => 'https://images.unsplash.com/photo-1573447822072-082f2e9fddd8?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'description' => fake()->realTextBetween(160, 200, 2),
        ];
    }
}
