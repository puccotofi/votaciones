<form class="md:w-1/2" wire:submit.prevent='crearServicio'>
    <!-- Titulo del Servicio -->
    @csrf
    <div>
        <x-input-label for="titulo" :value="__('Titulo')" />
        <x-text-input 
            id="titulo" 
            wire:model="titulo"
            type="text" 
            class="block mt-1 w-full" 
            :value="old('titulo')" 
            autocomplete="titulo" />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>
     <!-- Sexo -->
     <div class="mt-4">
        <x-input-label for="rol" :value="__('Sexo')" />
        <select
            id=sexo
            wire:model="sexo"
            class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-200 dark:text-gray-900 focus:border-green-400 dark:focus:border-green-400 focus:ring-green-400 dark:focus:ring-green-400 rounded-md shadow-sm"
        >
            @foreach ($sexos as $sexo )
                <option value="{{$sexo->id}}">{{$sexo->sexo}}</option>    
            @endforeach
            
        </select>
        <x-input-error :messages="$errors->get('sexo')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="imagen" :value="__('Imagen: ')" />
        <x-text-input 
            id="imagen" 
            wire:model="imagen"
            type="file" 
            class="block mt-1 w-full" 
            :value="old('imagen')" 
            accept="image/*"
        />
        <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
    </div>
     <!-- preview -->
    <div class="my-2 w-80">
        @if ($imagen)
            Imagen:
            <img src="{{$imagen->temporaryUrl()}}" alt="">
        @endif
    </div>
    <div class="flex items-center mt-4">
        <x-primary-button class="w-full justify-center">
            {{ __('Guardar') }}
        </x-primary-button>
    </div>
</form>