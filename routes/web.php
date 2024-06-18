<?php

use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\TransactionController;
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


