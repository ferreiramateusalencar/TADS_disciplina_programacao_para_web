<?php

$meats = 7;
$vegetables = 4;
$wines = 11;

$man = (($meats * 1) + ($vegetables * 0.5) + ($wines * 2));
$woman = (($meats * 0.5) + ($vegetables * 1) + ($wines * 3)); 

$H = intval(trim(fgets(STDIN)));
while ($H < 1 || $H > 100) {
    echo "Número inválido! Digite um número inteiro entre 1 e 100: ";
    $H = intval(trim(fgets(STDIN)));
}
$M = intval(trim(fgets(STDIN)));
while ($M < 1 || $M > 100) {
    echo "Número inválido! Digite um número inteiro entre 1 e 100: ";
    $M = intval(trim(fgets(STDIN)));
}

$costs = ($man * $H) + ($woman * $M);

printf("%.2f", $costs);


?>