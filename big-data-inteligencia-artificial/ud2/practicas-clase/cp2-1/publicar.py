# publicar.py — el script con el que alguien de la red «anonimizó» la lista de observadores
# antes de colgarla en la web de la asociación. Se ejecuta desde esta carpeta.
import pandas as pd

obs = pd.read_csv("datos/observadores.csv")
print(obs.columns.tolist(), obs.shape)

# quitamos el correo y ya se puede publicar
publicable = obs[["observador_id", "nombre", "edad", "localidad"]]
print("Correos retirados:", obs["Correo"].nunique())
publicable.to_csv("publicable.csv", index=False)
print("Escrito publicable.csv con", len(publicable), "filas")
