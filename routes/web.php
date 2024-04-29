<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;



Route::get('/', [PageController::class, 'main'])->name('main');

Route::post('/login',[AuthController::class, 'login'])->name('login');
Route::post('/logout',[AuthController::class, 'logout'])->name('logout');