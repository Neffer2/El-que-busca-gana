<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GANA COMO LOCO | HOME</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v={{ time() }}">
</head>

<body>
    <div class="main-home-container">
        <div class="logo-container-desktop">
            <img src="{{ asset('assets/logo.png') }}" alt="">
        </div>

        <div class="info-container">
            <div class="logo-container">
                <img src="{{ asset('assets/logo.png') }}" alt="">
            </div>
            <div class="como-jugar">
                <img src="{{ asset('assets/como_jugar.png') }}" alt="">
            </div>
            <div class="kit-container">
                @foreach ($premios_data as $premio_data)
                    <div class="kit">
                        <div class="kit-img">
                            <img src="{{ asset('assets/kit_' . $premio_data->id . '.png') }}" alt="">
                        </div>
                        <div class="kit-info">
                            <img src="{{ asset('assets/kit_' . $premio_data->id . '_text.png') }}" alt="">
                            <p>Stock: {{ $premio_data->stock }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="premios-jugador-container">
            <img class="premios-ganados-img" src="{{ asset('assets/premios_ganados_text.png') }}" alt="">
            @foreach ($premios as $premio)
                <div class="premio-ganado">{{ $premio->premio->descripcion }}</div>
            @endforeach
        </div>

    </div>
</body>

</html>