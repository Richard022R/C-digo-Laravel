<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">CODIGO-LARAVEL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item {{ setActivo('home') }}">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item {{ setActivo('nosotros') }}">
                <a class="nav-link" href="nosotros">Nosotros</a>
            </li>
            <li class="nav-item {{ setActivo('servicios') }}">
                <a class="nav-link" href="servicios">Servicios</a>
            </li>
            <li class="nav-item {{ setActivo('contacto') }}">
                <a class="nav-link" href="contacto">Contactos</a>
            </li>
        </ul>
    </div>
</nav>
@yield('content')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>