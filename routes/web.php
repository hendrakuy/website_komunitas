<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ShopController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/event', [PageController::class, 'event'])->name('event');
Route::get('/edukasi', [PageController::class, 'edukasi'])->name('edukasi');
Route::get('/aboutus', [PageController::class, 'aboutus'])->name('aboutus');
Route::get('/perjalanan', [PageController::class, 'perjalanan'])->name('perjalanan');
Route::get('/penghargaan', [PageController::class, 'penghargaan'])->name('penghargaan');
Route::get('/wisata', [PageController::class, 'wisata'])->name('wisata');

// Route untuk halaman shop
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/{slug}', [ShopController::class, 'detail'])->name('shop.detail');

