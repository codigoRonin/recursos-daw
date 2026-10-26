# CP3.6 · Cambiar la contraseña sin pasar por la web — ficheros de partida

- `deposito.php`: las cuatro funciones que leen y escriben `datos/cuentas.json` (nadie más toca el fichero).
- `cambiar.php`: cambio de contraseña desde el terminal (`php cambiar.php cuenta actual nueva repetida`). Dice que cambia; no cambia.
- `datos/cuentas.json`: las ocho cuentas de la asociación, solo con hashes; las contraseñas de aula, en `datos/README.md`. **Haz una copia del JSON antes de empezar** (`cp datos/cuentas.json datos/cuentas-original.json`): los programas de esta práctica lo escriben.

Todo se ejecuta en el terminal; en esta práctica no hay servidor.

Enunciado en el cuaderno de prácticas del módulo (página «Cuaderno de prácticas», sección UD3).
