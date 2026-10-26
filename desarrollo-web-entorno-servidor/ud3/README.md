# Datos de aula — DWES UD3 (recursos-daw/desarrollo-web-entorno-servidor/ud3/)

Ficheros de datos **ficticios** de la unidad 3. Ninguna persona, institución ni empresa real; correos en `example.org`.

| Fichero | Contenido | Se carga con |
|---|---|---|
| `usuarios.php` | 8 usuarios del Club de Montaña Os Ibones (5 socios, 2 monitores, administración), solo hashes | `$usuarios = require __DIR__ . '/datos/usuarios.php';` |
| `usuarios.sql` | La misma tabla (mismos 8 usuarios y mismos hashes) para MySQL/MariaDB — Apartado 9 | `mysql --default-character-set=utf8mb4 -u club -p club < usuarios.sql` |
| `usuarios-escuela.php` | 10 usuarios de la Escuela Comarcal de Música Val d'Onsella (6 alumnado, 3 profesorado, secretaría), con especialidad — AE | `require` |
| `cabinas.php` | 6 cabinas de estudio con familia y franjas — AE | `require` |

El calendario `salidas.php` de la UD2 se reutiliza tal cual (carpeta `ud2/`).

**Cuaderno de prácticas.** La carpeta `practicas-clase/` contiene los ficheros de partida de las prácticas de clase de la UD3 (no evaluables), una carpeta por práctica (`cp3-1` … `cp3-11`) con su `README.md`. Los enunciados están en la página «Cuaderno de prácticas» de los apuntes del módulo; las soluciones se publican en Classroom después de corregir cada práctica en clase.

## Contraseñas de aula

Las contraseñas **no** están en los ficheros (solo su hash). Para las pruebas de clase:

| Colectivo | Usuarios | Contraseña |
|---|---|---|
| Socios del club | `lucia.ramos`, `jorge.aisa`, `marta.gil`, `pablo.lobera`, `nuria.sanz` | `ibones2026` |
| Monitores del club | `carlos.mur`, `elena.pueyo` | `monitor2026` |
| Administración del club | `junta` | `junta2026` |
| Alumnado de la escuela | `ines.bercero`, `hugo.lasala`, `aroa.maestro`, `dario.foncea`, `leire.arbues`, `unai.sierra` | `escuela2026` |
| Profesorado de la escuela | `sofia.longas`, `mateo.uriol`, `clara.ezpeleta` | `profe2026` |
| Secretaría de la escuela | `secretaria` | `secre2026` |

Dos socios comparten contraseña a propósito: sus hashes son distintos (sal aleatoria), y eso se explica en el Apartado 5.

## Notas

- Cargar `usuarios.sql` con el cliente en UTF-8 (`--default-character-set=utf8mb4`); si no, los acentos de `nombre` pueden guardarse doblados.
- Los hashes se generaron con `password_hash(…, PASSWORD_DEFAULT)` a coste 10. En intérpretes con un coste por defecto mayor, `password_needs_rehash` devuelve `true`: es lo esperado y se trabaja en el E15.
- Si se regeneran los hashes, recotejar que todas las contraseñas de esta tabla validan (`password_verify`) antes de publicar.
