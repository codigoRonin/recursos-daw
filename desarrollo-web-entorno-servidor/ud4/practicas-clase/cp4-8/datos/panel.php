<?php
// datos/panel.php — lo que hay hoy en el panel de la asociación (datos de aula, ficticios)
// Este fichero DEVUELVE el array: cárgalo con  $hoy = require __DIR__ . '/datos/panel.php';
return [
    'avisos' => [
        'Reparto de compost en las Eras',
        'Asamblea de invierno el viernes a las 19:00',
    ],
    'cuotas' => [
        ['ref' => 'H04', 'persona' => 'Julia Bergés', 'debe' => 60],
        ['ref' => 'H08', 'persona' => 'Noa Lecina',   'debe' => 60],
    ],
    'incidencias' => [
        ['ref' => 'H06', 'persona' => 'Rubén Asín',  'asunto' => 'Fuga en la llave del goteo'],
        ['ref' => 'H01', 'persona' => 'Mateo Larraz', 'asunto' => 'Rama caída sobre la valla'],
        ['ref' => 'H03', 'persona' => 'Teresa Ansó',  'asunto' => 'Candado de la caseta roto'],
    ],
    'espera' => ['Lucía Used', 'Darío Abós'],
];
