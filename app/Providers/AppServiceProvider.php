<?php

namespace App\Providers;

use App\Interfaces\Services\AssignmentServiceInterface;
use App\Interfaces\Services\RoleServiceInterface;
use App\Service\AssignmentService;
use App\Service\RoleService;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\Services\UserServiceInterface;
use App\Service\UserService;
use App\Service\StatisticsService;
use App\Interfaces\Services\StatisticsServiceInterface;

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
        $this->registerInterfaceBindings();
    }

    private function registerInterfaceBindings(){
        $this->app->singleton(UserServiceInterface::class, UserService::class);
        $this->app->singleton(AssignmentServiceInterface::class, AssignmentService::class);
        $this->app->singleton(RoleServiceInterface::class, RoleService::class);
        $this->app->singleton(StatisticsServiceInterface::class, StatisticsService::class);
    }

}
