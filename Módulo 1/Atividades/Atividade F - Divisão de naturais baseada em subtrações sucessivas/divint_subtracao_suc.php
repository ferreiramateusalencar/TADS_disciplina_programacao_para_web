<?php

$int_a = intval(trim(fgets(STDIN)));
    while ($int_a <= 0 || $int_a >= 10000) {
        echo "Número inválido! Digite um número inteiro positivo entre 0 e 10000: ";
        $int_a = intval(trim(fgets(STDIN)));
    }

$int_b = intval(trim(fgets(STDIN)));
    while ($int_b <= 0 || $int_b >= 10000) {
        echo "Número inválido! Digite um número inteiro positivo entre 0 e 10000: ";
        $int_b = intval(trim(fgets(STDIN)));
    }


$quotient = 0;
$remainder = $int_a;

while($remainder >= $int_b) {
    $remainder -= $int_b;
    $quotient++;
}

echo $quotient . "\n";
echo $remainder . "\n";
?>