<x-guest-layout>
    <style>
        
        @font-face {
            font-family: 'MaisonNeueBold';
            src: url('../fonts/FontsFree-Net-Maison-Neue-Bold.ttf') format('truetype');
        }

        @font-face {
            font-family: 'MaisonNeueExtendedExtraBold';
            src: url('../fonts/MaisonNeueExtended-ExtraBold.otf') format('opentype');
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'MaisonNeueBold', sans-serif;

        }

        .main-forgot-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('/assets/fondo_login_registro.jpg');
            background-size: cover;
            background-position: center;
        }


        .container {
            width: 45%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .text-gray {
            color: #4a4a4a;
        }

        .text-sm {
            font-size: 0.875rem;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .input-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .text-input {
            width: 100%;
            padding: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 0.5rem;
        }

        .input-error {
            color: red;
            margin-top: 0.5rem;
        }

        .flex {
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        .mt-1 {
            margin-top: 0.25rem;
        }

        .mt-2 {
            margin-top: 0.5rem;
        }

        .mt-4 {
            margin-top: 1rem;
        }

        .primary-button {
            width: 100%;
            padding: 0.5rem 1rem;
            background: radial-gradient(circle, #3cb7ba 10%, #216466 90%);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .primary-button:hover {
            background-color: #0054a4;
        }
    </style>
    <div class="main-forgot-container">
        <div class="container">
            <div class="mb-4 text-sm text-gray">
                {{ __('¿Olvidaste tu contraseña? No hay problema. Solo déjanos saber tu dirección de correo electrónico y te enviaremos un enlace para restablecer tu contraseña que te permitirá elegir una nueva.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <label for="email" class="input-label">{{ __('Email') }}</label>
                    <input id="email" class="text-input mt-1" type="email" name="email" :value="old('email')"
                        required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="input-error mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="primary-button">
                        {{ __('Enviar Enlace de Restablecimiento de Contraseña') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
