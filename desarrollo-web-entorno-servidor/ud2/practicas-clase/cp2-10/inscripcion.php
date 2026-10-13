<?php
declare(strict_types=1);
// inscripcion.php — alta de socio, revisada en el servidor


/**
 * Revisa los datos del alta y devuelve la lista de errores (vacía si todo es correcto).
 * Reglas: socio obligatorio; correo válido; superficie entera de 20 a 120;
 * antigüedad entera de 0 a 40 (0 = socio nuevo); riego de una lista fija (goteo o manta).
 */
function revisar_alta(array $datos): array {
    $errores = [];

    $socio = trim($datos['socio'] ?? '');
    if ($socio === '') {
        $errores[] = 'El nombre del socio es obligatorio.';
    }

    $correo = filter_var($datos['correo'] ?? '', FILTER_VALIDATE_EMAIL);
    if ($correo === false) {
        $errores[] = 'El correo no es válido.';
    }

    $superficie = filter_var($datos['superficie'] ?? '', FILTER_VALIDATE_INT);
    if ($superficie === false) {
        $errores[] = 'La superficie debe ser un número entero.';
    } elseif ($superficie < 20 || $superficie > 120) {
        $errores[] = 'La superficie debe estar entre 20 y 120 m².';
    }

    $antiguedad = filter_var($datos['antiguedad'] ?? '', FILTER_VALIDATE_INT);
    if (!$antiguedad) {
        $errores[] = 'La antigüedad debe ser un número entero.';
    } elseif ($antiguedad < 0 || $antiguedad > 40) {
        $errores[] = 'La antigüedad debe estar entre 0 y 40 años.';
    }

    $riegos = ['goteo', 'manta'];
    $riego = $datos['riego'] ?? '';
    if (!in_array($riego, $riegos, true)) {
        $errores[] = 'El riego tiene que ser goteo o manta.';
    }

    return $errores;
}

$metodo = $_SERVER['REQUEST_METHOD'];
$errores = [];
if ($metodo === 'POST') {
    $errores = revisar_alta($_POST);
}
?>
<h1>Alta de socio</h1>
<?php if ($metodo === 'POST' && $errores === []): ?>
    <p>Alta registrada: <?= htmlspecialchars(trim($_POST['socio'])) ?>, <?= htmlspecialchars($_POST['superficie']) ?> m², riego: <?= htmlspecialchars($_POST['riego']) ?>.</p>
<?php else: ?>
<?php if ($errores !== []): ?>
    <ul class="errores">
<?php foreach ($errores as $e): ?>
        <li><?= htmlspecialchars($e) ?></li>
<?php endforeach; ?>
    </ul>
<?php endif; ?>
    <form action="" method="post">
        <label>Socio: <input type="text" name="socio"></label>
        <label>Correo: <input type="text" name="correo"></label>
        <label>Superficie (m²): <input type="text" name="superficie"></label>
        <label>Años en la asociación: <input type="text" name="antiguedad"></label>
        <label>Riego (goteo o manta): <input type="text" name="riego"></label>
        <button type="submit">Enviar</button>
    </form>
<?php endif; ?>
