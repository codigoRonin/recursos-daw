<?php declare(strict_types=1); // plantillas/parciales/turno.php — recibe: $turno ?>
    <tr><td><?= e($turno['dia']) ?></td><td><?= e($turno['hora']) ?></td><td><?= e($turno['ref']) ?></td><td><?= e($zonas[$turno['ref']]) ?></td></tr>
