<?php
declare(strict_types=1);
// apuntarse.php — apuntarse a la limpieza de la acequia del sábado: un formulario POST de un solo botón (el guion no se modifica)
require __DIR__ . '/plantillas.php';
require __DIR__ . '/sello.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    sello_comprobar();                        // sin el sello de esta sesión, 403 y se termina
    $_SESSION['apuntado'] = true;
    header('Location: apuntarse.php');
    exit;
}

render('apuntarse', ['apuntado' => isset($_SESSION['apuntado']), 'sello' => sello_actual()]);
