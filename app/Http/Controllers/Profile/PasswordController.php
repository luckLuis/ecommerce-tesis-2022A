<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class PasswordController extends Controller
{
    // Función para actualizar el password del usuario
    public function update(Request $request)
    {


        // Sección de validaciones
        $request->validate([
            'current_password' => ['required', 'string', 'max:255'],

            'password' => [
                'required',
                'string',
                 Password::min(6)->mixedCase()->numbers()->symbols(),
                // https://laravel.com/docs/8.x/validation#rule-confirmed
                'confirmed',
                'max:255'
            ],
        ]);

        $password = Http::withToken('106|mkVeYOaqqdyIgIGICICyGvsvAyptVo00t4CdiySz')->get('http://ecoshopepn.herokuapp.com/api/password?',[
            'current_password'=> $request -> current_password,
            'password' => $request->password,
            'password_confirmation' => $request->password_confirmation
        ]);



        // Se imprime el mensaje de exito
        return back()->with('status', 'Contraseña actualizada completamente!');
    }

    // Función para validar el password del usuario
    public function checkPassword(string $current_password, string $user_password)
    {
        return Hash::check($current_password, $user_password);

    }


}