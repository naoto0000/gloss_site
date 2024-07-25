<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateMembers
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $guard = 'members')
    {
        // 認証されていない場合の処理
        if (!Auth::guard($guard)->check()) {
            return redirect()->route('login'); 
        }

        // 認証されている場合、次のミドルウェアに処理を渡す
        return $next($request);
    }
}
