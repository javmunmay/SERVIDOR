<?php
/*15.- Declara variables con nombres significativos y utiliza buenas prácticas para nombrarlas.
 */

$numeroClientes = 10; 
$precioProducto = 7.99; 
$haCompradoMasDe50E = true; 

echo "Número de clientes: $numeroClientes<br>";
echo "Precio del producto: $$precioProducto<br>";
echo "¿El usuario ha comprado mas de 50€? " . ($haCompradoMasDe50E ? 'Sí' : 'No') . "<br>";



?>