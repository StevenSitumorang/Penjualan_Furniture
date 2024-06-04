@extends('layout.main')

@section('title', 'Product List')

@section('content')


<main class="container mx-auto ">
    <!-- Sidebar -->
    <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
        <aside class="md:col-span-1 bg-gray-100 p-4 rounded-md">
            <!-- Set padding for left and right in sidebar -->
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

        <!-- Product Section -->
        <section class="md:col-span-4 grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- Row 1 -->
            <div class="bg-white rounded-md p-4 shadow-lg">
                <img src="https://picsum.photos/200" alt="Product Image" class="w-full h-48 object-cover mb-4">
                <h3 class="text-gray-800 font-medium mb-2">Product Name</h3>
                <p class="text-gray-600">Short product description</p>
                <p class="text-gray-600">Rp. 1.000.000</p><br>
                <a href="#" class="bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600">More
                    Info</a>
            </div>

            <!-- Other products in row 1 -->
            <div class="bg-white rounded-md p-4 shadow-lg">
                <img src="https://picsum.photos/200" alt="Product Image" class="w-full h-48 object-cover mb-4">
                <h3 class="text-gray-800 font-medium mb-2">Product Name</h3>
                <p class="text-gray-600">Short product description</p>
                <p class="text-gray-600">Rp. 1.000.000</p><br>
                <a href="#" class="bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600">More
                    Info</a>
            </div>

            <div class="bg-white rounded-md p-4 shadow-lg">
                <img src="https://picsum.photos/200" alt="Product Image" class="w-full h-48 object-cover mb-4">
                <h3 class="text-gray-800 font-medium mb-2">Product Name </h3>
                <p class="text-gray-600">Short product description</p>
                <p class="text-gray-600">Rp. 1.000.000</p><br>
                <a href="#" class="bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600">More
                    Info</a>
            </div>

            <div class="bg-white rounded-md p-4 shadow-lg">
                <img src="https://picsum.photos/200" alt="Product Image" class="w-full h-48 object-cover mb-4">
                <h3 class="text-gray-800 font-medium mb-2">Product Name</h3>
                <p class="text-gray-600">Short product description</p>
                <p class="text-gray-600">Rp. 1.000.000</p><br>
                <a href="#" class="bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600">More
                    Info</a>
            </div>

            <!-- Row 2 -->
            <div class="bg-white rounded-md p-4 shadow-lg">
                <img src="https://picsum.photos/200" alt="Product Image" class="w-full h-48 object-cover mb-4">
                <h3 class="text-gray-800 font-medium mb-2">Product Name</h3>
                <p class="text-gray-600">Short product description</p>
                <p class="text-gray-600">Rp. 1.000.000</p><br>
                <a href="#" class="bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600">More
                    Info</a>
            </div>

            <!-- Other products in row 2 -->
            <div class="bg-white rounded-md p-4 shadow-lg">
                <img src="https://picsum.photos/200" alt="Product Image" class="w-full h-48 object-cover mb-4">
                <h3 class="text-gray-800 font-medium mb-2">Product Name</h3>
                <p class="text-gray-600">Short product description</p>
                <p class="text-gray-600">Rp. 1.000.000</p><br>
                <a href="#" class="bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600">More
                    Info</a>
            </div>

            <div class="bg-white rounded-md p-4 shadow-lg">
                <img src="https://picsum.photos/200" alt="Product Image" class="w-full h-48 object-cover mb-4">
                <h3 class="text-gray-800 font-medium mb-2">Product Name</h3>
                <p class="text-gray-600">Short product description</p>
                <p class="text-gray-600">Rp. 1.000.000</p><br>
                <a href="#" class="bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600">More
                    Info</a>
            </div>

            <div class="bg-white rounded-md p-4 shadow-lg">
                <img src="https://picsum.photos/200" alt="Product Image" class="w-full h-48 object-cover mb-4">
                <h3 class="text-gray-800 font-medium mb-2">Product Name</h3>
                <p class="text-gray-600">Short product description</p>
                <p class="text-gray-600">Rp. 1.000.000</p><br>
                <a href="#" class="bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600">More
                    Info</a>
            </div>

            <!-- Row 3 -->
            <div class="bg-white rounded-md p-4 shadow-lg">
                <img src="https://picsum.photos/200" alt="Product Image" class="w-full h-48 object-cover mb-4">
                <h3 class="text-gray-800 font-medium mb-2">Product Name</h3>
                <p class="text-gray-600">Short product description</p>
                <p class="text-gray-600">Rp. 1.000.000</p><br>
                <a href="#" class="bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600">More
                    Info</a>
            </div>

            <!-- Other products in row 3 -->
            <div class="bg-white rounded-md p-4 shadow-lg">
                <img src="https://picsum.photos/200" alt="Product Image" class="w-full h-48 object-cover mb-4">
                <h3 class="text-gray-800 font-medium mb-2">Product Name</h3>
                <p class="text-gray-600">Short product description</p>
                <p class="text-gray-600">Rp. 1.000.000</p><br>
                <a href="#" class="bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600">More
                    Info</a>
            </div>

            <div class="bg-white rounded-md p-4 shadow-lg">
                <img src="https://picsum.photos/200" alt="Product Image" class="w-full h-48 object-cover mb-4">
                <h3 class="text-gray-800 font-medium mb-2">Product Name</h3>
                <p class="text-gray-600">Short product description</p>
                <p class="text-gray-600">Rp. 1.000.000</p><br>
                <a href="#" class="bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600">More
                    Info</a>
            </div>

            <div class="bg-white rounded-md p-4 shadow-lg">
                <img src="https://picsum.photos/200" alt="Product Image" class="w-full h-48 object-cover mb-4">
                <h3 class="text-gray-800 font-medium mb-2">Product Name</h3>
                <p class="text-gray-600">Short product description</p>
                <p class="text-gray-600">Rp. 1.000.000</p><br>
                <a href="#" class="bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600">More
                    Info</a>
            </div>


        </section>
    </div>

    <!-- Next Slide Button -->
    <div class="flex justify-center mt-8">
        <button
            class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-full shadow-md transition duration-300 ease-in-out transform hover:scale-105">
            Next Slide
        </button>
    </div>

</main>

@endsection