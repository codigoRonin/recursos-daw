<?php
// datos/usuarios-escuela.php — alumnado, profesorado y secretaría de la Escuela Comarcal de Música Val d'Onsella (datos de aula, ficticios)
// Este fichero DEVUELVE el array: cárgalo con  $usuarios = require __DIR__ . '/datos/usuarios-escuela.php';
// Solo el hash de cada contraseña (password_hash). Contraseñas de aula: ver README del repositorio.
return [
    1 => ['usuario' => 'ines.bercero', 'nombre' => 'Inés Bercero', 'correo' => 'ines.bercero@example.org', 'rol' => 'alumnado', 'especialidad' => 'violin',
          'hash' => '$2y$10$UE4XLIdLJShwkddH2kFeEuJKPfCVcUCI720BL/DB5asA5tqEUuPeW'],
    2 => ['usuario' => 'hugo.lasala', 'nombre' => 'Hugo Lasala', 'correo' => 'hugo.lasala@example.org', 'rol' => 'alumnado', 'especialidad' => 'piano',
          'hash' => '$2y$10$SW2979SSdV3RGPkCvSJNpu4usFCNka73CVaAzR77ZxsVY80.v0g5W'],
    3 => ['usuario' => 'aroa.maestro', 'nombre' => 'Aroa Maestro', 'correo' => 'aroa.maestro@example.org', 'rol' => 'alumnado', 'especialidad' => 'clarinete',
          'hash' => '$2y$10$JgkPTwYFDCec8Kgr2ukka.R/NujagV5e6vTl1Jd/.q6z7HWAUNd6K'],
    4 => ['usuario' => 'dario.foncea', 'nombre' => 'Darío Foncea', 'correo' => 'dario.foncea@example.org', 'rol' => 'alumnado', 'especialidad' => 'guitarra',
          'hash' => '$2y$10$DNG4HaowZYFGr/bx1rv3pupwCLtwjjlIxCgOlW7GOTSSubL5IUNba'],
    5 => ['usuario' => 'leire.arbues', 'nombre' => 'Leire Arbués', 'correo' => 'leire.arbues@example.org', 'rol' => 'alumnado', 'especialidad' => 'piano',
          'hash' => '$2y$10$9pTZgs5QRQ4diTKA5hqli.eZ1wob.Ii9XKMxJgrDNSeGVZwmdCc2S'],
    6 => ['usuario' => 'unai.sierra', 'nombre' => 'Unai Sierra', 'correo' => 'unai.sierra@example.org', 'rol' => 'alumnado', 'especialidad' => 'trompeta',
          'hash' => '$2y$10$W.nR1xoR04lVkcdcTU/ffOse/s1IqNEAHkSmc2dbbg6ov2FiAMRHG'],
    7 => ['usuario' => 'sofia.longas', 'nombre' => 'Sofía Longás', 'correo' => 'sofia.longas@example.org', 'rol' => 'profesorado', 'especialidad' => 'piano',
          'hash' => '$2y$10$lGSfc0UlW4..WNU4JOYfK.3C8ih0Gz.IVmTUWdDbNpjm5mH6tIywS'],
    8 => ['usuario' => 'mateo.uriol', 'nombre' => 'Mateo Uriol', 'correo' => 'mateo.uriol@example.org', 'rol' => 'profesorado', 'especialidad' => 'viento',
          'hash' => '$2y$10$82llvsfgU4JaVxfXZXDJKOOIerzIFgMAa5ochG72KfB76kyqxRyoe'],
    9 => ['usuario' => 'clara.ezpeleta', 'nombre' => 'Clara Ezpeleta', 'correo' => 'clara.ezpeleta@example.org', 'rol' => 'profesorado', 'especialidad' => 'cuerda',
          'hash' => '$2y$10$mZlxewt4EoOSd0K.x.gLDedtADJhb8wqb/mFsbK8yQxXpCsfIDHEq'],
    10 => ['usuario' => 'secretaria', 'nombre' => 'Secretaría', 'correo' => 'secretaria@example.org', 'rol' => 'secretaria', 'especialidad' => '',
          'hash' => '$2y$10$DrRqprTDQm1MSYWpqecjo.uByv79QARV4Ss1p.YptUTXv0YaKoAHO'],
];
