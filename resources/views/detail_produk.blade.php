@extends('layout.main')

@section('title', 'Product List')

@section('content')


<main class="container mx-auto ">
    <!-- Sidebar -->
    <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
        <aside class="md:col-span-1 bg-gray-100 p-4 rounded-md"> <!-- Set padding for left and right in sidebar -->
            <h3 class="text-gray-800 font-bold text-lg mb-4">Product Categories</h3>
            <ul class="text-gray-600">
                <li class="mb-2">
                    <a href="#" class="flex items-center justify-between hover:text-gray-800">
                        <span>Tables</span>
                        <span class="bg-gray-300 text-gray-700 px-2 py-1 rounded-full text-xs">20</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#" class="flex items-center justify-between hover:text-gray-800">
                        <span>Chairs</span>
                        <span class="bg-gray-300 text-gray-700 px-2 py-1 rounded-full text-xs">15</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#" class="flex items-center justify-between hover:text-gray-800">
                        <span>Cabinets</span>
                        <span class="bg-gray-300 text-gray-700 px-2 py-1 rounded-full text-xs">10</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#" class="flex items-center justify-between hover:text-gray-800">
                        <span>Lamps</span>
                        <span class="bg-gray-300 text-gray-700 px-2 py-1 rounded-full text-xs">25</span>
                    </a>
                </li>
            </ul>
        </aside>

        <!-- Product Content -->
        <div class="md:col-span-4 bg-white p-8 rounded-md shadow-md">
            <!-- Product Image -->
            <img src="https://picsum.photos/200" alt="Product Image" class="w-full h-96 object-cover mb-6">

            <div>
                <!-- Product Name -->
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Product Name</h2>

                <!-- Price -->
                <div class="text-gray-800 font-bold text-lg mb-2">Price: Rp 100,000</div>

                <!-- Product Quantity -->
                <div class="text-gray-800 font-bold text-lg mb-2">Quantity: 10</div>

                <!-- Product Description -->
                <p class="text-gray-700">Product description will be placed here.</p>

                <!-- Add to Cart Button -->
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Add to
                    Cart</button>
            </div>
        </div>
    </div>

</main>

@endsection