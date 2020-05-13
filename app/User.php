<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {

    use Notifiable;

    protected $primaryKey = 'id_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user', 'nombre', 'apellidos', 'email',
        'name', 'password', 'admin', 'colaborador', 'bloqueado'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //relación 1:N con actividades
    public function actividades() {

        return $this->hasMany("App\Actividad", "user_id", "id_user");
    }

    //relación 1:N con comentarios
    public function comentarios() {

        return $this->hasMany("App\Comentario", "user_id", "id_user");
    }

    //relación 1:N con imágenes
    public function imagenes() {

        return $this->hasMany("App\Imagen", "user_id", "id_user");
    }

}
