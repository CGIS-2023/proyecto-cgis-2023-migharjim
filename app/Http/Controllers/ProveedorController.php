<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreProveedorRequest;
use App\Http\Requests\UpdateProveedorRequest;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use App\Models\Objeto;

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
        return view('/proveedors/index', ['proveedors' => $proveedors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedors = Proveedor::all();
        return view('/proveedors/create', ['proveedors' => $proveedors]);
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
        session()->flash('success', 'Proveedor creado correctamente');
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
        return view('proveedors/show', ['proveedor' => $proveedor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Proveedor $proveedor)
    {
        $objetos = Objeto::all();
        return view('proveedors/edit', ['objetos'=>$objetos, 'proveedor' => $proveedor]);
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
        $proveedor->fill($request->all());
        $proveedor->save();
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

    public function attach_objeto(Request $request, Proveedor $proveedor)
    {
        $this->validateWithBag('attach',$request, [
            'objeto_id' => 'required|exists:objetos,id',
            'precio' => 'required|numeric',
        ]);
        $proveedor->objetos()->attach($request->input("objeto_id"), [
            'precio' => $request->precio
        ]);
        return redirect()->route('proveedors.edit', $proveedor->id);
    }

    public function detach_objeto(Proveedor $proveedor, Objeto $objeto)
    {
        $cita->objetos()->detach($objeto->id);
        return redirect()->route('proveedors.edit', $proveedor->id);
    }



}
