<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class Api
{
    protected $except = [
        '/login',
        '/register'
    ];
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response {

        if (!auth('api')->check()) {
            return response()->json([
                'error'     => 'Запрещено входить не авторизированому пользователю',
                'needLogin' => true,
            ], Response::HTTP_UNAUTHORIZED);
        }

        return $next($request);
    }
}