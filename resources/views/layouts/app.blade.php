<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ showLogoutButton: false }">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Blog') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/css/app.css'])

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>
<body class="antialiased bg-gray-100">
    <div id="app" class="flex flex-col min-h-screen">
        <!-- Header -->
        <nav class="bg-white shadow-md">
            <div class="container mx-auto flex items-center justify-between p-4">
                <a class="text-lg font-bold text-gray-900" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel Blog') }}
                </a>
                <button class="lg:hidden p-2">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="hidden lg:flex space-x-4">
                    <!-- Navigation Links -->
                    <ul class="flex items-center space-x-4">
                        @auth
                            <!-- User Dropdown -->
                            <li class="relative">
                                <button id="navbarDropdown" class="text-gray-800 hover:text-gray-600">
                                    {{ Auth::user()->name }}
                                </button>

                                <div class="dropdown-menu absolute right-0 mt-2 bg-white border border-gray-200 rounded shadow-md hidden">
                                    <a class="block px-4 py-2 text-gray-800 hover:bg-gray-100" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="flex-1 p-4">
            @yield('content')
        </main>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
