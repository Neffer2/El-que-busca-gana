<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}?v={{ time() }}">
    <title>El que busca gana</title>

    <!-- Fonts -->


</head>

<body>
    <div class="main-register-login-container">
        <div class="logo-container">
            <img src="{{ asset('assets/logo_info.png') }}" alt="Fondo Login Registro">
        </div>
        <div class="register-login-container">
            @include('auth.login')
        </div>
    </div>
</body>

</html>
