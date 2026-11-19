# CP4.3 · La fila del cuadrante — ficheros de partida

- `cuadrante.php` y `plantillas/cuadrante.php`: el cuadrante de riego de la semana. Funciona; pinta cada fila a mano.
- `mi-turno.php` y `plantillas/mi-turno.php`: los turnos de una parcela (`?ref=H03`). Usa ya un parcial, y falla.
- `plantillas/parciales/turno.php`: el parcial de la fila, con su contrato en la primera línea.
- `plantillas/sin-parcela.php`: la página de la referencia que no existe.
- `plantillas.php`: el fichero del apartado 4 de la unidad, tal cual.
- `utilidades.php`: `zonas_por_ref()`.
- `datos/parcelas.php` y `datos/turnos.php`: las ocho parcelas y los siete turnos de la semana.

Se sirve con PHP Server, con esta carpeta abierta en VS Code (`http://localhost:3000/cuadrante.php`), y se prueba en el navegador: la página, «Ver código fuente» y la pestaña Red. Los errores tienen que verse en la página; si en tu equipo no se ven, lanza el servidor a mano desde esta carpeta con `php -d display_errors=1 -S localhost:3000`.

Enunciado en el cuaderno de prácticas del módulo (página «Cuaderno de prácticas», sección UD4).
