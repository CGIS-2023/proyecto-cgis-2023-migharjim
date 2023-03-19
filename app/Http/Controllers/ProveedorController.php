<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProveedorRequest;
use App\Http\Requests\UpdateProveedorRequest;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedors = Proveedor::paginate(25);
        return view('/provedors/index', ['proveedors' => $proveedor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedors = Proveedor::all();
        return view('/proveedors/create', ['proveedors' => $proveedors])
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProveedorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProveedorRequest $request)
    {
        $this->validate($request,[
        'nombre' => 'required|string|max:255',
        'direccion' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'telefono'=> 'required|string|max:255'
        ]);

        $proveedor = new Proveedor($request->all());
        $proveedor->save();
        session()->flash('success', 'Proveedor creado correctamente')
        return redirect()->route('proveedors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedor $proveedor)
    {
        return view('proveesors/show', ['proveedor' => $proveedor])
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Proveedor $proveedor)
    {
        $proveedors = Proveedor::all();
        return view('proveedors/edit', ['proveedors' => $proveedor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProveedorRequest  $request
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProveedorRequest $request, Proveedor $proveedor)
    {
        $this->validate($request, [
        'nombre' => 'required|string|max:255',
        'direccion' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'telefono'=> 'required|string|max:255'
        ]);
        $user = $administrador->user;
        $user->fill($request->all());
        $user->save();
        $medico->fill($request->all());
        $medico->save();
        session()->flash('success', 'Proveedor modificado correctamente.');
        return redirect()->route('proveedors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proveedor $proveedor)
    {
        if($proveedor->delete()) {
            session()->flash('success', 'Proveedor borrado correctamente');
        }
        else{
            session()->flash('warning', 'El Proveedor no pudo borrarse.');
        }
        return redirect()->route('proveedors.index');
    }
}
