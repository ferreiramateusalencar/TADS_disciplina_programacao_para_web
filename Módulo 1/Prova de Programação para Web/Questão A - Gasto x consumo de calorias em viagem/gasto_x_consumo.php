<?php
$total_ingerido = 0;
$total_gasto = 0;

$D = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $D; $i++) {
    $C = intval(trim(fgets(STDIN)));
    $K = intval(trim(fgets(STDIN)));

    $total_ingerido += $C;
    $total_gasto += $K * 65;
}

if ($total_ingerido > $total_gasto) {
    $diferenca = $total_ingerido - $total_gasto;
    echo "Foram ingeridas $diferenca calorias a mais que as calorias gastas\n";
} elseif ($total_gasto > $total_ingerido) {
    $diferenca = $total_gasto - $total_ingerido;
    echo "Foram gastas $diferenca calorias a mais que as calorias ingeridas\n";
} else {
    echo "O total de calorias ingeridas foi igual ao de calorias gastas\n";
}
?>
