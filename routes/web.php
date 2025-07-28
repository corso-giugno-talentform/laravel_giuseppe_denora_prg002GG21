<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'homepage'])->name('homepage');
/* Route::get('/article/{slug}', [PageController::class ,'article'])->name('article');
Route::get('/article/{slug}', [PageController::class ,'articleEvid'])->name('article'); */

Route::get('/article/evidenza/{slug}', [PageController::class, 'articleEvid'])->name('article');
Route::get('/article/recent/{slug}', [PageController::class, 'article'])->name('article');

Route::get('/contattaci', [PageController::class, 'contattaci'])->name('contattaci');


///prendere dati dal form
Route::post('/invio-contatti', [PageController::class, 'sendFull'])->name('send');

