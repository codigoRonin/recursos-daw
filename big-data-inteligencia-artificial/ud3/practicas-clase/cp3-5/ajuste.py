"""CP3.5 · Cinco pliegues y una lotería. Se ejecuta desde cp3-5/: python ajuste.py"""
import pandas as pd
from sklearn.model_selection import train_test_split, cross_val_score, GridSearchCV
from sklearn.tree import DecisionTreeClassifier
from sklearn.preprocessing import OneHotEncoder
from sklearn.compose import ColumnTransformer
from sklearn.pipeline import Pipeline

j = pd.read_csv("datos/jornadas.csv")
posteriores = pd.read_csv("datos/jornadas_posteriores.csv")
numericas = ["mes", "hora_inicio", "duracion_h", "viento_kmh", "observadores"]
categoricas = ["habitat"]
X = j[numericas + categoricas]
y = j["hubo_bandada"]
X_ent, X_pru, y_ent, y_pru = train_test_split(X, y, test_size=0.25, random_state=26, stratify=y)


def arbol_de_bandadas(**opciones):
    """El pipeline de la práctica; las opciones van al árbol."""
    return Pipeline([
        ("pre", ColumnTransformer([("num", "passthrough", numericas),
                                   ("cat", OneHotEncoder(handle_unknown="ignore"), categoricas)])),
        ("clf", DecisionTreeClassifier(random_state=26, **opciones)),
    ])


print("── (a) la búsqueda ──")
rejilla = {
    "max_depth": [2, 3, 4, 6],
    "min_samples_leaf": [1, 5, 15],
    "class_weight": [None, "balanced"],
}
busqueda = GridSearchCV(arbol_de_bandadas(), rejilla, cv=5, scoring="accuracy")
busqueda.fit(X_ent, y_ent)
print(busqueda.best_params_, round(busqueda.best_score_, 3))

print("── (b) cuántas combinaciones ──")
# Tarea (b): escribe antes tu cuenta; después, cuántas entradas tiene busqueda.cv_results_["mean_test_score"].

print("── (c) dos candidatos, pliegue a pliegue ──")
for profundidad in [3, 6]:
    pliegues = cross_val_score(arbol_de_bandadas(max_depth=profundidad), X_ent, y_ent, cv=5)
    print(profundidad, pliegues.round(3))
# Tarea (c): la media y la desviación, primero a mano y después con .mean() y .std().

print("── (d) elegir mirando la prueba ──")
mejor_en_prueba = 0
for profundidad in [1, 2, 3, 4, 5, 6, 8, 10, None]:
    for hojas in [1, 3, 5, 10, 15]:
        candidato = arbol_de_bandadas(max_depth=profundidad, min_samples_leaf=hojas).fit(X_ent, y_ent)
        en_prueba = candidato.score(X_pru, y_pru)
        if en_prueba > mejor_en_prueba:
            mejor_en_prueba = en_prueba
            elegido_mirando = candidato
            opciones = (profundidad, hojas)
print("45 candidatos medidos en la prueba; el mejor:", opciones, "con", round(mejor_en_prueba, 3))
# Tarea (d): mide `elegido_mirando` y `busqueda.best_estimator_` en la prueba y en las jornadas posteriores.
