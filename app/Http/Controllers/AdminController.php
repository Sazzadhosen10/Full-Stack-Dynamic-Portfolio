<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        // Temporarily remove auth middleware since we're using session-based auth
        // $this->middleware('auth');
        $this->middleware('admin');
    }

    public function dashboard(Request $request)
    {
        // Get admin user info from session or Auth
        $adminUser = $request->session()->get('admin_user') ?? Auth::user();
        
        // Temporarily create a mock info object for testing
        $info = new \stdClass();
        $info->hero_greeting = 'Hello,';
        $info->hero_name = 'Sazzad';
        $info->hero_title = 'Junior Software Developer';
        $info->hero_description = 'Passionate about creating innovative solutions and building amazing web experiences. I love turning ideas into reality through clean, efficient code.';
        $info->about_title = 'About Me';
        $info->about_description = 'I started my software journey from photography. Through that, I learned to love the process of creating from scratch. Since then, this has led me to software development as it fulfills my love for learning and building things.';
        $info->about_subtitle = 'My Journey';
        $info->contact_email = 'sazzad@email.com';
        $info->contact_phone = '+880 123 456 789';
        $info->contact_address = 'Dhaka, Bangladesh';
        
        return view('admin.dashboard', compact('info', 'adminUser'));
    }

    public function updateAbout(Request $request)
    {
        $request->validate([
            'about_title' => 'required|string|max:255',
            'about_description' => 'required|string',
            'about_subtitle' => 'nullable|string|max:255',
            'hero_greeting' => 'required|string|max:255',
            'hero_name' => 'required|string|max:255',
            'hero_title' => 'required|string|max:255',
            'hero_description' => 'required|string',
            'contact_email' => 'required|email|max:255',
            'contact_phone' => 'required|string|max:255',
            'contact_address' => 'required|string|max:255',
        ]);

        // Temporarily store in session for testing
        $request->session()->put('portfolio_info', $request->all());

        return redirect()->back()->with('success', 'About information updated successfully! (Stored in session for now)');
    }

    public function createSuperAdmin()
    {
        // Check if super admin already exists
        try {
            $superAdmin = User::where('role', 'super_admin')->first();
            
            if ($superAdmin) {
                return redirect()->back()->with('error', 'Super admin already exists!');
            }

            // Create super admin user
            $user = User::create([
                'name' => 'Super Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'role' => 'super_admin',
            ]);

            return redirect()->back()->with('success', 'Super admin created successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Database error: ' . $e->getMessage());
        }
    }
}
