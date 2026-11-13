<?php
declare(strict_types=1);
// baja.php — un socio se borra de una salida: formulario POST protegido con token
require __DIR__ . '/auth.php';
require __DIR__ . '/csrf.php';
$yo      = requiere_login();
$salidas = require __DIR__ . '/datos/salidas.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    csrf_verificar();                                    // primera línea del procesado: sin token válido, nada
    $indice = filter_var($_POST['salida'] ?? '', FILTER_VALIDATE_INT);
    if ($indice === false || !isset($salidas[$indice])) {
        $_SESSION['flash'] = 'Esa salida no existe.';
    } else {
        $_SESSION['flash'] = "Baja registrada en {$salidas[$indice]['nombre']}.";
    }
    header('Location: baja.php');
    exit;
}

$mensaje = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);
?>
<?php if ($mensaje !== null): ?><p class="aviso"><?= htmlspecialchars($mensaje) ?></p><?php endif; ?>
<form action="" method="post">
    <?= csrf_campo() ?>
    <label>Salida <select name="salida">
        <?php foreach ($salidas as $i => $s): ?>
        <option value="<?= $i ?>"><?= htmlspecialchars($s['nombre']) ?></option>
        <?php endforeach; ?>
    </select></label>
    <button type="submit">Darme de baja</button>
</form>
