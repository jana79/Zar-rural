<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class Imagenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('imagenes', function ($table) {
            $table->id('id_img');
            $table->text('img');
            $table->date('fecha_img');
            $table->unsignedBigInteger('actividad_id');
            $table->foreign('actividad_id')
                    ->references('id_actividad')->on('actividades');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                    ->references('id_user')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('imagenes');
    }
}
