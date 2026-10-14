# tipos.py — tres cargas del mismo fichero bruto y lo que pandas cree de cada columna
# Se ejecuta desde esta carpeta: python tipos.py
import pandas as pd

RUTA = "datos/avistamientos_bruto.csv"

sin_opciones = pd.read_csv(RUTA)
print("── carga 1: sin opciones ──")
print(sin_opciones.dtypes)
print(sin_opciones.shape)

con_decimal = pd.read_csv(RUTA, decimal=",")
print("── carga 2: con decimal=',' ──")
print(con_decimal.dtypes)

con_fechas = pd.read_csv(RUTA, parse_dates=["fecha"])
print("── carga 3: con parse_dates ──")
print(con_fechas.dtypes)

# la temperatura, a número, columna a columna
con_fechas["temperatura"] = con_fechas["temperatura"].astype(float)
print(con_fechas["temperatura"].describe().round(1))
