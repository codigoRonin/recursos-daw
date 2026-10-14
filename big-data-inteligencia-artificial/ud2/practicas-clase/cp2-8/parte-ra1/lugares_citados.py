# lugares_citados.py — tarea 4 de la Parte RA1. El modelo preentrenado sobre las notas de primavera.
# Se ejecuta desde parte-ra1/, con el entorno de la UD1 activo (es_core_news_sm ya instalado).
import csv
import json
from collections import Counter

import spacy

nlp = spacy.load("es_core_news_sm")
with open("../datos/notas_primavera.csv", encoding="utf-8", newline="") as fichero:
    notas = list(csv.DictReader(fichero))

# 1. cuenta con un Counter las entidades LOC de todas las notas (el texto de la entidad, tal cual)
# 2. imprime la frase resumen con las tres más citadas
# 3. escribe lugares_primavera.json con las claves fijas: notas, menciones, mas_citados
