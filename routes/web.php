<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;





Route::get('/', [PageController::class, 'main'])->name('main');



include __DIR__ . '/auth.php';