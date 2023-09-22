<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\DashboardRepository;
use App\Repositories\DashboardRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(DashboardRepositoryInterface::class, DashboardRepository::class);
        $this->app->bind(abstract: ModelRepositoryInterface::class, concrete: NewsRepository::class);
        $this->app->bind(abstract: ModelRepositoryInterface::class, concrete: CategoryRepository::class);
        $this->app->bind(EloquentCrudRepository::class, CrudRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
