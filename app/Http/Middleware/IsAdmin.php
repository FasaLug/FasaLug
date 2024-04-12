<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();
        $auth = auth()->check();
        if ($auth && $user->role === env('FSLOG_ADMIN')) {
            $adminUserId = $user->id;
            $sessionId = $request->session()->getId();
            return $next($request);
        } else {
            abort(404);
            return $next($request);
        }
    }
}
