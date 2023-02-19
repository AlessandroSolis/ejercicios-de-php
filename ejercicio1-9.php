//dando el siguiente array manzana, banaba fresa agregando 3 frutas mas al arreglo y eliminando el valor banana del arreglo

<?php
$frutas = array('manzana', 'banaba', 'fresa');

$frutas[] = 'melon';
$frutas[] = 'jocotes';
$frutas[] = 'mango';

if (($key = array_search('banaba', $frutas)) !== false) {
    unset($frutas[$key]);
}

print_r($frutas);
?>
