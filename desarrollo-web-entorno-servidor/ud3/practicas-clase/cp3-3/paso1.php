<?php
declare(strict_types=1);
// paso1.php — solicitud de parcela, pantalla 1 de 3: quién la pide
session_start();
$errores = [];
$datos   = ['persona' => '', 'contacto' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $datos['persona']  = trim($_POST['persona'] ?? '');
    $datos['contacto'] = trim($_POST['contacto'] ?? '');
    if ($datos['persona'] === '') {
        $errores[] = 'Indica quién pide la parcela.';
    }
    if (filter_var($datos['contacto'], FILTER_VALIDATE_EMAIL) === false) {
        $errores[] = 'El contacto tiene que ser un correo válido.';
    }
    if ($errores === []) {
        $_SESSION['solicitud'] = ['persona' => $datos['persona'], 'contacto' => $datos['contacto']];
    }
}
?>
<h1>Solicitud de parcela · Pantalla 1 de 3</h1>
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && $errores === []): ?>
<p class="aviso">Datos guardados. Sigue en la <a href="paso2.php">pantalla 2</a>.</p>
<?php else: ?>
<?php foreach ($errores as $e): ?>
<p class="fallo"><?= htmlspecialchars($e) ?></p>
<?php endforeach; ?>
<form action="" method="post">
    <label>Persona: <input type="text" name="persona" value="<?= htmlspecialchars($datos['persona']) ?>"></label>
    <label>Contacto: <input type="text" name="contacto" value="<?= htmlspecialchars($datos['contacto']) ?>"></label>
    <button type="submit">Guardar y seguir</button>
</form>
<?php endif; ?>
