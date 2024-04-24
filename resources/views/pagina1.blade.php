<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Colorida y Elegante</title>
    <!-- Agregar Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #f8f9fa; /* Color de fondo del cuerpo */
        }
        .container {
            margin-top: 50px; /* Espacio superior */
        }
        .card {
            border: none; /* Sin borde en las tarjetas */
            border-radius: 15px; /* Bordes redondeados */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }
        .card-header {
            background-color: #6c5b7b; /* Color de fondo del encabezado de la tarjeta */
            color: white; /* Color del texto del encabezado de la tarjeta */
            border-radius: 15px 15px 0 0; /* Bordes redondeados solo arriba */
        }
        .card-body {
            background-color: #edf6f9; /* Color de fondo del cuerpo de la tarjeta */
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Sección 1
                    </div>
                    <div class="card-body">
                        Contenido de la Sección 1
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Sección 2
                    </div>
                    <div class="card-body">
                        Contenido de la Sección 2
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Agregar Bootstrap JS (opcional, solo si necesitas componentes de JavaScript) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
