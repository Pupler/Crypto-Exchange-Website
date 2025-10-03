<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/exchange', [HomeController::class, 'exchange']);

Route::get('/faq', [HomeController::class, 'faq']);

Route::get('/agreement', [HomeController::class, 'agreement']);

Route::get('/contacts', [HomeController::class, 'contacts']);
