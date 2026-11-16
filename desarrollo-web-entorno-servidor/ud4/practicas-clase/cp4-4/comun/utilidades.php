<?php
declare(strict_types=1);
// comun/utilidades.php — funciones de la asociación que usan varios guiones (PHP puro: sin etiqueta de cierre)

const MESES = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];

/** '2026-11-23' → '23 de noviembre'. Recibe siempre fechas del fichero de datos, con esa forma. */
function dia_largo(string $dia): string {
    return (int) substr($dia, 8, 2) . ' de ' . MESES[(int) substr($dia, 5, 2) - 1];
}

/** Guarda una página en la carpeta sitio/ (la crea si no existe) y devuelve cuántos bytes ha escrito. */
function guardar_pagina(string $fichero, string $html): int {
    $carpeta = __DIR__ . '/../sitio';
    if (!is_dir($carpeta)) {
        mkdir($carpeta);
    }
    return file_put_contents($carpeta . '/' . $fichero, $html);
}

/** El fichero de la página de una zona: 'Ribera' → 'zona-ribera.html'. */
function fichero_de_zona(string $zona): string {
    return 'zona-' . strtolower($zona) . '.html';
}
