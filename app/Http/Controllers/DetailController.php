<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item; // Import model Item

class DetailController extends Controller
{
    public function detail()
    {
        $items = Item::all(); // Mengambil semua data dari tabel items

        return view('detail_produk', compact('items')); // Mengirimkan data items ke view 'detail_produk'
    }
}
