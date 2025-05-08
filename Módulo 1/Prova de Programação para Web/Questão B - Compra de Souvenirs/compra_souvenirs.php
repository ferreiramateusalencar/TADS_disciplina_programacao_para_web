<?php

$valor_total = 0.0;

$euro_to_real = 6.5;

while (true) {
    $unidade = intval(trim(fgets(STDIN)));
    if( $unidade == 0) {
        break;
    }

    $produto = floatval(trim(fgets(STDIN)));
    if ($unidade > 5) {
        $produto *= 0.85;
    }
    
    $valor_total += $unidade * $produto * $euro_to_real;
}

echo number_format($valor_total, 2, '.', '') . "\n";
?>
