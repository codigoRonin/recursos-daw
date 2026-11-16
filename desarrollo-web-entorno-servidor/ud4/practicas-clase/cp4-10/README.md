# CP4.10 · Lo que la lista no ve — ficheros de partida

Una aplicación pequeña de la asociación, ya repartida en carpetas. Solo se sirve `web/`.

- `web/avisos.php`, `web/parcelas.php` y `web/normas.php`: los tres guiones de página. `web/datos/` trae los avisos y las ocho parcelas.
- `comun/utilidades.php`: `datos_de()`, `zona_pedida()` y `parcelas_de()`.
- `plantillas/`: el layout, una plantilla por página y `parciales/enlace.php`, el enlace del menú.
- `plantillas.php`: el fichero del apartado 4 de la unidad, tal cual.

Se sirve desde esta carpeta, diciéndole al servidor cuál es la suya, y se prueba con `curl` y `grep`:

```
php -d display_errors=1 -d html_errors=0 -S localhost:8000 -t web
```

Enunciado en el cuaderno de prácticas del módulo (página «Cuaderno de prácticas», sección UD4).
