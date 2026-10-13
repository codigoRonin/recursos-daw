<?php declare(strict_types=1); ?>
<?php
// tabla.php — listado de parcelas con filtro por superficie mínima (?minimo=)
require __DIR__ . '/huerto.php';
$parcelas = require __DIR__ . '/datos/parcelas.php';

// Lee ?minimo= de la URL: si no viene, no es un entero válido o es negativo, el mínimo es 0 (se listan todas).
$minimo = 0;
// …
?>
<h1>Parcelas con al menos <?= $minimo ?> m²</h1>
<table>
    <tr><th>Código</th><th>Zona</th><th>Superficie</th><th>Cuota</th><th>Estado</th></tr>
    <!-- una fila por parcela con superficie >= mínimo; class="libre" o class="adjudicada" en el <tr> -->
</table>
<p class="resumen"><!-- N parcelas · M m² --></p>
