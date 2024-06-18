<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>@yield('title', 'Aplikasi Web Penjualan Furniture')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/Flowbite.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="stylesheet" href="https://cdn.tailwindcss.com/3.4.1">
    <link href="stylesheet" href="/styles/tailwindcss3.4.1.js">
    <link href="stylesheet" href="/styles/style.css">
</head>

<body>
    <header>
        @include('components.header')
    </header>

    <div class="container">
        <main>
            @yield('content')
        </main>
    </div>
    
    <footer>
        @include('components.footer')
    </footer>

    
</body>
</html>
