<?php

$int_A = intval(trim(fgets(STDIN)));
while ($int_A <= -10000 || $int_A >= 10000) {
    echo "Número inválido! Digite um número inteiro positivo entre -10000 e 10000: ";
    $int_A = intval(trim(fgets(STDIN)));
}
$int_B = intval(trim(fgets(STDIN)));
while ($int_B <= -10000 || $int_B >= 10000) {
    echo "Número inválido! Digite um número inteiro positivo entre -10000 e 10000: ";
    $int_B = intval(trim(fgets(STDIN)));
}

$quotient_sign = 1;
if (($int_A < 0 && $int_B > 0) || ($int_A > 0 && $int_B < 0)) {
    $quotient_sign = -1;
}

$abs_A = $int_A < 0 ? -$int_A : $int_A;
$abs_B = $int_B < 0 ? -$int_B : $int_B;

$quotient = 0;
$sum = 0;

while ($sum + $abs_B <= $abs_A) {
    $sum += $abs_B;
    $quotient++;
}

$quotient *= $quotient_sign;

$remainder = $int_A - ($quotient * $int_B);

echo $quotient . "\n";
echo $remainder . "\n";
?>