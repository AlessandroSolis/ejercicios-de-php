//juego de adivinanza: Crea un programa en PHP que genere un número aleatorio entre 1 y 100, y permita al usuario adivinar ese número. El programa debe dar pistas para que el usuario sepa si el número que está adivinando es demasiado alto o bajo, y contar el número de intentos que le llevó al usuario adivinar el número.

<?php

$num_secreto = rand(1, 100);

$num_intentos = 0;

$num_usuario = 0;

echo "Bienvenido al juego de adivinanza. Debes adivinar un número secreto entre 1 y 100.<br>";
echo "El juego  de adivinanzas te dará pistas para ayudarte a adivinar el número.<br>";

while ($num_usuario != $num_secreto) {

  $num_usuario = (int)readline("Ingresa un número: ");

  $num_intentos++;

  if ($num_usuario < $num_secreto) {
    echo "su número que ingresaste es demasiado bajo.<br>";
  } elseif ($num_usuario > $num_secreto) {
    echo "su número que ingresaste es demasiado alto.<br>";
  }
}

echo "¡Felicitaciones Adivinaste el número patojo sos bueno" . $num_intentos . " intentos.";

?>
