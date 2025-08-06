<?php

$meats = 7; // a declaração de inicialização de variáveis foi mostrada na Videoaula 11 - Laço de repetição while em PHP a partir do minuto 14:34
$vegetables = 4; // a declaração de inicialização de variáveis foi mostrada na Videoaula 11 - Laço de repetição while em PHP a partir do minuto 14:34
$wines = 11; // a declaração de inicialização de variáveis foi mostrada na Videoaula 11 - Laço de repetição while em PHP a partir do minuto 14:34

$man = (($meats * 1) + ($vegetables * 0.5) + ($wines * 2));
$woman = (($meats * 0.5) + ($vegetables * 1) + ($wines * 3)); 

$H = intval(trim(fgets(STDIN))); // função de entrada de dados mostrada no Videoaula 4 - Funções de Entrada e Saída de Dados em PHP- Parte II a partir do minuto 10:00

//Laço de repetição mostrada na Videoaula 11 - Laço de repetição while em PHP
while ($H < 1 || $H > 100) {
    echo "Número inválido! Digite um número inteiro entre 1 e 100: ";
    $H = intval(trim(fgets(STDIN))); // função de entrada de dados mostrada no Videoaula 4 - Funções de Entrada e Saída de Dados em PHP- Parte II a partir do minuto 10:00
}
$M = intval(trim(fgets(STDIN))); // função de entrada de dados mostrada no Videoaula 4 - Funções de Entrada e Saída de Dados em PHP- Parte II a partir do minuto 10:00
//Laço de repetição mostrada na Videoaula 11 - Laço de repetição while em PHP
while ($M < 1 || $M > 100) {
    echo "Número inválido! Digite um número inteiro entre 1 e 100: ";
    $M = intval(trim(fgets(STDIN))); // função de entrada de dados mostrada no Videoaula 4 - Funções de Entrada e Saída de Dados em PHP- Parte II a partir do minuto 10:00
}

$costs = ($man * $H) + ($woman * $M); //lógica de calculo e matemática simples. mostrados na Videoaula 2 - PHP (características básicas, tipos e operadores)

printf("%.2f", $costs); // saída com printf visto em Videoaula 5 - Funções de Entrada e Saída de Dados em PHP- Parte II no minuto 13:20

//observação: quando a questão solicitou um nome ou letra específicos, eu usei como nome de variável o nome ou letra solicitada, 
// mesmo que usar uma letra não fosse a melhor prática de programação,
// mas quando não foi solicitado um nome específico, eu usei nomes de variáveis em inglês, seguindo a convenção padrão.
?>

