<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $articulos = Articulo::all();
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
        $articulos->hoja_de_vida = $request->get("hoja_de_vida");
        $articulos->nombre_regional = $request->get("nombre_regional");
        $articulos->codigo_centro = $request->get("codigo_centro");
        $articulos->nombre_centro = $request->get("nombre_centro");
        $articulos->codigo_programa = $request->get("codigo_programa");
        $articulos->nro_cedula = $request->get("nro_cedula");
        $articulos->nombre_instructor = $request->get("nombre_instructor");
        

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
        $articulo->hoja_de_vida = $request->get("hoja_de_vida");
        $articulo->nombre_regional = $request->get("nombre_regional");
        $articulo->codigo_centro = $request->get("codigo_centro");
        $articulo->nombre_centro = $request->get("nombre_centro");
        $articulo->codigo_programa = $request->get("codigo_programa");
        $articulo->nro_cedula = $request->get("nro_cedula");
        $articulo->nombre_instructor = $request->get("nombre_instructor");
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
}
