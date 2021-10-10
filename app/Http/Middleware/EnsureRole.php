<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureRole
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param array $roles
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if(!Auth()->check()){
            return redirect('/login');
        }

        $user = Auth::user();

        foreach($roles as $role){
            if(strtolower($user->role->name) == strtolower($role)){
                return $next($request);
            }
        }

        abort(403, 'Unauthorized page');
    }
}
