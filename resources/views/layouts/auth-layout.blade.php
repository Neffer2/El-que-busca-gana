<!-- resources/views/layouts/auth-layout.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/whatsapp.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Gana como loco</title>

    <!-- Fonts -->
</head>

<body>
    <div class="main-register-login-container">
        <div class="register-logo-container">
            <img src="{{ asset('assets/logo_info.png') }}" alt="Fondo Login Registro">
        </div>
        <div class="register-login-container">
            @yield('content')
        </div>
    </div>

    <!-- Botón de WhatsApp -->
    <a href="https://wa.me/3133440666" class="whatsapp-button" target="_blank">
        <i id="whatsapp-btn" class="fab fa-whatsapp"></i>
    </a>
</body>

</html>