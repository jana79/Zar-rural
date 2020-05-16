<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model {

    protected $primaryKey = 'id_actividad';
    protected $table = "actividades";
    protected $fillable = ['id_actividad', 'titulo', 'categoria', 'descripcion_actividad',
        'portada', 'poblacion_id', 'user_id'];
    
    //relación 1:N con comentarios
    public function comentarios(){
        
        return $this->hasMany("App\Comentario", "actividad_id", "id_actividad");
    }
    
    //relación 1:N con comentarios
    public function imagenes(){
        
        return $this->hasMany("App\Imagen", "actividad_id", "id_actividad");
    }

}
