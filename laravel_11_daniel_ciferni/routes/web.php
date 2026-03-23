<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::middleware('auth')->group(function () {
    Route::resource('articles', ArticleController::class)->except(['index', 'show']);
});

Route::resource('articles', ArticleController::class)->only(['index', 'show']);
