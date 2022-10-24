<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Domain\Expanses\Services\FindExpansesService;
use Domain\Expanses\UseCases\FindExpansesUseCase;
use Domain\Expanses\DataProviders\ExpansesDataProvider;
use Domain\Expanses\Services\CreateExpansesService;
use Domain\Expanses\Services\DeleteExpansesService;
use Domain\Expanses\Services\UpdateExpansesService;
use Domain\Expanses\UseCases\CreateExpansesUseCase;
use Domain\Expanses\UseCases\DeleteExpansesUseCase;
use Domain\Expanses\UseCases\UpdateExpansesUseCase;
use Application\Expanses\Providers\ExpanseProvider;
use Application\System\Providers\UserProvider;
use Domain\System\DataProviders\UserDataProvider;
use Domain\System\Services\CreateUserService;
use Domain\System\Services\GetUserService;
use Domain\System\Services\UpdateUserService;
use Domain\System\UseCases\CreateUserUseCase;
use Domain\System\UseCases\GetUserUseCase;
use Domain\System\UseCases\UpdateUserUseCase;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(FindExpansesUseCase::class, FindExpansesService::class);
        $this->app->bind(CreateExpansesUseCase::class, CreateExpansesService::class);
        $this->app->bind(UpdateExpansesUseCase::class, UpdateExpansesService::class);
        $this->app->bind(DeleteExpansesUseCase::class, DeleteExpansesService::class);
        $this->app->bind(ExpansesDataProvider::class, ExpanseProvider::class);

        $this->app->bind(GetUserUseCase::class, GetUserService::class);
        $this->app->bind(CreateUserUseCase::class, CreateUserService::class);
        $this->app->bind(UpdateUserUseCase::class, UpdateUserService::class);
        $this->app->bind(UserDataProvider::class, UserProvider::class);
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
