<?php
// ficha.php — la ficha de una parcela: tipos, cadenas y comparaciones
$codigo     = 'H06';
$superficie = 120;              // m²
$cuota      = 60.0;             // € al año
$adjudicada = true;
$fecha_renuncia = null;             // sigue adjudicada: no hay fecha de baja
$paraje     = 'Soto de la Peña';

// Bloque 1: radiografía de los tipos
var_dump($codigo, $superficie, $cuota, $adjudicada, $fecha_renuncia);

// Bloque 2: comillas simples, dobles y llaves
echo 'Parcela $codigo en el $paraje', "\n";
echo "Parcela $codigo en el $paraje\n";
$parcela = ['codigo' => 'H06', 'superficie' => 120];
echo "La {$parcela['codigo']} mide {$parcela['superficie']} m²\n";
echo 'Cuota: ' . $cuota . ' € al año', "\n";

// Bloque 3: bytes y caracteres
echo strlen($paraje), ' / ', mb_strlen($paraje), "\n";

// Bloque 4: formato español para dinero
echo 'Cuota anual: ', number_format($cuota, 2, ',', '.'), " €\n";

// Bloque 5: buscar un código entre los de la lista de espera
// Los códigos antiguos tenían un cero delante: la 010 y la 10 son parcelas distintas.
$lista_espera = ['010', '10', '12'];
$buscado = '10';
foreach ($lista_espera as $c) {
    if ($c == $buscado) {
        echo "Encontrada en la lista de espera: $c\n";
    }
}
