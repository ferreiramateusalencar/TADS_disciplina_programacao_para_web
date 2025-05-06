<?php

echo "Digite a data de hoje (apenas o dia): ";
$day = intval(trim(fgets(STDIN)));

while ($day < 1 || $day > 31) {
    echo "Data inválida! Digite a data de hoje (apenas o dia) corretamente: ";
    $day = intval(trim(fgets(STDIN)));
}

function isPerfectSquare($num){
    $sqrt = sqrt($num);
    return $sqrt == floor($sqrt);
}

$sqrts = [];
$current = $day;

while (count($sqrts) < 4) {
    if (isPerfectSquare($current)) {
        $sqrts[] = $current;
    }
    $current++;
}
$senha = implode("", $sqrts);
echo $senha;

?>