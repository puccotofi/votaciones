<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('¿Olvido su password? No hay problema. Solamente ingrese la cuenta de correo con la que se registró la cuenta y le enviaremos un email para que pueda elegir uno nuevo.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" novalidate>
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between p-3">
            @if (Route::has('password.request'))
                <x-link :href="route('register')">
                    Crear Cuenta
                </x-link>
                <x-link :href="route('login')">
                    Inciar Sesión
                </x-link>
            @endif
        </div>
        <x-primary-button class="w-full justify-center">
            {{ __('Recuperar Password') }}
        </x-primary-button>
    </form>
</x-guest-layout>
