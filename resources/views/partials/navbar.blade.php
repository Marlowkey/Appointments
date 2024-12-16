<nav class="bg-black text-white">
    <!-- Logo -->
    <div class="container mx-auto flex items-center justify-between py-4">
        <a href="#" class="flex items-center">
            <img src="{{ asset('logo-1.png') }}" alt="Logo" class="w-24 h-auto">
            <span class="ml-2 font-bold text-xl">Johnsen The Barber</span>
        </a>

        <!-- Navbar Links -->
        <div class="hidden md:flex space-x-6">
            <a href="/" class="text-lg font-bold hover:text-gray-300">Home</a>
            <a href="services" class="text-lg font-bold hover:text-gray-300">Services</a>
            <a href="about" class="text-lg font-bold hover:text-gray-300">About Us</a>
            <a href="reservations" class="text-lg font-bold hover:text-gray-300">Reservation</a>
            <a href="login" class="text-lg font-bold hover:text-gray-300">Login</a>
        </div>

        <!-- Mobile Menu Button -->
        <button class="md:hidden text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden">
        <ul class="flex flex-col space-y-4 px-4 pb-4 text-center">
            <li><a href="/" class="text-lg font-bold hover:text-gray-300">Home</a></li>
            <li><a href="services" class="text-lg font-bold hover:text-gray-300">Services</a></li>
            <li><a href="about" class="text-lg font-bold hover:text-gray-300">About Us</a></li>
            <li><a href="reservations" class="text-lg font-bold hover:text-gray-300">Reservation</a></li>
            <li><a href="login" class="text-lg font-bold hover:text-gray-300">Login</a></li>
        </ul>
    </div>
</nav>
