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
            $table->string("nombre_regional", 50);
            $table->integer("codigo_centro");
            $table->string("nombre_centro");
            $table->string("codigo_programa");
            $table->string("nombre_programa");
            $table->string("nro_cedula");
            $table->string("nombre_instructor");
            $table->date("ano_ingreso_sena");
            $table->string("tipo_vinculacion_ingreso");
            $table->string("ano_vinculacion_planta");
            $table->string("tipo_vinculacion_actual");
            $table->string("grado_inicial");
            $table->string("grado_actual");
            $table->string("horas_vinculacion_sena");
            $table->string("docencia");
            $table->string("investigacion");
            $table->string("relacionamiento_sector_externo");
            $table->string("porcentaje_hora_dedicacion_programa");
            $table->string("produccion_material_didactico");
            $table->string("vinculacion_proyectos_investigacion");
            $table->string("publicaciones_informador");
            $table->string("publicaciones_otros_medios");
            $table->date("inicio_experiencia_profesional");
            $table->date("fin_experiencia_profesional");
            $table->date("inicio_experiencia_docencia");
            $table->date("fin_experiencia_docencia");
            $table->date("ano_obtencion_tecnico");
            $table->string("titulo_obtenido_tecnico");
            $table->string("ins_otorga_titulo_tecnico");
            $table->date("ano_obtencion_tecnologo");
            $table->string("titulo_obtenido_tecnologo");
            $table->string("ins_otorga_titulo_tecnologo");
            $table->date("ano_obtencion_tecnologica");
            $table->string("titulo_obtenido_tecnologica");
            $table->string("ins_otorga_titulo_tecnologica");
            $table->date("ano_obtencion_pregrado");
            $table->string("titulo_obtenido_pregrado");
            $table->string("ins_otorga_titulo_pregrado");
            $table->date("ano_obtencion_especialista");
            $table->string("titulo_obtenido_especialista");
            $table->string("ins_otorga_titulo_especialista");
            $table->date("ano_obtencion_maestria");
            $table->string("titulo_obtenido_maestria");
            $table->string("ins_otorga_titulo_maestria");
            $table->date("ano_obtencion_doctorado");
            $table->string("titulo_obtenido_doctorado");
            $table->string("ins_otorga_titulo_doctorado");
            $table->string("nombre_programa_encurso");
            $table->string("nivel_programa_encurso");
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
