<x-app-layout>
    <x-slot name="header">
        <nav class="font-semibold text-xl text-gray-800 leading-tight" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
              {{-- <li class="flex items-center">
                <a href="#">Home</a>
                <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
              </li> --}}
              <li class="flex items-center">
                <a href="{{ route('objetos.index') }}">Objetos</a>
                <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
              </li>
              <li>
                <a href="#" class="text-gray-500" aria-current="page">Crear objeto</a>
              </li>
            </ol>
          </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="font-semibold text-lg px-6 py-4 bg-white border-b border-gray-200">
                    Información del objeto
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <!-- Nombre -->
                        <form method="POST" action="{{ route('objetos.store') }}">
                            @csrf
                            <div>
                                <x-label for="nombre" :value="__('Nombre')" />

                                <x-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus />
                            </div>


                            <!-- Precio -->
                            <div>
                                <x-label for="precio" :value="__('Precio')" />

                                <x-input id="precio" class="block mt-1 w-full" type="numeric" name="precio" :value="old('precio')" required autofocus />
                            </div>

                            <!-- Cantidad -->
                            <div>
                                <x-label for="cantidad" :value="__('Cantidad')" />

                                <x-input id="cantidad" class="block mt-1 w-full" type="number" name="cantidad" :value="old('cantidad')" required autofocus />
                            </div>

                            <!-- Tipo Articulo -->
                        <div class="mt-4">
                                <x-label for="tipo_objeto_id" :value="__('Tipo Objeto')" />

                                <x-select id="tipo_objeto_id" name="tipo_objeto_id" required>
                                    <option value="">{{('Elige una opción')}}</option>
                                    @foreach ($tipoObjetos as $tipoObjeto)
                                    <option value="{{$tipoObjeto->id}}" @if (old('tipo_objeto_id') == $tipoObjeto->id) selected @endif>{{$tipoObjeto->nombre}}</option>
                                    @endforeach
                                </x-select>
                            </div>



                         

                            <div class="flex items-center justify-end mt-4">
                                <x-button type="button" class="bg-red-800 hover:bg-red-700">
                                    <a href="{{route('objetos.index')}}">
                                    {{ __('Cancelar') }}
                                    </a>
                                </x-button>
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