<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        // Retorna la vista de registro
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'gpid' => ['nullable', 'string', 'max:255', 'unique:users'],
            'cedula' => ['required', 'string', 'numeric'],
            'celular' => ['required', 'string', 'numeric'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email'],
            'sede' => ['required', 'string', 'max:255'],
            'canales' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'terms' => ['accepted'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'gpid' => $request->gpid,
            'cedula' => $request->cedula,
            'celular' => $request->celular,
            'email' => $request->email,
            'sede' => $request->sede,
            'canales' => $request->canales,
            'password' => Hash::make($request->password),
            'terms' => $request->has('terms'),
        ]);

        Log::info('User registered: ' . $user->id);

        event(new Registered($user));

        Auth::login($user);

        Log::info('User logged in: ' . $user->id);

        return redirect(RouteServiceProvider::HOME);
    }
}
