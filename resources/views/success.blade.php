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

        </style>
    </head>
    <body>


        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <img src="https://i.ibb.co/Nrt3RWL/Logo.png" width="50" height="30">

            <a class="navbar-brand" href="#">Barbershop</a>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="employees">Employees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reservations">Make a Reservation</a>
                    </li>
                </ul>
                    <a href="login" class="btn btn-danger my-2 my-sm-0">Login</a>
            </div>
        </nav>
    <div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">Rezervacija sėkmingai sukurta!</h1>
      <p class="lead">Lauksime jūsų atvykstant.</p>
      <p>Darbo laikas:</p>
      <ul>
          <li><b><u>Pirmadienis:</b></u> 08:00 - 17:00</li>
          <li><b><u>Antradienis:</b></u> 08:00 - 17:00</li>
          <li><b><u>Trečiadienis:</b></u> 07:00 - 16:00</li>
          <li><b><u>Ketvirtadienis:</b></u> 08:00 - 17:00</li>
          <li><b><u>Penktadienis:</b></u> 09:00 - 18:00</li>
      </ul>
      <p class="lead">Mus galite rasti čia:</p>
      <p class="lead">
      <?php include 'map.html';?>
      </p>
      <div style="height: 150px"></div>
    </div>
  </div>
</div>

    </body>
</html>
