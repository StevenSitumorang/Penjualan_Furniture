@extends('layout.main')

@section('title', 'Daftar Produk')

@section('content')


<main class="container mx-auto py-8">
    <!-- Sidebar -->
    <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
        <aside class="md:col-span-1 bg-gray-100 p-4 rounded-md"> <!-- Tetapkan padding kiri dan kanan ke sidebar -->
            <h3 class="text-gray-800 font-bold text-lg mb-4">Kategori Produk</h3>
            <ul class="text-gray-600">
                <li class="mb-2">
                    <a href="#" class="flex items-center justify-between hover:text-gray-800">
                        <span>Meja</span>
                        <span class="bg-gray-300 text-gray-700 px-2 py-1 rounded-full text-xs">20</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#" class="flex items-center justify-between hover:text-gray-800">
                        <span>Kursi</span>
                        <span class="bg-gray-300 text-gray-700 px-2 py-1 rounded-full text-xs">15</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#" class="flex items-center justify-between hover:text-gray-800">
                        <span>Lemari</span>
                        <span class="bg-gray-300 text-gray-700 px-2 py-1 rounded-full text-xs">10</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#" class="flex items-center justify-between hover:text-gray-800">
                        <span>Lampu</span>
                        <span class="bg-gray-300 text-gray-700 px-2 py-1 rounded-full text-xs">25</span>
                    </a>
                </li>
            </ul>
        </aside>

        <!-- Konten Produk -->
        <div class="md:col-span-4 bg-white p-8 rounded-md shadow-md">
            <!-- Gambar Produk -->
            <img src="https://picsum.photos/200" alt="Gambar Produk" class="w-full h-80 object-cover mb-6">

            <div>
                <!-- Nama Produk -->
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Nama Produk</h2>

                <!-- Harga -->
                <div class="text-gray-800 font-bold text-lg mb-2">Harga: Rp 100.000</div>

                <!-- Jumlah Produk -->
                <div class="text-gray-800 font-bold text-lg mb-2">Jumlah Produk: 10</div>

                <!-- Keterangan Produk -->
                <p class="text-gray-700">Deskripsi produk akan diletakkan di sini.</p>

                <!-- Tombol Tambah ke Keranjang -->
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Tambah ke
                    Keranjang</button>
            </div>
        </div>
    </div>

</main>

@endsection