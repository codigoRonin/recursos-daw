<?php declare(strict_types=1); // plantillas/calculadora.php — recibe: $valores (ref, minutos, dias), $errores (campo => mensaje), $litros (int, o null si no hay resultado), $dias_posibles ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Calculadora del riego · Asociación de Huertos del Soto</title>
</head>
<body>
<h1>Calculadora del riego</h1>
<form action="calculadora.php" method="get">
    <p>
        <label for="ref">Parcela</label>
        <input type="text" id="ref" name="ref" value="">
    </p>
    <p>
        <label for="minutos">Minutos por riego</label>
        <input type="text" id="minutos" name="minutos" value="">
    </p>
    <p>
        Días de riego:
<?php foreach ($dias_posibles as $dia): ?>
        <label><input type="checkbox" name="dias[]" value="<?= e($dia) ?>"> <?= e($dia) ?></label>
<?php endforeach; ?>
    </p>
    <button type="submit" name="calcular" value="1">Calcular</button>
</form>
</body>
</html>
