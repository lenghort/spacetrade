<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=> $this->faker->company(),
            "address"=> $this->faker->address(),
            "item_type"=> $this->faker->randomElement(['table', 'tv', 'bottle']),
            "decription"=> $this->faker->paragraph(),
        ];
    }
}
