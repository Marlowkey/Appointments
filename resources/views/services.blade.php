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

<body class="bg-dark text-black">
    @include('partials.navbar')
    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
        <div class="my-5">
            <div class="p-5">
                <h1 class="text-center mb-5 text-black display-4">Our Services</h1>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($services as $service)
                        <div class="col">
                            <div class="card bg-light border-dark rounded-3 shadow-sm h-100">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title text-center mb-3" style="font-size: 1.25rem; font-weight: bold; color: #333;">{{ $service->name }}</h5>
                                    <p class="card-text text-center text-muted" style="font-size: 1.1rem;">₱ {{ number_format($service->price ?: 80, 2) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <?php include 'gallery.php'; ?>
                <div style="height: 200px"></div>
            </div>
        </div>
    </div>


</body>

</html>
