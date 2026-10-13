<?php
declare(strict_types=1);
// lectura.php — lectura del contador de agua de una parcela. El formulario ya está hecho; falta el servidor.

// Importe del agua: 0,45 € por cada 100 litros.
function importe_agua(int $litros): float {
    return $litros * 0.45 / 100;
}

$errores = [];     // un mensaje por campo, con el nombre del campo como clave
$parcela = '';
$correo = '';
$litros = '';
// …
?>
<h1>Lectura del contador</h1>
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && $errores === []): ?>
    <p class="acuse"><!-- Lectura registrada: parcela …, … litros: importe … € --></p>
<?php else: ?>
    <form action="" method="post">
        <label>Parcela: <input type="text" name="parcela" id="parcela" value="<?= htmlspecialchars($parcela) ?>"></label>
        <!-- aquí va el aviso del campo parcela, si lo hay -->
        <label>Correo: <input type="text" name="correo" id="correo" value="<?= htmlspecialchars($correo) ?>"></label>
        <!-- aquí va el aviso del campo correo, si lo hay -->
        <label>Litros: <input type="text" name="litros" id="litros" value="<?= htmlspecialchars($litros) ?>"></label>
        <!-- aquí va el aviso del campo litros, si lo hay -->
        <button type="submit">Enviar lectura</button>
    </form>
<?php endif; ?>
