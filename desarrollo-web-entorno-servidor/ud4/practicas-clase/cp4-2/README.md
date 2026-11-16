# CP4.2 · El recibo de la cuota — ficheros de partida

- `recibo-todo.php`: el recibo con todo en un fichero. Funciona; es el «antes».
- `recibo.php`: el mismo recibo separado en guion y plantilla. Trae dos fallos.
- `plantillas/recibo.php`: la plantilla del recibo, con su contrato en la primera línea.
- `plantillas.php`: el fichero del apartado 4 de la unidad, tal cual (`e()`, `render()`, `capturar()` y `render_pagina()`).
- `utilidades.php`: `cuota_anual()` y `parcela_por_ref()`.
- `datos/parcelas.php` y `datos/hortelanos.php`: las ocho parcelas y quién lleva cada una de las adjudicadas.

Se sirve con `php -d display_errors=1 -d html_errors=0 -S localhost:8000` desde esta carpeta y se prueba con `curl`.

Enunciado en el cuaderno de prácticas del módulo (página «Cuaderno de prácticas», sección UD4).
