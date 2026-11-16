<?php
declare(strict_types=1);
// entrar-como.php — ATAJO DE AULA, no es un inicio de sesión: guarda un perfil en la sesión para poder probar el panel
// Uso:  entrar-como.php?perfil=vocal   ·   entrar-como.php?perfil=visitante  vuelve a dejarte fuera   (no se modifica)
const PERFILES = ['hortelano', 'vocal', 'tesoreria', 'presidencia'];
session_start();

$perfil = $_GET['perfil'] ?? '';
if (is_string($perfil) && in_array($perfil, PERFILES, true)) {
    session_regenerate_id(true);
    $_SESSION['perfil'] = $perfil;
} else {
    unset($_SESSION['perfil']);
}
header('Location: panel.php');
exit;
