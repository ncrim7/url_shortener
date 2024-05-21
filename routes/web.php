<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [UrlController::class, 'index']);
Route::post('/shorten', [UrlController::class, 'store'])->name('url.shorten');
Route::get('/{shortenedUrl}', [UrlController::class, 'show'])->name('url.redirect');

