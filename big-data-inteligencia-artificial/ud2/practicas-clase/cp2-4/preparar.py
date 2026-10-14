# preparar.py — técnicas sueltas de limpieza, cada una sobre la tabla que la enseña
# Se ejecuta desde esta carpeta: python preparar.py
import numpy as np
import pandas as pd

bruto = pd.read_csv("datos/avistamientos_bruto.csv", parse_dates=["fecha"])
bruto["temperatura"] = bruto["temperatura"].str.replace(",", ".").astype(float)

# ── (a) el centinela: -1 significa «no contado», no «menos uno» ──
print("mínimo de ejemplares antes:", bruto["ejemplares"].min())
bruto[bruto["ejemplares"] == -1]["ejemplares"] = np.nan
print("mínimo de ejemplares después:", bruto["ejemplares"].min())

# ── (b) parejas.csv, (c) serie_hueco.csv y (d) el bruto: debajo ──
