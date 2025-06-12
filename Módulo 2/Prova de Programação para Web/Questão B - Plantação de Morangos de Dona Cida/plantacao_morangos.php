<?php

list($fileiras_l, $canteiros_c) = explode(' ', trim(fgets(STDIN)));

$fileiras = [];

for ($i = 0; $i < $fileiras_l; $i++) {
    $numeros = array_map('intval', explode(' ', trim(fgets(STDIN))));
    $fileiras[] = $numeros;
}

$total_morango = 0;
$maior_fileira = 0;

for ($i = 0; $i < $fileiras_l; $i++) {
    $soma = array_sum($fileiras[$i]);
    
    $maior = ($soma > $total_morango);
    
    $total_morango = $maior ? $soma : $total_morango;
    $maior_fileira = $maior ? ($i + 1) : $maior_fileira;
}

printf("A fileira com maior producao eh a de numero %d.\n", $maior_fileira);
printf("Total colhido: %d morangos.\n", $total_morango);

?>
