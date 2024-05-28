<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/create', [ProductController::class, 'create'])->name('create');
Route::post('/create', [ProductController::class, 'save']);
Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
Route::post('/edit/{id}', [ProductController::class, 'update']);

//Produk Routes 
Route::get('/Produk_furniture', [ProdukController::class, 'Produk']);

//Detail Routes 
Route::get('/Detail_furniture', [DetailController::class, 'Detail']);

//Kontak Routes
Route::get('/kontak', [KontakController::class, 'Kontak']);
