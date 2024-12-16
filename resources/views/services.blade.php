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
    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
        <div class="mt-10 mx-5 lg:mx-0">
            <h1 class="text-center mb-4 text-black text-3xl font-bold">Our Services</h1>
            <p class="text-gray-500 mt-2 text-center">Our services are top of the range and very affordable.</p>
        </div>
        <div class="grid mx-5 lg:mx-0 lg:grid-cols-3 lg:gap-10">
            <div class="bg-dark pb-16 rounded mt-10">
                <div class="p-5">
                    <span class="bg-[#1e1e1e] flex items-center justify-center h-16 w-16 rounded-full text-[#c29e3d]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cut" width="28"
                            height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M9.15 14.85l8.85 -10.85" />
                            <path d="M6 4l8.85 10.85" />
                        </svg>
                    </span>
                    <div class="flex flex-col gap-y-6 lg:gap-y-12 mt-5">
                        <div>
                            <div class="flex items-center justify-between">
                                <h3 class="text-white text-xl">Classic Haircut</h3>
                                <p class="text-[#c29e3d] text-lg">$20</p>
                            </div>
                            <p class="text-[#828282] mt-3 font- font-extralight">
                                Sit back and enjoy a variety of our classic styles that will blow you away.
                            </p>
                        </div>
                        <div>
                            <div class="flex items-center justify-between">
                                <h3 class="text-white text-xl">Deluxe Haircut</h3>
                                <p class="text-[#c29e3d] text-lg">$30</p>
                            </div>
                            <p class="text-[#828282] font- font-extralight mt-3">
                                Your style, our commitment. Grab a style that compliments your looks and we'll match it!
                            </p>
                        </div>
                        <div>
                            <div class="flex items-center justify-between">
                                <h3 class="text-white text-xl">Kids Haircut</h3>
                                <p class="text-[#c29e3d] text-lg">$15</p>
                            </div>
                            <p class="text-[#828282] font- font-extralight mt-3">
                                Because your kids deserve to look good while being disciplined and decent.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-dark pb-16 rounded mt-10">
                <div class="p-5">
                    <span class="bg-[#1e1e1e] flex items-center justify-center h-16 w-16 rounded-full text-[#c29e3d]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cut" width="28"
                            height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M9.15 14.85l8.85 -10.85" />
                            <path d="M6 4l8.85 10.85" />
                        </svg>
                    </span>
                    <div class="flex flex-col gap-y-6 lg:gap-y-12 mt-5">
                        <div>
                            <div class="flex items-center justify-between">
                                <h3 class="text-white text-xl">Classic Haircut</h3>
                                <p class="text-[#c29e3d] text-lg">$20</p>
                            </div>
                            <p class="text-[#828282] mt-3 font- font-extralight">
                                Sit back and enjoy a variety of our classic styles that will blow you away.
                            </p>
                        </div>
                        <div>
                            <div class="flex items-center justify-between">
                                <h3 class="text-white text-xl">Deluxe Haircut</h3>
                                <p class="text-[#c29e3d] text-lg">$30</p>
                            </div>
                            <p class="text-[#828282] font- font-extralight mt-3">
                                Your style, our commitment. Grab a style that compliments your looks and we'll match it!
                            </p>
                        </div>
                        <div>
                            <div class="flex items-center justify-between">
                                <h3 class="text-white text-xl">Kids Haircut</h3>
                                <p class="text-[#c29e3d] text-lg">$15</p>
                            </div>
                            <p class="text-[#828282] font- font-extralight mt-3">
                                Because your kids deserve to look good while being disciplined and decent.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-dark pb-16 rounded mt-10">
                <div class="p-5">
                    <span class="bg-[#1e1e1e] flex items-center justify-center h-16 w-16 rounded-full text-[#c29e3d]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cut" width="28"
                            height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M9.15 14.85l8.85 -10.85" />
                            <path d="M6 4l8.85 10.85" />
                        </svg>
                    </span>
                    <div class="flex flex-col gap-y-6 lg:gap-y-12 mt-5">
                        <div>
                            <div class="flex items-center justify-between">
                                <h3 class="text-white text-xl">Classic Haircut</h3>
                                <p class="text-[#c29e3d] text-lg">$20</p>
                            </div>
                            <p class="text-[#828282] mt-3 font- font-extralight">
                                Sit back and enjoy a variety of our classic styles that will blow you away.
                            </p>
                        </div>
                        <div>
                            <div class="flex items-center justify-between">
                                <h3 class="text-white text-xl">Deluxe Haircut</h3>
                                <p class="text-[#c29e3d] text-lg">$30</p>
                            </div>
                            <p class="text-[#828282] font- font-extralight mt-3">
                                Your style, our commitment. Grab a style that compliments your looks and we'll match it!
                            </p>
                        </div>
                        <div>
                            <div class="flex items-center justify-between">
                                <h3 class="text-white text-xl">Kids Haircut</h3>
                                <p class="text-[#c29e3d] text-lg">$15</p>
                            </div>
                            <p class="text-[#828282] font- font-extralight mt-3">
                                Because your kids deserve to look good while being disciplined and decent.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:mt-20 mt-10 mx-5 lg:mx-0">
            <h1 class="text-center mb-4 text-black text-3xl font-bold">Latest Hairstyles</h1>
            <p class="text-center text-[#828282] mt-2">Our work samples.</p>
            <div class="grid mt-5 gap-5 grid-cols-2 lg:grid-cols-4">
                <div>
                    <img src="https://images.unsplash.com/photo-1582771498000-8ad44e6c84db?w=700&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjN8fGJhcmJlcnxlbnwwfHwwfHx8MA%3D%3D"
                        alt="">
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1578390432942-d323db577792?w=700&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mzh8fGJhcmJlcnxlbnwwfHwwfHx8MA%3D%3D"
                        alt="">
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1562004760-aceed7bb0fe3?w=700&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTJ8fGJhcmJlcnxlbnwwfHwwfHx8MA%3D%3D"
                        alt="">
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1605497788044-5a32c7078486?w=700&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YmFyYmVyfGVufDB8fDB8fHww"
                        alt="">
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
        <div class="my-5">
            <div class="p-5">
                <h1 class="text-center mb-5 text-black display-4">Our Services</h1>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($services as $service)
                        <div class="col">
                            <div class="card bg-light border-dark rounded-3 shadow-sm h-100">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title text-center mb-3"
                                        style="font-size: 1.25rem; font-weight: bold; color: #333;">
                                        {{ $service->name }}</h5>
                                    <p class="card-text text-center text-muted" style="font-size: 1.1rem;">₱
                                        {{ number_format($service->price ?: 80, 2) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <?php include 'gallery.php'; ?>
                <div style="height: 200px"></div>
            </div>
        </div>
    </div> --}}


</body>

</html>
