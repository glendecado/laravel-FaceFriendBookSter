<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;






Route::post('/login', [AuthController::class, 'store'])->name('login');

Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');

Route::post('/register', function(Request $r){dd($r);})->name('register');



