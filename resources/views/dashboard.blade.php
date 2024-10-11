<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>GANA COMO LOCO</title>
</head>
<body>
    <div class="confetti"></div>
    <div id="game-container"></div>

    <script type="module" src="{{ asset('src/phaser.min.js') }}"></script>
    <script type="module" src="{{ asset('src/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tsparticles/confetti@3.0.3/tsparticles.confetti.bundle.min.js"></script>0
    <script src="{{ asset('/src/tools/confetti.js') }}"></script>
</body>
</html>
