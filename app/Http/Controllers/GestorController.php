<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGestorRequest;
use App\Http\Requests\UpdateGestorRequest;
use App\Models\Gestor;

class GestorController extends Controller
{



    public function __construct()
    {
        $this->authorizeResource(Gestor::class, 'gestor');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gestors = Gestor::paginate(25);
        return view('/gestors/index', ['gestors' => $gestors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gestors = Gestor::all();
        return view('/gestors/create', ['gestors' => $gestors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGestorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGestorRequest $request)
    {
        $this->validate($request,[
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
        ]);


        $gestor = new Gestor($request->all());

        $gestor->save();
        session()->flash('success', 'Gestor creado correctamente');
        return redirect()->route('gestors.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gestor  $gestor
     * @return \Illuminate\Http\Response
     */
    public function show(Gestor $gestor)
    {
        return view('gestors/show', ['gestor' => $gestor]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gestor  $gestor
     * @return \Illuminate\Http\Response
     */
    public function edit(Gestor $gestor)
    {
        return view('gestors/edit', ['gestor' => $gestor]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGestorRequest  $request
     * @param  \App\Models\Gestor  $gestor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGestorRequest $request, Gestor $gestor)
    {
        $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            ]);
            $gestor->fill($request->all());
            $gestor->save();
            session()->flash('success', 'Gestor modificado correctamente.');
            return redirect()->route('gestors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gestor  $gestor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gestor $gestor)
    {
        {
            if($gestor->delete()) {
                session()->flash('success', 'Gestor borrado correctamente');
            }
            else{
                session()->flash('warning', 'El gestor no pudo borrarse.');
            }
            return redirect()->route('gestors.index');
        }
    }
}
