<?php

function mdc(int $a, int $b): int{
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

$int_N = intval(trim(fgets(STDIN)));
    while ($int_N <= 1 || $int_N >= 365) {
        echo "Número inválido! Digite um número inteiro positivo entre 1 e 365: ";
        $int_N = intval(trim(fgets(STDIN)));
    }

$int_M = intval(trim(fgets(STDIN)));
    while ($int_M <= 1 || $int_M >= 365) {
        echo "Número inválido! Digite um número inteiro positivo entre 1 e 365: ";
        $int_M = intval(trim(fgets(STDIN)));
    }
$mmc = ($int_N * $int_M) / mdc($int_N, $int_M);
echo $mmc . "\n";
?>