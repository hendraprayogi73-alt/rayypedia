<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\SponsorController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::prefix('admin')->group(function () {

    Route::resource(
        'sponsors',
        SponsorController::class
    );

});
