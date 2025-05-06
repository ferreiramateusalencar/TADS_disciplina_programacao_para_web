<?php

echo "Digite a primeira nota: ";
$nota1 = floatval(trim(fgets(STDIN)));

echo "Digite o peso da primeira nota: ";
$peso1 = intval(trim(fgets(STDIN)));

echo "Digite a segunda nota: ";
$nota2 = floatval(trim(fgets(STDIN)));

echo "Digite o peso da segunda nota: ";
$peso2 = intval(trim(fgets(STDIN)));

echo "Digite a terceira nota: ";
$nota3 = floatval(trim(fgets(STDIN)));

echo "Digite o peso da terceira nota: ";
$peso3 = intval(trim(fgets(STDIN)));

$media_ponderada = (($nota1 * $peso1) + ($nota2 * $peso2) + ($nota3 * $peso3)) / ($peso1 + $peso2 + $peso3);

echo "Média ponderada: " . number_format($media_ponderada, 1, '.', '') . "\n";

?>
