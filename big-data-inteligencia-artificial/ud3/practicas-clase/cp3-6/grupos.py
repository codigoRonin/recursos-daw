"""CP3.6 · K-medias con lápiz. Se ejecuta desde cp3-6/: python grupos.py"""
import pandas as pd
from sklearn.cluster import KMeans

j = pd.read_csv("datos/jornadas.csv")
ocho = pd.read_csv("datos/ocho_jornadas.csv")

print("── (a) dos grupos con las 300 jornadas ──")
columnas = ["duracion_h", "especies", "habitat"]
grupos = KMeans(n_clusters=2, n_init=10, random_state=26).fit(j[columnas])
print(pd.Series(grupos.labels_).value_counts().sort_index().to_dict())

print("── (b) comprobación con la librería ──")
# Tarea (b): haz las vueltas a mano; después añade a `ocho` una columna `grupo` con tu reparto final (0 o 1 por jornada)
# y quita la almohadilla de las dos líneas siguientes.
# libreria = KMeans(n_clusters=2, n_init=10, random_state=26).fit(ocho[columnas])
# print(pd.crosstab(ocho["grupo"], libreria.labels_))

print("── (c) tres jornadas, sin escalar y escaladas ──")
tres = pd.DataFrame({"duracion_h": [2.0, 4.0, 2.0], "ejemplares": [100, 110, 140]}, index=["A", "B", "C"])
desviacion = j[["duracion_h", "ejemplares"]].std().round(2)
print(desviacion.to_dict())
# Tarea (c): las cuentas van en papel; aquí puedes comprobarlas.

print("── (d) la inercia con cada k, sobre las ocho jornadas ──")
anterior = None
for k in range(1, 9):
    inercia = KMeans(n_clusters=k, n_init=10, random_state=26).fit(ocho[columnas]).inertia_
    baja = "" if anterior is None else f"  baja {anterior - inercia:.2f}"
    print(f"k = {k}: inercia {inercia:.2f}{baja}")
    anterior = inercia
