@extends("layouts.plantillabase")

@section("contenido")
<h2>CREAR REGISTROS</h2>
<form action="/articulos" method="POST">
  @csrf
<div class="mb-3">
    <label for="" class="form-label">Código Regional</label>
    <input id="codigo" name="codigo_regional" type="text" class="form-control" required>    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre regional</label>
    <input id="descripcion" name="nombre_regional" type="text" class="form-control" required> 
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Codigo centro</label>
    <input id="cantidad" name="codigo_centro" type="text" class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre centro</label>
    <input id="precio" name="nombre_centro" type="text"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Codigo programa</label>
    <input id="precio" name="codigo_programa" type="text"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre programa</label>
    <input id="precio" name="nombre_programa" type="text"  class="form-control" value="" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">NRO. Cedula</label>
    <input id="precio" name="nro_cedula" type="text"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre instructor</label>
    <input id="precio" name="nombre_instructor" type="text"  class="form-control"  required>
  </div>

  <span class="subtitulo">VINCULACIÓN</span>

  <div class="mb-3">
    <label for="" class="form-label">Año de ingreso al SENA</label>
    <input id="precio" name="ano_ingreso_sena" type="date"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Tipo de vinculación de ingreso </label>
    <input id="precio" name="tipo_vinculacion_ingreso" type="text"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Año de vinculación a la planta </label>
    <input id="precio" name="ano_vinculacion_planta" type="date"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">tipo de vinculación actual</label>
    <input id="precio" name="tipo_vinculacion_actual" type="text"  class="form-control" required>
  </div>

  <span class="subtitulo">SSEMI</span>

  <div class="mb-3">
    <label for="" class="form-label">Grado inicial</label>
    <input id="precio" name="grado_inicial" type="text"  class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Grado actual</label>
    <input id="precio" name="grado_actual" type="text"  class="form-control" required>
  </div>

  <span class="subtitulo">Distribución de Tiempo De dicación semanal (horas) al programa - Resolución 642 de 2004</span>

<div class="mb-3">
    <label for="" class="form-label">Total de horas de vinculación al SENA</label>
    <input id="precio" name="horas_vinculacion_sena" type="text"  class="form-control" required>
  </div>


  <div class="mb-3">
    <label for="" class="form-label">Docencia</label>
    <input id="precio" name="docencia" type="text"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Investigación</label>
    <input id="precio" name="investigacion" type="text"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Extensión / Relacionamieno Sector Externo</label>
    <input id="precio" name="relacionamiento_sector_externo" type="text"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Porcentaje de horas de dedicación al programa</label>
    <input id="precio" name="porcentaje_hora_dedicacion_programa" type="text"  class="form-control" required>
  </div>

  <span class="subtitulo">Producción del Instructor Registrada y Verificable en CVLAC / SEMI</span>
  <div class="mb-3">
    <label for="" class="form-label">Producción de Material Didáctico como apoyo a la formación</label>
    <input id="precio" name="produccion_material_didactico" type="text"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Vinculación a proyectos de investigación</label>
    <input id="precio" name="vinculacion_proyectos_investigacion" type="text"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Publicaciones en "El informador"</label>
    <input id="precio" name="publicaciones_informador" type="text"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Publicaciones en otros medios</label>
    <input id="precio" name="publicaciones_otros_medios" type="text"  class="form-control" required>
  </div>

  <span class="subtitulo">AÑOS DE EXPERIENCIA</span>
  <div class="mb-3">
    <label for="" class="form-label">Inicio de experiencia profesional</label>
    <input id="precio" name="inicio_experiencia_profesional" type="date"  class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fin de experiencia profesional</label>
    <input id="precio" name="fin_experiencia_profesional" type="date"  class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Inicio de experiencia docencia/formación</label>
    <input id="precio" name="inicio_experiencia_docencia" type="date" inicio_ class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fin de experiencia docencia/formación</label>
    <input id="precio" name="fin_experiencia_docencia" type="date" inicio_ class="form-control" required>
  </div>

  <span class="subtitulo">Evolución de cualificación - Registrada en SIGEP</span><br>
  <span class="subtitulo">Técnico</span>
  <div class="mb-3">
    <label for="" class="form-label">Año de obtención</label>
    <input id="precio" name="ano_obtencion_tecnico" type="date"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Titulo obtenido</label>
    <input id="precio" name="titulo_obtenido_tecnico" type="text"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre de la institución que otorga el titulo</label>
    <input id="precio" name="ins_otorga_titulo_tecnico" type="text"  class="form-control" required>
  </div>

  <span class="subtitulo">Técnologo</span>
  <div class="mb-3">
    <label for="" class="form-label">Año de obtención</label>
    <input id="precio" name="ano_obtencion_tecnologo" type="date"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Titulo obtenido</label>
    <input id="precio" name="titulo_obtenido_tecnologo" type="text"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre de la institución que otorga el titulo</label>
    <input id="precio" name="ins_otorga_titulo_tecnologo" type="text"  class="form-control" required>
  </div>

  <span class="subtitulo">Especialización Tecnologica</span>
  <div class="mb-3">
    <label for="" class="form-label">Año de obtención</label>
    <input id="precio" name="ano_obtencion_tecnologica" type="date"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Titulo obtenido</label>
    <input id="precio" name="titulo_obtenido_tecnologica" type="text"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre de la institución que otorga el titulo</label>
    <input id="precio" name="ins_otorga_titulo_tecnologica" type="text"  class="form-control" required>
  </div>

  <span class="subtitulo">Pregrado Universitario</span>
  <div class="mb-3">
    <label for="" class="form-label">Año de obtención</label>
    <input id="precio" name="ano_obtencion_pregrado" type="date"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Titulo obtenido</label>
    <input id="precio" name="titulo_obtenido_pregrado" type="text"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre de la institución que otorga el titulo</label>
    <input id="precio" name="ins_otorga_titulo_pregrado" type="text"  class="form-control" required>
  </div>

  <span class="subtitulo">Especialista</span>
  <div class="mb-3">
    <label for="" class="form-label">Año de obtención</label>
    <input id="precio" name="ano_obtencion_especialista" type="date"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Titulo obtenido</label>
    <input id="precio" name="titulo_obtenido_especialista" type="text"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre de la institución que otorga el titulo</label>
    <input id="precio" name="ins_otorga_titulo_especialista" type="text"  class="form-control" required>
  </div>

  <span class="subtitulo">Maestria</span>
  <div class="mb-3">
    <label for="" class="form-label">Año de obtención</label>
    <input id="precio" name="ano_obtencion_maestria" type="date"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Titulo obtenido</label>
    <input id="precio" name="titulo_obtenido_maestria" type="text"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre de la institución que otorga el titulo</label>
    <input id="precio" name="ins_otorga_titulo_maestria" type="text"  class="form-control" required>
  </div>

  <span class="subtitulo">Doctorado</span>
  <div class="mb-3">
    <label for="" class="form-label">Año de obtención</label>
    <input id="precio" name="ano_obtencion_doctorado" type="date"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Titulo obtenido</label>
    <input id="precio" name="titulo_obtenido_doctorado" type="text"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre de la institución que otorga el titulo</label>
    <input id="precio" name="ins_otorga_titulo_doctorado" type="text"  class="form-control" required>
  </div>

  <span class="subtitulo">Estudios en curso</span>
  <div class="mb-3">
    <label for="" class="form-label">Nombre del programa</label>
    <input id="precio" name="nombre_programa_encurso" type="text"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nivel</label>
    <input id="precio" name="nivel_programa_encurso" type="text"  class="form-control" required>
  </div>
  
  <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn bg-naranja text-white" tabindex="4">Guardar</button>
</form>
@endsection