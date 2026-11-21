# Modelo de bandadas — informe para la junta de la red

Datos: la exportación de jornadas de censo (`jornadas_export.csv`). Modelo: un árbol de decisión que dice si en una jornada habrá bandada. Código: `modelo_ajeno.py`.

1. El fichero tiene 600 jornadas de censo.
2. El modelo acierta el 100 % de las jornadas.
3. Se probó con el 25 % de las jornadas, que el modelo no había visto.
4. Sin modelo se acertaría la mitad de las veces.
5. Para la jornada del sábado, en el pinar, la probabilidad de bandada es del 100 %.
6. Los observadores con más experiencia detectan más bandadas.

Conclusión: el modelo está listo para decidir a qué jornadas se convoca a los socios.
