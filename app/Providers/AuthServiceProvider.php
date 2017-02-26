<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Auth;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();


        Gate::define('vinculo_escola', function ($user, $escola)

        {  
            return $user->name == $escola->vinculo;
        });


        Gate::define('vinculo_pessoa', function ($user, $pessoa)

        {  
            return $user->name == $pessoa->vinculo;
        });
        

        Gate::define('vinculo_funcionario', function ($user, $funcionario)

        {  
            return $user->id == $funcionario->user_id;
        });
    }

    // public function vinculo(User $user, Escola $escola)
    // {

    //         return $user->id === $escola->user_id;

    // }
    
}

        

