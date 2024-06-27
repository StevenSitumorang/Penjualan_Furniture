<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<!-- Banner -->
<div class="bg-gray-200 dark:bg-gray-700 py-20 lg:py-32 w-full banner overflow-hidden ">
    <div class="grid max-w-screen-xl px-4 mx-auto lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">NEW PRODUCT INTERIOR</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 md:text-lg lg:text-xl dark:text-gray-400">Transform Your Living Space into a Symphony of Style and Comfort. Explore Our Exquisite Furniture Collections Today!</p>
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-white border border-gray-300 rounded-lg hover:bg-gray-700 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800 bg-gray-800 mt-4">Shop Now</a>
        </div>
        <div class="lg:col-span-5">
            <img src="/image/b5.jpg" alt="banner" class="object-cover w-full h-full lg:w-full rounded-lg shadow-md">
        </div>
    </div>
</div>

<!-- Kenapa Memilih Kami -->
<div class="bg-beige dark:bg-gray-900 py-8 lg:py-16 w-full overflow-hidden"> <!-- Menambahkan w-full agar mengisi lebar layar -->
    <div class="px-4 mx-auto max-w-screen-xl text-center">
        <div class="mb-8">
            <h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">Why Choose Us?</h2>
        </div>
        <div class="grid gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="/image/logo quality.png" alt="Quality">
                <h3 class="mb-1 text-2xl font-bold text-gray-900 dark:text-white">
                    <a href="#">Quality</a>
                </h3>
                <p class="mb-6">Quality guaranteed</p>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="/image/logo price.png" alt="Price">
                <h3 class="mb-1 text-2xl font-bold text-gray-900 dark:text-white">
                    <a href="#">Price</a>
                </h3>
                <p class="mb-6">Affordable price</p>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="/image/logo disc.png" alt="Discon">
                <h3 class="mb-1 text-2xl font-bold text-gray-900 dark:text-white">
                    <a href="#">Diskon%</a>
                </h3>
                <p class="mb-6">Discounts up to 50%</p>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="/image/logo material.png" alt="Material">
                <h3 class="mb-1 text-2xl font-bold text-gray-900 dark:text-white">
                    <a href="#">Material</a>
                </h3>
                <p class="mb-6">Using selected wood</p>
            </div>
        </div>
    </div>
</div>

<!-- Tentang Kami -->
<div class="bg-beige dark:bg-gray-900 py-8 lg:py-16 w-full overflow-hidden"> <!-- Menambahkan w-full agar mengisi lebar layar -->
    <div class="px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-12">
        <div class="mr-auto lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-4xl dark:text-white">About Us</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 md:text-lg lg:text-xl dark:text-gray-400">Welcome to our FurniCorp, where inspiration meets functionality! Dive into our world of timeless elegance and modern comfort. Each piece is meticulously crafted to transform your spaces into havens of style and relaxation. Explore our curated selection of sofas, tables, and more, designed to elevate every corner of your home. Whether you seek classic sophistication or contemporary flair, we have something to suit every taste. Let us guide you on a journey of discovery, where your dream home takes shape one exquisite detail at a time. Together, let's create a space that mirrors your personality, a sanctuary that welcomes you at the end of each day.</p>
        </div>
        <div class="hidden lg:flex lg:col-span-5">
            <img src="/image/logo5.jpg" alt="About Us" class="object-cover w-full h-auto rounded-lg shadow-md">
        </div>
    </div>
</div>

<!-- Produk Kami -->
<div class="bg-beige dark:bg-gray-900 py-8 lg:py-16 w-full overflow-hidden"> <!-- Menambahkan w-full agar mengisi lebar layar -->
    <div class="px-4 mx-auto max-w-screen-xl">
        <div class="mx-auto max-w-screen-md text-center mb-8">
            <h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">Our Products</h2>
            <p class="mb-5 font-light text-gray-500 md:text-xl dark:text-gray-400">Discover Our Range of Exquisite Furniture. Redefine Your Space with Style!</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Product 1 -->
            <div class="bg-white rounded-lg shadow-md p-4">
                <div class="aspect-w-1 aspect-h-1 mb-4">
                    <img class="w-full h-full object-cover object-center rounded-lg" src="/image/1.jpg" alt="Product 1">
                </div>
                <div class="text-center">
                    <h5 class="text-lg font-semibold text-gray-800 mb-2">Table</h5>
                    <h5 class="text-gray-600 mb-2">Stock: 10</h5>
                    <h4 class="text-blue-600 font-bold mb-4">Rp. 100,000</h4>
                    <a href="#" class="text-blue-600 inline-block"><i class="bx bx-cart-alt cart"></i>Shop Now</a>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="bg-white rounded-lg shadow-md p-4">
                <div class="aspect-w-1 aspect-h-1 mb-4">
                    <img class="w-full h-full object-cover object-center rounded-lg" src="/image/2.jpg" alt="Product 2">
                </div>
                <div class="text-center">
                    <h5 class="text-lg font-semibold text-gray-800 mb-2">Chair</h5>
                    <h5 class="text-gray-600 mb-2">Stock: 15</h5>
                    <h4 class="text-blue-600 font-bold mb-4">Rp. 150,000</h4>
                    <a href="#" class="text-blue-600 inline-block"><i class="bx bx-cart-alt cart"></i>Shop Now</a>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="bg-white rounded-lg shadow-md p-4">
                <div class="aspect-w-1 aspect-h-1 mb-4">
                    <img class="w-full h-full object-cover object-center rounded-lg" src="/image/3.jpg" alt="Product 3">
                </div>
                <div class="text-center">
                    <h5 class="text-lg font-semibold text-gray-800 mb-2">Sofa</h5>
                    <h5 class="text-gray-600 mb-2">Stock: 20</h5>
                    <h4 class="text-blue-600 font-bold mb-4">Rp. 200,000</h4>
                    <a href="#" class="text-blue-600 inline-block"><i class="bx bx-cart-alt cart"></i>Shop Now</a>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="bg-white rounded-lg shadow-md p-4">
                <div class="aspect-w-1 aspect-h-1 mb-4">
                    <img class="w-full h-full object-cover object-center rounded-lg" src="/image/4.jpg" alt="Product 4">
                </div>
                <div class="text-center">
                    <h5 class="text-lg font-semibold text-gray-800 mb-2">Table</h5>
                    <h5 class="text-gray-600 mb-2">Stock: 10</h5>
                    <h4 class="text-blue-600 font-bold mb-4">Rp. 150,000</h4>
                    <a href="#" class="text-blue-600 inline-block"><i class="bx bx-cart-alt cart"></i>Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Affordable Furniture -->
    <div class="bg-beige dark:bg-gray-900 py-8 lg:py-16 w-full overflow-hidden  top-0 z-50">
    <div class="px-4 mx-auto max-w-screen-xl text-center relative">
        <div class="max-w-screen-md mx-auto relative">
            <h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">Find the Most Affordable Furniture in Batam!</h2>
            <p class="mb-8 font-light text-gray-500 md:text-xl dark:text-gray-400">Explore Affordable Furniture in Batam! From cozy sofas to elegant dining sets, find quality pieces without the high price tag. Transform your space with budget-friendly options. Your dream home is just a click away!</p>
            <div class="slider relative">
                <!-- Image Slider -->
                <div class="slider relative"> <!-- Menambahkan relative di sini -->
                    <!-- Slide 1 -->
                    <div class="relative">
                        <img src="/image/b1.jpg" alt="Affordable Furniture 1" class="w-full h-auto rounded-lg shadow-lg">
                        <button type="button" class="slick-prev absolute top-1/2 left-2 transform -translate-y-1/2 bg-gray-800 text-white rounded-full p-2 opacity-75 hover:opacity-100 focus:outline-none">❮</button> <!-- Mengatur posisi untuk tombol prev -->
                        <button type="button" class="slick-next absolute top-1/2 right-2 transform -translate-y-1/2 bg-gray-800 text-white rounded-full p-2 opacity-75 hover:opacity-100 focus:outline-none">❯</button> <!-- Mengatur posisi untuk tombol next -->
                    </div>
                    <!-- Slide 2 -->
                    <div class="relative">
                        <img src="/image/b2.jpg" alt="Affordable Furniture 2" class="w-full h-auto rounded-lg shadow-lg">
                        <button type="button" class="slick-prev absolute top-1/2 left-2 transform -translate-y-1/2 bg-gray-800 text-white rounded-full p-2 opacity-75 hover:opacity-100 focus:outline-none">❮</button> <!-- Mengatur posisi untuk tombol prev -->
                        <button type="button" class="slick-next absolute top-1/2 right-2 transform -translate-y-1/2 bg-gray-800 text-white rounded-full p-2 opacity-75 hover:opacity-100 focus:outline-none">❯</button> <!-- Mengatur posisi untuk tombol next -->
                    </div>
                    <!-- Slide 3 -->
                    <div class="relative">
                        <img src="/image/b3.jpg" alt="Affordable Furniture 3" class="w-full h-auto rounded-lg shadow-lg">
                        <button type="button" class="slick-prev absolute top-1/2 left-2 transform -translate-y-1/2 bg-gray-800 text-white rounded-full p-2 opacity-75 hover:opacity-100 focus:outline-none">❮</button> <!-- Mengatur posisi untuk tombol prev -->
                        <button type="button" class="slick-next absolute top-1/2 right-2 transform -translate-y-1/2 bg-gray-800 text-white rounded-full p-2 opacity-75 hover:opacity-100 focus:outline-none">❯</button> <!-- Mengatur posisi untuk tombol next -->
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Testimonial -->
<div class="bg-beige dark:bg-gray-900 py-8 lg:py-16 w-full overflow-hidden top-0 z-50"> <!-- Menambahkan w-full agar mengisi lebar layar -->
    <div class="px-4 mx-auto max-w-screen-xl">
        <div class="mx-auto max-w-screen-sm text-center mb-8">
            <h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">Testimonial</h2>
            <p class="font-light text-gray-500 md:text-xl dark:text-gray-400">Turning My House Into a Home: A Journey of Redefining Comfort, Elegance, and Functionality Through Exquisite Furniture</p>
        </div>
        <div class="grid gap-8 md:grid-cols-2">
            <!-- Testimonial 1 -->
            <div class="bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                <a href="#" class="sm:w-1/3">
                    <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar" style="max-width: 100px;">
                </a>
                <div class="p-5 sm:w-2/3">
                    <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Emma R.</a>
                    </h3>
                    <span class="text-gray-500 dark:text-gray-400">Love It!</span>
                    <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">"The 'Elegance Dining Set' from Batam Furniture is perfect! It looks amazing in my dining room and adds a touch of class. Thank you!"</p>
                </div>
            </div>
            <!-- Testimonial 2 -->
            <div class="bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                <a href="#" class="sm:w-1/3">
                    <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Avatar" style="max-width: 100px;">
                </a>
                <div class="p-5 sm:w-2/3">
                    <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Mark Lee</a>
                    </h3>
                    <span class="text-gray-500 dark:text-gray-400">Comfy and Stylish!</span>
                    <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">"The 'Cozy Comfort Sofa' from Batam Furniture is exactly what I needed. It's comfortable and looks great in my living room. Highly recommend!"</p>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>

</x-app-layout>