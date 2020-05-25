<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model {

    protected $primaryKey = 'id_comentario';
    protected $table = "comentarios";
    protected $fillable = ['id_comentario', 'comentario', 'fecha_comentario', 'autor',
        'actividad_id', 'user_id'
    ];

}
