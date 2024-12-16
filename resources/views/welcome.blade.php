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

<body class="bg-black  text-black">
    @include('partials.navbar')

    <main class="flex-shrink-0 min-h-screen flex items-center rounded-xl">  <!-- Soft, rounded edges for the entire main container -->
        <!-- Header -->
        <header class="bg-gray-100 rounded-xl py-10 px-6 mb-10 h-auto shadow-lg">  <!-- Soft rounded edges and subtle shadow for the header -->
            <div class="container mx-auto px-6 lg:px-10 rounded-xl">
                <div class="flex flex-col-reverse lg:flex-row items-center justify-between gap-8">
                    <!-- Text Content -->
                    <div class="lg:w-2/5 text-center lg:text-left">
                        <h1 class="text-4xl font-extrabold text-black mb-4">Johnsen The Barber</h1>
                        <p class="text-lg font-normal text-gray-600 mb-6">
                            Your premium barber experience, now easier to book!
                        </p>
                        <div class="flex flex-col sm:flex-row gap-3 sm:justify-center lg:justify-center">
                            <a href="reservations"
                               class="px-6 py-3 bg-black text-white rounded-lg text-lg font-semibold hover:bg-gray-800 transition">
                                Book Reservation
                            </a>
                        </div>
                    </div>

                    <!-- Image Content -->
                    <div class="lg:w-3/5">
                        <img class="rounded-xl shadow-lg" src="{{ asset('hero.jpg') }}" alt="Johnsen The Barber" />
                    </div>
                </div>
            </div>
        </header>
    </main>

    </body>
</body>

</html>
