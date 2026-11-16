# CP4.5 · La caseta, ordenada — ficheros de partida

- `prestamos.php` y `plantillas/prestamos.php`: el libro de préstamos de la caseta, con una caja para buscar. Funciona, salvo con una petición fabricada.
- `plantillas.php`: el fichero del apartado 4 de la unidad, tal cual.
- `utilidades.php`: `fecha_valida()` y `dia_de_vuelta()`, para la tarea desde cero.
- `datos/prestamos.php`: los diez préstamos del libro.

Se sirve con `php -d display_errors=1 -d html_errors=0 -S localhost:8000` desde esta carpeta y se prueba con `curl`.

Enunciado en el cuaderno de prácticas del módulo (página «Cuaderno de prácticas», sección UD4).
