<?php
declare(strict_types=1);
// generar.php — genera el boletín de la asociación como páginas .html en la carpeta sitio/
// Se ejecuta en el terminal, no se sirve:  php generar.php
require __DIR__ . '/plantillas.php';
require __DIR__ . '/utilidades.php';
$boletin = require __DIR__ . '/datos/boletin.php';
$avisos = require __DIR__ . '/datos/avisos.php';
$parcelas = require __DIR__ . '/datos/parcelas.php';

// Preparar: los avisos, con el día ya escrito para personas
$preparados = [];
foreach ($avisos as $aviso) {
    $preparados[] = ['cuando' => dia_largo($aviso['dia']), 'zona' => $aviso['zona'], 'asunto' => $aviso['asunto']];
}

// Pintar y guardar: capturar() devuelve el HTML como texto en vez de enviarlo
$html = capturar('boletin', ['numero' => $boletin['numero'], 'mes' => $boletin['mes'], 'avisos' => $preparados]);
echo 'sitio/boletin.html: ' . guardar_pagina('boletin.html', $html) . " bytes\n";
