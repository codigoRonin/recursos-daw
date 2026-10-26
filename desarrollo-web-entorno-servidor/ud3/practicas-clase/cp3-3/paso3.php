<?php
declare(strict_types=1);
// paso3.php — solicitud de parcela, pantalla 3 de 3: resumen y confirmación
session_start();
$parcelas = require __DIR__ . '/datos/parcelas.php';

$s = $_SESSION['solicitud'] ?? [];
if (!isset($s['persona'], $s['contacto'], $s['zona'], $s['riego'])) {
    echo "<h1>Solicitud de parcela · Pantalla 3 de 3</h1>\n";
    echo "<p class=\"fallo\">Faltan datos: empieza por la <a href=\"paso1.php\">pantalla 1</a>.</p>\n";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirmar'])) {
    // Aquí iría el registro real de la solicitud; en esta práctica basta con cerrar el cajón
    session_unset();
    session_destroy();
    echo "<h1>Solicitud de parcela · Pantalla 3 de 3</h1>\n";
    echo "<p class=\"aviso\">Solicitud registrada a nombre de " . htmlspecialchars($s['persona']) . ". Te escribiremos a "
        . htmlspecialchars($s['contacto']) . ".</p>\n";
    exit;
}

// Parcelas libres que encajan con lo pedido
$candidatas = [];
foreach ($parcelas as $p) {
    if ($p['estado'] === 'libre' && $p['zona'] === $s['zona'] && $p['riego'] === $s['riego']) {
        $candidatas[] = $p['ref'];
    }
}
?>
<h1>Solicitud de parcela · Pantalla 3 de 3</h1>
<ul>
    <li>Persona: <?= htmlspecialchars($s['persona']) ?></li>
    <li>Contacto: <?= htmlspecialchars($s['contacto']) ?></li>
    <li>Zona: <?= htmlspecialchars($s['zona']) ?> · Riego: <?= htmlspecialchars($s['riego']) ?></li>
    <li>Parcelas libres que encajan: <?= $candidatas === [] ? 'ninguna ahora mismo (lista de espera)' : htmlspecialchars(implode(', ', $candidatas)) ?></li>
</ul>
<form action="" method="post">
    <input type="hidden" name="confirmar" value="1">
    <button type="submit">Confirmar la solicitud</button>
</form>
