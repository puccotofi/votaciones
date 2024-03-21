<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot()
    {
        //
        VerifyEmail::toMailUsing(function($notifiable,$url){
            return (new MailMessage)
                ->subject('Verificar Cuenta')
                ->line('Para Verificar su cuenta presione el siguiente botón')
                ->action('Confirmar Cuenta',$url)
                ;
        });
    }
}
