<?php

/**
 * Exercício 3
 *
 * Escreva uma função em PHP para pegar as extensões dos 3 arquivos abaixo e mostrá-las na tela.
 * As saídas devem ser mostradas em uma lista em ordem alfabética.
 *
 * Arquivos de exemplo:
 *   a) music.mp4
 *   b) video.mov
 *   c) imagem.jpeg
 *
 * Saida experada:
 *   1 .jpeg
 *   2 .mov
 *   3 .mp4
 */

$iterator = new FilesystemIterator('./assets');
$extensions = [];

while ($iterator->valid()) {
    if ($iterator->isFile()) {
        $extensions[] = $iterator->getExtension();
    }
    $iterator->next();
}

sort($extensions);

foreach ($extensions as $ext) {
    echo ".{$ext}" . PHP_EOL;
}

?>
