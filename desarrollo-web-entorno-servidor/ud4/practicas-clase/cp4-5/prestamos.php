<?php
declare(strict_types=1);
// prestamos.php — el libro de préstamos de la caseta, con una caja para buscar
require __DIR__ . '/plantillas.php';
require __DIR__ . '/utilidades.php';
$prestamos = require __DIR__ . '/datos/prestamos.php';

$busca = trim($_GET['busca'] ?? '');

$encontrados = [];
foreach ($prestamos as $prestamo) {
    if ($busca === '' || mb_stripos($prestamo['util'], $busca) !== false || mb_stripos($prestamo['persona'], $busca) !== false) {
        $encontrados[] = $prestamo;
    }
}

render('prestamos', ['prestamos' => $encontrados, 'total' => count($prestamos), 'busca' => $busca]);
