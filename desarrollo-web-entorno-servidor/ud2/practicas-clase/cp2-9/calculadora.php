<?php
declare(strict_types=1);
// calculadora.php — cuánto queda por pagar si te das de alta a mitad de año

// Cuota anual por tramos (sin suplementos ni bonificación: esta calculadora es orientativa)
function cuota_orientativa(int $superficie): int {
    if ($superficie <= 50) {
        return 30;
    }
    if ($superficie <= 80) {
        return 45;
    }
    return 60;
}

// Importe que queda por pagar: la cuota se prorratea por los meses que faltan hasta diciembre, el de alta incluido
function importe_prorrateado(int $cuota, int $mes_alta): float {
    return $cuota * (13 - $mes_alta) / 12;
}

$metodo = $_SERVER['REQUEST_METHOD'];
$mes_get = $_GET['mes'] ?? '';
$mes_valido = filter_var($mes_get, FILTER_VALIDATE_INT);
if ($mes_valido !== false && $mes_valido < 1) {
    $mes_valido = false;
}
if ($mes_valido !== false && $mes_valido > 12) {
    $mes_valido = false;
}
?>
<h1>Calculadora de alta</h1>
<?php if (isset($_GET['mes'])): ?>
<?php if ($mes_valido !== false): ?>
    <p>Alta en el mes <?= $mes_valido ?> con una parcela de 60 m²: quedan por pagar
       <?= number_format(importe_prorrateado(cuota_orientativa(60), $mes_valido), 2, ',', '.') ?> € este año.</p>
<?php else: ?>
    <p>Alta en el mes <?= $mes_get ?>: el mes tiene que ser un número entero del 1 al 12.</p>
<?php endif; ?>
<?php endif; ?>

<?php if ($metodo === 'POST'): ?>
<?php
    // Aquí va el cálculo del formulario (tarea c): recoge superficie y mes, valida y calcula.
?>
<?php else: ?>
    <form action="" method="post">
        <label>Superficie (m²): <input type="text" name="superficie"></label>
        <label>Mes de alta (1-12): <input type="text" name="mes"></label>
        <button type="submit">Calcular</button>
    </form>
<?php endif; ?>
