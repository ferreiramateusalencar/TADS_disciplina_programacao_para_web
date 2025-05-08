<?php

$M = intval(trim(fgets(STDIN)));
while ($M < 1 || $M > 500) {
    echo "Número inválido! Digite um número inteiro entre 1 e 500: ";
    $M = intval(trim(fgets(STDIN)));
}
$A = intval(trim(fgets(STDIN)));
while ($A <1 || $A > 500) {
    echo "Número inválido! Digite um número inteiro entre 1 e 500: ";
    $A = intval(trim(fgets(STDIN)));
}
$C = intval(trim(fgets(STDIN)));
while ($C <1 || $C > 500) {
    echo "Número inválido! Digite um número inteiro entre 1 e 500: ";
    $C = intval(trim(fgets(STDIN)));
}

$swords = min($A, intdiv($C * 4, 1));
$axes = min($A, intdiv($M * 2, 1));

printf("%d", ($swords > $axes) ? $swords : $axes);
?>