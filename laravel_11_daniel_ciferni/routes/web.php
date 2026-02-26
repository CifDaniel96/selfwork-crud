<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::resource('articles', ArticleController::class);