@extends("layouts.plantillabase")

@section("contenido")
<div class="container">
    <a href="articulos/create" class="btn bg-naranja text-white text-center">Añadir instructor</a>
    <form action="{{url("articulos/importar")}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6 mt-3">
            <input type="file" name="documento">
        </div>
        <div class="col-md-6">
            <button class="btn bg-naranja text-white" type="submit">Importar</button>
        </div>
    </form>
</div>


<div class="table-responsive">
    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Codigo Regional</th>
                <th scope="col">Codigo del programa</th>
                <th scope="col">Numero de Cedula</th>
                <th scope="col">Nombre del instructor</th>
                <th scope="col">XP profesional</th>
                <th scope="col">Acciones</th>
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
                        <a href="/articulos/{{$articulo->id}}/edit" class="btn bg-naranja text-white">VER +</a>
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-secondary">BORRAR</button>
                    </form>
                </td>


                <?php
                $inicio = "$articulo->inicio_experiencia_profesional";
                $fin = "$articulo->fin_experiencia_profesional";

                $datetime1 = new DateTime($inicio);
                $datetime2 = new DateTime($fin);


                
                $diferencia = $datetime2->diff($datetime1);

                
                $intervalMeses = $diferencia->format("%m");
                
                $intervalAnos = $diferencia->format("%y") * 12;
                $experiencia = $intervalMeses+$intervalAnos;
               
                echo "".($experiencia)." meses";
                ?>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="d-flex justify-content-end">
    {!! $articulos->links() !!}
</div>

@endsection