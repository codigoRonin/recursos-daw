# entidades_notas.py — el modelo preentrenado sobre las notas de campo de la red
# Se ejecuta desde esta carpeta, con el entorno de la UD1 activo: python entidades_notas.py
import csv
import json

import spacy

nlp = spacy.load("es_cores_news_sm")        # el modelo en español que instalaste en la UD1

with open("datos/notas_campo.csv", encoding="utf-8", newline="") as fichero:
    notas = list(csv.DictReader(fichero))
with open("datos/puntos.json", encoding="utf-8") as fichero:
    red = json.load(fichero)
localidades = {p["localidad"] for p in red["puntos"]}
print(f"{len(notas)} notas; localidades de la red: {sorted(localidades)}")

# ── (b) la misma nota, escrita de dos formas ──
nota_original = ("Cigüeña blanca sola en el campo de fútbol de Luna. "
                 "Llovía desde el Pirineo y no se veía el monte.")
nota_reescrita = ("Una cigüeña blanca sola en el campo de fútbol de Luna. "
                  "Desde el Pirineo llovía y no se veía el monte.")
for texto in (nota_original, nota_reescrita):
    doc = nlp(texto)
    print([(ent.text, ent.label_) for ent in doc.ents])

# ── (c) escribe aquí lugares_conocidos(doc, localidades) y fuera_de_lista(doc, localidades) ──
