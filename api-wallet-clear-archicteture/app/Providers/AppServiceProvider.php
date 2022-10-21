<?php

namespace App\Providers;

use App\Http\Controllers\Expanses\ExpanseController;
use App\Http\Controllers\Expanses\Resources\ExpansesResource;
use App\Providers\Expanses\Providers\ExpanseProvider;
use Domain\Expanses\Services\FindExpanseService;
use Domain\Expanses\UseCases\FindExpansesUseCase;
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

        var_dump('ntrou aqui', $this);
        $this->app->bind(
            FindExpansesUseCase::class,
            FindExpanseService::class,
        );        

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
