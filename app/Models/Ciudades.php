<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
    use HasFactory;

    protected $table = 'ciudades';

    protected $fillable = [
        'nombre',
        'departamento_id',
    ];

    // ! Relación inversa de la tabla ciudad a tabla departamento; donde una ciudad esta en un departamento
    public function departamento()
    {
        return $this->belongsTo(Departamentos::class, 'departamento_id');
    }

    // ! Relación de uno a muchos, donde una ciudad tiene muchos clientes
    public function info_cliente()
    {
        return $this->hasMany(Clientes::class, 'ciudad_id', 'id');
    }
}
