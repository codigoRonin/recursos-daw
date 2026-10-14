# calidad.py — seguir la pista a una fila: del bruto al limpio
# Se ejecuta desde esta carpeta: python calidad.py
import pandas as pd

bruto = pd.read_csv("datos/avistamientos_bruto.csv", parse_dates=["fecha"])
bruto["temperatura"] = bruto["temperatura"].str.replace(",", ".").astype(float)
limpio = pd.read_csv("datos/avistamientos_limpio.csv")
print(bruto.shape, limpio.shape)

# semanas de la temporada en la tabla limpia
print(limpio["fecha"].dt.isocalendar().week.min(), limpio["fecha"].dt.isocalendar().week.max())

# ── (b) las cinco pistas: 43, 82, 42, 101 y 127 ──
PISTAS = [43, 82, 42, 101, 127]
