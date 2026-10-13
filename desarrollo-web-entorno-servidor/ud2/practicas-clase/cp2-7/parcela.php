<?php
declare(strict_types=1);
// parcela.php — la parcela como tipo compuesto

class Parcela {
    public function __construct(
        public string $codigo,
        public string $zona,
        public int $superficie,
        public string $riego,
        public bool $adjudicada,
    ) {}

    public function etiquetaRiego(): string {
        return match ($this->riego) {
            'goteo' => 'riego localizado',
            'manta' => 'riego a manta',
            default => 'tipo de riego sin catalogar',
        };
    }

    public function cuota(): float {
        $importe_base = match (true) {
            $this->superficie <= 50 => 30,
            $this->superficie <= 80 => 45,
            default                 => 60,
        };
        if ($this->riego === 'goteo') {
            $importe_base += 12;
        }
        return $importe_base * 0.9;   // bonificación vecinal del 10 %
    }

    // Aquí va tu método recibo() (tarea b).
}

// Del array de arrays del fichero de datos al array de objetos
$filas = require __DIR__ . '/datos/parcelas.php';
$huerto = [];
foreach ($filas as $f) {
    $huerto[] = new Parcela($f['codigo'], $f['zona'], $f['superficie'], $f['riego'], $f['adjudicada']);
}

foreach ($huerto as $p) {
    echo $p.codigo, ' — ', $p->etiquetaRiego(), ' — ', number_format($p->cuota(), 2, ',', '.'), " €\n";
}
