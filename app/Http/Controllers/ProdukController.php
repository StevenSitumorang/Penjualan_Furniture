<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item; // Import model Item jika diperlukan

class ProdukController extends Controller
{
    // Metode untuk menampilkan semua produk
    public function index()
    {
        $items = Item::all();
        return view('produk', compact('items'));
    }

    // Metode untuk menambahkan item ke dalam cart
    public function add_cart($id)
    {
        // Logika untuk menambahkan item ke cart disesuaikan dengan kebutuhan aplikasi
        // Misalnya, menggunakan model Cart atau memproses dengan cara lain
        // Contoh sederhana:
        $item = Item::find($id);

        if (!$item) {
            return redirect()->back()->with('error', 'Item not found');
        }

        // Implementasi logika untuk menambahkan item ke dalam cart disesuaikan dengan aplikasi
        // Contoh: menambahkan ke session, membuat entri baru di tabel carts, dsb.

        return redirect()->back()->with('success', 'Item added to cart successfully');
    }
}
