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
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="services">Paslaugos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="employees">Darbuotojai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about">Apie mus</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="reservations">
                    Rezervuotis
                    <span class="sr-only">(current)</span>
                </a>
            </li>
        </ul>
            <a href="login" class="btn btn-danger my-2 my-sm-0">Prisijungti</a>
    </div>
    </nav>

<form action="{{url('createAppointment')}}" method="post">
    @csrf
    <div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">Užildykite formą ir lauksime jūsų atvykstant jūsų nurodytu laiku!</h1>
    <div class="form-group">
      <label for="exampleInputPassword1">Jūsų vardas</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="name" placeholder="Vardas">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">El. paštas</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Įveskite el. paštą">
      <small id="emailHelp" class="form-text text-muted">Jūsų asmenine informacija su niekuo nesidalinsime.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Telefono numeris</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="phoneNumber" placeholder="+370">
    </div>
    <div class="form-group">
      <label for="exampleSelect1">Pasirinkite darbuotoją pas kurį norite apsilankyti (nebūtina)</label>
      <select class="form-control" name="employee">
        <option value="{{ $employees->first()->id }}">Pasirinkite darbuotoją</option>
        @foreach($employees as $employee)
            <option value="{{ $employee->id }}"> {{ $employee->name }} </option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="exampleSelect1">Pasirinkite norimą paslaugą</label>
      <select class="form-control" name="services">
        <option value = "{{ $services->first()->id }}">Pasirinkite paslaugą</option>
        @foreach($services as $service)
            <option value="{{ $service->id }}"> {{ $service->name }} </option>
        @endforeach
      </select>
    </div>


<div class="form-group">
    <label for="birthdaytime">Rezervacijos laikas</label>
    <input type="datetime-local" id="birthdaytime" name="start_time">
</div>

    <div class="form-group">
      <label for="exampleTextarea">Papildomi komentarai (nebūtina)</label>
      <textarea class="form-control" id="exampleTextarea" rows="3" name="comments"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Rezervuoti</button>
</form>

      <div style="height: 150px"></div>
    </div>
  </div>
</div>



        </body>
</html>
