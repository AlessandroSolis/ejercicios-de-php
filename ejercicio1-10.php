//  un obrero necesita calcular su salario mensual el cual obtiene de la siguiente manera si trabaja 40 horas o menos se le paga $4por la hora. si trabaja mas de 40 horas se le paga $4 por cada una de las primeras 40 horas y 6$ por cada hora extra

<?php
$horas_trabajadas = 45;

$tarifa_horas_normales = 4;

$tarifa_horas_extra = 6;

switch (true) {
    case ($horas_trabajadas <= 40):
        $salario_mensual = $horas_trabajadas * $tarifa_horas_normales;
        break;
    case ($horas_trabajadas > 40):
        $horas_normales = 40;
        $horas_extra = $horas_trabajadas - $horas_normales;
        $salario_mensual = ($horas_normales * $tarifa_horas_normales) + ($horas_extra * $tarifa_horas_extra);
        break;
    default:
        $salario_mensual = 0;
}

echo "El salario mensual de Merlin es de $" . $salario_mensual . ".";
?>
