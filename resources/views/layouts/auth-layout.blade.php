<!-- resources/views/layouts/auth-layout.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
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
</body>

</html>