@extends('layout.main')

@section('title', 'Product List')

@section('content')

<div class="mt-15 py-20 px-5">
    <main class="container mx-auto mt-20">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            <!-- Sidebar -->
            <aside class="md:col-span-1 bg-gray-100 p-4 rounded-md">
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

            <!-- Product Grid -->
            <section class="md:col-span-4 grid grid-cols-1 md:grid-cols-4 gap-4">
                @foreach($items as $item)
                    <div class="bg-white rounded-md p-4 shadow-lg flex flex-col justify-between">
                        <img src="{{ asset('items/' . $item->image) }}" alt="Product Image" class="w-full h-48 object-cover mb-4">
                        <div>
                            <h3 class="text-gray-800 font-medium mb-2">{{ $item->title }}</h3>
                            <p class="text-gray-600">{{ $item->description }}</p>
                            <p class="text-gray-600">Rp. {{ number_format($item->price, 0, ',', '.') }}</p>
                        </div>
                        <div class="flex justify-between mt-4">
                            <a href="#" class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">More Info</a>
                            <form action="{{ route('add_cart', $item->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="bg-gray-500 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-600">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </section>
        </div>
    </main>
</div>

<!-- Next Slide Button -->
<div class="flex justify-center mt-8 mb-10">
    <button class="bg-gray-700 hover:bg-gray-900 text-white font-bold py-2 px-6 rounded-full shadow-md transition duration-300 ease-in-out transform hover:scale-105">
        Next Slide
    </button>
</div>

@endsection
