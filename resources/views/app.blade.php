<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    @vite ('resources/js/app.js')
</head>
<body>
    {{-- @include('partials.header')  =====================HEADER=======================  --}}

    <main>
        @yield('content')
    </main>

    {{-- @include('partials.footer')     ==================FOOTER=================== --}}
</body>
</html>