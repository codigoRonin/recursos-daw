# CP1.4 · Lo que el modelo cree ver — ficheros de partida

- `entidades_notas.py`: carga el modelo (y se para: tarea a), aplica el modelo a una nota escrita de dos formas (tarea b) y deja el hueco de las dos funciones de la tarea (c).
- `datos/notas_campo.csv`: las veinte notas de campo de la temporada (`id`, `avistamiento_id`, `texto`).
- `datos/puntos.json`: los seis puntos de la red; de aquí salen las localidades.

Necesita el entorno de la UD1 activo con `es_core_news_sm` instalado (`python -m spacy validate` lo lista). Se ejecuta con `python entidades_notas.py` desde esta carpeta. Enunciado en el cuaderno de prácticas del módulo (página «Cuaderno de prácticas», sección UD1).
