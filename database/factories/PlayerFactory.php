<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'image' => $this->faker->imageUrl(640, 480, 'people', true, 'Faker'),
            'position' => $this->faker->randomElement(['Warrior', 'Assassin', 'Mage', 'Taoist']),
        ];
    }
}
