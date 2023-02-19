//Elaborar un programa, que permita el ingreso de 100 numeros enteros. el programa debe sumar todos los numeros que sean multiplos de 3

<?php

echo "Ingrese 100 números enteros:\n";
$nums = readline();
$nums = explode(" ", $nums);

$suma_multiplos_3 = 0;


foreach ($nums as $num) {
    
   
    if ($num % 3 == 0) {
        $suma_multiplos_3 += $num;
    }
}


echo "La suma de los números que son múltiplos de 3 es: " . $suma_multiplos_3 . "\n";

?>
