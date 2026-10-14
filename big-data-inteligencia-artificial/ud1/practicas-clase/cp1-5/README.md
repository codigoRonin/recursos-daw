# CP1.5 · Un programa que no se cae — ficheros de partida

- `lugares_bandadas.py`: el programa a medias: lee los avistamientos, aplica el modelo a la nota de cada bandada y escribe `lugares_bandadas.csv`. Se cae de tres maneras (tareas a, b y c) y carga el modelo más veces de las necesarias (tarea d).
- `datos/avistamientos.csv`: los 194 avistamientos del otoño de 2025.
- `datos/puntos.json`: los seis puntos de la red (lo usa la tarea e).

Necesita el entorno de la UD1 activo con `es_core_news_sm`. Se ejecuta con `python lugares_bandadas.py datos/avistamientos.csv` desde esta carpeta. Enunciado en el cuaderno de prácticas del módulo (página «Cuaderno de prácticas», sección UD1).
