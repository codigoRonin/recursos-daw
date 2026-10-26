# CP3.11 · Simulacro de la unidad — plantilla

Copia esta carpeta entera a tu carpeta de trabajo. Dentro:

- `comprobar-sintaxis.php`: pasa `php -l` a todos los ficheros de una carpeta. Aquí se usa con argumento: **`php comprobar-sintaxis.php simulacro`**.
- `simulacro/arreglos/`: parte 1 (cuatro fragmentos con un fallo de una línea).
- `simulacro/auxiliares.php` y `simulacro/comprueba.php`: parte 2 (cinco funciones; `comprueba.php` no se toca).
- `simulacro/huerto-privado/`: partes 3 y 4 (la zona privada a medias: `puertas.php`, `entrar.php`, `cerrar.php` y el POST de `pedir-riego.php` son tuyos; el resto no se modifica).
- `simulacro/datos/cuentas.json` y `simulacro/datos/parcelas.php`: las ocho cuentas (contraseñas de aula en `simulacro/datos/README.md`) y las ocho parcelas.

Las partes 1, 3 y 4 se sirven desde `simulacro/` con `php -d session.save_path=sesiones -S localhost:8000` (crea antes `simulacro/sesiones/`). Enunciado, tiempos y salidas esperadas en el cuaderno de prácticas del módulo (página «Cuaderno de prácticas», sección UD3).
