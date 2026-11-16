{{-- leer/blade/mercadillo.blade.php — recibe: $dia, $paradas, $destacada (la referencia de la parada del mes) --}}
@extends('base')

@section('rotulo', 'Mercadillo')

@section('contenido')
<!-- Pendiente: Rubén Asín no ha pagado la tasa de su parada -->
<h1>Mercadillo de la cosecha · {{ $dia }}</h1>
<p>Parada del mes: la de la parcela {{ $destacada }}</p>
<ul>
@foreach ($paradas as $parada)
@include('parciales.parada', ['parada' => $parada, 'destacada' => $parada['ref'] === $destacada])
@endforeach
</ul>
@endsection
