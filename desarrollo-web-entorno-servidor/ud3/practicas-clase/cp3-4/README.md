# CP3.4 · Cabeceras que llegan tarde — ficheros de partida

- `votar.php`: procesa la papeleta (POST con `propuesta` y `voto`) y redirige al recuento.
- `recuento.php`: muestra el aviso del último voto, tus papeletas y un formulario por propuesta.
- `parciales/encabezado.php`: cabecera común en HTML; `parciales/utilidades.php`: funciones comunes en PHP puro.
- `datos/propuestas.php`: las cuatro propuestas de la asamblea; `datos/parcelas.php`: las ocho parcelas (para la tarea desde cero).

Se sirve con `php -S localhost:8000` desde esta carpeta y se prueba con `curl -i`, un tarro de cookies y también en el terminal (`php votar.php`), donde los avisos no se esconden.

Enunciado en el cuaderno de prácticas del módulo (página «Cuaderno de prácticas», sección UD3).
