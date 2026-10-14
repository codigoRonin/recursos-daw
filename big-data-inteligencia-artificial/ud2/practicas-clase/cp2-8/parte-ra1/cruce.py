# cruce.py — tarea 3 de la Parte RA1. Cuatro funciones SIN pandas (listas, diccionarios y conjuntos
# de la UD1). pruebas_ra1.py las llama y NO se modifica. Escribe el cuerpo de cada una.
import csv
import json


def cargar_salidas(ruta):
    """Lee el CSV de salidas y devuelve una lista de diccionarios con `ejemplares` como entero."""
    pass


def cargar_puntos(ruta):
    """Lee el JSON de la red y devuelve un diccionario {id del punto: diccionario del punto}."""
    pass


def ejemplares_por_habitat(salidas, puntos):
    """Cruza cada salida con su punto por `punto_id` y devuelve {hábitat: suma de ejemplares},
    agrupando en un diccionario (sin pandas)."""
    pass


def puntos_con_recuento_de(salidas, umbral):
    """Conjunto de códigos de punto con algún avistamiento de `umbral` ejemplares o más, con una comprensión."""
    pass
