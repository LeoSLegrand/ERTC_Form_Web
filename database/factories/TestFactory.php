<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Test;
use App\Models\Produit;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Test>
 */
class TestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date_test' => fake()->date(),
            'aspect' => fake()->randomElement(['liquide', 'gel', 'Poudre', 'mousse', 'baume', 'spray', 'huile']),
            'couleur' => fake()->safeColorName(),
            'ebulition' => fake()->randomElement(['faible', 'moyenne', 'haute']),
            'acidite' => fake()->numberBetween(0, 14),
            'solubilite' => fake()->randomElement(['soluble', 'insoluble']),
            'estValide' => fake()->randomElement(['Oui', 'Non']),
            'produit_id' => Produit::factory()->create(),
        ];
    }
}
