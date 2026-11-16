<?php
declare(strict_types=1);
// plantillas.php — las herramientas de la unidad: escapar al pintar y renderizar una plantilla con sus datos

/** Escapa un valor para imprimirlo dentro de HTML, sea texto o el valor de un atributo. */
function e(string|int|float|null $valor): string {
    return htmlspecialchars((string) $valor);
}

/** Pinta la plantilla plantillas/<nombre>.php, que solo verá las variables de $datos. */
function render(string $plantilla, array $datos = []): void {
    incluir_aislado(__DIR__ . '/plantillas/' . $plantilla . '.php', $datos);
}

/** Ejecuta el fichero sin ninguna variable propia a la vista: no tiene parámetros con nombre a propósito. */
function incluir_aislado(): void {
    extract(func_get_arg(1));   // segundo argumento: los datos, convertidos en variables
    require func_get_arg(0);    // primer argumento: la ruta del fichero
}

/** Devuelve como texto lo que la plantilla habría enviado: la pinta con un búfer de salida abierto. */
function capturar(string $plantilla, array $datos = []): string {
    ob_start();                   // desde aquí, lo que se imprime se guarda
    render($plantilla, $datos);
    return ob_get_clean();        // lo guardado, como texto; el búfer queda cerrado
}

/** Pinta una página entera: la plantilla, ya capturada, dentro del layout. $marco lleva lo que pide el layout. */
function render_pagina(string $plantilla, array $datos, array $marco): void {
    $marco['contenido'] = capturar($plantilla, $datos);
    render('layout', $marco);
}
