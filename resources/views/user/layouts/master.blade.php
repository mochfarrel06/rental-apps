<!DOCTYPE html>
<html lang="en">

<head>
    <title>Wira Tour</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <!-- Box Icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <!-- Link Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
    <!-- Box Icons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

</head>

<body>
    <!-- Navbar -->
    @include('user.layouts.navbar')
    <!-- End Navbar -->

    @yield('content')

    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; 2024 Wiratour All Right Reserved.</p>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
