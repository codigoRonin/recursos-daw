# CP3.8 · Enlaces de confirmación de un solo uso — ficheros de partida

- `solicitar.php`: el formulario de solicitud de parcela; anota la solicitud como pendiente y genera el enlace de confirmación.
- `confirmar.php`: comprueba el enlace, lo consume y redirige. Se va de la lengua.
- `datos/parcelas.php`: las ocho parcelas; `datos/pendientes.json`: las solicitudes pendientes (empieza vacío, `[]`; los programas lo escriben).

Se sirve con `php -S localhost:8000` desde esta carpeta y se prueba con `curl -i`.

Enunciado en el cuaderno de prácticas del módulo (página «Cuaderno de prácticas», sección UD3).
