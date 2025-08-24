<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .sidebar {
            min-height: 100vh;
            background: #2c3e50;
            color: white;
        }
        .sidebar .nav-link {
            color: #ecf0f1;
        }
        .sidebar .nav-link:hover {
            background: #34495e;
            color: white;
        }
        .sidebar .nav-link.active {
            background: #3498db;
            color: white;
        }
        .main-content {
            background: #f8f9fa;
            min-height: 100vh;
        }
        .card {
            border: none;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }
        .form-control:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
        }
        .btn-primary {
            background: #3498db;
            border-color: #3498db;
        }
        .btn-primary:hover {
            background: #2980b9;
            border-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 px-0 sidebar">
                <div class="p-3">
                    <h4 class="text-center mb-4">
                        <i class="fas fa-user-shield"></i> Admin Panel
                    </h4>
                    <nav class="nav flex-column">
                        <a class="nav-link active" href="#dashboard">
                            <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                        </a>
                        <a class="nav-link" href="#about">
                            <i class="fas fa-info-circle me-2"></i> About Us
                        </a>
                        <a class="nav-link" href="/" target="_blank">
                            <i class="fas fa-eye me-2"></i> View Site
                        </a>
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 main-content">
                <div class="p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2>Welcome, {{ $adminUser['name'] ?? 'Admin' }}!</h2>
                        <span class="badge bg-primary">{{ $adminUser['role'] ?? 'admin' }}</span>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <!-- About Us Section -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="mb-0">
                                <i class="fas fa-info-circle me-2"></i> About Us Information
                            </h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.update-about') }}" method="POST">
                                @csrf
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="text-primary mb-3">Hero Section</h6>
                                        
                                        <div class="mb-3">
                                            <label for="hero_greeting" class="form-label">Greeting</label>
                                            <input type="text" class="form-control" id="hero_greeting" name="hero_greeting" 
                                                   value="{{ $info->hero_greeting ?? 'Hello,' }}" required>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="hero_name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="hero_name" name="hero_name" 
                                                   value="{{ $info->hero_name ?? 'Sazzad' }}" required>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="hero_title" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="hero_title" name="hero_title" 
                                                   value="{{ $info->hero_title ?? 'Junior Software Developer' }}" required>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="hero_description" class="form-label">Description</label>
                                            <textarea class="form-control" id="hero_description" name="hero_description" rows="3" required>{{ $info->hero_description ?? 'Passionate about creating innovative solutions and building amazing web experiences. I love turning ideas into reality through clean, efficient code.' }}</textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <h6 class="text-primary mb-3">About Section</h6>
                                        
                                        <div class="mb-3">
                                            <label for="about_title" class="form-label">About Title</label>
                                            <input type="text" class="form-control" id="about_title" name="about_title" 
                                                   value="{{ $info->about_title ?? 'About Me' }}" required>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="about_subtitle" class="form-label">About Subtitle</label>
                                            <input type="text" class="form-control" id="about_subtitle" name="about_subtitle" 
                                                   value="{{ $info->about_subtitle ?? 'My Journey' }}">
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="about_description" class="form-label">About Description</label>
                                            <textarea class="form-control" id="about_description" name="about_description" rows="4" required>{{ $info->about_description ?? 'I started my software journey from photography. Through that, I learned to love the process of creating from scratch. Since then, this has led me to software development as it fulfills my love for learning and building things.' }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="text-primary mb-3">Contact Information</h6>
                                        
                                        <div class="mb-3">
                                            <label for="contact_email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="contact_email" name="contact_email" 
                                                   value="{{ $info->contact_email ?? 'sazzad@email.com' }}" required>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="contact_phone" class="form-label">Phone</label>
                                            <input type="text" class="form-control" id="contact_phone" name="contact_phone" 
                                                   value="{{ $info->contact_phone ?? '+880 123 456 789' }}" required>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="contact_address" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="contact_address" name="contact_address" 
                                                   value="{{ $info->contact_address ?? 'Dhaka, Bangladesh' }}" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save me-2"></i> Update Information
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Create Super Admin Section -->
                    @if(($adminUser['role'] ?? '') === 'super_admin')
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">
                                <i class="fas fa-user-plus me-2"></i> Create Super Admin
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted">Create a new super admin user with email: admin@gmail.com and password: admin</p>
                            <form action="{{ route('admin.create-super-admin') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-warning">
                                    <i class="fas fa-user-plus me-2"></i> Create Super Admin
                                </button>
                            </form>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
