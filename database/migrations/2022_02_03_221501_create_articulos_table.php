<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string("codigo_regional", 10);
            $table->string("hoja_de_vida");
            $table->string("nombre_regional", 50);
            $table->integer("codigo_centro");
            $table->string("nombre_centro");
            $table->string("codigo_programa");
            $table->string("nro_cedula");
            $table->string("nombre_instructor");
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
        Schema::dropIfExists('articulos');
    }
}
