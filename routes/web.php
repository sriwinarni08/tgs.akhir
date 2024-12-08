<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Rute untuk pencarian
Route::get('/search', [SearchController::class, 'home'])->name('search');

// Rute untuk halaman statis
Route::get('home', function () {
    return view('home');
});

Route::get('keranjang', function () {
    return view('keranjang');
});

Route::get('shop', function () {
    return view('shop');
});

// Rute untuk resource posts
Route::resource('posts', PostController::class);

// Rute untuk menyimpan data (jika diperlukan)
Route::post('posts', [PostController::class, 'store'])->name('posts.store');