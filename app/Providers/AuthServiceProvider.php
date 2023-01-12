<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
         'App\Models\Photo' => 'App\Policies\PhotoPolicy',
         'App\Models\Text' => 'App\Policies\TextPolicy',
         'App\Models\Team' => 'App\Policies\TeamPolicy',
         'App\Models\Button' => 'App\Policies\ButtonPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
