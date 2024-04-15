<?php

use App\Http\Middleware\Authorize;
use App\Http\Middleware\Guest;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;


Route::middleware([Guest::class])->group(function () {
    Route::get("/", [LoginController::class,"index"])->name("login");
    Route::post("validate", [LoginController::class,"authenticate"])->name("validate");
    Route::get("register", [RegisterController::class,"index"])->name("register");
});

Route::middleware([Authorize::class])->group(function () {
    Route::get("dashboard", [DashboardController::class,"index"])->name("dashboard");
});

