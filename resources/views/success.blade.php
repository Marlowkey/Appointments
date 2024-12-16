<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-black text-black">
    @include('partials.navbar')

    <header class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
        <div class="container px-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="text-center my-5">
                        <h1 class="fw-bolder mb-4 display-4">The Best Way to Book Services Online!</h1>
                        <p class="lead fw-normal mb-4 fs-4">We are the best specialists in our field, offering you high-quality beauty services at an affordable price!</p>
                        <h4 class="mb-3 fs-3">Working hours:</h4>
                        <ul class="list-unstyled fs-5">
                            <li><b>Monday - </b> 08:00 - 17:00</li>
                            <li><b>Tuesday -</b> 08:00 - 17:00</li>
                            <li><b>Wednesday -</b> 07:00 - 16:00</li>
                            <li><b>Thursday -</b> 08:00 - 17:00</li>
                            <li><b>Friday -</b> 09:00 - 18:00</li>
                        </ul>
                        <p class="lead fs-4">You can find us here:</p>
                        <div class="text-center">
                            <?php include 'map.html'; ?>
                        </div>
                        <a class="my-4 btn btn-dark btn-lg px-4 me-sm-3" href="services">Explore Services</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

</body>

</html>
