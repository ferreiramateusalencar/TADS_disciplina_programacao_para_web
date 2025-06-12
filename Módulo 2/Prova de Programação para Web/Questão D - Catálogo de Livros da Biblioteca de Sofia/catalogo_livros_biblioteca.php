<?php

function catalogo_livros($livros) {
    $maior_livro = [
        'titulo' => '',
        'paginas' => 0
    ];

    foreach ($livros as $livro) {
        if ($livro['paginas'] > $maior_livro['paginas']) {
            $maior_livro = [
                'titulo' => $livro['titulo'],
                'paginas' => $livro['paginas']
            ];
        }
    }
    printf("Livro com mais paginas: {$maior_livro['titulo']} ({$maior_livro['paginas']} paginas)");
    
    return;
}

$n = intval(trim(fgets(STDIN)));

$livros = [];

for ($i = 0; $i < $n; $i++) {
    $titulo = trim(fgets(STDIN));
    $ano = intval(trim(fgets(STDIN)));
    $paginas = intval(trim(fgets(STDIN)));

    $livros[] = [
        'titulo' => $titulo,
        'ano' => $ano,
        'paginas' => $paginas
    ];
}

echo catalogo_livros($livros);

?>
