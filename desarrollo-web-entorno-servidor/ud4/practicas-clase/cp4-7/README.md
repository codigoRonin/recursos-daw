# CP4.7 · El panel del día — ficheros de partida

- `panel.php` y `plantillas/panel.php`: el panel del día. Con el supuesto `normal` sale bien; con los otros dos, no.
- `datos/supuestos/normal.php`, `averia.php` y `vacio.php`: tres días distintos. Se eligen con `?supuesto=`; no hace falta editar ningún fichero de datos.
- `plantillas.php`: el fichero del apartado 4 de la unidad, tal cual.
- `datos/parcelas.php` y `datos/hortelanos.php`: las ocho parcelas y quién lleva cada una, para la tarea desde cero.

Se sirve con PHP Server, con esta carpeta abierta en VS Code (`http://localhost:3000/panel.php?supuesto=normal`), y se prueba en el navegador: la página, «Ver código fuente» y la pestaña Red. Los errores tienen que verse en la página; si en tu equipo no se ven, lanza el servidor a mano desde esta carpeta con `php -d display_errors=1 -S localhost:3000`.

Enunciado en el cuaderno de prácticas del módulo (página «Cuaderno de prácticas», sección UD4).
