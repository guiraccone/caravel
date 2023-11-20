<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css'])
</head>

<body>
    <nav class="navbar text-bg-info p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('site.home') }}">Caravel</a>
        </div>
    </nav>
    @yield('content')


    <div class="container">
        <footer class="py-3 my-4">
            <p class="text-center text-muted">&copy; 2023 Company, Inc</p>
        </footer>
    </div>
</body>

</html>
