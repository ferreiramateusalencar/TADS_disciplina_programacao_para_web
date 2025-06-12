<?php

function casais_coelhos($meses) {
    if ($meses <= 2) {
        return 1;
    }
    return casais_coelhos($meses - 1) + casais_coelhos($meses - 2);
}

$meses = intval(trim(fgets(STDIN)));

while ($meses < 1 || $meses > 30) {
    echo "Inserir valor entre 1 e 30.\n";
    $meses = intval(trim(fgets(STDIN)));
}

echo casais_coelhos($meses) . "\n";
?>
