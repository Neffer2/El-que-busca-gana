@extends('layouts.auth-layout')

@section('content')
    <div class="form-register-container">
        <h2 class="register-title">Registrarse</h2>
        <form method="POST" action="{{ route('register') }}" class="register-form">
            @csrf

            <!-- Name -->
            <div class="register-form-group">
                <label for="name" class="register-form-label">Nombre</label>
                <input id="name" class="register-form-input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="register-form-error" />
            </div>

            <!-- GPID -->
            <div class="register-form-group">
                <label for="gpid" class="register-form-label">GPID</label>
                <input id="gpid" class="register-form-input" type="text" name="gpid" :value="old('gpid')" required autocomplete="gpid" />
                <x-input-error :messages="$errors->get('gpid')" class="register-form-error" />
            </div>

            <!-- Cedula -->
            <div class="register-form-group">
                <label for="cedula" class="register-form-label">Cédula</label>
                <input id="cedula" class="register-form-input" type="text" name="cedula" :value="old('cedula')" required autocomplete="cedula" />
                <x-input-error :messages="$errors->get('cedula')" class="register-form-error" />
            </div>

            <!-- Email Address -->
            <div class="register-form-group">
                <label for="email" class="register-form-label">Correo Electrónico</label>
                <input id="email" class="register-form-input" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="register-form-error" />
            </div>

            <!-- Password -->
            <div class="register-form-group">
                <label for="password" class="register-form-label">Contraseña</label>
                <input id="password" class="register-form-input" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="register-form-error" />
            </div>

            <!-- Confirm Password -->
            <div class="register-form-group">
                <label for="password_confirmation" class="register-form-label">Confirmar Contraseña</label>
                <input id="password_confirmation" class="register-form-input" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="register-form-error" />
            </div>

            <!-- Terms and Privacy Policy -->
            <div class="register-form-group">
                <label for="terms" class="register-form-remember-label">
                    <input id="terms" type="checkbox" class="register-form-checkbox" name="terms" required>
                    <span class="register-form-checkbox-text">Estoy de acuerdo con el procesamiento de datos y política de privacidad</span>
                </label>
            </div>

            <div class="register-form-group-button">
                <button type="submit" class="register-form-button">Registrarse</button>
            </div>
        </form>
    </div>
@endsection