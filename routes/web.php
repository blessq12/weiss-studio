<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ActionController;

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
        Route::get('/','index')->name('index');
    };
    $actionRoutes = function(){
        Route::get('/sendreq','send')->name('sendreq');
    };
    Route::controller(ActionController::class)->name('action.')->group($actionRoutes);
    Route::controller(MainController::class)->name('main.')->group($mainRoutes);
});

