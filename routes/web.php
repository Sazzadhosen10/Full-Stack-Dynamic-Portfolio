<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // Temporarily disable database query until connection is fixed
    // $info = \App\Models\Info::first();
    $info = null; // Use null for now
    return view('welcome', compact('info'));
});

// Test database connection
Route::get('/test-db', function () {
    try {
        // Test if PDO MySQL driver is available
        $availableDrivers = PDO::getAvailableDrivers();
        $hasPdoMysql = in_array('mysql', $availableDrivers);
        
        if (!$hasPdoMysql) {
            return "❌ PDO MySQL driver is NOT available. Available drivers: " . implode(', ', $availableDrivers);
        }
        
        // Test database connection
        DB::connection()->getPdo();
        return "✅ Database connection successful! PDO MySQL driver is working.";
    } catch (Exception $e) {
        return "❌ Database connection failed: " . $e->getMessage();
    }
});

// Test PDO drivers
Route::get('/test-pdo', function () {
    $drivers = PDO::getAvailableDrivers();
    return "Available PDO drivers: " . implode(', ', $drivers);
});

// Setup route for creating super admin
Route::get('/setup', function () {
    return view('setup');
})->name('setup');

// Temporary test route to create super admin (remove after testing)
Route::get('/test-create-admin', function () {
    try {
        $user = \App\Models\User::create([
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('admin'),
            'role' => 'super_admin',
        ]);
        return "Super admin created successfully! Email: {$user->email}, Password: admin";
    } catch (\Exception $e) {
        return "Error: " . $e->getMessage();
    }
});

// Authentication routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin routes
Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/update-about', [AdminController::class, 'updateAbout'])->name('admin.update-about');
    Route::post('/create-super-admin', [AdminController::class, 'createSuperAdmin'])->name('admin.create-super-admin');
});

// Create super admin route (accessible without authentication for initial setup)
Route::post('/create-super-admin', [AdminController::class, 'createSuperAdmin'])->name('create-super-admin');
