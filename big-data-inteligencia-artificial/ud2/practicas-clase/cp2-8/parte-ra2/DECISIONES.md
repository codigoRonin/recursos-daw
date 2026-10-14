# DECISIONES — registro de limpieza de la primavera de 2026

## Protección de datos
- `avistamientos_primavera.csv` trae una columna que no se trata: ____ (titular del dato: ____). Principio que obliga: ____. Decisión: ____.

## Limpieza (cada cifra sale de preparacion.py)
- Filas en el bruto: ____ → tras retirar ____ duplicadas exactas: ____.
- Centinela −1 en `ejemplares`: ____ filas → ausente.
- Formas distintas de `especie`: ____ → 10.
- Ausentes en la tabla limpia: `ejemplares` ____, `temperatura` ____.

## Comprobación
- `revisar_tabla()` pasa con la tabla limpia y salta con los tres defectos inyectados.
