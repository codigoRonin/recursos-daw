{{-- leer/blade/base.blade.php — el layout: declara las secciones «rotulo» y «contenido» --}}
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>@yield('rotulo') · Asociación de Huertos del Soto</title>
</head>
<body>
<main>
@yield('contenido')
</main>
</body>
</html>
