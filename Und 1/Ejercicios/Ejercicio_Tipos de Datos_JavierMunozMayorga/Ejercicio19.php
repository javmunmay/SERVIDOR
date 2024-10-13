<?php
/*19.- Realiza una operación binaria y muestra el resultado.
*/

$bin1 = '110'; // 6 en decimal
$bin2 = '101'; // 5 en decimal

//Apuntes: Aqui se convierte los numeros binarios en decimal
$resultado = decbin(bindec($bin1) + bindec($bin2));

echo "El resultado de sumar $bin1 y $bin2 en binario es: $resultado";
?>
