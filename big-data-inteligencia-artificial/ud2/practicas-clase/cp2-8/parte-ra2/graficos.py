# graficos.py — tarea 4 de la Parte RA2. Se ejecuta desde parte-ra2/ y guarda en figuras/.
import os

import matplotlib.pyplot as plt
import pandas as pd

from describir_figura import describir_barras, describir_lineas
from preparacion import preparar, bruto

limpio = preparar(bruto)
os.makedirs("figuras", exist_ok=True)

# 1. la figura de barras que pide el enunciado, comprobada con describir_barras(ax)

# 2. la figura de líneas que pide el enunciado, comprobada con describir_lineas(ax)
