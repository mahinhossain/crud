<?php

namespace Mahin\CrudGenerator;

use Illuminate\Support\ServiceProvider;
use Mahin\CrudGenerator\Console\Commands\CrudGeneratorCommand;

class CrudGeneratorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            CrudGeneratorCommand::class,
        ]);
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/stubs' => resource_path('stubs'),
        ], 'crud-generator-stubs');
    }
}
