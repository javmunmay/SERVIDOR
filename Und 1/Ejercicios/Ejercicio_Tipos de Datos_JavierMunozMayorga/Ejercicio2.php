<?php 
/* 2.- Declara una cadena y realiza operaciones básicas como obtener su longitud, 
convertirla a mayúsculas y concatenarla con otra cadena.*/

    
    
    $cadena = "Hola Mundo";
    $cadena2 = " este es el ejercicio 2";


    $longitudCadena = strlen($cadena);
    echo "<p> La longitud de la cadena '$cadena' es: $longitudCadena</p><br>"; 

    $cadenaMayus = strtoupper($cadena);
    echo"<p>La cadena '$cadena' en MAYÚSULAS es: $cadenaMayus</p><br>";

    $cadenaConcatenada = $cadena;
    $cadenaConcatenada .= $cadena2;
    echo"<p>La cadena '$cadena' y '$cadena2' concatenada se ven así: $cadenaConcatenada</p><br>";
    

    
    
    
    ?>