# CP4.4 · El boletín, generado — ficheros de partida

- `generar.php`: el guion que genera el boletín. Se ejecuta en el terminal (`php generar.php`) y, tal como viene, falla.
- `plantillas/boletin.php`, `plantillas/normas.php` y `plantillas/libres.php`: el contenido de las tres páginas, cada una con su contrato. Falta el layout: lo escribes tú.
- `plantillas.php`: el fichero del apartado 4 de la unidad, tal cual.
- `comun/utilidades.php`: `dia_largo()`, `guardar_pagina()` y `fichero_de_zona()`.
- `datos/boletin.php`, `datos/avisos.php` y `datos/parcelas.php`: el número y las normas del boletín, los seis avisos y las ocho parcelas.

Las páginas generadas se guardan en `sitio/`, que crea el propio guion. Para verlas servidas, y solo ellas, PHP Server necesita el ajuste `phpserver.relativePath` con el valor `sitio`: lo explica la tarea (d) del enunciado (`http://localhost:3000/boletin.html`).

Enunciado en el cuaderno de prácticas del módulo (página «Cuaderno de prácticas», sección UD4).
