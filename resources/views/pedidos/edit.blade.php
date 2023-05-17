<x-app-layout>
    <x-slot name="header">
        <nav class="font-semibold text-xl text-gray-800 leading-tight" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
              {{-- <li class="flex items-center">
                <a href="#">Home</a>
                <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
              </li> --}}
              <li class="flex items-center">
                <a href="{{ route('objetos.index') }}">{{__('Objetos')}}</a>
                <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
              </li>
              <li>
                <a href="#" class="text-gray-500" aria-current="page">{{__('Editar')}} {{$pedido->name}}</a>
              </li>
            </ol>
          </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="font-semibold text-lg px-6 py-4 bg-white border-b border-gray-200">
                    {{__('Información del pedido')}}
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{ route('pedidos.update', $pedido->id) }}">
                            @csrf
                            @method('put')

                            <!-- Estado peticion -->
                            <div class="mt-4">
                                <x-label for="estado_peticion_id" :value="old('Estado Peticion')" />

                                <x-select id="estado_peticion_id" name="estado_peticion_id" required>
                                    <option value="">{{('Elige una opción')}}</option>
                                    @foreach ($estadoPeticions as $estadoPeticion)
                                    <option value="{{$estadoPeticion->id}}" @if (old('estado_peticion_id') == $estadoPeticion->id) selected @endif>{{$estadoPeticion->nombre}}</option>
                                    @endforeach
                                </x-select>
                            </div>

                            <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="font-semibold text-lg px-6 py-4 bg-white border-b border-gray-200">
                    Linea articulo                
                </div>
                {{--<div class="flex items-center mt-4 ml-2">
                    <form method="POST" action="{{ route('lineaPedidos.store') }}">
                        <x-button type="subit" class="ml-4">
                            {{ __('Crear linea pedido') }}
                        </x-button>
                    </form>
                </div>--}}
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                        <tr class="bg-gray-200 text-gray-900 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Objeto</th>
                            <th class="py-3 px-6 text-left">Precio (€)</th>
                            <th class="py-3 px-6 text-left">Tipo de objeto (€)</th>
                            <th class="py-3 px-6 text-center">Acciones</th>
                        </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($lineaPedidos->pedido as $lineaPedido)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{$lineaPedido->precio->nombre}}</span>
                                    </div>
                                </td>
                               <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{$lineaPedido->pedido->objeto->proveedor->pivot->precio}} </span>  <!--//el pivot es para acceder a la tabla-->
                                    </div>
                                </td> 
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{$LineaPedido->objeto->tipo_objeto->nombre}}</span>  <!--//el pivot es para acceder a la tabla-->
                                    </div>
                                </td> 

                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">

                                        {{--<div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <a href="{{route('objetos.edit', $objeto->id)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </a>
                                        </div>--}}
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <form id="detach-form-{{$proveedor->id}}-{{$objeto->id}}" method="POST" action="{{ route('proveedors.detach_objeto', [$proveedor->id, $objeto->id]) }}">
                                                @csrf
                                                @method('delete')
                                                <a class="cursor-pointer" onclick="getElementById('detach-form-{{$proveedor->id}}-{{$objeto->id}}').submit();">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </a>
                                            </form>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="font-semibold text-lg px-6 py-4 bg-white border-b border-gray-200">
                    Añadir objeto
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors->attach" />
                    <form method="POST" action="{{ route('lineaPedidos.create', [$pedido->id]) }}">
                        @csrf

                        <div class="mt-4">
                            <x-label for="objeto_id" :value="__('Objeto')" />


                            <x-select id="objeto_id" name="objeto_id" required>
                                <option value="">{{__('Elige un objeto')}}</option>
                                @foreach ($objetos as $objeto)
                                    <option value="{{$objeto->id}}" @if (old('objeto_id') == $objeto->id) selected @endif>{{$objeto->nombre}} {{$objeto->precios}} </option>
                                @endforeach
                            </x-select>
                        </div>

                        <div class="mt-4">
                            <x-label for="precio" :value="__('Precio')" />

                            <x-input id="precio" class="block mt-1 w-full"
                                     type="number"
                                     name="precio"
                                     :value="old('precio')"
                                     required />
                        </div>

                        <!-- Tipo Articulo -->
                        <div class="mt-4">
                                <x-label for="tipo_objeto_id" :value="('Tipo Objeto')" />

                                <x-select id="tipo_objeto_id" name="tipo_objeto_id" required>
                                    <option value="">{{('Elige una opción')}}</option>
                                    @foreach ($tipoObjetos as $tipoObjeto)
                                    <option value="{{$tipoObjeto->id}}" @if (old('tipo_objeto_id') == $tipoObjeto->id) selected @endif>{{$tipoObjeto->nombre}}</option>
                                    @endforeach
                                </x-select>
                            </div>


                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Guardar') }}
                            </x-button>
                        </div>


                    </form>

                    

                </div>
            </div>
         </div>
    </div>
</x-app-layout>