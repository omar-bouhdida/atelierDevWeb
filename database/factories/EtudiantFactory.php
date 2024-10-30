<?php

namespace Database\Factories;
use App\Models\Etudiant;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Etudiant::class;
    public function definition(): array
    {
        return [
            'nom' => $this -> faker -> lastName(),
            'prenom' => $this -> faker -> firstName(),
            'classes_id' => rand(1,6),
        ];
    }
}
