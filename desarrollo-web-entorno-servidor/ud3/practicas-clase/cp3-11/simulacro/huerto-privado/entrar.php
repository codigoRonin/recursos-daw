<?php
declare(strict_types=1);
// entrar.php — inicio de sesión de la zona privada. Completa el bloque del POST.
require __DIR__ . '/arranque.php';
require __DIR__ . '/deposito.php';

$aviso = $_SESSION['aviso'] ?? null;
unset($_SESSION['aviso']);
$fallo = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cuenta     = trim($_POST['cuenta'] ?? '');
    $contrasena = $_POST['contrasena'] ?? '';
    // Comprobar las credenciales contra el depósito; si son correctas: llave nueva, lo mínimo en sesión
    // (en $_SESSION['cuenta']: cuenta, persona, perfil y parcela) y a mi-parcela.php; si no, el mensaje genérico
    // «Credenciales no válidas.» en $fallo.
    // …
}
?>
<?php if ($aviso !== null): ?><p class="aviso"><?= htmlspecialchars($aviso) ?></p><?php endif; ?>
<?php if ($fallo !== null): ?><p class="fallo"><?= htmlspecialchars($fallo) ?></p><?php endif; ?>
<form action="" method="post">
    <label>Cuenta <input type="text" name="cuenta"></label>
    <label>Contraseña <input type="password" name="contrasena"></label>
    <button type="submit">Entrar</button>
</form>
