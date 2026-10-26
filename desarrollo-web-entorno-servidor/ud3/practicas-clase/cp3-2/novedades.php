<?php
declare(strict_types=1);
// novedades.php — «N anuncios nuevos desde tu última visita»: una cookie guarda la fecha del anuncio más reciente que has visto
$anuncios = require __DIR__ . '/datos/anuncios.php';

// Fecha del anuncio más reciente del tablón (las fechas van como AAAA-MM-DD, así que se comparan como texto)
$masReciente = '';
foreach ($anuncios as $a) {
    if ($a['fecha'] > $masReciente) {
        $masReciente = $a['fecha'];
    }
}

if (isset($_GET['reiniciar'])) {
    // Reiniciar = pedir al navegador que descarte la marca (caducidad en el pasado)
    setcookie('ultima_visita', '', ['expires' => time() - 3600, 'path' => '/']);
    echo "Marca de última visita borrada.\n";
    exit;
}

// Marcamos como vista la fecha del anuncio más reciente; la marca dura 30 días
setcookie('ultima_visita', $masReciente, [
    'expires'  => time() + 30 * 24 * 60 * 60,
    'path'     => '/',
    'httponly' => true,
    'samesite' => 'Lax',
]);

$ultima = $_COOKIE['ultima_visita'] ?? null;   // la marca que el navegador nos ha enviado en ESTA petición

if ($ultima === null) {
    echo "Primera visita: hay " . count($anuncios) . " anuncios en el tablón.\n";
} else {
    $nuevos = [];
    foreach ($anuncios as $a) {
        if ($a['fecha'] > $ultima) {
            $nuevos[] = $a;
        }
    }
    if ($nuevos === []) {
        echo "Desde tu última visita ({$ultima}) no hay anuncios nuevos.\n";
    } else {
        echo "Desde tu última visita ({$ultima}) hay " . count($nuevos) . " anuncios nuevos:\n";
        foreach ($nuevos as $a) {
            echo "- {$a['fecha']} · {$a['titulo']}\n";
        }
    }
}
echo "Marca guardada: {$_COOKIE['ultima_visita']}\n";
