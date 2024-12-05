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

            <!-- Celular -->
            <div class="register-form-group">
                <label for="celular" class="register-form-label">Número de celular</label>
                <input id="celular" class="register-form-input" type="text" name="celular" value="{{ old('celular') }}" required/>
                @error('celular')
                    <p class="register-form-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="register-form-group">
                <label for="email" class="register-form-label">Correo Electrónico</label>
                <input id="email" class="register-form-input" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
                @error('email')
                    <p class="register-form-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Sede -->
            <div class="register-form-group">
                <label for="sede" class="register-form-label">Sede</label>
                <select id="sede" class="register-form-input" name="sede" required>
                    <option value="" disabled selected>Seleccione una sede</option>
                    <option value="Sede 1">Sede 1</option>
                    <option value="Sede 2">Sede 2</option>
                    <option value="Sede 3">Sede 3</option>
                </select>
                @error('sede')
                    <p class="register-form-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Canales -->
            <div class="register-form-group">
                <label for="canales" class="register-form-label">Canales</label>
                <select id="canales" class="register-form-input" name="canales" required>
                    <option value="" disabled selected>Seleccione un canal</option>
                    <option value="Canal 1">Canal 1</option>
                    <option value="Canal 2">Canal 2</option>
                    <option value="Canal 3">Canal 3</option>
                </select>
                @error('canales')
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