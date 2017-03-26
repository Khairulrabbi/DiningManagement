<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use Carbon\Carbon;
use Auth;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        $age = Carbon::createFromDate(1993,10,22)->age;
        $age = Carbon::createFromDate(1993,03,20)->age;
        View::share('age', $age);
        View::share('myName', 'Khairul Alam');
//        View::share('auth', Auth::User());
        View::composer('*', function($view){
            $view->with('auth', Auth::user());
        }); 
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
