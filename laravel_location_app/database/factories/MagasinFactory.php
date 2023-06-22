<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Magasin>
 */
class MagasinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'surface'=>$this->faker->numberBetween(20,30),
            'loyer_mensuel'=>$this->faker->numberBetween(5000,9000)
        ];
    }
}
