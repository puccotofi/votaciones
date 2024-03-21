<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" novalidate>
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- Rol -->
        <div class="mt-4">
            <x-input-label for="rol" :value="__('Rol')" />
            <select
                id="rol"
                name="rol"
                class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-200 dark:text-gray-900 focus:border-green-400 dark:focus:border-green-400 focus:ring-green-400 dark:focus:ring-green-400 rounded-md shadow-sm"
            >
                <option value="">-- Selecciona un Rol--</option>
                <option value="1">Pensionado</option>
                <option value="2">Trabajador Activo</option>
            </select>
            <x-input-error :messages="$errors->get('rol')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirme su Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between p-3">
            @if (Route::has('password.request'))
                <x-link :href="route('password.request')">
                    ¿Olvidaste tu cuenta?
                </x-link>
                <x-link :href="route('login')">
                    Inciar Sesión
                </x-link>
            @endif
        </div>
        <x-primary-button class="w-full justify-center">
            {{ __('Registrarse') }}
        </x-primary-button>
    </form>
</x-guest-layout>
