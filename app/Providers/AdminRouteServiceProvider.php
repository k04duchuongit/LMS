<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AdminRouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        Route::middleware(['web']) // hoặc chỉ 'web' nếu chưa có auth
            ->prefix('admin')
            ->name('admin.')
            ->group(base_path('routes/admin.php'));

    }
}
