<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class Comentarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function ($table) {
            $table->id('id_comentario');
            $table->text('comentario');
            $table->date('fecha_comentario');
            $table->string('autor');
            $table->unsignedBigInteger('actividad_id');
            $table->foreign('actividad_id')
                    ->references('id_actividad')
                    ->on('actividades')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                    ->references('id_user')
                    ->on('users')
                    ->onDelete('cascade');
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
         Schema::dropIfExists('comentarios');
    }
}
