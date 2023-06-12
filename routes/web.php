<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ActionController;
use App\Http\Middleware\CanonicalHeader;

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

Route::domain(env('APP_URL'))->group(function(){

    $mainRoutes = function(){
        Route::get('/','index')->middleware(CanonicalHeader::class)->name('index');
    };
    $actionRoutes = function(){
        Route::post('/sendreq','send')->name('sendreq');
    };
    Route::controller(ActionController::class)->name('action.')->group($actionRoutes);
    Route::controller(MainController::class)->name('main.')->group($mainRoutes);
});

