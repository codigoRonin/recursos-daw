<?php declare(strict_types=1); // plantillas/panel.php — recibe: $perfil, $avisos, $cuotas (lista de ref, persona y debe), $incidencias (lista de ref, persona y asunto) ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Panel · Asociación de Huertos del Soto</title>
</head>
<body>
<h1>Panel de la asociación</h1>
<p>Estás viendo el panel como: <?= e($perfil) ?></p>
<section>
    <h2>Avisos</h2>
    <ul>
<?php foreach ($avisos as $aviso): ?>
        <li><?= e($aviso) ?></li>
<?php endforeach; ?>
    </ul>
</section>
<section<?php if (!in_array($perfil, ['tesoreria', 'presidencia'], true)): ?> hidden<?php endif; ?>>
    <h2>Cuotas pendientes</h2>
    <ul>
<?php foreach ($cuotas as $cuota): ?>
        <li><?= e($cuota['ref']) ?> · <?= e($cuota['persona']) ?> · <?= e($cuota['debe']) ?> €</li>
<?php endforeach; ?>
    </ul>
</section>
<section<?php if (!in_array($perfil, ['vocal', 'presidencia'], true)): ?> hidden<?php endif; ?>>
    <h2>Incidencias abiertas</h2>
    <ul>
<?php foreach ($incidencias as $incidencia): ?>
        <li><?= e($incidencia['ref']) ?> · <?= e($incidencia['persona']) ?> · <?= e($incidencia['asunto']) ?></li>
<?php endforeach; ?>
    </ul>
</section>
</body>
</html>
