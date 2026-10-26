<?php
declare(strict_types=1);
// votar.php — recibe la papeleta (POST), la anota en la sesión y manda al recuento
require __DIR__ . '/parciales/utilidades.php';
session_start();
$propuestas = require __DIR__ . '/datos/propuestas.php';

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
    header('Location: recuento.php');
    exit;
}

$id   = filter_var($_POST['propuesta'] ?? '', FILTER_VALIDATE_INT);
$voto = $_POST['voto'] ?? '';

if ($id === false || !isset($propuestas[$id])) {
    $_SESSION['aviso'] = 'Esa propuesta no existe.';
} elseif (!in_array($voto, ['si', 'no'], true)) {
    $_SESSION['aviso'] = 'El voto tiene que ser sí o no.';
} else {
    $_SESSION['papeletas'][] = ['propuesta' => $id, 'voto' => $voto];
    $_SESSION['aviso'] = "Voto registrado: «{$propuestas[$id]['titulo']}» → " . etiqueta_voto($voto) . '.';
}

header('Location: recuento.php');
?>
<p>Voto registrado. Si el navegador no te lleva al recuento, <a href="recuento.php">pulsa aquí</a>.</p>
