<?php

namespace Database\Seeders;

use App\Models\Empresas;
use Illuminate\Database\Seeder;

class EmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $empresas = new Empresas();
       $empresas->nit = '123456789-6';
       $empresas->nombre = 'ClinicApp';
       $empresas->direccion = 'CARRERA 27 A 81 04 TORRE 8 APARTAMENTO 101';
       $empresas->telefono = '3002158902';
       $empresas->correo = 'info@clinicapp.com.co';
       $empresas->quienes_somos = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.';
       $empresas->mision = 'Somos una empresa basada en el modelo de software as service, ponemos a su disposición softwares y soluciones de tecnología por medio de internet; garantizamos a nuestros clientes la accesibilidad, la conectividad y los servidores necesarios para el funcionamiento del servicio.';
       $empresas->vision = 'Para el 2027 superar ventas anuales que en 2020 fueron de 120.000 US y de esta manera posicionarnos como lideres en el mercado a nivel nacional e internacional.';
       $empresas->ruta_logo = '';
       $empresas->objetivos = '';
       $empresas->nombre_corto = '';
       $empresas->siglas = '';

       $empresas->save();

    }
}
