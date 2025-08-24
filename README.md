<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Full Stack Dynamic Portfolio

A Laravel-based portfolio website with dynamic content management through an admin panel.

## Features

- **Dynamic Portfolio**: All content can be updated through the admin panel
- **Admin Panel**: Secure admin interface for managing portfolio content
- **Super Admin**: Special user with full administrative privileges
- **Responsive Design**: Modern, mobile-friendly portfolio design

## Installation

1. Clone the repository
2. Install dependencies: `composer install`
3. Copy `.env.example` to `.env` and configure your database
4. Generate application key: `php artisan key:generate`
5. Run migrations: `php artisan migrate`

## Setup Super Admin

### Option 1: Using Setup Page
1. Visit `/setup` in your browser
2. Click "Create Super Admin" button
3. This will create a user with:
   - Email: `admin@gmail.com`
   - Password: `admin`

### Option 2: Using Test Route (Temporary)
1. Visit `/test-create-admin` in your browser
2. This will create the super admin user directly

### Option 3: Using Artisan Command
```bash
php artisan tinker
```
Then run:
```php
\App\Models\User::create([
    'name' => 'Super Admin',
    'email' => 'admin@gmail.com',
    'password' => \Illuminate\Support\Facades\Hash::make('admin'),
    'role' => 'super_admin',
]);
```

## Usage

### Admin Login
1. Go to `/login`
2. Use the super admin credentials:
   - Email: `admin@gmail.com`
   - Password: `admin`

### Admin Dashboard
1. After login, you'll be redirected to `/admin/dashboard`
2. Use the dashboard to update:
   - Hero section content (greeting, name, title, description)
   - About section content (title, subtitle, description)
   - Contact information (email, phone, address)

### Updating Content
1. Log in to the admin panel
2. Fill out the form with your desired content
3. Click "Update Information"
4. Changes will be reflected immediately on the homepage

## File Structure

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── AdminController.php    # Admin functionality
│   │   └── AuthController.php     # Authentication
│   └── Middleware/
│       └── AdminMiddleware.php    # Admin access control
├── Models/
│   ├── User.php                   # User model with roles
│   └── Info.php                   # Portfolio information model
resources/
└── views/
    ├── admin/
    │   └── dashboard.blade.php    # Admin dashboard
    ├── auth/
    │   └── login.blade.php        # Login form
    ├── setup.blade.php            # Setup page
    └── welcome.blade.php          # Main portfolio page
```

## Security Features

- **Role-based Access Control**: Only admin users can access the admin panel
- **Middleware Protection**: Admin routes are protected by authentication and admin middleware
- **CSRF Protection**: All forms include CSRF tokens
- **Session Security**: Secure session handling and logout functionality

## Customization

### Adding New Fields
1. Add the field to the `Info` model's `$fillable` array
2. Create a migration to add the field to the database
3. Update the admin dashboard form
4. Update the welcome page to display the new field

### Changing Default Content
Edit the default values in:
- `resources/views/admin/dashboard.blade.php` (form defaults)
- `resources/views/welcome.blade.php` (fallback values)

## Troubleshooting

### Database Connection Issues
- Ensure your database server is running
- Check `.env` file configuration
- Verify database credentials

### Migration Issues
- Run `php artisan migrate:status` to check migration status
- Run `php artisan migrate:fresh` to reset and run all migrations

### Admin Access Issues
- Verify the user has the correct role (`admin` or `super_admin`)
- Check if the user exists in the database
- Ensure the middleware is properly registered

## Support

For issues or questions, please check the Laravel documentation or create an issue in the repository.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
