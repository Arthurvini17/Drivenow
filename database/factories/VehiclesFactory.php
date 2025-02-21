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
            'image' => 'https://avatar.iran.liara.run/public',
            'description' => fake()->realTextBetween(160, 200, 2),
        ];
    }
}
