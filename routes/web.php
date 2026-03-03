<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::get('/{id}/edit', [UserController::class, 'edit']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});

Route::group(['prefix' => 'supplier'], function () {
    Route::get('/', [App\Http\Controllers\SupplierController::class, 'index']);
    Route::post('/list', [App\Http\Controllers\SupplierController::class, 'list']);
    Route::get('/create', [App\Http\Controllers\SupplierController::class, 'create']);
    Route::post('/', [App\Http\Controllers\SupplierController::class, 'store']);
    Route::get('/{id}', [App\Http\Controllers\SupplierController::class, 'show']);
    Route::get('/{id}/edit', [App\Http\Controllers\SupplierController::class, 'edit']);
    Route::put('/{id}', [App\Http\Controllers\SupplierController::class, 'update']);
    Route::delete('/{id}', [App\Http\Controllers\SupplierController::class, 'destroy']);
});

Route::group(['prefix' => 'level'], function () {
    Route::get('/', [App\Http\Controllers\LevelController::class, 'index']);
    Route::post('/list', [App\Http\Controllers\LevelController::class, 'list']);
    Route::get('/create', [App\Http\Controllers\LevelController::class, 'create']);
    Route::post('/', [App\Http\Controllers\LevelController::class, 'store']);
    Route::get('/{id}', [App\Http\Controllers\LevelController::class, 'show']);
    Route::get('/{id}/edit', [App\Http\Controllers\LevelController::class, 'edit']);
    Route::put('/{id}', [App\Http\Controllers\LevelController::class, 'update']);
    Route::delete('/{id}', [App\Http\Controllers\LevelController::class, 'destroy']);
});

Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [App\Http\Controllers\KategoriController::class, 'index']);
    Route::post('/list', [App\Http\Controllers\KategoriController::class, 'list']);
    Route::get('/create', [App\Http\Controllers\KategoriController::class, 'create']);
    Route::post('/', [App\Http\Controllers\KategoriController::class, 'store']);
    Route::get('/{id}', [App\Http\Controllers\KategoriController::class, 'show']);
    Route::get('/{id}/edit', [App\Http\Controllers\KategoriController::class, 'edit']);
    Route::put('/{id}', [App\Http\Controllers\KategoriController::class, 'update']);
    Route::delete('/{id}', [App\Http\Controllers\KategoriController::class, 'destroy']);
});

Route::group(['prefix' => 'barang'], function () {
    Route::get('/', [App\Http\Controllers\BarangController::class, 'index']);
    Route::post('/list', [App\Http\Controllers\BarangController::class, 'list']);
    Route::get('/create', [App\Http\Controllers\BarangController::class, 'create']);
    Route::post('/', [App\Http\Controllers\BarangController::class, 'store']);
    Route::get('/{id}', [App\Http\Controllers\BarangController::class, 'show']);
    Route::get('/{id}/edit', [App\Http\Controllers\BarangController::class, 'edit']);
    Route::put('/{id}', [App\Http\Controllers\BarangController::class, 'update']);
    Route::delete('/{id}', [App\Http\Controllers\BarangController::class, 'destroy']);
});
