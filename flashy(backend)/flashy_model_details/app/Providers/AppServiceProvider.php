<?php

namespace App\Providers;


use App\Models\ModelDetailsModel;
use App\Repositories\ModelDetailsRepository;
use App\Services\ModelDetailsService;
use Carbon\Laravel\ServiceProvider;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Eng Nour Othman
     */
    public function register()
    {
        $this->app->singleton(ModelDetailsService::class, function ($app) {
            $model = new ModelDetailsModel();
            $repository = new ModelDetailsRepository($model);
            return new ModelDetailsService($repository);
        });
    }

    public function boot(): void
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace('App\Http\Controllers')
            ->group(base_path('routes/api.php'));

    
    }
}
