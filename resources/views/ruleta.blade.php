<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EL QUE BUSCA GANA</title>
    <link rel="stylesheet" href="{{ asset('css/ruleta-device.css') }}?v={{ time() }}">
    <link rel="icon" type="image/png" href="https://ganacomolococolombia.com/favicon.png">
</head>
<body>
    <div id="game-container-desk"></div>
    <div id="game-container-mobile"></div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script type="module" src="{{ asset('src/phaser.min.js') }}"></script>
    <script type="module" src="{{ asset('src/desk/main.js') }}"></script>

    <script type="module" src="{{ asset('src/phaser.min.js') }}"></script>
    <script type="module" src="{{ asset('src/mobile/main.js') }}"></script>

    <script type="module" src="{{ asset('src/mobile/tools/confetti.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tsparticles/confetti@3.0.3/tsparticles.confetti.bundle.min.js"></script>
</body>
</html>
