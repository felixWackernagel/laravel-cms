<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href={{ asset('css/app.css') }}>
    </head>
    <body class="mt-5">
        <div class="container">
            <div class="alert alert-success d-flex" role="alert">
                <span class="material-icons">check_circle</span>
                <span class="ps-2">Boostrap 5 is working using laravel 8 mix!</span>
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
            <div>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</div>
        </div>


        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
