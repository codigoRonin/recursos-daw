# origenes_aves.py — los avistamientos de la temporada desde tres orígenes: CSV, JSON y SQLite
# Se ejecuta desde esta carpeta: python origenes_aves.py
import csv
import json
import sqlite3
from datetime import date

# ── (a) el censo antiguo: lo exportó una hoja de cálculo hace años y no abre ──
with open("datos/censo_2019.csv", encoding="utf-8", newline="") as fichero:
    censo = list(csv.DictReader(fichero))
print(f"Censo antiguo: {len(censo)} especies; la primera es {censo[0]['especie']}")

# ── (b) el CSV de la temporada: todo llega como texto ──
with open("datos/avistamientos.csv", encoding="utf-8", newline="") as fichero:
    avistamientos = list(csv.DictReader(fichero))
print(f"{len(avistamientos)} avistamientos leídos; columnas: {list(avistamientos[0].keys())}")
print("Tipo de ejemplares tal como llega:", type(avistamientos[0]["ejemplares"]))
# convierte aquí ejemplares a entero y fecha a date, y escribe el listado entre dos fechas

# ── (c) los dos JSON: diccionarios para traducir códigos a nombres y seleccionar ──
with open("datos/puntos.json", encoding="utf-8") as fichero:
    red = json.load(fichero)
with open("datos/especies.json", encoding="utf-8") as fichero:
    catalogo = json.load(fichero)
print("Puntos de la red:", len(red["puntos"]), "| especies del catálogo:", len(catalogo["especies"]))

# ── (d) la base de datos: una tabla y una consulta con filtro y orden ──
conexion = sqlite3.connect("avistamientos.db")
cursor = conexion.cursor()
cursor.execute("DROP TABLE IF EXISTS avistamiento")
cursor.execute("""
    CREATE TABLE avistamiento (
        id INTEGER PRIMARY KEY,
        fecha TEXT NOT NULL,
        punto_id TEXT NOT NULL,
        especie TEXT NOT NULL,
        ejemplares INTEGER NOT NULL,
        observador TEXT NOT NULL
    )
""")
# carga aquí las filas con executemany y escribe la consulta
conexion.commit()
conexion.close()
