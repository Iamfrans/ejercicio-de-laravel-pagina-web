<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Gamer con Luces RGB</title>
    <!-- Agregar Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #0f0f0f; /* Color de fondo oscuro */
            color: #ffffff; /* Color del texto */
        }
        .container {
            margin-top: 50px; /* Espacio superior */
        }
        .jumbotron {
            background-color: #1a1a1a; /* Color de fondo de la jumbotron */
            color: #ffffff; /* Color del texto de la jumbotron */
        }
        .btn-primary {
            background-color: #ff6600; /* Color de fondo del botón */
            border-color: #ff6600; /* Color del borde del botón */
        }
        .btn-primary:hover {
            background-color: #ff8500; /* Cambio de color al pasar el ratón sobre el botón */
            border-color: #ff8500; /* Cambio de color del borde al pasar el ratón sobre el botón */
        }
        .navbar {
            background-color: #1a1a1a; /* Color de fondo de la barra de navegación */
        }
        .navbar-brand {
            color: #ffffff; /* Color del texto del enlace de la barra de navegación */
        }
        .navbar-brand:hover {
            color: #ff6600; /* Cambio de color al pasar el ratón sobre el enlace de la barra de navegación */
        }
        .card {
            background-color: #1a1a1a; /* Color de fondo de las tarjetas */
            color: #ffffff; /* Color del texto de las tarjetas */
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Página Gamer</a>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1 class="display-4">¡Bienvenido a la Página Gamer!</h1>
        <p class="lead">Aquí encontrarás contenido emocionante relacionado con el mundo de los videojuegos.</p>
        <hr class="my-4">
        <p>Haz clic en el botón de abajo para comenzar tu aventura.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Explorar</a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Juego del Mes</h5>
                        <p class="card-text">Descubre cuál es el juego del mes y prepárate para una experiencia épica.</p>
                        <a href="#" class="btn btn-primary">Ver Más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Noticias de Última Hora</h5>
                        <p class="card-text">Mantente actualizado con las últimas noticias y novedades del mundo gamer.</p>
                        <a href="#" class="btn btn-primary">Leer Más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Agregar Bootstrap JS (opcional, solo si necesitas componentes de JavaScript) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
