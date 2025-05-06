<?php

$sum = 0;
$count = 0;

while (($line = fgets(STDIN)) !== false) {
    $line = trim($line);
    $numero = intval($line);

    if ($numero < 0) {
        if ($count > 0) {
            $media = $sum / $count;
            echo number_format($media, 1, '.', '') . "\n";
        } else {
            echo "Nenhum valor natural foi fornecido!" . "\n";
        }
        $sum = 0;
        $count = 0;
    } else {
        $sum += $numero;
        $count++;
    }
}
