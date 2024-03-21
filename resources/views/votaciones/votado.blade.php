<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Votar') }}
        </h2>
    </x-slot>
    <div class="py-1">
        <div class=" d:flex md:justify-center items-center max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form class="" 
                        method="GET" 
                        action="{{ route('votar.salir') }}"
                        novalidate>
                <div class="bg-gray-300 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class=" text-gray-900 dark:text-gray-100">
                        <h1 class="text-2xl font-bold text-center">
                            {{ __("Pagina de Votación!") }}
                        </h1>
                    </div>
                    <div class="md:flex md:justify-center p-1  text-gray-900 dark:text-gray-100">
                        SU VOTO HA SIDO REGISTRADO
                    </div>
                    <div>
                        
                            <x-primary-button class="w-full justify-center">
                                {{ __('SALIR') }}
                            </x-primary-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>