# recuentos.py — funciones y estructuras de almacenamiento sobre los doce avistamientos
# de la última semana de octubre (datos de aula, ficticios)
avistamientos = [
    {"fecha": "2025-10-20", "punto": "PUN-02", "especie": "Aguilucho lagunero", "ejemplares": 4},
    {"fecha": "2025-10-20", "punto": "PUN-02", "especie": "Grulla común", "ejemplares": 278},
    {"fecha": "2025-10-20", "punto": "PUN-02", "especie": "Ánade azulón", "ejemplares": 47},
    {"fecha": "2025-10-21", "punto": "PUN-03", "especie": "Avutarda común", "ejemplares": 30},
    {"fecha": "2025-10-21", "punto": "PUN-03", "especie": "Cigüeña blanca", "ejemplares": 10},
    {"fecha": "2025-10-21", "punto": "PUN-03", "especie": "Grulla común", "ejemplares": 45},
    {"fecha": "2025-10-21", "punto": "PUN-03", "especie": "Milano real", "ejemplares": 7},
    {"fecha": "2025-10-26", "punto": "PUN-01", "especie": "Aguilucho lagunero", "ejemplares": 4},
    {"fecha": "2025-10-26", "punto": "PUN-01", "especie": "Grulla común", "ejemplares": 170},
    {"fecha": "2025-10-26", "punto": "PUN-01", "especie": "Ánade azulón", "ejemplares": 48},
    {"fecha": "2025-10-27", "punto": "PUN-01", "especie": "Aguilucho lagunero", "ejemplares": 2},
    {"fecha": "2025-10-27", "punto": "PUN-01", "especie": "Cigüeña blanca", "ejemplares": 21},
]


def especies_por_punto(avistamientos):
    """Devuelve {punto: lista de especies vistas en ese punto, sin repetir}."""
    por_punto = {}
    for a in avistamientos:
        lista = por_punto.setdefault(a["punto"], [])
        if a["especie"] not in lista:
            lista.append(a["especie"])
    return por_punto


def puntos_visitados(avistamientos):
    """Devuelve el conjunto de códigos de punto que aparecen en los avistamientos."""
    visitados = {a["punto"] for a in avistamientos}
    return visitados


# ── (a) el programa se para aquí: lee el mensaje de abajo arriba ──
for punto, especies in sorted(especies_por_punto(avistamientos).items()):
    print(f"{punto}: {sorted(especies)}")

print("Puntos visitados esta semana:", sorted(visitados))

# ── (b) escribe aquí especies_en_todos_los_puntos() y primera_y_ultima() ──
