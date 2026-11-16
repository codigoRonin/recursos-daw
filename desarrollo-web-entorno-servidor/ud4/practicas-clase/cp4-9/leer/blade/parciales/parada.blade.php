{{-- leer/blade/parciales/parada.blade.php — recibe: $parada; opcional: $destacada (bool, por defecto false) --}}
    <li>
        <strong>{{ e($parada['producto']) }}</strong>
        <span>{{ $parada['persona'] }} · parcela {{ $parada['ref'] }} · {{ $parada['kilos'] }} kg</span>
@if ($destacada ?? false)
        <em>Parada del mes</em>
@endif
    </li>
