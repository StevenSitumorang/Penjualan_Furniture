@extends('layout.main')

@section('title', 'Product List')

@section('content')

<div class="mt-15 py-20 px-5">
    <main class="container mx-auto mt-20">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            <!-- Sidebar -->
            <aside class="md:col-span-1 bg-gray-100 p-4 rounded-md"> <!-- Set left and right padding to the sidebar -->
                <h3 class="text-gray-800 font-bold text-lg mb-4">Product Categories</h3>
                <ul class="text-gray-600">
                    <li class="mb-2">
                        <a href="#" class="flex items-center justify-between hover:text-gray-800">
                            <span>Table</span>
                            <span class="bg-gray-300 text-gray-700 px-2 py-1 rounded-full text-xs">20</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="flex items-center justify-between hover:text-gray-800">
                            <span>Chair</span>
                            <span class="bg-gray-300 text-gray-700 px-2 py-1 rounded-full text-xs">15</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="flex items-center justify-between hover:text-gray-800">
                            <span>Cabinet</span>
                            <span class="bg-gray-300 text-gray-700 px-2 py-1 rounded-full text-xs">10</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="flex items-center justify-between hover:text-gray-800">
                            <span>Lamp</span>
                            <span class="bg-gray-300 text-gray-700 px-2 py-1 rounded-full text-xs">25</span>
                        </a>
                    </li>
                </ul>
            </aside>

            <!-- Product Details -->
            <div class="md:col-span-4 bg-white p-8 rounded-md shadow-md">
                <!-- Product Image -->
                <div class="aspect-w-1 aspect-h-1 mb-6">
                    <img src="/image/kursi1.jpg" alt="Product Image" class="object-cover rounded-md w-60 h-60">
                    <a href="/detail_furniture"></a>
                </div>

                <div>
                    <!-- Product Name -->
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Teak Wood Chair</h2>

                    <!-- Price -->
                    <div class="text-gray-800 font-bold text-lg mb-2">Price: Rp 1,000,000</div>

                    <!-- Product Quantity -->
                    <div class="text-gray-800 font-bold text-lg mb-2">Quantity: 20</div>

                    <!-- Product Description -->
                    <p class="text-gray-700">This Teak Wood Chair is crafted from premium quality teak wood, known for its durability and strength. Its elegant design and sturdy construction make it a perfect choice for both indoor and outdoor use. The chair features a comfortable seat and backrest, providing you with the utmost relaxation experience. Add a touch of sophistication to your living space with this exquisite teak wood chair.</p>

                    <!-- Add to Cart Button -->
                    <button class="bg-gray-700 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded mt-4">Add to Cart</button>
</div>
            </div>
        </div>
    </main>
</div>

@endsection
