<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\EloquentUserRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Repositories -> Trabajan con la BDs -> Eloquents
        $this->app->bind(UserRepositoryInterface::class, EloquentUserRepository::class);


        // UseCases -> Casos de Uso (Logica) -> Toca hacerle el contrato


        // Services -> No manejan datos
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
