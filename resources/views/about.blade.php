<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .location {
            padding: 100px 0;
            background: url(../images/bg-location.jpg);
            background-size: cover;
        }

        .location .head {
            display: flex;
            justify-content: space-between;
            background-color: #191919;
            padding: 40px;
            width: 100%;
        }

        .location .head .info {
            display: flex;
            align-items: center;
        }

        .location .head .info .icon {
            display: flex;
            align-items: center;
            margin-right: 15px;
            border: 1px solid var(--color-primary);
            padding: 10px;
            width: 50px;
            height: 50px;
            justify-content: center;
            border-radius: 100%;
        }

        .location .head .info .text span {
            display: block;
            font-size: 13px;
        }

        .location .head .info .text span:first-child {
            color: silver;
        }

        .location .head .info .text span:last-child {
            color: white;
        }

        .location .map {
            width: 100%;
        }

        .location .map iframe {
            width: 100%;
        }
    </style>
</head>

<body class="bg-black text-black">
    @include('partials.navbar')

    <header class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
        <div class="container px-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="text-center my-5">
                        <h1 class="fw-bolder mb-4 display-4">The Best Way to Book Services Online!</h1>
                        <p class="lead fw-normal  fs-4">We are the best specialists in our field, offering you
                            high-quality beauty services at an affordable price!</p>
                        {{-- <h4 class="mb-3 fs-3">Working hours:</h4>
                        <ul class="list-unstyled fs-5">
                            <li><b>Monday - </b> 08:00 - 17:00</li>
                            <li><b>Tuesday -</b> 08:00 - 17:00</li>
                            <li><b>Wednesday -</b> 07:00 - 16:00</li>
                            <li><b>Thursday -</b> 08:00 - 17:00</li>
                            <li><b>Friday -</b> 09:00 - 18:00</li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
        <section class="location">
            <div class="container">
                <div class="head">
                    <div class="info">
                        <div class="icon">
                            <img src="{{ asset('map-img1.png') }}" alt="Location">                        </div>
                        <div class="text">
                            <span>Location</span>
                            <span>Matrix Street, 33</span>
                        </div>
                    </div>

                    <div class="info">
                        <div class="icon">
                            <img src="{{ asset('map-img2.png') }}" alt="Phone">
                        </div>
                        <div class="text">
                            <span>Phone</span>
                            <span>(11) 99999-9999</span>
                        </div>
                    </div>

                    <div class="info">
                        <div class="icon">
                            <img src="{{ asset('map-img3.png') }}" alt="Email">
                        </div>
                        <div class="text">
                            <span>Email</span>
                            <span>contact@barbershop.com</span>
                        </div>
                    </div>

                    <div class="info">
                        <div class="icon">
                            <img src="{{ asset('map-img4.png') }}" alt="Hours">
                        </div>
                        <div class="text">
                            <span>Hours</span>
                            <span>Mon to Fri: 9AM to 5PM</span>
                        </div>
                    </div>

                </div>

                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.197490294479!2d-46.658682985585536!3d-23.561349567475688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.%20Paulista%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1sen!2sbr!4v1665999334814!5m2!1sen!2sbr"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    </header>

</body>

</html>
