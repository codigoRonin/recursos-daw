# fichas.py — clases y objetos de la red de observadores (datos de aula, ficticios)
from dataclasses import dataclass

UMBRAL_BANDADA = 50


# ── (c) completa las dos clases: la dataclass del punto y la clase del avistamiento ──

@dataclass
class Punto:
    """Ficha mínima de un punto de observación de la red."""
    codigo: str
    nombre: str
    habitat: str


class Avistamiento:
    """Un avistamiento: una especie contada en un punto, un día, por un observador.

    Atributos:
        especie: nombre común de la especie.
        ejemplares: número de ejemplares contados (0 o más).
        punto: el objeto Punto donde se hizo el recuento.
        fecha: fecha del recuento (texto AAAA-MM-DD).
    """

    def __init__(self, especie, ejemplares, punto, fecha):
        # aquí falta la validación: ejemplares negativo tiene que lanzar ValueError
        self.especie = especie
        self.ejemplares = ejemplares
        self.punto = punto
        self.fecha = fecha

    # es_bandada(), sumar_ejemplares(n) y __str__() se escriben aquí


# ── (d) este comentario y esta docstring están mal puestos: reescríbelos ──
def porcentaje(parte, total):
    """porcentaje"""
    return 100 * parte / total  # divide parte entre total y multiplica por cien


# ── pruebas: no las cambies; cuando las clases estén completas tienen que dar la salida esperada ──
if __name__ == "__main__":
    soto = Punto("PUN-01", "Soto del Arba", "soto")
    grullas = Avistamiento("Grulla común", 170, soto, "2025-10-26")
    print(grullas)
    print("¿Bandada?", grullas.es_bandada())
    azulones = Avistamiento("Ánade azulón", 48, soto, "2025-10-26")
    print(azulones)
    print("¿Bandada?", azulones.es_bandada())
    azulones.sumar_ejemplares(5)           # un segundo recuento del mismo grupo
    print(azulones)
    print("¿Bandada?", azulones.es_bandada())
    help(Avistamiento.sumar_ejemplares)
    try:
        Avistamiento("Garza real", -3, soto, "2025-10-27")
    except ValueError as error:
        print("Error controlado:", error)
    print(soto)
    print(f"Las grullas son el {porcentaje(170, 170 + 53):.2f} % de los ejemplares del día")
