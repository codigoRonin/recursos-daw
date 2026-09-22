# Big Data e Inteligencia Artificial (AOP1089) — datos de la UD3

Datos **ficticios de aula** para la unidad de aprendizaje automático: los lugares son reales, todo lo demás (viviendas, anuncios, parcelas, socios y contactos) es inventado. Ninguna persona, institución ni empresa real. Los correos usan el dominio reservado `example.org`.

## Hilo de la unidad — portal comarcal de vivienda

- `viviendas.csv` — 320 anuncios de alquiler ya alquilados, con precio mensual, características de la vivienda y días que tardó en alquilarse. Objetivos: `precio_mes` (regresión) y `alquilada_rapido` (clasificación, sí si se alquiló en 30 días o menos). En `estado`, «nuevo» significa a estrenar — edificio reciente o rehabilitación integral — y por eso aparece con cualquier antigüedad. Las columnas `dias_hasta_alquiler` y `visitas_anuncio` **no existen** cuando se publica un anuncio: la unidad explica qué pasa si se usan. `contacto_anunciante` es un dato personal a efectos de la unidad y no se carga.
- `viviendas_nuevas.csv` — 8 anuncios recién publicados, sin precio ni resultado: son los que hay que predecir.

## Actividad evaluativa — cooperativa cerealista comarcal

- `parcelas.csv` — 261 registros de parcelas de la campaña 2025 con suelo, riego, siembra, abonado, lluvia, incidencia de plaga y rendimiento. Objetivos: `rendimiento_kg_ha` (regresión) e `incidencia_plaga` (clasificación). Llega casi limpio: hay un registro duplicado y cuatro valores ausentes en `materia_organica_pct`, a propósito. `contacto_socio` es dato personal y no se carga.
- `parcelas_2026.csv` — 10 parcelas de la campaña 2026, sin rendimiento ni plaga: las que la cooperativa quiere anticipar.

Los ficheros son los de referencia del enunciado: no se modifican; toda transformación se hace en código y se documenta en `DECISIONES.md`.
