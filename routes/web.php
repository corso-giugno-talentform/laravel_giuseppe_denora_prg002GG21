<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/contattaci', [PageController::class, 'contattaci'])->name('contattaci');
Route::get('/', [PageController::class, 'homepage'])->name('homepage');
/* Route::get('/article/{slug}', [PageController::class ,'article'])->name('article');
Route::get('/article/{slug}', [PageController::class ,'articleEvid'])->name('article'); */
Route::get('/article/evidenza/{slug}', [PageController::class, 'articleEvid'])->name('article');
Route::get('/article/recent/{slug}', [PageController::class, 'article'])->name('article');


