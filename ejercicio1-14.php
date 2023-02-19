//Calculadora de propinas: Crea un programa en PHP que permita al usuario ingresar el total de una cuenta de restaurante y la calidad del servicio (excelente, bueno, regular, malo) y calcule automáticamente el monto de la propina recomendada. Puedes definir tus propias reglas para calcular la propina según la calidad del servicio.
<?php

$total_cuenta = (float)readline("Ingrese el total de la cuenta: ");
$calidad_servicio = strtolower(readline("Ingrese la calidad del servicio (excelente, bueno, regular, malo): "));

if ($calidad_servicio == "excelente") {
  $propina = $total_cuenta * 0.20;
} elseif ($calidad_servicio == "bueno") {
  $propina = $total_cuenta * 0.15;
} elseif ($calidad_servicio == "regular") {
  $propina = $total_cuenta * 0.10;
} elseif ($calidad_servicio == "malo") {
  $propina = $total_cuenta * 0.05;
} else {
  echo "La calidad del servicio ingresada no es válida. Por favor ingrese excelente, bueno, regular o malo.";
  exit();
}

$total_con_propina = $total_cuenta + $propina;

echo "El total de la cuenta es: $" . number_format($total_cuenta, 2) . "<br>";
echo "La calidad del servicio es: " . ucfirst($calidad_servicio) . "<br>";
echo "La propina recomendada es: $" . number_format($propina, 2) . "<br>";
echo "El total de la cuenta con propina incluida es: $" . number_format($total_con_propina, 2);

?>

