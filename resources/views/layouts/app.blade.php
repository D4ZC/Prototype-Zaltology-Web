<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!--Con esta directiva nos permite mandar a llamar el archivo head en partials -->
    @include('layouts.partials.head')
</head>
<body>
    <div id="app">
        @include('layouts.partials.nav')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
