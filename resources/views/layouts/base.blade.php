<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @stack('meta')
        <title>@yield('title')</title>

        @stack('pre-css')
        @vite('resources/css/app.css')
        @stack('addon-css')

    </head>
    <body id="body" class="bg-slate-100 dark:bg-slate-800">
        @include('layouts.components.navbar')

        <div class="container-fluid mx-auto min-h-screen">
            @yield('content')
            {{-- Hello World --}}
        </div>

        @include('layouts.components.footer')
    </body>
</html>
