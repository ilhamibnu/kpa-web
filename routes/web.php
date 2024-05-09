<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\User\AuthContoller as AuthUserContoller;
use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\ArtikelController as UserArtikelController;
use App\Http\Controllers\User\PengaduanController as UserPengaduanController;
use App\Http\Controllers\User\RiwayatPengaduanController;

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


Route::group(['middleware' => 'IsLogin'], function () {

    ##### ADMIN ######

    # Auth
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::post('/update-profil', [AuthController::class, 'updateprofil']);

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

##### USER ######

# Index
Route::get('/', [IndexController::class, 'index']);

# Auth
Route::get('/user/login', [AuthUserContoller::class, 'indexLogin']);
Route::get('/user/register', [AuthUserContoller::class, 'indexRegister']);
Route::post('/user/login', [AuthUserContoller::class, 'postLogin']);
Route::post('/user/register', [AuthUserContoller::class, 'postRegister']);
Route::get('/user/logout', [AuthUserContoller::class, 'logout']);

Route::get('/user/link-reset-password', [AuthUserContoller::class, 'linkresetpassword']);
Route::post('/user/link-reset-password', [AuthUserContoller::class, 'sendlinkresetpassword']);

Route::get('/user/reset-password/{code}', [AuthUserContoller::class, 'changepassword']);
Route::post('/user/reset-password', [AuthUserContoller::class, 'changepasswordpost']);

Route::group(['middleware' => 'IsUser'], function () {
    # Profil
    Route::get('/user/profil', [AuthUserContoller::class, 'profil']);
    Route::post('/user/update-profil', [AuthUserContoller::class, 'updateprofil']);
});

# Contact
Route::get('/user/contact', [ContactController::class, 'index']);

# Artikel
Route::get('/user/artikel', [UserArtikelController::class, 'index']);
Route::get('/user/artikel/{id}', [UserArtikelController::class, 'detail']);

# Pengaduan
Route::get('/user/pengaduan', [UserPengaduanController::class, 'index']);
Route::post('/user/pengaduan', [UserPengaduanController::class, 'store']);

# Riwayat Pengaduan
Route::get('/user/riwayat-pengaduan', [RiwayatPengaduanController::class, 'index']);
