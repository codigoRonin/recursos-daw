# respuestas_ra1.py — respuestas cerradas de la Parte RA1. Escribe una letra (a, b, c o d) en cada valor.
# No cambies las claves. Se comprueba ejecutando: python respuestas_ra1.py
RESPUESTAS = {
    "t1": "",   # tipado
    "t2": "",   # bloques
    "t3": "",   # entorno virtual
    "t4": "",   # cuaderno
    "t5": "",   # csv.DictReader
    "t6": "",   # modelo preentrenado
    "t7": "",   # tarea 2: el rasgo del lenguaje que hace innecesario el índice
    "t8": "",   # tarea 4: la nota que el modelo clasifica mal
}

if __name__ == "__main__":
    sin_contestar = [clave for clave, valor in RESPUESTAS.items() if valor not in ("a", "b", "c", "d")]
    print("Respuestas:", RESPUESTAS)
    print("Sin contestar o con un valor que no es a/b/c/d:", sin_contestar if sin_contestar else "ninguna")
