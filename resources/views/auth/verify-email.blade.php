<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Gracias por Registrarse! 
               Antes de comenzar, verifique su cuenta de email haciendo clik en el enlace de confirmacion 
               que le hicimos llegar a la cuenta que registró. 
               Si usted no recibió el correo, con gusto le enviaremos otro.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ __(' Un nuevo enlace de verificación fue 
            enviado a la dirección de correo que indico al registrarse.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}" novalidate>
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Reenviar Correo de Verificación') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                {{ __('Salir') }}
            </button>
        </form>
    </div>
</x-guest-layout>
