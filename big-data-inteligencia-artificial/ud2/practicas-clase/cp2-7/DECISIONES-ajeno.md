# DECISIONES — registro de limpieza del otoño de 2025 (escrito por otro analista de la red)

## Limpieza de `avistamientos_bruto.csv`
1. 199 filas en el bruto → 194 tras retirar 5 duplicadas exactas.
2. `especie`: 15 formas de escritura → 10, por clave (espacios, mayúsculas) y diccionario canónico (tilde).
3. Centinela −1 en `ejemplares`: 6 filas → ausente.
4. Fuera de rango: un recuento de 40 000 ejemplares (id 101) y una temperatura de 85,0 grados (id 59) → ausente.
5. Ausentes en la tabla limpia: `ejemplares` 8, `temperatura` 9.
6. `punto_id`: 4 filas en minúscula → mayúsculas; 6 puntos distintos.
7. Bandadas (50 ejemplares o más) en la temporada: 41.
8. Las temperaturas vacías corresponden a días en que el termómetro del observador estaba estropeado.
