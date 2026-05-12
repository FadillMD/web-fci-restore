<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// 1. Halaman Utama
Route::view('/', 'welcome')->name('home');

// 2. Halaman Statis (Menggunakan Route::view agar lebih clean)
Route::view('/tentang-kami', 'about')->name('about');
Route::view('/karir', 'career')->name('career');
Route::view('/hubungi-kami', 'contact')->name('contact');

// 3. Grouping Route Produk
Route::prefix('produk')->group(function () {
    
    // Halaman Index Produk
    Route::view('/', 'produk.index')->name('produk.index');

    // Halaman Detail Produk Dinamis
    Route::get('/{slug}', function ($slug) {
        $viewPath = 'produk.' . $slug;

        // Cek apakah file view ada sebelum ditampilkan
        if (view()->exists($viewPath)) {
            return view($viewPath);
        }

        // Jika tidak ada, lempar ke halaman 404
        abort(404);
    })->name('produk.detail');
    
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/tentang-kami', function () {
//     return view('about'); // Ini akan memanggil file about.blade.php
// })->name('about');

// Route::get('/produk', function () {
//     return view('produk.index'); 
// })->name('produk.index');

// // Route untuk halaman detail produk secara dinamis
// Route::get('/produk/{slug}', function ($slug) {
//     // Kita arahkan ke folder produk, dengan nama file sesuai slug
//     // Contoh: /produk/power-cable akan memanggil resources/views/produk/power-cable.blade.php
//     return view('produk.' . $slug);
// })->name('produk.detail');

// Route::get('/karir', function () {
//     return view('career'); 
// })->name('career');

// Route::get('/hubungi-kami', function () {
//     return view('contact');
// })->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
