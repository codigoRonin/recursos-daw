<?php // cartel.php — cartel de la puerta del huerto, servido con php -S
$asociacion = 'Asociación de Huertos del Soto';
$horario = 'de 8 a 20 h';
// Nota interna: el candado se cambia el primer lunes de cada mes.
?>
<!-- Combinación del candado de la puerta: 4071 -->
<h1>Huertos del Soto</h1>
<p>Parcelas de la <?= $asociacion ?>. Puerta abierta <?= $horario ?>.</p>
<!-- Cartel generado desde el servidor de la asociación -->
