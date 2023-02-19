// un vendedor ha hecho una n ventas (este valor lo pedir) y desea saber cuantas de estas fueron de $400 o menos; cuantas fueron mayores a $400 pero inferior a $800; y cuantas de $800 o superior a tal cantidad.

<?php

$num_ventas = (int)readline("Ingrese el número de ventas realizadas por el vendedor: ");

$cant_menor_igual_400 = 0;
$cant_entre_400_y_800 = 0;
$cant_mayor_igual_800 = 0;


for ($i = 1; $i <= $num_ventas; $i++) {
    
    
    $monto_venta = (float)readline("Ingrese el monto de la venta #" . $i . ": ");
    

    if ($monto_venta <= 400) {
        $cant_menor_igual_400++;
    } elseif ($monto_venta > 400 && $monto_venta < 800) {
        $cant_entre_400_y_800++;
    } else {
        $cant_mayor_igual_800++;
    }
}

echo "De las " . $num_ventas . " ventas realizadas:\n";
echo "- " . $cant_menor_igual_400 . " fueron de $400 o menos.\n";
echo "- " . $cant_entre_400_y_800 . " fueron mayores a $400 pero inferior a $800.\n";
echo "- " . $cant_mayor_igual_800 . " fueron de $800 o superior a tal cantidad.\n";

?>
