<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreObjetoRequest;
use App\Http\Requests\UpdateObjetoRequest;
use App\Models\Objeto;
use Illuminate\Http\Request;


class ObjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objetos = Objeto::paginate(25);
        return view('/objetos/index', ['objetos' => $objetos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $objetos = Objeto::all();
        return view('/objetos/create', ['objetos' => $objetos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreObjetoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreObjetoRequest $request)
    {
        $this -> validate($request, [
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric'
        ]);

        $objeto = new Objeto($request->all());
        $objeto->save();
        session()->flash('success', 'Objeto creado correctamente');
        return redirect()->route('objetos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Objeto  $objeto
     * @return \Illuminate\Http\Response
     */
    public function show(Objeto $objeto)
    {
        return view('objetos/show', ['objeto' => $objeto]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Objeto  $objeto
     * @return \Illuminate\Http\Response
     */
    public function edit(Objeto $objeto)
    {
        return view('objetos/edit', ['objeto' => $objeto]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateObjetoRequest  $request
     * @param  \App\Models\Objeto  $objeto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateObjetoRequest $request, Objeto $objeto)
    {
        $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric'
        ]);
        $objeto->fill($request->all());
        $objeto->save();
        session()->flash('success', 'Objeto modificado correctamente.');
        return redirect()->route('objetos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Objeto  $objeto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Objeto $objeto)
    {
        if($objeto->delete()) {
            session()->flash('success', 'Objeto borrado correctamente');
        }
        else{
            session()->flash('warning', 'El objeto no pudo borrarse.');
        }
        return redirect()->route('objetos.index');
    }
}
