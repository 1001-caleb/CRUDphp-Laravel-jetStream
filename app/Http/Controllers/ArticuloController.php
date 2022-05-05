<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Articulo;
class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Articulo::paginate(5);
        return view("articulo.index")->with("articulos", $articulos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("articulo.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articulos = new Articulo();

        $articulos->codigo_regional = $request->get("codigo_regional");
        $articulos->nombre_regional = $request->get("nombre_regional");
        $articulos->codigo_centro = $request->get("codigo_centro");
        $articulos->nombre_centro = $request->get("nombre_centro");
        $articulos->codigo_programa = $request->get("codigo_programa");
        $articulos->nombre_programa= $request->get("nombre_programa");
        $articulos->nro_cedula = $request->get("nro_cedula");
        $articulos->nombre_instructor = $request->get("nombre_instructor");
        $articulos->ano_ingreso_sena = $request->get("ano_ingreso_sena");
        $articulos->tipo_vinculacion_ingreso = $request->get("tipo_vinculacion_ingreso");
        $articulos->ano_vinculacion_planta = $request->get("ano_vinculacion_planta");
        $articulos->tipo_vinculacion_actual = $request->get("tipo_vinculacion_actual");
        $articulos->grado_inicial = $request->get("grado_inicial");
        $articulos->grado_actual = $request->get("grado_actual");
        $articulos->horas_vinculacion_sena = $request->get("horas_vinculacion_sena");
        $articulos->docencia = $request->get("docencia");
        $articulos->investigacion = $request->get("investigacion");
        $articulos->relacionamiento_sector_externo = $request->get("relacionamiento_sector_externo");
        $articulos->porcentaje_hora_dedicacion_programa = $request->get("porcentaje_hora_dedicacion_programa");
        $articulos->produccion_material_didactico = $request->get("produccion_material_didactico");
        $articulos->vinculacion_proyectos_investigacion = $request->get("vinculacion_proyectos_investigacion");
        $articulos->publicaciones_informador = $request->get("publicaciones_informador");
        $articulos->publicaciones_otros_medios = $request->get("publicaciones_otros_medios");
        $articulos->inicio_experiencia_profesional = $request->get("inicio_experiencia_profesional");
        $articulos->fin_experiencia_profesional = $request->get("fin_experiencia_profesional");
        $articulos->inicio_experiencia_docencia = $request->get("inicio_experiencia_docencia");
        $articulos->fin_experiencia_docencia = $request->get("fin_experiencia_docencia");
        $articulos->ano_obtencion_tecnico = $request->get("ano_obtencion_tecnico");
        $articulos->titulo_obtenido_tecnico = $request->get("titulo_obtenido_tecnico");
        $articulos->ins_otorga_titulo_tecnico = $request->get("ins_otorga_titulo_tecnico");
        $articulos->ano_obtencion_tecnologo = $request->get("ano_obtencion_tecnologo");
        $articulos->titulo_obtenido_tecnologo = $request->get("titulo_obtenido_tecnologo");
        $articulos->ins_otorga_titulo_tecnologo = $request->get("ins_otorga_titulo_tecnologo");
        $articulos->ano_obtencion_tecnologica = $request->get("ano_obtencion_tecnologica");
        $articulos->titulo_obtenido_tecnologica = $request->get("titulo_obtenido_tecnologica");
        $articulos->ins_otorga_titulo_tecnologica = $request->get("ins_otorga_titulo_tecnologica");
        $articulos->ano_obtencion_pregrado = $request->get("ano_obtencion_pregrado");
        $articulos->titulo_obtenido_pregrado = $request->get("titulo_obtenido_pregrado");
        $articulos->ins_otorga_titulo_pregrado = $request->get("ins_otorga_titulo_pregrado");
        $articulos->ano_obtencion_especialista = $request->get("ano_obtencion_especialista");
        $articulos->titulo_obtenido_especialista = $request->get("titulo_obtenido_especialista");
        $articulos->ins_otorga_titulo_especialista = $request->get("ins_otorga_titulo_especialista");
        $articulos->ano_obtencion_maestria = $request->get("ano_obtencion_maestria");
        $articulos->titulo_obtenido_maestria = $request->get("titulo_obtenido_maestria");
        $articulos->ins_otorga_titulo_maestria = $request->get("ins_otorga_titulo_maestria");
        $articulos->ano_obtencion_doctorado = $request->get("ano_obtencion_doctorado");
        $articulos->titulo_obtenido_doctorado = $request->get("titulo_obtenido_doctorado");
        $articulos->ins_otorga_titulo_doctorado = $request->get("ins_otorga_titulo_doctorado");
        $articulos->nombre_programa_encurso = $request->get("nombre_programa_encurso");
        $articulos->nivel_programa_encurso = $request->get("nivel_programa_encurso");

        $articulos->save();
        return redirect("/articulos");  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articulo = Articulo::find($id);
        return view("articulo.edit")->with("articulo", $articulo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $articulo = Articulo::find($id);

        $articulo->codigo_regional = $request->get("codigo_regional");
        $articulo->nombre_regional = $request->get("nombre_regional");
        $articulo->codigo_centro = $request->get("codigo_centro");
        $articulo->nombre_centro = $request->get("nombre_centro");
        $articulo->codigo_programa = $request->get("codigo_programa");
        $articulo->nombre_programa= $request->get("nombre_programa");
        $articulo->nro_cedula = $request->get("nro_cedula");
        $articulo->nombre_instructor = $request->get("nombre_instructor");
        $articulo->ano_ingreso_sena = $request->get("ano_ingreso_sena");
        $articulo->tipo_vinculacion_ingreso = $request->get("tipo_vinculacion_ingreso");
        $articulo->ano_vinculacion_planta = $request->get("ano_vinculacion_planta");
        $articulo->tipo_vinculacion_actual = $request->get("tipo_vinculacion_actual");
        $articulo->grado_inicial = $request->get("grado_inicial");
        $articulo->grado_actual = $request->get("grado_actual");
        $articulo->horas_vinculacion_sena = $request->get("horas_vinculacion_sena");
        $articulo->docencia = $request->get("docencia");
        $articulo->investigacion = $request->get("investigacion");
        $articulo->relacionamiento_sector_externo = $request->get("relacionamiento_sector_externo");
        $articulo->porcentaje_hora_dedicacion_programa = $request->get("porcentaje_hora_dedicacion_programa");
        $articulo->produccion_material_didactico = $request->get("produccion_material_didactico");
        $articulo->vinculacion_proyectos_investigacion = $request->get("vinculacion_proyectos_investigacion");
        $articulo->publicaciones_informador = $request->get("publicaciones_informador");
        $articulo->publicaciones_otros_medios = $request->get("publicaciones_otros_medios");
        $articulo->inicio_experiencia_profesional = $request->get("inicio_experiencia_profesional");
        $articulo->fin_experiencia_profesional = $request->get("fin_experiencia_profesional");
        $articulo->inicio_experiencia_docencia = $request->get("inicio_experiencia_docencia");
        $articulo->fin_experiencia_docencia = $request->get("fin_experiencia_docencia");
        $articulo->ano_obtencion_tecnico = $request->get("ano_obtencion_tecnico");
        $articulo->titulo_obtenido_tecnico = $request->get("titulo_obtenido_tecnico");
        $articulo->ins_otorga_titulo_tecnico = $request->get("ins_otorga_titulo_tecnico");
        $articulo->ano_obtencion_tecnologo = $request->get("ano_obtencion_tecnologo");
        $articulo->titulo_obtenido_tecnologo = $request->get("titulo_obtenido_tecnologo");
        $articulo->ins_otorga_titulo_tecnologo = $request->get("ins_otorga_titulo_tecnologo");
        $articulo->ano_obtencion_tecnologica = $request->get("ano_obtencion_tecnologica");
        $articulo->titulo_obtenido_tecnologica = $request->get("titulo_obtenido_tecnologica");
        $articulo->ins_otorga_titulo_tecnologica = $request->get("ins_otorga_titulo_tecnologica");
        $articulo->ano_obtencion_pregrado = $request->get("ano_obtencion_pregrado");
        $articulo->titulo_obtenido_pregrado = $request->get("titulo_obtenido_pregrado");
        $articulo->ins_otorga_titulo_pregrado = $request->get("ins_otorga_titulo_pregrado");
        $articulo->ano_obtencion_especialista = $request->get("ano_obtencion_especialista");
        $articulo->titulo_obtenido_especialista = $request->get("titulo_obtenido_especialista");
        $articulo->ins_otorga_titulo_especialista = $request->get("ins_otorga_titulo_especialista");
        $articulo->ano_obtencion_maestria = $request->get("ano_obtencion_maestria");
        $articulo->titulo_obtenido_maestria = $request->get("titulo_obtenido_maestria");
        $articulo->ins_otorga_titulo_maestria = $request->get("ins_otorga_titulo_maestria");
        $articulo->ano_obtencion_doctorado = $request->get("ano_obtencion_doctorado");
        $articulo->titulo_obtenido_doctorado = $request->get("titulo_obtenido_doctorado");
        $articulo->ins_otorga_titulo_doctorado = $request->get("ins_otorga_titulo_doctorado");
        $articulo->nombre_programa_encurso = $request->get("nombre_programa_encurso");
        $articulo->nivel_programa_encurso = $request->get("nivel_programa_encurso");
        $articulo->save();
        return redirect("/articulos");  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Articulo::find($id);
        $articulo->delete();

        return redirect("/articulos");
    }

    public function importar(Request $request){
        if($request->hasFile("documento")){
            $path = $request->file("documento")->getRealPath();
            $datos = Excel::import($path, function($reader){    
            })->get();

            if(!empty($datos) && $datos->count()){
                $datos = $datos->toArray();
                for($i = 0; $i < count($datos); $i++){
                    $datosImportar[] = $datos[$i];
                }
            }
            Articulo::insert($datosImportar);
        }
        return back();
    }

}
