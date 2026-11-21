"""CP3.7 · Los errores que no avisan. El modelo del informe ajeno, tal como lo dejó su autor. Se ejecuta desde cp3-7/: python modelo_ajeno.py"""
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.tree import DecisionTreeClassifier
from sklearn.preprocessing import OneHotEncoder
from sklearn.compose import ColumnTransformer
from sklearn.pipeline import Pipeline

numericas = ["mes", "hora_inicio", "duracion_h", "viento_kmh", "observadores"]
categoricas = ["habitat"]


def medir_arbol(tabla):
    """Divide, entrena el árbol del informe y devuelve el modelo, la exactitud en entrenamiento y en prueba,
    y cuántas jornadas de la prueba están también en el entrenamiento."""
    X = tabla[numericas + categoricas]
    y = tabla["hubo_bandada"]
    X_ent, X_pru, y_ent, y_pru = train_test_split(X, y, test_size=0.25, random_state=26, stratify=y)
    modelo = Pipeline([
        ("pre", ColumnTransformer([("num", "passthrough", numericas),
                                   ("cat", OneHotEncoder(handle_unknown="ignore"), categoricas)])),
        ("clf", DecisionTreeClassifier(random_state=26)),
    ]).fit(X_ent, y_ent)
    en_los_dos = tabla.loc[X_pru.index, "jornada_id"].isin(tabla.loc[X_ent.index, "jornada_id"]).sum()
    return modelo, modelo.score(X_ent, y_ent), modelo.score(X_pru, y_pru), len(X_pru), en_los_dos


j = pd.read_csv("datos/jornadas_export.csv")

print("── (a) con qué filas se midió ──")
modelo, en_entrenamiento, en_prueba, filas_prueba, repetidas = medir_arbol(j)
print("exactitud:", round(en_entrenamiento, 3))

print("── (b) las jornadas que están a los dos lados ──")
# Tarea (b): cuenta filas, jornadas distintas y repetidas; mira `repetidas` y `filas_prueba`; quita las repetidas
# ANTES de dividir (medir_arbol recibe la tabla) y vuelve a medir.

print("── (c) la probabilidad de bandada del sábado ──")
sabado = pd.DataFrame([{"mes": 11, "hora_inicio": 8, "duracion_h": 3.0, "viento_kmh": 12, "observadores": 2, "habitat": "pinar"}])
clases = modelo.named_steps["clf"].classes_
probabilidades = modelo.predict_proba(sabado)[0]
print("probabilidad de bandada:", probabilidades[0])
