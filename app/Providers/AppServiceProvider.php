<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Src\KendaraanRepo;
use App\ModelKendaraan;

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
        $this->app->singleton(KendaraanRepo::class, ModelKendaraan::class);
    }
}
