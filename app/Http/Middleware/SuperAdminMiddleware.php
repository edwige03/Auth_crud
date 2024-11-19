<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperAdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user() && Auth::user()->role === 'superadmin') {
            return $next($request);
        }
        return redirect('/'); // Redirection si l'utilisateur n'est pas super admin
    }
}

