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
        $this->app->bind('App\Src\Contract\KendaraanRepoInterface', 'App\Src\KendaraanRepo');
        $this->app->bind('App\Src\Contract\MemberRepoInterface', 'App\Src\MemberRepo');
        $this->app->bind('App\Src\Contract\TransactionRepoInterface', 'App\Src\TransactionRepo');
    }
}
