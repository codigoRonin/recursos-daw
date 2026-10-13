# CP2.11 · Simulacro de la unidad — plantilla

Copia esta carpeta entera a tu carpeta de trabajo. Dentro:

- `comprobar-sintaxis.php`: pasa `php -l` a todos los ficheros de una carpeta. Aquí se usa con argumento, porque la carpeta no se llama `ud3`: **`php comprobar-sintaxis.php simulacro`**.
- `simulacro/arreglos/`: parte 1 (cuatro fragmentos con un fallo de una línea).
- `simulacro/huerto.php` y `simulacro/pruebas.php`: parte 2 (cinco funciones; `pruebas.php` no se toca).
- `simulacro/tabla.php`: parte 3 (listado con filtro `?minimo=`).
- `simulacro/lectura.php`: parte 4 (formulario de lectura del contador).
- `simulacro/datos/parcelas.php`: las 8 parcelas.

Las partes 3 y 4 se sirven desde `simulacro/` con `php -S localhost:8000`. Enunciado, tiempos y salidas esperadas en el cuaderno de prácticas del módulo (página «Cuaderno de prácticas», sección UD2).
