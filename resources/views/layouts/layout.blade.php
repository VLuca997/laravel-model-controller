<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        @include('partials.main-header')
    </header>

    <main><!--MAIN CONTENT-->
        <div class="container">
            {{-- home.blade.php --}}
            @yield('main-content')
        

        </div>
    </main>

</body>
</html>