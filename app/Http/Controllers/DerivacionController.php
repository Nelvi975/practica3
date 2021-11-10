<?php

namespace App\Http\Controllers;

use App\Models\Derivacion;
use Illuminate\Http\Request;

class DerivacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $derivacion = new Derivacion();
        $derivaciones = $derivacion->get();
        return view("derivaciones.mostrar", ["derivaciones"=>$derivaciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("derivaciones.crear");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $derivacion = new Derivacion();
        $derivacion-> destinoDer = $request-> destinoDer;
        $derivacion-> fechaDer = $request-> fechaDer;
        $derivacion-> id_quejas = $request-> id_quejas;
        $derivacion->save();
        return redirect(Route("Derivacion.index"));

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
     * @return
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

    }


}

