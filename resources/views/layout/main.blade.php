<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-100 flex flex-col min-h-screen poppins">
    <header>
        @include('components.header')
    </header>

    <div class="flex-1 pt-28">
        @yield('content')
    </div>

    <footer>
        @include('components.footer')
    </footer>
</body>

</html>
