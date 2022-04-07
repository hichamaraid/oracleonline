<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
<<<<<<< HEAD
     /**$this->app->bind('path.public', function() {
            return base_path().'/../public_html';
        }); */   
=======
       /*$this->app->bind('path.public', function() {
            return base_path().'/../public';
        });*/
>>>>>>> 3de80e45e7c2e062f5dae44a9add614100b67574
        Schema::defaultStringLength(191);

        Validator::extend('string_or_array', function ($value) {
            return is_string($value) || is_array($value);
        });
    }
}
