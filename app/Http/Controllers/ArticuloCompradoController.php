<?php

namespace App\Http\Controllers;

use App\Models\ArticuloComprado;
use Illuminate\Http\Request;

class ArticuloCompradoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articulosComprado = ArticuloComprado::paginate(5);

        return view('articuloComprado.index', compact('articulosComprado'))
            ->with('i', (request()->input('page', 1) - 1) * $articulosComprado->perPage());
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
     * @param  \App\Models\ArticuloComprado  $articuloComprado
     * @return \Illuminate\Http\Response
     */
    public function show(ArticuloComprado $articuloComprado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArticuloComprado  $articuloComprado
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticuloComprado $articuloComprado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ArticuloComprado  $articuloComprado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArticuloComprado $articuloComprado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy(Request $request, $id)
    {
        //
        $articulosComprado = ArticuloComprado::find($id);
        $articulosComprado->delete();
        return redirect('/articulosComprado');
    }
}
