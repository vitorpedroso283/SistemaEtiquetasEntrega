<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etiquetas de Entrega</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>

    <x-header />

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <x-footer />

    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>