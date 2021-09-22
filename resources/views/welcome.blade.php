<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config( 'app.name', 'Laravel' )  }}</title>

        <link rel="stylesheet" href={{ asset('css/app.css') }}>
    </head>
    <body class="d-flex flex-column h-100">
        <header class="p-3 mb-3 border-bottom">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                            <svg id="bootstrap" viewBox="0 0 118 94">
                                <title>Bootstrap</title>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
                            </svg>
                        </svg>
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li class="nav-item">
                            <a
                                href="/"
                                class="nav-link px-2 link-secondary {{ request()->is( '/' ) ? 'active' : ''  }}"
                                {{ request()->is( '/' ) ? 'aria-current="page"' : ''  }}>
                                Overview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                    href="/about"
                                    class="nav-link px-2 link-dark {{ request()->is( '/about' ) ? 'active' : ''  }}"
                                    {{ request()->is( '/about' ) ? 'aria-current="page"' : ''  }}>
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                    href="/about"
                                    class="nav-link px-2 link-dark {{ request()->is( '/agb' ) ? 'active' : ''  }}"
                                    {{ request()->is( '/agb' ) ? 'aria-current="page"' : ''  }}>
                                AGB
                            </a>
                        </li>
                    </ul>

                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    </form>

                    <div class="dropdown text-end">
                        @guest
                            <a href="/login" class="btn btn-outline-primary me-2">Login</a>
                            @if( Illuminate\Support\Facades\Route::has( 'register' ) )
                                <a href="/register" class="btn btn-primary">Sign-up</a>
                            @endif
                        @else
                            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                                {{ Illuminate\Support\Facades\Auth::user()->name }}
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        @endguest
                    </div>
                </div>
            </div>
        </header>
        <main class="flex-shrink-0 mb-3">
            <div class="container">
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <span class="material-icons">check_circle</span>
                    <div class="ps-2">Boostrap 5 is working using laravel 8 mix!</div>
                </div>

                <ul>
                    <li class="roboto-black">Almost before we knew it, we had left the ground.</li>
                    <li class="roboto-black-italic">Almost before we knew it, we had left the ground.</li>
                    <li class="roboto-bold">Almost before we knew it, we had left the ground.</li>
                    <li class="roboto-bold-italic">Almost before we knew it, we had left the ground.</li>
                    <li class="roboto-italic">Almost before we knew it, we had left the ground.</li>
                    <li class="roboto-light">Almost before we knew it, we had left the ground.</li>
                    <li class="roboto-light-italic">Almost before we knew it, we had left the ground.</li>
                    <li class="roboto-medium">Almost before we knew it, we had left the ground.</li>
                    <li class="roboto-medium-italic">Almost before we knew it, we had left the ground.</li>
                    <li class="roboto-regular">Almost before we knew it, we had left the ground.</li>
                    <li class="roboto-thin">Almost before we knew it, we had left the ground.</li>
                    <li class="roboto-thin-italic">Almost before we knew it, we had left the ground.</li>
                </ul>
            </div>
        </main>
        <footer class="footer mt-auto py-3 bg-light border-top">
            <div class="container">
                <span class="text-muted">Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</span>
            </div>
        </footer>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
