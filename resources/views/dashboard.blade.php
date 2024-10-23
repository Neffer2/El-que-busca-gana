<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GANA COMO LOCO | HOME</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    @foreach ($premios as $premio)
        - {{ $premio->premio->descripcion }}
        <br>
    @endforeach
    HOME

</body>
</html>
