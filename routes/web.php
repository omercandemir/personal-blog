<?php

use Illuminate\Support\Facades\Route;

// anasayfa kısmı
use App\Http\Controllers\home\HomepageController; // controller çağırma
use App\Http\Controllers\home\BlogController; // controller çağırma
use App\Http\Controllers\home\ProjeController; // controller çağırma
use App\Http\Controllers\ContactController; // controller çağırma
use App\Http\Controllers\home\KategoriController; // controller çağırma

// admin paneli kısmı
use App\Http\Controllers\admin\AdminController; // controller çağırma
use App\Http\Controllers\admin\AyarController; // controller çağırma
use App\Http\Controllers\admin\LogoController; // controller çağırma
use App\Http\Controllers\admin\HakkimizdaController; // controller çağırma
use App\Http\Controllers\admin\BloglarController; // controller çağırma

Route::get('/', HomepageController::class)->name('anasayfa');
Route::resource('blog', BlogController::class)->only([
    'index', 'show'
]);

Route::resource('contact', ContactController::class)->only([
    'index', 'store'
]);

Route::resource('projeler', ProjeController::class)->only([
    'index', 'show'
]);

Route::resource('kategori', KategoriController::class)->only([
    'index', 'show'
]);
/*
Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('panel.anasayfa');
})->name('dashboard');
*/
Route::get('/admin', AdminController::class)->middleware('auth:sanctum', 'verified');

Route::resource('admin/ayar', AyarController::class)->middleware('auth:sanctum', 'verified')->only([
    'index', 'update'
]);

Route::resource('admin/logo', LogoController::class)->middleware('auth:sanctum', 'verified')->only([
    'index', 'update'
]);

Route::resource('admin/hakkimizda', HakkimizdaController::class)->middleware('auth:sanctum', 'verified')->only([
    'index', 'update'
]);

Route::resource('admin/bloglar', BloglarController::class)->middleware('auth:sanctum', 'verified')->only([
    'index', 'create', 'store'
]);
