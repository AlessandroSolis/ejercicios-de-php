<?php
//el total por pagar cada uno de los primeros 10 clientes que llegan a una llanteria, si el precio de cada llanta es de $80 si se compran menos de 4 llantas y de $60 si se compran 4 o mas.

// Definimos el precio de la llanta para cada cantidad
$precio_unitario = 80;
$precio_oferta = 60;

// Definimos un array para almacenar los totales por cliente
$totales_por_cliente = array();

// Iteramos para los primeros 10 clientes
for ($i = 1; $i <= 10; $i++) {
    
    // Pedimos al usuario que ingrese la cantidad de llantas
    $cantidad_llantas = (int)readline("Ingrese la cantidad de llantas para el cliente " . $i . ": ");
    
    // Calculamos el precio total por cliente
    if ($cantidad_llantas < 4) {
        $precio_total = $cantidad_llantas * $precio_unitario;
    } else {
        $precio_total = $cantidad_llantas * $precio_oferta;
    }
    
    // Almacenamos el total por cliente en el array
    $totales_por_cliente[$i] = $precio_total;
}

// Mostramos los totales por cliente
foreach ($totales_por_cliente as $cliente => $total) {
    echo "El total a pagar para el cliente " . $cliente . " es: $" . $total . "\n";
}

?>
