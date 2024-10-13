<?php
$numero = 5;

//vamos a incrementarlo para que salga despues
echo"El valor inicial del numero es: $numero <br>";
echo"Aun no se ha incrementado poniendo los operadores ++ despues de la variable ".$numero++." <br>";   
echo"Ahora si que se ha implementado el +1 (++) de antes, el valor ahora vale: ".$numero." <br>";   
echo "En cambio si colocamos el ++ antes de la variable numero se sumara 1 al momento, se lo colocamos a el vamor $numero, aquí: ".++$numero." ";








$email = "user@example.com";
if (filter_var($email, 
FILTER_VALIDATE_EMAIL)) {
    echo "Correo válido";
} else {
    echo "Correo no válido";
}






?>