# CP4.2 · El recibo de la cuota — ficheros de partida

- `recibo-todo.php`: el recibo con todo en un fichero. Funciona; es el «antes».
- `recibo.php`: el mismo recibo separado en guion y plantilla. Trae dos fallos.
- `plantillas/recibo.php`: la plantilla del recibo, con su contrato en la primera línea.
- `plantillas.php`: el fichero del apartado 4 de la unidad, tal cual (`e()`, `render()`, `capturar()` y `render_pagina()`).
- `utilidades.php`: `cuota_anual()` y `parcela_por_ref()`.
- `datos/parcelas.php` y `datos/hortelanos.php`: las ocho parcelas y quién lleva cada una de las adjudicadas.

Se sirve con PHP Server, con esta carpeta abierta en VS Code (`http://localhost:3000/recibo.php?ref=H03`), y se prueba en el navegador: la página, «Ver código fuente» y la pestaña Red. Los errores tienen que verse en la página; si en tu equipo no se ven, lanza el servidor a mano desde esta carpeta con `php -d display_errors=1 -S localhost:3000`.

Enunciado en el cuaderno de prácticas del módulo (página «Cuaderno de prácticas», sección UD4).
