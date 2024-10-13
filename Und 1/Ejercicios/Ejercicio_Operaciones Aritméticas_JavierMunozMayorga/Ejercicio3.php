<?php

$numero = 10;

// Post-incremento
echo "Valor original: $numero <br>";
echo "Post-incremento (se incrementa después): " . $numero++ . "<br>";
echo "Valor después del post-incremento: $numero <br><br>";

//Le ponemos el valor inicial para hacer un reset
$numero = 10;

// Pre-incremento
echo "Valor original: $numero <br>";
echo "Pre-incremento (se incrementa antes): " . ++$numero . "<br>";
echo "Valor después del pre-incremento: $numero <br>";

?>