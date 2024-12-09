@extends('layouts.auth-layout')

@section('content')
    <div class="form-register-container">
        <h2 class="register-title">Registrarse</h2>
        <form method="POST" action="{{ route('register') }}" class="register-form">
            @csrf

            <!-- Name -->
            <div class="register-form-group">
                <label for="name" class="register-form-label">Nombre Completo</label>
                <input id="name" class="register-form-input" type="text" name="name" value="{{ old('name') }}"
                    required autofocus autocomplete="name" />
                @error('name')
                    <p class="register-form-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- GPID -->
            <div class="register-form-group">
                <label for="gpid" class="register-form-label">GPID (Si aplica)</label>
                <input id="gpid" class="register-form-input" type="text" name="gpid" value="{{ old('gpid') }}"
                    autocomplete="gpid" />
                @error('gpid')
                    <p class="register-form-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Cedula -->
            <div class="register-form-group">
                <label for="cedula" class="register-form-label">Cédula</label>
                <input id="cedula" class="register-form-input" type="text" name="cedula" value="{{ old('cedula') }}"
                    required autocomplete="cedula" />
                @error('cedula')
                    <p class="register-form-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Celular -->
            <div class="register-form-group">
                <label for="celular" class="register-form-label">Número de celular</label>
                <input id="celular" class="register-form-input" type="text" name="celular" value="{{ old('celular') }}"
                    required />
                @error('celular')
                    <p class="register-form-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="register-form-group">
                <label for="email" class="register-form-label">Correo Electrónico (Coorporativo si aplica)</label>
                <input id="email" class="register-form-input" type="email" name="email" value="{{ old('email') }}"
                    required autocomplete="username" />
                @error('email')
                    <p class="register-form-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Sede -->
            <div class="register-form-group">
                <label for="sede" class="register-form-label">Sede (PEC)</label>
                <select id="sede" class="register-form-input" name="sede" required>
                    <option value="" disabled selected>Seleccione una sede</option>
                    <optgroup label="ITAGUI - DC HUB">
                        <option value="ITAGUI - DC HUB">CALLE 27 # 41 - 140 ITAGUI</option>
                    </optgroup>
                    <optgroup label="BARRANQUILLA">
                        <option value="BARRANQUILLA">PARQUE LOGISTICO CALIFORNIA
                            BODEGAS 19-20-21 VIA GALAPA</option>
                    </optgroup>
                    <optgroup label="CALI">
                        <option value="CALI">CRA 6 # 45 - 120 PLAZA LOGISTICA
                            BARRIO SALOMIA</option>
                    </optgroup>
                    <optgroup label="CARTAGENA">
                        <option value="CARTAGENA">Mamonal KM 1 kr 56 No. 7C
                            - 39 CENTRO LOGISTICO BLOCK PORT</option>
                    </optgroup>
                    <optgroup label="PEREIRA">
                        <option value="PEREIRA">CRA 2 NORTE
                            No 1-536 Troncal de Occidente Sector La Alqueria Bod 23-24</option>
                    </optgroup>
                    <optgroup label="MANIZALES">
                        <option value="MANIZALES">ZONA INDUSTRIAL JUANCHITO TERRAZA 10
                            BODEGA 2</option>
                    </optgroup>
                    <optgroup label="IBAGUE">
                        <option value="IBAGUE">Cra 9 # 122 - 68 El salado</option>
                    </optgroup>
                    <optgroup label="BUCARAMANGA">
                        <option value="BUCARAMANGA">KM 7 + 400 ANILLO VIAL EL PALENQUE #
                            22-31</option>
                    </optgroup>
                    <optgroup label="BOGOTA - MONTEVIDEO">
                        <option value="BOGOTA - MONTEVIDEO">CALLE 19 A No 69 - 56</option>
                    </optgroup>
                    <optgroup label="P E C ARMENIA">
                        <option value="P E C ARMENIA">KM 7 VIA EL EDEN CONJUNTO
                            COMERCIAL EL PINAL BOG 5</option>
                    </optgroup>
                    <optgroup label="P E C - SANTA MARTA">
                        <option value="P E C - SANTA MARTA">KM 7 TRONCAL DEL CARIBE CALLE 70 # 12 -
                            418</option>
                    </optgroup>
                    <optgroup label="MONTERIA">
                        <option value="MONTERIA">KM 4 VIA PLANETA RICA
                            CENTRO EMPRESARIAL EL TRINUFO BOG 1</option>
                    </optgroup>
                    <optgroup label="VILLAVICENCIO">
                        <option value="VILLAVICENCIO">CRA 15 ESTE A # 34 - 22 BARRIO COPECAL
                        </option>
                    </optgroup>
                    <optgroup label="NEIVA">
                        <option value="NEIVA">CRA 18 B # 50 - 38</option>
                    </optgroup>
                    <option value="Moderno">Canal Moderno</option>
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
                    <option value="3pd">3pd</option>
                    <option value="dts">Dts</option>
                    <option value="proxi">Proxi</option>
                    <option value="Mayor">Mayor</option>
                    <option value="Moderno">Moderno</option>
                </select>
                @error('canales')
                    <p class="register-form-error">{{ $message }}</p>
                @enderror
            </div>


            <!-- Password -->
            <div class="register-form-group">
                <label for="password" class="register-form-label">Contraseña</label>
                <input id="password" class="register-form-input" type="password" name="password" required
                    autocomplete="new-password" />
                @error('password')
                    <p class="register-form-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="register-form-group">
                <label for="password_confirmation" class="register-form-label">Confirmar Contraseña</label>
                <input id="password_confirmation" class="register-form-input" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
                @error('password_confirmation')
                    <p class="register-form-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Terms and Privacy Policy -->
            <div class="register-form-group">
                <label for="terms" class="register-form-remember-label">
                    <input id="terms" type="checkbox" class="register-form-checkbox" name="terms" required>
                    <a href="{{ asset('assets/legal/tyc-gana-como-loco.pdf') }}" target="_blank"
                        class="register-form-checkbox-text">He leído, entendido y acepto los términos y condiciones del
                        sitio web</a>
                </label>
            </div>

            <div class="register-form-group-button">
                <button type="submit" class="register-form-button">Registrarse</button>
            </div>
        </form>
    </div>
@endsection
