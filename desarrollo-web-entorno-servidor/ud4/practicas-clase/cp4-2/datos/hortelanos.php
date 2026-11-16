<?php
// datos/hortelanos.php — quién lleva cada parcela adjudicada y cómo llama a su huerto (datos de aula, ficticios)
// Este fichero DEVUELVE el array: cárgalo con  $hortelanos = require __DIR__ . '/datos/hortelanos.php';
// La clave es la referencia de la parcela. Las parcelas libres no aparecen.
return [
    'H01' => ['persona' => 'Mateo Larraz', 'huerto' => 'El Rincón'],
    'H03' => ['persona' => 'Teresa Ansó',  'huerto' => 'Ansó & hijas'],
    'H04' => ['persona' => 'Julia Bergés', 'huerto' => 'La Tajadera'],
    'H06' => ['persona' => 'Rubén Asín',   'huerto' => 'Huerto "Los Chopos"'],
    'H08' => ['persona' => 'Noa Lecina',   'huerto' => 'Tomates & Cía'],
];
