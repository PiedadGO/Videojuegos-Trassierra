<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <!-- Botón para dispositivos pequeños -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Menú de navegación">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenedor del menú -->
        <div class="collapse navbar-collapse d-flex flex-wrap" id="navbarNav">
            <div class="container nav me-auto">
                <a href="{{ route('inicio') }}"
                    class="d-flex align-items-center mb-2 me-3 mb-lg-0 text-white text-decoration-none">
                    <img src="{{ asset('images/game_crush.jpg') }}" alt="Logo" width="auto" height="40"></a>
                <ul class="navbar-nav">
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
                        <a class="nav-link border-end border-2 px-3"
                            href="{{ route('videojuego.edit.select') }}">Editar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border-end border-2 px-3" href="{{ route('videojuego.delete.select') }}">Borrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border-end border-2 px-3" href="{{ route('generos') }}">Géneros</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link px-3" href="{{ route('sobre-nosotros') }}">Sobre
                            nosotros</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link border-end border-2 px-3" href="{{ route('usuario.login') }}">Iniciar sesión</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link px-3" href="{{ route('usuario.register') }}">Registrar usuario</a>
                    </li>

                </ul>

                </ul>

            </div>
</nav>
