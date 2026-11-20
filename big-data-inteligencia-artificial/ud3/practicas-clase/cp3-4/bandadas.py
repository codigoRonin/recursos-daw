"""CP3.4 · Seguir una jornada por el árbol. Se ejecuta desde cp3-4/: python bandadas.py"""
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.tree import DecisionTreeClassifier, export_text
from sklearn.preprocessing import OneHotEncoder
from sklearn.compose import ColumnTransformer
from sklearn.pipeline import Pipeline
from sklearn.metrics import confusion_matrix

j = pd.read_csv("datos/jornadas.csv")
numericas = ["mes", "hora_inicio", "duracion_h", "viento_kmh", "observadores"]
categoricas = ["habitat"]
X = j[numericas + categoricas]
y = j["hubo_bandada"]
X_ent, X_pru, y_ent, y_pru = train_test_split(X, y, test_size=0.25, random_state=26, stratify=y)
modelo = Pipeline([
    ("pre", ColumnTransformer([("num", "passthrough", numericas),
                               ("cat", OneHotEncoder(handle_unknown="ignore"), categoricas)])),
    ("clf", DecisionTreeClassifier(max_depth=3, random_state=26)),
]).fit(X_ent, y_ent)
clf = modelo.named_steps["clf"]
pre = modelo.named_steps["pre"]

print("── (a) la matriz y la sensibilidad de «sí» ──")
pred = modelo.predict(X_pru)
m = confusion_matrix(y_pru, pred, labels=["sí", "no"])
print(m)
print("sensibilidad de «sí»:", round(m[1][1] / (m[1][0] + m[1][1]), 2))

print("── (b) el árbol ──")
print(clf.classes_)
print(export_text(clf, feature_names=list(pre.get_feature_names_out()), decimals=1, show_weights=True))

print("── (b) cinco jornadas, comprobadas ──")
cinco = pd.read_csv("datos/cinco_jornadas.csv")
# Tarea (b): después de bajarlas a mano, añade a `cinco` la predicción, la probabilidad de «sí», la hoja y sus ejemplos.

print("── (c) la primera pregunta de un árbol, sobre doce jornadas ──")
doce = pd.read_csv("datos/doce_jornadas.csv")
preguntas = ["octubre_o_noviembre", "con_agua", "viento_fuerte"]
tocon = DecisionTreeClassifier(max_depth=1, random_state=26).fit(doce[preguntas], doce["hubo_bandada"])
# Tarea (c): cuenta primero a mano; después quita la almohadilla de la línea siguiente y compara.
# print(export_text(tocon, feature_names=preguntas, decimals=1, show_weights=True))

print("── (d) tres clasificadores para las mismas 75 jornadas ──")
matrices = {"A": [[39, 10], [8, 18]], "B": [[47, 2], [16, 10]], "C": [[30, 19], [2, 24]]}
# Tarea (d): tus cuentas a mano van en papel; aquí puedes comprobarlas.
