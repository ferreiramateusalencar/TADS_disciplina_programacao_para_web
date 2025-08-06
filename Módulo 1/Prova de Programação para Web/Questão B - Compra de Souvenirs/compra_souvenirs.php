<?php

$valor_total = 0.0; // a declaração de inicialização de variáveis foi mostrada na Videoaula 11 - Laço de repetição while em PHP a partir do minuto 14:34

$euro_to_real = 6.5; // a declaração de inicialização de variáveis foi mostrada na Videoaula 11 - Laço de repetição while em PHP a partir do minuto 14:34


//Laço de repetição mostrada na Videoaula 11 - Laço de repetição while em PHP
while (true) {
    $unidade = intval(trim(fgets(STDIN))); // função de entrada de dados mostrada no Videoaula 4 - Funções de Entrada e Saída de Dados em PHP- Parte II a partir do minuto 10:00

    // if, else e elseif mostrados na Videoaula 9 - Instrução Condicional Simples e Composta (if else) em PHP
    if( $unidade == 0) {
        break; // encerra o laço de repetição mostrado na Videoaula 13 - Comados break e continue em PHP
    }

    $produto = floatval(trim(fgets(STDIN))); // função de entrada de dados mostrada no Videoaula 4 - Funções de Entrada e Saída de Dados em PHP- Parte II a partir do minuto 10:00
    if ($unidade > 5) {
        $produto *= 0.85; // operadores de atribuição visto na Videoaula 2 - PHP (características básicas, tipos e operadores)
    }
    
    $valor_total += $unidade * $produto * $euro_to_real; // operadores de atribuição visto na Videoaula 2 - PHP (características básicas, tipos e operadores)
}

echo number_format($valor_total, 2, '.', '') . "\n"; // função de saída de dados mostrada no Videoaula 4 - Funções de Entrada e Saída de Dados em PHP- Parte II vista no minuto 14:00

//observação: quando a questão solicitou um nome ou letra específicos, eu usei como nome de variável o nome ou letra solicitada, 
// mesmo que usar uma letra não fosse a melhor prática de programação,
// mas quando não foi solicitado um nome específico, eu usei nomes de variáveis em inglês, seguindo a convenção padrão.
?>
