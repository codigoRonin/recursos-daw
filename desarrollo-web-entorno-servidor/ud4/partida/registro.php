<?php
declare(strict_types=1);
// registro.php — alta de un socio nuevo: validar en el servidor, guardar SOLO el hash
require __DIR__ . '/sesion.php';
require __DIR__ . '/almacen.php';

$errores = [];
$datos   = ['usuario' => '', 'nombre' => '', 'correo' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $datos['usuario'] = trim($_POST['usuario'] ?? '');
    $datos['nombre']  = trim($_POST['nombre'] ?? '');
    $datos['correo']  = trim($_POST['correo'] ?? '');
    $clave            = $_POST['clave'] ?? '';

    if (!preg_match('/^[a-z0-9.]{3,30}$/', $datos['usuario'])) {
        $errores[] = 'El usuario debe tener entre 3 y 30 caracteres: minúsculas, dígitos o punto.';
    } elseif (buscar_usuario($datos['usuario']) !== null) {
        $errores[] = 'Ese nombre de usuario ya está en uso.';
    }
    if ($datos['nombre'] === '' || mb_strlen($datos['nombre']) > 60) {
        $errores[] = 'El nombre es obligatorio (máximo 60 caracteres).';
    }
    if (filter_var($datos['correo'], FILTER_VALIDATE_EMAIL) === false) {
        $errores[] = 'El correo no es válido.';
    }
    if (mb_strlen($clave) < 8) {
        $errores[] = 'La contraseña debe tener al menos 8 caracteres.';
    }

    if ($errores === []) {
        guardar_usuario_nuevo([
            'usuario' => $datos['usuario'],
            'nombre'  => $datos['nombre'],
            'correo'  => $datos['correo'],
            'rol'     => 'socio',                                   // el rol lo decide el servidor, nunca el formulario
            'hash'    => password_hash($clave, PASSWORD_DEFAULT),  // la contraseña en claro no se guarda jamás
        ]);
        $_SESSION['flash'] = 'Alta completada. Ya puedes iniciar sesión.';
        header('Location: login.php');
        exit;
    }
}
?>
<?php foreach ($errores as $e): ?>
<p class="error"><?= htmlspecialchars($e) ?></p>
<?php endforeach; ?>
<form action="" method="post">
    <label>Usuario <input type="text" name="usuario" value="<?= htmlspecialchars($datos['usuario']) ?>"></label>
    <label>Nombre <input type="text" name="nombre" value="<?= htmlspecialchars($datos['nombre']) ?>"></label>
    <label>Correo <input type="email" name="correo" value="<?= htmlspecialchars($datos['correo']) ?>"></label>
    <label>Contraseña <input type="password" name="clave"></label>
    <button type="submit">Darme de alta</button>
</form>
