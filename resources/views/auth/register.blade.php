@extends('layouts.auth-layout')

@section('content')
    <div class="form-register-container">
        <h2 class="register-title">Registrarse</h2>
        <form method="POST" action="{{ route('register') }}" class="register-form">
            @csrf

            <!-- Name -->
            <div class="register-form-group">
                <label for="name" class="register-form-label">Nombre Completo</label>
                <input id="name" class="register-form-input" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                @error('name')
                    <p class="register-form-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- GPID -->
            <div class="register-form-group">
                <label for="gpid" class="register-form-label">GPID</label>
                <input id="gpid" class="register-form-input" type="text" name="gpid" value="{{ old('gpid') }}" required autocomplete="gpid" />
                @error('gpid')
                    <p class="register-form-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Cedula -->
            <div class="register-form-group">
                <label for="cedula" class="register-form-label">Cédula</label>
                <input id="cedula" class="register-form-input" type="text" name="cedula" value="{{ old('cedula') }}" required autocomplete="cedula" />
                @error('cedula')
                    <p class="register-form-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="register-form-group">
                <label for="email" class="register-form-label">Correo Electrónico (Corporativo)</label>
                <input id="email" class="register-form-input" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
                @error('email')
                    <p class="register-form-error">{{ $message }}</p>
                @enderror
            </div>

            @livewire('ciudades-component')

            <!-- Address -->
            <div class="register-form-group">
                <label for="address" class="register-form-label">Dirección de entrega de tu premio</label>
                <input id="address" class="register-form-input" type="text" name="address" value="{{ old('address') }}" required autocomplete="address" />
                @error('address')
                    <p class="register-form-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div class="register-form-group">
                <label for="password" class="register-form-label">Contraseña</label>
                <input id="password" class="register-form-input" type="password" name="password" required autocomplete="new-password" />
                @error('password')
                    <p class="register-form-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="register-form-group">
                <label for="password_confirmation" class="register-form-label">Confirmar Contraseña</label>
                <input id="password_confirmation" class="register-form-input" type="password" name="password_confirmation" required autocomplete="new-password" />
                @error('password_confirmation')
                    <p class="register-form-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Terms and Privacy Policy -->
            <div class="register-form-group">
                <label for="terms" class="register-form-remember-label">
                    <input id="terms" type="checkbox" class="register-form-checkbox" name="terms" required>
                    <a href="{{ asset('assets/legal/tyc-gana-como-loco.pdf') }}" target="_blank" class="register-form-checkbox-text">He leído, entendido y acepto los términos y condiciones del sitio web</a>
                </label>
            </div>

            <div class="register-form-group-button">
                <button type="submit" class="register-form-button">Registrarse</button>
            </div>
        </form>
    </div>
@endsection
