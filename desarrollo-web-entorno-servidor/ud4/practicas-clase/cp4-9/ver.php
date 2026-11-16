<?php
declare(strict_types=1);
// ver.php — pinta la página del mercadillo en el terminal, no se sirve:  php ver.php   ·   php ver.php vacio
require __DIR__ . '/plantillas.php';
$mercadillo = require __DIR__ . '/datos/mercadillo.php';

// Preparar: con «vacio», un domingo sin ninguna parada
$paradas = ($argv[1] ?? '') === 'vacio' ? [] : $mercadillo['paradas'];

// Pintar: los datos de la página y, aparte, lo que pide el layout
render_pagina(
    'mercadillo',
    ['dia' => $mercadillo['dia'], 'paradas' => $paradas, 'destacada' => $mercadillo['destacada']],
    ['rotulo' => 'Mercadillo']
);
