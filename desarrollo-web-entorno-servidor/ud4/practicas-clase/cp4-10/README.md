# CP4.10 · Lo que la lista no ve — ficheros de partida

Una aplicación pequeña de la asociación, ya repartida en carpetas. Solo se sirve `web/`.

- `web/avisos.php`, `web/parcelas.php` y `web/normas.php`: los tres guiones de página. `web/datos/` trae los avisos y las ocho parcelas.
- `comun/utilidades.php`: `datos_de()`, `zona_pedida()` y `parcelas_de()`.
- `plantillas/`: el layout, una plantilla por página y `parciales/enlace.php`, el enlace del menú.
- `plantillas.php`: el fichero del apartado 4 de la unidad, tal cual.

Se sirve con PHP Server, con esta carpeta abierta en VS Code. Solo se sirve `web/`: el ajuste viene hecho en `.vscode/settings.json` (`"phpserver.relativePath": "web"`), y es lo mismo que lanzar a mano, desde esta carpeta:

```
php -S localhost:3000 -t web
```

Las direcciones no llevan `web/` (`http://localhost:3000/avisos.php`). Se prueba en el navegador (la página, «Ver código fuente» y la pestaña Red) y, en el terminal, con `grep`.

Enunciado en el cuaderno de prácticas del módulo (página «Cuaderno de prácticas», sección UD4).
