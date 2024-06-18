<?php

use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/keranjang', [KeranjangController::class, 'index']);
Route::delete('/keranjang/{id}', [KeranjangController::class, 'destroy']);
Route::post('/keranjang/update/{id}', [KeranjangController::class, 'update']);
Route::delete('/keranjang/hapus/{id}', [KeranjangController::class, 'hapusItem']);
Route::post('/keranjang/update/{id}', [KeranjangController::class, 'updateQuantity']);

Route::get('/transaksi', function () {
    return view('transaksi');
})->name('transaksi');
Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction.index');
Route::post('/transaksi', [TransactionController::class, 'store'])->name('transactions.store');


Route::get('/penjual/product', [ProductController::class, 'product'])->name('home');
Route::get('/create', [ProductController::class, 'create'])->name('create');
Route::post('/create', [ProductController::class, 'save']);
Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
Route::post('/edit/{id}', [ProductController::class, 'update']);

//Route Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Produk Routes 
Route::get('/produk_furniture', [ProdukController::class, 'Produk']);

//Detail Routes 
Route::get('/detail_furniture', [DetailController::class, 'Detail']);

//Kontak Routes
Route::get('/kontak', [KontakController::class, 'Kontak']);

//Route About
Route::get('/about', [AboutController::class, 'about']);


//Route Simpan Kontak
Route::post('/kontak', [KontakController::class, 'simpan'])->name('contact.simpan');

//Route Login
Route::get('/home', [LoginController::class, 'index']);
