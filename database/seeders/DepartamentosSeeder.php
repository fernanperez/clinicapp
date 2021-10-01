<?php

namespace Database\Seeders;

use App\Models\Departamentos;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamentos::insert([
            ['id'=>1, 'nombre' => 'Antioquia', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>2, 'nombre' => 'Amazonas', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>3, 'nombre' => 'Arauca', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>4, 'nombre' => 'Archipielago de San Andres', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>5, 'nombre' => 'Atlantico', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>6, 'nombre' => 'Bogotá D.C', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>7, 'nombre' => 'Bolívar', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>8, 'nombre' => 'Boyacá', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>9, 'nombre' => 'Caldas', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>10, 'nombre' => 'Caquetá', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>11, 'nombre' => 'Casanare', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>12, 'nombre' => 'Cauca', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>13, 'nombre' => 'Cesar', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>14, 'nombre' => 'Chocó', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>15, 'nombre' => 'Córdoba', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>16, 'nombre' => 'Cundinamarca', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>17, 'nombre' => 'Guainía', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>18, 'nombre' => 'Guaviare', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>19, 'nombre' => 'Huila', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>20, 'nombre' => 'La Guajira', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>21, 'nombre' => 'Magdalena', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>22, 'nombre' => 'Meta', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>23, 'nombre' => 'Nariño', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>24, 'nombre' => 'Norte de Santander', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>25, 'nombre' => 'Putumayo', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>26, 'nombre' => 'Quindío', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>27, 'nombre' => 'Risaralda', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>28, 'nombre' => 'Santander', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>29, 'nombre' => 'Sucre', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>30, 'nombre' => 'Tolima', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>31, 'nombre' => 'Valle de Cauca', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>32, 'nombre' => 'Vaupés', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')],
            ['id'=>33, 'nombre' => 'Vichada', 'created_at' => Carbon::now('-05:00'), 'updated_at' => Carbon::now('-05:00')]]);
    }
}
