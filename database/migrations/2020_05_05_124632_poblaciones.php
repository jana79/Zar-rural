<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class Poblaciones extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('poblaciones', function ($table) {

            $table->id('id_poblacion');
            $table->string('nombre_poblacion');
            $table->text('descripcion_poblacion');
            $table->string('imagen_poblacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('poblaciones');
    }

}
