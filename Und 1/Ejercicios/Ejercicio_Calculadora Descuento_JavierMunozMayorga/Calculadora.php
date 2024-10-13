<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Calculadora:</title>
</head>

<body>

    <h1>Calculadora De Precios:</h1>

    <form action="" method="POST">
        <label for="nombre">Nombre del producto:</label>
        <input type="text" id="nombre_producto" name="nombre_producto" required><br><br>

        <label for="number">Cantidad del producto:</label>
        <input type="number" id="cantidadProducto" name="cantidadProducto" required><br><br>

        <label for="number">Precio del producto:</label>
        <input type="number" id="precioProducto" name="precioProducto" required><br><br>

        <input type="submit" value="Calcular precio">
        <input type="reset" value="Reset">
    </form>


</body>

</html>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Valores por defecto:
    $nombreProducto = "Camiseta"; // String Nombre del producto
    // Añado este array para incluir otro tipo de variable posible al codigo
    $productos = array("Camiseta", "Pantalón", "Zapatos"); // Array Lista de productos

    $cantidadProducto = 3; // Entero Cantidad de productos
    $precioProducto = 19.99; // Float Precio del producto

    //El descuento puede tener un codigo (así añado mas variables)
    $codigoDescuento = null; // Null El Código de descuento es null



    
    $nombre_producto = $_POST['nombre_producto']; // String que recibe el nombre de producto del formulario
    $cantidadProducto = (int)$_POST['cantidadProducto']; // int que recibe la unidad del producto del formulario
    $precioProducto = (float)$_POST['precioProducto']; // float que recibe el precio por producto del formulario

    if ($cantidadProducto <= 0 || $precioProducto <= 0) {
        echo "Error: La cantidad y el precio deben ser mayores a cero.";
        return;
    }    



    $totalAPagar = $precioProducto*$cantidadProducto; // Float porque recibe el resultado de la multiplicacion para saber el precio
    
    
    echo "<h2>Total de la compra:</h2>";
    echo "Producto seleccionado: " . htmlspecialchars($nombre_producto) . "<br>"; //Apuntes: htmlspecialchars lo he usado para que no haya problemas con los caracteres especiales que se introduzcan en el html
    echo "Unidades seleccionadas: " . $cantidadProducto . "<br>";
    echo "Subtotal: " . number_format($totalAPagar,2) . "€ <br>";
    echo "------------------------<br>";
    if ($totalAPagar>50) {
        $totalConDescuento = $totalAPagar-($totalAPagar*0.10); // Este es otro float como $totalAPagar

        echo "Total a pagar: ".number_format($totalConDescuento,2). "€ <br>";
        
        echo"Descuento del 10% Aplicado";
    }else {

        $descuentoAplicado = false; // Boolean Indica si se aplicó el descuento

        echo "Total a pagar: ".number_format($totalAPagar,2). "€ <br>";
        $diferenciaPrecio = 50.01 - $totalAPagar;
        

        echo"Seleccione un artículo de " .number_format($diferenciaPrecio,2). "€ para recibir un descuento del 10%";
    }

    if ($totalAPagar > 100) {
        echo "<br><strong>Compra Grande:</strong> ¡Has realizado una compra grande!";
    } else {
        echo "<br><strong>Compra Pequeña:</strong> No has realizado una compra grande.";
    }
    

}



?>