<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model {

    // El nombre de la tabla es "usuarios"
    //protected $table = "usuarios";
    //El atributo $primaryKey es id() por defecto 
    public $incrementing = true;
    protected $keyType = "string";
    public $timestamps = false;
    public $fillable = ['id_usuario', 'nombre', 'apellidos', 'email', 
        'admin', 'colaborador', 'bloqueado'];

}
