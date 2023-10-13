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
    {{-- linea blu  --}}
    <section id="linea-blu">
        inserisci info della linea blu
    </section>

    <header class="container">
        @include('partials.header')
    </header>

    {{-- jumbothrone --}}
    <section class="debug">
        <img src="public\images\jumbotron.jpg" alt="">
    </section>

    <main class="container">
        @yield('main-content')
    </main>

    <footer class="footer-zone py-3">
        @include('partials.footer')
    </footer>
    
</body>
</html>