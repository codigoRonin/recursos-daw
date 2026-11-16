<?php declare(strict_types=1); // plantillas/panel.php — recibe: $avisos (lista de asunto y urgente), $turnos (lista de hora y ref), $libres (lista de referencias), $asamblea (cuando y temas, o null) ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Panel del día · Asociación de Huertos del Soto</title>
</head>
<body>
<h1>Panel del día</h1>
<section>
    <h2>Avisos</h2>
    <ul>
<?php foreach ($avisos as $aviso): ?>
        <li><?= e($aviso['asunto']) ?></li>
<?php endforeach; ?>
    </ul>
</section>
<section>
    <h2>Turnos de riego de hoy</h2>
    <ul>
<?php foreach ($turnos as $turno): ?>
        <li><?= e($turno['hora']) ?> · <?= e($turno['ref']) ?></li>
<?php endforeach; ?>
    </ul>
</section>
<section>
    <h2>Parcelas libres</h2>
    <table>
        <tr><th>Parcela</th></tr>
<?php foreach ($libres as $ref): ?>
        <tr><td><?= e($ref) ?></td></tr>
<?php endforeach; ?>
    </table>
</section>
<section>
    <h2>Próxima asamblea</h2>
    <p><?= e($asamblea['cuando']) ?></p>
    <ol>
<?php foreach ($asamblea['temas'] as $tema): ?>
        <li><?= e($tema) ?></li>
<?php endforeach; ?>
    </ol>
</section>
</body>
</html>
