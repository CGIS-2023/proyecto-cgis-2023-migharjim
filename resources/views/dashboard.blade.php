<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div style="padding:1em 20em;">
    <img  style="width:100%;" src="https://www.grupolarabida.org/wp-content/uploads/2020/10/Espana_UniversidaddeSevilla_US_51_.jpg">
    </div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>Se encuentra usted en la pantalla de inicio.<br> Por favor, seleccione en el menú de arriba la vista hacia donde quiera desplazarse.
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
