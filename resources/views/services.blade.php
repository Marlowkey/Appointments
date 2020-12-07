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
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"

        </style>
    </head>
    <body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Barbershop</a>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="services">
                    Paslaugos
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="employees">Darbuotojai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about">Apie mus</a>
            </li>
        </ul>
            <button><a href="login" class="btn btn-secondary my-2 my-sm-0">Prisijungti</a></button>
    </div>
    </nav>

<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">Geriausias būdas rezervuoti paslaugas internetu!</h1>
      <p class="lead">In this snippet, the background image is fixed to the body element. Content on the page will scroll, but the image will remain in a fixed position!</p>
      <p class="lead">Scroll down...</p>
      <div style="height: 700px"></div>
      <p class="lead mb-0">You've reached the end!</p>
    </div>
  </div>
</div>

    </body>
</html>
