<?php
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\PaymentValidationController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Route untuk halaman login
Route::get('/', [LoginController::class, 'index']);

// Route untuk halaman dashboard, hanya bisa diakses setelah login
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    
    Route::get('/admin/dashboard', [HomeController::class, 'index'])->middleware('auth', 'admin')->name('admin.dashboard');
    Route::get('/view_category', [AdminController::class, 'view_category'])->name('view_category');
    Route::post('/add_category', [AdminController::class, 'add_category'])->name('add_category');
    Route::get('delete_category{id}', [AdminController::class, 'delete_category'])->name('delete_category');
    Route::get('edit_category{id}', [AdminController::class, 'edit_category'])->name('edit_category');
    Route::post('update_category{id}', [AdminController::class, 'update_category'])->name('update_category');      
        


        Route::post('/add_cart/{id}', [produkController::class, 'add_cart'])->name('add_cart'); 
        Route::post('/update-item/{id}', [AdminController::class, 'update_item'])->name('update_item'); 
        Route::get('add_item', [AdminController::class, 'add_item'])->name('add_item');
        Route::post('upload_item', [AdminController::class, 'upload_item'])->name('upload_item');
        Route::get('view_item', [AdminController::class, 'view_item'])->name('view_item');
        Route::get('/delete-item/{id}', [AdminController::class, 'delete_item'])->name('delete_item');
    
    
    // Rute lainnya di sini
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

    
    // Produk Routes 
    Route::get('/produk_furniture', [ProdukController::class, 'index']);

    // Detail Routes 
    Route::get('/detail_furniture', [DetailController::class, 'detail']);

    // Kontak Routes
    Route::get('/kontak', [KontakController::class, 'Kontak']);

    // Route About
    Route::get('/about', [AboutController::class, 'about']);

    // Route Simpan Kontak
    Route::post('/kontak', [KontakController::class, 'simpan'])->name('contact.simpan');

    // Route untuk Validasi
    Route::post('validations/{validation}/validate', [PaymentValidationController::class, 'validatePayment'])->name('validations.validate');

    // Route untuk Invoice
    Route::post('invoices/{invoice}/approve', [InvoiceController::class, 'approve'])->name('invoices.approve');
});
