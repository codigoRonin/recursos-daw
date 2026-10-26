<?php
declare(strict_types=1);
// paso2.php — solicitud de parcela, pantalla 2 de 3: qué parcela prefiere
$zonas  = ['Ribera', 'Eras', 'Soto'];
$riegos = ['goteo', 'manta'];

if (!isset($_SESSION['solicitud']['persona'])) {
    echo "<h1>Solicitud de parcela · Pantalla 2 de 3</h1>\n";
    echo "<p class=\"fallo\">Empieza por la <a href=\"paso1.php\">pantalla 1</a>.</p>\n";
    exit;
}

$errores = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $zona  = $_POST['zona'] ?? '';
    $riego = $_POST['riego'] ?? '';
    if (!in_array($zona, $zonas, true)) {
        $errores[] = 'Elige una zona: Ribera, Eras o Soto.';
    }
    if (!in_array($riego, $riegos, true)) {
        $errores[] = 'Elige un riego: goteo o manta.';
    }
    if ($errores === []) {
        $_SESSION['solicitud']['zona']  = $zona;
        $_SESSION['solicitud']['riego'] = $riego;
    }
}
?>
<h1>Solicitud de parcela · Pantalla 2 de 3</h1>
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && $errores === []): ?>
<p class="aviso">Preferencias guardadas. Sigue en la <a href="paso3.php">pantalla 3</a>.</p>
<?php else: ?>
<?php foreach ($errores as $e): ?>
<p class="fallo"><?= htmlspecialchars($e) ?></p>
<?php endforeach; ?>
<form action="" method="post">
    <label>Zona: <input type="text" name="zona"></label>
    <label>Riego: <input type="text" name="riego"></label>
    <button type="submit">Guardar y seguir</button>
</form>
<?php endif; ?>
