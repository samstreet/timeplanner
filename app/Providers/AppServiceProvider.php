<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\Services\UserServiceInterface;
use App\Service\UserService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerInterfaces();
    }

    private function registerInterfaces(){
        $this->app->singleton(UserServiceInterface::class, UserService::class);
    }

}
