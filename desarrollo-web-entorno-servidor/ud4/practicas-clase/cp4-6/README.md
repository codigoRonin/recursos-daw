# CP4.6 · La calculadora del riego — ficheros de partida

- `calculadora.php` y `plantillas/calculadora.php`: el formulario de la calculadora. Lee lo que llega y pinta el formulario; la verificación, los errores, el repoblado y el resultado los pones tú.
- `apuntarse.php` y `plantillas/apuntarse.php`: un formulario de un solo botón que siempre contesta `403`. El guion está bien.
- `sello.php`: el sello de los formularios `POST`, el mismo del cuaderno de la UD3. No se modifica.
- `plantillas.php`: el fichero del apartado 4 de la unidad, tal cual.
- `utilidades.php`: la lista de días, el caudal de cada tipo de riego y `parcela_por_ref()`.
- `datos/parcelas.php`: las ocho parcelas.

Se sirve con `php -d display_errors=1 -d html_errors=0 -S localhost:8000` desde esta carpeta y se prueba con `curl`; `apuntarse.php`, con un tarro de cookies.

Enunciado en el cuaderno de prácticas del módulo (página «Cuaderno de prácticas», sección UD4).
