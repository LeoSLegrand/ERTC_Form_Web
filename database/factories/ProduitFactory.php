<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Produit;
use App\Models\Entreprise;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom_produit' => fake()->word(15),
            'type_produit' => fake()->randomElement(['crème hydratante', 'shampooing', 'savon', 'lotion tonique', 'masque facial', 'démaquillant', 'baume à lèvres', 'exfoliant corporel', 'sérum anti-âge','Huile pour le visage']),
            'description' => fake()->text(200),
            'entreprise_id' => Entreprise::factory()->create(),
        ];
    }
}
