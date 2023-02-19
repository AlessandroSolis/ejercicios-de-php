// Una escuela está tratando de tomar una foto anual de todos los estudiantes. Se pide a los estudiantes que
pararse en una sola fila en orden no decreciente por altura. Que este orden sea
representado por la matriz de enteros esperado donde esperado [i] es la altura esperada de
el i-ésimo estudiante en la fila.
Se le da una altura de matriz de enteros que representa el orden actual en que los estudiantes
están parados. Cada altura[i] es la altura del i-ésimo estudiante en la fila (índice 0).
Devuelve el número de índices donde heights[i] != esperado[i].


<?php
    function contarEstudiantesDesubicados($esperado, $heights) {
        $conteo = 0;
        for ($i = 0; $i < count($esperado); $i++) {
            if ($heights[$i] != $esperado[$i]) {
                $conteo++;
                $nombre = '';
                switch ($i) {
                    case 0:
                        $nombre = 'Alex';
                        break;
                    case 1:
                        $nombre = 'Juan';
                        break;
                    case 2:
                        $nombre = 'Pedro';
                        break;
                    default:
                        $nombre = 'Estudiante ' . ($i+1);
                        break;
                }
                echo "El estudiante $nombre está desubicado. Altura esperada: {$esperado[$i]}, Altura actual: {$heights[$i]} <br>";
            }
        }
        return $conteo;
    }
    

?>