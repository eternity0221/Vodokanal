<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware {
    public function handle(Request $request, Closure $next, string ...$roles){
        $role = Auth::check() ? Auth::user()->role : "guest";
        return in_array($role, $roles) ? $next($request) : redirect()->route("home");
    }
}
