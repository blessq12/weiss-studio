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
            'phone' => '+7 (901) 608‒08‒55',
            'address' => '​Большая Подгорная, 87, 2 офис',
            'emailAddress' => 'Vais.anastassia@yandex.ru',
            'waLink' => 'http://wa.me/79016080855',
            'tgLink' => 'https://t.me/weis_stydio',
            'vkGroup' => 'https://vk.com/club210928296',
            'insta' => 'https://instagram.com/weiss_tomsk?igshid=NTc4MTIwNjQ2YQ==',
            'gisLink' => 'https://2gis.ru/tomsk/firm/70000001057077180',
            'googleLink' => '',
            'yandexLink' => '',
        ]);
    }
}
