# CP3.1 · Tres peticiones, ninguna memoria — ficheros de partida

- `contador-turnos.php`: PHP puro, se sirve con `php -S localhost:8000` y se pide con `curl -i` (también se puede ejecutar en el terminal con `php contador-turnos.php`).
- `anuncios-zona.php`: el tablón filtrado por zona; la zona llega por GET (`?zona=Ribera`) o por el campo oculto del formulario (POST). Se sirve desde esta carpeta.
- `datos/anuncios.php`: los ocho anuncios del tablón (devuelve el array).

Enunciado en el cuaderno de prácticas del módulo (página «Cuaderno de prácticas», sección UD3).
