<?php
declare(strict_types=1);
// inscribir.php — procesa el POST y REDIRIGE: nunca muestra página propia
session_start();
$salidas = require __DIR__ . '/datos/salidas.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: calendario.php');
    exit;
}

$indice = filter_var($_POST['salida'] ?? '', FILTER_VALIDATE_INT);
if ($indice === false || !isset($salidas[$indice])) {
    $_SESSION['flash'] = 'Esa salida no existe.';
} elseif ($salidas[$indice]['inscritos'] >= $salidas[$indice]['plazas']) {
    $_SESSION['flash'] = 'Esa salida está completa.';
} else {
    // Aquí iría la inscripción real (UD6); por ahora, solo el mensaje
    $_SESSION['flash'] = "Inscripción registrada en {$salidas[$indice]['nombre']}.";
}

header('Location: calendario.php');
exit;
