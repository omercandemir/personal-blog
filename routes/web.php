<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\HomepageController; // controller çağırma
use App\Http\Controllers\BlogController; // controller çağırma


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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
