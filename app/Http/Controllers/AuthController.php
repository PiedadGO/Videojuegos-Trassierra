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

        try {
            //dd($request->all());
            $request->validate([
                'name'     => 'required|string|max:255',
                'email'    => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
                'rol'      => 'required|in:cliente,administrador',
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
                'rol'      => $request->rol,
            ]);

            Auth::login($user); // Inicia sesión automáticamente después del registro

            return redirect()->route('inicio')->with('success', 'Cuenta creada correctamente.');
        } catch (\Exception $e) {
            return redirect()->route('usuario.register')->with('failure', 'Hubo un problema al crear la cuenta. Inténtalo de nuevo.');
        }
    }

    public function register2(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name'     => 'required|string|max:255',
                'email'    => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
                'rol'      => 'required|in:cliente,administrador',
            ],
            [
                //'nombre_del_campo.regla_de_validación' => 'Mensaje personalizado'
                'name.required' => 'El nombre es obligatorio.',
                'name.max' => 'El nombre no puede exceder 255 caracteres.',
                'email.required' => 'El correo electrónico es obligatorio.',
                'email.unique' => 'Ya existe una cuenta registrada con este email.',
                'password.required' => 'La contraseña es obligatoria.',
                'password.min' => 'La contraseña debe tener al menos 6 caracteres.',
                'password.confirmed' => 'Las contraseñas no coinciden.',
                'rol.required' => 'El rol es obligatorio.',
                'rol.in' => 'El rol debe ser cliente o administrador.',
            ]
        );

        $user = User::create([
            'name'  => $validatedData['name'],
            'email'  => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'rol'  => $validatedData['rol'],
        ]);

        Auth::login($user);

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
        } else {
            $user = User::where('email', $request->email)->first();

            if (!$user) {
                return back()->withErrors(['email' => 'No existe ninguna cuenta con ese email.']);
            }

            if (!Hash::check($request->password, $user->password)) {
                return back()->withErrors(['password' => 'Contraseña incorrecta.']);
            }
        }
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
