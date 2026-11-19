# Ficheros de partida — DWES UD4 (recursos-daw/desarrollo-web-entorno-servidor/ud4/)

La UD4 no empieza de cero: parte de la **zona privada del Club de Montaña Os Ibones** tal como quedó al final de la UD3. La carpeta `partida/` trae esos ficheros por si alguno no te quedó completo. Son los que imprime la UD3, sin ningún cambio. El club y sus datos son **ficticios**: ninguna persona, institución ni empresa real; correos en `example.org`.

**Cuaderno de prácticas.** La carpeta `practicas-clase/` contiene los ficheros de partida de las prácticas de clase de la UD4 (no evaluables), una carpeta por práctica (`cp4-1`, `cp4-2`…) con su `README.md`. Trabajan sobre otro caso, la Asociación de Huertos del Soto, y no se copian a tu carpeta `ud4/`. Los enunciados están en la página «Cuaderno de prácticas» de los apuntes del módulo; las soluciones se publican en Classroom después de corregir cada práctica en clase.

## Qué copiar a tu carpeta `ud4/`

Los nueve guiones y la carpeta `datos/` que pide la portada de la unidad:

| Fichero | Qué es |
|---|---|
| `sesion.php` | El arranque de sesión endurecido: sustituye a `session_start()` en toda la zona privada |
| `auth.php` | Las dos puertas de la zona privada: quién eres y qué puedes hacer |
| `csrf.php` | El token de los formularios: un secreto por sesión que el formulario devuelve y el servidor comprueba |
| `almacen.php` | Dónde viven los usuarios: el fichero fijo de `datos/` más las altas que se registren |
| `login.php` | El inicio de sesión |
| `logout.php` | El cierre de sesión |
| `mi-ficha.php` | La ficha de cualquier usuario autenticado |
| `mis-salidas.php` | Las salidas a la vista, solo para monitores y administración |
| `gestion-usuarios.php` | La lista de usuarios, solo para administración |
| `datos/salidas.php` | Las doce salidas del calendario de otoño (el mismo fichero que en `ud2/`) |
| `datos/usuarios.php` | Los ocho usuarios del club, solo con el hash de su contraseña (el mismo fichero que en `ud3/`) |

Copia la carpeta `datos/` entera, con ese nombre: los guiones cargan sus ficheros con `__DIR__ . '/datos/…'`.

## Los otros cuatro guiones

Completan la zona de la UD3. La portada no pide copiarlos al empezar:

| Fichero | Qué es |
|---|---|
| `registro.php` | El alta de un socio nuevo. El E30 lo revisa en tu proyecto de la UD3 |
| `calendario.php` | El calendario de la UD3, con su mensaje de un solo uso. En la UD4 escribes uno nuevo en el apartado 3 |
| `inscribir.php` | El guion de inscripción de la UD3, tal como lo imprime su apartado 4. No lo copies para esta unidad: el apartado 8 enseña el `inscribir.php` que lo sustituye, con su puerta y su token |
| `baja.php` | El formulario de baja de una salida, del apartado 8 de la UD3. Esta unidad no lo usa |

## Contraseñas de aula

Las contraseñas **no** están en los ficheros (solo su hash). Son las de la UD3:

| Colectivo | Usuarios | Contraseña |
|---|---|---|
| Socios del club | `lucia.ramos`, `jorge.aisa`, `marta.gil`, `pablo.lobera`, `nuria.sanz` | `ibones2026` |
| Monitores del club | `carlos.mur`, `elena.pueyo` | `monitor2026` |
| Administración del club | `junta` | `junta2026` |

## Cómo comprobar que has copiado bien

Con la raíz de tu repositorio abierta en VS Code y PHP Server lanzado (portada de la unidad, «Entorno de trabajo»), abre una ventana de incógnito de Chrome, con la pestaña Red a la vista, y pide `http://localhost:3000/ud4/mi-ficha.php`. Acabas en el formulario de inicio de sesión, y la fila de `mi-ficha.php` dice por qué:

```
Red › mi-ficha.php › Encabezados de respuesta
HTTP/1.1 302 Found
Location: login.php
```

Sin sesión, la ficha te manda al inicio de sesión: la puerta de la UD3 sigue en su sitio. A partir de ahí, sigue la unidad.
