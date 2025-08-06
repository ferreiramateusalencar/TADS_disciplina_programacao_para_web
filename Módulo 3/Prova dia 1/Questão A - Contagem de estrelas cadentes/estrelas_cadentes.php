<?php

$estrelas = [];
$maiorIntervalo = 0;

while (true) {
    $linha = trim(fgets(STDIN));
    $valor = intval($linha);

    if ($valor < 0) {
        break;
    }

    $estrelas[] = $valor;

    if ($valor > $maiorIntervalo) {
        $maiorIntervalo = $valor;
    }
}

$totalEstrelas = count($estrelas);

echo $totalEstrelas . "\n";
echo $maiorIntervalo . "\n";
?>


