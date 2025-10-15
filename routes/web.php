<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ShopController;
use App\Models\Edupackage;
use App\Http\Controllers\EdupackageController;

// Halaman utama website
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/aboutus', [PageController::class, 'aboutus'])->name('aboutus');
Route::get('/perjalanan', [PageController::class, 'perjalanan'])->name('perjalanan');
Route::get('/penghargaan', [PageController::class, 'penghargaan'])->name('penghargaan');
Route::get('/wisata', [PageController::class, 'wisata'])->name('wisata');

// Halaman event dan detail event
Route::get('/event', [PageController::class, 'event'])->name('event.index');
Route::get('/event/{slug}', [PageController::class, 'eventDetail'])->name('event.detail');

// Route untuk halaman edukasi dan detail edukasi
Route::get('/edukasi', [EdupackageController::class, 'index'])->name('edupackage.index');
Route::get('/edupackage/{slug}', [EdupackageController::class, 'show'])->name('edupackage.detail');

// Route untuk halaman shop
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/{slug}', [ShopController::class, 'detail'])->name('shop.detail');

// Route halaman admin
Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');

