-- validaciones.sql — Cuaderno de prácticas de Bases de Datos · UD4 · práctica CP4.10
-- Histórico sintético de 200.000 validaciones de billete del servicio de transporte a demanda. Datos de aula, ficticios.
-- Necesita la base de datos `transporte` (guion transporte.sql). Se puede ejecutar tantas veces como haga falta:
-- cada vez deja la tabla como al principio, sin más índice que el de su clave primaria.
-- Usa la misma técnica que el guion del apartado 10.1 de los apuntes para fabricar las filas.

SET NAMES utf8mb4;
USE transporte;

DROP TABLE IF EXISTS validaciones;

CREATE TABLE validaciones (
    cod_validacion INT          PRIMARY KEY AUTO_INCREMENT,
    num_tarjeta    CHAR(9)      NOT NULL,
    cod_viaje      INT          NOT NULL,
    importe        DECIMAL(4,2) NOT NULL,
    momento        DATETIME     NOT NULL
);

INSERT INTO validaciones (num_tarjeta, cod_viaje, importe, momento)
SELECT CONCAT('CV-', LPAD(seq MOD 5000, 6, '0')),
       1 + (seq MOD 78),
       1.60 + 0.40 * (seq MOD 3),
       DATE_ADD('2026-01-01 06:00:00', INTERVAL seq * 2 MINUTE)
FROM (
    SELECT a.n + 10*b.n + 100*c.n + 1000*d.n + 10000*e.n + 100000*f.n AS seq
    FROM (SELECT 0 AS n UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4
          UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9) a
    CROSS JOIN (SELECT 0 AS n UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4
          UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9) b
    CROSS JOIN (SELECT 0 AS n UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4
          UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9) c
    CROSS JOIN (SELECT 0 AS n UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4
          UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9) d
    CROSS JOIN (SELECT 0 AS n UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4
          UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9) e
    CROSS JOIN (SELECT 0 AS n UNION ALL SELECT 1) f
) t;

SELECT COUNT(*) FROM validaciones;   -- debe devolver 200000
