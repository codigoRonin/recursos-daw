<?php
// datos/usuarios.php — socios, monitores y administración del Club de Montaña Os Ibones (datos de aula, ficticios)
// Este fichero DEVUELVE el array: cárgalo con  $usuarios = require __DIR__ . '/datos/usuarios.php';
// Las contraseñas NO están aquí: solo su hash (password_hash). Contraseñas de aula: ver README del repositorio.
return [
    1 => ['usuario' => 'lucia.ramos', 'nombre' => 'Lucía Ramos', 'correo' => 'lucia.ramos@example.org', 'rol' => 'socio',
          'hash' => '$2y$10$pl.c1VhKXo9QiPWHKOUH1OeIaq3s.UCkJ5zRED/O7d5uqkLA4OXv.'],
    2 => ['usuario' => 'jorge.aisa', 'nombre' => 'Jorge Aísa', 'correo' => 'jorge.aisa@example.org', 'rol' => 'socio',
          'hash' => '$2y$10$impfV8UY664moovFCu5xn.igHl1D/OCo7byCOB0i41XDSlKWlkzvm'],
    3 => ['usuario' => 'marta.gil', 'nombre' => 'Marta Gil', 'correo' => 'marta.gil@example.org', 'rol' => 'socio',
          'hash' => '$2y$10$WtvhPcn8HremLB/B5bwu8OBr7uU/19HoWuL5hW18IhvmIAf.CR0Lq'],
    4 => ['usuario' => 'pablo.lobera', 'nombre' => 'Pablo Lobera', 'correo' => 'pablo.lobera@example.org', 'rol' => 'socio',
          'hash' => '$2y$10$bui2NXhvYeZKGX2Vbxs59.PSKhYCDVEzBrcD858zhi1vK.Jx9ajbW'],
    5 => ['usuario' => 'nuria.sanz', 'nombre' => 'Nuria Sanz', 'correo' => 'nuria.sanz@example.org', 'rol' => 'socio',
          'hash' => '$2y$10$fNYUjW1KLmygJOlvwwobMugaVjQc4BEy2DB5OppjnAjEsiv4BPVEu'],
    6 => ['usuario' => 'carlos.mur', 'nombre' => 'Carlos Mur', 'correo' => 'carlos.mur@example.org', 'rol' => 'monitor',
          'hash' => '$2y$10$4rim0MTSGUHKIzKT2QoQperBrQyCdsToiAIw4JDZ94Sn6f24VoioW'],
    7 => ['usuario' => 'elena.pueyo', 'nombre' => 'Elena Pueyo', 'correo' => 'elena.pueyo@example.org', 'rol' => 'monitor',
          'hash' => '$2y$10$ZAUNj5v2HCQjO2jThLx3Suyg5dm0EFvmD9grj3uUaKy./4MfMkr9e'],
    8 => ['usuario' => 'junta', 'nombre' => 'Junta directiva', 'correo' => 'junta@example.org', 'rol' => 'administracion',
          'hash' => '$2y$10$XXmfvGef4XcaKV.vZXBS3ezsMttVxPqSWeOWGCwchZdrHadRLk3EC'],
];
