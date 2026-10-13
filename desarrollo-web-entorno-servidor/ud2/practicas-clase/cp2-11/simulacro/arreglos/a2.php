<?php
declare(strict_types=1);
// a2.php — solo las zonas que NO son ni Soto ni Eras
$zonas = ['Ribera', 'Soto', 'Eras', 'Ribera'];
foreach ($zonas as $zona) {
    if ($zona !== 'Soto' || $zona !== 'Eras') {
        echo $zona, "\n";
    }
}
// Salida esperada:
// Ribera
// Ribera
