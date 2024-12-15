<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-white text-black">
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{ asset('logo-1.png') }}" class="img-fluid" style="width: 90px; height: auto;" alt="Logo">
            <span class="ms-2 font-weight-bold fs-4">Johnsen The Barber</span>
        </a>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav ms-auto me-3"> <!-- 'ms-auto' to push items to the right, 'me-3' for margin -->
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reservations">Make a Reservation</a>
                </li>
                <li class="nav-item">
                    <a href="login" class="nav-link">Login</a>
                </li>
            </ul>
        </div>
    </nav>

        <main class="flex-shrink-0">
            <!-- Header-->
            <header class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-black mb-2">Johnsen The Barber</h1>
                                <p class="lead fw-normal text-black-50 mb-4">Your premium barber experience, now easier to book!</p>
                                <div class="d-grid gap-1 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-dark btn-lg px-4 me-sm-3" href="reservations">Book reservation</a>
                                    <a class="btn btn-outline-light btn-lg px-4" href="about">Abouts</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="{{ asset('hero.jpg') }}"alt="..." /></div>
                    </div>
                </div>
            </header>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Your Website 2023</div></div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</body>

</html>
