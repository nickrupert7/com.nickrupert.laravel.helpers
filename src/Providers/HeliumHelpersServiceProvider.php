<?php

namespace NickRupert\LaravelHelpers\Providers;

use NickRupert\LaravelHelpers\Controllers\StatesController;
use NickRupert\LaravelHelpers\Middleware\CastCamelToSnake;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class LaravelHelpersServiceProvider extends ServiceProvider
{
	public function boot()
	{
		$this->loadTranslationsFrom(__DIR__ . '/../lang/', 'laravelHelpers');
		$this->loadMigrationsFrom(__DIR__ . '/../Database/migrations/Common');

		$this->publishes([
			__DIR__ . '/../lang/' => resource_path('lang/vendor/laravelHelpers'),
			__DIR__ . '/../config/batch.php' => config_path('batch.php'),
            __DIR__ . '/../Database/migrations/Common' => database_path('migrations')
		]);

        if (!$this->app->routesAreCached()) {
            Route::get('api/states', [StatesController::class, 'index'])->middleware(['api']);
        }

		if ($this->app->runningInConsole())
		{
			$this->commands([
			]);
		}
	}

	public function register()
    {
        app('router')->aliasMiddleware('camelCase', CastCamelToSnake::class);
    }
}