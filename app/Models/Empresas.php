<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    use HasFactory;

    protected $table = 'empresas';

    protected $fillable = [
        'nit',
        'nombre',
        'direccion',
        'telefono',
        'mision',
        'vision',
        'ruta_logo',
        'objetivos',
        'nombre_corto',
        'siglas',
    ];
}
