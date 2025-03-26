<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>@yield('titulo') - Proyecto 5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{asset('css/estilo.css') }}" rel="stylesheet">
</head>

<body>
    <x-nav />
    <div class="text-center p-4 m-4">
        <h1>Videojuegos Trassierra</h1>
    </div>


    @yield('contenido')

    <footer class="py-5 text-center">
        <div class="d-flex flex-column flex-sm-row justify-content-center py-4 my-4">
            <p class="ms-3 fs-6 fw-bold">&copy; 2025 Piedad García - IES Trassierra.</p>
            <ul class="list-unstyled d-flex flex-sm-row justify-content-center mx-5">
                <li class="ms-3 fs-6"><a class="link-body-emphasis" href="https://x.com/"><i
                            class="bi bi-twitter"></i></a></li>
                <li class="ms-4 fs-6"><a class="link-body-emphasis" href="https://www.instagram.com/"><i
                            class="bi bi-instagram"></i></a></li>
                <li class="ms-4 fs-6"><a class="link-body-emphasis" href="https://www.facebook.com/"><i
                            class="bi bi-facebook"></i></a></li>
            </ul>
        </div>
    </footer>
</body>

</html>
