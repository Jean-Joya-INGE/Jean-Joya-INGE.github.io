<?php
// Archivo de texto donde se almacenará el contador de visitas
$archivo_contador = "contador.txt";

// Leer el valor actual del contador
$contador = file_get_contents($archivo_contador);

// Incrementar el contador
$contador++;

// Guardar el nuevo valor del contador
file_put_contents($archivo_contador, $contador);

// Mostrar el contador
echo "Visitas: " . $contador;
?>
