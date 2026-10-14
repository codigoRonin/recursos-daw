# primeros_pasos.py — los doce avistamientos de la última semana de octubre, en el propio programa
# (datos de aula, ficticios; la red de observadores anota especie, ejemplares y punto)
UMBRAL_BANDADA = 50          # constante: un avistamiento de 50 ejemplares o más es una bandada

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

# ── (c) una línea por avistamiento: especie alineada, ejemplares y porcentaje sobre el total ──
total = 0
for a in avistamientos:
    total += a["ejemplares"]

for a in avistamientos:
    porcentaje = 100 * a["ejemplares"] / total
    if a["ejemplares"] >= UMBRAL_BANDADA:
        marca = "bandada"
    elif a["ejemplares"] >= 10:
        marca = "grupo"
    else:
        marca = "pocos"
   print(f"{a['especie']:28}{a['ejemplares']:5}  {porcentaje:.2f} %  {marca}")

print(f"Total de ejemplares: {total}")
