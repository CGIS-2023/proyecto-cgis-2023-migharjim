<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePedidoRequest;
use App\Http\Requests\UpdatePedidoRequest;
use App\Models\Pedido;
use App\Models\Proveedor;


class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedors = Proveedor::all();
        $pedidos = Pedido::orderBy('fecha_emision', 'desc')->paginate(25);
        return view('pedidos/create', ['pedidos' => $pedidos]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pedidos = Pedido::all();
        return view('/pedidos/create', ['pedidos' => $pedidos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePedidoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePedidoRequest $request)
    {
        $this->validate($request,[
            'fecha_emision' => 'required|date|after:yesterday',
            'fecha_recepcion' => 'required|date|after:yesterday',
            ]);
    
            $pedidos = new Pedido($request->all());
    
            $pedido->save();
            session()->flash('success', 'Pedido creado correctamente');
            return redirect()->route('pedidos.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        return view('pedidos/show', ['pedido' => $pedido]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePedidoRequest  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePedidoRequest $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        if($pedido->delete()) {
            session()->flash('success', 'Pedido borrado correctamente');
        }
        else{
            session()->flash('warning', 'El pedido no pudo borrarse.');
        }
        return redirect()->route('pedidos.index');
    }

}

