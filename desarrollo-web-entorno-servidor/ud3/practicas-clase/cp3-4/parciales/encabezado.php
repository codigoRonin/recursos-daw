<?php
// parciales/encabezado.php — cabecera común de las páginas de la asamblea
$titulo_pagina = $titulo_pagina ?? "Asamblea de otoño";
?>
<header>
    <strong>Asociación de Huertos del Soto</strong> · <?= htmlspecialchars($titulo_pagina) ?>
</header>
