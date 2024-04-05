<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;

Route::get("/", [LoginController::class,"index"])->name("login");
Route::post("validate", [LoginController::class,"authenticate"])->name("validate");
Route::get("register", [RegisterController::class,"register"])->name("register");

Route::get("dashboard", [DashboardController::class,"index"])->middleware("auth")->name("dashboard");
