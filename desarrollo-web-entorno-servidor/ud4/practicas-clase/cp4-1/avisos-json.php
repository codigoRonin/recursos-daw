<?php
declare(strict_types=1);
// avisos-json.php — los avisos como datos (JSON), sin una sola etiqueta: los pide avisos.js
$avisos = require __DIR__ . '/datos/avisos.php';
header('Content-Type: application/json; charset=utf-8');
echo json_encode($avisos, JSON_UNESCAPED_UNICODE);
