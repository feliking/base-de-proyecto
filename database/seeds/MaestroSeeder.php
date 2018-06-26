<?php

use Illuminate\Database\Seeder;
use App\Maestro;

class MaestroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Maestro::create([
          'ci' => 8991223,
          'nombre' => 'Julio Arguello',
          'colegio_id' => 2,
          'materia' => 'Matematicas',
          'experiencia' => 4
        ]);
        Maestro::create([
          'ci' => 9811223,
          'nombre' => 'Aldo Alba Cerro Grande',
          'colegio_id' => 2,
          'materia' => 'Ciencias Naturales',
          'experiencia' => 10
        ]);
        Maestro::create([
          'ci' => 3991223,
          'nombre' => 'Gina Escobar',
          'colegio_id' => 2,
          'materia' => 'Biologia',
          'experiencia' => 5
        ]);
        Maestro::create([
          'ci' => 1991223,
          'nombre' => 'Nataly Albarrazin',
          'colegio_id' => 1,
          'materia' => 'Lenguaje',
          'experiencia' => 11
        ]);
        Maestro::create([
          'ci' => 5691223,
          'nombre' => 'Julio Arguello',
          'colegio_id' => 1,
          'materia' => 'Quimica',
          'experiencia' => 4
        ]);
    }
}
