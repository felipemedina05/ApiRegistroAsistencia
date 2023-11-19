<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $docente = new DocenteSeeder();
        $alumno = new AlumnoSeeder();
        $curso = new CursoSeeder();
        $matricula = new MatriculaSeeder();
        $asistencia = new AsistenciaSeeder();
        
        $docente->run();
        $alumno->run();
        $curso->run();
        $matricula->run();
        $asistencia->run();
    }
}
