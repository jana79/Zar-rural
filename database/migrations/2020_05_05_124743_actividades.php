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
            $table->unsignedBigInteger('id_poblacion');
            $table->foreign('id_poblacion')
                    ->references('id_poblacion')->on('poblaciones');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')
                    ->references('id_user')->on('users');
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
