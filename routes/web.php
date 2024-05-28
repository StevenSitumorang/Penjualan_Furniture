<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Produk Routes 
Route::get('/Produk_furniture', [ProdukController::class, 'Produk']);

//Detail Routes 
Route::get('/Detail_furniture', [DetailController::class, 'Detail']);

//Kontak Routes
Route::get('/kontak', [KontakController::class, 'Kontak']);
