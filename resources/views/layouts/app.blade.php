<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/vendor/isotope.pkgd.js') }}"></script>
        <script src="{{ asset('js/vendor/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/vendor/scrollreveal.min.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery.appear.js') }}"></script>
        <script src="{{ asset('js/vendor/custom.js') }}"></script>
        <script src="{{ asset('js/vendor/parallax.min.js') }}"></script>
        <script src="{{ asset('js/vendor/masonry-horizontal.js') }}"></script>
        <script src="{{ asset('js/vendor/classie.js') }}"></script>

        <script src="{{ asset('js/main.js') }}"></script>

        <!-- Styles -->
        <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
        {{-- Determine the error that's causing the stylesheet below to affect navbar --}}
        {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}
        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
       <link rel="stylesheet" href="{{ asset('css/style.css') }}">
       <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/color.css') }}">
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen ">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-black ">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>


        </div>

        <x-footer/>
        @stack('modals')

        @livewireScripts
    </body>
</html>
