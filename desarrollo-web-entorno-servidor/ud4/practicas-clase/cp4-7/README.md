# CP4.7 · El panel del día — ficheros de partida

- `panel.php` y `plantillas/panel.php`: el panel del día. Con el supuesto `normal` sale bien; con los otros dos, no.
- `datos/supuestos/normal.php`, `averia.php` y `vacio.php`: tres días distintos. Se eligen con `?supuesto=`; no hace falta editar ningún fichero de datos.
- `plantillas.php`: el fichero del apartado 4 de la unidad, tal cual.
- `datos/parcelas.php` y `datos/hortelanos.php`: las ocho parcelas y quién lleva cada una, para la tarea desde cero.

Se sirve con `php -d display_errors=1 -d html_errors=0 -S localhost:8000` desde esta carpeta y se prueba con `curl`.

Enunciado en el cuaderno de prácticas del módulo (página «Cuaderno de prácticas», sección UD4).
