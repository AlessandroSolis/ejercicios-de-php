<?php
$empleados = array(
  array("nombre" => "pedro", "turno" => "diurno", "domingo" => false, "horas_trabajadas" => 8),
  array("nombre" => "juan", "turno" => "nocturno", "domingo" => false, "horas_trabajadas" => 7),

);

foreach ($empleados as $empleado) {
  $tarifa = ($empleado["turno"] == "diurno") ? 5 : 10; // Se determina la tarifa según el turno
  if ($empleado["domingo"]) {
    $tarifa = ($empleado["turno"] == "diurno") ? 10 : 20; // Si es domingo, se ajusta la tarifa
  }
  $salario_diario = $tarifa * $empleado["horas_trabajadas"]; // Se calcula el salario diario
  echo $empleado["nombre"] . " ganó $" . $salario_diario . " hoy.\n"; // Se muestra el resultado
}
?>