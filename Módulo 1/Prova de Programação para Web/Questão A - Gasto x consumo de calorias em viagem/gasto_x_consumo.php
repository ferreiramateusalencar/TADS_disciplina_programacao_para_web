<?php
$total_ingerido = 0; // a declaração de inicialização de variáveis foi mostrada na Videoaula 11 - Laço de repetição while em PHP a partir do minuto 14:34
$total_gasto = 0; // a declaração de inicialização de variáveis foi mostrada na Videoaula 11 - Laço de repetição while em PHP a partir do minuto 14:34

$D = intval(trim(fgets(STDIN))); // função de entrada de dados mostrada no Videoaula 4 - Funções de Entrada e Saída de Dados em PHP- Parte II a partir do minuto 10:00

// Toda essa estrutura de repetição "for" foi mostrada no decorrer da Videoaula 14 - Laço de repetição for em PHP
for ($i = 0; $i < $D; $i++) {
    $C = intval(trim(fgets(STDIN))); // função de entrada de dados mostrada no Videoaula 4 - Funções de Entrada e Saída de Dados em PHP- Parte II a partir do minuto 10:00
    $K = intval(trim(fgets(STDIN))); // função de entrada de dados mostrada no Videoaula 4 - Funções de Entrada e Saída de Dados em PHP- Parte II a partir do minuto 10:00

    $total_ingerido += $C; // operadores de atribuição visto na Videoaula 2 - PHP (características básicas, tipos e operadores)
    $total_gasto += $K * 65; // operadores de atribuição visto na Videoaula 2 - PHP (características básicas, tipos e operadores)
}

// if, else e elseif mostrados na Videoaula 9 - Instrução Condicional Simples e Composta (if else) em PHP
if ($total_ingerido > $total_gasto) {
    $diferenca = $total_ingerido - $total_gasto; // operadores de atribuição visto na Videoaula 2 - PHP (características básicas, tipos e operadores)
    echo "Foram ingeridas $diferenca calorias a mais que as calorias gastas\n";
    //função echo mostrada na Videoaula 3 - Primeiro Programa/Script em PHP e Funções de Entrada e Saída de Dados a partir do minuto 7:30
} elseif ($total_gasto > $total_ingerido) {
    $diferenca = $total_gasto - $total_ingerido; // operadores de atribuição visto na Videoaula 2 - PHP (características básicas, tipos e operadores)
    echo "Foram gastas $diferenca calorias a mais que as calorias ingeridas\n";
    //função echo mostrada na Videoaula 3 - Primeiro Programa/Script em PHP e Funções de Entrada e Saída de Dados a partir do minuto 7:30
} else {
    echo "O total de calorias ingeridas foi igual ao de calorias gastas\n";
    //função echo mostrada na Videoaula 3 - Primeiro Programa/Script em PHP e Funções de Entrada e Saída de Dados a partir do minuto 7:30
}

//observação: quando a questão solicitou um nome ou letra específicos, eu usei como nome de variável o nome ou letra solicitada, 
// mesmo que usar uma letra não fosse a melhor prática de programação,
// mas quando não foi solicitado um nome específico, eu usei nomes de variáveis em inglês, seguindo a convenção padrão.
?>
