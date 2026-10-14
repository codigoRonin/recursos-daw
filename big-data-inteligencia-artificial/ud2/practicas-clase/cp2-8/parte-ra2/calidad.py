# calidad.py — tarea 5 de la Parte RA2. Se ejecuta desde parte-ra2/.
import pandas as pd

from preparacion import preparar, bruto

limpio = preparar(bruto)

# 1. el agregado que pide el enunciado, sobre la tabla limpia


def revisar_tabla(tabla):
    """Aserciones sobre la tabla limpia: sin claves (fecha, punto_id, especie) repetidas, ejemplares entre
    1 y 5000 o ausentes, fechas dentro de la temporada (1/03-31/05/2026), seis puntos. Pasa en silencio
    o lanza AssertionError con un mensaje que diga qué falla."""
    pass


# 2. la comprobación pasa con la tabla limpia y salta con tres defectos inyectados en una copia:
#    una fila con la clave (fecha, punto, especie) de otra, un -1 en ejemplares y una fecha fuera de la temporada
