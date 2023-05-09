<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share([
            'phone' => '+7(961)890‒08‒55',
            'address' => '​Большая Подгорная, 87, 2 офис',
            'emailAddress' => 'info@weiss-studio.ru',
            'waLink' => 'http://wa.me/XXXXXX',
            'tgLink' => 'http://t.me/username',
        ]);
    }
}
