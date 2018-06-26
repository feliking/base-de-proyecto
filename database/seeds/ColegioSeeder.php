<?php

use Illuminate\Database\Seeder;
use App\Colegio;
class ColegioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Colegio::create([
          'nombre' => 'Fray Bernardino de Cardenas',
          'distrito' => 'Murillo',
          'direccion' => 'Calle Murillo Zona Mariscal Santa Cruz',
          'capacidad' => 500
        ]);
        Colegio::create([
          'nombre' => 'Rouma High School',
          'distrito' => 'Munaypata',
          'direccion' => 'Zona Villa Victoria Calle Rocendo Gutierrez',
          'capacidad' => 300
        ]);
        Colegio::create([
          'nombre' => 'Beata Placida',
          'distrito' => 'Zona Central',
          'direccion' => 'Av. 6 de Agosto Calle Felling Estrace',
          'capacidad' => 500
        ]);

    }
}
