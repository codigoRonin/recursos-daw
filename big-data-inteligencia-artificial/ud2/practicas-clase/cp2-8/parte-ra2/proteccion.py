# proteccion.py — tarea 1 de la Parte RA2. Se ejecuta desde parte-ra2/.
import pandas as pd

RUTA = "../datos/avistamientos_primavera.csv"


def cargar_publicable(ruta):
    """Carga el registro de primavera solo con las columnas que el análisis puede tratar
    (la que no puede tratar no entra en memoria). Escribe tú la lista de columnas."""
    pass


def asegurar_sin_dato_personal(tabla):
    """Lanza AssertionError, con un mensaje, si la columna que no debe tratarse está en la tabla;
    si no está, no hace nada."""
    pass


if __name__ == "__main__":
    tabla = cargar_publicable(RUTA)
    print(tabla.columns.tolist(), tabla.shape)
    asegurar_sin_dato_personal(tabla)
    print("la tabla de trabajo pasa la comprobación")
    con_todo = pd.read_csv(RUTA)
    try:
        asegurar_sin_dato_personal(con_todo)
        print("ERROR: la comprobación no ha saltado")
    except AssertionError as error:
        print("la comprobación salta con el fichero completo:", error)
