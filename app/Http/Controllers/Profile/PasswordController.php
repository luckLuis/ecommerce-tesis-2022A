<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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

        // Obtiene el usuario desde la petición
        $user = $request->user();

        // Verificar si el password coincide con la del usuario
        if(!$this->checkPassword($request->input('current_password'), $user->password))
        {
            throw ValidationException::withMessages(['current_password' => 'No es su password actual']);
        }

        // Actualiza el nuevo password
        $user->password = Hash::make($request->password);
        // Se guarda en la BDD
        $user->save();
        // Se imprime el mensaje de exito
        return back()->with('status', 'Password update successfully');
    }

    // Función para validar el password del usuario
    public function checkPassword(string $current_password, string $user_password)
    {
        return Hash::check($current_password, $user_password);

    }


}