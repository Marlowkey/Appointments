<nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="{{ asset('logo-1.png') }}" class="img-fluid" style="width: 90px; height: auto;" alt="Logo">
        <span class="ms-2 fw-bold fs-4">Johnsen The Barber</span>
    </a>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav ms-auto me-3 fs-6 fw-bold"> <!-- 'fw-bold' applied here for bold text -->
            <li class="nav-item active">
                <a class="nav-link fw-bold fs-6" href="/">Home</a> <!-- 'fw-bold' ensures bold style -->
            </li>
            <li class="nav-item active">
                <a class="nav-link fw-bold" href="services">Services</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link fw-bold" href="about">About Us</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link fw-bold" href="reservations">Reservation</a>
            </li>
            <li class="nav-item active">
                <a href="login" class="nav-link fw-bold">Login</a>
            </li>
        </ul>
    </div>
</nav>
