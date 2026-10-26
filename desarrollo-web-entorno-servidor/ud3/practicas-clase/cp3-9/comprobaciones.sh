#!/usr/bin/env bash
# comprobaciones.sh — banco de pruebas de la votación (CP3.4, servida en :8000) y de los enlaces de confirmación (CP3.8, en :8001)
# Uso: bash comprobaciones.sh   (desde la carpeta cp3-9, con los dos servidores lanzados desde sus carpetas resueltas)

V=http://localhost:8000
E=http://localhost:8001
T=tarro.txt

paso() { echo "== $1"; }
ok()   { echo "   OK    $1"; }
fallo(){ echo "   FALLO $1"; }

paso "1. El recuento, sin haber votado, dice 0 de 4"
curl -s -c $T -b $T $V/recuento.php | grep -q "0 de 4" && ok "0 de 4" || fallo "esperaba «0 de 4»"

paso "2. Votar responde 302 a recuento.php y sin cuerpo"
R=$(curl -s -i -c $T -b $T -d 'propuesta=2&voto=si' $V/votar.php)
echo "$R" | grep -q "^HTTP/1.1 302" && ok "302" || fallo "no es 302"
echo "$R" | grep -q "^Location: recuento.php" && ok "Location: recuento.php" || fallo "sin Location"
[ -z "$(echo "$R" | sed '1,/^\r$/d')" ] && ok "sin cuerpo" || fallo "el 302 lleva cuerpo"

paso "3. El aviso aparece en el primer GET"
curl -s -c $T -b $T $V/recuento.php | grep -q 'class="aviso"' && ok "aviso presente" || fallo "sin aviso"

paso "4. El aviso NO aparece en el segundo GET"
curl -s -c $T -b $T $V/recuento.php | grep -q 'class="aviso"' && fallo "el aviso se repite" || ok "aviso consumido"

paso "5. Un segundo voto a la misma propuesta no suma papeletas"
curl -s -c $T -b $T -d 'propuesta=2&voto=no' $V/votar.php > /dev/null
curl -s -c $T -b $T $V/recuento.php | grep -q "1 de 4" && ok "sigue 1 de 4" || fallo "esperaba «1 de 4»"

paso "6. Pedir votar.php con GET redirige"
curl -s -i $V/votar.php | grep -q "^HTTP/1.1 302" && ok "302" || fallo "no es 302"

paso "7. Solicitar una parcela libre devuelve un enlace con 32 hexadecimales"
ENLACE=$(curl -s -d 'contacto=teresa.anso@example.org&parcela=H02' $E/solicitar.php | grep -o 'confirmar.php?t=[0-9a-f]*' | head -1)
TOKEN=${ENLACE#confirmar.php?t=}
[ ${#TOKEN} -eq 32 ] && ok "token de 32" || fallo "token: «$TOKEN»"

paso "8. Un enlace inventado se rechaza con 403"
curl -s -i "$E/confirmar.php?t=abc" | grep -q "^HTTP/1.1 403" && ok "403" || fallo "no es 403"

paso "9. El enlace bueno confirma: 302 a solicitar.php?hecho=1 y sin cuerpo"
R=$(curl -s -i "$E/confirmar.php?t=$TOKEN")
echo "$R" | grep -q "^Location: solicitar.php?hecho=1" && ok "Location" || fallo "sin Location"
[ -z "$(echo "$R" | sed '1,/^\r$/d')" ] && ok "sin cuerpo" || fallo "el 302 lleva cuerpo"

paso "10. El mismo enlace, usado por segunda vez, ya no vale"
curl -s -i "$E/confirmar.php?t=$TOKEN" | grep -q "^HTTP/1.1 403" && ok "403: un solo uso" || fallo "el enlace se reutiliza"
