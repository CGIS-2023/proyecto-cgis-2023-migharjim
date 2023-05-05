<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEncargadoRequest;
use App\Http\Requests\UpdateEncargadoRequest;
use App\Models\Encargado;

class EncargadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encargados = Encargado::paginate(25);
        return view('/encargados/index', ['encargados' => $encargados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $encargados = Encargado::all();
        return view('/encargados/create', ['encargados' => $encargados]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEncargadoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEncargadoRequest $request)
    {
        $this->validate($request,[
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
        ]);


        $encargado = new Encargado($request->all());

        $encargado->save();
        session()->flash('success', 'Encargado creado correctamente');
        return redirect()->route('encargados.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Encargado  $encargado
     * @return \Illuminate\Http\Response
     */
    public function show(Encargado $encargado)
    {
        return view('encargados/show', ['encargado' => $encargado]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Encargado  $encargado
     * @return \Illuminate\Http\Response
     */
    public function edit(Encargado $encargado)
    {
        return view('encargados/edit', ['encargado' => $encargado]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEncargadoRequest  $request
     * @param  \App\Models\Encargado  $encargado
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEncargadoRequest $request, Encargado $encargado)
    {
        $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            ]);
            $encargado->fill($request->all());
            $encargado->save();
            session()->flash('success', 'Encargado modificado correctamente.');
            return redirect()->route('encargados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Encargado  $encargado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Encargado $encargado)
    {
        {
            if($encargado->delete()) {
                session()->flash('success', 'Encargado borrado correctamente');
            }
            else{
                session()->flash('warning', 'El encargado no pudo borrarse.');
            }
            return redirect()->route('encargados.index');
        }
    }
}
