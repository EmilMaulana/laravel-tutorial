<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    <footer class="m-auto justify-items-center">
        <p>&copy; 2024 Teknik Rekayasa</p>
    </footer>

</body>

</html>
