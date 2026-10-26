<?php
declare(strict_types=1);
// solicitar.php — pedir una parcela libre: la solicitud queda PENDIENTE hasta que se confirme con un enlace de un solo uso
$parcelas = require __DIR__ . '/datos/parcelas.php';
const FICHERO_PENDIENTES = __DIR__ . '/datos/pendientes.json';
const VALIDEZ = 10 * 60;   // el enlace vale diez minutos

/** Guarda una solicitud pendiente y devuelve su enlace: un secreto aleatorio que solo conoce quien recibe el enlace. */
function generar_enlace(string $contacto, string $parcela): string
{
    $pendientes = json_decode((string) file_get_contents(FICHERO_PENDIENTES), true) ?? [];
    $t = bin2hex(random_bytes(16));                     // 32 caracteres hexadecimales imprevisibles
    $pendientes[] = ['t' => $t, 'contacto' => $contacto, 'parcela' => $parcela, 'caduca' => time() + VALIDEZ];
    file_put_contents(FICHERO_PENDIENTES, json_encode($pendientes, JSON_PRETTY_PRINT) . "\n", LOCK_EX);
    return 'confirmar.php?t=' . $t;
}

$libres = [];
foreach ($parcelas as $p) {
    if ($p['estado'] === 'libre') {
        $libres[] = $p['ref'];
    }
}

$errores = [];
$hecho   = ($_GET['hecho'] ?? '') === '1';
$enlace  = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contacto = trim($_POST['contacto'] ?? '');
    $parcela  = $_POST['parcela'] ?? '';
    if (filter_var($contacto, FILTER_VALIDATE_EMAIL) === false) {
        $errores[] = 'El contacto tiene que ser un correo válido.';
    }
    if (!in_array($parcela, $libres, true)) {
        $errores[] = 'Elige una parcela libre: ' . implode(', ', $libres) . '.';
    }
    if ($errores === []) {
        $enlace = generar_enlace($contacto, $parcela);
    }
}
?>
<h1>Solicitud de parcela</h1>
<?php if ($hecho): ?>
<p class="aviso">Solicitud confirmada. La junta se pondrá en contacto contigo.</p>
<?php elseif ($enlace !== null): ?>
<p class="aviso">Solicitud anotada. Confírmala con este enlace (en la vida real iría por correo): <a href="<?= htmlspecialchars($enlace) ?>"><?= htmlspecialchars($enlace) ?></a></p>
<?php else: ?>
<?php foreach ($errores as $e): ?>
<p class="fallo"><?= htmlspecialchars($e) ?></p>
<?php endforeach; ?>
<form action="" method="post">
    <label>Contacto: <input type="text" name="contacto"></label>
    <label>Parcela (libres: <?= htmlspecialchars(implode(', ', $libres)) ?>): <input type="text" name="parcela"></label>
    <button type="submit">Solicitar</button>
</form>
<?php endif; ?>
