<?php
/*22.- Convierte un número en una cadena y una cadena en un número.
*/
$numero = 22;
$numeroACadena = strval($numero); 
echo "El número transformado en cadena es: " . $numeroACadena . "<br>";


$cadena = "23";
$cadenaANumero = intval($cadena);
echo "La cadena transformado en número es: " . $cadenaANumero;
?>
