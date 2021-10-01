<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    use HasFactory;

    protected $table = 'departamentos';

    protected $fillable = [
        'nombre',
    ];


    // ! Relación directa con la tabla ciudades; donde un departamento tiene muchas ciudades
    public function info_ciudad()
    {
        return $this->hasMany(Ciudades::class, 'departamento_id', 'id');
    }
}
