# CP3.9 · El banco de pruebas de la asamblea — ficheros de partida

- `comprobaciones.sh`: diez comprobaciones con `curl` sobre la votación del CP3.4 y los enlaces del CP3.8. Lo tienes que lanzar con **dos servidores** abiertos, cada uno desde su carpeta resuelta (o de partida, si quieres ver qué caza):
  - en una terminal, en `cp3-4/`: `php -d session.save_path=sesiones -S localhost:8000`
  - en otra, en `cp3-8/`: `php -S localhost:8001`
  - en una tercera, en `cp3-9/`: `bash comprobaciones.sh`
- `volcado.php`: herramienta temporal de depuración; se copia a la carpeta que se quiera mirar y se borra después.

Hace falta `bash` (en Windows, el de Git Bash sirve) y `curl`.

Enunciado en el cuaderno de prácticas del módulo (página «Cuaderno de prácticas», sección UD3).
