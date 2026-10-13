<?php
declare(strict_types=1);
// a3.php — la configuración de una parcela puede no traer el riego: entonces es a manta
$config = ['codigo' => 'H02', 'zona' => 'Ribera'];
$riego = $config['riego'];
echo $config['codigo'], ': riego a ', $riego, "\n";
// Salida esperada:
// H02: riego a manta
