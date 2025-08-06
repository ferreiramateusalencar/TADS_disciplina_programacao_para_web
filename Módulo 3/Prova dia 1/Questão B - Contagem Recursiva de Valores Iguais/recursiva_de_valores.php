<?php

function contarOcorrencias($array, $x, $index = 0, $contador = 0) {
    if ($index >= count($array)) {
        return $contador;
    }

    if ($array[$index] == $x) {
        $contador++;
    }

    return contarOcorrencias($array, $x, $index + 1, $contador);
}

$n = intval(trim(fgets(STDIN)));
$linha = trim(fgets(STDIN));
$valores = array_map('intval', explode(" ", $linha));
$x = intval(trim(fgets(STDIN)));

$resultado = contarOcorrencias($valores, $x);

echo $resultado . " vez(es)\n";
?>