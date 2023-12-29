<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
          // Check if the user is authenticated
          if (!Auth::check()) {
            // Redirect or return an unauthorized response
            return redirect()->route('admin-login'); // Example: Redirect to login page
            // OR
            // return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}
