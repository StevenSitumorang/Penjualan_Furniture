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
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <!-- Slick Carousel JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
 <!-- Slick Carousel CSS -->
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <!-- Slick Carousel Theme CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

  </head>
<body>
    <header> 
        @include('components.header')
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--h1>Dashboard</h1>
                <p>Welcome to the furniture web dashboard!</p>
                Tambahkan konten lainnya di sini sesuai kebutuhan-->
            </div>
        </div>
        <main>
            @yield('content')
        </main>
    </div>
    <!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.2/alpine.js"></script>
    <script src="scripts.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Slick Carousel JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- Initialize Slick Carousel -->
    <script>
        // Initialize Slick Carousel
        $(document).ready(function(){
            $('.slider').slick({
                arrows: false, // Menghilangkan tombol navigasi dari Slick Carousel
                dots: false, // Menghilangkan titik navigasi dari Slick Carousel
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                centerMode: true,
                variableWidth: true
            });
            // Mengatur fungsi slide dengan tombol navigasi kustom
            $('.slick-prev').on('click', function(){
                $('.slider').slick('slickPrev');
            });
            $('.slick-next').on('click', function(){
                $('.slider').slick('slickNext');
            });
        });
    </script>

    
</body>
    <footer>
        @include('components.footer')
    </footer>
</html>
