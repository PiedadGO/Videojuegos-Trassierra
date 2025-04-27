<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a href="{{ route('inicio') }}" class="navbar-brand">
            <img src="{{ asset('images/game_crush.jpg') }}" alt="Logo" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Menú de navegación">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Navegación izquierda -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link border-end border-2 px-3" href="{{ route('inicio') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border-end border-2 px-3" href="{{ route('mostrar-videojuegos') }}">Ver</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border-end border-2 px-3" href="{{ route('anadir') }}">Añadir</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border-end border-2 px-3" href="{{ route('videojuego.edit.select') }}">Editar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border-end border-2 px-3"
                        href="{{ route('videojuego.delete.select') }}">Borrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border-end border-2 px-3" href="{{ route('generos') }}">Géneros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ route('sobre-nosotros') }}">Sobre nosotros</a>
                </li>
            </ul>

            <!-- Navegación derecha -->
            <ul class="navbar-nav ms-auto my-auto">
                @auth
                    <li class="nav-item border-end border-2 px-3 my-auto ">
                        <p class="my-auto">{{ Auth::user()->name }}</p>
                    </li>
                    <li class="nav-item mx-3 my-auto">
                        <form method="POST" action="{{ route('usuario.logout') }}" class="my-auto">
                            @csrf
                            <button type="submit" class="logout btn btn-outline-secondary btn-sm">Cerrar sesión</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item my-auto">
                        <a class="nav-link border-end border-2 px-3 my-auto" href="{{ route('usuario.login') }}">Iniciar sesión</a>
                    </li>
                    <li class="nav-item ms-auto">
                        <a class="nav-link px-3 my-auto" href="{{ route('usuario.register') }}">Registrar usuario</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
