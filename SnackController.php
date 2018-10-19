<?php

namespace App\Http\Controllers;

use App\categoria;
use Illuminate\Http\Request;

class SnackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, categoria $categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(categoria $categoria)
    {
        //
    }

    function ejecutar(Request $request){
      $categoria = new categoria();
  		switch($request -> input('codigo')){
  			case 1:
  			$categoria = \App\categoria :: where('snackGrupo', 1)
  								-> get();
  			break;
  			case 2:
  			$categoria = \App\categoria :: where('snackGrupo', 2)
  								-> get();
  			break;
  			case 3:
  			$categoria = \App\categoria :: where('snackGrupo', 3)
  								-> get();
  			break;
  			default: $listado = array(); break;
  		}
  		return view('lista', ['listado' => $categoria]);
	  }
}
