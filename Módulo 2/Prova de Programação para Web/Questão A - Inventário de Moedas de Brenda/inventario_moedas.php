<?php
$variavel = floatval(trim(fgets(STDIN)));

$moeda1 = 0;
$moeda5 = 0;
$moeda10 = 0;
$moeda25 = 0;
$moeda50 = 0;
$moeda100 = 0;

for ($i = 0; $i < $variavel;$i++){
    $conta = floatval(trim(fgets(STDIN)));

    switch ($conta) {
        case 1:
            $moeda1++;
            break;
        case 5:
            $moeda5++;
            break;
        case 10:
            $moeda10++;
            break;
        case 25:
            $moeda25++;
            break;
        case 50:
            $moeda50++;
            break;
        case 100:
            $moeda100++;
            break;
    }
    
}

printf("Moedas de 1 centavo: $moeda1\n");
printf("Moedas de 5 centavos: $moeda5\n");
printf("Moedas de 10 centavos: $moeda10\n");
printf("Moedas de 25 centavos: $moeda25\n");
printf("Moedas de 50 centavos: $moeda50\n");
printf("Moedas de 1 real: $moeda100\n");

?>