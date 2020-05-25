<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poblacion extends Model {

    protected $primaryKey = 'id_poblacion';
    protected $table = "poblaciones";
    protected $fillable = ['id_poblacion', 'nombre_poblacion', 'descripcion_poblacion',
        'imagen_poblacion'];
    
    //relación 1:N con actividades
    public function actividades(){
        
        return $this->hasMany("App\Actividad", "poblacion_id", "id_poblacion");
    }
    
    //buscador de cabecera
//    public function buscarPoblacion($query, $nombre_poblacion){
//        if($nombre_poblacion){
//            return $query->where('nombre_poblacion','LIKE',"%$nombre_poblacion%");
//        }
//    }

}
