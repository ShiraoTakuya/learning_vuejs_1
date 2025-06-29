<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommonController;

Route::get('/', [UserController::class, 'view_home'])->name('view_home');
Route::get('/page2', [UserController::class, 'page2'])->name('page2');

Route::post('/debug_old', [CommonController::class, 'debug_old'])->name('debug_old');
