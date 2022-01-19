<?php

namespace App\Providers;

use App\Repository\KendaraanRepository;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\KendaraanRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(KendaraanRepositoryInterface::class, KendaraanRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
