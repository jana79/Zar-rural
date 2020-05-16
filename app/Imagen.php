<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model {

    protected $primaryKey = 'id_img';
    protected $table = "imagenes";
    protected $fillable = ['id_img', 'img', 'fecha_img',
        'actividad_id', 'user_id'
    ];

}
