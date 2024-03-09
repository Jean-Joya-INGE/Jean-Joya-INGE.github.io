<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php echo '<p>Hola Mundo</p>'; ?>
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
 </body>
</html>