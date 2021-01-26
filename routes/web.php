<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\HomepageController; // controller çağırma
use App\Http\Controllers\home\BlogController; // controller çağırma
use App\Http\Controllers\home\ProjeController; // controller çağırma
use App\Http\Controllers\ContactController; // controller çağırma
use App\Http\Controllers\home\KategoriController; // controller çağırma





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

Route::middleware(['auth:sanctum', 'verified'])->get('/panel', function () {
    return view('dashboard');
})->name('panel');
