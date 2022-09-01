<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,$role,$permission = null)
    {
        if(!auth()->user()) {
            return redirect()->route('login');
        }

        if(!auth()->user()->hasRole($role)) {
            echo 'Нет доступа';
            abort(404);
        }
        if($permission !== null && !auth()->user()->can($permission)) {
            echo 'Нет доступа';
            abort(404);
        }
        return $next($request);
    }
}
