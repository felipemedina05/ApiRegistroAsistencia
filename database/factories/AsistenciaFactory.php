<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asistencia>
 */
class AsistenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
                      
            'fecha_asistencia' =>fake()->date(),
            'asistencia' =>fake()->randomElement(['A','T','F']),
            'alumno_id' =>fake()->numberBetween(1,20),
            'curso_id' =>fake()->numberBetween(1,7),

        ];
    }
}


