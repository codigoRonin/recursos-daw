"""CP3.3 · Una recta, a mano. Se ejecuta desde cp3-3/: python recta.py"""
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression
from sklearn.preprocessing import OneHotEncoder
from sklearn.compose import ColumnTransformer
from sklearn.pipeline import Pipeline

numericas = ["duracion_h", "observadores", "viento_kmh"]
categoricas = ["habitat"]


def recta_de(numericas):
    """El pipeline de la práctica: las numéricas pasan tal cual y el hábitat se codifica."""
    return Pipeline([
        ("pre", ColumnTransformer([("num", "passthrough", numericas),
                                   ("cat", OneHotEncoder(handle_unknown="ignore"), categoricas)])),
        ("reg", LinearRegression()),
    ])


print("── (a) entrenar con las 270 jornadas revisadas ──")
j = pd.read_csv("datos/jornadas.csv")
X = j[numericas + categoricas]
y = j["especies"]
X = X.head(270)                      # las 30 últimas están sin revisar
X_ent, X_pru, y_ent, y_pru = train_test_split(X, y, test_size=0.25, random_state=26)
modelo = recta_de(numericas).fit(X_ent, y_ent)
print(X_ent.shape, X_pru.shape, round(modelo.score(X_pru, y_pru), 3))

print("── (b) los coeficientes y tres predicciones ──")
nombres = modelo.named_steps["pre"].get_feature_names_out()
coeficientes = pd.Series(modelo.named_steps["reg"].coef_, index=nombres).round(3)
print(coeficientes.to_string())
print("término independiente", round(modelo.named_steps["reg"].intercept_, 3))
# Tarea (b): después de calcular las tres a mano, compruébalas aquí con predict sobre datos/tres_jornadas.csv.

print("── (c) la duración, en minutos ──")
# Tarea (c): columna duracion_min, el mismo pipeline con ella en vez de duracion_h, y las tres comprobaciones.

print("── (d) seis jornadas de prueba ──")
seis = pd.DataFrame({"real": y_pru.head(6), "predicho": modelo.predict(X_pru.head(6)).round(1)})
print(seis.to_string())
# Tarea (d): tus cuentas a mano van en papel; aquí, la comprobación y el disparate.
