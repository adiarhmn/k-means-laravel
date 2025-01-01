<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::middleware([])
    ->controller(PublicController::class)
    ->group(function () {
        Route::get('/', 'index');
        // Route::get()
    });


/*
|--------------------------------------------------------------------------
| Algorithm Routes
|--------------------------------------------------------------------------
*/


