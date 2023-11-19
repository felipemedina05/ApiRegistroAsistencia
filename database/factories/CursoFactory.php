<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $materias = ['MATEMATICAS', 'QUIMICA', 'INGLES','BIOLOGIA','ARTES','CASTELLANO','MUSICA'];

        return [
            'nombre'=>fake()->randomeElement($materias),
            'docente_id' =>fake()->numberBetween(1,14),
        ];
    }
}
