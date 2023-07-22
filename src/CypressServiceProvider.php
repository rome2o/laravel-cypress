<?php

namespace Laracasts\Cypress;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class CypressServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->environment('production')) {
            return;
        }
        // TODO: Enable cypress provider through environment so we can set it in pipeline
        if($this->app->environment('testing')) {

            $this->addRoutes();

            if ($this->app->runningInConsole()) {
                $this->publishes([
                    __DIR__.'/routes/cypress.php' => base_path('routes/cypress.php'),
                ]);

                $this->commands([
                    CypressBoilerplateCommand::class,
                ]);
            }
        }
        else {
            // TODO: Change this text later on
            return $this->info('Cypress must be used in TESTING env only');
        }
    }

    protected function addRoutes()
    {
        Route::namespace('')
            ->middleware('web')
            ->group(__DIR__.'/routes/cypress.php');
    }
}
