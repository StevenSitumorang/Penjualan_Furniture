@extends('layout.main')

@section('title', 'Daftar Produk')

@section('content')



<!-- Contact Section -->
<section class="container mx-auto px-4 py-8">
    <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="p-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Hubungi Kami</h2>
            <p class="text-gray-700 mb-6">Silakan hubungi kami jika Anda memiliki pertanyaan atau ingin mengetahui
                lebih lanjut tentang produk kami.</p>

            <!-- Form Kontak -->
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700 font-medium">Nama</label>
                    <input type="text" id="nama" name="nama"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                        placeholder="Masukkan nama Anda" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-medium">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                        placeholder="Masukkan alamat email Anda" required>
                </div>
                <div class="mb-4">
                    <label for="pesan" class="block text-gray-700 font-medium">Pesan</label>
                    <textarea id="pesan" name="pesan" rows="4"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                        placeholder="Tulis pesan Anda" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Kirim
                        Pesan</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection