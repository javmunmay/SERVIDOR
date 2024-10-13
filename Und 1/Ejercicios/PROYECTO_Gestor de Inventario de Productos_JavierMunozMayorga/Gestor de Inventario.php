<?php 

$inventario_actual = [
    ['producto' => 'Teclado', 'precio' => 20, 'categoria' => 'Electrónica', 'cantidad' => 4],
    ['producto' => 'Ratón', 'precio' => 15, 'categoria' => 'Electrónica', 'cantidad' => 10],
    ['producto' => 'Monitor', 'precio' => 100, 'categoria' => 'Electrónica', 'cantidad' => 3],
    ['producto' => 'Silla', 'precio' => 80, 'categoria' => 'Muebles', 'cantidad' => 5]
];

$proveedor_A = [
    ['producto' => 'Ratón', 'precio' => 10, 'categoria' => 'Electrónica', 'cantidad' => 20],
    ['producto' => 'Lámpara', 'precio' => 25, 'categoria' => 'Iluminación', 'cantidad' => 15],
    ['producto' => 'Escritorio', 'precio' => 50, 'categoria' => 'Muebles', 'cantidad' => 2]
];

$proveedor_B = [
    ['producto' => 'Monitor', 'precio' => 92, 'categoria' => 'Electrónica', 'cantidad' => 8],
    ['producto' => 'Auriculares', 'precio' => 30, 'categoria' => 'Electrónica', 'cantidad' => 20],
    ['producto' => 'Lámpara', 'precio' => 20, 'categoria' => 'Iluminación', 'cantidad' => 5]
];




//Comparar Inventarios
function comparar_inventarios($inventario_actual, $proveedor) {
    return array_udiff($inventario_actual, $proveedor, function($a, $b) {
        return strcmp($a['producto'], $b['producto']);
    });
}

$diferencias_A = comparar_inventarios($inventario_actual, $proveedor_A);
$diferencias_B = comparar_inventarios($inventario_actual, $proveedor_B);

echo "<strong>Diferencias con el proveedor A: <br></strong>";
echo "<pre>";
print_r($diferencias_A);
echo "</pre><br><br>"; 
echo "--------------------------- <br><br>";

echo "<strong>Diferencias con el proveedor B: <br></strong>";
echo "<pre>";
print_r($diferencias_B);
echo "</pre><br><br>";
echo "--------------------------- <br><br>";





//Unir y Organizar los Inventarios
$inventario_total = array_merge($inventario_actual, $proveedor_A, $proveedor_B);

echo "<strong>Inventario total combinado: <br></strong>";
foreach ($inventario_total as $producto) {
    echo "Producto: {$producto['producto']} - Precio: {$producto['precio']} - Categoría: {$producto['categoria']} - Cantidad: {$producto['cantidad']} <br>";
}
echo "<br>";
echo"*Aparecen duplicados aquellos productos que tienen precio diferente";
echo "<br>---------------------------<br><br>";





//Eliminar Productos Duplicados
$inventario_sin_duplicados = array_unique($inventario_total, SORT_REGULAR);

echo "<strong>Inventario sin duplicados: <br></strong><pre>";
print_r($inventario_sin_duplicados);
echo "</pre><br><br>";




//Contar Productos por Categoría
$categorias = array_column($inventario_total, 'categoria');
$conteo_categorias = array_count_values($categorias);

echo "<strong>Conteo de productos por categoría: <br></strong>";
foreach ($conteo_categorias as $categoria => $cantidad) {
    echo "$categoria: $cantidad productos <br>";
}
echo "<br><br>";





//Ordenar Productos por Precio
usort($inventario_total, function($a, $b) {
    return $a['precio'] <=> $b['precio'];
});

echo "<strong>Inventario ordenado por precio: <br></strong>";
foreach ($inventario_total as $producto) {
    echo "Producto: {$producto['producto']} - Precio: {$producto['precio']} <br>";
}
echo "<br><br>";






//Dividir el Inventario en Secciones
$inventario_en_secciones = array_chunk($inventario_total, 2);

echo "<strong>Inventario dividido en secciones de 2 elementos: <br></strong><pre>";
print_r($inventario_en_secciones);
echo "</pre><br><br>";






//Buscar un Producto en el Inventario
function buscar_producto($inventario, $nombre) {
    return array_filter($inventario, function($producto) use ($nombre) {
        return $producto['producto'] === $nombre;
    });
}

$producto_buscado = buscar_producto($inventario_total, 'Ratón');

echo "<strong>Producto buscado ('Ratón'): <br></strong>";
print_r($producto_buscado); echo"<br><br>";







//Reindexar el Inventario
$inventario_reindexado = array_values($inventario_total);

echo "<strong>Inventario reindexado: <br></strong><pre>";
print_r($inventario_reindexado);
echo "</pre><br><br>";





//Generar un Informe del Inventario
function generar_informe($inventario) {
    echo "<strong>Informe del inventario: </strong><br>";
    foreach ($inventario as $producto) {
        echo"<br>";
        echo "Producto: {$producto['producto']}, Precio: {$producto['precio']}, Categoría: {$producto['categoria']}, Cantidad: {$producto['cantidad']} <br>";
    }
}

generar_informe($inventario_total);

echo"<br><br>";

?>