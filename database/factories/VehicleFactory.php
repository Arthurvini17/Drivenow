<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_vehicle' => fake()->name(),
            'price' => fake()->numberBetween(50_000, 1_000_000_000),
            'year' => fake()->date(),
            'model' => fake()->userName(),
            'marca' => fake()->lastName()
        ];
    }
}
