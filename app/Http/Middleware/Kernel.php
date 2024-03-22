<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Kernel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }
    // Within App\Http\Kernel class...
 
protected $middlewareAliases = [
    'isadmin' => \App\Http\Middleware\IsAdmin::class,
    'auth' => \App\Http\Middleware\Authenticate::class,
    'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
    'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
    'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
    'can' => \Illuminate\Auth\Middleware\Authorize::class,
    'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
    'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
    'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
    'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
];

// protected $middlewareGroups = [
//     'web' => [
//         \App\Http\Middleware\EncryptCookies::class,
//         \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
//         \Illuminate\Session\Middleware\StartSession::class,
//         \Illuminate\View\Middleware\ShareErrorsFromSession::class,
//         \App\Http\Middleware\VerifyCsrfToken::class,
//         \Illuminate\Routing\Middleware\SubstituteBindings::class,
//     ],
 
//     'api' => [
//         \Illuminate\Routing\Middleware\ThrottleRequests::class.':api',
//         \Illuminate\Routing\Middleware\SubstituteBindings::class,
//     ],
// ];
};