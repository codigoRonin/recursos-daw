// avisos.js — se te da escrito: pide los avisos una sola vez y los pinta en la lista; al cambiar de zona repinta sin pedir nada más
const lista = document.getElementById('cartelera');
const cuantos = document.getElementById('cuantos');
const selector = document.getElementById('zona');
let avisos = [];

function pintar() {
    const zona = selector.value;
    const visibles = avisos.filter(a => zona === '' || a.zona === zona || a.zona === 'todas');
    lista.replaceChildren();
    for (const aviso of visibles) {
        const li = document.createElement('li');
        li.textContent = aviso.dia + ' · ' + aviso.asunto;   // textContent: el navegador lo trata como texto, nunca como etiquetas
        lista.append(li);
    }
    cuantos.textContent = String(visibles.length);
}

selector.addEventListener('change', pintar);
fetch('avisos-json.php')
    .then(respuesta => respuesta.json())
    .then(datos => { avisos = datos; pintar(); });
