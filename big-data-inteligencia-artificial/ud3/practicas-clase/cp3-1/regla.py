"""CP3.1 · La regla que se busca sola. Se ejecuta desde cp3-1/: python regla.py"""
import pandas as pd
from sklearn.linear_model import LinearRegression

mini = pd.read_csv("datos/mini_jornadas.csv")
j = pd.read_csv("datos/jornadas.csv")

print("── (b) dos reglas a mano, sobre las cinco primeras jornadas ──")
cinco = mini.head(5)
for multiplicador in [2, 3]:
    error = (cinco["especies"] - multiplicador * cinco["duracion"]).abs().mean()
    print(f"especies = {multiplicador} × horas → error medio {error:.2f}")

print("── (c) las dos reglas y la búsqueda, sobre las 300 jornadas ──")
# Tarea (c): el error medio de las dos reglas sobre j, y el bucle que busca el mejor multiplicador.

print("── (c) la recta que calcula fit ──")
recta = LinearRegression().fit(j[["duracion_h"]], j["especies"])
error_recta = (j["especies"] - recta.predict(j[["duracion_h"]])).abs().mean()
print(f"especies = {recta.coef_[0]:.2f} × horas + {recta.intercept_:.2f} → error medio {error_recta:.2f}")
