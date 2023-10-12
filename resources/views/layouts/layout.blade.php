<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <!-- copio il collegamento alla logica js della app -->
  @vite('resources/js/app.js')

</head>
<body>
    <header>
        @include('partials.navbar')
    </header>
    <main>
        @yield('main-content')
    </main>
    <footer>
        @yield('footer-content')
    </footer>
    
</body>
</html>