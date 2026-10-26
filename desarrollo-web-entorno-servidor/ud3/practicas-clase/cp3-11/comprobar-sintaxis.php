<?php
// Pasa «php -l» a todos los ficheros .php de una carpeta (ud3/ si no se indica otra) y dice cuáles fallan.
// Uso, desde la raíz del repositorio:   php comprobar-sintaxis.php            (comprueba ud3/)
//                                       php comprobar-sintaxis.php ud2        (comprueba otra carpeta)
// Funciona igual en Windows y en Mac: solo necesita el PHP con el que ya trabajas.
declare(strict_types=1);

$carpeta = __DIR__ . DIRECTORY_SEPARATOR . ($argv[1] ?? 'ud3');
if (!is_dir($carpeta)) {
    fwrite(STDERR, "No existe la carpeta $carpeta\n");
    exit(2);
}

$ficheros = [];
$recorrido = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($carpeta, FilesystemIterator::SKIP_DOTS));
foreach ($recorrido as $f) {
    if ($f->isFile() && strtolower($f->getExtension()) === 'php') {
        $ficheros[] = $f->getPathname();
    }
}
sort($ficheros);

$fallos = 0;
foreach ($ficheros as $ruta) {
    // La orden va como lista, sin pasar por el intérprete de órdenes: así no depende de las comillas de cada sistema.
    $proceso = proc_open([PHP_BINARY, '-l', $ruta], [1 => ['pipe', 'w'], 2 => ['pipe', 'w']], $tubos);
    if (!is_resource($proceso)) {
        fwrite(STDERR, "No se ha podido ejecutar php -l\n");
        exit(2);
    }
    $texto = stream_get_contents($tubos[1]) . stream_get_contents($tubos[2]);
    fclose($tubos[1]);
    fclose($tubos[2]);
    $codigo = proc_close($proceso);
    $salida = preg_split('/\R/', $texto);
    $nombre = substr($ruta, strlen(__DIR__) + 1);
    if ($codigo === 0) {
        echo "BIEN   $nombre\n";
    } else {
        $fallos++;
        echo "FALLA  $nombre\n";
        foreach ($salida as $linea) {
            if (trim($linea) !== '') {
                echo "       $linea\n";
            }
        }
    }
}

echo "\n" . count($ficheros) . " ficheros comprobados, $fallos con errores de sintaxis.\n";
if (count($ficheros) === 0) {
    echo "No hay ningún fichero .php en la carpeta: ¿has ejecutado la orden desde la raíz del repositorio?\n";
    exit(2);
}
if ($fallos > 0) {
    echo "Corrige los ficheros marcados con FALLA y vuelve a ejecutar la orden antes de tu último commit.\n";
}
exit($fallos > 0 ? 1 : 0);
