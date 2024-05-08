<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengaduanController;

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

# Auth
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'postLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => 'IsLogin'], function () {

    # Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('IsAdmin');

    # Artikel
    Route::get('/data-artikel', [ArtikelController::class, 'index'])->middleware('IsAdmin');
    Route::post('/data-artikel', [ArtikelController::class, 'store'])->middleware('IsAdmin');
    Route::put('/data-artikel/{id}', [ArtikelController::class, 'update'])->middleware('IsAdmin');
    Route::delete('/data-artikel/{id}', [ArtikelController::class, 'destroy'])->middleware('IsAdmin');

    # Pengaduan
    Route::get('/data-pengaduan', [PengaduanController::class, 'index'])->middleware('IsAdmin');
    Route::post('/data-pengaduan', [PengaduanController::class, 'store'])->middleware('IsAdmin');
    Route::put('/data-pengaduan/{id}', [PengaduanController::class, 'update'])->middleware('IsAdmin');
    Route::delete('/data-pengaduan/{id}', [PengaduanController::class, 'destroy'])->middleware('IsAdmin');

    # User
    Route::get('/data-user', [UserController::class, 'index'])->middleware('IsAdmin');
    Route::post('/data-user', [UserController::class, 'store'])->middleware('IsAdmin');
    Route::put('/data-user/{id}', [UserController::class, 'update'])->middleware('IsAdmin');
    Route::delete('/data-user/{id}', [UserController::class, 'destroy'])->middleware('IsAdmin');
});
