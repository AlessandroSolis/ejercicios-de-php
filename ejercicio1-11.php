//<?php
$total_salarios = 0;
$total_junior = 0;
$total_middle = 0;
$total_senior = 0;
    //es un valor constante 
define('RENTA', 0.10);
define('SEGURO', 0.03);
define('AFP', 0.07);

function calcular_descuentos($salario_mensual) {
    $renta = $salario_mensual * RENTA;
    $seguro = $salario_mensual * SEGURO;
    $afp = $salario_mensual * AFP;
    $total_descuentos = $renta + $seguro + $afp;
    $salario_liquido = $salario_mensual - $total_descuentos;
    $salario_anual = $salario_liquido * 12;
    return array($salario_liquido, $salario_anual);
}

// menor o igual
for ($i = 1; $i <= 10; $i++) {
    // rand para numeros aleatorios 
    $rol = rand(1, 3,);
    switch ($rol) {
        case 1:
            $salario = 600;
            $total_junior += $salario;
            break;
        case 2:
            $salario = 900;
            $total_middle += $salario;
            break;
        case 3:
            $salario = 1800;
            $total_senior += $salario;
            break;
    }
   
    list($salario_liquido, $salario_anual) = calcular_descuentos($salario);

    echo "Empleado $i:\n";
    echo "Salario mensual bruto: $" . $salario . "\n";
    echo "Salario mensual neto: $" . $salario_liquido . "\n";
    echo "Salario anual neto: $" . $salario_anual . "\n\n";

    $total_salarios += $salario_liquido;
}

echo "Total de salarios:\n";
echo "Junior: $" . $total_junior . "\n";
echo "Middle: $" . $total_middle . "\n";
echo "Senior: $" . $total_senior . "\n\n";
echo "Total general: $" . $total_salarios;
?>
