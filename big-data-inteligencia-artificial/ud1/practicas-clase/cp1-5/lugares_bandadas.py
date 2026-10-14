# lugares_bandadas.py — datos + modelo preentrenado: los lugares que citan las notas de las bandadas
"""Escribe lugares_bandadas.csv: una fila por bandada (50 ejemplares o más) cuya nota de campo
cita algún lugar, con la fecha, la especie, los ejemplares y los lugares que el modelo encuentra.

Uso: python lugares_bandadas.py datos/avistamientos.csv
"""
import csv
import sys

import spacy

UMBRAL_BANDADA = 50


def leer_avistamientos(ruta):
    """Lee el CSV y devuelve la lista de avistamientos con los ejemplares como entero."""
    with open(ruta, encoding="utf-8", newline="") as fichero:
        filas = list(csv.DictReader(fichero))
    for fila in filas:
        fila["ejemplares"] = int(fila["ejemplares"])
    return filas


def lugares_de_la_nota(texto):
    """Entidades LOC de un texto, descartando la palabra suelta que abre una frase."""
    nlp = spacy.load("es_core_news_sm")
    doc = nlp(texto)
    encontrados = []
    for ent in doc.ents:
        if ent.label_ != "LOC":
            continue
        if len(ent) == 1 and ent.start == ent.sent.start:
            continue
        encontrados.append(ent.text)
    return encontrados


def analizar(filas, umbral):
    """Devuelve las filas de salida: bandadas con nota y con algún lugar citado."""
    salida = []
    for fila in filas:
        if fila["ejemplares"] < umbral or not fila["notas"]:
            continue
        citados = lugares_de_la_nota(fila["notas"])
        if citados:
            salida.append({"fecha": fila["fecha"], "especie": fila["especie"],
                           "ejemplares": fila["ejemplares"], "lugares": "; ".join(citados)})
    return salida


def escribir(filas, ruta):
    """Escribe las filas en un CSV con cabecera y devuelve cuántas ha escrito."""
    with open(ruta, "w", encoding="utf-8") as fichero:
        fichero.write("fecha,especie,ejemplares,lugares\n")      # la cabecera, como en cualquier CSV
        for fila in filas:
            fichero.write(f"{fila['fecha']},{fila['especie']},{fila['ejemplares']},{fila['lugares']}\n")
    return len(filas)


def main(ruta, umbral=UMBRAL_BANDADA):
    filas = leer_avistamientos(ruta)
    print("Avistamientos leídos: " + len(filas))
    escritas = escribir(analizar(filas, umbral), "lugares_bandadas.csv")
    print("Filas escritas en lugares_bandadas.csv: " + escritas)


if __name__ == "__main__":
    main(sys.argv[1])
