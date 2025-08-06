<?php

$M = intval(trim(fgets(STDIN))); // função de entrada de dados mostrada no Videoaula 4 - Funções de Entrada e Saída de Dados em PHP- Parte II a partir do minuto 10:00
//Laço de repetição mostrada na Videoaula 11 - Laço de repetição while em PHP
while ($M < 1 || $M > 500) {
    echo "Número inválido! Digite um número inteiro entre 1 e 500: ";
    $M = intval(trim(fgets(STDIN)));
}
$A = intval(trim(fgets(STDIN)));

//Laço de repetição mostrada na Videoaula 11 - Laço de repetição while em PHP
while ($A <1 || $A > 500) {
    echo "Número inválido! Digite um número inteiro entre 1 e 500: ";
    $A = intval(trim(fgets(STDIN)));
}
$C = intval(trim(fgets(STDIN)));

//Laço de repetição mostrada na Videoaula 11 - Laço de repetição while em PHP
while ($C <1 || $C > 500) {
    echo "Número inválido! Digite um número inteiro entre 1 e 500: ";
    $C = intval(trim(fgets(STDIN)));
}


$swords = min($A, intdiv($C * 4, 1)); //função min() que apesar de não ter sido mostrada em vídeo, é uma função nativa do PHP que retorna o menor valor entre os argumentos passados.
$axes = min($A, intdiv($M * 2, 1)); //função min() que apesar de não ter sido mostrada em vídeo, é uma função nativa do PHP que retorna o menor valor entre os argumentos passados.

// No minuto 20:43 da Videoaula 49 - Protótipos de Funções e Arquivos Cabeçalhos na Linguagem de Programação C (https://www.youtube.com/watch?v=3zJWnEC0yGg&list=PLMx6FZj7-18Z1xU1-sumSTMso7_ME_DJi&index=43)
// publicado em 4 de out. de 2021 no canal do YouTube "Prof. Marcelo Linder" ele fala sobre a função Max, analoga a função min() do PHP
// Vídeos antigos do professor Marcelo Linder, como o da Videoaula 49, são usados como referência para a construção de algoritmos e funções em PHP, na disciplina de Algoritmos e Programação para Web da Ana Julia Rodrigues Fernandes de Oliveira,
// Além de serem usadas e referenciadas pelo próprio professor Marcelo Linder em suas aulas de PHP, como o mesmo mencionou na Videoaula 1 - Apresentação da Disciplina Programação para Web no minuto 04:38, Segue transcrição: "Os alunos formalmente matriculados no curso e, eh, infelizmente, não absorveram na profundidade adequada os tópicos que foram vistos em algoritmos eles podem se valer de outras playlists já disponíveis no canal(...)".


printf("%d", ($swords > $axes) ? $swords : $axes); // saída com printf visto em Videoaula 5 - Funções de Entrada e Saída de Dados em PHP- Parte II no minuto 13:20

//observação: quando a questão solicitou um nome ou letra específicos, eu usei como nome de variável o nome ou letra solicitada, 
// mesmo que usar uma letra não fosse a melhor prática de programação,
// mas quando não foi solicitado um nome específico, eu usei nomes de variáveis em inglês, seguindo a convenção padrão.
?>