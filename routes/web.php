<?php

// use App\Http\Controllers\PageController;

// Route::get('/', [PageController::class, 'home']);

// use App\Http\Controllers\ArticleController;

// Route::get('/', function () {
//     return redirect('/articles');
// });

// Route::resource('articles', ArticleController::class);

use App\Http\Controllers\ArticleController;

Route::resource('articles', ArticleController::class);
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');

// route untuk search
Route::get('/search', [ArticleController::class, 'search'])->name('articles.search');

