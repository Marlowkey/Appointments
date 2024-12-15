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

    </style>
</head>

<body class="bg-dark text-dark">
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
        <!-- Contact form -->
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                    <i class="bi bi-calendar-check"></i>
                </div>
                <h1 class="fw-bolder">Schedule Your Appointment</h1>
                <p class="lead fw-normal text-muted mb-0">Fill out the form, and we'll confirm your appointment at your chosen time!</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <!-- Name input -->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" name="name" placeholder="Enter your name..." required />
                        <label for="name">Full name</label>
                        <div class="invalid-feedback">A name is required.</div>
                    </div>

                    <!-- Email address input -->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" name="email" placeholder="name@example.com" required />
                        <label for="email">Email address</label>
                        <div class="invalid-feedback">An email is required.</div>
                        <div class="invalid-feedback">Email is not valid.</div>
                    </div>

                    <!-- Phone number input -->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phoneNumber" type="tel" name="phoneNumber" placeholder="(123) 456-7890" required />
                        <label for="phoneNumber">Phone number</label>
                        <div class="invalid-feedback">A phone number is required.</div>
                    </div>

                    <!-- Service select -->
                    <div class="form-floating mb-3">
                        <select class="form-control" name="services" id="services" required>
                            <option value="">Select a service</option>
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                            @endforeach
                        </select>
                        <label for="services">Select Service</label>
                    </div>

                    <!-- Reservation time input -->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="start_time" type="datetime-local" name="start_time" required />
                        <label for="start_time">Reservation Time</label>
                    </div>

                    <!-- Additional comments -->
                    <div class="form-floating mb-4">
                        <textarea class="form-control" id="comments" name="comments" placeholder="Enter additional comments..." style="height: 10rem"></textarea>
                        <label for="comments">Additional Comments (optional)</label>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark btn-lg">Reserve Your Appointment</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Your Website 2023</div></div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
</html>
