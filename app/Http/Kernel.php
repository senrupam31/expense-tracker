<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $routeMiddleware = [

        'auth' => \App\Http\Middleware\Authenticate::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
        'admin' => \App\Http\Middleware\IsAdmin::class,
        
    ];
    
}
