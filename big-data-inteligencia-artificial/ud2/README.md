# Datos de la UD2 — Big Data e Inteligencia Artificial (AOP1089)

Conjuntos de datos **ficticios de aula**, generados con estructura de exportación de un portal de datos abiertos. Los topónimos son reales; las estaciones, los edificios, las lecturas, los avisos y los contactos son inventados y no corresponden a ninguna persona, institución ni empresa real. Los ficheros contienen **suciedad deliberada** (valores ausentes, duplicados, centinelas, formatos mezclados): limpiarla es parte de la unidad.

| Fichero | Contenido | Uso |
|---|---|---|
| `calidad_aire.csv` | Lecturas diarias de NO2, PM10, O3 (µg/m³) y temperatura (°C) de cuatro estaciones, abril–junio de 2026 | Hilo de la teoría (apartados 2 a 7) |
| `estaciones.json` | Ficha de las cuatro estaciones: identificador, localidad, tipo y coordenadas | Cruce con las lecturas (apartado 4) |
| `reportes_olores.csv` | Treinta avisos ciudadanos sobre episodios de humo, olor o polvo, con datos de contacto ficticios | Protección de datos (apartados 1 y 4) |
| `consumos.csv` | Consumo eléctrico mensual de seis edificios públicos durante 2025 | Actividad evaluativa final |
| `edificios.json` | Ficha de los seis edificios: identificador, nombre, localidad, tipo y superficie | Actividad evaluativa final |

Codificación UTF-8, separador coma, fin de línea `\n`. Los correos usan el dominio reservado `example.org`.
