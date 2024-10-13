<?php

$numero = 5;
$cadena = "5";

// Comparación con ==
if ($numero == $cadena) {
    echo "Con == El número y la cadena son considerados iguales <br>";
} else {
    echo "== hace referencia al valor y === hace referencia al tipo <br>";
}

// Comparación con ===
if ($numero === $cadena) {
    echo "== hace referencia al valor y === hace referencia al tipo <br>";
} else {
    echo "Con === El número y la cadena son considerados diferentes <br>";
}
?>
