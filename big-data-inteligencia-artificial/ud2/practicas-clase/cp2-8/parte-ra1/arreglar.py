# arreglar.py — tarea 2 de la Parte RA1. Este programa funciona, pero está escrito a la manera de otro
# lenguaje. Reescríbelo de forma idiomática (sin índice manual, sin punto y coma, sin comparar con True,
# con las construcciones de la UD1) manteniendo EXACTAMENTE lo que imprime. Se ejecuta desde parte-ra1/.
import csv;

with open("../datos/salidas.csv", encoding="utf-8", newline="") as fichero:
    salidas = list(csv.DictReader(fichero));

i = 0;
total = 0;
bandadas = 0;
maximo = 0;
especie_maximo = "";
while i < len(salidas):
    fila = salidas[i];
    ejemplares = int(fila["ejemplares"]);
    total = total + ejemplares;
    if (ejemplares >= 50) == True:
        bandadas = bandadas + 1;
    if (ejemplares > maximo) == True:
        maximo = ejemplares;
        especie_maximo = fila["especie"];
    i = i + 1;

puntos = [];
j = 0;
while j < len(salidas):
    if (salidas[j]["punto_id"] in puntos) == False:
        puntos.append(salidas[j]["punto_id"]);
    j = j + 1;
puntos.sort();

print("Salidas: " + str(len(salidas)));
print("Ejemplares en total: " + str(total));
print("Bandadas: " + str(bandadas));
print("Mayor recuento: " + str(maximo) + " de " + especie_maximo);
print("Puntos: " + ", ".join(puntos));
