<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    //protected $table = "actividades";
    protected $keyType = "string";
    
    public $fillable = ['id_actividad', 'titulo', 'categoria', 'descripción_actividad', 
        'portada', 'id_poblacion', 'id_usuario'];
   
}
