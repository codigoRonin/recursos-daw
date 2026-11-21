"""CP3.8 · El modelo que nadie puede repetir. El script ajeno, tal como llegó. Se ejecuta desde cp3-8/: python guardar_modelo.py"""
import joblib
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression
from sklearn.preprocessing import OneHotEncoder
from sklearn.compose import ColumnTransformer
from sklearn.pipeline import Pipeline

numericas = ["duracion_h", "observadores", "viento_kmh"]
categoricas = ["habitat", "nubosidad"]

j = pd.read_csv("datos/jornadas.csv")
X = j[numericas + categoricas]
y = j["especies"]
X_ent, X_pru, y_ent, y_pru = train_test_split(X, y, test_size=0.25)
modelo = Pipeline([
    ("pre", ColumnTransformer([("num", "passthrough", numericas),
                               ("cat", OneHotEncoder(handle_unknown="ignore"), categoricas)])),
    ("reg", LinearRegression()),
]).fit(X_ent, y_ent)
print("filas:", len(j), "| entrenamiento:", len(X_ent), "| prueba:", len(X_pru))
print("R²:", round(modelo.score(X_ent, y_ent), 3))

joblib.dump(modelo.named_steps["reg"], "modelos/especies.joblib")

recuperado = joblib.load("modelos/especies.joblib")
print("guardado:", type(recuperado).__name__, recuperado.predict(X_pru.head(3)).round(2))
