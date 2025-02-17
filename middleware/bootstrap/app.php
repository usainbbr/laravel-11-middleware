<?php

use App\Http\Middleware\checkRoleMiddleware;
use App\Http\Middleware\checkUserController;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // to add global middleware
        //$middleware->append(checkRoleMiddleware::class);
        // to named a middleware instead of calling it with class we use aliase
        $middleware->alias([
            'checkRole'=>checkRoleMiddleware::class,
        ]);
        $middleware->alias([
            'user' =>checkUserController::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
