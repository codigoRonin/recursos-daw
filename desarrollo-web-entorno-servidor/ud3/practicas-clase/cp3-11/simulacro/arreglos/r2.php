<?php
declare(strict_types=1);
// r2.php — quien no ha entrado va a la entrada; la lista no debe viajar
session_start();
if (!isset($_SESSION['cuenta'])) {
    header('Location: entrar.php');
}
echo "Lista de cuentas de la asociación: teresa.anso, mateo.larraz, julia.berges…\n";
// Salida esperada, servido desde simulacro/, con
//   curl -i http://localhost:8000/arreglos/r2.php | grep -v -E '^(Host|Date|Connection|Expires|Cache|Pragma|Content)'
// HTTP/1.1 302 Found
// Set-Cookie: PHPSESSID=<tu identificador>; path=/
// Location: entrar.php
// (y nada más: ninguna línea de cuerpo)
