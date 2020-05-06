<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poblacion extends Model {

    //protected $table = "poblaciones";
    protected $keyType = "string";
    public $fillable = ['id_poblacion', 'nombre_poblacion', 'descripcion_poblacion',
        'imagen_poblacion'];

}
