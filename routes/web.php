<?php

use App\Http\Controllers\KmeansController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes [Middleware ]
|--------------------------------------------------------------------------
*/

Route::middleware([])
    ->controller(PublicController::class)
    ->group(function () {
        Route::get('/', 'index');
    });



/*
|--------------------------------------------------------------------------
| Algorithm K-means Routes [Middleware: Admin]
|--------------------------------------------------------------------------
*/

Route::controller(KmeansController::class)
    ->group(function () {
        Route::get('/k-means', 'index')->name('k-means');
    });
