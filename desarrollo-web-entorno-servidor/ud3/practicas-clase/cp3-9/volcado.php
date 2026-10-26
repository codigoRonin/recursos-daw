<?php
declare(strict_types=1);
// volcado.php — herramienta TEMPORAL de depuración: enseña el cajón de la sesión de quien la pide. Se borra antes de entregar nada.
session_start();
header('Content-Type: text/plain; charset=UTF-8');
var_dump($_SESSION);
