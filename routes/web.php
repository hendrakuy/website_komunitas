<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ShopController;
use App\Models\Edupackage;
use App\Http\Controllers\EdupackageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\JourneyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InstagramController;

// Halaman utama website
Route::get('/', [PageController::class, 'home'])->name('home');
// Route::get('/', [InstagramController::class, 'feed'])->name('home');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/aboutus', [PageController::class, 'aboutus'])->name('aboutus');
Route::get('/perjalanan', [JourneyController::class, 'index'])->name('perjalanan');
Route::get('/penghargaan', [PageController::class, 'penghargaan'])->name('penghargaan');

// Halaman wisata dan detail wisata
Route::get('/wisata', [WisataController::class, 'index'])->name('wisata.index');
Route::get('/wisata/{slug}', [WisataController::class, 'wisataDetail'])->name('wisata.detail');

// Halaman event dan detail event
Route::get('/event', [PageController::class, 'event'])->name('event.index');
Route::get('/event/{slug}', [PageController::class, 'eventDetail'])->name('event.detail');

// Route untuk halaman edukasi dan detail edukasi
Route::get('/edukasi', [EdupackageController::class, 'index'])->name('edupackage.index');
Route::get('/edukasi/{slug}', [EdupackageController::class, 'show'])->name('edupackage.detail');

// Route untuk halaman shop
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/{slug}', [ShopController::class, 'detail'])->name('shop.detail');

// Route halaman admin
// Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

// Route untuk membuat order
Route::post('/order', [OrderController::class, 'create'])->name('order.create');
// Route::get('/invoice/{id}', [OrderController::class, 'generateInvoice'])->name('invoice.generate');
Route::get('/generate-invoice/{orderId}', [OrderController::class, 'generateInvoice'])->name('generate.invoice');
Route::get('/invoice/{id}', [OrderController::class, 'showInvoice'])->name('invoice.show');

// Route untuk menyimpan pesan kontak dengan rate limiting
Route::post('/contact/store', [ContactController::class, 'store'])
    ->middleware('throttle:3,1')
    ->name('contact.store');

// Route untuk halaman kebijakan privasi
Route::view('/kebijakan-privasi', 'privacy')->name('privacy');
Route::view('/syarat-dan-ketentuan', 'term')->name('term');