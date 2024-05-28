@extends('layout.index')

@section('title','Create Product')

@section('content')
<div class="my-5">
    <div class="container mx-auto max-w-xl shadow-lg py-4 px-10 bg-blue-100 rounded-md">
        @if (session()->has('error'))
        <div class="bg-red-500 text-white px-4 py-2 rounded-md mb-4">
            {{ session('error') }}
        </div>
        @endif
        <div class="flex justify-between items-center mb-4">
            <a href="{{ route('home') }}" class="px-5 py-2 bg-red-500 rounded-md text-white text-lg shadow-md hover:bg-red-700">Go Back</a>
            <h1 class="text-3xl font-bold text-gray-700">Create Product</h1>
        </div>
        <form action="" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="text-md font-bold text-gray-700">Product Name</label>
                <input type="text" name="title" class="block w-full border border-gray-300 px-3 py-2 rounded-md text-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 my-2" id="title">
                @error('title')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="category" class="text-md font-bold text-gray-700">Category</label>
                <input type="text" name="category" class="block w-full border border-gray-300 px-3 py-2 rounded-md text-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 my-2" id="category">
                @error('category')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="price" class="text-md font-bold text-gray-700">Price</label>
                <input type="text" name="price" class="block w-full border border-gray-300 px-3 py-2 rounded-md text-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 my-2" id="price">
                @error('price')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <button class="px-5 py-2 bg-emerald-500 rounded-md text-white text-lg shadow-md hover:bg-emerald-700">Save</button>
        </form>
    </div>
</div>
@endsection
    