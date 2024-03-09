<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <style>
        body {
            background-color: #f0f0f0; /* Cambiar el color de fondo según sea necesario */
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .mensaje-bienvenida {
            font-size: 24px;
            color: #333; /* Cambiar el color del texto según sea necesario */
            padding: 20px;
            border-radius: 10px;
            background-color: #fff; /* Cambiar el color de fondo según sea necesario */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Agregar sombra al mensaje */
            max-width: 80%;
            margin: 50px auto;
        }
    </style>
</head>
<body>
<h2>INDICE_PROYECTOS</h2>
    <div class="mensaje-bienvenida">
        <h1>Bienvenido a mi página de inicio</h1>
        <p>¡Gracias por visitar esta página!</p>
    </div>
    <center><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/200px-HTML5_logo_and_wordmark.svg.png" height="300" width="300" /></center>
        <?php
// Inicio del tiempo de carga
$start_time = microtime(true);

// Tu código PHP para generar la página va aquí
// Por ejemplo:
// echo "<h1>Página de ejemplo</h1>";

// Fin del tiempo de carga
$end_time = microtime(true);

// Calcular el tiempo total de carga en milisegundos
$total_time = ($end_time - $start_time) * 1000;

// Imprimir el tiempo total de carga
echo "Tiempo de carga: " . round($total_time, 2) . " ms";
?>
    </div>
</body>
</html>

