# CP4.3 · La fila del cuadrante — ficheros de partida

- `cuadrante.php` y `plantillas/cuadrante.php`: el cuadrante de riego de la semana. Funciona; pinta cada fila a mano.
- `mi-turno.php` y `plantillas/mi-turno.php`: los turnos de una parcela (`?ref=H03`). Usa ya un parcial, y falla.
- `plantillas/parciales/turno.php`: el parcial de la fila, con su contrato en la primera línea.
- `plantillas/sin-parcela.php`: la página de la referencia que no existe.
- `plantillas.php`: el fichero del apartado 4 de la unidad, tal cual.
- `utilidades.php`: `zonas_por_ref()`.
- `datos/parcelas.php` y `datos/turnos.php`: las ocho parcelas y los siete turnos de la semana.

Se sirve con `php -d display_errors=1 -d html_errors=0 -S localhost:8000` desde esta carpeta y se prueba con `curl`.

Enunciado en el cuaderno de prácticas del módulo (página «Cuaderno de prácticas», sección UD4).
