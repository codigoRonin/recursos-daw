<?php
// parciales/utilidades.php — funciones comunes de la votación (PHP puro)

/** La etiqueta en castellano de un voto guardado como si/no. */
function etiqueta_voto(string $voto): string
{
    return $voto === 'si' ? 'sí' : 'no';
}
?>

