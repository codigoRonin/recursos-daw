<?php
declare(strict_types=1);
// comun/utilidades.php — funciones de la asociación que usan los guiones (PHP puro: sin etiqueta de cierre)

const ZONAS = ['Ribera', 'Eras', 'Soto'];

/** Carga un fichero de datos por su nombre: datos_de('avisos') devuelve el array de avisos.php. */
function datos_de(string $fichero): array {
    return require __DIR__ . '/../web/datos/' . $fichero . '.php';
}

/** La zona que pide la URL (?zona=Eras), o '' si no pide ninguna o pide una que no está en la lista. La llaman los guiones. */
function zona_pedida(): string {
    $zona = $_GET['zona'] ?? '';
    return is_string($zona) && in_array($zona, ZONAS, true) ? $zona : '';
}

/** Las parcelas de una zona; con '', todas. */
function parcelas_de(array $parcelas, string $zona): array {
    $suyas = [];
    foreach ($parcelas as $parcela) {
        if ($zona === '' || $parcela['zona'] === $zona) {
            $suyas[] = $parcela;
        }
    }
    return $suyas;
}
