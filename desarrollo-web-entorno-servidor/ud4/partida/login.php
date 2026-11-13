<?php
declare(strict_types=1);
// login.php — inicio de sesión: comprobar credenciales y abrir una sesión autenticada
require __DIR__ . '/sesion.php';
require __DIR__ . '/almacen.php';

$mensaje = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);
$error = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = trim($_POST['usuario'] ?? '');
    $clave   = $_POST['clave'] ?? '';
    $u       = buscar_usuario($usuario);

    if ($u !== null && password_verify($clave, $u['hash'])) {
        session_regenerate_id(true);               // sesión nueva al autenticar: cierra la fijación de sesión
        $_SESSION['usuario'] = [                   // en sesión, lo mínimo: nunca la contraseña ni el hash
            'usuario' => $u['usuario'],
            'nombre'  => $u['nombre'],
            'rol'     => $u['rol'],
        ];
        header('Location: mi-ficha.php');
        exit;
    }
    $error = 'Credenciales no válidas.';           // genérico: no decimos si falló el usuario o la contraseña
}
?>
<?php if ($mensaje !== null): ?><p class="aviso"><?= htmlspecialchars($mensaje) ?></p><?php endif; ?>
<?php if ($error !== null): ?><p class="error"><?= htmlspecialchars($error) ?></p><?php endif; ?>
<form action="" method="post">
    <label>Usuario <input type="text" name="usuario"></label>
    <label>Contraseña <input type="password" name="clave"></label>
    <button type="submit">Entrar</button>
</form>
