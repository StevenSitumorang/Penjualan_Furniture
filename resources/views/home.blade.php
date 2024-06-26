@extends('layout.index')

@section('title', 'Home')

@section('content')

<div class="mt-15 py-20 px-5 flex item-center justify-center">
    <main class="container mx-auto mt-20">
        <div class="my-5 max-w-3xl mx-auto">
            <div class="container mx-auto">
                @if (session()->has('success'))
                    <div class="bg-green-500 text-white px-4 py-2 rounded-md mb-5">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="flex justify-between items-center bg-gray-200 p-4 rounded-md shadow-md">
                    <div>
                        <h1 class="text-lg font-semibold">Products ({{ $total }})</h1>
                    </div>
                    <div>
                        <a href="{{ route('create') }}" class="px-4 py-2 bg-blue-500 rounded-md text-white text-sm shadow-md hover:bg-blue-700">Add New</a>
                    </div>
                </div>
                <div class="flex flex-col mt-5">
                    <div class="overflow-x-auto">
                        <div class="py-2 inline-block min-w-full px-6">
                            <div class="overflow-hidden shadow-md rounded-md">
                                <table class="min-w-full divide-y divide-gray-200 table-fixed">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th scope="col" class="text-xs font-medium text-gray-900 px-4 py-2 text-left">#</th>
                                            <th scope="col" class="text-xs font-medium text-gray-900 px-4 py-2 text-left">Name</th>
                                            <th scope="col" class="text-xs font-medium text-gray-900 px-4 py-2 text-left">Category</th>
                                            <th scope="col" class="text-xs font-medium text-gray-900 px-4 py-2 text-left">Price</th>
                                            <th scope="col" class="text-xs font-medium text-gray-900 px-4 py-2 text-left">Edit</th>
                                            <th scope="col" class="text-xs font-medium text-gray-900 px-4 py-2 text-left">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @forelse ($products as $product)
                                            <tr class="hover:bg-gray-100">
                                                <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">{{ $product->id }}</td>
                                                <td class="text-sm text-gray-900 px-4 py-2 whitespace-nowrap">{{ $product->title }}</td>
                                                <td class="text-sm text-gray-900 px-4 py-2 whitespace-nowrap">{{ $product->category }}</td>
                                                <td class="text-sm text-gray-900 px-4 py-2 whitespace-nowrap">{{ $product->price }}</td>
                                                <td class="text-sm text-gray-900 px-4 py-2 whitespace-nowrap">
                                                    <a href="{{ route('edit', ['id' => $product->id]) }}" class="px-3 py-1 bg-blue-500 rounded-md text-white text-sm shadow-md hover:bg-blue-700">Edit</a>
                                                </td>
                                                <td class="text-sm text-gray-900 px-4 py-2 whitespace-nowrap">
                                                    <a href="{{ route('delete', ['id' => $product->id]) }}" class="px-3 py-1 bg-red-500 rounded-md text-white text-sm shadow-md hover:bg-red-700">Delete</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center py-4">
                                                    <h2>Product Not Found</h2>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
