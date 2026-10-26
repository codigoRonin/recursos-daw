# CP3.10 · Las parcelas, en una tabla — ficheros de partida

**Esta práctica necesita el gestor de bases de datos del aula** (MySQL o MariaDB) con un usuario que pueda crear tablas en una base de datos propia. Las credenciales del aula las publica el docente en Classroom; en casa, las de tu instalación.

- `parcelas.sql`: crea la tabla `parcelas` con las ocho parcelas de la asociación. Carga: `mysql --default-character-set=utf8mb4 -u TU_USUARIO -p TU_BASE < parcelas.sql`.
- `conexion.php`: la función `abrir()` con el DSN, el usuario y la contraseña **de ejemplo** (`huerto` / `huerto` / base `huerto`): ajústalos a los tuyos antes de nada.
- `consulta.php`: una parcela por su referencia, desde el terminal (`php consulta.php H03`). Con una referencia que no existe, revienta.
- `libres.php`: las parcelas libres de una zona, servido (`php -S localhost:8000` desde esta carpeta; `libres.php?zona=Ribera`).

Enunciado en el cuaderno de prácticas del módulo (página «Cuaderno de prácticas», sección UD3).
