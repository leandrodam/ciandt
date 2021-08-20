<?php

/**
 * Exercício 1
 *
 * Crie um script PHP que mostra o nome do país e sua capital usando uma array chamada $location.
 * Ordene a Lista pelo nome da capital e adicione pelo menos 5 entradas no array.
 * Exemplo do que deve ser mostrado de saída:
 *   A capital do Brasil e Brasília;
 *   A capital dos EUA e Washington;
 *   A capital da Espanha e Madrid.
 */

$location = [
    ['pais' => 'EUA', 'capital' => 'Washington', 'prep' => 'dos'],
    ['pais' => 'Espanha', 'capital' => 'Madrid', 'prep' => 'da'],
    ['pais' => 'Brasil', 'capital' => 'Brasília', 'prep' => 'do'],
    ['pais' => 'Peru', 'capital' => 'Lima', 'prep' => 'do'],
    ['pais' => 'Argentina', 'capital' => 'Buenos Aires', 'prep' => 'da'],
];

array_multisort(array_column($location, 'capital'), SORT_ASC, $location);

foreach ($location as $l) {
    echo "A capital {$l['prep']} {$l['pais']} é {$l['capital']}" . PHP_EOL;
}

?>
