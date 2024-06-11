<!--DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="p-10">
        <div class="text-center">
            <h1 class="text-5xl font-bold">Halaman Crud</h1>
        </div>
    </div>
    @yield('content')
</body>
</html-->

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.tailwindcss.com/3.4.1" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/styles/flowbite.min.css/flowbite.min.css">
    <link rel="stylesheet" href="/public/styles/tailwind 3.4.1.js/tailwind 3.4.1.js">
    
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/styles/my_style.css">
    @vite('resources/css/app.css')

  </head>
<body>
    <header> 
        @include('components.penjual')
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
        <main>
            @yield('content')
        </main>
    </div>
    <<!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.2/alpine.js"></script>
    <script src="scripts.js"></script>
    <script>
  document.addEventListener('DOMContentLoaded', function () {
    const dropdownToggleButton = document.querySelector('[data-dropdown-toggle="dropdown-user"]');
    const dropdownMenu = document.getElementById('dropdown-user');

    dropdownToggleButton.addEventListener('click', function () {
      dropdownMenu.classList.toggle('hidden');
    });

    // Hide dropdown menu when clicked outside
    document.addEventListener('click', function (event) {
      if (!dropdownToggleButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
        dropdownMenu.classList.add('hidden');
      }
    });
  });
</script>


</body>
    <!--footer>
        @include('components.footer')
    </footer-->
</html>