<?php

use App\Http\Controllers\Frontend\UserDashboardController;
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home.index');
});



Route::group(['Middleware' => ['auth', 'verified']], function () {
    Route::get("/dashboard", [UserDashboardController::class, 'index'])->name("user.dashboard");
});





require __DIR__ . '/auth.php';
