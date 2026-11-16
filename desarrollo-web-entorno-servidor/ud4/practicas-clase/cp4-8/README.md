# CP4.8 · El panel, según quién mira — ficheros de partida

- `panel.php` y `plantillas/panel.php`: el panel de la asociación. En el navegador parece que cada perfil ve lo suyo.
- `entrar-como.php`: un atajo de aula para probar el panel con cada perfil (`?perfil=hortelano`, `vocal`, `tesoreria` o `presidencia`; `?perfil=visitante` te deja fuera). No es un inicio de sesión y no se modifica.
- `plantillas.php`: el fichero del apartado 4 de la unidad, tal cual.
- `datos/panel.php`: los avisos, las cuotas pendientes, las incidencias abiertas y la lista de espera.

Se sirve con `php -d display_errors=1 -d html_errors=0 -S localhost:8000` desde esta carpeta y se prueba con `curl` y un tarro de cookies por perfil.

Enunciado en el cuaderno de prácticas del módulo (página «Cuaderno de prácticas», sección UD4).
