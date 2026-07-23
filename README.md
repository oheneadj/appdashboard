# AppDash

AppDash is a dashboard design template built on Laravel, Livewire, Tailwind CSS, and Vite. It provides a polished admin/dashboard UI structure with styled Blade views and frontend assets, but it is not a complete production application.

## What This Project Contains

- Laravel 12 starter structure with routes, controllers, and Blade views
- Tailwind CSS via Vite for modern utility-first styling
- Livewire support for interactive dashboard components
- Example pages for analytics, ecommerce, and dashboard layouts
- A frontend UI template built around the AppDash design

## What This Project Is Not

- Not a full SaaS product or finished business application
- Not a complete backend with production-ready authentication flows, data models, or business logic
- Not a drop-in solution for deployment without additional customization and integration

## Key Technologies

- PHP 8.2
- Laravel 12
- Livewire 4
- Laravel Fortify
- Tailwind CSS 4
- Vite
- FlyonUI

## Getting Started

> This repository is intended as a design/template project. Use it as a starting point for building a dashboard app, not as a finished app ready for production.

1. Clone the repository

```bash
git clone git@github.com:oheneadj/appdashboard.git
cd appdashboard
```

2. Install PHP dependencies

```bash
composer install
```

3. Install JavaScript dependencies

```bash
npm install
```

4. Copy the environment file and generate an app key

```bash
cp .env.example .env
php artisan key:generate
```

5. Build assets or start the development server

```bash
npm run build
# or
npm run dev
```

## Project Structure

- `app/` — Laravel application code, including controllers, actions, models, and Livewire components
- `config/` — Laravel configuration files
- `database/` — migrations, factories, and seeders
- `public/` — compiled frontend assets and public entry point
- `resources/views/` — Blade templates for the dashboard UI
- `resources/js/` — frontend JavaScript entry points
- `resources/css/` — Tailwind CSS and custom styles
- `routes/` — route definitions for web and settings

## Notes for Developers

- The current repository is primarily a design dashboard template and should be extended with real application logic, user data, and backend integration.
- Authentication and Fortify are included, but the UI is the main focus.
- Customize the Blade views and Livewire components to adapt the design to your own dashboard project.

## Available Commands

- `npm run dev` — start Vite development server
- `npm run build` — compile assets for production
- `composer install` — install PHP dependencies
- `php artisan key:generate` — generate app key

## License

This project is provided without a license file in the repository. Add a license if you plan to share or publish the template.
