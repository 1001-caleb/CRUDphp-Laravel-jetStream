@extends("layouts.plantillabase")

@section("contenido")
<div class="container">
    <a href="articulos/create" class="btn bg-naranja text-white text-center">Añadir instructor</a>
    <form action="{{url("articulos/importar")}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6 mt-3">
            <input class="text-white" type="file" name="documento">
        </div>
        <div class="col-md-6">
            <button class="btn bg-naranja text-white" type="submit">Importar</button>
        </div>
    </form>
</div>

<div class="d-md-flex justify-content-md-end mt-4">
    <form action="{{ route("articulos.index") }}" method="GET">
        <div class="btn-group">
            <input type="text" name="busqueda" class="form-control">
            <input type="submit" value="Buscar" class="btn bg-naranja text-white">
        </div>
    </form>
</div>

<div class="table-responsive">
    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Codigo Centro</th>
                <th scope="col">Codigo del programa</th>
                <th scope="col">Numero de Cedula</th>
                <th scope="col">Nombre del instructor</th>
                <th scope="col">XP profesional</th>
                <th scope="col">XP docencia</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articulos as $articulo)
            <tr>
                <td>{{$articulo->id}}</td>
                <td>{{$articulo->codigo_centro}}</td>
                <td>{{$articulo->codigo_programa}}</td>
                <td>{{$articulo->nro_cedula}}</td>
                <td>{{$articulo->nombre_instructor}}</td>

                <?php
                $inicio_p = "$articulo->inicio_experiencia_profesional";
                $fin_p = "$articulo->fin_experiencia_profesional";

                $datetime1_p = new DateTime($inicio_p);
                $datetime2_p = new DateTime($fin_p);

                $diferencia_p = $datetime2_p->diff($datetime1_p);

                
                $intervalMeses_p = $diferencia_p->format("%m");
                
                $intervalAnos_p = $diferencia_p->format("%y") * 12;
                $experiencia_p = $intervalMeses_p+$intervalAnos_p;
               
                echo "<td>$experiencia_p meses</td>";

                $inicio_d = "$articulo->inicio_experiencia_docencia";
                $fin_d = "$articulo->fin_experiencia_docencia";

                $datetime1_d = new DateTime($inicio_d);
                $datetime2_d = new DateTime($fin_d);

                $diferencia_d = $datetime2_d->diff($datetime1_d);

                
                $intervalMeses_d = $diferencia_d->format("%m");
                
                $intervalAnos_d = $diferencia_d->format("%y") * 12;
                $experiencia_d = $intervalMeses_d+$intervalAnos_d;
               
                echo "<td>$experiencia_d meses</td>";
                ?>
                <td>{{$articulo->acciones}}
                    <form action="{{ route ("articulos.destroy", $articulo->id)}}" method="POST">
                        <a href="/articulos/{{$articulo->id}}/edit" class="btn bg-naranja text-white">VER +</a>
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-secondary">BORRAR</button>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="d-flex justify-content-end">
    {!! $articulos->appends(["busqueda"=>$busqueda]) !!}
</div>

@endsection