<?php
// datos/turnos.php — turnos de riego de la semana en la Asociación de Huertos del Soto (datos de aula, ficticios)
// Este fichero DEVUELVE el array: cárgalo con  $turnos = require __DIR__ . '/datos/turnos.php';
return [
    ['dia' => 'lunes',     'hora' => '07:30', 'ref' => 'H01', 'minutos' => 40, 'observacion' => ''],
    ['dia' => 'lunes',     'hora' => '08:15', 'ref' => 'H08', 'minutos' => 60, 'observacion' => ''],
    ['dia' => 'martes',    'hora' => '07:30', 'ref' => 'H03', 'minutos' => 50, 'observacion' => 'Presión baja: <1 bar'],
    ['dia' => 'miércoles', 'hora' => '07:30', 'ref' => 'H04', 'minutos' => 90, 'observacion' => 'Riego a manta: abrir la tajadera'],
    ['dia' => 'jueves',    'hora' => '07:30', 'ref' => 'H06', 'minutos' => 75, 'observacion' => ''],
    ['dia' => 'jueves',    'hora' => '19:00', 'ref' => 'H03', 'minutos' => 50, 'observacion' => ''],
    ['dia' => 'sábado',    'hora' => '08:00', 'ref' => 'H01', 'minutos' => 40, 'observacion' => 'Turno de fin de semana'],
];
