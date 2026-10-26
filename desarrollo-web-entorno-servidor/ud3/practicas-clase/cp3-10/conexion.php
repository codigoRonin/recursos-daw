<?php
declare(strict_types=1);
// conexion.php — conexión PDO a la base de datos del huerto (uso instrumental: el acceso a datos se trabaja en la UD6)
// Ajusta el DSN, el usuario y la contraseña a los de TU gestor (los del aula, publicados en Classroom).
function abrir(): PDO
{
    return new PDO('mysql:host=127.0.0.1;dbname=huerto;charset=utf8mb4', 'huerto', 'huerto', [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,   // los errores lanzan excepción, no pasan en silencio
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,         // filas como arrays asociativos, como en parcelas.php
    ]);
}
