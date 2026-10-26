<?php
declare(strict_types=1);
// consulta.php — una parcela por su referencia, desde el terminal: php consulta.php H03
require __DIR__ . '/conexion.php';

/** La parcela con esa referencia, o null si no existe. */
function parcela_por_ref(string $ref): ?array
{
    $sentencia = abrir()->prepare('SELECT ref, zona, superficie, riego, estado FROM parcelas WHERE ref = :ref');
    $sentencia->execute(['ref' => $ref]);   // el dato viaja como PARÁMETRO, nunca pegado en el SQL
    return $sentencia->fetch();
}

$ref = $argv[1] ?? '';
if ($ref === '') {
    fwrite(STDERR, "Uso: php consulta.php REF\n");
    exit(1);
}

$p = parcela_por_ref($ref);
if ($p === null) {
    echo "No hay ninguna parcela {$ref}.\n";
    exit(2);
}
echo "{$p['ref']} · {$p['zona']} · {$p['superficie']} m² · riego por {$p['riego']} · {$p['estado']}\n";
