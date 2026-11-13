<?php
declare(strict_types=1);
// calendario.php — muestra el calendario y, si lo hay, el mensaje de un solo uso
session_start();
$salidas = require __DIR__ . '/datos/salidas.php';

$mensaje = $_SESSION['flash'] ?? null;   // leer...
unset($_SESSION['flash']);               // ...y consumir: la próxima petición ya no lo verá
?>
<?php if ($mensaje !== null): ?>
<p class="aviso"><?= htmlspecialchars($mensaje) ?></p>
<?php endif; ?>
<ul>
<?php foreach ($salidas as $i => $s): ?>
    <li><?= htmlspecialchars($s['nombre']) ?>
        <form action="inscribir.php" method="post">
            <input type="hidden" name="salida" value="<?= $i ?>">
            <button type="submit">Inscribirme</button>
        </form>
    </li>
<?php endforeach; ?>
</ul>
