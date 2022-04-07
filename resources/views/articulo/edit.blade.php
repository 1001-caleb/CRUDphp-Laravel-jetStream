@extends("layouts.plantillabase");

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
    <label for="" class="form-label">Hoja de vida</label>
    <input id="foto" name="hoja_de_vida" type="file" class="form-control" tabindex="1" value="{{$articulo->hoja_de_vida}}">    
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
    <label for="" class="form-label">NRO. Cedula</label>
    <input id="precio" name="nro_cedula" type="text"  class="form-control" value="{{$articulo->nro_cedula}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre instructor</label>
    <input id="precio" name="nombre_instructor" type="text"  class="form-control" value="{{$articulo->nombre_instructor}}">
  </div>
  <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection