<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

namespace App\Http\Middleware;

use Closure;

class Authenticate
{
    public function handle($request, Closure $next)
    {
        // Your authentication logic here
    }
}