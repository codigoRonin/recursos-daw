"""CP3.2 · Lo que entra y lo que sale. Se ejecuta desde cp3-2/: python entradas.py"""
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression
from sklearn.preprocessing import OneHotEncoder
from sklearn.compose import ColumnTransformer

j = pd.read_csv("datos/jornadas.csv")
numericas = ["mes", "hora_inicio", "duracion_h", "temperatura", "viento_kmh", "observadores"]
categoricas = ["punto_id", "habitat", "nubosidad"]

print("── (a) una recta con una sola columna ──")
X = j["duracion_h"]
y = j["especies"]
recta = LinearRegression().fit(X, y)
print(recta.predict(X.head(3)).round(2))

print("── (b) las cuatro piezas de la división ──")
X = j[numericas + categoricas]
y = j["hubo_bandada"]
# Tarea (b): las formas con test_size 0.2 y 0.25, y los «sí» de la prueba sin y con stratify.
X_ent, X_pru, y_ent, y_pru = train_test_split(X, y, test_size=0.25, random_state=26, stratify=y)

print("── (c) cuántas columnas salen del preprocesado ──")
pre = ColumnTransformer([
    ("num", "passthrough", numericas),
    ("cat", OneHotEncoder(handle_unknown="ignore", sparse_output=False), categoricas),
])
# Tarea (c): nunique() de las categóricas, tu cuenta, y después fit y la forma de lo transformado.
pre.fit(X_ent)

print("── (d) una jornada en un punto y un hábitat que no existían ──")
nueva = pd.DataFrame([{"mes": 4, "hora_inicio": 8, "duracion_h": 2.0, "temperatura": 13.5, "viento_kmh": 10,
                       "observadores": 2, "punto_id": "PUN-07", "habitat": "carrizal", "nubosidad": "nubes"}])
fila = pd.DataFrame(pre.transform(nueva), columns=pre.get_feature_names_out())
print(fila[[c for c in fila.columns if "punto_id" in c]].to_string(index=False))
print(fila[[c for c in fila.columns if "habitat" in c or "nubosidad" in c]].to_string(index=False))
