-- parcelas.sql — tabla de parcelas de la Asociación de Huertos del Soto (datos de aula, ficticios)
-- Mismas ocho filas que datos/parcelas.php. Carga: mysql --default-character-set=utf8mb4 -u huerto -p huerto < parcelas.sql

CREATE TABLE IF NOT EXISTS parcelas (
    ref        CHAR(3)      NOT NULL PRIMARY KEY,
    zona       VARCHAR(20)  NOT NULL,
    superficie INT UNSIGNED NOT NULL,
    riego      ENUM('goteo', 'manta') NOT NULL,
    estado     ENUM('libre', 'adjudicada') NOT NULL DEFAULT 'libre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO parcelas (ref, zona, superficie, riego, estado) VALUES
    ('H01', 'Ribera', 60,  'goteo', 'adjudicada'),
    ('H02', 'Ribera', 45,  'manta', 'libre'),
    ('H03', 'Eras',   80,  'goteo', 'adjudicada'),
    ('H04', 'Eras',   100, 'manta', 'adjudicada'),
    ('H05', 'Soto',   40,  'goteo', 'libre'),
    ('H06', 'Soto',   120, 'goteo', 'adjudicada'),
    ('H07', 'Soto',   55,  'manta', 'libre'),
    ('H08', 'Ribera', 90,  'goteo', 'adjudicada');
