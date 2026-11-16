<?php
// datos/boletin.php — el boletín de la Asociación de Huertos del Soto (datos de aula, ficticios)
// Este fichero DEVUELVE el array: cárgalo con  $boletin = require __DIR__ . '/datos/boletin.php';
return [
    'numero' => 14,
    'mes'    => 'noviembre de 2026',
    'normas' => [
        'El agua se pide por turno: nadie abre la tajadera fuera de su hora.',
        'Herramientas & carretillas vuelven a la caseta antes de las 20:00.',
        'Prohibido quemar restos de poda si el cierzo sopla a más de 30 km/h.',
        'Las parcelas de <50 m² no pueden tener caseta propia.',
    ],
];
