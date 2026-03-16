<?php

namespace Database\Factories;

use App\Models\User;
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
            "item_type"=> $this->faker->randomElement(['table', 'tv', 'bottle', 'electronic']),
            "price_level"=> $this->faker->randomElement(['cheap', 'moderate', 'expensive', 'unknown']),
            "description"=> $this->faker->paragraph(),
            'author_id'   => User::exists() ? User::inRandomOrder()->first()->id : User::factory(),
        ];
    }
}
