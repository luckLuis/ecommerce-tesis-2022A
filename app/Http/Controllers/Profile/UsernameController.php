<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class UsernameController extends Controller
{
    public function edit()
    {
        return view('profile.show');
    }

    public function update(Request $request)
    {

        $request->validate([      
            'username' => ['required', 'string', 'min:3', 'max:20'],
        ]);


        //$user = $request->user();

        


        $user = Http::withToken('Bearer 136|ig9FBgdhS7A5oz3inqtynziUvidW55oETH8pGfkG')->get('http://ecoshopepn.herokuapp.com/api/updateUsername?',
        [
            'username' =>$request->username,
        ]);

        /*Update the model using Eloquent*/

        
//return $user;

        return back()->with('status', 'Nombre de usuario actualizado correctamente');
    }
 
}