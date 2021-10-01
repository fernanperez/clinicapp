<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $fillable = [
        'nombre',
        'telefono',
        'correo',
        'direccion',
        'cargo',
        'mensaje',
        'ciudad_id',
    ];

    // ! Relación inversa de la tabla cliente a la tabla ciudades; donde un cliente pertenece a una ciudad
    public function ciudad()
    {
        return $this->belongsTo(Ciudades::class, 'ciudad_id');
    }
}
