<?php
declare(strict_types=1);
// avisos-navegador.php — la cartelera pintada EN EL NAVEGADOR: de aquí sale una página sin avisos y un guion que los pide y los pinta
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Cartelera · Asociación de Huertos del Soto</title>
</head>
<body>
<h1>Cartelera</h1>
<p>
    <label for="zona">Zona</label>
    <select id="zona">
        <option value="">Todas</option>
        <option>Ribera</option>
        <option>Eras</option>
        <option>Soto</option>
    </select>
</p>
<p>Avisos a la vista: <span id="cuantos">0</span></p>
<ul id="cartelera">
</ul>
<script src="avisos.js"></script>
</body>
</html>
