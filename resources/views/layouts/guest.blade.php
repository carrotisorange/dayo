<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- Alpine.js --}}
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <main>
            {{ $slot }}

        </main>
        @if(request()->routeIs('register'))
        <footer class="text-center text-white" style="background-color: #FFA500;">
            

            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2021 Copyright:
                <a class="text-white" href="#/">Dayo</a>
            </div>
        </footer>
        @else
        <footer class="text-center text-white" style="background-color: #FFA500;">
            <div class="container p-6">
                <div class="">
                    <p class="flex justify-center items-center">
                        <span class="mr-4">Register for free</span>
                        <button type="button" onclick="window.location.href='/register'"
                            class="inline-block px-6 py-2 border-2 border-white text-white font-medium text-xs leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                            Sign up!
                        </button>
                    </p>
                </div>
            </div>

           @include('layouts.footer')
        </footer>
        @endif

    </div>

</body>

</html>