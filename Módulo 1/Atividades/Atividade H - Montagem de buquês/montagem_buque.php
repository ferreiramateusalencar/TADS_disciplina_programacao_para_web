<?php

function mdc(int $a, int $b): int {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

$int_N = intval(trim(fgets(STDIN)));
while ($int_N < 10 || $int_N > 300) {
    echo "Número inválido! Digite um número inteiro positivo entre 10 e 300: ";
    $int_N = intval(trim(fgets(STDIN)));
}

$int_M = intval(trim(fgets(STDIN)));
while ($int_M < 10 || $int_M > 300) {
    echo "Número inválido! Digite um número inteiro positivo entre 10 e 300: ";
    $int_M = intval(trim(fgets(STDIN)));
}

$gcd = mdc($int_N, $int_M);

$total_per_bouquet = ($int_N / $gcd) + ($int_M / $gcd);

echo intval($total_per_bouquet) . "\n";
?>
