//Calcular la nota  promedio  de un array de estudiantes que contiene los campos (nombre , grado y nota )  , además deberá deberá  de retornar cuantos alumnos aprobaron y reprobaron , tome en cuenta que la nota minima para aprobar es 7,5.

<?php

$estudiantes = array(
  array('nombre' => 'Juan', 'grado' => '9°', 'nota' => 8.0),
  array('nombre' => 'Maria', 'grado' => '10°', 'nota' => 9.5),
  array('nombre' => 'Pedro', 'grado' => '11°', 'nota' => 6.5),
  array('nombre' => 'Luisa', 'grado' => '9°', 'nota' => 7.0),
  array('nombre' => 'Andrés', 'grado' => '10°', 'nota' => 8.5)
);


$suma_notas = 0;
$num_estudiantes = count($estudiantes);
$num_aprobados = 0;
$num_reprobados = 0;

foreach ($estudiantes as $estudiante) {
  $suma_notas += $estudiante['nota'];
  if ($estudiante['nota'] >= 7.5) {
    $num_aprobados++;
  } else {
    $num_reprobados++;
  }
}


$nota_promedio = $suma_notas / $num_estudiantes;


echo "La nota promedio de los estudiantes es: " . $nota_promedio . "<br>";
echo "El número de estudiantes que aprobaron es: " . $num_aprobados . "<br>";
echo "El número de estudiantes que reprobaron es: " . $num_reprobados . "<br>";

?>
