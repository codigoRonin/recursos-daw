<?php
// datos/avisos.php — avisos de la Asociación de Huertos del Soto (datos de aula, ficticios)
// Este fichero DEVUELVE el array: cárgalo con  $avisos = require __DIR__ . '/datos/avisos.php';
// zona: 'Ribera', 'Eras', 'Soto' o 'todas' (aviso general)
return [
    ['dia' => '2026-11-23', 'zona' => 'todas',  'asunto' => 'Asamblea de invierno el viernes a las 19:00'],
    ['dia' => '2026-11-24', 'zona' => 'Eras',   'asunto' => 'Riego & abonado: cambio de turno en las Eras'],
    ['dia' => '2026-11-25', 'zona' => 'Soto',   'asunto' => 'Presión del goteo <1 bar: revisad los filtros'],
    ['dia' => '2026-11-27', 'zona' => 'Ribera', 'asunto' => 'Avería en la bomba de Ribera'],
    ['dia' => '2026-11-30', 'zona' => 'Eras',   'asunto' => 'Reparto de compost en las Eras'],
    ['dia' => '2026-12-02', 'zona' => 'todas',  'asunto' => 'Cuotas del año: último día de pago'],
];
