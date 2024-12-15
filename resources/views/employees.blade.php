<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"

        </style>
    </head>
    <body class="bg-light text-light">
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


<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">Mūsų darbuotojai!</h1>
        <div class="card-body table-responsive">
                 <table class="table table-hover">
                   <thead class="text-warning">
                     <tr>
                     <th>Vardas</th>
                     <th>El. paštas</th>
                     <th>Nuotrauka</th>
                     <th>Paslaugos</th>
                   </tr></thead>
                   <tbody>
                    @foreach($employees as $employee)
                        <tr>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->photo }}</td>
                            <td>@foreach($employee->services as $service)
                            Paslauga: {{ $service->name }} Kaina: {{ $service->price }}<br>
                            @endforeach
                            </td>
                        </tr>
                    @endforeach
                   </tbody>
                 </table>
               </div>
      <div style="height: 700px"></div>
      <p class="lead mb-0">You've reached the end!</p>
    </div>
  </div>
</div>

    </body>
</html>



