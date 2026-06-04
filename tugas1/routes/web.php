<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);

Route::get('/profil', [PageController::class, 'profil']);

Route::get('/produk', [PageController::class, 'produk']);

Route::get('/galeri', [PageController::class, 'galeri']);

Route::get('/kontak', [PageController::class, 'kontak']);