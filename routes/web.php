<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArtikelController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/auth',[LoginController::class,'auth']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/logout', [LoginController::class, 'logout']);
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/post', [PostController::class, 'index'])->name('post.index');
    Route::post('/post', [PostController::class, 'store']);
    Route::get('/post/created', [PostController::class, 'create']);
    Route::post('/post/created', [PostController::class, 'store']);
    Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');
    Route::get('/post/{id}/konfirmasi', [PostController::class, 'konfirmasi']);
    Route::get('/post/{id}/delete', [PostController::class, 'delete']);
    Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::patch('/post/{id}', [PostController::class, 'update'])->name('post.update');
    Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show');
});

Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show');



