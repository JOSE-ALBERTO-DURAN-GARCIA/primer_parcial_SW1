<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">



        <!-- ICONS -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
        
        @vite('resources/css/app.css')
        <title>Inicio de Sesion - Diagramador</title>
</head>
<body>
    <main class="auth__container">
        <section class="auth__content">
            <div class="mb-4 text-center">
                @yield('header')
            </div>
        </section>
        <section class="auth__logo">
            <h1>software colaborativo</h1>
        </section>
    </main>
</body>
</html>