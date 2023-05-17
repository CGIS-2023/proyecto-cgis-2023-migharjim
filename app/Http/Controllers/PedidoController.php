<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePedidoRequest;
use App\Http\Requests\UpdatePedidoRequest;
use App\Models\Pedido;
use App\Models\Proveedor;
use App\Models\Encargado;
use App\Models\LineaPedido;
use Illuminate\Support\Facades\Auth;
use App\Models\EstadoPeticion;
use App\Models\User;



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
        return view('pedidos/index', ['pedidos' => $pedidos]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedors = Proveedor::all();
        $encargados = Encargado::all();
        $estadoPeticions = EstadoPeticion::all();
        $pedidos = Pedido::all();
        return view('/pedidos/create', ['pedidos' => $pedidos, 'estadoPeticions' => $estadoPeticions, 'proveedors' => $proveedors]);
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
            'proveedor_id' => 'required|exists:proveedors,id',
            'estado_peticion_id' => 'required|exists:estado_peticions,id',

            ]);
    
            $pedido = new Pedido($request->all());
            $pedido->gestor_id = Auth::user()->gestor()->exists() ? Auth::user()->gestor->id : null;
            $pedido->encargado_id = Auth::user()->encargado_id ? Auth::user()->encargado->id : null;
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
        $lineaPedidos= LineaPedido::all();
        $estadoPeticions = EstadoPeticion::all();

        return view('pedidos/edit', ['pedido' => $pedido, 'estadoPeticions'=>$estadoPeticions, 'lineaPedidos' => $lineaPedidos]);
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
        $this->validate($request, [
            'fecha_emision' => 'required|date',
            'fecha_recepcion' => 'required|date',
            'estado_peticion_id' => 'required|exists:estado_peticions,id',
            
        ]);
        $pedido->fill($request->all());
        $pedido->save();
        session()->flash('success', 'Pedido  modificado correctamente.');
        return redirect()->route('pedidos.index');
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

