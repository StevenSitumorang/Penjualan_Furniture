@extends('layout.main')

@section('title', 'Furniture Sales Web Application')

@section('content')

<div class="mt-15 py-20 px-5">
    <main class="container mx-auto mt-20">
        <!-- Sidebar -->
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            <aside class="md:col-span-1 bg-gray-100 p-4 rounded-md">
                <!-- Set left and right padding to sidebar -->
                <h3 class="text-gray-800 font-bold text-lg mb-6">Product Categories</h3>
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
                            <span>Wardrobes</span>
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
                <div class="bg-white rounded-md p-4 shadow-lg flex flex-col justify-between">
                    <img src="/image/kursi1.jpg" alt="Product Image" class="w-full h-48 object-cover mb-4">
                    <div>
                        <h3 class="text-gray-800 font-medium mb-2">Teak Wood Chair</h3>
                        <p class="text-gray-600">Chair made of strong and durable teak wood.</p>
                        <p class="text-gray-600">Rp. 1.000.000</p>
                    </div>
                    <div class="flex justify-between mt-4">
                        <a href="/detail_furniture" class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">More Info</a>
                        <button class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-md p-4 shadow-lg flex flex-col justify-between">
                    <img src="/image/kursi2.jpg" alt="Product Image" class="w-full h-48 object-cover mb-4">
                    <div>
                        <h3 class="text-gray-800 font-medium mb-2">Minimalist Swivel Chair</h3>
                        <p class="text-gray-600">Minimalist chair with modern and comfortable design.</p>
                        <p class="text-gray-600">Rp. 1.000.000</p>
                    </div>
                    <div class="flex justify-between mt-4">
                        <a href="#" class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">More Info</a>
                        <button class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-md p-4 shadow-lg flex flex-col justify-between">
                    <img src="/image/kursi3.jpg" alt="Product Image" class="w-full h-48 object-cover mb-4">
                    <div>
                        <h3 class="text-gray-800 font-medium mb-2">Rattan Chair</h3>
                        <p class="text-gray-600">Rattan chair with elegant traditional hanging design.</p>
                        <p class="text-gray-600">Rp. 1.000.000</p>
                    </div>
                    <div class="flex justify-between mt-4">
                        <a href="#" class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">More Info</a>
                        <button class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-md p-4 shadow-lg flex flex-col justify-between">
                    <img src="/image/meja1.jpg" alt="Product Image" class="w-full h-48 object-cover mb-4">
                    <div>
                        <h3 class="text-gray-800 font-medium mb-2">Study Desk</h3>
                        <p class="text-gray-600">Study desk with a modern design set with chair.</p>
                        <p class="text-gray-600">Rp. 1.000.000</p>
                    </div>
                    <div class="flex justify-between mt-4">
                        <a href="#" class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">More Info</a>
                        <button class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="bg-white rounded-md p-4 shadow-lg flex flex-col justify-between">
                    <img src="/image/lemari1.jpg" alt="Product Image" class="w-full h-48 object-cover mb-4">
                    <div>
                        <h3 class="text-gray-800 font-medium mb-2">Small Wardrobe</h3>
                        <p class="text-gray-600">Small wardrobe for clothes.</p>
                        <p class="text-gray-600">Rp. 1.000.000</p>
                    </div>
                    <div class="flex justify-between mt-4">
                        <a href="#" class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">More Info</a>
                        <button class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-md p-4 shadow-lg flex flex-col justify-between">
                    <img src="/image/lemari2.jpg" alt="Product Image" class="w-full h-48 object-cover mb-4">
                    <div>
                        <h3 class="text-gray-800 font-medium mb-2">Teak Wardrobe</h3>
                        <p class="text-gray-600">Teak wardrobe with spacious storage.</p>
                        <p class="text-gray-600">Rp. 1.000.000</p>
                    </div>
                    <div class="flex justify-between mt-4">
                        <a href="#" class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">More Info</a>
                        <button class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-md p-4 shadow-lg flex flex-col justify-between">
                    <img src="/image/lemari3.jpg" alt="Product Image" class="w-full h-48 object-cover mb-4">
                    <div>
                        <h3 class="text-gray-800 font-medium mb-2">Minimalist Wardrobe</h3>
                        <p class="text-gray-600">Minimalist white wardrobe with modern design.</p>
                        <p class="text-gray-600">Rp. 1.000.000</p>
                    </div>
                    <div class="flex justify-between mt-4">
                        <a href="#" class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">More Info</a>
                        <button class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Row 3 -->
                <div class="bg-white rounded-md p-4 shadow-lg flex flex-col justify-between">
                    <img src="/image/lamp1.jpg" alt="Product Image" class="w-full h-48 object-cover mb-4">
                    <div>
                        <h3 class="text-gray-800 font-medium mb-2">Moon Lamp</h3>
                        <p class="text-gray-600">Table lamp with full moon design.</p>
                        <p class="text-gray-600">Rp. 1.000.000</p>
                    </div>
                    <div class="flex justify-between mt-4">
                        <a href="#" class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">More Info</a>
                        <button class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-md p-4 shadow-lg flex flex-col justify-between">
                    <img src="/image/lamp2.jpg" alt="Product Image" class="w-full h-48 object-cover mb-4">
                    <div>
                        <h3 class="text-gray-800 font-medium mb-2">Bedside Lamp</h3>
                        <p class="text-gray-600">Bedside lamp with elegant and artistic design.</p>
                        <p class="text-gray-600">Rp. 1.000.000</p>
                    </div>
                    <div class="flex justify-between mt-4">
                        <a href="#" class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">More Info</a>
                        <button class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-md p-4 shadow-lg flex flex-col justify-between">
                    <img src="/image/lamp3.jpg" alt="Product Image" class="w-full h-48 object-cover mb-4">
                    <div>
                        <h3 class="text-gray-800 font-medium mb-2">Study Lamp</h3>
                        <p class="text-gray-600">Bright study lamp with 3 color options.</p>
                        <p class="text-gray-600">Rp. 1.000.000</p>
                    </div>
                    <div class="flex justify-between mt-4">
                        <a href="#" class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">More Info</a>
                        <button class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-md p-4 shadow-lg flex flex-col justify-between">
                    <img src="/image/lamp4.jpg" alt="Product Image" class="w-full h-48 object-cover mb-4">
                    <div>
                        <h3 class="text-gray-800 font-medium mb-2">Wall Lamp</h3>
                        <p class="text-gray-600">Wall lamp with artistic design.</p>
                        <p class="text-gray-600">Rp. 1.000.000</p>
                    </div>
                    <div class="flex justify-between mt-4">
                        <a href="#" class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">More Info</a>
                        <button class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-md p-4 shadow-lg flex flex-col justify-between">
                    <img src="/image/Ranjang.webp" alt="Product Image" class="w-full h-48 object-cover mb-4">
                    <div>
                        <h3 class="text-gray-800 font-medium mb-2">Minimalist Bed</h3>
                        <p class="text-gray-600">Minimalist bed with modern and comfortable design.</p>
                        <p class="text-gray-600">Rp. 1.000.000</p>
                    </div>
                    <div class="flex justify-between mt-4">
                        <a href="#" class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">More Info</a>
                        <button class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Next Slide Button -->
    <div class="flex justify-center mt-8 mb-10">
        <button class="bg-gray-700 hover:bg-gray-900 text-white font-bold py-2 px-6 rounded-full shadow-md transition duration-300 ease-in-out transform hover:scale-105">
            Next Slide
        </button>
    </div>

    

    </main>

@endsection
