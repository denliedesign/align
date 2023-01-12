<?php

namespace App\Providers;

use App\Models\Button;
use App\Models\Photo;
use App\Models\Team;
use App\Models\Text;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('photos', Photo::all());
        View::share('texts', Text::all());
        View::share('teams', Team::all());
        View::share('buttons', Button::all());
    }
}
