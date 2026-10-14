# explorar.py — mirar antes de tocar: el bruto cargado bien, y las preguntas de la exploración
# Se ejecuta desde esta carpeta: python explorar.py
import pandas as pd

bruto = pd.read_csv("datos/avistamientos_bruto.csv", parse_dates=["fecha"])
bruto["temperatura"] = bruto["temperatura"].str.replace(",", ".").astype(float)
print(bruto.shape)
print(bruto.dtypes)

# ── (a) grandes o fríos: avistamientos de 100 ejemplares o más, o con menos de 5 grados ──
grandes_o_frios = bruto[bruto["ejemplares"] >= 100 or bruto["temperatura"] < 5]
print(len(grandes_o_frios))

# ── (b), (c) y (d) se escriben debajo ──
