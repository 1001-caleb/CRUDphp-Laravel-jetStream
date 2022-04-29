<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;
    protected $fillable = [
        "codigo_regional",
        "nombre_regional",
        "codigo_centro",
        "nombre_centro",
        "codigo_programa",
        "nombre_programa",
        "nro_cedula",
        "nombre_instructor",
        "ano_ingreso_sena",
       "tipo_vinculacion_ingreso",
       "ano_vinculacion_planta",
       "tipo_vinculacion_actual",
       "grado_inicial",
       "grado_actual",
       "horas_vinculacion_sena",
       "docencia",
       "investigacion",
        "relacionamiento_sector_externo",
        "porcentaje_hora_dedicacion_programa",
        "produccion_material_didactico",
        "vinculacion_proyectos_investigacion",
        "publicaciones_informador",
       "publicaciones_otros_medios",
       "experiencia_profesional",
        "experiencia_docencia",
        "ano_obtencion_tecnico",
        "titulo_obtenido_tecnico",
        "ins_otorga_titulo_tecnico",
        "ano_obtencion_tecnologo",
        "titulo_obtenido_tecnologo",
       "ins_otorga_titulo_tecnologo",
       "ano_obtencion_tecnologica",
        "titulo_obtenido_tecnologica",
       "ins_otorga_titulo_tecnologica",
       "ano_obtencion_pregrado",
       "titulo_obtenido_pregrado",
       "ins_otorga_titulo_pregrado",
        "ano_obtencion_especialista",
      "titulo_obtenido_especialista",
       "ins_otorga_titulo_especialista",
        "ano_obtencion_maestria",
        "titulo_obtenido_maestria",
       "ins_otorga_titulo_maestria",
       "ano_obtencion_doctorado",
        "titulo_obtenido_doctorado",
       "ins_otorga_titulo_doctorado",
        "nombre_programa_encurso",
       "nivel_programa_encurso"
    ];
}
