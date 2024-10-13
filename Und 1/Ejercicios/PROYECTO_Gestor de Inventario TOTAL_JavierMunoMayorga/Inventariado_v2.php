<?php

require_once 'inventory_operations.php';


$inventario_actual = [
    ["producto" => "Teclado", "precio" => 20, "categoria" => "Electrónica", "cantidad" => 4],
    ["producto" => "Ratón", "precio" => 15, "categoria" => "Electrónica", "cantidad" => 10],
    ["producto" => "Monitor", "precio" => 100, "categoria" => "Electrónica", "cantidad" => 3],
    ["producto" => "Silla", "precio" => 80, "categoria" => "Muebles", "cantidad" => 5],
];

$proveedor_a = [
    ["producto" => "Ratón", "precio" => 10, "categoria" => "Electrónica", "cantidad" => 20],
    ["producto" => "Lámpara", "precio" => 25, "categoria" => "Iluminación", "cantidad" => 15],
    ["producto" => "Escritorio", "precio" => 50, "categoria" => "Muebles", "cantidad" => 2],
];

$proveedor_b = [
    ["producto" => "Monitor", "precio" => 92, "categoria" => "Electrónica", "cantidad" => 8],
    ["producto" => "Auriculares", "precio" => 30, "categoria" => "Electrónica", "cantidad" => 20],
    ["producto" => "Lámpara", "precio" => 20, "categoria" => "Iluminación", "cantidad" => 5],
];

// Llamar a las funciones definidas en la biblioteca
$diferencias_proveedor_a = obtenerDiferenciasInventario($inventario_actual, $proveedor_a);
$diferencias_proveedor_b = obtenerDiferenciasInventario($inventario_actual, $proveedor_b);
$inventario_unido = unirInventarios($inventario_actual, $proveedor_a, $proveedor_b);
$conteo_categorias = contarProductosPorCategoria($inventario_unido);
$inventario_ordenado = ordenarPorPrecio($inventario_unido);
$inventario_sin_duplicados = eliminarDuplicadosYPromediar($inventario_unido);
$secciones_inventario = dividirEnSecciones($inventario_sin_duplicados);
$informe_inventario = generarInformeInventario($inventario_sin_duplicados);

// Mostrar resultados
echo "<pre>Diferencias con Proveedor A: "; print_r($diferencias_proveedor_a);echo "</pre>";
echo "<pre>Diferencias con Proveedor B: ";print_r($diferencias_proveedor_b);echo "</pre>";
echo "<pre>Inventario Unido sin eliminar duplicados: ";print_r($inventario_unido);echo "</pre>";
echo "<pre>Conteo de productos por categoría: ";print_r($conteo_categorias);echo "</pre>";
echo "<pre>Inventario Único eliminando duplicados, sumando cantidades y promediando precios: ";print_r($inventario_sin_duplicados);echo "</pre>";
echo "<pre>Secciones del Inventario: ";print_r($secciones_inventario);echo "</pre>";
echo "<pre>Informe del Inventario final: ";print_r($informe_inventario);echo "</pre>";

?>
