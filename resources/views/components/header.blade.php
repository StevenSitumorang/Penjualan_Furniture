<style>
    #account-dropdown {
        position: fixed;
        /* Mengatur posisi fixed agar mengambang di luar container */
        top: 60px;
        /* Sesuaikan posisi dropdown dengan posisi tombol */
        right: 20px;
        /* Sesuaikan posisi dropdown dengan posisi tombol */
        z-index: 1000;
        /* Mengatur z-index tinggi agar dropdown mengambang di atas elemen lainnya */
        background-color: white;
        /* Menambahkan warna latar belakang */
        border: 1px solid #ddd;
        /* Menambahkan border */
        border-radius: 0.25rem;
        /* Menambahkan radius border */
        overflow: visible;
        /* Memastikan dropdown tidak terpotong */
    }

    #account-dropdown a,
    #account-dropdown button {
        display: block;
        width: 100%;
        padding: 8px 16px;
        /* Menambahkan padding */
        color: #333;
        /* Mengatur warna teks */
        text-align: left;
    }

    #account-dropdown a:hover,
    #account-dropdown button:hover {
        background-color: #f3f4f6;
        /* Mengatur warna latar belakang saat hover */
    }
</style>


<!-- Header -->
<header class="header fixed top-0 w-full bg-black z-50">
    <nav class="bg-black fixed w-full overflow-hidden">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-6">
            <a href="http://127.0.0.1:8000/dashboard" class="flex items-center space-x-2 rtl:space-x-reverse">
                <img src="/image/logo.jpg" class="h-12 w-12" alt="FurniCorpLogo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">FurniCorp</span>
            </a>

            <!-- Centered Navigation Links -->
            <div class="hidden w-full lg:flex lg:w-auto" id="navbar-default">
                <ul class="flex flex-col mt-4 space-y-2 lg:flex-row lg:space-x-8 lg:mt-0 lg:space-y-0">
                    <li>
                        <a href="/dashboard"
                            class="nav-link text-lg text-white hover:bg-gray-100 px-3 py-2 rounded">Home</a>
                    </li>
                    <li>
                        <a href="/about"
                            class="nav-link text-lg text-white hover:bg-gray-100 px-3 py-2 rounded">About</a>
                    </li>
                    <li>
                        <a href="/produk_furniture"
                            class="nav-link text-lg text-white hover:bg-gray-100 px-3 py-2 rounded">Product</a>
                    </li>
                    <li>
                        <a href="/kontak"
                            class="nav-link text-lg text-white hover:bg-gray-100 px-3 py-2 rounded">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="flex items-center space-x-3 rtl:space-x-reverse">
                <!-- Hamburger Menu Button for Mobile -->
                <button
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-default" aria-expanded="false" onclick="toggleDropdown('navbar-default')">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 012-0h10a1 1 0 010 2H5a1 1 0 01-2-1zM3 10a1 1 0 012-0h10a1 1 0 010 2H5a1 1 0 01-2-1zM3 15a1 1 0 012-0h10a1 1 0 010 2H5a1 1 0 01-2-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>

                <!-- User Account Button -->

                @auth
                    <div class="relative">
                        <button type="button" class="flex text-sm rounded-full" id="menu-button" aria-expanded="false"
                            onclick="toggleDropdown('account-dropdown')">
                            <span class="sr-only">Open user menu</span>
                            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="hidden" id="account-dropdown">
                            <a href="{{ route('profile.show') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-300">Login</a>
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-300">Register</a>
                @endauth



                <!-- Cart Icon -->
                <a href="http://127.0.0.1:8000/keranjang" class="flex text-sm rounded-full">
                    <span class="sr-only">View cart</span>
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="white" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M4 4a1 1 0 0 1 1-1h1.5a1 1 0 0 1 .979.796L7.939 6H19a1 1 0 0 1 .979 1.204l-1.25 6a1 1 0 0 1-.979.796H9.605l.208 1H17a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L5.686 5H5a1 1 0 0 1-1-1Z"
                            clip-rule="evenodd" />
                    </svg>
                </a>

                <script>
                    function toggleDropdown(id) {
                        const dropdown = document.getElementById(id);
                        dropdown.classList.toggle('hidden');
                    }

                    document.addEventListener('click', function (event) {
                        const menuButton = document.getElementById('menu-button');
                        const dropdown = document.getElementById('account-dropdown');

                        if (!menuButton.contains(event.target) && !dropdown.contains(event.target)) {
                            dropdown.classList.add('hidden');
                        }
                    });
                </script>




                <!-- Dropdown menu >
                <div class="relative z-50">
                    <div class="absolute right-0 mt-2 w-40 bg-white divide-y divide-gray-50 hidden z-50 " id="account-dropdown" aria-labelledby="menu-button">
                        <ul class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="menu-button">
                            <li role="none">
                                <a href="http://127.0.0.1:8000/login" class="block px-2 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" id="menu-item-0">Login</a>
                            </li>
                            <li role="none z-50">
                                <a href="http://127.0.0.1:8000/login" class="block px-2 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" id="menu-item-0">Register</a>
                            </li>
                        </ul>
                    </div>
                </div-->
                <!--/div>
        </div>
    </nav>

    <script>
        function toggleDropdown(dropdownID) {
            var dropdown = document.getElementById(dropdownID);
            if (dropdown.classList.contains('hidden')) {
                dropdown.classList.remove('hidden');
            } else {
                dropdown.classList.add('hidden');
            }
        }
    </script>
</header>

<!--header class="bg-white shadow">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="#" class="text-gray-800 font-bold">Web Furniture</a>
        <nav class="hidden md:block">
            <ul class="list-none flex space-x-4">
                <li><a href="#" class="text-gray-800 font-medium hover:text-gray-600">Home</a></li>
                <li><a href="#" class="text-gray-800 font-medium hover:text-gray-600">About</a></li>
                <li><a href="#" class="text-gray-800 font-medium hover:text-gray-600">Product</a></li>
                <li><a href="#" class="text-gray-800 font-medium hover:text-gray-600">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<!--header class="bg-white shadow">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="#" class="text-gray-800 font-bold">Web Furniture</a>
        <nav class="hidden md:block">
            <ul class="list-none flex space-x-4">
                <li><a href="#" class="text-gray-800 font-medium hover:text-gray-600">Home</a></li>
                <li><a href="#" class="text-gray-800 font-medium hover:text-gray-600">About</a></li>
                <li><a href="#" class="text-gray-800 font-medium hover:text-gray-600">Product</a></li>
                <li><a href="#" class="text-gray-800 font-medium hover:text-gray-600">Contact</a></li>
            </ul>
        </nav>
    </div>
</header-->