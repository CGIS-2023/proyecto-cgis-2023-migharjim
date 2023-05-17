<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEstadoPeticionRequest;
use App\Http\Requests\UpdateEstadoPeticionRequest;
use App\Models\EstadoPeticion;

class EstadoPeticionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estadoPeticions = EstadoPeticion::paginate(25);
        return view('/estadoPeticions/index', ['estadoPeticions' => $estadoPeticions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estadoPeticions = EstadoPeticion::all();
        return view('/estadoPeticions/create', ['estadoPeticions' => $estadoPeticions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEstadoPeticionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEstadoPeticionRequest $request)
    {
        $this->validate($request,[
            'nombre' => 'required|string|max:255',
           
            ]);
    
            $estadoPeticions = new EstadoPeticion($request->all());
    
            $estadoPeticions->save();
            session()->flash('success', 'Estado de petición creado correctamente');
            return redirect()->route('estadoPeticions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EstadoPeticion  $estadoPeticion
     * @return \Illuminate\Http\Response
     */
    public function show(EstadoPeticion $estadoPeticion)
    {
        return view('estadoPeticions/show', ['estadoPeticion' => $estadoPeticion]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EstadoPeticion  $estadoPeticion
     * @return \Illuminate\Http\Response
     */
    public function edit(EstadoPeticion $estadoPeticion)
    {
        $estadoPeticions = EstadoPeticion::all();
        return view('estadoPeticions/edit', ['estadoPeticions'=>$estadoPeticions, 'estadoPeticion' => $estadoPeticion]);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEstadoPeticionRequest  $request
     * @param  \App\Models\EstadoPeticion  $estadoPeticion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEstadoPeticionRequest $request, EstadoPeticion $estadoPeticion)
    {
        $this->validate($request, [
            'nombre' => 'required|string|max:255',
            
            ]);
            $estadoPeticion->fill($request->all());
            $estadoPeticion->save();
            session()->flash('success', 'Estado de petición modificado correctamente.');
            return redirect()->route('estadoPeticions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EstadoPeticion  $estadoPeticion
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstadoPeticion $estadoPeticion)
    {
        if($estadoPeticion->delete()) {
            session()->flash('success', 'Estado de petición borrado correctamente');
        }
        else{
            session()->flash('warning', 'El estado de petición no pudo borrarse.');
        }
        return redirect()->route('estadoPeticions.index');
    }
}
