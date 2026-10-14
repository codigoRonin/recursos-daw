# exportar.py — las bandadas de la temporada, exportadas a resultados/ y releídas
# Se ejecuta desde esta carpeta: python exportar.py
import os

import pandas as pd

limpio = pd.read_csv("datos/avistamientos_limpio.csv", parse_dates=["fecha"])
os.makedirs("resultados", exist_ok=True)

bandadas = limpio[limpio["ejemplares"] >= 50].sort_values("fecha")[["fecha", "punto_id", "especie", "ejemplares"]]
bandadas.to_csv("resultados/bandadas.csv")
print("escritas:", len(bandadas), "filas,", len(bandadas.columns), "columnas")

releidas = pd.read_csv("resultados/bandadas.csv", parse_dates=["fecha"])
print("releídas:", len(releidas), "filas,", len(releidas.columns), "columnas")
print(releidas.columns.tolist())
print(releidas.head(3))
