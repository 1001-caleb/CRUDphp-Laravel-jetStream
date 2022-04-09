@extends("layouts.plantillabase")

@section("contenido")
<a href="articulos/create" class="btn btn-primary">Añadir instructor</a>
<table class="table table-dark table-striped mt-4">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">codigo_regional</th>
        <th scope="col">codigo_programa</th>
        <th scope="col">nro_cedula</th>
        <th scope="col">nombre_instructor</th>
        <th scope="col">acciones</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($articulos as $articulo)
        <tr>
            <td>{{$articulo->id}}</td>
            <td>{{$articulo->codigo_regional}}</td>
            <td>{{$articulo->codigo_programa}}</td>
            <td>{{$articulo->nro_cedula}}</td>
            <td>{{$articulo->nombre_instructor}}</td>
            <td>{{$articulo->acciones}}
            <form action="{{ route ("articulos.destroy", $articulo->id)}}" method="POST">
                <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">VER +</a>
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-danger">BORRAR</button>
            </form>
            </td>
            

            
        </tr>
        @endforeach
    </tbody>
</table>
@endsection