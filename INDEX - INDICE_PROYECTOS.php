<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GestorProyect.com</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script> <!-- Enlace al archivo JavaScript -->
    <style>
        /* Estilos adicionales para el menú desplegable */
        .dropdown {
            position: relative;
            display: inline-block; /* Cambiado de 'block' a 'inline-block' para alinear */
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            min-width: 160px; /* Añadido para establecer un ancho mínimo */
            text-align: left; /* Añadido para alinear el texto a la izquierda */
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h2><a href="inicio.php" target="dynamicContent" style="color: yellow; text-decoration: none;">GestorProyect.com</a></h2>
        <div>
            <a href="USUARIO.html" target="dynamicContent">USUARIO</a>
            <a href="FOROS.html" target="dynamicContent">FOROS</a>
            <a href="PROYECTOS.html" target="dynamicContent">PROYECTOS</a>
            <div class="dropdown"> <!-- Cambiado a 'dropdown' -->
                <a href="#" class="dropbtn">NUESTRA EMPRESA</a>
                <div class="dropdown-content">
                    <a href="Visión.html" target="dynamicContent">Visión</a>
                    <a href="Misión.html" target="dynamicContent">Misión</a>
                </div>
            </div>
        </div>
    </div>
    <div class="navbarPHONE">
        <button class="menu-btn">&#9776; GestorProyect.com</button>
        <div class="menu-items">
            <a href="USUARIO.html" target="dynamicContent">USUARIO</a>
            <a href="FOROS.html" target="dynamicContent">FOROS</a>
            <a href="PROYECTOS.html" target="dynamicContent">PROYECTOS</a>
            <div class="dropdown">
                <button class="dropbtn">NUESTRA EMPRESA &#9662;</button>
                <div class="dropdown-content">
                    <a href="Visión.html" target="dynamicContent">Visión</a>
                    <a href="Misión.html" target="dynamicContent">Misión</a>
                </div>
            </div>
        </div>
    </div>
    <iframe name="dynamicContent" src="inicio.php"></iframe>
    <footer>
        <!-- Pie de página -->
        <div class="Contador De Vistas">
            <img style="border: 0px solid; display: inline;" alt="contador de visitas" src="https://websmultimedia.com/contador-de-visitas.php?id=15455"> </a>
        </div>
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
        <div class="contador">
            <p>Contador de visitas: 
                <?php include_once "contador.php"; ?>
            </p>
            <p>Derechos de autor &copy; 2024 - GestorProyect.com</p>
        </div>
    </footer>
</body>
</html>
