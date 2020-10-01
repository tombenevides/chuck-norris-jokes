<?php

namespace Tombenevides\ChuckNorrisJokes;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Tombenevides\ChuckNorrisJokes\Console\ChuckNorrisJoke;
use Tombenevides\ChuckNorrisJokes\Http\Controllers\ChuckNorrisController;

class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ChuckNorrisJoke::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'chuck-norris');

        $this->publishes([
            __DIR__.'/../Resources/views' => resource_path('views/vendor/chuck-norris'),
        ], 'views');

        $this->publishes([
            __DIR__.'/../config/chucknorris.php' => base_path('config/chucknorris.php'),
        ], 'config');

        if (! class_exists('CreateJokesTable')) {
            $this->publishes([
                __DIR__.'/../database/migrations/create_jokes_table.php.stub' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_jokes_table.php'),
            ], 'migrations');
        }

        Route::get(config('chucknorris.route'), ChuckNorrisController::class);
    }

    public function register()
    {
        $this->app->bind('chuck-norris', function () {
            return new JokeFactory();
        });

        $this->mergeConfigFrom(__DIR__.'/../config/chucknorris.php', 'chuck-norris');
    }
}
