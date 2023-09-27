# create a new project
`composer create-project laravel/laravel inertia-crud`
# Install dependencies
`composer require inertiajs/inertia-laravel tightenco/ziggy`
    and
`npm install @inertiajs/inertia`
`npm install inertiajs/inertia-vue3` x
`npm install @inertiajs/progress`
`npm install @vitejs/plugin-vue`
`npm install vue`
# edit the app.blade.php in views
# Create this middleware
`php artisan inertia:middleware`
 # Once the middleware has been generated add it to app/Http/Kernel.php as the last item in the web middleware group:
 ` \App\Http\Middleware\HandleInertiaRequests::class,`
 # edit vite.config.js# blogging_interia
