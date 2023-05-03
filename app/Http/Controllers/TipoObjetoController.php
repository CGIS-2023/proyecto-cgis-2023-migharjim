<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTipoObjetoRequest;
use App\Http\Requests\UpdateTipoObjetoRequest;
use App\Models\TipoObjeto;

class TipoObjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoObjetos = TipoObjeto::paginate(25);
        return view('/tipoObjetos/index', ['tipoObjetos' => $tipoObjetos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoObjetos = TipoObjeto::all();
        return view('/tipoObjetos/create', ['tipoObjetos' => $tipoObjetos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTipoObjetoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipoObjetoRequest $request)
    {
        $this->validate($request,[
            'nombre' => 'required|string|max:255',
           
            ]);
    
            $tipoObjeto = new TipoObjeto($request->all());
    
            $tipoObjeto->save();
            session()->flash('success', 'Tipo de objeto creado correctamente');
            return redirect()->route('tipoObjetos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoObjeto  $tipoObjeto
     * @return \Illuminate\Http\Response
     */
    public function show(TipoObjeto $tipoObjeto)
    {
        return view('tipoObjetos/show', ['tipoObjeto' => $tipoObjeto]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoObjeto  $tipoObjeto
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoObjeto $tipoObjeto)
    {
        $tipoObjetos = TipoObjeto::all();
        return view('tipoObjetos/edit', ['tipoObjetos'=>$tipoObjetos, 'tipoObjeto' => $tipoObjeto]);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTipoObjetoRequest  $request
     * @param  \App\Models\TipoObjeto  $tipoObjeto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipoObjetoRequest $request, TipoObjeto $tipoObjeto)
    {
        $this->validate($request, [
            'nombre' => 'required|string|max:255',
            
            ]);
            $tipoObjeto->fill($request->all());
            $tipoObjeto->save();
            session()->flash('success', 'Proveedor modificado correctamente.');
            return redirect()->route('tipoObjetos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoObjeto  $tipoObjeto
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoObjeto $tipoObjeto)
    {
        if($proveedor->delete()) {
            session()->flash('success', 'Tipo de objeto borrado correctamente');
        }
        else{
            session()->flash('warning', 'El tipo de objeto no pudo borrarse.');
        }
        return redirect()->route('tipoObjetos.index');
    }
}
