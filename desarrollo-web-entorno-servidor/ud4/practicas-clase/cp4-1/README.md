# CP4.1 · Dos carteleras — ficheros de partida

- `avisos-servidor.php`: la cartelera de avisos pintada en el servidor; admite `?zona=`.
- `avisos-navegador.php`: la misma cartelera pintada en el navegador por `avisos.js`, que pide los datos a `avisos-json.php`.
- `avisos.js`: se te da escrito; no hay que modificarlo.
- `datos/avisos.php`: los seis avisos de la semana.

Se sirve con `php -S localhost:8000` desde esta carpeta. Se prueba con `curl` y, después, con el navegador y su pestaña Red.

Enunciado en el cuaderno de prácticas del módulo (página «Cuaderno de prácticas», sección UD4).
