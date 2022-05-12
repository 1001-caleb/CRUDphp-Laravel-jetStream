@extends("layouts.plantillabase")

@section("contenido")
<h2>EDITAR REGISTRO</h2>
<form action="/articulos/{{$articulo->id}}" method="POST">
    @csrf
    @method("PUT")

  <div class="mb-3">
    <label for="" class="form-label">Código Regional</label>
    <input id="codigo" name="codigo_regional" type="text" class="form-control" tabindex="1" value="{{$articulo->codigo_regional}}">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre regional</label>
    <input id="descripcion" name="nombre_regional" type="text" class="form-control" tabindex="2" value="{{$articulo->nombre_regional}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Codigo centro</label>
    <input id="cantidad" name="codigo_centro" type="number" class="form-control" tabindex="3" value="{{$articulo->codigo_centro}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre centro</label>
    <input id="precio" name="nombre_centro" type="text"  class="form-control" value="{{$articulo->nombre_centro}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Codigo programa</label>
    <input id="precio" name="codigo_programa" type="text"  class="form-control" value="{{$articulo->codigo_programa}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre programa</label>
    <input id="precio" name="nombre_programa" type="text"  class="form-control" value="{{$articulo->nombre_programa}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">NRO. Cedula</label>
    <input id="precio" name="nro_cedula" type="text"  class="form-control" value="{{$articulo->nro_cedula}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre instructor</label>
    <input id="precio" name="nombre_instructor" type="text"  class="form-control" value="{{$articulo->nombre_instructor}}">
  </div>

  <span class="subtitulo">VINCULACIÓN</span>

  <div class="mb-3">
    <label for="" class="form-label">Año de ingreso al SENA</label>
    <input id="precio" name="ano_ingreso_sena" type="text"  class="form-control" value="{{$articulo->ano_ingreso_sena}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Tipo de vinculación de ingreso </label>
    <input id="precio" name="tipo_vinculacion_ingreso" type="text"  class="form-control" value="{{$articulo->tipo_vinculacion_ingreso}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Año de vinculación a la planta </label>
    <input id="precio" name="ano_vinculacion_planta" type="text"  class="form-control" value="{{$articulo->ano_vinculacion_planta}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">tipo de vinculación actual</label>
    <input id="precio" name="tipo_vinculacion_actual" type="text"  class="form-control" value="{{$articulo->tipo_vinculacion_actual}}">
  </div>

  <span class="subtitulo">SSEMI</span>

  <div class="mb-3">
    <label for="" class="form-label">Grado inicial</label>
    <input id="precio" name="grado_inicial" type="text"  class="form-control" value="{{$articulo->grado_inicial}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Grado actual</label>
    <input id="precio" name="grado_actual" type="text"  class="form-control" value="{{$articulo->grado_actual}}">
  </div>

  <span  class="subtitulo"F>Distribución de Tiempo
Dedicación semanal (horas) al programa - 
Resolución 642 de 2004</span>


  <div class="mb-3">
    <label for="" class="form-label">Total de horas de vinculación al SENA</label>
    <input id="precio" name="horas_vinculacion_sena" type="text"  class="form-control" value="{{$articulo->horas_vinculacion_sena}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Docencia</label>
    <input id="precio" name="docencia" type="text"  class="form-control" value="{{$articulo->docencia}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Investigación</label>
    <input id="precio" name="investigacion" type="text"  class="form-control" value="{{$articulo->investigacion}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Extensión / Relacionamieno Sector Externo</label>
    <input id="precio" name="relacionamiento_sector_externo" type="text"  class="form-control" value="{{$articulo->relacionamiento_sector_externo}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Porcentaje de horas de dedicación al programa</label>
    <input id="precio" name="porcentaje_hora_dedicacion_programa" type="text"  class="form-control" value="{{$articulo->porcentaje_hora_dedicacion_programa}}">
  </div>

  <span class="subtitulo"F>Producción del Instructor Registrada y Verificable en CVLAC / SEMI</span>
  <div class="mb-3">
    <label for="" class="form-label">Producción de Material Didáctico como apoyo a la formación</label>
    <input id="precio" name="produccion_material_didactico" type="text"  class="form-control" value="{{$articulo->produccion_material_didactico}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Vinculación a proyectos de investigación</label>
    <input id="precio" name="vinculacion_proyectos_investigacion" type="text"  class="form-control" value="{{$articulo->vinculacion_proyectos_investigacion}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Publicaciones en "El informador"</label>
    <input id="precio" name="publicaciones_informador" type="text"  class="form-control" value="{{$articulo->publicaciones_informador}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Publicaciones en otros medios</label>
    <input id="precio" name="publicaciones_otros_medios" type="text"  class="form-control" value="{{$articulo->publicaciones_otros_medios}}">
  </div>

  <span class="subtitulo"F>AÑOS DE EXPERIENCIA</span>
  <div class="mb-3">
    <label for="" class="form-label">Inicio experiencia profesional</label>
    <input id="precio" name="inicio_experiencia_profesional" type="date"  class="form-control" value="{{$articulo->inicio_experiencia_profesional}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fin experiencia profesional</label>
    <input id="precio" name="fin_experiencia_profesional" type="date"  class="form-control" value="{{$articulo->fin_experiencia_profesional}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Inicio experiencia docencia/formación</label>
    <input id="precio" name="inicio_experiencia_docencia" type="date"  class="form-control" value="{{$articulo->inicio_experiencia_docencia}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fin experiencia docencia/formación</label>
    <input id="precio" name="fin_experiencia_docencia" type="date"  class="form-control" value="{{$articulo->fin_experiencia_docencia}}">
  </div>

  <span class="subtitulo"F>Evolución de cualificación - Registrada en SIGEP</span> <br>
  <span class="subtitulo">Técnico</span>
  <div class="mb-3">
    <label for="" class="form-label">Año de obtención</label>
    <input id="precio" name="ano_obtencion_tecnico" type="date"  class="form-control" value="{{$articulo->ano_obtencion_tecnico}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Titulo obtenido</label>
    <input id="precio" name="titulo_obtenido_tecnico" type="text"  class="form-control" value="{{$articulo->titulo_obtenido_tecnico}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre de la institución que otorga el titulo</label>
    <input id="precio" name="ins_otorga_titulo_tecnico" type="text"  class="form-control" value="{{$articulo->ins_otorga_titulo_tecnico}}">
  </div>

  <span class="subtitulo"F>Técnologo</span>
  <div class="mb-3">
    <label for="" class="form-label">Año de obtención</label>
    <input id="precio" name="ano_obtencion_tecnologo" type="date"  class="form-control" value="{{$articulo->ano_obtencion_tecnologo}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Titulo obtenido</label>
    <input id="precio" name="titulo_obtenido_tecnologo" type="text"  class="form-control" value="{{$articulo->titulo_obtenido_tecnologo}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre de la institución que otorga el titulo</label>
    <input id="precio" name="ins_otorga_titulo_tecnologo" type="text"  class="form-control" value="{{$articulo->ins_otorga_titulo_tecnologo}}">
  </div>

  <span class="subtitulo"F>Especialización Tecnologica</span>
  <div class="mb-3">
    <label for="" class="form-label">Año de obtención</label>
    <input id="precio" name="ano_obtencion_tecnologica" type="date"  class="form-control" value="{{$articulo->ano_obtencion_tecnologica}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Titulo obtenido</label>
    <input id="precio" name="titulo_obtenido_tecnologica" type="text"  class="form-control" value="{{$articulo->titulo_obtenido_tecnologica}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre de la institución que otorga el titulo</label>
    <input id="precio" name="ins_otorga_titulo_tecnologica" type="text"  class="form-control" value="{{$articulo->ins_otorga_titulo_tecnologo}}">
  </div>

  <span class="subtitulo"F>Pregrado Universitario</span>
  <div class="mb-3">
    <label for="" class="form-label">Año de obtención</label>
    <input id="precio" name="ano_obtencion_pregrado" type="date"  class="form-control" value="{{$articulo->ano_obtencion_pregrado}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Titulo obtenido</label>
    <input id="precio" name="titulo_obtenido_pregrado" type="text"  class="form-control" value="{{$articulo->titulo_obtenido_pregrado}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre de la institución que otorga el titulo</label>
    <input id="precio" name="ins_otorga_titulo_pregrado" type="text"  class="form-control" value="{{$articulo->ins_otorga_titulo_pregrado}}">
  </div>

  <span class="subtitulo"F>Especialista</span>
  <div class="mb-3">
    <label for="" class="form-label">Año de obtención</label>
    <input id="precio" name="ano_obtencion_especialista" type="date"  class="form-control" value="{{$articulo->ano_obtencion_especialista}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Titulo obtenido</label>
    <input id="precio" name="titulo_obtenido_especialista" type="text"  class="form-control" value="{{$articulo->titulo_obtenido_especialista}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre de la institución que otorga el titulo</label>
    <input id="precio" name="ins_otorga_titulo_especialista" type="text"  class="form-control" value="{{$articulo->ins_otorga_titulo_especialista}}">
  </div>

  <span class="subtitulo"F>Maestria</span>
  <div class="mb-3">
    <label for="" class="form-label">Año de obtención</label>
    <input id="precio" name="ano_obtencion_maestria" type="date"  class="form-control" value="{{$articulo->ano_obtencion_maestria}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Titulo obtenido</label>
    <input id="precio" name="titulo_obtenido_maestria" type="text"  class="form-control" value="{{$articulo->titulo_obtenido_maestria}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre de la institución que otorga el titulo</label>
    <input id="precio" name="ins_otorga_titulo_maestria" type="text"  class="form-control" value="{{$articulo->ins_otorga_titulo_maestria}}">
  </div>

  <span class="subtitulo"F>Doctorado</span>
  <div class="mb-3">
    <label for="" class="form-label">Año de obtención</label>
    <input id="precio" name="ano_obtencion_doctorado" type="date"  class="form-control" value="{{$articulo->ano_obtencion_doctorado}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Titulo obtenido</label>
    <input id="precio" name="titulo_obtenido_doctorado" type="text"  class="form-control" value="{{$articulo->titulo_obtenido_doctorado}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre de la institución que otorga el titulo</label>
    <input id="precio" name="ins_otorga_titulo_doctorado" type="text"  class="form-control" value="{{$articulo->ins_otorga_titulo_doctorado}}">
  </div>

  <span class="subtitulo"F>Estudios en curso</span>
  <div class="mb-3">
    <label for="" class="form-label">Nombre del programa</label>
    <input id="precio" name="nombre_programa_encurso" type="text"  class="form-control" value="{{$articulo->nombre_programa_encurso}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nivel</label>
    <input id="precio" name="nivel_programa_encurso" type="text"  class="form-control" value="{{$articulo->nivel_programa_encurso}}">
  </div>


  <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn bg-naranja text-white" tabindex="4">Guardar</button>
</form>
@endsection