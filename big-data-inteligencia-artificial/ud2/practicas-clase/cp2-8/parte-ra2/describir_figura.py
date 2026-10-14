# describir_figura.py — ayudante DADO: describe con datos lo que hay dibujado en unos ejes de Matplotlib.
# No hay que modificarlo ni entender su interior (usa funciones que la unidad no enseña); se importa:
#     from describir_figura import describir_barras, describir_lineas, describir_histograma
# y se llama con el objeto Axes después de dibujar. Cada función imprime una línea de comprobación.


def _rotulos(ax):
    return f"título: {ax.get_title()!r} · eje x: {ax.get_xlabel()!r} · eje y: {ax.get_ylabel()!r}"


def describir_barras(ax):
    """Número de barras, alturas en el orden dibujado, si van de mayor a menor y si el eje y arranca en 0."""
    alturas = [round(float(p.get_height()), 1) for p in ax.patches]
    etiquetas = [t.get_text() for t in ax.get_xticklabels()]
    descendente = alturas == sorted(alturas, reverse=True)
    desde_cero = ax.get_ylim()[0] <= 0
    print(f"{len(alturas)} barras · alturas {alturas} · etiquetas {etiquetas} · de mayor a menor: {descendente} · eje y desde 0: {desde_cero} · {_rotulos(ax)}")


def describir_lineas(ax):
    """Puntos de la primera línea, si sus x van en orden creciente y si lleva marcador."""
    if not ax.lines:
        print("no hay ninguna línea dibujada")
        return
    linea = ax.lines[0]
    xs = list(linea.get_xdata())
    ys = [round(float(y), 1) for y in linea.get_ydata()]
    cronologico = all(xs[i] <= xs[i + 1] for i in range(len(xs) - 1))
    marcador = linea.get_marker() not in (None, "None", "")
    print(f"{len(xs)} puntos · en orden cronológico: {cronologico} · con marcador: {marcador} · valores {ys} · {_rotulos(ax)}")


def describir_histograma(ax):
    """Número de intervalos y recuento de cada uno."""
    recuentos = [int(p.get_height()) for p in ax.patches]
    print(f"{len(recuentos)} intervalos · recuentos {recuentos} · {_rotulos(ax)}")
