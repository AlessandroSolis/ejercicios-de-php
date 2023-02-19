//un programa que permita imprimir en pantalla los numeros del 1 al 50 excepto el 25

<?php

for ($i = 1; $i <= 50; $i++) {
    
    if ($i == 25) {
        continue;
    }
    
    echo $i . "\n";
}

?>
