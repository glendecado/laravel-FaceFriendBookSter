<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;






Route::post('/login', [AuthController::class, 'store'])->name('login');

Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');



