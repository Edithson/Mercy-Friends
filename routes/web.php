<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/locale/{locale}', [HomeController::class, 'switchLocale'])
    ->whereIn('locale', ['en', 'fr', 'de'])
    ->name('locale.switch');

Route::get('/{locale?}', [HomeController::class, 'home'])
    ->whereIn('locale', ['en', 'fr', 'de'])
    ->name('home');
