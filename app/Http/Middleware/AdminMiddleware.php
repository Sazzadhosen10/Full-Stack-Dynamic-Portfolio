<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Debug: Log what we're checking
        \Log::info('AdminMiddleware: Checking admin access');
        
        // Check for admin user in session (temporary workaround)
        if ($request->session()->has('admin_user')) {
            $adminUser = $request->session()->get('admin_user');
            \Log::info('AdminMiddleware: Found admin user in session', $adminUser);
            
            if (isset($adminUser['role']) && ($adminUser['role'] === 'admin' || $adminUser['role'] === 'super_admin')) {
                \Log::info('AdminMiddleware: Admin access granted');
                return $next($request);
            }
        }

        // Check for normal authenticated user
        if (Auth::check()) {
            $user = Auth::user();
            \Log::info('AdminMiddleware: Found authenticated user', ['user' => $user]);
            
            if (isset($user->role) && ($user->role === 'admin' || $user->role === 'super_admin')) {
                \Log::info('AdminMiddleware: Admin access granted via Auth');
                return $next($request);
            }
        }

        // No valid admin access found
        \Log::info('AdminMiddleware: No admin access found, redirecting to login');
        return redirect('/login');
    }
}
