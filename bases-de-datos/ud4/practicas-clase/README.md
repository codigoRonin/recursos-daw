# Cuaderno de prácticas · UD4 — base de datos de partida

Ficheros de partida de las prácticas de clase de la UD4 del módulo 0484, Bases de Datos (no evaluables). Los enunciados están en la página «Cuaderno de prácticas» de los apuntes del módulo; aquí solo viven los guiones con los que se trabaja.

| Fichero | Qué es |
|---|---|
| `transporte.sql` | Guion que crea la base de datos `transporte` (el servicio comarcal de transporte a demanda de las Cinco Villas) con sus ocho tablas y sus datos. Sirve para **todas** las prácticas de la unidad |
| `validaciones.sql` | Guion que añade a esa base de datos la tabla `validaciones`, un histórico inventado de 200.000 validaciones de billete. Solo lo usa la práctica CP4.10, y necesita que `transporte.sql` esté ya cargado |

## Cómo se usa

1. Abre `transporte.sql` y copia todo su contenido (en GitHub, el botón «Copy raw file»; o descarga el fichero y ábrelo desde MySQL Workbench).
2. Pégalo en una pestaña de consulta de Workbench y ejecútalo entero, sin seleccionar nada.
3. Comprueba la carga con `SHOW TABLES;`: tienen que salir ocho tablas.

Los dos guiones se pueden ejecutar tantas veces como haga falta. `transporte.sql` deja cada vez las ocho tablas como al principio (y borra la tabla `validaciones`, si existía); `validaciones.sql` deja su tabla recién creada, sin más índice que el de su clave primaria. Si una práctica te pide volver al estado inicial, vuelve a ejecutar el guion que corresponda.

## Sobre los datos

Datos de aula, ficticios: los municipios son reales; las rutas, las paradas, los vehículos, las personas, los viajes y las solicitudes son inventados y no corresponden a ningún servicio ni a nadie real. Hay valores ausentes a propósito (viajeros sin municipio, viajes sin vehículo, solicitudes sin valoración): descubrirlos y tratarlos bien es parte de las prácticas. Codificación UTF-8, fin de línea `\n`.

Las soluciones no están aquí: se corrigen en clase y después se publican en el Classroom del módulo.
