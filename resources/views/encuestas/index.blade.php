<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Encuesta') }}
        </h2>
    </x-slot>
    <div class="py-1">
        <div class="sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div  class="text-gray-700 dark:text-gray-900">
                    <h1 class="text-2xl font-bold text-center">
                        {{ __("Encuesta de Clima Organizacional") }}
                    </h1>
                    <p class=" text-justify">El siguiente formulario tienen como finalidad analizar la forma en que el personal del Instituto percibe el ambiente de trabajo en el que se desempeña, de esta manera con la colaboración de todas las personas servidoras públicas que aquí laboramos podremos mejorar nuestro entorno laboral.</p>
                    <p class=" text-justify"><b>Instrucciones:</b> Responda su nivel de satisfacción seleccionando una de las siguientes afirmaciones</p>
                </div>
                <div class=" md:justify-center p-1">
                    <livewire:encuestar />
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>