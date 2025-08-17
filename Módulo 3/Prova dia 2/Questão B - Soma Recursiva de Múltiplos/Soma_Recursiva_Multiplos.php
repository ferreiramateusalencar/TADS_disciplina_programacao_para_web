<?php
$n = intval(trim(fgets(STDIN)));
$linha = trim(fgets(STDIN));
$valores = explode(' ', $linha);

$numeros = [];
for ($i = 0; $i < $n; $i++) {
    $numeros[$i] = intval($valores[$i]);
}

$x = intval(trim(fgets(STDIN)));

function somaMultiplos($lista, $divisor, $indice = 0) {
    if ($indice >= count($lista)) {
        return 0;
    }

    $soma = 0;
    if ($lista[$indice] % $divisor == 0) {
        $soma = $lista[$indice];
    }

    return $soma + somaMultiplos($lista, $divisor, $indice + 1);
}

echo somaMultiplos($numeros, $x) . "\n";
?>
