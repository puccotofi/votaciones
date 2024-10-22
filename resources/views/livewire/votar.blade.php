<div class="w-full">
    <form method="POST" action="{{ route('votar.store') }}" novalidate>
        @csrf
        <!-- Voto1 -->
        <div class="mt-4">
            <x-input-label for="voto1" :value="__('JEFE DE DEPARTAMENTO U HOMOLOGO')" />
            <select
                id="voto1"
                name="voto1"
                class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-200 dark:text-gray-900 focus:border-green-400 dark:focus:border-green-400 focus:ring-green-400 dark:focus:ring-green-400 rounded-md shadow-sm"
            >
              
            </select>
            <x-input-error :messages="$errors->get('voto1')" class="mt-2" />
        </div>
        
        <div class="flex items-center mt-4">
            <x-primary-button class="w-full justify-center">
                {{ __('Votar') }}
            </x-primary-button>
        </div>
    </form>
</div>
