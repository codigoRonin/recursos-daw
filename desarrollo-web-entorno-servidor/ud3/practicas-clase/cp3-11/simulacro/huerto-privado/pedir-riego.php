<?php
declare(strict_types=1);
// pedir-riego.php — pedir un riego extra para una parcela: formulario POST protegido con sello y patrón Post/Redirect/Get.
// Completa el bloque del POST.
require __DIR__ . '/puertas.php';
require __DIR__ . '/sello.php';
$yo = exige_entrada();
$parcelas = require __DIR__ . '/../datos/parcelas.php';
const HORARIOS = ['manana', 'tarde'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1) El sello, antes que nada. 2) La parcela tiene que ser una de las ocho y la franja, manana o tarde; si no, el
    // aviso «Parcela o franja no válidas.». 3) Si vale, se añade ['parcela' => …, 'franja' => …] a $_SESSION['riegos'] y el
    // aviso es «Riego pedido: H03, tarde.». 4) En los dos casos, el aviso va en $_SESSION['aviso'] y se redirige a mis-riegos.php.
    // …
}
?>
<form action="" method="post">
    <?= sello_campo() ?>
    <label>Parcela <input type="text" name="parcela" value="<?= htmlspecialchars($yo['parcela'] ?? '') ?>"></label>
    <label>Franja <input type="text" name="franja"></label>
    <button type="submit">Pedir riego</button>
</form>
