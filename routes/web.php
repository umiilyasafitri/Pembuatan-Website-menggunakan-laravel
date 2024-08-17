<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminProductController;

// Route Product
Route::get('/admin/product', [AdminProductController::class, 'index']);
Route::get('/admin/product/create', [AdminProductController::class, 'create']);
Route::get('/admin/product/store', [AdminProductController::class, 'store']);
Route::get('/admin/product/edit/{id}', [AdminProductController::class, 'edit']);
Route::get('/admin/product/update{id}', [AdminProductController::class, 'update']);
Route::get('/admin/product/destroy/{id}', [AdminProductController::class, 'destroy']);



Route::get('/', function () {
    return view('index');
});


Route::get('/product', function () {
    return view('product');
});

Route::get('/artikel', function () {
    return view('artikel');
});


Route::get('/Tentang', function () {
    return view('components.Tentang');
});

Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
Route::get('/logout', 'DashboardController@logout')->name('dashboard.logout');

