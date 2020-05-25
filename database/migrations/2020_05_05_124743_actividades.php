<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class Actividades extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('actividades', function ($table) {
            $table->id('id_actividad');
            $table->string('titulo');
            $table->string('categoria');
            $table->text('descripcion_actividad');
            $table->string('portada');
            $table->unsignedBigInteger('poblacion_id');
            $table->foreign('poblacion_id')
                    ->references('id_poblacion')
                    ->on('poblaciones')
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
    public function down() {
        Schema::dropIfExists('actividades');
    }

}
