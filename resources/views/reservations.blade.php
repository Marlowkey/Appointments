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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
    <form action="{{ url('createAppointment') }}" method="post">
        @csrf
        <div class="container">
            <div class="card border-0 shadow-sm my-5 bg-white">
                <div class="card-body p-5">
                    <h1 class="font-weight-light text-center mb-4 text-dark">Fill out the form, and we look forward to seeing you at your chosen time!</h1>

                    <!-- Name Input -->
                    <div class="form-group mb-3">
                        <label for="name" class="text-dark">Your Name</label>
                        <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Your Name">
                    </div>

                    <!-- Email Input -->
                    <div class="form-group mb-3">
                        <label for="email" class="text-dark">Email</label>
                        <input type="email" class="form-control form-control-lg" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your email">
                        <small id="emailHelp" class="form-text text-muted">We will not share your personal information with anyone.</small>
                    </div>

                    <!-- Phone Number Input -->
                    <div class="form-group mb-3">
                        <label for="phoneNumber" class="text-dark">Phone Number</label>
                        <input type="text" class="form-control form-control-lg" id="phoneNumber" name="phoneNumber" placeholder="+370">
                    </div>

                    <!-- Employee Select -->
                    <div class="form-group mb-3">
                        <label for="employee" class="text-dark">Select the employee you'd like to visit (optional)</label>
                        <select class="form-control form-control-lg" name="employee" id="employee">
                            <option value="">Select an employee</option>
                            @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}"> {{ $employee->name }} </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Service Select -->
                    <div class="form-group mb-3">
                        <label for="services" class="text-dark">Select the desired service</label>
                        <select class="form-control form-control-lg" name="services" id="services">
                            <option value="">Select a service</option>
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}"> {{ $service->name }} </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Reservation Time -->
                    <div class="form-group mb-3">
                        <label for="start_time" class="text-dark">Reservation Time</label>
                        <input type="datetime-local" class="form-control form-control-lg" id="start_time" name="start_time">
                    </div>

                    <!-- Comments Textarea -->
                    <div class="form-group mb-4">
                        <label for="comments" class="text-dark">Additional Comments (optional)</label>
                        <textarea class="form-control form-control-lg" id="comments" rows="3" name="comments"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Reserve</button>
                </div>
            </div>
        </div>
    </form>

    <div style="height: 150px"></div>
    </div>
    </div>
    </div>



</body>

</html>
