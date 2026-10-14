# respuestas_ra2.py — respuestas cerradas de la Parte RA2. Escribe una letra (a, b, c o d) en cada valor.
# No cambies las claves. Se comprueba ejecutando: python respuestas_ra2.py
RESPUESTAS = {
    "p1": "",   # tarea 1: la columna personal
    "p2": "",   # tarea 1: su titular
    "p3": "",   # tarea 1: el principio
    "p4": "",   # tarea 1: la decisión
    "p5": "",   # tarea 2: fecha
    "p6": "",   # tarea 2: punto_id
    "p7": "",   # tarea 2: ejemplares
    "p8": "",   # tarea 2: temperatura
    "p9": "",   # tarea 2: duracion_h
    "p10": "",  # tarea 2: la herramienta de limpieza
    "p11": "",  # tarea 2: por qué no una hoja de cálculo
    "p12": "",  # tarea 4: gráfico para comparar los seis puntos
    "p13": "",  # tarea 4: gráfico para la relación temperatura-ejemplares
    "p14": "",  # tarea 4: el defecto del gráfico descrito
    "p15": "",  # tarea 5: la causa de la discrepancia
}

if __name__ == "__main__":
    sin_contestar = [clave for clave, valor in RESPUESTAS.items() if valor not in ("a", "b", "c", "d")]
    print("Respuestas:", RESPUESTAS)
    print("Sin contestar o con un valor que no es a/b/c/d:", sin_contestar if sin_contestar else "ninguna")
