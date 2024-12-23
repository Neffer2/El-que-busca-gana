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

        .main-reset-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('/assets/fondo_login_registro.jpg');
            background-size: cover;
            background-position: center;
        }

        .container {
            max-width: 400px;
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
            padding: 1rem 1rem;
            background: radial-gradient(circle, #3cb7ba 10%, #216466 90%);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }

        .primary-button:hover {
            background-color: #0054a4;
        }
    </style>

    <div class="main-reset-container">
        <div class="container">
            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <div>
                    <label for="email" class="input-label">{{ __('Correo Electrónico') }}</label>
                    <input id="email" class="text-input mt-1" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="input-error mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label for="password" class="input-label">{{ __('Contraseña') }}</label>
                    <input id="password" class="text-input mt-1" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="input-error mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <label for="password_confirmation" class="input-label">{{ __('Confirmar Contraseña') }}</label>
                    <input id="password_confirmation" class="text-input mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="input-error mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="primary-button">
                        {{ __('Restablecer Contraseña') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>