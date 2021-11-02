<?php

namespace App\Http\Controllers;
use App\Models\Queja;
use Illuminate\Http\Request;


class QuejaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queja = new Queja();
        $resultados = $queja->get();
        return view("Queja.mostrar", ["quejas"=>$resultados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Queja.crear');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $queja = new Queja();
        $queja-> autogenerado_queja = $request-> autogenerado_queja;
        $queja-> motivo_queja = $request-> motivo_queja;
        $queja-> fecha_recepcion= $request-> fecha_recepcion;
        $queja-> id_clientes = $request-> id_clientes;
        $queja-> id_usuarios = $request-> id_usuarios;
        $queja->save();
        return redirect(Route("Queja.index"));

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
