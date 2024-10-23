<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GANA COMO LOCO | HOME</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    <div class="main-home-container">

        <div class="info-container">
            <div class="como-jugar">
                <img src="{{ asset('assets/home_como_jugar.png') }}" alt="">
            </div>
            <div class="kit-container">
                <div class="kit">
                    <div class="kit-img">
                        <img src="{{ asset('assets/home_kit_1.png') }}" alt="">
                    </div>
                    <div class="kit-info">
                        <img src="{{ asset('assets/kit_1_text.png') }}" alt="">
                    </div>
                </div>
                <div class="kit">
                    <div class="kit-img">
                        <img src="{{ asset('assets/home_kit_2.png') }}" alt="">
                    </div>
                    <div class="kit-info">
                        <img src="{{ asset('assets/kit_2_text.png') }}" alt="">
                    </div>
                </div>
                <div class="kit">
                    <div class="kit-img">
                        <img src="{{ asset('assets/home_kit_3.png') }}" alt="">
                    </div>
                    <div class="kit-info">
                        <img src="{{ asset('assets/kit_3_text.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="premios-jugador-container">
            <img class="premios-ganados-img" src=" {{ asset('assets/premios_ganados_text.png') }} " alt="">
            @foreach ($premios as $premio)
                <div class="premio-ganado">{{ $premio->premio->descripcion }}</div>
            @endforeach
        </div>

    </div>
</body>

</html>
