<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barbershop - Login</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="bg-light">
    <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center">
        <div class="row w-100">
            <div class="col-md-8 col-lg-8 mx-auto">
                <div class="card shadow-lg border rounded-3">
                    <div class="row no-gutters">
                        <!-- Left Section: Image -->
                        <div class="rounded-3 bg-white col-md-6 d-flex justify-content-center align-items-center bg-light">
                            <img src="{{ asset('logo-3.png') }}" alt="Login Image" class="img-fluid" />
                        </div>

                        <!-- Right Section: Tabs for Login -->
                        <div class="col-md-6 p-5">
                            <ul class="nav nav-tabs mb-4" id="loginTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="admin-tab" data-bs-toggle="tab" data-bs-target="#adminLogin" type="button" role="tab" aria-controls="adminLogin" aria-selected="true">Admin</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="client-tab" data-bs-toggle="tab" data-bs-target="#clientLogin" type="button" role="tab" aria-controls="clientLogin" aria-selected="false">Client</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="loginTabContent">
                                <!-- Admin Login Form -->
                                <div class="tab-pane fade show active" id="adminLogin" role="tabpanel" aria-labelledby="admin-tab">
                                    <div class="text-center mb-4">
                                        <h2 class="fw-bold text-dark">Admin Login</h2>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-4">
                                            <label for="email" class="form-label fw-semibold">Email Address</label>
                                            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email" value="{{ old('email') }}" required autofocus />
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <label for="password" class="form-label fw-semibold">Password</label>
                                            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" required autocomplete="current-password" />
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-dark btn-block w-100 mb-4 py-2">Log In</button>
                                    </form>
                                </div>

                                <!-- Client Login Form -->
                                <div class="tab-pane fade" id="clientLogin" role="tabpanel" aria-labelledby="client-tab">
                                    <div class="text-center mb-4">
                                        <h2 class="fw-bold text-dark">Client Login</h2>
                                    </div>
                                    <form method="POST" action="{{ route('client.login') }}">
                                        @csrf
                                        <div class="mb-4">
                                            <label for="client_email" class="form-label fw-semibold">Email Address</label>
                                            <input type="email" id="client_email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email" value="{{ old('email') }}" required autofocus />
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <label for="client_password" class="form-label fw-semibold">Password</label>
                                            <input type="password" id="client_password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" required autocomplete="current-password" />
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-dark btn-block w-100 mb-4 py-2">Log In</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
