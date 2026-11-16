<?php
// datos/supuestos/averia.php — el día en que se rompe la bomba (datos de aula, ficticios)
return [
    'bomba'    => 'averiada',
    'avisos'   => [
        ['asunto' => 'Avería en la bomba: presión <1 bar', 'urgente' => true],
    ],
    'turnos'   => [
        ['hora' => '07:30', 'ref' => 'H01'],
        ['hora' => '08:15', 'ref' => 'H08'],
        ['hora' => '19:00', 'ref' => 'H04'],
    ],
    'libres'   => ['H05'],
    'asamblea' => ['cuando' => 'viernes 27 de noviembre, 19:00', 'temas' => ['Cuentas del año', 'Lista de espera', 'Ruegos y preguntas']],
];
