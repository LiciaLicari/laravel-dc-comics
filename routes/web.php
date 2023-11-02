<?php

use App\Http\Controllers\Admin\ComicController;
use App\Http\Controllers\Guests\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ComicController::class, 'index'])->name('welcome');
Route::get('/comics', [ComicController::class, 'comics'])->name('comics');

Route::resource('admin/comics', ComicController::class);
