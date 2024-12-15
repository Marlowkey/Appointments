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
    <form action="{{ url('createAppointment') }}" method="post">
        @csrf
        <div class="container">
            <div class="card border-0 shadow my-5">
                <div class="card-body p-5">
                    <h1 class="font-weight-light">Fill out the form, and we look forward to seeing you at your chosen time!</h1>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Your Name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="name"
                            placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                            aria-describedby="emailHelp" placeholder="Enter your email">
                        <small id="emailHelp" class="form-text text-muted">We will not share your personal information with anyone.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone Number</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="phoneNumber"
                            placeholder="+370">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect1">Select the employee you'd like to visit (optional)</label>
                        <select class="form-control" name="employee">
                            <option value="{{ $employees->first()->id }}">Select an employee</option>
                            @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}"> {{ $employee->name }} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleSelect1">Select the desired service</label>
                        <select class="form-control" name="services">
                            <option value="{{ $services->first()->id }}">Select a service</option>
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}"> {{ $service->name }} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="birthdaytime">Reservation Time</label>
                        <input type="datetime-local" id="birthdaytime" name="start_time">
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea">Additional Comments (optional)</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3" name="comments"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Reserve</button>
    </form>

    <div style="height: 150px"></div>
    </div>
    </div>
    </div>



</body>

</html>
