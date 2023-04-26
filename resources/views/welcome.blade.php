<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Mi Menú con Bootstrap - Modo Oscuro</title>
    <!-- Agrega los enlaces de los archivos de Bootstrap CSS y JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Agrega un estilo personalizado para el modo oscuro -->
    <style>
        body {
            background-color: #343a40; /* Cambia el color de fondo del body a oscuro */
        }

        .navbar {
            background-color: #212529; /* Cambia el color de fondo de la navbar a oscuro */
        }

        .navbar-light .navbar-brand,
        .navbar-light .navbar-nav .nav-link {
            color: #f8f9fa; /* Cambia el color del texto de la navbar a claro */
        }

        .navbar-light .navbar-brand:hover,
        .navbar-light .navbar-nav .nav-link:hover {
            color: #007bff; /* Cambia el color del texto de la navbar al hacer hover a azul */
        }

        .navbar-toggler-icon {
            filter: invert(1); /* Invierte el color del icono del botón de hamburguesa */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="#">Mi Menú</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('docentes.show')}}">Enlace 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('docentesMat.show')}}">Enlace 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Enlace 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Enlace 4</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Agrega aquí el contenido de tu página web -->

    <!-- Agrega los enlaces de los archivos de Bootstrap jQuery y Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
</body>

</html>
