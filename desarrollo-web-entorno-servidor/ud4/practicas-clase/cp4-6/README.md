# CP4.6 · La calculadora del riego — ficheros de partida

- `calculadora.php` y `plantillas/calculadora.php`: el formulario de la calculadora. Lee lo que llega y pinta el formulario; la verificación, los errores, el repoblado y el resultado los pones tú.
- `apuntarse.php` y `plantillas/apuntarse.php`: un formulario de un solo botón que siempre contesta `403`. El guion está bien.
- `sello.php`: el sello de los formularios `POST`, el mismo del cuaderno de la UD3. No se modifica.
- `plantillas.php`: el fichero del apartado 4 de la unidad, tal cual.
- `utilidades.php`: la lista de días, el caudal de cada tipo de riego y `parcela_por_ref()`.
- `datos/parcelas.php`: las ocho parcelas.

Se sirve con PHP Server, con esta carpeta abierta en VS Code (`http://localhost:3000/calculadora.php`), y se prueba en el navegador: la página, «Ver código fuente» y la pestaña Red. Los errores tienen que verse en la página; si en tu equipo no se ven, lanza el servidor a mano desde esta carpeta con `php -d display_errors=1 -S localhost:3000`.

Enunciado en el cuaderno de prácticas del módulo (página «Cuaderno de prácticas», sección UD4).
