<?php
/*21.- Declara una variable de cadena y manipúlala (mayúsculas, minúsculas).*/

$texto = "Probando mayusculas y minusculas"; 


$textoMayusculas = strtoupper($texto);


$textoMinusculas = strtolower($texto);

echo "Texto original: $texto<br>";
echo "Texto en mayúsculas: $textoMayusculas<br>";
echo "Texto en minúsculas: $textoMinusculas<br>";
?>
