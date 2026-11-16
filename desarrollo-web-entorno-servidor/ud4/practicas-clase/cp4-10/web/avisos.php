<?php
declare(strict_types=1);
// web/avisos.php — guion de la página de avisos
require __DIR__ . '/../plantillas.php';
require __DIR__ . '/../comun/utilidades.php';

render_pagina('avisos', ['avisos' => datos_de('avisos')], ['rotulo' => 'Avisos', 'abierta' => 'avisos']);
