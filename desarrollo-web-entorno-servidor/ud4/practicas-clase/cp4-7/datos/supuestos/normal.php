<?php
// datos/supuestos/normal.php — un día cualquiera en el huerto (datos de aula, ficticios)
return [
    'bomba'    => 'en marcha',
    'avisos'   => [
        ['asunto' => 'Reparto de compost en las Eras', 'urgente' => false],
        ['asunto' => 'Cuotas del año: último día de pago', 'urgente' => true],
        ['asunto' => 'Riego & abonado: cambio de turno', 'urgente' => false],
    ],
    'turnos'   => [
        ['hora' => '07:30', 'ref' => 'H03'],
        ['hora' => '19:00', 'ref' => 'H06'],
    ],
    'libres'   => ['H02', 'H05', 'H07'],
    'asamblea' => ['cuando' => 'viernes 27 de noviembre, 19:00', 'temas' => ['Cuentas del año', 'Lista de espera', 'Ruegos y preguntas']],
];
