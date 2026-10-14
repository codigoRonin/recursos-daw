# pruebas_ra1.py — llama a las funciones de cruce.py sobre los datos de primavera. NO SE MODIFICA.
from cruce import cargar_salidas, cargar_puntos, ejemplares_por_habitat, puntos_con_recuento_de

salidas = cargar_salidas("../datos/salidas.csv")
puntos = cargar_puntos("../datos/puntos.json")
print("1.", len(salidas), type(salidas[0]["ejemplares"]).__name__, salidas[0]["especie"])
print("2.", len(puntos), puntos["PUN-03"]["habitat"], puntos["PUN-06"]["localidad"])
por_habitat = ejemplares_por_habitat(salidas, puntos)
for habitat in sorted(por_habitat):
    print(f"3. {habitat:8} {por_habitat[habitat]}")
print("4.", sorted(puntos_con_recuento_de(salidas, 50)))
print("4.", sorted(puntos_con_recuento_de(salidas, 100)))
print("4.", sorted(puntos_con_recuento_de(salidas, 120)))
