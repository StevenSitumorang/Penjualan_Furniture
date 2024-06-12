@extends('layout.main')

@section('title', 'Contact')

@section('content')
<div class="mt-15 py-20 px-5">
    <main class="container mx-auto mt-20">
        <!-- Contact Section -->
        <section class="container mx-auto px-4 py-8">
            <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Contact Us</h2>
                    <p class="text-gray-700 mb-6">Feel free to contact us if you have any questions or want to know more about our products.</p>

                    <!-- Contact Form -->
                    <form action="{{ route('contact.simpan') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-medium">Name</label>
                            <input type="text" id="name" name="name"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                                placeholder="Enter your name" value="{{ old('name') }}" required>
                            @error('name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-medium">Email</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                                placeholder="Enter your email address" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-gray-700 font-medium">Message</label>
                            <textarea id="message" name="message" rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                                placeholder="Write your message" required>{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit"
                                class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Send Message</button>
                        </div>
                    </form>

                    @if (session('success'))
                        <div class="mt-4 p-4 bg-green-500 text-white text-center rounded">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
        </section>
    </main>
</div>
@endsection
