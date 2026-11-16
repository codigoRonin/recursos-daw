<?php declare(strict_types=1); // plantillas/parciales/enlace.php — recibe: $destino (el guion, sin .php), $letrero, $actual (bool). No deja salto de línea: el menú sale en una sola ?>
    <a href="<?= e($destino) ?>.php"<?php if ($actual): ?> aria-current="page"<?php endif; ?>><?= e($letrero) ?></a><?php // sin salto ?>
