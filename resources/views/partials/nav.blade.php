<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">CODIGO-LARAVEL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ setActivo('home') }}">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item {{ setActivo('nosotros') }}">
                <a class="nav-link" href="/nosotros">Nosotros</a>
            </li>
            <li class="nav-item {{ setActivo('servicios.create') }}">
                <a class="nav-link" href="/servicios">Servicios</a>
            </li>
            <li class="nav-item {{ setActivo('contacto') }}">
                <a class="nav-link" href="/contacto">Contactos</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                </li>
            @endguest
        </ul>
    </div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
