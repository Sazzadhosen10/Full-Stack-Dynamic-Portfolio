<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Temporary hardcoded admin for testing without database
        if ($credentials['email'] === 'admin@gmail.com' && $credentials['password'] === 'admin') {
            // Store admin info in session instead of using Auth::login
            $request->session()->put('admin_user', [
                'id' => 1,
                'name' => 'Super Admin',
                'email' => 'admin@gmail.com',
                'role' => 'super_admin'
            ]);
            
            $request->session()->regenerate();
            
            // Debug: Check if session was set
            if ($request->session()->has('admin_user')) {
                // Redirect directly to admin dashboard
                return redirect('/admin/dashboard');
            } else {
                // Fallback if session wasn't set
                return redirect('/admin/dashboard')->with('error', 'Session not set properly');
            }
        }

        // Try normal database authentication if available
        try {
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/admin/dashboard');
            }
        } catch (\Exception $e) {
            // Database connection failed, continue with hardcoded check
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        // Clear admin session
        $request->session()->forget('admin_user');
        
        // Also try normal logout if user was authenticated
        if (Auth::check()) {
            Auth::logout();
        }
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
