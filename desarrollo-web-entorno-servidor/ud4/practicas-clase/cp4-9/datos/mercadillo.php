<?php
// datos/mercadillo.php — el mercadillo de la cosecha de la Asociación de Huertos del Soto (datos de aula, ficticios)
// Este fichero devuelve el array: cárgalo con  $mercadillo = require __DIR__ . '/datos/mercadillo.php';
return [
    'dia'       => 'domingo 29 de noviembre',
    'destacada' => 'H06',   // la referencia de la parcela que tiene la parada del mes
    'paradas'   => [
        ['ref' => 'H01', 'persona' => 'Mateo Larraz', 'producto' => 'Tomate & pimiento', 'kilos' => 12],
        ['ref' => 'H03', 'persona' => 'Teresa Ansó',  'producto' => 'Calabaza <2 kg',    'kilos' => 8],
        ['ref' => 'H06', 'persona' => 'Rubén Asín',   'producto' => 'Borraja',           'kilos' => 5],
    ],
];
