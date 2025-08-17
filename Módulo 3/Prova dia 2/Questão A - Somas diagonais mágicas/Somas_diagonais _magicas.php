<?php
fscanf(STDIN, "%d", $n);

$matriz = [];
$diagonal1 = 0;
$diagonal2 = 0;

for ($i = 0; $i < $n; $i++) {
    $X = trim(fgets(STDIN));
    $valores = explode(' ', $X);

    $linha = [];
    foreach ($valores as $valor) {
        $linha[] = (int)$valor;
    }

    $matriz[] = $linha;

    $diagonal1 += $linha[$i];
    $diagonal2 += $linha[$n - $i - 1];
}

echo $diagonal1 . "\n";
echo $diagonal2 . "\n";
?>