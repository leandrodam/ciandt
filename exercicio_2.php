<?php

/**
 * Exercício 2
 *
 * Joãozinho vai morder o seu dedo 50% das vezes. Esse exercício será dividido em 2 partes.
 *
 *   a) Primeiro, cria uma função chamada foiMordido() que deverá retornar
 *      TRUE para 50% das vezes e
 *      FALSE para os outros 50%.
 *      A função rand() pode ser útil aqui;
 *
 *   b) Após criar a função, crie um código/página que mostre as frases
 *      “Joãozinho mordeu o seu dedo !” ou “Joaozinho NAO mordeu o seu dedo !”
 *      usando a função foiMordido() que foi criado na primeira parte.
 */

function foiMordido(): bool
{
    return random_int(1, 10) > 5 ? true : false;
}

echo foiMordido() ? 'Joãozinho mordeu o seu dedo !' : 'Joaozinho NAO mordeu o seu dedo !';

?>
