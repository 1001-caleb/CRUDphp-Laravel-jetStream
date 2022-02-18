@extends("layouts.plantillabase");

@section("contenido")
<a href="articulos/create" class="btn btn-primary">CREAR</a>
<table class="table table-dark table-striped mt-4">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Codigo</th>
        <th scope="col">Descripción</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Precios</th>
        <th scope="col">Acciones</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($articulos as $articulo)
        <tr>
            <td>{{$articulo->id}}</td>
            <td>{{$articulo->codigo}}</td>
            <td>{{$articulo->descripcion}}</td>
            <td>{{$articulo->cantidad}}</td>
            <td>{{$articulo->precio}}</td>
            <td>{{$articulo->acciones}}
            <form action="{{ route ("articulos.destroy", $articulo->id)}}" method="POST">
                <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">EDITAR</a>
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