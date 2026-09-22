-- datos/usuarios.sql — tabla de usuarios del Club de Montaña Os Ibones (datos de aula, ficticios)
-- Mismas ocho filas y mismos hashes que datos/usuarios.php. Carga: mysql -u club -p club < usuarios.sql

CREATE TABLE IF NOT EXISTS usuarios (
    id      INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(30)  NOT NULL UNIQUE,
    nombre  VARCHAR(60)  NOT NULL,
    correo  VARCHAR(120) NOT NULL,
    rol     ENUM('socio', 'monitor', 'administracion') NOT NULL DEFAULT 'socio',
    hash    VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO usuarios (id, usuario, nombre, correo, rol, hash) VALUES
    (1, 'lucia.ramos', 'Lucía Ramos', 'lucia.ramos@example.org', 'socio', '$2y$10$pl.c1VhKXo9QiPWHKOUH1OeIaq3s.UCkJ5zRED/O7d5uqkLA4OXv.'),
    (2, 'jorge.aisa', 'Jorge Aísa', 'jorge.aisa@example.org', 'socio', '$2y$10$impfV8UY664moovFCu5xn.igHl1D/OCo7byCOB0i41XDSlKWlkzvm'),
    (3, 'marta.gil', 'Marta Gil', 'marta.gil@example.org', 'socio', '$2y$10$WtvhPcn8HremLB/B5bwu8OBr7uU/19HoWuL5hW18IhvmIAf.CR0Lq'),
    (4, 'pablo.lobera', 'Pablo Lobera', 'pablo.lobera@example.org', 'socio', '$2y$10$bui2NXhvYeZKGX2Vbxs59.PSKhYCDVEzBrcD858zhi1vK.Jx9ajbW'),
    (5, 'nuria.sanz', 'Nuria Sanz', 'nuria.sanz@example.org', 'socio', '$2y$10$fNYUjW1KLmygJOlvwwobMugaVjQc4BEy2DB5OppjnAjEsiv4BPVEu'),
    (6, 'carlos.mur', 'Carlos Mur', 'carlos.mur@example.org', 'monitor', '$2y$10$4rim0MTSGUHKIzKT2QoQperBrQyCdsToiAIw4JDZ94Sn6f24VoioW'),
    (7, 'elena.pueyo', 'Elena Pueyo', 'elena.pueyo@example.org', 'monitor', '$2y$10$ZAUNj5v2HCQjO2jThLx3Suyg5dm0EFvmD9grj3uUaKy./4MfMkr9e'),
    (8, 'junta', 'Junta directiva', 'junta@example.org', 'administracion', '$2y$10$XXmfvGef4XcaKV.vZXBS3ezsMttVxPqSWeOWGCwchZdrHadRLk3EC');
