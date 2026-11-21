# Ficha del modelo — especies por jornada (red de observadores)

## 1. Pregunta que responde
Cuántas especies distintas se anotarán en una jornada de censo, para decidir a cuáles conviene llevar a los socios nuevos.

## 2. Datos de entrenamiento
`jornadas.csv`, 320 jornadas de censo de tres temporadas.

## 3. Columnas de entrada
Duración, observadores, viento y temperatura (numéricas); hábitat y nubosidad (categóricas).

## 4. Columnas excluidas
`ejemplares` y `hubo_bandada`: no se conocen antes de salir.

## 5. División y semilla
75 % para entrenar y 25 % para probar, con la semilla 26.

## 6. Algoritmo
Regresión lineal dentro de un pipeline, con las categóricas codificadas.

## 7. Métricas
R² de 0,84 en prueba.

## 8. Limitaciones conocidas
Ninguna.

## 9. Entorno
scikit-learn 1.4.

## 10. Reproducir
`python guardar_modelo.py` vuelve a generar `modelos/especies.joblib` con estas mismas cifras.
