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

<body class="bg-black text-black">
    @include('partials.navbar')
    <form action="{{ url('createAppointment') }}" method="post">
        @csrf
        <!-- Contact form -->
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                    <i class="bi bi-calendar-check"></i>
                </div>
                <h1 class="text-center mb-4 text-black text-3xl font-bold">Schedule Your Appointment</h1>
                <p class="lead fw-normal text-muted mb-0">Fill out the form, and we'll confirm your appointment at your
                    chosen time!</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <!-- Name input -->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" name="name"
                            placeholder="Enter your name..." required />
                        <label for="name">Full name</label>
                        <div class="invalid-feedback">A name is required.</div>
                    </div>

                    <!-- Email address input -->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" name="email"
                            placeholder="name@example.com" required />
                        <label for="email">Email address</label>
                        <div class="invalid-feedback">An email is required.</div>
                        <div class="invalid-feedback">Email is not valid.</div>
                    </div>

                    <!-- Phone number input -->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phoneNumber" type="tel" name="phoneNumber"
                            placeholder="(123) 456-7890" required />
                        <label for="phoneNumber">Phone number</label>
                        <div class="invalid-feedback">A phone number is required.</div>
                    </div>


                    <!-- Password input -->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="password" type="password" name="password" placeholder="Enter your password..." required />
                        <label for="password">Password</label>
                        <div class="invalid-feedback">A password is required.</div>
                    </div>
                    <!-- Password divider -->
                    <div class="text-center my-4">
                        <hr class="w-50 mx-auto text-muted">
                        <span class="bg-light px-3 text-muted">Account Details</span>
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
                    <textarea class="form-control" id="comments" name="comments" placeholder="Enter additional comments..."
                        style="height: 10rem"></textarea>
                    <label for="comments">Additional Comments (optional)</label>
                </div>

                    <!-- Submit Button -->
                    <div class="flex justify-center">
                        <button type="submit"
                            class="w-1/2 text-center bg-black text-white  py-3 px-4 rounded-md hover:bg-gray-400 transition">
                            Reserve Your Appointment
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</body>

</html>
