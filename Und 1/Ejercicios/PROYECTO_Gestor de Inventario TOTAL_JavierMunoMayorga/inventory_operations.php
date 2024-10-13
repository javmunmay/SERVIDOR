<?php

// Función para obtener la diferencia de productos entre inventario y proveedor
function obtenerDiferenciasInventario($inventario, $proveedor) {
    $productos_inventario = array_column($inventario, 'producto');
    $productos_proveedor = array_column($proveedor, 'producto');
    return array_diff($productos_inventario, $productos_proveedor);
}

// Función para unir los inventarios
function unirInventarios($inventario_actual, $proveedor_a, $proveedor_b) {
    return array_merge($inventario_actual, $proveedor_a, $proveedor_b);
}

// Función para contar productos por categorías
function contarProductosPorCategoria($inventario) {
    $categorias = array_column($inventario, 'categoria');
    return array_count_values($categorias);
}

// Función para ordenar el inventario por precio
function ordenarPorPrecio($inventario) {
    $precios = array_column($inventario, 'precio');
    sort($precios);
    $array_ordenado = array();
    foreach ($precios as $precio) {
        foreach ($inventario as $elemento) {
            if ($elemento['precio'] == $precio) {
                $array_ordenado[] = $elemento;
                break;
            }
        }
    }
    return $array_ordenado;
}

// Función para eliminar productos duplicados y promediar precios
function eliminarDuplicadosYPromediar($inventario) {
    $resultadoProductosEliminados = [];
    foreach ($inventario as $item) {
        $clave = $item['producto'] . '|' . $item['categoria'];

        if (!isset($resultadoProductosEliminados[$clave])) {
            $resultadoProductosEliminados[$clave] = [
                'producto' => $item['producto'],
                'categoria' => $item['categoria'],
                'total_precio' => 0,
                'total_cantidad' => 0,
            ];
        }

        $resultadoProductosEliminados[$clave]['total_precio'] += $item['precio'] * $item['cantidad'];
        $resultadoProductosEliminados[$clave]['total_cantidad'] += $item['cantidad'];
    }

    foreach ($resultadoProductosEliminados as $clave => $datos) {
        $resultadoProductosEliminados[$clave]['precio_promedio'] = $datos['total_precio'] / $datos['total_cantidad'];
        unset($resultadoProductosEliminados[$clave]['total_precio']);
    }

    return array_values($resultadoProductosEliminados); // Reindexar el array
}

// Función para dividir el inventario en secciones
function dividirEnSecciones($inventario, $tamaño_seccion = 2) {
    return array_chunk($inventario, $tamaño_seccion);
}

// Función para generar un informe final del inventario
function generarInformeInventario($inventario) {
    $informe_inventario = [];
    foreach ($inventario as $item) {
        $informe_inventario[$item['producto']] = [
            "precio" => $item['precio_promedio'],
            "cantidad" => $item['total_cantidad'],
            "categoria" => $item['categoria'],
        ];
    }
    return $informe_inventario;
}

?>

