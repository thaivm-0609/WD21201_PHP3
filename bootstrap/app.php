<?php

use App\Http\Middleware\CheckAuth;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void { //khai báo global middleware
        //$middleware->append(CheckAuth::class); //CheckAuth áp dụng cho tất cả route trong website
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
