# figuras.py — tres figuras hechas deprisa sobre la tabla limpia. Las tres engañan.
# Se ejecuta desde esta carpeta: python figuras.py  (guarda las figuras en figuras/)
import os

import matplotlib.pyplot as plt
import pandas as pd

from describir_figura import describir_barras, describir_lineas, describir_histograma

limpio = pd.read_csv("datos/avistamientos_limpio.csv", parse_dates=["fecha"])
os.makedirs("figuras", exist_ok=True)

# ── figura 1: ejemplares por especie, y por punto, en un panel de dos ejes ──
por_especie = limpio.groupby("especie")["ejemplares"].sum()
por_punto = limpio.groupby("punto_id")["ejemplares"].sum()
fig, axes = plt.subplots(1, 2, figsize=(11, 4.5))
axes.bar(por_especie.index, por_especie.values, edgecolor="black")
axes.set_ylim(300, 3300)
axes.set_title("Gráfico 1")
axes.tick_params(axis="x", rotation=60)
axes[1].bar(por_punto.index, por_punto.values, edgecolor="black")
axes[1].set_title("Gráfico 2")
fig.tight_layout()
fig.savefig("figuras/ejemplares.png", dpi=150)
describir_barras(axes[0])
describir_barras(axes[1])

# ── figura 2: la serie de ejemplares a lo largo de la temporada ──
serie = limpio.sort_values("especie")
fig, ax = plt.subplots(figsize=(10, 4))
ax.plot(serie["fecha"], serie["ejemplares"], linewidth=1)
ax.set_title("Serie")
fig.tight_layout()
fig.savefig("figuras/serie.png", dpi=150)
describir_lineas(ax)

# ── figura 3: cómo se reparten los recuentos ──
fig, ax = plt.subplots(figsize=(8, 4))
ax.hist(limpio["ejemplares"].dropna(), bins=3, edgecolor="black")
ax.set_title("Histograma")
fig.tight_layout()
fig.savefig("figuras/reparto.png", dpi=150)
describir_histograma(ax)
