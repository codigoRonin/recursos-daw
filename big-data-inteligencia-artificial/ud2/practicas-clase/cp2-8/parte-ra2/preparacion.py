# preparacion.py — tarea 3 de la Parte RA2. Se ejecuta desde parte-ra2/. Parte de la tabla de trabajo
# de la tarea 1 (sin la columna que no se trata) y la deja limpia.
import numpy as np
import pandas as pd

from proteccion import cargar_publicable, RUTA

CANONICO = {"grulla común": "Grulla común", "milano real": "Milano real", "aguilucho lagunero": "Aguilucho lagunero",
            "avutarda común": "Avutarda común", "avutarda comun": "Avutarda común", "ganga ortega": "Ganga ortega",
            "cigüeña blanca": "Cigüeña blanca", "garza real": "Garza real", "ánade azulón": "Ánade azulón",
            "abejaruco europeo": "Abejaruco europeo", "alondra común": "Alondra común"}
RANGOS = {"ejemplares": (1, 5000), "temperatura": (-10, 45)}

bruto = cargar_publicable(RUTA)

# 1. recuentos de la suciedad declarada: duplicadas exactas, centinela -1, ausentes de ejemplares y de
#    temperatura, formas distintas de especie frente a especies canónicas, temperaturas con coma


def preparar(tabla):
    """Devuelve la tabla limpia: sin duplicadas exactas, especie canónica, punto en mayúsculas,
    temperatura numérica, centinela y fuera de rango a ausente. No modifica la tabla recibida."""
    pass


# 2. los cinco efectos comprobables de la tabla limpia (filas, especies distintas, mínimo y máximo de
#    ejemplares, dtype y máximo de temperatura, ausentes por columna) y los puntos
