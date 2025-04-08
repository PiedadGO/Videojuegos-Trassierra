<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Muestra el formulario de registro
    public function registerForm()
    {
        return view('auth.register');
    }

    // Procesa el formulario de registro y crea un nuevo usuario
    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            /*
            confirmed
            The field under validation must have a matching field of {field}_confirmation. 
            For example, if the field under validation is password, a matching password_confirmation 
            field must be present in the input.
            */
        ]);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user); // Inicia sesión automáticamente después del registro

        return redirect()->route('inicio')->with('success', 'Cuenta creada correctamente.');
    }

    // Muestra el formulario de inicio de sesión
    public function loginForm()
    {
        return view('auth.login');
    }

    // Procesa el formulario de inicio de sesión
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        /*
        The attempt method accepts an array of key / value pairs as its first argument. 
        The values in the array will be used to find the user in your database table.
        https://laravel.com/docs/11.x/authentication
        */

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Previene ataques de fijación de sesión
            return redirect()->route('inicio')->with('success', 'Has iniciado sesión correctamente.');
        }

        return back()->withErrors([
            'email' => 'Las credenciales no son válidas.',
        ]);
    }

    // Cierra la sesión del usuario actual
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('inicio')->with('success', 'Sesión cerrada correctamente.');
    }
}
