<?php
declare(strict_types=1);
// r1.php — la zona que se enseña depende del perfil de quien ha entrado (el perfil se anota en la sesión al entrar)
session_start();
$perfil = $_COOKIE['perfil'] ?? 'hortelano';
echo $perfil === 'presidencia' ? "Panel de presidencia\n" : "Zona de hortelanos\n";
// Salida esperada, servido desde simulacro/, con  curl -b "perfil=presidencia" http://localhost:8000/arreglos/r1.php :
// Zona de hortelanos
