# CP4.5 · La caseta, ordenada — ficheros de partida

- `prestamos.php` y `plantillas/prestamos.php`: el libro de préstamos de la caseta, con una caja para buscar. Funciona, salvo con una petición fabricada.
- `plantillas.php`: el fichero del apartado 4 de la unidad, tal cual.
- `utilidades.php`: `fecha_valida()` y `dia_de_vuelta()`, para la tarea desde cero.
- `datos/prestamos.php`: los diez préstamos del libro.

Se sirve con PHP Server, con esta carpeta abierta en VS Code (`http://localhost:3000/prestamos.php`), y se prueba en el navegador: la página, «Ver código fuente» y la pestaña Red. Los errores tienen que verse en la página; si en tu equipo no se ven, lanza el servidor a mano desde esta carpeta con `php -d display_errors=1 -S localhost:3000`.

Enunciado en el cuaderno de prácticas del módulo (página «Cuaderno de prácticas», sección UD4).
