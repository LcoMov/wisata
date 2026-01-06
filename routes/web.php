<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\WisataController;
use App\Http\Controllers\Admin\ArtikelController;


//PUBLIC / USER
Route::get('/', [HomeController::class, 'index']);
Route::get('/wisata/{id}', [HomeController::class, 'detail'])->name('wisata.detail');


//AUTH
Route::get('/login', [AuthController::class,'loginForm'])->name('login');
Route::post('/login', [AuthController::class,'login']);
Route::get('/logout', [AuthController::class,'logout']);


//ADMIN (PROTECTED)
Route::middleware(['auth','admin'])->group(function () {

    // Dashboard
    Route::get('/admin', [AdminController::class, 'dashboard']);

    // Wisata CRUD
    Route::get('/admin/wisata', [WisataController::class, 'index']);
    Route::get('/admin/wisata/create', [WisataController::class, 'create']);
    Route::post('/admin/wisata', [WisataController::class, 'store']);
    Route::get('/admin/wisata/{id}/edit', [WisataController::class, 'edit']);
    Route::post('/admin/wisata/{id}', [WisataController::class, 'update']);
    Route::delete('/admin/wisata/{id}', [WisataController::class, 'destroy']);

    // Artikel CRUD
    Route::resource('/admin/artikel', ArtikelController::class);
});
