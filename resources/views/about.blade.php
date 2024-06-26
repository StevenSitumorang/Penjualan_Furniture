@extends('layout.main')

@section('title', 'Aplikasi Web Penjualan Furniture')

@section('content')

<div class="container mx-auto px-4 sm:px-6 lg:px-8">

  <!-- Tentang Kami -->
  <section class="bg-white py-16">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center mx-auto max-w-screen-xl px-4 lg:py-20 lg:px-6">
      <div class="font-light text-gray-500">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">About Us</h2>
        <p class="mb-4">Welcome to our FurniCorp, where inspiration meets functionality! Dive into our world of timeless
          elegance and modern comfort. Each piece is meticulously crafted to transform your spaces into havens of style
          and relaxation. Explore our curated selection of sofas, tables, and more, designed to elevate every corner of
          your home. Whether you seek classic sophistication or contemporary flair, we have something to suit every
          taste. Let us guide you on a journey of discovery, where your dream home takes shape one exquisite detail at a
          time. Together, let's create a space that mirrors your personality, a sanctuary that welcomes you at the end
          of each day.</p>
      </div>
      <div class="grid grid-cols-2 gap-4 mt-8">
        <img class="w-full rounded-lg" src="/image/7.jpg" alt="Furniture 1">
        <img class="mt-4 w-full lg:mt-10 rounded-lg" src="/image/13.jpg" alt="Furniture 2">
      </div>
    </div>
  </section>

  <!-- Banner -->
  <div class="relative w-full h-64 sm:h-72 md:h-96 lg:h-80 xl:h-96">
    <img class="absolute inset-0 w-full h-full object-cover" src="/image/banner5.jpg" alt="Furniture Banner">
    <div class="absolute inset-0 bg-white opacity-50"></div>
  </div>

  <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
    <div class="mx-auto max-w-screen-sm text-center">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold leading-tight text-gray-900">Discover Our Latest Furniture
        Collection</h2>
      <p class="mb-6 font-light text-gray-500 md:text-lg">Explore our premium furniture collection and elevate your
        living space. From comfortable sofas to elegant dining sets, find the perfect pieces to suit your style.</p>
      <a href="/produk_furniture"
        class="text-white bg-gray-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">Explore
        Now</a>
    </div>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mx-auto max-w-screen-xl px-4">
    <!-- Other sections -->
    <div class="flex items-center">
      <img src="/image/10.jpg" alt="Living Room" class="w-48 h-auto object-cover rounded-lg">
      <div class="ml-4 md:ml-8">
        <h3 class="mb-2 text-xl font-bold">Living Room</h3>
        <p class="text-gray-500">Cozy and stylish furniture for relaxation and entertainment.</p>
      </div>
    </div>
    <div class="flex items-center">
      <img src="/image/8.jpg" alt="Office" class="w-48 h-auto object-cover rounded-lg">
      <div class="ml-4 md:ml-8">
        <h3 class="mb-2 text-xl font-bold">Office</h3>
        <p class="text-gray-500">Ergonomic furniture for enhanced comfort and efficiency.</p>
      </div>
    </div>
    <div class="flex items-center">
      <img src="/image/11.jpg" alt="Dining Room" class="w-48 h-auto object-cover rounded-lg">
      <div class="ml-4 md:ml-8">
        <h3 class="mb-2 text-xl font-bold">Dining Room</h3>
        <p class="text-gray-500">Elegant dining furniture for memorable meals.</p>
      </div>
    </div>
    <div class="flex items-center">
      <img src="/image/9.jpg" alt="Bedroom" class="w-48 h-auto object-cover rounded-lg">
      <div class="ml-4 md:ml-8">
        <h3 class="mb-2 text-xl font-bold">Bedroom</h3>
        <p class="text-gray-500">Serene furniture for restful nights.</p>
      </div>
    </div>
    <div class="flex items-center">
      <img src="/image/12.jpg" alt="Bathroom" class="w-48 h-auto object-cover rounded-lg">
      <div class="ml-4 md:ml-8">
        <h3 class="mb-2 text-xl font-bold">Bathroom</h3>
        <p class="text-gray-500">Luxurious furniture for comfort and style.</p>
      </div>
    </div>
    <div class="flex items-center">
      <img src="/image/14.jpg" alt="Kitchen" class="w-48 h-auto object-cover rounded-lg">
      <div class="ml-4 md:ml-8">
        <h3 class="mb-2 text-xl font-bold">Kitchen</h3>
        <p class="text-gray-500">Stylish kitchen solutions for culinary enthusiasts.</p>
      </div>
    </div>
  </div>

  <section class="bg-white">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
      <div class="max-w-screen-md mb-8 lg:mb-16 mx-auto">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Elevate Your Space with Our Furniture
          Solutions</h2>
        <p class="text-gray-500 sm:text-xl">At FurniCorp, we're dedicated to providing innovative furniture solutions
          that enhance your living or working environment. Discover our range of high-quality furniture crafted to
          elevate every room.</p>
      </div>
    </div>
  </section>

</div>

@endsection