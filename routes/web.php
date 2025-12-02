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
use App\Http\Controllers\EventController;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;


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
Route::get('/event', [EventController::class, 'index'])->name('event.index');
Route::get('/event/{slug}', [EventController::class, 'show'])->name('event.show');

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
Route::view('/cara-pemesanan', 'cara-pemesanan')->name('cara-pemesanan');

// Route untuk memuat lebih banyak event melalui API
Route::get('/api/events', [EventController::class, 'loadMore'])->name('api.events');

// Route untuk mencetak semua order dalam format PDF
Route::get('/orders/print/{order}', function (\App\Models\Order $order) {
    $pdf = Pdf::loadView('pdf.order-single', ['order' => $order]);
    return $pdf->download('Order-' . $order->order_number . '.pdf');
})->name('orders.print-single');

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])
        ->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])
        ->name('password.email');

    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])
        ->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'reset'])
        ->name('password.update');
});

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/verify-email', [VerificationController::class, 'notice'])
        ->name('verification.notice');

    Route::get('/verify-email/{id}/{hash}', [VerificationController::class, 'verify'])
        ->middleware(['signed'])
        ->name('verification.verify');

    Route::post('/email/verification-notification', [VerificationController::class, 'send'])
        ->middleware(['throttle:6,1'])
        ->name('verification.send');
});
