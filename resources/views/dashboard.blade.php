<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EL QUE BUSCA GANA | HOME</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/whatsapp.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/png" href="https://ganacomolococolombia.com/favicon.png">
</head>

<body>
    <div class="main-home-container">
        <div class="logo-container-desktop">
            <a href="/logout"><img src="{{ asset('assets/logo.png') }}" alt=""></a>
        </div>

        <div class="info-container">
            <div class="logo-container">
                <a href="/logout"><img src="{{ asset('assets/logo.png') }}" alt=""></a>
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
                            <img src="{{ asset('assets/kit_' . $premio_data->id . '_texto.png') }}" alt="">
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
    {{-- Botón de Whatsapp --}}
    <a href="https://wa.me/+573133440666" class="whatsapp-button" target="_blank">
        <i id="whatsapp-btn" class="fab fa-whatsapp"></i>
    </a>
</body>

</html>