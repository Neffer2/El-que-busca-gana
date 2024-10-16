<div>
    @assets
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @endassets

    <div id="game-container"></div>

    @script
        <script>
            if (screen.width <= 900){
                $wire.setDevice('mobile');
            } else {
                $wire.setDevice('desktop');
            }
        </script> 

        @if ($device == 'desktop')
            <script type="module" src="{{ asset('src/phaser.min.js') }}"></script>
            <script type="module" src="{{ asset('src/main.js') }}"></script>
            <script src="https://cdn.jsdelivr.net/npm/@tsparticles/confetti@3.0.3/tsparticles.confetti.bundle.min.js"></script>
            <script src="{{ asset('/src/tools/confetti.js') }}"></script>
        @endif
    @endscript
</div>
