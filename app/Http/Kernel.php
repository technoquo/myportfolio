<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    // ...

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            // otros middlewares...
            \App\Http\Middleware\SetLocale::class,
        ],

        'api' => [
            // middlewares para el grupo api
        ],
    ];

    // ...
}
