<?php
declare(strict_types=1);
// web/parcelas.php — guion de la página de parcelas: ?zona=Ribera, Eras o Soto; sin zona, o con otra, todas
require __DIR__ . '/../plantillas.php';
require __DIR__ . '/../comun/utilidades.php';

$zona = zona_pedida();

render_pagina(
    'parcelas',
    ['zona' => $zona, 'parcelas' => parcelas_de(datos_de('parcelas'), $zona)],
    ['rotulo' => 'Parcelas', 'abierta' => 'parcelas']
);
